<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $with = 'detailOrders';

    public function detailOrders()
    {
        // return $this->belongsTo(Role::class, 'role_id');
        return $this->hasMany(DetailOrder::class, 'order_id');
    }
}
