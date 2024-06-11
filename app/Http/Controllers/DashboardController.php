<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('dashboard.admin');
    }

    public function userDashboard()
    {
        return view('dashboard.user');
    }
}
