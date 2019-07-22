<?php

namespace App\Http\Controllers\Api;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::with('detailOrders')->latest()->get();
        return response()->json($order);
    }

    public function update(Request $request, Order $order)
    {
        $order->detailOrders->update([
            'status' => $request->status,
            'chef_id' => $request->chef_id,
            'waiter_id' => $request->waiter_id,
        ]);
    }
}
