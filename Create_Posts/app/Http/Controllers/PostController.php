<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required'
        ]);

        // Post::create([
        //     'user_id' => auth()->user()->id,
        //     'description' => $request->desc
        // ]);
        $request->user()->posts()->create([
            'description' => $request->desc
        ]);
        return back();
    }
}
