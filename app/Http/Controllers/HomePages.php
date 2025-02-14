<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePages extends Controller
{
    public function welcome()
    {
        return view('homepages.welcome');
    }

    public function contact()
    {
        return view('homepages.contact');
    }

    public function about()
    {
        return view('homepages.about');
    }

    public function blog()
    {
        return view('homepages.blog');
    }

    public function services()
    {
        return view('homepages.services');
    }

    public function pricing()
    {
        return view('homepages.pricing');
    }

    public function caseStudies()
    {
        return view('homepages.case-studies');
    }
    
    public function terms()
    {
        return view('homepages.terms');
    }

    public function privacy()
    {
        return view('homepages.privacy');
    }
}
