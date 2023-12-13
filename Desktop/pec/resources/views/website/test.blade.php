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

    <link rel="apple-touch-icon" href="{{ asset('assets_website/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_website/img/PEC-New-LOGO-300x300.png') }}">
    <!-- Load Require CSS -->

      
</head>

<body>

   <!--Top Bar -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
       <a href="{{ url('how_works') }}">How it works</a>
       
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://www.facebook.com/PECOfficial/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/pecofficial?lang=en" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  

<main id="main">
  @yield('content')
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

   

</body>

</html>