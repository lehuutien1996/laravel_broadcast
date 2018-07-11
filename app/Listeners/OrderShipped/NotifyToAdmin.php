<?php

namespace App\Listeners\OrderShipped;

use App\Events\OrderShipped;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyToAdmin
{
    /**
     * Handle the event.
     *
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        $user = $event->user;
        $content = $event->content;

        broadcast(new \App\Events\Notifications\OrderShipped\SendNotificationToAdmin($user, $content));
    }
}
