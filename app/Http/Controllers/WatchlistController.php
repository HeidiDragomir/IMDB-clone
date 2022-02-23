<?php

namespace App\Http\Controllers;


use App\Models\Watchlist;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;

class WatchlistController extends Controller
{

    public function index()
    {
        return view("movies.watchlist", [
            "watchlists" => Watchlist::paginate(10),
        ]);
    }


    public function store()
    {
        $attributes = request()->validate([
            "movie_id" => ['required', Rule::exists('movies', 'id')]
        ]);
        
        $attributes['user_id'] = request()->user()->id;
        
        Watchlist::create($attributes);


        // Redirect
        return back();

        //return Redirect::back()->with("message", "Operation Successful !");
    }
}


