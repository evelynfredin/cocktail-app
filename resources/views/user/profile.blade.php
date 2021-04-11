@extends('layout.app')

@section('content')

    @if (Session::has('status'))
        <div class="mx-10 mb-5 bg-green-500 text-white p-3" id="confirmation">
            <p class="text-center">{{ Session::get('status') }}</p>
        </div>
    @endif

    <section class="container px-0 md:px-10 mx-auto grid grid-cols-1 lg:grid-cols-4">

        <div class="lg:col-span-3 mr-0 lg:mr-5 py-5 px-10 md:px-0 mb-10 h-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-10">


            @foreach ($drinks as $key => $value)

                <div class="w-full flex flex-col justify-between bg-white rounded-t-md shadow-xl gap-4 my-5">
                    <div class="content-center flex justify-center relative">
                        <a href="{{ route('recipe', $value[0]['idDrink']) }}">
                            <img src="{{ $value[0]['strDrinkThumb'] }}" alt="{{ $value[0]['strDrink'] }}" class="w-full h-[156px] object-cover rounded-t-md">
                        </a>

                    </div>
                    <div class="p-5">
                        <a class="text-main hover:text-indigo-900" href="{{ route('recipe', $value[0]['idDrink']) }}">
                            <h3 class="text-lg font-semibold">{{ $value[0]['strDrink'] }}</h3>
                        </a>
                        <p>{{ $value[0]['strInstructions'] }}</p>
                    </div>
                    <div class="flex justify-between h-auto px-5 mb-5">
                        <a href="{{ route('recipe', $value[0]['idDrink']) }}">View recipe</a>
                        <form action="{{ route('deletefavorite', $value[0]['idDrink']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <svg class="w-5 cursor-pointer text-red fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <div class="border col-span-1 bg-gray-50 py-5">
            <h3 class="font-xl font-bold text-center">Edit profile</h3>
            <form class="px-10" action="{{ route('update', $user) }}" method="post">
                @csrf
                @method('PUT')
                <!-- Edit username -->
                <div class="mb-5">
                    <label class="text-gray-500" for="username">Update username: </label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main"
                           type="text" name="username" id="username" value="{{ $user->username }}">
                </div>

                @error('username')
                    <div class="bg-red text-white text-sm uppercase p-2 text-center mb-3">
                        {{ $message }}
                    </div>
                @enderror
                <!-- /Edit username -->

                <!-- Edit email -->
                <div class="mb-5">
                    <label class="text-gray-500" for="email">Update email: </label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main"
                           type="email" name="email" id="email" value="{{ $user->email }}">
                </div>

                @error('email')
                    <div class="bg-red text-white text-sm uppercase p-2 text-center mb-3">
                        {{ $message }}
                    </div>
                @enderror
                <!-- /Edit email -->

                <!-- Edit password -->
                <div class="mb-5">
                    <label class="text-gray-500" for="password">Password change: </label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main"
                           type="password" name="password" id="password">
                </div>

                @error('password')
                    <div class="bg-red text-white text-sm uppercase p-2 text-center mb-3">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-5">
                    <label class="text-gray-500" for="password">Confirm password change: </label>
                    <input class="px-4 py-2 mt-2 placeholder:text-gray-400 w-full rounded-lg border border-main"
                           type="password" name="password_confirmation" id="password_confirmation">
                </div>
                <!-- /Edit password -->
                <button class="btn" type="submit">Update</button>

            </form>
        </div>
    </section>

@endsection
