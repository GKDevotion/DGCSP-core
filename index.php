<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';
include ROOT_PATH . '/elements/map-animate.php'; 
?>

<!-- Hero & Services Intro Section -->
<section class="hero-services-wrapper position-relative overflow-hidden pb-5 d-none">
    
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


<?php if( isset($_GET['is_show_logo_ticker']) && $_GET['is_show_logo_ticker'] == 1 ) { ?>
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
<?php } ?>

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
      transform: translateY(5px);
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

<section class="constellation-canvas-right-wrapper position-relative overflow-hidden">
    <div class="container py-5 pt-3">
        
        <canvas class="constellation-canvas-right" id="topRightOurServicesCanvas"></canvas>

        <!-- Top Row Layout -->
        <div class="row g-4 mb-4">
        
            <div class="col-12 col-lg-7 mt-5">
                <h1 class="section-title mb-3">
                    Our <span>Services</span>
                </h1>
                
                <p class="section-desc">
                    We make registering a new company effortless and fast. Our Singapore & regional expert support team guides you through every step of incorporation, licensing, and compliance with top-rated efficiency.
                </p>
            </div>
            
            <!-- Global Entity Management (Large Card) -->
            <div class="col-12 col-lg-6">
                <a href="#" class="service-tile tile-global shadow-sm h-100 theme-border">
                    <div class="tile-content max-w-md">
                        <h3 class="fw-semibold fs-3 mb-2">Global Entity Management</h3>
                        <p class="text-black-50 small mb-0 lh-sm w-75 mt-4">
                            Our experts are here to help you explore options, answer questions, and guide you to the perfect solution for your business.
                        </p>
                    </div>
                    <div class="tile-content pt-4">
                        <span class="btn-pill-learn" onclick="handleToastAction(event, 'Redirecting to Global Entity Management...')">View all Global Entity Management</span>
                    </div>
                </a>
            </div>

            <!-- Accounting & Tax -->
            <div class="col-12 col-md-6 col-lg-3">
                <a href="#" class="service-tile tile-accounting shadow-sm h-100 theme-border">
                    <div class="tile-content">
                        <h4 class="fw-semibold text-dark fs-4 mb-2">Accounting<br />& Tax</h4>
                        <p class="text-secondary small mb-0 lh-sm w-50">
                        Our experts are here to help you explore options, answer questions
                        </p>
                    </div>
                    <div class="tile-content pt-4">
                        <span class="btn-pill-learn" onclick="handleToastAction(event, 'Redirecting to Accounting & Tax...')">Learn more</span>
                    </div>
                </a>
            </div>

            <!-- Fund Services -->
            <div class="col-12 col-md-6 col-lg-3">
                <a href="#" class="service-tile tile-fund shadow-sm h-100 theme-border">
                    <div class="tile-content">
                        <h4 class="fw-semibold text-dark fs-4 mb-2">Fund<br />Services</h4>
                        <p class="text-secondary small mb-0 lh-sm w-50">
                        Our experts are here to help you explore options, answer questions
                        </p>
                    </div>
                    <div class="tile-content pt-4">
                        <span class="btn-pill-learn" onclick="handleToastAction(event, 'Redirecting to Fund Services...')">Learn more</span>
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
                        <h4 class="fw-semibold text-dark fs-4 mb-2">Private Wealth<br />& Family<br />Offices</h4>
                        <p class="text-secondary small mb-0 lh-sm">
                        Our experts are here to help you explore options, answer questions
                        </p>
                    </div>
                    <div class="tile-content pt-4">
                        <span class="btn-pill-learn" onclick="handleToastAction(event, 'Redirecting to Private Wealth & Family Offices...')">Learn more</span>
                    </div>
                </a>
            </div>

            <!-- Mergers & Acquisitions (Tall Card) -->
            <div class="col-12 col-md-6 col-lg-3">
                <a href="#" class="service-tile tile-mergers shadow-sm h-100 theme-border">
                    <div class="tile-content">
                        <h4 class="fw-semibold text-dark fs-4 mb-2">Mergers &<br />Acquisitions</h4>
                        <p class="text-secondary small mb-0 lh-sm">
                        Our experts are here to help you explore options, answer questions
                        </p>
                    </div>
                    <div class="tile-content pt-4">
                        <span class="btn-pill-learn" onclick="handleToastAction(event, 'Redirecting to Mergers & Acquisitions...')">Learn more</span>
                    </div>
                </a>
            </div>

            <!-- Right Column Staked Cards -->
            <div class="col-12 col-lg-6 d-flex flex-column gap-4">
                
                <!-- Corporate Advisory -->
                <a href="#" class="service-tile tile-advisory shadow-sm flex-fill theme-border">
                    <div class="tile-content max-w-sm">
                        <h4 class="fw-semibold text-dark fs-4 mb-2">Corporate Advisory</h4>
                        <p class="text-secondary small mb-0 lh-sm w-50 mt-3">
                            Our experts are here to help you explore options, answer questions
                        </p>
                    </div>
                    <div class="tile-content pt-3">
                        <span class="btn-pill-learn" onclick="handleToastAction(event, 'Redirecting to Corporate Advisory...')">Learn more</span>
                    </div>
                </a>

                <!-- Banking Solutions -->
                <a href="#" class="service-tile tile-banking shadow-sm flex-fill">
                <div class="tile-content max-w-sm">
                    <h4 class="fw-semibold text-dark fs-4 mb-2">Banking Solutions</h4>
                    <p class="text-black-50 small mb-0 lh-sm w-50 mt-3">
                        Our experts are here to help you explore options, answer questions
                    </p>
                </div>
                <div class="tile-content pt-3">
                    <span class="btn-pill-learn" onclick="handleToastAction(event, 'Redirecting to Banking Solutions...')">Learn more</span>
                </div>
                </a>

            </div>

        </div>

    </div>
</section>

