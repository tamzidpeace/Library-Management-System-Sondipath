@extends('layouts.admin_layout')

@section('content')
<h2>Sale Now</h2>

{!! Form::open(['method' => 'GET', 'action' => ['AdminSaleController@infoSet'],
'files'=> false]) !!}

@csrf


<div class="form-group">
    <label for="name">ISBN</label>
    <input type="number" name="isbn" id="isbn" placeholder="Enter ISBN" value="">
</div>

<div class="form-group">
    <label for="copy">Enter the total number of copy you are selling now.</label>
    <input type="number" name="copy" id="copy" placeholder="Ex: 3" value="">
</div>

<div class="form-group">
    {!! Form::submit('Search', ['class' => 'btn btn-success data-save']) !!}
</div>

{!! Form::close() !!}


{{-- sale form --}}


{{-- end sale form --}}



@endsection