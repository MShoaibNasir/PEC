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
    <meta name="google-site-verification" content="o6XuRP3ZgHDMcEPBh-jDtxo6ilscfsc6jirK6k9Auq0" />
    <meta name="keyword" content="PEC, bussiness">
    <meta name="google-site-verification" content="_WCMDuTybBQzIsant_RgRda62AuaVc_f6LD7vZIb3gw" />
    
    <link rel="apple-touch-icon" href="{{ asset('assets_website/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_website/img/PEC-New-LOGO-300x300.png') }}">
    <!-- Load Require CSS -->

    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('assets_new/vendor/animate.css/animate.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets_new/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets_new/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_new/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets_new/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}

    
    <link href="{{ asset('assets_new/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">




    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets_website/css/custom.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    

{{-- 
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script> --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K1QT0SXDBC"></script>

      <!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K7B5BJ6C');</script>
    <!-- End Google Tag Manager -->


    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-K1QT0SXDBC');
    //   $(document).ready(function(){
    //       $('.remove_notification').click(function(){
    //           $('.alert-danger').css('display', 'none');
    //       })
    //   })
    </script>
    
</head>
<style>




/**
* Template Name: Pec
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://egateway.pec.org.pk/
  * Author:https://egateway.pec.org.pk/
  * License: https://egateway.pec.org.pk/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  /* font-family: "Open Sans", sans-serif; */
  color: #212529;
  width: auto;
}

a {
  color: #21573d;
  text-decoration: none;
}

a:hover {
  color: #9eccf4;
  text-decoration: none;
}

/* h1,
h2,
h3,
h4,
h5,
h6,
.font-primary {
  font-family: "roboto", sans-serif;
} */

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: #21573d;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #21573d;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }

}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  background: #21573d;
  border-bottom: 1px solid #eee;
  font-size: 15px;
  height: 40px;
  padding: 0;
}

#topbar .contact-info a {
  line-height: 0;
  color: #fff;
  transition: 0.3s;
}

#topbar .contact-info a:hover {
  color: #fff;
}

#topbar .contact-info i {
  color: #fff;
  line-height: 0;
  margin-right: 5px;
}

#topbar .contact-info .phone-icon {
  margin-left: 15px;
}

#topbar .social-links {
  color: #fff;
  padding: 4px 12px;
  display: inline-block !important  ;
  line-height: 1px;
  transition: 0.3s;
}

/* #topbar .social-links a {
  color: #fff;
  padding: 4px 12px;
  display: inline-block;
  line-height: 1px;
  transition: 0.3s;
} */


#topbar .social-links a:hover {
  color: #fff;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  background: #e8e8e8;
  z-index: 997;
  box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.06);
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  /*padding: 10px 0;*/
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #1c5c93;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 65px;
}

.scrolled-offset {
  margin-top: 70px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 

*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  font-family: "Open Sans", sans-serif;
  font-size: 15px;
  color: #212529;
  white-space: nowrap;
  transition: 0.3s;

}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #21573d;
}

.navbar ul li a:hover {
  background: #21573d;
  color: #fff !important;
  border-radius: 3px;

}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  /* left: 14px; */
  right: -7px;
  top: 100%;
  margin: 0;
  padding: 10px 0;
  z-index: 1000;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}


.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  text-transform: none;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #21573d;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  visibility: visible;
  display: block;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #1f3548;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(31, 53, 72, 0.9);
  transition: 0.3s;
  z-index: 998;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #1f3548;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #004E1E;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #21573d;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: calc(100vh - 110px);
  padding: 0;
  overflow: hidden;
  background: #e8e8e8;
}

#hero .carousel-item {
  width: 100%;
  height: calc(100vh - 110px);
  background-size: cover;
  background-position: top right;
  background-repeat: no-repeat;
  overflow: hidden;
}

#hero .carousel-item::before {
  content: "";
  background-color: rgba(13, 30, 45, 0.3);
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  overflow: hidden;
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  overflow: hidden;
}

#hero .carousel-content {
  text-align: center;
}

.btn-one {
  float: left;
}
.btn-two {
  float: right;
}
@media (max-width: 992px) {

  #hero,
  #hero .carousel-item {
    height: calc(100vh - 70px);
  }

  #hero .carousel-content.container {
    padding: 0 50px;
  }
}

#hero h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 60px;
  font-weight: 500;
}

