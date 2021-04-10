@if ($searchData === 'No drinks or recipes could be found!')
    <div class="content-center flex justify-center">
        {{ $searchData }}
    </div>
@else
    <h2 class="text-center font-bold text-2xl mt-10 uppercase">{{ $text ?? '' }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-10">
        @foreach ($searchData['drinks'] as $drink)
            <div class="w-full flex flex-col justify-between bg-white rounded-t-md shadow-xl gap-4 my-5">
                <div>
                    <div class="content-center flex justify-center relative">
                        <a href="{{ route('recipe', $drink['idDrink']) }}">
                            <img src="{{ $drink['strDrinkThumb'] }}" alt="{{ $drink['strDrink'] }}" class="w-full h-[156px] object-cover rounded-t-md">
                        </a>
                        <div class="flex bg-main text-yellow text-sm rounded-full py-1 px-2 absolute bottom-0 right-0 m-2 mt-2">
                            <span class="whitespace-nowrap">
                                <svg class="inline-block w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                10 mins
                            </span>
                        </div>
                    </div>
                    <div class="p-5">
                        <a class="text-main hover:text-indigo-900" href="{{ route('recipe', $drink['idDrink']) }}">
                            <h3 class="text-lg font-semibold">{{ $drink['strDrink'] }}</h3>
                        </a>
                        <p>{{ $drink['strInstructions'] }}</p>
                    </div>
                </div>
                <div class="flex justify-between h-auto px-5 mb-5">
                    <a href="{{ route('recipe', $drink['idDrink']) }}">View recipe</a>
                    @auth

                        <!-- Check if use has favorited this drink -->
                        {{-- @if ($drink['idDrink']->favorites(auth()->user()))
                            <form action="{{ route('deletefavorite', $drink['idDrink']) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <svg class="w-5 cursor-pointer text-red fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </form>
                        @else
                            <!-- Show the form below -->
                        @endif --}}

                        <form action="{{ route('addfavorite', $drink['idDrink']) }}" method="post">
                            @csrf
                            <button type="submit">
                                <svg class="w-5 hover:text-red hover:fill-current cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        @endforeach
    </div> <!-- End grid -->
@endif
