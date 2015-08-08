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

Route::get('/admin/dashboard', function () {
    return view('index');
});

Route::get('/', function () {
    return view('front');
});

Route::get('user/login', function() {
    return view('users.login');
});

Route::get('user/registration', function() {
    return view('users.login');
});