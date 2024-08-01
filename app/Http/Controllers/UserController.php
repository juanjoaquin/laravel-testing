<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    } 

    public function detail($id) 
    {
        $user = User::find($id);

        if($user === null) {
            return response()->json([
                'error' => 'Error 404: user not found'
            ], 404);
        }

        return response()->json($user);
    }
}
