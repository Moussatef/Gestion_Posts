<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href=""class="p-3">Home</a>
            </li>

            <li>
                <a href=""class="p-3">Post</a>
            </li>
            @auth
            <li>
                <a href="{{route('profile')}}"class="p-3">Profile</a>
            </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href=""class="p-3">{{ auth()->user()->name }}</a>
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
                <a href="{{route('register')}}"class="p-3">Register</a>
            </li>
            <li>
                <a href="{{route('login')}}"class="p-3">login</a>
            </li>
            @endguest
        </ul>

    </nav>
    @yield('content')
</body>
</html>
