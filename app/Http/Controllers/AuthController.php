<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);


        $token = $user->createToken("myapptoken")->plainTextToken;

        return response()->json([
            'message' => "registered succesfully",
            "data" => [
                "user" => $user,
                "token" => $token
            ]
        ]);
    }

    public function login(LoginRequest $request)
    {
        $user = User::query()->where('email', $request->email)->first();
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => "invalid credentials"
            ], 401);
        }

        $token = $user->createToken("myapptoken")->plainTextToken;

        return response()->json([
            'message' => "logged in successfully",
            "data" => [
                "user" => $user,
                "token" => $token
            ]
        ]);
    }



    public function logout() {}

    public function myprofile() {}
}
