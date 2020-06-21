<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function __construct()
    {
        if($this->middleware('auth')) {
            return view('auth.login');
        }
    }

    public function index()
    {
        return view('landingpage');
    }

    public function check()
    {
        return view('checkout');
    }

    public function mitra()
    {
        return view('mitra.dashboard');
    }
}
