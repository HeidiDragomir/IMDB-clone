<?php

namespace App\Http\Controllers;

use App\Models\ActorMovie;
use Illuminate\Http\Request;

class AdminActorMovieController extends Controller
{
    public function index()
    {
        return view('admin.actors.createconnection');
    }


    /* public function store()
    {
        $attributes = request()->validate([
            'actor_id' => 'required',
            'movie_id' => 'required',
        ]);

        ActorMovie::create($attributes);

        return redirect('/admin/dashboard/actors/create-connection')
            ->with([
                'success' => 'Connection is Created!',
                'color' => 'primary'
            ]);
    } */
}
