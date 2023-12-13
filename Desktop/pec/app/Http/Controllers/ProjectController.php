<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Project;
use App\Models\Consultant;
use App\Models\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $user_id = Auth::user()->id;
        if($user_id == 1)
        {
            $projects = Project::where('status',1)->orderBy('id','DESC')->get();
            return view('dashboard.projects.admin_index', compact('projects'));
            
        }else
        {
            $projects = Project::where('status',1)->orderBy('id','DESC')->get();
            $consultants_id = Auth::user()->id;
            $project_requests = ProjectRequest::where('consultant_id','=',$consultants_id)->get();
        
            return view('dashboard.projects.index', compact('projects','project_requests','consultants_id'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("project");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project_title' => ' required: true|stringt',
            'project_disciplines' => 'required|string',   // required and email format validation
            'engineering' =>'required|string', // required and number field validation
            'allied' => 'required|string',
            'summary' => 'required|string|max:1000',
            'country_assignment' => 'required|string',
            'technical_queries' => 'required|string',
            'specific_experience' => 'required|string',
            'expert' => 'required|string',
            'schedule' => 'required|string',
            // 'no_of_days'  => 'required',
            'total_inputs' => 'required|string',
            'contract' => 'required|string',
            'consultant_services' => 'required|string',
            'estimated_date' => 'required|string',
            'title_bar'=>  'required|mimes:pdf|max:25000',
            'term_condition' => 'required|string',

            'technical_proposal' => 'required|string',
            'technical_qualification'=> 'required|string',
            'upload_experts' => 'required|string',
            'prequalification' => 'required|string',
            'documents' =>   'required|mimes:pdf|max:25000',

            // 'pec_certificate' => 'sometimes|files|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'commercial'=> 'required|string',



        ]); // create the validations     
       
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return redirect()->back()->withInput()->withErrors($validator);
            // validation failed redirect back to form
            if($request->file('title_bar'))
            {
                $file = $request->file('title_bar');
                $filename = time() . '.' . $request->file('title_bar')->extension();
                $filePath = public_path() . '/public/files/uploads/';
                $file->move($filePath, $filename);
            }




            if (request()->hasFile('documents')){
                request()->validate([
                    'documents' => 'required|mimes:pdf|max:25000',
                ]);

            }


        } else {
            //validations are passed, save new user in database
            $Project = new Project;
            if ($request->hasfile('title_bar')) {
                $file = $request->file('title_bar');
                $name = $file->getClientOriginalName();
                $path = "filename.ext";
                $filename  = time() . '.' . $name;
                $file->move(public_path('files/clients/'), $filename, $path);
                $Project->title_bar = $filename;
            }
            
               if ($request->hasfile('documents')) {
                $file = $request->file('documents');
                $name = $file->getClientOriginalName();
                $path = "filename.ext";
                $filename  = time() . '.' . $name;
                $file->move(public_path('files/clients/'), $filename, $path);
                $Project->documents = $filename;
            }
            $Project->project_title = $request->project_title;
            $Project->project_disciplines = $request->project_disciplines;
            $Project->engineering = $request->engineering;
            $Project->allied = $request->allied;
            $Project->summary = $request->summary;
            $Project->country_assignment = $request->country_assignment;
            $Project->technical_queries = $request->technical_queries;
            $Project->specific_experience = $request->specific_experience;
            $Project->expert= $request->expert;
            $Project->schedule= $request->schedule;
            // $Project->no_of_days= $request->no_of_days;
            $Project->total_inputs = $request->total_inputs;
            $Project->contract = $request->contract;
            $Project->consultant_services = $request->consultant_services;
            $Project->estimated_date = $request->estimated_date;
            $Project->term_condition = $request->term_condition;
            // $Project->status = $request->status;
            $Project->technical_proposal = $request->technical_proposal;
            $Project->technical_qualification= $request->technical_qualification;
            $Project->user_id = Auth::user()->id;
            $Project->upload_experts= $request->upload_experts;
            $Project->prequalification= $request->prequalification;
           
            $Project->commercial= $request->commercial;
            $Project->save();
            
         

             Mail::send('project_upload_email', [], function ($message) use ($consultantsEmails) {
              $message->to([])
              ->bcc($consultantsEmails)
              ->subject('This is a test e-mail');

              $message->cc('maham@a2zcreatorz.com');
            });
          
            return redirect("/client/post_project")->with('success', 'Thank you ! Your Form Successfully have been sent !');
          
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        DB::table('projects')->where('id',$project->id)->delete();
        return redirect("/client/publicproject")->with('message', 'Project has been deleted.');
          
    }
    
    
    public function getProjectsDetails($id)
    {
     $project_detail = DB::table('projects')
    ->leftjoin('project_disciplines', 'project_disciplines.id', '=', 'projects.project_disciplines')
    ->select('*', 'projects.id as projects_id')
    ->where('projects.id', '=', $id)
    ->first();
    //  Project::where('projects.id',$id)->first(); 
     $project_documents = DB::table('project_documents')->where('project_id',$project_detail->id)->get(); //dd($project_documents);
     
     return view('dashboard.projects.projects_detail',compact('project_detail','project_documents'));  
     
    }

}
