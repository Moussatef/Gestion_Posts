<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index()
    {
        // $user = auth()->user();
        // Mail::to('otman.moussatef@gmail.com')->send(new PostLiked());
        return view('posts.profile');
    }
}
