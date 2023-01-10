<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return \view('pages.dashboard');
    }

    public function hero()
    {
        return \view('pages.hero');
    }

    public function about()
    {
        return \view('pages.about');
    }
    
}
