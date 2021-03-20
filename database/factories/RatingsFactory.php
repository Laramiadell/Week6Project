<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ratings;
use Faker\Generator as Faker;

$factory->define(Ratings::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'post_id' => $faker->numberBetween(1, 10),
        'rating' => $faker->numberBetween(1, 5),
    ];
});
