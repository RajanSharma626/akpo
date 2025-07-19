<!doctype html>
<html lang="en">

<?php
$title = "Blogs | Acculedger KPO";
@include 'includes/head.php';
?>

<body>

    <?php
    @include 'includes/navbar.php';
    ?>


    <section class="acculedger-faq-hero blog-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 text-start" data-aos="fade-in" data-aos-duration="1000">
                    <!-- <p class="section-subtitle mb-0 primary-color text-start"></p> -->
                    <h1 class="acculedger-faq-hero-title text-white text-start">ACCULEDGER KPO Blog & News</h1>
                    <p class="text-start text-white">Expert articles, industry news, and compliance updates to keep your firm informed and ahead.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="acculedger-faq-main-section">
        <div class="container">
            <div class="row">
                <?php
                // Fetch member
                $sql2 = "SELECT * FROM blogs";
                $result2 = mysqli_query($conn, $sql2);
                while ($blog = mysqli_fetch_assoc($result2)):
                ?>
                    <div class="col-md-4 p-2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card">
                            <img src="admin/<?php echo $blog['cover_img'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title text-start fs-5 fw-semibold"><?php echo $blog['title'] ?></h6>
                                <p class="card-text"><?php echo $blog['short_desc'] ?></p>
                                <a href="blog/<?php echo $blog['slug'] ?>" class="btn secondary-btn-outline rounded-pill px-4 btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </section>

    <?php
    @include 'includes/contact.php';
    @include 'includes/footer.php';
    ?>

</body>

</html>