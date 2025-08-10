<?php
$title = "Contact Form ";

@include('includes/head.php');

?>
<div id="layoutSidenav">
    <?php @include('includes/sidebar.php'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="row align-items-center pt-4">
                    <div class="col">
                        <h2>Contact form data</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard / Contact form data</li>
                        </ol>
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
                                Data List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th>Phone no.</th>
                                            <th>Services</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Example data, replace with your database query results
                                        $sql = "SELECT * FROM contact_form ORDER BY id DESC";
                                        $datas = $conn->query($sql);
                                        $sno = 1;
                                        foreach ($datas as $data) {
                                            echo "<tr>";
                                            echo "<td>" . date('d M, Y h:i A', strtotime($data['timestamp'])) . "</td>";
                                            echo "<td>{$data['name']}</td>";
                                            echo "<td>{$data['email']}</td>";
                                            echo "<td>{$data['company']}</td>";
                                            echo "<td>{$data['phone']}</td>";
                                            // Display services as badges
                                            $services = explode(';', $data['services']);
                                            echo "<td>";
                                            foreach ($services as $service) {
                                                $service = trim($service);
                                                if ($service !== '') {
                                                    echo '<span class="badge bg-primary me-1">' . htmlspecialchars($service) . '</span>';
                                                }
                                            }
                                            echo "</td>";
                                            echo "<td>{$data['message']}</td>";
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