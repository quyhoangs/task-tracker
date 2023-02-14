<?php

namespace App\Observers;

use App\Models\Activity;
use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the project "created" event.
     *
     * @param  \App\Models\Project $project
     * @return void
     */
    /**
     * This code is used to insert a record into the projects table when a new project is created.
     * The function is called by the store method in the ProjectsController class.
     * The $project variable is passed to the function from the store method.
     * The $project variable is an instance of the Project class.
     * When 1 project is created will active 1 record in the activity table.
     */

    public function created(Project $project)
    {
        $this->recordActivity($project,'created');
    }

    /**
     * Handle the project "updated" event.
     *
     * @param  \App\Models\Project $project
     * @return void
     */
    public function updated(Project $project)
    {
        $this->recordActivity($project,'updated');
    }

    protected function recordActivity($project,$type)
    {
        Activity::create([
            'project_id' => $project->id,
            'description' => $type
        ]);
    }
}
