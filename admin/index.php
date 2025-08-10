<?php
$title = "Dashboard"; // Set the title variable for the page

@include('includes/head.php'); // Include the head section with the title
?>
<div id="layoutSidenav">
    <?php @include('includes/sidebar.php'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <?php

                    // Get counts
                    $faq_count = $conn->query("SELECT COUNT(*) FROM faq")->fetch_row()[0];
                    $team_count = $conn->query("SELECT COUNT(*) FROM team")->fetch_row()[0];
                    $testimonial_count = $conn->query("SELECT COUNT(*) FROM testimonial")->fetch_row()[0];
                    $contact_count = $conn->query("SELECT COUNT(*) FROM contact_form")->fetch_row()[0];

                    // Get recent 10 contact form entries
                    $recent_contacts = $conn->query("SELECT * FROM contact_form ORDER BY id DESC LIMIT 10");
                    ?>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-dark mb-4">
                            <div class="card-body">FAQs <span class="float-end"><?= $faq_count ?></span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="faq">View Details</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info bg-opacity-10 text-dark mb-4">
                            <div class="card-body">Team Members <span class="float-end"><?= $team_count ?></span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="team">View Details</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success bg-opacity-10 text-dark mb-4">
                            <div class="card-body">Testimonials <span class="float-end"><?= $testimonial_count ?></span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="testimonial">View Details</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning bg-opacity-10 text-dark mb-4">
                            <div class="card-body">Contact Forms <span class="float-end"><?= $contact_count ?></span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="contact-form">View Details</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-header">
                                Recent 10 Contact Form Entries
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($recent_contacts && $recent_contacts->num_rows > 0) {
                                            $i = 1;
                                            while ($row = $recent_contacts->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . date('d M, Y h:i A', strtotime($row['timestamp'])) . "</td>";
                                                echo "<td>{$row['name']}</td>";
                                                echo "<td>{$row['email']}</td>";
                                                echo "<td>{$row['company']}</td>";
                                                echo "<td>{$row['phone']}</td>";
                                                // Display services as badges
                                                $services = explode(';', $row['services']);
                                                echo "<td>";
                                                foreach ($services as $service) {
                                                    $service = trim($service);
                                                    if ($service !== '') {
                                                        echo '<span class="badge bg-primary me-1">' . htmlspecialchars($service) . '</span>';
                                                    }
                                                }
                                                echo "</td>";
                                                echo "<td>{$row['message']}</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo '<tr><td colspan="5" class="text-center">No contact form data found.</td></tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php $conn->close(); ?>
                </div>
            </div>
        </main>
        <?php @include('includes/footer.php'); ?>
    </div>
</div>

<?php @include('includes/foot.php');
?>