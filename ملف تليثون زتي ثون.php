<?php

define('API_KEY','هنا التوكن');
//----######------
function api($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
//##############=--API_REQ
function apiRequest($method, $parameters) {
if (!is_string($method)) {
error_log("Method name must be a string\n");
return false;
}
if (!$parameters) {
$parameters = array();
} else if (!is_array($parameters)) {
error_log("Parameters must be an array\n");
return false;
}
foreach ($parameters as $key => &$val) {
// encoding to JSON array parameters, for example reply_markup
if (!is_numeric($val) && !is_string($val)) {
$val = json_encode($val);
}
}
$url = "https://api.telegram.org/bot".API_KEY."/".$method.'?'.http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
return exec_curl_request($handle);
}
//----######------

$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message = $update->message;
$from_id = $update->message->from->id;
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$date = $update->message->date;
$message_id = $update->message->message_id;
$textmessage = isset($update->message->text)?$update->message->text:'';
$chat = $update->callback_query->message->chat->id;
$mi = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name1 = $update->callback_query->from->first_name;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$from_id_dev = $update->callback_query->from->id;
$reply_id = $update->message->reply_to_message->from->id;
$reply_first_name = $update->message->reply_to_message->from->first_name;
$reply_username = $update->message->reply_to_message->from->username;
$name_fo = $update->message->forward_from->first_name;
$user_fo = $update->message->forward_from->username;
$name_admin = "@E_I_I7";
$name_admin1 = "@f_J_IHh";
$dev = 6335191266;
$dev_s = 6474706413;
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$ida = $New_member->id;
$id_bot = 'your bot id';
$admin = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$from_id");
$title = $update->message->chat->title;
$new = $update->message->new_chat_members;
$lift = $update->message->left_chat_member;
$admin_member = file_get_contents("admins/$chat_id/admin.txt");
$admin_m = explode("\n",$admin_member);
$admin_membe = file_get_contents("admins/$chat_id/admins.txt");
$admin_zm = explode("\n",$admin_membe);
$admin_memberr = file_get_contents("admins/$chat/admin.txt");
$admin_mm = explode("\n",$admin_memberr);
$admin_membee = file_get_contents("admins/$chat/admins.txt");
$admin_zmm = explode("\n",$admin_membee);
# calback lock_
$photo_A = file_get_contents("datas/$chat/photo.txt");
$sticker_A = file_get_contents("datas/$chat/sticker.txt");
$video_A = file_get_contents("datas/$chat/video.txt");
$voice_A = file_get_contents("datas/$chat/voice.txt");
$document_A = file_get_contents("datas/$chat/document.txt");
$ck_A = file_get_contents("datas/$chat/ck.txt");
$chat_i_A = file_get_contents("datas/$chat/chat.txt");
$forward_A = file_get_contents("datas/$chat/forward.txt");
$link_A = file_get_contents("datas/$chat/link.txt");
$tac_A = file_get_contents("datas/$chat/tac.txt");
$imo_A = file_get_contents("datas/$chat/imo.txt");
$game_A = file_get_contents("datas/$chat/game.txt");
$audio_A = file_get_contents("datas/$chat/audio.txt");
$contact_A = file_get_contents("datas/$chat/contact.txt");
$botapi_A = file_get_contents("datas/$chat/botapi.txt");
$arbc_A = file_get_contents("datas/$chat/arabc.txt");
$ang_A = file_get_contents("datas/$chat/ang.txt");
#file lock and nlock
$photo = file_get_contents("datas/$chat_id/photo.txt");
$sticker = file_get_contents("datas/$chat_id/sticker.txt");
$video = file_get_contents("datas/$chat_id/video.txt");
$voice = file_get_contents("datas/$chat_id/voice.txt");
$document = file_get_contents("datas/$chat_id/document.txt");
$ck = file_get_contents("datas/$chat_id/ck.txt");
$chat_i = file_get_contents("datas/$chat_id/chat.txt");
$forward = file_get_contents("datas/$chat_id/forward.txt");
$link = file_get_contents("datas/$chat_id/link.txt");
$tac = file_get_contents("datas/$chat_id/tac.txt");
$imo = file_get_contents("datas/$chat_id/imo.txt");
$game = file_get_contents("datas/$chat_id/game.txt");
$audio = file_get_contents("datas/$chat_id/audio.txt");
$contact = file_get_contents("datas/$chat_id/contact.txt");
$botapi = file_get_contents("datas/$chat_id/botapi.txt");
$_arbc = file_get_contents("datas/$chat_id/arabc.txt");
$ang = file_get_contents("datas/$chat_id/ang.txt");
$li = file_get_contents("datas/$chat_id/li.txt");

# file
$_photo = file_get_contents("data/$chat_id/photo.txt");
$_video = file_get_contents("data/$chat_id/video.txt");
$_sticker	= file_get_contents("data/$chat_id/sticker.txt");
$_doc = file_get_contents("data/$chat_id/doc.txt");
$_voi = file_get_contents("data/$chat_id/voic.txt");
$_chat = file_get_contents("data/$chat_id/chat.txt");
$_ck = file_get_contents("data/$chat_id/ck.txt");
$_forward = file_get_contents("data/$chat_id/forward.txt");
$telink = file_get_contents("data/$chat_id/link.txt");
$_tac = file_get_contents("data/$chat_id/tac.txt");
$_imo = file_get_contents("data/$chat_id/imo.txt");
$_game = file_get_contents("data/$chat_id/game.txt");
$_audio = file_get_contents("data/$chat_id/audio.txt");
$_contact = file_get_contents("data/$chat_id/contact.txt");
$_botapi = file_get_contents("data/$chat_id/botapi.txt");
$arbc = file_get_contents("data/$chat_id/arabc.txt");
$_ang = file_get_contents("data/$chat_id/ang.txt");
$_li = file_get_contents("data/$chat_id/li.txt");

#s فانكشنات
/////////////////////

function send($text,$chat_id) {
api("sendMessage",[
'chat_id' => $chat_id,
'text' => $text
]);
}

function save($filename,$TXTdata)
{
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, "$TXTdata");
fclose($myfile);
}

$run  = file_get_contents("data/$chat_id/run.txt");
$e = explode("\n",$run);


