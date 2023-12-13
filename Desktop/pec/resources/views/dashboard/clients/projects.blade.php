@extends('dashboard.base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>UnPublished Projects</h4></div>
            <div class="card-body">
                @if (session('message'))
                  <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                  </div>
                  @endif
                <br>
                <div class="table-responsive"> 
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Discipline</th>
                            <th>Created at</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                              <th>Publish</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $project->project_title }}
                                </td>
                                <td>
                                    {{ $project->project_category }}
                                </td>
                                <td>
                                    {{ $project->created_at }}
                                </td>
                                <td>
                                      <a href="{{ route('client_project.detail', $project->project_id ) }}" class="btn btn-primary">View</a>
                                </td>
                                <td>
                                     <a href="{{ route('client_project.editproject', $project->project_id ) }}" class="btn btn-warning" style="color:white;">Edit</a>
                                </td>
                                
                                <td>           
                                  <form action="{{ route('projects.destroy', $project->project_id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger delete-bt">Delete</button>
                                </form>
                                </td>
                                <td>
                                    @if( $project->status == 0 )
                                        <form id="publish_form{{ $project->id }}" action="{{ route('client_publish', $project->project_id)}}" method="POST">
                                            @csrf 
                                                <input type="hidden" name="status" value="1">
                                                <button type='submit'class='btn btn-success' onclick='submit_publish_form()'>Publish</button>
                                             
                                        </form>
                                    @endif    
                                           
                                             
                                    
                                    <!--<input type="checkbox" name="status" value="1" {{ ($project->status == '1' ? ' checked' : '') }} >-->
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
        
       function submit_publish_form(id) {            let choice = alert("You Publish A Project Successfully");
        }
        
        
    </script>
@endsection
