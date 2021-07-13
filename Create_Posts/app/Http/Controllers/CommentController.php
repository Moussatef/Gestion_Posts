<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{

    public function __construct(){
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function store(Request $request,Post $post){
        $request->validate([
            'comment_inp' => 'required|string',
        ]);

        $cmt = Comment::create([
            'comment' => $request->comment_inp,
            'post_id' => $post->id,
            'user_id' => auth()->user()->id,
        ]);

        return back();


    }
}
