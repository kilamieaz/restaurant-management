<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Table;
use Faker\Generator as Faker;

$factory->define(Table::class, function (Faker $faker) {
    return [
        'name' => $faker->lexify('Table ???'),
        // 'name' => $faker->numerify('Table###'),
        'capacity' => $faker->numberBetween(3, 10),
        'status' => 1,
    ];
});
