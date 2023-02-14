<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ActivityFeedTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_creating_a_project_generates_activity()
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
    public function test_updating_a_project_generates_activity()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $project->update(['title'=>'changed']);
        $this->assertCount(2,$project->activity);
        $this->assertEquals('updated',$project->activity->last()->description);
    }
}
