<?php
require '../../PHPMailer/PHPMailerAutoload.php';

function sendmail($name,$email)
{
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rabbiabid1@gmail.com';                 // SMTP username
    $mail->Password = '$Rforrat12$';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
$mail->setFrom('from@example.com', 'ZetCash');
$mail->addAddress($email);               // Name is optional
$mail->addReplyTo('noreply@zetcash.com');
    
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Registration Successfull ZetCash';
$mail->Body    = "Welcome <b>'$name'</b>.<br/>Your registration has been successful";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo ' ';
}


}

?>