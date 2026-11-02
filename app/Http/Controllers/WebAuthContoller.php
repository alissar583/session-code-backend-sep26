<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebAuthContoller extends Controller
{

    public function register(RegisterRequest $request)
    {
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        // auth()->login($user);
        Auth::login($user);

        return redirect()->route('users.index');
    }

    public function registerForm()
    {
        return view('register');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->route('users.index');
        }
        return back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.form');
    }
}