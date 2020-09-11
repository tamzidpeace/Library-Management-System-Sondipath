@extends('layouts.admin_layout')

@section('content')

<div>


    {!! Form::open(['method' => 'POST', 'action' => ['AdminSaleController@calculate'], 'files' => false]) !!}
    @csrf

    {!! Form::hidden('book_id', $book->id) !!}
    {!! Form::hidden('isbn', $book->isbn) !!}

    @if (isset($sid))
    <input type="hidden" name="sid" value="{{ $sid }}">
    @else
    <input type="hidden" name="sid" value="0">
    @endif

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
                value="{{ $con->publisher_price }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Currency</strong>
            </label>
            <input text="text" name="currency" id="currency" placeholder="" value="{{ $con->currency }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Rate</strong>

            </label>

            <input type="number" step="any" name="rate" id="rate" placeholder="" value="{{ $con->sell_rate_d }}">
        </div>




    </div>

    {{-- xxx --}}

    <div class="span5" onTablet="span5" onDesktop="span5">

        <div class="form-group">
            <label for="name"><strong>Balance</strong>

            </label>

            <input type="number" name="balance" id="balance" placeholder="" value="{{ $book->amount }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Copy</strong>
                <span style="color:red;">*</span>
            </label>

            <input type="number" name="copy" id="copy" placeholder="Enter Number of Sell Copy" value="{{ $copy }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Unit Price</strong>

            </label>

            <input type="number" step="any" name="uprice" id="uprice" placeholder="" value="{{ $con->sell_price }}">
        </div>

        <div class="form-group">
            <label for="name"><strong>Total Price</strong>
            </label>

            <input type="number" step="any" name="tprice" id="tprice" placeholder="Total Price" value="Will Calculate">
        </div>

        <div class="form-group">
            <label for="name"><strong>Discount</strong>
            </label>

            <input type="checkbox" class="form-check-input" id="dcheck" name="dcheck">
            <input type="number" step="any" name="discount" id="discount" value="{{ $con->discount }}">
        </div>

        <div class="form-group" style="margin-top: 24px">
            {!! Form::submit('Calculate/Update', ['class' => 'btn btn-primary']) !!}
        </div>

    </div>

</div>


@endsection