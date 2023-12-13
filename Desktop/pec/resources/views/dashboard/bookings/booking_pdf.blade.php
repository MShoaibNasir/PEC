<!DOCTYPE html>
<html>
<head>
    <title>Booking's</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>

   <table width=100% style="border-collapse:collapse; border:0px;">
   <thead>
 <tr>
                            <th style="border:1px solid; padding:12px;" width="20%">#</th>
                            <th style="border:1px solid; padding:12px;" width="20%">Date</th>
                            <th style="border:1px solid; padding:12px;" width="20%">Timeslot</th>
                            <th style="border:1px solid; padding:12px;" width="20%">Seats</th>
                            <th style="border:1px solid; padding:12px;" width="20%">Customer</th>
                            <th style="border:1px solid; padding:12px;" width="20%">Contact</th>
                            <th style="border:1px solid; padding:12px;" width="20%">Status</th>
                               <th style="border:1px solid; padding:12px;" width="20%">Payment Status</th>
                            {{-- <th>Created at</th> --}}
                            
                        </tr>
                        </thead>
<tbody>
   @foreach($bookings as $booking)
<tr>
  <td style="border:1px solid; padding:12px;">{{ $loop->iteration }}</td>
<td style="border:1px solid; padding:12px;">{{ $booking->booking_date}}</td>
<td style="border:1px solid; padding:12px;">{{ $booking->timeslot}}</td>
<td style="border:1px solid; padding:12px;">{{ $booking->seats}}</td>
<td style="border:1px solid; padding:12px;">{{ $booking->customer1.' '.$booking->customer2}}</td>
<td style="border:1px solid; padding:12px;">{{ $booking->contact}}</td>
<td style="border:1px solid; padding:12px;">{{ $booking->status}}</td>
<td style="border:1px solid; padding:12px;">{{ $booking->payment_status}}</td>
</tr>
   @endforeach
<tbody>
   </table>
</body>
</html>