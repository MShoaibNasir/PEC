@extends('dashboard.base')

@section('content')
<br>
<br>
<div class="form-group row">
    <div class="col-sm-12">
        @if ($errors->any())
            <div class="alert m-2" style="background-color:rgb(153, 51, 0); color:white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="col-sm-12">
        @if (session()->has('message'))
            <div class="alert alert-success m-2">
                {{session('message')}}
            </div>
        @endif
    </div>
    <div class="col-sm-12">
        @if (session()->has('hasError'))
            <div class="alert alert-danger m-2">
                {{session('hasError')}}
            </div>
        @endif
    </div>
</div>
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Past projects</h4>
                        <div class="text-right" style="margin-top: -31px;">
                            <a class="btn btn-success text-white" href="{{url('add/past_projects')}}">Add</a>
                        </div>
                    </div>
                    <div class="card-body">
                
                        <br>
                      <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Value OF Project</th>
                                    <th>Year OF Completion</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($past_project as $past_projects)
                                    <tr>
                                   
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$past_projects->project_name}}  </td>
                                        <td>{{$past_projects->value_of_project}}</td>
                                        <td>{{$past_projects->year_of_completion}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{url('edit/past_projects',$past_projects->id )}}">Edit</a>
                                            <a class="btn btn-danger" href="{{url('delete/past_projects',$past_projects->id )}}">Delete</a>
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
