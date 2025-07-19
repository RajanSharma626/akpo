<?php
$title = "Edit Member";
@include('includes/head.php');

// Get member ID from query string
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = "Invalid member ID.";
    header("Location: ./team");
    exit();
}
$member_id = intval($_GET['id']);

// Fetch member data
$sql = "SELECT * FROM team WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $member_id);
$stmt->execute();
$result = $stmt->get_result();
$member = $result->fetch_assoc();

if (!$member) {
    $_SESSION['error'] = "Member not found.";
    header("Location: ./team");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $designation = trim($_POST['designation']);

    // Validate fields
    if (empty($name) || empty($designation)) {
        $_SESSION['error'] = "Name and designation are required.";
        header("Location: ./edit-member?id=$member_id");
        exit();
    }

    $profilePath = $member['profile']; // Default to existing

    // File upload handling (optional)
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
            header("Location: ./edit-member?id=$member_id");
            exit();
        }

        if (!is_uploaded_file($fileTmpPath)) {
            $_SESSION['error'] = "File upload failed. Temp file missing.";
            header("Location: ./edit-member?id=$member_id");
            exit();
        }

        $newFileName = uniqid('member_', true) . '.' . $fileExt;
        $destPath = $uploadDir . $newFileName;

        if (!move_uploaded_file($fileTmpPath, $destPath)) {
            $_SESSION['error'] = "Failed to upload profile image. Check folder permissions.";
            header("Location: ./edit-member?id=$member_id");
            exit();
        }

        $profilePath = '/' . trim($destPath, '/');
    } elseif (isset($_FILES['profile']) && $_FILES['profile']['error'] !== UPLOAD_ERR_NO_FILE) {
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
        header("Location: ./edit-member?id=$member_id");
        exit();
    }

    // Update database
    $sql = "UPDATE team SET name = ?, profile = ?, designation = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $profilePath, $designation, $member_id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Member updated successfully.";
        header("Location: ./team");
        exit();
    } else {
        $_SESSION['error'] = "Database error: " . $stmt->error;
        header("Location: ./edit-member?id=$member_id");
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
                        <h2>Edit Member</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Team / Edit Member</li>
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
                                <i class="fas fa-edit me-1"></i>
                                Edit Member
                            </div>
                            <div class="card-body">
                                <form action="./edit-member?id=<?php echo $member_id; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Member Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required value="<?php echo htmlspecialchars($member['name']); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="profile" class="form-label">Profile</label>
                                        <?php if (!empty($member['profile'])): ?>
                                            <div class="mb-2">
                                                <img src=".<?php echo htmlspecialchars($member['profile']); ?>" alt="Profile" style="max-width:100px;">
                                            </div>
                                        <?php endif; ?>
                                        <input type="file" class="form-control" id="profile" name="profile">
                                        <small class="text-muted">Leave blank to keep existing image.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="designation" name="designation" required value="<?php echo htmlspecialchars($member['designation']); ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Member</button>
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