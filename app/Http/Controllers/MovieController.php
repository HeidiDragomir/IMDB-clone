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
            'movies' => Movie::filter(
                request(['search', 'category']))
                ->orderBy('year', 'desc')
                ->orderBy('title', 'desc')
                ->paginate(8)->withQueryString()
        ]);
    }

    public function show(Movie $movie, Watchlist $watchlist)
    {
        $categories = Movie::where('category_id', $movie->category_id)->inRandomOrder()->get();

        return view('movies.show', [
            'movie' => $movie,
            'watchlist' => $watchlist,
            'categories' => $categories
        ]);
    }
}
