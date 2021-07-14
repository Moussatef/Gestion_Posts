<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->with(['user', 'likes', 'comments'])->paginate(10);
        $user = User::all();
        $likes = Like::all();
        $comments = Comment::all();

        return view('Admin.adminDash', [
            'posts' => $posts,
            'user' => $user,
            'likes' => $likes,
            'comments' => $comments,
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
    public function logout()
    {
        Auth::guard('admin')->logout();
        return view('posts.home');
    }
}
