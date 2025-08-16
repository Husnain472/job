<?php
// Include your database connection
include 'conn.php';

// Initialize response array
$response = ["success" => false, "error" => ""];

// Check if id is provided
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = intval($_POST['id']); // Sanitize input

    // Prepare and execute the delete query
    $query = "DELETE FROM job WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        $response["success"] = true;
    } else {
        $response["error"] = "Failed to delete job from database.";
    }

    mysqli_stmt_close($stmt);
} else {
    $response["error"] = "Invalid job ID.";
}

// Close the database connection
mysqli_close($conn);

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>