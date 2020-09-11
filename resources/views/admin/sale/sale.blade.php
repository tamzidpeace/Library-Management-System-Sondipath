@extends('layouts.admin_layout')

@section('content')
<h1>Calculation Result</h1>   

<div>


    {!! Form::open(['method' => 'POST', 'action' => ['AdminSaleController@save'], 'files' => false]) !!}
    @csrf

    {!! Form::hidden('book_id', $book->id) !!}
    {!! Form::hidden('isbn', $book->isbn) !!}  
    {!! Form::hidden('cpy', $sale->copy) !!}
    
    

    <div class="span4" onTablet="span4" onDesktop="span4">

        <div class="form-group">
            <label for="name"><strong>ISBN</strong>
            </label>
            <input type="number" step="any" name="isbn" id="isbn" placeholder="" value="{{ $book->isbn }}">
        </div>

        <div class="form-group">
            <label for="name"> <strong>Title</strong>
            </label>
            <input type="text" name="title" id="title" placeholder="" value="{{ $book->name }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Batch</strong>
            </label>
            <input type="text" name="batch" id="batch" placeholder="" value="{{ $book->edition }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Publisher Price</strong>
            </label>
            <input text="number" step="any" name="pprice" id="pprice" placeholder=""
                value="{{ $sale->publisher_price }}">
        </div>        

        <div class="form-group">
            <label for="name"><strong>Rate</strong>

            </label>

            <input type="number" step="any" name="rate" id="rate" placeholder="" value="{{ $sale->rate }}">
        </div>




    </div>

    {{-- xxx --}}    

    <div class="span5" onTablet="span5" onDesktop="span5">

        <div class="form-group">
            <label for="name"><strong>Currency</strong>
            </label>
            <input text="text" name="currency" id="currency" placeholder="" value="{{ $sale->currency }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Balance</strong>

            </label>

            <input type="number" name="balance" id="balance" placeholder="" value="{{ $book->amount }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Copy</strong>
                <span style="color:red;">*</span>
            </label>

            <input disabled type="number" name="copy" id="copy" placeholder="Enter Number of Sell Copy" value="{{ $sale->copy }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Unit Price</strong>

            </label>

            <input type="number" step="any" name="uprice" id="uprice" placeholder="" value="{{ $sale->unit_price }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Total Price</strong>
            </label>

            <input type="number" step="any" name="tprice" id="tprice" placeholder="Total Price" value="{{ $sale->total_price }}">
        </div>

        <input type="hidden" name="discount" value="{{ $sale->discount }}">

        <div class="form-group" style="margin-top: 24px">
            {!! Form::submit('Confirm', ['class' => 'btn btn-success']) !!}
            <a class="btn btn-warning" href="{{ route('admin.sale.info') }}">Cancel</a>
        </div>

    </div>

</div>


@endsection