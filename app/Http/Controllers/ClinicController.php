<?php
namespace App\Http\Controllers;

class ClinicController extends Controller
{
    public function index($id)
    {
        return view('clinic.index');
    }

    public function report($id)
    {
        return view('clinic.reports');
    }

    public function doctor($id)
    {
        return view('clinic.doctor');
    }

    public function schedule($id)
    {
        return view('clinic.schedules');
    }

    public function service($id)
    {
        return view('clinic.services');
    }

    public function patient($id)
    {
        return view('clinic.patients');
    }

    public function book($id)
    {
        return view('clinic.book');
    }

}