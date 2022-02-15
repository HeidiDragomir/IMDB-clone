<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($movies)
    {
        dd(Movies::find($movies));

        return view("movies");
    }
}
