<?php

namespace App\Listeners;

use App\Events\OrderStatusUpdated;
use App\Notifications\StatusUpdateNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendStatusUpdateEmail
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
    public function handle(OrderStatusUpdated $event)
    {
        Notification::send($event->order->user, new StatusUpdateNotification($event->order));
    }
}
