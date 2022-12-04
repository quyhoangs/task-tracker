<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

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
}
