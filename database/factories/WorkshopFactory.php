<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Workshop;
use Faker\Generator as Faker;

$factory->define(Workshop::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'description' => $faker->text(),
        'period' => $faker->word(),
        'vacancies' => $faker->randomDigit,
        'workload' => $faker->randomDigit,

    ];
});
