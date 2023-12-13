@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Edit Customer</h4></div>
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
                <form method="POST" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $customer->id }}"/>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    <input class="form-control" name="name" type="text" value="{{ old('text', $customer->name) }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email
                                </th>
                                <td>
                                    <input class="form-control" name="email" type="email" value="{{ old('email', $customer->email) }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Phone
                                </th>
                                <td>
                                    <input class="form-control" name="phone" type="text" value="{{ old('phone', $customer->phone) }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Gender
                                </th>
                                <td>
                                    <select class="form-control" name="gender">
                                        <option {{ old('gender', $customer->gender) == 'Male'? 'selected' : '' }}>Male</option>
                                        <option {{ old('gender', $customer->gender) == 'Female'? 'selected' : '' }}>Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Date
                                </th>
                                <td>
                                    <input class="form-control" name="date_of_birth" type="date">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Address
                                </th>
                                <td>
                                    <textarea class="form-control" name="address" cols="30" rows="5"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a class="btn btn-primary" href="{{ route('customers.index') }}">Return</a>
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
