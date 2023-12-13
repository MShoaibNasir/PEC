@extends('website.layouts.app')
@section('content')
    <section>
<div class="page-banner ">
  <img class="d-block w-100" src="{{ asset('assets_website') }}/img/pec.jpg" alt="banner">
  <div class="container">
    <h2 class="display-3 text-center">Regulations</h2>
  </div>
</div>
<div class="container">
    <div class="text-center mt-5"><h3>Regulations</h3></div>
    <div class="row my-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">

       <table class="table table-striped">
  <tr>
    <th>#S.No</th>
    <th>Document Title </th>
    <th>PDF</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Title will be provided by PEC</td>
    <td><a href="{{ asset('assets_website') }}/img/Regulations1.pdf" target="_blank"><img src="{{ asset('assets_website') }}/img/pdf_icon.png" style="height: 20px;width: 20px;" /></a></td>
  </tr>
  <tr>
  <!--  <td>2</td>-->
  <!--  <td>Title will be provided by PEC</td>-->
  <!--  <td><img src="{{ asset('assets_website') }}/img/pdf_icon.png" style="height: 20px;width: 20px;" /></td>-->
  <!--</tr>-->
  <!--<tr>-->
  <!--  <td>3</td>-->
  <!--  <td>Title will be provided by PEC</td>-->
  <!--  <td><img src="{{ asset('assets_website') }}/img/pdf_icon.png" style="height: 20px;width: 20px;" /></td>-->
  <!--</tr>-->

</table>


        </div>
    </div>
</div>


    </section>

    <!-- accordion-Section -->
@endsection
