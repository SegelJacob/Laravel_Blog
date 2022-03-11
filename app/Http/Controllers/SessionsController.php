<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!auth()->attempt($credentials)) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'The credentials provided could not be verified']);

        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }
}
