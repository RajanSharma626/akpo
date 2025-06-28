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
    <section class="acculedger-faq-hero">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="section-subtitle mb-0 secondary-color text-start">Get in Touch</p>
                    <h1 class="acculedger-faq-hero-title text-start">Frequently Asked Questions</h1>
                    <p class="text-start">Find answers to common questions about our accounting,
                        taxation, and
                        financial outsourcing services. Can't find what you're looking for? Contact our expert team.</p>
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
                    <p class="section-subtitle mb-0 primary-color text-start">Get in Touch with Acculedger KPO
                    </p>
                    <h2 class="section-title text-start text-black mb-1">Reliable Support. Real-Time Answers.s</h2>
                    <p>
                        Have a question or need expert KPO support? We’re here to help. At Acculedger, we value every
                        inquiry and are committed to providing prompt, personalized assistance for your accounting and
                        back-office needs.
                    </p>

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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Bookkeeping & Accounting"
                                        id="taxPrep">
                                    <label class="form-check-label" for="taxPrep">
                                        Bookkeeping & Accounting
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Tax Preparation & Filing"
                                        id="filing1099">
                                    <label class="form-check-label" for="filing1099">
                                        Tax Preparation & Filing
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Audit Support" id="salesTax">
                                    <label class="form-check-label" for="salesTax">
                                        Audit Support
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1099 Filing & Compliance"
                                        id="accounting">
                                    <label class="form-check-label" for="accounting">
                                        1099 Filing & Compliance
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Payroll Management"
                                        id="management">
                                    <label class="form-check-label" for="management">
                                        Payroll Management
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Sales Tax Reporting"
                                        id="audit">
                                    <label class="form-check-label" for="audit">
                                        Sales Tax Reporting
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="Business Advisory & Consulting" id="payroll">
                                    <label class="form-check-label" for="payroll">
                                        Business Advisory & Consulting
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


    <?php
    @include 'includes/footer.php';
    ?>

</body>

</html>