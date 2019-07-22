<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Category extends Model
{
    use Cachable;
    protected $guarded = [];

    public function selectValue()
    {
        return $this->id;
    }
    public function selectText()
    {
        return $this->name;
    }

    public function menus()
    {
        // return $this->belongsTo(Role::class, 'role_id');
        return $this->hasMany(Menu::class, 'category_id');
    }
}
