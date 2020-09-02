@extends('layouts.admin_layout')

@section('content')




<div >


{!! Form::open(['method' => 'POST', 'action' => ['AdminCategoryController@save'], 'files'=> true] ) !!}

<h2>Add New Books</h2>

<div class="form-group">
    <label for="name"><strong>Title</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="name" id="name" placeholder="Enter Book Title" value="" >


</div>

<div class="form-group">
    <label for="name">ISBN
        <span style="color:red;">*</span>
    </label>

    <input type="number" name="isbn" id="isbn" placeholder="Enter Book ISBN" value="" >
</div>

<div class="form-group">
    <label for="name">Purchase Price
        <span style="color:red;">*</span>
    </label>

    <input type="number" name="pprice" id="pprice" placeholder="Enter Purchase Price" value="" >
</div>

<div class="form-group">
    <label for="name">Purchase Price
        <span style="color:red;">*</span>
    </label>

    <input type="number" name="pprice" id="pprice" placeholder="Enter Purchase Price" value="" >
</div>

<div class="form-group">
    <label for="name">Selling Price
        <span style="color:red;">*</span>
    </label>

    <input type="number" name="sprice" id="sprice" placeholder="Enter Selling Price" value="" >
</div>

<div class="form-group">
    <label for="name">Year
        <span style="color:red;">*</span>
    </label>

    <input type="number" name="year" id="year" placeholder="Enter publication Year" value="" >
</div>

<div class="form-group">
    <label for="name">Country
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="country" id="country" placeholder="Country" value="" >
</div>

<div class="form-group">
    <label for="name">Publisher
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="publisher" id="publisher" placeholder="Publisher" value="" >
</div>

<div class="form-group">
    <label for="name">Language
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="language" id="language" placeholder="Language" value="" >
</div>

<div class="form-group">
    <label for="name">Total Number of Available Copy

    </label>

    <input type="number" name="amount" id="amount" placeholder="Ex: 05" value="" >
</div>

<div class="form-group">
    <label for="name">Edition

    </label>

    <input type="number" name="edition" id="edition" placeholder="Ex: 5th" value="" >
</div>

<div class="form-group">
    <label for="name">Cover Image

    </label>

    <input type="file" name="cover" id="cover" placeholder="" value="" >
</div>

<div class="form-group">
    <label for="name">Authors

    </label>

    <input type="textarea" name="author" id="author" placeholder="" value="" >
</div>

<div class="form-group">
    <label for="name">Categories

    </label>

    <textarea class="form-control" id="category" name="category" rows="3"></textarea>
</div>

<br>

<div class="form-group">
    {!! Form::submit('SAVE', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}

</div>

@endsection
