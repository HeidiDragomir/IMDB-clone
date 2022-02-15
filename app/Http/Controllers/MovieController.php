<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movies::get();
        dd($movies);
        return view("movies", ["movies" => $movies]);
    }
}
