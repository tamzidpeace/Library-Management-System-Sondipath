@extends('layouts.admin_layout')


@section('content')

<h2>Add Consignment Item</h2>

{!! Form::open(['method' => 'post', 'action' => ['ConsignmentController@create'],
'files'=> false]) !!}


<div class="form-group">
    <label for="name">Name</label>
    <input type="number" name="isbn" id="isbn" placeholder="Enter ISBN" value="" >
</div>

<div class="form-group">
    {!! Form::submit('Search', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}

@endsection
