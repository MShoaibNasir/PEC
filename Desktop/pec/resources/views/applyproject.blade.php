@extends('dashboard.authBase')
@section('content')

<style>
    .error {
        color: #000;
    }

    * {
        box-sizing: border-box;
        z-index: 9999999% !important;
    }

    span {
        color: red;
    }

    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 300px;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
        z-index: 999999%;
    }
</style>
<!-- <div class="container"> -->

<!-- main app container -->
<div class="readersack">
    <div class="container"
        style="background-color:#F8F8F8; height:100%; color: #000; box-shadow: 20px 20px 50px 15px grey; margin-bottom: 30px; margin-top: 50px; ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="../images/pec_logo.png" style="margin-top: 40px; width: 100%; , margin-left: 10px;">
                <h3 style="margin-top: 40px; margin-bottom: 30px; text-align: center; "> Apply For a Project </h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" id="handleAjax" action="{{route('posts.store')}}" name="postform"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Summary</label>
                        <textarea type="text" name="summary" placeholder="Summary" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Client Name</label>
                        <input type="text" name="client_name" placeholder="Client" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Proposal Description</label>
                        <textarea type="text" name="proposal_description" class="form-control"></textarea>
                    </div>
                    <div class="form-group"> <label>Technical Proposal</label> <select id='selUser'
                            name="technical_proposal" class="form-control">
                            <option value="Select">Select Technical Proposal</option>
                            <option value="PEC Gateway format">PEC Gateway format</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style=" margin-left: 10px;">Commercial Proposal</label>
                        <input type="text" name="commercial_proposal" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Cover Letter</label>
                        <div class="custom-file mb-3">
                            <input type="file" id="test" class="custom-file-input" name="cover_letter"
                                accept="pdf/doc" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn  "
                            style="margin-top: 20px; background-color: #004E1E; color: #fff; margin-bottom: 30px;">Apply
                            send bit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <script>
        // Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
    </script>
    @endsection
