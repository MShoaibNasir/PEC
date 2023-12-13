@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Create New User</h4></div>
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
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <table class="table table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                   First Name
                                </th>
                                <td>
                                    <input class="form-control" name="fname" type="text" value="{{ old('fname') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                  Last Name
                                </th>
                                <td>
                                    <input class="form-control" name="lname" type="text" value="{{ old('lname') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                   Contact
                                </th>
                                <td>
                                    <input class="form-control" name="contact_number" type="number" value="{{ old('contact_number') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                   Email
                                </th>
                                <td>
                                    <input class="form-control" name="email" type="email" value="{{ old('email') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                   Role
                                </th>
                                <td>
                                    <select class="form-control" name="role">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}" {{  old('role') == $role->name? "selected":""  }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                   Password
                                </th>
                                <td>
                                    <input class="form-control" name="password" type="text" value="{{ old('password') }}" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a class="btn btn-primary" href="{{ route('users.index') }}">Return</a>
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
