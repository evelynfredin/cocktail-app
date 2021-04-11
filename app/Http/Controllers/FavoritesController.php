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
        $favorites = User::with(['favorites'])->findOrFail(auth()->id());

        return view('user.profile', [
            'user' => $favorites
        ]);
    }

    public function storeFavorite(Request $request, $drink_id)
    {
        Favorites::create([
            'user_id' => $request->user()->id,
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
