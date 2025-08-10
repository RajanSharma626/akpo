<?php
$title = "Add Blog";
@include('includes/head.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // File upload handling
    $cover_img = $_FILES['cover_img']['name'];
    $banner_img = $_FILES['banner_img']['name'];
    $cover_tmp = $_FILES['cover_img']['tmp_name'];
    $banner_tmp = $_FILES['banner_img']['tmp_name'];

    // Upload directory
    $upload_dir = 'uploads/blogs/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Get file extensions
    $cover_ext = pathinfo($cover_img, PATHINFO_EXTENSION);
    $banner_ext = pathinfo($banner_img, PATHINFO_EXTENSION);

    // Create unique names
    $cover_unique_name = 'cover_' . time() . '_' . uniqid() . '.' . $cover_ext;
    $banner_unique_name = 'banner_' . time() . '_' . uniqid() . '.' . $banner_ext;

    // Full paths
    $cover_path = $upload_dir . $cover_unique_name;
    $banner_path = $upload_dir . $banner_unique_name;

    // Paths to store in DB (relative for frontend use)
    $cover_path_db = '/' . $cover_path;
    $banner_path_db = '/' . $banner_path;

    // Move files
    move_uploaded_file($cover_tmp, $cover_path);
    move_uploaded_file($banner_tmp, $banner_path);

    // Other fields
    $title_val = $_POST['title'];
    $short_desc = $_POST['short_desc'];
    $content = $_POST['content'];

    // Generate slug from title
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title_val), '-'));

    // Insert into DB
    $sql = "INSERT INTO blogs (cover_img, title, short_desc, banner_img, content, slug) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $cover_path_db, $title_val, $short_desc, $banner_path_db, $content, $slug);

    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error adding blog: {$stmt->error}";
        header("Location: ./add-blog");
        exit();
    }

    $_SESSION['success'] = "Blog added successfully.";
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
                        <h2>Add Blog</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Blog / Add Blog</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="./blog" class="btn btn-warning mb-2">Back</a>
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
                                <i class="fas fa-plus me-1"></i>
                                Add Blog
                            </div>
                            <div class="card-body">
                                <form action="./add-blog" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="cover_img" class="form-label">Cover Image</label>
                                        <input type="file" class="form-control" id="cover_img" name="cover_img" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="short_desc" class="form-label">Short Description</label>
                                        <input type="text" class="form-control" id="short_desc" name="short_desc" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="banner_img" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" id="banner_img" name="banner_img" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" id="editor1" name="content" rows="6" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Blog</button>
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