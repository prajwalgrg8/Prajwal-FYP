<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            $role = Auth::user()->role;

            if ($role === 'owner') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'superadmin') {
                return redirect()->route('superadmin.dashboard');
            }

            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('home.index');
    }

}