#hero p {
  width: auto;
  animation-delay: 0.4s;
  color: #fff;
  font-size: 20px;
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  left: 0;
  transform: translate3d(0, 0, 0);
}

#hero .carousel-control-prev,
#hero .carousel-control-next {
  width: 10%;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 48px;
  line-height: 1;
  width: auto;
  height: auto;
}

#hero .carousel-indicators li {
  list-style-type: none;
  cursor: pointer;
}

#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 5px;
  transition: 0.5s;
  line-height: 1;
  /*margin: 10px;*/
  color: #212529;
  animation-delay: 0.8s;
  border: 0;
  background: #fff;
  /*position :relative;*/
}

#hero .btn-get-started:hover {
  background: #004E1E;
color: white;
}
span.ppdc {
  position: absolute;
  top: 53px;
  color: #fff;
  left: 35px;
  font-size: 18px;
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }

  .btn-one {
    float: unset;
  }
  .btn-two {
    float: unset;
  }

}

@media (max-width: 500px) {

  #hero,
  #hero .carousel-item {
    height: 100vh;
  }
  section {
    padding: 20px 0 !important;
    overflow: hidden;
  }

  .header-left{
    justify-content: center;
  }

 .mobile-header{
  display:none !important;
} 

.mobile-pic{
  width: 210px !important;
  height: 250px !important;
}

.mobile-text-justify{
  text-align: justify;
  text-justify: inter-word;
}

  .mobile-text-center{
    text-align: center !important;
    justify-content: center !important;
    padding: 0px !important;
  }

  .mobile-column-reverse{
    flex-direction: column-reverse;
  }

  .mobile-text-margin{
    margin-top: 30px;
    margin-bottom: 30px;
    padding-left:25px;
    padding-right: 25px;
  }
  .mobile-image{
    width:24rem;
    height: 20rem;
  }
  .mobile-button{
    font-size: 14px;
  }

  .mobile-heading{
    font-size: 20px;
  }
  .mobile-footer-img{
    width:275px;
  }
  .mobile-header-container{
    width:97%;
  }
}

@media (min-width: 1024px) {
  /* #hero p {
    width: 60%;
  } */
  #hero p {
    width: auto;
  }

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f5f9fc;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #212529;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background-color: #f5f9fc;
  min-height: 40px;
}

.breadcrumbs h2 {
  font-size: 24px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #6c757d;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }

  
}

/*--------------------------------------------------------------
# Chairman
--------------------------------------------------------------*/
.Chairman {
  padding-bottom: 30px;
  background: #7B6E6B;
}

.greetings {
  padding-bottom: 30px;
  background: #D5D5D5;
}


.Chairman .video-box img {
  padding: 15px 0;
}

.Chairman .section-title p {
  text-align: left;
  font-style: italic;
  color: #666;
}

.Chairman .about-content {
  padding: 30px;
}


@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}



/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts {
  padding-bottom: 30px;
}

.counts .count-box {
  box-shadow: 0px 0 16px rgba(0, 0, 0, 0.1);
  padding: 30px;
  background: #fff;
  margin-bottom: 30px;
}

.counts .count-box i {
  display: block;
  font-size: 64px;
  margin-bottom: 15px;
}

.counts .count-box span {
  font-size: 42px;
  display: block;
  font-weight: 700;
  color: #004E1E;
  margin-left: -28px;
}

.counts .count-box p {
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-size: 18px;
  color: #212529;
  font-weight: 600;
}
.count-k:before {
  content: "k";
  position: relative;
  left: 75px;
}

.count-plus:before {
  content: "+";
  position: relative;
  left: 100px;
}

/*--------------------------------------------------------------
# Our Team
--------------------------------------------------------------*/
.team {
  background: #fff;
  padding: 60px 0 30px 0;
}

.team .member {
  text-align: center;
  margin-bottom: 50px;
  position: relative;
  border: 1px solid #eee;

}

.team .member .pic {
  border-radius: 4px;
  overflow: hidden;
}

.team .member img {
  transition: all ease-in-out 0.4s;
}

.team .member:hover img {
  transform: scale(1.1);
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 16px;
  color: #212529;
  position: relative;
  padding: 10px 10px;
  height: 50px;
}



@media (max-width: 992px) {
  .team .member {
    margin-bottom: 100px;
  }
}



@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

#footer {
  /* background: #E1F0E5; */
  background: #fff;
  padding: 0 0 30px 0;
  color: #212529;
  font-size: 14px;
}

