<?php



if(isset($_POST['posted_from']) && $_POST['posted_from']=='home'){


	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'gsraj77@gmail.com';                 // SMTP username
	$mail->Password = 'password';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('gsraj77@gmail.com', 'Investo Uni Trade');
	$mail->addAddress($_POST['email'], $_POST['name']);     // Add a recipient
	//$mail->addAddress('parveensehgal@spinebms.com');               // Name is optional
	$mail->addReplyTo('gsraj77@gmail.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$body = "Dear ".$_POST['name']. "
	<br/>
	Greeting!
	<br/><br/>
	Thank you for connecting with us. Our team will contact you soon.
	<br/>
	Thanks & Regards<br/>
	invasto uni trade Team
	";

	$mail->Subject = 'Thank you for connecting with Invasto uni trade';
	$mail->Body    = $body;
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	 try{
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				//echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'gsraj77@gmail.com';                 // SMTP username
				$mail->Password = 'password';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;
				$mail->setFrom('gsraj77@gmail.com', 'Mailer');
				$mail->addAddress('gsraj77@gmail.com', 'Receiver');     // Add a recipient
				$mail->isHTML(true);                                  // Set email format to HTML
				echo "<label style='color:green'>Thank You. Please check your E-mail.</label>";
			
				$name = $_POST['name'];
				$mobileno = $_POST['phone_no'];
				$message = $_POST['message'];
				$state = $_POST['state'];
				$email = $_POST['email'];
				$to_email = "gsraj77@gmail.com";
				$subject = "New request by ". $_POST['name'];
				$body = "
				Greeting!<br/><br/>

				Here is detail for New Request<br/>
				
				Name : $name<br/>
				Mobile Number : $mobileno<br/>
				State : $state<br/>
				Message : $message<br/>
				<br/><br/>
				Thanks & Regards<br/>
				invasto uni trade Team
				";

				$mail->Subject = $subject;
				$mail->Body    = $body;
				$mail->send();
			}
		}catch(Exception $e){
			echo "Server Internal Error"; 
		}

}
if(isset($_POST['posted_from']) && $_POST['posted_from']=='contact_us'){


	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'gsraj77@gmail.com';                 // SMTP username
	$mail->Password = 'password';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('gsraj77@gmail.com', 'Investo Uni Trade');
	$mail->addAddress($_POST['email'], $_POST['name']);     // Add a recipient
	//$mail->addAddress('gsraj77@gmail.com');               // Name is optional
	$mail->addReplyTo('gsraj77@gmail.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$body = "Dear ".$_POST['name']. "
	<br/>
	Greeting!
	<br/><br/>
	Thank you for connecting with us. Our team will contact you soon.
	<br/>
	Thanks & Regards<br/>
	invasto uni trade Team
	";

	$mail->Subject = 'Thank you for connecting with Invasto uni trade';
	$mail->Body    = $body;
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	 try{
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				//echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'gsraj77@gmail.com';                 // SMTP username
				$mail->Password = 'password';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;
				$mail->setFrom('gsraj77@gmail.com', 'Investo Uni Trade');
				$mail->addAddress('gsraj77@gmail.com', 'Receiver');     // Add a recipient
				$mail->isHTML(true);                                  // Set email format to HTML
				echo "<label style='color:green'>Thank You. Please check your E-mail.</label>";
			
				$name = $_POST['name'];
				$mobileno = $_POST['phone_no'];
				$stock_mkt = $_POST['stock_mkt'];
				$fx_acc = $_POST['fx_acc'];
				$call = $_POST['call'];
				$email = $_POST['email'];
				$to_email = "gsraj77@gmail.com";
				$subject = "New request by ". $_POST['name'];
				$body = "
				Greeting!<br/><br/>

				Here is detail for New Request<br/>
				
				Name : $name<br/>
				Mobile Number : $mobileno<br/>
				Have You Ever Invested In Stock Market? : $stock_mkt<br/>
				When Do You Want To Open Your FX Account? : $fx_acc<br/>
				What Is The Best Time To Call? : $call<br/>
				<br/><br/>
				Thanks & Regards<br/>
				invasto uni trade Team
				";

				$mail->Subject = $subject;
				$mail->Body    = $body;
				$mail->send();
			}
		}catch(Exception $e){
			echo "Server Internal Error"; 
		}

}
//posted from contact us page


 
?>