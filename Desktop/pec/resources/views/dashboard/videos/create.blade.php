@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Upload new Video</h4></div>
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
                <form method="POST" action="{{ route('videos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    Title
                                </th>
                                <td>
                                    <input class="form-control" name="title" id="title" type="text" value="{{ old('title') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Video File <small>(Max size: 10 mb)</small>
                                </th>
                                <td>
                                    <input name="uploaded_video" type="file" accept="video/mp4,video/x-m4v,video/*" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a class="btn btn-primary" href="{{ route('videos.index') }}">Return</a>
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
