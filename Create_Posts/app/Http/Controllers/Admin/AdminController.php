<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->with(['user', 'likes', 'comments'])->paginate(20);
        return view('Admin.adminDash', [
            'posts' => $posts,
            'sh' => 'true'
        ]);
    }

    public function delete(Post $post)
    {
        // dd($post);
        // $post->delete();
        if ($post->delete())
            return back()->with('success', 'Post is deleted');
        else
            return back()->with('error', 'Post not deleted');
    }
}
