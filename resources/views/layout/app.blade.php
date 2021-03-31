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
    <main class="container px-10">
        <!-- Navigation -->
        <div class="flex justify-end my-10">
            <button class=" bg-main text-yellow px-6 py-2 rounded-lg hover:bg-indigo-900 transition ease-out duration-200"><a href="{{ route('login') }}">Sign in</a></button>
        </div>

    <!-- /Navigation -->
    @yield('content')


            <!-- startpage -->
        </main>
    </body>

    </html>
