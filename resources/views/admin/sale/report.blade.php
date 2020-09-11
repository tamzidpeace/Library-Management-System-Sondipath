@extends('layouts.admin_layout')

@section('content')
<h2>Total Sale of today: {{ $total }} Taka</h2> <br> <br>
@if(isset($isbn))
<h2>Total Sale of today for ISBN {{ $isbn }}: {{ $total }} Taka</h2> <br> <br>
@elseif(isset($date))
<h2>Total Sale of $date is : {{ $total }} Taka</h2> <br> <br>
@endif

<h2>Check By ISBN For Toady</h2>

<form id="data-form" action="{{ route('admin.sale.report.isbn') }}" method="GET">
    <input type="number" value="" name="isbn" placeholder="Enter ISBN">
    <input type="submit" onclick="return deleteFun()" class="btn btn-sm btn-primary" value="Submit">
</form>
<br>
<h2>Check for a fixed date</h2>
<form id="data-form" action="{{ route('admin.sale.report.date') }}" method="GET">
    <input type="date" id="date" name="date">
    <input type="submit" onclick="" class="btn btn-sm btn-primary" value="Submit">
</form>
@endsection


{{-- <script>
    function deleteFun() {
            if(!confirm("Are You Sure to delete this"))
            event.preventDefault();
        }
</script> --}}


{{-- <input type="date" id="birthday" name="birthday"> --}}