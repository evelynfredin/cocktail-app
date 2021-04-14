# Cocktailnator

Do you ever wish you were a _cocktail master_? Worry not, **Cocktailnator** has your back!

## Features

-   Friendly UI
-   Discover hundreds of recipes
-   Search by ingredients or beverages
-   Save your favorite recipes
-   Easily change username, email and password
-   If you regert it all, you can also delete your account, no hard feelings

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
