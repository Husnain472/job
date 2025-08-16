<?php
session_start(); // Start the session

// Connect to your database
$conn = new mysqli("localhost", "root", "", "jobportal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input safely
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute SQL query to get user details
$stmt = $conn->prepare("SELECT id, firstname, password FROM login WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch user info and hashed password
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];

    // Verify the password
    if (password_verify($password, $hashedPassword)) {
        // Start session and store user info
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['firstname'] = $row['firstname'];

        echo "<script>alert('Login successful'); window.location.href='candidate/candidates-dashboard.php';</script>";
    } else {
        echo "<script>alert('Incorrect password'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Username not found'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
