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
        $users = User::paginate(10);
        return view('admin.users.users', compact('users'));
    }

    public function editUser($id) {
        $user = User::find($id);
        return view('admin.users.edit_user', compact('id', 'user'));
    }

    public function editUserConfirm(Request $request) {
        $user = User::find($request->id);

        $user->name = $request->name;
        $user->role = $request->role;

        $user->save();

        return redirect(route('admin.users'))->with('success', 'User info updated');

    }

    public function deleteUser($id) {
        $user = User::find($id);

        return view('admin.users.delete_user', compact('user', 'id'));
    }

    public function deleteUserConfirm(Request $request) {
        $user = User::find($request->id);

        $user->delete();

        return redirect(route('admin.users'))->with('info', 'User Removed');
    }
}
