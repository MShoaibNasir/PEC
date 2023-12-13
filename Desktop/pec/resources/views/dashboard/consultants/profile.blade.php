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

                        @if (str_contains(Auth::user()->menuroles, "consultant"))


<body >
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

  <!-- <div class="container"> -->

    <!-- main app container -->
    <div class="readersack">

         <div class="container" style="background-color:#F8F8F8;  color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px;  margin-top: 60px;">
         <div class="row">

          <div class="col-md-10 offset-md-1">

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form  action="{{ route('consultants.update',  $user->id) }}" name="postform" method="POST" enctype="multipart/form-data">
                @method('PUT')
                  @csrf
            <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Step1 - Basic Information</button>

            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
            <div class="row">
            <div class="column" >
            <div class="form-group">

                <label><span>*</span> PEC Reg No</label>
                <input type="text" name="pec_no"  class="form-control" value="{{ old('pec_no', $user->pec_no) }}" />
              </div>

              <div class="form-group">

                <label><span>*</span> User Title</label>
                <!--<input  type="text" name="user_title"  class="form-control" value="{{ old('user_title', $user->user_title) }}" required />-->
                <select  name="user_title" autocomplete='off'  class="form-control">
                    <option value="" >Select User Title</option>
                               <option value="Mr" {{ $user->user_title == "Mr"? "selected":"" }} >Mr</option>
                               <option value="Ms" {{ $user->user_title == "Ms"? "selected":"" }} >Ms</option>
                               <option value="Mrs" {{ $user->user_title == "Mrs"? "selected":"" }} >Mrs</option>
                               <option value="Miss" {{ $user->user_title == "Miss"? "selected":"" }} >Miss</option>
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
                <input  type="text" name="fname" class="form-control" value="{{ old('fname', $user->fname) }}" required />
              </div>
              <div class="form-group">
                <label style=" margin-left: 10px;"><span>*</span> Last Name</label>
                <input  type="text" name="lname" class="form-control" value="{{ old('lname', $user->lname) }}" required />
              </div>
              <div class="form-group">
              <label>
              <span>*</span> Gender:
              </label>  <br>
              <input type="radio" id="gender" name="gender" value="male"   style="margin-top: 19px; " {{ $user->gender == "male"? "checked":"" }} required/> Male

              <input type="radio" id="gender" name="gender" value="female" style="margin-left: 10px;" {{ $user->gender == "female"? "checked":"" }} required /> Female <br/>
              </div>
              </div>
              </div>

              <div class="form-group" style="margin-top: -30px;"> <label ><span>*</span>  Country </label>  <select id='selUser' name="country"  class="multiSelect_field" style="width:100%; height: 40px;"  required><br>
              <option value="Select">Select Country</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote DIvoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="Indonesia">Indonesia</option>
                <option value="India">India</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
              </div><br>
              <div class="form-group" style="margin-top: -30px;"> <label >Individual / Firm</label>
                <select id='selUser' name="individual_firm" class="multiSelect_field" style="width:100%; height: 40px;"  required>
              <option value="Select">Select</option>
                <option value="Individual">Individual</option>
                <option value="Firm">Firm</option>
</select>
</div>
</div></div></div></div></div>


<div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Step2 - User Account Details</button>

            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
              <div class="form-group">
                <label><span>*</span> Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email1 }}" />
              </div>
</div>
</div>
</div>
</div>
</diV>



<div class="m-4"id="accordion1">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Step3 - Company Information</button>

            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
              <div class="form-group" id="accordion">
                <label >Company Name</label>
                <input  type="text" name="company_name" maxlength="50" class="form-control" value="{{ old('company_name', $user->company_name) }}" />
              </div>
              <div class="form-group" id="accordion1">
              <label>Origin</label><br>
              <input type="radio" name = "ADB" value="Pakistan" {{ $user->ADB == "Pakistan"? "checked":"" }}>  Pakistan
              <input type="radio" name = "ADB" value="Foreign" style="margin-left:6px;" {{ $user->ADB == "Foreign"? "checked":"" }}> Foreign
                 </div>

              <div class="form-group" id="accordion2">
              <label>Types of Ownership (Tick only one)</label><br>
              <input type="radio" name = "ownership" id="accordion3" value="Individual" {{ $user->ownership == "Individual"? "checked":"" }}> Individual
                <input type="radio" name = "ownership" id="accordion4" value="Sole Proprietor" style="margin-left:6px;" {{ $user->ownership == "Sole Proprietor"? "checked":"" }}> Sole Proprietor

                <input type="radio" name = "ownership"  id="accordion5"  value="Partnership " style="margin-left:6px;" {{ $user->ownership == "Partnership"? "checked":"" }}> Partnership <br>
                <input type="radio" name = "ownership" id="accordion6"  value="Private Limited Company" {{ $user->ownership == "Private Limited Company"? "checked":"" }}> Private Limited Company
                 </div>
                <div class="form-group" id="accordion7" >
                <label >Mailing Address</label>
                <input  type="text" name="mailing_address" maxlength="50" class="form-control" value="{{ old('mailing_address', $user->mailing_address) }}" />
              </div>
              <div class="form-group" id="accordion8" >
                <label>Permanent  Address of head office</label>
                <input type="text" maxlength="50" name="parnanent_address" class="form-control" value="{{ old('parnanent_address', $user->parnanent_address) }}" />
              </div>
              <div class="form-group" id="accordion9" >
                <label> How many years of work and/or consulting experience</label>
                <input type="text" maxlength="50" name="experience" class="form-control" value="{{ old('experience', $user->experience) }}" />
              </div>
