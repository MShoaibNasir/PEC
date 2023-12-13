@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Edit') }} - {{ $user->fname.' '.$user->lname }}</div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="/users/{{ $user->id }}">
                            @csrf
                            @method('PUT')
                            <table class="table table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                        First Name
                                        </th>
                                        <td>
                                            <input class="form-control" name="fname" type="text" value="{{ old('fname', $user->fname) }}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        Last Name
                                        </th>
                                        <td>
                                            <input class="form-control" name="lname" type="text" value="{{ old('lname', $user->lname) }}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        Contact
                                        </th>
                                        <td>
                                            <input class="form-control" name="contact_number" type="number" value="{{ old('contact_number', $user->contact_number) }}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        Email
                                        </th>
                                        <td>
                                            <input class="form-control" name="email" type="email" value="{{ old('email', $user->email) }}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        New Password
                                        </th>
                                        <td>
                                            <input class="form-control" name="new_password" type="text" value="{{ old('new_password') }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-success" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('users.index') }}" class="btn btn-primary">{{ __('Return') }}</a>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection
