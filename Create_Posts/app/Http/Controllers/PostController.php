<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
 public function __construct(){
     $this->middleware(['auth']);
 }
    public function index()
    {
        $posts = Post::latest()->with(['user','likes'])->paginate(15);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        // $posts = Post::latest()->with(['user','likes'])->paginate(15);
        return view('posts.show', [
            'post' => $post
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

    public function destroy(Post $post){
       $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
}