if($text == 'تفعيل'  && !in_array($chat_id,$e)){
if($from_id == $dev or $from_id == $dev_s ){
mkdir("slint");
mkdir("slint/$chat_id");
mkdir("data");
mkdir("data/$chat_id");
mkdir("datas");
mkdir("datas/$chat_id");
mkdir("admins");
mkdir("admins/$chat_id");
mkdir("welcome");
mkdir("welcome/$chat_id");
mkdir("bans");
mkdir("bans/$chat_id");
save("data/$chat_id/run.txt","\n"."$chat_id",FILE_APPEND);
save("datas/$chat_id/photo.txt","null");
save("datas/$chat_id/sticker.txt","null");
save("datas/$chat_id/video.txt","null");
save("datas/$chat_id/voice.txt","null");
save("datas/$chat_id/document.txt","null");
save("datas/$chat_id/ck.txt","null");
save("datas/$chat_id/chat.txt","null");
save("datas/$chat_id/forward.txt","null");
save("datas/$chat_id/link.txt","null");
save("datas/$chat_id/tac.txt","null");
save("datas/$chat_id/imo.txt","null");
save("datas/$chat_id/game.txt","null");
save("datas/$chat_id/audio.txt","null");
save("datas/$chat_id/contact.txt","null");
save("datas/$chat_id/botapi.txt","null");
save("datas/$chat_id/arabc.txt","null");
save("datas/$chat_id/ang.txt","null");
save("datas/$chat_id/li.txt","null");
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ تـم تفعيـل البـوت في المجمـوعـة`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$title" ,'url'=>"t.me/phprim"]],

]
])
]);
}
}
if($text == 'تعطيل' && in_array($chat_id,$e)){
if($from_id ==  $dev or $from_id == $dev_s){
$str = str_replace($chat_id . "\n", '' ,$e);
save("data/$chat_id/run.txt", $str);
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ تمـ تعطيل البوت في المجموعة`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "Bay 🙃",'url'=>"t.me/phprim"]],

]
])
]);
api('leaveChat',[
'chat_id'=>$chat_id,
]);
}
}
if($textmessage == 'تفعيل'  && in_array($chat_id,$e) ){
if($from_id ==   $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ تـم تفعيـل البوت في المجموعـة مسبقآ`",
'reply_to_message_id' => $message_id
]);
}
}
if($text == 'الاوامر' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "اوامـر sσвєʀвσт 🔰⇣

💠 م1 | لـعرض اوامر الحماية
💠 م2 | لـعرض اوامر الادمنية
💠 م3 | لعـرض حالة الحماية",
'reply_to_message_id' => $message_id,
'disable_web_page_preview' => TRUE,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "الدعم الفني 📡",'url' => "https://t.me/joinchat/GCVHrE0ewAjyktxeFOUOQQ"]],
]
])
]);
}
}
if($text == 'م1' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){

 api("sendMessage",[
'chat_id' => $chat_id,
'text' =>  "اومر الحماية : 📋


🔹: قفل/فتح | الملصقات
🔸: قفل/فتح | الصور
🔹: قفل/فتح | الكلايش
🔸: قفل/فتح | الفيديو
🔹: قفل/فتح | الدردشة
🔸: قفل/فتح | الصوتيات
🔹: قفل/فتح | الملفات
🔸: قفل/فتح | اعادة توجية
🔹: قفل/فتح | التاق | #
🔸: قفل/فتح | العربية
🔹: قفل/فتح | الانجليزية
🔸: قفل/فتح | الموسيقى
🔹: قفل/فتح | المعرفات
🔸: قفل/فتح | جهات الاتصال
🔹: قفل/فتح | الالعاب
🔸: قفل/فتح | الروابط
🔹: فتح/قفل | البوتات
🔸: قفل/فتح | اشعارات الدخول

🤩: Dev : @E_I_I7
🤩: Dev : @f_J_IHh",
]);
}
}
if($text == 'م2'){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  api("sendMessage",[
  'chat_id' => $chat_id,
  'text' => "اوامر الادمنيـة 🧐⇣

⛔️: حظر بالرد | لحظر عضو في القروب
🚫: فك الحظر بالرد | فك حظر العضو
🔇: كتم بالرد | لمنع عضو من الكتابة
🔊: فك الكتم بالرد | فك كتم العضو
🔐: قفل | التحكم بالقفل للوسائط
🔓: فتح | التحكم بالفتح للوسائط
📋: اضافة ترحيب + النص | عمل ترحيب
📋: حذف ترحيب | لحذف الترحيب
📮: الترحيب | لعرض الترحيب
📌: ضع رابط + الرابط | لحفظ رابط القروب
✔️: تفعيل التحذيرات | لتشغيل التحذيرات
✖️: تعطيل التحذيرات | لتعطيل التحذيرات

ــ ـ ــ ـ ــ ـ ــ ـ ــ ـ ــ ـ ــ ـ ــ ـ ــ
اوامر للمدير فقط 🤩

🔝: رفع ادمن | لرفع ادمن للبوت
🔘: حذف ادمن | لحذف ادمن من البوت

🤩: Dev : @HG_STF
🤩: Dev : @E_I_I7",
]);
}
}
if($text == 'م3' ){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "حالة الحماية\n\nمفتوح 🔓\nمغلق 🔐",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "الملصقات" ,'callback_data' => "qo"],['text' => "$sticker",'callback_data' => "qo"]],
[['text' => "الصور" ,'callback_data' => "qo"],['text' => "$photo",'callback_data' => "qo"]],
[['text' => "الفيديو" ,'callback_data' => "qo"],['text' => "$video",'callback_data' => "qo"]],
[['text' => "الصوتيات",'callback_data' => "qo"],['text' => "$voice",'callback_data' => "qo"]],
[['text' => "الملفات",'callback_data' => "qo"],['text' => "$document",'callback_data' => "qo"]],
[['text' => "الكلايش",'callback_data' => "qo"],['text' => "$ck",'callback_data' => "qo"]],
[['text' => "الدردشة",'callback_data' => "qo"],['text' => "$chat_i",'callback_data' => "qo"]],
[['text' => "التوجيـة",'callback_data' => "qo"],['text' => "$forward",'callback_data' => "qo"]],
[['text' => "الروابـط",'callback_data' => "qo"],['text' => "$link",'callback_data' => "qo"]],
[['text' => "الاعـلانات",'callback_data' => "qo"],['text' => "$li",'callback_data' => "qo"]],
[['text' => "التـاق",'callback_data' => "qo"],['text' => "$tac",'callback_data' => "qo"]],
[['text' => "المعرفات",'callback_data' => "qo"],['text' => "$imo",'callback_data' => "qo"]],
[['text' => "الالعاب",'callback_data' => "qo"],['text' => "$game",'callback_data' => "qo"]],
[['text' => "الموسيقـى",'callback_data' => "qo"],['text' => "$audio",'callback_data' => "qo"]],
[['text' => "جهات الاتصال",'callback_data' => "qo"],['text' => "$contact",'callback_data' => "qo"]],
[['text' => "البوتات",'callback_data' => "qo"],['text' => "$botapi",'callback_data' => "qo"]],
[['text' => "العربية",'callback_data' => "qo"],['text' => "$_arbc",'callback_data' => "qo"]],
[['text' => "الانجليزية",'callback_data' => "qo"],['text' => "$ang",'callback_data' => "qo"]],
[['text' => "فتح الكل 🔓",'callback_data' => "nlock"],['text' => " اغلاق الكل 🔐",'callback_data' => "lock"]],
[['text' => "افتراضي الحماية 🛡",'callback_data' => "nlock_s"],['text' => " تحـديث ♻️",'callback_data' => "lock_s"]],
[['text' => "✖️",'callback_data' => "lift"]],
 ]
])
]);
}
}
if($data == 'lock'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

   save("datas/$chat/photo.txt","مغلق 🔐");
  save("datas/$chat/sticker.txt","مغلق 🔐");
  save("datas/$chat/video.txt","مغلق 🔐");
  save("datas/$chat/voice.txt","مغلق 🔐");
  save("datas/$chat/document.txt","مغلق 🔐");
  save("datas/$chat/ck.txt","مغلق 🔐");
  save("datas/$chat/forward.txt","مغلق 🔐");
  save("datas/$chat/link.txt","مغلق 🔐");
  save("datas/$chat/tac.txt","مغلق 🔐");
  save("datas/$chat/imo.txt","مغلق 🔐");
  save("datas/$chat/game.txt","مغلق 🔐");
  save("datas/$chat/audio.txt","مغلق 🔐");
  save("datas/$chat/contact.txt","مغلق 🔐");
  save("datas/$chat/botapi.txt","مغلق 🔐");
  save("datas/$chat/li.txt","مغلق 🔐");
  //
  save("data/$chat/photo.txt","1");
  save("data/$chat/sticker.txt","1");
  save("data/$chat/video.txt","1");
  save("data/$chat/voice.txt","1");
  save("data/$chat/document.txt","1");
  save("data/$chat/ck.txt","1");
  save("data/$chat/forward.txt","🔐");
  save("data/$chat/link.txt","1");
  save("data/$chat/tac.txt","1");
  save("data/$chat/imo.txt","1");
  save("data/$chat/game.txt","1");
  save("data/$chat/audio.txt","1");
  save("data/$chat/contact.txt","1");
  save("data/$chat/botapi.txt","1");
  save("data/$chat/li.txt","1");
  api("answerCallbackQuery",[
  'callback_query_id'=>$update->callback_query->id,
  'text' => "◈ تم اغلاق جميع الاوامر في القروب

الاوامر التي لم يتم اغلاقها ⇣

❶ الدردشة
❷ العربية
❸ الانجليزي",
  'show_alert'=>TRUE
  ]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'nlock'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

   save("datas/$chat/photo.txt","مفتوح 🔓");
  save("datas/$chat/sticker.txt","مفتوح 🔓");
  save("datas/$chat/video.txt","مفتوح 🔓");
  save("datas/$chat/voice.txt","مفتوح 🔓");
  save("datas/$chat/document.txt","مفتوح 🔓");
  save("datas/$chat/ck.txt","مفتوح 🔓");
  save("datas/$chat/forward.txt","مفتوح 🔓");
  save("datas/$chat/link.txt","مفتوح 🔓");
  save("datas/$chat/tac.txt","مفتوح 🔓");
  save("datas/$chat/imo.txt","مفتوح 🔓");
  save("datas/$chat/game.txt","مفتوح 🔓");
  save("datas/$chat/audio.txt","مفتوح 🔓");
  save("datas/$chat/contact.txt","مفتوح 🔓");
  save("datas/$chat/botapi.txt","مفتوح 🔓");
  save("datas/$chat/arabc.txt","مفتوح 🔓");
  save("datas/$chat/ang.txt","مفتوح 🔓");
  save("datas/$chat/chat.txt","مفتوح 🔓");
  save("datas/$chat/li.txt","مفتوح 🔓");
  save("data/$chat/photo.txt","");
  save("data/$chat/sticker.txt","");
  save("data/$chat/video.txt","");
  save("data/$chat/voice.txt","");
  save("data/$chat/document.txt","");
  save("data/$chat/ck.txt","");
  save("data/$chat/forward.txt","");
  save("data/$chat/link.txt","");
  save("data/$chat/tac.txt","");
  save("data/$chat/imo.txt","");
  save("data/$chat/game.txt","");
  save("data/$chat/audio.txt","");
  save("data/$chat/contact.txt","");
  save("data/$chat/botapi.txt","");
  save("data/$chat/arabc.txt","");
  save("data/$chat/ang.txt","");
  save("data/$chat/chat.txt","✅");
  save("data/$chat/li.txt","");
    api("answerCallbackQuery",[
  'callback_query_id'=>$update->callback_query->id,
  'text' => "تم فتح الكل بنجاح",
  'show_alert'=>ESSA
  ]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'nlock_s'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

  save("datas/$chat/photo.txt","null");
  save("datas/$chat/sticker.txt","null");
  save("datas/$chat/video.txt","null");
  save("datas/$chat/voice.txt","null");
  save("datas/$chat/document.txt","null");
  save("datas/$chat/ck.txt","null");
  save("datas/$chat/chat.txt","null");
  save("datas/$chat/forward.txt","null");
  save("datas/$chat/link.txt","null");
  save("datas/$chat/tac.txt","null");
  save("datas/$chat/imo.txt","null");
  save("datas/$chat/game.txt","null");
  save("datas/$chat/audio.txt","null");
  save("datas/$chat/contact.txt","null");
  save("datas/$chat/botapi.txt","null");
  save("datas/$chat/arabc.txt","null");
  save("datas/$chat/ang.txt","null");
  api("answerCallbackQuery",[
  'callback_query_id'=>$update->callback_query->id,
  'text' => "تم ضبط الحماية كإفتراضي\nلرؤيتها اضغط على زر تحديث ♻️",
  'show_alert'=>TRUE
  ]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'lock_s'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

   api("editMessageText",[
  'chat_id' => $chat,
  'message_id' => $mi,
  'text' => "حالة الحماية\n\nمفتوح 🔓\nمغلق 🔐",
  'reply_markup' => json_encode([
  'inline_keyboard' => [
  [['text' => "الملصقات" ,'callback_data' => "qo"],['text' => "$sticker_A",'callback_data' => "qo"]],
  [['text' => "الصور" ,'callback_data' => "qo"],['text' => "$photo_A",'callback_data' => "qo"]],
  [['text' => "الفيديو" ,'callback_data' => "qo"],['text' => "$video_A",'callback_data' => "qo"]],
  [['text' => "الصوتيات",'callback_data' => "qo"],['text' => "$voice_A",'callback_data' => "qo"]],
  [['text' => "الملفات",'callback_data' => "qo"],['text' => "$document_A",'callback_data' => "qo"]],
  [['text' => "الكلايش",'callback_data' => "qo"],['text' => "$ck_A",'callback_data' => "qo"]],
  [['text' => "الدردشة",'callback_data' => "qo"],['text' => "$chat_i_A",'callback_data' => "qo"]],
  [['text' => "التوجيـة",'callback_data' => "qo"],['text' => "$forward_A",'callback_data' => "qo"]],
  [['text' => "الروابـط",'callback_data' => "qo"],['text' => "$link_A",'callback_data' => "qo"]],
  [['text' => "التـاق",'callback_data' => "qo"],['text' => "$tac_A",'callback_data' => "qo"]],
  [['text' => "المعرفات",'callback_data' => "qo"],['text' => "$imo_A",'callback_data' => "qo"]],
  [['text' => "الالعاب",'callback_data' => "qo"],['text' => "$game_A",'callback_data' => "qo"]],
  [['text' => "الموسيقـى",'callback_data' => "qo"],['text' => "$audio_A",'callback_data' => "qo"]],
  [['text' => "جهات الاتصال",'callback_data' => "qo"],['text' => "$contact_A",'callback_data' => "qo"]],
  [['text' => "البوتات",'callback_data' => "qo"],['text' => "$botapi_A",'callback_data' => "qo"]],
  [['text' => "العربية",'callback_data' => "qo"],['text' => "$arbc_A",'callback_data' => "qo"]],
  [['text' => "الانجليزية",'callback_data' => "qo"],['text' => "$ang_A",'callback_data' => "qo"]],
  [['text' => " فتح الكل 🔓",'callback_data' => "nlock"],['text' => " اغلاق الكل 🔐",'callback_data' => "lock"]],
  [['text' => "افتراضي الحماية 🛡",'callback_data' => "nlock_s"],['text' => " تحـديث ♻️",'callback_data' => "lock_s"]],
  [['text' => "✖️",'callback_data' => "lift"]],
]
])
  ]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'lift'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

  api("editMessageText",[
    'chat_id' => $chat,
    'message_id' => $mi,
    'parse_mode' => "markdown",
    'text' => "`تم اغلاق صفحة اعدادات الحماية`"
  ]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
$us = explode(" ",$text);
$a = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$us[2]");
$json = json_decode($a);
$id = $json->result->id;
$fris_member = $json->result->first_name;
$user_member = $json->result->username;

if(strpos($text,"رفع ادمن ") !== false && $id == true && !in_array($us[2],$admin_m)){
   if($from_id ==  $dev or $from_id == $dev_s){
   if(in_array($from_id,$admin_zm)){

$s = str_repeat("رفع ادمن ",$us[0],$text);
mkdir("admins");
mkdir("admins/$chat_id");
file_put_contents("admins/$chat_id/admin.txt","\n".$us[2],FILE_APPEND);
api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "markdown",
    'text' => "`تم الترقية 👌🏼\nمن عضو الى ادمن في المجموعة`",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => " $fris_member",'url' => "t.me/$user_member"]],
            ]
         ])
      ]);

  }
 }
}

$us = explode(" ",$text);
$a = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$us[2]");
$json = json_decode($a);
$id = $json->result->id;
$fris_member = $json->result->first_name;
$user_member = $json->result->username;
if(strpos($text,"رفع ادمن ") !== false && $id == true && in_array($us[2],$admin_m) ){
  if($from_id ==  $dev or $from_id == $dev_s or in_array($from_id,$admin_zm)){
 $s = str_repeat("رفع ادمن ",$us[0],$text);
   api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "HTML",
    'text' => "<code>◈ تـم اضافتـة كـإدمـن مسبقـآ 😚🎈</code>" ,
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => " $fris_member",'url' => "t.me/$user_member"]],
          ]
       ])
   ]);

}
}

if($text == 'رفع ادمن' && $reply_id && !in_array($reply_id,$admin_m) && in_array($chat_id,$e)){
if($from_id ==  $dev or $from_id == $dev_s or in_array($from_id,$admin_zm)){
file_put_contents("admins/$chat_id/admin.txt","\n"."$reply_id",FILE_APPEND);
api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "markdown",
    'text' => "`تم الترقية 👌🏼\nمن عضو الى ادمن في المجموعة`",
    'reply_to_message_id' => $message_id,
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
       ]);
 }
}

 if($text == 'رفع ادمن' && $reply_id && in_array($reply_id,$admin_m) && in_array($chat_id,$e)){
   if($from_id ==  $dev or $from_id == $dev_s or in_array($from_id,$admin_zm)){
     api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "HTML",
    'text' => "<code>◈ تـم اضافتـة كـإدمـن مسبقـآ 😚🎈</code>",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
       ]);
}
}
 if($text == 'حذف ادمن' && $reply_id  && in_array($chat_id,$e)  && in_array($reply_id,$admin_m)){
   if($from_id ==  $dev or $from_id == $dev_s or in_array($from_id,$admin_zm)){
  $str = str_replace($reply_id , '' , $admin_m);
  file_put_contents("admins/$chat_id/admin.txt",$str);
  api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
   'text' => "<code>◈ تـم حذفـةة مـن قائمـة الادمن</code>",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
   ]);
 }

}

   if($text == 'حذف ادمن' && $reply_id && !in_array($reply_id,$admin_m) && in_array($chat_id,$e)){
     if($from_id ==  $dev or $from_id == $dev_s or in_array($from_id,$admin_zm)){

  api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
   'text' => "<code>◈ العضو ليس في قائمه الادمنيه</code>",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
   ]);
 }
}
if(strpos($text,"حذف ادمن ") !== false && $id == true && in_array($id,$admin_m)){
  if($from_id ==  $dev or $from_id == $dev_s or in_array($from_id,$admin_zm)){

$s = str_repeat("حذف ادمن ",$us[0],$text);
  $star = str_replace($id , '' , $admin_m);
  file_put_contents("admins/$chat_id/admin.txt",$star);
     api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
   'text' => "<code>◈ تـم حذفـةة مـن قائمـة الادمن</code>",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$fris_member",'url' => "t.me/$user_member"]],
          ]
       ])
   ]);
}
}
if(strpos($text,"حذف ادمن ") !== false && $id == true && !in_array($id,$admin_m)){
  if($from_id ==  $dev or $from_id == $dev_s or in_array($from_id,$admin_zm)){

$s = str_repeat("حذف ادمن ",$us[0],$text);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
   'text' => "<code>◈ العضو ليس في قائمه الادمنيه</code>",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$fris_member",'url' => "t.me/$user_member"]],
          ]
       ])
   ]);
}
}
// رفع مدير

if(strpos($text,"رفع المدير ") !== false && $id == true && !in_array($us[2],$admin_zm)){
if($from_id == $dev or $from_id == $dev_s){

$s = str_repeat("رفع المدير ",$us[0],$text);
mkdir("admins");
mkdir("admins/$chat_id");
file_put_contents("admins/$chat_id/admins.txt","\n".$us[2],FILE_APPEND);
api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "markdown",
     'text' => "`◈ تـم اضافـةة المـديـر في البـوت`",
     'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => " $fris_member",'url' => "t.me/$user_member"]],
          ]
       ])
   ]);

}

}
if(strpos($text,"رفع المدير ") !== false && $id == true && in_array($us[2],$admin_zm) ){
   if($from_id == $dev or $from_id == $dev_s){

$s = str_repeat("رفع المدير ",$us[0],$text);
   api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "HTML",
     'text' => "<code>◈ تـم اضافـةة المـديـر في البـوت مسبقآ</code>" ,
     'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => " $fris_member",'url' => "t.me/$user_member"]],
          ]
       ])
   ]);

}
}
if($text == 'رفع المدير' && $reply_id && !in_array($reply_id,$admin_zm) && in_array($chat_id,$e)){
  if($from_id ==  $dev or $from_id == $dev_s){

mkdir("admins");
mkdir("admins/$chat_id");
file_put_contents("admins/$chat_id/admins.txt","\n".$reply_id,FILE_APPEND);
 api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "markdown",
    'text' => "`◈ تـم اضافـةة المـديـر في البـوت`",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
       ]);

}

}
 if($text == 'رفع المدير' && $reply_id && in_array($reply_id,$admin_zm) && in_array($chat_id,$e)){
 if($from_id ==  $dev or $from_id == $dev_s){

       api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' =>  "HTML",
    'text' => "<code>◈ تـم اضافـةة المـديـر في البـوت مسبقآ</code>" ,
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
       ]);
 }

}
  if($text == 'حذف المدير' && $reply_id  && in_array($chat_id,$e)  && in_array($reply_id,$admin_zm)){
if($from_id ==  $dev or $from_id == $dev_s){

  $str_a = str_replace($reply_id , '' , $admin_zm);
  file_put_contents("admins/$chat_id/admins.txt",$str_a);
  api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
   'text' => "<code>◈ تـم حـذف المـدير مـن قائمـة المدراء</code>",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
   ]);

}
}
   if($text == 'حذف المدير' && $reply_id && !in_array($reply_id,$admin_zm) && in_array($chat_id,$e)){
 if($from_id ==  $dev or $from_id == $dev_s){

  api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
   'text' => "<code>◈ ليس في قائمةة المدراء</code>",
    'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
          ]
       ])
   ]);
 }

 }
if(strpos($text,"حذف المدير ") !== false && $id == true && in_array($id,$admin_zm)){
if($from_id ==  $dev or $from_id == $dev_s){

$s = str_repeat("حذف المدير ",$us[0],$text);
  $star = str_replace($id , '' , $admin_zm);
  file_put_contents("admins/$chat_id/admins.txt",$star);
     api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
         'text' => "<code>◈ تـم حـذف المـدير مـن قائمـة المدراء</code>",
     'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$fris_member",'url' => "t.me/$user_member"]],
          ]
       ])
   ]);
}

}
if(strpos($text,"حذف المدير ") !== false && $id == true && !in_array($id,$admin_zm)){
if($from_id ==  $dev or $from_id == $dev_s){
$s = str_repeat("حذف المدير ",$us[0],$text);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "HTML",
          'text' => "<code>◈ ليس في قائمةة المدراء</code>",
     'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
     'inline_keyboard' => [
         [['text' => "$fris_member",'url' => "t.me/$user_member"]],
          ]
       ])
   ]);
}
}
if($text == 'فتح الصور' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/photo.txt","");
save("datas/$chat_id/photo.txt","مفتوح 🔓");
api("sendMessage",[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
   'text' => "`تـم الغاء قفـل الصـور`",
   'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
  ])
]);
}
}
if($text == 'فتح الملصقات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/sticker.txt","");
save("datas/$chat_id/sticker.txt","مفتوح 🔓");
api("sendMessage",[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
   'text' => "`تـم الغاء قفـل الملصـقات`",
   'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
  ])
]);
}
}
if($text == 'فتح الصوتيات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/voic.txt","");
save("datas/$chat_id/voice.txt","مفتوح 🔓");
api("sendMessage",[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
   'text' => "`تـم الغاء قفـل الصوتيـات`",
   'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
  ])
]);
}
}
if($text == 'فتح الفيديو' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/video.txt","");
save("datas/$chat_id/video.txt","مفتوح 🔓");
api("sendMessage",[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
   'text' => "`تـم الغاء قفـل الفـيديـو`",
   'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
  ])
]);
}
}
if($text == 'فتح الملفات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/doc.txt","");
save("datas/$chat_id/document.txt","مفتوح 🔓");
api("sendMessage",[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
   'text' => "`تـم الغاء قفـل المـلفـات`",
   'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
  ])
]);
}
}
if($text == 'فتح التوجية' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/fo.txt","");
save("datas/$chat_id/forward.txt","مفتوح 🔓");
api("sendMessage",[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
   'text' => "`تـم الغاء قفـل التوجيـة`",
   'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
  ])
]);
}
}
if($text == 'فتح الكلايش' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/ck.txt","");
save("datas/$chat_id/ck.txt","مفتوح 🔓");
api("sendMessage",[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
   'text' => "`تـم الغاء قفـل الكـلايش`",
   'reply_to_message_id' => $message_id,
    'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
  ])
]);
}
}
if($text == 'فتح الدردشة' && in_array($chat_id,$e)){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/chat.txt","");
  save("datas/$chat_id/chat.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل الـدردشـة`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح الروابط' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/link.txt","");
  save("datas/$chat_id/link.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل الروابـط`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح التاق' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/tac","");
  save("datas/$chat_id/tac.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل التـاق`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح المعرفات' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/imo","");
  save("datas/$chat_id/imo.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل المعـرفات`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح الالعاب' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/game","");
  save("datas/$chat_id/game.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل الالعاب`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح الموسيقى' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/audio","");
  save("datas/$chat_id/audio.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل الموسيقى`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح جهات الاتصال' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/contact.txt","");
  save("datas/$chat_id/contact.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل جهات الاتصال`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح العربية' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/arabc.txt","");
  save("datas/$chat_id/arabc.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل العربيـة`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح الانجليزية' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/ang.txt","");
  save("datas/$chat_id/ang.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل الانجليزية`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
if($text == 'فتح الاعلانات' && in_array($chat_id,$e) ){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  save("data/$chat_id/li.txt","");
  save("datas/$chat_id/li.txt","مفتوح 🔓");
  api("sendMessage",[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
     'text' => "`تـم الغاء قفـل الاعلانات`",
     'reply_to_message_id' => $message_id,
      'reply_markup' => json_encode([
     'inline_keyboard' => [
      [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
  ]);
  }
}
 if($text == 'قفل الصور' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الصور بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_photo"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_photo"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_photo"]],
 ]
])
]);

}
}
 if($data == 'de_photo' ){
   if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("slint/$chat/slint.txt",'');
save("data/$chat/photo.txt",1);
save("datas/$chat/photo.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الصـور بالحـذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعيـل قفـل الصـور 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_photo'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("data/$chat/photo.txt",2);
save("datas/$chat/photo.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' =>"`◈ تـم قـفل الصـور بالتصميـت`"
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعيـل قفـل الصـور 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_photo'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("slint/$chat/slint.txt",'');
save("data/$chat/photo.txt",3);
save("datas/$chat/photo.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الصـور بالـطـرد`",
]);
 api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعيـل قفـل الصـور 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->photo and $_photo == 1 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev ){
  if($from_id != $dev_s){
  api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الصـور هـنـا
◈الـتـزم بـ قوانـيـن المجموعـة`",
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
 ]);
}
}
}
}
}
$_a = file_get_contents("slint/$chat_id/slint.txt");
$a = explode("\n",$_a);
if($message->photo and $_photo == 2 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){
  if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الصـور هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
  if($message or $text && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){
  if(strpos($admin,'"status":"member"') !== FALSE){
  if(in_array($from_id,$a)){
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
}
}
}
}
}
}
if($message->photo and $_photo == 3 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){
      if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
  'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الصـور هـنـا
◈ تـم طـرد العضـو مـن القـروب`" ,
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
]);
}
}
}
}
}
if($text == 'قفل الفيديو' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الفيديو بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_video"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_video"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_video"]],
 ]
])
]);
}
}
if($data == 'de_video'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/video.txt",1);
save("datas/$chat/video.txt","مغلق 🔐");
 api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الفيـديـو بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الفيـديو 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_video'){
if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
save("data/$chat/video.txt",2);
save("datas/$chat/video.txt","مغلق 🔐");
 api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الفيـديـو بالـتصميـت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الفيـديو 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_video'){
if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
save("slint/$chat/slint.txt",'');
save("data/$chat/video.txt",3);
save("datas/$chat/video.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الفيـديـو بالطـرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الفيـديو 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->video and $_video == "1" && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الفـيديو هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
 ]);
}
}
}
}
if($message->video and $_video == "2" && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الفـيديو هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($message->video and $_video == "3" && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
 api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
  'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الفـيديو هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
]);
}
}
}
}
}
if($text == 'قفل الملصقات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الملصقات بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_sticker"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_sticker"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_sticker"]],
 ]
])
]);
}
}
if($data == 'de_sticker'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
save("slint/$chat/slint.txt",'');
save("data/$chat/sticker.txt",1);
save("datas/$chat/sticker.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الملصـقات بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الملصـقات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_sticker'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("data/$chat/sticker.txt",2);
save("datas/$chat/sticker.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الملصـقات بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الملصـقات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_sticker'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("slint/$chat/slint.txt",'');
save("data/$chat/sticker.txt",3);
save("datas/$chat/sticker.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الملصـقات بالطـرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الملصـقات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->sticker and $_sticker == 1 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الملصقات هـنـا
◈الـتـزم بـ قوانـيـن المجموعـة`",
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
 ]);
}
}
}
}
if($message->sticker and $_sticker == 2 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

  if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الملصـقات هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($message->sticker and $_sticker == 3 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
 api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
  'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الملصقـات هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
]);
}
}
}
}
}
if($text == 'قفل الملفات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الملفات بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_doc"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_doc"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_doc"]],
 ]
])
]);
}
}
if($data == 'de_doc'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("slint/$chat/slint.txt",'');
save("data/$chat/doc.txt",1);
save("datas/$chat/document.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الملفـات بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الملفـات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_doc'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/doc.txt",2);
save("datas/$chat/document.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الملفـات بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الملفـات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_doc'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/doc.txt",3);
save("datas/$chat/document.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈   تـم قـفل الملفـات بالطـرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الملفـات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->document and $_doc == 1 && in_array($chat_id,$e)){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){

  api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الملفـات هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
 ]);
}
}
}
}
if($message->document and $_doc == 2 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "` ◈ ممنـوع ارسـال الملفـات هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($message->document	and $_doc == 3 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
 ]);
 api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الملفـأت هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
]);
}
}
}
}
}
// lock voic
if($text == 'قفل الصوتيات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الصوتـيات بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_voi"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_voi"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_voi"]],
 ]
])
]);
}
}
if($data == 'de_voi'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/voic.txt",1);
save("datas/$chat/voice.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الصوتيـات بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "  تـم تفعـيـل قـفل الصوتيـات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_voi'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/voic.txt",2);
save("datas/$chat/voice.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الصوتيـات بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الصوتيـات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_voi'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/voic.txt",3);
save("datas/$chat/voice.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الصوتيـات بالطـرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الصوتيـات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->voice and $_voi == 1 && in_array($chat_id,$e)){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){

  api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الصوتيـات هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
 ]);
}
}
}
}
if($message->voice and $_voi == 2 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "` ◈ ممنـوع ارسـال الصوتيـات هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($message->voice and $_voi == 3 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
  'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الصوتيـات هـنـا
◈ تـم طـرد العضـو مـن القـروب`" ,
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
]);
}
}
}
}
}
// lock chat_ dev = @phprim
if($text == 'قفل الدردشة' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
file_put_contents("data/$chat_id/chat.txt","🚫");
file_put_contents("datas/$chat_id/chat.txt","مغلق 🔐");
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ تـم قفـل الدردشة في المجموعـة`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}

