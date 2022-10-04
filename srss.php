)<?php
$SPAM = "5795044372:AAHhnfi7gXIIq6cV05s_cyH4LXvl1Lx67u4";
define('API_KEY',"$SPAM");
function bot($method,$datas=[]){
$ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,"https://api.telegram.org/bot".API_KEY."/".$method);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text = $message->text; 
$data = $update->callback_query->data; 
$user = $update->message->from->username; 
$user2 = $message->from->username.$message->from->username;
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id; 
$chat_id = $message->chat->id; 
$chat_id2 = $update->callback_query->message->chat->id; 
$chat_id22 = $update->callback_query->message->chat->id; 
$cc = $payments->BankCardData;
$from_id = $message->from->id;
$from_id2 = $update->callback_query->message->from->id; 
$database ="✅";
$type = $update->message->chat->type; 
$name = $message->from->first_name.$message->from->last_name;
$TW2AX = "https://github.com/ahmad3641/ahmadaslamat/upload";
@mkdir("users");
@mkdir("data");
$sudo = 1784737233;
$update= json_decode(file_get_contents('php://input'));
$message= $update->message;
$text   = $message->text;
$chat_id= $message->chat->id;
$from_id= $message->from->id;
$files = $message->document;
$admin = 1784737233;
$sudo = 1784737233;
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
$countmembers = count($members);
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $chat_id;
}
$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[0]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$voice_id = $message->voice->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
$mei = bot('getme',['bot'])->result->id;
$members = explode("\n",file_get_contents("members.txt"));
$group = explode("\n",file_get_contents("group.txt"));
$sting = json_decode(file_get_contents("sting.json"),true);
$admins = array("$sudo",$sting['sting']['admins']);
$admin = $admins[0];
if($tc == 'private'){
	$ch = $sting['sting']['ch1'];
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$mei]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('sendMessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
		}
}
}
$ch = $sting['sting']['ch2'];
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$mei]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
		}
}
}
	}
		if(in_array($chat_id,$sting['sting']['band'])){
	if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
عذرا أنت محظور من البوت 😢
      ",'reply_to_message_id'=>$message_id,
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
عذرا أنت محظور من البوت 😢
        ",
]);
		}
		return false;
}
	if($tc == 'group' or $tc == 'supergroup'){
$ch = $sting['sting']['chg1'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
		}
		return false;
}
}
$ch = $sting['sting']['chg2'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
		}
		return false;
}
}
		}
		if($tc == 'group' or $tc == 'supergroup'){
			if(in_array($from_id,$sting['sting']['band'])){
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
		return false;
}
			}
		if(!$sting['sting']['bot']){
	$sting['sting']['bot'] = "true";
	$sting['sting']['onstart'] = "false";
	$sting['sting']['ford'] = "false";
	$sting['sting']['tw'] = "false";
	file_put_contents("sting.json",json_encode($sting));
	}
	if($tc == 'private' and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
		if($sting['sting']['bot'] == "false"){
			bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	عذرا البوت في صيانة ⁦♻️⁩❗
	",
	'reply_to_meesage_id'=>$message_id,
	]);
	exit();
			}
			
				if(!$data and $sting['sting']['ford'] == "true" and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
				bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
				}
				if($sting['sting']['tw'] == "true" and $tc == 'private'){
					if($text != "/start" and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
						bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
						bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم إرسال رسالتك للمطور بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
	]);
						}
if($chat_id == $admin and $message->reply_to_message){
							bot('sendmessage',[
	'chat_id'=>$message->reply_to_message->forward_from->id, 
	'text'=>"
	$text
	",
	'reply_to_meesage_id'=>$message->reply_to_message->message_id,
	]);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم إرسال رسالتك بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
	]);
							}
					}
		}
		if($chat_id == $admin and $message->reply_to_message and $tc == 'private' and $sting['sting']['tw'] == "true"){
							bot('sendmessage',[
	'chat_id'=>$message->reply_to_message->forward_from->id, 
	'text'=>"
	$text
	",
	'reply_to_meesage_id'=>$message->reply_to_message->message_id,
	]);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم إرسال رسالتك بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
	]);
							}
if($tc == 'private' and !in_array($from_id,$members)){
	if($tc == 'private' and $text == "/start" and $sting['sting']['onstart'] == "true" and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
				bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
دخل شخص للبوت  🚶🏻‍♂️
~~~~~~~~~~
اسمه ⬅️ <a href='tg://user?id=$from_id'>$name</a>
معرفه ⬅️ <a href='tg://user?id=$from_id'>@$user</a>
ايديه ⬅️ <code>$from_id</code>
~~~~~~~~~~~
عدد الاعضاء  $all
" ,
'parse_mode'=>'HTML'
]);
				}
	file_put_contents('members.txt',$from_id."\n",FILE_APPEND);
	}
