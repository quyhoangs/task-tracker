<?php

namespace App\Models;

use App\Models\Activity;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class Project extends Model
{
    use HasFactory;

    protected $guarded=[];

    public $old = [];

    public function path()
    {
        return '/projects/' . $this->id;
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($body)
    {
        return $this->tasks()->create($body);
    }

    /**
     * record activity to the project
     *
     * @param  \App\Models\Project $project
     * @return void
     */
    public function recordActivity($description)
    {
        $this->activity()->create([
            'description' => $description,
            'changes' => $this->activityChanges($description)
        ]);
    }

    /**
    * Fetch the changes to the model.
    *
    * @param  string $description
    * @return array|null
    */
    public function activityChanges($description)
    {
        if ($description == 'updated') {
            return [
                'before' => Arr::except(array_diff($this->old, $this->getAttributes()), 'updated_at'),
                'after' => Arr::except($this->getChanges(), 'updated_at')
            ];
        }
    }


    public function activity()
    {
        return $this->hasMany(Activity::class)->latest();
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
