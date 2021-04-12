<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function search(request $Request)
    {
        if ($Request->input('searchText') != null) {
            dd($Request);
        }

        $search = str_replace(' ', '', $Request->search);
        $data = cocktailApiCall('/filter.php?i=' . $search . '');
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
