<?php
ob_start();
$token = "5955231559:AAGhHBARFlPtPTQySxQcdAKErDIQWUC9oZ8";
$BaDmin = "2123216559"; #ايديك حجي
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$JJJ22J = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$JJJ22J";
$JJJ22J = file_get_contents($url);
return json_decode($JJJ22J);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $up->from->first_name;
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$username = $message->from->username;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}

//=========DEV » @JJJ22J=========//
@$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$from_ud = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
$text = $message->text;
@$textmassage = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$texxt = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$re = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;

$chatid3=$update->message->chat->id;
$ggm= json_decode(file_get_contents("game.json"),true);
$fromid3=$update->message->from->id;
$textt =$update->message->text;
#٧٨

$message = $update->message; 
$text = $message->text; 
$chat_id = $message->chat->id; 
$name = $message->from->first_name; 
$id = $message->from->id; 
$user = $message->from->username; 
$rembo ="2123216559"; #ايديك#
$cc = file_get_contents("a.txt");
$ch = file_get_contents("ch.txt");
$m = explode("\n",file_get_contents("member.txt"));
$m1 = count($m)-1;



$binks = json_decode(file_get_contents("albnk.json"),true);
#قبل البدء
if($text == "/start") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'اهلين انا بيرو للالعاب

↞ اختصاصي العاب البنك والخ
↞ انشاء حساب بنكي ، راتب ، استثمار و اوامر اخري مهمة
↞ عشان تفعلني ارفعني اشراف وارسل تفعيل.',
	]);

}

