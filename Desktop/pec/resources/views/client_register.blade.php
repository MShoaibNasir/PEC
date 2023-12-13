@extends('website.layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/css/intlTelInput.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/intlTelInput.js"></script>

<div class="form-group row">
    
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
<!--<style>-->
<!--.error {-->
<!--  color: #000;-->
<!--}-->

<!--* {-->
<!--  box-sizing: border-box;-->
<!--  z-index: 9999999% !important;-->
<!--}-->

<!--span {-->
<!--  color: red;-->
<!--}-->

<!--.column {-->
<!--  float: left;-->
<!--  width: 50%;-->
<!--  padding: 10px;-->
<!--  height: 300px;-->

<!--}-->




<!--.row:after {-->
<!--  content: "";-->
<!--  display: table;-->
<!--  clear: both;-->
<!--}-->

<!--.row {-->
<!--  display: -ms-flexbox;-->
<!--  display: flex;-->
<!--  -ms-flex-wrap: wrap;-->
<!--  flex-wrap: wrap;-->
<!--  margin-right: -15px;-->
<!--  margin-left: -15px;-->
<!--  z-index: 999999%;-->
<!--}-->

<!--.accordion {-->
<!--  background-color: #eee;-->
<!--  color: #444;-->
<!--  cursor: pointer;-->
<!--  padding: 18px;-->
<!--  width: 100%;-->
<!--  border: none;-->
<!--  text-align: left;-->
<!--  outline: none;-->
<!--  font-size: 15px;-->
<!--  transition: 0.4s;-->
<!--}-->

<!--.active,-->
<!--.accordion:hover {-->
<!--  background-color: #eee;-->
<!--}-->

<!--.panel {-->
<!--  padding: 0 10px;-->
<!--  display: none;-->
<!--  background-color: white;-->
<!--  overflow: hidden;-->
<!--}-->
<!--</style>-->
<!-- main app container -->
<!-- <div class="readersack"> -->
<div class="container" style="background-color:#F8F8F8;  color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px; margin-top: 50px; ">
  <div class="row">
    <div class="col-md-10 offset-md-1"> 
    
    <!--<img src="{{asset('../images/pec_logo.png')}}" style="margin-top: 40px; width: 100%; , margin-left: 10px;">-->
      @if(Session::has('otp_error'))
      <div class="alert alert-danger">
        <li>{{Session::get('otp_error')}}</li> 
      </div> 
      @endif

      <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Client Sign Up </h3> @if ($errors->any())
      
      <div class="alert alert-danger">
        <ul> @foreach ($errors->all() as $error)
          <li>{{ $error }}</li> @endforeach </ul>
      </div> @endif
      <form id="handleAjax" action="{{route('clients.store')}}" name="postform" method="post" enctype="multipart/form-data"> @csrf
        @csrf
        <div class="m-4" >
          <div class="accordion active" id="myAccordion"  >
            <div class="accordion-item" >
              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" style="background-color: #004e1e !important;color:white">Please fill below form to sign up as client and post a project</button>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                <div class="card-body">
                    
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Focal person <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="text" name="fname" class="form-control" maxlength="50" placeholder="Enter focal person name...." required="true">
                        </div>
                      </div>
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Company Name <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="text" name="lname" class="form-control" maxlength="50" placeholder="Enter company name...." required="true">
                        </div>
                      </div>
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Website url <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="text" name="website_url" maxlength="50" class="form-control"  placeholder="Website URL...." required="true">
                        </div>
                      </div>
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">WhatsApp Number <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="text" maxlength="30" name="whatsapp_no" class="form-control"  placeholder="Enter your whatsApp account number...." required="true">
                        </div>
                      </div>
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label"> Linkedin</label>
                        <div class="col-sm-8">
                          <input type="text"maxlength="50"  name="fax_number" class="form-control"  placeholder="Enter Linkedin account...." >
                        </div>
                      </div>
                      
                       <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label"> Bank Name</label>
                        <div class="col-sm-8">
                          <input type="text" name="bank_name" maxlength="50" class="form-control"  placeholder="Enter Bank Name...." >
                        </div>
                      </div>
                       <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Tax Number <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="text" name="tax_number" maxlength="50" class="form-control"  placeholder="Enter Tax Number...." required="true">
                        </div>
                      </div>

                      <!-- acount information -->
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Email <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="email" name="email" maxlength="50" class="form-control"  placeholder="Enter your email...." required="true">
                        </div>
                      </div>
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Mobile No <span style="color:red">*</span></label>
                        <div class="col-sm-6">
                            
                           <input type="hidden" id="dialCode" name="dialCode">
                           <input type="hidden" id="hiden" class="hide"/>
                           <input type="hidden" id="contact_number" name="contact_number"/>
                            
                          <input type="tel" name="contact_number1" maxlength="50" class="form-control" id="mobile_no" required="true"> 
                          <span class="text-muted"><small>Enter your mobile number with country code.The mobile number will be used to login to your account.</small></span>
                          <br>
                          <span class="text-muted"><small id="error_msg" class="text-danger"></small></span>
                        </div>
                        <div class="col-sm-3">
                          <button type="button" id ="OtpSend" class="btn btn-green" onclick="sendOTP()" style="background-color: #004E1E; color: #fff;" >Send OTP</button>
                          <button type="button" id ="resend" class="btn btn-green" onclick="resendOTP()" style="background-color: #004E1E; color: #fff; display: none" >Resend OTP</button>

                        </div>
                        

                      </div>
                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">OTP <span style="color:red">*</span></label>
                        <div class="col-sm-2">
                          <input type="text" maxlength="4" name="otp" class="form-control numeric" id="otp" placeholder="Enter OTP..." required="true">
                          <span class="text-success" id="otp_text" style="display: none">A four digit otp code has been sent to your contact number.</span>
                        </div>
                        
                      </div>

                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Password <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="password" maxlength="20" name="password" class="form-control"  placeholder="Enter password...." required="true">
                        </div>
                      </div>

                      <div class="form-group row" style="margin-bottom: 14px;">
                        <label  class="col-sm-3 text-right col-form-label">Confirm Password <span style="color:red">*</span></label>
                        <div class="col-sm-8">
                          <input type="password" maxlength="20" name="password_confirmation" class="form-control"  placeholder="Confirm your password...." required="true">
                        </div>
                      </div>
                     
                     
                  
                </div>
              </div>
            </div>
      </div>





        </diV>
        <div class="form-group" style="text-align: center;">
          <button type="submit" class="btn"  style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <script>
  
 $("#mobile_no").intlTelInput({
    initialCountry: "us",
    separateDialCode: true,
    preferredCountries: ["fr", "us", "gb"],
    geoIpLookup: function (callback) {
        $.get('https://ipinfo.io', function () {
        }, "jsonp").always(function (resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
        });
    },
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
});




$("#hiden").intlTelInput({
    initialCountry: "us",
    dropdownContainer: 'body',
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
});


/* ADD A MASK IN PHONE1 INPUT (when document ready and when changing flag) FOR A BETTER USER EXPERIENCE */

// var mask1 = $("#mobile_no").attr('placeholder').replace(/[0-9]/g, 0);

// $(document).ready(function($){
//     $('#mobile_no').mask(mask1);
// });



$("#mobile_no").on("countrychange", function (e, countryData) {
     
     $("#mobile_no").val(''); 

    // var mask1 = $("#mobile_no").attr('placeholder').replace(/[0-9]/g, 0); 
    // $('#mobile_no').mask(mask1);
});


$('input.hide').parent().hide();


var instance = $("[name=contact_number1]");
instance.intlTelInput();

$("[name=contact_number1]").on("blur", function() {
  
  var code = instance.intlTelInput('getSelectedCountryData').dialCode; //get counrty code
  var dialcode =  $("#dialCode").val(code);
  var phoneNumber = $("#mobile_no").val();
  var phoneNumberWithoutHyphen = $("#mobile_no").val().replace(/-/g, '');
  var fullPhoneNumber = "+" + code + phoneNumberWithoutHyphen;
  $("#contact_number").val(fullPhoneNumber);
 
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
  <script type="text/javascript">
    
     function resendOTP() {
      var mobile_no = $("#contact_number").val();
      if(mobile_no == ''){
          alert("Please enter mobile number first");
          return false;
      }

      // send OTP 
      $.ajax({
          type:"GET",
          url: "{{ route('otp.client')}}",
          data:{_token:"{{ csrf_token() }}",mobile_no:mobile_no},
          cache:false,
          dataType: "json",
          success:function(response)
          {
            //   console.log(response);
            
            if(response.type == 'error'){
            //   $("#error_msg").text("Please provide valid phone number.")
             $("#error_msg").text(response.msg);
            }else{
              $("#error_msg").text("")
               $("#otp_text").show(); 
               $("#resend").show();
               $("#OtpSend").hide();
            }
            
            
          }
          
      });
  






  }
    
    
    
  function sendOTP() {
      var mobile_no = $("#contact_number").val();
      if(mobile_no == ''){
          alert("Please enter mobile number first");
          return false;
      }

      // send OTP 
      $.ajax({
          type:"GET",
          url: "{{ route('otp.client')}}",
          data:{_token:"{{ csrf_token() }}",mobile_no:mobile_no},
          cache:false,
          dataType: "json",
          success:function(response)
          {
            //   console.log(response);
            
            if(response.type == 'error'){
            //   $("#error_msg").text("Please provide valid phone number.")
             $("#error_msg").text(response.msg);
            }else{
              $("#error_msg").text("")
               $("#otp_text").show(); 
               $("#resend").show();
               $("#OtpSend").hide();
            }
            
            
          }
          
      });
  






  }





  var acc = document.getElementsByClassName("accordion");
  var i;
  for(i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      
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