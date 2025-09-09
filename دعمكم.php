<?php
ob_start();
$LL_php = "7289815578:AAFm3Zqo0xspNjCMwVBj_3auxhOd1t3dxo0";
define('API_KEY',$LL_php);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($T75BOT,$BOTmno=[]){
$PBYYT = http_build_query($BOTmno);
$url = "https://api.telegram.org/bot".API_KEY."/".$T75BOT."?$PBYYT";
$DMMPP = file_get_contents($url);
return json_decode($DMMPP);
}
echo "𝖣𝖾𝗏 @LL_php";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$text = $message->text;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
//——————————————————//
$AIi = json_decode(file_get_contents("AIi.json"),true);
$aboKrar = bot('getme',['bot'])->result->username;  //معرف البوت//
$sudo = $AIi["sudo"];
if($AIi["sudo"] == null){
$sudo = "لا يوجد";
}
$admin = "7170744706";
$TRCM = "7170744706";
$Dev = array("$admin","$sudo","$TRCM");
//——————————————————//
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->from->id;
$user = $update->callback_query->from->username;
$name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$chid = $update->channel_post->chat->id;
$chtext = $update->channel_post->text;
$messageid = $update->channel_post->message_id;
$document = $update->channel_post->document;
$sticker = $update->channel_post->sticker;
$photo = $update->channel_post->photo;
$video = $update->channel_post->video;
$forward = $update->channel_post->forward_from_chat;
$contact = $update->channel_post->contact;
$audio = $update->channel_post->audio;
$add_id = $update->my_chat_member->from->id;
$data = $update->callback_query->data;
}
if(!$update){
return false;
}
/////الملفات/////
mkdir("data");
mkdir("mno");
mkdir("php");
/////الملفات/////
$get = $AIi["get"][$from_id];
if($AIi["get"][$from_id] == null){
$get = "0";
}
if($AIi["get"][$from_id] == null){
$AIi["get"][$from_id] = "0";
}
$get = $AIi["get"][$from_id];
//
//
$DER = $AIi["DER"][$from_id];
if($AIi["DER"][$from_id] == null){
$DER = 0;
}
if($AIi["DER"][$from_id] == null){
$AIi["DER"][$from_id] = "0";
}
if($MPPFF == null){
$MPPFF = 0;
}
$gere = $AIi["gere"][$from_id];
if($AIi["gere"][$from_id] == null){
$gere = 0;
}
if($AIi["gere"][$from_id] == null){
$AIi["gere"][$from_id] = "0";
}
$ssgg = $AIi["ssgg"][$from_id];
if($AIi["ssgg"][$from_id] == null){
$ssgg = 0;
}
if($AIi["ssgg"][$from_id] == null){
$AIi["ssgg"][$from_id] = "0";
}
if($AIi['GR1'] == null){
$GR1 ="5";
}else{
$GR1 = $AIi['GR1'];
}
if($AIi['Ash'] == null){
$Ash ="100";
}else{
$Ash = $AIi['Ash'];
}
if($AIi['lk'] == null){
$lk ="0.005";
}else{
$lk = $AIi['lk'];
}
$T75BOT = $AIi['T75BOT'];
if($AIi['T75BOT'] == null){
$T75BOT = 0;
}
if($AIi['sss'] == null) {
$sss ="$admin";
}else{
$sss = $AIi['sss'];
}
if($AIi['put'] == null) {
$put ="0.01";
}else{
$put = $AIi['put'];
}
if($AIi['tmre'] == null){
$tmre ="DMMPP";
}else{
$tmre = $AIi['tmre'];
}
if($AIi['MTAWR'] == null){
$MTAWR = $tmre;
}else{
$MTAWR = $AIi['MTAWR'];
}
$ttt1 = "`"; 
if($AIi['start'] == null){
$start = "
*• اهلا بك مجددأ في بوت
• ( زيتون - ZeToN ) 💳
• ࢪصيدك هوا : $get دولاࢪ*
";
}else{
$start = str_replace(['#name','#username','#id','#get','#R'],[$name,$username,$from_id,$get,$ttt1],$AIi['start']);
}
if($AIi['hui'] == null){
$hui ="@LL_php";
}else{
$hui = $AIi['hui'];
}
//موقع ترمكس//
if($AIi['site'] == null){
$site ="smmatrixx.com";
}else{
$site = $AIi['site'];
}
if($AIi['api'] == null){
$api ="133320874baa8a5013cf8230ce9d5d28";
}else{
$api = $AIi['api'];
}
//قسم انستكرام//
if($AIi['story'] == null){
$story ="3031";     //مشاهدات انستكرام
}else{
$story = $AIi['story'];
}
if($AIi['insta25'] == null){
$insta25 ="3335";//متابعين ثابت
}else{
$insta25 = $AIi['insta25'];
}
if($AIi['ins13ta'] == null){
$ins13ta ="10889";//متابعين ثابت
}else{
$ins13ta = $AIi['ins13ta'];
}
if($AIi['Likes'] == null){
$Likes ="3380";    //لايكات
}else{
$Likes = $AIi['Likes'];
}
if($AIi['MshArko'] == null){
$MshArko ="10869";    //|| ريلز انستكࢪام || حركه الاكسبلور مشاركات فديو 🤪//
}else{
$MshArko = $AIi['MshArko'];
}
//موقع دغمكم//
if($AIi['site0'] == null){
$site0 ="kd1s.com";
}else{
$site0 = $AIi['site0'];
}
if($AIi['api0'] == null){
$api0 ="9b177d37e2cf51b7a651ebf9cbac0388";
}else{
$api0 = $AIi['api0'];
}
//قسم تيليكرام//
if($AIi['TeTA1'] == null){
$TeTA1 = "7848";//اعضاء ثابت
}else{
$TeTA1 = $AIi['TeTA1'];
}
if($AIi['SaReD'] == null){
$SaReD = "10758";   //اعضاء سريع
}else{
$SaReD = $AIi['SaReD'];
}
if($AIi['Te18T1'] == null){
$Te18T1 = "9627";//اعضاء نزول
}else{
$Te18T1 = $AIi['Te18T1'];
}
if($AIi['MKTA1'] == null){
$MKTA1 = "9261";  //مشاهدات طلقه
}else{
$MKTA1 = $AIi['MKTA1'];
}
if($AIi['GFTA1'] == null){
$GFTA1 = "8414";  //تفاعلات ايجابيه 👍❤️🔥😍
}else{
$GFTA1 = $AIi['GFTA1'];
}
//قسم، تيك توك//
if($AIi['TikTok1'] == null){
$TikTok1 = "10868";  //متابعين تيك
}else{
$TikTok1 = $AIi['TikTok1'];
}
if($AIi['TikTok2'] == null){
$TikTok2 = "6584";  //لايكات تيك
}else{
$TikTok2 = $AIi['TikTok2'];
}
if($AIi['TikTok3'] == null){
$TikTok3 = "9308";  //مشاهدات تيك
}else{
$TikTok3 = $AIi['TikTok3'];
}
///خزن الاشعاࢪات//
$aso = json_decode(file_get_contents("php/aso.json"),1);
if($aso['d6'] == null){
$aso['d6'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
///
if($aso['d7'] == null){
$aso['d7'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
if($aso['h8'] == null){
$aso['h8'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
if($aso['h3'] == null){
$aso['h3'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
if($aso['h9'] == null){
$aso['h9'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
if($aso['h6'] == null){
$aso['h6'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
if($aso['h5'] == null){
$aso['h5'] = "✅";
file_put_contents("php/aso.json",json_encode($aso));
}
//&$&$&♡$&$//
$d7 = $aso['d7'];
$d6 = $aso['d6'];
$h8 = $aso['h8'];
$h3 = $aso['h3'];
$h9 = $aso['h9'];
$h6 = $aso['h6'];
$h5 = $aso['h5'];
///$&$&♡$///
$ban = explode("\n",file_get_contents("php/ban.txt"));
$countban = count($ban)-1;
///$&$&♡$///
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$MtFaL = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}
//دخول الاعضاء//
$mem = explode("\n",file_get_contents("mem.txt"));
$je = file_get_contents("mem.txt");
$count = explode("\n",$je);
$SAl = count($count) -1;
if($username != null){
$sf = "[@$username]";
}else
if($username == null){
$sf = "لا يوجد معرف";
}
if($message and !in_array($from_id,$mem)){
file_put_contents("mem.txt",$from_id . "\n" ,FILE_APPEND);
$SAl = $SAl + 1;
if($d7 == "✅"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*٭ تم دخول شخص جديد الى البوت الخاص بك 👾*
            -----------------------
_• معلومات العضو الجديد ._

• الاسم : [$name](tg://user?id=$from_id)
• المعرف : $sf
• الايدي : [$from_id](tg://user?id=$from_id)
            -----------------------
• عدد الاعضاء الكلي :* $SAl*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
]);
}else{
bot('sendmessage', [
'chat_id'=>$admin,
'text' =>"
",
'parse_mode'=>"MARKDOWN",
]);
}
} 
if($message and $from_id != $admin and $d7 == "✅" and !$data){
if($d7 == "✅"){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
]);
}else{
bot('sendmessage', [
'chat_id'=>$admin,
'text' =>"
",
'parse_mode'=>"MARKDOWN",
]);
}
} 
if($message->reply_to_message and $chat_id == $admin) {
if($d7 == "✅"){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
'parse_mode'=>"Markdown",
]);
}else{
bot('sendmessage', [
'chat_id'=>$admin,
'text' =>"
",
'parse_mode'=>"MARKDOWN",
]);
}
}
//#DEVmno///////
$d7 = $aso['d7'];
$d6 = $aso['d6'];
if($text == "/start" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• اهلا بك في لوحه الادمن الخاصه بالبوت 🤖*

- يمكنك التحكم في البوت الخاص بك من هنا
*~~~~~~~~~~~~~~~~~*

[• اضغط هنا لتࢪا جميع التحديثات](https://t.me/LL_php)
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'ࢪساله التࢪحيب ( start )' ,'callback_data'=>"start"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الادمنيه' ,'callback_data'=>"abmin8"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
unlink("midea.php");
unlink("msg.php");
unlink("photoi.php"); 
$AIi['DMMPP'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$d7 = $aso['d7'];
$d6 = $aso['d6'];
if($data == "UU9" and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اهلا بك في لوحه الادمن الخاصه بالبوت 🤖*

- يمكنك التحكم في البوت الخاص بك من هنا
*~~~~~~~~~~~~~~~~~*

[• اضغط هنا لتࢪا جميع التحديثات](https://t.me/LL_php)
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'ࢪساله التࢪحيب ( start )' ,'callback_data'=>"start"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الادمنيه' ,'callback_data'=>"abmin8"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
unlink("midea.php");
unlink("msg.php");
unlink("photoi.php"); 
$AIi['DMMPP'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$d6 = $aso['d6'];
$d7 = $aso['d7'];
if($data == "d6" ){
if($aso['d6']!="✅"){
$dp = "✅";
}else{
$dp = "❌";
}
$aso['d6'] = $dp;
file_put_contents("php/aso.json",json_encode($aso));
$d6 = $aso['d6'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'ࢪساله التࢪحيب ( start )' ,'callback_data'=>"start"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الادمنيه' ,'callback_data'=>"abmin8"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "d7" ){
if($aso['d7']!="✅"){
$as = "✅";
}else{
$as = "❌";
}
$aso['d7'] = $as;
file_put_contents("php/aso.json",json_encode($aso));
$d7 = $aso['d7'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'عمل البوت : '.$d6.'' ,'callback_data'=>"d6"],['text'=>'اشعار الدخول : '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'ࢪساله التࢪحيب ( start )' ,'callback_data'=>"start"]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الادمنيه' ,'callback_data'=>"abmin8"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"008"],['text'=>'قسم الاحصائيات' ,'callback_data'=>"HkH"]],
[['text'=>'• لوحه تحكم البوت •' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "start" and in_array($from_id , $Dev)){
bot('EditMessageText', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text' =>"
*• اهلا بم في قسم ࢪساله التࢪحيب ( start )

• الرساله الحاليه :*
`$start`
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"تعين الرساله",'callback_data'=>"start1"],['text'=>"مسح الرساله",'callback_data'=>"start10"]],
[['text'=>"رجوع ↪️",'callback_data'=>"UU9"]],
]])
]);
}
if($data== 'start1' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• ارسال الان الكليشه .*

*• لوضع الاسم :* `#name`
*• لوضع اليوزࢪ :* `#username`
*• لوضع الايدي :* `#id`
*• لوضع ࢪصيد الشخص :* `#get`

*• يمكنك تعين نص ماركداون في البوت .*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"start"]],
]])
]);  
$AIi['DMMPP'] = "start5";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "start5" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• مثال على الرساله :*

$text
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"start"]],
]])
]);   
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"start"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['start'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data== 'start10' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم مسح رساله start والرجوع الى الرساله الاصلية !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"start"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['start'] = 
"
*• اهلا بك مجددأ في بوت
• ( زيتون - ZeToN ) 💳
• ࢪصيدك هوا : #get دولاࢪ*
";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data== '008' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• مرحبا بك في قسم الاحصائيات .

• عدد المستخدمين : $SAl
• عدد المتفاعلين اليوم : $MtFaL*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعة ࢪساله",'callback_data'=>"008f"]],
[['text'=>"اذاعة صوࢪة",'callback_data'=>"photoi"],['text'=>"اذاعة ميديا",'callback_data'=>"midea"]],
[['text'=>"رجوع ↪️",'callback_data'=>"UU9"]],
]])
]);
unlink("midea.php");
unlink("msg.php");
unlink("photoi.php"); 
$AIi['DMMPP'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
$msg = file_get_contents("msg.php");
if($data == "008f" and in_array($from_id , $Dev)){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text' =>"*• قم ب اࢪسال الࢪساله لاذاعتها*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"008"]],
]])
]);
}
if($msg == "on" and in_array($from_id , $Dev)){
if($message){
for($i=0;$i<count($mem); $i++){
bot('sendmessage',[
'chat_id'=>$mem[$i],
'text'=>"$text",
'disable_web_page_preview'=>true,
'parse_mode'=>"MARKDOWN",
]);
unlink("msg.php");
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم اذاعه ࢪسالتك الئ $SAl عضو*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"008"]],
]])
]);
unlink("msg.php");
}
}
//اذاعه صوره//
$photoi = file_get_contents("photoi.php");
if($data == "photoi" and in_array($from_id , $Dev)){
file_put_contents("photoi.php", "yon");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text' =>"*• قم ب اࢪسال الصوࢪة لاذاعتها*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"008"]],
]])
]);
}
if($photoi == "yon" and in_array($from_id , $Dev)){
if($message->photo){
for($i=0;$i<count($mem); $i++){
bot('sendphoto',[
'chat_id'=>$mem[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
unlink("photoi.php");
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم اذاعه الصوࢪة الئ $SAl عضو*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"008"]],
]])
]);
unlink("photoi.php");
}
}
$midea = file_get_contents("midea.php");
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*•  يمكنك استخدام جميع انوع الميديا ماعدى الصوره
• ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"008"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($mem); $i++){
bot('send'.$key,[
'chat_id'=>$mem[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم اذاعتها الئ $SAl عضو*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"008"]],
]])
]);
unlink("midea.php");
}
}
}
//قسم الاشتࢪاك//
if($data == "bnt" and in_array($from_id , $Dev)){
bot('EditMessageText', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الاشتࢪاك
•———————————•
• قناه الاشتࢪاك : $hui*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضف قناه",'callback_data'=>"GGTR"],['text'=>"حذف قناه",'callback_data'=>"GkTR"]],
[['text'=>"رجوع ↪️",'callback_data'=>"UU9"]],
]])
]);
}
if($data== 'GGTR' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• ارسل معرف القناه معا @*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);  
$AIi['DMMPP'] = "h5hh0";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if(preg_match("/@/",$text) and $AIi['DMMPP'] == "h5hh0" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['hui'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data== 'GkTR' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم مسح القناه من الاشتراك*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"bnt"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['hui'] = "لا يوجد";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data == "abmin8"){
if($chat_id == $admin){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الادمنيه
•———————————•
• الادمن :* `$sudo`
*•———————————•
• يمكنك ࢪفع ادمن واحد فقط*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رفع ادمن",'callback_data'=>"abmin4"],['text'=>"حذف ادمن",'callback_data'=>"abmin5"]],
[['text'=>"رجوع ↪️",'callback_data'=>"UU9"]],
]])
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'عذࢪأ انت لست المالك ❌',
'show_alert'=>true
]);
}
} 
if($data== 'abmin4' and $from_id == $admin){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل ايدي الشخص الان*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"abmin8"]],
]])
]);  
$AIi['DMMPP'] = "Dev1";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "Dev1" and $from_id == $admin and !in_array($text,$mem)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• العضو ليس مشتࢪك في البوت*
",
'parse_mode'=>"MarkDown",
'message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"abmin8"]],
]])
]);
$AIi['DMMPP'] = "Dev1";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $from_id == $admin and $AIi['DMMPP'] == "Dev1") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم رفع الادمن بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"abmin8"]],
]])
]);   
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"
*• تم ࢪفعك ادمن بنجاح ✅*
",
'parse_mode'=>"MarkDown",
]); 
$AIi['DMMPP'] = null;
$AIi['sudo'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data== 'abmin5' and $from_id == $admin){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• تم حذف الادمن بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"abmin8"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
*• تم تنزيلك من الادمنيه بنجاح ✅*
",
'parse_mode'=>"MarkDown",
]);    
$AIi['DMMPP'] = null;
$AIi['sudo'] = "لا يوجد";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
//قسم الاحصائيات//
if($data == "HkH" and in_array($from_id , $Dev)){
bot('EditMessageText', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text' =>"
*• مرحبا بك في قسم الاحصائيات .

• عدد المستخدمين : $SAl
• عدد المحضوࢪين : $countban

• عدد المتفاعلين اليوم : $MtFaL

• قائمه اخࢪ خمس مشتركين :*
▫ 1- ".$mem[count($mem)-2]."
▫ 2- ️".$mem[count($mem)-3]."
▫ 3- ️".$mem[count($mem)-4]."
▫ 4- ️".$mem[count($mem)-5]."
▫ 5- ️".$mem[count($mem)-6]."
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح المحضوࢪين",'callback_data'=>"unbanall"]],
[['text'=>"حضࢪ عضو",'callback_data'=>"ban"],['text'=>"الغاء حضࢪ عضو",'callback_data'=>"unban"]],
[["text"=>"رجوع ↪️","callback_data"=>"UU9"]],
]])
]);
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "unbanall"){
if($countban > 0){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"*• تم مسح قائمة المحظورين بنجاح ✅*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"HkH"]],
]
])
]);
unlink("php/ban.txt");
}else{
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"• لا يوجد محضوࢪين !",
'show_alert'=>true
]);
}
}
if($data == "ban"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id, 
'text'=>"*• اࢪسل ايدي العضو لحضره .*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"HkH"]],
] 
])
]);
$AIi['DMMPP']["$from_id"]= "ban";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text  and $text !="/start" and $AIi['DMMPP']["$from_id"]=="ban" and in_array($from_id,$Dev) and is_numeric($text)){
if(!in_array($text,$ban)){
file_put_contents("php/ban.txt","$text\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• تم حضࢪ العضو بنجاح ✅*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"HkH"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"*• تم حضࢪك من البوت من قبل المطوࢪ .*",
'parse_mode'=>"MARKDOWN",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*• العضو ليس محظور مسبقأ .*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"HkH"]],
]
])
]);
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
}
if($data == "unban"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"*• اࢪسل ايدي العضو للالغاء حضره .*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"HkH"]],
]
])
]);
$AIi['DMMPP'][$from_id] = "unban";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text  and $text !="/start" and $AIi['DMMPP'][$from_id] =="unban" and in_array($from_id,$Dev) and is_numeric($text)){
if(in_array($text,$ban)){
$str=file_get_contents("php/ban.txt");
$str=str_replace("$text\n",'',$str);
file_put_contents("php/ban.txt",$str);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• تم الغاء حضࢪ العضو بنجاح ✅*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"HkH"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"*• تم الغاء حضࢪك من البوت من قبل المطوࢪ .*",
'parse_mode'=>"MARKDOWN",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*• العضو ليس محظور مسبقأ .*",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"HkH"]],
]
])
]);
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
}
//لوحة الادمن//
if($data == "back" and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اهلا بك في اعدادات البوت
•————————————•
• حساب التواصل : @$MTAWR
• قناه الاثباتات : $sss
• عدد رصيد الرابط : $put
•————————————•
• يمكن للعضو ارسال* `/id` *لارسال الايدي الخاص به*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"قسم API","callback_data"=>"API"]], 
[['text'=>'تعين معࢪف حسابك' ,'callback_data'=>"tmre"],['text'=>'تعين عدد ࢪصيد الرابط' ,'callback_data'=>"put"]],
[['text'=>'صنع كود هديه' ,'callback_data'=>"mno"],['text'=>'توقف الكود' ,'callback_data'=>"soso"]],
[['text'=>'كشف معلومات العضو' ,'callback_data'=>"MaLoM"]],
[['text'=>'اضف ࢪصيد' ,'callback_data'=>"sendcoin"],['text'=>'خصم ࢪصيد' ,'callback_data'=>"sdcoin"]],
[['text'=>'تعين قناه اثباتات' ,'callback_data'=>"shh"]],
[["text"=>"رجوع ↪️","callback_data"=>"UU9"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//قسم الايبي//
if($data == "API"){
if($chat_id == $admin){
$Dev = json_decode(file_get_contents("https://$site/api/v2?action=balance&key=$api"));
$MPPFF = $Dev->balance;
$PBYY = $Dev->currency;
$Dev1 = json_decode(file_get_contents("https://$site0/api/v2?action=balance&key=$api0"));
$MP1FF = $Dev1->balance;
$BY1Y = $Dev1->currency;
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الـAPI
•————————————•
• الايبي :* `$api`
*• الموقع :* [سماتركس]($site)
*• ࢪصيدك : $MPPFF$*
*•————————————•*
*• الايبي :* `$api0`
*• الموقع :* [دعمكم]($site0)
*• ࢪصيدك : $MP1FF$*
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"اضف API","callback_data"=>"apis"],["text"=>"حذف API","callback_data"=>"ssapis"]],
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'عذࢪأ انت لست المالك ❌',
'show_alert'=>true
]);
}
}  
if($data== 'apis' and $from_id == $admin){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• ارسل ايبي حساب*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"API"]],
]])
]);  
$AIi['DMMPP'] = "apis";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $from_id == $admin and $AIi['DMMPP'] == "apis") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"API"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['api'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
} 
if($data== 'ssapis' and $from_id == $admin){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• تم حذف الايبي بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"API"]],
]])
]);
$AIi['DMMPP'] = null;
$AIi['api'] = "لا يوجد";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//اضافه ࢪصيد//
if($data == "sendcoin" and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل ايدي الشخص*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'chat';
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'chat' and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "
*• ارسال عدد ࢪصيد المراد ارسالها*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'poi';
$AIi['idd'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$ID = $AIi['idd'];
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'poi' and in_array($from_id , $Dev)){
$det1 = $get + $text;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تمت اضافه ࢪصيد بنجاح ✅
• المبلغ الذي تمت اضافته : $text
• الى : $ID .
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$AIi['idd'],
'text'=>"
*• تم اضافه $text دولاࢪ الى حسابك

• اصبح ࢪصيدك : $det1 دولاࢪ .*
",
'parse_mode'=>"Markdown",
]);
$AIi['DMMPP'] = null;
$AIi["get"][$AIi['idd']] += "$text";
$AIi['idd'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//خصم ࢪصيد//
if($data == "sdcoin" and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل ايدي الشخص*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'kkii';
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'kkii' and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "
*• ارسال عدد ࢪصيد المراد خصمها*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
$AIi['DMMPP'] = 'mmpp';
$AIi['idd'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$ID = $AIi['idd'];
if($text != '/start' and $text != null and $AIi['DMMPP'] == 'mmpp' and in_array($from_id , $Dev)){
$det1 = $get - $text;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تمت خصم ࢪصيد بنجاح ✅
• المبلغ الذي تمت الخصم : $text
• من : $ID .
*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ↪️","callback_data"=>"back"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$AIi['idd'],
'text'=>"
*• تم خصم $text دولاࢪ من حسابك

• اصبح ࢪصيدك : $det1 دولاࢪ .*
",
'parse_mode'=>"Markdown",
]);
$AIi['DMMPP'] = null;
$AIi["get"][$AIi['idd']] -= "$text";
$AIi['idd'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data== 'MaLoM' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل ايدي العضو :*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);  
$AIi['DMMPP'] = "MaLoM";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if(is_numeric($text) and $AIi['DMMPP'] == "MaLoM" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• معلومات العضو المطلوبه :

• ࢪصيدة : ".$AIi["get"][$text]."
• عدد طلباته : ".$AIi["gere"][$text]."
• عدد دعواته : ".$AIi["DER"][$text]."
• الرصيد المصروف : ".$AIi["ssgg"][$text]."*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//تعين قناه طلبات
if($data== 'shh' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• ارسل معرف قناة الطلبات!*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);  
$AIi['DMMPP'] = "h50";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "h50" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['sss'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data== 'tmre' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• ارسال معرف حسابك 📬*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);  
$AIi['DMMPP'] = "tmre1";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "tmre1" and in_array($from_id , $Dev)){
$text = str_replace("@","",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['tmre'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data== 'put' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• ارسل عدد الرصيد التي يحصل عليها المستخدم من مشاركة الرابط الخاص به .*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);  
$AIi['DMMPP'] = "put1";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "put1" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم التعين بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = null;
$AIi['put'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//اشتراك اجباري//
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hui."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$hui))->result;
$Namech22 = $getch2->title;
$getch2li = str_replace("@","",$hui);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*• عليك الاشتراك اولا $hui*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech22,'url'=>"https://t.me/$getch2li"]],
]])
]);
return false;
}
$hui677 = "@LL_php";
$ch299 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hui677."&user_id=".$from_id);
$getch299 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$hui677))->result;
$Namech2992 = $getch299->title;
$getch299li = str_replace("@","",$hui677);
if($message && (strpos($ch299,'"status":"left"') or strpos($ch299,'"Bad Request: USER_ID_INVALID"') or strpos($ch299,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*• عليك الاشتراك اولا $hui677*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2992,'url'=>"https://t.me/$getch299li"]],
]])
]);
return false;
}
$hui645 = "@LL_php";
$ch264 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hui645."&user_id=".$from_id);
$getch264 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$hui645))->result;
$Namech2642 = $getch264->title;
$getch264li = str_replace("@","",$hui645);
if($message && (strpos($ch264,'"status":"left"') or strpos($ch264,'"Bad Request: USER_ID_INVALID"') or strpos($ch264,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*• عليك الاشتراك اولا $hui645*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2642,'url'=>"https://t.me/$getch264li"]],
]])
]);
return false;
}
$EOZER = "@LL_php";
$HsAo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$EOZER))->result;
$ASIM = $HsAo->title;
$EOZER1 = str_replace("@","",$EOZER);
if($text and $d6 == "❌" and !in_array($from_id , $Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• صيانه في البوت 🤍.*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$ASIM",'url'=>"http://t.me/$EOZER1"]],
]])
]);
return false;
}
if($data and $d6 == "❌" and !in_array($from_id , $Dev)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• صيانه في البوت 🤍.*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$ASIM",'url'=>"http://t.me/$EOZER1"]],
]])
]);
return false;
}
if($update and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم حضࢪك من البوت ❌*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$ASIM",'url'=>"http://t.me/$EOZER1"]],
]])
]);
return false;
}
if($text == "/start" or $text == "/start $chat_id" and !in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
$start
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الخدمات 🗂",'callback_data'=>"AlaDmaT"]],
[['text'=>"تجميع ࢪصيد 🌀",'callback_data'=>"g9d1gx"],['text'=>"الحساب 👤",'callback_data'=>"hjyt"]],
[['text'=>"استخدام الكود 💳",'callback_data'=>"q"],['text'=>"تحويل رصيد ♻️",'callback_data'=>"transer"]],
[['text'=>"معلومات الطلب 📑",'callback_data'=>"HS56"],['text'=>"طلباتي 📮",'callback_data'=>"kk1t"]],
[['text'=>"قناه البوت 🤍",'url'=>"http://t.me/$EOZER1"]],
[['text'=>"شحن ࢪصيد 💰",'callback_data'=>"gdgx"],['text'=>"شࢪوط الاستخدام 📜",'callback_data'=>"ShRoT"]],
[["text"=>"عدد الطلبات الكلي : $T75BOT","callback_data"=>"886"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if($data == "🔙"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
$start
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الخدمات 🗂",'callback_data'=>"AlaDmaT"]],
[['text'=>"تجميع ࢪصيد 🌀",'callback_data'=>"g9d1gx"],['text'=>"الحساب 👤",'callback_data'=>"hjyt"]],
[['text'=>"استخدام الكود 💳",'callback_data'=>"q"],['text'=>"تحويل رصيد ♻️",'callback_data'=>"transer"]],
[['text'=>"معلومات الطلب 📑",'callback_data'=>"HS56"],['text'=>"طلباتي 📮",'callback_data'=>"kk1t"]],
[['text'=>"قناه البوت 🤍",'url'=>"http://t.me/$EOZER1"]],
[['text'=>"شحن ࢪصيد 💰",'callback_data'=>"gdgx"],['text'=>"شࢪوط الاستخدام 📜",'callback_data'=>"ShRoT"]],
[["text"=>"عدد الطلبات الكلي : $T75BOT","callback_data"=>"886"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if($data == "ShRoT"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• شروط استخدام بوت زيتون .

• بوت زيتون اول بوت عربي في التيليكࢪام مخصص لجميع خدمات برامج التواصل الاجتماعي انستقرام - تيك توك - يوتيوب - تيوتر - فيسبوك وللخ... هناك العديد من الشروط حول استخدام بوت زيتون .

• الامان والثقه الموضوع الاول لدينا وحماية خصوصية جميع المستخدمين من الاولويات لدينا لذالك جميع المعلومات من الࢪصيد والطلبات هي محصنة تماماً لا يسمح لـ اي شخص الاطلاع عليها الا في حالة طلب المستخدم ذالك من الدعم الفني .

• على جميع المستخدمين التركيز في حالة طلب اي شيء من البوت في حالة كان حسابك او قناتك او ماشبه ذالك خاص سيلغي طلبك نهائياً لذالك لايوجد استرداد او اي تعويض لذالك وجب التنبيه

• جميع الخدمات تتحدث يومياً لا يوجد لدينا خدمات ثابته يتم اضافة يومياً العديد من الخدمات التي تكون مناسبة لجميع المستخدمين في البوت لنكون الاول والافضل دائماً

• لا يوجد اي استرداد او الغاء في حالة تم الرشق او الدعم لحساب او لقناة او لمنشور في الغلط 

• جميع الخدمات المتوفره هي موثوقه تماماً ويتم التجربه عليها قبل اضافاتها للبوت لذالك يتوفر انواع الخدمات بأسعار مختلفة من خدمة لخدمة اخرى

• قنوات بوت زيتون في التلجرام 
قناة بوت زيتون @$EOZER1 القناة الرسميه التي يتم نشر بها جميع الخدمات والمعلومات حول بوت زيتون

• قناة وكيل بوت زيتون @$EOZER1 القناة الرسميه لوكيل بوت زيتون لذالك لا يتوفر لدينا سوا هذه القنوات المطروحه اعلاه واذا توفر لدينا اي قناة سنقوم بنشرها في قنواتنا الرسميه ليكون لدى جميع المستخدمين العلم بذالك

• فريق بوت #زيتون 👉 .*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if($data == "886"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"• عدد الطلبات الكلي : $T75BOT ✅ .",
'show_alert'=>'true'
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if($data == "55"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"• قࢪيبا ...",
'show_alert'=>'true'
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if($data == "g9d1gx"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• اهلا بك في قسم تجميع 〽️

• عندما تقوم بدعوة شخص من خلال الࢪابط : 

https://t.me/$aboKrar?start=$from_id

• ستحصل علئ $put دولاࢪ*
", 
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if($data == "kk1t"){
if($gere >= 1){
bot('Editmessagetext',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• عدد الطلبات الخاصه بك : $gere*
", 
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"• لا يتوفࢪ لديك طلبات .",
'show_alert'=>'true'
]);
}
if($data == "hjyt"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• معلومات حسابك 📄
•———————————•
• ࢪصيد حسابك : $get دولاࢪ
• الࢪصيد المصࢪوف : $ssgg دولاࢪ
• عدد دعواتك : $DER ✳️
•———————————•
• قناه البوت :* [$ASIM](http://t.me/$EOZER1)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"🔙"]],
]])
]);
}
$mno_databs = json_decode(file_get_contents("mnodatabs.json"),true);
if($data == "AlaDmaT"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• اختࢪ الاقسام المࢪاد من الاسفل .*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- قسم الانستكࢪام 💜.",'callback_data'=>"insta2"],['text'=>"- قسم التيكتوك 🖤.",'callback_data'=>"TikTok"]],
[['text'=>"- قسم التيليكࢪام 🤍.",'callback_data'=>"TeTA5"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data == "HS56"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• اࢪسل ايدي الطلب :*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "94dh";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if(is_numeric($text) and $AIi["DMMPP"]["$from_id"] == "94dh"){
$mno8 = json_decode(file_get_contents("http://$site/api/v2?key=$api&action=status&order=$text"));
$remains = $mno8->remains; 
$start_count = $mno8->start_count; 
$error = $mno8->error; 
$status = $mno8->status; 
$status = str_replace(['Completed','Canceled','Partial','Pending'],['مكتمل ✅','ملغي ❌','مكتمل جزئيأ ⏳','قيد الانتظار ...'],$status);
if($error == null){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• معلومات الطلب الخاص بك :
•———————————•
• ايدي الطلب :* `$text`
*• المتبقي : $remains
•———————————•
• حاله الطلب : $status*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
}
if($error !== null and $AIi["DMMPP"]["$from_id"] == "94dh"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• عذࢪأ ࢪقم الطلب خطاء ❌*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]); 
}
$RA = $AIi['RA']["Y"]; 
if($data == "transer"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• يمكنك تحويل عدد من الࢪصيد الى شخص اخر من هنا 🌐*

• فقط ارسل عدد الࢪصيد التي تريد ارسالها وسيتم صنع رابط ارسله الى الشخاص المراد استلام ࢪصيد

*• عموله التحويل : 0*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]);
$AIi['DMMPP'][$from_id]  = $data;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$HaSn = substr(str_shuffle('AbCdEfGhIjKlMnOpQrStU12345689807'),1,15);
if(is_numeric($text) and $AIi['DMMPP'][$from_id] == "transer"){
if($AIi['get'][$from_id] >= $text){
if(!preg_match('/+/',$text) or !preg_match('/-/',$text) ){
if($text >= 0.9){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم صنع رابط هدية بقيمة $text دولاࢪ

• الرابط : https://t.me/$aboKrar?start=TRCM$HaSn

• وتم استقطاع $text من ࢪصيدك .*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اࢪسال الࢪابط صديقك','switch_inline_query'=>"#$chat_id"]],
]
])
]);
$AIi['get'][$from_id] -= $text;
$AIi['RA']["Y"] ="TRCM$HaSn";
$AIi['DMMPP'][$from_id]  = null;
$AIi['thoiler'][$HaSn]["get"] = $text;
$AIi['thoiler'][$HaSn]["to"] = $from_id;
$AIi['her']["t"] = $username;
$AIi['hwr']["w"] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• اقل عدد لتحويل 1 دولاࢪ .*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]);
} 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• لا تحاول استخدام الكلجات سيتم حظرك عام قࢪيبا...*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• ࢪصيدك لا تكفي ❌ .*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]);
} 
}
$ghadi = $AIi['her']["t"];
$ID = $AIi['thoiler'][$HaSn]["to"];
$COR = $AIi['thoiler'][$e1]["get"];
$hsn = $get + $AIi['hwr']["w"];
$e1=str_replace("/start TRCM",null,$text); 
if(preg_match('/start TRCM/',$text)){
if($AIi['thoiler'][$e1]["to"] != null) {
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• تم اضافه* ". $AIi['thoiler'][$e1]["get"]." *دولاࢪ الى حسابك ✅*
*• من قبل : @$ghadi

• اصبح ࢪصيدك : $hsn دولاࢪ .*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]);
bot('sendMessage',[
'chat_id'=>$AIi['thoiler'][$e1]["to"],
'text'=>"
*• تم اضافة* ". $AIi['thoiler'][$e1]["get"]." *دولاࢪ الئ الشخص .

• المعرف : @$username
• الايدي :* `$from_id`

*• بواسطه الࢪابط الخاص بك :*
https://t.me/$aboKrar?start=$RA
", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]);
$AIi['thoiler'][$e1]["to"] = null;
$AIi["get"][$from_id] += $AIi['thoiler'][$e1]["get"];
$AIi= json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
bot('sendMessage',[
'chat_id'=>$from_id, 
'text'=>"
*• الرابط غير صحيح او انتهت مدة الرابط !*
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]
])
]);
} 
} 
$RA = $AIi['RA']["Y"]; 
$inlinequery = $update->inline_query->query;
$inlineID = $update->inline_query->from->id;
if($inlinequery == "#$inlineID" ){
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
'cache_time'=>'300',
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>'• اضغط هنا لارسال الرابط الئ الشخص .',
'thumb_url'=>"https://t.me/DEVmno/391",
'description'=>"

",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'message_text'=>"
• اضغط علئ الزࢪ الان
"],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>"‹ اضغط للحصول علئ الࢪصيد ›",'url'=>"https://t.me/$aboKrar?start=$RA"]]
]]
]])
]);
}
$mno_databs = json_decode(file_get_contents("mnodatabs.json"),true);
if($data == "TikTok"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• اختࢪ الخدمه المࢪاد من الاسفل .*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"|| متابعين تيك توك || ثابت سريع 😍",'callback_data'=>"TikTok1"]],
[['text'=>"|| لايكات تيك توك || ماكس سريع 💝",'callback_data'=>"TikTok2"]],
[['text'=>"|| مشاهدات تيك توك || الارخص $",'callback_data'=>"TikTok3"]],
[['text'=>"رجوع ↪️",'callback_data'=>"AlaDmaT"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
$HYU ="0.00080";
$E = "99";
$Y = "10001";
if($data == "TikTok2"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || لايكات تيك توك || ماكس سريع 💝
•———————————•
• السعر : 0.80$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 10.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "yiyok6";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "yiyok6"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اࢪسل رابط المنشور :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "yiyok5";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 10.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 100*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "yiyok5"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num لايك 💝
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"Tik2_YES"],['text'=>"الغاء ❌",'callback_data'=>"TikTok"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "yiyok1";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "Tik2_YES" and $mno_databs['data'][$from_id]['mode'] == "yiyok1"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$rrr = str_replace("https://vt.tiktok.com/","",$rr);
$LL_php = str_replace("https://www.tiktok.com/","",$rrr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$TikTok1&link=https://www.tiktok.com/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة المنشور  ›",'url'=>"https://www.tiktok.com/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || لايكات تيك توك || ماكس سريع 💝
• ايدي الطلب :* $order
*• العدد : $R1 لايك 💝
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://www.tiktok.com/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
return false;
}
}
$HYU ="0.00008";
$E = "99";
$Y = "5000001";
if($data == "TikTok3"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
• اسم الخدمة : || مشاهدات تيك توك || الارخص $
•———————————•
• السعر : 0.08$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 5.000.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TikTok398";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "TikTok398"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اࢪسل رابط المنشوࢪ :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TikTok3982";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 5.000.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 100*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "TikTok3982"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num مشاهده 👁
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"TTikTok3_YES"],['text'=>"الغاء ❌",'callback_data'=>"TikTok"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TTikTok3_YES";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "TTikTok3_YES" and $mno_databs['data'][$from_id]['mode'] == "TTikTok3_YES"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$rrr = str_replace("https://vt.tiktok.com/","",$rr);
$LL_php = str_replace("https://www.tiktok.com/","",$rrr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$TikTok3&link=https://www.tiktok.com/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة المنشور  ›",'url'=>"https://www.tiktok.com/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || مشاهدات تيك توك || الارخص $
• ايدي الطلب :* $order
*• العدد : $R1 مشاهده 👁
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://www.tiktok.com/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
return false;
}
}
$HYU ="0.0065";
$E = "99";
$Y = "10001";
if($data == "TikTok1"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || متابعين تيك توك || ثابت سريع 😍
•———————————•
• السعر : 6.5$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 10.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TiTok6";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "TiTok6"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اࢪسل رابط الحساب عام :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TiTok5";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 10.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 100*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "TiTok5"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num متابع 😍
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"Tik_YES"],['text'=>"الغاء ❌",'callback_data'=>"TikTok"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TiTok1";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "Tik_YES" and $mno_databs['data'][$from_id]['mode'] == "TiTok1"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$rrr = str_replace("https://vt.tiktok.com/","",$rr);
$LL_php = str_replace("https://www.tiktok.com/","",$rrr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$TikTok1&link=https://www.tiktok.com/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://www.tiktok.com/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || متابعين تيك توك || ثابت سريع 😍
• ايدي الطلب :* $order
*• العدد : $R1 متابع 😍
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://www.tiktok.com/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TikTok"]],
]])
]);
return false;
}
}
$mno_databs = json_decode(file_get_contents("mnodatabs.json"),true);
if($data == "TeTA5"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• اختࢪ الخدمه المࢪاد من الاسفل .*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"|| اعضاء تيليكࢪام || قناه عامة ثابت🎗",'callback_data'=>"TeTA8"]],
[['text'=>"|| اعضاء تيليكࢪام || قناه عامة سريع ⚡️",'callback_data'=>"SaReD"]],
[['text'=>"|| اعضاء تيليكࢪام || بدون ضمان 🧑‍💻",'callback_data'=>"Te18T1"]],
[['text'=>"|| مشاهدات تيليكࢪام || سريع طلقه 🔥",'callback_data'=>"MKTA8"]],
[['text'=>"|| تفاعلات تيليكࢪام || ردود افعال ايجابية 🎉",'callback_data'=>"GFTA8"]],
[['text'=>"رجوع ↪️",'callback_data'=>"AlaDmaT"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
$HYU ="0.001";
$E = "99";
$Y = "10001";
if($data == "SaReD"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || اعضاء تيليكࢪام || قناه عامة سريع ⚡️
•———————————•
• السعر : 1$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 10.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "SaReD150";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "SaReD150"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط القناه الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "SaReD10";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 10.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 100*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "SaReD10"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num عضو 👤
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"SaReD_YES"],['text'=>"الغاء ❌",'callback_data'=>"TeTA5"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "SaReD19";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "SaReD_YES" and $mno_databs['data'][$from_id]['mode'] == "SaReD19"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$LL_php = str_replace("https://t.me/","",$rr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$SaReD&link=https://t.me/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة القناه  ›",'url'=>"https://t.me/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || اعضاء تيليكࢪام || قناه عامة سريع ⚡️
• ايدي الطلب :* $order
*• العدد : $R1 عضو 👤
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://t.me/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
return false;
}
}
$HYU ="0.0025";
$E = "499";
$Y = "40001";
if($data == "TeTA8"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || اعضاء تيليكࢪام || قناه عامة ثابت🎗
•———————————•
• السعر : 2.50$ دولاࢪ لكل 1000

• اقل طلب : 500

• اكبر طلب : 40.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TeTA150";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "TeTA150"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط القناه الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TeTA10";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 40.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 500*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "TeTA10"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num عضو 👤
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"TeTA_YES"],['text'=>"الغاء ❌",'callback_data'=>"TeTA5"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TeTA19";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "TeTA_YES" and $mno_databs['data'][$from_id]['mode'] == "TeTA19"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$LL_php = str_replace("https://t.me/","",$rr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$TeTA1&link=https://t.me/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة القناه  ›",'url'=>"https://t.me/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || اعضاء تيليكࢪام || قناه عامة ثابت🎗
• ايدي الطلب :* $order
*• العدد : $R1 عضو 👤
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://t.me/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
return false;
}
}
$HYU ="0.00090";
$E = "99";
$Y = "10001";
if($data == "Te18T1"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || اعضاء تيليكࢪام || بدون ضمان 🧑‍💻
•———————————•
• السعر : 0.9$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 10.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "Te18T1150";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "Te18T1150"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط القناه الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "Te18T110";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 100.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 500*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "Te18T110"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num عضو 👤
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"TeT58A_YES"],['text'=>"الغاء ❌",'callback_data'=>"TeTA5"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "Te18T119";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "TeT58A_YES" and $mno_databs['data'][$from_id]['mode'] == "Te18T119"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$LL_php = str_replace("https://t.me/","",$rr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$Te18T1&link=https://t.me/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة القناه  ›",'url'=>"https://t.me/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || اعضاء تيليكࢪام || بدون ضمان 🧑‍💻
• ايدي الطلب :* $order
*• العدد : $R1 عضو 👤
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://t.me/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
return false;
}
}
$HYU ="0.00009";
$E = "49";
$Y = "100001";
if($data == "GFTA8"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || تفاعلات تيليكࢪام || ردود افعال ايجابية ??
•———————————•
• السعر : 0.09$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 100.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "GFTA150";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "GFTA150"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط المنشور الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "GFTA1500";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 100.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 50*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "GFTA1500"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num تفاعلات 👍❤️🔥😍
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"GFTA_YES"],['text'=>"الغاء ❌",'callback_data'=>"TeTA5"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "GFTA1509";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "GFTA_YES" and $mno_databs['data'][$from_id]['mode'] == "GFTA1509"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$LL_php = str_replace("https://t.me/","",$rr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$GFTA1&link=https://t.me/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة المنشور  ›",'url'=>"https://t.me/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || تفاعلات تيليكࢪام || ردود افعال ايجابية 🎉
• ايدي الطلب :* $order
*• العدد : $R1 تفاعلات 👍❤️🔥😍
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://t.me/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
return false;
}
}
$HYU ="0.0001";
$E = "99";
$Y = "100001";
if($data == "MKTA8"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || مشاهدات تيليكࢪام || سريع طلقه 🔥
•———————————•
• السعر : 0.01$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 100.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "MKTA150";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "MKTA150"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط المنشور الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TeTA1500";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 100.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 100*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "TeTA1500"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num مشاهده 👁
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"MKTA_YES"],['text'=>"الغاء ❌",'callback_data'=>"TeTA5"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "TeTA1509";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "MKTA_YES" and $mno_databs['data'][$from_id]['mode'] == "TeTA1509"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$LL_php = str_replace("https://t.me/","",$rr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$MKTA1&link=https://t.me/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة المنشور  ›",'url'=>"https://t.me/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || مشاهدات تيليكࢪام || سريع طلقه 🔥
• ايدي الطلب :* $order
*• العدد : $R1 مشاهده 👁
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://t.me/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"TeTA5"]],
]])
]);
return false;
}
}
$mno_databs = json_decode(file_get_contents("mnodatabs.json"),true);
if($data == "insta2"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• اختࢪ الخدمه المࢪاد من الاسفل .*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"|| متابعين انستكࢪام || ضمان 365 يوم ✅",'callback_data'=>"insta"]],
[['text'=>"|| متابعين انستكࢪام || نزول خفيف 🪫",'callback_data'=>"ins13ta"]],
[['text'=>"|| لايكات انستكࢪام || ضمان شهࢪ 🍇",'callback_data'=>"storyinsta"]],
[['text'=>"|| ريلز انستكࢪام || حركه الاكسبلور مشاركات فديو 🤪",'callback_data'=>"MshArko"]],
[['text'=>"رجوع ↪️",'callback_data'=>"AlaDmaT"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$mno_databs['data'][$from_id]['mode'] = null;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
$HYU ="0.00060";
$E = "49";
$Y = "5000001";
if($data == "insta"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || متابعين انستكࢪام || ضمان 365 يوم ✅
•———————————•
• السعر : 0.60$ دولاࢪ لكل 1000

• اقل طلب : 50

• اكبر طلب : 5.000.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "insta50";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "insta50"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط حسابك عام :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "insta500";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 5.000.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 50*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "insta500"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num متابع 👤
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"JOR_YES"],['text'=>"الغاء ❌",'callback_data'=>"insta2"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "insta509";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "JOR_YES" and $mno_databs['data'][$from_id]['mode'] == "insta509"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$rrr = str_replace("https://www.instagram.com/","",$rr);
$LL_php = str_replace("https://instagram.com/","",$rrr);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$insta25&link=https://instagram.com/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || متابعين انستكࢪام || ضمان 365 يوم ✅
• ايدي الطلب :* $order
*• العدد : $R1 متابع 👤
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://instagram.com/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
return false;
}
}
$HYU ="0.0002";
$E = "99";
$Y = "10001";
if($data == "ins13ta"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || متابعين انستكࢪام || نزول خفيف 🪫
•———————————•
• السعر : 0.2$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 10.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "ins1ta50";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "ins1ta50"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط حسابك عام :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "ins1ta500";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 10.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 99*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "ins1ta500"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num متابع 👤
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"J1R_YES"],['text'=>"الغاء ❌",'callback_data'=>"insta2"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "ins1ta509";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "J1R_YES" and $mno_databs['data'][$from_id]['mode'] == "ins1ta509"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$rrr = str_replace("https://www.instagram.com/","",$rr);
$LL_php = str_replace("https://instagram.com/","",$rrr);
$smmatrix = json_decode(file_get_contents("https://$site0/api/v2?key=$api0&action=add&service=$ins13ta&link=https://instagram.com/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة الحساب  ›",'url'=>"https://instagram.com/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || متابعين انستكࢪام || نزول خفيف 🪫
• ايدي الطلب :* $order
*• العدد : $R1 متابع 👤
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://instagram.com/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
return false;
}
}
$HYU ="0.00025";
$E = "9";
$Y = "300001";
if($data == "storyinsta"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || لايكات انستكࢪام || ضمان شهࢪ 🍇
•———————————•
• السعر : 0.25$ دولاࢪ لكل 1000

• اقل طلب : 10

• اكبر طلب : 300.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "Likes50";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "Likes50"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط المنشور الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "Likes500";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 300.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 10*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "Likes500"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num لايك ❤
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"mno_YES"],['text'=>"الغاء ❌",'callback_data'=>"insta2"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "Likes509";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "mno_YES" and $mno_databs['data'][$from_id]['mode'] == "Likes509"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$rrr = str_replace("https://www.instagram.com/","",$rr);
$LL_php = str_replace("https://instagram.com/","",$rrr);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$Likes&link=https://instagram.com/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة المنشور  ›",'url'=>"https://instagram.com/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || لايكات انستكࢪام || ضمان شهࢪ 🍇
• ايدي الطلب :* $order
*• العدد : $R1 لايك ❤
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://instagram.com/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
return false;
}
}
$HYU ="0.0009";
$E = "99";
$Y = "300001";
if($data == "MshArko"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"
*• اسم الخدمة : || ريلز انستكࢪام || حركه الاكسبلور مشاركات فديو 🤪
•———————————•
• السعر : 0.90$ دولاࢪ لكل 1000

• اقل طلب : 100

• اكبر طلب : 1.000.000
•———————————•
• ارسل الكمية التي تريد طلبها :*
", 
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "MshArko50";
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
if(is_numeric($text) and $mno_databs['data'][$from_id]['mode'] == "MshArko50"){
$bota = $text * $HYU;
if($text > $E){
if($text < $Y){
if($get >= $bota ){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ارسل ࢪابط المنشور الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
$mno_databs['data'][$from_id]['mode']  = "MshArko500";
$mno_databs['data'][$from_id]['num'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقصئ عدد لطلب : 1.000.000*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
}else{
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
*• اقل عدد لطلب : 100*
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
}
return false;
}
//===================
$R1 = $mno_databs['data'][$from_id]['num'];
if($text and $mno_databs['data'][$from_id]['mode'] == "MshArko500"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($youcan <= $get){
$num = $mno_databs['data'][$from_id]['num'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الࢪابط :* `$text`
*• الكمية : $num مشاركة ❤
• السعࢪ : $can دولاࢪ

• لتأكيد الطلب اضغط علئ تأكيد !*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تأكيد ✅",'callback_data'=>"MshAr_YES"],['text'=>"الغاء ❌",'callback_data'=>"insta2"]],   
]])
]);
$mno_databs['data'][$from_id]['mode']  = "MshArko509";
$mno_databs['data'][$from_id]['link'] = $text;
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
}
}
//===================
if($data == "MshAr_YES" and $mno_databs['data'][$from_id]['mode'] == "MshArko509"){
$youcan = $get * $HYU ;
$can = $R1 * $HYU ;
if($can <= $get){
$rr = str_replace("@","",$mno_databs['data'][$from_id]['link']);
$rrr = str_replace("https://www.instagram.com/","",$rr);
$LL_php = str_replace("https://instagram.com/","",$rrr);
$smmatrix = json_decode(file_get_contents("https://$site/api/v2?key=$api&action=add&service=$MshArko&link=https://instagram.com/$LL_php&quantity=$R1"));
$order = $smmatrix->order;
bot('editMessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• تم انشاء الطلب بنجاح ✅
• ايدي الطلب :* `$order`
*• تم استقطاع $can دولاࢪ .*
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ اضغط لمراقبة المنشور  ›",'url'=>"https://instagram.com/$LL_php"]],   
]])
]);
bot('sendMessage',[
'chat_id'=>$sss,
'text'=>"
*• تم تسجيل طلب جديد ✅
•————————————•
• الخدمة : || ريلز انستكࢪام || حركه الاكسبلور مشاركات فديو 🤪
• ايدي الطلب :* $order
*• العدد : $R1 مشاركه ❤
• السعࢪ : $can دولاࢪ
• الࢪابط :* [https://instagram.com/$LL_php]
*•————————————•
• الايدي :* [$from_id](tg://openmessage?user_id=$from_id)
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"‹ الدخول الى البوت ›",'url'=>"https://t.me/$aboKrar"]],
]])
]);
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
$AIi["get"][$from_id] -= $can;
$AIi["gere"][$from_id] += 1;
$AIi["ssgg"][$from_id] += $can;
$AIi['T75BOT']+= 1;  
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}else{
unset($mno_databs['data'][$from_id]);
file_put_contents("mnodatabs.json",json_encode($mno_databs,64|128|256));
bot("editMessagetext",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"
*• ࢪصيدك لا يكفي ❌

• يجب أن يكون لديك $can ⚠️*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"insta2"]],
]])
]);
return false;
}
}
if($data == "gdgx"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• اسعاࢪ الشحن ببوت زيتون ⚠️ .
•——————————•
• الـ 5$ دولاࢪ = 5$
• الـ 10$ دولاࢪ = 10$
• الـ 15$ دولاࢪ = 15$
• الـ 20$ دولاࢪ = 20$
• الـ 27$ دولاࢪ = 25$
•——————————•
• طࢪق الدفع :
• اسياسيل - زينكاش - فدافون - USDT .
•——————————•
• الدعم الفني :* [@$tmre] .
", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
//كود الهديه///
$hdea = file_get_contents("php/com.txt");
if($data== 'mno' and in_array($from_id , $Dev)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• ارسل عدد الرصيد الذي يحصل عليها الشخص .
• مثال 0.005 دولاࢪ*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);  
$AIi['DMMPP'] = "lk1";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "lk1" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• اࢪسل عدد الاشخاص .*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = "lk2";
$AIi['lk'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "lk2" and in_array($from_id , $Dev)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• ارسل اسم الكود .*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);   
$AIi['DMMPP'] = "Ash1";
$AIi['Ash'] = $text;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($text and $AIi['DMMPP'] == "Ash1" and in_array($from_id , $Dev)){
file_put_contents("php/hdea.txt","$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم اضافة كود هدية جديد .
 - - - - - - - - - - - - - - - - - - 
• الكود :* `$text`
*• عدد الࢪصيد : $lk
• عدد الاشخاص : $Ash
 - - - - - - - - - - - - - - - - - - 
• بوت الرشق المجاني : @$aboKrar*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]); 
unlink("php/com.txt");
unlink("php/coded.txt");  
$AIi['DMMPP'] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
$gogo = explode("\n",file_get_contents("php/$from_id.txt"));
$get = count($gogo)-1;

$geg = explode("\n",file_get_contents("php/coded.txt"));
$goge = count($geg)-1;
$codh = file_get_contents("php/hdea.txt");
if($codh == null){
file_put_contents("php/hdea.txt","NoNe");
}
if($data == "soso" and in_array($from_id , $Dev)){
unlink("php/hdea.txt");
bot('EditMessageText',[
'chat_id'=>$from_id,
'text'=>"
*• تم حذف الكود*
",
'parse_mode'=>"Markdown",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ↪️",'callback_data'=>"back"]],
]])
]);
}
if($data == "q"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• ارسل كود الهدية الان :*
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"🔙"]],
]])
]);
$AIi['DMMPP'][$from_id]  = "uuu";
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}

