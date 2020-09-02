@extends('layouts.admin_layout')


@section('content')

<h2>Books</h2>
<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>Name</th>
        <th>Creation Date</th>
        <th>Updation Date</th>
        <th>Action</th>
    </tr>

    @php
    $count = 1;
    @endphp

    @foreach ($books as $book)
    <tr>
        <td> {{$count++}} </td>
        <td> {{$book->name}} </td>
        <td> {{$book->created_at}} </td>
        <td> {{$book->updated_at}} </td>

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


@endsection
