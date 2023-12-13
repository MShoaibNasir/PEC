@extends('website.layouts.app')
@section('content')
<!-- banner -->
 <div class="page-banner ">
  {{-- <img class="d-block w-100" src="{{asset('assets_website/img/pec.jpg')}}" alt="banner"> --}}
  <div class="container">
    <h2 class="display-3 text-center">About Us</h2>
  </div>
</div> 

 <div class="container my-5" style="text-align: justify;">
    <div class="row">
        <p>The PEC Gateway is a digital procurement system of local Engineering Consulting Services. The platform of PEC gateway 
        is designed to operate under competitive, fair, and transparent, procedures in compliance to the internationally 
        accepted procurement policies for export of local Engineering Services internationally. The system will be administered by
        dedicated staff of PEC in alliance with PEC Pakistan Development Committee (PPDC) members. The aim of PEC Gateway is to 
        contribute in creating knowledge-intensive service-oriented economy and represent local Engineering Industry as Tech enabled 
        service from the trusted and credible platform of PEC. The PEC Gateway will be launched with a focused objective of promoting 
        local Engineering Talent in international market through coordinated efforts of overseas engineers for preserving brain drain at 
        national level.</p>
        <!--<div class="col-6">-->
        <!--</div>-->
        <!--<div class="col-6">-->
        <!--    <img src="assets/img/related-post-02.jpg" />-->
        <!--</div>-->
    </div>
</div> 
{{-- 
 <!-- ======= greetings Section ======= -->
 <section id="about" class="Chairman greetings">
  <div class="container" data-aos="fade-up">
    <div class="row no-gutters">
      

      <div class="col-lg-9 d-flex flex-column about-content" style="text-align: justify;" >
<h3 style="color: #212529; font-weight: 600;">Greetings</h3>
        <p style="color: #212529;">The E-Gateway is one of important initiatives by the Pakistan Engineering Council,
           working towards creating opportunities and providing resources for engineers across Pakistan.
            The E-Gateway is a tool which provides a one-window solution for international companies to 
            engage qualified and registered Pakistani engineers and firms for their business needs. It also 
            offers a new avenue for business development and export for Pakistani engineers talent. 
            The Washington Accord paved the way for Pakistani engineers to be recognized as professionally 
            accredited, and provide their services in member countries. PEC, under the current leadership of 
            NAJEEB Haroon is committed to contributing towards increasing Pakistan’s technological exports, 
            with Pakistani engineers leading the way and the E-Gateway is a step in the direction of this growth.
             I would like to recognise and appreciate the hard work of my team who completed this project specially
              the team lead Nausheen Irfan.


        </p>
        
<p style="color: #212529;"><b>Engr. Mir Masood Rashid (Convenor, PEC Pakistan Development Committee)</b></p>
       
      </div>
      <div class="col-lg-3 d-flex flex-column justify-content-center about-content">
        <img   class="responsive" src="{{ asset('assets_new/img/mir.jpeg') }}" class="img-fluid" alt="">
       
      </div>
    </div>

  </div>
</section><!-- End greetings Section --> --}}

<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>PEC <span style= "color: #21573d">Management</span> Team</h2>
      
    </div>

    <div class="row">

      <div class=" col-lg-2 col-md-6" data-aos="fade-up">
        <div class="member p-2">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Nayyar -Saeed.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Engr. Nayyar Saeed (SVC)</h4>            
          </div>
        </div>
      </div>

      <div class=" col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member p-2">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Ejaz Hussain-Ansari.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Engr. Ejaz Hussain Ansari(VC KP)</h4>           
          </div>
        </div>
      </div>

      <div class=" col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="member p-2">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Niaz-Ahmad.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Engr. Dr. Niaz Ahmad(VC Punjab)</h4>            
          </div>
        </div>
      </div>

      <div class=" col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="member p-2">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Mukhtar-Ali-Sheikh.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Engr. Mukhtar Ali Sheikh
              (VC Sindh)</h4>           
          </div>
        </div>
      </div>

      <div class=" col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="member p-2">
          <div class="pic"><img src="{{ asset('assets_new/img/team/A1.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Engr. Nasir Majeed   (VC Balochistan)</h4>            
          </div>
        </div>
      </div>
      
      <div class=" col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="member p-2">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Nasir-Khan.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Dr. Nasir Khan
              (Registrar)</h4>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Our Team Section -->
 

<!-- =======PEC E Gateway Team ======= -->
{{-- <section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>PEC <span style= "color: #21573d">E-Gateway</span> Team</h2>
      
    </div>

    <div class="row d-flex ">
      <div class="col-lg-3 col-md-4" data-aos="fade-up">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Amir-Waqas.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Amir Waqas</h4>            
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Zaeem-Ahmad.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Zaeem Ahmad</h4>           
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets_new/img/team/A2.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Engr. Fahad Mustafa</h4>
            
          </div>
        </div>
      </div>

      {{-- <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <div class="pic"><img src="{{ asset('assets_new/img/team/Nausheen-Irfan.png') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Nausheen Irfan</h4>
           
          </div>
        </div>
      </div>       
      

    </div>

  </div>
</section><!-- PEC E Gateway Team --> --}}




<section>
  <div class="row d-flex">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <h3 class="d-flex justify-content-center" style="padding:15px 0px"><span style="font-weight:600; color: #21573d">E-Gateway &nbsp;</span> Launching </h3> 

      {{-- <div id=slideset1>
        <div>
            <img src="{{ url('public/assets_new/img/launching/pic1.JPG')}}" style="width:100% ; max-height: 600px; object-fit: cover;">
        </div>
        <div>
            <img src="{{ url('public/assets_new/img/launching/pic2.JPG')}}" style="width:100% ; max-height: 600px; object-fit: cover;">
        </div>
        <div>
            <img src="{{ url('public/assets_new/img/launching/pic3.JPG')}}" style="width:100% ; max-height: 600px; object-fit: cover;">
        </div>
        <div>
          <img src="{{ url('public/assets_new/img/launching/pic4.JPG')}}" style="width:100% ; max-height: 600px; object-fit: cover;">
      </div>
      <div>
        <img src="{{ url('public/assets_new/img/launching/pic5.jpeg')}}" style="width:100% ; max-height: 600px; object-fit: cover;">
    </div>
      </div> --}}

      <div id="about-slider" style="overflow: hidden">
        <figure>
            <img src="{{ url('public/assets_new/img/launching/pic1.JPG')}}">
            <img src="{{ url('public/assets_new/img/launching/pic2.JPG')}}">
            <img src="{{ url('public/assets_new/img/launching/pic3.JPG')}}">
            <img src="{{ url('public/assets_new/img/launching/pic4.JPG')}}">
            <img src="{{ url('public/assets_new/img/launching/pic5.jpeg')}}">
        </figure>
    </div>
    </div>
    <div class="col-lg-1"></div>

  </div>
  
</section>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>





@endsection