<?php if( isset($_GET['is_show_adviser_banner']) && $_GET['is_show_adviser_banner'] == 1 ) { ?>
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
<?php } else { ?>
    <style>
        /* Full-width Belt Container */
        .belt-section {
            position: relative;
            width: 100%;
            min-height: 280px;
            background-image: linear-gradient(
                to right,
                rgba(15, 10, 8, 0.92) 0%,
                rgba(22, 18, 25, 0.75) 50%,
                rgba(10, 15, 25, 0.88) 100%
                ),
                url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            padding: 3.5rem 0;
            box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.8);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            transition: background-image 0.5s ease-in-out;
        }

        /* Inner Glow & Overlay Vignette */
        .belt-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(
                circle at 20% 50%,
                rgba(235, 94, 40, 0.15) 0%,
                transparent 50%
            );
            pointer-events: none;
        }

        /* Left Section Content */
        .belt-heading {
            font-weight: 600;
            font-size: clamp(2.1rem, 4vw, 2.2rem);
            line-height: 1.15;
            color: #ffffff;
            margin-bottom: 0.8rem;
        }

        .belt-subtitle {
            font-size: clamp(0.95rem, 1.5vw, 1rem);
            color: rgba(255, 255, 255, 0.75);
            font-weight: 400;
            max-width: 520px;
            line-height: 1.5;
            margin-bottom: 0;
        }

        /* Glassmorphism Card Box */
        .glassmorphism-card {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(5px) saturate(160%);
            -webkit-backdrop-filter: blur(20px) saturate(160%);
            border: 1px solid rgba(255, 255, 255, 0.35);
            border-radius: 28px;
            padding: 2.2rem 2.5rem;
            display: -webkit-box;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35),
                        inset 0 1px 0 rgba(255, 255, 255, 0.4);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glassmorphism-card:hover {
            background: rgba(255, 255, 255, 0.22);
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.45),
                        inset 0 1px 0 rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
        }

        .glassmorphism-card-text {
            color: #000;
            font-size: clamp(1.05rem, 1.8vw, 1rem);
            font-weight: 400;
            line-height: 1.5;
            margin: 0;
            max-width: 320px;
        }

        /* Custom Pill Button */
        .btn-pill-action {
            background-color: #ffffff;
            color: #000000;
            font-weight: 600;
            font-size: 1.05rem;
            padding: 0.85rem 1.8rem;
            border-radius: 50px;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            white-space: nowrap;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-pill-action i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .btn-pill-action:hover {
            background-color: #f8f9fa;
            color: #000000;
            box-shadow: 0 12px 25px rgba(255, 255, 255, 0.25);
            transform: scale(1.03);
        }

        .btn-pill-action:hover i {
            transform: translateX(5px);
        }

        /* Media Queries for Fine-Tuned Responsiveness */
        @media (max-width: 1199.98px) {
            .glassmorphism-card {
                padding: 1.8rem 2rem;
            }
        }

        @media (max-width: 991.98px) {
            .belt-section {
                padding: 3rem 0;
            }
            .belt-heading-col {
                margin-bottom: 2rem;
                text-align: center;
            }
            .belt-subtitle {
                margin: 0 auto;
            }
            .glassmorphism-card {
                max-width: 650px;
                margin: 0 auto;
            }
        }

        @media (max-width: 767.98px) {
            .glassmorphism-card {
                flex-direction: column;
                text-align: center;
                gap: 1.25rem;
                padding: 1.75rem 1.5rem;
            }
            .glassmorphism-card-text {
                max-width: 100%;
            }
            .btn-pill-action {
                width: 100%;
                max-width: 320px;
            }
        }
    </style>
    <main class="pt-5">
        <section class="belt-section" id="beltSection">
            <div class="container position-relative z-1">
                <div class="row align-items-center">
                
                    <!-- Left Section: Headline & Description -->
                    <div class="col-lg-5 belt-heading-col" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false">
                        <h1 class="belt-heading">
                            Let's grow, together.
                        </h1>
                        <p class="belt-subtitle">
                            Connect with our experts to explore how Devotion can help your company or fund scale globally.
                        </p>
                    </div>

                    <!-- Right Section: Glassmorphism Card -->
                    <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" data-aos-once="false">
                        <div class="glassmorphism-card">
                            <p class="glassmorphism-card-text">
                                Choose a unique name and bring your company to life with Devotion.
                            </p>
                            <a href="#" class="btn-pill-action" onclick="handleToastAction(event, 'Redirecting to your growth journey...')">
                                <span>Start your growth journey</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
<?php } ?>

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
                                <span>mauritius</span>
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
      background: var(--golden-gradient-background);
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
      font-weight: 600;
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
    <div class="offshore-3d-triangle d-none d-lg-bloc">
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
    
    <style>
        /* Licensing Section Wrapper */
        .licensing-section {
            padding: 80px 0;
            background-color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        /* SVG Network Styling */
        .network-svg {
            width: 100%;
            height: auto;
            max-height: 580px;
            overflow: visible;
        }

        /* Interactive SVG Nodes & Connections */
        .svg-node-group {
            cursor: pointer;
            transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), filter 0.3s ease;
            transform-origin: center;
        }

        .svg-node-group:hover, .svg-node-group.is-active {
            transform: scale(1.1);
            filter: drop-shadow(0px 8px 16px rgba(179, 131, 43, 0.3));
        }

        .svg-node-group .node-pulse {
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
            transform-origin: center;
        }

        .svg-node-group:hover .node-pulse, .svg-node-group.is-active .node-pulse {
            opacity: 1;
            animation: pulseGlow 1.8s infinite;
        }

        @keyframes pulseGlow {
            0% { transform: scale(1); opacity: 0.6; }
            50% { transform: scale(1.25); opacity: 0.2; }
            100% { transform: scale(1); opacity: 0.6; }
        }

        .network-line {
            stroke: #d8d8d8;
            stroke-width: 2;
            stroke-linecap: round;
            transition: stroke 0.3s ease, stroke-width 0.3s ease;
        }

        /* Right Side Content Styling */
        .licensing-title {
            font-size: 2.75rem;
            font-weight: 800;
            color: #111111;
            letter-spacing: -0.02em;
            margin-bottom: 0.75rem;
        }

        .licensing-subtitle {
            font-size: 1.125rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 2.25rem;
            font-weight: 400;
        }

        /* Animated Chevron Links */
        .licensing-list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .licensing-link-item {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #2c2c2c;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 0.5rem 0.75rem;
            border-radius: 8px;
            transition: all 0.25s ease-in-out;
            cursor: pointer;
            background-color: transparent;
        }

        .licensing-link-item .chevron-icon {
            color: var(--gold-primary);
            font-size: 1rem;
            margin-right: 14px;
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), color 0.25s ease;
        }

        .licensing-link-item .link-text {
            position: relative;
            text-decoration: underline;
            text-decoration-color: #d1d5db;
            text-underline-offset: 5px;
            transition: color 0.25s ease, text-decoration-color 0.25s ease;
        }

        /* Hover & Active Syncing States */
        .licensing-link-item:hover,
        .licensing-link-item.is-active {
            background-color: rgba(179, 131, 43, 0.05);
        }

        .licensing-link-item:hover .chevron-icon,
        .licensing-link-item.is-active .chevron-icon {
            transform: translateX(6px);
            color: var(--gold-hover);
        }

        .licensing-link-item:hover .link-text,
        .licensing-link-item.is-active .link-text {
            color: var(--gold-hover);
            text-decoration-color: var(--gold-primary);
            font-weight: 600;
        }

        /* Modal Customizations */
        .modal-content {
            border-radius: 20px;
            border: 1px solid #eaeaea;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .modal-header {
            border-bottom: 1px solid #f0f0f0;
            padding: 1.5rem 1.75rem 1rem 1.75rem;
        }

        .badge-gold {
            background-color: #fef8ec;
            color: var(--gold-hover);
            border: 1px solid #f6e6c6;
            font-weight: 600;
        }
    </style>

    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Top-Right Animated Dynamic Network Canvas -->
            <canvas class="constellation-canvas-right" id="topRightLicensingCanvas"></canvas>

            <!-- LEFT COLUMN: Exact Match Vector Graphic SVG Diagram -->
            <div class="col-12 col-lg-6 text-center">
                <svg class="network-svg" viewBox="0 0 540 500" preserveAspectRatio="xMidYMid meet" id="licensing-network-svg">
                    
                    <defs>
                        <radialGradient id="pulseGlowBg" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#b3832b" stop-opacity="0.4"/>
                            <stop offset="100%" stop-color="#b3832b" stop-opacity="0"/>
                        </radialGradient>
                    </defs>

                    <!-- Connecting Lines Network (Exact diagram paths from image) -->
                    <g id="network-lines">
                        <!-- Top Gold Dot to Top Light Grey Joint -->
                        <line x1="126" y1="22" x2="225" y2="22" class="network-line" />
                        <line x1="225" y1="22" x2="280" y2="105" class="network-line" />
                        <!-- Top Left Gold Node connections -->
                        <line x1="80" y1="120" x2="126" y2="22" class="network-line" />
                        <line x1="80" y1="120" x2="128" y2="195" class="network-line" />
                        <!-- Holding Companies Node connection -->
                        <line x1="280" y1="105" x2="368" y2="105" class="network-line" />
                        <!-- Middle Banking Hub connections -->
                        <line x1="128" y1="195" x2="225" y2="195" class="network-line" />
                        <line x1="225" y1="195" x2="260" y2="280" class="network-line" />
                        <line x1="260" y1="280" x2="300" y2="280" class="network-line" />
                        <line x1="300" y1="280" x2="418" y2="195" class="network-line" />
                        <line x1="300" y1="280" x2="418" y2="365" class="network-line" />
                        <!-- Lower left Payment Node connections -->
                        <line x1="260" y1="280" x2="225" y2="365" class="network-line" />
                        <line x1="225" y1="365" x2="130" y2="365" class="network-line" />
                        <line x1="130" y1="365" x2="80" y2="455" class="network-line" />
                        <line x1="80" y1="455" x2="225" y2="525" class="network-line" />
                        <line x1="225" y1="365" x2="280" y2="455" class="network-line" />
                        <line x1="280" y1="455" x2="395" y2="455" class="network-line" />
                    </g>

                    <!-- Structural Neutral Grey & Gold Accent Dots -->
                    <g id="network-joints">
                        <!-- Top Small Gold Dot -->
                        <circle cx="126" cy="22" r="7" fill="#b3832b"/>
                        <!-- Light Grey Joints -->
                        <circle cx="225" cy="22" r="16" fill="#e1e1e1"/>
                        <circle cx="280" cy="105" r="11" fill="#e1e1e1"/>
                        <circle cx="128" cy="195" r="9" fill="#e1e1e1"/>
                        <circle cx="225" cy="195" r="12" fill="#e1e1e1"/>
                        <circle cx="418" cy="195" r="12" fill="#e1e1e1"/>
                        <circle cx="225" cy="365" r="14" fill="#e1e1e1"/>
                        <circle cx="130" cy="365" r="14" fill="#e1e1e1"/>
                        <circle cx="418" cy="365" r="11" fill="#e1e1e1"/>
                        <circle cx="280" cy="455" r="13" fill="#e1e1e1"/>
                        <!-- Middle Right Gold Accent Dot -->
                        <circle cx="365" cy="280" r="8" fill="#b3832b"/>
                        <!-- Bottom Accent Gold Dot -->
                        <circle cx="225" cy="525" r="7" fill="#b3832b"/>
                    </g>

                    <!-- INTERACTIVE SVG NODES LAYER -->
                    <g id="network-nodes">
                        
                        <!-- 1. Financial Companies Node -->
                        <g class="svg-node-group" id="svg-node-financial" data-key="financial">
                            <circle class="node-pulse" cx="80" cy="120" r="55" fill="url(#pulseGlowBg)"/>
                            <circle cx="80" cy="120" r="40" fill="#b3832b"/>
                            <!-- Custom SVG Icon matching financial chart hand -->
                            <g transform="translate(63, 103) scale(1.1)" stroke="#ffffff" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 24h26"/>
                                <path d="M6 18l5-5 4 4 8-9"/>
                                <path d="M17 8h6v6"/>
                                <circle cx="12" cy="7" r="2.5" fill="#ffffff"/>
                            </g>
                            <text x="140" y="108" font-size="16" font-weight="700" fill="#b3832b">Financial</text>
                            <text x="140" y="128" font-size="16" font-weight="700" fill="#b3832b">companies</text>
                        </g>

                        <!-- 2. Holding Companies Node -->
                        <g class="svg-node-group" id="svg-node-holding" data-key="holding">
                            <circle class="node-pulse" cx="368" cy="105" r="48" fill="url(#pulseGlowBg)"/>
                            <circle cx="368" cy="105" r="32" fill="#2b2b2b"/>
                            <!-- Custom holding hands icon -->
                            <g transform="translate(353, 90) scale(0.9)" stroke="#ffffff" stroke-width="1.8" fill="none" stroke-linecap="round">
                                <rect x="3" y="3" width="26" height="26" rx="4"/>
                                <path d="M10 12h12M12 16h8M14 20h4"/>
                            </g>
                            <text x="368" y="42" text-anchor="middle" font-size="15" font-weight="600" fill="#333333">Holding</text>
                            <text x="368" y="60" text-anchor="middle" font-size="15" font-weight="600" fill="#333333">Companies</text>
                        </g>

                        <!-- 3. Banking Central Node -->
                        <g class="svg-node-group" id="svg-node-banking" data-key="banking">
                            <circle class="node-pulse" cx="260" cy="280" r="55" fill="url(#pulseGlowBg)"/>
                            <circle cx="260" cy="280" r="38" fill="#2b2b2b"/>
                            <g transform="translate(245, 265) scale(1.1)" stroke="#ffffff" stroke-width="1.5" fill="none">
                                <path d="M3 10L14 3L25 10V12H3V10Z"/>
                                <path d="M5 12V21M10 12V21M18 12V21M23 12V21"/>
                                <path d="M2 21H26V24H2V21Z"/>
                            </g>
                            <text x="275" y="200" font-size="22" font-weight="700" fill="#8c8c8c">Banking</text>
                        </g>

                        <!-- 4. Crypto Currency License Node -->
                        <g class="svg-node-group" id="svg-node-crypto" data-key="crypto">
                            <circle class="node-pulse" cx="95" cy="280" r="45" fill="url(#pulseGlowBg)"/>
                            <g transform="translate(75, 260) scale(1.1)">
                                <!-- Bitcoin & Coin graphic -->
                                <circle cx="16" cy="18" r="14" fill="none" stroke="#b3832b" stroke-width="2"/>
                                <text x="12" y="23" font-size="14" font-weight="bold" fill="#b3832b">₿</text>
                                <circle cx="26" cy="10" r="8" fill="none" stroke="#b3832b" stroke-width="1.8"/>
                                <text x="23" y="14" font-size="9" font-weight="bold" fill="#b3832b">$</text>
                            </g>
                            <text x="60" y="270" text-anchor="end" font-size="14" font-weight="500" fill="#555555">Crypto</text>
                            <text x="60" y="288" text-anchor="end" font-size="14" font-weight="500" fill="#555555">Currency</text>
                            <text x="60" y="306" text-anchor="end" font-size="14" font-weight="500" fill="#555555">License</text>
                        </g>

                        <!-- 5. E-Money Institution License Node -->
                        <g class="svg-node-group" id="svg-node-emoney" data-key="emoney">
                            <circle class="node-pulse" cx="420" cy="275" r="45" fill="url(#pulseGlowBg)"/>
                            <g transform="translate(400, 255) scale(1.1)" stroke="#b3832b" stroke-width="1.8" fill="none">
                                <rect x="6" y="2" width="16" height="26" rx="3"/>
                                <path d="M10 20h8"/>
                                <path d="M12 10h4M10 14h6"/>
                                <path d="M2 6c2-2 4-2 4 0M2 10c3-2 5-2 5 0"/>
                            </g>
                            <text x="450" y="265" font-size="14" font-weight="500" fill="#555555">E-Money</text>
                            <text x="450" y="283" font-size="14" font-weight="500" fill="#555555">Institution</text>
                            <text x="450" y="301" font-size="14" font-weight="500" fill="#555555">License</text>
                        </g>

                        <!-- 6. Payment Service Provider License Node -->
                        <g class="svg-node-group" id="svg-node-payment" data-key="payment">
                            <circle class="node-pulse" cx="80" cy="455" r="55" fill="url(#pulseGlowBg)"/>
                            <circle cx="80" cy="455" r="42" fill="#e1e1e1"/>
                            <g transform="translate(65, 440) scale(1.1)" stroke="#333333" stroke-width="1.8" fill="none">
                                <rect x="2" y="5" width="22" height="15" rx="3"/>
                                <path d="M2 10h22"/>
                                <circle cx="18" cy="15" r="1.5" fill="#333333"/>
                                <path d="M6 22l4 3 6-5"/>
                            </g>
                            <text x="135" y="448" font-size="13" font-weight="700" fill="#2c2c2c">Payment Service</text>
                            <text x="135" y="468" font-size="13" font-weight="700" fill="#2c2c2c">Provider License</text>
                        </g>

                        <!-- 7. E-Gaming License Center Text & Node -->
                        <g class="svg-node-group" id="svg-node-egaming" data-key="egaming">
                            <!-- Center Label -->
                            <text x="325" y="380" text-anchor="middle" font-size="16" font-weight="600" fill="#b3832b">E-Gaming</text>
                            <text x="325" y="400" text-anchor="middle" font-size="16" font-weight="600" fill="#b3832b">License</text>
                            
                            <!-- Bottom Right Game Controller Node -->
                            <circle class="node-pulse" cx="395" cy="455" r="55" fill="url(#pulseGlowBg)"/>
                            <circle cx="395" cy="455" r="42" fill="#b3832b"/>
                            <g transform="translate(378, 438) scale(1.1)" stroke="#ffffff" stroke-width="1.8" fill="none" stroke-linecap="round">
                                <path d="M6 11c0-3 3-5 7-5s7 2 7 5v5c0 3-1 5-3 5l-2-3H11l-2 3c-2 0-3-2-3-5v-5z"/>
                                <path d="M9 11h3M10.5 9.5v3"/>
                                <circle cx="16" cy="10.5" r="0.5" fill="#ffffff"/>
                                <circle cx="17.5" cy="12" r="0.5" fill="#ffffff"/>
                            </g>
                        </g>

                    </g>
                </svg>
            </div>

            <!-- RIGHT COLUMN: Title, Subtitle, and Interactive Chevron Links -->
            <div class="col-12 col-lg-6 ps-lg-5">
                
                <h2 class="licensing-title">Licensing</h2>
                
                <p class="licensing-subtitle">
                    Secure the Right Licence.<br>
                    Build Your Business with Confidence.
                </p>

                <div class="licensing-list" id="licensing-links-container">
                    
                    <!-- Link 1 -->
                    <div class="licensing-link-item" data-key="financial">
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                        <span class="link-text">Financial companies</span>
                    </div>

                    <!-- Link 2 -->
                    <div class="licensing-link-item" data-key="holding">
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                        <span class="link-text">Holding Companies</span>
                    </div>

                    <!-- Link 3 -->
                    <div class="licensing-link-item" data-key="crypto">
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                        <span class="link-text">Crypto Currency License</span>
                    </div>

                    <!-- Link 4 -->
                    <div class="licensing-link-item" data-key="payment">
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                        <span class="link-text">Payment Service Provider License</span>
                    </div>

                    <!-- Link 5 -->
                    <div class="licensing-link-item" data-key="emoney">
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                        <span class="link-text">E-Money Institution License</span>
                    </div>

                    <!-- Link 6 -->
                    <div class="licensing-link-item" data-key="egaming">
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                        <span class="link-text">E-Gaming License</span>
                    </div>

                    <!-- Link 7 -->
                    <div class="licensing-link-item" data-key="banking">
                        <i class="fa-solid fa-chevron-right chevron-icon"></i>
                        <span class="link-text">Banking</span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- -->
