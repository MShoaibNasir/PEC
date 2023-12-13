@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Booking:{{ $booking->id }} Details</h4></div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
                    <tbody>
                        <tr>
                            <th>Booking Date</th>
                            <td>
                                {{ $booking->booking_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>Timeslot</th>
                            <td>
                                {{ $booking->timeslot }}
                            </td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            {{-- <td @foreach($users as $user)>
                                {{ $user->name }}
                            </td @endforeach> --}}
                            <td>
                                {{$booking->customer_id}}
                            </td>
                        </tr>
                        
                        <tr>
                            <th>Contact</th>
                            <td>
                                {{ 03123121312312  }}
                            </td>
                        </tr>
                        {{-- <tr>
                            <th>Created at</th>
                            <td>
                                {{ $booking->created_at }}
                            </td>
                        </tr>
                        <tr>
                            <th>Updated at</th>
                            <td>
                                {{ $booking->updated_at }}
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('bookings.index') }}">Return</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')

@endsection
