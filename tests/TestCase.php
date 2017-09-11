<?php

namespace Tests;

use App\Models\User;
use Auth;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Traits\CreatesApplication;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @param array $attributes
     * @return User
     */
    public function register(array $attributes = [])
    {
        /** @var User $user */
        $user = $this->fakeUser($attributes);

        // Login
        Auth::login($user);
        return $user;
    }

    /**
     * @param array $attributes
     * @return User
     */
    public function fakeUser(array $attributes = [])
    {
        return factory(User::class)->create($attributes);
    }
}
