<?php

namespace App;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class DetailOrder extends Model
{
    use Cachable;
    protected $guarded = [];
    protected $table = 'detail_orders';
    protected $with = ['menu', 'table'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function scopeTotal($query)
    {
        return $query->sum('sub_total');
    }

    public static function createIfDontExist($order_id, $menu_id, $request, $menu_price)
    {
        DetailOrder::create([
            'order_id' => $order_id,
            'menu_id' => $menu_id,
            'table_id' => $request->table_id,
            'message' => $request->message,
            'quantity' => $request->quantity,
            'sub_total' => $menu_price * $request->quantity,
            'status' => OrderStatus::Ordered,
        ]);
    }

    public static function incrementQuantityIfExist($request, $menu_price, $menu_list)
    {
        $menu_list->increment('quantity', $request->quantity);
        $menu_list->update([
            'sub_total' => $menu_price * $menu_list->first()->quantity,
        ]);
    }
}
