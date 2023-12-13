@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Clients</h4></div>
            <div class="card-body">
                <br>
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Created at</th>
                            <th></th>
                            {{-- <th></th> --}}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $client->fname.' '.$client->lname }}
                                </td>
                                <td>
                                    {{ $client->email1 }}
                                </td>
                                <td>
                                    {{ $client->company_name }}
                                </td>
                                <td>
                                    {{ $client->created_at }}
                                </td>
                                <td>
                                 
                                </td>
                                {{-- <td>
                                    <a href="{{ route('clients.edit', $client->id ) }}" class="btn btn-primary">Edit</a>
                                </td> --}}
                                <td>
                                <form action="{{ route('clients.destroy', $client->id ) }}" method="POST">
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
