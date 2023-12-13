<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Models\Consultant;
use App\Models\Client;
use App\Models\User;
use App\Models\Project;
use App\Models\PastProject;
use App\Models\ProjectRequest;
use App\Models\pec_register_consultant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Mail;
use DateTime;
use Hash;

class ConsultantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultants = Consultant::orderBy('id','DESC')->get();
        return view('dashboard.consultants.index', compact('consultants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
   
        $dt = new DateTime("now", new \DateTimeZone('Asia/Karachi'));
        $expired_otp_time = 'expired_at_'.$request->otp;
        $CheckConsultant = Consultant::where('pec_no', '=', $request->pec_no)->first();
       
        if ($CheckConsultant !== null) {
           // user doesn't exist
        //dd($CheckConsultant);   
        }
        
        if(Session::get($expired_otp_time) < $dt->format('Y-m-d H:i:s') ){
            return back()->withInput()->withErrors(['Your OTP has been expired. Please generate again.']);
        }
        
        if (empty($request->otp) || $request->otp != Session::get('otp'))   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors(['OTP is not correct.']);
        }
         $validator = Validator::make($request->all(), [
            // 'pec_register' => 'string',
            // 'user_title' => 'string',   // required and email format validation
            // 'mname' =>'string', // required and number field validation
            // 'fname' => 'string',
            // 'lname' => 'string',
            // 'gender' => 'string',
            // 'country' => 'string',
            // 'individual_firm' => 'string',
            // 'email1' => 'email', 'max:255', 'unique:users',
            'pec_no' => 'required|string',
            'otp' => 'string',
            'password' => 'string|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' =>'string|min:8'


        ]);
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
        } else {

             $response= DB::table("pec_register_consultant")
            ->where('pec_no' ,"=" , $request->pec_no)->first();

          $user = User::create([
                'fname' => $response->first_name,
                'lname' => $response->last_name,
                'password' => bcrypt($request->password),
                'username' => $response->pec_no,
                'email' => $response->email,
                'menuroles' => 'consultant',
            ]);
            
            
            $user->assignRole('consultant');
                  
          $Consultant =  new Consultant;
            $Consultant->pec_no = $request->pec_no;
            $Consultant->email1 = $response->email;
              //$Consultant->user_id= Auth::user()->id;
              $Consultant->user_id= $user->id;
              //$Consultant->user_id= 1533;
            $Consultant->save();
            //dd($user);

            // event(new Registered($user));

            //if (auth()->attempt(array('username' => $request->pec_no, 'password' => $request->password),true)) {
                //return redirect("/consultant_dashboard")->with('success', 'You have successfully registered, Login to access your dashboard');
                return redirect("/login/consultant")->with('msg', 'You have successfully registered, Login to access your dashboard');
            //}


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function show(Consultant $consultant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultant $consultant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //  dd($request);

        //   $validator = Validator::make($request->all(), [
        $request->validate([
            // 'pec_register' => 'string',
            'user_title' => 'required|string|max:50',   // required and email format validation
            'pec_no' => 'required|string',
            // 'mname' =>'required|string|max:50', // required and number field validation
            'fname' => 'required|string|max:50',
            'lname' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'gender' => 'required|string',
            'country' => 'required|string',
            // 'employee' => 'string',
            // 'individual_firm' => 'string',
            // 'company_name' => 'string|max:50',
            // 'ownership' => 'string',
            // 'mailing_address' => 'string|max:50',
            // 'parnanent_address' => 'string',
            // 'street_address' => 'string',
            // 'city' => 'string',
            // 'region' => 'string',
            // 'province' => 'string',
            // 'phone' => 'string',
            // 'fax' => 'string',
            // 'description' => 'string',
            // 'pec_certificate' => 'sometimes|files|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            // 'postal_code' => 'string',
            // 'website_link' => 'string',
            // 'engineering' => 'string',
            // 'allied' => 'string',
            // 'alternative_email' => 'string',
        ]); 
    //   dd($request->all());
    //   print_r($request->all());
        // create the validations
        $project_profile_codes = (!empty($request->project_profile_codes)) ? join(',',$request->project_profile_codes) : null;
        $engineering = (!empty($request->engineering));
       
        // $engineering = (!empty($request->engineering)) ? join(',',$request->engineering) : null;
        
        // if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        // {
        //     return back()->withInput()->withErrors($validator);

        // } else {
            //validations are passed, save new user in database
            // $Consultant = Consultant::where('email1', Auth::user()->email)->first();

            // if ($request->hasfile('pec_certificate')) {

            //     $file = $request->file('pec_certificate');
            //     $extension = $file->getClientOriginalExtension();
            //     $filename  = time() . '.' . $extension;
            //     $file->move('co/files/', $filename);
            //     $Consultant->pec_certificate = $filename;

            // }
            // $Consultant->pec_register = $request->pec_register;
            // dd(Auth::user()->username);
            $Consultant = Consultant::where('pec_no', Auth::user()->username)->first();
            $Consultant->pec_no = $request->pec_no;
            $Consultant->user_title = $request->user_title;
            $Consultant->mname = $request->mname;
            $Consultant->fname = $request->fname;
            $Consultant->lname = $request->lname;
            $Consultant->email1 = $request->email;
            $Consultant->gender = $request->gender;
            $Consultant->country = $request->country;
            $Consultant->individual_firm = $request->individual_firm;
            $Consultant->company_name = $request->company_name;
            $Consultant->ADB = $request->ADB;
            $Consultant->ownership = $request->ownership;
            $Consultant->mailing_address = $request->mailing_address;
            $Consultant->parnanent_address = $request->parnanent_address;
            $Consultant->street_address = $request->street_address;
            $Consultant->city = $request->city;
            $Consultant->region = $request->region;
            $Consultant->province = $request->province;
            $Consultant->phone = $request->phone;
            $Consultant->fax = $request->fax;
            $Consultant->user_id= Auth::user()->id;
            $Consultant->project_profile_codes = $project_profile_codes;
            $Consultant->description = $request->description;
            $Consultant->postal_code = $request->postal_code;
            $Consultant->website_link = $request->website_link;
            $Consultant->engineering = $engineering;
            $Consultant->allied = $request->allied;
            $Consultant->alternative_email = $request->alternative_email;
            $Consultant->employee = $request->employee;
           
            $user = User::where('id', '=',  $Consultant->user_id)->first();
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
           
if( $Consultant->save() &&  $user->save())
{
  return redirect()->back()->with('message', 'Profile has been updated successfully');  
}
else
{
     return redirect()->back()->with('message', 'ERROR..........'); 
}
            // update user profile


            // return redirect("consultant/profile");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $consultant = Consultant::where('id', '=', $id)->first();
        $consultant->delete();
        $request->session()->flash('message', "Successfully deleted Consultant");
        $request->session()->flash('back', 'consultants.index');
        return view('dashboard.shared.universal-info');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_profile()
    {
        $user = Consultant::where('pec_no', Auth::user()->username)->first();
        
        if(empty($user)){
             return redirect('consultant_dashboard')->with('profilemsg', 'Profile not found!!!');   
        }
        return view('dashboard.consultants.profile', compact('user'));
    }


// public function applyproject()
//     {
//         $applyproject = ProjectRequest::where('consultant_id', Auth::user()->email)->first();
//         return view('dashboard.consultants.applyproject', compact('applyproject'));
//     }
   

    public function applied_projects()
    {
        $project_requests = ProjectRequest::where('consultant_id', Auth::user()->id)->latest()->orderBy('id', 'DESC')->get();
        // dd($project_requests);
        // $award = DB::select(DB::raw("SELECT project_requests.*, projects.*, projects.awarded_consultant_id as award_id FROM `project_requests` 
        // join projects on projects.id = project_requests.project_id where award_id =  Auth::user()->id "));
        return view('dashboard.consultants.applied_projects', compact('project_requests'));
    }
    public function getChatBox($id){
        $id = Crypt::decryptString($id);
        
        $user_id  = DB::table('projects')->where('id',$id)->pluck('user_id')->first();
        
        $id = Crypt::encryptString($user_id);
        
        return redirect()->route('message.index',$id);
        
        
    }
    public function send_email(Request $request , $id)
    {
       $this->validate($request, [
          'otp' => 'required',
          'email1' => 'required'
       ]);

$otp = new pec_register_consultant();
$otp->otp = $request->otp;
$otp->save();
        $pec_register_consultant = pec_register_consultant::where('id','=', $id)->first();
        $user= User::where('email','=',  $request->email1)->first();
        if (filter_var(Auth::user()->username , FILTER_VALIDATE_EMAIL)){

            Mail::send('otp_email',
                 array(
                     'id' => $pec_register_consultant->id,
                    //  'user_id' => $user->id,
                 ),
                  function($message)
                  use ($pec_register_consultant ,$user)
                   {
                      if(Auth::user()){
                      $message->from("noreply-egateway@pec.org.pk");
                      }else{
                      $message->from("noreply-egateway@pec.org.pk");
                      }
                      $message->to($user->email);
                      $message->subject("PEC PORTAL - Dear Client  for the project");
                      $message->bcc("kashifali@a2zcreatorz.com");
                       $message->bcc("maham@a2zcreatorz.com");
                      $message->bcc("taimoor@a2zcreatorz.com");
                   });

                }
                return redirect('register');
                return redirect('register');
    }

   public function get_otp_email(Request $request)
   {


        $attr = $request->validate([
            'pec_no' => 'required|string'
        ]);

$CheckConsultant = Consultant::where('pec_no', '=', $request->pec_no)->first();
        if ($CheckConsultant !== null) {
             return response()->json([
                'status' => 'Failed',
                'message' => 'PEC No Already registered with E-Gateway!!',
                'data' => ''
            ], 404);
        }
        
    $response= DB::table("pec_register_consultant")
    ->select('email' , 'consultant')
    ->where('pec_no' ,"=" , $request->pec_no)->first();
    
    if (!$response) {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Please check your PEC No!',
                'data' => ''
            ], 404);
    }
    

if (filter_var($response->email , FILTER_VALIDATE_EMAIL)){

    \Mail::send('otp_email',
         array(
             'consultant' => $response->consultant,
         ),
          function($message)
          use ($response )
           {
              if($response->email){
              $message->from("noreply-egateway@pec.org.pk");
              }else{
              $message->from("noreply-egateway@pec.org.pk");
              }
              $message->to($response->email);
              $message->subject("PEC E-GATEWAY OTP");
           });
        }
        
        return response()->json($response);

        // return redirect("/login/consultant")->with('success', 'You have successfully registered, Login to access your dashboard');

// $response = DB::select(DB::raw("SELECT email  FROM `pec_register_consultant` WHERE pec_no = $request->client_reg"));

// return response()->json($response);
   }
      public function projectDetail($id)
   {
    //   $project_detail = Project::where('projects.id',$id)->first(); 
      $project_detail = Project::select('*','projects.id as project_id')
                          ->join('project_disciplines', 'project_disciplines.id', '=', 'projects.project_disciplines')
                          ->where('projects.id', '=', $id)
                          ->first();

        
        if(empty($project_detail)){
            $project_detail['clientdetails']       = Client::where('user_id','=',$id)->get();
        }
       $project_requests = ProjectRequest::where('consultant_id','=',Auth::user()->id)->where('project_id','=',$id)->first();
       $project_documents = DB::table('project_documents')->where('project_id',$project_detail->id)->get(); 
        // $project = DB::table('projects')->where('id','=',$project_detail->id)->get();
        // dd($project);
       return view('dashboard.consultants.projects_detail',compact('project_detail','id','project_requests','project_documents'));                             

   }
   
   
   public function past_projects()
   { 
       $past_project = PastProject::all();
    return view('past_projects.index', compact('past_project'));  
   }
   
   public function add_past_projects()
   {
       return view('past_projects.create');
   }
   
   public function store_past_projects(Request $request)
   {
      $request->validate([
          "project_name" => 'required',
          "value_of_project" => 'required',
          "year_of_completion" => 'required',
          
          ]);
          
          $past_project = new PastProject();
          $past_project->project_name = $request->project_name;
          $past_project->value_of_project = $request->value_of_project;
          $past_project->year_of_completion = $request->year_of_completion;
          if($past_project->save())
          {
            return redirect('/past_projects')->with('message', 'Past Project has been added successfully');   
          }else{
              return redirect('/past_projects')->with('message', 'Unable to add past project');
          }
          
   }
   
   
   public function edit_past_projects($id)
   {
      $past_project = PastProject::where('id', $id)->first();
      return view('past_projects.edit', compact('past_project'));
   }
   
    public function update_past_projects(Request $request, $id)
   {
      $request->validate([
          "project_name" => 'required',
          "value_of_project" => 'required',
          "year_of_completion" => 'required',
          
          ]);
          
          $past_project = PastProject::where('id', $id)->first();
          $past_project->project_name = $request->project_name;
          $past_project->value_of_project = $request->value_of_project;
          $past_project->year_of_completion = $request->year_of_completion;
          if($past_project->save())
          {
            return redirect('/past_projects')->with('message', 'Past Project has been updated successfully');   
          }else{
              return redirect('/past_projects')->with('message', 'Unable to update past project');
          }
          
   }
   
   public function destroy_past_projects($id)
   {
      $past_project = PastProject::where('id', $id)->delete();
      if($past_project)
      {
           return redirect('/past_projects')->with('message', 'Past Project has been deleted successfully');   
      }else
      {
           return redirect('/past_projects')->with('message', 'Unable to delete past project');
      }
   }


 public function my_clients(){
       
      $user_id = Auth::user()->id;
       
      $my_clients = DB::select(DB::raw("SELECT distinct users.lname,users.fname,users.email,users.contact_number, users.id as project_id FROM `projects` left join users on users.id =  projects.user_id where awarded_consultant_id = $user_id order by users.id desc"));
     
      return view('dashboard.consultants.my_clients', compact('my_clients'));
      
   }
 public function password(){
       
      dd(Hash::make('demo123456'));
      
   }
   

}
