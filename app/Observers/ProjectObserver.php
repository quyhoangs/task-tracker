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

        $projectStatuses = [
            [
                'status_type' => ProjectStatus::CUSTOM,
                'is_active' => true,
                'order' => 1,
                'name_status' => 'Open',
                'color' => 'red',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::CUSTOM,
                'is_active' => true,
                'order' => 2,
                'name_status' => 'In Progress',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::CUSTOM,
                'is_active' => true,
                'order' => 3,
                'name_status' => 'Completed',
                'color' => 'green',
                'is_completed' => true,
            ],

            //CONTENT
            [
                'status_type' => ProjectStatus::CONTENT,
                'is_active' => false,
                'order' => 1,
                'name_status' => 'Open',
                'color' => 'red',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::CONTENT,
                'is_active' => false,
                'order' => 2,
                'name_status' => 'Ready',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::CONTENT,
                'is_active' => false,
                'order' => 3,
                'name_status' => 'Writing',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::CONTENT,
                'is_active' => false,
                'order' => 4,
                'name_status' => 'Approval',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::CONTENT,
                'is_active' => false,
                'order' => 5,
                'name_status' => 'Rejected',
                'color' => 'red',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::CONTENT,
                'is_active' => false,
                'order' => 6,
                'name_status' => 'Publish',
                'color' => 'green',
                'is_completed' => true,
            ],

            //KANBAN
            [
                'status_type' => ProjectStatus::KANBAN,
                'is_active' => false,
                'order' => 1,
                'name_status' => 'Open',
                'color' => 'red',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::KANBAN,
                'is_active' => false,
                'order' => 2,
                'name_status' => 'In Progress',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::KANBAN,
                'is_active' => false,
                'order' => 3,
                'name_status' => 'Review',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::KANBAN,
                'is_active' => false,
                'order' => 4,
                'name_status' => 'Completed',
                'color' => 'green',
                'is_completed' => true,
            ],

            //Marketing
            [
                'status_type' => ProjectStatus::MARKETING,
                'is_active' => false,
                'order' => 1,
                'name_status' => 'Open',
                'color' => 'red',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::MARKETING,
                'is_active' => false,
                'order' => 2,
                'name_status' => 'Concept',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::MARKETING,
                'is_active' => false,
                'order' => 3,
                'name_status' => 'In Progress',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::MARKETING,
                'is_active' => false,
                'order' => 4,
                'name_status' => 'Running',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::MARKETING,
                'is_active' => false,
                'order' => 5,
                'name_status' => 'Review',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::MARKETING,
                'is_active' => false,
                'order' => 6,
                'name_status' => 'Completed',
                'color' => 'green',
                'is_completed' => true,
            ],

            //Scrum
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 1,
                'name_status' => 'Open',
                'color' => 'red',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 2,
                'name_status' => 'Pending',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 3,
                'name_status' => 'In Progress',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 4,
                'name_status' => 'Completed',
                'color' => 'green',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 5,
                'name_status' => 'In Review',
                'color' => 'yellow',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 6,
                'name_status' => 'Accepted',
                'color' => 'green',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 7,
                'name_status' => 'Rejected',
                'color' => 'red',
                'is_completed' => false,
            ],
            [
                'status_type' => ProjectStatus::SCRUM,
                'is_active' => false,
                'order' => 8,
                'name_status' => 'Blocked',
                'color' => 'red',
                'is_completed' => true,
            ],
            ];

        $project->status()->createMany($projectStatuses);
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
