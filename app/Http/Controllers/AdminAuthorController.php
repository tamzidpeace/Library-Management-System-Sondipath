<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    public function index() {
        $authors = Author::paginate(10);
        return view('admin.author.index', compact('authors'));
    }

    public function add() {
        return view('admin.author.add');
    }

    public function save(Request $request) {
        $author = new Author;

        $author->name = $request->name;

        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $author->save();

        return redirect(route('admin.author.index'))->with('success', 'New Author Added!');
    }

    public function edit($id) {
        $author = Author::findOrFail($id);
        return view('admin.author.edit', compact('id', 'author'));
    }

    public function editConfirm(Request $request) {
        $author = Author::findOrFail($request->id);

        $author->name = $request->name;
        $author->save();
        return redirect(route('admin.author.index'))->with('info', 'Author info updated!');
    }

    public function delete($id) {
        $author = Author::findOrFail($id);
        return view('admin.author.delete', compact('author', 'id'));
    }

    public function deleteConfirm(Request $request) {
        $author = Author::findOrFail($request->id);
        $author->delete();

        return redirect(route('admin.author.index'))->with('info', 'Author removed!');
    }
}
