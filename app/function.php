<?php

include 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'assets/vendor/PHPMailer/src/Exception.php';
require 'assets/vendor/PHPMailer/src/PHPMailer.php';
require 'assets/vendor/PHPMailer/src/SMTP.php';

function base_url()
{
    return 'http://localhost/iyasz/web/komunitas';
}

function send_email($from, $from_name, $to, $subject, $message)
{
    //script php mailer
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "zakamaragames@gmail.com";
    $mail->Password = "cfxatavqrardcuhv";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($from, $from_name);
    $mail->addAddress($to);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    if ($mail->send()) {
        echo "Email Terkirim";
    } else {
        echo "Mailer Error: $mail->ErrorInfo";
    }
}
