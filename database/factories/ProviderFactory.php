<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Provider;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'password'       => bcrypt('12345678'),
        'phone'          => $faker->phoneNumber,
        'personal_image' => 'default.png',
        'description'    => $faker->title,
    ];
});
