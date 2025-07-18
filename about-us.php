<!doctype html>
<html lang="en">

<?php
$title = "About Us";
@include 'includes/head.php';
?>

<body>

    <header class="about-header">
        <div class="container py-4">
            <nav class="d-none d-md-block">
                <div class="d-flex justify-content-end align-content-center">
                    <a href="tel:+91 9310598455"
                        class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3">+91
                        93105 98455</a>
                    <a href="tel:+91 7201800394"
                        class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3">+91
                        72018 00394</a>
                    <a href="mailto:info@acculedgerkpo.com"
                        class="rounded-pill primary-badge text-decoration-none fs-14 px-3">info@acculedgerkpo.com</a>
                </div>
            </nav>
            <div class="d-none d-lg-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="./" class="text-decoration-none p-2 ">
                        <img src="assets/images/logo/logo-2.png" alt="Logo" class="img-fluid " width="150" height="150">
                    </a>
                </div>
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active text-white px-3 text-shadow " aria-current="page"
                                    href="./">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white px-3 text-shadow " href="about-us">About Us</a>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link px-3 dropdown-toggle text-white" href="#" id="servicesDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu px-3" aria-labelledby="resourcesDropdown">
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="bookkeeping-and-accounting">
                                            <i class="fas fa-file-invoice primary-color fs-4"></i> &nbsp; Bookkeeping and Accounting Services</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="us-taxation">
                                            <i class="fas fa-users-cog primary-color fs-4"></i>&nbsp; US Taxation Services</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="payroll">
                                            <i class="fas fa-chart-line primary-color fs-4"></i>&nbsp; Payroll Services</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="sale-tax"><i class="fas fa-money-check-alt primary-color fs-4"></i>&nbsp; Sale Tax Services</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="bank-account-reconcillation"> <i class="fas fa-clipboard-check primary-color fs-4"></i>&nbsp; Reconciliation Services</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="ar-ap-management"> <i class="fas fa-chart-bar primary-color fs-4"></i>&nbsp; AR & AP Management</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="year-end"> <i class="fas fa-file-alt primary-color fs-4"></i>&nbsp; Year End Services</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="audit-assurance"><i class="fas fa-search primary-color fs-4"></i>&nbsp; Audit and Assurance</a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="virtual-cfo"><i class="fas fa-user-tie primary-color fs-4"></i>&nbsp; Virtual CFO </a></li>
                                    <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="management-consultation"><i class="fas fa-comments primary-color fs-4"></i>&nbsp; Management Consultation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white px-3 text-shadow" href="#"
                                    id="resourcesDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Resources
                                </a>
                                <ul class="dropdown-menu px-3" aria-labelledby="resourcesDropdown">
                                    <li class=" p-1">
                                        <a class="dropdown-item bg-light p-2 rounded" href="blogs">
                                            <i class="bi bi-journal-text primary-color fs-4"></i>&nbsp; Blog
                                        </a>
                                    </li>
                                    <li class=" p-1">
                                        <a class="dropdown-item bg-light p-2 rounded" href="faq">
                                            <i class="bi bi-question-circle primary-color fs-4"></i>&nbsp; FAQ
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="text-white px-3 btn primary-btn rounded-pill" href="contact-us"> Let's Connect</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Mobile Navbar (Offcanvas) -->
            <nav class="d-lg-none">
                <div class="d-flex justify-content-between align-items-center py-2">
                    <div class="logo">
                        <a href="./" class="text-decoration-none p-2">
                            <img src="assets/images/logo/logo-2.png" alt="Logo" class="img-fluid" width="130" height="130">
                        </a>
                    </div>
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                        <i class="bi bi-list text-white" id="mobile-burger"></i>
                    </button>
                </div>
            </nav>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="mobileServicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu px-3" aria-labelledby="resourcesDropdown">
                                <li class=" p-1"><a class="dropdown-item bg-light p-2 rounded" href="bookkeeping-and-accounting">
                                        <i class="fas fa-file-invoice primary-color fs-4"></i> &nbsp; Bookkeeping and Accounting Services</a></li>
                                <li class=" p-1"><a class="dropdown-item bg-light p-2 rounded" href="us-taxation">
                                        <i class="fas fa-users-cog primary-color fs-4"></i>&nbsp; US Taxation Services</a></li>
                                <li class=" p-1"><a class="dropdown-item bg-light p-2 rounded" href="payroll">
                                        <i class="fas fa-chart-line primary-color fs-4"></i>&nbsp; Payroll Services</a></li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="sale-tax">
                                        <i class="fas fa-money-check-alt primary-color fs-4"></i>&nbsp; Sale Tax Services</a>
                                </li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="bank-account-reconcillation">
                                        <i class="fas fa-clipboard-check primary-color fs-4"></i>&nbsp; Reconciliation Services</a>
                                </li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="ar-ap-management">
                                        <i class="fas fa-chart-bar primary-color fs-4"></i>&nbsp; AR & AP Management</a>
                                </li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="year-end">
                                        <i class="fas fa-file-alt primary-color fs-4"></i>&nbsp; Year End Services</a>
                                </li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="audit-assurance">
                                        <i class="fas fa-search primary-color fs-4"></i>&nbsp; Audit and Assurance</a>
                                </li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="virtual-cfo">
                                        <i class="fas fa-user-tie primary-color fs-4"></i>&nbsp; Virtual CFO </a>
                                </li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="management-consultation">
                                        <i class="fas fa-comments primary-color fs-4"></i>&nbsp; Management Consultation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="mobileResourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu px-3" aria-labelledby="resourcesDropdown">
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="blogs">
                                        <i class="bi bi-journal-text primary-color fs-4"></i>&nbsp; Blog
                                    </a>
                                </li>
                                <li class=" p-1">
                                    <a class="dropdown-item bg-light p-2 rounded" href="faq">
                                        <i class="bi bi-question-circle primary-color fs-4"></i>&nbsp; FAQ
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="btn primary-btn rounded-pill w-100 my-2" href="contact-us">Let's Connect</a>
                        </li>
                        <li class="nav-item mt-3">
                            <a href="tel:+91 9586745373" class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3 d-block mb-2">+91 95867 45373</a>
                            <a href="tel:+91 7201800394" class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3 d-block mb-2">+91 72018 00394</a>
                            <a href="mailto:info@acculedgerkpo.com" class="rounded-pill primary-badge text-decoration-none fs-14 px-3 d-block">info@acculedgerkpo.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section class="heading-section border-bottom">
        <div class="container py-4 text-center d-flex justify-content-center">
            <h2 class="fs-1 fw-semibold text-black">
                Living with<span id="animatedPart" class="d-inline-block ms-2 primary-color"></span>
            </h2>
        </div>
    </section>

    <section class="our-company-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <p class="primary-color mb-0">Our Company</p>
                    <h3 class="fw-bold mb-4">
                        At ACCULEDGER KPO
                    </h3>
                    <p>
                        Our values revolve around nurturing our people, knowing that their well-being directly empowers
                        us to deliver exceptional service to our clients and make meaningful impacts within our
                        community. Every interaction reflects our unwavering commitment to these core values, mission,
                        and vision creating a virtuous cycle of care and success for all stakeholders.
                    </p>

                    <p>
                        With a strong presence supporting U.S. based CPAs, EAs, and accounting firms, <span class="primary-color">ACCULEDGER KPO</span>
                        was founded on principles of trust, empathy, connection, unity, and professionalism. We take
                        pride in being a trusted outsourcing partner, dedicated to helping businesses and individuals
                        thrive.
                    </p>
                </div>
                <div class="col-md-5 col-12 p-5 text-center" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/logo/about-logo.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="team-excursion-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 d-none d-md-block" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/images/our-team-journey.png"
                        class="img-fluid" alt="">
                </div>

                <div class="col-md-6 col-12" data-aos="fade-left" data-aos-duration="1000">
                    <p class="primary-color mb-0">Team Excursion</p>
                    <h3 class="fw-bold mb-4">
                        Our team’s journey
                    </h3>
                    <p>
                        Trough the dynamic world of accounting and taxation has forged unmatched expertise and insight.
                        Each member brings deep experience in outsourced accounting and tax preparation, dedicated to
                        delivering clarity and actionable intelligence for your financial operations.
                    </p>
                    <p>
                        At <span class="primary-color">ACCULEDGER KPO</span>, we believe transparency is more than a feature it’s the
                        foundation of
                        trust and reliability. We combine vigilant oversight with strategic perspective, ensuring every
                        step aligns with your firm’s broader goals. Our partnership approach means we’re not just
                        managing numbers we’re safeguarding your business’s financial health.
                        By providing enhanced transparency and control.
                    </p>

                    <p>
                        We empower you to concentrate on growth and client success while we expertly handle the
                        complexities of accounting and tax preparation.
                    </p>
                </div>

                <div class="col-md-6 col-12 d-md-none" data-aos="fade-up" data-aos-duration="1000">
                    <img src="assets/images/our-team-journey.png"
                        class="img-fluid" alt="">
                </div>


            </div>
        </div>
    </section>

    <section class="vision-mission-section py-5 bg-light">
        <div class="container py-5">

            <!-- Vision and Mission Cards -->
            <div class="row g-4">
                <!-- Vision Card -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="vision-mission-card">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="card-title">Our Vision</h3>
                        <div class="card-content">
                            At <span class="primary-color">Acculedger KPO</span>, we aim to become a trusted global
                            partner in outsourced accounting and financial services. Our goal is to deliver exceptional
                            quality, uphold strong values, and make a meaningful difference for CPAs, accounting firms,
                            and businesses worldwide.
                            <br><br>
                            We strive to empower our clients with smarter solutions that boost efficiency, adaptability,
                            and long-term success in today's changing financial world.
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="vision-mission-card">
                        <div class="card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="card-title">Our Mission</h3>
                        <div class="card-content">
                            At <span class="primary-color">Acculedger KPO</span>, our mission is to deliver
                            accurate, timely, and cost-effective outsourced accounting and financial solutions. We are
                            dedicated to supporting CPAs, accounting firms, and businesses by providing reliable
                            services that enhance productivity and help navigate the complexities of today's financial
                            environment.
                            <br><br>
                            With integrity and a client-first approach, we strive to build lasting partnerships that
                            drive growth and success.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    @include('includes/stats.php');
    ?>

    <section>
        <div class="container py-5">

            <div class="row">
                <div class="col-12">
                    <p class="section-subtitle mb-0 primary-color">Acculedger KPO </p>
                    <h2 class="section-title text-black">Workflow Process</h2>
                </div>
            </div>


            <div class="procedures-wrapper py-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="timeline-container">
                    <!-- Main timeline line -->
                    <div class="timeline-line"></div>

                    <!-- Timeline dots between circles -->
                    <div class="timeline-dot dot-1"></div>
                    <div class="timeline-dot dot-2"></div>
                    <div class="timeline-dot dot-3"></div>
                    <div class="timeline-dot dot-4"></div>

                    <!-- Step 1 -->
                    <div class="step">
                        <div class="content-above">
                            <div class="step-title">01 | Remote Access / Cloud Access</div>
                            <div class="step-description">We request secure cloud or remote server access where source
                                documents are scanned and uploaded for processing.</div>
                        </div>
                        <div class="connector-top"></div>
                        <div class="connector-dot-top"></div>
                        <div class="step-circle">01</div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step">
                        <div class="step-circle">02</div>
                        <div class="connector-bottom"></div>
                        <div class="connector-dot-bottom"></div>
                        <div class="content-below">
                            <div class="step-title">02 | Download</div>
                            <div class="step-description">Our team securely downloads the source documents and stores
                                them on a protected cloud-based server for seamless access and processing.</div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="step">
                        <div class="content-above">
                            <div class="step-title">03 | Processing</div>
                            <div class="step-description">Your documents are handled by our skilled and experienced
                                team, ensuring accuracy and compliance at every stage.
                            </div>
                        </div>
                        <div class="connector-top"></div>
                        <div class="connector-dot-top"></div>
                        <div class="step-circle">03</div>
                    </div>

                    <!-- Step 4 -->
                    <div class="step">
                        <div class="step-circle">04</div>
                        <div class="connector-bottom"></div>
                        <div class="connector-dot-bottom"></div>
                        <div class="content-below">
                            <div class="step-title">04 | Review</div>
                            <div class="step-description">A thorough review is conducted by our in-house team of
                                certified Public Accountant and Chartered Accountant ensure the highest standards of quality and
                                compliance.</div>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="step">
                        <div class="content-above">
                            <div class="step-title">05 | Upload</div>
                            <div class="step-description">Once finalized, the completed documents are uploaded back to
                                your preferred cloud software or remote terminal as required.</div>
                        </div>
                        <div class="connector-top"></div>
                        <div class="connector-dot-top"></div>
                        <div class="step-circle">05</div>
                    </div>

                    <!-- Step 6 -->
                    <div class="step">
                        <div class="step-circle">06</div>
                        <div class="connector-bottom"></div>
                        <div class="connector-dot-bottom"></div>
                        <div class="content-below">
                            <div class="step-title">06 | Feedback</div>
                            <div class="step-description">We highly value ongoing collaboration. Monthly or regular
                                feedback meetings help us continuously align our services with your evolving business
                                needs.</div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Timeline -->
                <div class="mobile-timeline">
                    <div class="mobile-step">
                        <div class="mobile-step-circle">01</div>
                        <div class="mobile-step-content">
                            <div class="mobile-step-title">01 | Remote Access / Cloud Access</div>
                            <div class="mobile-step-description">We request secure cloud or remote server access where
                                source
                                documents are scanned and uploaded for processing.</div>
                        </div>
                    </div>

                    <div class="mobile-step">
                        <div class="mobile-step-circle">02</div>
                        <div class="mobile-step-content">
                            <div class="mobile-step-title">02 | Download</div>
                            <div class="mobile-step-description">Our team securely downloads the source documents and
                                stores
                                them on a protected cloud-based server for seamless access and processing.</div>
                        </div>
                    </div>

                    <div class="mobile-step">
                        <div class="mobile-step-circle">03</div>
                        <div class="mobile-step-content">
                            <div class="mobile-step-title">03 | Processing</div>
                            <div class="mobile-step-description">Your documents are handled by our skilled and
                                experienced
                                team, ensuring accuracy and compliance at every stage.</div>
                        </div>
                    </div>

                    <div class="mobile-step">
                        <div class="mobile-step-circle">04</div>
                        <div class="mobile-step-content">
                            <div class="mobile-step-title">04 | Review</div>
                            <div class="mobile-step-description">A thorough review is conducted by our in-house team of
                                proficient Chartered Accountants to ensure the highest standards of quality and
                                compliance.</div>
                        </div>
                    </div>

                    <div class="mobile-step">
                        <div class="mobile-step-circle">05</div>
                        <div class="mobile-step-content">
                            <div class="mobile-step-title">05 | Upload</div>
                            <div class="mobile-step-description">Once finalized, the completed documents are uploaded
                                back to
                                your preferred cloud software or remote terminal as required.</div>
                        </div>
                    </div>

                    <div class="mobile-step">
                        <div class="mobile-step-circle">06</div>
                        <div class="mobile-step-content">
                            <div class="mobile-step-title">06 | Feedback</div>
                            <div class="mobile-step-description">We highly value ongoing collaboration. Monthly or
                                regular
                                feedback meetings help us continuously align our services with your evolving business
                                needs.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="security-controls-section py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/images/security-controls.png"
                        class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-12" data-aos="fade-left" data-aos-duration="1000">
                    <p class="primary-color mb-0">Security Controls</p>
                    <h3 class="fw-bold mb-4">
                        At <span class="primary-color">Acculedger KPO</span>, data protection is our top priority.
                    </h3>

                    <p>
                        As an <b>ISO 27001:2013 certified</b> organization, we implement comprehensive security
                        protocols to
                        ensure the confidentiality, integrity, and availability of your sensitive information.
                    </p>

                    <div class="security-measures mt-4">
                        <h5 class="fw-bold mb-3">Our Key Security Measures Include:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fa-regular fa-square-check primary-color"></i> <b>Device Restrictions</b>
                            </li>
                            <li class="mb-2">
                                <i class="fa-regular fa-square-check primary-color"></i> <b>24×7 CCTV
                                    Surveillance</b>
                            </li>
                            <li class="mb-2">
                                <i class="fa-regular fa-square-check primary-color"></i> <b>Biometric Access
                                    Control</b>
                            </li>
                            <li class="mb-2">
                                <i class="fa-regular fa-square-check primary-color"></i> <b>Restricted Internet &amp;
                                    Email Access</b>
                            </li>
                            <li class="mb-2">
                                <i class="fa-regular fa-square-check primary-color"></i> <b>Disabled External
                                    Drives</b>
                            </li>
                            <li class="mb-2">
                                <i class="fa-regular fa-square-check primary-color"></i> <b>Locker Facility for Personal
                                    Belongings</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-location-section py-5">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="primary-color mb-0">Our Location</h2>
                    <h5 class="fs-4 mb-4 text-white">
                        Global Presence, Regional Expertise
                    </h5>
                    <p class="text-white mb-0">
                        With our headquarters and strategic offices worldwide, <span class="primary-color">ACCULEDGER KPO</span> delivers remote
                        bookkeeping and accounting services that blend global reach with localized expertise ensuring we
                        meet the unique needs of each client with precision and care.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section py-5">
        <div class="container py-5">

            <p class="primary-color mb-0">Leadership Team Brief</p>
            <h3 class="fw-bold mb-4">
                Guided by Visionary Leaders
            </h3>
            <div class="team-slider" data-aos="fade-up" data-aos-duration="1000">
                <?php
                // Fetch member
                $sql = "SELECT * FROM team";
                $result = mysqli_query($conn, $sql);
                while ($member = mysqli_fetch_assoc($result)):
                ?>
                    <div class="team-card text-center p-3 d-flex flex-column align-items-center">
                        <img src="admin/<?php echo $member['profile'] ?>"
                            class="rounded-circle mb-3 mx-auto d-block img-fluid shadow" alt="CA Meet Boghan">
                        <h5 class="fw-bold mb-1"><?php echo $member['name'] ?></h5>
                        <p class="text-muted mb-0"><?php echo $member['designation'] ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="sustainability-section py-5 bg-light">
        <div class="container py-5 content-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-8 col-12 text-center text-light">
                    <h3 class="mb-0 fw-bold">Sustainability</h3>
                    <p class="fs-4 fw-bold mb-4">
                        "Commitment to a Greener Tomorrow"
                    </p>
                    <p class="mb-0">
                        At ACCULEDGER KPO, our sustainability practices embody our dedication to environmental
                        responsibility. We strive to implement eco-friendly operations that reduce our carbon footprint
                        and promote a healthier planet for future generations.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php
    @include 'includes/contact.php';
    @include 'includes/footer.php';
    ?>

    <script>
        const words = [
            "Honesty",
            "Care",
            "Relationships",
            "Togetherness",
            "Respect"
        ];

        const animatedPart = document.getElementById("animatedPart");
        let wordIndex = 0;

        function animateWord() {
            animatedPart.innerHTML = ""; // Clear previous word
            const word = words[wordIndex];

            word.split("").forEach((char, i) => {
                const span = document.createElement("span");
                span.textContent = char;
                span.className = "animated-letter";
                animatedPart.appendChild(span);
                setTimeout(() => span.classList.add("visible"), i * 60); // animate one by one
            });

            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(animateWord, word.length * 60 + 2000); // delay before switching to next
        }

        animateWord();
    </script>

    <script>
        $(document).ready(function() {
            $('.team-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            arrows: false,
                            dots: true,
                        }
                    }
                ]
            });
        });
    </script>


</body>

</html>