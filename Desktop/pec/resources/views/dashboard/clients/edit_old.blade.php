@extends('dashboard.base') @section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/pages_css/post_project.css') }}" rel="stylesheet"> @endsection @section('content')
<style>
.multiSelect {
  width: 840px;
  position: relative;
}

.multiSelect *,
.multiSelect *::before,
.multiSelect *::after {
  box-sizing: border-box;
}

.multiSelect_dropdown {
  font-size: 14px;
  min-height: 35px;
  line-height: 35px;
  border-radius: 4px;
  box-shadow: none;
  outline: none;
  background-color: #fff;
  color: #444f5b;
  border: 1px solid #d9dbde;
  font-weight: 400;
  padding: 0.5px 13px;
  margin: 0;
  transition: .1s border-color ease-in-out;
  cursor: pointer;
}

.multiSelect_dropdown.-hasValue {
  padding: 5px 30px 5px 5px;
  cursor: default;
}

.multiSelect_dropdown.-open {
  box-shadow: none;
  outline: none;
  padding: 4.5px 29.5px 4.5px 4.5px;
  border: 1.5px solid #4073FF;
}

.multiSelect_arrow::before,
.multiSelect_arrow::after {
  content: '';
  position: absolute;
  display: block;
  width: 2px;
  height: 8px;
  border-radius: 20px;
  border-bottom: 8px solid #99A3BA;
  top: 40%;
  transition: all .15s ease;
}

.multiSelect_arrow::before {
  right: 18px;
  -webkit-transform: rotate(-50deg);
  transform: rotate(-50deg);
}

.multiSelect_arrow::after {
  right: 13px;
  -webkit-transform: rotate(50deg);
  transform: rotate(50deg);
}

.multiSelect_list {
  margin: 0;
  margin-bottom: 25px;
  padding: 0;
  list-style: none;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  max-height: calc(10 * 31px);
  top: 28px;
  left: 0;
  z-index: 9999;
  right: 0;
  background: #fff;
  border-radius: 4px;
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
  transition: opacity 0.1s ease, visibility 0.1s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
  transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
  transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
  -webkit-transform: scale(0.8) translate(0, 4px);
  transform: scale(0.8) translate(0, 4px);
  border: 1px solid #d9dbde;
  box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.12);
}

.multiSelect_option {
  margin: 0;
  padding: 0;
  opacity: 0;
  -webkit-transform: translate(6px, 0);
  transform: translate(6px, 0);
  transition: all .15s ease;
}

.multiSelect_option.-selected {
  display: none;
}

.multiSelect_option:hover .multiSelect_text {
  color: #fff;
  background: #4d84fe;
}

.multiSelect_text {
  cursor: pointer;
  display: block;
  padding: 5px 13px;
  color: #525c67;
  font-size: 14px;
  text-decoration: none;
  outline: none;
  position: relative;
  transition: all .15s ease;
}

.multiSelect_list.-open {
  opacity: 1;
  visibility: visible;
  -webkit-transform: scale(1) translate(0, 12px);
  transform: scale(1) translate(0, 12px);
  transition: opacity 0.15s ease, visibility 0.15s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
  transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
  transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
}

.multiSelect_list.-open + .multiSelect_arrow::before {
  -webkit-transform: rotate(-130deg);
  transform: rotate(-130deg);
}

.multiSelect_list.-open + .multiSelect_arrow::after {
  -webkit-transform: rotate(130deg);
  transform: rotate(130deg);
}

.multiSelect_list.-open .multiSelect_option {
  opacity: 1;
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}

