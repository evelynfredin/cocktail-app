<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    // public function apiCallback()
    // {
    //     $apiKey = env("API_KEY");
    //     $url = 'https://www.thecocktaildb.com/api/json/v2/' . $apiKey . '/popular.php';

    //     $response = Http::get($url);
    //     $data = $response->json();

    //     return view('api.index')->with('data', $data);
    // }

    public function search(request $Request)
    {
        $apiKey = env("API_KEY");
        $search = str_replace(' ', '', $Request->search);
        $countInputs = explode(",", $search);

        $searchForRecipe = 'https://www.thecocktaildb.com/api/json/v2/' . $apiKey . '/filter.php?i=' . $search . '';


        $response = Http::get($searchForRecipe);
        $data = $response->json();

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

        $favorites = Favorites::where('user_id', auth()->id())->get();
        return view('index', compact('data', 'favorites'));
    }
}
