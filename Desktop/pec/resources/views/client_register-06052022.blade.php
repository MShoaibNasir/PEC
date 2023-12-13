@extends('dashboard.authBase')
@section('content')

    <!-- <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
   -->
   <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/templatemo.css">
      <link rel="stylesheet" href="assets/css/customm1.css"> -->
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="assets/css/customm1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#collapseOne" ).collapse();
  } );
</script> -->



  <!-- <title>Client Registration </title>

  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
                                <script type='text/javascript'>$(document).ready(function() {
$('.select2').select2({
closeOnSelect: false
});
});</script>


<script>
        $(document).ready(function(){ -->

            <!-- // Initialize select2
            $("#selUser").select2();

            // Read selected option
            $('#but_read').click(function(){
                var username = $('#selUser option:selected').text();
                var userid = $('#selUser').val();

                $('#result').html("id : " + userid + ", name : " + username);
            });
        });
        </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <style>

    .error {
      color: #000;
    }
    * {
  box-sizing: border-box;
  z-index: 9999999% !important;
}
span{
    color: red;
} -->
<style>

.error {
  color: #000;
}
* {
box-sizing: border-box;
z-index: 9999999% !important;
}
span{
color: red;
}

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
  background-color: #eee;

}

.panel {
  padding: 0 10px;
  display: none;
  background-color: white;
  overflow: hidden;

}

  </style>
   


    <!-- main app container -->
    <!-- <div class="readersack"> -->
 
        <div class="container" style="background-color:#F8F8F8;  color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px; margin-top: 50px; ">

        <div class="row">

          <div class="col-md-10 offset-md-1">
          <img src ="../images/pec_logo.png" style="margin-top: 40px; width: 100%; , margin-left: 10px;" >
            <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Client Sign Up </h3>

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form id="handleAjax" action="{{route('clients.store')}}" name="postform" method="post"  enctype="multipart/form-data"  >
            @csrf
            <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Step1 - Basic Information</button>

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
                <input  type="text" name="user_title" value="{{old('user_title')}}" class="form-control" required />
                @csrf
              </div>
              <div class="form-group">
                <label><span>*</span> Middle Name</label>
                <input type="text" name="mname" class="form-control" required />
              </div>
            </div>


             <div class="column">

              <div class="form-group">
                <label ><span>*</span> First Name</label>
                <input  type="text" name="fname" class="form-control"  required />
              </div>
              <div class="form-group">
                <label style=" margin-left: 10px;"><span>*</span> Last Name</label>
                <input  type="text" name="lname" class="form-control" required/>
              </div>


                </div>
              </div>

              <div class="form-group" style="margin-top: -110px;">
              <label>
              <span>*</span> Gender:
                 </label>
                <input type="radio" id="gender" name="gender" value="male" style="margin-left: 10px;" required/> Male

                <input type="radio" id="gender" name="gender" value="female" style="margin-left: 10px;" required/> Female <br/>
                 </div><br>

              <div class="form-group" style="margin-top: -30px;"> <label ><span>*</span>  Country </label>  <select id='selUser' name="country" style="width:100%;" class="form-control" required><br>
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
                </div>
</div>
</div>
</div>
</div>
</diV>




<div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Step2 - User Account Details</button>

            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
              <div class="form-group">
                <label><span>*</span> Email Address</label>
                <input type="email" name="email1" class="form-control" required />
              </div>
              <div class="form-group">
                <label><span>*</span> Password (Used to Login)</label>
                <input type="password" name="password" class="form-control" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
              </div>

               <div class="form-group"><input type="radio" id="employee" name="employee" value="Receive weekly notifications on new opportunities (CSRN Weekly)"   style="margin-top: 19px" /> Receive weekly notifications on new opportunities (CSRN Weekly)
            </div>
            <div class="form-group"><input type="radio" id="employee" name="pec_gateway" value="I have read and understood PEC Regulatory Framework for conducting transactions on PEC Gateway. I confirm that all the information uploaded on PEC Gateway correct and my transactions of engineering services carried on PEC Gateway will be in compliance of PEC Gateway regulatory framework."   style="margin-top: 4px;" required />  I have read and understood PEC Regulatory Framework for conducting transactions on PEC Gateway. I confirm that all the information uploaded on PEC Gateway correct and my transactions of engineering services carried on PEC Gateway will be in compliance of PEC Gateway regulatory framework.</div>

            </div>