$my_count = $binks["coins"][$from_id];
$binksc = json_decode(file_get_contents('binksc.json'),1);
if($text=="البنك" or $text=="الاوامر"){
$add = $binks["information"]["added"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✜ اوامر البنك

*⌯ انشاء حساب بنكي  *↢ تسوي حساب وتقدر تحول فلوس مع مزايا ثانيه

*⌯ مسح حساب بنكي * ↢ تلغي حسابك البنكي

*⌯ تحويل *↢ تطلب رقم حساب الشخص وتحول له فلوس

*⌯ حسابي  *↢ يطلع لك رقم حسابك عشان تعطيه للشخص اللي بيحول لك

*⌯ فلوسي *↢ يعلمك كم فلوسك

*⌯ راتب *↢ يعطيك راتبك كل ٢٠ دقيقة

*⌯ بخشيش *↢ يعطيك بخشيش كل ١٠ دقايق

*⌯ زرف *↢ تزرف فلوس اشخاص كل ١٠ دقايق

*⌯ استثمار *↢ تستثمر بالمبلغ اللي تبيه مع نسبة ربح مضمونه من ١٪؜ الى ١٥٪؜

*⌯ حظ *↢ تلعبها بأي مبلغ ياتدبله ياتخسره انت وحظك

*⌯ مضاربه* ↢ تضارب بأي مبلغ تبيه والنسبة من ٩٠٪؜ الى -٩٠٪؜ انت وحظك

*⌯ توب الفلوس* ↢ يطلع توب اكثر ناس معهم فلوس بكل القروبات

*⌯ توب الحراميه *↢ يطلع لك اكثر ناس زرفوا",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["bank"]["v2"][$from_id]="b";
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
}

$lmy = $binks["bank"]["ids"][$from_id];
if($text=="انشاء حساب بنكي" or $text == "انشاء حساب"){
if($lmy == null){
$add = $binks["information"]["added"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
– عشان تسوي حساب لازم تختار بنك

⇠ `ميكي ماوس`
⇠ `بلو سكاي`
⇠ `كريديت`

- اضغط للنسخ
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["bank"]["b2"][$from_id]="modeBank";
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
exit;
}
}

$lmy = $binks["bank"]["ids"][$from_id];
if($text=="انشاء حساب بنكي" or $text == "انشاء حساب"){
if($lmy !== null){
$add = $binks["information"]["added"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
*⇜ عندك حساب في بنك ميكي ماوس*

⇜ لتفاصيل اكثر اكتب
⇠ `حساب $lmy`
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["bank"]["b2"][$from_id]=null;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
exit;
}
}
$mem = file_get_contents("members.txt");
$lord_c = json_decode(file_get_contents("data/coin$from_id.json"),true);
$name   = $message->from->first_name;
$coin = "1000";
$mc = $binks["bank"]["b2"][$from_id];
$from_idban = substr(str_shuffle('12345689807891234568980789'),1,15);
$num_5 = "5";
$from_idbank = "$num_5$from_idban";

if($text == "ميكي ماوس"){
if($mc == "modeBank") {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
*• وسوينا لك حساب في بنك $text*

⇜ رقم حسابك ↢ ( `$from_idbank` )
⇜ نوع البطاقة ↢ ( فيزا )
⇜ فلوسك ↢ ( $coin ريال  💸 )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["البنك"][$from_id]["حسابي"] = $from_idbank;
$binks["bank"]["b2"][$from_id]=null;
$binks["bank"]["ids"][$from_id]= $from_idbank;
$binks["membank"][$from_id] = "on";
$binks["bank"]["areyou"][$from_idbank]= $from_idbank;
$binks["bank"]["names"][$from_idbank]= $name;
$binks["bank"]["idname"][$from_idbank]= $from_id;
$binks["bank"]["no3sb"][$from_idbank]= "ميكي ماوس";
$binks["coins"][$from_id]= 1000;
$binks["bank"]["ovmode"][$from_idbank]= "Z";
$binks["modeacc"]["mde"][$from_idbank]= "on";
$binks["coins"][$username]= 1000;
$binks[$from_idbank][" فلوس"]= 1000;
$binks["coins"][$from_idbank]= 1000;
$binks["bank"]["timezarf"][$from_id] = "on";
$binks["bank"]["time1zarf"][$from_id] = "on";
$binks["bank"]["bankidmy"][$from_id]= $from_id;
$binks["om"]["bla"]["coin"][$from_idbank]= "arab";
$binks["bank"]["ovmode"][$from_id] = "Z";
$binks["bank"]["no3"][$from_id]= "ميكي ماوس";
$binks["bank"]["no3bank"][$from_id]= "فيزا";
$binks["bank"]["time"][$from_id] = "on";
$binks["bank"]["time1bordmth543"][$from_id] = "on";
 $binks["bank"]["timebordmth543"][$from_id] = "on";
$binks["bank"]["time1"][$from_id] = "on";
$binks["bank"]["timezarf"][$from_id] = "on";
$binks["bank"]["time1ratb"][$from_id] = "on";
 $binks["bank"]["timeratb"][$from_id] = "on";
 $binks["bank"]["time1bordhth543"][$from_id] = "on";
 $binks["bank"]["timebordhth543"][$from_id] = "on";
$binks["bank"]["time1rzarf"][$from_id] = "on";
$binks["bank"]["timethmartu"][$from_id] = "on";
$binks["bank"]["time1rthmartu"][$from_id] = "on";
$binks["bank"]["no3bank"][$from_idbank]= "ماستر كارد";
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);

$ggm = json_encode($ggm,true);
file_put_contents("game.json",$binks);
}
}

if($text == "كريديت"){
if($mc == "modeBank") {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
*• وسوينا لك حساب في بنك $text*

⇜ رقم حسابك ↢ ( `$from_idbank` )
⇜ نوع البطاقة ↢ ( ديسكفر )
⇜ فلوسك ↢ ( $coin ريال  💸 )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["bank"]["b2"][$from_id]=null;
$binks["bank"]["ids"][$from_id]= $from_idbank;
$binks["bank"]["areyou"][$from_idbank]= $from_idbank;
$binks["bank"]["names"][$from_idbank]= $name;
$binks["bank"]["idname"][$from_idbank]= $from_id;
$binks["bank"]["ovmode"][$from_idbank]= "Z";
$binks["bank"]["no3sb"][$from_idbank]= "كريديت";
$binks["coins"][$from_id]= 1000;
$binks["membank"][$from_id] = "on";
$binks["coins"][$from_idbank]= 1000;
$binks["bank"]["timezarf"][$from_id] = "on";
$binks["bank"]["time1zarf"][$from_id] = "on";
$binks["coins"][$username]= 1000;
$binks["modeacc"]["mde"][$from_idbank]= "on";
$binks["bank"]["bankidmy"][$from_id]= $from_id;
$binks["bank"]["ovmode"][$from_id] = "Z";
$binks["om"]["bla"]["coin"][$from_idbank]= "arab";
$binks["bank"]["no3"][$from_id]= "كريديت";
$binks["bank"]["time1ratb"][$from_id] = "on";
 $binks["bank"]["timeratb"][$from_id] = "on";
$binks["bank"]["timezarf"][$from_id] = "on";
$binks["bank"]["time1bordhth543"][$from_id] = "on";
 $binks["bank"]["timebordhth543"][$from_id] = "on";
$binks["bank"]["time1rzarf"][$from_id] = "on";
$binks["bank"]["time1bordmth543"][$from_id] = "on";
 $binks["bank"]["timebordmth543"][$from_id] = "on";
$binks["bank"]["no3bank"][$from_id]= "ديسكفر";
$binks["bank"]["timethmartu"][$from_id] = "on";
$binks["bank"]["time1rthmartu"][$from_id] = "on";
$binks["bank"]["time"][$from_id] = "on";
$binks["bank"]["time1"][$from_id] = "on";
$binks["bank"]["no3bank"][$from_idbank]= "ماستر كارد";
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
}
}


if($text == "بلو سكاي"){
if($mc == "modeBank") {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
*• وسوينا لك حساب في بنك $text*

⇜ رقم حسابك ↢ ( `$from_idbank` )
⇜ نوع البطاقة ↢ ( ماستر كارد )
⇜ فلوسك ↢ ( $coin ريال  💸 )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["bank"]["b2"][$from_id]=null;
$binks["bank"]["ids"][$from_id]= $from_idbank;
$binks["bank"]["areyou"][$from_idbank]= $from_idbank;
$binks["bank"]["names"][$from_idbank]= $name;
$binks["bank"]["idname"][$from_idbank]= $from_id;
$binks["bank"]["no3sb"][$from_idbank]= "بلو سكاي";
$binks["coins"][$from_id]= 1000;
$binks["bank"]["ovmode"][$from_idbank]= 14;
$binks["coins"][$from_idbank]= 1000;
$binks["membank"][$from_id] = "on";
$binks["coins"][$username]= 1000;
$binks["bank"]["timezarf"][$from_id] = "on";
$binks["bank"]["time1zarf"][$from_id] = "on";
$binks["bank"]["time1ratb"][$from_id] = "on";
 $binks["bank"]["timeratb"][$from_id] = "on";
 $binks["bank"]["time1bordhth543"][$from_id] = "on";
 $binks["bank"]["timebordhth543"][$from_id] = "on";
 $binks["bank"]["time1bordmth543"][$from_id] = "on";
 $binks["bank"]["timebordmth543"][$from_id] = "on";
$binks["bank"]["timezarf"][$from_id] = "on";
$binks["bank"]["time1rzarf"][$from_id] = "on";
$binks["bank"]["timethmartu"][$from_id] = "on";
$binks["bank"]["time1rthmartu"][$from_id] = "on";
$binks["modeacc"]["mde"][$from_idbank]= "on";
$binks["bank"]["ovmode"][$from_id] = 14;
$binks["bank"]["bankidmy"][$from_id]= $from_id;
$binks["om"]["bla"]["coin"][$from_idbank]= "arab";
$binks["bank"]["no3"][$from_id]= "بلو سكاي";
$binks["bank"]["no3bank"][$from_id]= "ماستر كارد";
$binks["bank"]["no3bank"][$from_idbank]= "ماستر كارد";
$binks["bank"]["time"][$from_id] = "on";
$binks["bank"]["time1"][$from_id] = "on";
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
}
}

$lmy = $binks["bank"]["ids"][$from_id];
if($text=="مسح حساب بنكي" or $text == "مسح حساب"){
if($lmy !== null){
$add = $binks["information"]["added"];
$lmy = $binks["bank"]["ids"][$from_id];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ تم حذف حسابك البنكي
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 
 $binks["bank"]["b2"][$from_id]=null;
$binks["bank"]["ids"][$from_id]= null;
$binks["bank"]["areyou"][$lmy]= null;
$binks["bank"]["names"][$lmy]= null;
$binks["bank"]["idname"][$lmy]= null;
$binks["bank"]["timezarf"][$from_id] = null;
$binks["bank"]["time1zarf"][$from_id] = null;
$binks["bank"]["timezarf"][$from_id] = null;
$binks["bank"]["time1rzarf"][$from_id] = null;
$binks["bank"]["time1bordmth543"][$from_id] = null;
 $binks["bank"]["timebordmth543"][$from_id] = null;
$binks["bank"]["no3sb"][$lmy]= null;
$binks["modeacc"]["mde"][$lmy]= null;
$binks["coins"][$from_id]= null;
$binks["bank"]["ovmode"][$lmy]= 3;
$binks["coins"][$lmy]= null;
$binks["bank"]["time1ratb"][$from_id] = null;
 $binks["bank"]["timeratb"][$from_id] = null;
 $binks["bank"]["time1hath543"][$from_id] = null;
 $binks["bank"]["timehath543"][$from_id] = null;
$binks["bank"]["time"][$from_id] = null;
$binks["bank"]["time1"][$from_id] = null;
$binks["coins"][$username]= null;
$binks["bank"]["timethmartu"][$from_id] = null;
$binks["bank"]["time1rthmartu"][$from_id] = null;
$binks["bank"]["ovmode"][$from_id] = 3;
$binks["bank"]["bankidmy"][$from_id]= null;
$lord_c["om"]["bla"]["coin"][$lmy]= null;
$binks["bank"]["no3"][$from_id]= null;
$binks["bank"]["no3bank"][$from_id]= null;
$binks["bank"]["no3bank"][$lmy]= null;
$binks["bank"]["time"][$from_id] = null;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
exit;
}
}


$lmy = $binks["bank"]["ids"][$from_id];
if($text=="مسح حساب بنكي" or $text == "مسح حساب"){
if($lmy == null){
$add = $binks["information"]["added"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ ماعندك حساب بنكي
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["bank"]["b2"][$from_id]=null;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
exit;
}
}


$lmy = $binks["bank"]["ids"][$from_id];
 $lery = $binks["bank"]["ids"][$text];
  $fc4 = $binks["bank"]["bankidmy"];
       $lowe= $binks["bank"]["thoil"][$from_id];
        $no3b = $binks["bank"]["no3"][$from_id];
  $areyou = $binks["bank"]["areyou"][$text];
  $namer2 = $binks["bank"]["names"][$text];
  $id_from2 = $binks["bank"]["idname"][$text];
  $bank_t = $binks["bank"]["no3sb"][$text];
  $a3adad = $binks["bank"]["thoil1"][$from_id];
  $UserNameyr = $a3adad / 100 * 5;
$UserNameyyy13 = $a3adad;
$s_rial = $a3adad;
$UserNameyy = (int)$UserNameyyy13;
if (is_numeric($text)) {
$ovmode = $binks["modeacc"]["mde"][$text];
if($ovmode == "on"){
if($lmy == $text){
if($lowe == "yes"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ مايمديك تحول لنفسك ي اثول
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,

  ]);return false;
  }
  }
  }
  }

$coin = $binks["coins"][$from_id];
if(preg_match("/^(تحويل) (.*)/s",$text)){
 $text_get = str_replace(['تحويل'],'',$text);
 if(is_numeric($text_get) ||  preg_match('/^@/', $text_get) ){
if($lmy == null){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ ماعندك حساب بنكي
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);return false;
 exit;
 }
 }
 }

