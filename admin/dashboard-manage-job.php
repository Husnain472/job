<?php include 'inc/sidebar.php'; ?>
<!-- Start Main Dashboard Content Wrapper Area -->

<!-- Breadcrumb Area -->
<div class="breadcrumb-area">
    <h1>Manage Jobs</h1>
    <ol class="breadcrumb">
        <li class="item"><a href="dashboard.php">Home</a></li>
        <li class="item"><a href="dashboard.php">Dashboard</a></li>
        <li class="item">Manage Jobs</li>
    </ol>
</div>
<!-- End Breadcrumb Area -->

<!-- Start Manage Jobs Area -->
<div class="manage-jobs-box">
    <h3>Manage Jobs</h3>

    <div class="manage-jobs-table table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Applications</th>
                    <th>Created & Expired</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'utilities/conn.php';
                $query = "SELECT * FROM job";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr id='row-{$row['id']}'>";
                    echo "<td>
                            <h5>" . htmlspecialchars($row['job_title']) . "</h5>
                            <span><i class='ri-map-pin-line'></i> " . htmlspecialchars($row['experience']) . "</span>
                          </td>";
                    echo "<td><a href='#'>" . htmlspecialchars($row['qualification']) . " Applied</a></td>";
                    echo "<td>" . htmlspecialchars($row['application_deadline_date']) . "</td>";
                    echo "<td class='status'>" . htmlspecialchars($row['status']) . "</td>";
                    echo "<td>
                            <ul class='option-list'>
                                <li>
                                    <a href='edit.php?id={$row['id']}' class='option-btn d-inline-block' data-bs-toggle='tooltip' title='Edit Application'>
                                        <i class='ri-edit-line'></i>
                                    </a>
                                </li>
                                <li>
                                    <button class='option-btn d-inline-block' data-bs-toggle='tooltip' title='Approve Application' type='button' onclick='updateStatus({$row['id']}, \"Approved\")'>
                                        <i class='ri-check-line'></i>
                                    </button>
                                </li>
                                <li>
                                    <button class='option-btn d-inline-block' data-bs-toggle='tooltip' title='Reject Application' type='button' onclick='updateStatus({$row['id']}, \"Rejected\")'>
                                        <i class='ri-close-line'></i>
                                    </button>
                                </li>
                                <li>
                                    <button class='option-btn d-inline-block' data-bs-toggle='tooltip' title='Delete Application' type='button' onclick='confirmDelete({$row['id']})'>
                                        <i class='ri-delete-bin-line'></i>
                                    </button>
                                </li>
                            </ul>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- End Manage Jobs Area -->

<!-- Delete Job Script -->
<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this job?")) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "utilities/delete_job.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        document.getElementById(`row-${id}`).remove();
                        alert("Job deleted successfully!");
                    } else {
                        alert("Error deleting job: " + response.error);
                    }
                }
            };

            xhr.send(`id=${id}`);
        }
    }
</script>

<!-- jQuery for Update Status -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateStatus(jobId, status) {
        if (confirm(`Are you sure you want to mark this job as ${status}?`)) {
            $.ajax({
                url: 'utilities/update_status.php',
                type: 'POST',
                data: { id: jobId, status: status },
                success: function (response) {
                    let res = JSON.parse(response);
                    if (res.success) {
                        $(`#row-${jobId} .status`).text(status);
                        alert('Status updated successfully!');
                    } else {
                        alert('Error updating status: ' + res.message);
                    }
                },
                error: function () {
                    alert('An error occurred while updating the status.');
                }
            });
        }
    }
</script>

<?php include 'inc/footer.php'; ?>
