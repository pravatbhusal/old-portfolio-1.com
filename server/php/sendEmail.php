<?php
$to = "pravat.bhusal@gmail.com";
$subject = "Website contact message from: " . $_POST['name'];

$message = $_POST['message'] . " (Website received from): " . $_POST['website'];

// setup the header strings for the e-mail message
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// concatenate the from email address into the header message
$headers .= 'From: '. $_POST['email'] . "\r\n";

mail($to,$subject,$message,$headers);

//right after we do the mail protocol, we send our user back to the contact.html page
header("Location: http://pravatbhusal.comze.com/contact.html");
die()
?>