</div>
</div>
</div>
</div></div>


              <div class="m-4" id="accordion2">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Step4 - Contact Details</button>

            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                <div class="form-group" id="accordion4" >
                <label>Street Address</label>
                <textarea style="margin-bottom: 3px;" maxlength="50" name="street_address" class="form-control" >{{ old('street_address', $user->street_address) }}</textarea>
              </div>

              <div class="form-group" id="accordion5" >
                <label>  City / Town / Locality</label>
                <input type="text" name="city" maxlength="50" class="form-control" value="{{ old('city', $user->city) }}"  />
              </div>

              <div class="form-group" id="accordion6" >
                <label>State / Region</label>
                <input type="text" name="region" maxlength="50" class="form-control" value="{{ old('region', $user->region) }}" />
              </div>

              <div class="form-group" id="accordion7" >
                <label>Province</label>
                <input type="text" name="province" class="form-control" maxlength="50" value="{{ old('province', $user->province) }}" />
              </div>
              <div class="form-group" id="accordion8" >
              <label for="phone"> Phone Number</label>
              <input type="tel" id="phone" name="phone" maxlength="11" class="form-control" value="{{ old('phone', $user->phone) }}"  placeholder="Enter Phone Number" >
              </div>

              <div class="form-group" id="accordion9" >
              <label for="landline"> Fax</label>
              <input type="tel" id="phone" maxlength="20" name="fax" class="form-control" value="{{ old('fax', $user->fax) }}"  placeholder="Enter Fax Number" />
              </div> <br>

              <div class="form-group" id="accordion10"  style="margin-top: -30px;"> <label > Registered With PEC, Since </label>  <select id='selUser' name ="pec_register" class="multiSelect_field" style="width:100%; height: 40px;" >
              <option>Year</option>
               <option value="N/A">N/A</option>
              <option value="1976">1976</option>
              <option value="1977">1977</option>
              <option value="1978">1978</option>
              <option value="1979">1979</option>
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
          </select>
          </div>
          <div class="form-group" id="accordion11" >
                <label>Alternative Email Address</label>
                <input type="email" maxlength="50" name="alternative_email" class="form-control" value="{{ old('alternative_email', $user->alternative_email) }}" />
              </div>
              <div class="form-group" id="accordion12" >
                <label>Postal Code</label>
                <input type="text" maxlength="20" name="postal_code" class="form-control" value="{{ old('postal_code', $user->postal_code) }}" />
              </div>

              <div class="form-group" id="accordion13" >
                <label>Link to Website.</label>
                <input type="text" maxlength="50" name="website_link" class="form-control" value="{{ old('website_link', $user->website_link) }}" />
              </div></div></div>
</div>
</div></div>

