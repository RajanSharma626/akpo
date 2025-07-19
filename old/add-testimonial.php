<?php
$title = "Add Testimonial";

@include('includes/head.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming you have a function to handle the database insertion
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO testimonial (title, subtitle, comment) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $subtitle, $comment);
    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error adding testimonial: {$stmt->error}";
        header("Location: ./add-testimonial");
        exit();
    }

    $_SESSION['success'] = "Testimonial added successfully.";
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
                        <h2>Add Testimonial</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / FAQ / Add Testimonial</li>
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
                        }elseif (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                            unset($_SESSION['error']);
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-plus me-1"></i>
                                Add Testimonial
                            </div>
                            <div class="card-body">
                                <form action="./add-testimonial" method="POST">
                                    <div class="mb-3">
                                        <label for="question" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="question" class="form-label">Subtitle</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="answer" class="form-label">Comment</label>
                                        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Testimonial</button>
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