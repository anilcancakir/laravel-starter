<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testGuestMayNotLogout()
    {
        $this->get(route('auth.logout'))
            ->assertRedirect(route('common.home'));
    }

    /** @test */
    public function testUserCanSignOut()
    {
        $this->register();

        $this->get(route('auth.logout'))
            ->assertRedirect(route('common.home'));
    }
}
