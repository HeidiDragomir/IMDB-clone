<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.login');
    }

    public function store()
    {

        //validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // attemp to authenticate and login the user
        // based on the provided credentials
        if (auth()->attempt($attributes)) {
            //session fixation
            session()->regenerate();

            //redirect with a success flash message
            return redirect('/')->with('success', 'You are now logged in!');
        }

        // auth failed
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You are now logged out!');
    }
}
