<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('user.favorites');
    }

    public function update(User $user, Request $request)
    {
        $this->authorize('edit', $user);

        $this->validate($request, [
            'username' => 'required|max:255|alpha_num',
            'email' => 'required|max:255|email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($request->password === null) {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
            ]);
        } else {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
        return back()->with('status', 'Your profile has been updated.');
    }
}
