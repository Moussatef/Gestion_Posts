<?php

namespace App\Http\Controllers;

use App\Models\Hashtag;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    public function index()
    {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(5);
        return view('posts.index', [
            'posts' => $posts,
            'sh' => 'true'
        ]);
    }

    public function editpost($id)
    {
        $post = Post::find($id);
        return view('posts.editpost', [
            'post' =>  $post
        ]);
    }
    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->update($request->all());
        return $this->show($post);
    }

    public function show(Post $post)
    {
        // $posts = Post::latest()->with(['user','likes'])->paginate(15);
        return view('posts.show', [
            'post' => $post,
            'sh' => 'false'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'desc' => 'required|string',
            'hashtag' => 'string|nullable',
            '_file' => 'nullable'
        ]);

        // Post::create([
        //     'user_id' => auth()->user()->id,
        //     'description' => $request->desc
        // ]);

        if (empty($request->_file)) {
            $request->user()->posts()->create([
                'title' => $request->title,
                'description' => $request->desc,
                'img' => 'NULL'
            ]);
        } else {
            $fileUpload = new FileUploadController;
            $newname = $fileUpload->upload($request);

            $request->user()->posts()->create([
                'title' => $request->title,
                'description' => $request->desc,
                'img' =>  $newname
            ]);
        }

        if (!empty($request->hashtag)) {

            $post_id = Post::select('id')->latest()->get()->first();
            // dd($post_id->id);
            Hashtag::create([
                'hashtag' => $request->hashtag,
                'post_id' => $post_id->id,
            ]);
        }

        return back()->with('success', 'post is created successfully');


        // return Post::select('id')->latest()->get()->first();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
