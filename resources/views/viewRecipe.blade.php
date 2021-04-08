@extends('layout.app')

@section('content')

    {{-- @dump($drink) --}}

    <div class="w-full lg:w-[1100px] mx-auto px-10 flex flex-col md:flex-row justify-between">
        <div class="w-full lg:w-1/3 mr-10">
            <img src="{{ $drink['strDrinkThumb'] }}" alt="">
        </div>
        <div class="w-full mt-10 md:mt-0 lg:w-2/3 px-10">
            <h2 class="uppercase font-black text-2xl text-indigo-900 mb-5">{{ $drink['strDrink'] }}</h2>
            <div>
                <h3 class="font-semibold text-xl">Ingredients</h3>
                <ul>
                    @foreach ($ingredients as $ingredient)
                        <li class="border-b p-5 text-indigo-900">{{ $ingredient['measure'] }} {{ $ingredient['ingredient'] }}</li>
                    @endforeach
                </ul>
            </div>
            <h3 class="font-semibold text-xl mt-5">Directions</h3>
            <p>{{ $drink['strInstructions'] }}</p>
        </div>
    </div>

@endsection
