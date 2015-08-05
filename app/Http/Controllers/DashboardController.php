<?php

namespace ELycee\Http\Controllers;

use ELycee\Http\Requests;
use ELycee\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {
        return view('dashboard.index', ['title'=>'E-Lycee']);

//        return view('dashboard.index');
    }



}
