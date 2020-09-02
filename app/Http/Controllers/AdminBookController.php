<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    public function add() {
        return view('admin.book.add');
    }
}
