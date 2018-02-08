<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'created_at' => $faker->dateTimeBetween($startDate = "-300 days", $endDate = "now"),
    ];
});
