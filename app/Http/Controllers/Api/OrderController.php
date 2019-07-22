<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\DetailOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::with('detailOrders')->latest()->get();
        return response()->json($order);
    }

    public function update(Request $request, DetailOrder $detailOrder)
    {
        $detailOrder->fill($request->all());
        $detailOrder->save();
        return response()->json($detailOrder);
    }
}
