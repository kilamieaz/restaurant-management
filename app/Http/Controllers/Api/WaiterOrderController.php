<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WaiterOrderController extends Controller
{
    public function index()
    {
        $order = Order::whereHas('detailOrders', function ($query) {
            $query->where('status', OrderStatus::Cooked);
        })->with('detailOrders')->latest()->get();
        return response()->json($order);
    }
}