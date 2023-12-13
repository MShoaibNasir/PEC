@extends('dashboard.base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>My Consultants</h4></div>
            <div class="card-body">
                
                <br>
                <div class="table-responsive"> 
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_consultants as $my_consultant)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $my_consultant->fname.' '.$my_consultant->lname }}
                                </td>
                                <td>
                                    {{ $my_consultant->email }}
                                </td>
                                <td>
                                    {{ $my_consultant->contact_number ? $my_consultant->contact_number : '' }}
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
</div>

@endsection

@section('javascript')
    <script>
        $(document).ready( function () {
            $('.datatable').DataTable();
        } );
    </script>
@endsection
