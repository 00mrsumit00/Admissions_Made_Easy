<?php
include '../DB/connect.php';
session_start();

// <-----------OTP Verification for Forgot Password----------->
if(isset($_SESSION['OTP'])) {
    $OTPfromSession = $_SESSION['OTP'];

    $enteredOTP = $_POST['otp'];
    if($enteredOTP == ''){
        echo "<script>alert('OTP field can not be empty!')</script>";
    }
    elseif($OTPfromSession == $enteredOTP){
        // session_unset();
        // session_destroy();
        echo "<script>alert('OTP Verified Successfully');</script>";

        echo '<script>window.location.href = "setPasswd.php";</script>';
        exit;

    }else{
        echo "<script>alert('Invalid OTP Please try again..!')</script>";
    }
}else{
    echo "<script>alert('Something is Wrong Please try again..')</script>";
}

?>