<h2 class="text-center font-bold text-xl"></h2>



@if ($searchData === 'No drinks or recipes could be found!')
    <div class="content-center flex justify-center">
        {{ $searchData }}
    </div>
@else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($searchData['drinks'] as $drink)
            <div class="w-full flex flex-col justify-between bg-white rounded-t-md shadow-xl gap-4 my-5">
                <div>
                    <div class="content-center flex justify-center relative">
                        <img src="{{ $drink['strDrinkThumb'] }}" alt="{{ $drink['strDrink'] }}" class="w-full h-[156px] object-cover rounded-t-md">
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
                        <h3 class="text-lg font-semibold">{{ $drink['strDrink'] }}</h3>
                        <p>{{ $drink['strInstructions'] }}</p>
                    </div>
                </div>
                <div class="flex justify-between h-auto px-5 mb-5">
                    <a href="{{ route('recipe', $drink['idDrink']) }}">View recipe</a>
                    <svg class="w-5 hover:text-red hover:fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
            </div>
        @endforeach
    </div> <!-- End grid -->
@endif
