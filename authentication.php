<?php
include('database.php'); // Ensure this file contains the correct database connection setup
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email and password from POST data
    $email = $_POST["email"] ?? ''; // Using null coalescing operator to avoid undefined index notices
    $pass = $_POST["password"] ?? '';

    // Prepare a SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT pass FROM users WHERE email = ?");
    if ($stmt === false) {
        // Error handling if the prepare fails
        error_log("Prepare failed: " . $conn->error);
        header("Location: login.php");
        exit();
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password against the hashed password in the database
        if (password_verify($pass, $row["pass"])) {
            // Set session variables and redirect to the home page
            $_SESSION['user_email'] = $email;
            header("Location: index2.php"); // Ensure this is the correct path to your home page
            exit();
        } else {
            
            header("Location: login.php?error=invalidpassword");
            exit();
        }
    } else {
        
        header("Location: login.php?error=nouser");
        exit();
    }
}
?>
