<?php
include '../DB/connect.php';
// Start session
session_start();

// Function to check if user is logged in
function isLoggedIn() {
    // Check if session variable exists
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        return true;
    }
    
    // Check if remember me cookies exist
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['remember_token'])) {
        $user_id = $_COOKIE['user_id'];
        $remember_token = $_COOKIE['remember_token'];
        
        
        if ($conn->connect_error) {
            return false;
        }
        
        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT id, username FROM users WHERE id = ? AND remember_token = ?");
        $stmt->bind_param("is", $user_id, $remember_token);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['logged_in'] = true;
            
            $stmt->close();
            $conn->close();
            return true;
        }
        
        $stmt->close();
        $conn->close();
    }
    
    return false;
}

// Function to redirect if not logged in
function requireLogin() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit;
    }
}

// Function to redirect if already logged in
function redirectIfLoggedIn($destination = "dashboard.php") {
    if (isLoggedIn()) {
        header("Location: " . $destination);
        exit;
    }
}
?>