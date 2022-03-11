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
}
