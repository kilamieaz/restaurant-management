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
        $order->fill($request->all());
        $order->save();
        // $order->status = $request->status ? $request->status : $order->status;
        // $order->chef_id = $request->chef_id ? $request->chef_id : $order->chef_id;      
        // $order->waiter_id = $request->waiter_id ? $request->waiter_id : $order->waiter_id;      
        // $order->save();
    }
}
