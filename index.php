<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';
include ROOT_PATH . '/elements/map-animate.php'; 
?>

<!-- Hero & Services Intro Section -->
<section class="hero-services-wrapper position-relative overflow-hidden pb-5">
    
    <!-- Decorative Floating Elements (Geometric Shapes) -->
    <div class="shape-top-left d-none d-md-block" data-aos="fade-left" data-aos-delay="150">
        <img src="assets/images/objects/square-triangle.png" alt="Decorative Shape" class="img-fluid">
    </div>
    <div class="shape-mid-left d-none d-sm-block" data-aos="fade-right" data-aos-delay="150">
        <img src="assets/images/objects/haxagone-triangle.png" alt="Decorative Shape" class="img-fluid">
    </div>

    <div class="container text-center mb-5 position-relative z-1">
        <!-- Main Heading -->
        <h1 class="hero-title text-gold fw-bold mb-3">
            <!-- Turning your idea into a successful business -->
        </h1>
        
        <!-- Subheading Description -->
        <p class="hero-subtitle text-secondary mx-auto">
            Global Business Consulting & Company Formation Services
        </p>
    </div>

    <!-- OUR SERVICES Gold Callout Banner -->
    <div class="services-banner-strip bg-gold py-3 py-md-3 text-white">
        <div class="container position-relative z-1">
            <div class="row align-items-center justify-content-center">
                
                <!-- Title Block -->
                <div class="col-12 col-md-4 col-lg-3 text-center text-md-end pe-md-4 mb-3 mb-md-0 border-md-end border-white">
                    <h2 class="services-strip-title text-uppercase mb-0 fw-bold lh-1">
                        OUR<br class="d-none d-md-inline"> SERVICES
                    </h2>
                </div>

                <!-- Description Block -->
                <div class="col-12 col-md-7 col-lg-6 text-center text-md-start ps-md-4">
                    <p class="services-strip-text mb-0 fw-normal">
                        Our experts are here to help you explore options, answer questions, and guide you to the perfect solution for your business.
                    </p>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- License Pill Buttons Section -->
