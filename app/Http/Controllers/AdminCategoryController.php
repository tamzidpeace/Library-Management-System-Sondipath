<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index() {
        $categories = Category::paginate(10);
        return view('admin.category.manage', compact('categories'));
    }

    public function add() {
        return view('admin.category.add');
    }

    public function save(Request $request) {
        $category = new Category;

        $category->name = $request->name;

        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $category->save();

        return redirect(route('admin.category.index'))->with('success', "New Category Added");
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('id', 'category'));
    }

    public function editConfirm(Request $request) {
        $category = Category::findOrFail($request->id);

        $category->name = $request->name;
        $category->status = $request->status;

        $category->save();

        return redirect(route('admin.category.index'))->with('info', 'category info updated');
    }

    public function delete($id) {
        $category = Category::findOrFail($id);
        return view('admin.category.delete', compact('id', 'category'));
    }

    public function deleteConfirm(Request $request) {
        $category = Category::findOrFail($request->id);
        $category->delete();

        return redirect(route('admin.category.index'))->with('info', 'category removed');
    }
}
