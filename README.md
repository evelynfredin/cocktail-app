# Cocktailnator

Do you ever wish you were a _cocktail master_? Worry not, **Cocktailnator** has your back!

## Features

-   Friendly UI
-   Discover hundreds of recipes
-   Search by ingredients or beverages
-   Save your favorite recipes
-   Easily change username, email and password
-   If you regret it all, you can also delete your account, no hard feelings

## Try this code:

-   Get your best shaker ready
-   Make sure you have previously installed PHP, Composer and NPM
-   Clone this repo on your computer
-   Install dependendcies

```
composer install
npm install
```

-   Copy the `.env` file

```
cp .env.example .env
```

-   Generate an App Key

```
php artisan key:generate
```

-   Add your prefered database to the `.env` file
-   If you have an API Key from [The Cocktail DB](https://www.thecocktaildb.com/api.php) you can add it there too
-   Run the migrations

```
php artisan migrate
```

-   Get a server running

```
php artisan serve
```

## Made by:

-   [Daniel Borgström](https://github.com/danielmedb)
-   [Evelyn Fredin](https://github.com/evelynfredin)


## Code review:

- Liked the features, that the user can change username, email and password easily. It seems like a real application.
- Nice way to add favorites to the user's profile, and could be much better without reloading the page.
- Very clean and obvious code.
- Good, that you have test for every feature.
- All tests worked as expected.
- the code is organized enough to be readable.
- Very good way to divide the routes in two groups: 'accessable by guests' and 'accessable by authenticated users'.
- Very nice design, but in 'index.plade.php' the card of 'Most popular and latest' , I think it could be better if you add padding-top.
- The controllers are written in an advanced way. Well done!
