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

Route::get('/', function () {
    $sql_version     = DB::select('SHOW VARIABLES LIKE "version";')[0]->Value;
    $laravel_version = app()::VERSION;

    return view('welcome', compact('sql_version', 'laravel_version'));
});
