<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    public function index($id)
    {
        $url = 'https://www.thecocktaildb.com/api/json/v2/' . env("API_KEY") . '/lookup.php?i=' . $id . '';

        $response = Http::get($url);
        $data = $response->json();

        return view('viewRecipe', compact('data'));
    }
}
