<?php 
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if(trim($email) == '')
    $error = 'Enter email!';
else if(trim($message) == '')
    $error = 'Enter text!';
else if(strlen($message) < 10)
    $error = 'Your message has to be more then 10 symbols';

if($error != '') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Test message")."?=";

$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('example@mail.com', $subject, $message, $headers);

header('Location: /about.php');

?>