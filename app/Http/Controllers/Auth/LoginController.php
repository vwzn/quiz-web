<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle the login request.
     */
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to desired location
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed, redirect back to login form
            return redirect()->back()->withInput()->withErrors([
                'email' => 'Invalid credentials.',
            ]);
        }
    }

    /**
     * Logout the authenticated user.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
