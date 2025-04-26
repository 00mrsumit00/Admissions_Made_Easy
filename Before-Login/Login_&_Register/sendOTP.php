<?php
include '../DB/connect.php';


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHP_Mailer/vendor/autoload.php';

    
// To Verify Email id and forgot password

$enteredEmail = $_POST['email'];

$emailStr = "select * From user_details where email = '$enteredEmail'";

$emailQuery = mysqli_query($conn,$emailStr);
$numOfEmails = mysqli_num_rows($emailQuery);

if($numOfEmails > 0){
    
    $row = mysqli_fetch_assoc($emailQuery);
    $name = $row["name"];
    $username = $row["username"];
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
            <p>Dear '.$name.'</p>

            <p><b>Your One Time Password (OTP) for UserId '.$username.' is : '.$OTP.' </b></p>

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
        $mail->Username   = 'mr.sumittupsundare9557@gmail.com';                     //SMTP username
        $mail->Password   = 'pmnd yxpd hrhs yusp';         
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
    
        //Recipients
        $mail->setFrom('mr.sumittupsundare9557@gmail.com', 'Campus Diary');
        // $mail->setFrom('rashmi@internjobs.site', 'Rashmi');
        $mail->addAddress($enteredEmail, $name);
    
        //Content
        $mail->isHTML(true);
        $mail->Subject = "Campus Diary : Login Email ID Verification";
        $mail->Body    = $htmlContent;


        $mail->send();
        // Store OTP in session
        session_start();
        $_SESSION['OTP'] = $OTP;
        $_SESSION['USERNAME'] = $username;

        echo 'success';
     
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    // echo "Invalid Email Please Try again..!";
    ?>
        <script>alert("Invalid Email Please Try again..!");</script>
    <?php
}


?>