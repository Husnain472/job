<?php
include 'conn.php'; // Include database connection

$response = ['success' => false, 'message' => ''];

if (isset($_POST['id']) && isset($_POST['status'])) {
    $jobId = intval($_POST['id']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    // Validate status
    if (!in_array($status, ['Approved', 'Rejected', 'Active'])) { // Added 'Active' to valid statuses
        $response['message'] = 'Invalid status value.';
        echo json_encode($response);
        exit;
    }

    // Update query
    $query = "UPDATE job SET status = '$status' WHERE id = $jobId";
    if (mysqli_query($conn, $query)) {
        $response['success'] = true;
    } else {
        $response['message'] = 'Database error: ' . mysqli_error($conn);
    }
} else {
    $response['message'] = 'Missing required parameters.';
}

echo json_encode($response);
?>