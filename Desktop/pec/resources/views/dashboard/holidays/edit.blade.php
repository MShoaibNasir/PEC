@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Edit Holiday</h4></div>
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
                <form method="POST" action="{{ route('holidays.update', $holiday->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $holiday->id }}"/>
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <td>
                                    <input class="form-control" name="date" id="date" type="date"  value="{{ old('date', $holiday->date) }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Title
                                </th>
                                <td>
                                    <input class="form-control" name="title" id="title" type="text" value="{{ old('title', $holiday->title ) }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Details (If any)
                                </th>
                                <td>
                                    <textarea class="form-control" name="details" id="details" cols="30" rows="5">{{ old('details', $holiday->details ) }}</textarea>
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
