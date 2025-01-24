<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function billing()
    {
        return view('user.billing');
    }

    public function settings()
    {
        return view('user.settings');
    }
}
