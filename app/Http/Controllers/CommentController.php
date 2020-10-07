<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create($request->all());
        return redirect (action('Frontend\PageController@show', $request->commendable_id));
    }

    public function index(){
        $comments = Comment::orderBy('id', 'asc')->paginate(6);
        return view('comments.index', compact('comments'));
    }
}
