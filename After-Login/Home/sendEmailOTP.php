<?php
include ('../../partials/DB/db_connect.php'); include('../partials/Sessions/Session-data.php');


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHP_Mailer/vendor/autoload.php';

    
// To Verify Email id
// $isEmailOTPSend = false;
$enteredEmail = $_POST['email'];

$response = [];

$emailStr = "select * From user_details where email = '$enteredEmail'";

$emailQuery = mysqli_query($conn,$emailStr);
$numOfEmails = mysqli_num_rows($emailQuery);

if($numOfEmails < 1){
    
    
    $OTP = rand(100000,999999);
    
    // OTP Message in html format
    $htmlContent = '
        <html>
        <head></head>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }
            p{
                font-family: Arial, Helvetica, sans-serif;
                font-weight: 400;
                font-size: 5vw;
                line-height: 20px;
            }
            .regards{
                font-family: Arial, Helvetica, sans-serif;
                font-weight: 400;
                font-size: 5vw;
                line-height: 2px;
            }
        </style>
        <body>
            <p>Dear '.$fname.'</p>

            <p><b>Your One Time Password (OTP) for UserId '.$Username.' is : '.$OTP.' </b></p>

            <p>OTP is valid only for 05:00 mins. Do not share this OTP with anyone.</p>
            
            <p>If you did not request this OTP, please connect with us immediately at <a>helpline@gmail.com</a></p>
            
            <p>Regards,</p>
            <p>Sumit</p>
            
            <p>Campus Diary</p>
        </body>
        </html>
    ';

    try {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
                        
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        // $mail->Username   = 'rashmi@internjobs.site';
        // $mail->Password   = 'Rashmi@1@2@3';
        $mail->Username   = 'mr.sumittupsundare9557@gmail.com';                   //SMTP username
        $mail->Password   = 'hvli knky hzwa lkie';         
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
    
        //Recipients
        $mail->setFrom('mr.sumittupsundare9557@gmail.com', 'Admissions Made Easy');
        // $mail->setFrom('rashmi@internjobs.site', 'Rashmi');
        $mail->addAddress($enteredEmail, $fname);
    
        //Content
        $mail->isHTML(true);
        $mail->Subject = "ADMISSIONS MADE EASY : Email ID Verification";
        $mail->Body    = $htmlContent;


        $mail->send();
        // Store OTP in session
        //session_start();
        $_SESSION['OTP'] = $OTP;
        $_SESSION['email'] = $enteredEmail;

        $response['status'] = 'success';

    } catch (Exception $e) {
        $response['status'] = 'Error';
        $response['message'] = 'Mailer Error! Please check your email';
    }
}else{
    $response['status'] = 'Error';
    $response['message'] = 'Email already exists. Please try another!';
}

echo json_encode($response);
?>