<style>
    /* Hero Banner Container */
    .partner-section {
        background-color: var(--gold-primary);
        position: relative;
        /* overflow: hidden; */
        min-height: 400px;
        color: #ffffff;
        display: flex;
        align-items: center;
    }

    /* Top Left Geometric Abstract Pattern Canvas */
    .geometric-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 420px;
        height: 320px;
        pointer-events: none;
        z-index: 1;
        opacity: 0.65;
    }

    /* Content Container Layering */
    .content-wrap {
        position: relative;
        z-index: 5;
        padding: 0;
    }

    .partner-section .section-desc {
        font-size: 1.05rem;
        font-weight: 300;
        line-height: 1.6;
        margin-bottom: 2.5rem;
        padding-left: 0 !important;
        color: rgba(255, 255, 255, 0.92);
    }

    /* Logo Slider Container */
    .slider-wrapper {
        display: flex;
        align-items: center;
        gap: 2px;
        position: relative;
    }

    .carousel-btn {
        background: transparent;
        border: none;
        color: rgba(255, 255, 255, 0.8);
        font-size: 1.5rem;
        cursor: pointer;
        padding: 2px;
        transition: all 0.3s ease;
        outline: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .carousel-btn:hover {
        color: #ffffff;
        transform: scale(1.15);
    }

    /* Individual Card Container */
    .logo-cards-viewport {
        overflow: hidden;
        width: 100%;
        position: relative;
        /* Added smooth gradient mask on edge fades for seamless look */
        /* mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%);
        -webkit-mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%); */
    }

    .logo-cards-track {
        display: flex;
        gap: 16px;
        width: max-content;
        /* Continuous infinite right-to-left marquee animation */
        animation: infiniteSlide 20s linear infinite;
        will-change: transform;
    }

    /* Pause animation on hover for accessibility and interaction */
    .slider-wrapper:hover .logo-cards-track {
        animation-play-state: paused;
    }

    @keyframes infiniteSlide {
        0% {
            transform: translateX(0);
        }
        100% {
            /* Shifts exactly half the duplicated track length */
            transform: translateX(-50%);
        }
    }

    .logo-card {
        background: #ffffff;
        border-radius: var(--card-radius);
        padding: 16px 20px;
        min-width: 130px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        flex-shrink: 0;
    }

    .logo-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .logo-card img, .logo-card svg {
        max-height: 42px;
        max-width: 100%;
        object-fit: contain;
    }

    /* Pagination Indicators */
    .pagination-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 1.5rem;
    }

    .dot {
        width: 12px;
        height: 12px;
        border: 2px solid #ffffff;
        border-radius: 50%;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0;
    }

    .dot.active {
        background-color: #ffffff;
    }

    /* Floating Background Graphic Shapes (Right Side) */
    .graphics-container {
        position: relative;
        height: 100%;
        /* min-height: 480px; */
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }

    /* Large Rounded Soft Card Shape Behind Model */
    .bg-shape-large {
        position: absolute;
        bottom: 10px;
        right: 5%;
        width: 413px;
        height: 320px;
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(4px);
        border-radius: 50px;
        z-index: 2;
    }

    /* Small Outline Box Top Right */
    .bg-shape-outline {
        position: absolute;
        top: 10%;
        right: -3%;
        width: 100px;
        height: 100px;
        border: 2px solid rgba(255, 235, 170, 0.8);
        border-radius: 10px;
        z-index: 2;
    }

    /* Floating Bottom Left Card Shape Overlay */
    .bg-shape-small {
        position: absolute;
        bottom: 40px;
        left: 25%;
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 18px;
        z-index: 3;
        border: 1px solid #fff;
    }

    /* Professional Model Image */
    .model-img {
        position: relative;
        z-index: 4;
        /* max-height: 400px;
        object-fit: contain; */
        filter: drop-shadow(0 10px 20px rgba(0,0,0,0.18));
        margin-bottom: 0;
        margin-top: -100px;
        width: 75%;
        left: 12%;
    }

    /* Responsive Breakpoints Adjustment */
    @media (max-width: 991.98px) {
        .partner-section {
            padding-top: 2rem;
        }
        .partner-section .section-title {
            font-size: 2.2rem;
        }
        .graphics-container {
            min-height: 380px;
            margin-top: 2rem;
        }
        .bg-shape-large {
            width: 340px;
            height: 340px;
            right: 50%;
            transform: translateX(50%);
        }
        .bg-shape-outline {
            right: 15%;
        }
        .model-img {
            max-height: 400px;
        }
    }

    @media (max-width: 575.98px) {
        .partner-section .section-title {
            font-size: 1.85rem;
        }
        .partner-section .section-desc {
            font-size: 0.95rem;
        }
        .logo-card {
            min-width: 105px;
            height: 65px;
            padding: 10px 12px;
        }
        .logo-card img, .logo-card svg {
            max-height: 32px;
        }
        .carousel-btn {
            padding: 4px;
            font-size: 1.25rem;
        }
    }
