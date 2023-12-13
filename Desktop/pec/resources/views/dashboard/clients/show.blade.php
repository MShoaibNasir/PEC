@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Details</h4></div>
            <div class="card-body">
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Technical Proposal</th>
                            <th>Commercial Proposal</th>
                            <th>Sent at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $project_request->proposal_description }}
                            </td>
                            <td>
                                {{ $project_request->technical_proposal }}
                            </td>
                            <td>
                                {{ $project_request->commercial_proposal }}
                            </td>
                            <td>
                                {{ $project_request->created_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('applied_projects') }}">Return</a>
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
