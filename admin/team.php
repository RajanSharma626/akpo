<?php
$title = "Teams";

@include('includes/head.php');

if (isset($_GET['delId'])) {
    $del_id = $_GET['delId'];
    // Fetch the profile image path before deleting
    $sql = "SELECT profile FROM team WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $del_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $profile = '';
    if ($row = $result->fetch_assoc()) {
        $profile = $row['profile'];
    }
    $stmt->close();

    // Delete the team member
    $sql = "DELETE FROM team WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $del_id);
    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error deleting Team: " . $stmt->error;
        header("Location: ./team");
        exit();
    }
    $stmt->close();

    // Delete the profile image file if it exists and is not the default
    if (!empty($profile) && file_exists("." . $profile) && $profile !== '/uploads/team/default-cover.jpg') {
        @unlink("." . $profile);
    }

    $_SESSION['success'] = "Team Deleted successfully.";
    header("Location: ./team");
    exit();
}
?>
<div id="layoutSidenav">
    <?php @include('includes/sidebar.php'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="row align-items-center pt-4">
                    <div class="col">
                        <h2>Teams</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Teams</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="add-member" class="btn btn-primary mb-2">Add Member</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-4">
                        <?php
                        if (isset($_SESSION['success'])) {
                            echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
                            unset($_SESSION['success']);
                        } elseif (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                            unset($_SESSION['error']);
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Team List
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                    // Fetch 3 team members from the database
                                    $sql = "SELECT * FROM team ORDER BY id DESC";
                                    $result = $conn->query($sql);
                                    if ($result && $result->num_rows > 0) {
                                        while ($member = $result->fetch_assoc()) {
                                    ?>
                                            <div class="col-md-3 mb-4">
                                                <div class="card h-100 text-center">
                                                    <?php if (!empty($member['profile'])): ?>
                                                        <img src=".<?php echo htmlspecialchars($member['profile']); ?>" class="card-img-top" alt="Profile Cover">
                                                    <?php else: ?>
                                                        <img src="uploads/team/default.jpg" class="card-img-top" alt="Default Cover" style="height:200px;object-fit:cover;">
                                                    <?php endif; ?>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo htmlspecialchars($member['name']); ?></h5>
                                                        <p class="card-text text-muted"><?php echo htmlspecialchars($member['designation']); ?></p>
                                                        <div class="d-flex justify-content-center gap-2 mt-3">
                                                            <a href="edit-member?id=<?php echo $member['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                            <a href="team?delId=<?php echo $member['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo '<div class="col-12"><p class="text-center">No team members found.</p></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </main>
        <?php @include('includes/footer.php'); ?>
    </div>
</div>

<?php @include('includes/foot.php');
?>