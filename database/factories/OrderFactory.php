<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'order_code' => uniqid(),
        'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
    ];
});
