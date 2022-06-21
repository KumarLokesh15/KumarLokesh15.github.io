<?php
$name = $_POST['name'];
$visitor_email = $_POST'email'];
$project = $_POST['project'];
$message = $_POST['message'];
$email_from = 'loki15012000@gmail.com';
$email_subject = "New Form Submission in your website";
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Project: $project.\n".
"User Message: $message.\n";
$to = "kumarlokesh15012000@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject, $email_body , $headers) ;

header("Location: index.html") ;

?>
