<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Menu;
use App\Order;
use App\Table;
use App\DetailOrder;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use App\Events\NewTransaction;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function index()
    {
        $order_code = uniqid();
        $member = User::member();
        return view('admin.transaction.index', compact('order_code', 'member'));
    }

    public function store(TransactionRequest $request)
    {
        $menu = Menu::find($request->menu_id);
        $table = Table::find($request->table_id);
        $findOrder = Order::where('order_code', $request->order_code)->first();
        $order = $findOrder ?? Order::createIfDontExist($request->member_id, $request->order_code);
        $menuList = Order::find($order->id)->detailOrders()->where('menu_id', $request->menu_id);
        ($menuList->count() == 0 ? DetailOrder::createIfDontExist($order->id, $menu->id, $request, $menu->price) : DetailOrder::incrementQuantityIfExist($request, $menu->price, $menuList));
        $total = $order->detailOrders()->sum('sub_total');
        $orderWithDetail = Order::find($order->id);
        event(new NewTransaction($orderWithDetail));
        return $data = ['code' => $order->order_code, 'total' => $total, 'table_name' => $table->name, 'table_id' => $table->id];
    }

    public function show($code)
    {
        $orders = Order::where('order_code', $code)->get();
        $data = [];
        foreach ($orders as $index => $order) {
            foreach ($order->detailOrders as $index => $list) {
                $row = [];
                $row[] = ++$index;
                $row[] = $list->menu->name;
                $row[] = $list->menu->price;
                $row[] = $list->quantity;
                $row[] = $list->sub_total;
                $row[] = $list->table->name;
                $row[] = ($list->message ? $list->message : '-');
                $row[] = '<div class="text-center"><div class="btn-group">
                <button type="button" onclick="editForm(' . $list->id . ')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                <button type="button" onclick="deleteData(' . $list->id . ')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></div></div>';
                $data[] = $row;
            }
        }

        $output = ['data' => $data];
        return response()->json($output);
    }

    public function edit($id)
    {
        $detailOrder = DetailOrder::find($id);
        return json_encode($detailOrder);
    }

    public function update(Request $request, $id)
    {
        $detailOrder = DetailOrder::find($id);
        $price = $detailOrder->menu->price;
        $detailOrder->update($request->all());
        $detailOrder->update([
            'sub_total' => $price * $detailOrder->quantity,
        ]);
        $total = $detailOrder->order->detailOrders->sum('sub_total');
        $data = ['total' => $total];
        return $data;
    }

    public function destroy($id)
    {
        $detailOrder = DetailOrder::find($id);
        $total = $detailOrder->order->detailOrders->sum('sub_total') - $detailOrder->sub_total;
        $data = ['total' => $total];
        $detailOrder->delete();
        return $data;
    }
}
