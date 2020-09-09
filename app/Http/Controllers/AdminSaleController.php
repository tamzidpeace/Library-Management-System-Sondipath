<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Consignment;
use App\Sale;

class AdminSaleController extends Controller
{
    function index() {

    }

    function info() {
        return view('admin.sale.sale_now');
    }

    function infoSet(Request $request) {
        $book = Book::where('isbn', $request->isbn)->first();
        $con = Consignment::where('isbn', $request->isbn)->first();

        return view('admin.sale.calculate', compact('book', 'con'));
    }

    function calculate(Request $request) {               
        
        $validatedData = $request->validate([
            'copy' => 'required',            
        ]);

        $check = Sale::where('isbn', $request->isbn)->first();
        $book = Book::where('isbn', $request->isbn)->first();

        if($check)
            $sale = $check;
        else
            $sale = new Sale;

        //save data
        $sale->isbn = $request->isbn;
        $sale->title = $request->title;
        $sale->batch = $request->batch;
        $sale->rate = $request->rate;        
        $sale->copy = $request->copy;
        $sale->publisher_price = $request->pprice;
        $sale->unit_price = $request->uprice;
        $sale->discount = $request->discount;
        $total = $request->uprice * $request->copy;    
        $sale->balance = $request->balance - $request->copy;
        
        if($request->dcheck == "on") {            
            $dis = ($total * $request->discount) / 100;
            $sale->total_price = $total - $dis;
        } else {
            $sale->total_price = $total;
        }
        
        
        return $sale;
        //end save data
    }
}
