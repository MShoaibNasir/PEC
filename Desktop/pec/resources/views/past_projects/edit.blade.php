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
 <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase text-center"><b>Edit Past Project</b></h6>

                    <hr />
                    <form class="row g-3" action="{{url('update/past_projects', $past_project->id)}}" method="post" enctype="multipart/form-data">
                       @csrf  
                                               
                           

                        <div class="col-12">
                        <br>
                            <label class="form-label"><span class="required" style="color: red">*</span> Project Name</label><br>
                           <input type="text" name="project_name" id="project_name" class="form-control" value="{{old('project_name', $past_project->project_name)}}">
                        </div>  
                        
                        <div class="col-12">
                        <br>
                            <label class="form-label"><span class="required" style="color: red">*</span> Value Of Project</label><br>
                           <input type="text" name="value_of_project" id="value_of_project" class="form-control" value="{{old('value_of_project', $past_project->value_of_project)}}">
                        </div>  
                        
                        <div class="col-12">
                        <br>
                            <label class="form-label"><span class="required" style="color: red">*</span> Year Of Completion</label><br>
                           <input type="text" name="year_of_completion" id="year_of_completion" class="form-control" value="{{old('year_of_completion', $past_project->year_of_completion)}}">
                        </div>  

                      
                        <div class="col-12">
                          <br>
                                <Button  class=" btn btn-success btn-lg btn-block">Update</Button>
                            
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