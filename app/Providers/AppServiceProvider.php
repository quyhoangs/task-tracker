<?php

namespace App\Providers;

use App\Models\Project;
// use App\Models\ProjectStatus;
use App\Models\Task;
use App\Models\User;
use App\Observers\ProjectObserver;
use App\Observers\TaskObserver;
use App\Observers\UserObserver;
// use App\Observers\ProjectStatusObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Project::observe(ProjectObserver::class);
        Task::observe(TaskObserver::class);
        User::observe(UserObserver::class);
        // ProjectStatus::observe(ProjectStatusObserver::class);
    }
}
