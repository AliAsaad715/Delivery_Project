<?php

namespace App\Listeners;

use App\Events\OrderStatusUpdated;
use App\Services\FcmService;

class SendOrderStatusNotification
{
    protected $fcmService;

    public function __construct(FcmService $fcmService)
    {
        $this->fcmService = $fcmService;
    }

    public function handle(OrderStatusUpdated $event)
    {
        $order = $event->order;
        $user = $order->user;
        $deviceToken = $user->fcm_token; 

        $title = 'Order Status Updated';
        $body = 'Your order #' . $order->id . ' status has been changed to ' . $order->status . '.';

        $this->fcmService->sendNotification($deviceToken, $title, $body, [
            'order_id' => $order->id,
            'status' => $order->status,
        ]);
    }
}