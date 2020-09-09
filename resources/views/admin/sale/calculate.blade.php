@extends('layouts.admin_layout')

@section('content')

<div>


    {!! Form::open(['method' => 'POST', 'action' => ['AdminSaleController@calculate'], 'files' => false]) !!}
    @csrf

    {!! Form::hidden('book_id', $book->id) !!}
    {!! Form::hidden('isbn', $book->isbn) !!}

    <div class="span4" onTablet="span4" onDesktop="span4">

        <div class="form-group">
            <label for="name"><strong>ISBN</strong>
            </label>
            <input disabled type="number" step="any" name="isbn" id="isbn" placeholder="" @if ($con)
                value="{{ $con->isbn }}" @else value="" @endif>
        </div>

        <div class="form-group">
            <label for="name"> <strong>Title</strong>
            </label>
            <input disabled text="number" name="title" id="title" placeholder="" @if ($book) value="{{ $book->name }}"
                @else value="" @endif>
        </div>

        <div class="form-group">
            <label for="name"><strong>Batch</strong>
            </label>
            <input type="text" name="batch" id="batch" placeholder="" @if ($book) value="{{ $book->edition }}" @else
                value="" @endif>
        </div>

        <div class="form-group">
            <label for="name"><strong>Publisher Price</strong>
            </label>
            <input text="number" step="any" name="pprice" id="pprice" placeholder="" @if ($con)
                value="{{ $con->publisher_price }}" @else value="" @endif>
        </div>

        <div class="form-group">
            <label for="name"><strong>Currency</strong>
            </label>
            <input text="text" name="currency" id="currency" placeholder="" @if ($con) value="{{ $con->currency }}"
                @else value="" @endif>
        </div>

        <div class="form-group">
            <label for="name"><strong>Rate</strong>

            </label>

            <input type="number" step="any" name="rate" id="rate" placeholder="" @if ($con)
                value="{{ $con->sell_rate_d }}" @else value="" @endif>
        </div>




    </div>

    {{-- xxx --}}

    <div class="span5" onTablet="span5" onDesktop="span5">

        <div class="form-group">
            <label for="name"><strong>Balance</strong>

            </label>

            <input type="number" name="balance" id="balance" placeholder="" @if ($book) value="{{ $book->amount }}"
                @else value="" @endif>
        </div>

        <div class="form-group">
            <label for="name"><strong>Copy</strong>
                <span style="color:red;">*</span>
            </label>

            <input type="number" name="copy" id="copy" placeholder="Enter Number of Sell Copy" value="0">
        </div>

        <div class="form-group">
            <label for="name"><strong>Unit Price</strong>

            </label>

            <input type="number" step="any" name="uprice" id="uprice" placeholder="" @if ($con)
                value="{{ $con->sell_price }}" @else value="" @endif>
        </div>

        <div class="form-group">
            <label for="name"><strong>Total Price</strong>
            </label>

            <input type="number" step="any" name="tprice" id="tprice" placeholder="Total Price" value="">
        </div>

        <div class="form-group">
            <label for="name"><strong>Discount</strong>
            </label>

            <input type="checkbox" class="form-check-input" id="dcheck" name="dcheck">
            <input type="number" step="any" name="discount" id="discount" placeholder="" @if ($con)
                value="{{ $con->discount }}" @else value="" @endif>
        </div>

        <div class="form-group" style="margin-top: 24px">
            {!! Form::submit('Calculate/Update', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('admin.consignment.all_con') }}" class="btn btn-info">All Sales</a>
        </div>

    </div>

</div>


@endsection