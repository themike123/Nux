<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Course;

class WelcomeController extends Controller
{

    public function index()
    {
      $courses = Course::orderBy('id', 'desc')->take(6)->get();
      return view('welcome',['courses'=>$courses]);
    }

    public function about()
    {
      return view('about');
    }

    public function term()
    {
      return view('term');
    }

    public function privacy()
    {
      return view('privacy');
    }

}
