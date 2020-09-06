@extends('layouts.admin_layout')

@section('content')

<h2>All Consignment</h2>
<table class="table table-bordered">
    <tr class="info">
        <th>#</th>
        <th>ISBN</th>        
        <th>Copy Added</th>
        <th>Currency</th>
        <th>Publihser Price</th>
        <th>Cost Price</th>
        <th>Sell Price</th>
        <th>Conversion Rate</th>
        <th>Sell Fixed Rate</th>
        <th>Sell Flexible Rate</th>
        <th>Discount</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>

    @php
    $count = 1;
    @endphp

    @foreach ($consignments as $con)
    <tr>
        <td> {{$count++}} </td>
        <td> <a style="color:blue" href="/admin/consignment/single/{{ $con->id }}"><u>{{$con->isbn}}</u></a>  </td>
        <td> {{$con->copy}} </td>
        <td>{{ $con->currency }}</td>
        <td>{{ $con->publisher_price }}</td>
        <td> {{ $con->cost_price }}</td>
        <td>{{ $con->sell_price }}</td>
        <td> {{$con->con_rate}} </td>
        <td>{{ $con->sell_rate_o }}</td>
        <td>{{ $con->sell_rate_d }}</td>
        <td>{{ $con->discount }}</td>
        <td>{{ $con->created_at }}</td>
        <td>{{ $con->updated_at }}</td>
    </tr>
    @endforeach


</table>

{{ $consignments->links() }}

    
@endsection