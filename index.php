<!doctype html>
<html lang="en">

<?php
$title = "Home";
include('includes/head.php');
?>

<body>

    <header>
        <div class="container-fluid header">
            <video autoplay muted loop playsinline class="w-100 z-n1">
                <source src="assets/video/home.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container vh-100 position-relative">

                <div class="container py-4">
                    <nav>
                        <div class="d-flex justify-content-end align-content-center">
                            <a href="tel:+91 9586745373"
                                class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3">+91
                                9586745373</a>
                            <a href="mailto:boghanimeet123@gmail.com"
                                class="rounded-pill primary-badge text-decoration-none fs-14 px-3">boghanimeet123@gmail.com</a>
                        </div>
                    </nav>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html" class="text-decoration-none p-2 ">
                                <img src="assets/images/logo/logo.png" alt="Logo" class="img-fluid " width="80"
                                    height="80">
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
                                            href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white px-3 text-shadow " href="about-us">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown">
                                        <a class="nav-link px-3 dropdown-toggle text-white" href="#" id="servicesDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                                            <li><a class="dropdown-item" href="bookkeeping-outsourcing">Bookkeeping</a></li>
                                            <li><a class="dropdown-item" href="us-taxation">US Taxation</a></li>
                                            <li><a class="dropdown-item" href="payroll">Payroll</a></li>
                                            <li><a class="dropdown-item" href="sale-tax">Sale Tax</a></li>
                                            <li><a class="dropdown-item" href="bank-account-reconcillation">Bank Account Reconciliation</a></li>
                                            <li><a class="dropdown-item" href="ar-ap-management">AR & AP Management</a></li>
                                            <li><a class="dropdown-item" href="year-end">Year End Services</a></li>
                                            <li><a class="dropdown-item" href="audit-assurance">Audit and Assurance</a></li>
                                            <li><a class="dropdown-item" href="xero-and-quickBooks-accounting">Xero and QuickBooks Accounting</a></li>
                                        </ul>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white px-3 text-shadow" href="#"
                                            id="resourcesDropdown" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Resources
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                                            <li><a class="dropdown-item" href="blogs">Blog</a></li>
                                            <li><a class="dropdown-item" href="faq">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-white px-3 btn primary-btn rounded-pill"
                                            href="contact-us.html">Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header-content position-absolute ">

                        <h2 class="fw-semibold text-white" data-aos="fade-in" data-aos-duration="1000">
                            Precision Driven <br>
                            Partners For <span id="animatedPart" class="d-inline-block animate-text-color"></span>
                        </h2>
                    </div>
                </div>

                <!-- Service Carousel Positioned Bottom Right -->
                <div class="service-carousel">
                    <div class="service-slick">
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color">Bookkeeping Services</div>
                                <p class="card-text">Complete support for your business's bookkeeping needs.</p>
                                <a href="bookkeeping-outsourcing" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">US
                                    Taxation Services</div>
                                <p class="card-text">Navigate tax season effortlessly with our expert outsourcing
                                    services.</p>
                                <a href="us-taxation" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">
                                    Payroll Services</div>
                                <p class="card-text">Seamless payroll outsourcing services tailored to your business.
                                </p>
                                <a href="payroll" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">
                                    Sale Tax Services</div>
                                <p class="card-text">Navigate tax season effortlessly with our expert outsourcing
                                    services.</p>
                                <a href="sale-tax" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">
                                    Bank Account Reconciliation</div>
                                <p class="card-text">Ensure accuracy and transparency in your financial records.</p>
                                <a href="bank-account-reconcillation" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">AR
                                    & AP Management</div>
                                <p class="card-text">Streamline your cash flow with our AR & AP management services.</p>
                                <a href="ar-ap-management" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">
                                    Year End Services</div>
                                <p class="card-text">Simplify your financial closing process and seamlessly transition into the new fiscal year.</p>
                                <a href="year-end" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">
                                    Audit and Assurance</div>
                                <p class="card-text">As a trusted outsourcing partner, we offer reliable audit and assurance services.</p>
                                <a href="audit-assurance" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">
                                    Xero and QuickBooks Accounting</div>
                                <p class="card-text">We specialize in Xero and QuickBooks – the most trusted cloud-based accounting</p>
                                <a href="xero-and-quickBooks-accounting" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container py-5 about-us-section">
        <div class="row align-items-center content-wrapper">
            <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-right"
                data-aos-duration="1000">
                <video src="assets/video/about.mp4" autoplay muted loop class="w-100"></video>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <p class="primary-color mb-0">ACCULEDGER KPO</p>
                <h3 class="fw-bold mb-4">
                    Powering U.S. Accounting Firms with Expert Offshore Solutions
                </h3>
                <p>
                    For nearly two decades, <span class="primary-color">ACCULEDGER KPO </span> has been a trusted
                    ally to U.S.-based CPAs, EAs, and
                    accounting firms seeking efficient, compliant, and scalable outsourcing solutions. Our purpose is
                    clear: to empower your firm to focus on deepening client relationships and driving strategic growth,
                    while we seamlessly handle your accounting and tax back-office operations.

                </p>
                <p>
                    We combine skilled professionals, streamlined processes, and secure platforms to build a
                    high-performing offshore accounting team that operates as a true extension of your firm. With deep
                    expertise in U.S. GAAP, IRS, AICPA, and state-specific compliance, we ensure your firm is always
                    audit-ready and operationally sound.
                </p>

                <a href="about-us" class="btn primary-bg rounded-pill px-4 py-2">
                    Read more
                </a>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container">
            <div class="stats-content">
                <h2 class="section-title mb-0 animate-text-color">By the Numbers</h2>
                <p class=" text-white section-description">Your Proof of Partnership</p>

                <div class="row g-4">
                    <div class="col-lg col-md-6 col-sm-6">
                        <div class="stat-item">
                            <div class="stat-number counter" data-target="350">0</div>
                            <div class="stat-label">Clients<br>Globally</div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6">
                        <div class="stat-item">
                            <div class="stat-number counter" data-target="19">0</div>
                            <div class="stat-label">Years of<br>experience</div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6">
                        <div class="stat-item">
                            <div class="stat-number counter" data-target="500">0</div>
                            <div class="stat-label">Talented<br>Professional</div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6">
                        <div class="stat-item">
                            <div class="stat-number counter" data-target="65">0</div>
                            <div class="stat-label">Referral<br>Business</div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6">
                        <div class="stat-item">
                            <div class="stat-number counter" data-target="100">0</div>
                            <div class="stat-label">Paperless<br>Commitment</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-with-us-section py-5">
        <div class="container content-wrapper">
            <div class="row align-items-center">
                <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <p class="primary-color mb-0">Work with us</p>
                    <h3 class="fw-bold mb-4">
                        The Joy of Working with Us Never Fades — Because We Truly Care
                    </h3>
                    <p>
                        At <span class="primary-color">ACCULEDGER KPO</span> , we go beyond outsourcing we become an integral part of your firm’s
                        journey. Backed by years of experience serving U.S. based CPAs, EAs, and CMAs, we empower your
                        practice to scale efficiently, cut operational costs, and maintain full compliance in an
                        ever-changing financial environment. With us, you gain more than a service provider you gain a
                        partner invested in your success.
                    </p>
                </div>
                <div class="col-md-6 col-12" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/work-with-us.png" class="img-fluid rounded" alt="">
                </div>

                <div class="col-12 py-5">
                    <div class="features-container">
                        <!-- DATA SECURITY -->
                        <div class="feature-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-circle">
                                <i class="bi bi-shield-shaded fs-1 primary-color"></i>
                            </div>
                            <div class="feature-title">DATA SECURITY</div>
                        </div>

                        <!-- IN-HOUSE WORK -->
                        <div class="feature-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-circle">
                                <i class="bi bi-person-workspace fs-1 primary-color"></i>
                            </div>
                            <div class="feature-title">IN-HOUSE WORK</div>
                        </div>

                        <!-- ONLINE TIME TRACKING -->
                        <div class="feature-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-circle">
                                <i class="bi bi-stopwatch fs-1 primary-color"></i>
                            </div>
                            <div class="feature-title">ONLINE TIME TRACKING</div>
                        </div>

                        <!-- QUALITY ASSURANCE -->
                        <div class="feature-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-circle">
                                <i class="bi bi-award fs-1 primary-color"></i>
                            </div>
                            <div class="feature-title">QUALITY ASSURANCE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-section py-5 bg-light">
        <div class="container content-wrapper">
            <div class="row" data-aos="fade-zoom-in" data-aos-duration="1000">
                <div class="col-12">
                    <p class="section-subtitle primary-color mb-0">Our Core Services</p>
                    <h2 class="section-title text-black mb-1">Built for U.S. Accounting Professionals</h2>
                    <p class="section-description">
                        Helping CPAs, EAs, and CMAs scale effortlessly<br>
                        with accurate, compliant, and cost-effective offshore solutions.
                    </p>
                </div>
            </div>

            <div class="services-grid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <h3 class="service-title">Bookkeeping Services </h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <h3 class="service-title">US Taxation Services</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="service-title">Payroll Services</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-money-check-alt"></i>
                            </div>
                            <h3 class="service-title">Sale Tax Services</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h3 class="service-title">Bank Account Reconciliation</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h3 class="service-title">AR & AP Management</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h3 class="service-title">Year End Services</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h3 class="service-title">Audit and Assuranc</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h3 class="service-title"> Xero and QuickBooks Accounting</h3>
                        </div>
                    </div>

                    <!-- <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-end" data-aos="fade-left"
                        data-aos-duration="1000">
                        <a href="" class="view-all-btn w-100">View All</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="commitment-section py-5">
        <div class="container content-wrapper py-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 px-5" data-aos="fade-up" data-aos-duration="1000">
                    <p class="primary-color mb-0">Our Commitment to Security</p>
                    <h3 class="fw-bold mb-4">
                        Unwavering Focus on Data Security & Confidentiality
                    </h3>
                    <p>
                        At <span class="primary-color">ACCULEDGER KPO </span>, data protection isn’t just a priority — it’s a promise. Our ISO/IEC
                        27001:2022 certification reflects our rigorous approach to safeguarding sensitive client
                        information across all digital and physical touchpoints. You can trust that your data is managed
                        with integrity, discretion, and the highest industry standards — every step of the way.
                    </p>

                </div>
                <div class="col-md-6 col-12">
                    <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                        <img src="assets/images/iso logo/1.png" class="img-fluid rounded-circle me-2" alt="">
                        <img src="assets/images/iso logo/2.png" class="img-fluid rounded-circle" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Software-section py-5 bg-light">
        <div class="container content-wrapper py-5">
            <div class="row align-items-center">
                <div class="col-6 px-5" data-aos="fade-zoom-in" data-aos-duration="1000">
                    <p class="primary-color mb-0">Software’s</p>
                    <h3 class="fw-bold mb-4">
                        Latest and Next-Gen Solutions Tailored to Your Needs
                    </h3>
                    <p>
                        We partner with all leading accounting, tax, and payroll platforms to deliver seamless
                        integration with your existing systems — ensuring smooth workflows, enhanced accuracy, and
                        real-time collaboration.
                    </p>

                </div>

                <div class="col-12">
                    <div class="logo-marquee d-flex justify-content-center align-items-center">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Logo slides -->
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/1.png" class="img-fluid" alt="Google">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/2.png" class="img-fluid" alt="Microsoft">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/3.png" class="img-fluid" alt="Apple">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/4.png" class="img-fluid" alt="Amazon">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/5.png" class="img-fluid" alt="Facebook">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/6.png" class="img-fluid" alt="Netflix">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/7.png" class="img-fluid" alt="Tesla">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/8.png" class="img-fluid" alt="IBM">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/9.png" class="img-fluid" alt="Intel">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/10.png" class="img-fluid" alt="Oracle">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/11.png" class="img-fluid" alt="Oracle">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/12.png" class="img-fluid" alt="Oracle">
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">
                                    <img src="assets/images/company-logo/13.png" class="img-fluid" alt="Oracle">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="testimonials-section py-5 ">
        <div class="container content-wrapper">
            <div class="section-title">
                <div class="section-subtitle mb-0 primary-color">What Our</div>
                <h2 class="section-main-title text-black">Clients Say</h2>
            </div>

            <div class="testimonials-slider">
                <!-- Testimonial 1 -->
                <div class="card p-5 m-2 border-0 bg-light">
                    <h3 class="client-name mb-0">Frank Stitely</h3>
                    <p class="client-company">SK CPAs and Business Advisors PLLC</p>
                    <p class="testimonial-text">
                        We have been working with Unison Globus for 5 years. We are impressed with the
                        diligence and knowledge of our Unison Staff. They are an essential part of our
                        operations. We rely on them for both tax return preparation and in support of our
                        client accounting services. They are such a part of us that we couldn't operate without
                        them. Beyond the value of their professional contributions, we value their friendship.
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="card p-5 m-2 border-0 bg-light">
                    <h3 class="client-name mb-0">Joe Hopkins</h3>
                    <p class="client-company">Hopkins CPA Firm P.C</p>
                    <p class="testimonial-text">
                        Excellent Excellent Excellent. The tax return preparation & bookkeeping services
                        provided by Unison Globus are far superior to any other competitor services. Their
                        team provides detailed excel spreadsheet reconciliation to support the timely tax
                        return processing. Being in the tax resolution business myself as a CPA I trust
                        the Unison team to produce sometimes as many as 10 tax returns for a single client.
                        Unison is a proven service with vetted employees and a top-notch security policy.
                        DO NOT GO ANYWHERE ELSE. Trust me
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="card p-5 m-2 border-0 bg-light">
                    <h3 class="client-name mb-0">Snehal Patel, Accountant</h3>
                    <p class="client-company">Tax & Business Solutions, CPA & Co., LLC</p>
                    <p class="testimonial-text">
                        Working with Unison Globus has been the most rewarding experience I've
                        encountered with an international team. The remote accountant I collaborated with
                        blends effortlessly into our firm, truly becoming part of the team.
                    </p>
                </div>

                <!-- Testimonial 4 -->
                <div class="card p-5 m-2 border-0 bg-light">
                    <h3 class="client-name mb-0">Snehal Patel, Accountant</h3>
                    <p class="client-company">Tax & Business Solutions, CPA & Co., LLC</p>
                    <p class="testimonial-text">
                        Working with Unison Globus has been the most rewarding experience I've
                        encountered with an international team. The remote accountant I collaborated with
                        blends effortlessly into our firm, truly becoming part of the team.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <?php
    @include 'includes/blog.php';
    @include 'includes/contact.php';
    @include 'includes/footer.php';
    ?>

    <script>
        const words = [
            "Finance",
            "Accounting",
            "Outsourcing",
            "Tax",
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>