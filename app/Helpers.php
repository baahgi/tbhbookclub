<?php

use Illuminate\Support\Facades\Auth;

//check if a user has subscribed to a course
function subscribedTo($course){

    if(!Auth::user())
    {
        return false;
    }
    $subCourses = Auth::user()->subscribedCourses;
    if ($subCourses) {
        foreach ($subCourses as $c) {
            if ($c->id == $course->id) {
                return true;
            }
        }
    }
    return false;
}



