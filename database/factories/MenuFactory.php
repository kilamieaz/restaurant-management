<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'name' => $faker->lexify('Menu ???'),
        'description' => $faker->lexify('Description Menu ???'),
        'price' => $faker->randomNumber(3),
        'stock' => $faker->numberBetween(10, 20),
        'photo' => $faker->image('public/storage/photo', 800, 800, 'cats', false),
    ];
});
