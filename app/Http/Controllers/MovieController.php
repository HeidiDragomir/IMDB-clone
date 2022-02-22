<?php

namespace App\Http\Controllers;

use App\Models\Movie;

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

    public function show(Movie $movie)
    {
        return view('movies.show', [
            'movie' => $movie
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => 'required|unique:movies',
            'year' => 'required',
            'body' => 'required',
            'photo_poster' => 'required',
            'photo_bg' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        Movie::create($attributes);

        return redirect('/');
    }
}