</style>
<section class="partner-section">
    <!-- Animated Constellation Network Canvas in Top Left Corner -->
    <canvas class="geometric-bg" id="constellationCanvas"></canvas>

    <div class="container content-wrap">
        <div class="row align-items-center">
            
            <!-- Left Column: Headline, Text & Interactive Carousel -->
            <div class="col-lg-6 col-md-12 text-center text-lg-start">
                <h2 class="section-title text-white">Try us today!</h2>
                <p class="section-desc ms-auto ms-lg-0 me-auto me-lg-0 text-white">
                    Let's Devotion and our Partners do the rest. We are working with global Banks in both traditional and digital type, the Lawyers, local Experts
                </p>

                <!-- Partner Logo Carousel Area -->
                <div class="slider-wrapper my-3">
                    <button class="carousel-btn prev-btn" id="prevBtn" aria-label="Previous Slide">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <div class="logo-cards-viewport">
                        <!-- Dual duplicated logo set inside track for seamless infinite looping -->
                        <div class="logo-cards-track" id="logoTrack">
                            
                            <!-- Original Logo Set -->
                            <div class="logo-card">
                                <svg viewBox="0 0 140 45" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <text x="5" y="16" font-family="Arial, sans-serif" font-size="10" fill="#002a54" font-weight="bold">بنك أبوظبي الأول</text>
                                    <text x="5" y="36" font-family="Arial, sans-serif" font-size="22" font-weight="900" fill="#002a54">FAB</text>
                                    <path d="M60 10 L85 22 L70 38 Z" fill="#e31837" />
                                    <path d="M72 15 L95 28 L80 40 Z" fill="#002a54" opacity="0.8" />
                                    <text x="98" y="24" font-family="Arial, sans-serif" font-size="7" fill="#002a54">First Abu Dhabi Bank</text>
                                </svg>
                            </div>

                            <div class="logo-card">
                                <svg viewBox="0 0 100 40" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <text x="10" y="30" font-family="'Poppins', sans-serif" font-size="32" font-weight="800" fill="#4d148c">liv<tspan fill="#ff007a">.</tspan></text>
                                </svg>
                            </div>

                            <div class="logo-card">
                                <svg viewBox="0 0 60 60" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="26" fill="#007a3d" />
                                    <path d="M30 6 L36 20 L50 20 L38 29 L43 43 L30 34 L17 43 L22 29 L10 20 L24 20 Z" fill="#b08332" />
                                    <circle cx="30" cy="30" r="8" fill="#a01830" />
                                </svg>
                            </div>

                            <div class="logo-card">
                                <svg viewBox="0 0 120 45" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(45, 14)">
                                        <path d="M0 0 L12 -8 L10 4 Z" fill="#ff5000" />
                                        <path d="M0 0 L15 -2 L8 8 Z" fill="#ff7800" />
                                        <path d="M0 0 L14 6 L4 11 Z" fill="#ffa000" />
                                        <path d="M0 0 L8 12 L-2 10 Z" fill="#ffc107" />
                                    </g>
                                    <text x="10" y="28" font-family="Arial, sans-serif" font-size="11" fill="#002a54" font-weight="bold">المشرق</text>
                                    <text x="10" y="38" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="#002a54">mashreq</text>
                                </svg>
                            </div>

                            <div class="logo-card">
                                <svg viewBox="0 0 110 40" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="5" y="8" width="24" height="24" rx="4" fill="#107c41" />
                                    <text x="12" y="25" font-family="Arial, sans-serif" font-size="16" fill="#fff" font-weight="bold">C</text>
                                    <text x="36" y="24" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="#002a54">CBD</text>
                                </svg>
                            </div>

                            <!-- Duplicated Logo Set (For smooth infinite recursive right-to-left marquee) -->
                            <div class="logo-card" aria-hidden="true">
                                <svg viewBox="0 0 140 45" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <text x="5" y="16" font-family="Arial, sans-serif" font-size="10" fill="#002a54" font-weight="bold">بنك أبوظبي الأول</text>
                                    <text x="5" y="36" font-family="Arial, sans-serif" font-size="22" font-weight="900" fill="#002a54">FAB</text>
                                    <path d="M60 10 L85 22 L70 38 Z" fill="#e31837" />
                                    <path d="M72 15 L95 28 L80 40 Z" fill="#002a54" opacity="0.8" />
                                    <text x="98" y="24" font-family="Arial, sans-serif" font-size="7" fill="#002a54">First Abu Dhabi Bank</text>
                                </svg>
                            </div>

                            <div class="logo-card" aria-hidden="true">
                                <svg viewBox="0 0 100 40" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <text x="10" y="30" font-family="'Poppins', sans-serif" font-size="32" font-weight="800" fill="#4d148c">liv<tspan fill="#ff007a">.</tspan></text>
                                </svg>
                            </div>

                            <div class="logo-card" aria-hidden="true">
                                <svg viewBox="0 0 60 60" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="26" fill="#007a3d" />
                                    <path d="M30 6 L36 20 L50 20 L38 29 L43 43 L30 34 L17 43 L22 29 L10 20 L24 20 Z" fill="#b08332" />
                                    <circle cx="30" cy="30" r="8" fill="#a01830" />
                                </svg>
                            </div>

                            <div class="logo-card" aria-hidden="true">
                                <svg viewBox="0 0 120 45" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(45, 14)">
                                        <path d="M0 0 L12 -8 L10 4 Z" fill="#ff5000" />
                                        <path d="M0 0 L15 -2 L8 8 Z" fill="#ff7800" />
                                        <path d="M0 0 L14 6 L4 11 Z" fill="#ffa000" />
                                        <path d="M0 0 L8 12 L-2 10 Z" fill="#ffc107" />
                                    </g>
                                    <text x="10" y="28" font-family="Arial, sans-serif" font-size="11" fill="#002a54" font-weight="bold">المشرق</text>
                                    <text x="10" y="38" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="#002a54">mashreq</text>
                                </svg>
                            </div>

                            <div class="logo-card" aria-hidden="true">
                                <svg viewBox="0 0 110 40" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="5" y="8" width="24" height="24" rx="4" fill="#107c41" />
                                    <text x="12" y="25" font-family="Arial, sans-serif" font-size="16" fill="#fff" font-weight="bold">C</text>
                                    <text x="36" y="24" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="#002a54">CBD</text>
                                </svg>
                            </div>

                        </div>
                    </div>

                    <button class="carousel-btn next-btn" id="nextBtn" aria-label="Next Slide">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

                <!-- Pagination Dot Indicators -->
                <div class="pagination-dots" id="dotsContainer">
                    <button class="dot active" data-index="0" aria-label="Go to slide 1"></button>
                    <button class="dot" data-index="1" aria-label="Go to slide 2"></button>
                    <button class="dot" data-index="2" aria-label="Go to slide 3"></button>
                    <button class="dot" data-index="3" aria-label="Go to slide 4"></button>
                </div>

            </div>

            <!-- Right Column: Model cutout overlay with geometric background elements -->
            <div class="col-lg-6 col-md-12">
                <div class="graphics-container">
                    <!-- Abstract Soft Transparent Cards Behind Model -->
                    <div class="bg-shape-large"></div>
                    <div class="bg-shape-outline"></div>
                    <div class="bg-shape-small"></div>

                    <!-- Professional Business Woman Image Cutout -->
                    <img src="assets/images/try-us-today-girl.png" 
                            alt="Professional Business Expert holding tablet" 
                            class="model-img img-fluid"
                            onerror="this.src='assets/images/favicon.png';">
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const canvas = document.getElementById('constellationCanvas');
        const ctx = canvas.getContext('2d');

        function resizeCanvas() {
            canvas.width = Math.min(window.innerWidth, 500);
            canvas.height = 350;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Constellation Nodes Setup
        const numNodes = 7;
        const nodes = [];

        for (let i = 0; i < numNodes; i++) {
            nodes.push({
                x: Math.random() * (canvas.width * 0.8) + 20,
                y: Math.random() * (canvas.height * 0.7) + 20,
                vx: (Math.random() - 0.5) * 0.4, // Slow floating velocity X
                vy: (Math.random() - 0.5) * 0.4, // Slow floating velocity Y
                radius: Math.random() * 2 + 2.5
            });
        }

        // Draw and update node positions recursively
        function animateConstellation() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Update positions & boundary check
            for (let i = 0; i < nodes.length; i++) {
                let node = nodes[i];
                node.x += node.vx;
                node.y += node.vy;

                if (node.x < 15 || node.x > canvas.width - 20) node.vx *= -1;
                if (node.y < 15 || node.y > canvas.height - 20) node.vy *= -1;

                // Draw node point
                ctx.beginPath();
                ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(255, 255, 255, 0.8)';
                ctx.fill();
            }

            // Draw connecting network lines between points
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    let dx = nodes[i].x - nodes[j].x;
                    let dy = nodes[i].y - nodes[j].y;
                    let dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < 180) {
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.strokeStyle = `rgba(255, 255, 255, ${0.25 * (1 - dist / 180)})`;
                        ctx.lineWidth = 0.95;
                        ctx.stroke();
                    }
                }
            }

            requestAnimationFrame(animateConstellation);
        }
        animateConstellation();

        const track = document.getElementById('logoTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dots = document.querySelectorAll('.dot');
        const totalDots = dots.length;

        let dotIndex = 0;

        // Update active dot in sync with continuous infinite loop
        setInterval(() => {
            dots[dotIndex].classList.remove('active');
            dotIndex = (dotIndex + 1) % totalDots;
            dots[dotIndex].classList.add('active');
        }, 5000);

        // Button Click Handler to scroll track manually on button press
        prevBtn.addEventListener('click', () => {
            track.style.animationPlayState = 'paused';
            track.scrollBy({ left: -160, behavior: 'smooth' });
            setTimeout(() => {
                track.style.animationPlayState = 'running';
            }, 2000);
        });

        nextBtn.addEventListener('click', () => {
            track.style.animationPlayState = 'paused';
            track.scrollBy({ left: 160, behavior: 'smooth' });
            setTimeout(() => {
                track.style.animationPlayState = 'running';
            }, 2000);
        });

        // Dot Click Events
        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                dots.forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
                dotIndex = idx;
            });
        });
    });
