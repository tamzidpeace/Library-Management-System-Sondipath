<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('admin.book.index', compact('books'));
    }

    public function create()
    {
        return view('admin.book.add');
    }

    public function save(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required',],
            'isbn'  => ['required'],
            'pprice'  => ['required'],
            'sprice'  => ['required'],
            'year'  => ['required'],
            'country'  => ['required'],
            'publisher'  => ['required'],
            'copyright'  => ['required'],
            'language'  => ['required'],
            'category'  => ['required'],
            'author'  => ['required'],
        ]);

        $book = new Book();

        $book->name = $request->name;
        $book->authors = $request->author;
        $book->isbn = $request->isbn;
        $book->purchase_price = $request->pprice;
        $book->selling_price = $request->sprice;
        $book->copyright = $request->copyright;
        $book->year = $request->year;
        $book->country = $request->country;
        $book->category = $request->category;
        $book->publisher = $request->publisher;
        $book->language = $request->language;
        $book->amount = $request->amount;
        $book->edition = $request->edition;

        //cover image
        if (isset($request->cover)) {
            $file = $request->file('cover');
            $cover = time() . '_' . $file->getClientOriginalName();
            $file->move('image/cover', $cover);
            $book->cover = $cover;
        }

        $book->save();

        return back()->with('success', 'New Book Added');
    }
}
