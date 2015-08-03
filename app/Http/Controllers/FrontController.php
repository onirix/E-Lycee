<?php

namespace ELycee\Http\Controllers;

use ELycee\Choice;
use Illuminate\Http\Request;

use ELycee\Http\Requests;
use ELycee\Http\Controllers\Controller;

use ELycee\Question;

class FrontController extends Controller
{
    public function index()
    {
        $questions  = Question::with('choices')->find(1);
//        return view('welcome');
        dd($questions);
//        dd(gettype($questions));
//        return view('welcome');
//        return view('front.question', $questions);
//        return view('front.question', compact('questions'));
    }
}
