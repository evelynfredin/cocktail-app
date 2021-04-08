@extends('layout.app')

@section('content')

    <section class="flex justify-center">
        <div class="w-full md:w-[480px] p-10">
            <h3 class="text-2xl font-semibold text-center mb-5">Welcome back!</h3>
            @include('errors')
            <form action="/login" method="POST">
                @csrf

                <div class="mb-5">
                    <label class="text-gray-500" for="email">Email:</label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main" placeholder="Your email" type="email" name="email" id="email">
                </div>

                <div class="mb-5">
                    <label class="text-gray-500 mb-2" for="password">Password:</label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main" placeholder="Your password" type="password" name="password" id="password">
                </div>

                <button class="btn" type="submit">Log in</button>
            </form>
            <div class="mt-8 flex flex-col h-auto items-center">
                <p class="mb-2">No account? No problem!</p>
                <a class="btn-alt" href="{{ route('register') }}">Create an account</a>
            </div>
        </div>
    </section>

@endsection
