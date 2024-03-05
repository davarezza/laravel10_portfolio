<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function send()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('aremadava3@gmail.com')->send(new ContactMe($data));

        // dd('sent');
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
