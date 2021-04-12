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

function search($data)
{
    $drinkKey = 0;
    if ($data['drinks'] === "None Found") {
        $data = 'No drinks or recipes could be found!';
    } else {
        foreach ($data['drinks'] as $drink) {
            $searchEveryDrink =  'https://www.thecocktaildb.com/api/json/v2/9973533/lookup.php?i='
                . $drink['idDrink'] . '';

            $responseDrink = Http::get($searchEveryDrink);
            $dataDrink = $responseDrink->json();

            foreach ($dataDrink['drinks'] as $key => $value) {
                $data['drinks'][$drinkKey] = $value;
                $drinkKey++;
            }
        }
    }
    return $data;
}
