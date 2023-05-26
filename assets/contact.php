<?php
$email_address = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}
$email_address  = filter_email_header($email_address);

$headers = "From: $email_address";
$sent = mail('dhruvgupta@iisc.ac.in', $subject, $feedback, $headers);
?>
