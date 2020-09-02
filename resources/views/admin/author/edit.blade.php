@extends('layouts.admin_layout')

@section('content')

<h2>Edit Author</h2>

{!! Form::open(['method' => 'POST', 'action' => ['AdminAuthorController@editConfirm', $id], 'files'=> false]) !!}


<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="" value="{{ $author->name }}" >
</div>


{!! Form::hidden('id', $id) !!}


<div class="form-group">
    {!! Form::submit('SAVE', ['class' => 'btn btn-success']) !!}
</div>


@endsection
