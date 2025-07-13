<?php
$title = "Testimonial";

@include('includes/head.php');

if (isset($_GET['delId'])) {
    $del_id = $_GET['delId'];
    $sql = "DELETE FROM testimonial WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $del_id);
    if (!$stmt->execute()) {
        $_SESSION['error'] = "Error deleting Testimonial: " . $stmt->error;
        header("Location: ./testimonial");
        exit();
    }
    $_SESSION['success'] = "Testimonial Deleted successfully.";
    header("Location: ./testimonial");
}
?>
<div id="layoutSidenav">
    <?php @include('includes/sidebar.php'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="row align-items-center pt-4">
                    <div class="col">
                        <h2>Testimonial</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Testimonial</li>
                        </ol>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <a href="add-Testimonial" class="btn btn-primary mb-2">Add Testimonial</a>
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
                                Testimonial List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Subtitle</th>
                                            <th>Comment</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Example data, replace with your database query results
                                        $sql = "SELECT * FROM testimonial ORDER BY id DESC";
                                        $testimonials = $conn->query($sql);
                                        $sno = 1;
                                        foreach ($testimonials as $testimonial) {
                                            echo "<tr>";
                                            echo "<td>{$sno}</td>";
                                            echo "<td>{$testimonial['title']}</td>";
                                            echo "<td>{$testimonial['subtitle']}</td>";
                                            echo "<td>{$testimonial['comment']}</td>";
                                            echo "<td><a href='./edit-testimonial?id={$testimonial['id']}' class='btn btn-warning btn-sm'>Edit</a> 
                                                  <a href='?delId={$testimonial['id']}' class='btn btn-danger btn-sm'>Delete</a></td>";
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