<?php
$uname = $_POST['uname'];
  $email =$_POST['email'];
  $pho=$_POST['pho'];
  $size =$_POST['size'];
  $file=$_POST['file'];
  if($_POST['submit'] == 'SEND')
  {
	$med="sundarji@clearestate.in";
    $med2="oro@tvh.in";
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
	$headers .= 'From:'.$email."\r\n";	
	$to = $med;
    $to2 = $med2;
        $headers .= ' ' . "\r\n";	
	$subject = "Quadrant Website - Form Contact";
	$message = "<html><body>";
			$message .= "Name:&nbsp;".$uname;
			$message .= "<br/>";
			$message .= "Email-ID:&nbsp;".$uname;
			$message .= "<br/>";
			$message .= "Contact No:&nbsp;".$pho;
			$message .= "<br/>";
			$message .= "Preferred Size:&nbsp;".$size;
			$message .= "<br/>";
			$message .= "Looking for:&nbsp;".$file;
			$message .= "<br/>";
			$message .= "</body></html>";

			
	mail($to, $subject, $message, $headers);
    mail($to2, $subject, $message, $headers);
	echo 1;
	}
  else
	{
	echo 0;
	}
	
  ?>