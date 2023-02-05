<?php

namespace Tests;

use App\Models\User;
use App\Models\Project;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // The user account is active
    const ACTIVE = 1;

    /**
     * Sign in the given user or the default user.
     *
     * @param User|null $user
     */

    protected function signIn($user = null)
    {
        $user = $user ?: User::factory()->create();
        return $this->actingAs($user);
    }

    /**
     * Sign in a user with a confirmed email address.
     *
     * @param User|null $user
     */
    protected function signInWithConfirmedEmail($user = null)
    {
        $user = $user ?: User::factory()->create(['is_email_verified' =>  self::ACTIVE ]);
        return $this->actingAs($user);
    }

}
