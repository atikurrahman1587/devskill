<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required|min:8',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function user_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);
         User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard')->with('success', 'User created successfully');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
