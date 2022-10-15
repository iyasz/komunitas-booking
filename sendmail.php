<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'assets/vendor/PHPMailer/src/Exception.php';
require 'assets/vendor/PHPMailer/src/PHPMailer.php';
require 'assets/vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "zakamaragames@gmail.com";
$mail->Password = "cfxatavqrardcuhv";
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom("noreply@treaveloka.com", "Traveloka");
$mail->addAddress("zakamaragames@gmail.com");

$mail->isHTML(true);

$mail->Subject = "Verifikasi Email";
$mail->Body = "<b>Hallo</b> Selamat Datang Di Traveloka!";

$mail->send();

if ($mail->send()) {
    echo "Email Terkirim";
} else {
    echo "Mailer Error: $mail->ErrorInfo";
}
