<?php

namespace App\Models;

use App\Models\Activity;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded=[];

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
        ]);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class)->latest();
    }
}
