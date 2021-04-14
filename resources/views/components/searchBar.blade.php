<div class="px-10 flex flex-col justify-center mt-10">
    <h2 class="text-center text-4xl font-black">COCKTAILNATOR</h2>
    <p class="text-center my-5">Search for ingredients or beverages to find the perfect cocktail</p>
    <form method="POST" action="{{ route('search')}}">
        @csrf
        <div class="flex justify-center md:w-[574px] h-[40px] md:h-[50px] md:mx-auto">
            <input class="px-5 w-full rounded-l-lg border border-main bg-gray-50" type="search" name="search" id="search" placeholder="Vodka, gin">
            <button class="rounded-r-lg bg-main px-4 text-yellow hover:bg-indigo-900" name="submit" type="submit">Search</button>
        </div>
    </form>
</div>
