<?php
$title = "Edit Blog";
@include('includes/head.php');

if (!isset($_GET['id'])) {
    $_SESSION['error'] = "Blog ID is missing.";
    header("Location: ./blogs");
    exit();
}

$blog_id = (int)$_GET['id'];

// Fetch existing blog data
$sql = "SELECT * FROM blogs WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $_SESSION['error'] = "Blog not found.";
    header("Location: ./blogs");
    exit();
}

$blog = $result->fetch_assoc();
$stmt->close();

// Handle update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title_val = $_POST['title'];
    $short_desc = $_POST['short_desc'];
    $content = $_POST['content'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title_val), '-'));

    $cover_path_db = $blog['cover_img'];
    $banner_path_db = $blog['banner_img'];

    $upload_dir = 'uploads/blogs/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Handle new cover image if uploaded
    if (!empty($_FILES['cover_img']['name'])) {
        $cover_ext = pathinfo($_FILES['cover_img']['name'], PATHINFO_EXTENSION);
        $cover_unique_name = 'cover_' . time() . '_' . uniqid() . '.' . $cover_ext;
        $cover_path = $upload_dir . $cover_unique_name;
        $cover_path_db = '/' . $cover_path;

        if (move_uploaded_file($_FILES['cover_img']['tmp_name'], $cover_path)) {
            if (file_exists("." . $blog['cover_img']) && $blog['cover_img'] !== '/uploads/team/default.jpg') {
                @unlink("." . $blog['cover_img']);
            }
        }
    }

    // Handle new banner image if uploaded
    if (!empty($_FILES['banner_img']['name'])) {
        $banner_ext = pathinfo($_FILES['banner_img']['name'], PATHINFO_EXTENSION);
        $banner_unique_name = 'banner_' . time() . '_' . uniqid() . '.' . $banner_ext;
        $banner_path = $upload_dir . $banner_unique_name;
        $banner_path_db = '/' . $banner_path;

        if (move_uploaded_file($_FILES['banner_img']['tmp_name'], $banner_path)) {
            if (file_exists("." . $blog['banner_img']) && $blog['banner_img'] !== '/uploads/team/default.jpg') {
                @unlink("." . $blog['banner_img']);
            }
        }
    }

    // Update query
    $sql = "UPDATE blogs SET cover_img = ?, title = ?, short_desc = ?, banner_img = ?, content = ?, slug = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $cover_path_db, $title_val, $short_desc, $banner_path_db, $content, $slug, $blog_id);

    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error updating blog: {$stmt->error}";
        header("Location: ./edit-blog?id=$blog_id");
        exit();
    }

    $_SESSION['success'] = "Blog updated successfully.";
    header("Location: ./blogs");
    exit();
}
?>

<!-- HTML Part -->
<div id="layoutSidenav">
    <?php @include('includes/sidebar.php'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="row align-items-center pt-4">
                    <div class="col">
                        <h2>Edit Blog</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Blog / Edit Blog</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="./blogs" class="btn btn-warning mb-2">Back</a>
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
                            <div class="card-header"><i class="fas fa-edit me-1"></i>Edit Blog</div>
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="form-label">Current Cover Image</label><br>
                                        <img src=".<?php echo $blog['cover_img']; ?>" height="100">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cover_img" class="form-label">Change Cover Image</label>
                                        <input type="file" class="form-control" id="cover_img" name="cover_img">
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required value="<?php echo htmlspecialchars($blog['title']); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="short_desc" class="form-label">Short Description</label>
                                        <input type="text" class="form-control" id="short_desc" name="short_desc" required value="<?php echo htmlspecialchars($blog['short_desc']); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Current Banner Image</label><br>
                                        <img src=".<?php echo $blog['banner_img']; ?>" height="100">
                                    </div>
                                    <div class="mb-3">
                                        <label for="banner_img" class="form-label">Change Banner Image</label>
                                        <input type="file" class="form-control" id="banner_img" name="banner_img">
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" id="editor1" name="content" rows="6" required><?php echo htmlspecialchars($blog['content']); ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Blog</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php @include('includes/footer.php'); ?>
    </div>
</div>
<?php @include('includes/foot.php'); ?>