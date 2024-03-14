<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Notifications\NewProject;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.projects.index', [
            'active' => 'projects',
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create', [
            'active' => 'projects',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move('imageProjects/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        $users = User::all();
        Notification::send($users, new NewProject([
            'greeting' => 'Hello!',
            'body' => 'A new project has been added.',
            'actionText' => 'View Project',
            'actionUrl' => url('/projects'),
            'lastLine' => 'Thank you for using my application!',
        ]));

        activity()->causedBy(auth()->user())->log('Added new project: ' . $data->name);

        return redirect()->route('projects.index')->with('success', 'Add Data Successfully');
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
        $product = Product::findOrFail($id);
        return view('admin.projects.edit', [
            'active' => 'projects',
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $oldImagePath = public_path('imageProjects/' . $product->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $request->file('image')->move('imageProjects/', $request->file('image')->getClientOriginalName());
            $product->image = $request->file('image')->getClientOriginalName();
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->link = $request->link;
        $product->save();

        activity()->causedBy(auth()->user())->log('Updated project: ' . $product->name);

        return redirect()->route('projects.index')->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Product $product)
    {
        $product = Product::find($id);

        if ($product) {
            if ($product->image) {
                $imagePath = public_path('imageProjects/' . $product->image);
                
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $productName = $product->name;

            $product->delete();

            // Log activity
            activity()->causedBy(auth()->user())->log('Deleted project: ' . $productName);

            return redirect()->route('projects.index')->with('success', 'Data deleted successfully!');
        } else {
            return redirect()->route('projects.index')->with('error', 'Data not found.');
        }
    }

    public function activity()
    {
        $activities = Activity::all();

        return view('activity', [
            'activities' => $activities,
            'active' => 'projects',
        ]);
    }

    public function deleteAll()
    {
        Activity::truncate();

        return redirect()->route('activity')->with('success', 'All activity has been deleted.');
    }
}
