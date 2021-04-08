<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function index($id)
    {
        $api_key = 9973533;
        $url = 'https://www.thecocktaildb.com/api/json/v2/' . $api_key . '/lookup.php?i=' . $id . '';

        $response = Http::get($url);
        $data = $response->json();

        return view('viewRecipe', compact('data'));
    }
}
