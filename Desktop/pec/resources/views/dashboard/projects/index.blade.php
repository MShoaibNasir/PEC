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
                                    <th>Summary</th>
                                    <th>Country</th>
                                    <!--<th>Qualification</th>-->
                                    <th>Project Cost</th>
                                    <th>No of Days</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>

                                
                        @foreach ($projects as $project)
                            @if(empty($project->awarded_consultant_id))            
                                <?php 
                                        // $cls='';
                                        // if(date("Y-m-d", strtotime($project->created_at)) == date('Y-m-d')){
                                        //   $cls = 'blink_me';   class="{{$cls}}"     
                                        // }
                                ?>
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
                                            @if(empty($project->awarded_consultant_id))     
      
                                                @if(in_array($project->id, $project_requests->pluck('project_id')->toArray()))
                                                    <label style="text-align: center;padding-top: 24px;color:green;">Applied</label>
                                                @else
                                                    <button class="btn btn-success rounded-0 m-1 float-right" data-toggle="modal" data-target="#exampleModal" data-id="{{ $project->id }}" data-title="{{ $project->project_title }}" id ="abc" type="button">Apply</button>
                                                 @endif
                                            @elseif(!empty($project->awarded_consultant_id) && $project->awarded_consultant_id == $consultants_id)
                                                <label style="text-align: center;padding-top: 24px;color:green;">Project Awarded</label>
                                            @else
                                                ---
                                            @endif
                                        </td>
                                       
                                    <td>
                                     <button class="btn btn-success rounded-0 m-1 float-right" type="button"><a href="{{route('consultant_project.detail',$project->id)}}" style="text-decoration:none; color: white"> Details</a></button>
                                   </td>
                                
                                </tr>
                            
                            @else
                                @if($project->awarded_consultant_id == $consultants_id)
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
                                    <!--<td>-->
                                    <!--    {{ $project->summary }}-->
                                    <!--</td>-->
                                     <td>
                                    {{ $project->country_assignment }}
                                    </td>
                                    <!-- <td>-->
                                    <!--  {{ $project->technical_qualification }}-->
                                    <!--</td>-->
                                     <td>
                                       {{ $project->consultant_services }}
                                    </td>
                                      <td>
                                       {{ $project->schedule }}
                                    </td>
                        
                                        <td>
                                            @if(empty($project->awarded_consultant_id))     
      
                                                @if(in_array($project->id, $project_requests->pluck('project_id')->toArray()))
                                                    <label style="text-align: center;padding-top: 24px;color:green;">Applied</label>
                                                @else
                                                    <button class="btn btn-primary rounded-0 m-1 float-right" data-toggle="modal" data-target="#exampleModal" data-id="{{ $project->id }}" data-title="{{ $project->project_title }}" id ="abc" type="button">Apply</button>
                                                 @endif
                                            @elseif(!empty($project->awarded_consultant_id) && $project->awarded_consultant_id == $consultants_id)
                                                <label style="text-align: center;padding-top: 24px;color:green;">Project Awarded</label>
                                            @else
                                                ---
                                            @endif
                                        </td>
                                       
                                    <td>
                                     <button class="btn btn-success rounded-0 m-1 float-right" type="button"><a href="{{route('consultant_project.detail',$project->id)}}"> Details</a></button>
                                   </td>
                                
                                </tr>
                                @endif    
                            @endif    

                        @endforeach
                      </tbody>
                            </table>
        </div>
        
    </div>
</div>
</div>

{{-- Apply Project Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apply Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST"  action="{{route('project_requests.store')}}"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="project_id" id="project_id">
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Proposal Description<span style="color:red"> *</span></label>
                        <textarea type="text" name="proposal_description" class="form-control" required>{{ old('proposal_description') }}</textarea>
                    </div>
                    <div class="form-group"> <label>Technical Proposal<span style="color:red"> *</span></label>
                        <select id='selUser' name="technical_proposal" class="form-control" required>
                            <option value="">Select Technical Proposal</option>
                            <option value="PEC Gateway format" {{ old('technical_proposal') == "PEC Gateway format" ?? "selected" }}>PEC Gateway format</option>
                            <option value="Other" {{ old('technical_proposal') == "PEC Gateway format" ?? "selected" }}>Other</option>
                        </select>
                    </div>
                      <div class="form-group">
                        <label>upload technical proposal (only pdf allowed)<span style="color:red"> *</span></label>
                        <div class="custom-file mb-3">
                            <input type="file" id="test" class="custom-file-input" name="uplaod_technical_proposal"  accept="application/pdf" required/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                       
                    </div>
                    
                       <div class="form-group">
                        <label>upload Financial Statement (only pdf allowed)<span style="color:red"> *</span></label>
                        <div class="custom-file mb-3">
                            <input type="file" id="test" class="custom-file-input" name="financial_statement"  accept="application/pdf" required/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                      <div class="form-group">
                        <label style=" margin-left: 10px;">Bidding Amount<span style="color:red"> *</span></label>
                        <input type="text" name="bidding_amount" class="form-control" value="{{ old('bidding_amount') }}"  required />
                    </div>
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Commercial Proposal<span style="color:red"> *</span></label>
                        <input type="text" name="commercial_proposal" value="{{ old('commercial_proposal') }}" class="form-control" required/>
                    </div>
                    
                   <div class="form-group">
                        <label style=" margin-left: 10px;">Cover Letter<span style="color:red"> *</span></label>
                        <textarea type="text" name="cover_letter" class="form-control" required>{{ old('cover_letter') }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Apply Project Modal End --}}

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
