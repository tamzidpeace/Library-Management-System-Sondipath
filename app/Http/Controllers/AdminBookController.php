<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        if(count($books)==0) 
            return redirect(route('admin.book.create'))
            ->with('info', 'No book info found, Let\'s Entry your first book.');
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

    function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.book.edit', compact('book', 'id'));
    }

    function editConfirm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required',],
            'isbn'  => ['required'],            
            'year'  => ['required'],
            'country'  => ['required'],
            'publisher'  => ['required'],
            'copyright'  => ['required'],
            'language'  => ['required'],
            'category'  => ['required'],
            'author'  => ['required'],
        ]);

        $book = Book::findOrFail($request->id);

        $book->name = $request->name;
        $book->authors = $request->author;
        $book->isbn = $request->isbn;        
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
            //first delete old file
            $file = $book->cover;
            unlink('image/cover/' . $file);

            //now add new file
            $file = $request->file('cover');
            $cover = time() . '_' . $file->getClientOriginalName();
            $file->move('image/cover', $cover);
            $book->cover = $cover;
        }

        $book->save();

        return redirect(route('admin.book.index'))->with('success', 'Book info updated');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.book.delete', compact('book', 'id'));
    }

    public function deleteConfirm(Request $request)
    {
        $book = Book::findOrFail($request->id);
        if (isset($book->cover)) {
            $file = $book->cover;
            unlink('image/cover/' . $file);
        }
        $book->delete();
        return redirect(route('admin.book.index'))->with('info', 'Book Deleted!');
    }

    function info($id) {
        $book = Book::findOrFail($id);
        return view('admin.book.info', compact('book', 'id'));
    }

    function search(Request $request) {
        $book = Book::where('isbn', $request->isbn)->orWhere('name', $request->isbn)->first();

        if($book) {
            return view('admin.book.info', compact('book'));
        } else {
            return back()->with('info', 'Sorry, There is no book of this ISBN');
        }
    }
}
