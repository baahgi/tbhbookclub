<?php

use App\Program;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            'Purpose and Discovering It',
            'Personal Growth Development',
            'Discovering and Developing Your Potential and Skills',
            'Soft Skills Development',
        	'Leadership',
            'Branding and Personal Grooming',
            'Knowing Your Value, Worth, and Relationships',
            'Personal Finance Management',
            'Business and Entrepreneurship',
            'Career Planning and Development',
        ];

        foreach($programs as $prog){
            Program::create([
                'title' => $prog,
                'slug' => Str::slug($prog),
            ]);
        }
    }
}
