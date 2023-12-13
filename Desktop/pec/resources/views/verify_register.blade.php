


@extends('dashboard.authBase')

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#collapseOne" ).collapse();
  } );
  </script>

<?php 
    //  $pec_register_consultant = DB::table('pec_register_consultant')->where('id','=', $id)->first();

?>
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
          <img src ="../images/pec_logo.png" style="margin-top: 40px; width: 100%; , margin-left: 10px;" >
            <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> OTP Verification </h3>

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          

            <form action="{{ url('send_email/'. $pec_register_consultant->id)}}" method="post">
                  @csrf
                <div class="form-group">
                <label><span>*</span> PEC Reg No</label>
               
                <span> <input type="text" name="client_reg"   style="width: 370px;" class="form-control" required />
                <input type="email" name="email1" class="form-control" />    
              </div>
              <div class="column" >
              <div class="form-group" >
                <label><span>*</span> Email Address</label>
                <input type="email" name="email1" class="form-control" />
              </div> 
              <button type="submit"  class="btn"  style=" background-color: #004E1E; margin-left: 380px; margin-top: -60px;  color: #fff; ">Send OTP</a></span>
              </form>

    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});


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
    var $additionals = $("#accordion,#myAccordion1, #accordion1, #accordion2,  #accordion3, #accordion4,  #accordion5, #accordion6, #accordion7,#accordion8,#accordion9,#accordion10,#accordion11,#accordion12,#accordion13,#accordion14");
    $additionals.hide();
    // Show more photo uploaders when we click
    $("#add-more").on("click", function() {
        $additionals.show();
    });
});
</script>

@endsection



