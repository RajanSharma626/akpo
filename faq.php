<!doctype html>
<html lang="en">

<?php
$title = "FAQ | Acculedger KPO";
@include 'includes/head.php';
?>

<body>

    <?php
    @include 'includes/navbar.php';
    ?>

    <section class="acculedger-faq-hero faq-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 text-start" data-aos="fade-in" data-aos-duration="1000">
                    <!-- <p class="section-subtitle mb-0 primary-color text-start"></p> -->
                    <h1 class="acculedger-faq-hero-title text-white text-start">Frequently Asked Questions</h1>
                    <p class="text-start text-white">Explore common queries about our services, process, and how we help your business grow.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="acculedger-faq-main-section">
        <div class="container">
            <h2 class="acculedger-faq-section-title text-black mb-1" data-aos="fade-in" data-aos-duration="1000">How Can We Help You?</h2>
            <p class="acculedger-faq-section-subtitle" data-aos="fade-in" data-aos-duration="1000">Browse through our comprehensive FAQ section to find detailed
                answers about our services, processes, and partnership opportunities.</p>

            <!-- FAQ Items -->
            <div class="acculedger-faq-container">

                <?php
                // Fetch FAQs
                $sql = "SELECT * FROM faq ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0):
                    $index = 1;
                    while ($faq = mysqli_fetch_assoc($result)): ?>
                        <div class="acculedger-faq-item" data-aos="fade-up" data-aos-duration="1000">
                            <button class="acculedger-faq-question collapsed secondary-color" type="button" data-bs-toggle="collapse"
                                data-bs-target="#acculedgerFaq<?php echo $faq['id']; ?>">
                                Q<?php echo $index; ?>: <?php echo htmlspecialchars($faq['question']); ?>
                                <span class="acculedger-faq-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </button>
                            <div class="collapse" id="acculedgerFaq<?php echo $faq['id']; ?>">
                                <div class="acculedger-faq-answer py-3">
                                    <p class="mb-0"><?php echo htmlspecialchars($faq['answer']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $index++;
                    endwhile;
                else: ?>
                    <p>No FAQs found.</p>
                <?php endif; ?>

            </div>
    </section>




    <?php
    @include 'includes/contact.php';
    @include 'includes/footer.php';
    ?>

</body>

</html>