@extends('layouts.admin_layout')

@section('content')

<div class="jumbotron" style="background: ; margin-left:40px;border:10px;">
    <h2>Details of {{ $book->name }}</h1>

        <br>
        @if ($book->cover)
        <img src="/image/cover/{{ $book->cover }}" class="img-thumbnail" style="height: 200px; width:170px;">
        @else
        <img src="/image/cover/book2.jpg" class="img-thumbnail" style="height:  200px; width:170px;">
        @endif

        <br> <br>
    <p><strong>Authors:</strong> {{ $book->authors }}</p>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Purchase Price:</strong> {{ $book->pprice }}</p>
    <p><strong>Selling Price:</strong> {{ $book->sprice }}</p>
    <p><strong>Copyright:</strong> {{ $book->copyright }}</p>
    <p><strong>Year:</strong> {{ $book->year }}</p>
    <p><strong>Country:</strong> {{ $book->country }}</p>
    <p><strong>Category:</strong> {{ $book->category }}</p>
    <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
    <p><strong>Language:</strong> {{ $book->language }}</p>
    <p><strong>Total number of available copy:</strong> {{ $book->amount }}</p>
    <p><strong>Edition:</strong> {{ $book->edition }}</p>
    <p><strong>First Entry:</strong> {{ $book->created_at }}</p>
    <p><strong>Last Update:</strong> {{ $book->updated_at }}</p>

</div>

@endsection
