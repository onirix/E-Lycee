<?php

namespace ELycee\Http\Controllers;

use Illuminate\Http\Request;

use ELycee\Http\Requests;
use ELycee\Http\Controllers\Controller;

use ELycee\Question;
use ELycee\Choice;

class FrontController extends Controller
{
    public function index()
    {
//        $questions  = Question::all();
        $questions    = Question::with('choices')->get();
//        $questions    = Question::with('choices')->get()->where('class_level', 'terminal');;
//        $questions    = Question::with('choices')->get();

//        $questions  = Question::with('choices')->find(1);
//        return view('welcome');
//        dd($choices);
//        dd($questions);
//        dd(gettype($questions));
//        return view('welcome');
//        return view('front.question', compact('questions'))->with('choices');
//        return view('front.question', compact('choices'));
        return view('front.question', compact('questions'), ['title'=>'Questionnaire']);
    }
}
