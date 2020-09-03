@extends('layouts.admin_layout')


@section('content')

<h2>Categories</h2>
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

    @foreach ($authors as $author)
    <tr>
        <td> {{$count++}} </td>
        <td> {{$author->name}} </td>
        <td> {{$author->created_at}} </td>
        <td> {{$author->updated_at}} </td>

        <td>
            <a href="/admin/author/edit/{{ $author->id }}">
                <button class="btn btn-primary">
                    Edit
                </button>
            </a>

            <a href="/admin/author/delete/{{ $author->id }}">
                <button class="btn btn-danger">
                    Delete
                </button>
            </a>

        </td>
    </tr>
    @endforeach

</table>

{{ $authors->links() }}


@endsection
