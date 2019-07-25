<?php

namespace App\Http\Controllers\Api;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use DB;
use App\DetailOrder;

class WaiterOrderController extends Controller
{
    public function index()
    {
        $order = DB::select(DB::raw('select * from `orders` where exists
                                    (select * from `detail_orders`
                                    where `orders`.`id` = `detail_orders`.`order_id`
                                    and `status` = '.OrderStatus::Cooked.') order by `created_at` desc'));
        foreach ($order as $index => $data) {
            $detail = DetailOrder::all()
                ->where('status', OrderStatus::Cooked)
                ->where('order_id', $data->id)
            ;
            $order[$index]->detail_orders = [];
            foreach ($detail as $data2) {
                array_push($order[$index]->detail_orders, $data2);
            }
            
            $member = User::find($data->member_id);
            $order[$index]->member = $member;
        }

        return response()->json($order);
    }
}
