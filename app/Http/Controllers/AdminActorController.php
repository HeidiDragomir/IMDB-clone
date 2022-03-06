<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminActorController extends Controller
{
    public function index()
    {
        return view('admin.actors.index', [
            'actors' => Actor::orderBy('name', 'asc')->paginate(20)->withQueryString()
        ]);
    }


    public function create()
    {
        return view('admin.actors.create');
    }

    public function store()
    {


        // ... 
        $attributes = request()->validate([
            'name' => 'required',
            'photo_url' => 'required',
            // 'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        Actor::create($attributes);

        return redirect('/admin/dashboard/actors')
            ->with([
                'success' => 'Actor is Added!',
                'color' => 'primary'
            ]);
    }

    public function edit(Actor $actor)
    {
        return view('admin.actors.edit', ['actor' => $actor]);
    }

    public function update(Actor $actor)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'photo_url' => 'required',
            // 'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $actor->update($attributes);

        return redirect('/admin/dashboard/actors')->with([
            'success' => 'Actor is Updated!',
            'color' => 'primary'
        ]);
    }

    public function destroy(Actor $actor)
    {
        $actor->delete();
        return back()->with([
            'success' => 'Actor is Deleted!',
            'color' => 'primary'
        ]);
    }
}
