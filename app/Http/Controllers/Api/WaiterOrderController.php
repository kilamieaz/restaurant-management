<?php

namespace App\Http\Controllers\Api;

use DB;
use App\Order;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class WaiterOrderController extends Controller
{
    public function index()
    {
        $order = DB::select(DB::raw("select * from `orders` where exists
                                    (select * from `detail_orders`
                                    where `orders`.`id` = `detail_orders`.`order_id`
                                    and `status` = 2) order by `created_at` desc"));
        foreach($order as $index => $data) {
            $detail = DetailOrder::all()
                                 ->where('status', OrderStatus::Cooked)
                                 ->where('order_id', $data->id);
            $order[$index]->detail_orders = array();
            foreach($detail as $data2) {
                array_push($order[$index]->detail_orders, $data2);
            }
        }
        return response()->json($order);
    }
}
