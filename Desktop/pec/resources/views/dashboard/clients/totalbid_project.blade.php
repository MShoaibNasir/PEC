@extends('dashboard.base')

@section('css')
<style>
    .price_project{
        position: absolute;
        right: 15px;
        top: 15px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-sm-12">
               <div class="table-responsive">
                <table class="table table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Title</th>
                            <th>Contract</th>
                            
                           
                            <th>Bid By</th>
                            <th>Bidding_amount</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                                
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $project->project_title }}</td>
                                <td>Contract - {{ $project->contract }} , Posted {{ Carbon\Carbon::parse($project->created_at)->diffForHumans()}}</td>
                                <td>{{ $project->fname.' '.$project->lname }}</td>
                                <td>{{ (!empty($project->bidding_amount) ) ? number_format($project->bidding_amount,2) : '---' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
      </div>
        </div>
        
    </div>
</div>
</div>

{{-- Apply Project Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apply Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST"  action="{{route('project_requests.store')}}"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="project_id" id="project_id">
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Proposal Description</label>
                        <textarea type="text" name="proposal_description" class="form-control" required>{{ old('proposal_description') }}</textarea>
                    </div>
                    <div class="form-group"> <label>Technical Proposal</label>
                        <select id='selUser' name="technical_proposal" class="form-control" required>
                            <option value="">Select Technical Proposal</option>
                            <option value="PEC Gateway format" {{ old('technical_proposal') == "PEC Gateway format" ?? "selected" }}>PEC Gateway format</option>
                            <option value="Other" {{ old('technical_proposal') == "PEC Gateway format" ?? "selected" }}>Other</option>
                        </select>
                    </div>
                      <div class="form-group">
                        <label>upload technical proposal (only pdf allowed) (Optional)</label>
                        <div class="custom-file mb-3">
                            <input type="file" id="test" class="custom-file-input" name="uplaod_technical_proposal"  accept="application/pdf" required/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                       
                    </div>
                    
                       <div class="form-group">
                        <label>upload Financial Statement (only pdf allowed) (Optional)</label>
                        <div class="custom-file mb-3">
                            <input type="file" id="test" class="custom-file-input" name="financial_statement"  accept="application/pdf" required/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                      <div class="form-group">
                        <label style=" margin-left: 10px;">Bidding Amount</label>
                        <input type="text" name="bidding_amount" class="form-control" value="{{ old('bidding_amount') }}"  required />
                    </div>
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Commercial Proposal</label>
                        <input type="text" name="commercial_proposal" value="{{ old('commercial_proposal') }}" class="form-control" required/>
                    </div>
                    
                   <div class="form-group">
                        <label style=" margin-left: 10px;">Cover Letter</label>
                        <textarea type="text" name="cover_letter" class="form-control" required>{{ old('cover_letter') }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Apply Project Modal End --}}

@endsection

@section('javascript')
<script>
    $(document).ready( function () {
            var exampleModal = document.getElementById('exampleModal')
            exampleModal.addEventListener('show.coreui.modal', function (event) {
            var button = event.relatedTarget
            var project_id = button.getAttribute('data-id')
            var modalBodyInput = exampleModal.querySelector('.modal-body #project_id')
            modalBodyInput.value = project_id

            var project_title = button.getAttribute('data-title')
            var modalTitle = exampleModal.querySelector('.modal-title')
            modalTitle.textContent = project_title + ' (Project Proposal)'
            })
    } );
    
      $(document).ready( function () {
            $('.datatable').DataTable();
        } );
     $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  

</script>
@endsection
