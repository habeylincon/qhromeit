<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QhromeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function mobile()
    {
        return view('mobilepage');
    }

    public function webdevelop()
    {
        return view('webdev');
    }
    public function contactus()
    {
        return view('contact');
    }

    public function quote()
    {
        return view('quotes');
    }
}
