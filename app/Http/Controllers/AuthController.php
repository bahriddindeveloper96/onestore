<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['The provided credential are incorrect']
            ]);
        }
        return response()->json([
            'token' => $user->createToken($request->email)->plainTextToken
        ]);
        //return $user->createToken($request->email)->plainTextToken;
    }
    public function register()
    {

    }
}
