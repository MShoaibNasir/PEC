<br>
<br>
<fieldset><legend style="text-align: center;font-weight: bold;"><small>Welcome to Xtreme Adventure</small></legend>
	<div align="center">
	<div>
			{{-- <img style="padding-left: 0px" height="12%"  src="{{url('/').'/'.'public/assets_website/images/pec_logo.png'}}"> --}}
			<img style="padding-left: 0px;background:2px black" height="12%"  src="{{asset('assets_website/images/pec_logo.png')}}">
</div>
		<br>
		@foreach($booking as $bookings)
		<b>BOOKING DATE: <strong><?php echo date('d-m-y', strtotime($bookings->booking_date));?></strong></b><br>
		<br>
		<small>TIMESLOT: <strong>{{$bookings->timeslot}}</strong></small><br>
		<br>
		<b>TOTAL BOOKED SEATS: <strong>{{$bookings->seats}}</strong></b><br>
		<br>
        {{-- <small>MR Number: <strong>{{$token_data['mr_no']}}</strong></small><br> --}}
		<small>YOUR PAID AMOUNT</small>
		<div><strong>{{ $amount}}<br><span style="font-size: 40px">
	</span></strong></div><br>
</div>
	<div class="row">
			<div  align ="left" style="margin-top: -145px">
		<small>CUSTOMER NAME: <strong>{{$bookings->customer1.' '.$bookings->customer2}}</strong></small><br>
		<br>
        <small>STATUS: <strong>{{$bookings->status}}</strong></small><br>
		<br>
        <small>PAYMENT STATUS: <strong>{{$bookings->payment_status}}</strong></small><br>
		<br>
        {{-- <small>Seats: <strong>{{$bookings->seats}}</strong></small><br> --}}
		<br>
</div>
<span style="float: left; margin-top:-260px"><?php echo 0,0,0,0,0, $bookings->id ?></span>
<span style="float: left; margin-top:-200px"><?php echo date("d-m-Y"); ?></span>
		<br>
		<span style="float: center"><small style="font-style: italic;">powered By A2Z Creatorz</small></span>
		<br>
		<span style="float: right; margin-top:-230px"><?php echo date("H:i:s"); ?></span>
		</div>
		@endforeach
</fieldset>

<script>
	window.print();
	setTimeout(window.close, 500);
</script>
