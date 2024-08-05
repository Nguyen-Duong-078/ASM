<?php
namespace Tests\Feature;

use App\Events\OrderCreated;
use App\Models\Order;
use App\Notifications\OrderConfirmationNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class OrderCreatedTest extends TestCase
{
    use RefreshDatabase;

    public function testOrderCreatedSendsNotification()
    {
        Event::fake();
        Notification::fake();

        // Tạo đơn hàng
        $order = Order::factory()->create();

        // Gửi sự kiện
        event(new OrderCreated($order));

        // Kiểm tra rằng các listeners đã được gọi
        Event::assertDispatched(OrderCreated::class);
        Notification::assertSentTo($order->user, OrderConfirmationNotification::class);
    }
}

