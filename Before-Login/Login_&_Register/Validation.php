<?php 
// include '../partials/links.php'; 
include '../DB/connect.php';
session_start();

// <-----------Registration Form Validations----------->

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // Sanitize and validate input data

    $name = $_POST['name'];
    $username = $_POST['username'];
    $passwd = $_POST['password'];
    $cpasswd = $_POST['confirm_passwd'];
    
    // Validate inputs
    $errors = [];
    
    // Validate name
    if(empty($name) || strlen($name) < 2) {
        $errors[] = "Please enter a valid name (at least 2 characters)";
    }
    
    // Validate username
    if(empty($username) || strlen($username) < 4) {
        $errors[] = "Username must be at least 4 characters long";
    }
    
    // Validate password
    if(strlen($passwd) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }
    
    // Validate password match
    if($passwd !== $cpasswd) {
        $errors[] = "Passwords do not match!";
    }

    
    // If there are validation errors, return them to the client
    if(!empty($errors)) {
        echo implode('<br>', $errors);
        exit;
    }
    
 
    
    // Check if username exists
    $stmt = $conn->prepare("SELECT * FROM user_details WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $resultUsername = $stmt->get_result();
    $numOfUserRows = $resultUsername->num_rows;
    $stmt->close();     // Close the statement
    


    if($numOfUserRows > 0){
        echo "Username already exists";
        exit;
    }else {
        $hashedPassword = password_hash($passwd, PASSWORD_DEFAULT);
        
        // Prepare the SQL query
        $stmt = $conn->prepare("INSERT INTO `user_details` (`fname`, `username`, `password`) VALUES (?, ?, ?)");

        if (!$stmt) {
            die("Prepare failed: " . $conn->error); // Print SQL error if prepare fails
        }

        $stmt->bind_param("sss", $name, $username, $hashedPassword);
        $result = $stmt->execute();

        if (!$result) {
            die("Execute failed: " . $stmt->error); // Print error if execution fails
        }

        $stmt->close(); // Close statement

        if ($result) {
            $_SESSION["register"] = true;
            echo "success"; // Success response for AJAX
            header("Location: login.php"); // Redirect to dashboard
            exit;
        } else {
            echo "Database error. Please try again";
            exit;
        }

        
    }
}


// <-----------Forgot Password Validations----------->

if(isset($_SESSION['USERNAME'])){
    if(isset($_POST['newPasswd']) && isset($_POST['username'])) {
        $newPasswd = $_POST['newPasswd'];
        $enteredUsername = $_POST['username'];
        $UsernamefromSession = $_SESSION['USERNAME'];

        // Validate password strength
        if(strlen($newPasswd) < 8) {
            echo "Password must be at least 8 characters long";
            exit;
        }

        if($UsernamefromSession == $enteredUsername){
            // Hash password before storing
            $hashedPassword = password_hash($newPasswd, PASSWORD_DEFAULT);
            
            // Use prepared statement to prevent SQL injection
            $stmt = $conn->prepare("UPDATE `user_details` SET `password`=? WHERE username = ?");
            $stmt->bind_param("ss", $hashedPassword, $enteredUsername);
            $result = $stmt->execute();

            if($result){
                session_unset();
                session_destroy();
                echo "susccess: Password updated successfully";
                exit;
            } else {
                echo "Database error occurred. Please try again.";
                exit;
            }
        } else {
            echo "Error! Invalid Username!";
            exit;
        }
    } else {
        echo "Missing required fields";
        exit;
    }
}

?>