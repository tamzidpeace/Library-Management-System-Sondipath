@extends('layouts.admin_layout')

@section('content')

    <div class="row-fluid">

        <div style="margin-left: 30px; margin-bottom: 40px;">
            <h2 class="box-title">Details of {{ $book->name }}</h2>
        </div>

        <div class="span2">

            <div class="box box-success">

                <div class="box-body">

                    <div style="margin-left: 0px">
                        @if ($book->cover)
                            <img src="/image/cover/{{ $book->cover }}"  style="height: 200px; width:170px;">
                        @else
                            <img src="/image/cover/default.jpg" class="img-thumbnail" style="height:  200px; width:170px;">
                        @endif
                    </div>

                </div><!-- /.box-body -->
            </div>

        </div>

        <div class="span4">
            <p><strong>Authors:</strong> {{ $book->authors }}</p>
            <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
            <p><strong>Purchase Price:</strong> {{ $book->purchase_price }}</p>
            <p><strong>Selling Price:</strong> {{ $book->selling_price }}</p>
            <p><strong>Copyright:</strong> {{ $book->copyright }}</p>
            <p><strong>Year:</strong> {{ $book->year }}</p>
            <p><strong>Country:</strong> {{ $book->country }}</p>
        </div>

        <div class="span4">
            <p><strong>Subject:</strong> {{ $book->category }}</p>
            <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
            <p><strong>Language:</strong> {{ $book->language }}</p>
            <p><strong>Total number of available copy:</strong> {{ $book->amount }}</p>
            <p><strong>Edition:</strong> {{ $book->edition }}</p>
            <p><strong>First Entry:</strong> {{ $book->created_at }}</p>
            <p><strong>Last Update:</strong> {{ $book->updated_at }}</p>
        </div>


    </div>



@endsection
