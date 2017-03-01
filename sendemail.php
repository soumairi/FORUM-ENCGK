<?php


$name       = trim(stripslashes($_POST['name']));
echo $name;
var_dump($name);
$from       = trim(stripslashes($_POST['email']));
var_dump($email);
$subject    = trim(stripslashes($_POST['subject']));
$message    = trim(stripslashes($_POST['message']));
$to   		= 'soumairi@gmail.com';//replace with your email

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1";
$headers .= "From: {$name} <{$from}>";
$headers .= "Reply-To: <{$from}>";
$headers .= "Subject: {$subject}";
$headers .= "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);



die;