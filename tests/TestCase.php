<?php

namespace Tests;

use Auth;
use App\Models\User;
use Tests\Traits\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

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
