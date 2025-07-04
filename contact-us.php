<!doctype html>
<html lang="en">

<?php
$title = "Contact Us | Acculedger KPO";
@include 'includes/head.php';
?>

<body>

    <?php
    @include 'includes/navbar.php';
    ?>


    <!-- Hero Section -->
    <section class="acculedger-faq-hero contact-us-header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="section-subtitle mb-0 primary-color text-start">Get in Touch with Acculedger KPO</p>
                    <h1 class="acculedger-faq-hero-title text-white text-start">Reliable Support. Real-Time Answers</h1>
                    <p class="text-start text-white"> Have a question or need expert KPO support? </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section-header py-3">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="fs-5">
                    <i class="bi bi-telephone-fill"></i> +91 9310598455
                </div>
                <div class="mx-5" style="border-left:2px solid #ccc; height:40px;"></div>
                <div class="fs-5">
                    <i class="bi bi-envelope-open-fill"></i> example@gamil.com
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
                <form>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control py-3 " placeholder="Email Id" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" placeholder="Company Name:">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control py-3" placeholder="Phone No.">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fs-5 fw-bold">Services You’re Interested In</label>
                        <p class="text-muted">You can select more than one service.</p>

                        <div class="row service-options">
                            <div class="col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Bookkeeping and Accounting" id="service-bookkeeping">
                                    <label class="form-check-label" for="service-bookkeeping">
                                        Bookkeeping and Accounting
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="US Taxation" id="service-ustax">
                                    <label class="form-check-label" for="service-ustax">
                                        US Taxation
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Payroll" id="service-payroll">
                                    <label class="form-check-label" for="service-payroll">
                                        Payroll
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Sale Tax" id="service-saletax">
                                    <label class="form-check-label" for="service-saletax">
                                        Sale Tax
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Bank Account Reconciliation" id="service-bankrec">
                                    <label class="form-check-label" for="service-bankrec">
                                        Bank Account Reconciliation
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="AR & AP Management" id="service-arap">
                                    <label class="form-check-label" for="service-arap">
                                        AR & AP Management
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Year End Services" id="service-yearend">
                                    <label class="form-check-label" for="service-yearend">
                                        Year End Services
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Audit and Assurance" id="service-audit">
                                    <label class="form-check-label" for="service-audit">
                                        Audit and Assurance
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Virtual CFO" id="service-vcfo">
                                    <label class="form-check-label" for="service-vcfo">
                                        Virtual CFO
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Management Consultation" id="service-mgmt">
                                    <label class="form-check-label" for="service-mgmt">
                                        Management Consultation
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <textarea class="form-control" placeholder="Tell us briefly how we can support your business."
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
    <section class="cta-section">
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