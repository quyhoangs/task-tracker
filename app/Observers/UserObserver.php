<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $templateStatuses = [
            [
                'template_name' => 'Custom',
                'statuses' => [
                    [
                        'name' => 'Open',
                        'color' => 'red',
                        'order' => 1,
                        'is_open' => true,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'In Progress',
                        'color' => 'yellow',
                        'order' => 2,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Completed',
                        'color' => 'green',
                        'order' => 3,
                        'is_open' => false,
                        'is_closed' => true,
                        'is_done' => true,
                    ],
                ],
            ],
            //Content
            [
                'template_name' => 'Content',
                'statuses' => [
                    [
                        'name' => 'Open',
                        'color' => 'red',
                        'order' => 1,
                        'is_open' => true,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Ready',
                        'color' => 'yellow',
                        'order' => 2,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Writing',
                        'color' => 'yellow',
                        'order' => 3,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Approval',
                        'color' => 'yellow',
                        'order' => 4,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Rejected',
                        'color' => 'red',
                        'order' => 5,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Publish',
                        'color' => 'green',
                        'order' => 6,
                        'is_open' => false,
                        'is_closed' => true,
                        'is_done' => true,
                    ],
                ],
            ],
            //Kanban
            [
                'template_name' => 'Kanban',
                'statuses' => [
                    [
                        'name' => 'Open',
                        'color' => 'red',
                        'order' => 1,
                        'is_open' => true,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'In Progress',
                        'color' => 'yellow',
                        'order' => 2,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Review',
                        'color' => 'yellow',
                        'order' => 3,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Completed',
                        'color' => 'green',
                        'order' => 4,
                        'is_open' => false,
                        'is_closed' => true,
                        'is_done' => true,
                    ],
                ],
            ],
            //Marketing
            [
                'template_name' => 'Marketing',
                'statuses' => [
                    [
                        'name' => 'Open',
                        'color' => 'red',
                        'order' => 1,
                        'is_open' => true,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Concept',
                        'color' => 'yellow',
                        'order' => 2,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'In Progress',
                        'color' => 'yellow',
                        'order' => 3,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Running',
                        'color' => 'yellow',
                        'order' => 4,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Review',
                        'color' => 'yellow',
                        'order' => 5,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Completed',
                        'color' => 'green',
                        'order' => 6,
                        'is_open' => false,
                        'is_closed' => true,
                        'is_done' => true,
                    ],
                ],
            ],
            //Scrum
            [
                'template_name' => 'Scrum',
                'statuses' => [
                    [
                        'name' => 'Open',
                        'color' => 'red',
                        'order' => 1,
                        'is_open' => true,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Pending',
                        'color' => 'yellow',
                        'order' => 2,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'In Progress',
                        'color' => 'yellow',
                        'order' => 3,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Completed',
                        'color' => 'green',
                        'order' => 4,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'In Review',
                        'color' => 'yellow',
                        'order' => 5,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Accepted',
                        'color' => 'green',
                        'order' => 6,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Rejected',
                        'color' => 'red',
                        'order' => 7,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Blocked',
                        'color' => 'red',
                        'order' => 8,
                        'is_open' => false,
                        'is_closed' => true,
                        'is_done' => false,
                    ],
                ],
            ],
            //Normal
            [
                'template_name' => 'Normal',
                'statuses' => [
                    [
                        'name' => 'Open',
                        'color' => 'red',
                        'order' => 1,
                        'is_open' => true,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'In Progress',
                        'color' => 'yellow',
                        'order' => 2,
                        'is_open' => false,
                        'is_closed' => false,
                        'is_done' => false,
                    ],
                    [
                        'name' => 'Completed',
                        'color' => 'green',
                        'order' => 3,
                        'is_open' => false,
                        'is_closed' => true,
                        'is_done' => true,
                    ],
                ],
            ],
        ];

        foreach ($templateStatuses as $templateStatusData) {
            $user->templateStatuses()->create($templateStatusData);
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
