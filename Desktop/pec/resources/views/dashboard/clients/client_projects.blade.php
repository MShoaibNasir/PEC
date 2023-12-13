@extends('dashboard.base')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
    <!-- Load Require CSS -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Font CSS -->
    <!-- <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet"> -->
    <!-- Load Tempalte CSS -->
    <!-- <link rel="stylesheet" href="assets/css/templatemo.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/customm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Post a Project </title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <script type="text/javascript" src="index.js"></script>
  <script>
  $( function() {
    $( "#collapseOne" ).collapse();
  } );
</script>

<script src="jquery.alerts.js" type="text/javascript"></script>
<link href="jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />

<!-- Example script -->
<script type="text/javascript">
$(document).ready( function() {
$("#submitBtn").click( function() {
jAlert('Example of a basic alert box in jquery', 'jquery basic alert box');
});
});
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script type='text/javascript'>$(document).ready(function() {
$('.select2').select2({
closeOnSelect: false
});
});</script>
<script type="text/javascript">
function Show_Alert(Input_Id) {
    var My_Message = document.getElementById(Input_Id).value;
    alert('Hello, ' + My_Message);
}
</script>
  <style>
    .error {
      color: red
    }
    * {
  box-sizing: border-box;
  z-index: 9999999% !important;
}
span{
    color: red;
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
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    z-index: 999999%;
}  
</style>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Post a Projects</div>
                     <div style ="margin-top:5%;"class="alert alert-success hide">454545454545</div>

                    <div class="">
                       @if(session()->has('message'))
    <div style ="margin-top:5%;"class="alert alert-success hide">
        {{ session('message') }}
    </div>
 @endif

                        @if (str_contains(Auth::user()->menuroles, "client"))
  <!-- <div class="container"> -->
    <!-- main app container -->
    <body>
    <div class="readersack">   
      <div class="container  mt-2" style="background-color:#F8F8F8; height:100%; color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px; margin-top: 50px; ">
        <div class="row">
          <div class="col-md-10 offset-md-1">
          <!-- <img src ="../images/pec_logo.png" style="margin-top: 40px; width: 100%; , margin-left: 10px;" > -->
            <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Post a Project </h3>
            
            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
         
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
           
           print_r('Successfully Form Submit'); 
            
            <form method="post" id="handleAjax" action="{{route('client_projects.store')}}"  name="formfield" enctype="multipart/form-data">
                  
       
      
                <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" aria-expanded="true"  data-bs-target="#collapseOne">Step1 - Selection Profile</button>									
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
              <div class="form-group" >
                <label ><span>*</span> Project Title</label>
                <input type="text" name="project_title" class="form-control" id="project_title" required/>
              </div><br>
              <div class="form-group" style="margin-top: -30px;"> <label ><span>*</span> Project Disciplines</label><br>  <select  class="form-control select2 select2-hidden-accessible" multiple="" name="project_disciplines" style="width: 350px;" class="form-control" id="project_disciplines" required>
                <option value="Select">Select Project Disciplines</option>
                <option >Civil</option>
                    <option>Mechanical</option>
                    <option> Electrical</option>
                    <option>  Chemical</option>
                    <option>Areonautical</option>
                    <option>Minings</option>
                    <option>Agriculture</option>
                    <option> Metallurgical</option>
                    <option>Electronics</option>
                    <option> Petrogas</option>
                    <option>  Industrial</option>
                 </select>
              </div></div></div></div></div></div>
              <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Step2 - Main Disciplines</button>									
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
            <div class="form-group" style="color: #000000"> <label ><span>*</span> Engineering Disciplines</label>
             <select class="form-control select2 select2-hidden-accessible" multiple=""  name="engineering" data-placeholder="Select a Engineering Disciplines" style="width: 100%; color: #000000 !important;" tabindex="-1" id="engineering">
                    <option >Select a Engineering Disciplines</option>
                    <option >Civil</option>
                    <option>Mechanical</option>
                    <option> Electrical</option>
                    <option>  Chemical</option>
                    <option>Areonautical</option>
                    <option>Minings</option>
                    <option>Agriculture</option>
                    <option> Metallurgical</option>
                    <option>Electronics</option>
                    <option> Petrogas</option>
                    <option>  Industrial</option>
                    <option>Marine</option>
                    <option> Other engineering (Specify) Total engineering Professions</option>
                </select> </div> 
                <div class="form-group" style="color: #000000"> <label ><span>*</span> Allied Disciplines</label>
                 <select class="form-control select2 select2-hidden-accessible" multiple=""   name ="allied" data-placeholder="Select a Allied Disciplines" style="width: 100%;" tabindex="-1" id="allied">
                    <option >Select a Allied Disciplines</option>
                    <option>Architecture</option>
                    <option>Regional Planning</option>
                    <option> Urban Planning </option>
                    <option>   Geology </option>
                    <option>Economics</option>
                    <option>  Hydrology</option>
                    <option>Agronomy & Agriculture</option>
                    <option> Financial Analysis</option>
                    <option> Computer Science</option>
                    <option> System Analysis </option>
                    <option>   Soil Science</option>
                    <option> Business Administration</option>
                    <option> Other Allied Professions Total Allied Professions</option>
                </select> </div></div></div></div></div></div>
                <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Step3 - 	Term of Reference </button>									
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
            <div class="form-group">
                <label ><span>*</span> Summary</label>
                <textarea type="text" name="summary" value="{{old('summary')}}" class="form-control" id="summary"></textarea>
         </div>
         <br> 
                <div class="form-group" style="margin-top: -30px;"><label ><span>*</span> Country of Assignment</label> <select name="country_assignment" class="form-control" id="country_assignment" required>
              <option >Select Country</option>
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
              

              <div class="form-group">
                <label ><span>*</span>	Contact Details for technical queries</label>
                <input type="text" name="technical_queries" class="form-control" id="technical_queries"/>
              </div>

              <div class="form-group">
                <label ><span>*</span> General / Specific Experience required</label>
                <input  type="text" name="specific_experience" class="form-control" id="specific_experience" />
              </div>

              <div class="form-group">
                <label ><span>*</span> Expert required</label>
                <input  type="text" name="expert" class="form-control" id="expert"/>
              </div>

              <div class="form-group">
                <label ><span>*</span>	Delivery Schedule - Days</label>
                <input  type="text" name="schedule" class="form-control" id="schedule"/>
              </div>

              <div class="form-group">
                <label ><span>*</span> Total Inputs</label>
                <input  type="text" name="total_inputs" class="form-control" id="total_inputs"/>
              </div><br>

              <div class="form-group" style="margin-top: -30px;"> <label ><span>*</span> Type of Contract </label>  <select  name="contract" class="form-control" id="contract">
                <option value="Select">Select Type of Contract</option>
                <option value="Specific" >Specific</option>
                    <option value="On Call (Prequalified consultant will be invited on need basis)">On Call (Prequalified consultant will be invited on need basis)</option>
                   
                   
                
                 </select>
              </div>
                
              <div class="form-group">
                <label ><span>*</span> Consulting Max Budget</label>
                <input  type="text" name="consultant_services" class="form-control" id="consultant_services"/>
              </div>
            <div class="form-group">
             <label for="Approval" ><span>*</span> Estimated commencement date</label>
             <input type="date" id="estimated_date" name="estimated_date" class="form-control" id="stimated_date"/>       
              </div>
            
              <div class="form-group">
                <label ><span>*</span> Option of Prequalification and Request for Proposal (RFP) / Request for Quote (RFQ)</label>
                <textarea type="text" name="prequalification" value="{{old('prequalification')}}" class="form-control" id="prequalification"></textarea>
              </div>
            
              <!-- <div class="form-group" style="margin-top: -30px;"> <label ><span>*</span> Status </label>  <select id='selUser' name="Status" class="form-control" >
                <option value="Select">Select</option>
                <option value="Active" >Active</option>
                    <option value="Closed">Closed</option>
                    <option value="Terminated">Terminated</option>
                 </select>
              </div><br> -->
           
              <div class="form-group">
                <label ><span>*</span> Scope of Work (Only PDF)</label>
                <div class="custom-file mb-3">
                <input type="file" id="test" class="custom-file-input" name="title_bar" accept="pdf" />
                <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
              </div>

              <div class="form-group">
                <label ><span>*</span> Terms and Conditions</label>
                <textarea  type="text" name="term_condition" class="form-control" id="term_condition"></textarea>
                
              </div><br>

                <!-- <div class="form-group" style="margin-top: -30px;"> <label >Active, Closed, On Hold (Selection Bar) </label>  <select id='selUser' name="status" class="form-control" required>
              <option value="Select">Select Status</option>
                <option value="Active">Active</option>
                <option value="Closed">Closed</option>
                <option value="On Hold ">On Hold </option>
               
