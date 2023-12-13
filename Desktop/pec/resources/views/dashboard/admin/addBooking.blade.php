@extends('dashboard.base')
@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Boooking</h4>
                            <label style="color:green;font-weight:bold;">1 Seat Price : PKR<label><?php echo $globl; ?></label>
                            </label>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <form method="POST" id="myForm" action="{{ route('bookings.store') }}">
                                @csrf
                                <table class="table table-bordered datatable">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Customer Name
                                            </th>
                                            <td>
                                                <select class="form-control" name="customer_id" required>
                                                    <option value="">Select Customer</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}"
                                                            {{ old('customer_id') == $user->id ? 'selected' : '' }}>
                                                            {{ $user->fname . ' ' . $user->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            {{-- @error('customer_id')
                                      <font style="color:red"></font>
                                      {{$message}}
                                      @enderror --}}
                                        </tr>
                                        <tr>
                                            <th>
                                                Booking Date
                                            </th>
                                            <td>
                                                <input type="text" id="booking_date" name="booking_date"
                                                    autocomplete="off" placeholder="Booking date"
                                                    value="{{ old('booking_date') }}" required class="form-control ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Timeslot
                                            </th>

                                            <td>

                                                <select class="form-control " name="timeslot" id="timeslot" required>
                                                    <option selected>Select TimeSlot</option>
                                                    @foreach ($timeSlot as $time)
                                                        <option value="{{ $time->time_start . ' - ' . $time->time_end }}"
                                                            {{ old('timeSlot') == $time->id ? 'selected' : '' }}>
                                                            {{ $time->time_start . ' - ' . $time->time_end }}</option>
                                                        {{-- <option value="{{$time->id}}" {{  old('timeSlot') == $time->id? "selected":""  }}>{{$time->time_start.' - '. $time->time_end}}</option> --}}
                                                    @endforeach
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Seats</th>
                                            <td>
                                                <label style="color:green;font-weight:bold;">Total Available Seats :<label
                                                        id="total_available_seats">0</label> </label>
                                                <input type="number" placeholder="Enter your total seats"
                                                    class="form-control" name="seats" id="seats" required>
                                            </td>
                                        </tr>
                                        <input type="hidden" placeholder="Enter your total amount" class="form-control"
                                            name="total_amount" id="seat_price" required>

                                        {{-- <tr>
                                <th>
                                 Status
                                </th>
                                <td>
                                    <select class="js-example-basic-single form-control" name="status" id="status" required>
                                        <option selected>Select status</option>
                                        <option value="reserved" {{ old('status') }}>reserved</option>
                                        <option value="completed" {{ old('status') }}>completed</option>
                                        <option value="canceled" {{ old('status') }}>canceled</option>
                                      </select>
                                    </td>
                            </tr> --}}
                                        <tr>
                                            <th>
                                                Payment Status
                                            </th>
                                            <td>
                                                <label style="color:green;font-weight:bold;">Total Amount :PKR <label
                                                        id="total_amount">0</label> </label>
                                                <select class="form-control" name="payment_status" id="payment_status"
                                                    required>
                                                    <option selected>Select Payment Status</option>
                                                    <option value="Pending" {{ old('payment_status') }}>Pending</option>
                                                    <option value="Paid Cash" {{ old('payment_status') }}>Paid Cash
                                                    </option>
                                                    <option value="Paid Card" {{ old('payment_status') }}>Paid Card
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col text-center">
                                    <button class="btn btn-success btn-lg" type="submit" value="reserved">Save</button>
                                    {{-- <a class="btn btn-outline-danger btn-lg" href="{{route('bookings.index')}}" onClick="myFunction">Reset</a> --}}
                                    <a class="btn btn-danger btn-lg" type="reset" onclick="myFunction()">Reset</a>

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
    <script type="text/javascript">
        // --------Reset form----------
        function myFunction() {

            document.getElementById("myForm").reset();
        };
        // -----------------------XXXXXXXXXXX---------------------

        // -----------------------onchange timeslot-----------------
        $('#timeslot').change(function() {

            var timeslot_val = $(this).val();
            var b_date = $('#booking_date').val();
            var s = $('#status').val();

            $.ajax({
                type: "get",
                url: "/xtreme/to_seats",
                data: {
                    timeslot_id: timeslot_val,
                    booking_date: b_date,
                    status: s

                },
                dataType: 'JSON',

                success: function(res) {

                    console.log(res, 'response');
                    var total_available_seats = res;

                    $('#total_available_seats').text(total_available_seats);
                    $("#seats").attr({
                        "max": total_available_seats, // substitute your own
                        "min": 1 // values (or variables) here



                    });



                }
            });


        });
        // ---------------------XXXXXXXXXXXXXX---------------
        /*get amount*/
        $('#seats').on('input', function() {

            var seats = $(this).val();

            $.ajax({
                type: "get",
                url: "/xtreme/get_amount",
                data: {
                    seats_id: seats,

                },
                dataType: 'JSON',

                success: function(res) {

                    console.log(res, 'response');
                    var total_amount = res;

                    $('#total_amount').text(total_amount);
                    $('#seat_price').val(total_amount);
                }
            });


        });
        //  DATEFORMAT


        $(document).ready(function() {
            $('#booking_date').datepicker({
                minDate: 0,
                dateFormat: "yy-mm-dd"
                // maxDate: "+1m"
            });
        });
    </script>
@endsection
