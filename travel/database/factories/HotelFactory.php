<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'star' => $faker->numberBetween(1, 5),
        'city' => $faker->city,
        'address' => $faker->address,
        'price' => $faker->numberBetween(1, 100),
        'description' => $faker->realText,
    ];
});
