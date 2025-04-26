<?php 
include('../../partials/Session/Session.php');
include('../../partials/DB/db_connect.php');


$Username = $_SESSION['username'];

$dataStr = "select * From user_details where username = '$Username'";

$dataQuery = mysqli_query($conn,$dataStr);
$numOfRows = mysqli_num_rows($dataQuery);

if($numOfRows > 0){
    
    $row = mysqli_fetch_assoc($dataQuery);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $number = $row['number'];
    $email = $row['email'];
    $DOB = $row['DOB'];
    $gender = $row['gender'];
    $address = $row['address'];
    $email_verified = !empty($email);
}else{
    echo "<script>alert('No data found');</script>";
}


?>