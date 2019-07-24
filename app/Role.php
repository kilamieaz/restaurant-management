<?php

namespace App;

use App\Enums\UserRole;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
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

    public function scopeEmployees($query)
    {
        return $query->where('id', 'not like', UserRole::Member)->get();
    }
}
