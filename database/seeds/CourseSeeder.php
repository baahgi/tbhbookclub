<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Course::class, 10)->create()->each(function($course){
            $course->videos()->saveMany(factory(App\Video::class, 20)->make());
        });
    }
}
