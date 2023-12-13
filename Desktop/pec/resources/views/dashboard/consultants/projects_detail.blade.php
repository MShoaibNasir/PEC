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
       <div class="col-sm-5" style="margin-top: 10px; margin-right: 27px;">
        @if(!empty($project_detail->clientdetails))
                  @if(!$project_detail->clientdetails->isEmpty())
                      @php $cnt = 1 ;@endphp
                    
                     
                       
                        <!--<th>First Name</th>-->
                        <!--<th>Last Name</th>-->
                        <!--<th>Contact Number</th>-->
                        
                     
                      @foreach($project_detail->clientdetails as $client)
                        
                         
                            <!--<td>{{$cnt++}}</td>-->
                           
                            <label >{{$client->fname}}-{{$client->lname}}</label>
                            <!--<td>{{$client->lname}}-</td>-->
                            <!--<td>{{$client->contact_number}}</td>-->
                         
                       
                      @endforeach
                       <!--</table>-->
                  @else
                    <tr><td colspan="2">No Client(s) found.</td></tr>
                  @endif
                @else
                    @if(!empty($project_detail['clientdetails']))
                         @php $cnt = 1 ;@endphp
                     
                      <!--<tr>-->
                      <!--  <th>Sr #</th>-->
                      <!--  <th>First Name</th>-->
                      <!--  <th>Last Name</th>-->
                      <!--  <th>Gender</th>-->
                      <!--</tr>-->
                      @foreach($project_detail['clientdetails'] as $client)
                        
                          <tr>
                            <td>{{$cnt++}}</td>
                            <td>{{$client->fname}}-{{$client->lname}}-{{$client->gender}}</td>
                            <!--<td>{{$client->lname}}</td>-->
                            <!--<td>{{$client->gender}}</td>-->
                          </tr>
                       
                      @endforeach
                     
                    @else
                        <tr><td colspan="2">No Client(s) found.</td></tr>
                    @endif
                    
                    
                    
                @endif
              
                
      </div>
    <?php
    // dd( $project_detail->id);
    ?>
        
             
             
             
       <div class="col-sm-3">
                  
                   @if(empty($project_requests))
                   <button class="btn btn-success rounded-0 m-1 float-right" id ="abc"  data-toggle="modal" data-target="#exampleModal" data-id="{{ $project_detail->id }}" data-title="{{ $project_detail->project_title }}"  type="button"> Apply</button>

             @endif
                     <!--$id = \Crypt::encryptString($project_detail->project_id);-->

                   
                   <!--<a href="{{route('message.index',$id)}}" class="btn btn-success">Start Conversation</a>-->

                  </div>

      <a class="btn btn-outline-success"  onclick="window.history.back();">Go Back</a>
    
          </div>
            <div class="card-body">
                
              
              
                 
              
                <!--@if(!empty($project_detail->clientdetails))-->
                <!--  @if(!$project_detail->clientdetails->isEmpty())-->
                <!--      @php $cnt = 1 ;@endphp-->
                <!--      <table class="table table-hover datatabl table-striped">-->
                <!--      <tr>-->
                <!--        <th>Sr #</th>-->
                <!--        <th>First Name</th>-->
                <!--        <th>Last Name</th>-->
                <!--        <th>Gender</th>-->
                <!--      </tr>-->
                <!--      @foreach($project_detail->clientdetails as $client)-->
                        
                <!--          <tr>-->
                <!--            <td>{{$cnt++}}</td>-->
                <!--            <td>{{$client->fname}}</td>-->
                <!--            <td>{{$client->lname}}</td>-->
                <!--            <td>{{$client->gender}}</td>-->
                <!--          </tr>-->
                       
                <!--      @endforeach-->
                <!--       </table>-->
                <!--  @else-->
                <!--    <tr><td colspan="2">No Client(s) found.</td></tr>-->
                <!--  @endif-->
                <!--@else-->
                <!--    @if(!empty($project_detail['clientdetails']))-->
                <!--         @php $cnt = 1 ;@endphp-->
                <!--      <table class="table table-hover datatabl table-striped">-->
                <!--      <tr>-->
                <!--        <th>Sr #</th>-->
                <!--        <th>First Name</th>-->
                <!--        <th>Last Name</th>-->
                <!--        <th>Gender</th>-->
                <!--      </tr>-->
                <!--      @foreach($project_detail['clientdetails'] as $client)-->
                        
                <!--          <tr>-->
                <!--            <td>{{$cnt++}}</td>-->
                <!--            <td>{{$client->fname}}</td>-->
                <!--            <td>{{$client->lname}}</td>-->
                <!--            <td>{{$client->gender}}</td>-->
                <!--          </tr>-->
                       
                <!--      @endforeach-->
                <!--       </table>-->
                <!--    @else-->
                <!--        <tr><td colspan="2">No Client(s) found.</td></tr>-->
                <!--    @endif-->
                    
                    
                    
                <!--@endif-->
                   
              <!-- <p>Consultant Detail</p><hr> -->
              <div class="row">   
          
                <!--        <div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong>First Name: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($consultants->fname)) ?   $consultants->fname : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
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
                
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong>Summary: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->summary)) ?   $project_detail->summary : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
                
                   <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>RFP: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->title_bar)) ?   $project_detail->title_bar : '---'}}</label>
                    <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $project_detail['title_bar'] }}" target="_blank">View File</a>
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
                
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong>Contact Details for technical queries: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->technical_queries)) ?   $project_detail->technical_queries : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
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
                <!--  <label class="col-sm-4 col-form-label"><strong>No Of Days </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->no_of_days)) ?   $project_detail->no_of_days : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
                
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong>Total Inputs: </strong></label>-->
                <!--  <div class="col-sm-8">-->
                <!--   <label for="staticEmail" class=" col-form-label">{{(!empty($project_detail->total_inputs)) ?   $project_detail->total_inputs : '---'}}</label>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="form-group col-sm-6 row">-->
                <!--  <label class="col-sm-4 col-form-label"><strong>Contract Type: </strong></label>-->
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
                  <div class="col-sm-8" style="margin-top:6px;">
                   <label for="staticEmail" class=" col-form-label">{{Illuminate\Support\Str::limit($project_detail['title_bar'], 7) }}</label><br>
                   <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $project_detail['title_bar'] }}" target="_blank">View File</a>
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
               
              </div>
            </div>
          </div>
        </div>
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
                <form method="POST"  action="{{route('project_requests.store')}}" enctype="multipart/form-data">
                    @csrf
                   <input type="hidden" name="project_id" value="{{ $project_detail->id }}">
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
      $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
    
//     $('#my-form').submit(function(){
//   $('#btn-submit').attr("disabled", true);;
    
})
</script>
@endsection

