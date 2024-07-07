<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminindex()
    {
        return  view('admin.dashboard');
    }

    public function carrierindex()
    {
        return  view('carrier.dashboard');
    }
}
