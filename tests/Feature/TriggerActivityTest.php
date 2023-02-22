<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TriggerActivityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_creating_a_project()
    {
        $this->signInWithConfirmedEmail();

        //1. Create a project
        //2. Active event is created in Observer class ProjectObserver
        //3. when a project is created will added id and description to activity table
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        // Assert that the project has one activity
        $this->assertCount(1,$project->activity);


        tap($project->activity->last(),function ($activity) {
            // check that the project has an activity with the description "created"
            $this->assertEquals('created_project', $activity->description);

            // check that the project has an activity with the changes null
            $this->assertNull($activity->changes);
        });
    }

    /** @test */
    public function test_updating_a_project()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $originalTitle = $project->title;

        $project->update(['title'=>'changed']);
        $this->assertCount(2,$project->activity);

        tap($project->activity->last(),function ($activity) use ($originalTitle) {

            $this->assertEquals('updated_project',$activity->description);

            $expected = [
                'before' => ['title' => $originalTitle],
                'after' => ['title' => 'changed']
            ];

            $this->assertEquals($expected,$activity->changes);

        });

        $this->assertEquals('updated_project',$project->activity->last()->description);
    }

    /** @test */
    public function test_creating_a_new_task()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $project->addTask(['body' => 'Test Task']);

        $this->assertCount(2,$project->activity);

        tap($project->activity->last(),function ($activity) {
            // Assert that activity description is 'created_task'
            $this->assertEquals('created_task',$activity->description);
            // Assert that activity subject is an instance of Task class
            $this->assertInstanceOf(Task::class,$activity->subject);
            // Assert that activity subject body is 'Test Task'
            $this->assertEquals('Test Task',$activity->subject->body);

        });
    }

    /** @test */
    public function test_completing_a_task()
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

        tap($project->activity->last(),function ($activity) {
            $this->assertEquals('completed_task',$activity->description);
            $this->assertInstanceOf(Task::class,$activity->subject);
        });
    }

    /** @test */
    public function test_incompleting_a_task()
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

        //update 1 task will create 1 record in activity table
        $this->patch($project->tasks[0]->path(),[
                'body'=>'Some task',
                'completed'=>false
            ]);

        //refresh the database to get the latest activity
        $project->refresh();

        //Assert that the project has 4 activities
        $this->assertCount(4,$project->activity);

        //Assert that the last activity is completed_task
        $this->assertEquals('incompleted_task',$project->activity->last()->description);
    }

    /** @test */
    public function test_deleting_a_task()
    {
        $this->signInWithConfirmedEmail();

        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $project->addTask(['body' => 'Test Task']);

        $project->tasks[0]->delete();

        $this->assertCount(3,$project->activity);

        $this->assertEquals('deleted_task',$project->activity->last()->description);
    }
}
