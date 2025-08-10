<?php
$title = "Add FAQ";

@include('includes/head.php');

$question = '';
$question_id = '';
$answer = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM faq WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $question = $row['question'];
        $answer = $row['answer'];
        $question_id = $row['id'];
    } else {
        $_SESSION['error'] = "FAQ not found.";
        header("Location: ./faq");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming you have a function to handle the database insertion
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $id = $_POST['id'];

    $sql = "UPDATE faq SET question = ?, answer = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $question, $answer, $id);
    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error updating FAQ: " . $stmt->error;
        header("Location: ./faq-add");
        exit();
    }

    $_SESSION['success'] = "FAQ updated successfully.";
    header("Location: ./faq");
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
                        <h2>Add FAQs</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / FAQ / Add FAQ</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="./faq" class="btn btn-warning mb-2">Back</a>
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
                                Add FAQ
                            </div>
                            <div class="card-body">
                                <form action="./edit-faq" method="POST">
                                    <div class="mb-3">
                                        <label for="question" class="form-label">Question</label>
                                        <input type="text" class="form-control" id="question" value="<?php echo $question ?>" name="question" required>
                                        <input type="hidden" name="id" value="<?php echo $question_id ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="answer" class="form-label">Answer</label>
                                        <textarea class="form-control" id="answer" name="answer" rows="4" required><?php echo $answer ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update FAQ</button>
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