<style>
    :root {
        --ticker-bg: var(--white); /* Dark navy background matching uploaded screenshot */
        --ticker-speed: 20s;  /* Adjust duration to speed up/slow down scrolling */
        --logo-width: 250px;
        --logo-gap: 0px;
    }

    /* Container for the logo ticker section */
    .logo-ticker-section {
        background-color: var(--ticker-bg);
        padding: 20px 0;
        overflow: hidden;
        position: relative;
    }

    /* Fade Overlay Effects on Left and Right Edges */
    .logo-ticker-section::before,
    .logo-ticker-section::after {
        content: "";
        position: absolute;
        top: 0;
        width: 91px;
        height: 100%;
        z-index: 2;
        pointer-events: none;
    }

    .logo-ticker-section::before {
        left: 0;
        background: linear-gradient(to right, var(--ticker-bg), transparent);
    }

    .logo-ticker-section::after {
        right: 0;
        background: linear-gradient(to left, var(--ticker-bg), transparent);
    }

    /* Ticker Wrapper & Rows */
    .ticker-wrapper {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .ticker-row {
        display: flex;
        width: max-content;
        user-select: none;
    }

    .ticker-track {
        display: flex;
        align-items: center;
        gap: var(--logo-gap);
        padding-right: var(--logo-gap);
        white-space: nowrap;
    }

    /* Logo Box Styling */
    .logo-item {
        width: var(--logo-width);
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 1s ease;
    }

    .logo-item img {
        /* filter: brightness(1) invert(0); */
        opacity: 0.5;
        width: 200px;
    }

    .logo-item:hover img {
        filter: brightness(1) invert(0);
        opacity: 1;
    }

    /* Animation 1: Left to Right */
    .scroll-left-to-right {
        animation: scrollRight var(--ticker-speed) linear infinite;
    }

    /* Animation 2: Right to Left */
    .scroll-right-to-left {
        animation: scrollLeft var(--ticker-speed) linear infinite;
    }

    /* Keyframes */
    @keyframes scrollLeft {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes scrollRight {
        0% {
            transform: translateX(-50%);
        }
        100% {
            transform: translateX(0);
        }
    }

    /* Pause animation on hover */
    .ticker-row:hover .scroll-left-to-right,
    .ticker-row:hover .scroll-right-to-left {
        animation-play-state: paused;
    }
</style>

<section class="logo-ticker-section">
    <div class="ticker-wrapper">
      
      <div class="ticker-row">
        <div class="ticker-track scroll-left-to-right">
            <?php
            $leftToRightLogos = [
                'adbookee.png', 'adhera-tech.png', 'crest-view-tech.png', 'divaine-tech.png', 'euphoria-group.png', 'Gurve-tech.png', 'innotell-tech.png'
            ];
            foreach ($leftToRightLogos as $logo) {
                echo '<div class="logo-item">
                    <img src="' . BASE_URL . '/assets/images/brand/' . $logo . '" alt="' . pathinfo($logo, PATHINFO_FILENAME) . '">
                </div>';
            }

            foreach ($leftToRightLogos as $logo) {
                echo '<div class="logo-item">
                    <img src="' . BASE_URL . '/assets/images/brand/' . $logo . '" alt="' . pathinfo($logo, PATHINFO_FILENAME) . '">
                </div>';
            }
            ?>
         </div>

      </div>

      <div class="ticker-row">
        <div class="ticker-track scroll-right-to-left">
            <?php
            $rightToLeftLogos = [
                'jjr-tech.png', 'keshav-tech.png', 'pvl-tourism.png', 'rishaan-tech.png', 'select-stock.png', 'wealth-bridge.png', 'zedcapital.png'
            ];
            foreach ($rightToLeftLogos as $logo) {
                echo '<div class="logo-item">
                    <img src="' . BASE_URL . '/assets/images/brand/' . $logo . '" alt="' . pathinfo($logo, PATHINFO_FILENAME) . '">
                </div>';
            }

            foreach ($rightToLeftLogos as $logo) {
                echo '<div class="logo-item">
                    <img src="' . BASE_URL . '/assets/images/brand/' . $logo . '" alt="' . pathinfo($logo, PATHINFO_FILENAME) . '">
                </div>';
            }
            ?>
      </div>

    </div>
</section>

<!-- Interactive Services Grid Section -->
<section class="services-showcase-section py-5 bg-white d-none">
    <div class="container">
        
        <!-- Featured Service Highlight Box (Top Row) -->
        <div class="featured-service-card mb-4 rounded-3 overflow-hidden shadow-sm">
            <div class="row g-0">
                
                <!-- Left Column: Title & Icon -->
                <div class="col-12 col-lg-6 bg-light d-flex flex-column align-items-center justify-content-center p-4 p-md-5 text-center">
                    <div class="service-icon-wrapper mb-3 w-100">
                        <!-- Looping Animated Video -->
                        <video class="service-animated-video" autoplay loop muted playsinline>
                            <source src="assets/video/Global.webm" type="video/webm">
                            <source src="assets/video/Global.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h3 class="featured-service-title fw-semibold text-dark mb-0">
                        Global<br>Entity<br>Management
                    </h3>
                </div>

                <!-- Right Column: Image with Overlaid Text Box & CTA -->
                <div class="col-12 col-lg-6 featured-image-bg position-relative d-flex flex-column justify-content-between p-4 p-md-5">
                    
                    <!-- Glassmorphism Text Card Overlay -->
                    <div class="overlay-glass-card ms-auto p-4 rounded-3 text-center">
                        <h4 class="fw-bold text-dark mb-2">Compliance<br>Beyond Borders</h4>
                        <p class="small text-muted mb-0">
                            Global Entity Management empowers businesses with seamless company formation, compliance, governance.
                        </p>
                    </div>

                    <!-- Bottom CTA Button -->
                    <div class="mt-4 mt-lg-5 text-center text-lg-start">
                        <a href="#" class="btn btn-pill-action text-uppercase fw-semibold d-inline-flex align-items-center gap-2">
                            <span class="arrow-circle"><i class="bi bi-arrow-up-right"></i></span>
                            Start Registration
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <!-- Secondary Services Grid (3 Columns) -->
        <div class="row g-4">
            
            <!-- Card 1 (Active / Outlined State Example) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="service-grid-card text-center p-4 rounded-3 bg-light h-100">
                    <div class="service-icon-wrapper mb-3 w-100">
                        <!-- Looping Animated Video -->
                        <video class="service-animated-video" autoplay loop muted playsinline>
                            <source src="assets/video/TAX.webm" type="video/webm">
                            <source src="assets/video/TAX.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h4 class="service-card-title fw-semibold text-dark mb-0">
                        Accounting<br>& Tax
                    </h4>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="service-grid-card text-center p-4 rounded-3 bg-light h-100">
                    <div class="service-icon-wrapper mb-3 w-100">
                        <!-- Looping Animated Video -->
                        <video class="service-animated-video" autoplay loop muted playsinline>
                            <source src="assets/video/Fund.webm" type="video/webm">
                            <source src="assets/video/Fund.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h4 class="service-card-title fw-semibold text-dark mb-0">
                        Fund<br>Services
                    </h4>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="service-grid-card text-center p-4 rounded-3 bg-light h-100">
                    <div class="service-icon-wrapper mb-3 w-100">
                        <!-- Looping Animated Video -->
                        <video class="service-animated-video" autoplay loop muted playsinline>
                            <source src="assets/video/Wealth.webm" type="video/webm">
                            <source src="assets/video/Wealth.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h4 class="service-card-title fw-semibold text-dark mb-0">
                        Private Wealth<br>& Family Offices
                    </h4>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="service-grid-card text-center p-4 rounded-3 bg-light h-100">
                    <div class="service-icon-wrapper mb-3 w-100">
                        <!-- Looping Animated Video -->
                        <video class="service-animated-video" autoplay loop muted playsinline>
                            <source src="assets/video/Mergers.webm" type="video/webm">
                            <source src="assets/video/Mergers.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h4 class="service-card-title fw-semibold text-dark mb-0">
                        Mergers &<br>Acquisitions
                    </h4>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="service-grid-card text-center p-4 rounded-3 bg-light h-100">
                    <div class="service-icon-wrapper mb-3 w-100">
                        <!-- Looping Animated Video -->
                        <video class="service-animated-video" autoplay loop muted playsinline>
                            <source src="assets/video/Advisory.webm" type="video/webm">
                            <source src="assets/video/Advisory.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h4 class="service-card-title fw-semibold text-dark mb-0">
                        Corporate<br>Advisory
                    </h4>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="service-grid-card text-center p-4 rounded-3 bg-light h-100">
                    <div class="service-icon-wrapper mb-3 w-100">
                        <!-- Animated GIF Media -->
                        <img src="assets/gif/Bank.gif" 
                            alt="Banking Solutions Animation" 
                            class="service-animated-gif img-fluid">
                    </div>
                    <h4 class="service-card-title fw-semibold text-dark mb-0">
                        Banking<br>Solutions
                    </h4>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    /* Card Hover Animations & Styling */
    .service-tile {
      border: 1px solid var(--gold-banner-bg);
      border-radius: 18px;
      overflow: hidden;
      position: relative;
      background-size: cover;
      background-position: center;
      transition: transform 0.35s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.35s cubic-bezier(0.25, 1, 0.5, 1);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 320px;
      padding: 1.75rem;
      text-decoration: none;
      color: inherit;
    }

    .service-tile:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12) !important;
    }

    /* Hover Zoom Effect on Backgrounds */
    .service-tile::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: inherit;
      background-size: cover;
      background-position: center;
      transition: transform 0.5s ease;
      z-index: 1;
    }

    .service-tile:hover::before {
      transform: scale(1.05);
    }

    .tile-content {
      position: relative;
      z-index: 2;
    }

    /* Rounded Pill Button Effects */
    .btn-pill-learn {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(4px);
      color: #a38240;
      font-weight: 600;
      font-size: 0.875rem;
      padding: 8px 22px;
      border-radius: 50px;
      border: 1px solid rgba(163, 130, 64, 0.3);
      display: inline-block;
      transition: all 0.25s ease;
      text-decoration: none;
      width: fit-content;
    }

    .service-tile:hover .btn-pill-learn {
      background: #a38240;
      color: #ffffff;
      border-color: #a38240;
    }

    /* Individual Tile Background Styles & Overlays */
    .tile-global {
      background-image: url('assets/images/global-entity.png');
      color: #ffffff;
      min-height: 290px;
    }

    .tile-accounting {
      background-image: url('assets/images/account-tax.png');
      min-height: 290px;
    }

    .tile-fund {
      background-image: url('assets/images/fund-service.png');
      min-height: 290px;
    }

    .tile-wealth {
      background-image: url('assets/images/private-wealth.png');
      min-height: 520px;
    }

    .tile-mergers {
      background-image: url('assets/images/merge-aquisition.png');
      min-height: 520px;
    }

    .tile-advisory {
      background-image:  url('assets/images/corporate-advisory.png');
      min-height: 245px;
    }

    .tile-banking {
      background-image: url('assets/images/banking-solution.png');
      min-height: 245px;
    }
