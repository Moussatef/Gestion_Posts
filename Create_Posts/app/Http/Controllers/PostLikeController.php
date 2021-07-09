<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request)
    {
        // dd($post->checkLike($request->user()));

        if ($post->checkLike($request->user()))
            return response('already like this post', 409);
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);
        return back();
    }
}