if($tc == 'group' or $tc == 'supergroup' and !in_array($chat_id,$group)){
		file_put_contents('group.txt',$chat_id."\n",FILE_APPEND);
		}
if($text == "/start" or $texr == "/admin"){
	$ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
	if($chat_id == $admin){
		bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"التوجيه $ford 🔄",'callback_data'=>'ford'],['text'=>"التنبيه $onstart 📣",'callback_data'=>'onstart']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"البوت $bot 🤖",'callback_data'=>"bot"],['text'=>"التواصل $tw 📞",'callback_data'=>'tw']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"الأدمنة 👥⁦👮🏻‍♂️⁩",'callback_data'=>"admins"]
],
[
['text'=>"رفع مشرف ⁦👮🏻‍♂️⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦👳🏻‍♂️⁩",'callback_data'=>"deladmin"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
		}elseif(in_array($chat_id,$sting['sting']['admins'])){
			bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
			}
	}
if($data == "back"){
	$ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
	if($chat_id == $admin){
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"التوجيه $ford 🔄",'callback_data'=>'ford'],['text'=>"التنبيه $onstart 📣",'callback_data'=>'onstart']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"البوت $bot 🤖",'callback_data'=>"bot"],['text'=>"التواصل $tw 📞",'callback_data'=>'tw']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"الأدمنة 👥⁦👮🏻‍♂️⁩",'callback_data'=>"admins"]
],
[
['text'=>"رفع مشرف ⁦👮🏻‍♂️⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦👳🏻‍♂️⁩",'callback_data'=>"deladmin"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
		}elseif(in_array($chat_id,$sting['sting']['admins'])){
			bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
			}
	}
