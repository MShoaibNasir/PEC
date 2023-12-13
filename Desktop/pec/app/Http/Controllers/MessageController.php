<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Consultant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use DB;
use Auth;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id='')
    {
        $data['userid'] = $userid = Auth::user()->id;
       
        $data['users'] = DB::table("users")
                ->select("fname","lname","id")
                ->whereIn("menuroles",["client","consultant"])
                ->where("id",'!=',$userid)
                ->get(); 
        // mark as read when user load chat box        
        Message::where('recipient_id',$userid)->update(['is_seen'=>1]);
        $data['chats'] = $chats = Message::getchatbox($userid);  
        $recipient_id ='';
        if(!empty($id)){
            $id = Crypt::decryptString($id);
            $data['recipient_id'] = $recipient_id = $id;    
        }
        
        $recipient_name = '';
        if(!empty($data['chats'])){
            $recipient_name = $chats[0]->fname.' '.$chats[0]->lname;    
        } 
        
        if(!empty($recipient_id)){
            $recipient_data = DB::table("users")
                ->select("fname","lname","id")
                ->whereIn("menuroles",["client","consultant"])
                ->where("id",'=',$recipient_id)
                ->first();
            $recipient_name = $recipient_data->fname.' '.$recipient_data->lname;
        }
      
        $data['recipient_name'] = $recipient_name;
                
        $messages = [];
        if($data['chats']){
            if(empty($id)){
                $data['recipient_id'] = $recipient_id = $data['chats'][0]->uid;    
            }
            
            
            $messages = Message::getmessages($userid,$recipient_id);
           
                
        }
       
        $data['messages'] = $messages;

        return view('dashboard.messages.index',$data);
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
       try {   
                $sender_id = $request->sender_id;
                
                $validator = Validator::make($request->all(), [
                    'recipient_id' => 'required|integer',
                    'message_body' => 'required|string|max:255'
                ]);

                if($validator->fails()){
                    return response()->json($validator->errors()->first(), 200);
                }

                $data = array(
                    'sender_id' => $sender_id, 
                    'recipient_id' => $request->recipient_id, 
                    'message_body' => $request->message_body, 
                );
                $message = Message::create($data);
                if(!empty($message)){
                    return response()->json("success", 200);
                }else{
                    return response()->json("Unable to send message.", 200);
                }    
                

                

            }catch(\Exception $e){
                return response()->json($e->getMessage(), 200);
            }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $user = auth()->user();
        $message = new Message();
        $message->user_id = $user->id;
        $message->client_id = $client->id;
        $message->consultant_id = $consultant->id;
        $message->message = $request->input('message');
       
        $note->save();
    }
    /*
        Author:  Enayat

    */ 
     public function getLatestMsg(Request $request)
    {
        $recipient_msg_id = $request->recipient_msg_id;
        $recipient_id = $request->recipient_id;
        $sender_id = $request->sender_id;
        
        $messages = Message::where([
            'sender_id' => $recipient_id,    
            'recipient_id' => $sender_id,    
        ])
        ->where('message_id','>',$recipient_msg_id)
        ->get();
        $notempty = false;
        $msg_body = '';
        $latest_msg_id = '';
        $latest_msg = '';
        if(!empty($messages)){
            if(!$messages->isEmpty()){
                
                $latest_msg_id = $recipient_msg_id;
                
                foreach ($messages as $row) {
                   $msg_body .="<div class='clip received'><div class='text'>".$row->message_body."</div></div>";
                   $latest_msg_id = $row->message_id;
                   $latest_msg = $row->message_body;
                }
                $notempty = true;
            }
            $notempty = true;
        }
        if($notempty && $latest_msg !=''){
            return response()->json([
                "code"=>"success",
                "data"=>$msg_body,
                "latest_msg_id"=>$latest_msg_id,
                "latest_msg"=>$latest_msg], 200);
        }else{
            return response()->json(["code"=>"error","data"=>"No message found."], 200);
        }   
    }   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
    
    
    public function get_consultant_info($id)
    {
        $consultant_info = Consultant::where('user_id', $id)->first();
        return view('dashboard.messages.consultant_info', compact('consultant_info'));
    }
    
}
