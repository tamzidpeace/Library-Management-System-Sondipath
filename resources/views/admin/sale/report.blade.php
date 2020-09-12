@extends('layouts.admin_layout')

@section('content')
@if(isset($today))
<h2>Total Sale of today: {{ $total }} Taka</h2> <br> <br>
@elseif(isset($isbn))
<h2>Total Sale of today for ISBN {{ $isbn }}: {{ $total }} Taka</h2> <br> <br>
@elseif(isset($date))
<h2>Total Sale of $date is : {{ $total }} Taka</h2> <br> <br>
@elseif(isset($date2))
<h2>Total Sale of between $date1 and $date2 is : {{ $total }} Taka</h2> <br> <br>
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
<br>
<h2>Check Between Two Different Dates</h2>

<form id="data-form" action="{{ route('admin.sale.report.date-between') }}" method="GET">
    <input type="date" id="date1" name="date1">
    <input type="date" id="date2" name="date2">
    <input type="submit" onclick="" class="btn btn-sm btn-primary" value="Submit">
</form>

@endsection

