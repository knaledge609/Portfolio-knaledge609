<?php	
	if(empty($_POST['name_5487']) && strlen($_POST['name_5487']) == 0 || empty($_POST['email_5487']) && strlen($_POST['email_5487']) == 0 || empty($_POST['message_5487']) && strlen($_POST['message_5487']) == 0)
	{
		return false;
	}
	
	$name_5487 = $_POST['name_5487'];
	$email_5487 = $_POST['email_5487'];
	$message_5487 = $_POST['message_5487'];
	$optin_5487 = $_POST['optin_5487'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_5487: $name_5487 \nEmail_5487: $email_5487 \nMessage_5487: $message_5487 \nOptin_5487: $optin_5487 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_5487";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>