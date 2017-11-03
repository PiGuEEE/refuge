<?php
require("PHPMailer_5.2.0/class.phpmailer.php");

$mail = new PHPMailer(); // create a new object

$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
// $mail->SMTPSecure = 'tls';

$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);

$mail->Username = "getrefugethegame@gmail.com";
$mail->Password = "Refugethegame#1";
$mail->SetFrom("Refuge | A game by Not Yet");

$mail->Subject = "Contact via Website!";
$mail->Body = "";
$mail->AddAddress("getrefugethegame@gmail.com");

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>