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
<br>
{{-- sales table --}}
{{-- {{ $sales }} --}}
<a class="btn btn-primary" href="download_pdf/{{ $sales }}">Download Report</a>
{{-- <form action="{{ route('download.pdf') }}" method="get">
    <input type="hidden" name="sales" value="{{ $sales }}">
    <input type="submit" name="" class="btn btn-primary" value="Download Report">
</form> --}}

<h2>Sale Report</h2>
<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>ISBN</th>
        <th>Title</th>
        <th>Batch</th>
        <th>Rate</th>
        <th>Currency</th>
        <th>Copy</th>
        <th>Publisher Price</th>
        <th>Unit Price</th>
        <th>Discount</th>
        <th>Total Price</th>
        <th>Sold At</th>
    </tr>

    @php
    $count = 1;
    @endphp

    @foreach ($sales as $sale)
    <tr>
        <td> {{$count++}} </td>
        <td> {{$sale->isbn}} </td>
        <td>{{ $sale->title }}</td>
        <td>{{ $sale->batch }}</td>
        <td>{{ $sale->rate }}</td>
        <td> {{ $sale->currency }}</td>
        <td>{{ $sale->copy }}</td>
        <td> {{$sale->publisher_price}} </td>
        <td>{{ $sale->unit_price }}</td>
        <td>{{ $sale->discount }}</td>
        <td>{{ $sale->total_price }}</td>
        <td>{{ $sale->created_at }}</td>
    </tr>
    @endforeach


</table>
{{-- end report table --}}
@endsection

