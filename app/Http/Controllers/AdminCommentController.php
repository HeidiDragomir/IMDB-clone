<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminCommentController extends Controller
{
    public function index()
    {
        return view('admin.approvalComments', [
            'comments' => Comment::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'stars' => 'required',
            'body' => 'required',
            'approved' => 'required',
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'user_id' => ['required', Rule::exists('user', 'id')]
        ]);

        Comment::create($attributes);

        return redirect('/');
    }


    public function approval(Request $request)
    {

        $comment = Comment::find($request->commentId);
        $approveVal = $request->approved;
        if ($approveVal == 'on') {
            $approveVal = 1;
        } else {
            $approveVal = 0;
        }

        $comment->approved = $approveVal;
        $comment->save();

        return back()->with([
            'success' => 'The comment is now published!',
            'color' => 'primary'
        ]);;
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('success', 'Comment Deleted!');
    }
}
