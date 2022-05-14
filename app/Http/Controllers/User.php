<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function getUser(Request $request)
    {
        return Auth::user();
    }

    public function getUserConnected($id)
    {
        return response()->json(User::with('forfait')->get());
    }
}
