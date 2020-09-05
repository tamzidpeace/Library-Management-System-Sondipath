@extends('layouts.admin_layout')


@section('content')

<div class="row-fluid">

    <div style="margin-left: 30px; margin-bottom: 40px;">
        <h2 class="box-title">Title: {{ $book->name }}</h2>
        <h2 class="box-title">ISBN: {{ $book->isbn }}</h2>
    </div>

    <div class="span2">

        <div class="box box-success">

            <div class="box-body">

                <div style="margin-left: 0px">
                    @if ($book->cover)
                        <img src="/image/cover/{{ $book->cover }}"  style="height: 200px; width:170px;">
                    @else
                        <img src="/image/cover/default.jpg" class="img-thumbnail" style="height:  200px; width:170px;">
                    @endif
                </div>

            </div><!-- /.box-body -->
        </div>

    </div>

    <div class="span4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, odit quia, similique alias quo laboriosam explicabo repudiandae tenetur ducimus neque vitae rem perferendis libero voluptates ab id obcaecati modi praesentium?
    </div>

    <div class="span4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo labore velit minima natus placeat assumenda quasi! Minima, tempora ducimus veniam assumenda hic amet praesentium perspiciatis dolores reprehenderit, quasi, repudiandae consequatur!
    </div>


</div>


@endsection
