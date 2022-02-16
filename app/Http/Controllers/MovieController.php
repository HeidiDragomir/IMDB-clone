<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index', [
            'movies' => Movies::latest()->filter(
                request(['search', 'category'])
                )->paginate(8)->withQueryString()
        ]);  
    }

    public function show(Movies $movie) {
        return view('movies.movie', [
        'movie' => $movie
        ]);
    }
}