<div class="m-4" id="accordion3">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">Step5 - Approved Consultant Codes</button>

            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">

              <div class="form-group" id="accordion4"  style="color: #000000"> <label>Firm PEC  Codes</label>
               <div class="multiSelect" style="width:auto">
               <select class="form-control multiSelect_field"  name="project_profile_codes[]" id="firm_pec_codes" multiple data-placeholder="Select a Project Profile Codes" style="width: 100%; color: #000000 !important;" tabindex="-1" >
                    <option value="Public Buildings & Offices">Public Buildings & Offices</option>
                         <option value="Commercial Buildings & Offices">Commercial Buildings & Offices</option>
                         <option value="Residential Buildings & Houses"> Residential Buildings & Houses</option>
                         <option value="Hotels & Motels"> Hotels & Motels</option>
                         <option value="Hospitals, Medical facilities, Laboratories, Medical research">Hospitals, Medical facilities, Laboratories, Medical research</option>
                         <option value="Educational Facilities & Complexes">Educational Facilities & Complexes</option>
                         <option value="Recreation & Sports facilities, Stadiums">Recreation & Sports facilities, Stadiums</option>
                         <option value="Metallurgical"> Metallurgical</option>
                         <option value="Libraries, Museums & galleries">Libraries, Museums & galleries</option>
                         <option value="Industrial Economics"> Industrial Economics</option>
                         <option value="Policy & Planning">  Policy & Planning</option>
                         <option value="Industrial Project Development and appraisal">Industrial Project Development and appraisal</option>
                         <option value="Urban Development, Housing estates">Urban Development, Housing estates</option>
                </select> </div></div>

                <div class="form-group" id="accordion5" >
                <label>Description</label>
                <textarea type="description" maxlength="100" name="description" class="form-control" > {{ old('description', $user->description) }}  </textarea>
              </div>

              <div class="form-group" id="accordion6" >
                <label> Firm Certificate  </label>
                <div class="custom-file mb-3">
               <input type="file" class="custom-file-input" id="customFile" name="pec_certificate">
                <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
              </div>

              </div></div>
</div>
</div></div>
              <!-- <div class="form-group" style="color: #000000"> <label>Individual PEC Codes </label> <select class="form-control select2 select2-hidden-accessible" multiple="" name="individual_codes" data-placeholder="Select a Individual PEC Codes" style="width: 100%; color: #000000 !important;" tabindex="-1" >
                    <option >Public Buildings & Offices</option>
                    <option>Commercial Buildings & Offices</option>
                    <option> Residential Buildings & Houses</option>
                    <option> Hotels & Motels</option>
                    <option>Hospitals, Medical facilities, Laboratories, Medical research</option>
                    <option>Educational Facilities & Complexes</option>
                    <option>Recreation & Sports facilities, Stadiums</option>
                    <option> Metallurgical</option>
                    <option>Libraries, Museums & galleries</option>
                    <option> Industrial Economics</option>
                    <option>  Policy & Planning</option>
                    <option>Industrial Project Development and appraisal</option>
                    <option>Urban Development, Housing estates</option>
                </select> </div>

              <div class="form-group">
                <label> <span>*</span> Individual Certificates  </label>
                <div class="custom-file mb-3">
               <input type="file" class="custom-file-input" id="customFile" name="individual_certificate">
                <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
              </div> -->

   <div class="m-4" id ="accordion">
<div class="accordion" id="myAccordion">
<div class="accordion-item">

        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">Main Disciplines</button>

    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
        <div class="card-body">
           
    <div class="form-group" style="color: #000000" id ="accordion9">
        

         <label>Engineering Disciplines (Multiple Selection)</label> 
          <div class="multiSelect" style="width:auto">
    <select   name="engineering" value="{{ old('engineering', $user->engineering) }}" data-placeholder="Select a Engineering Disciplines"  multiple class="form-control  multiSelect_field" style=" width: 100% !important; color: #000000 !important;"  >
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

        <div class="form-group" style="color: #000000" id ="accordion14"> <label>Allied Disciplines (Multiple Selection)</label> 
          <div class="multiSelect" style="width:auto">
        <select   name ="allied" value="{{ old('allied', $user->allied) }}" data-placeholder="Select a Allied Disciplines" multiple class="form-control  multiSelect_field" style="width: 100%;"  >
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
                <button type="submit"  class="btn"  style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Update Profile </button>
              </div>
            </form>
          </div>
        </div>

      </div>

   



    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
// function myFunction() {
//   alert("Request has been send to PEC for Approval");
// }

</script>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


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



</script>
<!-- <script>
$(document).ready(function() {
    // Hide the additional photo uploads
    var $additionals = $("#accordion, #accordion1, #accordion2,  #accordion3, #accordion4,  #accordion5, #accordion6, #accordion7,#accordion8,#accordion9,#accordion10,#accordion11,#accordion12,#accordion13,#accordion14");
    $additionals.hide();
    // Show more photo uploaders when we click
    $("#add-more").on("click", function() {
        $additionals.show();
    });
});
</script> -->

</body>

</html>

                        @endif
                        @if (str_contains(Auth::user()->menuroles, "client"))
                        <div class="row">
                            <!-- /.col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-warning">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg">{{ 11 }}</div>
                                        <div>My Projects</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-danger">
                                    <div class="card-body pb-0">
                                        <div class="text-value-lg">{{ 150000 }}$</div>
                                        <div>Total Spending</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart4" height="70"></canvas>
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
