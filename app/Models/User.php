<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotificationCollection;
use App\Notifications\Auth\Password\ResetPasswordNotification;

/**
 * Class User.
 * @mixin Model
 * @mixin Builder
 *
 * @property int id
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @property DatabaseNotificationCollection|DatabaseNotification[] notifications
 *
 * @method static User create(array $attributes = [])
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
