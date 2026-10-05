<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('index.blade.php');
    }

    public function about(): string
    {
        return view('about.blade.php');
    }

    public function contact(): string
    {
        return view('contact.blade.php');
    }
}