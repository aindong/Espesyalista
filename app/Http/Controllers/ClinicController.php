<?php
namespace App\Http\Controllers;

class ClinicController extends Controller
{
    public function index()
    {
        return view('clinic.index');
    }

    public function report()
    {
        return view('clinic.reports');
    }

    public function doctor()
    {
        return view('clinic.doctor');
    }

    public function schedule()
    {
        return view('clinic.schedules');
    }

    public function service()
    {
        return view('clinic.services');
    }

    public function patient()
    {
        return view('clinic.patients');
    }

    public function book($id)
    {
        return view('clinic.book');
    }

}