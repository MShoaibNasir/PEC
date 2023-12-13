@extends('dashboard.base')
@section('content')
@php
$estimated_business = App\Models\Project::where('awarded_consultant_id', '!=', null)
    ->where('status', 1)
    ->get();
    
$sum_of_consultant_services = $estimated_business->sum('consultant_services');

    


@endphp
<meta charset="UTF-8">
<link href="{{ asset('assets_new/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12 container">
         <div class="">
            <!--   <div class="">Dashboard</div> -->
            <div class="bg-light">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif
               @if (str_contains(Auth::user()->menuroles, "client"))
               <?php if(empty($user_title) || empty($fname) || empty($lname) || empty($gender) || empty( $country ) || empty($email1) || empty($company_name) || empty($mailing_address) || empty($experience) || empty( $street_address ) || empty($city) || empty($region)) { ?>
               <div class="alert alert-success blink_me" role="alert">
                  Complete your profile first!
               </div>
               <?php } ?>   
               @elseif (str_contains(Auth::user()->menuroles, "consultant"))
               <?php if(empty($fname) || empty($lname) || empty($user_title) || empty($gender) || empty( $country )) { ?>
               <div class="alert alert-success blink_me" role="alert">
                  Complete your profile first!
               </div>
               <?php } ?>
               @endif
               @if (str_contains(Auth::user()->menuroles, "admin"))
               <div>
               </div>
               <div class="">
                  <div class="row">
                     <div class="col-12 " >
                        <div class="container">
                              <div class="col col-md-10">
                                 <h4 style="margin-left:1px;color:black" > Projects </h4>
                              </div>
                        </div>
                        
                        <div class="shadow pb-2 " style="border-radius:15px ;background-color:white " >
                           <div class=" pt-4 d-flex justify-content-center " >
                              <div class="row container  d-flex justify-content-center " style="display: inline-block" >
                                 <div class="col shadow  " style="border-radius:10px;background-color:#6495ED">
                                    <p class="text-white" >Total Client</p>
                                    <p class="text-white" style="font-weight:normal;font-size:4vw"> {{$total_clients[0]->total_clients}} </p>
                                 </div>
                                 <div class="col shadow" style="border-radius:10px ;margin-left:10px; background-color:#198754">
                                    <p class="text-white" >Total consultant</p>
                                    <p class="text-white" style="font-weight:normal;font-size:4vw"> {{$total_consultants[0]->total_consultant}} </p>
                                 </div>
                                 <div class="col shadow  " style="border-radius:10px; background-color:#CCCCFF ;margin-left:10px;">
                                    <p class="text-white" >Total Projects</p>
                                    <p class="text-white" style="font-weight:normal;font-size:4vw"> {{$totalproject}} </p>
                                 </div>
                              </div>
                           </div>
                           <div class=" pt-4 d-flex justify-content-center " >
                              <div class="row container  d-flex justify-content-center " style="display: inline-block" >
                                 <div class="col shadow container " style="border-radius:10px; background-color:#FFBF00 ">
                                    <p class="text-white">Total Estimated Business </p>
                                    <p class="text-white" style="font-weight:normal;font-size:4vw">${{$sum_of_consultant_services}}</p>
                                 </div>
                                 <div class="col shadow" style="border-radius:10px ;margin-left:10px; background-color:#40E0D0 ">
                                    <p class="text-white" >Total Projects Awarded</p>
                                    <p class="text-white" style="font-weight:normal;font-size:4vw" > {{$awarded_projects[0]->total_projects}} </p>
                                 </div>
                              </div>
                           </div>
                           <div class=" pt-4 d-flex justify-content-center ">
                              <div class="row container" style="display: inline-block">
                                 <div class="col-6 shadow container " style="border-radius:10px; background-color:#2700ff99 ">
                                    <p class="text-white">Total Visitors </p>
                                    @php
                                    $visitores=App\Models\Visitor::count();
                                    @endphp
                                    <p class="text-white" style="font-weight:normal;font-size:4vw">{{$visitores}}</p>
                                 </div>
                              </div>
                           </div>
                           
                           
                           <div>
                           </div>
                           @if(count($get_all_project) === 0)
                           <div class="container">
                              <div class="mt-2 border" style="border-radius:10px">
                                 <div class="row container">
                                    <p> no Project found  </p>
                                 </div>
                              </div>
                           </div>
                           @else
                           <div class=" h-100 mt-4 mt-md-0">
                              <div class="card-body px-3 pt-0 pb-2">
                                 <div class="table-responsive p-0">
                                    <table class="table align-items-center justify-content-center mb-0">
                                       <thead>
                                          <tr>
                                             <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Project Name</th>
                                             <th class="text-uppercase text-dark text-xxs font-weight-bolder "> Status</th>
                                             <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Action</th>
                                             @foreach($get_all_project as $get_all_projects)
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <p class="text-sm font-weight-normal mb-0">{{$get_all_projects->project_title}}</p>
                                             </td>
                                             <td>
                                                <p class="text-sm font-weight-normal mb-0">{{$get_all_projects->consultant_services}}</p>
                                             </td>
                                             <td class="mx-10">
                                                <a class="btn  p-1" style="background-color: #004E1E; color:white" href="{{route('consultant_project.detail',$get_all_projects->id)}}">View</a>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           @endif
                           <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                              <a class="btn  me-md-2" type="button" style="background-color: #004E1E; color:white" href="{{url('/projects')}}"> View All </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endif
            @if (str_contains(Auth::user()->menuroles, "consultant"))
            <div >
            </div>
            <div class="">
               <div class="row">
                  <div class="col-12 col-md-8 my-3" >
                     <div class="container">
                        <div class="row">
                           <div class="col col-md-9 ">
                              <h4 style="margin-left:1px;color:black" >Projects </h4>
                           </div>
                           <div class="col col-md-3">
                              <p class="text-right" style="color: green">Manage Project </p>
                           </div>
                        </div>
                     </div>
                     <div class="shadow pb-2" style="border-radius:15px ;background-color:white">
                        <div class=" pt-4 d-flex justify-content-center ">
                           <div class="row container  d-flex justify-content-center " style="display: inline-block">
                              <div class="col shadow bg-danger " style="border-radius:10px">
                                 <p class="text-white" >Total Projects</p>
                                 <p class="text-white" style="font-weight:normal;font-size:4vw"> {{$totalproject ? $totalproject : '0'}} </p>
                              </div>
                              <div class="col shadow bg-success" style="border-radius:10px ;margin-left:10px">
                                 <p class="text-white" >Assigned Projects</p>
                                 <p class="text-white" style="font-weight:normal;font-size:4vw"> {{$myproject ? $myproject : '0'}} </p>
                              </div>
                              <div class="col shadow bg-danger " style="border-radius:10px; margin-left:10px">
                                 <p class="text-white"> Pending Bids </p>
                                 <p class="text-white" style="font-weight:normal;font-size:4vw"> {{$consultant_pending_project[0]->pending_consultant_projects ? $consultant_pending_project[0]->pending_consultant_projects : '0'}}</p>
                              </div>
                           </div>
                        </div>
                        <div>
                           @if(count($get_all_project) === 0)
                           <div class="container " >
                              <div class="border " style="border-radius:10px">
                                 <div class="row container " >
                                    <p  class=" p-2 mt-3 container" style="font-weight:500;color:black; text-align: center;">Submit Your First Bid and Get Involved!</p>
                                 </div>
                              </div>
                           </div>
                           @else
                           <div class=" h-100 mt-4 mt-md-0">
                              <div class="card-body px-3 pt-0 pb-2">
                                 <div class="table-responsive p-0">
                                    <table class="table align-items-center justify-content-center mb-0">
                                       <thead>
                                          <tr>
                                             <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Project Name</th>
                                             <th class="text-uppercase text-dark text-xxs font-weight-bolder "> Consultant Services</th>
                                             <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Action</th>
                                             @foreach($get_all_project as $get_all_projects)
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <p class="text-sm font-weight-normal mb-0">{{$get_all_projects->project_title}}</p>
                                             </td>
                                             <td>
                                                <p class="text-sm font-weight-normal mb-0">{{$get_all_projects->consultant_services}}</p>
                                             </td>
                                             <td>
                                                <a class="btn  p-1" style="background-color: #004E1E; color:white;width:50px" href="{{route('consultant_project.detail',$get_all_projects->id)}}">View</a>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           @endif
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                           <a class="btn  me-md-2" type="button" style="background-color: #004E1E; color:white" href="{{url('/projects')}}"> View All </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-4  " >
                     <div class="container">
                        <div class="row">
                           <div class="col col-md-8">
                              <h6 style="color:black" >Clients({{$myclients[0]->clients ? $myclients[0]->clients : '0'}})</h6>
                           </div>
                           <div class="col col-md-4">
                              <a style="text-decoration:none;" href="{{route('consultant.my.clients')}}">
                                 <p class="text-right" style="color:green">View All</p>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class=" shadow " style="border-radius:15px;background-color:white">
                        @if($my_clients) 
                        @foreach($my_clients as $my_client)	
                        <?php $user_id = \Crypt::encryptString($my_client->project_id);?>
                        <a style="text-decoration:none;" href="{{ route('getchatbox', $user_id ) }}">
                           <div class="container">
                              <div class="row">
                                 <div class="col ">
                                    <div class=" row mt-2 px-3">
                                       <div>
                                          <img src="https://devstaging.a2zcreatorz.com/pec_bk/assets_website/dashboardimages/user_img.png" alt="Image Description" style="background-color:red ;height:40px;width:auto; border-radius:10px">
                                       </div>
                                       <div  class="col col-md-5">
                                          <p class="text-dark" >{{$my_client->fname.''.$my_client->lname}}</p>
                                          <p class="text-dark" style="line-height:1px">{{$my_client->email}}</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </a>
                        @endforeach
                        @else
                        <div class="row">
                           <div class="col col-md-9">
                              <div class=" row mt-2 px-3">
                                 <p style="color:black ;font-weight:500"> Connect with Clients Upon Project Award </p>
                              </div>
                           </div>
                        </div>
                        @endif
                     </div>
                     <br>
                     <div class="container">
                        <div class="row">
                           <div class="col col-md-8">
                              <h6 style="color:black"> Bids({{$count_total_bid ? $count_total_bid : '0'}}) </h6>
                           </div>
                           <div class="col col-md-4">
                              <a href="{{route('applied_projects')}}" style="text-decoration:none;">
                                 <p class="text-right" style="color : green">View All</p>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class=" shadow " style="border-radius:15px ;background-color:white">
                        <div class="container">
                           @if(count($get_applied_project) === 0)	
                           <div class="row">
                              <div class="col-12  mt-3">
                                 <p style="color:black; font-weight:500">Bid on Available Projects</p>
                              </div>
                           </div>
                           @else
                           @foreach($get_applied_project as $get_applied_projects)
                           <div class="row ">
                              <div class="col-12 col-md-9 mt-3">
                                 <p class="text-dark">{{$get_applied_projects->project_title}}</p>
                              </div>
                              <div class="col-12 col-md-3 mt-3">
                                 <p class="text-dark">{{$get_applied_projects->bidding_amount}}</p>
                              </div>
                           </div>
                           @endforeach
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endif
         @if (str_contains(Auth::user()->menuroles, "client"))
         <div class="">
            <div class="row p-2">
               <div class="col-12 col-md-8 my-2 " >
                  <!--Project  --> 
                  <div class="container">
                     <div class="row">
                        <div class="col col-md-9">
                           <h4 style="color:black" >Projects</h4>
                        </div>
                        <div class="col col-md-3 ">
                           <p class="text-right" style="color: green"> Manage Project </p>
                        </div>
                     </div>
                  </div>
                  <div class="shadow pb-2" style="border-radius:15px ;background-color:white">
                     <div class=" pt-4 d-flex justify-content-center">
                        <div class="row container  d-flex justify-content-center" style="display: inline-block">
                           <!--<a href="{{route('client_allPublish')}}" style="text-decoration: none; ">-->
                           <div class="col shadow bg-danger " style="border-radius:10px">
                              <p class="text-white">Published Projects </p>
                              <p class="text-white" style="font-weight:normal;font-size:4vw"> {{$total_projects ? $total_projects : '0'}} </p>
                           </div>
                           <!--</a>-->
                           <div class="col shadow bg-success" style="border-radius:10px ;margin-left:10px">
                              <p class="text-white">Assigned Projects </p>
                              <p class="text-white" style="font-weight:normal;font-size:4vw"> {{ $assigned_project[0]->assigned_projects ? $assigned_project[0]->assigned_projects : '0'}} </p>
                           </div>
                           <div class="col shadow " style="border-radius:10px; margin-left:10px;background-color:#40E0D0">
                              <p class="text-white">Pending Projects</p>
                              <p class="text-white" style="font-weight:normal;font-size:4vw"> {{ $pending_project[0]->pending_projects ? $pending_project[0]->pending_projects : '0'}} </p>
                           </div>
                        </div>
                     </div>
                     @if(count($bidding_projects) === 0)
                     <div class="container p-5 mt-5"  style="height:250px">
                        <div class="border " style="border-radius:10px">
                           <div class="row container " >
                              <p  class=" p-2 mt-3 container text-light" style="font-weight:500; text-align: center;">View by Posting Your First Project. </p>
                           </div>
                        </div>
                     </div>
                     @else
                     <div class=" h-100 mt-4 mt-md-0">
                        <div class="card-body px-3 pt-0 pb-2">
                           <div class="table-responsive p-0">
                              <table class="table align-items-center justify-content-center mb-0">
                                 <thead>
                                    <tr>
                                       <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Project Name</th>
                                       <th class="text-uppercase text-dark text-xxs font-weight-bolder "> Status</th>
                                       <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Action</th>
                                       @foreach($all_project as $all_projects)
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <p class="text-sm font-weight-normal mb-0">{{$all_projects->project_title}}</p>
                                       </td>
                                       <td>
                                          <p class="text-sm font-weight-normal mb-0">{{$all_projects->status ? 'Published' : 'Pending'}}</p>
                                       </td>
                                       <td class="mx-10">
                                          <a class="btn p-1 " style="background-color: #004E1E; color: white ;width:50px" href="{{ route('client_project.detail', $all_projects->id ) }}"> View </a>
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
                        <a class="btn  me-md-2" style="background-color: #004E1E; color:white" href="{{ route('client.all.project') }}"> View All </a>
                     </div>
                     @endif
                  </div>
               </div>
               <div class="col-12 col-md-4  ">
                  <div class="  my-2 ">
                     <div class="container">
                        <div class="row" >
                           <div class="col col-sm-8 ">
                              <h6 style="color:black">Counsultants({{$count_my_consultants[0]->total_projects ? $count_my_consultants[0]->total_projects : '0'}})</h6>
                           </div>
                           <div class="col col-sm-4">
                              <a href="{{route('client.my.consultants')}}" style="text-decoration:none;">
                                 <p class="text-right" style="color:green;">View All</p>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class=" shadow" style="border-radius:15px;background-color:white">
                        <div class="container ">
                           @if($my_consultants)                                 
                           @foreach($my_consultants as $my_consultant) 								    
                           <div class="row">
                              <div class="col col-md-9">
                                 <div class=" row mt-2 px-3">
                                    <div>
                                       <img src="https://devstaging.a2zcreatorz.com/pec_bk/assets_website/dashboardimages/user_img.png" style="background-color:red ;height:40px;width:auto; border-radius:10px">
                                    </div>
                                    <div  class="col col-md-3">
                                       <p class="text-dark" >{{$my_consultant->fname.''.$my_consultant->lname}}</p>
                                       <p class="text-dark" style="line-height:1px">{{$my_consultant->email}}</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                           @else
                           <div class="row p-4" style="height:100px">
                              <div class="col ">
                                 <div class=" row mt-2 ">
                                    <p class="text-light" style="font-weight:500"> Connect with Consultants Upon Project Award </p>
                                 </div>
                              </div>
                           </div>
                           @endif     
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="">
                     <div class="container">
                        <div class="row">
                           <div class="col col-sm-8 d-lg-block ">
                              <h6 style="color:black">Bids({{$count_bidding_projects ? $count_bidding_projects : '0'}})</h6>
                           </div>
                           <div class="col col-sm-4 d-lg-block">
                              <a href="{{route('totalbid.project')}}" style="text-decoration:none">
                                 <p class="text-right" style="color : green">View All</p>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class=" shadow " style="border-radius:15px ;background-color:white">
                        <div class="container">
                           @if(count($bidding_projects) === 0)
                           <div class="row p-5" style="height:190px">
                              <div class="col-12  mt-3">
                                 <p style=" font-weight:500" class="text-light">Initiate A Project to Receive Bids</p>
                              </div>
                           </div>
                           @else
                           @foreach($bidding_projects as $bidding_project)
                           <div class="row">
                              <div class="col-12 col-sm-9 mt-3">
                                 <p class="text-dark">{{$bidding_project->project_title}}</p>
                              </div>
                              <div class="col-12 col-sm-3 mt-3">
                                 <p class="text-dark"> {{$bidding_project->bidding_amount ? $bidding_project->bidding_amount : '0'}}</p>
                              </div>
                           </div>
                           @endforeach
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endif
      </div>
   </div>
</div>
</div>
</div>
@endsection