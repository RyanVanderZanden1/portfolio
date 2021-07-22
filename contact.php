<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/vendor/autoload.php';

$msg = '';
//variables from the form

    /*Since the form has been submitted, let's capture the submission values so we can display them to the user on the success page */
    $users_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $users_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $users_comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
    

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.ryanvanderzanden.me';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@ryanvanderzanden.me';                     //SMTP username
    $mail->Password   = 'hVdI+&9vCh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ryvanderzanden@gmail.com', 'Ryan VanderZanden');
    
    $mail->addAddress($users_email, $users_name);               //recipient

    //body content
    $body = "<p><strong>Hello</strong>, you have received a message from " . $users_name . " the message is " . $users_comment . "</p>";
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Website mail from ' . $users_name;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    header("location: thankyou.php?sent");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}