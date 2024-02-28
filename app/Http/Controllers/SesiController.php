<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    /**
     * Show the registration page.
     */
    public function registerPage()
    {
        return view('guest.register', ['active' => 'login']);
    }

    /**
     * Handle user registration.
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $this->logActivity('User registered: ' . $validatedData['name']);

        return redirect('login')->with('success', 'Registration successful. You can now log in.');
    }

    /**
     * Show the login page.
     */
    public function loginPage()
    {
        return view('guest.login', ['active' => 'login']);
    }

    /**
     * Handle user login.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $this->logActivity('User ' . $user->name . ' do login');

            return redirect($user->role === 'admin' ? '/admin/projects' : '/');
        }

        return back()->with('loginError', 'Login Failed');
    }

    /**
     * Handle user logout.
     */
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();

        return redirect('/');
    }

    /**
     * Log user activity.
     */
    private function logActivity($message)
    {
        activity()->causedBy(Auth::user())->log($message);
    }
}
