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
        $searchForRecipe = 'https://www.thecocktaildb.com/api/json/v2/' . $api_key . '/popular.php';

        $response = Http::get($searchForRecipe);
        $data = $response->json();

        return view('index', [
            'popularDrinks' => $data
        ]);
    }
}
