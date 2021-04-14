<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Favorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update(User $user, Request $request)
    {
        $this->authorize('edit', $user);

        $this->validate($request, [
            'username' => 'required|max:255|alpha_num',
            'email' => 'required|max:255|email',
            'password' => 'nullable|confirmed|min:6',
        ]);

        if (request()->has('password')) {
            $password = Hash::make($request->password);
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $password
            ]);
        } else {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
            ]);
        }

        return back()->with('status', 'Your profile has been updated.');
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        $request->session()->invalidate();

        return redirect()->route('login')->with('deleteduser', 'All your information has been deleted.');
    }
}
