<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login(Request $request) {
        $user = User::where('uuid', $request->uuid)->first();

        if($user) {
            $token = Auth::login($user);
            return $this->respondWithToken($token);
        } else {
            return response()->json(["message" => "Unauthorized"], 401);
        }
    }

    public function register(Request $request) {
        $saved_user = User::create(['uuid' => $request->uuid, 'email' => $request->uuid.'@'.'heltke.com']);

        return response()->json($saved_user);
    }
}
