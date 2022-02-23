<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;

class WatchlistController extends Controller
{
    public function store(Movie $movie)
    {
        $movie->watchlists()->create([
            "user_id" => request()->user()->id,
            "movie_id" => request("id"),
        ]);

        // Redirect
        return back();

        //return Redirect::back()->with("message", "Operation Successful !");
    }
    public function show(Watchlist $watchlists)
    {
        return view("movies.watchlist", [
            "watchlists" => $watchlists,
        ]);
    }
}
