<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
           'name' => $faker->name,
           'birthday' => $faker->date('Y-m-d'),
           'cpf' => $faker->postcode,
           'tellphone' => $faker->phoneNumber,
           'cellphone' =>$faker->phoneNumber,
           'university' =>$faker->name,
           'course' => $faker->name,
           'graduation_level'=> $faker->name,
           'user_id' => $faker->unique()->numberBetween(1, App\User::count()),







    ];
});