if($chat_id == $admin or in_array($chat_id,$sting['sting']['admins'])){
	if($data == 'ford' or $data == 'onstart' or $data == 'bot' or $data == 'tw'){
		$a = str_replace(['ford','onstart','bot','tw'],['التوجيه 🔄','التنبيه 📣','البوت 🤖','التواصل 📞'],$data);
		if($sting['sting'][$data] == "true"){
			$sting['sting'][$data] = "false";
			file_put_contents("sting.json",json_encode($sting));
			$b = "تعطيل ❎";
			}else{
				$sting['sting'][$data] = "true";
			file_put_contents("sting.json",json_encode($sting));
			$b = "تفعيل ✅";
				}
				bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"تم $b $a ❗", 
            'show_alert'=>true 
            ]); 
            $ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
            if($chat_id == $admin){
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"التوجيه $ford 🔄",'callback_data'=>'ford'],['text'=>"التنبيه $onstart 📣",'callback_data'=>'onstart']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"البوت $bot 🤖",'callback_data'=>"bot"],['text'=>"التواصل $tw 📞",'callback_data'=>'tw']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"الأدمنة 👥⁦👮🏻‍♂️⁩",'callback_data'=>"admins"]
],
[
['text'=>"رفع مشرف ⁦👮🏻‍♂️⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦👳🏻‍♂️⁩",'callback_data'=>"deladmin"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
		}elseif(in_array($chat_id,$sting['sting']['admins'])){
			bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
			}
		}
		if($data == "km"){
		$band = count($sting['sting']['band']);
		$ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
	$m = count($members) -1;
	$g = count($group) -1;
	$d = count($day)-1;
		bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"إحصائيات البوت كالتالي 🤖:
عدد الأعضاء 👤 «".$m."»
عدد المجموعات 👥 :«".$g."»
عدد المتفاعلين اليوم : «".$d."»
عدد المحظورين 📛 : «".$band."»
التوجيه 🔄 : «".$ford."»
التنبيه 📣 : «".$onstart."»
البوت 🤖 : «".$bot."»
التواصل 📞 : «".$tw."»
", 
            'show_alert'=>true 
            ]); 
		}
		if($data == "sendprofile"){
			            bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
قم بإرسال أي شيء لأرسله لجميع الأعضاء 📣
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"back"]
],
]])
]);
$sting['sting']['sting'] = 'send';
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
			}
			if(!$data and $sting['sting']['sting'] == 'send' and $sting['sting']['id'] == $from_id){
				foreach($members as $ASEEL){
					if($text)
bot('sendMessage', [
'chat_id'=>$ASEEL,
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($photo)
bot('sendphoto', [
'chat_id'=>$ASEEL,
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$ASEEL,
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$ASEEL,
'video_note'=>$video_note_id,
]);
if($sticker)
bot('Sendsticker',[
'chat_id'=>$ASEEL,
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($file)
bot('SendDocument',[
'chat_id'=>$ASEEL,
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($music)
bot('Sendaudio',[
'chat_id'=>$ASEEL,
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$ASEEL,
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
					}
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تمت الإذاعة بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
				}
				if($data == "sendgroup"){
			            bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
قم بإرسال أي شيء لأرسله لجميع الأعضاء 📣
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"back"]
],
]])
]);
$sting['sting']['sting'] = 'group';
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
			}
			if(!$data and $sting['sting']['sting'] == 'group' and $sting['sting']['id'] == $from_id){
				foreach($group as $ASEEL){
					if($text)
bot('sendMessage', [
'chat_id'=>$ASEEL,
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($photo)
bot('sendphoto', [
'chat_id'=>$ASEEL,
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$ASEEL,
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$ASEEL,
'video_note'=>$video_note_id,
]);
if($sticker)
bot('Sendsticker',[
'chat_id'=>$ASEEL,
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($file)
bot('SendDocument',[
'chat_id'=>$ASEEL,
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($music)
bot('Sendaudio',[
'chat_id'=>$ASEEL,
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$ASEEL,
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
					}
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تمت الإذاعة بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
				}
				if($data == "ch" or $data == "ch1del" or $data == "ch2del"){
					if($data == "ch1del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 1 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['ch1']);
						}
						if($data == "ch2del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 2 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['ch2']);
						}
					if($sting['sting']['ch1'] == null){
						$ch1 = "قناة 1 🔱 لا يوجد 😴";
						}else{
							$ch3 = bot('getchat',['chat_id'=>$sting['sting']['ch1']]);
							if($ch3->ok == true){
								$ch1 = $ch3->result->title;
								}else{
									$ch1 = "قناة 1 🔱 لا يوجد 😴";
									}
							}
							if($sting['sting']['ch2'] == null){
						$ch2 = "قناة 2 🔱 لا يوجد 🌚";
						}else{
							$ch = bot('getchat',['chat_id'=>$sting['sting']['ch2']]);
							if($ch->ok == true){
								$ch2 = $ch->result->title;
								}else{
									$ch2 = "قناة 2 🔱 لا يوجد 🌚";
									}
							}
					bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك أوامر الإشتراك الإجباري 😼
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$ch1",'callback_data'=>"ch"]
],
[
['text'=>"وضع قناة 👌",'callback_data'=>"ch1add"],['text'=>"حذف قناة 🤟",'callback_data'=>"ch1del"]
],
[
['text'=>"$ch2",'callback_data'=>"ch"]
],
[
['text'=>"وضع قناة 😼",'callback_data'=>"ch2add"],['text'=>"حذف قناة 🤙",'callback_data'=>"ch2del"]
],
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
					}
					if($data == "ch1add" or $data == "ch2add"){
						bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الأن معرف القناة Ⓜ️ او وجه أي رسالة من القناة 🔄
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"ch"]
]
]])
]);
if($data == "ch1add"){
$sting['sting']['sting'] = "ch1";
}else{
	$sting['sting']['sting'] = "ch2";
	}
	$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
						}
						if(!$data and $sting['sting']['sting'] == 'ch1' or $sting['sting']['sting'] == 'ch2' and $sting['sting']['id'] == $from_id and $update->message->forward_from_chat or preg_match("/(@)(.)/", $text)){
							if($sting['sting']['sting'] == 'ch1' or $sting['sting']['sting'] == 'ch2'){
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم حفظ القناة بنجاح ✅
	تأكد أن البوت مشرف في القناة ⁦👮🏻‍♂️⁩
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'ch']
],
]])
]);
if($update->message->forward_from_chat){
	$sting['sting'][$sting['sting']['sting']] = $update->message->forward_from_chat->id;
	}else{
		$sting['sting'][$sting['sting']['sting']] = $text;
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							}
	if($data == "admins"){
		foreach($sting['sting']['admins'] as $admins){
		$names = bot("getchat",["chat_id"=>$admins])->result->first_name;
		if($names != null){
		$addmins .= "[$names](tg://user?id=$admins)\n";
		}
		}
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	تفضل عزيزي الأدمن ⁦👮🏻‍♂️⁩ قائمة الأدمنة 📃
	$addmins
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
		}
		if($data == "chg" or $data == "chg1del" or $data == "chg2del"){
			if($data == "chg1del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 1 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['chg1']);
						}
						if($data == "chg2del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 2 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['chg2']);
						}
					if($sting['sting']['chg1'] == null){
						$chg1 = "قناة 1 🔱 لا يوجد 😴";
						}else{
							$chg3 = bot('getchat',['chat_id'=>$sting['sting']['chg1']]);
							if($chg3->ok == true){
								$chg1 = $chg3->result->title;
								}else{
									$chg1 = "قناة 1 🔱 لا يوجد 😴";
									}
							}
							if($sting['sting']['chg2'] == null){
						$chg2 = "قناة 2 🔱 لا يوجد 🌚";
						}else{
							$chg = bot('getchat',['chat_id'=>$sting['sting']['chg2']]);
							if($chg->ok == true){
								$chg2 = $chg->result->title;
								}else{
									$chg2 = "قناة 2 🔱 لا يوجد 🌚";
									}
							}
					bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك أوامر الإشتراك الإجباري 😼
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$chg1",'callback_data'=>"chg"]
],
[
['text'=>"وضع قناة 👌",'callback_data'=>"chg1add"],['text'=>"حذف قناة 🤟",'callback_data'=>"chg1del"]
],
[
['text'=>"$chg2",'callback_data'=>"chg"]
],
[
['text'=>"وضع قناة 😼",'callback_data'=>"chg2add"],['text'=>"حذف قناة 🤙",'callback_data'=>"chg2del"]
],
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
					}
					if($data == "chg1add" or $data == "chg2add"){
						bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الأن معرف القناة Ⓜ️ او وجه أي رسالة من القناة 🔄
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"chg"]
]
]])
]);
if($data == "chg1add"){
$sting['sting']['sting'] = "chg1";
}else{
	$sting['sting']['sting'] = "chg2";
	}
	$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
						}
						if(!$data and $sting['sting']['sting'] == 'chg1' or $sting['sting']['sting'] == 'chg2' and $sting['sting']['id'] == $from_id and $update->message->forward_from_chat or preg_match("/(@)(.)/", $text)){
							if($sting['sting']['sting'] == 'chg1' or $sting['sting']['sting'] == 'chg2')
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم حفظ القناة بنجاح ✅
	تأكد أن البوت مشرف في القناة ⁦👮🏻‍♂️⁩.
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'chg']
],
]])
]);
if($sting['sting']['sting'] != null){
if($update->message->forward_from_chat){
	$sting['sting'][$sting['sting']['sting']] = $update->message->forward_from_chat->id;
	}else{
		$sting['sting'][$sting['sting']['sting']] = $text;
		}
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							if($data == "band"){
								$band = count($sting['sting']['band']);
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك أوامر الحظر 🤟
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المحظورين 📛  «".$band."»",'callback_data'=>"bander"]
],
[
['text'=>"حظر ➕⛔",'callback_data'=>"bandadd"],['text'=>"إلغاء حظر ➖⛔",'callback_data'=>"delband"]
],
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
								}
								if($data == "bandadd" or $data == "delband"){
									$a = str_replace(['bandadd','delband'],['لأحظره من البوت 📛','لأزيله من المحظورين 😃'],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي 🆔 الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"band"]
],
]])
]);
$sting['sting']['sting'] = $data;
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
									}
									if(!$update->callback_query){
						if($text != null and $sting['sting']['sting'] == "bandadd" or $sting['sting']['sting'] == "delband" and $sting['sting']['id'] == $from_id){
							$a = str_replace(['bandadd','delband'],['حظره بنجاح 😏','إلغاء حظره بنجاح 😴'],$sting['sting']['sting']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم $a
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'band']
],
]])
]);
if($sting['sting']['sting'] == "bandadd"){
	$sting['sting']['band'][] = $text;
	}else{
		foreach($sting['sting']['band'] as $num => $json){
			if($json == $text){
		unset($sting['sting']['band'][$num]);
		brek;
		}
		}
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							}
							if($data == "bander"){
								foreach($sting['sting']['band'] as $band){
									if($band != null){
									$s .= "`$band` » [للدخول إلى الحساب 🍃](tg://user?id=$band)\n";
									}
}
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك قائمة المحظورين 📛
$s
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"band"]
],
]])
]);
								}
								if($data == "addadmin" or $data == "deladmin"){
									$a = str_replace(['addadmin','deladmin'],['لأرفعه أدمن ⁦☺️⁩','لأزيله من قائمة الأدمنة 😼'],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي 🆔 الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"back"]
],
]])
]);
$sting['sting']['sting'] = $data;
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
									}
									if(!$update->callback_query){
						if($text != null and $sting['sting']['sting'] == "addadmin" or $sting['sting']['sting'] == "deladmin" and $sting['sting']['id'] == $from_id){
							$a = str_replace(['addadmin','deladmin'],['تم رفعه بنجاح 😉','تم تنزيله بنجاح 😏'],$sting['sting']['sting']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم $a
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
if($sting['sting']['sting'] == "addadmin"){
	$sting['sting']['admins'][] = $text;
	bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	مبارك تم رفعك كمشرف في البوت 🤩
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🏠','callback_data'=>'back']
],
]])
]);
	}else{
		foreach($sting['sting']['admins'] as $num => $json){
			if($json == $text){
		unset($sting['sting']['admins'][$num]);
		bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	تم تنزيلك من الإشراف 😒
	",
]);
		break;
		}
		}
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							}
		}

