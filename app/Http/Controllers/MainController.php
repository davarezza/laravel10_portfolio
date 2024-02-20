<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
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
        $products = Product::all();
        
        return view('projects', [
            'active' => 'projects',
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return abort(404);
        }

        return view('show', [
            'active' => 'projects',
            'product' => $product,
        ]);
    }

    public function reviews()
    {
        $reviews = Review::all();

        return view('reviews', [
            'active' => 'reviews',
            'reviews' => $reviews
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'active' => 'contact'
        ]);
    }
}
