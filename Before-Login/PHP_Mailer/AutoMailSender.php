<?php
include 'connect.php'; include 'links.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHP_Mailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['verifyEmail'])){
    
    // To Verify Email id and forgot password
    
    $enteredEmail = $_POST['email'];
    
    $emailStr = "select * From user_details where email = '$enteredEmail'";
    
    $emailQuery = mysqli_query($conn,$emailStr);

    $numOfEmails = mysqli_num_rows($emailQuery);
    if($numOfEmails > 0){
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'mr.sumittupsundare9557@gmail.com';                     //SMTP username
            $mail->Password   = 'pmnd yxpd hrhs yusp';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('mr.sumittupsundare9557@gmail.com', 'Campus Diary');
            $mail->addAddress($enteredEmail, 'Dear Customer');     //Add a recipient
            // $mail->addReplyTo('mr.sumittupsundare9557@gmail.com', 'Campus Diary');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            $mail->addAttachment('Image/boy.png', 'sample_img.png');         //Add attachments
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'OTP from Campus Diary';
            $mail->Body    = 'Hey, Dear ,<br>Please use the One Time Password (OTP) for the username $username below to verify your email address on<br> <b>895664!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            $showEmailAlert = 'OTP has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }else{
        $showEmailAlert = "Invalid Email! Try again..";
    }
}

