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

//Start Clinic Dashboard

    Route::get('/clinic/dashboard', 'ClinicController@index');
    Route::get('/clinic/reports', 'ClinicController@report');
    Route::get('/clinic/doctors', 'ClinicController@doctor');
    Route::get('/clinic/schedules', 'ClinicController@schedule');
    Route::get('/clinic/services', 'ClinicController@service');
    Route::get('/clinic/patients', 'ClinicController@patient');


//End Clinic Dashboard

Route::get('/clinic/{id}/book', 'ClinicController@book');

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

// Appointments
Route::get('appointments/create', 'AppointmentsController@create');

// Search Clinic
Route::get('search-clinic', 'ClinicSearchController@searchNearby');