</style>

<div class="container py-5 pt-3">
    
    <!-- Top Row Layout -->
    <div class="row g-4 mb-4">
      
        <!-- Global Entity Management (Large Card) -->
        <div class="col-12 col-lg-6">
            <a href="#" class="service-tile tile-global shadow-sm h-100 theme-border">
                <div class="tile-content max-w-md">
                    <h3 class="fw-bold fs-3 mb-2">Global Entity Management</h3>
                    <p class="text-black-50 small mb-0 lh-sm w-75 mt-4">
                        Our experts are here to help you explore options, answer questions, and guide you to the perfect solution for your business.
                    </p>
                </div>
                <div class="tile-content pt-4">
                    <span class="btn-pill-learn">View all Global Entity Management</span>
                </div>
            </a>
        </div>

        <!-- Accounting & Tax -->
        <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="service-tile tile-accounting shadow-sm h-100 theme-border">
                <div class="tile-content">
                    <h4 class="fw-bold text-dark fs-4 mb-2">Accounting<br />& Tax</h4>
                    <p class="text-secondary small mb-0 lh-sm">
                    Our experts are here to help you explore options, answer questions
                    </p>
                </div>
                <div class="tile-content pt-4">
                    <span class="btn-pill-learn">Learn more</span>
                </div>
            </a>
        </div>

        <!-- Fund Services -->
        <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="service-tile tile-fund shadow-sm h-100 theme-border">
                <div class="tile-content">
                    <h4 class="fw-bold text-dark fs-4 mb-2">Fund<br />Services</h4>
                    <p class="text-secondary small mb-0 lh-sm">
                    Our experts are here to help you explore options, answer questions
                    </p>
                </div>
                <div class="tile-content pt-4">
                    <span class="btn-pill-learn">Learn more</span>
                </div>
            </a>
        </div>

    </div>

    <!-- Bottom Asymmetric Row Layout -->
    <div class="row g-4">
      
        <!-- Private Wealth & Family Offices (Tall Card) -->
        <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="service-tile tile-wealth shadow-sm h-100 theme-border">
                <div class="tile-content">
                    <h4 class="fw-bold text-dark fs-4 mb-2">Private Wealth<br />& Family<br />Offices</h4>
                    <p class="text-secondary small mb-0 lh-sm">
                    Our experts are here to help you explore options, answer questions
                    </p>
                </div>
                <div class="tile-content pt-4">
                    <span class="btn-pill-learn">Learn more</span>
                </div>
            </a>
        </div>

        <!-- Mergers & Acquisitions (Tall Card) -->
        <div class="col-12 col-md-6 col-lg-3">
            <a href="#" class="service-tile tile-mergers shadow-sm h-100 theme-border">
                <div class="tile-content">
                    <h4 class="fw-bold text-dark fs-4 mb-2">Mergers &<br />Acquisitions</h4>
                    <p class="text-secondary small mb-0 lh-sm">
                    Our experts are here to help you explore options, answer questions
                    </p>
                </div>
                <div class="tile-content pt-4">
                    <span class="btn-pill-learn">Learn more</span>
                </div>
            </a>
        </div>

        <!-- Right Column Staked Cards -->
        <div class="col-12 col-lg-6 d-flex flex-column gap-4">
            
            <!-- Corporate Advisory -->
            <a href="#" class="service-tile tile-advisory shadow-sm flex-fill theme-border">
                <div class="tile-content max-w-sm">
                    <h4 class="fw-bold text-dark fs-4 mb-2">Corporate Advisory</h4>
                    <p class="text-secondary small mb-0 lh-sm w-50 mt-3">
                        Our experts are here to help you explore options, answer questions
                    </p>
                </div>
                <div class="tile-content pt-3">
                    <span class="btn-pill-learn">Learn more</span>
                </div>
            </a>

            <!-- Banking Solutions -->
            <a href="#" class="service-tile tile-banking shadow-sm flex-fill">
            <div class="tile-content max-w-sm">
                <h4 class="fw-bold text-dark fs-4 mb-2">Banking Solutions</h4>
                <p class="text-black-50 small mb-0 lh-sm w-50 mt-3">
                    Our experts are here to help you explore options, answer questions
                </p>
            </div>
            <div class="tile-content pt-3">
                <span class="btn-pill-learn">Learn more</span>
            </div>
            </a>

        </div>

    </div>

</div>

