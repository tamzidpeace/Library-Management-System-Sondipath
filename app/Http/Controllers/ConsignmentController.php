<?php

namespace App\Http\Controllers;

use App\Book;
use App\Consignment;
use Illuminate\Http\Request;

class ConsignmentController extends Controller
{
    function index()
    {
        return view('admin.book.consignment');
    }

    function create(Request $request)
    {
        $book = Book::where('isbn', $request->isbn)->first();
        $isbn = $book->isbn;
        $currency = ['BDT', 'INR', 'USD'];
        $con = Consignment::where('isbn', $isbn)->first();

        if ($book) {

            return view('admin.book.calculate', compact('book', 'isbn', 'con', 'currency'));
        } else {
            return back()->with('info', 'No Book Found, Please enter a valid ISBN');
        }
    }

    function calculate(Request $request)
    {
        //return $request;
        $consignment = Consignment::where('isbn', $request->isbn)->first();

        if ($consignment) {


            $consignment->copy = $request->copy;
            $consignment->book_id = $request->book_id;
            $consignment->isbn = $request->isbn;
            $consignment->discount = $request->discount;
            $consignment->currency = $request->currency;
            $consignment->con_rate = $request->con_rate;
            $consignment->publisher_price = $request->pprice;

            $publisher_price = $request->pprice;

            $consignment->cost_price = $request->cprice;
            $consignment->sell_rate_o = $request->sfr;
            $consignment->sell_rate_d = $request->sfr2;

            $consignment->sell_price = $request->sprice;

            $consignment->save();
        } else {

            $consignment = new Consignment;

            $consignment->copy = $request->copy;
            $consignment->book_id = $request->book_id;
            $consignment->isbn = $request->isbn;
            $consignment->discount = $request->discount;
            $consignment->currency = $request->currency;
            $consignment->con_rate = $request->con_rate;
            $consignment->publisher_price = $request->pprice;

            $publisher_price = $request->pprice;

            $consignment->cost_price = $publisher_price * $request->con_rate;
            $consignment->sell_rate_o = $request->sfr;
            $consignment->sell_rate_d = $request->sfr2;

            $consignment->sell_price = $publisher_price * $request->sfr2;

            $consignment->save();
        }

        return back()->with('success', 'Consignment saved/updated!');
    }
}
