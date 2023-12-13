@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Videos</h4></div>
            <div class="card-body">
                <div class="row">
                    <a class="btn btn-lg btn-primary ml-3" href="{{ route('videos.create') }}">Add New Video</a>
                </div>
                <br>
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $video->title }}
                                </td>
                                <td>
                                    {{ $video->status? 'Active':'--' }}
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ request()->getSchemeAndHttpHost().'/'.$video->path }}" target="_blank" rel="noopener noreferrer">
                                    View
                                    </a>
                                </td>
                                <td>
                                <form action="{{ route('videos.destroy', $video->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger delete-bt">Delete</button>
                                </form>
                                </td>
                                <td>
                                    @if (!$video->status)
                                    <a href="{{ route('activate_video', $video->id ) }}" class="btn btn-primary">Activate</a>
                                    @else
                                    <a class="btn btn-light disabled">Activate</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
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

@section('javascript')
    <script>
        $(document).ready( function () {
            $('.datatable').DataTable({
                "order" : [[0, "desc"]]
            });
        } );
    </script>
@endsection
