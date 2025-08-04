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
            <div class="container vh-100 position-relative px-0">

                <div class="container py-4 px-0">
                    <nav class="d-none d-lg-block">
                        <div class="d-flex justify-content-end align-content-center">
                            <a href="tel:+91 9586745373"
                                class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3">+91
                                95867 45373</a>
                            <a href="tel:+91 7201800394"
                                class="rounded-pill primary-badge text-decoration-none me-2 fs-14 px-3">+91
                                72018 00394</a>
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
                                    <!-- Mobile Dropdown (unchanged, for mobile only) -->
                                    <li class="nav-item dropdown d-lg-none">
                                        <a class="nav-link dropdown-toggle" href="#" id="mobileServicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu px-3" aria-labelledby="mobileServicesDropdown">
                                            <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="bookkeeping-and-accounting">
                                                    <i class="fas fa-file-invoice primary-color fs-4"></i> &nbsp; Bookkeeping and Accounting Services</a></li>
                                            <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="us-taxation">
                                                    <i class="fas fa-users-cog primary-color fs-4"></i>&nbsp; US Taxation Services</a></li>
                                            <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="payroll">
                                                    <i class="fas fa-chart-line primary-color fs-4"></i>&nbsp; Payroll Services</a></li>
                                            <li class="mb-2 p-1">
                                                <a class="dropdown-item bg-light p-2 rounded" href="sale-tax">
                                                    <i class="fas fa-money-check-alt primary-color fs-4"></i>&nbsp; Sale Tax Services</a>
                                            </li>
                                            <li class="mb-2 p-1">
                                                <a class="dropdown-item bg-light p-2 rounded" href="bank-account-reconcillation">
                                                    <i class="fas fa-clipboard-check primary-color fs-4"></i>&nbsp; Reconciliation Services</a>
                                            </li>
                                            <li class="mb-2 p-1">
                                                <a class="dropdown-item bg-light p-2 rounded" href="ar-ap-management">
                                                    <i class="fas fa-chart-bar primary-color fs-4"></i>&nbsp; AR & AP Management</a>
                                            </li>
                                            <li class="mb-2 p-1">
                                                <a class="dropdown-item bg-light p-2 rounded" href="year-end">
                                                    <i class="fas fa-file-alt primary-color fs-4"></i>&nbsp; Year End Services</a>
                                            </li>
                                            <li class="mb-2 p-1">
                                                <a class="dropdown-item bg-light p-2 rounded" href="audit-assurance">
                                                    <i class="fas fa-search primary-color fs-4"></i>&nbsp; Audit and Assurance</a>
                                            </li>
                                            <li class="mb-2 p-1">
                                                <a class="dropdown-item bg-light p-2 rounded" href="virtual-cfo">
                                                    <i class="fas fa-user-tie primary-color fs-4"></i>&nbsp; Virtual CFO </a>
                                            </li>
                                            <li class="mb-2 p-1">
                                                <a class="dropdown-item bg-light p-2 rounded" href="management-consultation">
                                                    <i class="fas fa-comments primary-color fs-4"></i>&nbsp; Management Consultation</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Desktop Services Mega Dropdown (visible only on lg and up) -->
                                    <li class="nav-item dropdown d-none d-lg-block">
                                        <a class="nav-link dropdown-toggle text-white px-3 text-shadow" href="#" id="desktopServicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Services
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="desktopServicesDropdown" style="min-width: 600px;">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded text-truncate" href="bookkeeping-and-accounting">
                                                                <i class="fas fa-file-invoice primary-color fs-4"></i> &nbsp; Bookkeeping and Accounting Services
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="us-taxation">
                                                                <i class="fas fa-users-cog primary-color fs-4"></i>&nbsp; US Taxation Services
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="payroll">
                                                                <i class="fas fa-chart-line primary-color fs-4"></i>&nbsp; Payroll Services
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="sale-tax">
                                                                <i class="fas fa-money-check-alt primary-color fs-4"></i>&nbsp; Sale Tax Services
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="bank-account-reconcillation">
                                                                <i class="fas fa-clipboard-check primary-color fs-4"></i>&nbsp; Reconciliation Services
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="ar-ap-management">
                                                                <i class="fas fa-chart-bar primary-color fs-4"></i>&nbsp; AR & AP Management
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="year-end">
                                                                <i class="fas fa-file-alt primary-color fs-4"></i>&nbsp; Year End Services
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="audit-assurance">
                                                                <i class="fas fa-search primary-color fs-4"></i>&nbsp; Audit and Assurance
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="virtual-cfo">
                                                                <i class="fas fa-user-tie primary-color fs-4"></i>&nbsp; Virtual CFO
                                                            </a>
                                                        </li>
                                                        <li class="mb-2 p-1">
                                                            <a class="dropdown-item bg-light p-2 rounded" href="management-consultation">
                                                                <i class="fas fa-comments primary-color fs-4"></i>&nbsp; Management Consultation
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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
                                    <ul class="dropdown-menu px-3" aria-labelledby="resourcesDropdown">
                                        <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="bookkeeping-and-accounting">
                                                <i class="fas fa-file-invoice primary-color fs-4"></i> &nbsp; Bookkeeping and Accounting Services</a></li>
                                        <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="us-taxation">
                                                <i class="fas fa-users-cog primary-color fs-4"></i>&nbsp; US Taxation Services</a></li>
                                        <li class="mb-2 p-1"><a class="dropdown-item bg-light p-2 rounded" href="payroll">
                                                <i class="fas fa-chart-line primary-color fs-4"></i>&nbsp; Payroll Services</a></li>
                                        <li class="mb-2 p-1">
                                            <a class="dropdown-item bg-light p-2 rounded" href="sale-tax">
                                                <i class="fas fa-money-check-alt primary-color fs-4"></i>&nbsp; Sale Tax Services</a>
                                        </li>
                                        <li class="mb-2 p-1">
                                            <a class="dropdown-item bg-light p-2 rounded" href="bank-account-reconcillation">
                                                <i class="fas fa-clipboard-check primary-color fs-4"></i>&nbsp; Reconciliation Services</a>
                                        </li>
                                        <li class="mb-2 p-1">
                                            <a class="dropdown-item bg-light p-2 rounded" href="ar-ap-management">
                                                <i class="fas fa-chart-bar primary-color fs-4"></i>&nbsp; AR & AP Management</a>
                                        </li>
                                        <li class="mb-2 p-1">
                                            <a class="dropdown-item bg-light p-2 rounded" href="year-end">
                                                <i class="fas fa-file-alt primary-color fs-4"></i>&nbsp; Year End Services</a>
                                        </li>
                                        <li class="mb-2 p-1">
                                            <a class="dropdown-item bg-light p-2 rounded" href="audit-assurance">
                                                <i class="fas fa-search primary-color fs-4"></i>&nbsp; Audit and Assurance</a>
                                        </li>
                                        <li class="mb-2 p-1">
                                            <a class="dropdown-item bg-light p-2 rounded" href="virtual-cfo">
                                                <i class="fas fa-user-tie primary-color fs-4"></i>&nbsp; Virtual CFO </a>
                                        </li>
                                        <li class="mb-2 p-1">
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

                    <span class="primary-color">ACCULEDGER KPO </span> has been the trusted partner of U.S. based CPAs, EAs, and accounting firms, delivering efficient, compliant, and scalable outsourcing solutions for all businesses. Our mission is to empower your firm to focus on building client relationships and driving growth while we expertly manage your accounting and tax back-office functions.

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
                        <a href="bookkeeping-and-accounting">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <h3 class="service-title">Bookkeeping and Accounting Services</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <a href="us-taxation">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <h3 class="service-title">US Taxation Services</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <a href="payroll">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="service-title">Payroll Services</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <a href="sale-tax">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-money-check-alt"></i>
                                </div>
                                <h3 class="service-title">Sale Tax Services</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <a href="bank-account-reconcillation">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <h3 class="service-title">Reconciliation Services</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <a href="ar-ap-management">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <h3 class="service-title">AR & AP Management</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <a href="year-end">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <h3 class="service-title">Year End Services</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <a href="audit-assurance">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3 class="service-title">Audit and Assurance</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <a href="virtual-cfo">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3 class="service-title"> Virtual CFO</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <a href="management-consultation">
                            <div class="service-card-2">
                                <div class="service-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h3 class="service-title"> Management Consultation</h3>
                            </div>
                        </a>
                    </div>
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

                <?php
                // Fetch member
                $sql = "SELECT * FROM testimonial";
                $result = mysqli_query($conn, $sql);
                while ($comment = mysqli_fetch_assoc($result)):
                ?>
                    <div class="card p-5 m-2 border-0 bg-light">
                        <h3 class="client-name mb-0"><?php echo $comment['title'] ?></h3>
                        <p class="client-company"><?php echo $comment['subtitle'] ?></p>
                        <p class="testimonial-text">
                            <?php echo $comment['comment'] ?>
                        </p>
                    </div>
                <?php endwhile; ?>

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