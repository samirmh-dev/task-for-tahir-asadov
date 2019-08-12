<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Flight;
use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'company' => $faker->company,
        'plane' => $faker->name,
        'arrival' => $faker->dateTimeBetween('now', '+1 year'),
        'price' => $faker->numberBetween(1, 99),
        'to' => $faker->city,
        'from' => $faker->city,
        'passenger' => $faker->numberBetween(1, 100),
        'description' => $faker->realText,
    ];
});
