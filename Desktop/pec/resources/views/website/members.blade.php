@extends('website.layouts.app')
@section('content')
<div class="page-banner ">
  <img class="d-block w-100" src="{{ asset('assets_website') }}/img/pec.jpg" alt="banner">
  <div class="container">
    <h2 class="display-3 text-center">Members</h2>
  </div>
</div>
<!-- PEC Members Start -->
 <section class="service-wrapper py-4">
    <div class="container-fluid">
        <h2 class="h2 text-center col-12  semi-bold-600">PEC Members</h2>
        <div class="service-header col-2 col-lg-3 text-end light-300"></div>
        <div class="service-heading col-10 col-lg-9 text-start float-end light-300"></div>
    </div>
    <div class="container mx-auto row row-cols-5 justify-content-center">
        <div class="col-3 my-3">
            <div class="card">
                <img src="{{ asset('assets_website') }}/img/S3.jpg" class="card-img-top" alt="Avatar Image">
                <div class="card-body">
                    <h5 class="card-title">Najeeb Haroon</h5>
                    <small>@Chairman</small>
                </div>
            </div>
        </div>
        <div class="col-3 my-3">
            <div class="card">
                <img src="{{ asset('assets_website') }}/img/S1.jpg" class="card-img-top" alt="Avatar Image">
                <div class="card-body">
                    <h5 class="card-title">Nasir Mahmood Khan</h5>
                    <small>@Registrar</small>
                </div>
            </div>
        </div>
        <div class="col-3 my-3">
            <div class="card">
                <img src="{{ asset('assets_website') }}/img/avatar.png" class="card-img-top" alt="Avatar Image">
                <div class="card-body">
                    <h5 class="card-title">Mir Masood Rashid</h5>
                    <small>@Convener PPDC </small>
                </div>
            </div>
        </div>
        <div class="col-3 my-3">
            <div class="card">
                <img src="{{ asset('assets_website') }}/img/S2.jpg" class="card-img-top" alt="Avatar Image">
                <div class="card-body">
                    <h5 class="card-title">Naushin Irfan</h5>
                    <small>@Project Lead </small>
                </div>
            </div>
        </div>



        </div>
    </div>
</section>
<!-- PEC Members ends -->
@endsection
