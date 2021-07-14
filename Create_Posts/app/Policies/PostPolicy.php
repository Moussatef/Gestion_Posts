<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class PostPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Post $post)
    {
        if (auth()->user() || Auth::guard('admin')->user())
            return $user->id === $post->user_id;
        else {
            return back();
        }
    }
}
