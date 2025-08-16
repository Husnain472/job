<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "jobportal");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Optionally hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Insert query
        $sql = "INSERT INTO login (firstname, lastname, username, password)
                VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registered successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
        header("Location: profile-authentication.php#login");
        
    }
}
$conn->close();
?>