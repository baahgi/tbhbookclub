<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1,10),
        'course_id' => random_int(1, 10),
        'title' => $faker->sentence,
        'episode' => random_int(1, 20),
        'description' => $faker->paragraph,
        'url' => 'videos/vd.mp4',
        'visibility' => 1,
    ];
});
