<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\RecordsActivity;

class Project extends Model
{

    use HasFactory,RecordsActivity;

    protected $guarded=[];

    public function path()
    {
        return '/projects/' . $this->id;
    }

    //Model Project
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    //Model Project
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Add a task to the project.
     *
     * @param array $tasks
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function addTasks($tasks)
    {
        return $this->tasks()->createMany($tasks);
    }

    public function addTask($body)
    {
        return $this->tasks()->create($body);
    }

    public function invite(User $user)
    {
        // add member to project
        return $this->members()->attach($user);
    }

    public function members()
    {
        // 1 project has many members (1-n)
        // 1 member can be in many projects (n-n)
        return $this->belongsToMany(User::class,'project_members')->withTimestamps();
    }

    //1 project có thể có nhiều bộ status khác nhau
    //VD : Project A có 1 bộ status Kaban là : Open,To Do,Doing,Done
    // và Project B cũng có thể dùng bộ status Kaban là : Open,To Do,Doing,Done
    public function status()
    {
        //Có thể bỏ tham số thứ 2 (project_id) vì Laravel lấy Model + _id làm khóa ngoại mặc định
        return $this->hasMany(ProjectStatus::class,'project_id');
    }


    /** Dùng để ghi đè phương thức cha Laravel 7 Update
     * xử lý định dạng ngày tháng khác nhau khi so sánh định dạng cũ và định dạng mới
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
