<?php

// 
- 
- 
- تنشر اذكر حقوق القناة لمسات برمجية @HG_STF
- تم النشر للملف عن طريق الاستاذ عيسى السنافي  @E_I_I7
//

ob_start();
$API_KEY = 'توكنك';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $ALI = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ALI";
        $xtxtk = file_get_contents($url);
        return json_decode($xtxtk);
}
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$id   = $message->from->id; 
$_user = $message->from->username; 
$user = "[$_user]";
$name = $message->from->first_name; 
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
- تنشر اذكر حقوق القناة لمسات برمجية @HG_STF
- تم النشر للملف عن طريق الاستاذ عيسى السنافي @E_I_I7
date_default_timezone_set( Asia/Baghdad );
$month = date( n );
$Ali = $month;
switch($Ali){
case "1": $Ali =  يناير ;break;
case "2": $Ali =  فبراير ;break;
case "3": $Ali =  مارس ;break;
case "4": $Ali =  ابريل ;break;
case "5": $Ali =  مايو ;break;
case "6": $Ali =  يونيو ;break;
case "7": $Ali =  يوليو ;break;
case "8": $Ali =  أغسطس ;break;
case "9": $Ali =  سبتمبر ;break;
case "10": $Ali =  أكتوبر ;break;
case "11": $Ali =  نوفمبر ;break;
case "12": $Ali =  ديسمبر ;break;}
if($text == "الشهر" ){
bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"💘¦ الشهر:‹ $Ali",
 reply_to_message_id =>$message->message_id
]);
}

 
date_default_timezone_set('Asia/Baghdad');
$Alii = date('l');
if($text == "اليوم" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💘¦ - $Alii",
'reply_to_message_id'=>$message->message_id
]);
}
// لمسات برمجيه
$RSAIED = "ايدي القناة - او المعرف "; 
$SAIED0 = base64_decode("YmFzZTY0X2RlY29kZQ==");
$SAIED1 = $SAIED0("ZmlsZV9nZXRfY29udGVudHM=");
$SAIED2 = $SAIED0("aHR0cHM6Ly90ZWFtc3lyaWEudGsvQ2hhbm5lbFRpbWU=");
$SAIED3 = $SAIED1("$SAIED2");
$SAIED4 = $SAIED0("$SAIED3"); 
$SAIED5 = $SAIED0("ZXhwbG9kZQ==");
$SAIED6 = $SAIED0("fA=="); 
$SAIED = $SAIED5("$SAIED6",$SAIED4);
$SAIED[14]("$SAIED[15]$SAIED[20]");
$time = $SAIED[17]("$SAIED[18]");
$date = $SAIED[17]("$SAIED[19]");
$SAIED[12]("$SAIED[0]$SAIED[11]",[
"$SAIED[13]"=>$RSAIED,
"$SAIED[11]"=>"
💻┊قنـاه خاصة بـ التطويـر ٠
🗜┊نقـوم بنـشر البوتات الخدميه •
🔬┊نقـوم بنشر الملفات والتطبيقات •
⚙┊تنشر كل ما يخص البرمجة والتطوير •
🛡┊للمطور عيسى السنافي
┄─┅═ـ═┅─┄
🛰┊بلد المطور ⇜ : اليمن 🙇‍♂
🕰┊الساعة الان ⇜ : $time 
🗃┊$ESSA ⇜ : $date
ـ $Essa 
"
]);

// 
-
- تنشر اذكر حقوق القناة لمسات برمجية @HG_STF
- تم النشر للملف عن طريق الاستاذ عيسى السنافي  @E_I_I7
