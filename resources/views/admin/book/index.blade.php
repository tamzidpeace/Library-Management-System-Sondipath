@extends('layouts.admin_layout')


@section('content')
{{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}

<h2>Books</h2>
<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Subject</th>        
        <th>Publisher</th>
        <th>Edition</th>        
        <th>Copy Available</th>
        <th>Action</th>
    </tr>

    @php
    $count = 1;
    @endphp

    @foreach ($books as $book)
    <tr>
        <td> {{$count++}} </td>
        <td> {{$book->isbn}} </td>
        <td> <a href="/admin/book/info/{{ $book->id }}" style="col }}or:blue" > <u>{{$book->name}}</u> </a> </td>        
        <td>{{ $book->authors }}</td>
        <td>{{ $book->category }}</td>
        <td> {{ $book->publisher }}</td> 
        <td>{{ $book->edition }}</td>       
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
