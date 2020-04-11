<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function saveData(Request $request) {
        $saved_user = User::create(['uuid', $request->uuid]);

        return response()->json($saved_user);
    }
}
