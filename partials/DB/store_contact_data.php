<?php 
    
    include('db_connect.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO `contact-data` (`name`, `email`, `subject`, `description`, `date`) 
                VALUES ('$name', '$email', '$subject', '$desc', current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "<script>alert('Response Submitted Successfully');</script>";
            echo "<script>window.location.href = '../../index.php';</script>";
            exit();
        }
        else{
            echo "<script> alert('Something went wrong! Try Again') </script>";
        }
    }

?>