</div>
</div>
</div>
</diV>
<div class="form-group" style="text-align: center;" >
                <button type="submit" class="btn" onclick="myFunction()"   style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>

<?php /*
<div class="m-4"  id="accordion" >
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"> Company Information</button>

            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                <div class="form-group">
                <label id ="accordion2"> Company Name</label>
                <input  type="text" name="company_name" class="form-control" required/>
              </div>
              <div class="form-group" id ="accordion3"> <label >Origin </label> <select class="form-control select2 select2-hidden-accessible" multiple="" name="ADB" data-placeholder="Select a Origin" style="width: 100%; color: #000" >
                    <option >Pakistan</option>
                    <option>Foreign</option>
                </select> </div>

              <div class="form-group" id ="accordion4">
              <label >Types of Ownership (Tick only one)</label><br>
              <input type="radio" name = "ownership" value="Individual (021)"> Individual
                <input type="radio" name = "ownership" value=" Sole Proprietor (022)" style="margin-left:6px;"> Sole Proprietor

                <input type="radio" name = "ownership" value="Partnership (023)" style="margin-left:6px;"> Partnership  <br>
                <input type="radio" name = "ownership" value="Private Limited Company (024) " > Private Limited Company
                 </div>
                <div class="form-group" id ="accordion5">
                <label >Mailing Address</label>
                <input  type="text" name="mailing_address" class="form-control" />
              </div>
              <div class="form-group" id ="accordion6">
                <label >Permanent Address of head office </label>
                <input type="text" name="alternative_email" class="form-control" />
              </div>
                <div class="form-group" id ="accordion7">
                <label > How many years of works and/or consulting experience</label>
                <input type="text" name="experience" class="form-control" required/>
              </div>
</div>
</div>
</div>
</diV>
</div>




              <div class="m-4" id ="accordion">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"> Contact Details</button>

            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                 <div class="form-group" id="accordion3">
                <label>  Street Address</label>
                <input style="margin-bottom: 3px;" type="text" name="street_address" class="form-control" required />
                <input style="margin-bottom: 3px;" type="text" name="address" class="form-control" required  />
                <input style="margin-bottom: 3px;" type="text" name="address" class="form-control" required  />
                <input type="text" name="address" class="form-control" required  />
              </div>
              <div class="form-group" id="accordion4">
                <label>  City / Town / Locality</label>
                <input type="text" name="city" class="form-control"  required />
              </div>
              <div class="form-group"id="accordion12">
                <label id="accordion5">State / Region</label>
                <input type="text" name="region" class="form-control" />
              </div>

              <div class="form-group" id="accordion6">
                <label>Province</label>
                <input type="text" name="province" class="form-control" />
              </div>
              <!-- <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" />
              </div> -->


              <div class="form-group" id="accordion7">
              <label for="phone"> Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control"  placeholder="Enter Phone Number" >
              </div>

              <div class="form-group" id="accordion10">
              <label for="fax">Fax</label>
              <input type="tel" id="phone" name="fax" class="form-control"  placeholder="Enter Fax Number"  >
              </div>
           <br>
              <div class="form-group" id="accordion8" style="margin-top: -30px;"> <label >  Registered With PEC, Since </label>  <select id='selUser' name ="pec_register" class="form-control" placeholder="Select a Year">
              <option>Year</option>
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
          <div class="form-group" id="accordion9">
                <label>Alternative Email Address</label>
                <input type="email" name="alternative_email" class="form-control" />
              </div>


              <div class="form-group" id="accordion10">
                <label>Postal Code</label>
                <input type="text" name="postal_code" class="form-control" />
              </div>
              <div class="form-group" id="accordion11">
                <label>Link to Website. (Optional)</label>
                <input type="text" name="website_link" class="form-control" />
              </div>

              <div class="form-group" id="accordion12">
                <label>  Company Registration Certificate</label>
                <div class="custom-file mb-3">
             <input type="file" class="custom-file-input" id="customFile" name="filename" required >
             <label class="custom-file-label" for="customFile">Choose file</label>
             </div>


              </div>

              <div class="form-group" id="accordion13">
                <label>  Audited Financial Statement of Last  3 Years</label>
                <div class="custom-file mb-3">
               <input type="file" class="custom-file-input" id="customFile" name="imgname" required >
                <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
              </div>
              <div class="form-group" id="accordion14">
                <label>  Tax Return</label><br>
                <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" id="customFile" name="imagename" required >
              <label class="custom-file-label" for="customFile">Choose file</label>
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

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">Main Disciplines</button>

            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
            <div class="form-group" style="color: #000000" id ="accordion9"> <label>Engineering Disciplines (Multiple Selection)</label> <select class="form-control select2 select2-hidden-accessible" multiple="" name="engineering" data-placeholder="Select a Engineering Disciplines" style="width: 100%; color: #000000 !important;" tabindex="-1" >
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

                <div class="form-group" style="color: #000000" id ="accordion14"> <label>Allied Disciplines (Multiple Selection)</label> <select class="form-control select2 select2-hidden-accessible" multiple="" name ="allied" data-placeholder="Select a Allied Disciplines" style="width: 100%;" tabindex="-1" >
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
                </select> </div></div></div>
</div>
</diV>
</div>
<!--




<img src ="../images/header1.png" />
   <div class="container"> -->

    <!-- main app container -->
    <!-- <div class="readersack">

        <div class="container" style="background-color:#F8F8F8;  color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px; margin-top: 50px; ">

        <div class="row">

          <div class="col-md-6 offset-md-3">
          <img src ="../images/pec_logo.png" style="margin-top: 40px; width: 100%; , margin-left: 10px;" >
            <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Client Sign Up </h3>

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form  id="handleAjax" action="{{route('update')}}" name="postform" method="post"  enctype="multipart/form-data"  >

            <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Step1 - Basic Information</button>

            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
            <div class="row">
            <div class="column" > -->
            <!-- <div class="form-group">

                <label>Client Reg No</label>
                <input type="text" name="client_reg" value="{{old('client_reg')}}" class="form-control"  placeholder="20883"/>
              </div> -->

              <!-- <div class="form-group">

                <label><span>*</span> User Title</label>
                <input  type="text" name="user_title" value="{{ old('user_title', $client->user_title)" class="form-control" required />
                @csrf
              </div>
              <div class="form-group">
                <label><span>*</span> Middle Name</label>
                <input type="text" name="mname" value="{{ old('mname', $client->mname)" class="form-control" required />
              </div>
            </div>


             <div class="column">

              <div class="form-group">
                <label ><span>*</span> First Name</label>
                <input  type="text" name="fname" value="{{ old('fname', $client->fname)" class="form-control"  required />
              </div>
              <div class="form-group">
                <label style=" margin-left: 10px;"><span>*</span> Last Name</label>
                <input  type="text" name="lname" value="{{ old('lname', $client->lname)" class="form-control" required/>
              </div>


                </div>
              </div>

              <div class="form-group" style="margin-top: -110px;">
              <label>
              <span>*</span> Gender:
                 </label>
                <input type="radio" id="gender" name="gender" value="{{ old('gender', $client->gender)" value="male" style="margin-left: 10px;" required/> Male

                <input type="radio" id="gender" name="gender" value="female" value="{{ old('gender', $client->gender)" style="margin-left: 10px;" required/> Female <br/>
                 </div><br>

              <div class="form-group" style="margin-top: -30px;"> <label ><span>*</span>  Country </label>  <select id='selUser' name="country" value="{{ old('country', $client->country)" style="width:400px;" class="form-control" required><br>
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
                </div>
</div>
</div>
</div>
</div>
</diV>



<div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Step2 - User Account Details</button>

            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email1" value="{{ old('email1', $client->email1)" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Password (Used to Login)</label>
                <input type="password" name="password" value="{{ old('password', $client->password)" class="form-control" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
              </div>

               <div class="form-group"><input type="radio" id="employee" name="employee" value="{{ old('employee', $client->employee)" value="Receive weekly notifications on new opportunities (CSRN Weekly)"   style="margin-top: 19px" /> Receive weekly notifications on new opportunities (CSRN Weekly)
            </div>
            <div class="form-group"><input type="radio" id="employee" name="pec_gateway" value="I have read and understood PEC Regulatory Framework for conducting transactions on PEC Gateway. I confirm that all the information uploaded on PEC Gateway correct and my transactions of engineering services carried on PEC Gateway will be in compliance of PEC Gateway regulatory framework."   style="margin-top: 4px;" required />  I have read and understood PEC Regulatory Framework for conducting transactions on PEC Gateway. I confirm that all the information uploaded on PEC Gateway correct and my transactions of engineering services carried on PEC Gateway will be in compliance of PEC Gateway regulatory framework.</div>

            </div>
</div>
</div>
</div>
</diV>


<div class="m-4"   >
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Step3 -  Company Information</button>

            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                <div class="form-group">
                <label > Company Name</label>
                <input  type="text" name="company_name" value="{{ old('company_name', $client->company_name)" class="form-control" required/>
              </div>
              <div class="form-group" > <label >Origin </label> <select class="form-control select2 select2-hidden-accessible" multiple="" name="ADB" value="{{ old('ADB', $client->ADB)" data-placeholder="Select a Origin" style="width: 100%; color: #000" >
                    <option >Pakistan</option>
                    <option>Foreign</option>
                </select> </div>

              <div class="form-group" >
              <label >Types of Ownership (Tick only one)</label><br>
              <input type="radio" name = "ownership" value="{{ old('ownership', $client->ownership)" value="Individual "> Individual
                <input type="radio" name = "ownership" value="{{ old('ownership', $client->ownership)" value=" Sole Proprietor " style="margin-left:6px;"> Sole Proprietor

                <input type="radio" name = "ownership" value="{{ old('ownership', $client->ownership)" value="Partnership " style="margin-left:6px;"> Partnership  <br>
                <input type="radio" name = "ownership" value="{{ old('ownership', $client->ownership)" value="Private Limited Company " > Private Limited Company
                 </div>
                <div class="form-group">
                <label >Mailing Address</label>
                <input  type="text" name="mailing_address" value="{{ old('mailing_address', $client->mailing_address)" class="form-control" />
              </div>
              <div class="form-group">
                <label >Permanent Address of head office </label>
                <input type="text" name="parnanent_address" value="{{ old('parnanent_address', $client->parnanent_address)" class="form-control" />
              </div>
                <div class="form-group" >
                <label ><span>*</span> How many years of works and/or consulting experience</label>
                <input type="text" name="experience"  value="{{ old('experience', $client->experience)"  class="form-control" readonly required/>
              </div>
</div>
</div>
</div>
</diV>
</div>




              <div class="m-4" >
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Step4 -  Contact Details</button>

            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                 <div class="form-group">
                <label> <span>*</span> Street Address</label>
                <input style="margin-bottom: 3px;" type="text" name="street_address" class="form-control"  value="{{ old('street_address', $client->street_address)"  required />
                <input style="margin-bottom: 3px;" type="text" name="address" class="form-control" required  />
                <input style="margin-bottom: 3px;" type="text" name="address" class="form-control" required  />
                <input type="text" name="address" class="form-control" required  />
              </div>
              <div class="form-group" >
                <label><span>*</span>  City / Town / Locality</label>
                <input type="text" name="city"  value="{{ old('city', $client->city)" class="form-control"  required />
              </div>
              <div class="form-group">
                <label id="accordion5">State / Region</label>
                <input type="text" name="region"  value="{{ old('region', $client->region)"  class="form-control" />
              </div>

              <div class="form-group">
                <label>Province</label>
                <input type="text" name="province"  value="{{ old('province', $client->province)"  class="form-control" />
              </div>
               <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" />
              </div> -->


              <!-- <div class="form-group">
              <label for="phone"> Phone Number</label>
              <input type="tel" id="phone" name="phone"  value="{{ old('phone', $client->phone)"  class="form-control"  placeholder="Enter Phone Number" >
              </div>

              <div class="form-group" >
              <label for="fax">Fax</label>
              <input type="tel" id="phone" name="fax"  value="{{ old('fax', $client->fax)"  class="form-control"  placeholder="Enter Fax Number"  >
              </div>
           <br>
              <div class="form-group"  style="margin-top: -30px;"> <label >  Registered With PEC, Since </label>  <select id='selUser' name ="pec_register"  value="{{ old('pec_register', $client->pec_register)"  class="form-control" placeholder="Select a Year">
              <option>Year</option>
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
          </div> -->
          <!-- <div class="form-group" >
                <label>Alternative Email Address</label>
                <input type="email" name="alternative_email"  value="{{ old('alternative_email', $client->alternative_email)"  class="form-control" />
              </div>


              <div class="form-group" >
                <label>Postal Code</label>
                <input type="text" name="postal_code" class="form-control"  value="{{ old('postal_code', $client->postal_code)" />
              </div>
              <div class="form-group" >
                <label>Link to Website. (Optional)</label>
                <input type="text" name="website_link"  value="{{ old('website_link', $client->website_link)" class="form-control" />
              </div>

              <div class="form-group" >
                <label><span>*</span>  Company Registration Certificate</label>
                <div class="custom-file mb-3">
             <input type="file" class="custom-file-input" id="customFile" name="filename"  value="{{ old('filename', $client->filename)" required >
             <label class="custom-file-label" for="customFile">Choose file</label>
             </div>


              </div>

              <div class="form-group">
                <label><span>*</span>  Audited Financial Statement of Last  3 Years</label>
                <div class="custom-file mb-3">
               <input type="file" class="custom-file-input" id="customFile" name="imgname"  value="{{ old('imgname', $client->imgname)" required >
                <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
              </div>
              <div class="form-group" >
                <label><span>*</span>  Tax Return</label><br>
                <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" id="customFile" name="imagename"  value="{{ old('imagename', $client->imagename)" required >
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>

              </div>
</div>
</div>
</div>
</diV>
</div>




<div class="m-4" >
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">Step5 -  Main Disciplines</button>

            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
            <div class="form-group" style="color: #000000" > <label>Engineering Disciplines (Multiple Selection)</label> <select class="form-control select2 select2-hidden-accessible" multiple="" name="engineering"  value="{{ old('engineering', $client->engineering)" data-placeholder="Select a Engineering Disciplines" style="width: 100%; color: #000000 !important;" tabindex="-1" >
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

                <div class="form-group" style="color: #000000"> <label>Allied Disciplines (Multiple Selection)</label> <select class="form-control select2 select2-hidden-accessible" multiple="" name ="allied"  value="{{ old('allied', $client->allied)" data-placeholder="Select a Allied Disciplines" style="width: 100%;" tabindex="-1" >
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
                </select> </div></div></div>
</div>
</diV>
</div> <br>


<div class="form-group" style="text-align: center;" >
                <button type="submit" class="btn" onclick="myFunction()" style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>


<img src="../images/footer1.png" /> --> -->
*/?>
    <script>
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
</script>
<script>
$(document).ready(function() {
    // Hide the additional photo uploads
    var $additionals = $("#accordion, #accordion1, #accordion2,  #accordion3, #accordion4,  #accordion5, #accordion6, #accordion7,#accordion8,#accordion9,#accordion10,#accordion11,#accordion12,#accordion13,#accordion14");
    $additionals.hide();
    // Show more photo uploaders when we click
    $("#add-more").on("click", function() {
        $additionals.show();
    });
});
</script>

@endsection
