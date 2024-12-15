<?php

namespace App\Observers;

use App\Models\Project;
use App\Models\ProjectStatus;

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
         $project->recordActivity('created_project');

         $statuses = [
             'Custom' => [
                 createStatus(true, 1, 'Open', 'red', false),
                 createStatus(true, 2, 'In Progress', 'yellow', false),
                 createStatus(true, 3, 'Completed', 'green', true)
             ],
             'Content' => [
                 createStatus(false, 1, 'Open', 'red', false),
                 createStatus(false, 2, 'Ready', 'yellow', false),
                 createStatus(false, 3, 'Writing', 'yellow', false),
                 createStatus(false, 4, 'Approval', 'yellow', false),
                 createStatus(false, 5, 'Rejected', 'red', false),
                 createStatus(false, 6, 'Publish', 'green', true)
             ],
             'Kanban' => [
                 createStatus(false, 1, 'Open', 'red', false),
                 createStatus(false, 2, 'In Progress', 'yellow', false),
                 createStatus(false, 3, 'Review', 'yellow', false),
                 createStatus(false, 4, 'Completed', 'green', true)
             ],
             'Marketing' => [
                 createStatus(false, 1, 'Open', 'red', false),
                 createStatus(false, 2, 'Concept', 'yellow', false),
                 createStatus(false, 3, 'In Progress', 'yellow', false),
                 createStatus(false, 4, 'Running', 'yellow', false),
                 createStatus(false, 5, 'Review', 'yellow', false),
                 createStatus(false, 6, 'Completed', 'green', true)
             ],
             'Scrum' => [
                 createStatus(false, 1, 'Open', 'red', false),
                 createStatus(false, 2, 'Pending', 'yellow', false),
                 createStatus(false, 3, 'In Progress', 'yellow', false),
                 createStatus(false, 4, 'Completed', 'green', false),
                 createStatus(false, 5, 'In Review', 'yellow', false),
                 createStatus(false, 6, 'Accepted', 'green', false),
                 createStatus(false, 7, 'Rejected', 'red', false),
                 createStatus(false, 8, 'Blocked', 'red', true)
             ],
             'Normal' => [
                 createStatus(false, 1, 'Open', 'red', false),
                 createStatus(false, 2, 'In Progress', 'yellow', false),
                 createStatus(false, 3, 'Completed', 'green', true)
             ],
         ];

         foreach ($statuses as $type => $typeStatuses) {
            $statusType = ProjectStatus::where('name', $type)->first();

            if (!$statusType) {
                $statusType = new ProjectStatus(['name' => $type]);
                $project->status()->save($statusType);
            }

            $statusType->statuses()->createMany($typeStatuses);
        }
     }

    public function updating(Project $project)
    {
        $project->oldAttributes = $project->getOriginal();
    }

    /**
     * Handle the project "updated" event.
     *
     * @param  \App\Models\Project $project
     * @return void
     */
    public function updated(Project $project)
    {
        $project->recordActivity('updated_project');
    }

}
