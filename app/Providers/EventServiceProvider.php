<?php

namespace App\Providers;

use App\Events\OrderCancelled;
use App\Events\OrderCreated;
use App\Events\OrderStatusUpdated;
use App\Listeners\NotifyManagerNewOrder;
use App\Listeners\NotifyManagerOrderCancelled;
use App\Listeners\SendCancellationEmail;
use App\Listeners\SendOrderConfirmation;
use App\Listeners\SendPushNotification;
use App\Listeners\SendStatusUpdateEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        \App\Events\OrderCreated::class => [
            \App\Listeners\SendOrderConfirmation::class,
            \App\Listeners\NotifyManagerNewOrder::class,
        ],
        \App\Events\OrderStatusUpdated::class => [
            \App\Listeners\SendStatusUpdateEmail::class,
            \App\Listeners\SendPushNotification::class,
        ],
        \App\Events\OrderCancelled::class => [
            \App\Listeners\SendCancellationEmail::class,
            \App\Listeners\NotifyManagerOrderCancelled::class,
        ],
    ];


    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