</select>
              </div> -->
              <div class="control">
              <label style=" margin-left: 5px;;"><span>*</span> Request a Prequalification (Only Technical Proposal</label><br>
                <label class="radio" style="margin-left: 7px;">
                    <input type="radio" value="yes" name ="technical_proposal" id="technical_proposal">
                    Yes
                </label>
                <label class="radio" style="margin-left: 5px;">
                    <input type="radio" value="No" name ="technical_proposal" id="technical_proposal">
                    No
                    </div></div></div></div></div></div>
                    <div class="m-4">
                      <div class="accordion" id="myAccordion">
        <div class="accordion-item">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Step4 - 	Selection Method (Fields for selection)</button>									
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
              <div class="form-group">
                <label ><span>*</span>	Technical Qualification  </label>
                <input  type="text" name="technical_qualification" class="form-control"  id="technical_qualification"/>
              </div>
                <div class="form-group">
                <label style=" margin-left: 5px;;"><span>*</span> Upload Relevant Experience and Experts</label>
                <input  type="text" name="upload_experts" class="form-control"  id="upload_experts"/>
              </div>
              <div class="form-group">
                <label ><span>*</span> Other documents  </label>
                <div class="input-group hdtuto control-group lst increment" >
      <input type="file" name="documents" class="myfrm form-control" accept="pdf" id="documents">
      <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
      </div>
    </div>
    <div class="clone hide">
      <div class="hdtuto control-group lst input-group" style="margin-top:5px;">
        <input type="file" name="documents" class="myfrm form-control" accept="pdf" id="documents">
        <div class="input-group-btn"> 
          <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
        </div>
      </div>
    </div>
              </div><BR>
             
              <div class="form-group" style="margin-top: -30px;"> <label  ><span>*</span> Commercial (select one)</label>  <select  name="commercial" class="form-control" id="commercial" required>
              <option value="Select">Select Commercial</option>
                <option value="Quality cum Cost">Quality cum Cost</option>
                <option value="Quality Based Selection">Quality Based Selection</option>   
</select>
</div></div></div></div></div></div>
               <!-- <div class="form-group" style="text-align: center;" >
                <button type="submit" class="btn "   id="submitBtn1" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default"   style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Post a Project</button>
              </div> -->
            
            
            <div class="form-group" style="text-align: center;" >
                <button type="submit"  id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default"  style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Submit</button>
              <div class="alert alert-success hide" style ="margin-top: 30px;">Message Sent Successfully</div>
              </div>    
              </form>
          </div>
        </div>
        
      </div>
    </div>
    <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  >
    <div class="modal-dialog"  >
        <div class="modal-content" style="width: 700px;" >
            <div class="modal-header">
                Post of Project Preview
            </div>
            <div class="modal-body" >
                Are you sure you want to submit the following details?
                <table class="table">
                    <tr>
                        <th>Project Title</th>
                        <td ><label id="project_title_lb" required></label></td>
                    </tr>
                    <tr>
                        <th >Project Disciplines</th>
                        <td ><label id="project_disciplines_lb"></label></td>
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
                        <th>Scope of Work </th>
                        <td><label id="test_lb"></label></td>
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
                        <th> Documents </th>
                        <td><label id="documents_lb"></label></td>    
                    </tr>
                    <tr>
                        <th> Commercial</th>
                        <td><label id="commercial_lb"></label></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" id="submit" class="btn btn-success success">Submit</a>
            </div>
        </div>
    </div>
</div>

    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>

<script>
$(document).ready(function() {
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
  $('#submitBtn').click(function() {
    
  
     $('#project_title_lb').append($('#project_title').val());
     $('#project_disciplines_lb').append($('#project_disciplines').val());
     $('#engineering_lb').append($('#engineering').val());
     $('#allied_lb').append($('#allied').val());
     $('#summary_lb').append($('#summary').val());
     $('#country_assignment_lb').append($('#country_assignment').val());
     $('#technical_queries_lb').append($('#technical_queries').val());
     $('#specific_experience_lb').append($('#specific_experience').val());   
     $('#expert_lb').append($('#expert').val());
     $('#schedule_lb').append($('#schedule').val());
     $('#total_inputs_lb').append($('#total_inputs').val());
     $('#contract_lb').append($('#contract').val());
     $('#consultant_services_lb').append($('#consultant_services').val());
     $('#estimated_date_lb').append($('#estimated_date').val());
     $('#prequalification_lb').append($('#prequalification').val());
     $('#test_lb').append($('#test').val());
     $('#term_condition_lb').append($('#term_condition').val());
     $('#technical_proposal_lb').append($('#technical_proposal').val());
     $('#technical_qualification_lb').append($('#technical_qualification').val());
     $('#upload_experts_lb').append($('#upload_experts').val());
     $('#documents_lb').append($('#documents').val());
     $('#commercial_lb').append($('#commercial').val());
});
$('#submit').click(function(){
    $('#formfield').submit();
});

 $(document).ready(function () {
  alert('hiiiii');
    $("#submitBtn").click(function () {
        $(".alert-success").slideToggle("slow").delay(5000).slideToggle("slow");
    });
});
    
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