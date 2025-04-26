<?php
include '../DB/connect.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get user input and sanitize
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password']; // User entered password
    
    // Remember me functionality
    $remember = isset($_POST['remember']) ? true : false;
    

    
    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT username, password FROM `user_details` WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $hashedPassword = $user['password'];    // From DB
      
        // Verify password (assuming passwords are hashed with password_hash())
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set session variables

            session_start();        // Start session
            $_SESSION['username'] = $user['username'];
            $_SESSION['loggedin'] = true;
            
            // If remember me is checked, set cookies
            if ($remember) {
                // Generate a secure token
                $token = bin2hex(random_bytes(16));
                
                // Store token in database
                // $stmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
                // $stmt->bind_param("si", $token, $user['id']);
                // $stmt->execute();
                
                // Set cookies that expire in 30 days
                setcookie('user_id', $user['id'], time() + (86400 * 30), "/");
                setcookie('remember_token', $token, time() + (86400 * 30), "/");
            }
            
            // Return success message
            echo "success";
        } else {
            // Wrong password
            echo "Invalid password. Please try again.";
        }
    } else {
        // User doesn't exist
        echo "Invalid username. Please try again.";
    }
    
    $stmt->close();
    $conn->close();
}
?>