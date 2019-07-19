<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
