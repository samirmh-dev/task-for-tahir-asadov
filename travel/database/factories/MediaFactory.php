<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Media;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();
$factory->define(Media::class, function (Faker $faker) use ($autoIncrement)  {
    $autoIncrement->next();
    $name = $faker->uuid;
    $file_name = $name . '.jpg';
    $current = $autoIncrement->current();
    mkdir(storage_path() . '/app/public/' . $current);
    $image = $faker->image(storage_path() . '/app/public/' . $current, 400, 300, null, false);
    return [
        'model_type' => 'App\Hotel',
        'model_id' => '',
        'collection_name' => 'image',
        'name' => pathinfo($image)['filename'],
        'file_name' => $image,
        'mime_type' => 'image/jpeg',
        'disk' => 'public',
        'size' => $faker->numberBetween(1, 99),
        'manipulations' => '[]',
        'custom_properties' => '[]',
        'responsive_images' => '[]',
        'order_column' => $current,
    ];
});
