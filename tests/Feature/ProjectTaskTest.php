<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Facade;
use Tests\TestCase;

class ProjectTaskTest extends TestCase
{
    use WithFaker,RefreshDatabase;

    /** @test */
    public function test_gust_cannot_add_task_to_project()
    {
        $project = Project::factory()->create();

        $this->post($project->path() . '/tasks')->assertRedirect('login');
    }

    /** @test */
    public function test_only_the_owner_of_a_project_may_add_task()
    {
        $this->signInWithConfirmedEmail();

        $project = Project::factory()->create();

        // It attempts to post a task to a project that does not
        // belong to the signed in user. Then we assert that the status code is 403 (Forbidden).
        $this->post($project->path() . '/tasks', ['body' => 'Test Task'])->assertStatus(403);

        $this->assertDatabaseMissing('tasks', ['body' => 'Test Task']);
    }

    /** @test */
    public function test_a_project_can_have_task()
    {
        // $this->withoutExceptionHandling();
        $this->signInWithConfirmedEmail();

        // Create a new project for the authenticated user
        $project = auth()->user()->projects()->create(
            Project::factory()->raw()
        );

        // This test creates a new task, then asserts that the task count
        $this->post($project->path() . '/tasks', ['body' => 'Test Task']);

        // Assert that the project's show page displays the project's name
        // khẳng định truy cập vào show và sẻ thấy nội dung là "Test Task" được đổ ra ngoài view
        $this->get($project->path())->assertSee('Test Task');
    }

    /** @test */
    public function test_a_task_requires_a_body()
    {
        $this->signInWithConfirmedEmail();

        $project = auth()->user()->projects()->create(
            Project::factory()->raw()
        );

        $attributes = Task::factory()->raw(['body' => '']);

        $this->post($project->path() . '/tasks', $attributes)->assertSessionHasErrors('body');
    }

}
