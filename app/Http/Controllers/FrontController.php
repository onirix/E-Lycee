<?php

namespace ELycee\Http\Controllers;

use Illuminate\Http\Request;

use ELycee\Http\Requests;
use ELycee\Http\Controllers\Controller;

use ELycee\Question;

class FrontController extends Controller
{
    public function index()
    {
        $questions = Question::all();
//        return view('welcome');
        dd($questions);
//        return view('welcome');
//        return view('front.question', compact('questions'));
    }
}
