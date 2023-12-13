@extends('dashboard.base')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
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
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $total_clients ?></div>
                                        <div style = "font-size: 18px; text-align: center;">Total Clients</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:40px;">
                                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $total_consultants ?></div>
                                        <div style = "font-size: 18px; text-align: center;">Total Consultants</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:40px;">
                                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-warning">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $total_projects; ?></div>
                                        <div style = "font-size: 18px; text-align: center;">Total Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:40px;">
                                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-danger">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo number_format($total_services)  ?>$</div>
                                        <div style = "font-size: 18px; text-align: center;">Total Estimated Business</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:40px;">
                                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (str_contains(Auth::user()->menuroles, "consultant"))
                        <h2>Welcome to PEC E-Gateway </h2>
                        
                        <div class="row">
                            <!--<?php echo ($todayproject > 0 ) ? 'blink_me' : '' ; ?>-->
                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                                <a href="{{route('projects.index')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-info">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $todayproject; ?>

                                            </div>
                                        <div style = "font-size: 25px; text-align: center;">Today's Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart3" height="30"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                                <a href="{{route('applied_projects')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-success">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $myproject; ?>

                                            </div>
                                        <div style = "font-size: 25px; text-align: center;">My Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart3" height="30"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                                <a href="{{route('applied_projects')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-warning">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $applied_projects; ?>

                                            </div>
                                        <div style = "font-size: 25px; text-align: center;">My Bids</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart3" height="30"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                                <a href="{{route('projects.index')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $totalproject; ?>

                                            </div>
                                        <div style = "font-size: 25px; text-align: center;">Total Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart3" height="30"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                           
                        </div>
                        @endif
                        @if (str_contains(Auth::user()->menuroles, "client"))
                        <h2>Welcome to PEC E-Gateway </h2>
                        <!--<div class="alert alert-success m-3" role="alert">-->
                        <!--    Email has been verified! Please complete your <a href="{{ route('client_edit_profile') }}">profile</a> and sent request for the approval by PEC.-->
                        <!--</div>-->
                       <div class="row">
                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                                <a href="{{route('client_allPublish')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-warning">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $total_projects; ?>

                                            </div>
                                        <div style = "font-size: 25px; text-align: center;">Publish Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart3" height="30"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                                <a href="{{route('client_projects')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-info">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $status; ?></div>
                                        <div style = "font-size: 25px; text-align: center;">Draft Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart2" height="30"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                               <a href="{{route('totalbid.project')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-danger">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;"><?php echo $apply_bids; ?></div>
                                        <div style = "font-size: 25px; text-align: center;">Total Bids</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart4" height="30" width: "50"></canvas>
                                    </div>
                                </div>
                                </a>  
                            </div>
                              
                            <div class="col-sm-6 col-lg-3" style="margin-top: 25px;">
                                <a href="{{route('totalbid.project')}}" style="text-decoration: none; ">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg" style = "font-size: 25px; text-align: center;">$<?php echo  number_format($total_amount) ?></div>
                                        <div style = "font-size: 25px; text-align: center;">Total Bids Amount</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:30px; width: 50px;">
                                        <canvas class="chart" id="card-chart2" height="30"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection