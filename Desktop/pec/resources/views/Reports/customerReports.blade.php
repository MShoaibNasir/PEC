@extends('dashboard.base')
@section('css')

@endsection

@section('content')
<body>
<div class="container bg-white p-3">
<h2>Customer's Report</h2>
<form action="" method="POST">
@csrf
<div class="from-group">
<label>Date From</label>
<input type="text" id="date_from" name="date_from" autocomplete="off" placeholder="Date From" value="{{old('date_from')}}">
<label>Date To</label>
<input type="text" id="date_to" name="date_to" autocomplete="off" placeholder="Date To" value="{{old('date_to')}}">
{{-- <button type="submit" class="btn-info" name="btn_search"><a href="" class="text-white">Search</a></button> --}}
<input type="submit" value="Search" class="btn-info">
{{-- <button class="btn-success"><a class="btn-success" href="{{route('export')}}">Export</a></button> --}}
</div>
</form>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead id="example thead tr" class="text-center">
            <tr>

                <th>#</th>
                <th>Full Name</th>
                <th>Contact No</th>
                <th>Registration Date</th>

                 </tr>
        </thead>
        <tbody id="example tbody tr" class="text-center">
        @foreach($user as $users)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><?php echo $users->fname.' '.$users->lname; ?></td>
                <td><?php echo $users->contact_number ?></td>
                {{-- <td><?php echo $users->created_at ?></td> --}}
                <td>{{date('d-m-Y H:i:s', strtotime($users->created_at));}}</td>
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

} );
// $("#example tbody tr").each(function(i){
//     $(this).prepend("<td>" + i + "</td>")
// })
// $("#example thead tr").each(function(i){
//         $(this).prepend("<th>Serial No</th>")
// })
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




</script>
@endsection
