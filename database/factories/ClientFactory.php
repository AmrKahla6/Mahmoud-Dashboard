<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'password'       => bcrypt('12345678'),
        'phone'          => $faker->phoneNumber,
        'personal_image' => 'default.png',
    ];
});
