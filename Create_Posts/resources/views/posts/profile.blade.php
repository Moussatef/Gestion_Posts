@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-5">
    <div class="w-3/12  ">
        <div class="p-6 bg-white mr-5">
            <h1 class="text-2xl font-medium mb-1">{{auth()->user()->name}}</h1>
            <p>Email : {{auth()->user()->email}}</p>
            <p>Date inscription : {{auth()->user()->created_at->diffForHumans()}} </p>
        </div>

        <div class="p-6 bg-gradient-to-r from-blue-600 to-gray-500 mr-5 mt-4">
            <h1 class="text-2xl text-white font-medium mb-1">N° Posted : {{auth()->user()->posts->count()}} {{Str::plural('post',auth()->user()->posts->count())}}</h1>
        </div>
        <div class="p-6 bg-gradient-to-r from-green-400 to-gray-500 mr-5 mt-4">
            <h1 class="text-2xl text-white font-medium mb-1">N° Likes received : {{auth()->user()->receivedLikes->count()}} {{Str::plural('like',auth()->user()->receivedLikes->count())}}</h1>
        </div>
        <div class="p-6 bg-gradient-to-r from-indigo-400 to-gray-500 mr-5 mt-4">
            <h1 class="text-2xl text-white font-medium mb-1">N° Comments received : {{auth()->user()->receivedComments->count()}} {{Str::plural('like',auth()->user()->receivedLikes->count())}}</h1>
        </div>
    </div>
    <div class="w-7/12">

        <div class="bg-white p-6 rounded-lg">
            @if (auth()->user()->posts->count())
            @foreach (auth()->user()->posts as $pst )
                <x-post :pst="$pst" :sh="$sh" />
            @endforeach
            {{ $posts->links() }}
        @else
            <p>{{auth()->user()->name}} does not have any posts</p>
        @endif
        </div>
    </div>
</div>

@endsection

