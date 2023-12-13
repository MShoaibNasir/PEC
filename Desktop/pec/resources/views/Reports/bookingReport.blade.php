@extends('dashboard.base')
@section('css')

@endsection

@section('content')
<body>
<div class="container">
<h2>Booking's Report</h2>
<form action="" method="POST">
@csrf
<div class="from-group">
<label>Date From</label>
<input type="text" id="date_from" name="date_from" autocomplete="off" placeholder="Date From" value="{{old('date_from')}}">
<label>Date To</label>
<input type="text" id="date_to" name="date_to" autocomplete="off" placeholder="Date To" value="{{old('date_to')}}">
<input type="submit" value="Search" class="btn-info ">
{{-- <button class="btn-success" type="submit"><a class="text-white " href="{{route('excel')}}">Export</a></button> --}}
</div>
</form>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead id="example thead tr" class="text-center">
            <tr>
               
                <th>Customer's Name</th>
                <th>Booking Date</th>
                <th>Timeslot</th>
                <th>Seats</th>
                <th>Status</th>
                <th>Payment Status</th>
                 </tr>
        </thead>
        <tbody id="example tbody tr" class="text-center">
        @foreach($booking as $bookings)
            <tr>
                
                <td><?php echo $bookings->fname.' '.$bookings->lname;?></td>
                {{-- <td><?php echo $bookings->booking_date ?></td> --}}
                <td>{{date('d-m-Y', strtotime($bookings->booking_date));}}</td>
                <td><?php echo $bookings->timeslot ?></td>
                <td><?php echo $bookings->seats ?></td>
                <td><?php 
                if($bookings->status != 'cancelled')
                {  ?>
                <font style="color: green"><?php echo $bookings->status ?></font>
        <?php
                 }
            else {  ?>
                 <font style="color: red"><?php echo $bookings->status;?></font>
    <?php
              }   ?>
    </td>
                <td><?php echo $bookings->payment_status ?></td>

            </tr>
            @endforeach
                   </tbody>
           </table>
           </div>
</body>
@endsection



@section('javascript')
<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            
            'excelHtml5'
            
        ]
    });
});
$("#example tbody tr").each(function(i){
    $(this).prepend("<td>" + i + "</td>")
})
$("#example thead tr").each(function(i){
        $(this).prepend("<th>Serial No</th>")
})


$(document).ready(function(){
$('#date_from').datepicker({
 // minDate: 0,
  dateFormat: "yy-mm-dd"
// maxDate: "+1m" 
 });
});

$(document).ready(function(){
$('#date_to').datepicker({
  //minDate: 0,
  dateFormat: "yy-mm-dd"
// maxDate: "+1m" 
 });
});
// $(document).ready( function() {
//     $('#example').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [ {
//             extend: 'excelHtml5',
//             autoFilter: true,
//             sheetName: 'Boking Data'
//         } ]
//     } );
// } );


</script>
@endsection