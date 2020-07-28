<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1,10),
        'program_id' => random_int(1,10),
        'title' => $faker->sentence,
        'duration' => random_int(1, 20),
        'price' => 20.00,
        'description'=> $faker->paragraph,
        'students' => random_int(10, 100),
        'discount'  => random_int(0, 10),
        'visibility' => 1,
        'free' => random_int(0,1),
    ];
});
