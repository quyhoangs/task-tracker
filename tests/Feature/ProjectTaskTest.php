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
