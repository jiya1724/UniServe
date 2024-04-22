<?php
session_start();

include('database.php'); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email']; // Consider validating this against the session email if needed
    $message = $_POST['message'];
    

    $stmt = $conn->prepare("INSERT INTO feedback (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
    
    // Check if the statement was prepared successfully
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $message);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error submitting feedback: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect if accessed directly without posting form
    header("Location: feedback_form.php");
    exit();
}
?>