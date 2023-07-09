<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.verify',['except' => ['login','register']]);
    }

    public function login()
    {
        $credentials = request(['email','password']);

        if(!$token = auth()->attempt($credentials)){
            return response()->json(['error'=>'Unauthorizzed'],401);
        }

        return $this->respondWithTokern($token);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout(){
        auth()->logout();

        return response()->json(['message'=>'Succesfully logged out!']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token' => 'bearer',
            'expires_in' => auth()->factory()->getTTL()*60 //menit
        ]);
    }

    public function register(Request $request)
    {
        validator == Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique::users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 'error',
                'success' => false,
                'errror' => $validator->errors()->toArray()
            ],400);
        }
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    
        return response()->json([
            'message' => 'User has been created!',
            'user' => $user
        ]);
    }
}
