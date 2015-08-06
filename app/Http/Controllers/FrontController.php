<?php

namespace ELycee\Http\Controllers;

use Illuminate\Http\Request;

use ELycee\Http\Requests;
use ELycee\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
    	return view('home');

//    	return 'Site public';

    }
}
