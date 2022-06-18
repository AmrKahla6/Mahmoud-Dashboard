<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Offer;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'description'    => $faker->title,
        'name'           => $faker->name,
        'work_time'      => $faker->numberBetween(1,30),
        'price'          => $faker->numberBetween(5,100),
        'provider_id'    => rand(1,100),
    ];
});