if($text == "/start"){
file_put_contents("data/$from_id","$from_id-Real ID = $database");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/UYHID/33",
'caption'=>"• مرحباً بك يا $name  👋

في بوت صانع الاندكسات الاول في التليجرام 💦
المصنع سريع✅
بدون مشاكل ✅
بدون سرقة هيتات ✅
شغال بدون توقف خالص ✅

• كل ماعليك فعلة هو استخدام الكيبورد الذي في الاسفل 👀
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'انــشــاء انــدكــس 📚',]],
[['text'=>'خدمات الفيزه 💰',],['text'=>'ابلاغ عن مشكله 🖌',]],
],'resize_keyboard'=>true,
])
]);
}
if($text == 'انــشــاء انــدكــس 📚'){ 

bot('sendPhoto',[

'chat_id'=>$chat_id,

'photo'=>"https://t.me/UYHID/33",

'caption'=>"• مرحباً بك يا $name  👋

في بوت صانع الاندكسات الاول في التليجرام 💦
المصنع سريع✅
بدون مشاكل ✅
بدون سرقة هيتات ✅
شغال بدون توقف خالص ✅

• كل ماعليك فعلة هو استخدام الكيبورد الذي في الاسفل 👀


",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'𝗣𝘂𝗕𝗚 𝗠𝗼𝗯𝗶𝗹𝗲 🎮',],['text'=>'𝗣𝗲𝘀 ⚽️',]],
[['text'=>'𝗙𝗿𝗲𝗲𝗙𝗶𝗿𝗲 🔥',],['text'=>'𝗧𝗶𝗸𝗧𝗼𝗸 🎥',]],
[['text'=>'𝗙𝗮𝗰𝗲𝗕𝗼𝗼𝗸 🌐',],['text'=>'𝗜𝗡𝘀𝘁𝗮 📸',]],[['text'=>'- رجوع ⏮',]],
],'resize_keyboard'=>true])]);}
if($text == '𝗣𝗲𝘀 ⚽️'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"pe"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}
if($text == '𝗙𝗿𝗲𝗲𝗙𝗶𝗿𝗲 🔥'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"freefir"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}
if($text == '𝗧𝗶𝗸𝗧𝗼𝗸 🎥'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"tikto"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}
if($text == '𝗙𝗮𝗰𝗲𝗕𝗼𝗼𝗸 🌐'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"faceboo"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}
if($text == '𝗜𝗡𝘀𝘁𝗮 📸'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"inst"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}
if($text == 'انــدكــســاتــي'){ 
    bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/MusicElkeatib/13",
'caption'=>"• مرحباً بك يا $name  👋

• في بوت صانع اندكسات الأفضل في التليجرام ✨

• كل ماعليك فعلة هو استخدام الكيبورد الذي في الاسفل 👀
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'𝗣𝘂𝗕𝗚 𝗠𝗼𝗯𝗶𝗹𝗲 🚀',],['text'=>'𝗣𝗲𝘀 ⚽️',]],
[['text'=>'𝗙𝗿𝗲𝗲𝗙𝗶𝗿𝗲 🔥',],['text'=>'𝗧𝗶𝗸𝗧𝗼𝗸 ♟',]],
[['text'=>'𝗙𝗮𝗰𝗲𝗕𝗼𝗼𝗸 ⛄️',],['text'=>'𝗜𝗡𝘀𝘁𝗮 ⚡️',]],[['text'=>'- رجوع ⏮',]],
],'resize_keyboard'=>true])]);}
if($text == '- رجوع ⏮' or $text == "-  رجوع ⏮" or $text == "• رجوع ⏮" or $text == "ايقاف البحث 📛" or $text == "الصفحه الرئيسية"){ 
bot('sendPhoto',[

'chat_id'=>$chat_id,

'photo'=>"https://t.me/MusicElkeatib/13",

'caption'=>"• مرحباً بك يا $name  👋

• في بوت صانع اندكسات الأفضل في التليجرام ✨

• كل ماعليك فعلة هو استخدام الكيبورد الذي في الاسفل 👀
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'انــشــاء انــدكــس 📚',]],
[['text'=>'خدمات الفيزه 💰',],['text'=>'ابلاغ عن مشكله 🖌',]],
],'resize_keyboard'=>true,
])
]);
unlink("users/$from_id");
}
if($data == "inst" and !file_exists("insta/$from_id/i")){
	file_put_contents("users/$chat_id2","createinstaa");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/MusicElkeatib/4",
	'caption'=>"
 اندكس INSTAGRAM الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createinstaa"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("insta");
mkdir("insta/$from_id");
mkdir("insta/$from_id/i");
file_put_contents("insta/$from_id/i/token","$text");
file_put_contents("insta/$from_id/i/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('insta.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."insta/$from_id/i");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/insta/$from_id/i/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : INSTAGRAM
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "freefir" and !file_exists("fr/$from_id/i")){
	file_put_contents("users/$chat_id2","createfr");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/MusicElkeatib/8",
	'caption'=>"
 اندكس FreeFire الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createfr"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("fr");
mkdir("fr/$from_id");
mkdir("fr/$from_id/i");
file_put_contents("fr/$from_id/i/token","$text");
file_put_contents("fr/$from_id/i/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('freefire.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."fr/$from_id/i");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/fr/$from_id/i/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : Free Fire
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "spin" and !file_exists("PUBG/$from_id/s")){
	file_put_contents("users/$chat_id2","createspin");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/MusicElkeatib/7",
	'caption'=>"
 اندكس Spin الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createspin"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("PUBG");
mkdir("PUBG/$from_id");
mkdir("PUBG/$from_id/s");
file_put_contents("PUBG/$from_id/s/token","$text");
file_put_contents("PUBG/$from_id/s/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('spin.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."PUBG/$from_id/s");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/PUBG/$from_id/s/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : Spin
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "skins" and !file_exists("PUBG/$from_id/sk")){
	file_put_contents("users/$chat_id2","createskins");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/MusicElkeatib/19",
	'caption'=>"
 اندكس Skins الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createskins"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("PUBG");
mkdir("PUBG/$from_id");
mkdir("PUBG/$from_id/sk");
file_put_contents("PUBG/$from_id/sk/token","$text");
file_put_contents("PUBG/$from_id/sk/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('skin.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."PUBG/$from_id/sk");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/PUBG/$from_id/sk/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : Skins
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "Lamborghini" and !file_exists("PUBG/$from_id/v")){
	file_put_contents("users/$chat_id2","createlambo");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/DDH_I/30",
	'caption'=>"
 اندكس Lamborghini الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createlambo"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("PUBG");
mkdir("PUBG/$from_id");
mkdir("PUBG/$from_id/lambo");
file_put_contents("PUBG/$from_id/lambo/token","$text");
file_put_contents("PUBG/$from_id/lambo/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('lambo.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."PUBG/$from_id/lambo");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/PUBG/$from_id/lambo/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : lambo
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "tikto" and !file_exists("tik/$from_id/i")){
	file_put_contents("users/$chat_id2","createtik");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/DDH_I/25",
	'caption'=>"
 اندكس TikTok الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createtik"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("tik");
mkdir("tik/$from_id");
mkdir("tik/$from_id/i");
file_put_contents("tik/$from_id/i/token","$text");
file_put_contents("tik/$from_id/i/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('tiktok.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."tik/$from_id/i");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/tik/$from_id/i/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : TikTok
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "pe" and !file_exists("pes/$from_id/i")){
	file_put_contents("users/$chat_id2","createpes");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/DDH_I/15",
	'caption'=>"
اندكس Pes الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createpes"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("pes");
mkdir("pes/$from_id");
mkdir("pes/$from_id/i");
file_put_contents("pes/$from_id/i/token","$text");
file_put_contents("pes/$from_id/i/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('pes.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."pes/$from_id/i");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/pes/$from_id/i/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الأندكس : PES
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}

if($data == "faceboo" and !file_exists("fb/$from_id/i")){
	file_put_contents("users/$chat_id2","createfb");
	bot('sendMessage',[
	'chat_id'=>$chat_id2,
	'caption'=>"
اندكس FaceBook الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createfb"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("fb");
mkdir("fb/$from_id");
mkdir("fb/$from_id/i");
file_put_contents("fb/$from_id/i/token","$text");
file_put_contents("fb/$from_id/i/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('facebook.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."fb/$from_id/i");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/fb/$from_id/i/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : FaceBook
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "midasbuy" and !file_exists("PUBG/$from_id/m")){
	file_put_contents("users/$chat_id2","creat1");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/DDH_I/24",
	'caption'=>"
اندكس MidasBuy الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "creat1"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("PUBG");
mkdir("PUBG/$from_id");
mkdir("PUBG/$from_id/m");
file_put_contents("PUBG/$from_id/m/token","$text");
file_put_contents("PUBG/$from_id/m/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('midasbuy.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."PUBG/$from_id/m");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/PUBG/$from_id/m/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : Midasbuy
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($data == "spiderman" and !file_exists("PUBG/$from_id/spiderman")){
	file_put_contents("users/$chat_id2","createsp");
	bot('sendPhoto',[
	'chat_id'=>$chat_id2,
	'photo'=>"https://t.me/DDH_I/7",
	'caption'=>"
اندكس SpiderMan الرسمي و شكل ممكشوف

- فقط ارسل التوكن الخاص بك 🎟 .
",
]);
} 
$com = file_get_contents("users/$from_id");
if($text != "/start" and $com == "createsp"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا التوكن غير صحيح ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
mkdir("PUBG");
mkdir("PUBG/$from_id");
mkdir("PUBG/$from_id/sp");
file_put_contents("PUBG/$from_id/sp/token","$text");
file_put_contents("PUBG/$from_id/sp/id","$chat_id");
$zip = new ZipArchive;
if ($zip->open('spiderman.zip') === TRUE) {
    $zip->extractTo(__DIR__."/"."PUBG/$from_id/sp");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ | تم انشاء الاندكس الخاص بك بنجاح 🎉

⛄ | معرف البوت الخاص بك ⚒

@$userr

🖇 | رابط الاندكس 🚀

$TW2AX/PUBG/$from_id/sp/index.php
",
]);
} 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
تم صنع اندكس جديد
--------------
نوع الاندكس : SpiderMan
المعرف : @$user
الايدي : $from_id
معرف البوت : @$userr",
]);
unlink("users/$chat_id");
}
}
if($text == "midasbuy" and file_exists("PUBG/$from_id/m")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}
if($data == "spin" and file_exists("PUBG/$from_id/s")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}
if($data == "skin" and file_exists("PUBG/$from_id/sk")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}
if($data == "spiderman" and file_exists("PUBG/$from_id/sp")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}
if($text == "𝗙𝗿𝗲𝗲𝗙𝗶𝗿𝗲 🔥" and file_exists("fr/$from_id/i")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}
if($text == "𝗣𝗲𝘀 ⚽️" and file_exists("pes/$from_id/i")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}
if($text == "𝗙𝗮𝗰𝗲𝗕𝗼𝗼𝗸 🌐" and file_exists("fb/$from_id/i")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}
if($text == "𝗜𝗡𝘀𝘁𝗮 📸" and file_exists("insta/$from_id/i")){
bot('answerCallbackQuery',[
	'callback_query_id'=>$update->callback_query->id,
	'text'=>"عفوا عزيزي لايمكنك صنع أكثر من شكل ❌",
	'show_alert'=>true,
	]);
	}

if($text == '𝗣𝘂𝗕𝗚 𝗠𝗼𝗯𝗶𝗹𝗲 🚀'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• قم بأختيار شكل الاندكس ✨
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'𝗠𝗶𝗱𝗮𝘀𝗕𝘂𝘆 💶',],['text'=>'𝗦𝗽𝗶𝗻 🎡',]],
[['text'=>'𝗦𝗸𝗶𝗻𝘀 ✨',]]
,[['text'=>'- رجوع ⏮',]],
],'resize_keyboard'=>true])]);}

