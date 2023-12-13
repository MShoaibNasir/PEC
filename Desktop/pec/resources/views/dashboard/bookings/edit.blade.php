@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Edit Booking</h4></div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <form method="POST" id="myForm" action="{{ route('bookings.update', $booking->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $booking->id }}">
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                               <th>
                                  Customer Name
                                </th>
                                <td>
                                    <select class="form-control" name="customer_id">
                                      <option selected>Select Customers</option>
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}" 
                                          {{  old('customer_id', $booking->customer_id) == $user->id?
                                           "selected":""  }}>{{$user->fname.' '. $user->lname}}</option>
                                     @endforeach
                                        </select>                           
                                         </td>
                            </tr>
                           
                            <tr>
                                <th>
                                   Booking Date
                                </th>
                                <td>
                                    {{-- <input type="text" name="booking_date" value="{{ old('booking_date',
                                     $booking->booking_date) }}" required class="form-control" 
                                     placeholder="select booking date"> --}}
                                     <input type="text" id="booking_date" name="booking_date"
                                      placeholder="yyyy/mm/dd" value="{{ old('booking_date', $booking->booking_date) }}" 
                                     required class="form-control">
                               </td>
                            </tr>
                            <tr>
                                <th>
                                   Timeslot
                                </th>
                                <td>
                                   
                                    <select class="form-control" name="timeslot" id="timeslot" required>
                                      <option selected>Select TimeSlot</option>
                                      @foreach($timeSlot as $time)
                                      <option value="{{$time->time_start.' - '. $time->time_end}}"
                                         {{  old('timeSlot', $booking->timeslot) == $time->time_start.' - '.$time->time_end? "selected":""  }}>
                                         {{$time->time_start.' - '. $time->time_end}}</option>
                                      {{-- <option value="{{$time->id}}" {{  old('timeSlot') == $time->id? "selected":""  }}>{{$time->time_start.' - '. $time->time_end}}</option> --}}
                                     @endforeach
                                   </select>
                                </td>
                            </tr>
                            <tr>
                              <th>Seats</th>
                              <td>
                                <label style="color:green;font-weight:bold;">Total Available Seats :<label id="total_available_seats">0</label> </label>
                                <input type="number" name="seats" value="{{ old('seats', $booking->seats) }}" required
                                 class="form-control">
                              </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                 Status
                                </th>
                                <td>
                                    <select class="form-control" name="status" required>
                                        <option selected>Select status</option>
                                        <option value="reserved" {{ old('status', $booking->status) }}>reserved</option>
                                      </select>
                                    </td>
                            </tr> --}}
                            <tr>
                                <th>
                                 Payment Status
                                </th>
                                <td>
                                  <select class="js-example-basic-single form-control" name="payment_status" required>
                                    <option selected>Select Payment Status</option>
                                    <option value="Pending" {{ old('payment_status') }}>Pending</option>
                                    <option value="Paid Cash" {{ old('payment_status') }}>Paid Cash</option>    
                                    <option value="Paid Card" {{ old('payment_status') }}>Paid Card</option>    
                                  </select>                              
                                    </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    {{-- <button class="btn btn-success" type="submit">Edit Booking</button>
                    <a class="btn btn-danger" href="{{ route('bookings.index') }}">Return</a> --}}
                    <div class="col text-center">
                      <button class="btn btn-outline-success btn-lg"  type="submit">Edit Booking</button>
                      <a class="btn btn-outline-danger btn-lg"  onClick="myFunction()">Reset</a>
  
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')
<script>
  
  function myFunction() {
    document.getElementById("myForm").reset();

  }
  // -----------------------onchange timeslot-----------------
$('#timeslot').change(function(){
  
  var timeslot_val = $(this).val();
  var b_date = $('#booking_date').val();
  var s = $('#status').val();

   $.ajax(
    {     
        type:"get",
        url: "/to_seats",
        data: {
         timeslot_id:timeslot_val,
         booking_date : b_date,
         status:s
 
},
         dataType: 'JSON',
      
        success:function(res)
        {
        
          console.log(res, 'response');
          var total_available_seats = res;

      $('#total_available_seats').text(total_available_seats);
          $("#seats").attr({
     "max" :total_available_seats ,        // substitute your own
     "min" : 1          // values (or variables) here


  
  });



        }
    });

      
});
// ---------------------XXXXXXXXXXXXXX---------------
//  DATEFORMAT


$(document).ready(function(){
$('#booking_date').datepicker({
minDate: 0,
dateFormat: "yy-mm-dd"
// maxDate: "+1m" 
});
});


  
  </script>

@endsection
