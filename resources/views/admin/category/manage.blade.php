@extends('layouts.admin_layout')

@section('content')

<h2>Categories</h2>
<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>Name</th>
        <th>Status</th>
        <th>Creation Date</th>
        <th>Updation Date</th>
        <th>Action</th>
    </tr>

    @php
    $count = 1;
    @endphp

    @foreach ($categories as $cat)
    <tr>
        <td> {{$count++}} </td>
        <td> {{$cat->name}} </td>
        <td>
            @if($cat->status == "active")
            <a href="#" class="btn btn-success btn-xs">{{$cat->status}} </td></a>
            @else
            <a href="#" class="btn btn-danger btn-xs">{{$cat->status}} </td></a>
            @endif

        <td> {{$cat->created_at}} </td>
        <td> {{$cat->updated_at}} </td>

        <td>
            <a href="/admin/category/edit/{{ $cat->id }}">
                <button class="btn btn-primary">
                    Edit
                </button>
            </a>

            <a href="/admin/category/delete/{{ $cat->id }}">
                <button class="btn btn-danger">
                    Delete
                </button>
            </a>

        </td>
    </tr>
    @endforeach

</table>

@endsection
