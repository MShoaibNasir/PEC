@extends('website.layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/css/intlTelInput.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/intlTelInput.js"></script>

<div class="form-group row">
    <div class="col-sm-12">
        @if ($errors->any())
            <div class="alert alert-danger " >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
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
</div

<div class="container"  style="margin-top:30px;">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="margin-top:50px">
                @if (isset($type) && $type == 'consultant')
                <div class="card-header text-center" style="color:#000;">
                    <h2>{{ __('Consultant Sign In') }}</h2>
                </div>
                @else
                <div class="card-header text-center" style="color:#000;">
                    <h2>
                       @if (isset($type) && $type == 'client')
                                {{ __('Client Sign In') }} 
                            @elseif(isset($type) && $type == 'consultant')
                               {{ __('Consultant Login') }} 
                            @elseif(isset($type) && $type == 'focalperson')
                               {{ __('Focal Person Login') }} 
                            @else
                                {{ __('Admin Sign In') }}   
                            @endif 

                    </h2>
                </div>
                @endif

                <div class="card-body bg-white text-dark">
                    @if (isset($type) && ($type == 'client' || $type == 'consultant'))
                        <form method="POST" action="{{ route('login') }}">
                    @elseif(isset($type) && $type == 'focalperson')
                        <form method="POST" action="{{ route('login_focal_person') }}">
                    @else        
                        <form method="POST" action="{{ route('login') }}">
                    @endif

                        @csrf
                        @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                        @endif
                        @if (isset($type) && $type == 'consultant')
                        <div class="form-group row mt-3" style="margin-bottom: 10px;">
                            <label for="email" class="col-sm-4 col-form-label text-md-right" style="color:#000;">{{
                                __('PEC Number') }}</label>

                            <div class="col-md-6" style="margin-bottom: 10px;">
                                <input id="email" type="phone"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="username"
                                    value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        @else
                        <div class="form-group row mt-3" style="margin-bottom: 10px;">
                            <label for="email" class="col-sm-4 col-form-label text-md-right" style="color:#000;">
                            @if (isset($type) && $type == 'client')
                                {{__('Mobile Number') }}
                            @else
                                {{__('E-Mail Address') }}   
                            @endif
                            </label>

                            <div class="col-md-6" style="margin-bottom: 10px;">
                                
                                <input type="hidden" id="dialCode" name="dialCode">
                                 <input type="hidden" id="username" name="username">
                                  <input type="hidden" id="hiden" class="hide"/>
                                
                                <input
                                
                                     @if (isset($type) && $type == 'client')
                                        id="phone1" name="phone1" type="tel"
                                    @else
                                        id="email" type="email"  name="username"  
                                    @endif

                                    
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="username1"
                                    
                                    @if (isset($type) && $type == 'client')
                                        
                                    @else
                                        value="{{ old('email') }}" 
                                    @endif
                                    
                                    
                                    
                                    required autofocus>

                                
                                @if (isset($type) && $type == 'client')
                                        @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong style="color:red">{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                                    @else
                                        @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong style="color:red">{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                    @endif
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        @endif

                        <div class="form-group row" style="margin-bottom: 10px;">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:#000;">{{
                                __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <div class="col-md-2 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #004E1E; color: #fff; line-height: 1.2rem; width: 76px;">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                            <div class="col-4 text-right text-dark">
                                <a href="{{ route('password.request') }}" class="btn btn-link  px-0"
                                    style="color:#000; width: 215px;">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        </div>

                        <div class="form-group row">
                            @if (isset($type) && $type == 'client')
                                <div class="col-4 text-right">
                                    <a href="{{url('/clients/create')}}" class="btn btn-link  px-0" style="color:#000;font-size: 21px;font-weight: 600;">Client Sign
                                        Up</a>
                                </div>
                            @elseif(isset($type) && $type == 'consultant')
                               <div class="col-6 ">
                                    <a href="{{url('/consultants/create')}}" class="btn btn-link  px-0" style="color:#000;font-size: 21px;font-weight: 600;">Consultant
                                        Sign Up</a>
                                </div> 
                            @elseif(isset($type) && $type == 'focalperson')
                               <!--<div class="col-6 ">-->
                               <!--     <a href="{{route('focalPersonRegister')}}" class="btn btn-link  px-0" style="color:#000;font-size: 21px;font-weight: 600;">Focal Person-->
                               <!--         Sign Up</a>-->
                               <!-- </div> -->
                            @else
                            
                            @endif  
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<br>
<br>
<script type="text/javascript">
    
$("#phone1").intlTelInput({
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
    initialCountry: "auto",
    nationalMode: false,
    dropdownContainer: 'body',
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
});


/* ADD A MASK IN PHONE1 INPUT (when document ready and when changing flag) FOR A BETTER USER EXPERIENCE */


// var mask1 = $("#phone1").attr('placeholder').replace(/[0-9]/g, 0);
// console.log(mask1);

// $(document).ready(function($){
//     $('#phone1').mask(mask1);
// });

var instance = $("[name=phone1]");
instance.intlTelInput();

$("#phone1").on("countrychange", function (e, countryData) {
   
     $("#phone1").val(''); 
    //  var dialCodeLength = instance.intlTelInput('getSelectedCountryData').dialCode.length;
    //  var phonetemp = $("#phone1").attr('placeholder');
    //  console.log(phonetemp);
    // var totalMaxLengths = phonetemp.replace(/ /g, '');
    // console.log(totalMaxLengths);

    // var totalMaxLengthWithOutSpaces = totalMaxLengths.length;
    // console.log(totalMaxLengthWithOutSpaces);
    // $("#phone1").prop("maxLength", totalMaxLengthWithOutSpaces);
    // $("#phone1").attr('maxlength', ''); 

    // var mask1 = $("#phone1").attr('placeholder').replace(/[0-9]/g, 0);
    //   $('#phone1').mask(mask1);

});

  
  

$('input.hide').parent().hide();




$("[name=phone1]").on("blur", function() {
  
  var code = instance.intlTelInput('getSelectedCountryData').dialCode; //get counrty code
  var dialcode =  $("#dialCode").val(code);
  var phoneNumber = $("#phone1").val();
  var phoneNumberWithoutHyphen = $("#phone1").val().replace(/-/g, '');
  var fullPhoneNumber = "+" + code + phoneNumberWithoutHyphen;
  $("#username").val(fullPhoneNumber);
 
});

 
</script>
 




@endsection
