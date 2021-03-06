<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'body'        => $faker->text,
        'title'       => $faker->title,
        'depart_id'   => rand(1,4),
        'user_id'     => rand(1,100),
        'offer_id'    => rand(1,100),
        'depart_id'   => rand(1,100),
    ];
});
