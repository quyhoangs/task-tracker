<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
     use RefreshDatabase;
    /** @test */
    public function test_a_user_has_projects()
    {
        // Create a new user.
        $user = User::factory()->create();

        // Check that the user has an empty collection of projects.
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $user->projects);
    }

    /** @test */
    public function test_a_user_has_accessible_projects()
    {
        // Create a new user.
        $you = User::factory()->create(['is_email_verified' =>  self::ACTIVE ]);
        $this->actingAs($you);

        //craete project you is owner
        $project = Project::factory()->create(['owner_id'=>$you->id]);

        //Assert that the user can see the project on their dashboard
        $this->assertCount(1, $you->accessibleProjects());

        $john = User::factory()->create(['is_email_verified' =>  self::ACTIVE ]);
        $nick = User::factory()->create(['is_email_verified' =>  self::ACTIVE ]);

        //Create a project John is owner
        $johnProject = Project::factory()->create(['owner_id'=>$john->id]);

        //John invites Nick to be a member
        $johnProject->invite($nick);

        //Assert that the user can see the project on their dashboard
        $this->assertCount(1, $you->accessibleProjects());

        // John invites you to be a member
        $johnProject->invite($you);

        //Assert that the user can see the project on their dashboard
        $this->assertCount(2, $you->accessibleProjects());

    }
}
