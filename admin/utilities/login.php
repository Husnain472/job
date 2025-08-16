<?php
include'conn.php';
// Start session
session_start();


// Get POST data
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login successful
    $_SESSION['email'] = $email;
    header("Location: ../dashboard.php");
    exit();
} else {
    // Login failed
    echo "Invalid email or password.";
}

$conn->close();
?>
