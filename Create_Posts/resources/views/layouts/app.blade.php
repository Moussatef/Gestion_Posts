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
    <nav class="px-6 py-4 bg-white text-indigo-600 flex justify-between mb-1">
        <ul class="flex items-center text-indigo-600">
            <li class=" mr-4 flex items-center" >
                <a href="/home" class="">
                <svg class="h-5 w-5 mr-2" height="511pt" viewBox="0 1 511 511.999" width="511pt" xmlns="http://www.w3.org/2000/svg"><path d="m498.699219 222.695312c-.015625-.011718-.027344-.027343-.039063-.039062l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.808594-33.328126-13.808594-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.144532.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.441406 13.234375 31.273437 13.746093.484375.046876.96875.070313 1.457031.070313h8.320313v153.695313c0 30.417968 24.75 55.164062 55.167969 55.164062h81.710937c8.285157 0 15-6.71875 15-15v-120.5c0-13.878906 11.292969-25.167969 25.171875-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.28125 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.164062v-153.695313h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.8125 18.359375-18.367187 18.367187-48.253906.027344-66.632813zm-21.242188 45.421876c-3.238281 3.238281-7.542969 5.023437-12.117187 5.023437h-22.71875c-8.285156 0-15 6.714844-15 15v168.695313c0 13.875-11.289063 25.164062-25.167969 25.164062h-66.710937v-105.5c0-30.417969-24.746094-55.167969-55.167969-55.167969h-48.195313c-30.421875 0-55.171875 24.75-55.171875 55.167969v105.5h-66.710937c-13.875 0-25.167969-11.289062-25.167969-25.164062v-168.695313c0-8.285156-6.714844-15-15-15h-22.328125c-.234375-.015625-.464844-.027344-.703125-.03125-4.46875-.078125-8.660156-1.851563-11.800781-4.996094-6.679688-6.679687-6.679688-17.550781 0-24.234375.003906 0 .003906-.003906.007812-.007812l.011719-.011719 208.847656-208.839844c3.234375-3.238281 7.535157-5.019531 12.113281-5.019531 4.574219 0 8.875 1.78125 12.113282 5.019531l208.800781 208.796875c.03125.03125.066406.0625.097656.09375 6.644531 6.691406 6.632813 17.539063-.03125 24.207032zm0 0"/></svg>
                </a>
                <a href="/home" class=""> Home</a>
            </li>

            <li class="flex items-center" >

                <a href="{{ route('posts') }}" class="">
                <svg class="h-5 w-5 mr-2" id="_x31__x2C_5" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m7.323 10.5h-2.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h2.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g><g><path d="m19.323 10.5h-7.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h7.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g><g><path d="m7.323 14.5h-2.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h2.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g><g><path d="m19.323 14.5h-7.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h7.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g><g><path d="m7.323 18.5h-2.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h2.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g><g><path d="m19.323 18.5h-7.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h7.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g><g><path d="m21.25 23h-18.5c-1.517 0-2.75-1.233-2.75-2.75v-16.5c0-1.517 1.233-2.75 2.75-2.75h18.5c1.517 0 2.75 1.233 2.75 2.75v16.5c0 1.517-1.233 2.75-2.75 2.75zm-18.5-20.5c-.689 0-1.25.561-1.25 1.25v16.5c0 .689.561 1.25 1.25 1.25h18.5c.689 0 1.25-.561 1.25-1.25v-16.5c0-.689-.561-1.25-1.25-1.25z"/></g><g><path d="m23.25 6h-22.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h22.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/></g></svg>
                </a>
                <a href="{{ route('posts') }}" class="">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">

            @auth('web')
            <li class="w-20 flex items-center" >
                    <form action="{{ route('logout')}}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit" class="p-3">Logout</button>
                    </form>
            </li>
            <li class="flex items-center ">
                <a href="{{route('profile')}}" class="p-3">Welcome {{ auth()->user()->name }}</a>
                <a href="{{route('profile')}}" class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Welcome {{ auth()->user()->name }}</span>
                <svg class="h-8 w-8 rounded-full" height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientTransform="matrix(1 0 0 -1 0 -19430)" gradientUnits="userSpaceOnUse" x1="0" x2="512" y1="-19686" y2="-19686"><stop offset="0" stop-color="#00f38d"/><stop offset="1" stop-color="#009eff"/></linearGradient><path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="url(#a)"/><path d="m314.203125 247.9375c23.515625-17.710938 38.75-45.851562 38.75-77.488281 0-53.457031-43.492187-96.949219-96.953125-96.949219-53.457031 0-96.949219 43.492188-96.949219 96.949219 0 31.636719 15.230469 59.777343 38.746094 77.488281-62.960937 23.632812-107.894531 84.445312-107.894531 155.5625h30c0-75.046875 61.054687-136.097656 136.101562-136.097656 75.042969 0 136.097656 61.050781 136.097656 136.097656h30c-.003906-71.117188-44.933593-131.929688-107.898437-155.5625zm-125.152344-77.488281c0-36.917969 30.03125-66.949219 66.949219-66.949219s66.949219 30.03125 66.949219 66.949219-30.03125 66.953125-66.949219 66.953125-66.949219-30.035156-66.949219-66.953125zm0 0" fill="#fff"/></svg>
            </a>
            </li>
                @endauth
                @auth('admin')
                <li class="w-20 flex items-center" >
                    <form action="{{ route('admin.logout')}}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit" class="p-3">Logout</button>
                    </form>
                </li>
                <li class="flex items-center ">
                    <a href="{{route('admin.dashboard')}}" class="p-3">Welcome {{ Auth::guard('admin')->user()->name }}</a>
                    <a href="{{route('admin.dashboard')}}" class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Welcome {{ Auth::guard('admin')->user()->name }}</span>
                    <svg class="h-8 w-8 rounded-full" height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientTransform="matrix(1 0 0 -1 0 -19430)" gradientUnits="userSpaceOnUse" x1="0" x2="512" y1="-19686" y2="-19686"><stop offset="0" stop-color="#00f38d"/><stop offset="1" stop-color="#009eff"/></linearGradient><path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="url(#a)"/><path d="m314.203125 247.9375c23.515625-17.710938 38.75-45.851562 38.75-77.488281 0-53.457031-43.492187-96.949219-96.953125-96.949219-53.457031 0-96.949219 43.492188-96.949219 96.949219 0 31.636719 15.230469 59.777343 38.746094 77.488281-62.960937 23.632812-107.894531 84.445312-107.894531 155.5625h30c0-75.046875 61.054687-136.097656 136.101562-136.097656 75.042969 0 136.097656 61.050781 136.097656 136.097656h30c-.003906-71.117188-44.933593-131.929688-107.898437-155.5625zm-125.152344-77.488281c0-36.917969 30.03125-66.949219 66.949219-66.949219s66.949219 30.03125 66.949219 66.949219-30.03125 66.953125-66.949219 66.953125-66.949219-30.035156-66.949219-66.953125zm0 0" fill="#fff"/></svg>
                </a>
                </li>
                @endauth
                @if(!Auth::guard('admin')->user())
                    @guest
                    <li>
                        <a href="{{route('register')}}" class="p-3">Register</a>
                    </li>
                    <li>
                        <a href="{{route('login')}}" class="p-3">login</a>
                    </li>
                    @endguest
                @endif

        </ul>
    </nav>
@auth('web')
    @include('inc.mesg')
@endauth

    @yield('content')


</body>
</html>
