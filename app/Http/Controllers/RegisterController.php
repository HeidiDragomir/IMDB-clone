<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function create() {
        return view('register.register');
    }

    public function store() {
        // create the user
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users,username'],
            'email' => ['required', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:7', 'max:255'],
        ]);

        // create the user
        $user = User::create($attributes);

        // log the user in
        auth()->login($user);

        /* session()->flash('success', 'Your account has been created.'); */
        return redirect('/')->with([
                'success' => 'Your account has been created!',
                'color' => 'primary'
            ]);
    }
}

