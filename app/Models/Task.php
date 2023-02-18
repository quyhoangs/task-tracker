<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    /*1. protected $guarded = []; means that no field is guarded
      2. protected $guarded = ['*']; means that all field are guarded
      3. protected $guarded = ['field1', 'field2']; means that field1 and field2 are guarded */
    protected $guarded = [];

    //This will tell Laravel to update the updated_at field of the project when a task is added, edited or deleted.
    protected $touches  = ['project'];

    //set the completed attribute to be cast as a boolean
    //This will allow us to use $task->completed instead of $task->completed == 1
    //Khai báo này để khi lấy dữ liệu từ database, Laravel sẽ tự động chuyển đổi dữ liệu sang kiểu boolean
    //Nếu không khai báo, khi lấy dữ liệu từ database, Laravel sẽ trả về dữ liệu kiểu integer (0 hoặc 1) cho trường completed
    protected $casts = ['completed' => 'boolean'];

    //Creating a new task will records project activity
    //Nó cũng là một cách tiếp cận khác để thực hiện việc này, thay vì sử dụng Observer
    protected static function boot()
    {
        parent::boot(); //automatically called when the model is booted up.

        static::created(function ($task) {
            $task->project->recordActivity('created_task');
        });

    }

    /**
     * Mark the task as complete.
     */
    public function complete(){
        $this->update(['completed' => true]);
        $this->project->recordActivity('completed_task');
    }

    /**
     * Mark the task as incomplete.
     */
    public function incomplete(){
        $this->update(['completed' => false]);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function path()
    {
        return '/projects/' . $this->project->id . '/tasks/' . $this->id;
    }
}
