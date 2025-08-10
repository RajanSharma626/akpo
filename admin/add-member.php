<?php
$title = "Add FAQ";

@include('includes/head.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $designation = trim($_POST['designation']);

    // Validate fields
    if (empty($name) || empty($designation)) {
        $_SESSION['error'] = "Name and designation are required.";
        header("Location: ./add-member");
        exit();
    }

    // File upload handling
    if (isset($_FILES['profile']) && $_FILES['profile']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/team/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileTmpPath = $_FILES['profile']['tmp_name'];
        $fileName = basename($_FILES['profile']['name']);
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($fileExt, $allowedExts)) {
            $_SESSION['error'] = "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
            header("Location: ./add-member");
            exit();
        }

        if (!is_uploaded_file($fileTmpPath)) {
            $_SESSION['error'] = "File upload failed. Temp file missing.";
            header("Location: ./add-member");
            exit();
        }

        $newFileName = uniqid('member_', true) . '.' . $fileExt;
        $destPath = $uploadDir . $newFileName;

        if (!move_uploaded_file($fileTmpPath, $destPath)) {
            $_SESSION['error'] = "Failed to upload profile image. Check folder permissions.";
            header("Location: ./add-member");
            exit();
        }

        // Store full path (relative to project root)
        $profilePath = '/' . trim($destPath, '/');
    } else {
        $uploadErrors = [
            UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini.",
            UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.",
            UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",
            UPLOAD_ERR_NO_FILE => "No file was uploaded.",
            UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder.",
            UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
            UPLOAD_ERR_EXTENSION => "File upload stopped by extension.",
        ];
        $errorCode = $_FILES['profile']['error'];
        $errorMsg = $uploadErrors[$errorCode] ?? "Unknown error occurred during file upload.";
        $_SESSION['error'] = "Profile image error: $errorMsg";
        header("Location: ./add-member");
        exit();
    }

    // Insert into database with full path
    $sql = "INSERT INTO team (name, profile, designation) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $profilePath, $designation);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Member added successfully.";
        header("Location: ./team");
        exit();
    } else {
        $_SESSION['error'] = "Database error: " . $stmt->error;
        header("Location: ./add-member");
        exit();
    }
}

?>
<div id="layoutSidenav">
    <?php @include('includes/sidebar.php'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="row align-items-center pt-4">
                    <div class="col">
                        <h2>Add Member</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Team / Add Member</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="./team" class="btn btn-warning mb-2">Back</a>
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
                                Add Member
                            </div>
                            <div class="card-body">
                                <form action="./add-member" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Member Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="profile" class="form-label">Profile</label>
                                        <input type="file" class="form-control" id="profile" name="profile" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="designation" name="designation" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Member</button>
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

<?php @include('includes/foot.php');
?>