$sosn = $Ash - $goge;
if($text == $codh and !in_array($from_id,$geg)){
if($text !== "/start" and $codh !== "NoNe" and $AIi['DMMPP'][$from_id] == "uuu"){
file_put_contents("php/coded.txt", $from_id."\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم اضافة $lk دولاࢪ الى حسابك ✅*
",
'parse_mode'=>"Markdown",
]);
$AIi["get"][$from_id] += $lk;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
$HHS1 = $sosn - 1;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تم اضافة $lk دولاࢪ الى حساب

• الايدي :* `$chat_id`
*• المعرف :* $sf
*• العدد المتبقي للكود : $HHS1*
",
'parse_mode'=>"Markdown",
]);
}
}
if($text and $text !== $codh){
if($text !== "/start" and $AIi['DMMPP'][$from_id] == "uuu"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الكود خطأ او تم استخدامه ❌*
",
'parse_mode'=>"Markdown",
]);
}
}
if($text == $codh and in_array($from_id,$geg)){
if($text !== "/start" and $AIi['DMMPP'][$from_id] == "uuu"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• انت استخدمت الكود من قبل*
",
'parse_mode'=>"Markdown",
]);
}
}
if($goge == "$Ash"){
file_put_contents("hdea.txt","NoNe");
}
//قسم الايدي//
if($text == "/id" or $text == "/ID"){
bot('sendmessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
*• الايدي :* `$chat_id`
", 
'parse_mode'=>"Markdown",
]);
$AIi['DMMPP'][$from_id]  = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}