<!doctype html>
<html lang="en">

<?php
$title = "Contact Us | Acculedger KPO";
@include 'includes/head.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Combine services into one string separated by ;
    $servicesArray = isset($_POST['services']) ? $_POST['services'] : [];
    $services = implode("; ", $servicesArray);

    // Insert into DB
    $sql = "INSERT INTO contact_form (name, email, company, phone, services, message)
            VALUES ('$name', '$email', '$company', '$phone', '$services', '$message')";

    if (mysqli_query($conn, $sql)) {

        // Send Email Notification
        $to = "info@acculedgerkpo.com"; // Replace with your receiving email address
        $subject = "New Contact Form Submission from Acculedger KPO Website";
        $headers = "From: noreply@acculedgerkpo.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Company:</strong> $company</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Services Interested In:</strong> $services</p>
        <p><strong>Message:</strong><br>$message</p>
        ";

        mail($to, $subject, $body, $headers);

        header("Location: ./contact-us?status=1");
        exit();
    } else {
        header("Location: ./contact-us?status=0");
        exit();
    }
}
?>

<body>

    <?php
    @include 'includes/navbar.php';
    ?>


    <!-- Hero Section -->
    <section class="acculedger-faq-hero contact-us-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12" data-aos="fade-in" data-aos-duration="1000">
                    <p class="section-subtitle mb-0 primary-color text-start">Get in Touch with Acculedger KPO</p>
                    <h1 class="acculedger-faq-hero-title text-white text-start">Reliable Support. Real-Time Answers</h1>
                    <p class="text-start text-white"> Have a question or need expert KPO support? </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section-header py-3 " data-aos="fade-in" data-aos-duration="1000">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="fs-sm-12 fs-md-5 ">
                    <i class="bi bi-telephone-fill"></i> +91 95867 45373
                </div>
                <div class="mx-5" style="border-left:2px solid #ccc; height:40px;"></div>
                <div class="fs-md-5 fs-sm-12">
                    <i class="bi bi-envelope-open-fill"></i> info@acculedgerkpo.com
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h5 class="fw-bold mt-5 mb-3">
                        Let’s start the conversation today!
                    </h5>

                </div>
            </div>

            <div class="form-container pb-5">
                <form method="post" action="">

                    <?php
                    if (isset($_GET['status']) && $_GET['status'] == 1) {
                        echo '<div class="alert alert-success">Thank you for reaching out! We have received your message and will get back to you shortly.</div>';
                    } elseif (isset($_GET['status']) && $_GET['status'] == 0) {
                        echo '<div class="alert alert-danger">Oops! Something went wrong. Please try again!</div>';
                    }
                    ?>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" name="name" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control py-3 " name="email" placeholder="Email Id" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" name="company" placeholder="Company Name">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control py-3" name="phone" placeholder="Phone No.">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fs-5 fw-bold">Services You’re Interested In</label>
                        <p class="text-muted">You can select more than one service.</p>

                        <div class="row service-options">
                            <div class="col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Bookkeeping and Accounting" id="service-bookkeeping">
                                    <label class="form-check-label" for="service-bookkeeping">
                                        Bookkeeping and Accounting
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="US Taxation" id="service-ustax">
                                    <label class="form-check-label" for="service-ustax">
                                        US Taxation
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Payroll" id="service-payroll">
                                    <label class="form-check-label" for="service-payroll">
                                        Payroll
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Sale Tax" id="service-saletax">
                                    <label class="form-check-label" for="service-saletax">
                                        Sale Tax
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Bank Account Reconciliation" id="service-bankrec">
                                    <label class="form-check-label" for="service-bankrec">
                                        Bank Account Reconciliation
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="AR & AP Management" id="service-arap">
                                    <label class="form-check-label" for="service-arap">
                                        AR & AP Management
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Year End Services" id="service-yearend">
                                    <label class="form-check-label" for="service-yearend">
                                        Year End Services
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Audit and Assurance" id="service-audit">
                                    <label class="form-check-label" for="service-audit">
                                        Audit and Assurance
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Virtual CFO" id="service-vcfo">
                                    <label class="form-check-label" for="service-vcfo">
                                        Virtual CFO
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Management Consultation" id="service-mgmt">
                                    <label class="form-check-label" for="service-mgmt">
                                        Management Consultation
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <textarea class="form-control" name="message" placeholder="Tell us briefly how we can support your business."
                            rows="6"></textarea>
                    </div>

                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consentCheck" required>
                            <label class="form-check-label" for="consentCheck">
                                By submitting this form, you agree to share your contact information with <span class="primary-color">Acculedger KPO</span>
                                . We use this data to understand your requirements and occasionally share helpful
                                updates — no spam, ever.
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn primary-btn py-2 px-5">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Section for 30-Minute Meeting -->
    <section class="cta-section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="cta-card">
                        <div class="cta-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h2 class="section-title secondary-color">Schedule a 30-Minute Meeting</h2>
                        <p class="text-muted fw-semibold">
                            Ready to discuss your project in detail? Book a free 30-minute consultation call with our team.
                            We'll dive deep into your requirements and provide personalized recommendations.
                        </p>

                        <a href="https://calendly.com/acculedgerkpo/30min" target="_blank" class="btn secondary-bg btn-lg px-5 py-3">
                            <i class="fas fa-calendar-check me-2"></i>Book Your 30-Minute Meeting
                        </a>

                        <p class="text-muted mt-3 mb-0">
                            <i class="fas fa-shield-alt me-2"></i>Your time is valuable - we'll make every minute count
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    @include 'includes/footer.php';
    ?>

</body>

</html>