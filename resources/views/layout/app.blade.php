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
                <div>
                    <p>Welcoming user</p>
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