#footer .footer-top {
  /* background: #E1F0E5; */
  background: #fff;

  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #212529;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #004E1E;
  color: #FFF;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #212529;
  color: #fff;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #212529;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #212529;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #212529ff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #004E1E;
}

#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4;
}
.footer-logo {
  display: flex;
  align-content: space-between;
  justify-content: flex-start;
}
#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
}

#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #428bca;
  color: #fff;
  transition: 0.3s;
  border-radius: 4;
}

#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #5295ce;
}

#footer .copyright {
  text-align: left;
  padding-top: 30px;
}
#footer .copyright-2 {
  text-align: right;
  padding-top: 30px;
}

section.page-banner {
  padding-top: 0;
  position: relative;
}

.banner-img{

  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.centered{
  color: #fff;
  padding-top: 100px;
  padding-bottom: 100px;
  position: relative;
  z-index: 0;
  text-align: center;
  font-size: 60px;
}


.skills-list.mb-0 span {
    background: #DEE2E6;
    padding: 4px 7px;
    border-radius: 50px;
}
a.up-btn.up-btn-primary.up-btn-sm.up-btn-block-sm.mt-20.mb-15.mb-md-10.px-15 {
    background: #00491A;
    padding: 5px 13px;
    color: #fff !important;
    border-radius: 50px;
    text-decoration: none;
}
section.up-card.job-tile.vs-cursor-pointer.p-md-20.p-15.mb-md-20 {
     -webkit-box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
    padding: 35px 35px;
}

.up-feature-badge.up-skill-badge.mr-10 {
    background: #004D1D;
    width: 14%;
    border-radius: 51px;
    padding: 3px 0px 3px 11px;
    color: #fff !important;
}
.count-box .without-txt {
    margin-left: 0 !important;
}




.welcome-image
{
  width: 40rem;
  height: 25rem;
}


.image-container{
  position:relative;
  display: inline-block;

}
.image-container img{
  display: block;
  width:100%;
  height: auto;
}

.overlay-text{
  position:absolute;
  top: 25%;
  left:13%;
  /* transform: translate(-50%-50%); */
  color:#FFF;
  /* padding: 10px 20px; */
  align-items: center;
}
.overlay-text1{
  position:absolute;
  top: 45%;
  right: 15%;
  /* transform: translate(-50%-50%); */
  color:#FFF;
  /* padding: 10px 20px; */
  font-size:  17px;
  align-items: center;
}

/* .imgbox{
  padding:60px 0 30px 30px;
} */

.img{
  height:18rem;
  width: 16rem;
  border-radius: 1%;
}


/* *********************Media Queries********************** */

/* *********************Desktop & Laptops********************** */
@media (min-width: 1024px){}/* *********************End********************** */
/* *********************Tablets And Ipads********************** */
@media(min-width:768px) and (max-width:1023px){}/* *********************End********************** */
/* *********************Mobile Phones********************** */
@media (max-width: 767px){ 
 #header .logo img {
    max-height: 55px;
}
  
.copyright-2 {
    text-align: left !important;
}
    
}/* *********************End********************** */

/* @media (max-width: 767px) {
  .carousel-inner .carousel-item > div {
    display: none;
  }
  .carousel-inner .carousel-item > div:first-child {
    display: block;
  }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

/* medium and up screens */
/* @media (min-width: 768px) {

  .carousel-inner .carousel-item-end.active,
  .carousel-inner .carousel-item-next {
    transform: translateX(25%);
  }

  .carousel-inner .carousel-item-start.active, 
  .carousel-inner .carousel-item-prev {
    transform: translateX(-25%);
  }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start { 
  transform: translateX(0);
} */ */


#slideset1 {height: 25em; position: relative}
#slideset1 > * {visibility: hidden; position: absolute;
top: 0; left: 0; animation: 15s autoplay1 infinite}

@keyframes autoplay1 {
0% {visibility: visible}
33.33% {visibility: hidden}
}

#slideset1 > *:nth-child(1) {animation-delay: 0s}
#slideset1 > *:nth-child(2) {animation-delay: 3s}
#slideset1 > *:nth-child(3) {animation-delay: 6s}
#slideset1 > *:nth-child(4) {animation-delay: 9s}
#slideset1 > *:nth-child(5) {animation-delay: 12s}


/* Slider */

