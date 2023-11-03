<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('role_id', 1);
        return view('admin.home', ['user' => $user]);
    }
}
