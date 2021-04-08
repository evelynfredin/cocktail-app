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
        $drink = $data['drinks'][0];

        $ingredients = [];

        for ($i = 1; $i <= 15; $i++) {
            $ingredient = $drink['strIngredient' . $i];
            $measure = $drink['strMeasure' . $i];

            if ($ingredient !== null && $measure !== null) {
                $ingredients[] = [
                    'ingredient' => $ingredient,
                    'measure' => $measure
                ];
            }
        }
        return view('viewRecipe', compact('drink', 'ingredients'));
    }
}