.multiSelect_list.-open .multiSelect_option:nth-child(1) {
  transition-delay: 10ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(2) {
  transition-delay: 20ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(3) {
  transition-delay: 30ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(4) {
  transition-delay: 40ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(5) {
  transition-delay: 50ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(6) {
  transition-delay: 60ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(7) {
  transition-delay: 70ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(8) {
  transition-delay: 80ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(9) {
  transition-delay: 90ms;
}

.multiSelect_list.-open .multiSelect_option:nth-child(10) {
  transition-delay: 100ms;
}

.multiSelect_choice {
  background: rgba(77, 132, 254, 0.1);
  color: #444f5b;
  padding: 4px 8px;
  line-height: 17px;
  margin: 5px;
  display: inline-block;
  font-size: 13px;
  border-radius: 30px;
  cursor: pointer;
  font-weight: 500;
}

.multiSelect_deselect {
  width: 42px;
  height: 12px;
  display: inline-block;
  stroke: #b2bac3;
  stroke-width: 4px;
  margin-top: -1px;
  margin-left: 2px;
  vertical-align: middle;
}

.multiSelect_choice:hover .multiSelect_deselect {
  stroke: #a1a8b1;
}

.multiSelect_noselections {
  text-align: center;
  padding: 7px;
  color: #b2bac3;
  font-weight: 450;
  margin: 0;
}

.multiSelect_placeholder {
  position: absolute;
  left: 20px;
  font-size: 14px;
  top: 8px;
  padding: 0 4px;
  background-color: #fff;
  color: #b8bcbf;
  pointer-events: none;
  transition: all .1s ease;
}

.multiSelect_dropdown.-open + .multiSelect_placeholder,
.multiSelect_dropdown.-open.-hasValue + .multiSelect_placeholder {
  top: -11px;
  left: 17px;
  color: #4073FF;
  font-size: 13px;
}

.multiSelect_dropdown.-hasValue + .multiSelect_placeholder {
  top: -11px;
  left: 17px;
  color: #6e7277;
  font-size: 13px;
}
</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Update Post Projects</div>
        <!--<div class="alert alert-success" role="alert">uhgfdhfihjgfytiuyit</div>-->
        <div class="readersack">
          <div class="container  mt-2" style="background-color:#F8F8F8; height:100%; color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px; margin-top: 50px; ">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Update Post Project </h3>
                <div class=""> @if (session('message'))
                  <div class="alert alert-success" role="alert"> {{ session('message') }} </div> @endif @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul> @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li> @endforeach </ul>
                  </div> @endif
                  <form method="post" id="handleAjax" action="{{route('project.update' , $client->id)}}" name="formfield" enctype="multipart/form-data"> @csrf
                    <div class="m-4">
                      <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseOne">Step1 - Selection Profile</button>
                          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                              <div class="form-group">
                                <label><span>*</span> Project Title</label>
                                <input type="text" name="project_title" class="form-control" value="{{ old('project_title' , $client->project_title ) }}" id="project_title" /> </div>
                              <br>
                              <div class="form-group" style="margin-top: -30px;">
                                <label><span>*</span> Project Disciplines</label>
                                <!--<div class="multiSelect">-->
                                <select name="project_disciplines" class="multiSelect_field" id="project_disciplines" value="{{ old('project_disciplines' , $client->project_disciplines)}}" style="width: 100%; height: 40px;" data-placeholder="Project Disciplines">
                                  <!--<option value=" ">Select Project Disciplines</option>-->
                                  <option value="Civil" {{ $client->project_disciplines == "Civil"? "selected":"" }}>Civil</option>
                                  <option value="Mechanical" {{ $client->project_disciplines == "Mechanical"? "selected":"" }}>Mechanical</option>
                                  <option value="Electrical" {{ $client->project_disciplines == "Electrical"? "selected":"" }}> Electrical</option>
                                  <option value="Chemical" {{ $client->project_disciplines == "Chemical"? "selected":"" }}> Chemical</option>
                                  <option value="Areonautical" {{ $client->project_disciplines == "Areonautical"? "selected":"" }}>Areonautical</option>
                                  <option value="Minings" {{ $client->project_disciplines == "Minings"? "selected":"" }}>Minings</option>
                                  <option value="Agriculture" {{ $client->project_disciplines == "Agriculture"? "selected":"" }}>Agriculture</option>
                                  <option value="Metallurgical" {{ $client->project_disciplines == "Metallurgical"? "selected":"" }}> Metallurgical</option>
                                  <option value="Electronics" {{ $client->project_disciplines == "Electronics"? "selected":"" }}>Electronics</option>
                                  <option value="Petrogas" {{ $client->project_disciplines == "Petrogas"? "selected":"" }}> Petrogas</option>
                                  <option value="Industrial" {{ $client->project_disciplines == "Industrial"? "selected":"" }}> Industrial</option>
                                </select>
                                <!--</div>-->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="m-4">
                      <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Step2 - Main Disciplines</button>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                              <div class="form-group" style="color: #000000">
                                <label><span>*</span> Engineering Disciplines</label>
                                <select class="multiSelect_field" name="engineering" onchange='checkvalue(this.value)' data-placeholder="Select a Engineering Disciplines" style="width: 100%; height: 40px; color: #000000 !important;" tabindex="-1" id="engineering" value="{{ old('engineering' , $client->engineering)}}">
                                  <option>Select a Engineering Disciplines</option>
                                  <option value="Civil" {{ $client->engineering == "Civil"? "selected":"" }}>Civil</option>
                                  <option value="Mechanical" {{ $client->engineering == "Mechanical"? "selected":"" }}>Mechanical</option>
                                  <option value="Electrical" {{ $client->engineering == "Electrical"? "selected":"" }}> Electrical</option>
                                  <option value="Chemical" {{ $client->engineering == "Chemical"? "selected":"" }}> Chemical</option>
                                  <option value="Areonautical" {{ $client->engineering == "Areonautical"? "selected":"" }}>Areonautical</option>
                                  <option value="Minings" {{ $client->engineering == "Minings"? "selected":"" }}>Minings</option>
                                  <option value="Agriculture" {{ $client->engineering == "Agriculture"? "selected":"" }}>Agriculture</option>
                                  <option value="Metallurgical" {{ $client->engineering == "Metallurgical"? "selected":"" }}> Metallurgical</option>
                                  <option value="Electronics" {{ $client->engineering == "Electronics"? "selected":"" }}>Electronics</option>
                                  <option value="Petrogas" {{ $client->engineering == "Petrogas"? "selected":"" }}> Petrogas</option>
                                  <option value="Industrial" {{ $client->engineering == "Industrial"? "selected":"" }}> Industrial</option>
                                  <option value="Marine" {{ $client->engineering == "Marine"? "selected":"" }}>Marine</option>
                                  <!--<option value="Other engineering (Specify) Total engineering Professions" {{ $client->engineering == "Other engineering (Specify) Total engineering Professions"? "selected":"" }} > Other engineering (Specify) Total engineering Professions</option>-->
                                    
                                  <option value="others" {{ $client->engineering_other == 1 ? "selected":"" }}> Others</option>
                                
                                </select>
                                <?php 
                                    $client_display_eng = 'none';
                                    if($client->engineering_other ==1 ){
                                        $client_display_eng = 'block';
                                    }
                                ?>
                                <input type="text" name="engineering" id="engineering3" class="form-control" style='display:{{$client_display_eng}}; margin-top: 5px;' value="{{ old('engineering' , $client->engineering ) }}" />
                                <!--                                                            <div id="ifYes" style="visibility:hidden" >-->
                                <!--<input type='text'  name='engineering' class="form-control" style ="margin-top: 15px;">-->
                                <!--</div>-->
                              </div>
                              <div class="form-group" style="color: #000000">
                                <label><span>*</span> Allied Disciplines</label>
                                <select class="multiSelect_field" name="allied" onchange='alliedvalue(this.value)' data-placeholder="Select a Allied Disciplines" style="width: 100%; height: 40px;" tabindex="-1" id="allied" value="{{ old('allied' , $client->allied)}}">
                                  <option>Select a Allied Disciplines</option>
                                  <option value="Architecture" {{ $client->allied == "Architecture"? "selected":"" }}>Architecture</option>
                                  <option value="Regional Planning" {{ $client->allied == "Regional Planning"? "selected":"" }}>Regional Planning</option>
                                  <option value="Urban Planning" {{ $client->allied == "Urban Planning"? "selected":"" }}> Urban Planning </option>
                                  <option value="Geology" {{ $client->allied == "Geology"? "selected":"" }}> Geology </option>
                                  <option value="Economics" {{ $client->allied == "Economics"? "selected":"" }}>Economics</option>
                                  <option value="Hydrology" {{ $client->allied == "Hydrology"? "selected":"" }}> Hydrology</option>
                                  <option value="Agronomy & Agriculture" {{ $client->allied == "Agronomy & Agriculture"? "selected":"" }}>Agronomy & Agriculture</option>
                                  <option value="Financial Analysis" {{ $client->allied == "Financial Analysis"? "selected":"" }}> Financial Analysis</option>
                                  <option value="Computer Science" {{ $client->allied == "Computre Science"? "selected":"" }}> Computer Science</option>
                                  <option value="System Analysis" {{ $client->allied == "System Analysis"? "selected":"" }}> System Analysis </option>
                                  <option value="Soil Science" {{ $client->allied == "Soil Science"? "selected":"" }}> Soil Science</option>
                                  <option value="Business Administration" {{ $client->allied == "Business Administration"? "selected":"" }}> Business Administration</option>
                                  <!--<option value="Other Allied Professions Total Allied Professions" {{ $client->allied == "Other Allied Professions Total Allied Professions"? "selected":"" }}> Other Allied Professions Total Allied Professions</option>-->
                                  <option value="others" {{ $client->allied_other == 1 ? "selected":"" }}>others</option>
                                </select>
                                <?php 
                                    $client_display = 'none';
                                    if($client->allied_other ==1 ){
                                        $client_display = 'block';
                                    }
                                ?>


                                <input type="text" name="allied" id="allied3" class="form-control" value="{{ old('allied' , $client->allied ) }}" style='display:{{$client_display}}; margin-top: 5px;' /> </div>
                              <!--             <div id="ifallied" style="visibility:hidden">-->
                              <!--<input type='text'  name='allied'  class="form-control">-->
                              <!--</div>            -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="m-4">
                      <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Step3 - Term of Reference </button>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                              <div class="form-group">
                                <label><span>*</span> Summary</label>
                                <textarea type="text" name="summary" class="form-control" id="summary">{{old('summary', $client->summary)}}</textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                <label> Scope of Work (Upload Doc)</label>
                                <div class="input-group hdtuto control-group lst ">
                                  <input type="file" name="title_bar" class="myfrm form-control" accept="application/pdf" value="{{ old('title_bar', $client->title_bar)}}">
                                  <br> </div> @if(!empty($client->title_bar)) <a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $client->title_bar}}" target="_blank">View Documents</a>
                                <br> <small class="text-muted"><strong>Note:</strong> If you don't want to update file,then leave input blank.</small> @else <small class="text-muted">File not uploaded yet!</small> @endif </div>
                              <br>
                              <div class="form-group" style="margin-top: -30px;">
                                <label><span>*</span> Location of Project</label>
                                <select name="country_assignment" id="country_assignment" class="multiSelect_field" style="height: 40px; width: 100%;">
                                  <!--<option value="">Select Country</option>-->@foreach ($countries as $country)
                                  <option value="{{ $country->id }}" {{ old( 'country_assignment', $client->country_assignment) == $country->id ? 'selected' : '' }}>{{$country->nicename}}</option> @endforeach </select>
                              </div>
                              <br>
                              <div class="form-group">
                                <label><span>*</span> Contact Details for technical queries (optional)</label>
                                <input type="text" name="technical_queries" class="form-control" value="{{ old('technical_queries', $client->technical_queries) }}" id="technical_queries" /> </div>
                              <div class="form-group">
                                <label><span>*</span> General / Specific Experience required</label>
                                <input type="text" name="specific_experience" class="form-control" value="{{ old('specific_experience', $client->specific_experience) }}" id="specific_experience" /> </div>
                              <div class="form-group">
                                <label><span>*</span> Expert required</label>
                                <input type="text" name="expert" class="form-control" value="{{ old('expert' , $client->expert) }}" id="expert" /> </div>
                              <div class="form-group">
                                <label><span>*</span> Delivery Schedule - Days</label>
                                <input type="text" name="schedule" class="form-control" value="{{ old('schedule', $client->schedule) }}" id="schedule" /> </div>
                              <div class="form-group">
                                <label><span>*</span> Total Inputs</label>
                                <input type="text" name="total_inputs" class="form-control" value="{{ old('total_inputs', $client->total_inputs) }}" id="total_inputs" /> </div>
                              <br>
                              <div class="form-group" style="margin-top: -30px;">
                                <label><span>*</span> Type of Contract </label>
                                <select name="contract" class="form-control" id="contract" value="{{ old('contract', $client->contract) }}>

                                  <!--<option value=" Select ">Select Type of Contract</option>-->

                                  <option value="Specific " {{ $client->contract == "Specific "? "selected ":" " }}>Specific</option>

                                  <option value="On Call (Prequalified consultant will be invited on need basis) " {{ $client->contract == "On Call (Prequalified consultant will be invited on need basis) "? "selected ":" " }}>On

                                    Call (Prequalified consultant will be invited on need basis)</option>

                                </select>

                              </div>



                              <div class="form-group ">

                                <label><span>*</span> Consulting Max Budget</label>

                                <input type="text " name="consultant_services" id="currency-field"  data-type="currency " placeholder="$1,000,000.00 " class="form-control " value="{{ old( 'consultant_services', $client->consultant_services) }}" id="consultant_services"/> </div>
                              <div class="form-group">
                                <label for="Approval"><span>*</span> Estimated commencement date (MM/DD/YYYY)</label>
                                <input type="date" id="estimated_date" name="estimated_date" class="form-control" id="stimated_date" value="{{ old('estimated_date', $client->estimated_date) }}" /> </div>
                              <div class="form-group">
                                <label><span>*</span>Terms and Conditions of Payments</label>
                                <textarea type="text" name="term_condition" class="form-control" value="{{ old('term_condition', $client->term_condition)}}" id="term_condition">{{ $client->term_condition }}</textarea>
                              </div>
                              <br>
                              <div class="control">
                                <label style=" margin-left: 5px;;"><span>*</span> Request a Prequalification Only Technical Proposal</label>
                                <br>
                                <label class="radio" style="margin-left: 7px;">
                                  <input type="radio" name="technical_proposal" id="technical_proposal" onclick="javascript:yesnoCheck();" value="yes" {{ ( $client->technical_proposal == 'yes' ? ' checked' : '') }} > Yes </label>
                                <!--onclick="javascript:yesnoCheck();"-->
                                <label class="radio" style="margin-left: 5px;">
                                  <input type="radio" name="technical_proposal" id="technical_proposal" onclick="javascript:yesnoCheck();" value="no" {{ ( $client->technical_proposal == 'no' ? ' checked' : '') }} > No </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="m-4">
                      <div class="accordion" id="myAccordion">
                        <div class="accordion-item" id="ifYes" style="visibility:hidden">
                          <!--style="visibility:hidden"-->
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Step4 - Selection Method (Fields for selection)</button>
                          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                            <div class="card-body">
                              <div class="form-group">
                                <label> Technical Qualification </label>
                                <input type="text" name="technical_qualification" class="form-control" value="{{ old('technical_qualification', $client->technical_qualification) }}" id="technical_qualification" /> </div>
                              <div class="form-group">
                                <label style=" margin-left: 5px;"> Upload Relevant Experience and Experts</label>
                                <input type="text" name="upload_experts" class="form-control" value="{{ old('upload_experts', $client->upload_experts) }}" id="upload_experts" /> </div>
                              <div class="form-group">
                                <label> Other documents </label>
                                @if(!$project_documents->isEmpty())
                                  @php $cnt = 1; @endphp
                                  <table class="table table-hover table-striped table-sm">
                                    <thead>  
                                      <tr>
                                        <th>Sr No.</th>
                                        <th>File Name</th>
                                        <th>Remove</th>  
                                      </tr>
                                    </thead>
                                    <tbody>  
                                    
                                    @foreach($project_documents as $file)   
                                       <tr>
                                         <td width="10%">{{$cnt++}}</td>
                                         <td width="80%"><a href="{{ env('CLIENTS_URL') }}/public/files/clients/{{ $file->filename}}" target="_blank"> {{$file->filename}}</a></td>
                                         <td width="10%" class="text-center"><input type="checkbox" name="is_delete{{$file->id}}"></td>
                                       </tr>
                                    @endforeach
                                    </tbody>
                                  </table>

                                @endif
                                <div class="input-group hdtuto control-group lst increment">
                                  <input type="file" name="documents[]" class="myfrm form-control" accept="application/pdf" id="documents" value="{{ old('documents', $client->documents) }}">
                                  <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                  </div>
                                </div>
                                @if($project_documents->isEmpty())
                                  <div class="clone hide">
                                        <div class="hdtuto control-group lst input-group" style="margin-top:5px;">
                                              <input type="file" name="documents[]" class="myfrm form-control" accept="application/pdf" id="documents" value="{{ old('documents', $client->documents) }}">
                                              <div class="input-group-btn">
                                                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                              </div>
                                        </div> 

                                  </div>
                                @endif    

                                </div>
                              <br>
                              

                              <div class="form-group" style="margin-top: -30px;">
                                <label> Commercial (select one)</label>
                                <select name="commercial" class="form-control" value="{{ old('commercial', $client->commercial) }}" id="commercial">
                                  <!--<option value="---" >Select Commercial</option>-->
                                  <option value="Quality cum Cost" {{ $client->commercial == "Quality cum Cost"? "selected":"" }}>Quality cum Cost</option>
                                  <option value="Quality Based Selection" {{ $client->commercial == "Quality Based Selection"? "selected":"" }}>Quality Based Selection</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    







                   
                  
                    <div class="modal fade" id="confirm-submit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog">
                          <div class="modal-content" style="width: 700px;">
                            <div class="modal-header">
                              Post of Project Preview
                            </div>
                            <div class="modal-body">
                              Are you sure you want to update the following details?
                              <table class="table">
                                <tr>
                                  <th>Project Title</th>
                                  <td><label id="project_title_lb" required></label></td>
                                </tr>
                                <tr>
                                  <th>Project Disciplines</th>
                                  <td><label id="project_disciplines_lb" required></label></td>
                                </tr>
                                <tr>
                                  <th>Engineering Discipline </th>
                                  <td><label id="engineering_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Allied Disciplines</th>
                                  <td><label id="allied_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Summary</th>
                                  <td><label id="summary_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Country Assignment</th>
                                  <td><label id="country_assignment_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Technical Queries</th>
                                  <td><label id="technical_queries_lb"></label></td>

                                </tr>
                                <tr>
                                  <th>Specific Experience</th>
                                  <td><label id="specific_experience_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Expert required</th>
                                  <td><label id="expert_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Delivery Schedule - Days</th>
                                  <td><label id="schedule_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Total Inputs</th>
                                  <td><label id="total_inputs_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Type of Contract </th>
                                  <td><label id="contract_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Consulting Max Budget</th>
                                  <td><label id="consultant_services_lb"></label></td>
                                </tr>
                                <tr>
                                  <th> Estimated date</th>
                                  <td><label id="estimated_date_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Prequalification</th>
                                  <td><label id="prequalification_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Term and Condition</th>
                                  <td><label id="term_condition_lb"></label></td>
                                </tr>
                                <tr>
                                  <th> Technical Proposal</th>
                                  <td><label id="technical_proposal_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Technical Qualification</th>
                                  <td><label id="technical_qualification_lb"></label></td>
                                </tr>
                                <tr>
                                  <th>Relevant Experience </th>
                                  <td><label id="upload_experts_lb"></label></td>
                                </tr>
                                
                                <tr>
                                  <th> Commercial</th>
                                  <td><label id="commercial_lb"></label></td>
                                </tr>
                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" id="cancel_button" class="btn btn-default"  data-dismiss="modal">Cancel</button>
                             
                               
                                  <button type="submit" 
                                    class="btn btn-default"
                                    style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Update</button>
                               
                            </div>
                          </div>
                        </div>
                    </div>

                  </form>
                  


                  <div class="form-group" style="text-align: center;">
                    <button type="submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default" style="margin-top:130px; background-color: #004E1E; color: #fff; margin-bottom: 30px; margin-left:10px;">Preview</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div> @endsection @section('body_end')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".btn-success").click(function() {
    var lsthmtl = '<div class="hdtuto control-group lst input-group" style="margin-top:5px;">';
    lsthmtl += '<input type="file" name="documents[]" class="myfrm form-control" accept="application/pdf" id="documents" required="true">';
    lsthmtl += '<div class="input-group-btn"><button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button></div></div>';
    $(".increment").after(lsthmtl);
  });
  $("body").on("click", ".btn-danger", function() {
    $(this).parents(".hdtuto").remove();
  });
});
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script>
$(document).ready(function() {
  yesnoCheck();
  $("#collapseOne").collapse();
  // Hide the additional photo uploads
  var $additionals = $("#accordion");
  $additionals.hide();
  // Show more photo uploaders when we click
  $("#add-more").on("click", function() {
    $additionals.show();
  });
});
</script>
<script>
// Jquery Dependency
$("input[data-type='currency']").on({
  keyup: function() {
    formatCurrency($(this));
  },
  blur: function() {
    formatCurrency($(this), "blur");
  }
});

function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  // get input value
  var input_val = input.val();
  // don't validate empty input
  if(input_val === "") {
    return;
  }
  // original length
  var original_len = input_val.length;
  // initial caret position 
  var caret_pos = input.prop("selectionStart");
  // check for decimal
  if(input_val.indexOf(".") >= 0) {
    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");
    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);
    // add commas to left side of number
    left_side = formatNumber(left_side);
    // validate right side
    right_side = formatNumber(right_side);
    // On blur make sure 2 numbers after decimal
    if(blur === "blur") {
      right_side += "00";
    }
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);
    // join number by .
    input_val = "$" + left_side + "." + right_side;
  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    // final formatting
    if(blur === "blur") {
      input_val += ".00";
    }
  }
  // send updated string to input
  input.val(input_val);
  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
//  $('#expert').on('input', function (event) { 
//     this.value = this.value.replace(/[^0-9]/g, '');
// });
$('#technical_queries').on('input', function(event) {
  this.value = this.value.replace(/[^0-9]/g, '');
});
jQuery(function() {
  jQuery('.multiSelect').each(function(e) {
    var self = jQuery(this);
    var field = self.find('.multiSelect_field');
    var fieldOption = field.find('option');
    var placeholder = field.attr('data-placeholder');
    field.hide().after(`<div class="multiSelect_dropdown"></div>

                        <span class="multiSelect_placeholder">` + placeholder + `</span>

                        <ul class="multiSelect_list"></ul>

                        <span class="multiSelect_arrow"></span>`);
    fieldOption.each(function(e) {
      jQuery('.multiSelect_list').append(`<li class="multiSelect_option" data-value="` + jQuery(this).val() + `">

                                            <a class="multiSelect_text">` + jQuery(this).text() + `</a>

                                          </li>`);
    });
    var dropdown = self.find('.multiSelect_dropdown');
    var list = self.find('.multiSelect_list');
    var option = self.find('.multiSelect_option');
    var optionText = self.find('.multiSelect_text');
    dropdown.attr('data-multiple', 'true');
    list.css('top', dropdown.height() + 5);
    option.click(function(e) {
      var self = jQuery(this);
      e.stopPropagation();
      self.addClass('-selected');
      field.find('option:contains(' + self.children().text() + ')').prop('selected', true);
      dropdown.append(function(e) {
        return jQuery('<span class="multiSelect_choice">' + self.children().text() + '<svg class="multiSelect_deselect -iconX"><use href="#iconX"></use></svg></span>').click(function(e) {
          var self = jQuery(this);
          e.stopPropagation();
          self.remove();
          list.find('.multiSelect_option:contains(' + self.text() + ')').removeClass('-selected');
          list.css('top', dropdown.height() + 5).find('.multiSelect_noselections').remove();
          field.find('option:contains(' + self.text() + ')').prop('selected', false);
          if(dropdown.children(':visible').length === 0) {
            dropdown.removeClass('-hasValue');
          }
        });
      }).addClass('-hasValue');
      list.css('top', dropdown.height() + 5);
      if(!option.not('.-selected').length) {
        list.append('<h5 class="multiSelect_noselections">No Selections</h5>');
      }
    });
    dropdown.click(function(e) {
      e.stopPropagation();
      e.preventDefault();
      dropdown.toggleClass('-open');
      list.toggleClass('-open').scrollTop(0).css('top', dropdown.height() + 5);
    });
    jQuery(document).on('click touch', function(e) {
      if(dropdown.hasClass('-open')) {
        dropdown.toggleClass('-open');
        list.removeClass('-open');
      }
    });
  });
});

function yesnoCheck() {
  // alert('test');
  if(document.getElementById('technical_proposal').checked) {
    document.getElementById('ifYes').style.visibility = 'visible';
  } else document.getElementById('ifYes').style.visibility = 'hidden';
}

function yesengCheck() {
  if(document.getElementById('engineering').click) {
    document.getElementById('ifYes').style.visibility = 'visible';
  } else document.getElementById('ifYes').style.visibility = 'hidden';
}

function yesalliedCheck() {
  if(document.getElementById('allied').click) {
    document.getElementById('ifallied').style.visibility = 'visible';
  } else document.getElementById('ifallied').style.visibility = 'hidden';
}
//  $(document).ready(function(){
//      var radio = $("#technical_proposal").val();
//      console.log(radio);
//      if(radio == 'yes')
//      {
//          $("#ifYes").show();
//      }
//      if(radio == 'no')
//      {
//           $("#ifYes").hide();
//      }
//  });
function checkvalue(val) {
  if(val === "others") {
    // alert('test');
    document.getElementById('engineering3').style.display = 'block';
  } else {
    document.getElementById('engineering3').style.display = 'none';
  }
}

function alliedvalue(val) {
  if(val === "others") {
    // alert('test');
    document.getElementById('allied3').style.display = 'block';
  } else {
    document.getElementById('allied3').style.display = 'none';
  }
}
</script> @endsection