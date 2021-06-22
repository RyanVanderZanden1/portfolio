<?php

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['name'])) {
    /*Since the form has been submitted, let's capture the submission values so we can display them to the user on the success page */
    $users_name = $_POST['name'];
    $users_email = $_POST['email'];
    $users_comment = $_POST['comment'];

    require 'PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.ryanvanderzanden.me';
    $mail->Port = 465;
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username = "user@ryanvanderzanden.me";
    $mail->Password = "fakepassword1";

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('mail.ryanvanderzanden.me', 'Ryan VanderZanden');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('ryvanderzanden@gmail.com', 'Ryan VanderZanden');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($users_email, $users_name);
    $mail->Subject = 'portfolio contact form';
    //Keep it simple - don't use HTML
    $mail->isHTML(true);
    //Build a simple message body
    $mail->Body = <<<EOT
Name: $users_name<br>
Email: $users_email<br>
Commment: $users_comment
EOT;
    //Send the message, check for errors
    if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but you shouldn't display errors to users - process the error, log it on your server.
        echo "Mailer Error:" . $mail->ErrorInfo;
    } else {
        include 'success.html.php';
    }
}


?>