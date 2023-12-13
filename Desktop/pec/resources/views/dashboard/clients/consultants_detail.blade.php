@extends('dashboard.base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h4 class="my-0 mr-md-auto font-weight-normal"><b>{{$consultants->firm_name ? $consultants->firm_name : ''}}</b></h4>
      
      <a class="btn btn-outline-success"  onclick="window.history.back();">Go Back</a>
    
          </div>
            <div class="card-body">
              <!-- <p>Consultant Detail</p><hr> -->
              <!--<div class="row">   -->
                
              <!--  <div class="form-group col-sm-6 row">-->
              <!--    <label class="col-sm-4 col-form-label"><strong>Firm Name: </strong></label>-->
              <!--    <div class="col-sm-8">-->
              <!--     <label for="staticEmail" class=" col-form-label">{{$consultants->firm_name ? $consultants->firm_name : '--------'}}</label>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="form-group col-sm-6 row">-->
              <!--    <label class="col-sm-4 col-form-label"><strong>Website: </strong></label>-->
              <!--    <div class="col-sm-8">-->
              <!--     <label for="staticEmail" class=" col-form-label">{{(!empty($consultant_detail->Website)) ? $consultant_detail->Website : '---'}}</label>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->

              <div class="row">   
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>License #: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class="col-form-label">{{$consultants->License_No ? $consultants->License_No : '--------'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Ownership: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{$consultants->ownership_type ? $consultants->ownership_type : '--------'}}</label>
                  </div>
                </div>
              </div>

              <div class="row">   
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Validity: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{$consultants->validity ? $consultants->validity : '--------'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>phone #: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{$consultants->phone ? $consultants->phone : '--------'}}</label>
                  </div>
                </div>
              </div>

              <div class="row">   
                
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>Email: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{$consultants->email ? $consultants->email : '--------'}}</label>
                  </div>
                </div>
                <div class="form-group col-sm-6 row">
                  <label class="col-sm-4 col-form-label"><strong>NTN: </strong></label>
                  <div class="col-sm-8">
                   <label for="staticEmail" class=" col-form-label">{{$consultants->ntn ? $consultants->ntn : '--------'}}</label>
                  </div>
                </div>
              </div>

              <hr><h4><b>Consultant Services</b></h4><hr>
              
                @if(!empty($consultant_detail->consultanservices))
                  @if(!$consultant_detail->consultanservices->isEmpty())
                      @php $cnt = 1 ;@endphp
                      <div class="table-responsive">
                      <table class="table table-hover datatabl table-striped">
                      <tr>
                        <th>Sr #</th>
                        <th>License Number</th>
                        <th>Service Code</th>
                        <th>Service Description</th>
                      </tr>
                      @foreach($consultant_detail->consultanservices as $services)
                        
                          <tr>
                            <td>{{$cnt++}}</td>
                            <td>{{$services->License_No}}</td>
                            <td>{{$services->CODE}}</td>
                            <td>{{$services->DESC}}</td>
                          </tr>
                       
                      @endforeach
                       </table>
                  </div>
                  
                  @else
                    <tr><td colspan="2">No service(s) found.</td></tr>
                  @endif
                @else
                    @if(!empty($consultant_detail['consultanservices']))
                         @php $cnt = 1 ;@endphp
                         <div class="table-responsive">
                      <table class="table table-hover datatabl table-striped">
                      <tr>
                        <th>Sr #</th>
                        <th>License Number</th>
                        <th>Service Code</th>
                        <th>Service Description</th>
                      </tr>
                      @foreach($consultant_detail['consultanservices'] as $services)
                        
                          <tr>
                            <td>{{$cnt++}}</td>
                            <td>{{$services->License_No}}</td>
                            <td>{{$services->CODE}}</td>
                            <td>{{$services->DESC}}</td>
                          </tr>
                       
                      @endforeach
                       </table>
                    </div>
                    @else
                        <tr><td colspan="2">No service(s) found.</td></tr>
                    @endif
                    
                    
                    
                @endif
                  

              <hr><h4><b>Consultant specialization</b></h4><hr>
              
              
              
              
                @if(!empty($consultant_detail->consultanspecialization))
                  @if(!$consultant_detail->consultanspecialization->isEmpty())
                      @php $cnt = 1 ;@endphp
                     <div class="table-responsive">
                      <table class="table table-hover datatabl table-striped">
                      <tr>
                        <th>Sr #</th>
                        <th>Service Code</th>
                        <th>Service Description</th>
                      </tr>
                      @foreach($consultant_detail->consultanspecialization as $specialization)
                        
                          <tr>
                            <td>{{$cnt++}}</td>
                            <td>{{$specialization->CODE}}</td>
                            <td>{{$specialization->DESC}}</td>
                          </tr>
                       
                      @endforeach
                       </table>
                  </div>
                  @endif
                @else
                    @if(!empty($consultant_detail['consultanspecialization']))
                      @php $cnt = 1 ;@endphp
                      <div class="table-responsive">
                      <table class="table table-hover datatabl table-striped">
                      <tr>
                        <th>Sr #</th>
                        <th>Service Code</th>
                        <th>Service Description</th>
                      </tr>
                      @foreach($consultant_detail['consultanspecialization'] as $specialization)
                        
                          <tr>
                            <td>{{$cnt++}}</td>
                            <td>{{$specialization->CODE}}</td>
                            <td>{{$specialization->DESC}}</td>
                          </tr>
                       
                      @endforeach
                       </table>
                    </div>
                    @else
                        <tr><td colspan="2">No specialization(s) found.</td></tr>
                    @endif
                    
                    
                    
                @endif


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
