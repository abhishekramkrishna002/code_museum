<?php

function sendMail() {
    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'abhishek.ramkrishna002@gmail.com';                 // SMTP username
    $mail->Password = '1010010110';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->From = 'abhishek.ramkrishna002@gmail.com';
    $mail->FromName = 'Abhishek BR';
    $mail->addAddress('abhishek.ramkrishna002@gmail.com', 'Abhishek BR');     // Add a recipient
    $mail->addAddress('abhishek.ramkrishna002@gmail.com');               // Name is optional
    $mail->addReplyTo('abhishek.ramkrishna002@gmail.com', 'Information');
    $mail->addCC('abhishek.ramkrishna002@gmail.com');
    $mail->addBCC('abhishek.ramkrishna002@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
