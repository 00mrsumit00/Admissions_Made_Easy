<?php  
include ('../../partials/DB/db_connect.php'); include('../../partials/session/session.php'); include('../partials/Sessions/Session-data.php');


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    // Check which form was submitted
    if (isset($_POST['form_type'])) 
    {
        $formType = $_POST['form_type'];
        
        
        //*****************/ Updating data for Personal info ****************//
        if ($formType === 'personal-info') 
        {
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $DOB = $_POST['DOB'];
            $address = $_POST['address'];
            

            
            if($_POST['gender'] != Null){

                $gender = $_POST['gender'];

                $query = "UPDATE `user_details` SET `DOB`='$DOB',`fname`='$fname',`lname`='$lname',`gender`='$gender',`address`='$address' WHERE username ='$Username'";

                $sql = mysqli_query($conn,$query);
                
                if($sql){
                    // Return success message
                    echo "success";
                    exit;
                }

            }else{
                echo "Error! Please fill in all required fields.";
                exit;
            }
            
        }
        
        //***************** Updating data for Contact info-EMail ****************//
        if($formType === 'contact-email-info') {

            $EmailVerifyStatus = false;
            $Email_Response = [];

            $OTPfromSession = $_SESSION['OTP'];
            $enteredEmail = $_SESSION['email'];
            $enteredOTP = $_POST['Email_OTP'];

            if($enteredOTP == ''){
                //echo "<script>alert('OTP field can not be empty!')</script>";
                $Email_Response['status'] = 'Error';
                $Email_Response['message'] = 'Error! OTP field can not be empty!';
            }
            elseif($OTPfromSession == $enteredOTP){

                $query = "UPDATE `user_details` SET `email`='$enteredEmail' WHERE `username`='$Username'";

                $result = mysqli_query($conn,$query);

                if ($result){

                    $EmailVerifyStatus = true;
                    $Email_Response['status'] = 'Verified';

                }else{
                    $Email_Response['status'] = 'Error';
                    $Email_Response['message'] = 'Error! DB Connection Issue!';
                }

                //echo "<script>alert('OTP Verified Successfully');</script>";

                //echo '<script>window.location.reload(true);</script>';

            }else{
                //echo "<script>alert('Invalid OTP Please try again..!')</script>";
                $Email_Response['status'] = 'Error';
                $Email_Response['message'] = 'Error! Invalid OTP Please try again..!';
            }
        }else{
            $Email_Response['status'] = 'Error';
            $Email_Response['message'] = 'Error! Something is Wrong Please try again..';
            // echo "<script>alert('Something is Wrong Please try again..')</script>";
            
        }

        echo json_encode($Email_Response);
        exit;
            

            
        
            
        ?>
        <script>
            alert('Something went wrong..!')
        </script>
        <?php
         
    }

}else{
    echo "<script>alert('Error! Something Went Wrong!!')</script>";
    exit;
}



?>