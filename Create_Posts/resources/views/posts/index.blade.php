@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @auth
                <form action="{{route('posts')}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="desc" class="sr-only">Body</label>
                        <textarea name="desc" id="desc" cols="30" rows="7" class="bg-gray-100 border-2 w-full p-4 rounde-lg @error('desc') border-red-500 @enderror" placeholder="write description....." ></textarea>

                        @error('desc')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="">
                            <button type="submit" class="bg-blue-500 text-white px-4 mt-5 py-3 rounded font-medium  ">Post</button>
                        </div>
                    </div>
                </form>
           @endauth
           @if ($posts->count())
              @foreach ($posts as $pst )

              <x-post :pst="$pst" :posts="$posts" />

              @endforeach
              {{ $posts->links() }}
           @else
              <p>No posts found</p>
           @endif
        </div>
    </div>

@endsection

