<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin.dashboard');
    }

    public function users() {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }
}
