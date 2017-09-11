<?php

namespace Tests\Feature\Auth;

use Notification;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Notifications\Auth\Password\ResetPasswordNotification;

class PasswordTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testGuestCanSendResetEmail()
    {
        $user = $this->fakeUser();

        $this->get(route('auth.password.request'))
            ->assertSuccessful();

        /* @noinspection PhpUndefinedMethodInspection */
        Notification::fake();

        $this->post(route('auth.password.email'), [
            'email' => $user->email,
        ])
            ->assertRedirect();

        /* @noinspection PhpUndefinedMethodInspection */
        Notification::assertSentTo($user, ResetPasswordNotification::class);

        $this->assertDatabaseHas('password_resets', [
            'email' => $user->email,
        ]);
    }
}
