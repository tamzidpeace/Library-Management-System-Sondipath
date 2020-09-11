<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Consignment;
use App\Sale;

class AdminSaleController extends Controller
{
    public function index()
    {
    }

    public function info()
    {
        return view('admin.sale.sale_now');
    }

    public function infoSet(Request $request)
    {
        $validatedData = $request->validate([
            'copy' => 'required',
        ]);

        $copy = $request->copy;
        $book = Book::where('isbn', $request->isbn)->first();
        $con = Consignment::where('isbn', $request->isbn)->first();

        if(isset($book) && isset($con))
            return view('admin.sale.calculate', compact('book', 'con', 'copy'));
        else
            return back()->with('info', 'Invalid ISBN Nubmer or Consignment isn\'t set for this ISBN!');
    }

    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'copy' => 'required',
        ]);        

        $book = Book::where('isbn', $request->isbn)->first();
        
        if ($request->copy > $book->amount) 
            return back()->with('info', "You can't sale more item than avaiable copy");
                        
        $sale = new Sale;
        //save data
        $sale->isbn = $request->isbn;
        $sale->currency = $request->currency;
        $sale->title = "title";
        $sale->batch = $request->batch;
        $sale->rate = $request->rate;
        $sale->copy = $request->copy;
        $sale->publisher_price = $request->pprice;
        $sale->unit_price = $request->uprice;
        
        $total = $request->uprice * $request->copy;
        $sale->balance = $request->balance - $request->copy;
        
        if ($request->dcheck == "on") {
            $dis = ($total * $request->discount) / 100;
            $sale->total_price = $total - $dis;
            $sale->discount = $request->discount;
        } else {
            $sale->total_price = $total;
            $sale->discount = 0;
        }                
        return $sale;

        return back()->with('sid', $sid)
        ->with('info', "Calculated, You can calculate again for previous amout of book copy!")
        ->with('sale', $sale)->with('book', $book);
        //end save data
    }
}
