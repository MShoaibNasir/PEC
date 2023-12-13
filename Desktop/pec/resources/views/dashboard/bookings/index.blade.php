@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Bookings</h4></div>
            <div class="card-body">
                <div class="row">
                    <a class="btn btn-lg btn-success ml-3" href="{{ route('bookings.create') }}">Add New Booking</a>
              {{-- <a class="btn btn-lg btn-danger ml-3" href="{{route('generatePDF')}}">Generate PDF</a> --}}
                </div>
                <br>
                <table class="table table-hover datatable tt">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Timeslot</th>
                            <th>Seats</th>
                            <th>Customer</th>
                            <th>Contact</th>
                            <th>Status</th>
                            {{-- <th>CreatedAt</th> --}}

                            <th >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $booking->booking_date}}
                                </td>
                                <td>
                                    {{ $booking->timeslot}}
                                </td>

                                <td>
                                    {{ $booking->seats}}
                                </td>

                               <td>
                                   {{$booking->user1.' '.$booking->user2}}
                               </td>
                                <td>
                                    {{ $booking->contact}}
                                </td>
                                <td>
                                    {{ $booking->status }}
                                </td>

                             <td>
                                <a href="{{ route('single_record_pdf', $booking->id ) }}" class="btn btn-sm btn-success btn-sm text-white" target="_blank"><i class="cis-eye"></i> GenerateTicket</a>
                                <a href="{{ route('bookings.show', $booking->id ) }}" class="btn btn-sm btn-secondary text-white">Details</a>
                                 <a href="{{ route('bookings.edit', $booking->id ) }}" class="btn btn-sm btn-primary">Edit</a>

                                @if($booking->status == 'reserved')
                                    <a  class="btn btn-sm btn-warning text-white btn_cancel"
                                     href="{{ route('booking_canceled', $booking->id) }}">Cancel
                                </a>
                                @endif

                                <form class="d-inline-block" action="{{ route('bookings.destroy', $booking->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger delete-bt">Delete</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

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
        //data-table work
        $(document).ready( function () {
            $('.datatable').DataTable({
                "order": [[ 0, "desc" ]]
            });
        } );
    </script>
@endsection
