<?php

namespace App\Listeners;

use App\Events\UserAuthorized;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SetUserLastLoginDatetime
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserAuthorized $event): void
    {
        $event->user->last_login_date = date('Y-m-d H:i:s');
        $event->user->update();
    }
}
