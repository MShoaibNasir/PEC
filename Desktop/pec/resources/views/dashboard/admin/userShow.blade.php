@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> User {{ $user->name }}</div>
                    <div class="card-body">
                        <h4>First Name: {{ $user->fname }}</h4>
                        <h4>Last Name: {{ $user->lname }}</h4>
                        <h4>E-mail: {{ $user->email }}</h4>
                        <h4>Phone: {{ $user->contact_number }}</h4>
                        <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">{{ __('Return') }}</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection
