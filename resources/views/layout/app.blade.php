<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cocktailnator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-background container mx-auto text-main">
    <header class="container px-10 mt-10 mb-16">
        <!-- Navigation -->
        <div class="flex flex-col md:flex-row h-auto items-center justify-between">
            <!-- Here maybe we can hide the logo if the route is '/' -->
            <div class="mb-5 md:mb-0 ">
                <h1 class="text-xl uppercase font-black"><a class="text-main" href="/">Cocktailnator</a></h1>
            </div>

            @guest
                <div class="flex">
                    <a class="btn-alt mr-3" href="{{ route('register') }}">Sign up</a>
                    <a class="btn" href="{{ route('login') }}">Log in</a>
                </div>
            @endguest

            @auth
                <div class="flex items-center">
                    <p class="mr-2">Welcome, {{ $user->username }}!</p>
                    <a href="/logout" class="flex items-center text-sm py-1 px-2 uppercase font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </a>
                </div>
            @endauth

        </div>
    </header>
    <!-- /Navigation -->
    <main class="container">
        @yield('content')


        <!-- startpage -->
    </main>
</body>

</html>
