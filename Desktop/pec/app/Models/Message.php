<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Message extends Model
{
    use HasFactory;
    protected $table = "messages";
    protected $primaryKey = 'message_id';
    protected $guarded = [];
    public $timestamps = false;

    public static function getchatbox($id)
    {
    	$query = "SELECT  DISTINCT tmp.uid,u.fname,u.lname,
                
				(SELECT CONCAT(message_id,',',message_body,',',created_at) AS message_info FROM messages WHERE ( (sender_id = tmp.uid AND recipient_id = '$id' )OR ( recipient_id  = tmp.uid AND sender_id = '$id') ) ORDER BY message_id DESC LIMIT 1) AS message_info

				FROM 
				(
				  SELECT sender_id AS uid,message_body,message_id
				  FROM messages WHERE (`sender_id` = '$id' OR `recipient_id` = '$id') 
				  UNION
				  SELECT recipient_id AS uid,message_body,message_id
				  FROM messages WHERE (`sender_id` = '$id' OR `recipient_id` = '$id')
				  ORDER BY message_id desc   
				) AS tmp

				INNER JOIN users u ON tmp.uid = u.id  


				WHERE tmp.uid != '$id' 
                
                ";
                
		return DB::select($query);		

    }
    public static function getmessages($userid,$recipient_id)
    {
    	$messages = Message::select('messages.*',DB::Raw("case 
                when sender_id = '$userid' AND recipient_id = '$recipient_id' then 'msg_sent'
                when sender_id = '$recipient_id' AND recipient_id = '$userid' then 'msg_received'
                END as 'msg_type'"))
                ->where(['sender_id'=> $userid,'recipient_id'=> $recipient_id])
                ->orWhere(function($query) use ($userid,$recipient_id){
                     $query->where(['sender_id'=> $recipient_id,'recipient_id'=> $userid]);
                 })   
                ->orderby('message_id')
                ->get();
        return $messages;
    }
    
}
