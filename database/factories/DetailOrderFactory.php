<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\DetailOrder;
use Faker\Generator as Faker;

$factory->define(DetailOrder::class, function (Faker $faker) {
    return [
        'quantity' => 3,
        'sub_total' => $faker->randomNumber(5) * 3,
        'message' => $faker->realText(100),
    ];
});
