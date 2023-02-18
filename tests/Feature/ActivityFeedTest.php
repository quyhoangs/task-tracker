<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ActivityFeedTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_creating_a_project_records_activity()
    {
        $this->signInWithConfirmedEmail();

        //1. Create a project
        //2. Active event is created in Observer class ProjectObserver
        //3. when a project is created will added id and description to activity table
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        // Assert that the project has one activity
        $this->assertCount(1,$project->activity);

        // check that the project has an activity with the description "created"
         $this->assertEquals('created',$project->activity[0]->description);
    }

    /** @test */
    public function test_updating_a_project_records_activity()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $project->update(['title'=>'changed']);
        $this->assertCount(2,$project->activity);
        $this->assertEquals('updated',$project->activity->last()->description);
    }

    /** @test */
    public function test_creating_a_new_task_records_project_activity()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $project->addTask(['body' => 'Test Task']);

        $this->assertCount(2,$project->activity);
        $this->assertEquals('created_task',$project->activity->last()->description);
    }

    /** @test */
    public function test_completing_a_task_records_project_activity()
    {
        $this->signInWithConfirmedEmail();

        //add 1 project will create 1 record in activity table
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        //add 1 task will create 1 record in activity table
        $project->addTask(['body' => 'Test Task']);

        //update 1 task will create 1 record in activity table
        $this->patch($project->tasks[0]->path(),[
                'body'=>'Some task',
                'completed'=>true
            ]);

        //Assert that the project has 3 activities
        $this->assertCount(3,$project->activity);

        //Assert that the last activity is completed_task
        $this->assertEquals('completed_task',$project->activity->last()->description);
    }


}
