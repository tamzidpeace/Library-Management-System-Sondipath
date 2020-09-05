@extends('layouts.admin_layout')


@section('content')

    <div class="row-fluid">

        <div style="margin-left: 30px; margin-bottom: 40px;">
            <h2 class="box-title">Title: {{ $book->name }}</h2>
            <h2 class="box-title">ISBN: {{ $book->isbn }}</h2>
        </div>

        <div class="span2">

            <div class="box box-success">

                <div class="box-body">

                    <div style="margin-left: 0px">
                        @if ($book->cover)
                            <img src="/image/cover/{{ $book->cover }}" style="height: 200px; width:170px;">
                        @else
                            <img src="/image/cover/default.jpg" class="img-thumbnail" style="height:  200px; width:170px;">
                        @endif
                    </div>

                </div><!-- /.box-body -->
            </div>

        </div>

        <div>


            {!! Form::open(['method' => 'POST', 'action' => ['ConsignmentController@calculate'], 'files' => false]) !!}
            @csrf

            {!! Form::hidden('book_id', $book->id) !!}
            {!! Form::hidden('isbn', $book->isbn) !!}

            <div class="span4" onTablet="span4" onDesktop="span4">

                <div class="form-group">
                    <label for="name"><strong>Copy</strong>
                        <span style="color:red;">*</span>
                    </label>

                    <input type="number" step="any" name="copy" id="copy" placeholder="Enter Number of Copy" value="0">
                </div>

                <div class="form-group">
                    <label for="name"> <strong>Publisher Price</strong>
                        <span style="color:red;">*</span>
                    </label>

                    <input type="number" step="any" name="pprice" id="pprice" placeholder="Enter Publisher Price" @if ($con)
                    value="{{ $con->publisher_price }}"
                @else
                    value=""
                    @endif >
                </div>

                <div class="form-group">
                    <label for="name"><strong>Corrency</strong>
                        <span style="color:red;">*</span>
                    </label>

                    <select name="currency" class="form-control">
                        
                        @if ($con)

                        <option value="{{ $con->currency }}">{{ $con->currency }}</option>
                        @for ($i = 0; $i <count($currency) ; $i++)
                        @if ($con->currency == $currency[$i])
                        continue;
                        @else
                        <option value="{{ $currency[$i] }}">{{ $currency[$i] }}</option>
                        @endif
                        
                        @endfor

                        @else

                        <option value="">Select</option>
                        @for ($i = 0; $i <count($currency) ; $i++)
                        <option value="{{ $currency[$i] }}">{{ $currency[$i] }}</option>
                        @endfor

                        @endif
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="name"><strong>Conversion Rate</strong>
                        <span style="color:red;">*</span>
                    </label>

                    <input type="number" step="any" name="con_rate" id="con_rate" placeholder="Enter Conversion Rate" @if ($con)
                    value="{{ $con->con_rate }}"
                @else
                    value=""
                    @endif >
                </div>

                <div class="form-group">
                    <label for="name"><strong>Discount(%)</strong>

                    </label>

                    <input type="number" step="any" name="discount" id="discount" placeholder="Discount Rate" @if ($con)
                    value="{{ $con->discount }}"
                @else
                    value=""
                    @endif >
                </div>


            </div>

            {{-- xxx --}}

            <div class="span5" onTablet="span5" onDesktop="span5">
                <div class="form-group">
                    <label for="name"><strong>Cost Price in BDT</strong>                        
                    </label>

                    <input type="number" step="any" name="cprice" id="cprice" placeholder="Cost Price" @if ($con)
                    value="{{ $con->cost_price }}"
                @else
                    value=""
                    @endif >
                </div>

                <div class="form-group">
                    <label for="name"><strong>Selling Fixed Rate</strong>
                        <span style="color:red;">*</span>
                    </label>

                    <input type="number" step="any" name="sfr" id="sfr" placeholder="Enter Selling Fixed Rate" @if ($con)
                    value="{{ $con->sell_rate_o }}"
                @else
                    value=""
                    @endif >
                </div>

                <div class="form-group">
                    <label for="name"><strong>Selling Flexible Rate</strong>
                        <span style="color:red;">*</span>
                    </label>

                    <input type="number" step="any" name="sfr2" id="sfr2" placeholder="Selling Flexible Rate" @if ($con)
                    value="{{ $con->sell_rate_d }}"
                @else
                    value=""
                    @endif >
                </div>

                <div class="form-group">
                    <label for="name"><strong>Sales Price in BDT</strong>                        
                    </label>

                    <input type="number" step="any" name="sprice" id="sprice" placeholder="Sales Price" @if ($con)
                    value="{{ $con->sell_price }}"
                @else
                    value=""
                    @endif >
                </div>

                <div class="form-group" style="margin-top: 24px">
                    {!! Form::submit('Calculate/Update', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('dashboard') }}" class="btn btn-info">All Consignments</a>
                </div>

            </div>

        </div>

    </div>


    {{-- end testing --}}

    {!! Form::close() !!}

@endsection
