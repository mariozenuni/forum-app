<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterUserRequest;
use App\Http\Requests\User\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request){

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        $token = $user->createToken('myToken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);
    }  
    public function login(LoginUserRequest $request){

       //check email
       $user = User::where('email',$request->email)->first();
       
       //check password 
        
       if(!$user || !Hash::check($request->password,$user->password)){
                return response([
                    'message'=>'Incorrect password'
                ],401);
       }

        $token = $user->createToken('myToken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,200);
       
     
    }      

    public function logout(Request $request){

        auth()->user()->tokens()->delete();
       
        return response([
            'message'=>'User Logged out'
        ]);
    }
}
