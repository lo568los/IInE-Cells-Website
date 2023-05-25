<?php
$email_address = $_POST['email_address'];
$feedback = $_POST['feedback'];
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}
$email_address  = filter_email_header($email_address);

$headers = "From: $email_addressn";
$sent = mail('you@domain.com', 'Feedback Form Submission', $feedback, $headers);
?>