$coin = $binks["coins"][$from_id];
if(preg_match("/^(تحويل) (.*)/s",$text)){
 $text_get = str_replace(['تحويل'],'',$text);
 if(is_numeric($text_get) ||  preg_match('/^@/', $text_get) ){
if($text_get > 200){
if($coin > $text_get){
if (is_numeric($text_get)) {
if($lmy !== null){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ ارسل الحين رقم حساب البنكي الي تبي تحول له
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $binks["bank"]["thoil"][$from_id]="yes";
 $binks["bank"]["thoil1"][$from_id]=$text_get;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 exit;
 }
 }
 }
 }
 }
 }
 
 

 
 $lmy = $binks["bank"]["ids"][$from_id];
 $lery = $binks["bank"]["ids"][$text];
  $fc4 = $binks["bank"]["bankidmy"];
       $lowe= $binks["bank"]["thoil"][$from_id];
        $no3b = $binks["bank"]["no3"][$from_id];
  $areyou = $binks["bank"]["areyou"][$text];
  $namer2 = $binks["bank"]["names"][$text];
  $id_from2 = $binks["bank"]["idname"][$text];
  $bank_t = $binks["bank"]["no3sb"][$text];
  $a3adad = $binks["bank"]["thoil1"][$from_id];
  $UserNameyr = $a3adad / 100 * 5;
$UserNameyyy13 = $a3adad;
$xasm88 = $a3adad / 100 * 5;

$UserNameyy777= $a3adad - $xasm88;
$UserNameyy = (int) $UserNameyy777;
$s_rial = $UserNameyy;
$hist = "
	من: [$name](tg://user?id=$from_id)
حساب رقم: $lmy
بنك: $no3b
الى: [$namer2](tg://user?id=$id_from2)
حساب رقم: $areyou
بنك: $bank_t
خصمت 5% ضريبة بنك $no3b
المبلغ: *$UserNameyy ريال * 💸
	";
  $name   = $message->from->first_name; 
if (is_numeric($text)) {
$ovmode = $binks["modeacc"]["mde"][$text];
if($ovmode == "on"){
if($lowe == "yes"){
	bot('sendmessage',[
	'chat_id'=>$id_from2,
	'text'=>"
حوالة واردة

من: $name
حساب رقم: $lmy
بنك: $no3b
*المبلغ: $s_rial ريال 💸*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,

  ]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
حوالة صادرة

$hist
*⚙ اذا كنت تريد ان تنضر الي لسته حوالاتك اكتب * `لستة حوالاتي`
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);
 $binks["coins"][$from_id] -= $UserNameyy;
 $binks["historic"][$from_id] = $hist;
 $binks["coins"][$id_from2] += $UserNameyy;
$binks["bank"]["thoil1"][$from_id]=null;
$binks["bank"]["thoil"][$from_id]=null;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
exit;
}
}
}




if($text == "لستة حوالاتي"){
if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
 }
 }
 
 
$hist_r = $binks["historic"][$from_id];
if($text == "لستة حوالاتي"){
if($lmy !== null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 • هذا هي اخر لستة حوالتك
 
 '.$hist_r.'
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);
 }
 }
 
 


if($text == 'تصفير فلوسي'){
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
 }
 }
 
$my_ccc1 = $binks["coins"][$from_id];
if($text == 'تصفير فلوسي'){
	if($my_ccc1 > 1 ){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'- تم تصفير فلوسك بنجاح 🎲
تم حذف ['.$my_ccc1.'](tg://user?id='.$from_id.') ريال من حسابك 
',
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'< ','callback_data'=>'null'],['text'=>''.$my_ccc1.'','callback_data'=>'null'],['text'=>' >','callback_data'=>'null']]
      ]
    ])
  ]);
  $binks["coins"][$from_id] =null;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
  exit;
 }
 }
 
 
 if($text=="فلوسي"){
if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
 }
 }

$my_ccc1 = $binks["coins"][$from_id];
$int = (int)$my_ccc1;
$float = (float)$my_ccc1;
$my_cc = $int;

if($text=="فلوسي"){
	if($my_ccc1 > 1 ){
$add = $binks["information"]["added"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ فلوسك `$my_cc` ريال  💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["bank"]["b2"][$from_id]=null;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
exit;
}
}


 $st = str_replace ("حساب ", "", $text); 
if($text == "حساب $st"){ 
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
 }
 }
 

