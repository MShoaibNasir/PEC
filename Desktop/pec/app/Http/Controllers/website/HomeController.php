<?php



namespace App\Http\Controllers\website;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\TimeSlot;

use App\Models\Holiday;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use DB;

class HomeController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        //  $user_id = Auth::User()->id;
        $data['project_count'] = DB::table('projects')->count();
        $query = DB::table('projects')
    ->where('status', 1)
    ->where('awarded_consultant_id', 0)
    ->orWhereNull('awarded_consultant_id')
    ->take(3)
    ->get();
   

        
    $data['query']=$query;
        return view('website.index',$data);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

    }



    function members()

    {

        return view('website.members');

    }



    function about()

    {

        return view('website.about');

    }



    function faq()

    {

        return view('website.faq');

    }



    function regulations()

    {

        return view('website.regulations');

    }
    
     function disclaimer()

    {

        return view('website.disclaimer');

    }



    function available_projects(Request $request)

    {

        $param['title']         = '';    
        $param['skill']         = '';    
        $param['discipline']    = '';    
        $param['country']       = '';    

        // $query = DB::table('projects')->whereRaw(" 1 = 1");
        // $query= DB::table('projects')->where('status', 1)->where('awarded_consultant_id', 0)->whereRaw(" 1 = 1");
$query = DB::table('projects')
    ->select('*', 'projects.id as project_id')
    ->join('project_disciplines', 'project_disciplines.id', '=', 'projects.project_disciplines')
    ->where('status', 1)
    ->where(function($query) {
        $query->where('awarded_consultant_id', 0)
              ->orWhereNull('awarded_consultant_id');
    })
    ->whereRaw(" 1 = 1");     
        if(!empty($request->title)){
            $param['title'] = $request->title;
            $query->whereRaw("project_title like '%".$request->title."%' ");    
        }
        if(!empty($request->skill)){
            $param['skill'] = $request->skill;
            $query->whereRaw("engineering like '%".$request->skill."%' ");    

        }
        if(!empty($request->discipline)){
            $param['discipline'] = $request->discipline;    
            $query->whereRaw("project_disciplines like '%".$request->discipline."%' ");    
                
        }
        if(!empty($request->country)){
            $param['country'] = $request->country;    
            $query->where("country_assignment",$request->country);    
                
        }    

        $data['projects'] = $query->orderby('projects.id','DESC')->paginate(10);

        $data['projects']->appends($_GET);

            
        $data['countries'] = DB::table('countries')->get();
        $data['param'] = $param;    
       
       
        return view('website.projects',$data);

    }



    function partners()

    {

        return view('website.partners');

    }



    function contact()

    {

        return view('website.contact');

    }



      function how_works()

    {

        return view('website.how_works');

    }

    function savefeedback(Request $request){

       

        $rules = [

            'name' => 'required|string|max:50',

            'email' => 'required|email',

            'feedback' => 'required|string|max:300',

            'suggestions' => 'required|string|max:300',

            'captcha' => 'required_if:web,true|captcha'



        ];



        $this->validate($request, $rules);

            

        $data = [

                'name'=> $request->name,

                'email'=> $request->email,

                'feedbacktype'=> $request->feedbacktype,

                'feedback'=> $request->feedback,

                'suggestions'=> $request->suggestions,

                

            ];

        if (filter_var($request->email , FILTER_VALIDATE_EMAIL)){

                

                \Mail::send('feedback_email',

                 $data,

                  function($message)

                  {

                     

                      $message->from("info@pec.org.pk");

                      $message->to("egateway@pec.org.pk");

                      $message->subject("PEC Feedback Form");

                    

                   });

            }

        

        

        

        

        return redirect()->back()->with('message', ' We appreciate you. Have a great day!');    

    }

    public function projects(){

        $data['project_count'] = DB::table('projects')->count();

        return view('website.project');

    }
    

}

