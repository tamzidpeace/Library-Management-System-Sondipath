@extends('layouts.admin_layout')

@section('content')


<h2>Add New Category</h2>

{!! Form::open(['method' => 'POST', 'action' => ['AdminCategoryController@save'],
'files'=> false]) !!}


<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Category name" value="" >
</div>

<div class="form-group">
    {!! Form::submit('SAVE', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}

@endsection
