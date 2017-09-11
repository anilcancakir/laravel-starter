<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testUserMayNotLogin()
    {
        $this->register();

        $this->post(route('auth.login'))
            ->assertRedirect(route('common.home'));
    }

    /** @test  */
    public function testGuestCanLogin()
    {
        $email = 'sample@email.com';
        $password = 'somesecr3t';

        $this->fakeUser([
            'email' => $email,
            'password' => $password,
        ]);

        $this->post(route('auth.login'), [
            'email' => $email,
            'password' => $password,
        ])
            ->assertRedirect(route('common.home'));
    }
}
