<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktailnator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-background container mx-auto text-main">
    <main class="container px-10">
        <div class="flex justify-end my-10">
            <button class=" bg-main text-yellow px-6 py-2 rounded-lg hover:bg-indigo-900 transition ease-out duration-200">Sign in</button>
        </div>
        <div class="flex flex-col justify-center mt-10">
            <h1 class="text-center text-4xl font-black">COCKTAILNATOR</h1>
            <p class="text-center my-5">Search for ingredients or beverages to find the perfect cocktail</p>

            <div class="flex justify-center mx-20 md:w-[574px] h-[40px] md:h-[50px] md:mx-auto">
                <input class="px-5 w-full rounded-l-lg border border-main bg-gray-50" type="search" name="search" id="search" placeholder="Vodka, gin">
                <button class="rounded-r-lg bg-main px-4 text-yellow hover:bg-indigo-900" type="submit">Search</button>
            </div>

        </div>

        <div class="flex flex-col justify-center mt-20">
            <h2 class="text-center font-bold text-xl">Most popular ingredients</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Cards -->
                <div class="w-full bg-white rounded-t-md shadow-xl gap-4 my-5">
                    <div class="content-center flex justify-center relative">
                        <img src="{{ asset('img/preview.jpeg') }}" alt="nice cocktail" class="w-full h-[156px] object-cover rounded-t-md">
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
                        <h3 class="text-lg font-semibold">Drink name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, maiores.</p>
                    </div>
                    <div class="flex justify-between px-5 mb-5">
                        <a class="text-gray-500 hover:text-main" href="#">View recipe</a>
                        <svg class="w-5 hover:text-red hover:fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>

                <div class="w-full bg-white rounded-t-md shadow-xl gap-4 my-5">
                    <div class="content-center flex justify-center relative">
                        <img src="{{ asset('img/preview.jpeg') }}" alt="nice cocktail" class="w-full h-[156px] object-cover rounded-t-md">
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
                        <h3 class="text-lg font-semibold">Drink name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, maiores.</p>
                    </div>
                    <div class="flex justify-between px-5 mb-5">
                        <a class="text-gray-500 hover:text-main" href="#">View recipe</a>
                        <svg class="w-5 hover:text-red hover:fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>

                <div class="w-full bg-white rounded-t-md shadow-xl gap-4 my-5">
                    <div class="content-center flex justify-center relative">
                        <img src="{{ asset('img/preview.jpeg') }}" alt="nice cocktail" class="w-full h-[156px] object-cover rounded-t-md">
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
                        <h3 class="text-lg font-semibold">Drink name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, maiores.</p>
                    </div>
                    <div class="flex justify-between px-5 mb-5">
                        <a class="text-gray-500 hover:text-main" href="#">View recipe</a>
                        <svg class="w-5 hover:text-red hover:fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>

                <div class="w-full bg-white rounded-t-md shadow-xl gap-4 my-5">
                    <div class="content-center flex justify-center relative">
                        <img src="{{ asset('img/preview.jpeg') }}" alt="nice cocktail" class="w-full h-[156px] object-cover rounded-t-md">
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
                        <h3 class="text-lg font-semibold">Drink name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, maiores.</p>
                    </div>
                    <div class="flex justify-between px-5 mb-5">
                        <a class="text-gray-500 hover:text-main" href="#">View recipe</a>
                        <svg class="w-5 hover:text-red hover:fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <!-- End cards -->
            </div> <!-- End grid -->
        </div>
    </main>
</body>

</html>
