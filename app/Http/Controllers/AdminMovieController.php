<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class AdminMovieController extends Controller
{
    public function index()
    {
        return view('admin.movies.index', [
            'movies' => Movie::paginate(500)
        ]);
    }

    public function create()
    {
        return view('admin.movies.create');
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

    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', ['movie' => $movie]);
    }

    public function update(Movie $movie)
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

        $movie->update($attributes);

        return back()->with('success', 'Movie Updated!');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return back()->with('success', 'Movie Deleted!');
    }
}