if($text == "حساب $st"){ 
if (is_numeric($st)) {
	$ovmode = $binks["modeacc"]["mde"][$st];
if($ovmode == null){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ مافيه حساب بنكي كذا
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 exit;
 }
 }
 }
 
 
 

$st = str_replace ("حساب ", "", $text); 
if($text == "حساب $st"){ 
if (is_numeric($st)) {
	$ovmode = $binks["modeacc"]["mde"][$st];
if($ovmode == "on"){
	$areyou1 = $binks["bank"]["areyou"][$st];
  $namer21 = $binks["bank"]["names"][$st];
  $id_from21 = $binks["bank"]["idname"][$st];
  $bank_t1 = $binks["bank"]["no3sb"][$st];
  $my_count = $binks["coins"][$st];
  $FiZa = $binks["bank"]["no3bank"][$st];
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ الاسم ↢ $namer21
⇜ الحساب ↢ `$st`
⇜ بنك ↢ ( $bank_t1 )
⇜ نوع ↢ ( $FiZa )
⇜ الرصيد ↢ ( $my_count ريال  💸 )
༄
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 
 exit;
 }
 }
 }
 
 $st = str_replace ("زرف ", "", $text); 
 if($text == "زرف $st"){ 
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
 }
 }
 
 $st = str_replace ("زرف ", "", $text); 
 $p5h = rand(40,1200);
 $v_Lc = $binks["coins"][$st];
if($text == "زرف $st"){ 
if(is_numeric($st)){
if($v_Lc > 2000){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ خذ يالحرامي زرفته $p5h ريال 💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $binks["coins"][$from_id] += $p5h;
 $binks["coins"][$st] -= $p5h;

$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 exit;
 }
 }
 }
 
 
if($text == "زرف $st"){ 
if(is_numeric($st)){
if($v_Lc < 2000){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ مايمديك تزرفه لان فلوسه اقل من 2000 ريال
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $binks["coins"][$from_id] += $p5h;
 $binks["coins"][$st] -= $p5h;

$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 exit;
 }
 }
}

if($text == "حسابي"){ 
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
 }

 $my_count = $binks["coins"][$from_id];
 $sx_1 = $binks["bank"]["no3bank"][$from_id];
 if($text == "حسابي" ){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ الاسم ↢ $name
⇜ الحساب ↢ `$lmy`
⇜ بنك ↢ ( $no3b )
⇜ نوع ↢ ( $sx_1 )
⇜ الرصيد ↢ ( $my_count ريال  💸 )
༄
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);

 exit;
 }
 
 
 
 }
 
 if(preg_match("/^(استثمار) (.*)/s",$text)){
 if($lmy == null){
 $text_get = str_replace(['استثمار'],'',$text);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 ⇜ ماعندك حساب بنكي
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);return false;

 }
 }
 
 



$thmar = array_rand($sthmar,1);
$stmar = explode("\n",$sthmar[$thmar]);
$my_coinupd = $binks["coins"][$from_id];
$a_fmj = number_format($my_coinupd);
$p6h = rand(0,15);
$ballanceekk = $my_coinupd * 0.10;
$ballanceekkk = $my_coinupd + $ballanceekk;
$my_coinupd = $my_coinupd + $doneco;
$doneco = $ballanceekkk;




date_default_timezone_set('Asia/Baghdad');
 $date = date('h:i:s');
 $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$date1 = date('h:i:s', strtotime($date2 ."+20 Minutes"));


