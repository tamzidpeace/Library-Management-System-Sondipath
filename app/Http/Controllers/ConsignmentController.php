<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ConsignmentController extends Controller
{
    function index() {
        return view('admin.book.consignment');
    }

    function create(Request $request) {
        $book = Book::where('isbn', $request->isbn)->first();;

        if($book) {
            //return $book;
            return view('admin.book.calculate', compact('book'));
        } else{
            return back()->with('info', 'No Book Found, Please enter a valid ISBN');
        }
    }

    function calculate() {

    }
}
