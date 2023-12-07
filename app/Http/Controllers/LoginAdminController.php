<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest:admin", ["except"=>"logout"]);
    }

    public function formlogin()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            "email"=> "required|email|exists:admins",
            "password"=> "required"
        ]);

        if(Auth::guard('admin')->attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin.prefix'));
        }

        return back()->withErrors([
            'email'=> 'The Provided credentials do not match our records',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
