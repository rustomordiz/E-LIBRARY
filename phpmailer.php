<?php

session_start();
error_reporting(0);

$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
$user_comment = $_SESSION['user_comment'];


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                  
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'litchecker@gmail.com';   // GMAIL ACCOUNT MO
    $mail->Password   = 'litcheck2021';           // PASSWORD NG GMAIL MO
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('litchecker@gmail.com', 'Litchecker');
    $mail->addAddress('litchecker@gmail.com', 'Litchecker');   //Add a recipient
    $body = "<br><b>Name:</b>$user_name 
            <br><b>Email:</b>$user_email
            <br><b>Comments:</b>$user_comment
            ";

    //Content
    $mail->isHTML(true);                               
    $mail->Subject = 'User Inquiry';
    $mail->Body    = $body;


    $mail->send();
    echo '<script> alert("Thank you for contacting us!"); window.location.href="index.html"; </script>';
} catch (Exception $e) {
    echo '<script> alert("Your request cannot be send"); window.location.href="index.html"; </script>';
}

//echo '<script> alert("Your request cannot be send"); </script>';