<?php

namespace App\Listeners;

use App\Events\OrderStatusUpdated;
use App\Notifications\StatusUpdateNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendPushNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    public function handle(OrderStatusUpdated $event)
    {
        if ($event->order->user->hasAppInstalled()) {
            Notification::send($event->order->user, new StatusUpdateNotification($event->order));
        }
    }

}
