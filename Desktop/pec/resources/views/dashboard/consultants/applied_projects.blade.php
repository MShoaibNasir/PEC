@extends('dashboard.base')
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Applied Projects</h4>
                    </div>
                    <div class="card-body">
                
                        <br>
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Discipline</th>
                                    <th>Created at</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($project_requests as $project_request)
                                @if(isset($project_request->project))
                                    <?php $clr = ($project_request->request_status == 2) ? '#f16d5d' : '#ffffff' ; ?>
                                    <tr  
                                   @if(!empty($project_request->project->awarded_consultant_id))     
                                style="background-color: #d9f1d9" 
                             @endif 
                                    >
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $project_request->project->project_title }}
                                             @if(!empty($project_request->project->awarded_consultant_id))    
                                    <span class="text-success">Project Awarded</span>

                                @endif
                                        </td>
                                        <td>
                                            {{ $project_request->project->project_disciplines }}
                                        </td>
                                        <td>
                                            {{ $project_request->created_at }}
                                        </td>
                                        <td>
                                            <a href="{{ route('project_requests.show', $project_request->id ) }}"
                                                class="btn btn-primary">View</a>
                                        </td>
                                        <td>
                                            <?php $user_id = \Crypt::encryptString($project_request->project_id);?>
                                            <a href="{{ route('getchatbox', $user_id ) }}"
                                                class="btn btn-success">Chat</a>
                                        </td>
                                    </tr>
                                @endif
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
            $('.datatable').DataTable();
        } );
</script>
@endsection
