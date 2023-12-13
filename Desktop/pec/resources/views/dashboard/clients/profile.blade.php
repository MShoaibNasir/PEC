@extends('dashboard.base')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/customm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!--

TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->


  <title>Consultant Registration </title>

  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#collapseOne" ).collapse();
  } );
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="index.js"></script>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
                               
                                <script type="text/javascript" src="index.js"></script>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script type='text/javascript'>$(document).ready(function() {
$('.select2').select2({
closeOnSelect: false
});
});</script>
                               <script>
        $(document).ready(function(){

            // Initialize select2
            $("#selUser").select2();

            // Read selected option
            $('#but_read').click(function(){
                var username = $('#selUser option:selected').text();
                var userid = $('#selUser').val();

                $('#result').html("id : " + userid + ", name : " + username);
            });
        });
        </script>



  <style>


                            .error {
      color: red
    }
    * {
  box-sizing: border-box;

}
span{
    color: red;
}
body,
    html {
      margin: 0;
      padding: 0;


      /* background: #60a3bc !important; */
    }

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.multiSelect {
    width: 700px;
    position: relative;
}

.multiSelect *, .multiSelect *::before, .multiSelect *::after {
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
                    <div class="card-header">Profile</div>

                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (str_contains(Auth::user()->menuroles, "client"))
                        <!-- <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg">{{ 15 }}</div>
                                        <div>My Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg">{{ 7000 }}$</div>
                                        <div>Total Earnings</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> -->




<body >


  <!-- <div class="container"> -->

    <!-- main app container -->
    <div class="readersack">

     
                        
    <div class="container" style="background-color:#F8F8F8;  color: #000; ">

<div class="row">

  <div class="col-md-10 offset-md-1">
  <img src ="{{asset('../images/pec_logo.png')}}" style="margin-top: 40px; width: 100%; , margin-left: 10px;" >
    <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Profile </h3>

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

    <form id="handleAjax" action="{{ route('clients.update', $user->id)}}" name="postform" method="post"  enctype="multipart/form-data">
    @method('PUT')
     @csrf
    <div class="m-4">
<div class="accordion" id="myAccordion">
<div class="accordion-item">

        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="color:#198754">Step1 - Basic Information</button>

    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
        <div class="card-body">
    <div class="row">
    <div class="column" >
    <!-- <div class="form-group">

        <label>Client Reg No</label>
        <input type="text" name="client_reg" value="{{old('client_reg')}}" class="form-control"  placeholder="20883"/>
      </div> -->

      <div class="form-group">

        <label><span>*</span> User Title</label>
        <!--<input  type="text" name="user_title" value="{{ old('user_title' , $user->user_title)}}" class="form-control"  />-->
         <select name="user_title" autocomplete='off' class="multiSelect_field" value="{{ old('user_title' , $user->user_title)}}"  style="width:100%; height: 40px;" required >
                               <!--<option value=''>Select User Title</option>-->
                               <option value="Mr" {{ $user->user_title == "Mr"? "selected":"" }} >Mr</option>
                               <option value="Ms" {{ $user->user_title == "Ms"? "selected":"" }} >Ms</option>
                               <option value="Mrs" {{ $user->user_title == "Mrs"? "selected":"" }} >Mrs</option>
                               <option value="Miss" {{ $user->user_title == "Miss"? "selected":"" }} >Miss</option>
                               <!--<option value="DISCOVER">DISCOVER</option>-->
                            </select>
    
      </div>
      <div class="form-group">
        <label> Middle Name</label>
        <input type="text" name="mname" class="form-control" value="{{ old('mname', $user->mname) }}"  />
      </div>
    </div>


     <div class="column">

      <div class="form-group">
        <label ><span>*</span> First Name</label>
        <input  type="text" name="fname" class="form-control"  value="{{ old('fname', $user->fname) }}"  "  />
      </div>
      <div class="form-group">
        <label style=" margin-left: 10px;"><span>*</span> Last Name</label>
        <input  type="text" name="lname" class="form-control" value="{{ old('lname', $user->lname) }}"   />
      </div>


        </div>
      </div>

      <div class="form-group" style="margin-top: -110px;">
      <label>
      <span>*</span> Gender:
         </label>
        <input type="radio" id="gender" name="gender"  value="male" style="margin-left: 10px;"  {{ $user->gender == "male"? "checked":"" }}   /> Male

        <input type="radio" id="gender" name="gender" value="female" style="margin-left: 10px;"  {{ $user->gender == "female"? "checked":"" }}  /> Female <br/>
         </div><br>

      <div  style="margin-top: -30px;"> <label ><span>*</span>  Country </label>  <select id='selUser' name="country" style="width:100%; height: 40px;" class="multiSelect_field" value="{{ old('country', $user->country) }}" ><br>
        <option value="Select">Select Country</option>
          <option value="Afganistan"  {{ $user->country == "Afganistan"? "selected":"" }}>Afghanistan</option>
          <option value="Albania" {{ $user->country == "Albania"? "selected":"" }}>Albania</option>
          <option value="Algeria" {{ $user->country == "Algeria"? "selected":"" }}>Algeria</option>
          <option value="American Samoa" {{ $user->country == "American Samoa"? "selected":"" }}>American Samoa</option>
          <option value="Andorra" {{ $user->country == "Andorra"? "selected":"" }}>Andorra</option>
          <option value="Angola" {{ $user->country == "Angola"? "selected":"" }}>Angola</option>
          <option value="Anguilla" {{ $user->country == "Anguilla"? "selected":"" }}>Anguilla</option>
          <option value="Antigua & Barbuda" {{ $user->country == "Antigua & Barbuda"? "selected":"" }}>Antigua & Barbuda</option>
          <option value="Argentina" {{ $user->country == "Argentina"? "selected":"" }}>Argentina</option>
          <option value="Armenia" {{ $user->country == "Armenia"? "selected":"" }}>Armenia</option>
          <option value="Aruba" {{ $user->country == "Aruba"? "selected":"" }}>Aruba</option>
          <option value="Australia" {{ $user->country == "Australia"? "selected":"" }}>Australia</option>
          <option value="Austria" {{ $user->country == "Austria"? "selected":"" }}>Austria</option>
          <option value="Azerbaijan" {{ $user->country == "Azerbaijan"? "selected":"" }}>Azerbaijan</option>
          <option value="Bahamas" {{ $user->country == "Bahamas"? "selected":"" }}>Bahamas</option>
          <option value="Bahrain" {{ $user->country == "Bahrain"? "selected":"" }}>Bahrain</option>
          <option value="Bangladesh" {{ $user->country == "Bangladesh"? "selected":"" }}>Bangladesh</option>
          <option value="Barbados" {{ $user->country == "Barbados"? "selected":"" }}>Barbados</option>
          <option value="Belarus" {{ $user->country == "Belarus"? "selected":"" }}>Belarus</option>
          <option value="Belgium" {{ $user->country == "Belgium"? "selected":"" }}>Belgium</option>
          <option value="Belize" {{ $user->country == "Belize"? "selected":"" }}>Belize</option>
          <option value="Benin" {{ $user->country == "Benin"? "selected":"" }}>Benin</option>
          <option value="Bermuda" {{ $user->country == "Bermuda"? "selected":"" }}>Bermuda</option>
          <option value="Bhutan" {{ $user->country == "Bhutan"? "selected":"" }}>Bhutan</option>
          <option value="Bolivia" {{ $user->country == "Bolivia"? "selected":"" }}>Bolivia</option>
          <option value="Bonaire" {{ $user->country == "Bonaire"? "selected":"" }}>Bonaire</option>
          <option value="Bosnia & Herzegovina" {{ $user->country == "Bosnia & Herzegovina"? "selected":"" }}>Bosnia & Herzegovina</option>
          <option value="Botswana" {{ $user->country == "Botswana"? "selected":"" }}>Botswana</option>
          <option value="Brazil" {{ $user->country == "Brazil"? "selected":"" }}>Brazil</option>
          <option value="British Indian Ocean Ter" {{ $user->country == "British Indian Ocean Ter"? "selected":"" }}>British Indian Ocean Ter</option>
          <option value="Brunei" {{ $user->country == "Brunei"? "selected":"" }}>Brunei</option>
          <option value="Bulgaria" {{ $user->country == "Bulgaria" ? "selected":"" }}>Bulgaria</option>
          <option value="Burkina Faso" {{ $user->country == "Burkina Faso"? "selected":"" }}>Burkina Faso</option>
          <option value="Burundi" {{ $user->country == "Burundi"? "selected":"" }}>Burundi</option>
          <option value="Cambodia" {{ $user->country == "Cambodia"? "selected":"" }}>Cambodia</option>
          <option value="Cameroon" {{ $user->country == "Cameroon"? "selected":"" }}>Cameroon</option>
          <option value="Canada" {{ $user->country == "Canada"? "selected":"" }}>Canada</option>
          <option value="Canary Islands" {{ $user->country == "Canary Islands"? "selected":"" }}>Canary Islands</option>
          <option value="Cape Verde" {{ $user->country == "Cape Verde"? "selected":"" }}>Cape Verde</option>
          <option value="Cayman Islands" {{ $user->country == "Cayman Islands"? "selected":"" }}>Cayman Islands</option>
          <option value="Central African Republic" {{ $user->country == "Central African Republic"? "selected":"" }}>Central African Republic</option>
          <option value="Chad" {{ $user->country == "Chad"? "selected":"" }}>Chad</option>
          <option value="Channel Islands" {{ $user->country == "Channel Islands"? "selected":"" }}>Channel Islands</option>
          <option value="Chile" {{ $user->country == "Chile"? "selected":"" }}>Chile</option>
          <option value="China" {{ $user->country == "China"? "selected":"" }}>China</option>
          <option value="Christmas Island" {{ $user->country == "Christmas Island"? "selected":"" }}>Christmas Island</option>
          <option value="Cocos Island" {{ $user->country == "Cocos Island"? "selected":"" }}>Cocos Island</option>
          <option value="Colombia"{{ $user->country == "Colombia"? "selected":"" }}>Colombia</option>
          <option value="Comoros" {{ $user->country == "Comoros"? "selected":"" }}>Comoros</option>
          <option value="Congo" {{ $user->country == "Congo"? "selected":"" }}>Congo</option>
          <option value="Cook Islands" {{ $user->country == "Cook Islands"? "selected":"" }}>Cook Islands</option>
          <option value="Costa Rica" {{ $user->country == "Costa Rica"? "selected":"" }}>Costa Rica</option>
          <option value="Cote DIvoire" {{ $user->country == "Cote DIvoire"? "selected":"" }}>Cote DIvoire</option>
          <option value="Croatia" {{ $user->country == "Croatia"? "selected":"" }}>Croatia</option>
          <option value="Cuba" {{ $user->country == "Cuba"? "selected":"" }}>Cuba</option>
          <option value="Curaco" {{ $user->country == "Curaco"? "selected":"" }}>Curacao</option>
          <option value="Cyprus" {{ $user->country == "Cyprus"? "selected":"" }}>Cyprus</option>
          <option value="Czech Republic" {{ $user->country == "Czech Republic"? "selected":"" }}>Czech Republic</option>
          <option value="Denmark" {{ $user->country == "Denmark"? "selected":"" }}>Denmark</option>
          <option value="Djibouti" {{ $user->country == "Djibouti"? "selected":"" }}>Djibouti</option>
          <option value="Dominica" {{ $user->country == "Dominica"? "selected":"" }}>Dominica</option>
          <option value="Dominican Republic" {{ $user->country == "Dominican Republic"? "selected":"" }}>Dominican Republic</option>
          <option value="East Timor" {{ $user->country == "East Timor"? "selected":"" }}>East Timor</option>
          <option value="Ecuador" {{ $user->country == "Ecuador"? "selected":"" }}>Ecuador</option>
          <option value="Egypt" {{ $user->country == "Egypt" ? "selected":"" }}>Egypt</option>
          <option value="El Salvador" {{ $user->country == "El Salvador"? "selected":"" }}>El Salvador</option>
          <option value="Equatorial Guinea" {{ $user->country == "Equatorial Guinea"? "selected":"" }}>Equatorial Guinea</option>
          <option value="Eritrea" {{ $user->country == "Eritrea"? "selected":"" }}>Eritrea</option>
          <option value="Estonia" {{ $user->country == "Estonia"? "selected":"" }}>Estonia</option>
          <option value="Ethiopia" {{ $user->country == "Ethiopia"? "selected":"" }}>Ethiopia</option>
          <option value="Falkland Islands" {{ $user->country == "Falkland Islands"? "selected":"" }}>Falkland Islands</option>
          <option value="Faroe Islands" {{ $user->country == "Faroe Islands" ? "selected":"" }}>Faroe Islands</option>
          <option value="Fiji" {{ $user->country == "Fiji"? "selected":"" }}>Fiji</option>
          <option value="Finland" {{ $user->country == "Finland"? "selected":"" }}>Finland</option>
          <option value="France" {{ $user->country == "France"? "selected":"" }}>France</option>
          <option value="French Guiana" {{ $user->country == "French Guiana"? "selected":"" }}>French Guiana</option>
          <option value="French Polynesia" {{ $user->country == "French Polynesia"? "selected":"" }}>French Polynesia</option>
          <option value="French Southern Ter" {{ $user->country == "French Southern Ter"? "selected":"" }}>French Southern Ter</option>
          <option value="Gabon" {{ $user->country == "Gabon"? "selected":"" }}>Gabon</option>
          <option value="Gambia" {{ $user->country == "Gambia"? "selected":"" }}>Gambia</option>
          <option value="Georgia" {{ $user->country == "Georgia"? "selected":"" }}>Georgia</option>
          <option value="Germany" {{ $user->country == "Germany"? "selected":"" }}>Germany</option>
          <option value="Ghana" {{ $user->country == "Ghana"? "selected":"" }}>Ghana</option>
          <option value="Gibraltar" {{ $user->country == "Gibraltar" ? "selected":"" }}>Gibraltar</option>
          <option value="Great Britain" {{ $user->country == "Great Britain"? "selected":"" }}>Great Britain</option>
          <option value="Greece" {{ $user->country == "Greece" ? "selected":"" }}>Greece</option>
          <option value="Greenland" {{ $user->country == "Greenland"? "selected":"" }}>Greenland</option>
          <option value="Grenada" {{ $user->country == "Grenada"? "selected":"" }}>Grenada</option>
          <option value="Guadeloupe" {{ $user->country == "Guadeloupe"? "selected":"" }}>Guadeloupe</option>
          <option value="Guam" {{ $user->country == "Guam"? "selected":"" }}>Guam</option>
          <option value="Guatemala" {{ $user->country == "Guatemala"? "selected":"" }}>Guatemala</option>
          <option value="Guinea" {{ $user->country == "Guinea"? "selected":"" }}>Guinea</option>
          <option value="Guyana" {{ $user->country == "Guyana"? "selected":"" }}>Guyana</option>
          <option value="Haiti" {{ $user->country == "Haiti"? "selected":"" }}>Haiti</option>
          <option value="Hawaii" {{ $user->country == "Hawaii"? "selected":"" }}>Hawaii</option>
          <option value="Honduras" {{ $user->country == "Honduras"? "selected":"" }}>Honduras</option>
          <option value="Hong Kong" {{ $user->country == "Hong Kong"? "selected":"" }}>Hong Kong</option>
          <option value="Hungary" {{ $user->country == "Hungary"? "selected":"" }}>Hungary</option>
          <option value="Iceland" {{ $user->country == "Iceland"? "selected":"" }}>Iceland</option>
          <option value="Indonesia" {{ $user->country == "Indonesia"? "selected":"" }}>Indonesia</option>
          <option value="India" {{ $user->country == "India" ? "selected":"" }}>India</option>
          <option value="Iran" {{ $user->country == "Iran"? "selected":"" }}>Iran</option>
          <option value="Iraq" {{ $user->country == "Iraq" ? "selected":"" }}>Iraq</option>
          <option value="Ireland" {{ $user->country == "Ireland"? "selected":"" }}>Ireland</option>
          <option value="Isle of Man" {{ $user->country == "Isle of Man"? "selected":"" }}>Isle of Man</option>
          <option value="Israel" {{ $user->country == "Israel"? "selected":"" }}>Israel</option>
          <option value="Italy" {{ $user->country == "Italy"? "selected":"" }}>Italy</option>
          <option value="Jamaica" {{ $user->country == "Jamaica"? "selected":"" }}>Jamaica</option>
          <option value="Japan" {{ $user->country == "Japan"? "selected":"" }}>Japan</option>
          <option value="Jordan" {{ $user->country == "Jordan"? "selected":"" }}>Jordan</option>
          <option value="Kazakhstan" {{ $user->country == "Kazakhstan"? "selected":"" }}>Kazakhstan</option>
          <option value="Kenya" {{ $user->country == "Kenya"? "selected":"" }}>Kenya</option>
          <option value="Kiribati" {{ $user->country == "Kiribati"? "selected":"" }}>Kiribati</option>
          <option value="Korea North" {{ $user->country == "Korea North"? "selected":"" }}>Korea North</option>
          <option value="Korea Sout" {{ $user->country == "Korea Sout"? "selected":"" }}>Korea South</option>
          <option value="Kuwait" {{ $user->country == "Kuwait"? "selected":"" }}>Kuwait</option>
          <option value="Kyrgyzstan" {{ $user->country == "Kyrgyzstan"? "selected":"" }}>Kyrgyzstan</option>
          <option value="Laos" {{ $user->country == "Laos" ? "selected":"" }}>Laos</option>
          <option value="Latvia" {{ $user->country == "Latvia"? "selected":"" }}>Latvia</option>
          <option value="Lebanon" {{ $user->country == "Lebanon"? "selected":"" }}>Lebanon</option>
          <option value="Lesotho" {{ $user->country == "Lesotho"? "selected":"" }}>Lesotho</option>
          <option value="Liberia" {{ $user->country == "Liberia"? "selected":"" }}>Liberia</option>
          <option value="Libya" {{ $user->country == "Libya"? "selected":"" }}>Libya</option>
          <option value="Liechtenstein" {{ $user->country == "Liechtenstein"? "selected":"" }}>Liechtenstein</option>
          <option value="Lithuania" {{ $user->country == "Lithuania"? "selected":"" }}>Lithuania</option>
          <option value="Luxembourg" {{ $user->country == "Luxembourg"? "selected":"" }}>Luxembourg</option>
          <option value="Macau" {{ $user->country == "Macau"? "selected":"" }}>Macau</option>
          <option value="Macedonia" {{ $user->country == "Macedonia" ? "selected":"" }}>Macedonia</option>
          <option value="Madagascar" {{ $user->country == "Madagascar"? "selected":"" }}>Madagascar</option>
          <option value="Malaysia" {{ $user->country == "Malaysia"? "selected":"" }}>Malaysia</option>
          <option value="Malawi" {{ $user->country == "Malawi"? "selected":"" }}>Malawi</option>
          <option value="Maldives" {{ $user->country == "Maldives"? "selected":"" }}>Maldives</option>
          <option value="Mali" {{ $user->country == "Mali"? "selected":"" }}>Mali</option>
          <option value="Malta" {{ $user->country == "Malta"? "selected":"" }}>Malta</option>
          <option value="Marshall Islands" {{ $user->country == "Marshall Islands"? "selected":"" }}>Marshall Islands</option>
          <option value="Martinique" {{ $user->country == "Martinique"? "selected":"" }}>Martinique</option>
          <option value="Mauritania" {{ $user->country == "Mauritania"? "selected":"" }}>Mauritania</option>
          <option value="Mauritius" {{ $user->country == "Mauritius"? "selected":"" }}>Mauritius</option>
          <option value="Mayotte" {{ $user->country == "Mayotte"? "selected":"" }}>Mayotte</option>
          <option value="Mexico" {{ $user->country == "Mexico"? "selected":"" }}>Mexico</option>
          <option value="Midway Islands" {{ $user->country == "Midway Islands"? "selected":"" }}>Midway Islands</option>
          <option value="Moldova" {{ $user->country == "Moldova" ? "selected":"" }}>Moldova</option>
          <option value="Monaco" {{ $user->country == "Monaco"? "selected":"" }}>Monaco</option>
          <option value="Mongolia" {{ $user->country == "Mongolia"? "selected":"" }}>Mongolia</option>
          <option value="Montserrat" {{ $user->country == "Montserrat"? "selected":"" }}>Montserrat</option>
          <option value="Morocco" {{ $user->country == "Morocco"? "selected":"" }}>Morocco</option>
          <option value="Mozambique" {{ $user->country == "Mozambique"? "selected":"" }}>Mozambique</option>
          <option value="Myanmar" {{ $user->country == "Myanmar"? "selected":"" }}>Myanmar</option>
          <option value="Nambia" {{ $user->country == "Nambia"? "selected":"" }}>Nambia</option>
          <option value="Nauru" {{ $user->country == "Nauru" ? "selected":"" }}>Nauru</option>
          <option value="Nepal" {{ $user->country == "Nepal"? "selected":"" }}>Nepal</option>
          <option value="Netherland Antilles" {{ $user->country == "Netherland Antilles"? "selected":"" }}>Netherland Antilles</option>
          <option value="Netherlands" {{ $user->country == "Netherlands"? "selected":"" }}>Netherlands (Holland, Europe)</option>
          <option value="Nevis" {{ $user->country == "Nevis"? "selected":"" }}>Nevis</option>
          <option value="New Caledonia" {{ $user->country == "New Caledonia"? "selected":"" }}>New Caledonia</option>
          <option value="New Zealand" {{ $user->country == "New Zealand"? "selected":"" }}>New Zealand</option>
          <option value="Nicaragua" {{ $user->country == "Nicaragua"? "selected":"" }}>Nicaragua</option>
          <option value="Niger" {{ $user->country == "Niger"? "selected":"" }}>Niger</option>
          <option value="Nigeria" {{ $user->country == "Nigeria"? "selected":"" }}>Nigeria</option>
          <option value="Niue" {{ $user->country == "Niue"? "selected":"" }}>Niue</option>
          <option value="Norfolk Island" {{ $user->country == "Norfolk Island"? "selected":"" }}>Norfolk Island</option>
          <option value="Norway" {{ $user->country == "Norway"? "selected":"" }}>Norway</option>
          <option value="Oman" {{ $user->country == "Oman"? "selected":"" }}>Oman</option>
          <option value="Pakistan" {{ $user->country == "Pakistan"? "selected":"" }}>Pakistan</option>
          <option value="Palau Island" {{ $user->country == "Palau Island"? "selected":"" }}>Palau Island</option>
          <option value="Palestine" {{ $user->country == "Palestine"? "selected":"" }}>Palestine</option>
          <option value="Panama" {{ $user->country == "Panama"? "selected":"" }}>Panama</option>
          <option value="Papua New Guinea" {{ $user->country == "Papua New Guinea"? "selected":"" }}>Papua New Guinea</option>
          <option value="Paraguay" {{ $user->country == "Paraguay"? "selected":"" }}>Paraguay</option>
          <option value="Peru" {{ $user->country == "Peru"? "selected":"" }}>Peru</option>
          <option value="Phillipines" {{ $user->country == "Phillipines"? "selected":"" }}>Philippines</option>
          <option value="Pitcairn Island" {{ $user->country == "Pitcairn Island"? "selected":"" }}>Pitcairn Island</option>
          <option value="Poland" {{ $user->country == "Poland"? "selected":"" }}>Poland</option>
          <option value="Portugal" {{ $user->country == "Portugal"? "selected":"" }}>Portugal</option>
          <option value="Puerto Rico" {{ $user->country == "Puerto Rico" ? "selected":"" }}>Puerto Rico</option>
          <option value="Qatar" {{ $user->country == "Qatar"? "selected":"" }}>Qatar</option>
          <option value="Republic of Montenegro" {{ $user->country == "Republic of Montenegro" ? "selected":"" }}>Republic of Montenegro</option>
          <option value="Republic of Serbia" {{ $user->country == "Republic of Serbia"? "selected":"" }}>Republic of Serbia</option>
          <option value="Reunion" {{ $user->country == "Reunion"? "selected":"" }}>Reunion</option>
          <option value="Romania" {{ $user->country == "Romania"? "selected":"" }}>Romania</option>
          <option value="Russia" {{ $user->country == "Russia"? "selected":"" }}>Russia</option>
          <option value="Rwanda" {{ $user->country == "Rwanda"? "selected":"" }}>Rwanda</option>
          <option value="St Barthelemy" {{ $user->country == "St Barthelemy"? "selected":"" }}>St Barthelemy</option>
          <option value="St Eustatius" {{ $user->country == "St Eustatius"? "selected":"" }}>St Eustatius</option>
          <option value="St Helena" {{ $user->country == "St Helena"? "selected":"" }}>St Helena</option>
          <option value="St Kitts-Nevis" {{ $user->country == "St Kitts-Nevis"? "selected":"" }}>St Kitts-Nevis</option>
          <option value="St Lucia" {{ $user->country == "St Lucia"? "selected":"" }}>St Lucia</option>
          <option value="St Maarten" {{ $user->country == "St Maarten"? "selected":"" }}>St Maarten</option>
          <option value="St Pierre & Miquelon" {{ $user->country == "St Pierre & Miquelon" ? "selected":"" }}>St Pierre & Miquelon</option>
          <option value="St Vincent & Grenadines" {{ $user->country == "St Vincent & Grenadines"? "selected":"" }}>St Vincent & Grenadines</option>
          <option value="Saipan" {{ $user->country == "Saipan"? "selected":"" }}>Saipan</option>
          <option value="Samoa" {{ $user->country == "Samoa"? "selected":"" }}>Samoa</option>
          <option value="Samoa American" {{ $user->country == "Samoa American"? "selected":"" }}>Samoa American</option>
          <option value="San Marino" {{ $user->country == "San Marino"? "selected":"" }}>San Marino</option>
          <option value="Sao Tome & Principe" {{ $user->country == "Sao Tome & Principe"? "selected":"" }}>Sao Tome & Principe</option>
          <option value="Saudi Arabia" {{ $user->country == "Saudi Arabia"? "selected":"" }}>Saudi Arabia</option>
          <option value="Senegal" {{ $user->country == "Senegal"? "selected":"" }}>Senegal</option>
          <option value="Seychelles" {{ $user->country == "Seychelles"? "selected":"" }}>Seychelles</option>
          <option value="Sierra Leone" {{ $user->country == "Sierra Leone"? "selected":"" }}>Sierra Leone</option>
          <option value="Singapore" {{ $user->country == "Singapore"? "selected":"" }}>Singapore</option>
          <option value="Slovakia" {{ $user->country == "Slovakia" ? "selected":"" }}>Slovakia</option>
          <option value="Slovenia" {{ $user->country == "Slovenia"? "selected":"" }}>Slovenia</option>
          <option value="Solomon Islands" {{ $user->country == "Solomon Islands" ? "selected":"" }}>Solomon Islands</option>
          <option value="Somalia" {{ $user->country == "Somalia"? "selected":"" }}>Somalia</option>
          <option value="South Africa" {{ $user->country == "South Africa"? "selected":"" }}>South Africa</option>
          <option value="Spain" {{ $user->country == "Spain" ? "selected":"" }}>Spain</option>
          <option value="Sri Lanka" {{ $user->country == "Sri Lanka"? "selected":"" }}>Sri Lanka</option>
          <option value="Sudan" {{ $user->country == "Sudan"? "selected":"" }}>Sudan</option>
          <option value="Suriname" {{ $user->country == "Suriname"? "selected":"" }}>Suriname</option>
          <option value="Swaziland" {{ $user->country == "Swaziland"? "selected":"" }}>Swaziland</option>
          <option value="Sweden" {{ $user->country == "Sweden"? "selected":"" }}>Sweden</option>
          <option value="Switzerland" {{ $user->country == "Switzerland"? "selected":"" }}>Switzerland</option>
          <option value="Syria" {{ $user->country == "Syria"? "selected":"" }}>Syria</option>
          <option value="Tahiti" {{ $user->country == "Tahiti"? "selected":"" }}>Tahiti</option>
          <option value="Taiwan" {{ $user->country == "Taiwan"? "selected":"" }}>Taiwan</option>
          <option value="Tajikistan" {{ $user->country == "Tajikistan"? "selected":"" }}>Tajikistan</option>
          <option value="Tanzania" {{ $user->country == "Tanzania"? "selected":"" }}>Tanzania</option>
          <option value="Thailand" {{ $user->country == "Thailand"? "selected":"" }}>Thailand</option>
          <option value="Togo" {{ $user->country == "Togo"? "selected":"" }}>Togo</option>
          <option value="Tokelau" {{ $user->country == "Tokelau"? "selected":"" }}>Tokelau</option>
          <option value="Tonga" {{ $user->country == "Tonga"? "selected":"" }}>Tonga</option>
          <option value="Trinidad & Tobago" {{ $user->country == "Trinidad & Tobago"? "selected":"" }}>Trinidad & Tobago</option>
          <option value="Tunisia" {{ $user->country == "Tunisia"? "selected":"" }}>Tunisia</option>
          <option value="Turkey" {{ $user->country == "Turkey"? "selected":"" }}>Turkey</option>
          <option value="Turkmenistan" {{ $user->country == "Turkmenistan"? "selected":"" }}>Turkmenistan</option>
          <option value="Turks & Caicos Is" {{ $user->country == "Turks & Caicos Is"? "selected":"" }}>Turks & Caicos Is</option>
          <option value="Tuvalu" {{ $user->country == "Tuvalu"? "selected":"" }}>Tuvalu</option>
          <option value="Uganda" {{ $user->country == "Uganda"? "selected":"" }}>Uganda</option>
          <option value="United Kingdom" {{ $user->country == "United Kingdom"? "selected":"" }}>United Kingdom</option>
          <option value="Ukraine" {{ $user->country == "Ukraine"? "selected":"" }}>Ukraine</option>
          <option value="United Arab Erimates" {{ $user->country == "United Arab Erimates"? "selected":"" }}>United Arab Emirates</option>
          <option value="United States of America" {{ $user->country == "United States of America"? "selected":"" }}>United States of America</option>
          <option value="Uraguay" {{ $user->country == "Uraguay"? "selected":"" }}>Uruguay</option>
          <option value="Uzbekistan" {{ $user->country == "Uzbekistan"? "selected":"" }}>Uzbekistan</option>
          <option value="Vanuatu" {{ $user->country == "Vanuatu"? "selected":"" }}>Vanuatu</option>
          <option value="Vatican City State" {{ $user->country == "Vatican City State"? "selected":"" }}>Vatican City State</option>
          <option value="Venezuela" {{ $user->country == "Venezuela"? "selected":"" }}>Venezuela</option>
          <option value="Vietnam" {{ $user->country == "Vietnam"? "selected":"" }}>Vietnam</option>
          <option value="Virgin Islands (Brit)" {{ $user->country == "Virgin Islands (Brit)"? "selected":"" }}>Virgin Islands (Brit)</option>
          <option value="Virgin Islands (USA)" {{ $user->country == "Virgin Islands (USA)"? "selected":"" }}>Virgin Islands (USA)</option>
          <option value="Wake Island" {{ $user->country == "Wake Island"? "selected":"" }}>Wake Island</option>
          <option value="Wallis & Futana Is" {{ $user->country == "Wallis & Futana Is"? "selected":"" }}>Wallis & Futana Is</option>
          <option value="Yemen" {{ $user->country == "Yemen"? "selected":"" }}>Yemen</option>
          <option value="Zaire" {{ $user->country == "Zaire"? "selected":"" }}>Zaire</option>
          <option value="Zambia" {{ $user->country == "Zambia"? "selected":"" }}>Zambia</option>
          <option value="Zimbabwe" {{ $user->country == "Zimbabwe"? "selected":"" }}>Zimbabwe</option>
        </select>
        </div>
</div>
</div>
</div>
</div>
</diV>




<div class="m-4">
<div class="accordion" id="myAccordion">
<div class="accordion-item">

        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="color:#198754">Step2 - User Account Details</button>

    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
        <div class="card-body">
      <div class="form-group">
        <label><span>*</span> Email Address</label>
        <input type="email" name="email" class="form-control" value="{{ $user->email1 }}" readonly />
      </div>
   
    </div>
</div>
</div>
</div>
</diV>



<div class="m-4"  id="accordion" >
<div class="accordion" id="myAccordion">
<div class="accordion-item">

        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" style="color:#198754"> Company Information</button>

    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
        <div class="card-body">
        <div class="form-group">
        <label id ="accordion2"><span>*</span>Company Name</label>
        <input  type="text" name="company_name" class="form-control"value="{{ old('company_name', $user->company_name) }}"  />
      </div>
      <div class="form-group" id ="accordion3"> <label >Location </label> <select class="multiSelect_field"  style="width:100%; height: 40px;" name="ADB" data-placeholder="Select a Origin" value="{{ old('ADB', $user->ADB) }}" style="width: 100%; color: #000" >
      <option >Select Location</option>      
      <option value="Pakistan" {{ $user->ADB == "Pakistan"? "selected":"" }}>Pakistan</option>
         <option value= "Foreign" {{ $user->ADB == "Foreign"? "selected":"" }}>Foreign</option>
        </select> </div>

        <div class="form-group" id="accordion4">
              <label>Types of Ownership (Tick only one)</label><br>
              <input type="radio" name = "ownership" id="accordion3" value="Individual" {{ $user->ownership == "Individual"? "checked":"" }}> Individual
                <input type="radio" name = "ownership" id="accordion4" value="Sole Proprietor" style="margin-left:6px;" {{ $user->ownership == "Sole Proprietor"? "checked":"" }}> Sole Proprietor

                <input type="radio" name = "ownership"  id="accordion5"  value="Partnership " style="margin-left:6px;" {{ $user->ownership == "Partnership"? "checked":"" }}> Partnership <br>
                <input type="radio" name = "ownership" id="accordion6"  value="Private Limited Company" {{ $user->ownership == "Private Limited Company"? "checked":"" }}> Private Limited Company <br>
                <input type="radio" name = "ownership" id="accordion7"  value="Public Limited Company" {{ $user->ownership == "Public Limited Company"? "checked":"" }}> Public Limited Company <br>
                <input type="radio" onclick="javascript:yesnoCheck();" name = "ownership" id="accordion8"  value="Others" {{ $user->ownership == "Others"? "":"" }}> Others
            
                 </div>
                 
                 
        <div class="form-group" id ="accordion5">
        <label><span>*</span> Mailing Address</label>
        <input  type="text" name="mailing_address" class="form-control" value="{{ old('mailing_address', $user->mailing_address) }}" />
      </div>
      <div class="form-group" id ="accordion6">
        <label >Permanent Address of head office </label>
        <input type="text" name="alternative_email" class="form-control" maxlength="50" value="{{ old('alternative_email', $user->alternative_email) }}" />
      </div>
        <div class="form-group" id ="accordion7">
        <label><span>*</span> How many years of works and/or consulting experience</label>
        <input type="text" name="experience" class="form-control" value="{{ old('experience', $user->experience) }}"  />
      </div>
</div>
</div>
</div>
</diV>
</div>




      <div class="m-4" id ="accordion">
<div class="accordion" id="myAccordion">
<div class="accordion-item">

        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" style="color:#198754"> Contact Details</button>

    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
        <div class="card-body">
         <div class="form-group" id="accordion3">
        <label><span>*</span>  Street Address</label>
       <textarea style="margin-bottom: 3px;" name="street_address" class="form-control" required>{{ old('street_address', $user->street_address) }}</textarea>
        <!--<input style="margin-bottom: 3px;" type="text" name="street_address" value="{{ old('street_address', $user->street_address) }}" class="form-control"  />-->
        <!--<input style="margin-bottom: 3px;" type="text" name="street_address" value="{{ old('street_address', $user->street_address) }}" class="form-control"  />-->
        <!--<input type="text" name="street_address" value="{{ old('street_address', $user->street_address) }}" class="form-control"   />-->
      </div>
      <div class="form-group" id="accordion4">
        <label><span>*</span>  City / Town / Locality</label>
        <input type="text" name="city" value="{{ old('city', $user->city) }}" class="form-control"  />
      </div>
      <div class="form-group"id="accordion12">
        <label id="accordion5"><span>*</span>State / Region</label>
        <input type="text" name="region" value="{{ old('region', $user->region) }}" class="form-control" />
      </div>

      <div class="form-group" id="accordion6">
        <label>Province</label>
        <input type="text" name="province" maxlength="50" value="{{ old('province', $user->province) }}" class="form-control" />
      </div>
      <!-- <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" />
      </div> -->


      <div class="form-group" id="accordion7">
      <label for="phone"> Phone Number</label>
      <input type="tel" id="phone" name="contact_number" maxlength="11" value="{{ old('contact_number', $user->contact_number) }}" class="form-control"  placeholder="Enter Phone Number"  readonly>
      </div>

      <div class="form-group" id="accordion10">
      <label for="fax">Fax</label>
      <input type="tel" id="phone" maxlength="11" name="fax" value="{{ old('fax', $user->fax) }}" class="form-control"  placeholder="Enter Fax Number"  >
      </div>
   <br>
      <div class="form-group" id="accordion8" style="margin-top: -30px;"> <label >  Registered With PEC, Since </label>  
      <select id='selUser' name ="pec_register" value="{{ old('pec_register', $user->pec_register) }}" class="multiSelect_field" style="width:100%; height: 40px;" placeholder="Select a Year">
      <option>Year</option>
      <option value="1976" {{ $user->pec_register == "1976"? "selected":"" }}>1976</option>
      <option value="1977" {{ $user->pec_register == "1977"? "selected":"" }}>1977</option>
      <option value="1978" {{ $user->pec_register == "1978"? "selected":"" }}>1978</option>
      <option value="1979" {{ $user->pec_register == "1979"? "selected":"" }}>1979</option>
      <option value="1980" {{ $user->pec_register == "1980"? "selected":"" }}>1980</option>
      <option value="1981" {{ $user->pec_register == "1981"? "selected":"" }}>1981</option>
      <option value="1982" {{ $user->pec_register == "1982"? "selected":"" }}>1982</option>
      <option value="1983" {{ $user->pec_register == "1983"? "selected":"" }}>1983</option>
      <option value="1984" {{ $user->pec_register == "1984"? "selected":"" }}>1984</option>
      <option value="1985" {{ $user->pec_register == "1985"? "selected":"" }}>1985</option>
      <option value="1986" {{ $user->pec_register == "1986"? "selected":"" }}>1986</option>
      <option value="1987" {{ $user->pec_register == "1987"? "selected":"" }}>1987</option>
      <option value="1988" {{ $user->pec_register == "1988"? "selected":"" }}>1988</option>
      <option value="1989" {{ $user->pec_register == "1989"? "selected":"" }}>1989</option>
      <option value="1990" {{ $user->pec_register == "1990"? "selected":"" }}>1990</option>
      <option value="1991" {{ $user->pec_register == "1991"? "selected":"" }}>1991</option>
      <option value="1992" {{ $user->pec_register == "1992"? "selected":"" }}>1992</option>
      <option value="1993" {{ $user->pec_register == "1993"? "selected":"" }}>1993</option>
      <option value="1994" {{ $user->pec_register == "1994"? "selected":"" }}>1994</option>
      <option value="1995" {{ $user->pec_register == "1995"? "selected":"" }}>1995</option>
      <option value="1996" {{ $user->pec_register == "1996"? "selected":"" }}>1996</option>
      <option value="1997" {{ $user->pec_register == "1997"? "selected":"" }}>1997</option>
      <option value="1998" {{ $user->pec_register == "1998"? "selected":"" }}>1998</option>
      <option value="1999" {{ $user->pec_register == "1999"? "selected":"" }}>1999</option>
      <option value="2000" {{ $user->pec_register == "2000"? "selected":"" }}>2000</option>
      <option value="2001" {{ $user->pec_register == "2001"? "selected":"" }}>2001</option>
      <option value="2002" {{ $user->pec_register == "2002"? "selected":"" }}>2002</option>
      <option value="2003" {{ $user->pec_register == "2003"? "selected":"" }}>2003</option>
      <option value="2004" {{ $user->pec_register == "2004"? "selected":"" }}>2004</option>
      <option value="2005" {{ $user->pec_register == "2005"? "selected":"" }}>2005</option>
      <option value="2006" {{ $user->pec_register == "2006"? "selected":"" }}>2006</option>
      <option value="2007" {{ $user->pec_register == "2007"? "selected":"" }}>2007</option>
      <option value="2008" {{ $user->pec_register == "2008"? "selected":"" }}>2008</option>
      <option value="2009" {{ $user->pec_register == "2009"? "selected":"" }}>2009</option>
      <option value="2010" {{ $user->pec_register == "2010"? "selected":"" }}>2010</option>
      <option value="2011" {{ $user->pec_register == "2011"? "selected":"" }}>2011</option>
      <option value="2012" {{ $user->pec_register == "2012"? "selected":"" }}>2012</option>
      <option value="2013" {{ $user->pec_register == "2013"? "selected":"" }}>2013</option>
      <option value="2014" {{ $user->pec_register == "2014"? "selected":"" }}>2014</option>
      <option value="2015" {{ $user->pec_register == "2015"? "selected":"" }}>2015</option>
      <option value="2016" {{ $user->pec_register == "2016"? "selected":"" }}>2016</option>
      <option value="2017" {{ $user->pec_register == "2017"? "selected":"" }}>2017</option>
      <option value="2018" {{ $user->pec_register == "2018"? "selected":"" }}>2018</option>
      <option value="2019" {{ $user->pec_register == "2019"? "selected":"" }}>2019</option>
      <option value="2020" {{ $user->pec_register == "2020"? "selected":"" }}>2020</option>
      <option value="2021" {{ $user->pec_register == "2021"? "selected":"" }}>2021</option>
      <option value="2022" {{ $user->pec_register == "2022"? "selected":"" }}>2022</option>
  </select>
  </div>
  <div class="form-group" id="accordion9">
        <label>Alternative Email Address</label>
        <input type="email" name="alternative_email" maxlength="50" value="{{ old('alternative_email', $user->alternative_email) }}" class="form-control" />
      </div>


      <div class="form-group" id="accordion10">
        <label>Postal Code</label>
        <input type="number" name="postal_code" maxlength="15" value="{{ old('postal_code', $user->postal_code) }}" class="form-control" />
      </div>
      <div class="form-group" id="accordion11">
        <label>Firm's Website Link. (Optional)</label>
        <input type="text" name="website_link" maxlength="50" value="{{ old('website_link', $user->website_link) }}" class="form-control" />
      </div>

  <div class="form-group" id="accordion15">
        <label>Company's Registration Number</label>
        <input type="text" name="company_registration_number" maxlength="50" value="{{ old('company_registration_number', $user->company_registration_number) }}" class="form-control" />
      </div>

      <div class="form-group" id="accordion12">
        <label>  Company Registration Certificate</label>
        <div class="custom-file mb-3">
     <input type="file" class="custom-file-input" id="customFile" name="filename" value="{{ old('filename', $user->filename) }}"  >
     <label class="custom-file-label" for="customFile">Choose file</label>
     <small class="text-muted"><strong>Note:</strong> Only jpeg,png,jpg,gif,pdf and svg file types are allowed.</small><br>
     @if(!empty($user->filename))
        <a href="/files/clients/{{$user->filename}}">View Company Registration Certificate File</a>
     @else
        <small class="text-muted">File not uploaded yet!</small>
     @endif
     </div>


      </div>

      <div class="form-group" id="accordion13">
        <label>  Audited Financial Statement up to Last 3 Years</label>
        <div class="custom-file mb-3">
       <input type="file" class="custom-file-input" id="customFile"  name="imgname" value="{{ old('imgname', $user->imgname) }}" >
        <label class="custom-file-label" for="customFile">Choose file</label>
         <small class="text-muted"><strong>Note:</strong> Only jpeg,png,jpg,gif,pdf and svg file types are allowed.</small><br>
         @if(!empty($user->filename))
            <a href="/files/clients/{{$user->filename}}" target="_blank">View Audited Financial Statement up to Last 3 Years</a>
         @else
            <small class="text-muted">File not uploaded yet!</small>
         @endif
         </div>
      </div>
      <div class="form-group" id="accordion14">
        <label>  Tax Return</label><br>
        <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="imagename" value="{{ old('imagename', $user->imagename) }}"  >
      <label class="custom-file-label" for="customFile">Choose file</label>
        <small class="text-muted"><strong>Note:</strong> Only jpeg,png,jpg,gif,pdf and svg file types are allowed.</small><br>
        @if(!empty($user->filename))
            <a href="/files/clients/{{$user->filename}}">View Tax Return File</a>
        @else
            <small class="text-muted">File not uploaded yet!</small>
        @endif
    </div>

      </div>
</div>
</div>
</div>
</diV>
</div>




<div class="m-4" id ="accordion">
<div class="accordion" id="myAccordion">
<div class="accordion-item">
<style> 

.accordion-button:not(.collapsed) {
    background-color: white;
    box-shadow: 
}
.accordion-button:not(.collapsed)::after {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
    transform: rotate(-180deg);
}

</style>
        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" style="color:#198754">Main Disciplines</button>

    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
        <div class="card-body">
           
    <div class="form-group container" style="color: #000000;" id ="accordion9">
        

         <label>Engineering Disciplines (Multiple Selection)</label> 
          <div class="multiSelect " style="width:auto">


    <select   name="engineering" value="{{ old('engineering', $user->engineering) }}" data-placeholder="Select a Engineering Disciplines"  multiple class="multiSelect_field" style="color: #000000 !important;"  >
                  <option>Select a Engineering Disciplines</option>
            <option value="Civil" {{ $user->engineering == "Civil"? "selected":"" }}>Civil</option>
            <option value="Mechanical" {{ $user->engineering == "Mechanical"? "selected":"" }}>Mechanical</option>
            <option value="Electrical" {{ $user->engineering == "Electrical"? "selected":"" }}> Electrical</option>
            <option value="Chemical" {{ $user->engineering == "Chemical"? "selected":"" }}>  Chemical</option>
            <option value="Areonautical" {{ $user->engineering == "Areonautical"? "selected":"" }}>Areonautical</option>
            <option value="Minings" {{ $user->engineering == "Minings"? "selected":"" }}>Minings</option>
            <option value="Agriculture" {{ $user->engineering == "Agriculture"? "selected":"" }}>Agriculture</option>
            <option value="Metallurgical" {{ $user->engineering == "Metallurgical"? "selected":"" }}> Metallurgical</option>
            <option value="Electronics" {{ $user->engineering == "Electronics"? "selected":"" }}>Electronics</option>
            <option value="Petrogas" {{ $user->engineering == "Petrogas"? "selected":"" }}> Petrogas</option>
            <option value="Industrial" {{ $user->engineering == "Industrial"? "selected":"" }}>  Industrial</option>
            <option value="Marine" {{ $user->engineering == "Marine"? "selected":"" }}>Marine</option>
            <option value="Other engineering (Specify) Total engineering Professions" {{ $user->engineering == "Other engineering (Specify) Total engineering Professions"? "selected":"" }}> Other engineering (Specify) Total engineering Professions</option>
        </select> </div></div>

        <div class="form-group container" style="color: #000000" id ="accordion14"> <label>Allied Disciplines (Multiple Selection)</label> 
          <div class="multiSelect" style="width:auto">
        <select   name ="allied" value="{{ old('allied', $user->allied) }}" data-placeholder="Select a Allied Disciplines" multiple class="multiSelect_field" style="width: 100%;" tabindex="-1" >
        <option>Select a Allied Disciplines</option>    
        <option value="Architecture" {{ $user->allied == "Architecture"? "selected":"" }}>Architecture</option>
            <option value="Regional Planning" {{ $user->allied == "Regional Planning"? "selected":"" }}>Regional Planning</option>
            <option value="Urban Planning" {{ $user->allied == "Urban Planning"? "selected":"" }}> Urban Planning </option>
            <option value="Geology " {{ $user->allied == "Geology "? "selected":"" }}> Geology </option>
            <option value="Economics" {{ $user->allied == "Economics"? "selected":"" }}>Economics</option>
            <option value="Hydrology" {{ $user->allied == "Hydrology"? "selected":"" }}>Hydrology</option>
            <option value="Agronomy & Agriculture" {{ $user->allied == "Agronomy & Agriculture"? "selected":"" }}>Agronomy & Agriculture</option>
            <option value="Financial Analysis" {{ $user->allied == "Financial Analysis"? "selected":"" }}> Financial Analysis</option>
            <option value="Computer Science" {{ $user->allied == "Computer Science"? "selected":"" }}> Computer Science</option>
            <option value=" System Analysis" {{ $user->allied == "System Analysis"? "selected":"" }}> System Analysis </option>
            <option value="Soil Science" {{ $user->allied == "Soil Science"? "selected":"" }}>Soil Science</option>
            <option value="Business Administration" {{ $user->allied == "Business Administration"? "selected":"" }}> Business Administration</option>
            <option value="Other Allied Professions Total Allied Professions" {{ $user->allied == "Other Allied Professions Total Allied Professions"? "selected":"" }}> Other Allied Professions Total Allied Professions</option>
        </select> </div></div></div>
</div>
</diV>
</div>
</div>

<div class="form-group" style="text-align: center;" >
                <button type="submit"  class="btn"  id="submitform" style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Update Profile</button>
              </div>
    </form>
  </div>
</div>
</div>




<script>
$('#submitform').click(function() {
  event.preventDefault();
  var inputs = $("#handleAjax input[required='required']"); 
  $(".invalid-feedback").remove();
  $(".form-control").removeClass("is-invalid");
  var validation_cnt = 0;
  inputs.each(function() {
   
    if ($(this).val() == "") {
      validation_cnt ++; 
      var current = $(this).closest(".accordion-collapse");
      current.collapse("show");
      
      $(this).addClass('is-invalid');
     
      $('input[name='+$(this).prop("name")+']').after('<div class="invalid-feedback" >Please fill out this field.</div>');
     
      $(this).focus()
       
      return false;
    }
    
    
   
  });
 
  if(validation_cnt == 0){
         $("#handleAjax").submit(); 
   }
});



// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
var fileName = $(this).val().split("\\").pop();
$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

function myFunction() {

alert("Request has been send to PEC for Approval");
}
</script>
<script>


 $('#phone').on('input', function (event) { 
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
      jQuery('.multiSelect_list').append(`<li class="multiSelect_option" data-value="`+jQuery(this).val()+`">
                                            <a class="multiSelect_text">`+jQuery(this).text()+`</a>
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
        return jQuery('<span class="multiSelect_choice">'+ self.children().text() +'<svg class="multiSelect_deselect -iconX"><use href="#iconX"></use></svg></span>').click(function(e) {
          var self = jQuery(this);
          e.stopPropagation();
          self.remove();
          list.find('.multiSelect_option:contains(' + self.text() + ')').removeClass('-selected');
          list.css('top', dropdown.height() + 5).find('.multiSelect_noselections').remove();
          field.find('option:contains(' + self.text() + ')').prop('selected', false);
          if (dropdown.children(':visible').length === 0) {
            dropdown.removeClass('-hasValue');
          }
        });
      }).addClass('-hasValue');
	    list.css('top', dropdown.height() + 5);
	    if (!option.not('.-selected').length) {
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
        if (dropdown.hasClass('-open')) {
            dropdown.toggleClass('-open');
            list.removeClass('-open');
        }
    });
  });
});




function yesnoCheck() {
    if (document.getElementById('accordion8').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}

</script>
</body>

</html>

                        @endif
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
