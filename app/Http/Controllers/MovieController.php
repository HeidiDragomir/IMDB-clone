<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;


class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::latest()->filter(
                request(['search', 'category'])
            )->paginate(8)->withQueryString()
        ]);
    }

    public function show(Movie $movie, Watchlist $watchlist)
    {
        return view('movies.show', [
            'movie' => $movie,
            'watchlist' => $watchlist
        ]);
    }
}
