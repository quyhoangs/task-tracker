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
    function test_non_owners_may_not_invite_users(){

        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create();

        $userToInvite = User::factory()->create(['is_email_verified' => 1]);

        $this->post($project->path() . '/invitations', [
            'email' => $userToInvite->email,
        ])->assertStatus(403);
    }

    /** @test */
    public function test_a_project_owner_can_invite_a_user()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $userToInvite = User::factory()->create(['is_email_verified' => 1]);

        $this->post($project->path() . '/invitations', [
            'email' => $userToInvite->email,
        ])->assertRedirect($project->path());

        $this->assertTrue($project->members->contains($userToInvite));
    }

    /** @test */
    function test_the_email_address_must_be_associated_with_a_valid_birdboard_account()
    {
        $this->signInWithConfirmedEmail();
        $project = Project::factory()->create(['owner_id'=>auth()->id()]);

        $this->post($project->path() . '/invitations', [
            'email' => 'notauser@example.com'
        ])->assertSessionHasErrors([
            'email' => 'The user you are inviting must have a Birdboard account.'
       ]);
    }
    /** @test */
    public function test_users_can_update_projects_details()
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
