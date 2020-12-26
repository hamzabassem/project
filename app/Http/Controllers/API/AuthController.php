<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function login(Request $request){
        $authdata = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($authdata)){
            $user = Auth::user();
            $token = $user->createToken('token')->accessToken;

            return response([
                'status'=>'success',
                'token'=>$token
            ]);
        }

        return response([
            'status'=>'error',
            'message'=>'not valid'
        ]);





    }
}
