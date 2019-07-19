<?php

namespace App\Events;

use App\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class NewTransaction implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function broadcastAs()
    {
        return 'new.transaction';
    }

    public function broadcastOn()
    {
        return new Channel('transaction');
    }

    // public function broadcastWith()
    // { 
    //     $data = [];
    //     foreach ($this->order->detailOrders as $index => $list) {
    //         $row = [];
    //         $row[] = $this->order->detailOrders->order_id;
    //         $row[] = $this->order->detailOrders->menu_id;
    //         $row[] = $this->order->detailOrders->table_id;
    //         $row[] = $this->order->detailOrders->quantity;
    //         $row[] = $this->order->detailOrders->sub_total;
    //         $row[] = $this->order->detailOrders->message;
    //         $row[] = $this->order->detailOrders->created_at->toFormattedDateString();
    //         $data[] = $row;
    //     }
    //     // return [
    //     //     'cashier_id' => $this->order->cashier_id,
    //     //     'chef_id' => $this->order->cashier_id,
    //     //     'waiter_id' => $this->order->cashier_id,
    //     //     'member_id' => $this->order->member_id,
    //     //     'order_code' => $this->order->order_code,
    //     //     'created_at' => $this->order->created_at->toFormattedDateString(),
    //     //     'detail_orders' => [
    //     //         'order_id' => $this->order->detailOrders,
    //     //         'menu_id' => $this->order->menu_id,
    //     //         'table_id' => $this->order->table_id,
    //     //         'quantity' => $this->order->quantity,
    //     //         'sub_total' => $this->order->sub_total,
    //     //         'message' => $this->order->message,
    //     //         'created_at' => $this->order->created_at->toFormattedDateString(),
    //     //     ]
    //     // ];
    //     return $data;
    // }
}
