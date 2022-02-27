<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        //
        return view("admin.users.index", [
            "users" => User::latest()
                ->paginate(20)
                ->withQueryString(),
        ]);
    }

    public function create()
    {
        return view("admin.users.create");
    }

    public function edit(User $user)
    {
        return view("admin.users.edit", ["user" => $user]);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            "username" => "required",
            /* "name" => [
                "required",
                Rule::unique("movies", "slug")->ignore($movie),
            ], */
            "name" => "required",
            "email" => "required",
        ]);

        $user->update($attributes);

        return redirect("/admin/dashboard/users")->with(
            "success",
            "User Updated!"
        );
    }

    public function store()
    {
        $attributes = request()->validate([
            "username" => "required",
            "password" => "required",
            "name" => "required",
            "email" => "required",
            "is_admin" => "required",
        ]);

        User::create($attributes);

        return redirect("/");
    }
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with("success", "User Deleted!");
    }
}
