<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function __construct(){
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function store(Request $request,$id){
        $request->validate([
            'comment_inp' => 'required|string',
            'id_post' => 'required'
        ]);

        $cmt = Comment::create([
            'comment' => $request->comment_inp,
            'post_id' => $request->id_post,
            'user_id' => auth()->user->id,
        ]);

        return back();


    }
}
