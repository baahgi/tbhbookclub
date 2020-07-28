<?php

namespace App\Http\Controllers;

use App\Course;
use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        $courses = Course::latest()->where('visibility', true)->paginate(20);

        return view('tbhacademy.programs.index', [
            'courses' => $courses,
            'programs' => $programs,
        ]);
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
       // dd($program);
        $courses = $program->courses->where('visibility', true);

        return view('tbhacademy.programs.show', compact('courses', 'program'));
    }
}
