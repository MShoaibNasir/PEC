@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Holidays</h4></div>
            <div class="card-body">
                <div class="row">
                    <a class="btn btn-lg btn-primary ml-3" href="{{ route('holidays.create') }}">Add New Holiday</a>
                </div>
                <br>
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($holidays as $holiday)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $holiday->date}}
                                </td>
                                <td>
                                    {{ $holiday->title}}
                                </td>
                                <td>
                                    {{ $holiday->details}}
                                </td>
                                <td>
                                    <a href="{{ route('holidays.edit', $holiday->id ) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                <form action="{{ route('holidays.destroy', $holiday->id ) }}" method="POST">
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
            $('.datatable').DataTable({
                "order" : [[0, "desc"]]
            });
        } );
    </script>
@endsection
