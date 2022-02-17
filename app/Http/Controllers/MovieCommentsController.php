<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieCommentsController extends Controller
{
     public function store(Movie $movie) {

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