.carousel {
  min-width: 900px;
  max-width: 1236px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 48px;
  padding-right: 48px;
  position: relative;
}

.activator {
  display: none;
}

.controls {
  display: none;
  align-items: center;
  justify-content: space-between;
  position: absolute;
  top: 0;
  right: 16px;
  left: 16px;
  bottom: 0;
}

.controls:first-of-type {
  justify-content: flex-end;
}

.controls:last-of-type {
  justify-content: flex-start;
}

.control {
  cursor: pointer;
  background-color: #3d414a;
  color: #fff;
  border-radius: 100%;
  box-shadow: 0 2px 10px 0 rgb(33 34 36 / 30%);
  font-size: 40px;
  height: 48px;
  justify-content: center;
  transition: 0.3s all;
  width: 48px;
  z-index: 1;
  text-align: center;
  line-height: 40px;
}

.control:hover {
  transform: scale(1.05);
}

.activator:nth-of-type(1):checked ~ .controls:nth-of-type(1) {
  display: flex;
}

.activator:nth-of-type(1):checked ~ .screen .track {
  transform: translateX(0%);
}

.activator:nth-of-type(2):checked ~ .controls:nth-of-type(2) {
  display: flex;
}

/* .activator:nth-of-type(2):checked ~ .screen .track {
  transform: translateX(-100%);
} */

/* .activator:nth-of-type(3):checked ~ .controls:nth-of-type(3) {
  display: flex;
} */

/* .activator:nth-of-type(3):checked ~ .screen .track {
  transform: translateX(-200%);
} */
/* 
.activator:nth-of-type(4):checked ~ .controls:nth-of-type(4) {
  display: flex;
}

.activator:nth-of-type(4):checked ~ .screen .track {
  transform: translateX(-300%);
}

.activator:nth-of-type(5):checked ~ .controls:nth-of-type(5) {
  display: flex;
}

.activator:nth-of-type(5):checked ~ .screen .track {
  transform: translateX(-400%);
}

.activator:nth-of-type(6):checked ~ .controls:nth-of-type(6) {
  display: flex;
}

.activator:nth-of-type(6):checked ~ .screen .track {
  transform: translateX(-500%);
}

.activator:nth-of-type(7):checked ~ .controls:nth-of-type(7) {
  display: flex;
}

.activator:nth-of-type(7):checked ~ .screen .track {
  transform: translateX(-600%);
}

.activator:nth-of-type(8):checked ~ .controls:nth-of-type(8) {
  display: flex;
}

.activator:nth-of-type(8):checked ~ .screen .track {
  transform: translateX(-700%);
}

.activator:nth-of-type(9):checked ~ .controls:nth-of-type(9) {
  display: flex;
}

.activator:nth-of-type(9):checked ~ .screen .track {
  transform: translateX(-800%);
}

.activator:nth-of-type(10):checked ~ .controls:nth-of-type(10) {
  display: flex;
}

.activator:nth-of-type(10):checked ~ .screen .track {
  transform: translateX(-900%);
} */

.screen {
  overflow: hidden;
  margin-left: 10px;
  margin-right: 10px;
  /* padding-left: 30px;
  padding-right: 30px;  */
}

