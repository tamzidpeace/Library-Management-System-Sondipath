<?php

namespace App\Http\Controllers;

use App\Book;
use App\Consignment;
use Illuminate\Http\Request;

class ConsignmentController extends Controller
{
    public function index()
    {
        return view('admin.book.consignment');
    }

    public function create(Request $request)
    {
        $book = Book::where('isbn', $request->isbn)->first();
        $consignments = Consignment::all();

        if ($book) {
            $isbn = $book->isbn;
            $currency = ['BDT', 'INR', 'USD'];
            $con = Consignment::where('isbn', $isbn)->first();
            return view('admin.book.calculate', compact('book', 'isbn', 'con', 'currency'));
        } else {
            return back()->with('info', 'No Book Found, Please enter a valid ISBN');
        }
    }

    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'copy' => 'required',
            'pprice' => 'required',
            'currency' => 'required',
            'con_rate' => 'required',
            'sfr' => 'required',
            'sfr2' => 'required',
        ]);
        
        $consignment = Consignment::where('isbn', $request->isbn)->first();
        $consignments = Consignment::all();

        if ($consignment) {
            $book = Book::where('isbn', $request->isbn)->first();
            $book->amount = $book->amount + $request->copy;
            $consignment->copy = $request->copy;
            $consignment->book_id = $request->book_id;
            $consignment->isbn = $request->isbn;
            $consignment->discount = $request->discount;
            $discount = $consignment->discount;
            $consignment->currency = $request->currency;
            $consignment->con_rate = $request->con_rate;
            $consignment->publisher_price = $request->pprice;

            $publisher_price = $request->pprice;

            $publisher_price = $request->pprice;

            $consignment->cost_price = floor($publisher_price * $request->con_rate);
            $consignment->sell_rate_o = $request->sfr;
            $consignment->sell_rate_d = $request->sfr2;
            $dis_unit =  ($publisher_price * $request->sfr2) / 100;
            $discount = $discount * $dis_unit;
            $consignment->sell_price = floor($publisher_price * $request->sfr2 - $discount);

            $consignment->save();
            $book->save();
        } else {
            $consignment = new Consignment;

            $book = Book::where('isbn', $request->isbn)->first();
            $book->amount = $book->amount + $request->copy;
            $consignment->copy = $request->copy;
            $consignment->book_id = $request->book_id;
            $consignment->isbn = $request->isbn;
            $consignment->discount = $request->discount;
            $consignment->currency = $request->currency;
            $consignment->con_rate = $request->con_rate;
            $consignment->publisher_price = $request->pprice;

            $publisher_price = $request->pprice;

            $consignment->cost_price = floor($publisher_price * $request->con_rate);
            $consignment->sell_rate_o = $request->sfr;
            $consignment->sell_rate_d = $request->sfr2;

            $consignment->sell_price = floor($publisher_price * $request->sfr2);
            $consignment->save();
            $book->save();
        }

        return back()->with('success', 'Consignment saved/updated!')->with('consignment', $consignments);
    }

    function index2() {
        $consignments = Consignment::paginate(20);
        return view('admin.book.all_con', compact('consignments'));
    }

    function singleCon($id) {
        $con = Consignment::findOrFail($id);
        $consignments = Consignment::all();
        $book = Book::where('isbn', $con->isbn)->first();
        $currency = ['BDT', 'INR', 'USD'];
        return view('admin.book.calculate', compact('con', 'consignments', 'book', 'currency'));
    }
}
