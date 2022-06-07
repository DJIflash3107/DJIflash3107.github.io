<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
?>

$email_from = 'info@yourwebsite.com';

$email_subject = 'Formulir Baru';

$email_body = "Nama Pengguna: $name.\n".
              "Email Pengguna: $visitor_email.\n".
              "Subject: $subject.\n".
              "Pesan Pengguna: $message.\n";

$to = 'djiflash3107@gmail.com';

$headers = "Dari: $email_from \r\n";
$headers .="Balas ke: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Lokasi: contact.html");