<?php
$title = "Edit Testimonial";
@include('includes/head.php');

// Get testimonial ID from query string
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = "Invalid testimonial.";
    header("Location: ./testimonial");
    exit();
}
$id = intval($_GET['id']);

// Fetch existing testimonial data
$sql = "SELECT * FROM testimonial WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$testimonial = $result->fetch_assoc();

if (!$testimonial) {
    $_SESSION['error'] = "Testimonial not found.";
    header("Location: ./testimonial");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titleVal = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $comment = $_POST['comment'];

    $sql = "UPDATE testimonial SET title = ?, subtitle = ?, comment = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $titleVal, $subtitle, $comment, $id);

    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error updating testimonial: {$stmt->error}";
        header("Location: ./edit-testimonial?id=$id");
        exit();
    }

    $_SESSION['success'] = "Testimonial updated successfully.";
    header("Location: ./testimonial");
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
                        <h2>Edit Testimonial</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / FAQ / Edit Testimonial</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="./testimonial" class="btn btn-warning mb-2">Back</a>
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
                                Edit Testimonial
                            </div>
                            <div class="card-body">
                                <form action="./edit-testimonial?id=<?php echo $id; ?>" method="POST">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required value="<?php echo htmlspecialchars($testimonial['title']); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle" required value="<?php echo htmlspecialchars($testimonial['subtitle']); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Comment</label>
                                        <textarea class="form-control" id="comment" name="comment" rows="4" required><?php echo htmlspecialchars($testimonial['comment']); ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Testimonial</button>
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