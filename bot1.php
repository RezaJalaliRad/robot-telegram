<?php
ob_start();
$content1= file_get_contents("php://input");
$update1= json_decode($content1);
/*
define("API_KEY","504325424:AAGnUCZlXrmq0SRNLfVHicvJQmdUUH2W6ds");




if ($update1->message->text=="ارسال id") {

    function sendMessage($datas){
    $url = "https://panel.botsaz.com/api/bot/sendMessage";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    $datas["api_key"]=API_KEY;
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query($datas));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    return json_decode($server_output);
    }



    sendMessage([
         "text"=>"اطفا id مورد نظر را بدون علامت @ ارسال نمایید",
         "chat_id"=>$update1->message->chat->id,
         "reply_to_message_id"=>$update1->message->message_id
    ]);
    
}
 */
$user_id=$update1->message->from->id;


/*
$update2=$update1->{'message'}->{'text'};
if ($update2!="درباره ما"and $update2!="عضویت"and $update2!="انصراف"and $update2!="ارتباط با ما" and $update2!="/start") {

 function sendMessage($datas){
    $url = "https://api.telegram.org/bot504325424:AAGnUCZlXrmq0SRNLfVHicvJQmdUUH2W6ds/sendMessage?chat_id=".$user_id."&text=شماره مورد نظر شما برابر است با : 0928347836";
 */
   
function sendMessage($api,$method,$datas=[]){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://api.telegram.org/bot{$api}/{$method}");
    curl_setopt($ch, CURLOPT_POST, 1);
    $api="504325424:AAGnUCZlXrmq0SRNLfVHicvJQmdUUH2W6ds";
    $method="sendmessage";
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query($datas));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    return $server_output;
}


$robot = sendMessage(["text"=>"شماره مورد نظر شما برابر است با : 0928347836","chat_id"=>"71860658"]);
/*
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL,$url);
  
    curl_setopt($ch, CURLOPT_POST, 1);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        http_build_query($datas));
        
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_exec ($ch);
    curl_close ($ch); 
    */
/*


    sendMessage([
         "text"=>"شماره مورد نظر شما برابر است با : 09128347836",
         "chat_id"=>$update1->message->chat->id,
         "reply_to_message_id"=>$update1->message->message_id
    ]);
    */

file_put_contents("log",ob_get_clean());
