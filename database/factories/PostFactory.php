<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'body' => $faker->sentence(1)
    ];
});
