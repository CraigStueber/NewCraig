<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phonenumber'];
$emailFrom = $_POST['email'];
$message = $_POST['message'];

$email_subject = 'New form submission';
$email_body = "User First Name : $name \n" .
    "User Last Name : $lname \n" .
    "User Email : $emailFrom \n" .
    "User Phone Number : $phone \n" .
    "Message: $message \n";

$to = "me@craigstueber.com";
$headers = "From: " . $emailFrom;


mail($to, $email_subject, $email_body, $headers);
header("Location: thankyou.html?sent");
