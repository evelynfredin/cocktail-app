@extends('layout.app')

@section('content')

    <section class="flex justify-center">
        <div class=" w-full md:w-[480px] p-10">
            <h3 class="text-2xl font-semibold text-center mb-5">Register</h3>
            <form action="{{ route('signup') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label class="text-gray-500" for="username">Username:</label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main" placeholder="Desired username" type="text" name="username" id="username" value="{{ old('username') }}">
                </div>

                @error('username')
                    <div class="bg-red text-white p-2 text-center my-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-5">
                    <label class="text-gray-500" for="email">Email:</label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main" placeholder="Your email" type="email" name="email" id="email" value="{{ old('email') }}">
                </div>

                @error('email')
                    <div class="bg-red text-white p-2 text-center my-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-5">
                    <label class="text-gray-500 mb-2" for="password">Password:</label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main" placeholder="Your password" type="password" name="password" id="password">
                </div>

                <div class="mb-5">
                    <label class="text-gray-500 mb-2" for="password">Confirm password:</label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main" placeholder="Your password, again" type="password" name="password_confirmation" id="password_confirmation">
                </div>

                @error('password')
                    <div class="bg-red text-white p-2 text-center my-2">
                        {{ $message }}
                    </div>
                @enderror

                <button class="btn" type="submit">Sign up</button>
            </form>
            <div class="mt-8 flex flex-col h-auto items-center">
                <p class="mb-2 text-center text-gray-500">By signing up you agree to our<br />
                    <a class="underline text-gray-400 hover:text-gray-500" href="#">User Agreement</a> and <a class="underline text-gray-400 hover:text-gray-500" href="#">Privacy Policy</a>
                </p>
            </div>
        </div>
    </section>

@endsection
