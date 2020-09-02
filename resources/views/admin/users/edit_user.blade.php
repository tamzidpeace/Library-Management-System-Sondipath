@extends('layouts.admin_layout')


@section('content')

<h2>Edit User Information</h2>

{!! Form::open(['method' => 'POST', 'action' => ['AdminController@editUserConfirm', $id],
'files'=> false]) !!}


<div class="form-group">
    <label for="name">User Name</label>
    <input type="text" name="name" id="name" placeholder="" value="{{ $user->name }}" >
</div>

<div class="form-group">
    <label for="role">Assign user as </label>
    <select class="form-control" name="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
</div>

{!! Form::hidden('id', $id) !!}



<div class="form-group">
    {!! Form::submit('SAVE', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}


@endsection