if($message and $_chat == "🚫" and $_chat != null and in_array($chat_id,$e)){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
if($from_id != $dev or $from_id == $dev_s){
if(strpos($admin,'"status":"member"') !== FALSE){
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id,
 ]);
}
}
}
}
}
if($text == 'قفل الكلايش' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الكلايـش بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_ck"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_ck"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_ck"]],
 ]
])
]);
}
}
if($data == 'de_ck'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("slint/$chat/slint.txt",'');
save("data/$chat/ck.txt",1);
save("datas/$chat/ck.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈  تـم قـفل الكلايش بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الكلايش 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_ck'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/ck.txt",2);
save("datas/$chat/ck.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الكلايش بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الكلايش 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_ck'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/ck.txt",3);
save("datas/$chat/ck.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈  تـم قـفل الكلايش بالطـرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الكلايش 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
$utext = strlen($text);
if($utext >= 500 and $_ck == 1 and in_array($chat_id,$e)){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){

  api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممـنوع ارسـال رسالة تحتوي ع اكثر من 500 حرف
◈ الـتـزم بـ قوانـيـن المجموعـة`",
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
 ]);
}
}
}
}
if($utext >= 500 and $_ck == 2 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممـنوع ارسـال رسالة تحتوي ع اكثر من 500 حرف
◈ تـم وضـع الصامـت ع العضـو`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($utext >= 500 and $_ck == 3 && in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
 api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
  'parse_mode' => "markdown",
'text' => "`◈ ممـنوع ارسـال رسالة تحتوي ع اكثر من 500 حرف
 ◈ تـم طـرد العضـو مـن القـروب`",
 'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "$name" ,'url' => "t.me/$username"]] ,
]
 ])
]);
}
}
}
}
}
if($text == 'قفل التوجية' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل التوجيـة بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_fo"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_fo"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_fo"]],
 ]
])
]);
}
}
if($data == 'de_fo'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/forward.txt","🔐");
save("datas/$chat/forward.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل التوجيـة بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل اعادة توجيـة 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_fo'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/forward.txt","🚫");
save("datas/$chat/forward.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل التوجيـة بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل اعادة توجيـة 🔐",
'show_alert'=>false
]);
}
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "انت لست ادمن في البوت !!",
'show_alert'=>FALSE
]);
}
if($data == 'ci_fo'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

 save("slint/$chat/slint.txt",'');
save("data/$chat/forward.txt","⭕️");
save("datas/$chat/forward.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل التوجيـة بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل اعادة توجيـة 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
 if($message->forward_from  && !$message->forward_from_chat && $_forward == "🔐" && in_array($chat_id,$e)){
    if(!in_array($from_id,$admin_m)){
   if(!in_array($from_id,$admin_zm)){
     if($from_id != $dev or $from_id != $dev_s){
   
   api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
   api('sendMessage',[
   'chat_id' => $chat_id,
   'parse_mode' => "markdown",
   'text' => "`◈ ممنـوع ارسـال التوجيـة هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
   'reply_markup' => json_encode([
   'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
   ]
    ])
    ]);
   
   }
   }
  }
 }

 if($message->forward_from  && !$message->forward_from_chat && $_forward == "🚫" && in_array($chat_id,$e)){
 if(!in_array($from_id,$admin_m)){
 if(!in_array($from_id,$admin_zm)){
   if($from_id != $dev or $from_id != $dev_s){

  if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال التوجيـة هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($message->forward_from  && !$message->forward_from_chat && $_forward == "⭕️" && in_array($chat_id,$e)){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){

 if(strpos($admin,'"status":"member"') !== FALSE){
  api('deleteMessage',[
 'chat_id' => $chat_id,
 'message_id' => $message_id
 ]);
api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "` ◈ ممنـوع ارسـال التوجيـة هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
# lock forward_from_chat cannel
if($message->forward_from_chat && !$message->forward_from  && $_forward == "🔐" && in_array($chat_id,$e)){
   if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   api('deleteMessage',[
  'chat_id' => $chat_id,
  'message_id' => $message_id
  ]);
  api('sendMessage',[
  'chat_id' => $chat_id,
  'parse_mode' => "markdown",
  'text' => "`◈ ممنـوع ارسـال التوجيـة هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
  'reply_markup' => json_encode([
  'inline_keyboard' => [
   [['text' => "$name" ,'url' => "t.me/$username"]] ,
  ]
   ])
   ]);
 
  }
  }
 }
}

if($message->forward_from_chat  && !$message->forward_from && $_forward == "🚫" && in_array($chat_id,$e)){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){

 if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال التوجيـة هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($message->forward_from_chat  && !$message->forward_from && $_forward == "⭕️" && in_array($chat_id,$e)){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){
 if(strpos($admin,'"status":"member"') !== FALSE){
 api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "` ◈ ممنـوع ارسـال التوجيـة هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
if($text == 'قفل الروابط' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "` قفل الروابـط بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_link"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_link"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_link"]],
 ]
])
]);
}
}
if($data == 'de_link'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/link.txt",1);
save("datas/$chat/link.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الروابـط بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الروابـط 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_link'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/link.txt",2);
save("datas/$chat/link.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الروابـط بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الروابـط 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}

if($data == 'ci_link'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/link.txt",3);
save("datas/$chat/link.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الروابـط بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الروابـط 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}

if(strpos($text,"t.me") !== false or strpos($text,"telegram.me") !== false and in_array($chat_id,$e)){
if($telink == 1){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

      api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال الروابـط هنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
     [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
     ])
     ]);
 
}
}
}
}
}
if(strpos($text,"t.me") !== false or strpos($text,"telegram.me") !== false and in_array($chat_id,$e)){
if($telink == 2){
if(!in_array($from_id,$admin_m)){
if(!in_array($from_id,$admin_zm)){
  if($from_id != $dev or $from_id != $dev_s){

 if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "` ممنـوع ارسـال الروابـط هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
}
if(strpos($text,"t.me") !== false or strpos($text,"telegram.me") !== false and in_array($chat_id,$e)){
  if($telink == 3){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال الروابـط هنـا
◈ تـم طـرد العضـو مـن القـروب`" ,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
}
if($text == 'قفل التاق' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل التـاق بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_tac"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_tac"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_tac"]],
 ]
])
]);
}
}
if($data == 'de_tac'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/tac.txt",1);
save("datas/$chat/tac.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل التـاق بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل التـاق 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_tac'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/tac.txt",2);
save("datas/$chat/tac.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل التـاق بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل التـاق 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_tac'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/tac.txt",3);
save("datas/$chat/tac.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل التـاق بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل التـاق 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if(strpos($text,"#") !== FALSE and $_tac == 1 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){
 
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال التـاق هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
     [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
     ])
     ]);
 
}
}
}
}
if(strpos($text,"#") !== FALSE and $_tac == 2 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال التـاق هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
    ]);
  }
}
}
}
}
if(strpos($text,"#") !== FALSE and $_tac == 3 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
   api("kickChatMember",[
   'chat_id' => $chat_id,
   'user_id' => $from_id
   ]);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "markdown",
   'text' => "`◈ ممنـوع ارسـال التـاق هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
   'reply_markup' => json_encode([
   'inline_keyboard' => [
   [['text' => "$name" ,'url' => "t.me/$username"]] ,
   ]
   ])
   ]);
  }
}
}
}
}
if($text == 'قفل المعرفات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل المعـرفات بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_imo"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_imo"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_imo"]],
 ]
])
]);
}
}
if($data == 'de_iom'){
if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
save("slint/$chat/slint.txt",'');
save("data/$chat/imo.txt",1);
save("datas/$chat/imo.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل المـعرفـات بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل المعـرفات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_imo'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/imo.txt",2);
save("datas/$chat/imo.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل المـعرفـات بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل المعـرفات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}

if($data == 'ci_imo'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/imo.txt",3);
save("datas/$chat/imo.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل المـعرفـات بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل المعـرفات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if(strpos($text,"@") !== FALSE and $_imo == 1 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
    if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){
   
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال المـعرفـات هنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
     [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
     ])
     ]);
 
}
}
}
}
if(strpos($text,"@") !== FALSE and $_imo == 2 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال المـعرفـات هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
    ]);
  }
}
}
}
}
if(strpos($text,"@E_I_I7") !== FALSE and $_imo == 3 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
   api("kickChatMember",[
   'chat_id' => $chat_id,
   'user_id' => $from_id
   ]);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "markdown",
   'text' => "`◈ ممنـوع ارسـال المـعرفـات هنـا
◈ تـم طـرد العضـو مـن القـروب`",
   'reply_markup' => json_encode([
   'inline_keyboard' => [
   [['text' => "$name" ,'url' => "t.me/$username"]] ,
   ]
   ])
   ]);
  }
}
}
}
}
if($text == 'قفل الالعاب' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الالعاب بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_game"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_game"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_game"]],
 ]
])
]);
}
}
if($data == 'de_game'){
if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/game.txt",1);
save("datas/$chat/game.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الالعـاب بالـحذف",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الالعـاب 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_game'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/game.txt",2);
save("datas/$chat/game.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الالعـاب بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الالعـاب 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_game'){
if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
save("slint/$chat/slint.txt",'');
save("data/$chat/game.txt",3);
save("datas/$chat/game.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الالعـاب بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل المعـرفات 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->game and $_game == 1 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){
 
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال الالعـاب هنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
     [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
     ])
     ]);
 
}
}
}
}
if($message->game and $_game == 2 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال الالعـاب هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
    ]);
  }
}
}
}
}
if($message->game and $_game == 3 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

  if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
   api("kickChatMember",[
   'chat_id' => $chat_id,
   'user_id' => $from_id
   ]);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "markdown",
   'text' => "`◈ ممنـوع ارسـال الالعـاب هنـا
◈ تـم طـرد العضـو مـن القـروب`",
   'reply_markup' => json_encode([
   'inline_keyboard' => [
   [['text' => "$name" ,'url' => "t.me/$username"]] ,
   ]
   ])
   ]);
  }
}
}
}
}
if($text == 'قفل الموسيقى' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الموسيقـى بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_a"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_a"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_a"]],
 ]
])
]);
}
}
if($data == 'de_a'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/audio.txt",1);
save("datas/$chat/audio.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الموسيقـى بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الموسيقى 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_a'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("data/$chat/audio.txt",2);
save("datas/$chat/audio.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الموسيقـى بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الموسيقى 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_a'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/audio.txt",3);
save("datas/$chat/audio.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الموسيقـى بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الموسيقى 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->audio and $_audio == 1 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){
   
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال الموسيقـى هنـا
◈ الـتـزم بـ قوانيـن المجموعـة`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
     [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
     ])
     ]);
 
}
}
}
}
if($message->audio and $_audio == 2 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال الموسيقـى هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
    ]);
  }
}
}
}
}
if($message->audio and $_audio == 3 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
   api("kickChatMember",[
   'chat_id' => $chat_id,
   'user_id' => $from_id
   ]);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "markdown",
   'text' => "`◈ ممنـوع ارسـال الموسيقـى هنـا
◈ تـم طـرد العضـو مـن القـروب`",
   'reply_markup' => json_encode([
   'inline_keyboard' => [
   [['text' => "$name" ,'url' => "t.me/$username"]] ,
   ]
   ])
   ]);
  }
}
}
}
}
if($text == 'قفل جهات الاتصال' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل جهات الاتصـال بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_con"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_con"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_con"]],
 ]
])
]);
}
}
if($data == 'de_con'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/contact.txt",1);
save("datas/$chat/contact.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل جهات الاتصال بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل جهات الاتصال 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_con'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

  save("data/$chat/contact.txt",2);
  save("datas/$chat/contact.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل جهات الاتصال بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل جهات الاتصال 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_con'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/contact.txt",3);
save("datas/$chat/contact.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل جهات الاتصال بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل جهات الاتصال 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($message->contact and $_contact == 1 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){
   
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال جهات الاتصال هنـا
◈ الـتـزم بـ قوانيـن المجموعـة`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
     [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
     ])
     ]);
 
}
}
}
}
if($message->contact and $_contact == 2 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال جهات الاتصال هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
    ]);
  }
}
}
}
}
if($message->contact and $_contact == 3 and in_array($chat_id,$e)){
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
   api("kickChatMember",[
   'chat_id' => $chat_id,
   'user_id' => $from_id
   ]);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "markdown",
   'text' => "`◈ ممنـوع ارسـال جهات الاتصال هنـا
◈ تـم طـرد العضـو مـن القـروب`",
   'reply_markup' => json_encode([
   'inline_keyboard' => [
   [['text' => "$name" ,'url' => "t.me/$username"]] ,
   ]
   ])
   ]);
  }
}
}
}
}
if($text == 'قفل البوتات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/botapi.txt",1);
save("datas/$chat_id/botapi.txt","مغلق 🔐");
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ تم قفل دخول البوتـات`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
if($text == 'فتح البوتات' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/botapi.txt","");
save("datas/$chat_id/botapi.txt","مفتوح 🔓");
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ تم فتح دخول البوتـات`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and in_array($chat_id,$e) and $_botapi == 1){
api('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}

if($text == 'قفل العربية' && in_array($chat_id,$e)){
  if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){

    api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
 'text' => "`قفل العـربيـة بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_ar"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_ar"]],
 [['text' => "الطرد 🚫" , 'callback_data' => "ci_ar"]],
 ]
])
]);
}
}
if($data == 'de_ar'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/arabc.txt",1);
save("datas/$chat/arabc.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل العربيـة بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل العربية 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_ar'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

  save("data/$chat/arabc.txt",2);
  save("datas/$chat/arabc.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل العربيـة بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل العربية 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'ci_ar'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){

save("slint/$chat/slint.txt",'');
save("data/$chat/arabc.txt",3);
save("datas/$chat/arabc.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل  العربيـة بالـطرد`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل العربية 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if ( stripos($textmessage, "ش" ) !== false || stripos($textmessage, "س") !== false || stripos($textmessage, "ی") !== false || stripos($textmessage, "ب") !== false || stripos($textmessage, "ل") !== false || stripos($textmessage, "ا") !== false || stripos($textmessage, "ت") !== false || stripos($textmessage, "ن") !== false || stripos($textmessage, "م") !== false || stripos($textmessage, "پ") !== false || stripos($textmessage, "ط") !== false || stripos($textmessage, "ظ") !== false || stripos($textmessage, "ز") !== false || stripos($textmessage, "ژ") !== false || stripos($textmessage, "د") !== false || stripos($textmessage, "ر") !== false || stripos($textmessage, "ک") !== false || stripos($textmessage, "و") !== false || stripos($textmessage, "ج") !== false || stripos($textmessage, "گ") !== false || stripos($textmessage, "چ") !== false || stripos($textmessage, "ح") !== false || stripos($textmessage, "ه") !== false || stripos($textmessage, "خ") !== false
|| stripos($textmessage, "ف") !== false || stripos($textmessage, "ع") !== false and $arbc == 1 and in_array($chat_id,$e)) {
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){
 
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال بـ اللغـة العربيـة هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
     [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
     ])
     ]);
   
  }
  }
  }
}
if ( stripos($textmessage, "ش" ) !== false || stripos($textmessage, "س") !== false || stripos($textmessage, "ی") !== false || stripos($textmessage, "ب") !== false || stripos($textmessage, "ل") !== false || stripos($textmessage, "ا") !== false || stripos($textmessage, "ت") !== false || stripos($textmessage, "ن") !== false || stripos($textmessage, "م") !== false || stripos($textmessage, "پ") !== false || stripos($textmessage, "ط") !== false || stripos($textmessage, "ظ") !== false || stripos($textmessage, "ز") !== false || stripos($textmessage, "ژ") !== false || stripos($textmessage, "د") !== false || stripos($textmessage, "ر") !== false || stripos($textmessage, "ک") !== false || stripos($textmessage, "و") !== false || stripos($textmessage, "ج") !== false || stripos($textmessage, "گ") !== false || stripos($textmessage, "چ") !== false || stripos($textmessage, "ح") !== false || stripos($textmessage, "ه") !== false || stripos($textmessage, "خ") !== false
|| stripos($textmessage, "ف") !== false || stripos($textmessage, "ع") !== false and $arbc == 2 and in_array($chat_id,$e)) {
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
    api('deleteMessage',[
    'chat_id' => $chat_id,
    'message_id' => $message_id
    ]);
    api('sendMessage',[
    'chat_id' => $chat_id,
    'parse_mode' => "markdown",
    'text' => "`◈ ممنـوع ارسـال بـ اللغـة العـربيـة هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
    'reply_markup' => json_encode([
    'inline_keyboard' => [
    [['text' => "$name" ,'url' => "t.me/$username"]] ,
    ]
    ])
    ]);

  }
}
}
}
}
if ( stripos($textmessage, "ش" ) !== false || stripos($textmessage, "س") !== false || stripos($textmessage, "ی") !== false || stripos($textmessage, "ب") !== false || stripos($textmessage, "ل") !== false || stripos($textmessage, "ا") !== false || stripos($textmessage, "ت") !== false || stripos($textmessage, "ن") !== false || stripos($textmessage, "م") !== false || stripos($textmessage, "پ") !== false || stripos($textmessage, "ط") !== false || stripos($textmessage, "ظ") !== false || stripos($textmessage, "ز") !== false || stripos($textmessage, "ژ") !== false || stripos($textmessage, "د") !== false || stripos($textmessage, "ر") !== false || stripos($textmessage, "ک") !== false || stripos($textmessage, "و") !== false || stripos($textmessage, "ج") !== false || stripos($textmessage, "گ") !== false || stripos($textmessage, "چ") !== false || stripos($textmessage, "ح") !== false || stripos($textmessage, "ه") !== false || stripos($textmessage, "خ") !== false
|| stripos($textmessage, "ف") !== false || stripos($textmessage, "ع") !== false and $arbc == 3 and in_array($chat_id,$e)) {
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev or $from_id != $dev_s){

   if(strpos($admin,'"status":"member"') !== FALSE){
    api('deleteMessage',[
   'chat_id' => $chat_id,
   'message_id' => $message_id
   ]);
   api("kickChatMember",[
   'chat_id' => $chat_id,
   'user_id' => $from_id
   ]);
   api("sendMessage",[
   'chat_id' => $chat_id,
   'parse_mode' => "markdown",
   'text' => "`◈ ممنـوع ارسـال بـ اللغـة العـربيـة هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
   'reply_markup' => json_encode([
   'inline_keyboard' => [
   [['text' => "$name" ,'url' => "t.me/$username"]] ,
   ]
   ])
   ]);
  }
}
}
}
}
if($text == 'قفل الانجليزية' && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`قفل الانجليزيـة بـ . .`",
'reply_to_message_id' => $message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
 [['text' => "الحذف 🗑" ,'callback_data' => "de_ang"]] ,
 [['text' => "التصميت 🔇",'callback_data' => "st_ang"]],
 [['text' => "الطرد 🚫",'callback_data' => "l"]],
 ]
])
]);
}
}
if($data == 'de_ang'){
if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
save("slint/$chat/slint.txt",'');
save("data/$chat/ang.txt",1);
save("datas/$chat/ang.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الانجـليزيـة  بالـحذف`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => " تـم تفعـيـل قـفل الانجليزية 🔐",
'show_alert'=>false
]);
}
else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'st_ang'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
  save("data/$chat/ang.txt",2);
  save("datas/$chat/ang.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الانجـليزيـة  بالـتصميت`",
]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الانجليزية 🔐",
'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}
if($data == 'l'){
  if(in_array($from_id_dev,$admin_mm) or in_array($from_id_dev,$admin_zmm) or $from_id_dev == $dev or $from_id_dev == $dev_s){
save("slint/$chat/slint.txt",'');
save("data/$chat/ang.txt",3);
save("datas/$chat/ang.txt","مغلق 🔐");
api("editMessageText",[
'chat_id' => $chat,
'message_id' => $mi,
'parse_mode' => "markdown",
'text' => "`◈ تـم قـفل الانجـليزيـة بالـطرد`",
 ]);
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "تـم تفعـيـل قـفل الانجليزية 🔐",
 'show_alert'=>false
]);
}else{
api("answerCallbackQuery",[
'callback_query_id'=>$update->callback_query->id,
'text' => "عذرآ انت لست ادمن في البوت ⚠️",
'show_alert'=>TRUE
]);
}
}

      if ( stripos($textmessage, "a" ) !== false || stripos($textmessage, "s") !== false || stripos($textmessage, "d") !== false || stripos($textmessage, "f") !== false || stripos($textmessage, "g") !== false || stripos($textmessage, "h") !== false || stripos($textmessage, "j") !== false || stripos($textmessage, "k") !== false || stripos($textmessage, "l") !== false || stripos($textmessage, "z") !== false || stripos($textmessage, "x") !== false || stripos($textmessage, "c") !== false || stripos($textmessage, "v") !== false || stripos($textmessage, "b") !== false || stripos($textmessage, "n") !== false || stripos($textmessage, "m") !== false || stripos($textmessage, "q") !== false || stripos($textmessage, "w") !== false || stripos($textmessage, "e") !== false || stripos($textmessage, "r") !== false || stripos($textmessage, "t") !== false || stripos($textmessage, "y") !== false || stripos($textmessage, "u") !== false || stripos($textmessage, "i") !== false
      || stripos($textmessage, "o") !== false || stripos($textmessage, "p") !== false and $_ang == 1 and in_array($chat_id,$e)) {
        if(!in_array($from_id,$admin_m)){
        if(!in_array($from_id,$admin_zm)){
          if($from_id != $dev ){
            if($from_id != $dev_s){

            api('deleteMessage',[
          'chat_id' => $chat_id,
          'message_id' => $message_id
          ]);
          api('sendMessage',[
          'chat_id' => $chat_id,
          'parse_mode' => "markdown",
          'text' => "`◈ ممنـوع ارسـال بـ اللغـة الانجـليزيـة هـنـا
◈ الـتـزم بـ قوانـيـن المجموعـة`",
          'reply_markup' => json_encode([
          'inline_keyboard' => [
           [['text' => "$name" ,'url' => "t.me/$username"]] ,
          ]
           ])
           ]);
       
      }
    }
  }
}
}
    if ( stripos($textmessage, "a" ) !== false || stripos($textmessage, "s") !== false || stripos($textmessage, "d") !== false || stripos($textmessage, "f") !== false || stripos($textmessage, "g") !== false || stripos($textmessage, "h") !== false || stripos($textmessage, "j") !== false || stripos($textmessage, "k") !== false || stripos($textmessage, "l") !== false || stripos($textmessage, "z") !== false || stripos($textmessage, "x") !== false || stripos($textmessage, "c") !== false || stripos($textmessage, "v") !== false || stripos($textmessage, "b") !== false || stripos($textmessage, "n") !== false || stripos($textmessage, "m") !== false || stripos($textmessage, "q") !== false || stripos($textmessage, "w") !== false || stripos($textmessage, "e") !== false || stripos($textmessage, "r") !== false || stripos($textmessage, "t") !== false || stripos($textmessage, "y") !== false || stripos($textmessage, "u") !== false || stripos($textmessage, "i") !== false
    || stripos($textmessage, "o") !== false || stripos($textmessage, "p") !== false and $_ang == 2 and in_array($chat_id,$e) ) {
      if(!in_array($from_id,$admin_m)){
      if(!in_array($from_id,$admin_zm)){
        if($from_id != $dev ){
          if($from_id != $dev_s){
       if(strpos($admin,'"status":"member"') !== FALSE){
file_put_contents("slint/$chat_id/slint.txt","\n".$from_id,FILE_APPEND);
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api('sendMessage',[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال بـ اللغـة الانجـليزيـة هـنـا
◈ تـم وضـع الصامـت ع العضـو`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
}
if ( stripos($textmessage, "a" ) !== false || stripos($textmessage, "s") !== false || stripos($textmessage, "d") !== false || stripos($textmessage, "f") !== false || stripos($textmessage, "g") !== false || stripos($textmessage, "h") !== false || stripos($textmessage, "j") !== false || stripos($textmessage, "k") !== false || stripos($textmessage, "l") !== false || stripos($textmessage, "z") !== false || stripos($textmessage, "x") !== false || stripos($textmessage, "c") !== false || stripos($textmessage, "v") !== false || stripos($textmessage, "b") !== false || stripos($textmessage, "n") !== false || stripos($textmessage, "m") !== false || stripos($textmessage, "q") !== false || stripos($textmessage, "w") !== false || stripos($textmessage, "e") !== false || stripos($textmessage, "r") !== false || stripos($textmessage, "t") !== false || stripos($textmessage, "y") !== false || stripos($textmessage, "u") !== false || stripos($textmessage, "i") !== false
|| stripos($textmessage, "o") !== false || stripos($textmessage, "p") !== false and $_ang == 3 and in_array($chat_id,$e)) {
  if(!in_array($from_id,$admin_m)){
  if(!in_array($from_id,$admin_zm)){
    if($from_id != $dev ){
    if($from_id != $dev_s){
   if(strpos($admin,'"status":"member"') !== FALSE){
api('deleteMessage',[
'chat_id' => $chat_id,
'message_id' => $message_id
]);
api("kickChatMember",[
'chat_id' => $chat_id,
'user_id' => $from_id
]);
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'text' => "`◈ ممنـوع ارسـال بـ اللغـة  الانجـليزيـة هـنـا
◈ تـم طـرد العضـو مـن القـروب`",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
]);
}
}
}
}
}
}
if($text == 'فتح اشعارات الدخول' and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/new_chat.txt",'');
 api("sendMessage",array('chat_id' => $chat_id , 'text' => "◈ تمـ الغاء قفل اشعارات الدخول", 'reply_to_message_id' => $message_id,'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
));
}
}
$new_chat = file_get_contents("data/$chat_id/new_chat.txt");
if($text == 'قفل اشعارات الدخول' and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
save("data/$chat_id/new_chat.txt",1);
api("sendMessage",array('chat_id' => $chat_id , 'text' => "◈ تمـ قفل اشعارات الدخول", 'reply_to_message_id' => $message_id,'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "$name" ,'url' => "t.me/$username"]] ,
]
])
));
}
}
if($message->new_chat_members and $new_chat == 1){
  api('deleteMessage',[
  'chat_id' => $chat_id,
  'message_id' => $message_id
  ]);
}
if ($text == 'كتم' && $reply_id && in_array($chat_id,$e)) {
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
   if(!in_array($reply_id,$admin_m)){
      if(!in_array($reply_id,$admin_zm)){
        if($reply_id != $dev ){
          if($reply_id != $dev_s){
       if(strpos($admin,'"status":"member"') !== TRUE){
   api('restrictChatMember',[
       'chat_id'=>$chat_id,
       'user_id'=>$reply_id,
       'can_send_messages'=>false
      ]);
   api('sendMessage',[
           'chat_id'=>$chat_id,
           'text'=>"◈ تمـ كتم العضو 🔇",
           'reply_to_message_id' => $message_id,
           'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
                 ]
              ])
           ]);
   }
 }
        }
      }
   }
}
}
if ($text == 'فك الكتم' && $reply_id && in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  if(!in_array($reply_id,$admin_m)){
      if(!in_array($reply_id,$admin_zm)){
        if($reply_id != $dev ){
          if($reply_id != $dev_s){
       if(strpos($admin,'"status":"member"') !== TRUE){
   api('promoteChatMember',[
       'chat_id'=>$chat_id,
       'user_id'=>$reply_id,
       'can_send_messages'=>true
      ]);
   api('sendMessage',[
           'chat_id'=>$chat_id,
           'text'=>"◈ تمـ فك كتم العضو 🔈",
           'reply_to_message_id' => $message_id,
           'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
                 ]
              ])
           ]);
   }
 }
        }
      }
  }
}
}
 $ban = file_get_contents("bans/$chat_id/ban.txt");
 $b = explode("\n",$ban);
 $bana = file_get_contents("bans/$chat_id/bans.txt");
 $bs = explode("\n",$bana);
if($text == 'حظر' && $reply_id && in_array($chat_id,$e) && !in_array($reply_id,$bs)){
if(in_array($reply_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
 if(!in_array($reply_id,$admin_m)){
      if(!in_array($reply_id,$admin_zm)){
        if($reply_id != $dev ){
          if($reply_id != $dev_s){
       if(strpos($admin,'"status":"member"') !== TRUE){
file_put_contents("bans/$chat_id/ban.txt","\n"."الاسم : " . $reply_first_name . "\nالايدي : " . $reply_id,FILE_APPEND);
file_put_contents("bans/$chat_id/bans.txt","\n".$reply_id,FILE_APPEND);
  api("kickChatMember",[
  'chat_id' => $chat_id,
  'user_id' => $reply_id
  ]);
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ تم حظر العضو من القروب",
'reply_to_message_id' => $message_id,
 'reply_markup' => json_encode([
'inline_keyboard' => [
    [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
     ]
  ])
]);
}
}
}
}
}
}
}
if($text == 'حظر' && $reply_id && in_array($chat_id,$e) && in_array($reply_id,$bs)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ تمـ حظر العضو مسبقآ ",
'reply_to_message_id' => $message_id,
 'reply_markup' => json_encode([
'inline_keyboard' => [
    [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
     ]
  ])
]);
}
}
if($text == 'فك الحظر' && $reply_id && in_array($chat_id,$e) && in_array($reply_id,$bs)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
  if(!in_array($reply_id,$admin_m)){
      if(!in_array($reply_id,$admin_zm)){
        if($reply_id != $dev ){
          if($reply_id != $dev_s){
       if(strpos($admin,'"status":"member"') !== TRUE){
  $st = str_replace("\n"."الاسم : " . $reply_first_name . "\nالايدي : " . $reply_id, '' ,$ban);
  save("bans/$chat_id/ban.txt", $st);
  $z = str_replace($reply_id,'',$bana);
  save("bans/$chat_id/bans.txt",$z);
  api("unbanChatMember",[
  'chat_id' => $chat_id,
  'user_id' => $reply_id
  ]);
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ تم فك الحظر عن العضو",
'reply_to_message_id' => $message_id,
 'reply_markup' => json_encode([
'inline_keyboard' => [
    [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
     ]
  ])
]);
}
}
}
}
}
}
}
if($text == 'فك الحظر' && $reply_id && in_array($chat_id,$e) && !in_array($reply_id,$bs)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ العضو ليس في قائمة الحظر",
'reply_to_message_id' => $message_id,
 'reply_markup' => json_encode([
'inline_keyboard' => [
    [['text' => "$reply_first_name ",'url' => "t.me/$reply_username"]],
     ]
  ])
]);
}
}
if($text == 'المحظورين' &&  in_array($chat_id,$e) && $ban != null){  
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",array('chat_id' => $chat_id, 'text' => file_get_contents("bans/$chat_id/ban.txt")));
}
}
if($text == 'المحظورين' &&  in_array($chat_id,$e) && $ban == null){  
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
 api("sendMessage",[
     'chat_id' => $chat_id,
     'text' => "لا يوجد محظورين",
      'reply_to_message_id' => $message_id,
     ]);
}
}
if($new and !in_array($chat_id,$e)){
   api("sendMessage",[
    'chat_id' => $chat_id,
    'text' => "تحية للجميع 🙊✋🏻
اسمي: sσвєʀвσт اقوم ب مساعدة
المدراء لحماية المجموعات من المخربين ..
ـ ــ ـ ــ ـ ــ ـ ــ ـ ــ ـ ــ ـ ــ ـ
لتفعيل البوت في القروب راسل احد المطورين ..
🤩: Dev : @phprim
🤩: Dev : @ieoooo",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "الدعم الفني 📡",'url' => "https://t.me/joinchat/GCVHrE0ewAjyktxeFOUOQQ"]],
]
])
  ]);
}
$new_member = $update->message->new_chat_member;
if(strpos($text,"اضف ترحيب ") !== false and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
$text = str_replace("اضف ترحيب ", "", $text) ;
file_put_contents("welcome/$chat_id.txt",$text);
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode' => "markdown",
'disable_web_page_preview'=>true,
'text' => "◈ تم إضافة الترحيب \n $text",
]);
}
}
$check = file_get_contents("welcome/$chat_id.txt");
$json_id = file_get_contents("welcome/$chat_id.json");

if($new_member and $chat_id != $check and $check != null and in_array($chat_id,$e)){
if($chat_id != $json_id){
api("sendMessage",[
'chat_id' => $chat_id,
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'text' =>   file_get_contents("welcome/$chat_id.txt"),
'reply_to_message_id' => $message_id,

'reply_markup' =>json_encode([
'inline_keyboard' =>[
 [["text" =>"$name",  "url" =>"https://t.me/$username"]],
]
])
]);
}
}

if($new_member and $chat_id == $check and in_array($chat_id,$e)){
if($chat_id != $json_id){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ نـوورت/ي القـروب 🙊✋🏻",
'reply_to_message_id' => $message_id,

'reply_markup' =>json_encode([
'inline_keyboard' =>[
 [["text" =>"$name",  "url" =>"https://t.me/$username"]],
]
])
]);
}
}

if($text == "حذف الترحيب"  and $chat_id != $check  and $check != null and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id != $json_id){
unlink("welcome/$chat_id.txt");
file_put_contents("welcome/$chat_id.txt",$chat_id);
api("sendMessage",[
   'chat_id' => $chat_id,
   'text' => "◈ تمـ حذف الترحيب اليدوي سيتم أعتماد ترحيب المطورين",
   'reply_to_message_id' => $message_id,
   ]);
}
}
}
if($text == "حذف الترحيب" and $chat_id == $check and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id != $json_id){
api("sendMessage",[
   'chat_id' => $chat_id,
   'text' => "◈ تمـ حذف الترحيب مسبقآ
◈ الان يعمل ترحيب المطورين",
'reply_to_message_id' => $message_id,
   ]);
}
}
}
if($text == "حذف الترحيب" and $chat_id != $check and $check == null and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id != $json_id){
api("sendMessage",[
   'chat_id' => $chat_id,
   'text' => "◈ لايوجـد ترحـيب يـدوي
◈ الان يعمل ترحيب المطورين",
'reply_to_message_id' => $message_id,
     ]);
}
}
}
if($text == 'الترحيب' and $chat_id == $check and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id != $json_id){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ تمـ حذف الترحيب مسبقآ
◈ الان يعمل ترحيب المطورين",
'reply_to_message_id' => $message_id,

]);
}
}
}
if($text == 'الترحيب' and $chat_id != $check and  $check != null and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id != $json_id){
api("sendMessage",[
'chat_id' => $chat_id,
'text' =>"الترحيب الخاص بالقروب هو \n\n" . file_get_contents("welcome/$chat_id.txt"),
'reply_to_message_id' => $message_id,

]);
}
}
}
if($text == 'الترحيب'  and $check == null and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id != $json_id){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ لايوجـد ترحـيب يـدوي
◈ الان يعمل ترحيب المطورين",
'reply_to_message_id' => $message_id,

]);
}
}
}
if($new_member and !$check and in_array($chat_id,$e)){
if($chat_id != $json_id){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ نـوورت/ي القـروب 🙊✋🏻",
'reply_to_message_id' => $message_id,

'reply_markup' =>json_encode([
'inline_keyboard' =>[
 [["text" =>"$name",  "url" =>"https://t.me/$username"]],
]
])
]);
}
}


if($text == 'تعطيل الترحيب'and $chat_id != $json_id and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
file_put_contents("welcome/$chat_id.json",$chat_id);
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ تمـ الغاء تفعيل الترحيب",
'reply_to_message_id' => $message_id,
 ]);
}
}
if($text == 'تعطيل الترحيب'and $chat_id == $json_id and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
api("sendMessage",[
'chat_id' => $chat_id,
'text' => "◈ تمـ الغاء تفعيل الترحيب مسبقآ",
'reply_to_message_id' => $message_id,
 ]);
}
}
if($text == 'تفعيل الترحيب' and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id == $json_id){
file_put_contents("welcome/$chat_id.json","");
api("sendMessage",[
 'chat_id' => $chat_id,
 'text' => "◈ تمـ تفعيل الترحيب في المجموعة",
 'reply_to_message_id' => $message_id,
 ]);
}
}
}
if($text == "تفعيل الترحيب" and in_array($chat_id,$e)){
if(in_array($from_id,$admin_m) or in_array($from_id,$admin_zm) or $from_id == $dev or $from_id == $dev_s){
if($chat_id != $json_id){
api("sendMessage",[
 'chat_id' => $chat_id,
 'text' => "◈ تمـ تفعيل الترحيب في المجموعة مسبقآ",
 'reply_to_message_id' => $message_id,

  ]);
}
}
}
ᯓ َِZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - قائمـة الاوامر
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎆ مرحبا عزيزي مطور السورس ESSA alsnofu
⎆ ضـع نقطة (.) بداية كل امـر :

 .م1    ➥ أوامـر البحـث والتحميــل 
 .م2    ➥ أوامـر البــوت
 .م3    ➥ أوامـر الـوقتــي
 .م4    ➥ أوامـر المجمــوعــه¹
 .م5    ➥ أوامـر المجمــوعــه²
 .م6    ➥ أوامـر الحســاب
 .م7    ➥ أوامـر الميـديـا والصيــغ
 .م8    ➥ أوامـر الفــارات
 .م9    ➥ أوامـر الـخدمــات
 .م10  ➥ أوامـر الالـعــاب
 .م11  ➥ أوامـر التســليـه
 .م12  ➥ أوامـر التحشيـش
 .م13  ➥ أوامـر الستـوريات
 .م14  ➥ أوامـر الآفتــارات
.م15  ➥ أوامـر الصيـد والتشـكـير
.م16  ➥ أوامـر النشــر التلقــائي
.م17  ➥ أوامـر تجميــع النقــاط
.م18  ➥ أوامـر الاشتــراك الاجبــاري
.م19  ➥ أوامـر الاضــافه والتفليــش
.م20  ➥ اوامر رشق المشاهدات
.م21  ➥ أوامـر رشق التفاعلات
.م22  ➥ أوامـر حالات الحساب
.م23  ➥ اوامر بوت تحميل الافلام
.م24  ➥ اوامر بوت الاختراق
.م25  ➥ اوامر المطور المساعد
.م26  ➥ اوامر بوت البروكسي
.م27  ➥ اوامر بوت فاذر
.م28  ➥ قائمه المطورين
.م29  ➥ اوامر الزخرفه
.م30  ➥ التحديثات الجديدة
.م31  ➥ اوامر الانتحال
.م32  ➥ اوامر التقليد
.م33  ➥ العاب المتطورة
.م34  ➥ اوامر بوت الجلسات
.م35  ➥ اوامر البلاغات
.م36  ➥ اوامر الافلام والمسلسلات
.م37  ➥ اوامر تحميل الصور
.م38` ➥ أوامـر اخــرى
.م39  ➥ اوامر بوت دعمكم
.م40  ➥ اوامر الروابط
.م41  ➥ اوامر الذاتية
.م42  ➥ اوامر بوت فك الحظر
.م43  ➥ اوامر المكالمات
.م44  ➥ اوامر الميوزك
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ الـوقتــي .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .الاسم تلقائي
لوضـع اسـم وقتـي لحسابـك يتغيـر تلقائيـاً كـل دقيقـه مـع الوقـت


⎞𝟐⎝ .البايو تلقائي
لوضـع بايـو وقتـي يتغيـر تلقائـياً مع الوقـت كـل دقيقـه .. اولاً قـم بالـرد ع نـص البايـو بالامـر (.اضف البايو) 


⎞𝟑⎝ .البروفايل تلقائي 
لوضـع بروفايـل وقتـي يتغيـر تلقائيـاً مع حسابـك كل دقيقـه اولاً قـم بالـرد ع الصـوره بالامـر (.اضف صورة الوقتي)


⎞𝟒⎝ .انهاء الاسم / .انهاء البايو / .انهاء البروفايل
لـ الغــاء الاوامـِـࢪ الوقتيــه مـن حســابـك


⎞𝟓⎝ .اوامر الوقتي 
لـ عـرض أوامـر زخرفـة الاسـم والبروفـايل الوقتـي


 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ المجمــوعــه¹ .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .البوتات
كشـف وتنظيف مجموعتـك من البوتات .. لمنع التصفير والتفليش والتخريب

⎞𝟐⎝ .قفل البوتات / .فتح البوتات
قفـل البوتـات بالطـرد التلقائـي .. الامر يمنع حتى المشـرفين من اضافـة البوتات .. في حـال اراد احد المشرفين رفـع بوت وتصفير مجموعتك اثنـاء غيابـك.

⎞𝟑⎝ .قفل الاضافه / .فتح الاضافه  
قفـل اضافـة الاعضـاء بالطـرد .. مـع تحذيـر صاحـب الاضـافه

⎞𝟒⎝ .قفل الدخول / .فتح الدخول 
قفـل الدخـول بالرابـط بالطـرد التلقائـي .. حيث يقـوم بطـرد المنضم تلقائيـاً .. مـع ارسـال رسـاله تحذيريـه

⎞𝟓⎝ .قفل الميديا \ .فتح الميديا 
قفـل الوسائـط بالمسـح + تقييـد المرسـل من صلاحيـة ارسال الوسائط تلقائيـاً .. مع السمـاح له بارسـال الرسـائل فقـط .. يفيدكـم بـ منـع التفليـش الاباحـي في حال غيابكـم او انشغـالكم .. يسمـح للمشـرفين فقـط بارسـال الوسائـط



⎞𝟓⎝ .قفل تعديل الميديا \ .فتح تعديل الميديا 
قفـل تعديـل الوسائـط بالمسـح + تحذيـر المرسـل تلقائيـاً .. يفيدكـم لـ منـع التفليـش عبـر التعديـل في حال غيابكـم او انشغـالكم .. لايسمـح للمشـرفين ايضـاً بتعديـل الوسائـط

⎞𝟔⎝ .قفل الفشار / .فتح الفشار
لـ مسـح رسـائل الفشار والسب والتكفير تلقائيـاً .. مـع تحذيـر الشخـص المرسـل 

⎞𝟕⎝ .قفل الفارسيه / .فتح الفارسيه
لـ مسـح رسـائل الايرانيين وبوتات الاعلانات الفارسيه تلقائيـاً.. مـع تحذيـر الشخـص المرسـل

⎞𝟖⎝ .قفل الروابط / .فتح الروابط
قفـل الروابـط بالمسـح التلقائـي .. مع تحذير الشخص المرسل

⎞𝟗⎝.قفل المعرفات / .فتح المعرفاتقفـل المعرفـات بالمسـح التلقائـي .. مع تحذير الشخص المرسل

⎞𝟏𝟎⎝ .قفل التوجيه / .فتح التوجيه
قفـل الرسائل الموجهه من القنوات بالمسـح التلقائـي .. مع تحذير الشخص ..

⎞𝟏𝟏⎝ .قفل الانلاين / .فتح الانلاين
قفـل رسائل الانلايـن والهمسـات بالمسـح التلقائـي .. مع تحذير الشخص .. يسمـح للمشرفين فقـط بارسال الانلايـن

⎞𝟏𝟐⎝ .قفل الكل / .فتح الكل
لـ قفـل او فتـح كـل الأوامـر السابقـه

⎞𝟏𝟑⎝ .قيد / .فتح الكل
لـ تقييـد محتـوى مجمـوعتك او قناتـك

⎞𝟏𝟒⎝ .الاعدادات
لـ عـرض اعدادات المجمـوعـة

 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ الحســاب 🚹 .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .ايدي او .ا
⦇.ايدي بالـرد او + معـرف/ايـدي الشخص⦈ لـ عـرض معلومـات الشخـص

⎞𝟐⎝ .الايدي
⦇.الايدي بالـرد⦈ لـ جلـب ايـدي الشخـص والكـروب

⎞𝟑⎝ .حزمة
⦇.صورته بالـرد / .صورته الكل بالـرد⦈ لـ جـلب جميـع بروفـايلات الشخـص

⎞𝟒⎝ .اسمي / .اسمه
⦇.اسمه بالـرد⦈ لـ جـلب اسـم الشخـص

⎞𝟓⎝ .الاسماء
⦇.الاسماء بالـرد / .الاسماء + معـرف او ايدي الشخـص⦈ لـ جـلب قائمـة بسجـل اسمـاء حسـاب الشخـص

⎞𝟔⎝ .المعرفات
⦇.المعرفات بالـرد / .المعرفات + معـرف او ايدي الشخـص⦈ لـ جـلب قائمـة بسجـل معـرفـات حسـاب الشخـص

⎞𝟕⎝ .تخزين الخاص تفعيل
⦇الامـر + تفعيل او تعطيل⦈ لـ تخـزين جميـع رسـائل الخـاص بـ كـروب التخـزين

⎞𝟖⎝ .تخزين الكروبات تفعيل
⦇الامـر + تفعيل او تعطيل⦈ لـ تخـزين جميـع تاكـات المـجـموعات بـ كـروب التخـزين


- اوامـِـࢪ حمـايــة الخــاص🛡 :

⎞𝟗⎝ .الحمايه تفعيل
لـ تفعيـل حمايـة الخـاص لـ حسـابك

⎞𝟏𝟎⎝ .الحمايه تعطيل
لـ تعطيـل حمايـة الخـاص لـ حسـابك

⎞𝟏𝟏⎝ .قبول
لـ السمـاح لـ الشخـص بـ ارسـال رسـائل الخـاص اثنـاء تفعيـل حمـاية الخـاص بحسـابك بـدون تحـذير

⎞𝟏𝟐⎝ .رفض
لـ رفـض الشخـص من ارسـال رسـائل الخـاص اثنـاء تفعيـل حمـاية الخـاص بحسـابك

⎞𝟏𝟑⎝ .مرفوض
لـ حظـر الشخـص من الخـاص دون تحـذير

⎞𝟏𝟒⎝ .المقبولين
لـ عـرض قائمـة بالاشخـاص المقبـولين


- اوامـِـࢪ الحظــر - الكتــم - الطــرد 🔕 :

⎞𝟏𝟓⎝ .حظر  /  .الغاء حظر

⎞𝟏𝟔⎝ .كتم  /  .الغاء كتم

⎞𝟏𝟕⎝ .طرد

⎞𝟏𝟖⎝ .ح عام

⎞𝟏𝟗⎝ .الغاء ح عام

⎞𝟐𝟎⎝ .ك عام

⎞𝟐𝟏⎝ .الغاء ك عام

⎞𝟐𝟐⎝ .ط عام

⎞𝟐𝟑⎝ .الحاظرهم
لـ جلب قائمـه بالاشخاص المحظورين خاص

⎞𝟐𝟒⎝ .رسائلي / .رسائله
لـ عـرض عـدد رسائلك او رسائل شخص في المجمـوعـة

⎞𝟐𝟓⎝ .حذف رسائلي + عـدد
لـ حـذف رسائلك من المجمـوعـة

⎞𝟐𝟔⎝ .احذف + معـرف
لـ حذف دردشـة مع شخص من الخاص
ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ الميــديـا والصيــغ .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .ملصق
⦇.ملصق بالـرد ع صـوره او فيديـو⦈ لـ صنـع ملصـق او ملصـق فيديـو متحـرك

⎞𝟐⎝ .حزمه
⦇.حزمه بالـرد ع ملصـق⦈ لـ تفكيـك حزمـة ملصـق مـا وصنعهـا بحقوقـك

⎞𝟑⎝ .حزمة
⦇.حزمة + اسـم بالـرد ع ملصـق⦈ لـ تفكيـك حزمـة ملصـق مـا وصنعهـا بحقـوق الاسـم الـذي ادخلتـه

⎞𝟒⎝ .معلومات الملصق
⦇الامـر بالـرد ع ملصـق⦈ لـ جـلب معلومـات حزمـة الملصـق

⎞𝟓⎝ .ملصقات
⦇الامـر + اسـم⦈ لـ البحـث عن حـزم ملصقـات بـ الاسـم


⎞𝟔⎝ .لملصق
⦇الامـر بالـرد ع صـوره⦈ لـ تحويـل الصـوره لـ ملصـق

⎞𝟕⎝ .لصوره
⦇الامـر بالـرد ع ملصـق⦈ لـ تحويـل الملصـق لـ صـوره

⎞𝟖⎝ .لفيد
⦇الامـر بالـرد ع صـوره او ملصـق⦈ لـ تحويـلهـا لـ تصميـم فيديـو 

⎞𝟗⎝ .دائري
⦇الامـر بالـرد ع صـوره او ملصـق او فيديـو او متحركـه⦈ لـ تحويـلهـا لـ تصميـم فيديـو دائـري

⎞𝟏𝟎⎝ .لمتحركة
⦇الامـر بالـرد ع ملصـق متحـرك⦈ لـ تحويـله لـ متحـركـه

⎞𝟏𝟏⎝ .حول بصمه
⦇الامـر بالـرد ع فيديـو⦈ لـ استخـراج الصـوت كـ تسجيل صوت بصمه

⎞𝟏𝟑⎝ .حول صوت
 ⦇الامـر بالـرد ع فيديـو⦈ لـ استخـراج الصـوت كـ ملـف صوت MP3

⎞𝟏𝟒⎝ .لمتحركه
 ⦇الامـر بالـرد ع صـوره او ملصـق⦈ لـ تحويـلهـا الـى متحـركـه

⎞𝟏𝟓⎝ .لمتحرك
 ⦇الامـر بالـرد ع فيديـو⦈ لـ تحويـله الـى متحـركـه

 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ الفــارات 
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .اوامر الفارات
لعـرض اوامـِـࢪ الفــارات الجـديـده
⎞𝟐⎝ .جلب
⦇الامـر + اسـم الفـار⦈ لـ جـلب قيمـة الفـار المحـدد
⎞𝟑⎝ .حذف
⦇الامـر + اسـم الفـار⦈ لـ حـذق قيمـة الفـار المحـدد
⎞𝟒⎝ .استخدامي
لـ عـرض ساعـات الاستخـدام والساعـات المتبقيـه لـ بـوتك

⎉╎قائمـة أوامـر تغييـر فـارات الصـور بأمـر واحـد فقـط - لـ اول مـره ع سـورس تليثـون يوزر بـوت 🦾 :
⎞𝟓⎝ .اضف صورة الفحص
⦇الامـر بالـرد ع صـوره او ميـديـا⦈
⎞𝟔⎝ .اضف صورة الوقتي
⦇الامـر بالـرد ع صـوره او ميـديـا⦈
⎞𝟕⎝ .اضف صورة الفحص
⦇الامـر بالـرد ع صـوره او ميـديـا⦈
⎞𝟕⎝ .اضف صورة الاوامر
⦇الامـر بالـرد ع صـوره او ميـديـا⦈
⎞𝟕⎝ .اضف صورة البوت
⦇الامـر بالـرد ع صـوره او ميـديـا⦈

⎉╎قائـمه اوامر تغييـر بقيـة الفـارات بأمـر واحـد فقـط :
⎞𝟖⎝ .اضف كليشة الحماية
⦇الامـر بالـرد ع نـص الكليشـه⦈
⎞𝟗⎝ .اضف كليشة الفحص
⦇الامـر بالـرد ع نـص الكليشـه⦈

⎞𝟏𝟎⎝ .اضف رمز الوقتي
⦇الامـر بالـرد ع الـرمـز⦈
⎞𝟏𝟏⎝ .اضف زخرفة الوقتي
⦇الامـر بالـرد ع ارقـام الزخـرفـه⦈
⎞𝟏𝟑⎝ .اضف البايو الوقتي
 ⦇الامـر بالـرد ع البـايـو⦈
⎞𝟏𝟒⎝ .اضف اسم المستخدم
 ⦇الامـر بالـرد ع نـص الاسـم⦈
⎞𝟏𝟓⎝ .اضف كروب الرسائل
 ⦇الامـر بالـرد ع ايـدي الكـروب⦈
⎞𝟏𝟔⎝ .اضف كروب السجل
 ⦇الامـر بالـرد ع ايـدي الكـروب⦈
⎞𝟏𝟕⎝ .اضف ايديي
 ⦇الامـر بالـرد ع ايـدي حسـابك⦈
⎞𝟏𝟖⎝ .اضف نقطة الاوامر
 ⦇الامـر بالـرد ع الـرمـز الجـديـد⦈
⎞𝟏𝟗⎝ .اضف رسائل الحماية
 ⦇الامـر بالـرد ع رقـم عـدد رسـائل تحـذيـر الحمـايـة⦈

 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ الـخدمــات الـعامــة .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .الذاتيه

⎞𝟐⎝ .الترحيب

⎞𝟑⎝ .الردود

⎞𝟒⎝ .الاذاعه

⎞𝟓⎝ .التكرار

⎞𝟔⎝ .الكاشف

⎞𝟕⎝ .المساعد

⎞𝟖⎝ .الطقس


 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - قائمــة اوامـِـࢪ الالـعــاب 🎮🎳 .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .بلاي 
- قائمــة العــاب الانـلايـن لســورس ريفز 🕹

⎞𝟐⎝ .كت
- اسئلـة كـت تـويت ⁉️

⎞𝟑⎝ .احكام
- لعبــة احكــام الشهيــرة ⚖👩🏻‍⚖

⎞𝟒⎝ .عقاب
- لعبــة عقــاب ⛓

⎞𝟓⎝ .اكس او
- لعبــة اكـس او 🧩

⎞𝟔⎝ .نرد
- لعبــة رمـي النــرد 🎲

⎞𝟕⎝ .سهم
- لعبــة رمـي السهــم 🎯

⎞𝟖⎝ .سله
- لعبــة كــرة السلــة 🏀

⎞𝟗⎝ .كرة
- لعبــة كــرة القــدم ⚽️

⎞𝟏𝟎⎝ .حظ
- لعبــة الحــظ 🎰

⎞𝟏𝟏⎝ .خيرني
- لعبــة لـو خيـروك بالصـور ⁉️🌉

⎞𝟏𝟐⎝ .تويت
- لعبــة كـت تـويت بالصـور ⁉️🌁


- سيتـم اضـافــة المـزيــد من الالعــاب بالتحديثــات الجــايـه 🎭


 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ البحـث والتحميــل .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .بحث + اسـم الاغنيـه
لـ تحميـل الاغـاني مـن يوتيـوب بدقه خفيفـه وتحميـل اسـرع

⎞𝟐⎝ .يوت + كلمـه او بالـرد ع رابـط
لـ تحميـل الصوت والفيديـو بعـدة صيـغ مـن اليـوتيـوب بواسطـة لوحـه انلايـن شفافـه

⎞𝟑⎝ .فيديو + اسـم المقطـع
لـ تحميـل مقـاطع الفيديـو مـن يوتيـوب

⎞𝟒⎝ .تحميل صوت + رابـط
لـ تحميـل المقـاطع الصـوتيه من يوتيـوب عبر الرابـط

⎞𝟓⎝ .تحميل فيديو + رابـط
لـ تحميـل مقـاطع الفيـديـو من يوتيـوب عبر الرابـط

⎞𝟔⎝ .يوتيوب+ كلمـه
لـ البحث عـن روابـط بالكلمـه ع يوتيـوب 

⎞𝟕⎝ .انستا + رابـط
لـ تحميـل الصـور ومقـاطع الفيديـو مـن الانستجـرام

⎞𝟖⎝ .صور + كلمـه
لـ تحميـل الصـور من جوجـل

⎞𝟗⎝ .متحركه + كلمـه
لـ تحميـل صـور متحركـه من جـوجـل..

⎞𝟏𝟎⎝ .تيك + رابـط او بالـرد ع رابـط
لـ تحميـل مقاطـع الفيديـو من تيك توك

⎞𝟏𝟏⎝ .لايكي + رابـط
لـ تحميـل مقاطـع الفيديـو من لايكـي

⎞𝟏𝟐⎝ .فيس + رابـط او .فيس بالـرد ع رابـط
لـ تحميـل مقاطـع الفيديـو مـن فيس بـوك

⎞𝟏𝟑⎝ .تويتر + رابـط
لـ تحميـل مقاطـع الفيديـو من تويتـر

⎞𝟏𝟒⎝ .بنترست + رابـط
لـ تحميـل مقاطـع الفيديـو من بنتـرست

⎞𝟏𝟓⎝ .سناب + رابـط
⦇.سناب + رابـط⦈ لـ تحميـل مقاطـع الفيديـو من سناب شـات

⎞𝟏𝟔⎝ .ساوند + رابـط
⦇.ساوند + رابـط او بالـرد ع رابـط⦈ لـ تحميـل الاغـاني مـن سـاونـد كلـود عـبر الرابـط

 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ المجمــوعــه² .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .الرابط
لـ جـلب رابـط الكـروب + يجب ان تكون مشرفـاً فيهـا

⎞𝟐⎝ .رسائلي / .رسائله
لـ عـرض عـدد رسـائلك او رسائل شخـص بالكـروب

⎞𝟑⎝ .حذف رسائلي
لـ حـذف جميـع رسـائلك بالكـروب

⎞𝟒⎝ .غادر
لـ مغـادرة الكـروب

⎞𝟓⎝ .رفع مشرف
لـ رفـع الشخـص مشـرفـاً بالكـروب

⎞𝟔⎝ .تنزيل مشرف
لـ تنزيـل الشخـص مـن الاشـراف + يجـب ان تكـون انت من قـام برفعـه مسبقـاً 

⎞𝟕⎝ .رفع مالك
لـ رفـع الشخـص مشـرفـاً بالكـروب بلقـب مـالك

⎞𝟖⎝ .الاعدادات
لـ عـرض اعـدادات الكـروب


⎞𝟗⎝ .تاك / .all 
الامـر + كلمـه او بالـرد ع رسـالـه لـ عمـل تـاك بشكـل متقطـع لـ الكـل بالكـروب

⎞𝟏𝟎⎝ .ايقاف التاك
لـ إيقـاف التـاك


⎞𝟏𝟏⎝ .احصائياتي
لـ عـرض قائمـة بـ إحصـائيات دردشـات حسـابك

⎞𝟏𝟐⎝ .كروباتي الكل / .كروباتي ادمن / .كروباتي مالك 
لـ عـرض قائمـة بمعلومـات كروباتك

⎞𝟏𝟑⎝ .قنواتي الكل / .قنواتي ادمن / .قنواتي مالك
لـ عـرض قائمـة بمعلومـات قنواتـك

⎞𝟏𝟒⎝ .الاعضاء / .المشرفين 
⦇.الاعضاء / .المشرفين + معرف او رابـط الكـروب⦈ لـ عـرض قائمـة او ملـف بـ اعضـاء / او مشرفيـن الكـروب

⎞𝟏𝟓⎝ .البوتات
⦇.البوتات + معرف او رابـط الكـروب⦈ لـ عـرض قائمـة بـ بوتـات الكـروب

⎞𝟏𝟔⎝ .المحذوفين
⦇.المحذوفين او .المحذوفين تنظيف⦈ لـ عـرض او تنظيـف الكـروب من الحسـابات المحذوفـه

⎞𝟏𝟕⎝ .مسح المحظورين
لـ مسـح محظـورين الكـروب


⎞𝟏𝟖⎝ .ضيف
⦇.ضيف + رابط المجموعـه⦈ لـ اضـافة الاعضـاء استخـدم الامـر بالكـروب الهـدف مع اضافه رابط كروبك لـ الامـر

⎞𝟏𝟗⎝ .تفليش
لـ تفليـش جميـع اعضـاء مجمـوعـه معينـه

⎞𝟐𝟎⎝ .تصفير
لـ تفليـش جميـع اعضـاء قنـاة معينـه

⎞𝟐𝟏⎝ .الصورة وضع / .الصورة حذف 
لـ وضـع / حـذف صـورة المجمـوعـة

 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 ᯓ ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 - اوامـِـࢪ البـــوت 🦾🤖 .
⋆┄─┄─┄─┄┄─┄─┄─┄─┄┄⋆
⎞𝟏⎝ .اعاده تشغيل
لـ لتـرسيت وإعـادة تشغيـل البـوت

⎞𝟐⎝ .ايقاف البوت
لـ ايقـاف البـوت عـن العمـل والغـاء التنصـيب

⎞𝟑⎝ .تحديث
لـ البحـث عـن تحديثـات وتحديث البـوت

⎞𝟒⎝ .تحديث الان
لـ التحـديث الاولـي لـ البـوت لـ التنصيـب الثـانوي

⎞𝟓⎝ .تحديث البوت
لـ التحـديث الثـانوي لـ البـوت لـ التنصيـب الاولـي والثـانوي

⎞𝟔⎝ .فحص
لـ فحص قاعدة البيانات وعـرض اصـدار السورس ولغة بايثـون ومكتبة تيليثون

⎞𝟕⎝ .سليب او .سليب_ميديا
لـ جعل البـوت في وضع النـوم او الإسبات ويتم ايقافه عند ارسالك لـ اي رسالة

⎞𝟖⎝ .الانترنت او .الانترنت صورة
لـ عرض سرعة الانتـرنت (الرفـع & التحميـل) في سيرفـر البوت الخاص بك

⎞𝟗⎝ .المساعد
لـ عـرض قائمـة أوامـر المطـور المسـاعد

⎞𝟏𝟎⎝ .الاذاعه
لـ عـرض أوامـر الاذاعـه والتوجيـه

⎞𝟏𝟏⎝ .النظام
لـ لعـرض معلومـات نظـام البـوت الخـاص بك

⎞𝟏𝟐⎝ .السرعه
لـ قياس سرعة الرفع والتحميل في سيرفر البوت الخاص بك

⎞𝟏𝟑⎝ .فرمته
لـ حذف المجلدات والملفات والعمليات المخزنه مؤقتـاً في سيرفر البوت الخاص بك

⎞𝟏𝟒⎝ .فاراتي
لـ عـرض جميـع فارات تنصيبك

⎞𝟏𝟓⎝ .تاريخ التنصيب
لـ عـرض تاريـخ بـدء تنصيبك على سـورس تيبثـون

•❐• لعـرض اصـدار السـورس أرسل .سورس
•❐• لعـرض قنـوات السـورس أرسل ثون زتي

 𓆩 ZTEHON 𝗨𝘀𝗲𝗿𝗯𝗼𝘁 𓆪
 
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
