@extends('dashboard.base')

@section('content')
<div class="form-group row">
    <div class="col-sm-12">
        @if ($errors->any())
            <div class="alert " style="background-color:rgb(153, 51, 0); color:white">
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
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
    </div>
    <div class="col-sm-12">
        @if (session()->has('hasError'))
            <div class="alert alert-danger">
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
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h4 class="my-0 mr-md-auto font-weight-normal">Project Detail</h4>
      
      <a class="btn btn-outline-success"  onclick="window.history.back();">Go Back</a>
    
        </div>
        
            <div class="card-body">
                
              <div class="row">   
          
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Project Title: </strong></label>
                  
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->project_title)) ?   $project_detail->project_title : '---'}}</label>
                  </div>
                  
                </div>
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Project Discipline: </strong></label>
                  
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->project_category)) ?   $project_detail->project_category : '---'}}</label>
                  </div>
                  
                </div>
                
              </div>
               
              <div class="row">   
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Engineering Disciplines: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class="col-form-label">{{(!empty($project_detail->engineering)) ?   $project_detail->engineering : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Allied Disciplines: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->allied)) ?   $project_detail->allied : '---'}}</label>
                  </div>
                </div>
              </div>

              <div class="row">   
                
             
                
                   <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>RFP: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->title_bar)) ?   $project_detail->title_bar : '---'}}</label>
                    <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $project_detail->title_bar }}" target="_blank">View File</a>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Location of Project: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->country_assignment)) ?   $project_detail->country_assignment : '---'}}</label>
                  </div>
                </div>
              </div>

              <div class="row">   
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Contact Details for technical queries: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->technical_queries)) ?   $project_detail->technical_queries : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>General / Specific Experience required: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->specific_experience)) ?   $project_detail->specific_experience : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Expert required: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->	expert)) ?   $project_detail->	expert : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Delivery Schedule - Days: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->schedule)) ?   $project_detail->schedule : '---'}}</label>
                  </div>
                </div>
                
              
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Total Inputs: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->total_inputs)) ?   $project_detail->total_inputs : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Contract Type: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->contract)) ?   $project_detail->contract : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Consulting Max Budget: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->consultant_services)) ?   $project_detail->consultant_services : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Estimated commencement date: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->estimated_date)) ?   $project_detail->estimated_date : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Option of Prequalification and Request for Proposal (RFP) / Request for Quote (RFQ): </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->prequalification)) ?   $project_detail->prequalification : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Scope of Work (Title Bar and Upload Doc): </strong></label>
                  <div class="col-sm-8" style="margin-top:6px;">
                   <label for="staticEmail" class=" col-form-label">{{Illuminate\Support\Str::limit($project_detail->title_bar, 7) }}</label><br>
                  <?php if( $project_detail->title_bar){?>
                    <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $project_detail->title_bar }}" target="_blank">View File</a>
                   <?php } else{ ?>
                     <a href="#" >No File</a>
                     <?php } ?>
                   
                  
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Terms and Conditions: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->term_condition)) ?   $project_detail->term_condition : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Request a Prequalification (Only Technical Proposal: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->technical_proposal)) ?   $project_detail->technical_proposal : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Technical Qualification : </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->technical_qualification)) ?   $project_detail->technical_qualification : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Upload Relevant Experience and Experts: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->upload_experts)) ?   $project_detail->upload_experts : '---'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Other documents: </strong></label>
                  <div class="col-sm-8" style="margin-top:6px;">
                  @if(!$project_documents->isEmpty())
                    @foreach($project_documents as $document)                    
                     <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $document->filename }}">View File</a><br>
                    @endforeach
                  @else
                      None
                  @endif
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong> Commercial (select one): </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->commercial)) ?   $project_detail->commercial : '---'}}</label>
                  </div>
                  
                  
                </div>
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
      $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
    
//     $('#my-form').submit(function(){
//   $('#btn-submit').attr("disabled", true);;
    
})
</script>
@endsection

