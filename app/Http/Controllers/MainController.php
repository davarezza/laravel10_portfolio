<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Mail\ContactMe;
use App\Models\Product;
use App\Jobs\ContactMeJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

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

        $key = 'product_viewed_' . $id;

        // Cek apakah Cookie dengan nama tertentu sudah ada
        if (!Session::has($key)) {
            views($product)->record();
            Session::put($key, true);
        }
        
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

        // Mail::to('aremadava3@gmail.com')->send(new ContactMe($data));
        $job = (new ContactMeJob($data));
        dispatch($job);

        // dd('sent');
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
