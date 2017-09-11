<?php

namespace App\Listeners\Auth;

use App\Events\Auth\LoggedOut;

class LogoutListener
{
    /**
     * Handle the event.
     *
     * @param  LoggedOut  $event
     * @return void
     */
    public function handle(LoggedOut $event)
    {
        //
    }
}
