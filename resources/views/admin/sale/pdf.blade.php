<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
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
    {{-- // end report table --}}

    <script src="js/app.js"></script>
  </body>
</html>


