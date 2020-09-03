@extends('layouts.admin_layout')


@section('content')
{{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}

<h2>Books</h2>
<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>Title</th>
        <th>ISBN</th>
        <th>Edition</th>
        <th>Purchase Price</th>
        <th>Selling Price</th>
        <th>Copy Available</th>
        <th>Action</th>
    </tr>

    @php
    $count = 1;
    @endphp

    @foreach ($books as $book)
    <tr>
        <td> {{$count++}} </td>
        <td> <a href="/admin/book/info/{{ $book->id }}" style="col }}or:blue" > <u>{{$book->name}}</u> </a> </td>
        <td> {{$book->isbn}} </td>
        <td> {{ $book->edition }}</td>
        <td> {{$book->purchase_price}} </td>
        <td> {{$book->selling_price}} </td>
        <td> {{$book->amount}} </td>

        <td>
            <a href="/admin/book/edit/{{ $book->id }}">
                <button class="btn btn-primary">
                    Edit
                </button>
            </a>

            <a href="/admin/book/delete/{{ $book->id }}">
                <button class="btn btn-danger">
                    Delete
                </button>
            </a>

        </td>
    </tr>
    @endforeach


</table>

{{ $books->links() }}

@endsection
