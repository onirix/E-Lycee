<?php

namespace ELycee\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        /*View::composer('layouts.master', function ($view) {
            $view->with('questions', Question::all());
        });*/

       /* View::composer('partials.nav', function ($view) {
            $view->with('menus', Category::all());
        });

        View::composer('partials.navmodel', function ($view) {
            $view->with('menus', Category::all());
        });*/
    }
}
