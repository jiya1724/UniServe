<?php
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $confirm_pass = $_POST["confirm_password"];

    if ($pass != $confirm_pass) {
        echo "Passwords do not match.";
        exit();
    }

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (full_name, email, pass) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_pass);
    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
