<?php

namespace App\Http\Controllers\DataTable;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderDataTableController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::all();
        $data = [];
        foreach ($orders as $index => $list) {
            foreach ($list->detailOrders as $index => $list) {
                $row = [];
                $row[] = ++$index;
                $row[] = $list->menu->name;
                $row[] = $list->menu->price;
                $row[] = $list->quantity;
                $row[] = $list->sub_total;
                $row[] = '<div class="text-center"><div class="btn-group">
                <button type="button" onclick="editForm(' . $list->id . ')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                <button type="button" onclick="deleteData(' . $list->id . ')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></div></div>';
                $data[] = $row;
            }
        }

        $output = ['data' => $data];
        return response()->json($output);
    }
}
