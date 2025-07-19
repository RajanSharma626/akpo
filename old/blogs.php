<?php
$title = "Blogs";

@include('includes/head.php');

if (isset($_GET['delId'])) {
    $del_id = $_GET['delId'];

    // Fetch the image paths before deleting
    $sql = "SELECT cover_img, banner_img FROM blogs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $del_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $cover_img = '';
    $banner_img = '';

    if ($row = $result->fetch_assoc()) {
        $cover_img = $row['cover_img'];
        $banner_img = $row['banner_img'];
    }
    $stmt->close();

    // Delete the blog
    $sql = "DELETE FROM blogs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $del_id);
    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error deleting Blog: " . $stmt->error;
        header("Location: ./blogs");
        exit();
    }
    $stmt->close();

    // Delete the image files
    if (!empty($cover_img) && file_exists("." . $cover_img) && $cover_img !== '/uploads/team/default.jpg') {
        @unlink("." . $cover_img);
    }
    if (!empty($banner_img) && file_exists("." . $banner_img) && $banner_img !== '/uploads/team/default.jpg') {
        @unlink("." . $banner_img);
    }

    $_SESSION['success'] = "Blog Deleted successfully.";
    header("Location: ./blogs");
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
                        <h2>Blogs</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Blogs</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="add-blog" class="btn btn-primary mb-2">Add Blog</a>
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
                                Blog List
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                    $sql = "SELECT * FROM blogs ORDER BY id DESC";
                                    $result = $conn->query($sql);
                                    if ($result && $result->num_rows > 0) {
                                        while ($blog = $result->fetch_assoc()) {
                                    ?>
                                            <div class="col-md-3 mb-4">
                                                <div class="card h-100">
                                                    <?php if (!empty($blog['cover_img'])): ?>
                                                        <img src=".<?php echo htmlspecialchars($blog['cover_img']); ?>" class="card-img-top" alt="Profile Cover">
                                                    <?php else: ?>
                                                        <img src="uploads/team/default.jpg" class="card-img-top" alt="Default Cover" style="height:200px;object-fit:cover;">
                                                    <?php endif; ?>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo htmlspecialchars($blog['title']); ?></h5>
                                                        <p class="card-text text-muted"><?php echo htmlspecialchars($blog['short_desc']); ?></p>
                                                        <div class="d-flex justify-content-center gap-2 mt-3">
                                                            <a href="edit-blog?id=<?php echo $blog['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                            <a href="?delId=<?php echo $blog['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } else {
                                        echo '<div class="col-12"><p class="text-center">No Blog found.</p></div>';
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