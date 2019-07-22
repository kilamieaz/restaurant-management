<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Menu extends Model
{
    use Cachable;
    protected $guarded = [];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
