<?php

use Illuminate\Support\Facades\Http;

function cocktailApiCall($page, ...$args)
{
    $values = $args;
    $apiKey = env("API_KEY");
    $results = 'https://www.thecocktaildb.com/api/json/v2/' . $apiKey . '/' . $page . '';

    $results = Http::get($results)->json();

    return $results;
}
