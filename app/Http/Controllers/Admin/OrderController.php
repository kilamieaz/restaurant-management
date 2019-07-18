<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Order;
use App\Table;
use App\DetailOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    // public function index()
    // {
    //     $order_code = uniqid();
    //     return view('admin.order.index', compact('order_code'));
    // }

    // public function store(Request $request)
    // {
    //     $menu = Menu::find($request->menu_id);
    //     $table = Table::find($request->table_id);
    //     $order = Order::firstOrCreate([
    //         // 'member_id' => 1,
    //         // 'employee_id' => Auth::user()->id,
    //         // 'employee_id' => 1,
    //         'order_code' => $request->order_code,
    //         // 'table_id' => $request->table_id
    //     ]);

    //     $menuList = Order::find($order->id)->detailOrders()->where('menu_id', $request->menu_id);

    //     $countMenu = $menuList->count();
    //     if ($countMenu == 0) {
    //         $detailOrder = DetailOrder::create([
    //             'order_id' => $order->id,
    //             'menu_id' => $menu->id,
    //             'quantity' => $request->quantity,
    //             'sub_total' => $menu->price * $request->quantity,
    //         ]);
    //     }
    //     else {
    //         $menuList->increment('quantity', $request->quantity);
    //         $menuList->update([
    //             'sub_total' => $menu->price * $menuList->first()->quantity,
    //         ]);
    //     }
    //     $total = $order->detailOrders->sum('sub_total');
    //     $data = ['code' => $order->order_code, 'total' => $total, 'table_name' => $table->name, 'table_id' => $table->id];
    //     return $data;
    // }

    // public function show($code)
    // {
    //     $orders = Order::where('order_code', $code)->get();
    //     // dd($orders);
    //     $data = [];
    //     foreach ($orders as $index => $order) {
    //         foreach ($order->detailOrders as $index => $list) {
    //             $row = [];
    //             $row[] = ++$index;
    //             $row[] = $list->menu->name;
    //             $row[] = $list->menu->price;
    //             $row[] = $list->quantity;
    //             $row[] = $list->sub_total;
    //             $row[] = '<div class="text-center"><div class="btn-group">
    //             <button type="button" onclick="editForm(' . $list->id . ')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
    //             <button type="button" onclick="deleteData(' . $list->id . ')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></div></div>';
    //             $data[] = $row;
    //         }
    //     }

    //     $output = ['data' => $data];
    //     return response()->json($output);
    // }

    // public function edit($id)
    // {
    //     $detailOrder = DetailOrder::find($id);
    //     return json_encode($detailOrder);
    // }

    // public function update(Request $request, $id)
    // {
    //     $detailOrder = DetailOrder::find($id);
    //     $price = $detailOrder->menu->price;
    //     $detailOrder->update($request->all());
    //     $detailOrder->update([
    //         'sub_total' => $price * $detailOrder->quantity,
    //     ]);
    //     $total = $detailOrder->order->detailOrders->sum('sub_total');
    //     $data = ['total' => $total];
    //     return $data;
    // }

    // public function destroy($id)
    // {
    //     $detailOrder = DetailOrder::find($id);
    //     $detailOrder->delete();
    // }
}
