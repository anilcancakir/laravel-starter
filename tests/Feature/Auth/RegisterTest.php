<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testUserMayNotRegister()
    {
        $this->register();

        $this->post(route('auth.register'))
            ->assertRedirect(route('common.home'));
    }

    /** @test  */
    public function testGuestCanRegister()
    {
        $email = 'sample@email.com';

        $this->post(route('auth.register'), [
            'name' => 'Sample Name',
            'password' => 'sampleSecr3t',
            'password_confirmation' => 'sampleSecr3t',
            'email' => $email,
            'tos' => '1'
        ])
            ->assertRedirect(route('common.home'));

        $this->assertDatabaseHas('users', [
            'email' => $email
        ]);
    }
}
