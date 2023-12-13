@extends('dashboard.base') 

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />



<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #abd9e9;
    font-family: Arial;
}

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
* {
    box-sizing: border-box;
    margin: 0;
}

body,
html {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background-color: #232323;
}

.container {
    display: flex;
    width: 1150px;
    height: 95%;
    background-color: #ffffff;
    min-height: 550px;
}

.left {
    min-width: 350px;
    max-width: 350px;
    height: 30rem;
    display: flex;
    flex-direction: column;
    overflow-x: hidden;
    position: relative;
    overflow-y: auto;
}

.left > .top {
    position: relative;
    min-height: 60px;
    width: 100%;
    background-color: #ffffff;
    border-bottom: 0.5px solid #76767637;
    display: flex;
    align-items: center;
    z-index: 99999;
}

.left > .top > .tub {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    font-family: "Open Sans";
    width: 100%;
}

.left > .top > .tub > .username {
    max-width: 50%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.left > .top > .card {
    position: absolute;
    right: 10px;
    margin-top: 14px;
}

.left > .top > .card > button {
    background-color: #ffffff;
    border: 0.5px solid #76767637;
    padding: 4px 8px;
    color: #323232;
    font-family: "Open Sans";
    font-weight: 700;
    font-size: 12px;
    cursor: pointer;
}

.left > .top > .card > button:hover {
    color: #767676;
}

.left > .conversations {
    overflow-y: scroll;
    height: 100%;
    padding: 10px 0 0 0;
    overflow-x: hidden;
}

.conversations > .person {
    display: flex;
    align-items: center;
    padding: 10px;
    background-color: #ffffff;
    gap: 10px;
}

.conversations > .person:hover {
    background-color: #f0f0f0af;
    cursor: pointer;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    margin-bottom: 1.5rem;
    word-wrap: break-word;
    background-clip: border-box;
    border: 1px solid;
    border-radius: 0.25rem;
    background-color: #fff;
    border-color: #d8dbe0;
}

.conversations > .person > .information {
    font-family: "Open Sans";
    font-size: 14px;
    display: flex;
    flex-direction: column;
    gap: 4px;
    width: 100%;
    overflow: hidden;
}

.conversations > .person > .information > .content {
    display: flex;
    align-items: center;
    gap: 5px;
    width: 100%;
    color: black;
}

.conversations > .person > .information > .content > .message {
    max-width: 70%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: "Roboto";
    color: #000000;
}

.conversations > .person > .information > .content > .new {
    max-width: 70%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: "Roboto";
    color: black;
    font-weight: 700;
}

.conversations > .person > .box {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.conversations > .person > .box > .image {
    width: clamp(50px, 50px, 50px);
    height: clamp(50px, 50px, 50px);
    border-radius: 100%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.conversations > .person > .box > .online {
    min-width: 1.1rem;
    min-height: 1.1rem;
    background-color: lawngreen;
    border-radius: 100%;
    position: absolute;
    border: 2px solid white;
    right: 0;
    bottom: 0;
}

.conversations > .person > .status {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 1rem;
}

.conversations > .person > .status > .point {
    min-height: 8px;
    min-width: 8px;
    background-color: #0084ff;
    border-radius: 100%;
}

.right {
    border-left: 0.5px solid #76767637;
    width: inherit;
    height: 100%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.right > .top {
    width: 100%;
    display: flex;
    min-height: 60px;
    align-items: center;
    padding: 0 20px;
    border-bottom: 0.5px solid #76767637;
    gap: 1rem;
}

.right > .top > .box {
    position: relative;
    min-width: 35px;
    min-height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.right > .top > .box > .image {
    display: flex;
    align-items: center;
    border: none;
    border-radius: 100%;
    overflow: hidden;
}

.right > .top > .box > .online {
    position: absolute;
    min-width: 12px;
    min-height: 12px;
    background-color: lawngreen;
    border-radius: 100%;
    border: 2px solid #ffffff;
    right: 0;
    bottom: 0;
}

.right > .top > .information {
    display: flex;
    align-items: flex-start;
    justify-content: start;
    flex-direction: column;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
}

.right > .top > .information > .username,
.name {
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size: 14px;
    font-family: "Open Sans";
}

.right > .top .information > .username {
    font-weight: 400;
    font-size: 15px;
}

.right > .top > .information > .username > a {
    color: black;
    text-decoration: none;
}

.right > .top .information > .name {
    font-weight: 400;
    font-size: 12px;
    color: #707070;
}

.right > .top > .options {
    display: flex;
    align-items: center;
    justify-content: center;
}

.right > .top > .options > button {
    border: none;
    background-color: transparent;
    padding: 0 10px;
    cursor: pointer;
}

.right > .middle {
    background-color: #ffffff;
    height: inherit;
    display: flex;
    flex-direction: column-reverse;
    overflow-y: auto;
    overflow-x: hidden;
}

.messages {
    display: flex;
    flex-direction: column;
    padding: 10px;
    gap: 2.5px;
}

.clip {
    display: flex;
}

.clip > .text {
    font-family: "Open Sans";
    font-size: 14px;
    font-weight: 400;
    max-width: 50%;
    padding: 8px 16px;
    border-radius: 20px;
    word-break: break-word;
    white-space: pre-wrap;
    word-wrap: keep-all;
}

.received > .text {
    background-color: white;
    border: 0.5px solid #80808080;
}

.sent > .text {
    background-color: #034203;
    color: white;
}

.sent {
    flex-direction: row-reverse;
}

.seen {
    text-align: right;
    padding: 0 10px;
    font-family: "Open Sans";
    font-size: 0.75rem;
    font-weight: 400;
    color: gray;
}

.right > .bottom {
    height: auto;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 14px 28px;
}

.cup {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ffffff;
    border: 0.5px solid #7676765c;
    width: 100%;
    padding: 8px 20px;
    border-radius: 40px;
    margin-top: 140px;
}

.cup > textarea {
    font-family: "Open Sans";
    font-size: 1rem;
    font-weight: 400;
    border: none;
    outline: none;
    padding: 0 10px;
    width: 100%;
    resize: none;
    max-height: 100px;
}

.cup > .send {
 border: none;
    padding: 5px 10px;
    font-family: "Open Sans";
    font-size: 15px;
    border-radius: 7px;
    font-weight: 1000;
    background: #034203;
    color: white;
}

.send:disabled {
    color: #0084ff8;
}

@media only screen and (max-width: 950px) {
    .container {
        width: 100%;
    }
}

@media only screen and (max-height: 600px) {
    .container {
        height: 100%;
    }
}
div#conversation_div {
    position: relative;
}
div#conversation_search_div {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 2;
    transform: translateY(-122%);
    transition: 0.5s ease-out;
}
div#conversation_search_div.active {
    transform: translateY(0px);
    background-color: #fff;
}
.sender_time {
    padding: 0 10px;
    font-family: "Open Sans";
    font-size: 0.75rem;
    font-weight: 400;
    color: gray;
}
.receiver_time {
    text-align: right;
    padding: 0 10px;
    font-family: "Open Sans";
    font-size: 0.75rem;
    font-weight: 400;
    color: gray;
}


.select2-container .select2-selection--single {
        height: 40px;

}
.right {
    max-width: calc(100vw - 606px) !important;
    width: 100% !important;
    position: relative !important;
}


.container {
    max-width: 935px !important;
    height: calc(100vh - 500px) !important;
}

.right > .middle {
    min-height: calc(100% - 250px) !important;
}

.cup {
    margin: 0;
}

div#msg_empty {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
</style>

 

  
<div class="container">
    <div class="left">
        <div class="top">
            <div class="card">
                <!--<button class="latest" onclick="new_conversation()">New Conversation</button>-->
                </div>
            
        </div>
        <div id="conversation_div">
            <div id="conversation_search_div">
                <!--<select class="select2 form-control" data-rel="chosen"  name="newuser" id="newuser">-->
                <!--    <option hidden="true" value="">--Select User--</option>-->
                <!--     @foreach($users as $user)-->
                <!--      <?php $user_id = \Crypt::encryptString($user->id);?>-->
                <!--        <option value="{{$user_id}}">{{$user->fname.' '.$user->lname}}</option>-->
                <!--     @endforeach           -->
                <!--</select>-->
            

                   

            </div>
            @if(!empty($chats))
                <div id="newchatdiv"></div>    
                @foreach($chats as $chat)

                @php $chat_msg_array = explode(',', $chat->message_info); @endphp
                
                    <div class="conversations">
                        <div class="person" id="person{{$chat_msg_array[0]}}">
                            <div class="box">  
                                <div class="image"> <img src="https://egateway.pec.org.pk/public/assets/user.png" width="50px" height="50px" alt=""> </div>
                                <div class="online"></div>
                            </div>
                            <div class="information">
                                <?php $uid = \Crypt::encryptString($chat->uid);?>
                                <a href="{{route('message.index',$uid)}}" class="text-dark" style="text-decoration: none;">
                                <div class="username1">{{$chat->fname.' '.$chat->lname}}</div>
                                    <div class="content">
                                        <div class="message{{$chat->uid}}">{{$chat_msg_array[1]}}</div>
                                          <!-- <div class="time"> &bull; <?php //echo timespan(strtotime($chat_msg_array[2]),time(),2); ?></div> -->
                                        
                                    </div>
                                </a>
                            </div>
                           <!--  <div class="status">
                                <div class="point"></div>
                            </div> -->
                        </div>
                    </div>
                @endforeach
            
            @else
                <div class="conversationsno mt-5">
                    <div class="person" id="nofound">
                        <p class="text-center"><strong>No chat found!!! </strong></p>
                        <div class="text-center text-mute">Start new conversation.</div>
                    </div>
                </div>
            @endif
            
            
            
           
        </div>

    </div>
    <!-- ***********************************************************************************************
                                MESSAGE BOX
        ********************************************************************************************** -->
    <div class="right">
       
    @if(!empty($chats) || !empty($recipient_id))    
        <div class="top">
            <div class="box">
                <div class="image">
                    <img  id="usermsgboximg" src="https://egateway.pec.org.pk/public/assets/user.png" width="35px" height="35px" alt=""> 
                    <!--<img  id="usermsgboximg" src="https://egateway.pec.org.pk/public/assets/green2.png" width="35px" height="35px" alt="">-->
                    <!--<i class="fa-solid fa-circle-user" style="color:#004e1d ;"></i>-->
                    <!--<img  id="usermsgboximg" src="https://cdn2.bigcommerce.com/server5400/3po1k2/products/8171/images/14559/161_light_blue__46032.1418747956.1280.1280.jpg?c=2" width="35px" height="35px" alt=""> -->
                </div>
                
            </div>
            <div class="information">
                <div class="username1" id="userheadername">{{$recipient_name}}</div>
                <!-- <div class="name">Active now</div> -->
            </div>
            <div class="options">
              
                <a class="info" style="text-decoration: none;color:black" href="https://egateway.pec.org.pk/client/get/consultant/info/<?php echo $chat->uid;?>">&bull;&bull;&bull;</a>
            </div>
        </div>
        <div class="middle">
            <div class="tumbler">
                <div class="messages">
                    <input type="hidden" id="recipient_id" value="{{$recipient_id}}">
                        <input type="hidden" id="sender_id" value="{{$userid}}">
                @if(!empty($messages))    
                    @if(!$messages->isEmpty())
                        
                        @php $recipient_msg_id = 0; @endphp
                        @foreach($messages as $message)
                            @php 
                                $cls = 'clip sent';
                                $time_cls = 'receiver_time';
                                if($message->msg_type == 'msg_received'){
                                    $recipient_msg_id = $message->message_id;
                                    $cls = 'clip received';
                                    $time_cls = 'sender_time';
                                }
                            @endphp 
                            <div class="{{$cls}}">
                                <div class="text">{{$message->message_body}}</div>

                            </div>
                            <div class="{{$time_cls}}">{{$message->created_on}}</div>
                        @endforeach
                        <input type="hidden" id="recipient_msg_id" value="{{$recipient_msg_id}}">
                    @endif    
                @endif
                </div>
                
            </div>
        </div>



       <!-- ***********************************************************************************************
                                MESSAGE TEXTAREA
        ********************************************************************************************** -->
        <div class="alert alert-warning alert-dismissible fade hide" id="msg_empty" role="alert">
           Please Type message first.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="bottom">
      
            <div class="cup">
               <textarea id="message" cols="30" rows="1" name="message" placeholder="Message..." required="true"></textarea>
                <button type="submit" class="send">Send</button>
            
            </div>
        </div>
     @else
        <div class="text-center mt-5"><img src="{{asset('/public/images/nochatfound.png')}}"></div>   
     @endif     
    </div>
</div>
</div> 

<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection @section('javascript')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
$(document).ready(() => {
    
    const textarea = $("#message");
    const send = $('.send');
    send.attr('enable', 'enable');
    textarea.on('input keydown keyup', function() {
        textarea.height(0).height(this.scrollHeight);
        if(textarea.val().trim().length > 0) {
            send.removeAttr('enable');
        } else {
            send.attr('enable', 'enable');
        }
    }).find(textarea).change();

    function add() {
        var message_body = textarea.val().trim();
        
        var recipient_id = $("#recipient_id").val();
        var sender_id = $("#sender_id").val();
        
        $.ajax({
              type:"post",
              url: "{{ route('messages.store')}}",
              data:{_token:"{{ csrf_token() }}",sender_id:sender_id,recipient_id:recipient_id,message_body:message_body},
              cache:false,
              dataType: "json",
              success:function(response)
              {
                console.log(response);
                if(response == 'success'){
                    $(".messages").append("<div class='clip sent'><div class='text'>" + message_body + "</div></div>");
                    $(".message"+recipient_id).html("<b>You : </b>" + message_body);
                }else{
                   
                }    

               
              }
              
          });
        textarea.val("");
        send.attr('enable', 'enable');
        textarea.focus();
        textarea.height("");
    }
    textarea.on('keydown', (event) => {
        if(event.keyCode == 13 && !event.shiftKey) {
            if(textarea.val().trim().length > 0) {
                send.removeAttr('enable');
                add();
            }
            event.preventDefault();
        }
    });
    send.click(() => {
        if(textarea.val().trim().length > 0) {
                send.removeAttr('enable');
                add();
            }
    });
});
$('.conversations').on('click', function() {
    $('.middle').hide('slow').show('slow');
});
$(".information").click(function() {
    $(".username").html("Wajid Ali");
});


setInterval(get_recipent_latestmsg, 5000); 
// get_recipent_latestmsg();
function get_recipent_latestmsg() {
    var recipient_id = $("#recipient_id").val();
    var sender_id = $("#sender_id").val();
    var recipient_msg_id = $("#recipient_msg_id").val();
    if(recipient_msg_id != 0){
        $.ajax({
              type:"get",
              url: "{{ route('message.getlatestmsg')}}",
              data:{_token:"{{ csrf_token() }}",sender_id:sender_id,recipient_id:recipient_id,recipient_msg_id:recipient_msg_id},
              cache:false,
              dataType: "json",
              success:function(response)
              {
                if(response.code == 'success'){
                    html = response.data;
                    latest_msg_id = response.latest_msg_id;
                    $("#recipient_msg_id").val(latest_msg_id);
                    $(".messages").append(html);
                    $(".message"+recipient_id).html(response.latest_msg);
                }
                  

               
              }
              
        });
    }    
}


function new_conversation() {
    $("#conversation_search_div").toggleClass("active");
}




</script> 

 <script type="text/javascript">
        
        $('.select2').on('select2:select', function (e) { 
            newuser = $("#newuser").val();
            var url = '{{url('/message/index/')}}'+'/'+newuser;
            window.location.href = url;
            
        });
        $('.select2').select2({
            placeholder : "Chose User",
        });

        


    </script>
@endsection