.track {
  font-size: 0;
  transition: all 0.3s ease 0s;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.item {
  display: inline-flex;
  padding-left: 16px;
  padding-right: 16px;
  vertical-align: top;
  white-space: normal;
}

.item--desktop-in-1 {
  width: 100%;
}

.item--desktop-in-2 {
  width: 50%;
}

.item--desktop-in-3 {
  width: 33.3333333333%;
}

.item--desktop-in-4 {
  width: 25%;
}

.item--desktop-in-5 {
  width: 20%;
}

.demo-container {
  display: flex;
  position: relative;
  top: 0;
  align-items: center;
  bottom: 0;
  left: 0;
  right: 0;
  
}

.demo-content {
  color: #fff;
  display: flex;
  font-family: Helvetica;
  font-weight: 100;
  align-items: center;
  justify-content: center;
  text-transform: uppercase;
  border-radius: 3px;
  font-size: 56px;
  height: 250px;
  width: 100%;
}

.item:nth-child(1) .demo-content {
  background-color: #216485;
}

.item:nth-child(2) .demo-content {
  background-color: #3692b6;
}

.item:nth-child(3) .demo-content {
  background-color: #6fccc9;
}

.item:nth-child(4) .demo-content {
  background-color: #a6e3cf;
}

.item:nth-child(5) .demo-content {
  background-color: #aff0be;
}

.item:nth-child(6) .demo-content {
  background-color: #527059;
}

/* .item:nth-child(7) .demo-content {
  background-color: #243127;
} */

@media screen and (max-width: 1023px) {
  .carousel {
    padding-left: 0;
    padding-right: 0;
  }

  .activator:nth-of-type(n):checked ~ .controls:nth-of-type(n) {
    display: none;
  }

  .activator:nth-of-type(n):checked ~ .screen .track {
    transform: none;
  }

  .screen {
    margin-left: 0;
    margin-right: 0;
  }

  .track {
    overflow-x: auto;
    width: auto;
    padding-left: 48px;
    padding-right: 48px;
  }

  .item--tablet-in-1 {
    width: 90%;
  }

  .item--tablet-in-2 {
    width: 45%;
  }

  .item--tablet-in-3 {
    width: 30%;
  }
}

@media screen and (max-width: 650px) {
  .track {
    padding-left: 0;
    padding-right: 0;
  }

  .item--mobile-in-1 {
    width: 90%;
    /* width: 45%; */
  }

  .item--mobile-in-2 {
    width: 45%;
  }

  .item--mobile-in-3 {
    width: 30%;
  }
}



.card{
  height: 280px;
}
.couting{
    gap:3px;
}
.alert.alert-danger {
    position: fixed;
    bottom: 0;
    right: 1px;
    display: flex;
    gap: 13px;
    align-items: center;
}
.alert.alert-danger p {
    margin: 0;
    cursor: pointer;
}
/* Slider End */
</style>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7B5BJ6C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>    
  @if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
        <p class='remove_notification'>X</p>
    </div>
@endif
    


    <!--Top Bar -->
    <section id="topbar" class="mobile-header" style="background-color:#21573d">
        <div class="row ">
            <div class="col-lg-6 col-md-6 d-flex" style="align-items: center">
                <div class="row pt-2" style="text-align: justify;">
                    <div class="col-lg-5 col-md-3"></div>
                    <div class="col-lg-7 col-md-9 d-flex">
                        <div class="contact-info d-flex align-items-center">
                            <i class="bx bx-world"></i> <a href="https://www.pec.org.pk/" style="text-decoration: none;">
                                www.pec.org.pk</a>
                            <i class="bx bx-phone" style="margin-left:20px"></i> <a href="tel:9251111111732"
                                style="text-decoration: none ">+9251111111732</a>
        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row pt-2">
                    <div class="col-lg-6 col-md-6"></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="social-links d-none d-md-block">
                            Follow us on : &nbsp;
                            <a href="https://www.facebook.com/PECOfficial/"  style="color: #fff" class="facebook" target="_blank"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/pecofficial?lang=en"  style="color: #fff" class="twitter" target="_blank"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk"
                            style="color: #fff" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>

        {{-- <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
       <i class="bx bx-world"></i> <a href="https://www.pec.org.pk/" style="text-decoration: none;"> www.pec.org.pk</a>
        <i class="bx bx-phone" style="margin-left:20px"></i> <a href="tel:9251111111732" style="text-decoration: none ">+92-51-111-111-732</a>
              
      </div>
      <div class="social-links d-none d-md-block">
        Follow us on
          <a href="https://www.facebook.com/PECOfficial/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://twitter.com/pecofficial?lang=en" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div> --}}
    </section>

    <!--  Header  -->
    <header id="header" class="d-flex align-items-center mobile-header-container" style="background-color: #e8e8e8">
        <div class="container d-flex align-items-center">

            <div class="logo container me-auto">
                <a href="#"><img src="https://egateway.pec.org.pk/public/assets_website/logo/pec_logo.png"></a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar" style="font-weight: 600">
                <ul>

                    <li style="padding: 0.8rem"><a class="nav-link  active" href="{{ route('index') }}">Home</a></li>
                    <li style="padding: 0.8rem"><a class="nav-link scrollto" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li style="padding: 0.8rem"><a class="nav-link scrollto"
                            href="{{ route('regulations') }}">Regulations</a></li>
                    <!--<li >-->
                    <!--{{-- <a class="nav-link scrollto" href="{{ route('projects') }}">Projects</a> --}}-->
                    <!--    </li>-->
                    <li style="padding: 0.8rem"><a class="nav-link scrollto" href="{{ route('contact') }}">Contact
                            Us</a></li>
                    <li style="padding: 0.8rem"><a class="nav-link scrollto"
                            href="{{ route('available_projects') }}">Projects</a></li>

                    @guest
                        <li class="dropdown" style="padding: 0.8rem"><a href="#"
                                style="text-decoration: none; background-color:#21573d; color:#fff; padding:0.5rem 1rem; border-radius:3px; box-shadow: 2px 2px 4px rgba(0, 0, 0.5, 0.5);"><span>Sign In</span>
                                <i class="bi bi-chevron-down"></i></a>

                            <ul>
                                <li><a href="{{ route('login') }}/client" style="text-decoration: none;">Client</a></li>
                                <li><a href="{{ route('login') }}/consultant"
                                        style="text-decoration: none;">Consultant</a></li>
                                            <li><a href="{{ route('login') }}/focalperson" style="text-decoration: none;">Focal Person</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">


                            <?php
                            $user_id = \Auth::User()->id;
                            $menuroles = \Auth::User()->menuroles;
                            ?>
                            <?php if($menuroles == 'client' || $menuroles == 'consultant'){?>


                            <div class="dropdown">
                                <button type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-pressed="true">
                                    <i class="fa-solid fa-circle-user " style="color:#21573d; font-size:25px;"></i>
                                </button>

                                <?php
                                $user_id = \Auth::User()->id;
                                $menuroles = \Auth::User()->menuroles;
                                ?>

                                <ul class="dropdown-menu dropdown-menu-end navbar-nav">
                                    <?php if($menuroles == 'consultant'){ ?>
                                    <li class="dropdown-item" style="width:158px;margin-top:-10px"><a
                                            href="{{url('consultant/profile')}}"
                                            style="text-decoration: none;">My Profile</a></li>
                                    <li class="dropdown-item" style="width:158px"><a
                                            href="{{url('consultant_dashboard')}}"
                                            style="text-decoration: none;">Dashboard</a></li>

                                    <?php  }elseif($menuroles == 'client'){   ?>
                                    <li class="dropdown-item"> <a
                                            href="{{url('client/profile')}}"
                                            style="text-decoration:none;">My Profile</a></li>
                                    <li class="dropdown-item"><a
                                            href="{{url('client_dashboard')}}"
                                            style="text-decoration: none;">Dashboard</a></li>
                                    <?php } ?>
                                    <li class="dropdown-item"><a class="nav-link " href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            style="text-decoration: none;">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                    </li>
                                </ul>
                            </div>


                            <?php }elseif($menuroles == 'user,admin'){?>

                            <div class="dropdown">
                                <button type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-pressed="true">
                                    <i class="fa-solid fa-circle-user " style="color:#21573d; font-size:25px;"></i>
                                </button>



                                <ul class="dropdown-menu dropdown-menu-end navbar-nav">
                                    <li class="dropdown-item" style="width:158px"><a
                                            href="{{url('dashboard')}}"
                                            style="padding:5px;color:black ;text-decoration: none;">Dashboard</a></li>
                                    <li class="dropdown-item" style="width:158px"><a class="nav-link " href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            style="text-decoration: none;">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: block;">
                                            @csrf
                                    </li>
                                </ul>
                            </div>

                            <?php }?>

                        </li>


                    @endguest

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>


            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" style="padding:0px">
        <div class="footer-top" style="padding-bottom: 0px">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 footer-info" style="padding-left:40px">

                        <div class="footer-logo">
                            <div><a href="{{ url('/') }}"><img class='mobile-footer-img'
                                        src="{{ asset('assets_new/img/pec-logo-new.png') }}"></a></div>    
                            <!-- Uncomment below if you prefer to use an image logo -->
                            <!-- <a href="index.html"><img src="{{ asset('assets_new/img/bwLogo.png') }}" alt="" class="img-fluid"></a>-->
                        </div>
                        <div class="social-links d-none d-md-block pt-3 pl-2">
                            {{-- <div><p style="font-size: 11px; padding-right:30px;" >The Pakistan Engineering Council is a statutory body, constituted under the PEC Act 1976 (V of 1976)
                                amended upto 1st December 2016,to regulate the engineering profession in the country
                                 such that it shall function as key driving force for achieving rapid and sustainable
                                 growth in all national, economic and social fields.</p></div> --}}
                            <span style="font-weight: 600">Follow us on : &nbsp;</span>
                            <a href="https://www.facebook.com/PECOfficial/"  style="color: #fff" class="facebook" target="_blank"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/pecofficial?lang=en"  style="color: #fff" class="twitter" target="_blank"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk"
                            style="color: #fff" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
                        </div>
                    </div>

                    <div class="col-md-4 footer-links">
                        <h4>
                            Quick link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('faq') }}"
                                    style="text-decoration: none;">FAQs</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://verification.pec.org.pk/l/cl/index.aspx"
                                    style="text-decoration: none;">Consultant Directory</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://pec.org.pk/wp-content/uploads/2023/02/pec-privacy-policy.pdf"
                                    style="text-decoration: none;">Privacy Policy</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('disclaimer') }}"
                                    style="text-decoration: none;">Disclaimer</a></li>

                        </ul>
                    </div>

                    <div class=" col-md-3 footer-links">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><i class="bx bx-world"></i> <a href="https://www.pec.org.pk/"
                                    style="text-decoration: none;"> www.pec.org.pk</a></li>
                            <li><i class="bx bx-phone"></i> <a href="tel:9251111111732"
                                    style="text-decoration: none;">(+92-51)111-111-732</a></li>

                        </ul>
                    </div>
                </div>
                <div class="row" style="display: inline">
                    <div class="col-md-4 footer-newsletter" style="display: inline-block">
                       

                        {{-- <div class="social-links">
                            <h4>Follow Us</h4>
                            <a href="https://www.facebook.com/PECOfficial/" class="facebook" target="_blank"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://twitter.com/pecofficial?lang=en" class="twitter" target="_blank"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://www.linkedin.com/company/pakistan-engineering-council?originalSubdomain=pk"
                                class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row" style="background-color: #222222; color:#fff">
                <div class="col-md-5">
                    <div class="copyright">
                        © Copyright 2023 Pakistan Engineering Council. All Rights Reserved.
                    </div>
                </div>

         

                <script>
                    // var counterContainer = document.querySelector(".website-counter");
                    // var resetButton = document.querySelector("#reset");
                    // var visitCount = localStorage.getItem("page_view");

                    // Check if page_view entry is present
                    // if (visitCount) {
                    //     visitCount = Number(visitCount) + 1;
                    //     localStorage.setItem("page_view", visitCount);
                    // } else {
                    //     visitCount = 1;
                    //     localStorage.setItem("page_view", 1);
                    // }
                    // counterContainer.innerHTML = visitCount;
                </script>



                <div class="col-md-5">
                    <div class="copyright-2">
                        Designed and Developed by <a href="https://a2zcreatorz.com/" target="_blank" style="color:turquoise">A2Z Creatorz</a>
                    </div>
                </div>

            </div>


        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    <script src="{{ asset('assets_new/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_new/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_new/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_new/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_new/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src='https://code.jquery.com/jquery-3.7.1.min.js'></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets_new/js/main.js') }}"></script>
    <script>
    $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});



