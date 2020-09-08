<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
class InstructorController extends Controller
{
    public function index(){

        $instructor = instructor::all();

        return view('instructor',compact('instructor')) ;
    }
}
