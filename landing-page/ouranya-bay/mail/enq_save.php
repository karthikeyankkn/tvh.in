<?php
$uname = $_POST['uname'];
  $pho =$_POST['pho'];
  $email=$_POST['email'];
  
  if($_POST['submit'] == 'SUBMIT')
  {
	$med="kknmalar2@gmail.com";
	
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
	$headers .= 'From:'.$email."\r\n";	
	$to = $med;
        $headers .= ' ' . "\r\n";	
    $headers .= 'Cc: kknmalar2@gmail.com\r\n';
	$subject = "Ouranya Bay - Enquiry Form";
	$message = "<html><body>";
			$message .= "Name:&nbsp;".$uname;
			$message .= "<br/>";
			$message .= "Email-ID :&nbsp;".$email;
			$message .= "<br/>";
			$message .= "Contact no:&nbsp;".$pho;
			$message .= "<br/>";
			$message .= "</body></html>";

			
	mail($to, $subject, $message, $headers);
	echo 1;
	}
  else
	{
	echo 0;
	}
	
  ?>