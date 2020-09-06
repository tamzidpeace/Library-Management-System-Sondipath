<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Consignment;

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
        return $request;
    }
}
