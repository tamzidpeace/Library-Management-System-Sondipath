@extends('layouts.admin_layout')

@section('content')

<h2>Remove Author</h2>
{!! Form::open(['method' => 'POST', 'action' => ['AdminAuthorController@deleteConfirm', $id],
'files'=> false]) !!}


Are you sure to remove {{ $author->name }}?


{!! Form::hidden('id', $id) !!}



<div class="form-group" style="margin-top:15px; margin-left:100px;">

    {!! Form::submit('Yes', ['class' => 'btn btn-danger']) !!}


</div>

{!! Form::close() !!}

<a href="/admin/category/index">
    <button class="btn btn-info"  style="margin-left: 160px; margin-top: -96px;"> NO </button>
</a>

<script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });
</script>


@endsection
