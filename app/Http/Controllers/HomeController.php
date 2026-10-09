<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Loads the homepage
    public function index()
    {
        return view('index');
    }

    // Loads the about page
    public function about()
    {
        return view('about');
    }

    // Loads the contact page
    public function contact()
    {
        return view('contact');
    }
}