<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index');
    }

    public function store(Request $request)
    {
        Order::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    }

    public function show($id)
    {
        $menu = Menu::find($id);
        return $menu;
    }

    public function edit(Order $order)
    {
        echo json_encode($order);
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
    }

    public function destroy(Order $order)
    {
        $order->delete();
    }
}
