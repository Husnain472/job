<?php
include'conn.php';
// Get form values
$job_title = $_POST['job_title'];
$job_description = $_POST['job_description'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email_address'];
$job_type = $_POST['job_type'];
$specialisms = $_POST['specialisms'];
$offered_salary = $_POST['offered_salary'];
$career_level = $_POST['career_level'];
$experience = $_POST['experience'];
$gender = $_POST['gender'];
$industry = $_POST['industry'];
$qualification = $_POST['qualification'];
$application_deadline_date = $_POST['application_deadline_date'];
$country = $_POST['country'];
$city = $_POST['city'];
// Insert query
$sql = "INSERT INTO job (
    job_title, job_description, first_name, last_name, email_address,
    job_type, specialisms, offered_salary, career_level, experience,
    gender, industry, qualification, application_deadline_date,
    country, city
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssss",
    $job_title, $job_description, $first_name, $last_name, $email_address,
    $job_type, $specialisms, $offered_salary, $career_level, $experience,
    $gender, $industry, $qualification, $application_deadline_date,
    $country, $city
);
if ($stmt->execute()) {
    echo "<script>alert('Posted successfully'); window.location.href='dashboard/dashboard.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>