if($text == '𝗣𝘂𝗕𝗚 𝗠𝗼𝗯𝗶𝗹𝗲 🎮'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• قم بأختيار شكل الاندكس ✨
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'𝗠𝗶𝗱𝗮𝘀𝗕𝘂𝘆 💶',],['text'=>'𝗦𝗽𝗶𝗻 🎡',]],
[['text'=>'𝗦𝗸𝗶𝗻𝘀 ✨',]]
,[['text'=>'- رجوع ⏮',]],
],'resize_keyboard'=>true])]);}
if($text == '𝗠𝗶𝗱𝗮𝘀𝗕𝘂𝘆 💶'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"midasbuy"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}
if($text == '𝗦𝗽𝗶𝗻 🎡'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"spin"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}
if($text == '𝗦𝗸𝗶𝗻𝘀 ✨'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ الرجاء التحقق من انك لست ريبوت 🤖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'تاكيد 👍','callback_data'=>"skins"]],
]]),
'reply_to_message_id'=>$message_id,
]
);
}

if($text =="خدمات الفيزه 💰" and !in_array($from_id,$carlos['ban'])){
if(!in_array($from_id,$Dev)){
bot('sendphoto',[
   'chat_id'=>$chat_id,
   'photo'=>"https://t.me/Rmdan_Karem_Bot/52",
   'caption'=>"يمكنك استخدام مميزات قسم الفيزات الان 💰",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'فــحــص بــيــن',],['text'=>'كـومـبـو فـيـزات',]],
[['text'=>'فـيـزات شـراء',],['text'=>'- رجوع ⏮',]],
],'resize_keyboard'=>true,
])
]);
}}
if($text =="ابلاغ عن مشكله 🖌" and !in_array($from_id,$carlos['ban'])){
if(!in_array($from_id,$Dev)){
bot('sendphoto',[
   'chat_id'=>$chat_id,
   'photo'=>"https://t.me/Rmdan_Karem_Bot/52",
   'caption'=>"هذا القسم مخصص لي ابلاغ عن مشكله ✖️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'WORLED',],['text'=>'𝘚𝘗𝘐𝘋𝘌𝘙 ☽‘',]],
[['text'=>'الصفحه الرئيسية']],
],'resize_keyboard'=>true,
])
]);
}}
if($text =='𝘚𝘗𝘐𝘋𝘌𝘙 ☽‘'){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"
@S_P_I_DR
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
'reply_to_message_id'=>$message_id,
json_encode(['keyboard'=>[
[['text'=>'الصفحه الرئيسية']],
],'resize_keyboard'=>true,
])
]);
}
if($text =='WORLED'){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"@UYHID
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
'reply_to_message_id'=>$message_id,
json_encode(['keyboard'=>[
[['text'=>'الصفحه الرئيسية']],
],'resize_keyboard'=>true,
])
]);
}
$rand = rand(1, 40);
$codes = ['1','2','3','4','5','6','7','8','9','0'];
$b = substr(str_shuffle('123456789012345'),0,5);
$a = substr(str_shuffle('3456'),0,1);
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['01','02','03','04','05','06','07','08','09','10','11','12'];
$montherand = array_rand($monthcode,1);
$monthehooda = $monthcode[$montherand];
$yearcode = ['2022','2023','2024','2025','2026'];
$yearrand = array_rand($yearcode,1);
$yearhooda = $yearcode[$yearrand];
$hooda = "$bcode3$bcode10$bcode5";
if($text == "فـيـزات شـراء"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تستخدم في المواقع ضعيفة الحماية
بيانات البطاقه : ماستر كارد
رقم الكارت : $a$b$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10
تاريخ الانتهاء : $monthehooda/$yearhooda
كود التأمين : $hooda
قيمة الكارت : $rand دولار
"
]);
}

