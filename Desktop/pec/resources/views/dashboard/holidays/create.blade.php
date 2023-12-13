@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Create new Holiday</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <form method="POST" action="{{ route('holidays.store') }}">
                    @csrf
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <td>
                                    <input class="form-control" name="date" id="date" type="date" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Title
                                </th>
                                <td>
                                    <input class="form-control" name="title" id="title" type="text" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Details (If any)
                                </th>
                                <td>
                                    <textarea class="form-control" name="details" id="details" cols="30" rows="5"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a class="btn btn-primary" href="{{ route('holidays.index') }}">Return</a>
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

@endsection
