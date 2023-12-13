@extends('website.layouts.app')
@section('content')
    <style>
        /* h1 {
            font-size: 4vw;
            margin-top: 0;
            margin-bottom: .5rem;

            line-height: 1.2 margin: 10px 0 0 10px;
            white-space: nowrap;
            overflow: hidden;
            color: white;
            width: 100%;
             animation: animtext 2s; 
             transition: all cubic-bezier(0.1, 0.7, 1.0, 0.1); 
        } */

        #hero .btn-get-started {
            font-family: "Raleway", sans-serif;
            font-weight: 500vw;
            font-size: 14px;
            letter-spacing: 0px;
            display: inline-block;
            padding: 12px 32px;
            border-radius: 5px;
            transition: 0.5s;
            line-height: 1;
            margin: 7px;
            color: #212529;
            animation-delay: 0.8s;
            border: 0;
            background: #fff;
            position: relative;
        }




        @keyframes animtext {
            from {
                width: 0;
                transition: all 2s ease-in-out;
            }
        }
    </style>



    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" style="background-color: #e8e8e8"> --}}
    <section id="hero d-flex"
        style="padding:0px ;background-color: #e8e8e8; background-image:url({{ url('public/assets_new/img/backgroundColorImage.png') }})">

        <div class="hero-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex" style="align-items: center">
                    <div class="row" style="text-align: justify; padding:15px">
                        <div class="col-lg-3 col-md-3"></div>
                        <div class="col-lg-9 col-md-9 d-flex justify-content-center">
                            <div  class="">
                                <h1 style=" color:#333333; margin:0px; font-weight:600" class="d-flex justify-content-center">
                                    <span>Welcome to </span>
                                    <span style= "color: #21573d"> &nbsp;PEC</span>
                                </h1>
                                <h1 style="color:#333333;" class="d-flex justify-content-center">
                                    <span>E-Gateway Portal</span>
                                </h1>
                                <h5 style= "color: #21573d" class="d-flex justify-content-center">Project of PPDC</h5>
                                <p style="color:#333333; font-weight:400; font-size:1rem; padding:2vw 0;">
                                    <span>A Portal For Internation Companies Seeking Engineering
                                        Consultancy Services Of PEC Registered Consultants
                                    </span>
                                </p>
                                <div class="d-flex justify-content-center" style="font-weight:600;">
                                    <a href="{{ route('login') }}/client" class="button"
                                        style="font-weight:600 ;background-color: #21573d; color:#fff; padding:7px 10px; margin-right:1rem; border-radius:3px; box-shadow: 2px 2px 4px rgba(0, 0, 0.5, 0.5);">Sign
                                        In as a Client</a>
                                    <a href="{{ route('login') }}/consultant" class="button"
                                        style="font-weight:600 ; color:#21573d; border:1px solid; padding:7px 10px ; border-radius:3px; box-shadow: 2px 2px 4px rgba(0, 0, 0.5, 0.5);">Join
                                        as a Consultant</a>
                                </div>
                            </div>
      
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-3 col-md-2 d-flex justify-content-center">
                    <img class="welcome-image" src="{{ url('public/assets_new/img/new6.png') }}" alt=""
                        style="padding:0px 20px">

                </div>
                <div class="col-lg-1 col-md-2"></div>

            </div>
        </div>
        {{-- <div class="row" style="background-image:url({{url('public/assets_new/img/layer-2-1@2x - Copy.png')}})"> --}}

    </section><!-- End Hero -->

    <!-- Image bellow  header-->
    <div class="image-container" style="width:100%; height:100%; min-height:7rem ;color:white; background-image:url({{ url('public/assets_new/img/layer-2-1@2x-Copy.png') }})">
      
        <div class="row pt-3" >
            {{-- <img class="green-texture-img" src="{{ url('public/assets_new/img/layer-2-1@2x - Copy.png') }}" alt="">  --}}
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-5" style="padding-left:50px">
                
                    <h3 style="margin-bottom:0px">Looking for a <span style="font-weight: bold">PEC</span>
                        Consultant</h3>
                    <h3 style=""> Book an <span style="font-weight: bold">Appointment</span> Quickly</h3>
                </div>
            
            <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center" style="padding:12px">
            
                    <a href="{{ route('login') }}/client" class="button"
                        style="background-color: #e8e8e8; color:#21573d; border:1px solid; padding:6px 15px; border-radius:4px; font-weight:600; box-shadow: 2px 2px 4px rgba(0, 0, 0.5, 0.5);">Sign
                        In as an International Client</a>
            
            </div>
        </div>
    </div> 
    <!-- End of Image bellow header -->


        <!-- ======= video Section ======= -->
        <section>
            <div class="container" data-aos="fade-up">
    
                <div class="row no-gutters">
                    <div class="col-lg-12 video-box">
                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/AWlV7T2TYGs?autoplay=1&mute=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
    
                    </div>
    
    
                </div>
    
            </div>
        </section><!-- End video Section -->


    {{-- Chaiman Section --}}
    <section>
        <div class="row d-flex justify-content-center">

            <div class="col-lg-3 col-md-4 imgbox justify-content-center d-flex align-items-center">

                <img class="img" src="{{ asset('assets_new/img/pec-chairmain.jpg') }}" alt="" style=" ">

            </div>
            <div class="col-lg-6 col-md-6" style="padding:0 25px;">
                <h1 style="font-weight:600" class="d-flex justify-content-center">Message of PEC <span style= "color: #21573d; font-weight: bold">
                        &nbsp;Chairman</span></h1>
                <p style="color: #333333;text-align: justify;">Pakistan Engineering Council has an agenda to create
                    opportunities for its members, and create avenues to export the Pakistani Engineering technical
                    expertise globally.
                </p>
                <p style="color: #333333;text-align: justify;">The PEC E-Gateway is a digital procurement system of Pakistan
                    Engineering Consulting Services. The platform of PEC gateway is designed to operate under competitive,
                    fair, and transparent procedures, in compliance with the internationally accepted procurement policies
                    for export of local Engineering Services. The system will be administered by dedicated staff of PEC in
                    alliance with PEC Pakistan Development Committee (PPDC) members. The aim is to contribute in creating
                    knowledge-intensive service-oriented economy and represent local Engineering Industry as Tech enabled
                    service from the trusted and credible platform of PEC. The PEC E-Gateway is launched with a focused
                    objective of promoting Pakistani Engineering talent in international markets through coordinated efforts
                    of overseas engineers. I congratulate Engr Mir Masood Rashid convener, PEC Pakistan Development
                    committee & His team for visualizing this project of PEC E-Gateway

                </p>
                <p style="color: #333333;"><b>Engr. Muhammad Najeeb Haroon</b></p>
            </div>
        </div>

    </section>
    {{-- End Of Chairman Section --}}


    {{-- Greeting Section --}}
    <section>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-4 imgbox justify-content-center d-flex align-items-center">

                <img class="img" src="{{ asset('assets_new/img/mir.jpeg') }}" alt="" style=" ">

            </div>
            <div class="col-lg-6 col-md-6" style="padding:0 25px;">
                <h1 style="font-weight:600; color: #21573d; font-weight: bold" class="d-flex justify-content-center" >Greetings</h1>
                <p style="color: #333333;text-align: justify;">The E-Gateway is one of important initiatives by the Pakistan Engineering Council,
                    working towards creating opportunities and providing resources for engineers across Pakistan.
                     The E-Gateway is a tool which provides a one-window solution for international companies to 
                     engage qualified and registered Pakistani engineers and firms for their business needs. It also 
                     offers a new avenue for business development and export for Pakistani engineers talent. 
                     The Washington Accord paved the way for Pakistani engineers to be recognized as professionally 
                     accredited, and provide their services in member countries. PEC, under the current leadership of 
                     NAJEEB Haroon is committed to contributing towards increasing Pakistan’s technological exports, 
                     with Pakistani engineers leading the way and the E-Gateway is a step in the direction of this growth.
                      I would like to recognise and appreciate the hard work of my team who completed this project.

                </p>
                <p style="color: #333333;"><b>Engr. Mir Masood Rashid (Convenor, PEC Pakistan Development Committee)</b></p>
            </div>
             
            

        </div>

    </section>
    <!-- End of Greeting Section -->

   

    <!-- ======= Counts Section ======= -->
    <section class="counts ">
        <div class="container">


            <style>
                .div:hover {
                    background: linear-gradient(to top, #D0F0C0, #E9FFDB);
                }
            </style>

            <div class="row">

                <div class="col-lg-6 col-md-6 justify-content-center" data-aos="fade-up">
                    <div class="count-box justify-content-center div">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1"
                            class="purecounter count-k text-center"></span>
                        <p class="text-center" style="text-align: center; !important">PEC Verified Engineers</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box justify-content-center div">
                        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1"
                            class="purecounter count-plus text-center"></span>
                        <p class="text-center"> PEC Verified Consultants Pakistan </p>
                    </div>
                </div>



            </div>



            <div class="row">
                <div class="col-lg-6 col-md-6 text-center " data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box justify-content-center div">
                        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                        <div class="justify-content-center ">


                            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                                class="purecounter count-plus text-center"></span>
                            <p class="text-center">PEC Verified Consultants International</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box justify-content-center div ">
                        <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="72" data-purecounter-duration="1"
                            class=" purecounter without-txt  text-center"></span>
                        <p class="text-center">Posted Projects</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    {{-- <section>

        <div class="">
            <h3 class="your-gateway-to-verified-consultants-TEp d-flex"
                style="justify-content: center; margin-bottom:3rem">Your Gateway to verified <span
                    style= "color: #21573d; font-weight: 600; margin:0px"> Consultants</span></h3>
            <div class="auto-group-dilt-VhJ">
                <div class="row companies1">
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="group-642-PXn">
                            <img class="image-215-X8C" src="public/assets_website/img/image-215-zvL.png"
                                style="width:170px; height:170px; border:5px solid #21573d; border-radius:50%; padding:20px" />
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="group-643-dS8">
                            <img class="image-216-moE" src="public/assets_website/img/image-216-XCt.png"
                                style="width:170px; height:170px; border:5px solid #21573d; border-radius:50%; padding:20px" />
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="group-644-u8k">
                            <img class="image-218-3Vr" src="public/assets_website/img/image-218-2ik.png"
                                style="width:170px; height:170px; border:5px solid #21573d; border-radius:50%; padding:20px" />
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="group-645-ZUC">
                            <img class="image-217-JAt" src="public/assets_website/img/image-217-YYp.png"
                                style="width:170px; height:170px; border:5px solid #21573d; border-radius:50%; padding:20px" />
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="group-642-PXn">
                            <img class="image-215-X8C" src="public/assets_website/img/image-235.png"
                                style="width:170px; height:170px; border:5px solid #21573d; border-radius:50%; padding:20px" />
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center">
                        <div class="group-644-u8k">
                            <img class="image-218-3Vr" src="public/assets_website/img/image-239.png"
                                style="width:170px; height:170px; border:5px solid #21573d; border-radius:50%; padding:20px" />
                        </div>
                    </div>
                </div>

            </div>


    </section> --}}


    <section class="contactUs"
        style="background-color: rgb(251, 253, 248); background-image:url({{ url('public/assets_new/img/backgroundColorImage.png') }})">
        <div class="row d-flex" >
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="col-md-3"></div>
                <div class="col-md-8" style="padding:0 25px">
                    <p style="color:#808080; margin:0px"> WHY CHOOSE US</p>
                    <p style=" font-size:2.2rem">
                        <span style= "color: #21573d; font-weight: 600; margin:0px">Your Success</span>
                        Is Our Repution
                    </p>

                    <p style="font-size:1rem; font-weight:bold; margin-bottom:8px; margin-top:3rem; color:#333333 "> Our
                        Motive </p>
                    <p style="font-size:0.9rem; color:#333333; justify-content-center">The PEC Gateway is launched with a focused objective of
                        promoting local Engineering Talent in international market through coordinated efforts of overseas
                        engineers for preserving brain drain at national level</p>
                    <p style="font-size:1rem; font-weight:bold;  margin-bottom:8px; color:#333333"> Find Experts</p>
                    <p style="font-size:0.9rem; color:#333333;justify-content-center">The PEC E-Gateway offers clients the opportunity to discover
                        the best experts and make use of their services</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex justify-content-center">
                <div class="col-lg-8 col-md-12"
                    style="border: 1px solid #e4e4e4; background-color:#fff; padding: 1rem 2rem;
          font-size:0.9rem; font-weight:600">
                    @if (\Session::has('errors'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.form.save') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <p style= "color: #21573d; font-weight: 600; font-size:1.5rem">Ask Any Query</p>
                        </div>

                        <div class="form-group">
                            <label for="inputName: l">Name</label>
                            <br>
                            <input type="text" class="form-control col-form-label" id="inputName" name="name"
                                placeholder="Your Name" required value="{{ old('name') }}">
                        </div>
                        <br>
                        <div class="form-group ">
                            <label for="inputEmail3" class="col-sm-2 col-form-label ">Email</label> <br>
                            <input type="email" class="form-control" id="inputEmail3" name="email"
                                placeholder="someone@example.com" required value="{{ old('email') }}">
                        </div>

                        <br>
                        <div class="form-group" style="margin-bottom:3rem">
                            <label for="exampleFormControlTextarea1" class="col-form-label">Questions / Comments</label>
                            <br>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required>{{ old('message') }}</textarea>
                        </div>



                        <div class="form-group ">
                            <div class="col-sm-12 mt-4 ">
                                {{-- <div class="g-recaptcha" style="width:60%" data-sitekey="6Le23lkgAAAAAC_kMz_zwNmkpuUI2mYL5pRagzXk" data-callback="recaptchaCallback"></div>
     <br> --}}

                                <input type="submit" value="Submit" id="submitBtn"
                                    style="color:#fff; width:100%; background-color:#21573d; border-radius:3px; box-shadow: 2px 2px 4px rgba(0, 0, 0.5, 0.5);"
                                    class="btn">

                            </div>
                        </div>
                    </form>
                </div>

            </div>
            
        </div>
    </section>



@endsection
