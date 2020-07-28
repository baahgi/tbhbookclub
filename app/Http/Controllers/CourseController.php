<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show(Course $course)
    {
        $videos = $course->videos->where('visibility', true)
                                ->where('intro_video', false)
                                ->sortBy('episode');

        $intro_video = $course->videos->where('visibility', true)
                                ->where('intro_video', true)
                                ->first();


        return view('tbhacademy.courses.show', compact('course', 'videos', 'intro_video'));
    }


    public function playEpisode($course, $video)
    {
        $course = Course::where('id', $course)->firstOrFail();

        // if(!subscribedTo($course)){
        //     return redirect()->route('courses.show', $course)
        //         ->with('info', 'You have not subscribed to this course');
        // }

        $videos = $course->videos->where('visibility', true)
                                ->where('intro_video', false)
                                ->sortBy('episode');

        $intro_video = $course->videos->where('visibility', true)
                ->where('intro_video', true)
                ->first();


        $playing = \App\Video::where('id', $video)->firstOrFail();

        return view('tbhacademy.courses.play-episode', [
            'course' => $course,
            'videos' => $videos,
            'playing_video' => $playing,
            'intro_video' => $intro_video
            ]);
    }
}
