<?php

namespace App;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use Cachable;
    protected $guarded = [];
}
