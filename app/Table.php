<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Table extends Model
{
    use Cachable;
    protected $guarded = [];
}
