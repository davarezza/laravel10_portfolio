<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    public function registerPage()
    {
        return view('guest.register', [
            'active' => 'login'
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Add a flash message to the session
        session()->flash('success', 'Registration successful. You can now log in.');

        return redirect('login');
    }

    public function loginPage()
    {
        return view('guest.login', [
            'active' => 'login'
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'visitor') {
                return redirect('/'); 
            } elseif (Auth::user()->role == 'admin') {
                return redirect('/admin/projects');
            }
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        return redirect('/');
    }
}
