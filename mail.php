<?php
if(isset($_POST['contactSubmit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $formcontent=" From: $firstname \n Phone: $phone \n Message: $message";
    $recipient = "techyora@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    if (mail($recipient, $subject, $formcontent, $mailheader)){
		$success = "Message successfully sent";
	}else{
		$success = "Message Sending Failed, try again";
	}
}
// echo "Thank You!" . " -" . "<a href='http://wwww.yora.xyz/EduTrack/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
