@extends('dashboard.base')

@section('content')

<style>
    *{
	box-sizing:border-box;
}
body{
	background-color:#abd9e9;
	font-family:Arial;
}

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        *{box-sizing: border-box;margin: 0;}
        body,html{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            background-color: #232323;
        }
        .container{
            display: flex;
            width: 1150px;
            height:  95%;
            background-color: #ffffff;
        }

        .left{
            min-width: 350px;
            max-width: 350px;
            height: 100%;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .left > .top{
            position: relative;
            min-height: 60px;
            width: 100%;
            background-color: #ffffff;
            border-bottom: 0.5px solid #76767637;
            display: flex;
            align-items: center;
        }
        
        .left > .top > .tub {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            font-family: "Open Sans";
            width: 100%;
        } 
        .left > .top > .tub > .username{
            max-width: 50%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .left > .top > .card{
            position: absolute;
            right: 10px;
            margin-top: 14px;
        }
        .left > .top > .card > button{
     
            background-color: #ffffff;
            border: 0.5px solid #76767637;
            padding: 4px 8px;
            color: #323232;
            font-family: "Open Sans";
            font-weight: 700;
            font-size: 12px;
            border-radius: 12px;
            cursor: pointer;
        }
        .left > .top > .card > button:hover{
            color: #767676;
        }
        .left > .conversations{
            overflow-y: scroll;
            height: 100%;
            padding: 10px 0 0 0;
            overflow-x: hidden;
        }
        .conversations > .person{
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #ffffff;
            gap : 10px;
        }
        .conversations > .person:hover{
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
        .conversations > .person > .information{
            
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
            color : black;
        }
        .conversations > .person > .information > .content > .message{
            max-width: 70%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: "Roboto";
            color: #000000;
        }
        .conversations > .person > .information > .content > .new{
            max-width: 70%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: "Roboto";
            color : black;
            font-weight: 700;
        }
        .conversations > .person > .box{
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .conversations > .person > .box > .image{
            width: clamp(50px,50px,50px);
            height: clamp(50px,50px,50px);
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
            border-radius: 100% ;
            position: absolute;
            border: 2px solid white;
            right: 0;
            bottom: 0;
        }
        .conversations > .person > .status{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 1rem;
        }
        .conversations > .person > .status > .point {
            min-height: 8px;
            min-width: 8px;
            background-color: #0084ff;
            border-radius:100% ;
        }
        .right{
            border-left: 0.5px solid #76767637;
            width: inherit;
            height: 100%;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .right > .top{
            width: 100%;
            display: flex;
            min-height: 60px;
            align-items: center;
            padding: 0 20px;
            border-bottom: 0.5px solid #76767637;
            gap: 1rem;
        }
        .right > .top > .box{
            position: relative;
            min-width: 35px;
            min-height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right > .top > .box > .image{
            display: flex;
            align-items: center;
            border:none;
            border-radius: 100%;
            overflow: hidden;
        }
        .right > .top > .box > .online{
            position: absolute;
            min-width:12px;
            min-height: 12px;
            background-color: lawngreen;
            border-radius: 100%;
            border: 2px solid #ffffff;
            right: 0;
            bottom: 0;
        }
        .right > .top > .information{
            display: flex;
            align-items: flex-start;
            justify-content: start;
            flex-direction: column;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .right > .top > .information > .username , .name{
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 14px;
            font-family: "Open Sans";
        }
        .right > .top .information > .username{
            font-weight: 400;
            font-size: 15px;
        }
        .right > .top > .information > .username > a{
            color: black;
            text-decoration: none;
        }
        .right > .top .information > .name{
            font-weight: 400;
            font-size: 12px;
            color: #707070;
        }
        .right > .top > .options{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right > .top > .options > button{
            border: none;
            background-color: transparent;
            padding: 0 10px;
          cursor : pointer;
        }
        .right > .middle{
            background-color: #ffffff;
            height: inherit;
            display: flex;
            flex-direction: column-reverse;
            overflow-y: auto;
            overflow-x: hidden;
        }
        .messages{
            display: flex;
            flex-direction: column;
            padding: 10px;
            gap: 2.5px;
        }
        .clip {
            display: flex;
        }
        .clip > .text{
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
        .received > .text{
            background-color: white;
            border: 0.5px solid #80808080;
        }  
        .sent > .text{
            background-color: #0084ff;
            color: white;
        }
        .sent{
            flex-direction: row-reverse;
        }
        .seen{
            text-align: right;
            padding: 0 10px;
            font-family: "Open Sans";
            font-size: 0.75rem;
            font-weight: 400;
            color : gray;
        }
        .right > .bottom{
             height: auto;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
        }
        .cup{
         
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
        .cup > textarea{
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
        .cup > .send{
            border: none;
            padding: 5px 10px;
            background-color: transparent;
            font-family: "Open Sans";
            font-size: 14px ;
            font-weight: 700;
            color : #0084ff;
        }      
        .send:disabled{
            color: #0084ff8d;
        }
        @media only screen and (max-width: 950px) {
            .container{
                width: 100%;
            }
        }
        @media only screen and (max-height: 600px) {
            .container{
                height: 100%;
            }
        }       
</style>

                                <div class="container">
                                <div class="left">
                                <div class="top">
                                    <div class="tub"> <div class="username">Wajid Ali</div> </div>
                                    <div class="card"> <button class="latest">New</div> </button>
                                </div>

                                <div class="conversations">
                                    <div class="person" id="person1">
                                        <div class="box">
                                            <div class="image"> <img src="https://cdn2.bigcommerce.com/server5400/3po1k2/products/8171/images/14559/161_light_blue__46032.1418747956.1280.1280.jpg?c=2g" width="50px" height="50px" alt=""> </div>
                                            <div class="online"></div>
                                        </div>

                                        <div class="information">
                                            <div class="username1">Wajid Ali</div>
                                            <div class="content"> <div class="message ">I am great, how are you ? </div> <div class="time"> &bull; Now</div> </div>
                                        </div> 

                                        <div class="status">
                                            <div class="point"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conversations">
                                    <div class="person" id="person2">
                                        <div class="box">
                                            <div class="image"> <img src="https://cdn2.bigcommerce.com/server5400/3po1k2/products/8171/images/14559/161_light_blue__46032.1418747956.1280.1280.jpg?c=2g" width="50px" height="50px" alt=""> </div>
                                            <div class="online"></div>
                                        </div>

                                        <div class="information">
                                            <div class="username">Ahmed Ali</div>
                                            <div class="content"> <div class="message2 ">I am great, how are you ? </div> <div class="time"> &bull; Now</div> </div>
                                        </div> 

                                        <div class="status">
                                            <div class="point"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="conversations">
                                    <div class="person" id="person3">
                                        <div class="box">
                                            <div class="image"> <img src="https://cdn2.bigcommerce.com/server5400/3po1k2/products/8171/images/14559/161_light_blue__46032.1418747956.1280.1280.jpg?c=2g" width="50px" height="50px" alt=""> </div>
                                            <div class="online"></div>
                                        </div>

                                        <div class="information">
                                            <div class="username">Thomas David</div>
                                            <div class="content"> <div class="message3 ">I am great, how are you ? </div> <div class="time"> &bull; Now</div> </div>
                                        </div> 

                                        <div class="status">
                                            <div class="point"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="conversations">
                                    <div class="person" id="person4">
                                        <div class="box">
                                            <div class="image"> <img src="https://cdn2.bigcommerce.com/server5400/3po1k2/products/8171/images/14559/161_light_blue__46032.1418747956.1280.1280.jpg?c=2g" width="50px" height="50px" alt=""> </div>
                                            <div class="online"></div>
                                        </div>

                                        <div class="information">
                                            <div class="username">Asad Khan</div>
                                            <div class="content"> <div class="message4 ">I am great, how are you ? </div> <div class="time"> &bull; Now</div> </div>
                                        </div> 

                                        <div class="status">
                                            <div class="point"></div>
                                        </div>
                                    </div>
                                </div>
                           </div>

                                <div class="right">
                                <div class="top">
                                    <div class="box">
                                        <div class="image"> <img src="https://cdn2.bigcommerce.com/server5400/3po1k2/products/8171/images/14559/161_light_blue__46032.1418747956.1280.1280.jpg?c=2" width="35px" height="35px" alt=""> </div>
                                        <div class="online"></div>
                                    </div>
                                    <div class="information">
                                        <div class="username1" id = "person2">Wajid Ali</div>
                                        <div class="name">Active now</div>
                                    </div>

                                    <div class="options">
                                        <button class="info">&bull;&bull;&bull;</button>
                                    </div>
                                </div>

                                <div class="middle">
                                    <div class="tumbler">   
                                        <div class="messages">
                                            <div class="clip sent">
                                                <div class="text">hey, how you doin!</div>
                                            </div>
                                            <div class="clip received">
                                                <div class="text">I am great, how are you ?</div>
                                            </div>
                                        </div>
                                        <div class="seen">Seen</div>
                                   </div>
                                </div>
                              
                                <div class="bottom">
                                    <div class="cup">
                                    
                                        <textarea id="message" cols="30" rows="1" name="message" placeholder="Message..." ></textarea>
                                        <button type="submit" class="send">Send</button>
                                     
                                    </div>
                             </div>
                    
                        </div>
                  </div>
             </div>

@endsection

@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script>
        $(document).ready( () => { 
const textarea = $("#message");
const send = $('.send');
send.attr('enable', 'enable');
textarea.on('input keydown keyup', function() {
    textarea.height(0).height(this.scrollHeight); 
    if(textarea.val().trim().length > 0){ send.removeAttr('enable'); } 
    else{ send.attr('enable','enable'); }
}).find(textarea).change();
function add(){
    var message = textarea.val().trim();
    $(".messages").append("<div class='clip sent'><div class='text'>"+message+"</div></div>");
  $(".message").html("<b>You : </b>" + message);
  $(".messages").append("<div class='clip received'><div class='text'>"+message+"</div></div>");
  $(".message").html("<b>You : </b>" + message);
    textarea.val("");
    send.attr('enable','enable');
    textarea.focus();
    textarea.height("");
}


textarea.on('keydown', (event) => {  
    if(event.keyCode == 13 && !event.shiftKey){
        if(textarea.val().trim().length > 0){
            send.removeAttr('enable');
            add();
        }
        event.preventDefault();    
    }

});

send.click(() => { 
    add();
});


});

$( '.conversations' ).on( 'click',  function() {
  
  $( '.middle' ).hide('slow').show('slow');
  
});
$(".information").click(function() {
  $(".username").html("Wajid Ali");
});
</script>
@endsection
