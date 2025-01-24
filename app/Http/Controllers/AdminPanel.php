<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    public function panel()
    {
        return view('admin.panel');
    }

    public function messages()
    {
        return view('admin.messages');
    }

    public function reports()
    {
        return view('admin.reports');
    }

    public function tasks()
    {
        return view('admin.tasks');
    }

    public function overview()
    {
        return view('admin.overview');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function configuration()
    {
        return view('admin.configuration');
    }

    public function analytics()
    {
        return view('admin.analytics');
    }
}