</script>

<!-- why go with devotion -->
<style>
    /* Main Section Container */
    .why-devotion-section {
        position: relative;
        padding: 5rem 0 6rem 0;
        background-color: #ffffff;
        overflow: hidden;
    }

    /* Top-Right Animated Constellation Canvas */
    .constellation-canvas-right {
        position: absolute;
        top: 0;
        right: 0;
        width: 480px;
        height: 380px;
        pointer-events: none;
        z-index: 1;
    }

    /* Section Content Layer */
    .section-content {
        position: relative;
        z-index: 2;
    }

    /* Section Header Styling */
    .why-devotion-section .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-dark);
        letter-spacing: -0.5px;
        margin-bottom: 0.5rem;
    }

    .why-devotion-section .section-subtitle {
        font-size: 1.05rem;
        color: var(--text-muted);
        font-weight: 400;
        margin-bottom: 4rem;
    }

    /* Feature Card Container & Hover Effects */
    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
        padding: 1.25rem;
        border-radius: 12px;
        transition: transform 0.3s ease, background-color 0.3s ease;
        height: 100%;
    }

    .feature-item:hover {
        background-color: #f9fafb;
        transform: translateY(-2px);
    }

    /* Icon Container Box */
    .feature-icon-wrapper {
        flex-shrink: 0;
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Inline SVG Styling */
    .feature-icon-wrapper svg {
        width: 40px;
        height: 40px;
        stroke: var(--text-dark);
        fill: none;
        stroke-width: 1.75;
        stroke-linecap: round;
        stroke-linejoin: round;
        transition: transform 0.3s ease, stroke 0.3s ease;
    }

    .feature-item:hover .feature-icon-wrapper svg {
        transform: scale(1.08);
        stroke: #000000;
    }

    /* Feature Text Details */
    .why-devotion-section .feature-title {
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        line-height: 1.35;
    }

    .why-devotion-section .feature-description {
        font-size: 0.9rem;
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 0;
        font-weight: 400;
    }

    /* Responsive Breakpoints */
    @media (max-width: 991.98px) {
        .why-devotion-section {
            padding: 3.5rem 0 4rem 0;
        }
        .why-devotion-section .section-title {
            font-size: 2rem;
        }
        .why-devotion-section .section-subtitle {
            margin-bottom: 2.5rem;
            font-size: 0.95rem;
        }
        .constellation-canvas-right {
            width: 320px;
            height: 280px;
            opacity: 0.7;
        }
    }

    @media (max-width: 575.98px) {
        .feature-item {
            padding: 0.75rem 0.5rem;
        }
        .feature-icon-wrapper svg {
            width: 34px;
            height: 34px;
        }
        .why-devotion-section .feature-title {
            font-size: 1.1rem;
        }
        .why-devotion-section .feature-description {
            font-size: 0.9rem;
        }
        .constellation-canvas-right {
            width: 240px;
            height: 220px;
            opacity: 0.5;
        }
    }
</style>

<section class="why-devotion-section">
    <!-- Top-Right Animated Dynamic Network Canvas -->
    <canvas class="constellation-canvas-right" id="topRightWhyWithDevotionCanvas"></canvas>

    <div class="container section-content">
        
        <!-- Section Header -->
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="section-title">Why go with Devotion</h2>
                <p class="section-subtitle">1,000+ business company doing Company services with us.</p>
            </div>
        </div>

        <!-- Features Grid (2 Columns on Desktop, 1 Column on Mobile/Tablet) -->
        <div class="row g-4 lg:g-5">
            
            <!-- Feature 1: Transparent & Optimize Workflow (SVG Book/Workflow) -->
            <div class="col-lg-6 col-md-12 mt-1">
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            <line x1="8" y1="6" x2="16" y2="6"></line>
                            <line x1="8" y1="10" x2="16" y2="10"></line>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-title">Transparent and Optimize Workflow</h3>
                        <p class="feature-description">
                            Easing complex paperwork burden with a transparent &amp; streamlined business process.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 2: Dedicated Lifetime Support (SVG Smiling Face) -->
            <div class="col-lg-6 col-md-12 mt-1">
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-title">Dedicated Lifetime Support</h3>
                        <p class="feature-description">
                            Our helpful and experienced staff is happy to assist you throughout the life of your company.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 3: Extensive Network of Professionals Affiliates (SVG Globe) -->
            <div class="col-lg-6 col-md-12 mt-1">
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-title">Extensive Network of Professionals Affiliates</h3>
                        <p class="feature-description">
                            Our connection with key service providers and banking institutions enable our clients a one-stop service experience.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 4: Integrated Customized Solutions (SVG Puzzle Piece) -->
            <div class="col-lg-6 col-md-12 mt-1">
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19.439 7.85c-.049-.322.059-.648.289-.878l1.568-1.568a2.121 2.121 0 0 0-2.999-3l-1.568 1.568a.862.862 0 0 1-.878.289 4.965 4.965 0 0 0-2.7.409.865.865 0 0 1-.951-.194L11.03 3.307a2.121 2.121 0 0 0-3 2.999l1.169 1.169a.864.864 0 0 1 .194.951 4.964 4.964 0 0 0-.409 2.7.863.863 0 0 1-.289.878L7.127 13.58a2.121 2.121 0 0 0 3 3l1.568-1.568c.23-.23.556-.338.878-.289a4.964 4.964 0 0 0 2.7-.409c.334-.146.721-.077.951.194l1.169 1.169a2.121 2.121 0 0 0 3-3l-1.169-1.169a.864.864 0 0 1-.194-.951 4.965 4.965 0 0 0 .409-2.7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-title">Integrated Customized Solutions</h3>
                        <p class="feature-description">
                            We have the most knowledgeable customer service team with effective networks to integrate the best solutions for your industry.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 5: Transparent in Cost (SVG Wallet) -->
            <div class="col-lg-6 col-md-12 mt-1">
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                            <path d="M16 3H4a2 2 0 0 0-2 2v2"></path>
                            <circle cx="16" cy="14" r="1"></circle>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-title">Transparent in Cost</h3>
                        <p class="feature-description">
                            All inclusive, we guarantee that there is no hidden fee.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 6: Compliance Notices (SVG Speech Bubbles) -->
            <div class="col-lg-6 col-md-12 mt-1">
                <div class="feature-item">
                    <div class="feature-icon-wrapper">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            <line x1="8" y1="9" x2="16" y2="9"></line>
                            <line x1="8" y1="13" x2="14" y2="13"></line>
                        </svg>
                    </div>
                    <div>
                        <h3 class="feature-title">Compliance Notices</h3>
                        <p class="feature-description">
                            We keep track of filing deadlines and keep you posted. Your deadlines are our deadlines.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Select all canvases with the class
        const canvases = document.querySelectorAll('.constellation-canvas-right');
        
        // Safety check: Exit if no canvas is found
        if (!canvases.length) return;

        // 2. Loop through each canvas element independently
        canvases.forEach((canvas) => {
            const ctx = canvas.getContext('2d');

            function resizeCanvas() {
                const rect = canvas.getBoundingClientRect();
                canvas.width = rect.width || 480;
                canvas.height = rect.height || 380;
            }
            
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            // Create constellation network nodes specifically for this canvas instance
            const nodeCount = 9;
            const nodes = [];

            for (let i = 0; i < nodeCount; i++) {
                nodes.push({
                    x: Math.random() * canvas.width * 0.75 + canvas.width * 0.2, // Focus towards upper-right
                    y: Math.random() * canvas.height * 0.75,
                    vx: (Math.random() - 0.5) * 0.35, // Slow, elegant drifting velocity
                    vy: (Math.random() - 0.5) * 0.35,
                    radius: Math.random() * 2 + 1.8
                });
            }

            // Continuous animation loop for this specific canvas
            function renderNetwork() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Update node positions and handle subtle bouncing boundaries
                for (let i = 0; i < nodes.length; i++) {
                    const node = nodes[i];
                    node.x += node.vx;
                    node.y += node.vy;

                    if (node.x < canvas.width * 0.1 || node.x > canvas.width - 10) node.vx *= -1;
                    if (node.y < 10 || node.y > canvas.height * 0.85) node.vy *= -1;

                    // Render node dot
                    ctx.beginPath();
                    ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
                    ctx.fillStyle = '#ab8139';
                    ctx.fill();
                }

                // Render dynamic connecting lines between adjacent nodes
                for (let i = 0; i < nodes.length; i++) {
                    for (let j = i + 1; j < nodes.length; j++) {
                        const dx = nodes[i].x - nodes[j].x;
                        const dy = nodes[i].y - nodes[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 170) {
                            ctx.beginPath();
                            ctx.moveTo(nodes[i].x, nodes[i].y);
                            ctx.lineTo(nodes[j].x, nodes[j].y);
                            // Subdued line opacity to fit the light background
                            ctx.strokeStyle = `rgba(0, 0, 0, ${0.18 * (1 - distance / 170)})`;
                            ctx.lineWidth = 0.85;
                            ctx.stroke();
                        }
                    }
                }

                requestAnimationFrame(renderNetwork);
            }

            // Start the animation loop for this instance
            renderNetwork();
        });
    });
