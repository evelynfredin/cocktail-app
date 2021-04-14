<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function reSearch()
    {
        $favorites = Favorites::where('user_id', auth()->id())->get();
        $data = session()->get('searchText');
        return view('index', compact('data', 'favorites'));
    }

    public function search(request $Request)
    {
        $search = str_replace(' ', '', $Request->search);
        $data = cocktailApiCall('/filter.php?i=' . $search . '');
        $data = search($data);

        $favorites = Favorites::where('user_id', auth()->id())->get();

        return view('index', compact('data', 'favorites'));
    }
}
