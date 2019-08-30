<?php

namespace App\Listeners;

use App\Events\AdminUserCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewAdminUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AdminUserCreated  $event
     * @return void
     */
    public function handle(AdminUserCreated $event)
    {
        //
    }
}
