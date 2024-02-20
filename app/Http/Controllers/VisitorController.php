<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();

        return view('review.index', [
            'active' => 'projects',
            'reviews' => $reviews,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create', [
            'active' => 'reviews',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|max:100',
            'name' => 'required',
        ]);

        $data = Review::create([
            'rating' => $request->rating,
            'comment' => $request->comment,
            'name' => $request->name,
        ]);

        activity()->causedBy(auth()->user())->log('Added new review: ' . $data->name);

        return redirect()->route('reviews')->with('success', 'Add Data Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        activity()
            ->causedBy(Auth::user())
            ->log('Menghapus review: ' . $review->name);

        return redirect()->route('reviews.index')->with('success', 'Data berhasil dihapus!');
    }
}
