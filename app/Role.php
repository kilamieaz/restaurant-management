<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function selectValue()
    {
        return $this->id;
    }
    public function selectText()
    {
        return $this->name;
    }
}
