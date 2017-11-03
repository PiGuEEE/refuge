<?php

  $name = $_REQUEST['name'] ;
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'] ;
  $message = $_REQUEST['message'] ;
  

  // mail( "hello@way360group.com", "Contact via Website!", $message, "From: $email" );


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
	$mail->SetFrom($email);

	$mail->Subject = "Contact via Website!";
	$mail->IsHTML(true);
	$mail->Body =   "

					<div align='center' style='text-align: center;'>
						<img src='https://www.refugethegame.com/user/themes/refuge-theme/img/logo-footer.png' align='center' style='margin: 0 auto; margin-bottom: 40px;' />
					</div>
					<h1>Hey legends!</h1><br/>
					We received an email through our MARVELLOUS FUCKING AWESOME website.<br/><br/>
					From: <strong>" . $name . "</strong><br/>
					Email: <strong>" . $email . "</strong><br/>
					Phone: <strong>" . $phone . "</strong><br/>
					Message: <strong>" . $message . "</strong><br/><br/>
					
					";

	$mail->AltBody = $message;
		

	$mail->AddAddress("xpigue@gmail.com");s

	if(!$mail->Send())
	{

	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;

	} else{

		echo "Message has been sent";
	
	}


?>