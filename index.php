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
                    <nav class="d-none d-lg-block">
                        <div class="d-flex justify-content-end align-content-center">
                            <a href="tel:+91 9586745373"
                                class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3">+91
                                95867 45373</a>
                            <a href="mailto:info@acculedgerkpo.com"
                                class="rounded-pill primary-badge text-decoration-none fs-14 px-3">info@acculedgerkpo.com</a>
                        </div>
                    </nav>
                    <div class="d-lg-flex justify-content-between align-items-center d-none">
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
                                        <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                                            <li class="mb-2"><a class="dropdown-item" href="bookkeeping-and-accounting"><i class="fas fa-file-invoice primary-color fs-4"></i> Bookkeeping and Accounting</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="us-taxation"><i class="fas fa-users-cog primary-color fs-4"></i> US Taxation</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="payroll"> <i class="fas fa-chart-line primary-color fs-4"></i> Payroll</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="sale-tax"><i class="fas fa-money-check-alt primary-color fs-4"></i> Sale Tax</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="bank-account-reconcillation"> <i class="fas fa-clipboard-check primary-color fs-4"></i> Bank Account Reconciliation</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="ar-ap-management"> <i class="fas fa-chart-bar primary-color fs-4"></i> AR & AP Management</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="year-end"> <i class="fas fa-file-alt primary-color fs-4"></i> Year End Services</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="audit-assurance"><i class="fas fa-search primary-color fs-4"></i> Audit and Assurance</a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="virtual-cfo"><i class="fas fa-user-tie primary-color fs-4"></i> Virtual CFO </a></li>
                                            <li class="mb-2"><a class="dropdown-item" href="management-consultation"><i class="fas fa-comments primary-color fs-4"></i> Management Consultation</a></li>
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
                                            href="contact-us"> Let's Connect</a>
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
                                    <ul class="dropdown-menu" aria-labelledby="mobileServicesDropdown">
                                        <li><a class="dropdown-item" href="bookkeeping-and-accounting">Bookkeeping and Accounting</a></li>
                                        <li><a class="dropdown-item" href="us-taxation">US Taxation</a></li>
                                        <li><a class="dropdown-item" href="payroll">Payroll</a></li>
                                        <li><a class="dropdown-item" href="sale-tax">Sale Tax</a></li>
                                        <li><a class="dropdown-item" href="bank-account-reconcillation">Bank Account Reconciliation</a></li>
                                        <li><a class="dropdown-item" href="ar-ap-management">AR & AP Management</a></li>
                                        <li><a class="dropdown-item" href="year-end">Year End Services</a></li>
                                        <li><a class="dropdown-item" href="audit-assurance">Audit and Assurance</a></li>
                                        <li><a class="dropdown-item" href="virtual-cfo">Virtual CFO</a></li>
                                        <li><a class="dropdown-item" href="management-consultation">Management Consultation</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="mobileResourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Resources
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="mobileResourcesDropdown">
                                        <li><a class="dropdown-item" href="blogs">Blog</a></li>
                                        <li><a class="dropdown-item" href="faq">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="btn primary-btn rounded-pill w-100 my-2" href="contact-us">Let's Connect</a>
                                </li>
                                <li class="nav-item mt-3">
                                    <a href="tel:+91 9586745373" class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3 d-block mb-2">+91 95867 45373</a>
                                    <a href="mailto:boghanimeet123@gmail.com" class="rounded-pill primary-badge text-decoration-none fs-14 px-3 d-block">boghanimeet123@gmail.com</a>
                                </li>
                            </ul>
                        </div>
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
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">Bookkeeping and Accounting</div>
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
                                    Virtual CFO</div>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, magnam.</p>
                                <a href="xero-and-quickBooks-accounting" class="service-link fw-bold">
                                    Services Details
                                </a>
                            </div>
                        </div>
                        <div class="p-2 h-100">
                            <div class="card p-3 shadow service-card h-100">
                                <div class="card-title text-start fs-4 animate-text-color text-nowrap text-truncate">
                                    Management Consultation</div>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, atque.</p>
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
            <div class="col-md-6 mt-5 mt-md-0" data-aos="fade-left" data-aos-duration="1000">
                <p class="primary-color mb-0">ACCULEDGER KPO</p>
                <h3 class="fw-bold mb-4">
                    Powering U.S. Accounting Firms with Expert Offshore Solutions
                </h3>
                <p>

                    For nearly two decades, <span class="primary-color">ACCULEDGER KPO </span> has been the trusted partner of U.S. based CPAs, EAs, and accounting firms, delivering efficient, compliant, and scalable outsourcing solutions for all businesses. Our mission is to empower your firm to focus on building client relationships and driving growth while we expertly manage your accounting and tax back-office functions.

                </p>
                <p>
                    Our high-performing offshore teams operate as a seamless extension of your firm, combining skilled talent, optimized workflows, and secure technology. With deep expertise in U.S. GAAP, IRS regulations, and compliance standards for businesses of all sizes and structures, we ensure your firm and your clients stay audit-ready, compliant, and poised for long-term success.
                </p>

                <a href="about-us" class="btn primary-bg rounded-pill px-4 py-2">
                    Read more
                </a>
            </div>
        </div>
    </section>

    <?php
    @include('includes/stats.php');
    ?>

    <section class="work-with-us-section py-5">
        <div class="container content-wrapper">
            <div class="row align-items-center">
                <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <p class="primary-color mb-0">Work with us</p>
                    <h3 class="fw-bold mb-4">
                        The Joy of Working with Us Never Fades Because We Truly Care
                    </h3>
                    <p>
                        At <span class="primary-color">ACCULEDGER KPO</span>, we go beyond traditional outsourcing we become an integral part of your business journey. Backed by years of experience serving U.S. based CPAs, EAs, CMAs, and businesses of all sizes and industries, we empower your operations to scale efficiently, reduce costs, and maintain full compliance in an ever evolving financial landscape. With ACCULEDGER, you gain more than a service provider you gain a strategic partner invested in your long-term success.
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
                            <h3 class="service-title">Bookkeeping and Accounting </h3>
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
                                <i class="fas fa-search"></i>
                            </div>
                            <h3 class="service-title">Audit and Assuranc</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="service-title"> Virtual CFO</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-card-2">
                            <div class="service-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3 class="service-title"> Management Consultation</h3>
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



    <?php
    @include 'includes/software.php';
    ?>

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
    @include 'includes/blogs.php';
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
</body>

</html>