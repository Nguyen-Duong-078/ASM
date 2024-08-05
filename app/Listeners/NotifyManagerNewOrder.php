<?php

namespace App\Listeners;

use App\Events\OrderCancelled;
use App\Events\OrderCreated;
use App\Notifications\OrderCancellationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;


class NotifyManagerNewOrder
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
        $managerEmail = 'manager@example.com'; // Thay đổi địa chỉ email của quản lý
        Notification::route('mail', $managerEmail)
            ->notify(new OrderCancellationNotification($event->order));
    }
}