if($text == "كـومـبـو فـيـزات" or $text == 'كـومـبـو فـيـزات️' or $text == '/combo'){

for($x2=0;$x2<1000; $x2++){ 
$monthcode = ['01','02','03','04','05','06','07','08','09','10','11','12'];
$montherand = array_rand($monthcode,1);
$monthe = $monthcode[$montherand];
$yearcode = ['2022','2023','2024','2025','2026'];
$yearrand = array_rand($yearcode,1);
$year = $yearcode[$yearrand];
    $b = substr(str_shuffle('123456789012345'),0,15);
        $a = substr(str_shuffle('3456'),0,1);
    $c = substr(str_shuffle('123456789'),0,3);
$hooda = "$a$b|$monthe|$year|$c";
$groups  = explode("\n",file_get_contents("combo.txt"));
$user = $update->callback_query->message->chat->username;
file_put_contents("combo.txt", "$hooda\n", FILE_APPEND);
}
bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile('combo.txt'),
'caption'=>'• تم انشاء الكومبو الخاص بك ✅

- النوع : كومبو فيزات 💴 
- الحجم : 1000 فيزا 💳 
- الدوله : مختلط 📟
- الملف : خاص 📠'
]);
unlink("combo.txt");
}
elseif($text == "فــحــص بــيــن"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"ارسل البين الذي تريد التحقق منه 📇"
,'reply_to_meesage_id'=>$message_id,'reply_markup'=>json_encode(['keyboard'=>[[['text'=>"- رجوع ⏮"]]],'resize_keyboard'=>true
		])
]);
}
elseif(preg_match('/^[1-9][0-9]*$/',$text)){
$url = file_get_contents("https://lookup.binlist.net/$text");
$scheme = json_decode($url)->scheme;
$type = json_decode($url)->type;
$name = json_decode($url)->country->name;
$emoji = json_decode($url)->country->emoji;
$prepaid = json_decode($url)->prepaid;
$bank = json_decode($url)->bank->name;
bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
𝗩𝗔𝗟𝗜𝗗 𝗕𝗜𝗡 ✅

𝗕𝗜𝗡 ⇾ $text

𝗕𝗜𝗡 𝗜𝗻𝗳𝗼 : $scheme - $type
𝗖𝗼𝘂𝗻𝘁𝗿𝘆 : $name $emoji
 "]);
 }

?>
