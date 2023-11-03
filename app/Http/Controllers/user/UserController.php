<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role_id', 2)->get();
        return view('user.home', ['user' => $user]);
    }
}
