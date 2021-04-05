<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request){

        // $this->validate($request, [
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:6|confirmed'
        // ]);

        // User::create([
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);

        // return redirect()->route('/');
    }
}
