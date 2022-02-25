<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function store(Request $request, Movie $movie)
    {
        /* if ($movie->addedBy($request->user())) {
            return response(null, 409);
        } */

        $movie->watchlists()->create([
            'user_id' => $request->user()->id,
        ]);
        return back()->with([
            'success' => 'Movie Added To Watchlist!',
            'color' => 'success'
        ]); 
    }

    public function show()
    {
        $id = Auth::user()->id;
        $watchlists = Watchlist::where('user_id', $id)->get();

        return view('movies.watchlist', [
            'watchlists' => $watchlists
        ]);
    }

    
    public function destroy()
    {
        $id = request('id');
        Watchlist::find($id)->delete();
        return back()->with([
            'success' => 'Movie Deleted From Watchlist!',
            'color' => 'danger'
        ]); 
    }
    
}
