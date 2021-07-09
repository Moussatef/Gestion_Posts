@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <h3 class="text-center mb-4">register</h3>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" placeholder="Your name" name="name" class="bg-gray-100 border-2 w-full p-4 rounde-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" placeholder="Your Email" name="email" class="bg-gray-100 border-2 w-full p-4 rounde-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>

                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password"  class="sr-only">Password</label>
                    <input type="password" placeholder="Password" name="password" class="bg-gray-100 border-2 w-full p-4 rounde-lg @error('password') border-red-500 @enderror" value="">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>

                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounde-lg @error('password') border-red-500 @enderror" value="">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full ">Register</button>
                </div>
            </form>
        </div>
    </div>

@endsection

