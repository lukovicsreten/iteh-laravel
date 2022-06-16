<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthKontroler extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $korisnik = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $korisnik->createToken('RegTkn')->plainTextToken;

        $response = [
            'Korisnik' => $korisnik,
            'Token' => $token,
        ];

        return response()->json($response);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json('Try again!');
        }

        $korisnik = User::where('email', $request['email'])->firstOrFail();

        $token = $korisnik->createToken('LoginTkn')->plainTextToken;

        $response = [
            'Korisnik' => $korisnik,
            'Token' => $token,
        ];

        return response()->json($response);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Logout!');
    }
}
