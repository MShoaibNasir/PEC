@extends('dashboard.base')

@section('content')
<div class="container-fluid">

  <div id="alert_div" class="alert alert-success alert-dismissible fade show" role="alert" style="display:none">
    <span id="alert_msg"></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div id="alert_div" class="alert alert-success alert-dismissible fade show" role="alert" style="display:none">
    <span id="alert_msg"></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h4 class="my-0 mr-md-auto font-weight-normal">My Project Detail </h4>
        <div class="col-sm-6">
                    
                  </div>
      <a class="btn btn-outline-success"  onclick="window.history.back();">Go Back</a>
    
          </div>
            <div class="card-body">
              <!-- <p>Consultant Detail</p><hr> -->
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
                  <label class="col-sm-4 col-form-label"><strong> Commercial (select one): </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->commercial)) ?   $project_detail->commercial : '---'}}</label>
                  </div>
                </div> 
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong> Engineering Disciplines: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class="col-form-label">{{(!empty($project_detail->engineering)) ?   $project_detail->engineering : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Allied Disciplines: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->allied)) ?   $project_detail->allied : '---'}}</label>
                  </div>
                </div>
              </div>

              <div class="row">   
              <!--     <div class="form-group col-sm-6 row">-->
              <!--    <label class="col-sm-4 col-form-label"><strong>RFP: </strong></label>-->
              <!--    <div class="col-sm-8">-->
              <!--     <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->title_bar)) ?   $project_detail->title_bar : '---'}}</label>-->
              <!--      <a href="{{ env('CONSULTANTS_URL') }}/files/clients/{{ $project_detail['title_bar'] }}">View File</a>-->
              <!--    </div>-->
              <!--  </div>-->
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Summary: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->summary)) ?   $project_detail->summary : '---'}}</label>
                  </div>
                </div>
                
                <!-- <div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong> Scope of Work (Title Bar and Upload Doc): </strong></label>-->
                <!--  <div class="col-sm-8" style ="margin-top: 6px;">-->
                <!--      <label for="staticEmail" class=" col-form-label">{{Illuminate\Support\Str::limit( $project_detail['title_bar'], 7) }}</label><br>-->
                <!--   <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $project_detail['title_bar'] }}">View File</a>-->
                <!--  </div>-->
                <!--</div>-->
                
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
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong>Delivery Schedule - Days: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->schedule)) ?   $project_detail->schedule : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong>Total Inputs: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->total_inputs)) ?   $project_detail->total_inputs : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong> Contract Type: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->contract)) ?   $project_detail->contract : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
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
                  <div class="col-sm-8" style ="margin-top: 6px;">
                      <label for="staticEmail" class=" col-form-label">{{Illuminate\Support\Str::limit( $project_detail['title_bar'], 7) }}</label><br>
                   <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $project_detail['title_bar'] }}">View File</a>
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
                  <div class="col-sm-8"  style ="margin-top: 6px;">
                   <!--<label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->documents)) ?   $project_detail->documents : '---'}}</label>-->
                  @if(!$project_documents->isEmpty())
                    @foreach($project_documents as $document)                    
                     <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $document->filename }}">View File</a><br>
                    @endforeach
                  @else
                      None
                  @endif
                  </div>
                </div>
               
               </div>
                <hr>
          
               
                
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



                   <div class="card col-md-12">
                    <div class="card-body col-md-12">
                        <div class="card-title">
                            <h3 class="mb-3" style="text-align:center;">BID RECORD</h3>
                        </div>

                        <div class="table-responsive">
                            <table id="myTable"  class="table" style="width:100%">

                                <thead>
                                <tr>

                                    <th>Name</th>
                                   
                                    <th>technical Proposal</th>
                                    <th>Proposal Description</th>
                                   <th>Bidding Amount</th>
                                     <th>Financial Statement</th>
                                     <th>Upload Technical Proposal</th>
                                     <!--<th>U</th>-->
                                     <th>Action</th>
                                   
                                </tr>
                                </thead>
                                <tbody>

                                <?php $count=0; ?>
                                
                                @foreach($d as $row)
                                
                                    <?php $count++ ?>
                                    <tr>
                                        <td>{{$row->fname.' '.$row->lname}}</td>
                                        <td>{{$row->technical_proposal}}</td>
                                        <td>{{$row->proposal_description}}</td>
                                        <td>{{$row->bidding_amount}}</td>
                                         <td><a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $row->financial_statement}}">View</a></td>
                                        <td><a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $row->uplaod_technical_proposal}}">View</a></td>
                                        <!--<td>{{$row->u}}</td>-->
                                        <td>
                                            <!--{{ route('award.project')}}-->
                                            @if($row->request_status == 2)
                                                <span class="text-danger">Request Rejected</span>
                                            @else

                                              @if(empty($project_detail->awarded_consultant_id))  
                                                
                                                <a href="javascript:;" onclick="award_project('{{ $row->u }}')" value="{{ $row->u }}" name="award" class="btn btn-success">Award</a> | 
                                                <!--<a href="javascript:;" onclick="award_project('{{ $row->u }}')" id="award" name="award" class="btn btn-success">Award</a> | -->

                                                <?php 
                                                  $user_id = \Crypt::encryptString($row->u);
                                                  $project_id = \Crypt::encryptString($row->project_id);
                                                  $id = \Crypt::encryptString($row->u);

                                                ?>
                                                <a href="{{route('client_project.reject',['id'=>$project_id,'consultant_id'=>$user_id])}}" name="reject" class="btn btn-danger">Reject</a> | <a href="{{route('message.index',$id)}}" class="btn btn-warning text-white">Chat</a>
                                                    
                                            
                                              @else
                                                  @if($project_detail->awarded_consultant_id == $row->u)
                                                   <?php 
                                                  $id = \Crypt::encryptString($row->u);

                                                ?>
                                                    <span class="text-success">Awarded</span> |<a href="{{route('message.index',$id)}}" class="btn btn-warning text-white" style="margin-top: -32px;margin-left: 67px;">Chat</a>
                                                  @endif 
                                              @endif 
                                             
                                             @endif    
                                        </td>
                            
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div></div>


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
                        <label style=" margin-left: 10px;">Proposal Description</label>
                        <textarea type="text" name="proposal_description" class="form-control" required>{{ old('proposal_description') }}</textarea>
                    </div>
                    <div class="form-group"> <label>Technical Proposal</label>
                        <select id='selUser' name="technical_proposal" class="form-control" required>
                            <option value="">Select Technical Proposal</option>
                            <option value="PEC Gateway format" {{ old('technical_proposal') == "PEC Gateway format" ?? "selected" }}>PEC Gateway format</option>
                            <option value="Other" {{ old('technical_proposal') == "PEC Gateway format" ?? "selected" }}>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Commercial Proposal</label>
                        <input type="text" name="commercial_proposal" value="{{ old('commercial_proposal') }}" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>Cover Letter</label>
                        <div class="custom-file mb-3">
                            <input type="file" id="test" class="custom-file-input" name="cover_letter" accept="pdf/doc" required/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
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
      $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
 
 
  function award_project(consultants_id) {
  
    var project_id = "{{$project_detail->id}}";
   
      $.ajax({
          type:"get",
          url: "{{ route('award.project')}}",
          data:{_token:"{{ csrf_token() }}",consultants_id:consultants_id,project_id:project_id},
          cache:false,
          dataType: "json",
          success:function(response)
          {
           
            if(response.type == 'error'){
              $("#alert_div").addClass("alert-danger");
              $("#alert_div").attr("tabindex",-1).focus();

            }else{
              alert("Project has been awarded successfully!!!");
              location.reload();
            }
            
            
            
            
          }
          
      });


  }  
  
       function test(id) {
            let choice = confirm("Are you sure, You want to award this user");
            if (choice) {
                document.getElementById("test" + id).submit();
            }
        }
</script>
@endsection
