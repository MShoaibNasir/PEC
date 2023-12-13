@extends('dashboard.base')



@section('content')

<div class="container-fluid">

  <div class="fade-in">

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h4>All Projects</h4></div>

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
                            <th>Action</th>

                            <th>View</th>

                            

                            <th>Delete</th>

                              

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($projects as $project)

                            <tr     
                            @if(!empty($project->awarded_consultant_id))    
                                style="background-color: #d9f1d9" 
                             @endif    
                            >

                                <td>

                                    {{ $loop->iteration }}

                                </td>

                                <td>

                                    {{ $project->project_title }}<br>
                                @if(!empty($project->awarded_consultant_id))    
                                    <span class="text-success">Project Awarded</span>

                                @endif
                                </td>

                                <td>

                                    {{ $project->project_category }}

                                </td>

                                <td>

                                    {{ $project->created_at }}

                                </td>
                                
                                  <td>

                                   @if(!empty($project->awarded_consultant_id))    
                                    <span class="text-success">Project Awarded</span>
                                    
                                    @else
                                       <span class="text-danger">Pending</span>
                                @endif

                                </td>

                                <td>

                                      <a href="{{ route('client_project.detail', $project->project_id ) }}" class="btn btn-primary">View</a>

                                </td>

                               

                                

                                <td>           

                                  <form action="{{ route('projects.destroy', $project->id ) }}" method="POST">

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

</div>



@endsection



@section('javascript')

    <script>

        $(document).ready( function () {

            $('.datatable').DataTable();

        } );

        

       function submit_publish_form(id) {

            let choice = confirm("Are you sure, You want to Publish this project");

            if (choice) {

                document.getElementById("publish_form" + id).submit();

            }

        }

        

        

    </script>

@endsection