// function myFunction() {
//   alert("Request has been send to PEC for Approval");
// }


// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.display === "block") {
//       panel.style.display = "none";
//     } else {
//       panel.style.display = "block";
//     }
//   });
// }

// $(document).ready(function() {
//     // Hide the additional photo uploads
//     var $additionals = $("#accordion,#myAccordion1, #accordion1, #accordion2,  #accordion3, #accordion4,  #accordion5, #accordion6, #accordion7,#accordion8,#accordion9,#accordion10,#accordion11,#accordion12,#accordion13,#accordion14");
//     $additionals.hide();
//     // Show more photo uploaders when we click
//     $("#add-more").on("click", function() {
//         $additionals.show();
//     });
// });



$(document).ready(function(){
    $('.otp-bt').on('click', function () {
        var pec = $('#pec').val();
      
        
        if (!pec) {
            return;
        }
        $.ajax(
            {
                type: "GET" ,
                url: "{{ url('/get_otp_email') }}" ,
                data: {
                    pec_no:pec
                    },
                dataType: 'JSON',
                success:function(res)
                {
                    console.log(res);
                   
                    $('.otp-div').slideDown();
                },
                 error: function(res) {
                    // console.log(XMLHttpRequest.responseJSON.message);
                    alert(res.responseJSON.message);
                }
            });
         });
});
    </script>


</body>

</html>
