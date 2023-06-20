<?php

namespace App\Http\Controllers\Api\Member;
use App\Http\Controllers\Api\Controller;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    public function store(Project $project)
    {
        $this->authorize('update',$project);

        $attributes = request()->validate(['body' => 'required']);

        $project->addTask($attributes);

        return redirect($project->path());
    }

    public function update(Project $project, Task $task)
    {
        $this->authorize('update', $task->project);

        $task->update(request()->validate(['body' => 'required']));

        request('completed') ? $task->complete() : $task->incomplete();

        return redirect($project->path());
    }
}
