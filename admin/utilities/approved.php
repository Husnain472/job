


<?php
// approved.php
include 'conn.php';
// Database connection
$conn = new mysqli("localhost", "your_username", "your_password", "your_database");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from request (expects JSON)
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];
$status = $data['status'];

// Validate inputs
if (!empty($id) && ($status === 'Approved')) {
    $stmt = $conn->prepare("UPDATE jobs SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Status updated."]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to update status."]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid input."]);
}

$conn->close();
?>




<script>
function updateStatus(id, status) {
    fetch('approved.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: id, status: status })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Application approved successfully.");
            location.reload(); // optional: reload to reflect changes
        } else {
            alert("Error: " + data.message);
        }
    })
    .catch(error => {
        alert("Request failed.");
        console.error("Error:", error);
    });
}
</script>
