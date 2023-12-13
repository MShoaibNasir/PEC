@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Edit Timeslot</h4></div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
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
                <form method="POST" action="{{ route('timeslots.update', $timeslot->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $timeslot->id }}"/>
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    Timeslot Range
                                </th>
                                <td>
                                    <input class="form-control" name="time_start" type="time" value="{{ old('time_start', $timeslot->time_start) }}" required>
                                </td>
                                <td>
                                    <input class="form-control" name="time_end" type="time" value="{{ old('time_end', $timeslot->time_end) }}" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a class="btn btn-primary" href="{{ route('timeslots.index') }}">Return</a>
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
