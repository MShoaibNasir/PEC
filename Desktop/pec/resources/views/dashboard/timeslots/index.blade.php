@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Timeslots</h4></div>
            <div class="card-body">
                <div class="row">
                    <a class="btn btn-lg btn-primary ml-3" href="{{ route('timeslots.create') }}">Add New Timeslot</a>
                </div>
                <br>
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Timeslot</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($timeslots as $timeslot)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $timeslot->time_start.' - '.$timeslot->time_end }}
                                </td>
                                <td>
                                    {{ $timeslot->created_at }}
                                </td>
                                <td>
                                    {{ $timeslot->updated_at }}
                                </td>
                                <td>
                                    <a href="{{ route('timeslots.edit', $timeslot->id ) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                <form action="{{ route('timeslots.destroy', $timeslot->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger delete-bt">Delete</button>
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
        $(document).ready( function () {
            $('.datatable').DataTable();
        } );
    </script>
@endsection
