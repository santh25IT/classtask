<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'santhaseelank4010@gmail.com';

$email_subject ='New form submission';

$email_body = "Uesr Name: $name.\n".
                "User Email: $visitor_email.\n.";
                "User subject: $subject.\n.";
                "User Message: $message.\n.";

$to ='santhaseelank2025@gmail.com'

$headers ="Form: $email_form \r\n"

$headers .="Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html ")
?>