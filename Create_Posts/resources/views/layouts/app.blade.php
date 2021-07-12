<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <nav class="p-4 bg-white text-indigo-600 flex justify-between mb-1">
        <ul class="flex items-center text-indigo-600">
            <li>
                <a href="/home" class="p-3">Home</a>
            </li>

            <li>
                <a href="{{ route('posts') }}"class="p-3">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="{{route('profile')}}" class="p-3">Welcom {{ auth()->user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout')}}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit" class="p-3">Logout</button>
                </form>

            </li>
            @endauth
            @guest
            <li>
                <a href="{{route('register')}}" class="p-3">Register</a>
            </li>
            <li>
                <a href="{{route('login')}}" class="p-3">login</a>
            </li>
            @endguest
        </ul>

    </nav>

    @include('inc.mesg')
    @yield('content')


</body>
</html>
