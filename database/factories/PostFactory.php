<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'body' => $faker->paragraph(50),
        'slug' => $faker->unique()->word(10),
        'created_at' => $faker->dateTimeBetween($startDate = "-300 days", $endDate = "now"),
    ];
});
