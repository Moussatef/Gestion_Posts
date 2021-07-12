@extends('layouts.app')

@section('content')

<div class="flex justify-center ">

    <div class="w-8/12 bg-white p-6 rounded-lg">
        <h1 class="text-6xl text-center tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
        <span class="block xl:inline">Edit Post</span>
        <span class="block text-indigo-600 xl:inline">Information</span>
      </h1>
        @auth
            <form action="{{ route('post.editpost') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4 mt-20">
                    <input type="hidden" name="id" value="{{$post->id}}" />

                    <label for="desc" class="sr-only">Title:</label>
                    <input type="text" name="title" id="title" value="{{$post->title}}"   class="bg-gray-100 border-2 w-full p-2 rounde-lg mb-4 @error('desc') border-red-500 @enderror" placeholder="write the title....." />

                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="desc" class="sr-only">Description</label>
                    <textarea name="desc" id="desc"  cols="30" rows="7" class="bg-gray-100 border-2 w-full p-3 rounde-lg @error('desc') border-red-500 @enderror" placeholder="write description....." >{{$post->description}}</textarea>

                    @error('desc')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                          Cover photo
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                          <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                              <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                              <label for="_file" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="_file" name="_file" type="file" class="sr-only">
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                              PNG, JPG, GIF up to 10MB
                            </p>
                          </div>
                        </div>
                    </div>

                        {{-- <label
                        class="w-64 ml-auto mt-3 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white text-purple-600 ease-linear transition-all duration-150">
                        <i class="fas fa-cloud-upload-alt fa-3x"></i>
                        <span class="mt-2 text-base leading-normal">Select a file</span>
                        <input type='file' name="_file" class="hidden" />
                        </label> --}}

                    <div class="">
                        <button type="submit" class="bg-blue-500 text-white px-4 mt-5 py-3 rounded font-medium w-3/6 ml-80 ">Post</button>
                    </div>
                </div>
            </form>
       @endauth
    </div>
</div>

@endsection
