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
                <div class="col-6 text-start">
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
            <h2 class="acculedger-faq-section-title text-black mb-1">How Can We Help You?</h2>
            <p class="acculedger-faq-section-subtitle">Browse through our comprehensive FAQ section to find detailed
                answers about our services, processes, and partnership opportunities.</p>

            <!-- FAQ Items -->
            <div class="acculedger-faq-container">
                <!-- Services Category -->
                <div class="acculedger-faq-item" data-category="services">
                    <button class="acculedger-faq-question collapsed secondary-color" type="button" data-bs-toggle="collapse"
                        data-bs-target="#acculedgerFaq1">
                        What services does ACCULEDGER KPO offer?
                        <span class="acculedger-faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="collapse" id="acculedgerFaq1">
                        <div class="acculedger-faq-answer">
                            <p>ACCULEDGER KPO offers comprehensive outsourced finance, taxation, and accounting
                                services including:</p>
                            <ul>
                                <li>Bookkeeping and accounting services</li>
                                <li>Tax preparation and planning</li>
                                <li>Financial reporting and analysis</li>
                                <li>Payroll processing</li>
                                <li>Treasury management</li>
                                <li>Compliance and regulatory services</li>
                                <li>Financial consulting and advisory</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="acculedger-faq-item" data-category="services">
                    <button class="acculedger-faq-question collapsed secondary-color" type="button" data-bs-toggle="collapse"
                        data-bs-target="#acculedgerFaq2">
                        Do you work with businesses of all sizes?
                        <span class="acculedger-faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="collapse" id="acculedgerFaq2">
                        <div class="acculedger-faq-answer">
                            <p>Yes, we work with businesses of all sizes, from small startups to large enterprises. Our
                                team takes the time to understand your firm's size, structure, and unique operational
                                needs to craft personalized solutions that fit your specific requirements.</p>
                        </div>
                    </div>
                </div>

                <!-- Process Category -->
                <div class="acculedger-faq-item" data-category="process">
                    <button class="acculedger-faq-question collapsed secondary-color" type="button" data-bs-toggle="collapse"
                        data-bs-target="#acculedgerFaq3">
                        What is your onboarding process?
                        <span class="acculedger-faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="collapse" id="acculedgerFaq3">
                        <div class="acculedger-faq-answer">
                            <p>Our comprehensive onboarding process includes 9 key stages:</p>
                            <ul>
                                <li>One-on-One Consultation</li>
                                <li>Agreement & Signing Process</li>
                                <li>Official Authorization</li>
                                <li>Review of Previous Year's Documentation</li>
                                <li>New Entity Setup (If Applicable)</li>
                                <li>Software Selection</li>
                                <li>Billing Software Analysis</li>
                                <li>Data Migration</li>
                                <li>Configuration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="acculedger-faq-item" data-category="process">
                    <button class="acculedger-faq-question collapsed secondary-color" type="button" data-bs-toggle="collapse"
                        data-bs-target="#acculedgerFaq4">
                        How long does the setup process take?
                        <span class="acculedger-faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="collapse" id="acculedgerFaq4">
                        <div class="acculedger-faq-answer">
                            <p>The setup process typically takes 2-4 weeks depending on the complexity of your
                                requirements and the completeness of your documentation. We work efficiently to ensure
                                minimal disruption to your business operations while maintaining our quality standards.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pricing Category -->
                <div class="acculedger-faq-item" data-category="pricing">
                    <button class="acculedger-faq-question collapsed secondary-color" type="button" data-bs-toggle="collapse"
                        data-bs-target="#acculedgerFaq5">
                        How is your pricing structured?
                        <span class="acculedger-faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </button>
                    <div class="collapse" id="acculedgerFaq5">
                        <div class="acculedger-faq-answer">
                            <p>Our pricing is customized based on your specific needs, business size, and service
                                requirements. We offer flexible pricing models including:</p>
                            <ul>
                                <li>Fixed monthly retainer for ongoing services</li>
                                <li>Project-based pricing for specific engagements</li>
                                <li>Hourly rates for ad-hoc consulting</li>
                                <li>Hybrid models combining different approaches</li>
                            </ul>
                            <p>Contact us for a personalized quote based on your requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>




    <?php
    @include 'includes/contact.php';
    @include 'includes/footer.php';
    ?>

</body>

</html>