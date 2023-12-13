@extends('dashboard.base')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Past projects</h4>
                        <div class="text-right" style="margin-top: -31px;">
                            <a class="btn btn-success text-white" href="{{url('add/past_projects')}}">Add</a>
                        </div>
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
                               
                                    <tr>
                                   
                                        <td>
                                           
                                        </td>
                                        <td>
                                            
                                            
                                    <span class="text-success">Project Awarded</span>

                           
                                        </td>
                                        <td>
                                           
                                        </td>
                                        <td>
                                          
                                        </td>
                                        <td>
                                          
                                        </td>
                                        <td>
                                           
                                        </td>
                                    </tr>
                              
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
