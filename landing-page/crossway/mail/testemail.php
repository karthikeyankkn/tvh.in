<?php
//require 'PHPMailerAutoload.php';
require_once('PHPMailer/class.phpmailer.php');
$message = " This is testing message from my server";

  $mail = new PHPMailer(); // create a new object
  //$mail->IsSMTP(); // enable SMTP
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
  $mail->Port = 587; // or 587
  $mail->IsHTML(true);
  $mail->Username = "jaishankar26kb@gmail.com"; // My gmail username
  $mail->Password = "26oct1988"; // My Gmail Password
  $mail->SetFrom("jaishankar26kb@gmail.com");
  $mail->Subject = "Test Mail from my Server";
  $mail->Body = 'test';
  $mail->AddAddress("jaishankar26jai@gmail.com");
if($mail->Send())
{
    print json_encode("SUCCESS"); 
}
else
{
    echo "Mailer Error: " . $mail->ErrorInfo;

}