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

    Route::get('/clinic/dashboard', function () {
        return view('clinic.index');
    });

    Route::get('/clinic/doctors', function () {
        return view('clinic.doctor');
    });

    Route::get('/clinic/schedules', function () {
        return view('clinic.schedules');
    });

    Route::get('/clinic/services', function () {
        return view('clinic.services');
    });

    Route::get('/clinic/patients', function () {
        return view('clinic.patients');
    });

    Route::get('/clinic/reports', function () {
        return view('clinic.reports');
    });

//End Clinic Dashboard

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