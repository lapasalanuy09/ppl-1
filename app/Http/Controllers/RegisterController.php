<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auths.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed'
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // Log the user in after registration
        Auth::login($user);

        return redirect()->route('login')->with('pesan', 'berhasil');
    }
}
