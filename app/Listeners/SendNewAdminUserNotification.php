<?php

namespace App\Listeners;

use App\Events\AdminUserCreated;

class SendNewAdminUserNotification
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param AdminUserCreated $event
     */
    public function handle(AdminUserCreated $event)
    {
    }
}
