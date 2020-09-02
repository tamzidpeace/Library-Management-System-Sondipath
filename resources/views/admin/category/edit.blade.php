@extends('layouts.admin_layout')

@section('content')

<h2>Edit Category</h2>

{!! Form::open(['method' => 'POST', 'action' => ['AdminCategoryController@editConfirm', $id], 'files'=> false]) !!}


<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="" value="{{ $category->name }}" >
</div>

<div class="form-group">
    <label for="role">Status</label>
    @if ($category->status == "active")
    <select class="form-control" name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
    @else
    <select class="form-control" name="status">
        <option value="inactive">Inactive</option>
        <option value="active">Active</option>
    </select>
    @endif

</div>

{!! Form::hidden('id', $id) !!}


<div class="form-group">
    {!! Form::submit('SAVE', ['class' => 'btn btn-success']) !!}
</div>

@endsection
