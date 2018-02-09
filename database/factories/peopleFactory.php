<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'title' => $faker->titleFemale,
        'firstName' => $faker->firstNameFemale,
        'LastName' => $faker->lastName,
        'email' => $faker->email,
        'address' => $faker->address,
        'postCode' => $faker->postcode,
        'country' => $faker->country,
        'city' => $faker->city,
        'phoneNumber' =>$faker->phoneNumber,
        'company'=>$faker->company,        
    ];
});
