<?php

namespace App\Http\Controllers;

use App\Models\Mlist;
use App\Models\MlistMovie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MlistMovieController extends Controller
{

    public function store(Request $request)
    {
    
        $attributes = request()->validate([
            'mlist_id' => 'required',
            'movie_id' => 'required'
        ]);

        $attributes['user_id'] = $request->user()->id;

        MlistMovie::create($attributes);

        return back()->with([
            'success' => 'Movie added to list!',
            'color' => 'success'
        ]);

    }
}
