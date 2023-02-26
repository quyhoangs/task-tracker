<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InvitationsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_a_project_can_invite_a_user()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $newUser = User::factory()->create(['is_email_verified' => 1]);
        $project->invite($newUser);

        $this->signInWithConfirmedEmail($newUser);

        $this->post($project->path() . '/tasks', $task = ['body'=>'Test task']);

        $this->assertDatabaseHas('tasks', $task);
    }
}
