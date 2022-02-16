<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MovieCommentsController extends Controller
{
     public function store(Movies $movie) {

        // validation
        request()->validate([
            'body' => 'required'
        ]);

        // add a comment for the given post
        $movie->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        // Redirect
        return back();
    }
}
