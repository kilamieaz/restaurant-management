<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $guarded = [];
    protected $table = 'detail_orders';
    protected $with = ['menu', 'table', 'order'];

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
}
