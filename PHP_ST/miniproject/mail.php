<?php

function sendMail($toEmail, $toName, $message){

    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sedc.academy@gmail.com';                 // SMTP username
    $mail->Password = 'sedc1234';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to


    $mail->setFrom('sedc.academy@example.com', 'PHP & MySQL');
    $mail->addAddress($toEmail, $toName); 

    $mail->Subject = 'Contact';
    $mail->Body    = $message;


    if(!$mail->send()) {
        $message = 'Message could not be sent.';
        $message .= 'Mailer Error: ' . $mail->ErrorInfo;
        return $message;

    } else {
        echo 'Message has been sent';
    }
}