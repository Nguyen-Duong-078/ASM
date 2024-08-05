<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class StatusUpdateNotification extends Notification
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
            ->line('Trạng thái đơn hàng của bạn đã được cập nhật.')
            ->action('Xem Đơn Hàng', url('/orders/' . $this->order->id))
            ->line('Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!');
    }
}
