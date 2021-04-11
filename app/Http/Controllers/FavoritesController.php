<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $favorites = User::findOrFail(auth()->id());

        $drinks = Favorites::where('user_id', auth()->id())->get();

        foreach ($drinks as $drink) {
            $savedDrinks[] = cocktailApiCall('lookup.php?i=' . $drink->drink_id . '')['drinks'];
        }

        return view('user.profile', [
            'user' => $favorites,
            'drinks' => $savedDrinks
        ]);
    }

    public function storeFavorite($drink_id)
    {
        Favorites::create([
            'user_id' => auth()->user()->id,
            'drink_id' => $drink_id
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request, $drink_id)
    {
        Favorites::where([
            'user_id' => auth()->id(),
            'drink_id' => $drink_id
        ])->delete();
        return redirect()->back();
    }
}
