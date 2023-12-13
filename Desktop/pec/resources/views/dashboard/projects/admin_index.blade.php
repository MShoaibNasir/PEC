@extends('dashboard.base')

@section('css')
<style>
    .price_project{
        position: absolute;
        right: 15px;
        top: 15px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-sm-12">
               
                                     <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Title</th>
                                    <th>Contract</th>
                                    <th>Engineering Desciplines</th>
                                    <th>Country</th>
                                    <th>Project Cost</th>
                                    <th>No of Days</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            
                            <tbody>
                             
                                
                        @foreach ($projects as $project)
                                    
                                
                                <tr>  
                                    <td>
                                         
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                    {{ $project->project_title }}
                                    </td>
                                    <td>
                                       Contract - {{ $project->contract }} , Posted {{ Carbon\Carbon::parse($project->created_at)->diffForHumans()}}
                                    </td>
                                    <td>
                                       {{ $project->engineering }}
                                    </td>
                                    
                                     <td>
                                    {{ $project->country_assignment }}
                                    </td>
                                   
                                     <td>
                                       {{ $project->consultant_services }}
                                    </td>
                                      <td>
                                       {{ $project->schedule }}
                                    </td>
                        
                                      
                                       
                                    <td>
                                     <button class="btn btn-success rounded-0 m-1 float-right text-light" type="button"><a href="{{route('get.projects.details',$project->id)}}" style="text-decoration:none; color:white"> Details</a></button>
                                   </td>
                                
                                </tr>
                            
                           
                           

                        @endforeach
                      </tbody>
                            </table>
        </div>
        
    </div>
</div>
</div>



@endsection

@section('javascript')
<script>
    $(document).ready( function () {
            var exampleModal = document.getElementById('exampleModal')
            exampleModal.addEventListener('show.coreui.modal', function (event) {
            var button = event.relatedTarget
            var project_id = button.getAttribute('data-id')
            var modalBodyInput = exampleModal.querySelector('.modal-body #project_id')
            modalBodyInput.value = project_id

            var project_title = button.getAttribute('data-title')
            var modalTitle = exampleModal.querySelector('.modal-title')
            modalTitle.textContent = project_title + ' (Project Proposal)'
            })
    } );
    
      $(document).ready( function () {
            $('.datatable').DataTable();
        } );
     $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  

</script>
@endsection
