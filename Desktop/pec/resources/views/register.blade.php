
@extends('website.layouts.app')
@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#collapseOne" ).collapse();
  } );
  </script>

<!-- <?php
// $pec_register_consultant = App\Models\pec_register_consultant::where('1', $id)->first();

?> -->
<!--

TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->

  <title>Consultant Registration </title>
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

 .accordion:hover {
  background-color: #eee;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}





  </style>


  <!-- <div class="container"> -->

    <!-- main app container -->
    <div class="readersack">

         <div class="container" style="background-color:#F8F8F8;  color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px;  margin-top: 60px;">
         <div class="row">

          <div class="col-md-10 offset-md-1">
          <!--<img src ="{{asset('../images/pec_logo.png')}}" style="margin-top: 40px; width: 100%; , margin-left: 10px;" >-->
            <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Consultant Sign Up </h3>

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form  id="handleAjax" action="{{ route('consultants.store') }}" name="postform" method="post" enctype="multipart/form-data" autocomplete="off">
@csrf
            <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item ">

                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Please fill below form to sign up as consultant</button>

            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body" >
                <div class="row">
            <div class="column" >
            <div class="form-group">
                <label><span>*</span> PEC Reg No (Only Numbers are allowed)</label>
                <input type="text" name="pec_no" id="pec"  style="width: ;" class="form-control numeric" required placeholder="Please enter your Firm License #" />
                <a  style="color:white;" class="btn btn-success m-1 otp-bt">Send OTP</a>   <label style="display:none;color:green;font-weight:bold;" class="otp-div">  OTP has been sent to your registered email address </label>
              </div>


              <div class="form-group otp-div col-md-12" >
                <label> <span>*</span> Please Enter OTP Received on your PEC Registered Email Address  </label>
                <label> (Only Numbers are allowed</label>
                <input autocomplete="off" type="text" name="otp" class="form-control numeric" maxlength="6" style="width: 40%;" placeholder="Please enter OTP" />
              </div>

              <div class="form-group">
                <label><span>*</span> Password </label>
                <input autocomplete="off" type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Please enter Password"   />
                <span class="text-muted">Your password must be at least 8 characters long,must contain minimum of 1 lower case letter,1 upper case letter,1 numeric character and 1 special character. </span>
                
              </div>
                

              
</div>


              <div class="column" >

                  <div class="form-group" >
                    <!-- <label><span>*</span> Email Address</label> -->
                    <input type="hidden" name="email1" class="form-control" />
                  </div>
            </div>
            
              <div class="column" >

              <div class="form-group" >
               <label><span>*</span> Confirm Password </label>
                <input autocomplete="off"  type="password" name="confirm_password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Please enter Confirm Password"  />
              </div>
            </div>
            
            
</div>




              </div>
         </div>
       </div>
     </div>
  </div>

  <div class="form-group" style="text-align: center;" >
                    <button type="submit"  class="btn"   style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Sign Up</button>
                  </div>
                </form>
                 </div>
             </div>

        </div>
    </div>


@endsection


@section('javascript')

<script src='https://code.jquery.com/jquery-3.7.1.min.js'></script>
  <script type="text/javascript">
// Add the following code if you want the name of the file appear on select
// $(".custom-file-input").on("change", function() {
//   var fileName = $(this).val().split("\\").pop();
//   $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
// });



// // function myFunction() {
// //   alert("Request has been send to PEC for Approval");
// // }


// // var acc = document.getElementsByClassName("accordion");
// // var i;

// // for (i = 0; i < acc.length; i++) {
// //   acc[i].addEventListener("click", function() {
// //     this.classList.toggle("active");
// //     var panel = this.nextElementSibling;
// //     if (panel.style.display === "block") {
// //       panel.style.display = "none";
// //     } else {
// //       panel.style.display = "block";
// //     }
// //   });
// // }

// // $(document).ready(function() {
// //     // Hide the additional photo uploads
// //     var $additionals = $("#accordion,#myAccordion1, #accordion1, #accordion2,  #accordion3, #accordion4,  #accordion5, #accordion6, #accordion7,#accordion8,#accordion9,#accordion10,#accordion11,#accordion12,#accordion13,#accordion14");
// //     $additionals.hide();
// //     // Show more photo uploaders when we click
// //     $("#add-more").on("click", function() {
// //         $additionals.show();
// //     });
// // });



// $(document).ready(function(){
//     $('.otp-bt').on('click', function () {
//         var pec = $('#pec').val();
//         alert("ok");
        
//         if (!pec) {
//             return;
//         }
//         $.ajax(
//             {
//                 type: "GET" ,
//                 url: "{{ url('/get_otp_email') }}" ,
//                 data: {
//                     pec_no:pec
//                     },
//                 dataType: 'JSON',
//                 success:function(res)
//                 {
                   
//                     $('.otp-div').slideDown();
//                 },
//                  error: function(res) {
//                     // console.log(XMLHttpRequest.responseJSON.message);
//                     alert(res.responseJSON.message);
//                 }
//             });
//          });
// });
</script>

@endsection



