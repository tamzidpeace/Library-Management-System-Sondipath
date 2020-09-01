@extends('layouts.admin_layout')

@section('content')

<h2>Users</h2>
<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Action</th>
    </tr>

    @php
    $count = 1;
    @endphp

    @foreach ($users as $user)
    <tr>
        <td> {{$count++}} </td>
        <td> {{$user->name}} </td>
        <td> {{$user->email}} </td>
        <td> {{$user->phone}} </td>
        <td> {{$user->role}} </td>
        <td>
            <a href="#">
                <button class="btn btn-primary">
                    Edit
                </button>
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
