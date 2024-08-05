<?php

namespace App\Listeners;

use App\Events\OrderCancelled;
use App\Notifications\OrderCancellationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendCancellationEmail
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
    public function handle(OrderCancelled $event)
    {
        Notification::send($event->order->user, new OrderCancellationNotification($event->order));
    }
}
