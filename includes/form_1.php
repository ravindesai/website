<?php	
	if (empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'me@ravin.com.au'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Ravin.com.au";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: admin@ravin.com.au\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>