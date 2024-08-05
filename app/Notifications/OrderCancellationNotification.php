<?php
namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class OrderCancellationNotification extends Notification
{
    use Queueable;

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Đơn hàng của bạn đã bị hủy.')
            ->line('Mã đơn hàng: ' . $this->order->id)
            ->line('Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!');
    }
}
