<?php include'inc/sidebar.php'?>


<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "jobportal");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die('Invalid job ID.');
}

$id = intval($_GET['id']);
$query = "SELECT * FROM job WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$job = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);
if (!$job) {
    die('Job not found.');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['job_title'];
    $experience = $_POST['experience'];
    $qualification = $_POST['qualification'];
    $deadline = $_POST['application_deadline_date'];
    $status = $_POST['status'];
    $updateQuery = "UPDATE job SET job_title = ?, experience = ?, qualification = ?, application_deadline_date = ?, status = ? WHERE id = ?";
    $updateStmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($updateStmt, "sssssi", $title, $experience, $qualification, $deadline, $status, $id);
    if (mysqli_stmt_execute($updateStmt)) {
        echo "<script>alert('Job updated successfully!'); window.location.href = 'dashboard.php';</script>";
    } else {
        echo "<script>alert('Error updating job.');</script>";
    }
    mysqli_stmt_close($updateStmt);
}
?>
<div class="container mt-5">
    <h2>Edit Job</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Job Title</label>
            <input type="text" name="job_title" class="form-control" value="<?= htmlspecialchars($job['job_title']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Experience</label>
            <input type="text" name="experience" class="form-control" value="<?= htmlspecialchars($job['experience']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Qualification</label>
            <input type="text" name="qualification" class="form-control" value="<?= htmlspecialchars($job['qualification']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Deadline</label>
            <input type="date" name="application_deadline_date" class="form-control" value="<?= htmlspecialchars($job['application_deadline_date']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="Pending" <?= $job['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                <option value="Approved" <?= $job['status'] == 'Approved' ? 'selected' : ''; ?>>Approved</option>
                <option value="Rejected" <?= $job['status'] == 'Rejected' ? 'selected' : ''; ?>>Rejected</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Job</button>
    </form>
</div>

<?php include'inc/footer.php'?>