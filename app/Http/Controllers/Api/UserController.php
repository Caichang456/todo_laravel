<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $userValidated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $userValidated['name'],
            'email' => $userValidated['email'],
            'password' => bcrypt($userValidated['password'])
        ]);

        return response([
            'status' => true,
            'message' => 'User is successfully created!',
            'data' => $user
        ]);
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $user->token = $user->createToken('user')->plainTextToken;

            return response([
                'status' => true,
                'message' => 'User Login',
                'data' => $user
            ]);
        }
        else{
            return response([
                'status' => true,
                'message' => 'Wrong Email/Password'
            ]);
        }
    }
}
