<?php
namespace App\Http\Controllers;

class ClinicSearchController extends Controller
{
    public function searchNearby()
    {
        return view('front.search-clinic');
    }
}