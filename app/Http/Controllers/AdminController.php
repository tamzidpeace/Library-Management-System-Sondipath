<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {

        $books = Book::all();
        $authors = Author::all();
        $categories = Category::all();

        $total_book = count($books);
        $total_author = count($authors);
        $total_category = count($categories);


        return view('admin.dashboard', compact('total_book', 'total_author', 'total_category'));
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