<!-- Adviser Banner Section -->
<style>
    /* Reference Banner Styling */
    .adviser-banner {
        background: linear-gradient(150deg, #b88a38 0%, #956a22 50%);
        border-radius: 16px;
        padding: 40px;
        color: var(--white);
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(11, 25, 46, 0.2);
    }
    .adviser-banner::after {
        content: '';
        position: absolute;
        right: -50px;
        bottom: -50px;
        width: 250px;
        height: 250px;
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        pointer-events: none;
    }
    .banner-subtitle {
        font-size: 1rem;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: var(--text-dark);
        font-weight: 600;
    }
    .btn-adviser {
        background-color: var(--white);
        color: var(--text-dark);
        font-weight: 600;
        padding: 12px 28px;
        border-radius: 8px;
        border: none;
        transition: var(--transition);
    }
        .btn-adviser:hover {
        background-color: var(--gold-primary);
        color: var(--white);
        transform: translateY(-2px);
        }
</style>
<section class="pb-5">
    <div class="container" data-aos="zoom-in">
        <div class="adviser-banner">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <div class="banner-subtitle mb-2">NOT SURE WHERE TO START?</div>
                    <h3 class="fw-bold mb-2">Tell us the country, owners and business activity.</h3>
                    <p class="mb-0 text-white-50">We help you identify mandatory corporate requirements versus optional services, finalizing a clear scope before you get started.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#inquiry" class="btn btn-adviser">Talk to an adviser <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jurisdictions Banner Section -->
<section class="d-none jurisdictions-section position-relative py-5">
    
    <!-- Floating 3D Geometric Objects (Overflowing Top & Bottom) -->
    <div class="geo-cone-3d d-none d-sm-block">
        <img src="assets/images/objects/triangle.png" alt="Decorative Shape" class="img-fluid">
    </div>
    <div class="geo-cube-3d d-none d-sm-block">
        <img src="assets/images/objects/cube-triangle.png" alt="Decorative Shape" class="img-fluid">
    </div>

    <div class="container position-relative z-2 my-md-3 jurisdictions-bg-row">
        
        <!-- Curved & Square Frame Container -->
        <div class="jurisdictions-frame-box p-4 p-md-5 mx-auto position-relative overflow-hidden">

            <div class="row align-items-center g-4 position-relative z-2">
    
                <!-- Left Column: Title & Text -->
                <div class="col-12 col-lg-7 text-white pe-lg-5">
                    <h2 class="jurisdiction-title fw-bold mb-3">
                        Jurisdictions
                    </h2>
                    <p class="jurisdiction-description mb-0">
                        Navigate global business with confidence through trusted jurisdictions tailored to your goals. We help you choose the right location for company formation, licensing, taxation, compliance, and international expansion, ensuring a secure and efficient business setup.
                    </p>
                </div>

                <!-- Right Column: Interactive Jurisdictions List -->
                <div class="col-12 col-lg-5 ps-lg-4">
                    <ul class="jurisdiction-list list-unstyled mb-0">
                        <li>
                            <a href="#" class="jurisdiction-link">
                                <span>Singapore</span>
                                <i class="bi bi-arrow-right list-arrow"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="jurisdiction-link">
                                <span>Hongkong</span>
                                <i class="bi bi-arrow-right list-arrow"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="jurisdiction-link">
                                <span>UAE</span>
                                <i class="bi bi-arrow-right list-arrow"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="jurisdiction-link">
                                <span>UK</span>
                                <i class="bi bi-arrow-right list-arrow"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="jurisdiction-link">
                                <span>India</span>
                                <i class="bi bi-arrow-right list-arrow"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="jurisdiction-link">
                                <span>Moritius</span>
                                <i class="bi bi-arrow-right list-arrow"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Modern Post-Registration Work Section -->
<style>
    
    .post-reg-section {
      padding: 100px 0;
      background: linear-gradient(180deg, #ffffff 0%, var(--bg-light) 100%);
      position: relative;
    }

    /* Section Header */
    .badge-label {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--gold-primary);
      background: var(--gold-light);
      border: 1px solid var(--gold-border);
      padding: 6px 16px;
      border-radius: 30px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 1.25rem;
    }

    .badge-label i {
      font-size: 0.7rem;
    }

    .section-title {
      font-size: 2.6rem;
      font-weight: 700;
      color: var(--navy-dark);
      line-height: 1.2;
      letter-spacing: -0.5px;
    }

    .section-title span {
      color: var(--gold-primary);
    }

    .section-desc {
      font-size: 0.975rem;
      color: var(--text-muted);
      line-height: 1.7;
      border-left: 3px solid var(--gold-primary);
      padding-left: 18px;
    }

    /* Custom Cards */
    .gold-theme-card {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: 20px;
      padding: 38px 30px 32px;
      height: 100%;
      position: relative;
      transition: var(--transition);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: var(--shadow-sm);
      top: 0;
      overflow: hidden;
    }

    /* Subtle top glowing bar */
    .gold-theme-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, var(--gold-primary), var(--navy-dark));
      opacity: 0.3;
      transition: var(--transition);
    }

    .gold-theme-card:hover {
      top: -8px;
      box-shadow: var(--shadow-hover);
      border-color: var(--gold-primary);
    }

    .gold-theme-card:hover::before {
      opacity: 1;
    }

    /* Card Header & Icon */
    .card-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
    }

    .card-step {
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--gold-primary);
    }

    .icon-wrapper {
      width: 52px;
      height: 52px;
      border-radius: 14px;
      background: var(--navy-dark);
      color: var(--gold-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      box-shadow: 0 6px 16px rgba(11, 25, 46, 0.15);
      transition: var(--transition);
    }

    .gold-theme-card:hover .icon-wrapper {
      background: var(--gold-primary);
      color: #ffffff;
      transform: rotate(-6deg) scale(1.05);
    }

    .card-heading {
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--navy-dark);
      line-height: 1.35;
      margin-bottom: 18px;
    }

    /* Tag Pill */
    .tag-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 50px;
      background-color: var(--gold-light);
      color: var(--gold-hover);
      border: 1px solid var(--gold-border);
      margin-bottom: 22px;
    }

    .tag-pill i {
      font-size: 0.65rem;
    }

    .card-text {
      font-size: 0.925rem;
      color: var(--text-muted);
      line-height: 1.65;
      margin-bottom: 24px;
      padding-bottom: 20px;
      border-bottom: 1px dashed var(--gold-border);
    }

    /* Checklist */
    .checklist {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .checklist-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      font-size: 0.875rem;
      font-weight: 500;
      color: var(--navy-dark);
      margin-bottom: 12px;
    }

    .checklist-item:last-child {
      margin-bottom: 0;
    }

    .checklist-item i {
      font-size: 0.85rem;
      color: var(--gold-primary);
      margin-top: 4px;
      background: var(--gold-light);
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    @media (max-width: 991px) {
      .section-title {
        font-size: 2.1rem;
      }
      .section-desc {
        margin-top: 1.5rem;
      }
    }
</style>

<section class="post-reg-section bg-gray">
    <div class="container">
      
      <!-- Section Header -->
      <div class="row align-items-end mb-5">
        <div class="col-lg-7" data-aos="fade-up">
          <div class="badge-label">
            <i class="fa-solid fa-circle-nodes"></i> Post-Registration Work
          </div>
          <h2 class="section-title">What Happens After the Company Is <span>Registered?</span></h2>
        </div>
        <div class="col-lg-5 col-xl-4 ms-auto" data-aos="fade-up" data-aos-delay="100">
          <p class="section-desc mb-0">
            A company is only useful if it can receive money, issue invoices, hold required licences, and meet filing deadlines. We establish these pillars before incorporation.
          </p>
        </div>
      </div>

      <!-- 3-Column Card Grid -->
      <div class="row g-4">
        
        <!-- Card 01: Money Flow -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
          <div class="gold-theme-card">
            <div>
              <div class="card-meta">
                <span class="card-step">01 &middot; Money Flow</span>
                <div class="icon-wrapper">
                  <i class="fa-solid fa-building-columns"></i>
                </div>
              </div>
              <h3 class="card-heading">Corporate Bank and Payment Account</h3>
              <div>
                <span class="tag-pill"><i class="fa-solid fa-shield-halved"></i> Independent KYC Decision</span>
              </div>
              <p class="card-text">
                We help prepare ownership, authority, source-of-funds, and business evidence. The banking or fintech provider renders its independent approval decision.
              </p>
            </div>
            
            <ul class="checklist">
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Ownership chain & director authority</span>
              </li>
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Website, contracts & business evidence</span>
              </li>
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Countries, currencies & expected transactions</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Card 02: Activation -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="gold-theme-card">
            <div>
              <div class="card-meta">
                <span class="card-step">02 &middot; Activation</span>
                <div class="icon-wrapper">
                  <i class="fa-solid fa-file-signature"></i>
                </div>
              </div>
              <h3 class="card-heading">Tax, Licence and Accounting Activation</h3>
              <div>
                <span class="tag-pill"><i class="fa-solid fa-triangle-exclamation"></i> Not Automatic Post-Incorporation</span>
              </div>
              <p class="card-text">
                Verify what must be active prior to your first transaction, employee hire, regulated service, or shipment rather than waiting until emergency usage.
              </p>
            </div>

            <ul class="checklist">
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Tax registrations & invoicing rules</span>
              </li>
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Business & sector-specific approvals</span>
              </li>
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Payroll setup & accounting records</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Card 03: Continuity -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
          <div class="gold-theme-card">
            <div>
              <div class="card-meta">
                <span class="card-step">03 &middot; Continuity</span>
                <div class="icon-wrapper">
                  <i class="fa-solid fa-calendar-check"></i>
                </div>
              </div>
              <h3 class="card-heading">Annual Maintenance and Renewals</h3>
              <div>
                <span class="tag-pill"><i class="fa-solid fa-clock"></i> Recurring Annual Deadlines</span>
              </div>
              <p class="card-text">
                Your company maintains legal compliance even when revenue is minimal. Keep local infrastructure, records, regulatory filings, and renewals active.
              </p>
            </div>

            <ul class="checklist">
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Address, officer, secretary or agent</span>
              </li>
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Books, annual returns & tax reports</span>
              </li>
              <li class="checklist-item">
                <i class="fa-solid fa-check"></i>
                <span>Ownership updates & government charges</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- OffShore Jurisdictions Slider Section -->
<section class="offshore-jurisdictions-section position-relative py-5 bg-gray d-none">
    <!-- OffShore 3D Geometric Objects -->
    <div class="offshore-3d-triangle d-none d-lg-block">
        <img src="assets/images/objects/triangle.png" alt="Triangle Shape" class="img-fluid">
    </div>

    <div class="container py-md-3">    
        
        <!-- Section Header -->
        <div class="row mb-4">
            <div class="col-12 col-lg-9">
                <h2 class="offshore-title text-gold fw-bold mb-3">
                    OffShore Jurisdictions
                </h2>
                <p class="offshore-subtitle text-secondary">
                    Navigate global business with confidence through trusted jurisdictions tailored to your goals. We help you choose the right location for company formation, licensing, taxation, compliance, and international expansion, ensuring a secure and efficient business setup.
                </p>
            </div>
        </div>

        <!-- Custom Navigation Arrow Buttons -->
        <div class="d-flex align-items-center gap-2 mb-4">
            <button class="offshore-nav-btn swiper-prev-btn" aria-label="Previous Slide">
                <i class="bi bi-arrow-left"></i>
            </button>
            <button class="offshore-nav-btn swiper-next-btn" aria-label="Next Slide">
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>

        <!-- Swiper Slider Container -->
        <div class="swiper offshoreSwiper overflow-hidden">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="offshore-card rounded-4 bg-light overflow-hidden h-100 d-flex flex-column justify-content-between">
                        <div class="card-img-wrapper rounded-top-3  mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?q=80&w=500&auto=format&fit=crop" alt="Type of Income Sources" class="img-fluid w-100 card-zoom-img">
                        </div>
                        <div class="card-body-content text-left flex-grow-1 d-flex flex-column justify-content-between p-4">
                            <div>
                                <h4 class="card-title fw-bold text-dark mb-2">Type of Income Sources</h4>
                                <p class="card-text text-muted small mb-3">
                                    Income sources are generally categorized into three main types based on how they are earned and taxed
                                </p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-gold-pill rounded-pill text-white fw-semibold px-4 py-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="offshore-card rounded-4 bg-light overflow-hidden h-100 d-flex flex-column justify-content-between">
                        <div class="card-img-wrapper rounded-top-3  mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?q=80&w=500&auto=format&fit=crop" alt="Mainly Investment Market" class="img-fluid w-100 card-zoom-img">
                        </div>
                        <div class="card-body-content text-left flex-grow-1 d-flex flex-column justify-content-between p-4">
                            <div>
                                <h4 class="card-title fw-bold text-dark mb-2">Mainly Investment Market</h4>
                                <p class="card-text text-muted small mb-3">
                                    Income sources are generally categorized into three main types based on how they are earned and taxed
                                </p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-gold-pill rounded-pill text-white fw-semibold px-4 py-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="offshore-card rounded-4 bg-light overflow-hidden h-100 d-flex flex-column justify-content-between">
                        <div class="card-img-wrapper rounded-top-3  mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=500&auto=format&fit=crop" alt="Office Location & Rules" class="img-fluid w-100 card-zoom-img">
                        </div>
                        <div class="card-body-content text-left flex-grow-1 d-flex flex-column justify-content-between p-4">
                            <div>
                                <h4 class="card-title fw-bold text-dark mb-2">Office Location & Rules Ragulation</h4>
                                <p class="card-text text-muted small mb-3">
                                    Income sources are generally categorized into three main types based on how they are earned and taxed
                                </p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-gold-pill rounded-pill text-white fw-semibold px-4 py-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="offshore-card rounded-4 bg-light overflow-hidden h-100 d-flex flex-column justify-content-between">
                        <div class="card-img-wrapper rounded-top-3  mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=500&auto=format&fit=crop" alt="Pros & Cons" class="img-fluid w-100 card-zoom-img">
                        </div>
                        <div class="card-body-content text-left flex-grow-1 d-flex flex-column justify-content-between p-4">
                            <div>
                                <h4 class="card-title fw-bold text-dark mb-2">Pros & Cons</h4>
                                <p class="card-text text-muted small mb-3">
                                    Income sources are generally categorized into three main types based on how they are earned and taxed
                                </p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-gold-pill rounded-pill text-white fw-semibold px-4 py-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="offshore-card rounded-4 bg-light overflow-hidden h-100 d-flex flex-column justify-content-between">
                        <div class="card-img-wrapper rounded-top-3  mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=500&auto=format&fit=crop" alt="Other Remarks" class="img-fluid w-100 card-zoom-img">
                        </div>
                        <div class="card-body-content text-left flex-grow-1 d-flex flex-column justify-content-between p-4">
                            <div>
                                <h4 class="card-title fw-bold text-dark mb-2">Other Remarks</h4>
                                <p class="card-text text-muted small mb-3">
                                    Income sources are generally categorized into three main types based on how they are earned and taxed
                                </p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-gold-pill rounded-pill text-white fw-semibold px-4 py-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Licensing Section -->
<section class="licensing-section position-relative py-5 overflow-visible bg-white">
    
    <!-- Floating 3D Geometric Objects -->
     <div class="blue-square d-none d-lg-block">
        <img src="assets/images/objects/blue-square.png" alt="Decorative Shape" class="img-fluid">
    </div>

    <div class="yellow-square d-none d-lg-block">
        <img src="assets/images/objects/yellow-square.png" alt="Decorative Shape" class="img-fluid">
    </div>
    
    <div class="golden-square d-none d-lg-block">
        <img src="assets/images/objects/golden-square.png" alt="Decorative Shape" class="img-fluid">
    </div>

    <div class="container py-md-4 position-relative z-2">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Pixel-Perfect Venn Graphic -->
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <div class="venn-container">
                    
                    <!-- SVG Overlay for Crisp White Intersection Borders & Icons -->
                    <div class="venn-svg-overlay position-absolute top-0 start-0 w-100 h-100">
                        <img src="assets/images/licensing.png" alt="Decorative Shape" class="img-fluid">
                    </div>

                </div>
            </div>

            <!-- Right Column: Content & Buttons -->
            <div class="col-12 col-lg-6 ps-lg-5">
                
                <!-- Licensing Header Block -->
                <div class="mb-4">
                    <h2 class="section-title text-gold fw-bold mb-2">Licensing</h2>
                    <p class="section-subtitle text-secondary mb-4 fs-5">
                        Secure the Right Licence.<br>Build Your Business with Confidence.
                    </p>

                    <!-- Interactive License Pill Buttons -->
                    <div class="d-flex flex-column gap-3 max-width-pills">
                        <a href="#" class="license-pill-btn d-flex align-items-center gap-3 p-2 pe-4 rounded-pill shadow-sm" data-aos="fade-left" data-aos-delay="200">
                            <span class="arrow-badge"><i class="bi bi-arrow-up-right"></i></span>
                            <span class="fw-bold text-dark fs-6">Forex Broker License</span>
                        </a>

                        <a href="#" class="license-pill-btn d-flex align-items-center gap-3 p-2 pe-4 rounded-pill shadow-sm" data-aos="zoom-in" data-aos-delay="550">
                            <span class="arrow-badge"><i class="bi bi-arrow-up-right"></i></span>
                            <span class="fw-bold text-dark fs-6">Crypto Currency License</span>
                        </a>

                        <a href="#" class="license-pill-btn d-flex align-items-center gap-3 p-2 pe-4 rounded-pill shadow-sm" data-aos="fade-right" data-aos-delay="400">
                            <span class="arrow-badge"><i class="bi bi-arrow-up-right"></i></span>
                            <span class="fw-bold text-dark fs-6">Payment Solutions License</span>
                        </a>
                    </div>
                </div>

                <!-- Ready-Made Licenses Callout -->
                <div class="mt-5 pt-2 d-none">
                    <h2 class="section-title text-gold fw-bold mb-3">Ready-Made Licenses</h2>
                    <a href="#" class="btn btn-gold-pill rounded-pill text-white fw-semibold px-4 py-2">Learn More</a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Testimonials Section -->
<style>
    .text-gold {
        color: #a38240;
    }

    .badge-gold {
        background-color: #a38240;
        color: #ffffff;
        border-radius: 50px;
        padding: 8px 24px;
        font-weight: 500;
        font-size: 0.875rem;
    }

    .testimonial-card {
        background-color: #f5f6f8;
        border: none;
        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .quote-watermark {
        position: absolute;
        top: 10px;
        left: 20px;
        font-size: 15rem;
        line-height: 1;
        color: var(--gray-color);
        pointer-events: none;
        user-select: none;
    }
</style>

<section class="py-5 position-relative overflow-visible bg-gray">
    <div class="container py-5">
        
        <div class="blue-ring d-none d-lg-bloc">
            <img src="assets/images/objects/blue-ring.png" alt="Decorative Shape" class="img-fluid">
        </div>

        <!-- Section Header -->
        <div class="text-center mb-5">
            <p class="text-muted text-uppercase fw-semibold small mb-2">Real results from real clients</p>
            <h2 class="display-6 fw-bold text-gold mb-3">See how we've helped<br class="d-none d-sm-inline" /> our clients succeed</h2>
            <span class="badge badge-gold shadow-sm">What people says about us.</span>
        </div>

        <!-- Testimonial Cards Grid -->
        <div class="row g-4">
        
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="testimonial-card bg-white p-4 position-relative h-100 d-flex flex-column justify-content-between">
                    <div class="quote-watermark">“</div>
                    <div class="position-relative z-1">
                        <h6 class="fw-bold text-dark mb-0 fs-5">Goutam Kakdiya</h6>
                        <p class="text-secondary small mb-3">Dubai</p>
                        <p class="text-muted small lh-base mb-4">
                        Very friendly, client oriented service. Proactive and very supportive at all times. Proactive and very supportive at all times.
                        </p>
                    </div>
                    <div class="stars text-warning d-flex gap-1 fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="text-muted small">Aug 3, 2026</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="testimonial-card bg-white p-4 position-relative h-100 d-flex flex-column justify-content-between">
                    <div class="quote-watermark">“</div>
                    <div class="position-relative z-1">
                        <h6 class="fw-bold text-dark mb-0 fs-5">Moin Shaikh</h6>
                        <p class="text-secondary small mb-3">India</p>
                        <p class="text-muted small lh-base mb-4">
                        Highly recommend global entity setup services. Their team is professional, knowledgeable, and cost-effective compared to other providers offering similar services.
                        </p>
                    </div>
                    <div class="stars text-warning d-flex gap-1 fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="text-muted small">Aug 3, 2026</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="testimonial-card bg-white p-4 position-relative h-100 d-flex flex-column justify-content-between">
                    <div class="quote-watermark">“</div>
                    <div class="position-relative z-1">
                        <h6 class="fw-bold text-dark mb-0 fs-5">Goutam Kakdiya</h6>
                        <p class="text-secondary small mb-3">Dubai</p>
                        <p class="text-muted small lh-base mb-4">
                        Very friendly, client oriented service. Proactive and very supportive at all times. Proactive and very supportive at all times.
                        </p>
                    </div>
                    <div class="stars text-warning d-flex gap-1 fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="text-muted small">Aug 3, 2026</div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="testimonial-card bg-white p-4 position-relative h-100 d-flex flex-column justify-content-between">
                    <div class="quote-watermark">“</div>
                    <div class="position-relative z-1">
                        <h6 class="fw-bold text-dark mb-0 fs-5">Moin Shaikh</h6>
                        <p class="text-secondary small mb-3">India</p>
                        <p class="text-muted small lh-base mb-4">
                        Highly recommend global entity setup services. Their team is professional, knowledgeable, and cost-effective compared to other providers offering similar services.
                        </p>
                    </div>
                    <div class="stars text-warning d-flex gap-1 fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="text-muted small">Aug 3, 2026</div>
                </div>
            </div>

        </div>

        <div class="brown-ring d-none d-lg-bloc">
            <img src="assets/images/objects/brown-ring.png" alt="Decorative Shape" class="img-fluid">
        </div>
    </div>
</section>

<!-- Speak with Experts Section -->
<style>
   
    .badge-gold {
      background-color: #a38240;
      color: #ffffff;
      border-radius: 50px;
      padding: 6px 20px;
      font-weight: 500;
      font-size: 0.875rem;
    }

    .action-icon-btn {
      width: 48px;
      height: 48px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.2s ease;
    }

    .action-icon-btn:hover {
      transform: translateY(-3px);
    }

    .action-icon-btn img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    /* Styling for Section 2: Ready to Register */
    .ready-register-section {
        background-image: url('assets/images/ready-register.png');
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: cover;
        position: relative;
        padding-top: 16rem;
        padding-bottom: 5rem;
    }

    .btn-register-primary {
        background-color: #a38240;
        color: #ffffff;
        border-radius: 50px;
        padding: 10px 24px;
        font-weight: 600;
        font-size: 0.95rem;
        border: none;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn-register-primary:hover {
      background-color: #8a6c32;
      color: #ffffff;
    }

    .btn-register-secondary {
      background-color: #ffffff;
      color: #a38240;
      border-radius: 50px;
      padding: 10px 24px;
      font-weight: 600;
      font-size: 0.95rem;
      border: 1px solid #ffffff;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    /* Responsive background positioning for mobile */
    @media (max-width: 991.98px) {
        .ready-register-section {
            background-position: center bottom;
            background-size: 260px auto; /* Adjust height for mobile screens */
            padding-bottom: 240px !important; /* Leaves room so text doesn't overlap person image */
        }
    }
    
    .btn-register-secondary:hover {
      background-color: #f8f9fa;
      color: #8a6c32;
    }

    .person-img-wrapper {
      position: relative;
      margin-bottom: -3rem; /* Extends person image naturally out of section bottom */
    }

    .person-img-wrapper img {
      max-height: 380px;
      width: auto;
      object-fit: contain;
    }
</style>

<!-- Section 1: Speak with our Experts -->
<section class="pt-5 bg-white position-relative">
<div class="container pt-4">
    <div class="row align-items-center g-4">
    
    <!-- Left Content -->
    <div class="col-lg-5 text-center text-lg-start">
        <span class="badge badge-gold mb-3 shadow-sm">Webinar</span>
        
        <h2 class="display-5 fw-bold text-gold mb-3">
        Speak with<br class="d-none d-lg-inline" /> our Experts
        </h2>
        
        <p class="text-muted fs-5 mb-4">
        We're here for all your offshore business needs
        </p>

        <!-- Communication Icons Row -->
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
        <a href="#" class="action-icon-btn" title="Video Call">
            <img src="assets/images/video-calling.png" alt="Video Calling" />
        </a>
        <a href="#" class="action-icon-btn" title="Email Message">
            <img src="assets/images/email-message.png" alt="Email Message" />
        </a>
        <a href="#" class="action-icon-btn" title="Scan QR Code">
            <img src="assets/images/scan-code.png" alt="Scan Code" />
        </a>
        </div>
    </div>

    <!-- Right Device Graphics Image -->
    <div class="col-lg-7 text-center">
        <img src="assets/images/speech-expert.png" alt="Speak with Experts Devices" class="img-fluid" style="max-height: 420px; width: auto;" />
    </div>

    </div>
</div>
</section>

<!-- Section 2: Ready to Register Section -->
<section class="ready-register-section">
    <div class="container">
        <div class="row justify-content-end align-items-center">
        
        <!-- Right Text & Call-to-Actions (Shifted to right via offset/grid) -->
        <div class="col-lg-7 text-center text-lg-start">
            <h2 class="display-6 fw-bold text-gold mb-3">
            Ready to register?
            </h2>
            
            <p class="fs-5 mb-4">
            Start your company registration today through our secure simple online form which will take you less than 5 minutes
            </p>

            <!-- CTA Buttons -->
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3">
            <a href="#" class="btn btn-register-primary shadow-sm">Start your Company</a>
            <a href="#" class="btn btn-register-secondary shadow-sm">Get in Touch</a>
            </div>
        </div>

        </div>
    </div>
</section>

<!-- Company Formation Experts Section (Light/White Theme) -->
<style>
   
    /* Main Section Container with subtle white gradient glow */
    .experts-section {
      padding: 60px 0;
      position: relative;
      background: radial-gradient(circle at 90% 10%, rgba(184, 150, 85, 0.06) 0%, transparent 60%),
                  linear-gradient(180deg, #ffffff 0%, var(--gold-light) 100%);
      overflow: hidden;
    }

    /* Badge & Titles */
    .badge-gold {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--gold-hover);
      background: var(--gold-soft-bg);
      border: 1px solid var(--gold-border);
      padding: 6px 18px;
      border-radius: 30px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 1.25rem;
    }

    .section-title {
      font-size: 2.85rem;
      font-weight: 700;
      line-height: 1.2;
      letter-spacing: -0.5px;
      color: var(--text-dark);
    }

    .section-title span {
      color: var(--gold-primary);
    }

    .section-desc {
      font-size: 0.975rem;
      color: var(--text-muted);
      line-height: 1.75;
      margin-bottom: 2rem;
    }

    /* Rating Cards Block */
    .rating-box {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: 16px;
      padding: 18px 22px;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
    }

    .rating-box:hover {
      border-color: var(--gold-primary);
      box-shadow: var(--shadow-card);
      transform: translateY(-3px);
    }

    .star-rating {
      color: #00b67a; /* Trustpilot Green */
      font-size: 0.875rem;
    }

    /* CTA Button */
    .btn-gold-hero {
      background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-hover) 100%);
      color: var(--white);
      font-weight: 600;
      padding: 14px 34px;
      border-radius: 12px;
      border: none;
      box-shadow: 0 10px 25px rgba(184, 150, 85, 0.28);
      transition: var(--transition);
      display: inline-flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
    }

    .btn-gold-hero:hover {
      color: var(--white);
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(184, 150, 85, 0.4);
    }

    /* Testimonials Row Cards */
    .testimonial-card {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: 16px;
      padding: 22px;
      height: 100%;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
    }

    .testimonial-card:hover {
      border-color: var(--gold-primary);
      box-shadow: var(--shadow-hover);
      transform: translateY(-5px);
    }

    .testimonial-text {
      font-size: 0.875rem;
      color: var(--text-dark);
      line-height: 1.6;
    }

    .author-name {
      font-size: 0.825rem;
      font-weight: 600;
      color: var(--gold-hover);
    }

    .time-ago {
      font-size: 0.75rem;
      color: var(--text-muted);
    }
</style>
<section class="experts-section">
    <div class="container">
        <div class="row align-items-center g-5">
        
            <!-- Left Content Column -->
            <div class="col-lg-7" data-aos="fade-right">
                <div class="badge-gold">
                    <i class="fa-solid fa-award"></i> Registered Corporate Agents
                </div>
                
                <h1 class="section-title mb-3">
                    Get Backed By Company <span>Formation Experts</span>
                </h1>
                
                <p class="section-desc">
                    We make registering a new company effortless and fast. Our Singapore & regional expert support team guides you through every step of incorporation, licensing, and compliance with top-rated efficiency.
                </p>

                <!-- Ratings Row -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="rating-box d-flex align-items-center gap-3">
                        <i class="fa-solid fa-star text-success fs-3"></i>
                        <div>
                            <div class="star-rating mb-1">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <small class="d-block text-dark fw-semibold">TrustScore 4.8 | 10,029 reviews</small>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="rating-box d-flex align-items-center gap-3">
                        <i class="fa-brands fa-google text-warning fs-3"></i>
                        <div>
                            <div class="star-rating mb-1">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <small class="d-block text-dark fw-semibold">Google Rating 4.9 | 5,528 reviews</small>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="pt-2">
                    <a href="#inquiry" class="btn-gold-hero">
                        Talk to US <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Right Representative Image Column -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                <!-- Testimonial Cards Carousel Row -->
                <div class="row g-3 mt-5 pt-3">
                    <div class="col-md-12" data-aos="fade-down" data-aos-delay="100">
                        <div class="testimonial-card">
                            <div class="star-rating mb-2">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="ms-2 text-success small fw-medium"><i class="fa-solid fa-circle-check"></i> Verified</span>
                            </div>
                            <p class="testimonial-text mb-3">"Excellent service from start to finish. The company formation process was seamless and super fast."</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="author-name">Fabrizio Innamorati</span>
                                <span class="time-ago">1 hour ago</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" data-aos="fade-left" data-aos-delay="150">
                        <div class="testimonial-card">
                            <div class="star-rating mb-2">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="ms-2 text-success small fw-medium"><i class="fa-solid fa-circle-check"></i> Verified</span>
                            </div>
                            <p class="testimonial-text mb-3">"Our advisor was very helpful, super responsive, and got our business bank account setup issue resolved immediately."</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="author-name">Rebecca S.</span>
                                <span class="time-ago">6 hours ago</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-card">
                            <div class="star-rating mb-2">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="ms-2 text-success small fw-medium"><i class="fa-solid fa-circle-check"></i> Verified</span>
                            </div>
                            <p class="testimonial-text mb-3">"Very impressed by the teamwork and rapid turnaround for our Singapore holding company incorporation."</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="author-name">David O'Reilly</span>
                                <span class="time-ago">7 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<?php include ROOT_PATH . '/elements/footer.php'; ?>