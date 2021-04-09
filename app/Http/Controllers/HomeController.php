<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $api_key = env("API_KEY");
        $mostPopular = 'https://www.thecocktaildb.com/api/json/v2/' . $api_key . '/popular.php';

        $response = Http::get($mostPopular);
        $mostPopular = $response->json();



        if (count($mostPopular['drinks']) > 15) {
            for ($x = 14; $x <= count($mostPopular['drinks']); $x++) {
                unset($mostPopular['drinks'][$x]);
            }
        }


        $latest = 'https://www.thecocktaildb.com/api/json/v2/' . $api_key . '/latest.php';

        $response = Http::get($latest);
        $latest = $response->json();

        $user = Auth::user();

        return view('index', [
            'user' => $user,
            'popularDrinks' => $mostPopular,
            'latestDrinks' => $latest,
            'visible' => 16
        ]);
    }
}
