<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.category.manage', compact('categories'));
    }

    public function add() {
        return view('admin.category.add');
    }

    public function save(Request $request) {
        $category = new Category;

        $category->name = $request->name;

        $category->save();

        return redirect(route('admin.category.index'))->with('success', "New Category Added");
    }
}
