<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ActivityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_it_has_a_user()
    {
        $this->signInWithConfirmedEmail();

        $project = Project::factory()->create(['owner_id' => auth()->id()]);

        $this->assertEquals(auth()->id(), $project->activity->first()->user->id);

    }

}
