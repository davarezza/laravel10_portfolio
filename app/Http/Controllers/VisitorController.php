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
        return view('review.create', ['active' => 'reviews']);
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

        $review = Review::create($request->only(['rating', 'comment', 'name']));

        $this->logActivity('Added new review: ' . $review->name);

        return redirect()->route('reviews')->with('success', 'Review added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        $review->delete();

        $this->logActivity('Deleted review: ' . $review->name);

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }

    /**
     * Log user activity.
     */
    private function logActivity($message)
    {
        activity()->causedBy(Auth::user())->log($message);
    }
}
