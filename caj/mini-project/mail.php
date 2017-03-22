<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    
    function sendMail($toEmail, $toName, $message){
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'sedc.academy@gmail.com';                 // SMTP username
        $mail->Password = 'sedc1234';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('sedc.academy@gmail.com', 'PHP & MySQL');
        $mail->addAddress($toEmail, $toName);     // Add a recipient
        
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $message;
        
        if(!$mail->send()) {
            $message = 'Message could not be sent.';
            $message .= 'Mailer Error: ' . $mail->ErrorInfo;
            return $message;
        } else {
            return 'Message has been sent';
        }
    }
    