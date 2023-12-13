@extends('dashboard.base') 

@section('content')

<div class="container-fluid">
    <div class="fade-in">
<div class="row">
 <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase text-center"><b>Consultant Details</b></h6>

                    <br>
                    <table class="table table-stripped table-hover">
                      <tbody>
                      <tr style="height:50px;">
                          <td style="font-weight:bold; font-size:15px">
                              Consultant Name:
                          </td>
                          
                          <td>
                             {{$consultant_info->fname.' '.$consultant_info->lname}}
                          </td>
                          
                      </tr>
                      
                      <tr style="height:50px;">
                          <td style="font-weight:bold; font-size:15px">
                              Email:
                          </td>
                          
                          <td>
                             {{$consultant_info->email1}}
                          </td>
                          
                      </tr>
                      
                      <tr>
                          <td style="font-weight:bold; font-size:15px">
                             Pec No:
                          </td>
                          
                          <td>
                             {{$consultant_info->pec_no}}
                          </td>
                          
                      </tr>
                      
                      
                      </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</div>
</div>
</div>



@endsection
