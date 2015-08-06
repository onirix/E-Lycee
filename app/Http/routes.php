<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@index');

Route::get('dashboard', 'DashboardController@getIndex');

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('questionnaire', 'QuestionController@index');

Route::controllers(['auth' =>'Auth\AuthController']);

    /*
    Route::get('/', 'FrontController@index');
    Route::get('single/{id}', 'FrontController@showSingle');
    Route::get('category/{id}', 'FrontController@showCategory');
    Route::get('tag/{id}', 'FrontController@showTag');
    */


