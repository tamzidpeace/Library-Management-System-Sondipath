@extends('layouts.admin_layout')

@section('content')

<div >


{!! Form::open(['method' => 'POST', 'action' => ['AdminBookController@editConfirm', $id], 'files'=> true] ) !!}

<h2>Edit Book</h2> <br>

{!! Form::hidden('id', $id) !!}

<div class="form-group">
    <label for="name"><strong>Title</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="name" id="name" placeholder="Enter Book Title" value="{{ $book->name }}" >


</div>

<div class="form-group">
    <label for="name"><strong>ISBN</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="number" name="isbn" id="isbn" placeholder="Enter Book ISBN" value="{{ $book->isbn }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Year</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="number" name="year" id="year" placeholder="Enter publication Year" value="{{ $book->year }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Country</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="country" id="country" placeholder="Country" value="{{ $book->country }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Publisher</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="publisher" id="publisher" placeholder="Publisher" value="{{ $book->publisher }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Copyright</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="copyright" id="copyright" placeholder="Copyright" value="{{ $book->copyright }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Language</strong>
        <span style="color:red;">*</span>
    </label>

    <input type="text" name="language" id="language" placeholder="Language" value="{{ $book->language }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Total Number of Available Copy</strong>

    </label>

    <input type="number" name="amount" id="amount" placeholder="Ex: 05" value="{{ $book->amount }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Edition</strong>

    </label>

    <input type="text" name="edition" id="edition" placeholder="Ex: 5th" value="{{ $book->edition }}" >
</div>

<div class="form-group">
    <label for="name"><strong>Cover Image</strong>

    </label>

    <input type="file" name="cover" id="cover" placeholder="" value="" >
</div>

<div class="form-group">
    <label for="name"><strong>Authors</strong>
        <span style="color:red;">*</span>
    </label>

    <textarea class="form-control" id="author" name="author" rows="3">{{ $book->authors }}</textarea>
</div>

<div class="form-group">
    <label for="name"><strong>Subject</strong>
        <span style="color:red;">*</span>
    </label>

    <textarea class="form-control" id="category" name="category" rows="3">{{ $book->category }}</textarea>
</div>

<br>

<div class="form-group">
    {!! Form::submit('SAVE', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}

</div>

@endsection
