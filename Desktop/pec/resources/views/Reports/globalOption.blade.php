@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Global Options</h4></div>
            <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <form method="POST" id="myForm" action="">
                    @csrf
                    
                    <table class="table table-bordered datatable">
                        <tbody>
                         @foreach($gl as $gls)   
                     <tr>
                                <th>
                                   Total seats
                                </th>
                                <td>
                                    <input type="text"  name="total_seats" autocomplete="off" placeholder="total seats" 
                                    value="{{ $gls->total_seats }}" required class="form-control ">
                               </td>
                            </tr>
                            
                            <tr>
                              <th>Seat Price</th>
                              <td>
                                <input type="number" placeholder="Total Amount" class="form-control"
                                 name="seat_price" value="{{ $gls->seat_price }}" required>
                             </td>
                            </tr>
                           @endforeach 
                        </tbody>
                    </table>
                    <div class="col text-center">
                    <button class="btn btn-success btn-lg" type="submit" value="save">Update Changes</button>
                    
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')
<script type="text/javascript">
  /*--------Reset form----------*/
  
  /*-----------------------XXXXXXXXXXX---------------------*/

</script>
@endsection
