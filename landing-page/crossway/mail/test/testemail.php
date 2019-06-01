<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require '../class.phpmailer.php';

try {
	$mail = new PHPMailer(true); //New instance, with exceptions enabled

	$body             = "test test";
	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 587;                    // set the SMTP server port
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "jaishankar26kb@gmail.com";     // SMTP server username
	$mail->Password   = "26oct1988";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail

	$mail->AddReplyTo("jaishankar26jai@gmail.com","First Last");

	$mail->From       = "jaishankar26jai@gmail.com";
	$mail->FromName   = "First Last";

	$to = "jaishankar26jai@gmail.com";

	$mail->AddAddress($to);

	$mail->Subject  = "First PHPMailer Message";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);

	$mail->IsHTML(true); // send as HTML

	if($mail->Send())
{
    print json_encode("SUCCESS"); 
}
else
{
    echo "Mailer Error: " . $mail->ErrorInfo;

}
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
?>