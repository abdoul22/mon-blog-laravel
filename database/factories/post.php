<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'body' => $faker->sentence(1)
    ];
});