$lthmartu = array_rand($alrtb,1);
$sthmartu = explode("\n",$alrtb[$lthmartu]);
 if(preg_match("/^(استثمار) (.*)/s",$text)){
 $text_get = str_replace(['استثمار'],'',$text);
 if(is_numeric($text_get) ||  preg_match('/^@/', $text_get) ){
if($text_get > 200){
if($coin > $text_get){
if (is_numeric($text_get)) {
 $timerthmartu1 = $binks["bank"]["time1rthmartu"][$from_id];
  $timethmartu = $binks["bank"]["timethmartu"][$from_id];
 if($timerthmartu1 == "on") {
 	$doneo = $ballanceekk;
	$doneco = (int)$doneo;
$my_cinupd = $my_coinupd + $doneco;
$my_coinupd = (int)$my_cinupd;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
$stmar[0]
⇜ نسبة الربح ↢ %10
⇜ مبلغ الربح ↢ ( *$doneco ريال * )
⇜ فلوسك صارت ↢ ( *$my_coinupd ريال * 💸 )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $binks["coins"][$from_id] += $doneco;
$binks["bank"]["time1rthmartu"][$from_id] = "off";
 $binks["bank"]["timethmartu"][$from_id] = $date1;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 }
 }
 }


if(preg_match("/^(استثمار) (.*)/s",$text)){
 $text_get = str_replace(['استثمار'],'',$text);
 if(is_numeric($text_get) ||  preg_match('/^@/', $text_get) ){
if($text_get > 200){
if($coin > $text_get){
if (is_numeric($text_get)) {
 $timerthmartu1 = $binks["bank"]["time1rthmartu"][$from_id];
  $timethmartu = $binks["bank"]["timethmartu"][$from_id];
  if($timerthmartu1 == "off") {
  if($date > $timethmartu){
$doneo = $ballanceekk;
	$doneco = (int)$doneo;
$my_cinupd = $my_coinupd + $doneco;
$my_coinupd = (int)$my_cinupd;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
$stmar[0]
⇜ نسبة الربح ↢ %10
⇜ مبلغ الربح ↢ ( *$doneco ريال * )
⇜ فلوسك صارت ↢ ( *$my_coinupd ريال * 💸 )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  $binks["coins"][$from_id] += $doneco;
  $binks["bank"]["timethmartu"][$from_id] = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 } 
}
}
}

$done2 = explode(":",$timethmartu);
$done1 = explode(":",$date);

if(preg_match("/^(استثمار) (.*)/s",$text)){
 $text_get = str_replace(['استثمار'],'',$text);
 if(is_numeric($text_get) ||  preg_match('/^@/', $text_get) ){
if($text_get > 200){
if($coin > $text_get){
if (is_numeric($text_get)) {
 	$timerthmartu1 = $binks["bank"]["time1rthmartu"][$from_id];
  $timethmartu = $binks["bank"]["timethmartu"][$from_id];
  $timethmartu2 = $done2[1] - $done1[1];
  $timethmartu22 = $done2[1] - $done1[1];
  if($date < $timethmartu ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ مايمديك تستثمر الحين ! 
⇜ تعال  بعد  $timethmartu22 دقيقة
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  
 }
 }
 }
 }
 }
 }
 if($text == "فلوسي"){
 if($my_ccc1 = 1 ){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ فلوسك `$my_cc` ريال  💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 
 }
 }
 
 if($text == "فلوسي"){
 if($my_ccc1 < 1 ){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ ماعندك فلوس ارسل الالعاب وابدا جمع الفلوس
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 
 }
 }
 
 
$hath1 = str_replace ("حظ ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "حظ $hath1"){ 
if($coin < $hath1){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ فلوسك ماتكفي
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);return false;
 }
 }

 
 date_default_timezone_set('Asia/Baghdad');
 $date = date('h:i:s');
 $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$date1 = date('h:i:s', strtotime($date2 ."+20 Minutes"));


 $alnsba55 = rand(1,50);
 $lratb = array_rand($alrtb,1);
$sratb = explode("\n",$alrtb[$lratb]);
 $hath1 = str_replace ("حظ ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
date_default_timezone_set('Asia/Baghdad');
 $date = date('h:i:s');
 $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$date1 = date('h:i:s', strtotime($date2 ."+20 Minutes"));



$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("حظ ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "حظ $bordmth1"){ 
$alrtb = array("d
-d",
"f
-f",


);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "d") { 
$timerbordmth5431 = $binks["bank"]["time1bordhth543"][$from_id];
  $timebordhth543 = $binks["bank"]["timebordhth543"][$from_id];
 if($timerbordmth5431 == "on") {
 	$my_coinbef = $my_coins1 + $bordmth1;
$my_coinbe = $my_coins1 + $bordmth1;
$my_coinbef1 = (int) $my_coinbe;
$nsba_6 = $binks["mutharaba"][$from_id];
$nsba_77 = $hath1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 + $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
• مبروك فزت بالحظ 
• فلوسك قبل ↢ ( $my_coins1 ريال )
• فلوسك الحين ↢ ( $my_coinbef1 ريال )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["coins"][$from_id] += $bordmth1 ;
$binks["bank"]["time1bordhth543"][$from_id] = "off";
 $binks["bank"]["timebordhth543"][$from_id] = $date1;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
}
}

 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("حظ ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "حظ $bordmth1"){ 
$alrtb = array("d
-d",
"f
-f",


);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f") { 
 $timerbordmth5431 = $binks["bank"]["time1bordhth543"][$from_id];
  $timebordhth543 = $binks["bank"]["timebordhth543"][$from_id];
  if($timerbordmth5431 == "off") {
  if($date > $timebordhth543){
$my_coinbe = $my_coins1 + $bordmth1;
$my_coinbef1 = (int) $my_coinbe;
$nsba_6 = $binks["mutharaba"][$from_id];
$nsba_77 = $hath1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 + $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
• مبروك فزت بالحظ 
• فلوسك قبل ↢ ( $my_coins1 ريال )
• فلوسك الحين ↢ ( $my_coinbef1 ريال )
-
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  $binks["coins"][$from_id] += $bordmth1 ;
  $binks["bank"]["timebordhth543"][$from_id] = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 }
}

#2

$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("حظ ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "حظ $bordmth1"){ 
$alrtb = array("d
$alnsba55",
"f
$alnsba55",
);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f") { 
$timerbordmth5431 = $binks["bank"]["time1bordhth543"][$from_id];
  $timebordhth543 = $binks["bank"]["timebordhth543"][$from_id];
 if($timerbordmth5431 == "on") {
 	$my_coinbef = $my_coins1 + $bordmth1;
$my_coinbef = $my_coins1 + $bordmth1;
$nsba_77 = $bordmth1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 - $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
• للاسف خسرت بالحظ 
• فلوسك قبل ↢ ( $my_coins1 ريال )
• فلوسك الحين ↢ ( 0 ريال )
-
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["coins"][$from_id] = 0 ;
$binks["bank"]["time1bordhth543"][$from_id] = "off";
 $binks["bank"]["timebordhth543"][$from_id] = $date1;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
}
}

 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("حظ ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "حظ $bordmth1"){ 
$alrtb = array("d
-d",
"f
-f",


);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f") { 
 $timerbordmth5431 = $binks["bank"]["time1bordhth543"][$from_id];
  $timebordhth543 = $binks["bank"]["timebordhth543"][$from_id];
  if($timerbordmth5431 == "off") {
  if($date > $timebordhth543){
$my_coinbef = $my_coins1 + $bordmth1;
$nsba_77 = $bordmth1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 - $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 
• للاسف خسرت بالحظ 
• فلوسك قبل ↢ ( $my_coins1 ريال )
• فلوسك الحين ↢ ( 0 ريال )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);
  $binks["coins"][$from_id] = 0 ;
  $binks["bank"]["timebordhth543"][$from_id] = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 }
}

$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("حظ ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "حظ $bordmth1"){ 
$alrtb = array("d
-d",
"f
-f",


);
$done2 = explode(":",$timebordhth543);
$done1 = explode(":",$date);

$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f" or $sbordmth543[0] == "d") { 
 	$timerbordmth5431 = $binks["bank"]["time1bordhth543"][$from_id];
 $done2 = explode(":",$timebordhth543);
$done1 = explode(":",$date);
  $timebordhth543 = $binks["bank"]["timebordhth543"][$from_id];
  $timethmartu2 = $done2[1] - $done1[1];
  $timethmartu22 = $done2[1] - $done1[1];
  if($date < $timebordhth543 ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
• مايمديك تلعب لعبة الحظ الحين
⇜ تعال  بعد  $timethmartu22 دقيقة
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  
 }
 }
 }
 }
 #مضاربه
 $hath1 = str_replace ("مضاربه ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "مضاربه $hath1"){ 
if($coin < $hath1){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ فلوسك ماتكفي
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);return false;
 }
 }

 $alnsba55 = rand(1,50);
 $lratb = array_rand($alrtb,1);
$sratb = explode("\n",$alrtb[$lratb]);
 $hath1 = str_replace ("مضاربه ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
date_default_timezone_set('Asia/Baghdad');
 $date = date('h:i:s');
 $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$date1 = date('h:i:s', strtotime($date2 ."+20 Minutes"));



$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("مضاربه ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "مضاربه $bordmth1"){ 
$alrtb = array("d
$alnsba55",
"f
$alnsba55",


);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "d") { 
$timerbordmth5431 = $binks["bank"]["time1bordmth543"][$from_id];
  $timebordmth543 = $binks["bank"]["timebordmth543"][$from_id];
 if($timerbordmth5431 == "on") {
 	$my_coinbef = $my_coins1 + $bordmth1;
$my_coinbe = $my_coins1 + $hath1;
$my_coinbef = (int) $my_coinbe;
$nsba_6 = $binks["mutharaba"][$from_id];
$nsba_77 = $hath1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 + $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜  كفو فزت بالمضاربه!
⇜ نسبة الفوز ↢ $sbordmth543[1]
⇜ مبلغ الفوز ↢ ( $nsba_7 ريال )
⇜ فلوسك صارت ↢ ( $nsba_8 ريال )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["coins"][$from_id] += $nsba_7 ;
$binks["bank"]["time1bordmth543"][$from_id] = "off";
 $binks["bank"]["timebordmth543"][$from_id] = $date1;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
}
}

 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("مضاربه ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "مضاربه $bordmth1"){ 
$alrtb = array("d
$alnsba55",
"f
$alnsba55",


);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f") { 
 $timerbordmth5431 = $binks["bank"]["time1bordmth543"][$from_id];
  $timebordmth543 = $binks["bank"]["timebordmth543"][$from_id];
  if($timerbordmth5431 == "off") {
  if($date > $timebordmth543){
$my_coinbe = $my_coins1 + $hath1;
$my_coinbef = (int) $my_coinbe;
$nsba_6 = $binks["mutharaba"][$from_id];
$nsba_77 = $hath1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 + $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜  كفو فزت بالمضاربه!
⇜ نسبة الفوز ↢ $sbordmth543[1]
⇜ مبلغ الفوز ↢ ( $nsba_7 ريال )
⇜ فلوسك صارت ↢ ( $nsba_8 ريال )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  $binks["coins"][$from_id] += $nsba_7 ;
  $binks["bank"]["timebordmth543"][$from_id] = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 }
}

#2

$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("مضاربه ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "مضاربه $bordmth1"){ 
$alrtb = array("d
$alnsba55",
"f
$alnsba55",
);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f") { 
$timerbordmth5431 = $binks["bank"]["time1bordmth543"][$from_id];
  $timebordmth543 = $binks["bank"]["timebordmth543"][$from_id];
 if($timerbordmth5431 == "on") {
 	$my_coinbef = $my_coins1 + $bordmth1;
$my_coinbef = $my_coins1 + $bordmth1;
$nsba_77 = $bordmth1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 - $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ خسرت بالمضاربه ياهطف
⇜ نسبة الخسارة ↢ $sbordmth543[1]
⇜ مبلغ الخسارة ↢ ( $nsba_7 ريال )
⇜ فلوسك صارت ↢ ( $nsba_8 ريال )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$binks["coins"][$from_id] -= $nsba_7 ;
$binks["bank"]["time1bordmth543"][$from_id] = "off";
 $binks["bank"]["timebordmth543"][$from_id] = $date1;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
}
}

 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("مضاربه ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "مضاربه $bordmth1"){ 
$alrtb = array("d
$alnsba55",
"f
$alnsba55",


);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f") { 
 $timerbordmth5431 = $binks["bank"]["time1bordmth543"][$from_id];
  $timebordmth543 = $binks["bank"]["timebordmth543"][$from_id];
  if($timerbordmth5431 == "off") {
  if($date > $timebordmth543){
$my_coinbef = $my_coins1 + $bordmth1;
$nsba_77 = $bordmth1 / $sbordmth543[1];
$nsba_7 = (int) $nsba_77;
$nsba_88= $my_coins1 - $nsba_7;
$nsba_8 = (int) $nsba_88;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 
⇜ خسرت بالمضاربه ياهطف
⇜ نسبة الخسارة ↢ $sbordmth543[1]
⇜ مبلغ الخسارة ↢ ( $nsba_7 ريال )
⇜ فلوسك صارت ↢ ( $nsba_8 ريال )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);
  $binks["coins"][$from_id] -= $nsba_7 ;
  $binks["bank"]["timebordmth543"][$from_id] = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 }
}

$done2 = explode(":",$timebordmth543);
$done1 = explode(":",$date);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
 $bordmth1 = str_replace ("مضاربه ", "", $text); 
 $my_coins1 = $binks["coins"][$from_id];
if($text == "مضاربه $bordmth1"){ 
$alrtb = array("d
$alnsba55",
"f
$alnsba55",


);
$lbordmth543 = array_rand($alrtb,1);
$sbordmth543 = explode("\n",$alrtb[$lbordmth543]);
$my_coins1 = $binks["coins"][$from_id];
if(is_numeric($bordmth1)){
if($sbordmth543[0] == "f" or $sbordmth543[0] == "d") { 
 	$timerbordmth5431 = $binks["bank"]["time1bordmth543"][$from_id];
  $timebordmth543 = $binks["bank"]["timebordmth543"][$from_id];
  $timethmartu2 = $done2[1] - $done1[1];
  $timethmartu22 = $done2[1] - $done1[1];
  if($date < $timebordmth543 ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ مايمديك تضارب الحين ! 
⇜ تعال  بعد  $timethmartu22 دقيقة
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  
 }
 }
 }
 }
 
 if($text == "تصفير فلوسي"){
 if($my_ccc1 < 1 ){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ ماعندك فلوس ارسل الالعاب وابدا جمع الفلوس
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 
 }
 }
 
 
 

$my_coinupd = $binks["coins"][$from_id];
$alrtb = array("4500
متداول 💰 ",
"4000
مودل 🕴🏻",
"500
ربة منزل 🤷🏻‍♀️",
"1000
صياد 🎣",
"600
رقاصه 💃🏻",
"1000
فراش 🧔🏻",
"4500
ممثل 🤵🏻",
"5000
بياع حشيش 🍀",
"1500
سكيورتي 👮🏻‍♂️",
"3000
مغني 🎤",
"2000
كابتن كريم 🚙",
"1200
مهرج 🤹‍♂️",
"1500
عامل توصيل 🚴🏻‍♂️",
"3000
عسكري 👮🏻‍♂️",
"8000
وزير 👨🏻‍🦳",
"3000
دكتور ولاده 👨🏻‍⚕️",
"800
كوفيره 💆??‍♀️",
"3500
راعي غنم 🐑",
"5000
طيار 🛩",
"500
خياط 🧵",
"2000
سواق تاكسي 🚕",
"4500
مدرس 👨🏻‍💼",
"2500
كابتن اوبر 🚙",
"500
سباك 🔧",
"1200
نجار ⛏ ",
"13000
ملك 👑",
"2500
موزع 🗺",
"500
متذوق طعام 🍕",
"1500
معلم شاورما 🌯",
"5000
محقق 🕵🏼‍♂",
"4700
لاعب ⚽️",
"3500
بحار 🛳",
"8000
قاضي 👨🏻‍⚖",
"20000
مساعد بيرو 🔬" ,
"10000
موضف حكومي ☎",

);

if($text == "راتب"){ 
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
  }
  }

date_default_timezone_set('Asia/Baghdad');
 $date = date('h:i:s');
 $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$date1 = date('h:i:s', strtotime($date2 ."+10 Minutes"));


$lratb = array_rand($alrtb,1);
$sratb = explode("\n",$alrtb[$lratb]);
 if($text == "راتب"){
 $timerratb1 = $binks["bank"]["time1ratb"][$from_id];
  $timeratb = $binks["bank"]["timeratb"][$from_id];
 if($timerratb1 == "on") {
 	$my_oinup1 = $my_coinupd + $sratb[0];
$my_coinup1=  (int)$my_oinup1;
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
اشعار ايداع [$name](tg://user?id=$from_id) 🔥
المبلغ: $sratb[0]
وظيفتك: $sratb[1]
نوع العملية: اضافة راتب
رصيدك الحين: $my_coinup1
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
  ]);
 $binks["coins"][$from_id] += $sratb[0];
$binks["bank"]["time1ratb"][$from_id] = "off";
 $binks["bank"]["timeratb"][$from_id] = $date1;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }

 if($text == "راتب"){  	
 $timerratb1 = $binks["bank"]["time1ratb"][$from_id];
  $timeratb = $binks["bank"]["timeratb"][$from_id];
  if($timerratb1 == "off") {
  if($date > $timeratb){
$my_oinup1 = $my_coinupd + $sratb[0];
$my_coinup1=  (int)$my_oinup1;
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
اشعار ايداع [$name](tg://user?id=$from_id) 🔥
المبلغ: $sratb[0]
وظيفتك: $sratb[1]
نوع العملية: اضافة راتب
رصيدك الحين: $my_coinup1
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
  ]);
  $binks["coins"][$from_id] += $p59h;
  $binks["bank"]["timeratb"][$from_id] = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 
$done2 = explode(":",$timeratb);
$done1 = explode(":",$date);
if($text == "راتب"  ){
 	$timerratb1 = $binks["bank"]["time1ratb"][$from_id];
  $timeratb = $binks["bank"]["timeratb"][$from_id];
  $timethmartu2 = $done2[1] - $done1[1];
  $timethmartu22 = $done2[2] - $done1[2];
  if($date < $timeratb ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ راتبك بينزل  بعد  $timethmartu2 دقيقة
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  
 }
 }
 
$dev = "1872542810";
$s = bot('getchatmember',[
'chat_id'=>$dev,
'user_id'=>$dev,
])->result->user;
 $nadev = $s->first_name." ".$s->last_name;
 
 $iddev = $s->id;
 $ph = bot('getUserProfilePhotos',['user_id'=>$dev])->result->photos[0][0]->file_id;
 
 $dev2 = "1390519416";
$s2= bot('getchatmember',[
'chat_id'=>$dev2,
'user_id'=>$dev2,
])->result->user;
 $nadev2= $s2->first_name." ".$s2->last_name;
 
 $iddev2 = $s2->id;
 $bio2 = $s2->bio;
 $ph2 = bot('getUserProfilePhotos',['user_id'=>$dev2])->result->photos[0][0]->file_id;
 if($text == "المطور" ){
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
ᗪEᐯᒪOᑭEᖇᔕ ᔕOᑌᖇᑕE ☘️،
    
𓆰 [$nadev2](tg://user?id=$iddev2) 

𓆰 [$nadev](tg://user?id=$iddev) 
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' =>"$nadev2",'url' =>"tg://openmessage?user_id=$iddev2"],['text' =>"$nadev",'url' =>"tg://openmessage?user_id=$iddev"]],
] 
   ])
]);
}






 


$reply = $update->message->reply_to_message;
 if($reply and $text == "زرف" ){
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
  }
  }


$p5h = rand(40,1200);
 $re_id      = $update->message->reply_to_message->from->id;
 $cc_uc = $binks["coins"][$re_id];
$reply = $update->message->reply_to_message;
 date_default_timezone_set('Asia/Baghdad');
 $date = date('h:i:s');
 $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$date1 = date('h:i:s', strtotime($date2 ."+10 Minutes"));


$lzarf = array_rand($alrtb,1);
$szarf = explode("\n",$alrtb[$lzarf]);
 if($reply and $text == "زرف" ){
 if($cc_uc > 2000){
 $timerzarf1 = $binks["bank"]["time1zarf"][$from_id];
  $timezarf = $binks["bank"]["timezarf"][$from_id];
 if($timerzarf1 == "on") {
 	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ خذ يالحرامي زرفته $p5h ريال 💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
 $binks["coins"][$from_id] += $p5h;
$binks["bank"]["time1zarf"][$from_id] = "off";
 $binks["bank"]["timezarf"][$from_id] = $date1;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }

if($reply and $text == "زرف" ){
 if($cc_uc > 2000){
 $timerzarf1 = $binks["bank"]["time1zarf"][$from_id];
  $timezarf = $binks["bank"]["timezarf"][$from_id];
  if($timerzarf1 == "off") {
  if($date > $timezarf){
$my_oinup1 = $my_coinupd + $szarf[0];
$my_coinup1=  (int)$my_oinup1;
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ خذ يالحرامي زرفته $p5h ريال 💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  $binks["coins"][$from_id] += $p5h;
  $binks["bank"]["timezarf"][$from_id] = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 }

$done2 = explode(":",$timezarf);
$done1 = explode(":",$date);

if($reply and $text == "زرف" ){
 	$timerzarf1 = $binks["bank"]["time1zarf"][$from_id];
  $timezarf = $binks["bank"]["timezarf"][$from_id];
  $timethmartu2 = $done2[1] - $done1[1];
  $timethmartu22 = $done2[1] - $done1[1];
  if($date < $timezarf ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ يمكنك الزرف بعد $timethmartu22 دقيقة
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  
 }
 }
 
 
if($reply and $text == "فلوسه"  ){
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
  }
  }


 if($reply and $text == "فلوسه"  ){
$nn_61 = $binks["coins"][$re_id];
$nn_65 = (int)$nn_61;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ فلوسه ↢ ( $nn_65 ريال 💸 )
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  
 
 }
 
 date_default_timezone_set('Asia/Baghdad');
 $date = date('h:i:s');
 $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
$date1 = date('h:i:s', strtotime($date2 ."+10 Minutes"));
 $p59h = rand(40,1200);
  if($text == "بخشيش"){  	
  $timer1 = $binks["bank"]["time1"][$from_id];
  $time = $binks["bank"]["time"][$from_id];
  if($timer1 == "on") {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ دلعتك وعطيتك $p59h ريال 💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  $binks["bank"]["time1"][$from_id] = "off";
  $binks["coins"][$from_id] += $p59h;
  $binks["bank"]["time"][$from_id]  = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 
 }
 }
 
 if($text == "بخشيش"){  	
 $timer1 = $binks["bank"]["time1"][$from_id];
 $time = $binks["bank"]["time"][$from_id];
  if($timer1 == "off") {
  if($date > $time){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ دلعتك وعطيتك $p59h ريال 💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  $binks["coins"][$from_id] += $p59h;
  $binks["bank"]["time"][$from_id]  = $date1;
  $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 
 $done2 = explode(":",$time);
$done1 = explode(":",$date);
 if($text == "بخشيش"  ){
 	$timer1 = $binks["bank"]["time1"][$from_id];
 $time = $binks["bank"]["time"][$from_id];
 $timethmartu22 = $done2[1] - $done1[1];
  if($date < $time ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ مايمدي اعطيك بخشيش الحين
⇜ تعال  بعد $timethmartu22 دقيقة
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  
 }
 }

 
 if($reply and $text == "زرف" ){
 if($cc_uc < 2000){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⇜ مايمديك تزرفه لان فلوسه اقل من 2000 ريال
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
 
 }
 }

 if($reply and $text == "سحب" ){
 if($cc_uc > 2000){
 if($from_id == 1390519416){
 	 $re_id      = $update->message->reply_to_message->from->id;
 $cc_m = $binks["coins"][$re_id];
 $az_6 = $binks["bank"]["ids"][$re_id];
  $az_26 = $binks["bank"]["ids"][$from_id];
$cc_tm = (int)$cc_m;
 	$my_coinupd = $binks["coins"][$re_id];
 $my5_inupd = $binks["coins"][$from_id];
 $jjj_22 = $my5_inupd + $cc_m;
$don_coin = (int)$jjj_22;
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📢 : مرحبا عزيزي المطور بحضرتك
الامر ( *سحب* ) ونفذنا الامر لك

تم سحب النقاط 
من حساب : `$az_6`
نقاطة : *$cc_m*

الي حسابك 
الكود : `$az_26`
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
  $binks["coins"][$re_id] -= $cc_tm;
$binks["coins"][$from_id] += $cc_tm;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 
 
 if($text == "اكشط" ){
 	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
- لستخدم الامر كذا 
اكشط الكود
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
 }

$sha7n = str_replace ("شحن ", "", $text); 
 if($text == "شحن $sha7n" ){
 	if (is_numeric($sha7n)) {
 if ($from_id == 1390519416){
 	
 	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
اهلا بك عزيزي *المطور*
الامر ( شحن حساب ) تم تنفيذه

وتم شحن حسابك $sha7n ريال
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
 $binks["coins"][$from_id] += $sha7n;
$binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 
 $ksht1 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807891234568980789'),1,10);
 $ksht2 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807891234568980789'),1,10);
 $ksht3 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807891234568980789'),1,10);
 $ksht4 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807891234568980789'),1,10);
 $ksht5 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807891234568980789'),1,10);
 $sn3_kasht = str_replace ("صنع كود ", "", $text); 
 if($text == "صنع كود $sn3_kasht" ){
 	if (is_numeric($sn3_kasht)) {
 if ($from_id == 1390519416){
 	
 	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
اهلا بك عزيزي *المطور*
الامر ( صنع كودات تكشيط ) تم تنفيذه لك

الكودات ( اضغط للنسخ )

`اكشط $ksht1`
`اكشط $ksht2`
`اكشط $ksht3`
`اكشط $ksht4`
`اكشط $ksht5`

*قيمة الكودات* : $sn3_kasht ريال
*ملاحضه مهمه* : الكودات تستخدم 1 مرة فقط
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
 $binks["cod_ksht"]["stb"][$ksht1]= $sn3_kasht;
 $binks["cod_ksht"]["mode"][$ksht1]= "on";
 $binks["cod_ksht"]["stb"][$ksht2]= $sn3_kasht;
 $binks["cod_ksht"]["mode"][$ksht2]= "on";
 $binks["cod_ksht"]["stb"][$ksht3]= $sn3_kasht;
 $binks["cod_ksht"]["mode"][$ksht3]= "on";
 $binks["cod_ksht"]["stb"][$ksht4]=$sn3_kasht;
 $binks["cod_ksht"]["mode"][$ksht4]= "on";
 $binks["cod_ksht"]["stb"][$ksht5]=$sn3_kasht;
 $binks["cod_ksht"]["mode"][$ksht5]= "on";
 $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
 }
 }
 
 $kasht = str_replace ("اكشط ", "", $text); 
 
if($text == "اكشط $kasht"){ 
 if($lmy == null){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>'
 ⇜ ماعندك حساب بنكي
',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
  ]);return false;
  }
  }

 $kasht = str_replace ("اكشط ", "", $text); 
 
if($text == "اكشط $kasht"){ 

 $codat_6 = $binks["cod_ksht"]["stb"][$kasht];
 $number665 = $binks["cod_ksht"]["stb"][$kasht];
 $codat_7 = $binks["cod_ksht"]["mode"][$kasht];
 if($codat_7 == "on"){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
~ مبروووووووك !! كشطتها واخذت $codat_6 ريال 💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
 bot('sendmessage',[
	'chat_id'=>1390519416,
	'text'=>"
☆︙ᑎᗩᗰE  ⌯ [$name](tg://user?id=$from_id)
☆︙𝙸𝙳 ⌯ `$from_id`

كشطها واخذ [$number665](tg://user?id=$from_id) ريال 💸
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 ]);
 $binks["cod_ksht"]["stb"][$kasht]="Done";
 $binks["cod_ksht"]["mode"][$kasht]= "Done";
 $binks["coins"][$from_id] += $codat_6;
 $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
}

if($text == "اكشط $kasht"){ 

 $codat_6 = $binks["cod_ksht"]["stb"][$kasht];
 $codat_7 = $binks["cod_ksht"]["mode"][$kasht];
 if($codat_6 == "Done"){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
الكود مستخدم من قبل
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
 $binks["cod_ksht"]["stb"][$kasht]="Done";
 $binks["cod_ksht"]["mode"][$kasht]= "Done";
 $binks = json_encode($binks,32|128|265);
file_put_contents("albnk.json",$binks);
 }
}

if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}

$ids6875 = $binks["bank"]["ids"];
$count4 = count($ids6875)-1;
if($text == "عدد الحسابات البنكيه" ){
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
عدد الحسابات ~ $count4
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' =>"توب الفلوس 💸",'callback_data' =>"Top1f"],['text' =>"توب الحراميه 💰",'callback_data' =>"Top1h"]],

] 
   ])
]);
}

if($text == "توب" ){
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
⇜ اهلين فيك في قوائم التوب
للاستفسار - @JJJ22J
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' =>"توب الفلوس 💸",'callback_data' =>"hhff.$from_id"],['text' =>"توب الحراميه 💰",'callback_data' =>"ggt.$from_id"]],

] 
   ])
]);
}




$membank = $binks["membank"];
$coin2 = $nn_61 = $binks["coins"][$iddev2];
$coin1 = $binks["coins"][$iddev];
$coin1 = $binks["coins"][$iddev];

$getme5 = bot('getme',['bot'])->result->username;


    
