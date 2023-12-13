@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Global Option</h4></div>
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
                    <div class="al
                    ert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <form method="POST" id="myForm" action="{{ route('bookings.update', $gl->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $gl->id }}">
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                   Total Seats
                                </th>
                                <td>
                                     <input type="text" name="total_seats"
                                       value="{{ old('total_seats', $globals->total_seats) }}" 
                                     required class="form-control">
                               </td>
                            </tr>
                            <tr>
                              <th>Seat Price</th>
                              <td>
                                <input type="number" name="seat_price" value="{{ old('seat_price', $globals->seat_price) }}" required
                                 class="form-control">
                              </td>
                            </tr>
                            </tbody>
                    </table>
                    <div class="col text-center">
                      <button class="btn btn-outline-success btn-lg"  type="submit">Update</button>
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
  

  </script>

@endsection
