<?php 
$myemail = 'j.stolt@tutanota.com';
$errors = '';
$name = $_POST['name'];
$email_address = $_POST['email'];
$email_subject = $_POST['subject'];
$email_body = $_POST['message'];

$fp = fopen('form-data.txt', 'a');
fwrite($fp, $name . "\n");
fwrite($fp, $email_address . "\n");
fwrite($fp, $email_subject . "\n");
fwrite($fp, $email_body . "\n\r");
fclose($fp);

header('Location: contact?whatnow=tack');
?>