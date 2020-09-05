@extends('layouts.admin_layout')

@section('content')

<div>


    {!! Form::open(['method' => 'POST', 'action' => ['AdminBookController@save'], 'files' => true]) !!}


    <div class="row-fluid">
        <div class="span4" onTablet="span4" onDesktop="span4" style=""> </div>
        <h2>Add New Book</h2> <br>
    </div>

    <div class="row-fluid">

        <div class="span1" onTablet="span1" onDesktop="span1"> </div>

        <div class="span4" onTablet="span4" onDesktop="span4">
            <div class="form-group">
                <label for="name"><strong>Title</strong>
                    <span style="color:red;">*</span>
                </label>

                <input type="text" name="name" id="name" placeholder="Enter Book Title" value="">


            </div>

            <div class="form-group">
                <label for="name"><strong>ISBN</strong>
                    <span style="color:red;">*</span>
                </label>

                <input type="number" name="isbn" id="isbn" placeholder="Enter Book ISBN" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Year</strong>
                    <span style="color:red;">*</span>
                </label>

                <input type="number" name="year" id="year" placeholder="Enter publication Year" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Country</strong>
                    <span style="color:red;">*</span>
                </label>

                <input type="text" name="country" id="country" placeholder="Country" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Publisher</strong>
                    <span style="color:red;">*</span>
                </label>

                <input type="text" name="publisher" id="publisher" placeholder="Publisher" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Authors</strong>
                    <span style="color:red;">*</span>
                </label>

                <textarea class="form-control" id="author" name="author" rows="3"></textarea>
            </div>

        </div>

        {{-- xxx --}}

        <div class="span5" onTablet="span5" onDesktop="span5">

            <div class="form-group">
                <label for="name"><strong>Copyright</strong>
                    <span style="color:red;">*</span>
                </label>

                <input type="text" name="copyright" id="copyright" placeholder="Copyright" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Language</strong>
                    <span style="color:red;">*</span>
                </label>

                <input type="text" name="language" id="language" placeholder="Language" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Total Number of Available Copy</strong>

                </label>

                <input type="number" name="amount" id="amount" placeholder="Ex: 05" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Edition</strong>

                </label>

                <input type="text" name="edition" id="edition" placeholder="Ex: 5th" value="">
            </div>

            <div class="form-group">
                <label for="name"><strong>Cover Image</strong>

                </label>

                <input type="file" name="cover" id="cover" placeholder="" value="">
            </div>

            <div style="margin-top: 12px;" class="form-group">
                <label for="name"><strong>Subject</strong>
                    <span style="color:red;">*</span>
                </label>

                <textarea class="form-control" id="category" name="category" rows="3"></textarea>
            </div>

        </div>

    </div>

    <div class="row-fluid">
        <div class="span8" onTablet="span8" onDesktop="span8"> </div>
        <div class="form-group">
            {!! Form::submit('SAVE', ['class' => 'btn btn-success']) !!}
        </div>
    </div>



    {{-- end testing --}}

    {!! Form::close() !!}

</div>

@endsection