</script>

<!-- -->
<style>

    /* Main Section Styling */
    .expansion-section {
        position: relative;
        padding: 0 0 3rem;
        background-color: #ffffff;
        overflow: hidden;
    }

    /* Dynamic Animated Constellation Canvas in Bottom-Left */
    .constellation-canvas-left {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 420px;
        height: 320px;
        pointer-events: none;
        z-index: 1;
    }

    .section-content {
        position: relative;
        z-index: 2;
    }

    /* SVG World Map Container */
    .map-wrapper {
        width: 100%;
        height: auto;
        /* max-width: 620px; */
        margin: 0 auto;
    }

    .map-wrapper svg {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Right Column Content */
    .pill-badge {
        display: inline-block;
        background-color: var(--gold-primary);
        color: #ffffff;
        font-size: 0.85rem;
        font-weight: 500;
        padding: 0.45rem 1.25rem;
        border-radius: 50px;
        margin-bottom: 1.5rem;
        letter-spacing: 0.2px;
        box-shadow: 0 4px 12px rgba(179, 136, 59, 0.2);
    }

    .main-heading {
        font-size: 2.3rem;
        font-weight: 600;
        color: var(--text-dark);
        line-height: 1.3;
        letter-spacing: 0.5px;
        /* margin-bottom: 1.25rem; */
    }

    .expansion-section .description-text {
        font-size: 0.95rem;
        color: var(--text-muted);
        line-height: 1.7;
        font-weight: 300;
        margin-bottom: 1.75rem;
        max-width: 500px;
    }

    .location-link {
        display: inline-block;
        color: var(--text-dark);
        font-weight: 700;
        font-size: 0.95rem;
        text-decoration: underline;
        text-underline-offset: 4px;
        transition: color 0.25s ease, transform 0.25s ease;
    }

    .location-link:hover {
        color: var(--gold-primary);
        transform: translateX(3px);
    }

    /* Bottom Counter Stats Row */
    .stats-row {
        margin-top: 5rem;
        padding-top: 1rem;
    }

    .stat-item {
        padding: 0.5rem 1rem;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 600;
        color: var(--text-dark);
        line-height: 1.1;
        margin-bottom: 0;
        letter-spacing: 1px;
    }

    .stat-label {
        font-size: 1.4rem;
        color: var(--text-muted);
        font-weight: 400;
        margin-bottom: 0;
    }

    /* Responsive Breakpoints */
    @media (max-width: 991.98px) {
        .expansion-section {
            padding: 3.5rem 0 3rem 0;
        }
        .main-heading {
            font-size: 1.95rem;
        }
        .stats-row {
            margin-top: 3.5rem;
        }
        .stat-number {
            font-size: 2.25rem;
        }
        .stat-label {
            font-size: 0.95rem;
        }
        .constellation-canvas-left {
            width: 300px;
            height: 250px;
            opacity: 0.7;
        }
    }

    @media (max-width: 575.98px) {
        .main-heading {
            font-size: 1.65rem;
        }
        .stat-number {
            font-size: 2rem;
        }
        .stats-row {
            row-gap: 2rem;
        }
        .constellation-canvas-left {
            width: 220px;
            height: 200px;
            opacity: 0.5;
        }
    }
</style>

<section class="expansion-section">
    <!-- Bottom-Left Dynamic Constellation Network Canvas -->
    <canvas class="constellation-canvas-left" id="bottomLeftCanvas"></canvas>

    <div class="container section-content">
        <div class="row align-items-center g-4 lg:g-5">
            
            <!-- Left Column: SVG Dotted World Map -->
            <div class="col-lg-7 col-md-12">
                <div class="map-wrapper">
                    <!-- SVG -->
                     <img src="assets/images/svg/dotted-expand-asia-map.svg" 
                            alt="Dotted World Map Illustration" 
                            class="img-fluid">
                </div>
            </div>

            <!-- Right Column: Heading & Content -->
            <div class="col-lg-5 col-md-12">
                <div>
                    <span class="pill-badge">Regional onshore expansion</span>
                    
                    <h2 class="main-heading">
                        Expand &amp; operate in Asia-Pacific under one invoice
                    </h2>
                    
                    <p class="description-text">
                        Thanks to our on-the-ground presence in Asia's hard-to-navigate markets and a secure client platform, you can expand your offshore business into other markets in Asia-Pacific with ease and confidence.
                    </p>
                    
                    <a href="#" class="location-link">View all Locations</a>
                </div>
            </div>

        </div>

        <!-- Bottom Counter Stats Row -->
        <div class="row stats-row justify-content-between align-items-center text-start">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-item">
                    <div class="stat-number">20</div>
                    <p class="stat-label">Markets</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-item">
                    <div class="stat-number">29</div>
                    <p class="stat-label">Offices</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-item">
                    <div class="stat-number">22,000+</div>
                    <p class="stat-label">Active Client</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <div class="stat-item">
                    <div class="stat-number">2,000+</div>
                    <p class="stat-label">Employees</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const canvas = document.getElementById('bottomLeftCanvas');
        const ctx = canvas.getContext('2d');

        function resizeCanvas() {
            const rect = canvas.getBoundingClientRect();
            canvas.width = rect.width || 420;
            canvas.height = rect.height || 320;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Create network nodes for bottom-left corner constellation
        const nodeCount = 8;
        const nodes = [];

        for (let i = 0; i < nodeCount; i++) {
            nodes.push({
                x: Math.random() * canvas.width * 0.7,
                y: canvas.height * 0.3 + Math.random() * canvas.height * 0.7,
                vx: (Math.random() - 0.5) * 0.3,
                vy: (Math.random() - 0.5) * 0.3,
                radius: Math.random() * 2 + 1.6
            });
        }

        // Continuous animation loop for dynamic dynamic constellation network
        function renderNetwork() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (let i = 0; i < nodes.length; i++) {
                const node = nodes[i];
                node.x += node.vx;
                node.y += node.vy;

                if (node.x < 10 || node.x > canvas.width * 0.8) node.vx *= -1;
                if (node.y < canvas.height * 0.2 || node.y > canvas.height - 10) node.vy *= -1;

                ctx.beginPath();
                ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
                ctx.fillStyle = '#ab8139';
                ctx.fill();
            }

            // Render dynamic connecting lines between nearby nodes
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const dx = nodes[i].x - nodes[j].x;
                    const dy = nodes[i].y - nodes[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 160) {
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.strokeStyle = `rgba(0, 0, 0, ${0.16 * (1 - distance / 160)})`;
                        ctx.lineWidth = 0.85;
                        ctx.stroke();
                    }
                }
            }

            requestAnimationFrame(renderNetwork);
        }

        renderNetwork();
    });
</script>

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

<section class="py-5 position-relative overflow-visible bg-golden-gradient d-none">
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

    .experts-section .section-desc {
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
      padding: 15px;
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
                    <a href="#inquiry" class="btn-gold-hero" onclick="handleToastAction(event, 'Redirecting to Contact Form...')">
                        Talk to US <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Right Representative Image Column -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                <!-- Testimonial Cards Carousel Row -->
                <div class="row g-3 mt-2 pt-1">
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

        <div class="row g-4 mt-1">
        
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

    </div>
</section>
<?php include ROOT_PATH . '/elements/footer.php'; ?>