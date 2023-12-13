@extends('website.layouts.app') 
@section('content')


<section class="page-banner ">
        <img class="d-block w-100 banner-img" src="{{ asset('assets_website') }}/img/pec.jpg" alt="banner">
        <div class="container">
            <div class="centered">Projects</div>
        </div>
    </section>


<div class="container">

	<div class="text-center mt-5">

		<h2>Search Criteria</h2> </div>
	<form action="{{route('available_projects')}}" method="GET">
	@csrf		
	<div class="row col-md-12">

		<div class="col-md-3">

			<div class="form-group">
			    <label>By Title</label>
			    <input type="text" class="form-control" name="title" placeholder="Search by title..." value="{{$param['title']}}">
			   
			</div>

		</div>

		<div class="col-md-2">

			<div class="form-group">
			    <label>By Skill</label>
			    <input type="text" class="form-control" name="skill" placeholder="Search by skill..." value="{{$param['skill']}}">
			   
			</div>

		</div>

		<div class="col-md-2">

			<div class="form-group">
			    <label>By Discipline</label>
			    <input type="text" class="form-control" name="discipline" placeholder="Search by discipline..." value="{{$param['discipline']}}">
			   
			</div>

		</div>
		<div class="col-md-3">

			<div class="form-group">
			    <label>By country</label>
			    <select name="country" class="form-control">
				    <option value="" >-- Select Country --</option>
				    @foreach($countries as $country)
				    	<option value="{{$country->nicename}}"
				    	@if($param['country'] == $country->nicename)
				    			selected='true'				
				    	@endif		
				    			
				    	>{{$country->nicename}}</option>
				    @endforeach 
			   	</select>	
			</div>

		</div>
		<div class="col-md-2 mt-4">
			<button class="btn btn-success text-white" type="submit">Filter</button>
		</div>	
	</div>
	</form>	
</div>








<div class="container my-5">

	<div class="row">

	@if(!empty($projects))

		@if(!$projects->isEmpty())
		
	

			@foreach($projects as $row)



				<div class="col-lg-6 box-123 mb-3 ">

					<section data-qa="job-tile" class="up-card job-tile vs-cursor-pointer p-md-20 p-15 mb-md-20 ">

						<div class="job-tile-content">
						    
						    <style>
							    .one-text {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1; /* Set the desired number of lines */
    line-clamp: 1;
}
.custom-tooltip {
  --bs-tooltip-bg: var(--bs-primary);
}
	</style>
	

							<div class="mb-20">

								<div class="row">
									<div class="col-lg-9 col-md-9">
										<p class="">
											<a   href="{{url('login/consultant') }}" data-qa="job-title" data-block-modal="true" 
											data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" title="{{$row->project_title}} "
											class=" display-u2u job-title h5 mb-10 " style="text-decoration: none;color:#004d1d">{{$row->project_title}}</a>
										 </p>
									</div>
									<div class="col-lg-3 col-md-3">
										<div class="btn" style="background-color:#D9E4DD; color:#004d1d;border-radius:20px; border-color:#004d1d; width:90px; height:35px; align-items:center"> Active </div>

									</div>
								</div>

							    	<div class="row" style="margin-top: 40px; font-size:14px">
										<div class="col-4">
											<div class="row">
												<p style="color:#004d1d; font-weight:500">Location of Project</p>
											</div>
											<div class="row">
												<p>{{$row->country_assignment}}</p>
											</div>
										</div>
										<div class="col-4">
											<div class="row">
												<p style="color:#004d1d; font-weight:500">Expert Level</p>
											</div>
											<div class="row">
												<p>{{$row->expert}}</p>
											</div>
										</div>
										<div class="col-4">
											<div class="row">
												<p style="color:#004d1d; font-weight:500">Consulting Budget</p>
											</div>
											<div class="row">
												<p>{{$row->consultant_services}}</p>
											</div>
										</div>
									</div>


									<div class="row" style="margin-top: 20px; font-size:14px">
										<div class="col-4">
											<div class="row">
												<p style="color:#004d1d; font-weight:500">Posted Date</p>
											</div>
											<div class="row">
												<p>{{$row->created_at}}</p>
											</div>
										</div>
										<div class="col-4">
											<div class="row">
												<p style="color:#004d1d; font-weight:500">Updated Date</p>
											</div>
											<div class="row">
												<p>{{$row->updated_at}}</p>
											</div>
										</div>
										<div class="col-4">
											<div class="row">
												<p style="color:#004d1d; font-weight:500">Estimated Date</p>
											</div>
											<div class="row">
												<p>{{$row->estimated_date}}</p>
											</div>
										</div>
									</div>


								<?php 

									$difference = strtotime($row->updated_at) - strtotime(date("Y-m-d H:i:s"));

									$years = abs(floor($difference / 31536000));

									$days = abs(floor(($difference-($years * 31536000))/86400));

									$hours = abs(floor(($difference-($years * 31536000)-($days * 86400))/3600));

									$mins = abs(floor(($difference-($years * 31536000)-($days * 86400)-($hours * 3600))/60));#floor($difference / 60);

								



								?>
<hr>
<style>
							    .clamp-text {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 3; /* Set the desired number of lines */
    line-clamp: 3;
}
							</style>
							<p style="font-size:14px; text-align:justify" data-qa="job-description" class="mt-0 pt-1 mb-20 job-description clamp-text">{{$row->summary}}</p>

						</div>

						<br>

						{{-- <div class="skills-list mb-0"> <span data-qa="ontology-skill" class="up-skill-badge disabled">{{$row->project_disciplines}}</span> --}}

							@php
							
							$project_descipline=App\Models\ProjectDiscipline::where('id',$row->project_disciplines)->first();
							@endphp

							<div class="skills-list mb-0" style="padding-left:10px; background-color:#D9E4DD; color:#004d1d; border:1px solid #004d1d; margin:0px 5px">
								 <span style="background-color: transparent; padding:0px;" data-qa="ontology-skill" class="up-skill-badge disabled">{{$project_descipline->project_category}}</span>
								
						</div> 
						<br>
						<div class="row" style="margin:5px">
						    @if(Auth::check() && Auth::user()->menuroles=='consultant')
						    @php
						    $project_detail_id=App\Models\Project::where('project_title',$row->project_title)->first();
						    @endphp
							<a class="" style="border-radius: 0%; color:#fff; background-color:#004d1d;height:40px; text-align:center;
							padding:6px; font-weight:600; font-size:16px;" target="_blank" href="{{route('consultant_project.detail',$project_detail_id->id)}}">View Detail</a>
							@else
							<a class="" style="border-radius: 0%; color:#fff; background-color:#004d1d;height:40px; text-align:center;
							padding:6px; font-weight:600; font-size:16px;" target="_blank" href="{{url('login/consultant')}}">View Detail</a>
							@endif
							
						</div>


						<div role="status" aria-busy="false" aria-label="Section is loading" class="up-loader-overlay">

							<div class="up-icon lg"></div>

						</div>

					</section>

				</div>

			@endforeach
			<div align="center">{{ $projects->links() }}</div>
		@else
				<p align="center"><strong>Top Consultants Aboard! Don't miss your chance, Visit Daily!</strong></p>			
		@endif	
			
	@else
		<p>No project(s) found!!!</p>	
	@endif	

	</div>

</div> @endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>