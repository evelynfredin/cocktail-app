<?php
    function cocktailApiCall($page, ...$args){

        $values = $args;
        $apiKey = env("API_KEY");
        $mostPopular = 'https://www.thecocktaildb.com/api/json/v2/' . $apiKey . '/' . $page . '';

        $response = Http::get($mostPopular);
        $mostPopular = $response->json();

        return $mostPopular;
    }
?>
