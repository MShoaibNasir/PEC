@extends('dashboard.base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Consultants List </h4></div>
            <div class="card-body">
                @if(Session::has('error'))
                 <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ Session::get('error') }}                   
                 </div>
                 @endif
                <br>
                <div class="table-responsive">
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>license#</th>
                            <th>Firm Name</th>
                            <th>Ownership Type</th>
                            <th>Validity</th>
                            <th>Phone #</th>
                            <th>Email</th>
                            <th>FAX</th>
                            <th>NTN</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($consultants))
                           @if(!$consultants->isEmpty()) 
                            @php $cnt = 1; @endphp
                                @foreach($consultants as $row)
                                    <tr>
                                        <td>{{$cnt++}}</td>
                                        <td>{{$row->License_No}}</td>
                                        <td>{{$row->firm_name}}</td>
                                        <td>{{$row->ownership_type}}</td>
                                        <td>{{$row->validity}}</td>
                                        <td>{{$row->phone}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->fax}}</td>
                                        <td>{{$row->ntn}}</td>
                                        <td><a href="{{route('client_consultant.detail',$row->License_No)}}" class="btn btn-success btn-sm"> Detail</a></td>
                                    </tr>
                                @endforeach
                            @endif    
                        @endif    
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
