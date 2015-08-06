<?php

namespace ELycee\Http\Controllers;

use Illuminate\Http\Request;

use ELycee\Http\Requests;
use ELycee\Http\Controllers\Controller;

use ELycee\User;
use ELycee\Question;
use ELycee\Choice;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $role = User::find(1)->role;

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
        return view('front.question', compact('questions', 'role'), ['title'=>'Questionnaire']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
