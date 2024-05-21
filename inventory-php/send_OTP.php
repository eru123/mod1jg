<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_mail($email, $bodytemplate, $subject = 'Login Verification: Your One-Time Password (OTP)', $isattached = null)
{
    $success = false;
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'caballeroaldrin02@gmail.com';
        $mail->Password = 'psfgjxovixwhnjtd';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('caballeroaldrin02@gmail.com', 'Booking and Reservation', true);
        $mail->addAddress($email);


        if (isset($isattached) && is_string($isattached)) {
            $mail->addAttachment($isattached);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;

        // email body template
        $mail->Body = $bodytemplate;

        $mail->send();
        $success = true;
    } catch (Exception $e) {
        $success = false;
    }

    return $success;
}
