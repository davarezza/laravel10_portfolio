<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home', [
            'active' => 'home'
        ]);
    }

    public function about()
    {
        return view('about', [
            'active' => 'about'
        ]);
    }

    public function services()
    {
        return view('services', [
            'active' => 'services'
        ]);
    }

    public function projects()
    {
        return view('projects', [
            'active' => 'projects'
        ]);
    }

    public function reviews()
    {
        return view('reviews', [
            'active' => 'reviews'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'active' => 'contact'
        ]);
    }
}
