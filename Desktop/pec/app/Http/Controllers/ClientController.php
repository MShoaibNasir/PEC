<?php

namespace App\Http\Controllers;

use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Models\Client as ClientMDL;
use App\Models\User;
use App\Models\AlliedDiscipline;
use App\Models\ProjectDiscipline;
use App\Models\Country;
use App\Models\Project;
use App\Models\Consultant;
use App\Models\ProjectRequest;
use App\Models\ClientOTP;
use Twilio\Rest\Client;
use App\Models\ConsultantService;
use App\Models\ConsultantSpecialization;
use App\Models\ConsultantDetail;
use Illuminate\Support\Facades\Crypt;
use DateTime;
use Session;
use DateInterval;
use DB;
use Mail;
use Hash;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $clients = ClientMDL::all();
       $clients = ClientMDL::orderBy('created_at', 'desc')->get();
        return view('dashboard.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("client_register");
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

            
            'fname'     => 'required|string|max:200',
            // 'project_id'     => 'required|string|max:200',
            // 'lname'     => 'string|max:100',
            'contact_number' => 'required|numeric|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password',


        ]); // create the validations
        
         $no= DB::select(DB::raw("Select whatsapp_account from clients where whatsapp_account = '$request->whatsapp_no' "));
            // dd($no);
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form
            if (request()->hasFile('filename')){
                request()->validate([
                    'filename' => 'sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
                ]);
            }
            if (request()->hasFile('imgname')){
                request()->validate([
                    'imgname' => 'sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
                ]);
            }
            if (request()->hasFile('imagename')){
                request()->validate([
                    'imagename' => 'sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
                ]);
            }

        } else {
            
            $is_valid_otp = 0; 
            $enterd_otp = $request->otp;
            $otp_response = ClientOTP::where([
                'mobile_no' => $request->contact_number,
                'otp_code' => $request->otp,
                'status' => 1,

            ])->get()->first();
            
             if(!empty($otp_response)){
                // check token expir time
                 $dt = new DateTime("now", new \DateTimeZone('Asia/Karachi'));
                 if($otp_response->expired_at < $dt->format('Y-m-d H:i:s')){
                    
                    return redirect()->back()->with('otp_error', 'Your OTP has been expired. Please generate again.');
                   
                 }else{
                             
                    $is_valid_otp = 1;
                   
                 }
                   
            }else{
                return redirect()->back()->with('otp_error', 'Invalid OTP');
                
            }
            if($is_valid_otp == 1 ){

                if(empty($no))
                {
                     $user = User::create([
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'password' => bcrypt($request->password),
                     'username' => $request->contact_number,
                'email' => $request->email,
                    'menuroles' => 'client',
                ]);

                $user->assignRole('client');
                
                $Client = new ClientMDL;
                $Client->fname = $request->fname;
                $Client->lname = $request->lname;
                $Client->contact_number= $request->contact_number;
                $Client->email1 = $request->email;
                $Client->whatsapp_account = $request->whatsapp_no;
                $Client->website_url = $request->website_url;
                $Client->fax_number = $request->fax_number;
                $Client->bank_name = $request->bank_name;
               $Client->tax_number = $request->tax_number;
               //$Project->user_id = Auth::user()->id;
                $Client->user_id = $user->id;
                // $Client->project_id= $request->project_id;
                $Client->save();
                
                
                 event(new Registered($user));

                if (auth()->attempt(array('username' => $request->contact_number, 'password' => $request->password),true)) {
                    return redirect("client_dashboard")->with('success', 'You have successfully registered, Login to access your dashboard');
                }
                else{
                     return redirect("login/client")->with('message', 'You have successfully registered, Login to access your dashboard');
                }
                
                
           }
           else
           {
              return redirect()->back()->with('hasError', 'WhatsApp Number is already exist!');
           }
             
               
                
            }else{
                return redirect()->back()->with('otp_error', 'Invalid OTP');
            }


        }
    
    }
     public function sendClientEmail(Request $request)
    {
      
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        $otp=$randomString;
        $result = DB::select(DB::raw("Select mobile_no from client_otp where mobile_no = '$request->mobile_no'"));
        // dd($result);
        $dt = new DateTime("now", new \DateTimeZone('Asia/Karachi'));
        $minutes_to_add = 15;
        $dt->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        $expired_at =  $dt->format('Y-m-d H:i:s');

        // if(empty($result)){
            ClientOTP::create([
                'mobile_no' => $request->mobile_no,
                'otp_code' => $otp,
                'expired_at' => $expired_at,
            ]);
            
     
        //   $number = "+".trim($request->mobile_no);
        $number = $request->mobile_no;
      
        $message = "Dear User, Your OTP is ".$otp.". Please don't share your OTP with others for own security.";
        /*
        $account_sid = config("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        */
        
        $account_sid = "ACa53c80e38dfc2f6d51e0f8905f412950";
        $auth_token = "b523bee5afb5e7a53b052a2ed45595de";
        $twilio_number = "+12076402321";
        
            $client = new Client($account_sid, $auth_token);
        
            $response = $client->messages->create($number, array('from' => $twilio_number, 'body' => $message));
           // return response()->json(["type" =>"success","msg"=> $response]);
              return response()->json(["success"=> $response]);
        
   
    // }
    //     else{
            // udpate
        //   return response()->json(["type" =>"error","msg"=> 'Phone number is already exist']);
            // ClientOTP::where(['mobile_no' =>$mobile_no])->update([
            //     'otp_code' => $otp,
            //     'expired_at' => $expired_at,
            // ]);
        // }
        
        
        
       
        
       
        // return response()->json(["success"=> $response]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(ClientMDL $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientMDL $client)
    {
        // return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $validator = Validator::make($request->all(), [

        'user_title' => 'required|string',   // required and email format validation
        // 'mname' =>'required|string|max:50', // required and number field validation
        'fname' => 'required|string|max:50',
        // "project_id" => 'string',
        'email' => 'required|email|max:50',
        'lname' => 'required|string|max:50',
        'gender' => 'required|string',
        'country' => 'required|string',
        'company_name' => 'required|string|max:50',
        'ADB' => 'required|string',
        'mailing_address' => 'required|string|max:50',
        // 'parnanent_address' => 'string|max:50',
        'experience' => 'string',
        'street_address' => 'required|string|max:50',
        'city' => 'required|string|max:50',
        'region' => 'required|string|max:50',
        // 'province' => 'string',
        'contact_number' => 'string',
        // 'fax' => 'string',
        'project_profile_codes' => 'string',
        'description' => 'string',
        'pec_certificate' => 'required|sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
        // 'pec_register' => 'required|string',
        // 'postal_code' => 'numeric',
        // 'website_link' => 'required|string',
        // 'company_registration_number' => 'required',
        // 'filename' => 'required|sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
        // 'imgname' => 'required|sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
        // 'imagename' => 'required|sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
        // 'tax_number' => 'required',
        // 'engineering' => 'required|string',
        // 'allied' => 'required|string',
        // 'alternative_email' => 'required|string',
        'employee' => 'string',
        ]);

    if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
    {

        return back()->withInput()->withErrors($validator);
        // validation failed redirect back to form
        if (request()->hasFile('filename')){
            request()->validate([
                'filename' => 'sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
            ]);
        }
        if (request()->hasFile('imgname')){
            request()->validate([
                'imgname' => 'sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
            ]);
        }
        // if (request()->hasFile('imagename')){
        //     request()->validate([
        //         'imagename' => 'sometimes|mimes:jpeg,png,jpg,gif,svg,pdf|max:5000',
        //     ]);
        // }

    } else {
        //validations are passed, save new user in database

            $Client =  ClientMDL::where('contact_number', Auth::user()->username)->first();
            if ($request->hasfile('filename')) {
                $file = $request->file('filename');
                $extension = $file->getClientOriginalExtension();
                $filename  = time() . '.' . $extension;
                $file->move('files/clients/', $filename);
                $Client->filename = $filename;
            }
            if ($request->hasfile('imgname')) {
                $file = $request->file('imgname');
                $extension = $file->getClientOriginalExtension();
                $filename  = time() . '.' . $extension;
                $file->move('files/clients/', $filename);
                $Client->imgname = $filename;
            }
            // if ($request->hasfile('imagename')) {
            //     $file = $request->file('imagename');
            //     $extension = $file->getClientOriginalExtension();
            //     $filename  = time() . '.' . $extension;
            //     $file->move('files/clients/', $filename);
            //     $Client->imagename = $filename;
            // }
        $Client->user_title = $request->user_title;
        $Client->mname = $request->mname;
        $Client->fname = $request->fname;
        $Client->email1 = $request->email;
        $Client->lname = $request->lname;
        $Client->gender = $request->gender;
        $Client->country = $request->country;
        $Client->company_name = $request->company_name;
        $Client->ADB = $request->ADB;
        $Client->ownership = $request->ownership;
        $Client->mailing_address = $request->mailing_address;
        $Client->parnanent_address = $request->parnanent_address;
        $Client->experience = $request->experience;
        $Client->street_address = $request->street_address;
        $Client->city = $request->city;
        $Client->region = $request->region;
        $Client->province = $request->province;
        $Client->contact_number = $request->contact_number;
        $Client->fax = $request->fax;
        // $Client->project_id= $request->project_id;
        $Client->pec_register = $request->pec_register;
        $Client->postal_code = $request->postal_code;
        $Client->website_link = $request->website_link;
        $Client->company_registration_number = $request->company_registration_number;
        $Client->engineering = $request->engineering;
        $Client->allied = $request->allied;
        $Client->alternative_email = $request->alternative_email;
        $Client->employee = $request->employee;
        // $Client->tax_number = $request->tax_number;
       if($Client->save()) 
       {
           return redirect()->back()->with('message', 'Client Profile has been updated successfully');
       }
       else
       {
           return redirect()->back()->with('message', 'ERROR.....................');
       }

        // return redirect("client/profile");
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $Client = ClientMDL::where('id', '=', $id)->first();
        $Client->delete();
        $request->session()->flash('message', "Successfully deleted Client");
        $request->session()->flash('back', 'clients.index');
        return view('dashboard.shared.universal-info');
    }

    public function edit_profile()
    {
        $user = ClientMDL::where('contact_number', Auth::user()->username)->first();
        return view('dashboard.clients.profile', compact('user'));
    }

    public function post_project()
    {
        $countries = Country::all();
        $project_discipline = ProjectDiscipline::all();
        $allied_discipline = AlliedDiscipline::all();
       
        return view('dashboard.clients.post_project',compact('countries','project_discipline','allied_discipline'));
       
    }
    
     public function getAllied(Request $request)
    {
       $id = $request->project_disciplines; 
       $project_disciplines =  AlliedDiscipline::where('project_category_id',$id)->get();

       return response()->json($project_disciplines);
    }
     public function saveProject(Request $request)
    {
        
       
        
        if(count(explode(' ', $request->summary)) > 500){
            return redirect()->back()->with('error','summer have must not be greater than 500 words');
        }
        if(count(explode(' ', $request->term_condition)) > 500){
            return redirect()->back()->with('error','Terms and Condition have must not be greater than 500 words');
        }
        $validator = Validator::make($request->all(), [
            'project_title' => ' required: true|string',
            'project_disciplines' => 'string',  
            'allied' => 'string',
            'summary' => 'required|string',
            'country_assignment' => 'string',
            'technical_queries' => 'string',
            'specific_experience' => 'string',
            'expert' => 'string',
            'consultant_services' => 'required|string',
            'estimated_date' => 'string',
            'title_bar'=>  'required|mimes:pdf|max:25000',
            'term_condition' => 'string',
          

        ]); 
        



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




            


        } else {
            //validations are passed, save new user in database
            
            $project_status = 0;
            $posted_message = "saved";
            if(isset($request->save_publish)){
                $project_status = 1;
                $posted_message = 'Project posted successfully.';
            }
            
            $Project = new Project;
             if ($request->hasfile('title_bar')) {
                $file = $request->file('title_bar');
                $name = $file->getClientOriginalName();
                $path = "filename.ext";
                $filename  = time() . '.' . $name;
                $file->move(public_path('files/clients/'), $filename, $path);
                $Project->title_bar = $filename;
            }
            $engineering = $request->engineering;
            if($request->engineering == 'others'){
                
                $engineering = $request->engineering_other;
                $Project->engineering_other = 1;
            }
            $allied = $request->allied;
            if($request->allied == 'others'){
                $allied = $request->allied_other;
                $Project->allied_other = 1;
            }
           
            // check documents file type
            $allowedfileExtension = ['pdf'];
            if ($request->hasfile('documents')) {
                $project_documents = [];
                $files = $request->file('documents');
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $filename = time().'_'.$filename;
                    $extension = $file->getClientOriginalExtension();
                    
                    $check = in_array($extension, $allowedfileExtension);
                    if(!$check){
                        return redirect()->back()->withInput()->withErrors(['Document(s) must be a file type of pdf.']);
                    }   
                }
                
            }

            $Project->project_title = $request->project_title;
            $Project->project_disciplines = $request->project_disciplines;
            $Project->engineering = $engineering;
            $Project->allied = $allied;
            $Project->summary = $request->summary;
            $Project->country_assignment = $request->country_assignment;
            $Project->technical_queries = $request->technical_queries;
            $Project->specific_experience = $request->specific_experience;
            $Project->expert= $request->expert;
            $Project->schedule= $request->schedule;
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
            // $Project->documents = $request->documents;
            $Project->commercial= $request->commercial;
            $Project->status= $project_status;

            if($Project->save() && $project_status == 1){
                 $consultants = Consultant::all();
                 $consultantsEmails = [];

           foreach ($consultants as $consultant) {
               $consultantsEmails[] = $consultant->email1;
            }

             Mail::send('project_upload_email', [], function ($message) use ($consultantsEmails) {
              $message->to([])
              ->bcc($consultantsEmails)
              ->subject('We Have Got a Project for you || PEC-E-Gateway');
              $message->cc('neha.hafeez@pec.org.pk');
            });
            }
            
            // save project documents against project

            if ($request->hasfile('documents')) {
                $project_documents = [];
                $files = $request->file('documents');
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $filename = time().'_'.$filename;
                    $extension = $file->getClientOriginalExtension();
                    $fullpath = $filename. '.' . $extension ;
                    $file->move(public_path('files/clients/'), $fullpath);
                    array_push($project_documents, [
                        'project_id' => $Project->id,
                        'filename' => $fullpath,
                    ]);    
                   
                    

                }
                if(!empty($project_documents)){
                    DB::table('project_documents')->insert($project_documents);
                }
            }

            
          




            //   $Project->session()->flash('back', 'projects.save');
             

           return redirect("/client/post_project")->with('message', $posted_message);
            
        }
    }
    
      public function delete($id, Request $request)
    {
        $Project = Project::where('id', '=', $id)->first();
        $Project->delete();
        $request->session()->flash('message', "Successfully deleted Client");
        $request->session()->flash('back', 'clients.index');
        return view('dashboard.shared.universal-info');
    }

  
    public function my_projects()
    {
        $id = Auth::user()->id;
        $projects = DB::select(DB::raw("SELECT  *,projects.id as project_id FROM `projects` 
                                   join project_disciplines on project_disciplines.id = projects.project_disciplines
                                   where status = 0 and user_id = $id
                                   order by projects.id desc"));
        // Project::where('user_id', Auth::user()->id)->where('status',0)->orderBy('id', 'DESC')->get();
        return view('dashboard.clients.projects', compact('projects'));
    }
    /*
    Author : Enayat
    Date   :  06-05-2022
    */ 
    public function getConsultant()
    {
        $consultants = DB::table("excel_consultants")->get();
        // dd($consultants);
        return view('dashboard.clients.consultants', compact('consultants'));
   
    }
    public function consultantDetail($id)
    {
        $consultant_detail = ConsultantDetail::with('consultanservices')
                             ->with('consultanspecialization')
                             ->where('excel_consultant_contact_details.License_No',$id)
                             ->first();
        
         $consultants = DB::table("excel_consultants")->where('id',$id)->first();   
                             
        if(empty($consultant_detail)){
            
            $consultant_detail['consultanservices']       = ConsultantService::where('License_No',$id)->get();
            $consultant_detail['consultanspecialization'] = ConsultantSpecialization::where('License_No',$id)->get();
            
            //return redirect()->back()->with('error', 'No Detail found against license number '.$id.'.'); 
         
        } 
   
        // dd($consultant_detail);
        return view('dashboard.clients.consultants_detail',compact('consultant_detail','id','consultants'));                             

    }
    
       public function clientprojectDetail($id)
    {
        // $project_detail = Project::where('projects.id',$id)->first(); 
        $project_detail = Project::select('*','projects.id as project_id')
                          ->join('project_disciplines', 'project_disciplines.id', '=', 'projects.project_disciplines')
                          ->where('projects.id', '=', $id)
                          ->first();
        // dd($project_detail);
        $consultants = DB::table("project_requests")
                            ->join('users','users.id','=','project_requests.consultant_id')
                             
                            ->select('users.fname','users.lname','users.id','project_requests.*')
                            ->where('project_requests.project_id',$id)
                            ->get(); 
        
        // $cons_id = DB::select(DB::raw("Select user_id from consultants"));
        
        
    
        $d = db::select(db::raw("SELECT users.id as u,users.fname,users.lname,project_requests.project_id,project_requests.* 
                                FROM users 

                                join project_requests on project_requests.consultant_id = users.id

                                where project_requests.project_id = $id"));
                         
        $project_documents = DB::table('project_documents')->where('project_id',$project_detail->id)->get(); 
      
        return view('dashboard.clients.projects_detail',compact('project_detail','id','consultants', 'd','project_documents'));                             
 
    }
    public function clientprojectReject($id,$consultant_id)
    {
        $id = Crypt::decryptString($id);
        $consultant_id = Crypt::decryptString($consultant_id);
        // $project = Project::where('id', '=', $project_id)->first(); 
        
        DB::table('project_requests')->where(['consultant_id'=>$consultant_id,'project_id'=>$id])->update(['request_status'=>2]);
        
        $userID = User::where('id','=', $consultant_id)->first();
        $user= User::where('email','=',  $userID->email)->first();
         \Mail::send('dashboard.clients.reject_email',
                 array(
                    //  'id' => $project->id,
                     
                     
                    //  'user_id' => $user->id,
                 ),
                  function($message)
                  use ($userID ,$user)
                   {
                      if(Auth::user()){
                      $message->from("noreply-egateway@pec.org.pk");
                      }else{
                      $message->from("noreply-egateway@pec.org.pk");
                      }
                      $message->to($user->email);
                      $message->subject("PEC PORTAL - Dear Client  for the project");
                    //   $message->bcc("kashifali@a2zcreatorz.com");
                       $message->bcc("maham@a2zcreatorz.com");
                      $message->bcc("taimoor@a2zcreatorz.com");
                   });

        return redirect()->route('client_allPublish');



    }
    public function awardProject(Request $request)
    {
        $consultants_id = $request->consultants_id;
        $project_id = $request->project_id;
        $project = Project::where('id', '=', $project_id)->first();
        if(empty($consultants_id)){
            return response()->json(['type'=>'error','msg'=>'consultant is required.']);
        }

        if(empty($project_id)){
            return response()->json(['type'=>'error','msg'=>'Project ID is required.']);
        }

        DB::table('projects')->where('id','=',$project_id)->update(['awarded_consultant_id'=>$consultants_id]);
       
        $award= ProjectRequest::select('project_requests.*', 'projects.*')->join('projects', 'projects.id', '=', 'project_requests.project_id')->where('project_id', $project_id)->get()->toArray();
       

        if(!empty($award[0]['awarded_consultant_id'])){
            
        $userID = User::where('id','=', $consultants_id)->first();
        $user= User::where('email','=',  $userID->email)->first();
        
        \Mail::send('dashboard.clients.award_email',
         array(
             'name' => $user->fname.''.$user->lname,
             'id' => $project->id,
             'title' => $project->project_title,
             'disciplinies' => $project->project_disciplines,
             'engineering' => $project->engineering,
             'engineering_other' => $project->engineering_other,
             'allied' => $project->allied,
             'allied_other' => $project->allied_other,
             'summary' => $project->summary,
             'country_assignment' => $project->country_assignment,
             'technical_queries'  =>$project->technical_queries,
             'specific_experience'  => $project->specific_experience,
             'expert'  => $project->expert,
             'schedule' => $project->schedule,
             'total_inputs' =>$project->total_inputs,
             'contract'  => $project->contract,
             'consultant_services' => $project->consultant_services,
             'estimated_date'  => $project->estimated_date, 
             'title_bar'  => $project->title_bar, 
             'term_condition'   => $project->term_condition	,
             'technical_proposal'  => $project->technical_proposal, 
             'technical_qualification'  => $project->technical_qualification, 
             'prequalification'  => $project->prequalification,
             'commercial' => $project->commercial,
             'no_of_days'  => $project->no_of_days,
             
            //  'user_id' => $user->id,
         ),
          function($message)
          use ($userID ,$user ,$project)
           {
              if(Auth::user()){
              $message->from("noreply-egateway@pec.org.pk");
              }else{
              $message->from("noreply-egateway@pec.org.pk");
              }
              $message->to($user->email);
            //   $message->cc("zahra@a2zcreatorz.com");
            //   $message->cc("msyeda702@gmail.com");
              $message->subject("Congratulations! $project->project_title Project Awarded to You - Start the Conversation Now!");
            //   $message->bcc("kashifali@a2zcreatorz.com");
               $message->bcc("maham@a2zcreatorz.com");
              $message->bcc("enayat@a2zcreatorz.com");
           });
           // send reject mail here        
            $rejected_award= ProjectRequest::select('users.email')->join('users','users.id','=','project_requests.consultant_id')
                             ->where('consultant_id','!=', $consultants_id)
                             ->where('project_requests.project_id',$project_id)
                             ->get()->toArray();       
            
            if(!empty($rejected_award)){        
                foreach($rejected_award as $rejemail)
                
                \Mail::send('dashboard.clients.reject_email',
                 array(
                     'title' => $project->project_title,
                  ),
                  function($message)
                  use ($rejemail)
                   {
                      if(Auth::user()){
                      $message->from("noreply-egateway@pec.org.pk");
                      }else{
                      $message->from("noreply-egateway@pec.org.pk");
                      }
                      $message->to($rejemail['email']);
                      $message->subject("PEC PORTAL - Dear Client  for the project");
                      $message->bcc("neha.hafeez@pec.org.pk");
                     
                   });
                
            }
                
        }
        return response()->json(['type'=>'success','msg'=>'Project has been awarded successfully!!!']);
    }
    
    public function award(Request $request, $id)
    {
         $this->validate($request,['award'=> 'required']);
         if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
        $p = Project::where('id', '=', $id)->first();
        $p->awarded_consultant_id = $request->award;
        if($p->save())
        {
            return response()->json(['type'=>'success','msg'=>'Project has been awarded successfully!!!']);
        }
        else
        {
        return response()->json(['type'=>'success','msg'=>'ERROR in project awarded !!!']);
        }
        
        }
       
    }
    public function publishProject(Request $request, $id)
    {
        
        $p = Project::where('id', '=', $id)->update(['status'=> $request->status]);
        
        return redirect('/client/projects');   
    }
    
    public function editProject($id)
    {
        $client = Project::where('id','=', $id)->first();  
        $countries = Country::all();
        $project_documents = DB::table('project_documents')->where('project_id',$id)->get();
        $project_discipline = ProjectDiscipline::all();
        $allied_discipline = AlliedDiscipline::all();

        return view('dashboard.clients.edit',compact('client', 'countries','project_documents','project_discipline','allied_discipline'));
    }
    
     public function updateProject(Request $request , $id)
    {
      
        $validator = Validator::make($request->all(), [
            
            'project_title' => ' required: true|string',
            'project_disciplines' => 'string',
            'allied' => 'string',
            'summary' => 'required|string',
            'country_assignment' => 'string',
            'technical_queries' => 'string',
            'specific_experience' => 'string',
            'expert' => 'string',
            'consultant_services' => 'required|string',
            'estimated_date' => 'string',
            'title_bar'=>  'required|mimes:pdf|max:25000',
            'term_condition' => 'string',
        ]); 
        
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return redirect()->back()->withInput()->withErrors($validator);
            
        }
        //validations are passed, save new user in database
        $Project =  Project::where('id', '=' , $id)->orderBy('id', 'DESC')->first();
        
        if ($request->hasfile('title_bar')) {
            $file = $request->file('title_bar');
            $name = $file->getClientOriginalName();
            $path = "filename.ext";
            $filename  = time() . '.' . $name;
            $file->move(public_path('files/clients/'), $filename, $path);
            $Project->title_bar = $filename;
        }
        // check documentation deletion
        $documentsObj = DB::table('project_documents')->where('project_id',$id)->select('id')->get();

        if(!$documentsObj->isEmpty()){
            foreach ($documentsObj as $f) {
                $fileid =  'is_delete'.$f->id;    
                if(isset($request->$fileid)){
                   // delete file 
                   DB::table('project_documents')->where('id',$f->id)->delete();     
                }
                
            }
        }
        

        $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
        if ($request->hasfile('documents')) {
            $project_documents = [];
            $files = $request->file('documents');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $filename = time().'_'.$filename;
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                $fullpath = $filename. '.' . $extension ;
                $file->move(public_path('files/clients/'), $fullpath);
                array_push($project_documents, [
                    'project_id' => $id,
                    'filename' => $fullpath,
                ]);

            }
            if(!empty($project_documents)){
                DB::table('project_documents')->insert($project_documents);
            }
        }
        $engineering = $request->engineering;
        if($request->engineering == 'others'){
            
            $engineering = $request->engineering_other;
            $Project->engineering_other = 1;
        }
        $allied = $request->allied;
        if($request->allied == 'others'){
            $allied = $request->allied_other;
            $Project->allied_other = 1;
        }
              
        $Project->project_title = $request->project_title;
        $Project->project_disciplines = $request->project_disciplines;
        $Project->engineering = $engineering;
        $Project->allied = $allied;
        $Project->summary = $request->summary;
        $Project->country_assignment = $request->country_assignment;
        $Project->technical_queries = $request->technical_queries;
        $Project->specific_experience = $request->specific_experience;
        $Project->expert= $request->expert;
        $Project->schedule= $request->schedule;
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
        
     
        
      if($Project->save() ){
                 $consultants = Consultant::all();
           $consultantsEmails = [];

           foreach ($consultants as $consultant) {
               $consultantsEmails[] = $consultant->email1;
            }

             Mail::send('project_upload_email', [], function ($message) use ($consultantsEmails) {
              $message->to([])
              ->bcc($consultantsEmails)
              ->subject('This is a test e-mail');

              $message->cc('neha.hafeez@pec.org.pk');
            });
            
            
             return back()->with('message', 'Project Updated Successfully');
            }else {
            return back()->with('hasError', 'Error in updating Project');
        }
       
         
    }
    
     public function all()
    {
     $id = Auth::user()->id;
    //  dd($id);
        // $pro = Project::where('user_id', Auth::user()->id)->where('status', '=', 1)->orderBy('id', 'DESC')->get();
        $pro = DB::select(DB::raw("SELECT  *,projects.id as project_id FROM `projects` 
                                   join project_disciplines on project_disciplines.id = projects.project_disciplines
                                   where status = 1 and user_id = $id
                                   order by projects.id desc"));
                                   
        return view('dashboard.clients.publish_project', compact('pro'));
    }
    public function totalBidProject(Request $request)
    {
        $user_id = Auth()->user()->id;

        $projects = DB::table('projects')
        ->join('project_requests','project_requests.project_id','=','projects.id')
        ->join('users','users.id','=','project_requests.consultant_id')
        ->where([
            'status'=> 1,
            'user_id'=>$user_id,
        ])->select('projects.*','project_requests.*','users.fname','users.lname')->get();
        
        return view("dashboard.clients.totalbid_project",compact('projects'));
    }    
    
    
      public function clientAllProject()
    {   
        $id = Auth::user()->id;
        $projects = DB::select(DB::raw("SELECT  *,projects.id as project_id FROM `projects` 
                                   join project_disciplines on project_disciplines.id = projects.project_disciplines
                                   where user_id = $id
                                   order by projects.id desc"));
        return view('dashboard.clients.all_projects', compact('projects'));
    }
    
    
       public function my_consultants()
    {
        $user_id = Auth::user()->id;
       
      $my_consultants = DB::select(DB::raw("SELECT * FROM `projects`  left join users on users.id =  projects.awarded_consultant_id where awarded_consultant_id != '' and user_id = $user_id "));
     
      return view('dashboard.clients.my_consultants', compact('my_consultants'));
    }
    
    
      public function getSelectedAllied(Request $request)
    {
        
       $id = $request->project_disciplines; 
       $project_disciplines =  AlliedDiscipline::where('project_category_id',$id)->get();
       

       return response()->json($project_disciplines); 
        
    }
      public function hashpassword(Request $request)
    {
       dd(Hash::make('demo123456'));
    }
    
}
