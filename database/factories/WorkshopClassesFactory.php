<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WorkshopClass;
use Faker\Generator as Faker;

$factory->define(\App\WorkshopClasses::class, function (Faker $faker) {
    return [
        'student_id' => $faker->numberBetween(1, App\Student::count()),
        'workshop_id'=> $faker->numberBetween(1, App\Workshop::count())
    ];
});
