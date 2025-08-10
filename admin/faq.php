<?php
$title = "FAQ";

@include('includes/head.php');

if (isset($_GET['delId'])) {
    $del_id = $_GET['delId'];
    $sql = "DELETE FROM faq WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $del_id);
    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error deleting FAQ: " . $stmt->error;
        header("Location: ./faq");
        exit();
    }
    $_SESSION['success'] = "FAQ deleted successfully.";
    header("Location: ./faq");
}
?>
<div id="layoutSidenav">
    <?php @include('includes/sidebar.php'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="row align-items-center pt-4">
                    <div class="col">
                        <h2>FAQs</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / FAQ</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="add-faq" class="btn btn-primary mb-2">Add FAQ</a>
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
                                FAQ List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Example data, replace with your database query results
                                        $sql = "SELECT * FROM faq ORDER BY id DESC";
                                        $faqs = $conn->query($sql);
                                        $sno = 1;
                                        foreach ($faqs as $faq) {
                                            echo "<tr>";
                                            echo "<td>{$sno}</td>";
                                            echo "<td>{$faq['question']}</td>";
                                            echo "<td>{$faq['answer']}</td>";
                                                  echo "<td>
            <a href='./edit-faq?id={$faq['id']}' class='btn btn-warning btn-sm'>Edit</a> 
            <a href='?delId={$faq['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this FAQ?');\">Delete</a>
          </td>";
                                            echo "</tr>";

                                            $sno++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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