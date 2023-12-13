<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->    
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <meta name="description" content="PEC">
      <meta name="author" content="ﾅ「kasz Holeczek">
      <meta name="keyword" content="PEC, bussiness">
      <meta name="google-site-verification" content="_WCMDuTybBQzIsant_RgRda62AuaVc_f6LD7vZIb3gw" />
      <meta name="google-site-verification" content="o6XuRP3ZgHDMcEPBh-jDtxo6ilscfsc6jirK6k9Auq0" />
      <link rel="apple-touch-icon" href="{{ asset('assets_website/img/apple-icon.png') }}">
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_website/img/PEC-New-LOGO-300x300.png') }}">
      <!-- Load Require CSS -->    <!-- Vendor CSS Files -->    {{-- 
      <link href="{{ asset('assets_new/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
      --}}    
      <link href="{{ asset('assets_new/vendor/aos/aos.css" rel="stylesheet') }}">
      <link href="{{ asset('assets_new/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets_new/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ url('public/assets_new/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      {{-- 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      --}}    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>        
      <link href="{{ asset('assets_new/css/style.css') }}" rel="stylesheet">
      <link href="{{ url('public/assets_new/css/style.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
      <!-- Custom CSS -->    {{-- 
      <link rel="stylesheet" href="{{ asset('assets_website/css/custom.css') }}">
      --}}    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>    {{--     
      <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
      <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
      <script type='text/javascript' src=''></script>    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script> --}}    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K1QT0SXDBC"></script>    {{-- 
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css?v=').time()}}">
      --}}    <script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'G-K1QT0SXDBC');</script>
   </head>
   <body>
      @php $visitorCount = App\Models\Visitor::where('visit_time', '>=', now()->startOfHour())        ->where('visit_time', '<', now()->endOfHour())        ->count();@endphp    <!--Top Bar -->    
      <section id="topbar" class="" style="background-color:#21573d">
         <div class="row ">
            <div class="col-lg-6 col-md-6 d-flex" style="align-items: center">
               <div class="row pt-2" style="text-align: justify;">
                  <div class="col-lg-5 col-md-3"></div>
                  <div class="col-lg-7 col-md-9 d-flex">
                     <div class="contact-info d-flex align-items-center">                            <i class="bx bx-world"></i> <a href="https://www.pec.org.pk/" style="text-decoration: none;">                                www.pec.org.pk</a>                            <i class="bx bx-phone" style="margin-left:20px"></i> <a href="tel:9251111111732"                                style="text-decoration: none ">+9251111111732</a>                                </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="row pt-2">
                  <div class="col-lg-6 col-md-6"></div>
                  <div class="col-lg-6 col-md-6">
                     <div class="social-links d-none d-md-block">                            Follow us on : &nbsp;                            <a href="https://www.facebook.com/PECOfficial/"  style="color: #fff" class="facebook" target="_blank"><i                                    class="bi bi-facebook"></i></a>                            <a href="https://twitter.com/pecofficial?lang=en"  style="color: #fff" class="twitter" target="_blank"><i                                    class="bi bi-twitter"></i></a>                            <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk"                            style="color: #fff" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>                        </div>
                  </div>
               </div>
            </div>
         </div>
         {{-- 
         <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">       <i class="bx bx-world"></i> <a href="https://www.pec.org.pk/" style="text-decoration: none;"> www.pec.org.pk</a>        <i class="bx bx-phone" style="margin-left:20px"></i> <a href="tel:9251111111732" style="text-decoration: none ">+92-51-111-111-732</a>                    </div>
            <div class="social-links d-none d-md-block">        Follow us on          <a href="https://www.facebook.com/PECOfficial/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>          <a href="https://twitter.com/pecofficial?lang=en" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>          <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>      </div>
         </div>
         --}}    
      </section>
      <!--  Header  -->    
      <header id="header" class="d-flex align-items-center" style="background-color: #e8e8e8">
         <div class="container d-flex align-items-center">
            <div class="logo container me-auto">
               <a href="#"><img src="https://egateway.pec.org.pk/public/assets_website/logo/pec_logo.png"></a>                <!-- Uncomment below if you prefer to use an image logo -->                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->            
            </div>
            <nav id="navbar" class="navbar" style="font-weight: 600">
               <ul>
                  <li style="padding: 0.8rem"><a class="nav-link  active" href="{{ route('index') }}">Home</a></li>
                  <li style="padding: 0.8rem"><a class="nav-link scrollto" href="{{ route('about') }}">About Us</a>                    </li>
                  <li style="padding: 0.8rem"><a class="nav-link scrollto"                            href="{{ route('regulations') }}">Regulations</a></li>
                  <!--<li >-->                    <!--{{-- <a class="nav-link scrollto" href="{{ route('projects') }}">Projects</a> --}}-->                    <!--    </li>-->                    
                  <li style="padding: 0.8rem"><a class="nav-link scrollto" href="{{ route('contact') }}">Contact                            Us</a></li>
                  <li style="padding: 0.8rem"><a class="nav-link scrollto"                            href="{{ route('available_projects') }}">Projects</a></li>
                  @guest                        
                  <li class="dropdown" style="padding: 0.8rem">
                     <a href="#"                                style="text-decoration: none; background-color:#21573d; color:#fff; padding:0.5rem 1rem; border-radius:3px; box-shadow: 2px 2px 4px rgba(0, 0, 0.5, 0.5);"><span>Sign In</span>                                <i class="bi bi-chevron-down"></i></a>                            
                     <ul>
                        <li><a href="{{ route('login') }}/client" style="text-decoration: none;">Client</a></li>
                        <li><a href="{{ route('login') }}/consultant"                                        style="text-decoration: none;">Consultant</a></li>
                     </ul>
                  </li>
                  @else                        
                  <li class="nav-item">
                     <?php                            $user_id = \Auth::User()->id;                            $menuroles = \Auth::User()->menuroles;                            ?>                            <?php if($menuroles == 'client' || $menuroles == 'consultant'){?>                            
                     <div class="dropdown">
                        <button type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown"                                    aria-expanded="false" aria-pressed="true">                                    <i class="fa-solid fa-circle-user " style="color:#21573d; font-size:25px;"></i>                                </button>                                <?php                                $user_id = \Auth::User()->id;                                $menuroles = \Auth::User()->menuroles;                                ?>                                
                        <ul class="dropdown-menu dropdown-menu-end navbar-nav">
                           <?php if($menuroles == 'consultant'){ ?>                                    
                           <li class="dropdown-item" style="width:158px;margin-top:-10px"><a                                            href="http://devstaging.a2zcreatorz.com/pec_bk/consultant/profile"                                            style="text-decoration: none;">My Profile</a></li>
                           <li class="dropdown-item" style="width:158px"><a                                            href="http://devstaging.a2zcreatorz.com/pec_bk/consultant_dashboard"                                            style="text-decoration: none;">Dashboard</a></li>
                           <?php  }elseif($menuroles == 'client'){   ?>                                    
                           <li class="dropdown-item"> <a                                            href="https://devstaging.a2zcreatorz.com/pec_bk_live_2/client/profile"                                            style="text-decoration:none;">My Profile</a></li>
                           <li class="dropdown-item"><a                                            href="https://devstaging.a2zcreatorz.com/pec_bk_live_2/client_dashboard"                                            style="text-decoration: none;">Dashboard</a></li>
                           <?php } ?>                                    
                           <li class="dropdown-item">
                              <a class="nav-link " href="#"                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"                                            style="text-decoration: none;">Logout</a>                                        
                              <form id="logout-form" action="{{ route('logout') }}" method="POST"                                            style="display: none;">
                              @csrf                                    
                           </li>
                        </ul>
                     </div>
                     <?php }elseif($menuroles == 'user,admin'){?>                            
                     <div class="dropdown">
                        <button type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown"                                    aria-expanded="false" aria-pressed="true">                                    <i class="fa-solid fa-circle-user " style="color:#21573d; font-size:25px;"></i>                                </button>                                
                        <ul class="dropdown-menu dropdown-menu-end navbar-nav">
                           <li class="dropdown-item" style="width:158px"><a                                            href="https://devstaging.a2zcreatorz.com/pec_bk_live_2/dashboard"                                            style="padding:5px;color:black ;text-decoration: none;">Dashboard</a></li>
                           <li class="dropdown-item" style="width:158px">
                              <a class="nav-link " href="#"                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"                                            style="text-decoration: none;">Logout</a>                                        
                              <form id="logout-form" action="{{ route('logout') }}" method="POST"                                            style="display: block;">
                              @csrf                                    
                           </li>
                        </ul>
                     </div>
                     <?php }?>                        
                  </li>
                  @endguest                
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>            
            </nav>
            <!-- .navbar -->        
         </div>
      </header>
      <!-- End Header -->@php@endphp    
      <main id="main">        @yield('content')    </main>
      <!-- End #main -->    <!-- ======= Footer ======= -->    
      <footer id="footer" style="padding:0px">
         <div class="footer-top" style="padding-bottom: 0px">
            <div class="container">
               <div class="row">
                  <div class="col-md-5 footer-info" style="padding-left:40px">
                     <div class="footer-logo">
                        <div><a href="{{ url('/') }}"><img                                        src="{{ asset('assets_new/img/pec-logo-new.png') }}"></a></div>
                        <!-- Uncomment below if you prefer to use an image logo -->                            <!-- <a href="index.html"><img src="{{ asset('assets_new/img/bwLogo.png') }}" alt="" class="img-fluid"></a>-->                        
                     </div>
                     <div class="social-links d-none d-md-block pt-3 pl-2">
                        {{-- 
                        <div>
                           <p style="font-size: 11px; padding-right:30px;" >The Pakistan Engineering Council is a statutory body, constituted under the PEC Act 1976 (V of 1976)                                amended upto 1st December 2016,to regulate the engineering profession in the country                                 such that it shall function as key driving force for achieving rapid and sustainable                                 growth in all national, economic and social fields.</p>
                        </div>
                        --}}                            <span style="font-weight: 600">Follow us on : &nbsp;</span>                            <a href="https://www.facebook.com/PECOfficial/"  style="color: #fff" class="facebook" target="_blank"><i                                    class="bi bi-facebook"></i></a>                            <a href="https://twitter.com/pecofficial?lang=en"  style="color: #fff" class="twitter" target="_blank"><i                                    class="bi bi-twitter"></i></a>                            <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk"                            style="color: #fff" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>                        
                     </div>
                  </div>
                  <div class="col-md-4 footer-links">
                     <h4>                            Quick link</h4>
                     <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('faq') }}"                                    style="text-decoration: none;">FAQs</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a                                    href="https://verification.pec.org.pk/l/cl/index.aspx"                                    style="text-decoration: none;">Consultant Directory</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a                                    href="https://pec.org.pk/wp-content/uploads/2023/02/pec-privacy-policy.pdf"                                    style="text-decoration: none;">Privacy Policy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('disclaimer') }}"                                    style="text-decoration: none;">Disclaimer</a></li>
                     </ul>
                  </div>
                  <div class=" col-md-3 footer-links">
                     <h4>Contact Us</h4>
                     <ul>
                        <li><i class="bx bx-world"></i> <a href="https://www.pec.org.pk/"                                    style="text-decoration: none;"> www.pec.org.pk</a></li>
                        <li><i class="bx bx-phone"></i> <a href="tel:9251111111732"                                    style="text-decoration: none;">(+92-51)111-111-732</a></li>
                     </ul>
                  </div>
               </div>
               <div class="row" style="display: inline">
                  <div class="col-md-4 footer-newsletter" style="display: inline-block">
                     {{-- 
                     <div class="social-links">
                        <h4>Follow Us</h4>
                        <a href="https://www.facebook.com/PECOfficial/" class="facebook" target="_blank"><i                                    class="bx bxl-facebook"></i></a>                            <a href="https://twitter.com/pecofficial?lang=en" class="twitter" target="_blank"><i                                    class="bx bxl-twitter"></i></a>                            <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk"                                class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>                        
                     </div>
                     --}}                    
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row" style="background-color: #222222; color:#fff">
               <div class="col-md-5">
                  <div class="copyright">                        © Copyright 2023 Pakistan Engineering Council. All Rights Reserved.                    </div>
               </div>
               <div class="col-md-2 container">
                  <div class="copyright">
                     <div class="row d-flex justify-content-center">
                        <div class="col-3">
                           <p style="color:blak; font-weight:bold">Visitors:</p>
                        </div>
                        <div class="col-4">
                           <p class="website-counter text-dark">{{$visitorCount}}</p>
                        </div>
                     </div>
                  </div>
               </div>
               <script>                                                                       
                                               </script>                
               <div class="col-md-5">
                  <div class="copyright-2">                        Designed and Developed by <a href="https://a2zcreatorz.com/" target="_blank" style="color:turquoise">A2Z Creatorz</a>                    </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- End Footer -->    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i            class="bi bi-arrow-up-short"></i></a>    <!-- Vendor JS Files -->    <script src="{{ asset('assets_new/vendor/purecounter/purecounter_vanilla.js') }}"></script>    <script src="{{ asset('assets_new/vendor/aos/aos.js') }}"></script>    <script src="{{ asset('assets_new/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>    <script src="{{ asset('assets_new/vendor/glightbox/js/glightbox.min.js') }}"></script>    <script src="{{ asset('assets_new/vendor/swiper/swiper-bundle.min.js') }}"></script>    <!-- Template Main JS File -->    <script src="{{ asset('assets_new/js/main.js') }}"></script>
   </body>
</html>