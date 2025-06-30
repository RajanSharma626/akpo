<!doctype html>
<html lang="en">

<?php
$title = "Bank Account Reconciliation | Acculedger KPO";
@include 'includes/head.php';
?>

<body>

    <?php
    @include 'includes/navbar.php';
    ?>


    <section class="service-hero-section d-flex align-items-center" style="min-height: 400px;">
        <div class="container py-5">
            <div class="row align-items-center" style="min-height: 300px;">
                <div class="col-md-6 col-12">
                    <h1 class="text-white fw-bold">Bank Account Reconciliation</h1>
                    <p class="text-light service-description">Ensure accuracy and transparency in your financial records with our bank
                        account reconciliation services. We match your internal records with bank statements to identify
                        discrepancies, prevent fraud, and maintain up-to-date financials—giving you peace of mind and
                        reliable reporting.</p>
                    <a href="contact-us" class="btn bg-light rounded-pill px-4 py-2">Start Reconciliation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services-overview py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title mb-0 text-black">Our Reconciliation Services</h2>
                    <p class="service-description fw-normal">
                        Comprehensive bank reconciliation services to ensure your financial records
                        are accurate, transparent, and fraud-free.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Transaction Logging -->
                <div class="col-lg-6">
                    <div class="card h-100 p-5">
                        <div class="service-header d-flex">
                            <div class="service-icon rounded-4">
                                <i class="fas fa-list-alt"></i>
                            </div>
                            <div class="service-meta">
                                <h3 class="service-title mb-2">Transaction Logging</h3>
                                <span class="service-tag badge rounded-pill secondary-bg">Precision Recording</span>
                            </div>
                        </div>
                        <p class="service-description">
                            Recording all transactions with precision for bank and credit card accounts.
                        </p>
                        <div class="account-types row">
                            <div class="account-type col-6 fw-bold text-muted">
                                <i class="fas fa-university primary-color"></i>
                                <span>Bank Accounts</span>
                            </div>
                            <div class="account-type col-6 fw-bold text-muted">
                                <i class="fas fa-credit-card primary-color"></i>
                                <span>Credit Card Accounts</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Matching Records -->
                <div class="col-lg-6">
                    <div class="card h-100 p-5">
                        <div class="service-header d-flex">
                            <div class="service-icon rounded-4">
                                <i class="fas fa-link"></i>
                            </div>
                            <div class="service-meta">
                                <h3 class="service-title mb-2">Matching Internal Records with Bank Statements</h3>
                                <span class="service-tag badge rounded-pill secondary-bg">Perfect Alignment</span>
                            </div>
                        </div>
                        <p class="service-description fw-semibold">
                            We ensure your books align with actual bank activity for accurate financial reporting.
                        </p>
                    </div>
                </div>

                <!-- Identifying Discrepancies -->
                <div class="col-lg-6">
                    <div class="card h-100 p-5">
                        <div class="service-header d-flex">
                            <div class="service-icon rounded-4">
                                <i class="fas fa-search-plus"></i>
                            </div>
                            <div class="service-meta">
                                <h3 class="service-title mb-2">Identifying and Resolving Discrepancies</h3>
                                <span class="service-tag badge rounded-pill secondary-bg">Expert Investigation</span>
                            </div>
                        </div>
                        <p class="service-description fw-semibold">
                            We investigate and correct mismatches between your records and the bank's.
                        </p>
                    </div>
                </div>

                <!-- Outstanding Items -->
                <div class="col-lg-6">
                    <div class="card h-100 p-5">
                        <div class="service-header d-flex">
                            <div class="service-icon rounded-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="service-meta">
                                <h3 class="service-title mb-2">Tracking Outstanding Checks and Deposits in Transit</h3>
                                <span class="service-tag badge rounded-pill secondary-bg">Cash Flow Monitoring</span>
                            </div>
                        </div>
                        <p class="service-description fw-semibold">
                            We monitor unreconciled items to maintain accurate cash flow tracking.
                        </p>
                    </div>
                </div>

                <!-- Bank Charges -->
                <div class="col-lg-6">
                    <div class="card h-100 p-5">
                        <div class="service-header d-flex">
                            <div class="service-icon rounded-4">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="service-meta">
                                <h3 class="service-title mb-2">Recording Bank Charges, Interest, and Automatic
                                    Transactions
                                </h3>
                                <span class="service-tag badge rounded-pill secondary-bg">Complete Capture</span>
                            </div>
                        </div>
                        <p class="service-description fw-semibold">
                            We capture all bank-initiated entries often missed in manual records.
                        </p>
                    </div>
                </div>

                <!-- Error Detection -->
                <div class="col-lg-6">
                    <div class="card h-100 p-5">
                        <div class="service-header d-flex">
                            <div class="service-icon rounded-4">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="service-meta">
                                <h3 class="service-title mb-2">Detecting Errors or Unauthorized Activity</h3>
                                <span class="service-tag badge rounded-pill secondary-bg">Fraud Prevention</span>
                            </div>
                        </div>
                        <p class="service-description fw-semibold">
                            We spot mistakes, fraud, or duplicate entries to protect your business.
                        </p>
                    </div>
                </div>

                <!-- Accurate Closing Balances -->
                <div class="col-lg-12">
                    <div class="card h-100 p-5 featured-service">
                        <div class="service-header d-flex">
                            <div class="service-icon rounded-4">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="service-meta">
                                <h3 class="service-title mb-2">Ensuring Accurate Closing Balances</h3>
                                <span class="service-tag badge rounded-pill secondary-bg">Perfect Balance</span>
                            </div>
                        </div>
                        <p class="service-description fw-semibold">
                            We verify your adjusted book balance matches your bank for each period.
                        </p>
                        <div class="balance-verification row">
                            <div class="verification-step col-4 d-flex gap-2">
                                <div class="step-number secondary-bg d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 40px;height: 40px;">1</div>
                                <div class="step-content">
                                    <h5 class="mb-0">Adjust Book Balance</h5>
                                    <p class="text-muted fw-semibold">Apply bank charges, interest, and corrections</p>
                                </div>
                            </div>
                            <div class="verification-step col-4 d-flex gap-2">
                                <div class="step-number secondary-bg d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 40px;height: 40px;">2</div>
                                <div class="step-content">
                                    <h5 class="mb-0">Verify Bank Balance</h5>
                                    <p class="text-muted fw-semibold">Account for outstanding items and deposits</p>
                                </div>
                            </div>
                            <div class="verification-step col-4 d-flex gap-2">
                                <div class="step-number secondary-bg d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 40px;height: 40px;">3</div>
                                <div class="step-content">
                                    <h5 class="mb-0">Confirm Match</h5>
                                    <p class="text-muted fw-semibold">Ensure both balances are identical</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <?php
    @include 'includes/software.php';
    @include 'includes/blogs.php';
    @include 'includes/contact.php';
    @include 'includes/footer.php';
    ?>

</body>

</html>