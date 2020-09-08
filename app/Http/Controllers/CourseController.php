<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    public function index(){

        $course = course::all();

        return view('course',compact('course')) ;
    }
}
