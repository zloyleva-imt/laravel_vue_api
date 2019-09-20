<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(2),
        'description' => $faker->paragraph(10),
        'img_url' => $faker->imageUrl(),
        'user_id' => $faker->numberBetween(1,11),
    ];
});
