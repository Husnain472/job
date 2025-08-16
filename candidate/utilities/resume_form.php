<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Database connection
    $conn = new mysqli("localhost", "root", "", "jobportal");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 2. Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $description = $_POST['description'];
    $title = $_POST['title'];
    $degree = $_POST['degree'];
    $institute = $_POST['institute'];
    $year = $_POST['year'];
    $skilltitle = $_POST['skilltitle'];
    $experience = $_POST['experience'];
    $facebookurl = $_POST['facebookurl'];
    $twitterurl = $_POST['twitterurl'];
    $linkedinurl = $_POST['linkedinurl'];
    $instagramurl = $_POST['instagramurl'];

    // 3. Insert into database
    $sql = "INSERT INTO resume (
        name, email, dob, phone, address, gender, description,
        title, degree, institute, year, skilltitle, experience,
        facebookurl, twitterurl, linkedinurl, instagramurl
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssissssss",
        $name, $email, $dob, $phone, $address, $gender, $description,
        $title, $degree, $institute, $year, $skilltitle, $experience,
        $facebookurl, $twitterurl, $linkedinurl, $instagramurl
    );

    if ($stmt->execute()) {
        echo "<script>alert('Login successful'); window.location.href='../candidates-dashboard-my-resume.php';</script>";
    } else {
        echo "<div style='color:red;'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>