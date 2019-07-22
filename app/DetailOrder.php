<?php

namespace App;

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
}
