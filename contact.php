<?php
    if(isset($_POST['submit'])) {
        require 'PHPMailerAutoload.php';

        $mail = new PHPMailer;

        // $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'vinylshopcontact@gmail.com';                 // SMTP username
        $mail->Password = 'vinyl123';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

       
        $mail->addBCC($_POST['email2']);
        $mail->addBCC('vinylshopcontact@gmail.com','Adrian Zenuni');      // Add a recipient
        $mail->setFrom($_POST['email'],true);

        $mail->addReplyTo($_POST['email']);
        // print_r($_FILES['file']); exit;
        for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
            $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
        }
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['subject'];
        $mail->Body    =  $_POST['teksti'];//'<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
        $mail->AltBody = $_POST['teksti'];

        if(!$mail->send()) {
            $messageError  = 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $messageSuccess = 'Email has been sent';
        }
    }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
</head>

<body>
    <div class="container">
        <form class="form" action="contact.php" method="POST" enctype="multipart/form-data" id="login">
            <h1 class="form__title">Contact Us</h1>
            <p style="color:green; font-size:1.2rem;"><?php if(isset($messageSuccess)){ echo $messageSuccess;} ?></p>
            <p style="color:darkred; font-size:1.2rem;"> <?php if(isset($messageError)){ echo $messageError;} ?></p>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Enter your Name:" name="name">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" class="form__input" autofocus placeholder="Enter your email:" name="email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" class="form__input" autofocus placeholder="Enter the mail receiver:" name="email2">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Enter your subject:" name="subject">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <textarea type="textarea" class="form__input" cols="30" rows="5" placeholder="Enter your text:"
                    name="teksti"></textarea>
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input class="form__input" name="file[]" multiple="multiple" class="form-control" type="file" id="file">
            </div>

            <button class="form__button" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>