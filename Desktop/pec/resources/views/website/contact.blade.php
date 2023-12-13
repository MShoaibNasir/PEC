@extends('website.layouts.app')
@section('content')
    <section>
<div class="container">
    
    <div class="row">
  <div class="col-sm-6 my-3">
    <div class="col-md-12">

                <!-- <img src="{{ asset('assets_website') }}/img/contact-us-page.png"/> -->

           <h3>
            PEC Head Office & Regional offices Office Hours 
           </h3><label class="col-form-label">Public dealing at all PEC offices is closed except biometric verification of engineers only.</label>
           <br>
           <h3>
               Head Office Address:
           </h3>
<label class="col-form-label">
Pakistan Engineering Council,
Attaturk Avenue (East) G-5/2,
P.O. Box: 1296,
Islamabad
</label>
<br>
<label> <b>UAN:</b> 051-111-111-732</label><br>

<label><b>PABX:</b>051-9219012, 9219013, 9219014, 9219015, 9219500, 9206974</label>



              </div>
  </div>

 <div class="col-sm-6">

        <div class="col-md-12">
            @if(\Session::has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ route('contact.form.save') }}" method="POST">
                @csrf
                <div class="form-group">
            <label for="inputName: l">Name</label>
<br>
            <input type="text" class="form-control col-form-label" id="inputName" name="name" placeholder="Name" required value="{{old('name')}}">
        </div>
         <br>
  <div class="form-group ">
    <label for="inputEmail3" class="col-sm-2 col-form-label ">Email</label> <br>
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required value="{{old('email')}}">
  </div>
  
  <br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="col-form-label">Questions / Comments</label> <br>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required >{{old('message')}}</textarea>
  </div>
  


  <div class="form-group ">
    <div class="col-sm-10 mt-4 ">
     <div class="g-recaptcha" data-sitekey="6Le23lkgAAAAAC_kMz_zwNmkpuUI2mYL5pRagzXk" data-callback="recaptchaCallback"></div>
     <br>
     
     <input type="submit" value="Submit" id="submitBtn" disabled class="btn btn-dark">

    </div>
  </div>
</form>
</div>


              </div>
              
</div>


        </div>

 

    </section>

    <!-- accordion-Section -->
    
<script>

function recaptchaCallback() {
    $('#submitBtn').removeAttr('disabled');
};
</script>

@endsection


