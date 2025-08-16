<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "jobportal";
// Create connection
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Collect form data

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
// Insert into database
$stmt = $conn->prepare("INSERT INTO contact (name, email, subject, phone, comments) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $subject, $phone, $comments);
if ($stmt->execute()) {
    echo "<script>alert('Form is being submitted!'); window.location.href='contact.php';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "');</script>";
}
$stmt->close();
$conn->close();
?>