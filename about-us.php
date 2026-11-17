<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$img = BASE_URL . BASE_FOLDER . '/assets/images/about-us';
$obj = BASE_URL . BASE_FOLDER . '/assets/images/objects';
?>

    <style>
        :root {
            --brand-gold: #c4963a;
            --brand-dark: #25282c;
            --brand-muted: #5a6068;
        }

        /* ================= ABOUT HEADER SECTION ================= */
        .about-header {
            position: relative;
            width: 100%;
            min-height: 500px;
            display: flex;
            align-items: center;
            background-color: #ffffff;
            /* Uploaded second image as background */
            background-image: url('<?php echo $img; ?>/get-to-know-devotion-group-banner.png?v=0.0.1');
            background-repeat: no-repeat;
            background-position: right center;
            background-size: cover;
            overflow: hidden;
        }

        /* Converts the dark left side of the image into clean white to match your layout */
        .about-header::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                160deg,
                #ffffff 0%,
                #ffffff 10%,
                rgba(255, 255, 255, 0.2) 50%,
                rgba(255, 255, 255, 0.2) 60%,
                rgba(255, 255, 255, 0) 75%
            );
            z-index: 1;
        }

        .about-header .container {
            position: relative;
            z-index: 2;
        }

        .header-content-box {
            /* border-left: 5px solid var(--brand-gold);
            padding-left: 1.75rem; */
            max-width: 500px;
        }

        .header-eyebrow {
            display: block;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--brand-gold);
            margin-bottom: 0.1rem;
        }

        .header-title {
            font-size: clamp(2.1rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1.15;
            color: var(--brand-dark);
            margin-bottom: 0.8rem;
        }

        .header-title span {
            display: block;
            color: var(--brand-gold);
        }

        .header-description {
            font-size: 1rem;
            line-height: 1.65;
            color: var(--brand-muted);
            margin-bottom: 0;
        }

        /* ================= RESPONSIVE BREAKPOINTS ================= */
        @media (max-width: 991.98px) {
            .about-header {
                min-height: 380px;
                background-position: 78% center;
            }
            .about-header::before {
                background: linear-gradient(
                    90deg,
                    rgba(255, 255, 255, 0.98) 0%,
                    rgba(255, 255, 255, 0.92) 55%,
                    rgba(255, 255, 255, 0.5) 100%
                );
            }
        }

        @media (max-width: 575.98px) {
            .about-header {
                min-height: 320px;
                padding: 3rem 0;
            }
            .about-header::before {
                background: rgba(255, 255, 255, 0.93);
            }
            .header-content-box {
                border-left-width: 4px;
                padding-left: 1.25rem;
            }
        }
    </style>

    <!-- ================= HEADER PART ONLY ================= -->
    <header class="about-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9">
                    <div class="header-content-box" data-aos="fade-right" data-aos-duration="900">
                        <span class="header-eyebrow" data-aos="fade-down" data-aos-delay="150">
                            ABOUT US
                        </span>
                        <h1 class="header-title" data-aos="fade-up" data-aos-delay="250">
                            Get to know
                            <span>Devotion Group CSP</span>
                        </h1>
                        <p class="header-description" data-aos="fade-up" data-aos-delay="400">
                            Confidence driven by experience. We craft premium corporate solutions across global jurisdictions with unwavering integrity and a client-first approach.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <style>
        :root {
            --brand-gold: #c4963a;
            --brand-dark: #25282c;
            --brand-muted: #525860;
        }

        /* ================= MISSION & VISION SECTION ================= */
        .mission-vision-section {
            padding: 4.5rem 0;
            background-color: #ffffff;
        }

        .mv-card {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid #eef0f3;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .mv-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.1);
        }

        .mv-card-img-wrap {
            width: 100%;
            height: 230px;
            overflow: hidden;
        }

        .mv-card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.5s ease;
        }

        .mv-card:hover .mv-card-img-wrap img {
            transform: scale(1.04);
        }

        .mv-card-body {
            padding: 1.75rem 2rem 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .mv-header {
            display: flex;
            align-items: center;
            margin-bottom: 0.9rem;
        }

        .mv-icon-circle {
            width: 44px;
            height: 44px;
            min-width: 44px;
            border-radius: 50%;
            border: 1.8px solid var(--brand-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--brand-gold);
            background-color: rgba(196, 150, 58, 0.05);
        }

        .mv-divider {
            width: 1.5px;
            height: 34px;
            background-color: rgba(196, 150, 58, 0.45);
            margin: 0 1rem;
        }

        .mv-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.65rem;
            font-weight: 800;
            color: var(--brand-dark);
            margin: 0;
            line-height: 1.2;
        }

        .mv-text {
            font-size: 0.96rem;
            line-height: 1.65;
            color: var(--brand-muted);
            margin-bottom: 1.5rem;
        }

        .mv-bottom-bar {
            width: 175px;
            height: 4.5px;
            background-color: var(--brand-gold);
            border-radius: 50px;
            margin-top: auto;
            transition: width 0.35s ease;
        }

        .mv-card:hover .mv-bottom-bar {
            width: 215px;
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .mission-vision-section {
                padding: 3rem 0;
            }
            .mv-card-img-wrap {
                height: 200px;
            }
            .mv-card-body {
                padding: 1.4rem 1.5rem 1.75rem;
            }
            .mv-title {
                font-size: 1.45rem;
            }
        }
    </style>
    <!-- ================= SECOND SECTION: OUR MISSION & VISION ================= -->
    <section class="mission-vision-section">
        <div class="container">
            <div class="row g-4">
                
                <!-- Card 1: Our Mission -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="mv-card">
                        <div class="mv-card-img-wrap">
                            <img src="<?php echo $img; ?>/our-mission.png" alt="Our Mission - Devotion Group CSP">
                        </div>
                        <div class="mv-card-body">
                            <div class="mv-header">
                                <div class="mv-icon-circle">
                                    <!-- Target / Dartboard SVG matching reference -->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <circle cx="12" cy="12" r="5"></circle>
                                        <circle cx="12" cy="12" r="1.5" fill="currentColor"></circle>
                                        <path d="M18.5 5.5L12 12"></path>
                                        <path d="M15.5 5.5h3v3"></path>
                                    </svg>
                                </div>
                                <div class="mv-divider"></div>
                                <h2 class="mv-title">Our Mission</h2>
                            </div>
                            <p class="mv-text">
                                To deliver reliable and innovative corporate solutions that empower businesses to grow across global markets.
                            </p>
                            <div class="mv-bottom-bar"></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Our Vision -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
                    <div class="mv-card">
                        <div class="mv-card-img-wrap">
                            <img src="<?php echo $img; ?>/our-vision.png" alt="Our Vision - Devotion Group CSP">
                        </div>
                        <div class="mv-card-body">
                            <div class="mv-header">
                                <div class="mv-icon-circle">
                                    <!-- Eye SVG matching reference -->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 12s3.8-6.5 10-6.5S22 12 22 12s-3.8 6.5-10 6.5S2 12 2 12z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="mv-divider"></div>
                                <h2 class="mv-title">Our Vision</h2>
                            </div>
                            <p class="mv-text">
                                To be a trusted global partner for business establishment and strategic advisory services.
                            </p>
                            <div class="mv-bottom-bar"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* ================= THIRD SECTION: OUR APPROACH ================= */
        .approach-section {
            padding: 5rem 0 5.5rem;
            background-color: #ffffff;
        }

        .approach-eyebrow-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 0.65rem;
        }

        .approach-eyebrow-line {
            width: 65px;
            height: 1.5px;
            background-color: rgba(196, 150, 58, 0.55);
        }

        .approach-eyebrow-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--brand-gold);
        }

        .approach-main-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(2rem, 3.6vw, 2.75rem);
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 0.85rem;
        }

        .approach-lead {
            max-width: 640px;
            margin: 0 auto 4.25rem;
            font-size: 1rem;
            line-height: 1.65;
            color: var(--brand-muted);
        }

        /* Individual Approach Cards */
        .approach-card {
            position: relative;
            background-color: #ffffff;
            border: 1.5px solid rgba(196, 150, 58, 0.55);
            border-radius: 16px;
            padding: 3.35rem 1.5rem 2.1rem;
            text-align: center;
            height: 100%;
            overflow: hidden;
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
        }

        .approach-card:hover {
            transform: translateY(-7px);
            border-color: var(--brand-gold);
            box-shadow: 0 16px 35px rgba(196, 150, 58, 0.14);
        }

        /* Bottom-right gold corner accent matching reference */
        .approach-card::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 34px;
            height: 34px;
            background-color: var(--brand-gold);
            border-top-left-radius: 100%;
            transition: width 0.3s ease, height 0.3s ease;
        }

        .approach-card:hover::after {
            width: 42px;
            height: 42px;
        }

        /* Wrapper needed so the floating icon badge sits cleanly outside overflow:hidden */
        .approach-card-outer {
            position: relative;
            height: 100%;
            padding-top: 34px;
        }

        .approach-icon-badge {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 1.5px solid rgba(196, 150, 58, 0.65);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--brand-gold);
            z-index: 2;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.04);
            transition: background-color 0.35s ease, color 0.35s ease, transform 0.35s ease;
        }

        .approach-card-outer:hover .approach-icon-badge {
            background-color: var(--brand-gold);
            color: #ffffff;
            transform: translateX(-50%) scale(1.06);
        }

        .approach-card-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.18rem;
            font-weight: 800;
            color: var(--brand-dark);
            line-height: 1.35;
            margin-bottom: 0.75rem;
        }

        .approach-card-line {
            width: 44px;
            height: 3.5px;
            background-color: var(--brand-gold);
            border-radius: 50px;
            margin: 0 auto 1rem;
            transition: width 0.3s ease;
        }

        .approach-card-outer:hover .approach-card-line {
            width: 64px;
        }

        .approach-card-desc {
            font-size: 0.9rem;
            line-height: 1.6;
            color: var(--brand-muted);
            margin-bottom: 0;
        }

        @media (max-width: 991.98px) {
            .approach-lead {
                margin-bottom: 3rem;
            }
        }

        @media (max-width: 575.98px) {
            .approach-eyebrow-line {
                width: 35px;
            }
        }
    </style>
    
    <section class="approach-section">
        <div class="container">
            
            <!-- Section Heading -->
            <div class="text-center" data-aos="fade-up" data-aos-duration="800">
                <div class="approach-eyebrow-wrap">
                    <span class="approach-eyebrow-line"></span>
                    <span class="approach-eyebrow-text">Our Approach</span>
                    <span class="approach-eyebrow-line"></span>
                </div>
                <h2 class="approach-main-title">What We Stand For</h2>
                <p class="approach-lead">
                    Our approach is built on trust, expertise and long-term partnerships to help businesses succeed globally.
                </p>
            </div>

            <!-- 4 Approach Cards -->
            <div class="row g-4">
                
                <!-- Card 1: Seamless Business Setup -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="approach-card-outer">
                        <div class="approach-icon-badge">
                            <!-- Classical Building / Institution SVG -->
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 21h18"></path>
                                <path d="M5 21V10"></path>
                                <path d="M9 21V10"></path>
                                <path d="M15 21V10"></path>
                                <path d="M19 21V10"></path>
                                <path d="M2 10l10-6 10 6H2z"></path>
                            </svg>
                        </div>
                        <div class="approach-card">
                            <h3 class="approach-card-title">Seamless Business<br>Setup</h3>
                            <div class="approach-card-line"></div>
                            <p class="approach-card-desc">
                                Simplifying company formation across multiple jurisdictions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Banking & Payments -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="approach-card-outer">
                        <div class="approach-icon-badge">
                            <!-- Coins Stack SVG -->
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <ellipse cx="9" cy="7" rx="5" ry="2.5"></ellipse>
                                <path d="M4 7v4c0 1.38 2.24 2.5 5 2.5s5-1.12 5-2.5V7"></path>
                                <path d="M4 11v4c0 1.38 2.24 2.5 5 2.5 1.15 0 2.2-.2 3.05-.52"></path>
                                <ellipse cx="16.5" cy="13.5" rx="4.5" ry="2"></ellipse>
                                <path d="M12 13.5v4c0 1.1 2.01 2 4.5 2s4.5-.9 4.5-2v-4"></path>
                            </svg>
                        </div>
                        <div class="approach-card">
                            <h3 class="approach-card-title">Banking &amp; Payments</h3>
                            <div class="approach-card-line"></div>
                            <p class="approach-card-desc">
                                End-to-end support for corporate banking and payment solutions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Compliance First -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="approach-card-outer">
                        <div class="approach-icon-badge">
                            <!-- Shield Check SVG -->
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3l7 3v6c0 4.5-3 7.8-7 9-4-1.2-7-4.5-7-9V6l7-3z"></path>
                                <path d="M9 12l2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="approach-card">
                            <h3 class="approach-card-title">Compliance First</h3>
                            <div class="approach-card-line"></div>
                            <p class="approach-card-desc">
                                Advisory and compliance services aligned with global regulations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Strategic Advisory -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="approach-card-outer">
                        <div class="approach-icon-badge">
                            <!-- Growth Chart Arrow SVG -->
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 19h16"></path>
                                <path d="M6 19v-4"></path>
                                <path d="M10 19v-7"></path>
                                <path d="M14 19v-9"></path>
                                <path d="M18 19v-12"></path>
                                <path d="M5 12l5-4 4 2 5-5"></path>
                                <path d="M15 5h4v4"></path>
                            </svg>
                        </div>
                        <div class="approach-card">
                            <h3 class="approach-card-title">Strategic Advisory</h3>
                            <div class="approach-card-line"></div>
                            <p class="approach-card-desc">
                                Tailored guidance for sustainable business growth and expansion.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* ================= FOURTH SECTION: COMMITMENT & STANDARDS ================= */
        .commit-std-section {
            padding: 5rem 0;
            background-color: #ffffff;
            overflow: hidden;
        }

        .commit-row {
            margin-bottom: 5.5rem;
        }

        /* Eyebrow with trailing gold line */
        .cs-eyebrow-wrap {
            display: inline-flex;
            align-items: center;
            gap: 0.9rem;
            margin-bottom: 0.75rem;
        }

        .cs-eyebrow-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--brand-gold);
        }

        .cs-eyebrow-line {
            width: 75px;
            height: 1.5px;
            background-color: rgba(196, 150, 58, 0.65);
        }

        /* Commitment Block */
        .commit-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(2rem, 3.8vw, 2.85rem);
            font-weight: 800;
            line-height: 1.15;
            color: var(--brand-dark);
            margin-bottom: 1rem;
        }

        .commit-title span {
            display: block;
            color: var(--brand-gold);
        }

        .commit-bar {
            width: 75px;
            height: 5px;
            background-color: var(--brand-gold);
            border-radius: 50px;
            margin-bottom: 1.25rem;
        }

        .commit-desc {
            font-size: 1.02rem;
            line-height: 1.7;
            color: var(--brand-muted);
            max-width: 520px;
            margin-bottom: 0;
        }

        /* Tilted Oval Image Frame matching reference */
        .cs-oval-wrap {
            position: relative;
            max-width: 510px;
            margin: 0 auto;
            padding: 10px;
        }

        .cs-oval-ring {
            position: relative;
            /* border-radius: 52% 48% 52% 48% / 46% 54% 46% 54%;
            transform: rotate(-8deg);
            border: 3px solid var(--brand-gold);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            aspect-ratio: 16 / 10.5;
            background-color: #f8f9fa; */
        }

        .cs-oval-ring--reverse {
            transform: rotate(8deg);
        }

        .cs-oval-ring img {
            width: 112%;
            height: 112%;
            object-fit: cover;
            transform: rotate(8deg) translate(-5%, -5%);
            transition: transform 0.5s ease;
        }

        .cs-oval-ring--reverse img {
            transform: rotate(-8deg) translate(-5%, -5%);
        }

        .cs-oval-wrap:hover .cs-oval-ring img {
            transform: rotate(8deg) translate(-5%, -5%) scale(1.04);
        }

        .cs-oval-wrap:hover .cs-oval-ring--reverse img {
            transform: rotate(-8deg) translate(-5%, -5%) scale(1.04);
        }

        /* Standards Block (Image Left, Text Right) */
        .std-heading-box {
            border-left: 4px solid var(--brand-gold);
            padding-left: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .std-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.55rem, 2.8vw, 2.05rem);
            font-weight: 800;
            line-height: 1.25;
            color: var(--brand-dark);
            margin-bottom: 0.65rem;
        }

        .std-title span {
            display: block;
            color: var(--brand-gold);
        }

        .std-desc {
            font-size: 0.94rem;
            line-height: 1.65;
            color: var(--brand-muted);
            margin-bottom: 0;
        }

        /* Standards Checklist */
        .std-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.75rem;
        }

        .std-list-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.85rem;
        }

        .std-list-icon {
            width: 34px;
            height: 34px;
            min-width: 34px;
            border-radius: 7px;
            border: 1.3px solid rgba(196, 150, 58, 0.7);
            color: var(--brand-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(196, 150, 58, 0.04);
        }

        .std-list-sep {
            width: 1.5px;
            height: 22px;
            background-color: rgba(196, 150, 58, 0.45);
            margin: 0 0.85rem;
        }

        .std-list-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--brand-dark);
        }

        /* Bottom Two Mini Feature Pills */
        .std-mini-box {
            display: flex;
            align-items: flex-start;
            border: 1.3px solid rgba(196, 150, 58, 0.55);
            border-radius: 12px;
            padding: 0.9rem 1rem;
            background-color: #ffffff;
            height: 100%;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .std-mini-box:hover {
            border-color: var(--brand-gold);
            box-shadow: 0 8px 20px rgba(196, 150, 58, 0.1);
        }

        .std-mini-icon {
            color: var(--brand-gold);
            flex-shrink: 0;
            margin-top: 2px;
        }

        .std-mini-sep {
            width: 1.5px;
            height: 36px;
            background-color: rgba(196, 150, 58, 0.45);
            margin: 0 0.75rem;
            flex-shrink: 0;
        }

        .std-mini-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.92rem;
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 0.2rem;
        }

        .std-mini-sub {
            font-size: 0.78rem;
            line-height: 1.45;
            color: var(--brand-muted);
            margin-bottom: 0;
        }

        @media (max-width: 991.98px) {
            .commit-row {
                margin-bottom: 4rem;
            }
            .cs-oval-wrap {
                max-width: 440px;
            }
        }
    </style>
    <!-- ================= FOURTH SECTION: COMMITMENT & STANDARDS ================= -->
    <section class="commit-std-section">
        <div class="container">

            <!-- PART 1: OUR COMMITMENT (Text Left, Image Right) -->
            <div class="row align-items-center g-5 commit-row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="850">
                    <div class="cs-eyebrow-wrap">
                        <span class="cs-eyebrow-text">Our Commitment</span>
                        <span class="cs-eyebrow-line"></span>
                    </div>
                    <h2 class="commit-title">
                        Creating Opportunities
                        <span>Without Boundaries</span>
                    </h2>
                    <div class="commit-bar"></div>
                    <p class="commit-desc">
                        We empower businesses to expand globally by providing end-to-end corporate, banking and compliance solutions with expertise, integrity and a client-first approach.
                    </p>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="850">
                    <div class="cs-oval-wrap">
                        <div class="cs-oval-ring">
                            <img src="<?=  $img ?>/Creating-Opportunities.png" alt="Our Commitment - Global Partnership">
                        </div>
                    </div>
                </div>
            </div>

            <!-- PART 2: OUR STANDARDS (Image Left, Text Right - Opposite Direction) -->
            <div class="row align-items-center g-5">
                
                <!-- Image Column (Left on Desktop) -->
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="850">
                    <div class="cs-oval-wrap">
                        <div class="cs-oval-ring cs-oval-ring--reverse">
                            <img src="<?= $img; ?>/Built-on-Global-Compliance-and-Professional-Excellence-square.png" alt="Our Standards - Dubai Skyline">
                        </div>
                    </div>
                </div>

                <!-- Text & Checklist Column (Right on Desktop) -->
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="850">
                    <div class="cs-eyebrow-wrap">
                        <span class="cs-eyebrow-text">Our Standards</span>
                        <span class="cs-eyebrow-line"></span>
                    </div>

                    <div class="std-heading-box">
                        <h2 class="std-title">
                            Built on Global Compliance and
                            <span>Professional Excellence</span>
                        </h2>
                        <p class="std-desc">
                            Our services are designed to meet the highest international standards, ensuring security, transparency and long-term value for our clients.
                        </p>
                    </div>

                    <!-- 4-Item Checklist -->
                    <ul class="std-list">
                        <li class="std-list-item">
                            <span class="std-list-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="4" y="3" width="16" height="18" rx="2"></rect>
                                    <path d="M8 7h8M8 11h8M8 15h5"></path>
                                </svg>
                            </span>
                            <span class="std-list-sep"></span>
                            <span class="std-list-text">Regulatory compliance across multiple jurisdictions</span>
                        </li>
                        <li class="std-list-item">
                            <span class="std-list-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="3"></circle>
                                    <path d="M6 19c0-3 2.7-5 6-5s6 2 6 5"></path>
                                    <circle cx="5" cy="10" r="2"></circle>
                                    <circle cx="19" cy="10" r="2"></circle>
                                </svg>
                            </span>
                            <span class="std-list-sep"></span>
                            <span class="std-list-text">Client-centric and transparent approach</span>
                        </li>
                        <li class="std-list-item">
                            <span class="std-list-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 11l-4 4-4-4"></path>
                                    <path d="M3 12l5-5 4 4 4-4 5 5"></path>
                                </svg>
                            </span>
                            <span class="std-list-sep"></span>
                            <span class="std-list-text">Strong global network of strategic partners</span>
                        </li>
                        <li class="std-list-item">
                            <span class="std-list-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 14v-2a8 8 0 0 1 16 0v2"></path>
                                    <rect x="3" y="13" width="3" height="5" rx="1"></rect>
                                    <rect x="18" y="13" width="3" height="5" rx="1"></rect>
                                </svg>
                            </span>
                            <span class="std-list-sep"></span>
                            <span class="std-list-text">Consistent support throughout your business journey</span>
                        </li>
                    </ul>

                    <!-- Bottom 2 Feature Boxes -->
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="std-mini-box">
                                <div class="std-mini-icon">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <circle cx="12" cy="12" r="5"></circle>
                                        <circle cx="12" cy="12" r="1.5" fill="currentColor"></circle>
                                        <path d="M18 6l-6 6"></path>
                                    </svg>
                                </div>
                                <div class="std-mini-sep"></div>
                                <div>
                                    <h4 class="std-mini-title">Client-Centric Approach</h4>
                                    <p class="std-mini-sub">Tailored solutions with dedicated support to help you achieve business goals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="std-mini-box">
                                <div class="std-mini-icon">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 3l7 3v6c0 4.5-3 7.8-7 9-4-1.2-7-4.5-7-9V6l7-3z"></path>
                                        <path d="M9 12l2 2 4-4"></path>
                                    </svg>
                                </div>
                                <div class="std-mini-sep"></div>
                                <div>
                                    <h4 class="std-mini-title">Regulated &amp; Reliable</h4>
                                    <p class="std-mini-sub">Working with trusted partners to ensure your business is compliant and secure.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <style>
        /* ================= FIFTH SECTION: OUR GLOBAL IMPACT ================= */
        .impact-section {
            position: relative;
            padding: 5rem 0 6rem;
            background-color: #ffffff;
            overflow: hidden;
        }

        .impact-eyebrow-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 0.65rem;
        }

        .impact-eyebrow-line {
            width: 65px;
            height: 1.5px;
            background-color: rgba(196, 150, 58, 0.55);
        }

        .impact-eyebrow-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--brand-gold);
        }

        .impact-main-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.95rem, 3.6vw, 2.75rem);
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 0.75rem;
        }

        .impact-main-title span {
            color: var(--brand-gold);
        }

        .impact-lead {
            max-width: 660px;
            margin: 0 auto 3.5rem;
            font-size: 1rem;
            line-height: 1.65;
            color: var(--brand-muted);
        }

        /* Floating Globe Animation */
        .impact-globe-wrap {
            position: relative;
            max-width: 340px;
            margin: 0 auto;
            z-index: 2;
        }

        .impact-globe-img {
            width: 100%;
            height: auto;
            display: block;
            mix-blend-mode: multiply; /* Seamlessly removes white background around globe */
            animation: impactFloat 6s ease-in-out infinite;
        }

        @keyframes impactFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Metrics Columns */
        .impact-metrics-row {
            position: relative;
            z-index: 2;
        }

        .impact-metric-col {
            position: relative;
            text-align: center;
            padding: 0.75rem 1rem;
            transition: transform 0.3s ease;
        }

        .impact-metric-col:hover {
            transform: translateY(-5px);
        }

        /* Vertical Gold Divider between metrics on Desktop */
        @media (min-width: 768px) {
            .impact-metric-col:not(:last-child)::after {
                content: "";
                position: absolute;
                top: 15%;
                right: 0;
                width: 1.5px;
                height: 70%;
                background-color: rgba(196, 150, 58, 0.45);
            }
        }

        .impact-metric-icon {
            color: var(--brand-gold);
            margin-bottom: 0.75rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .impact-metric-col:hover .impact-metric-icon {
            transform: scale(1.1);
        }

        .impact-metric-value {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(2.1rem, 3.2vw, 2.75rem);
            font-weight: 800;
            color: var(--brand-gold);
            line-height: 1.1;
            margin-bottom: 0.35rem;
        }

        .impact-metric-label {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--brand-dark);
            margin-bottom: 0.85rem;
        }

        .impact-metric-pill {
            width: 42px;
            height: 4px;
            background-color: var(--brand-gold);
            border-radius: 50px;
            margin: 0 auto;
            transition: width 0.3s ease;
        }

        .impact-metric-col:hover .impact-metric-pill {
            width: 64px;
        }

        /* Sweeping Bottom Gold Curve matching reference */
        .impact-bottom-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            line-height: 0;
            pointer-events: none;
            z-index: 1;
        }

        .impact-bottom-wave svg {
            width: 100%;
            height: 75px;
            display: block;
        }

        @media (max-width: 991.98px) {
            .impact-globe-wrap {
                max-width: 270px;
                margin-bottom: 2rem;
            }
            .impact-lead {
                margin-bottom: 2.5rem;
            }
        }

        @media (max-width: 575.98px) {
            .impact-eyebrow-line {
                width: 35px;
            }
            .impact-bottom-wave svg {
                height: 45px;
            }
        }
    </style>

    <!-- ================= FIFTH SECTION: OUR GLOBAL IMPACT ================= -->
    <section class="impact-section">
        <div class="container">
            
            <!-- Section Header -->
            <div class="text-center" data-aos="fade-up" data-aos-duration="800">
                <div class="impact-eyebrow-wrap">
                    <span class="impact-eyebrow-line"></span>
                    <span class="impact-eyebrow-text">Our Global Impact</span>
                    <span class="impact-eyebrow-line"></span>
                </div>
                <h2 class="impact-main-title">
                    The Strength of Our <span>Global Presence</span>
                </h2>
                <p class="impact-lead">
                    Our growing network and track record reflect the trust businesses place in Devotion Group.
                </p>
            </div>

            <!-- Globe + 4 Metrics Grid -->
            <div class="row align-items-center g-4">
                
                <!-- Left Globe Column -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="900">
                    <div class="impact-globe-wrap">
                        <img src="<?= $img; ?>/The-Strength-of-Our-Global-Presence.png" 
                            alt="Devotion Group Global Presence" 
                            class="impact-globe-img">
                    </div>
                </div>

                <!-- Right 4 Stats Columns -->
                <div class="col-lg-8">
                    <div class="row g-4 impact-metrics-row">
                        
                        <!-- Stat 1: 15+ -->
                        <div class="col-6 col-md-3 impact-metric-col" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <div class="impact-metric-icon">
                                <!-- Calendar Icon -->
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="3"></rect>
                                    <path d="M16 2v4M8 2v4M3 10h18"></path>
                                    <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01"></path>
                                </svg>
                            </div>
                            <div class="impact-metric-value">15+</div>
                            <div class="impact-metric-label">Years of Experience</div>
                            <div class="impact-metric-pill"></div>
                        </div>

                        <!-- Stat 2: 120k+ -->
                        <div class="col-6 col-md-3 impact-metric-col" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="impact-metric-icon">
                                <!-- Group / Clients Icon -->
                                <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="3.2"></circle>
                                    <path d="M6.5 20c0-3.2 2.5-5.5 5.5-5.5s5.5 2.3 5.5 5.5"></path>
                                    <circle cx="5.5" cy="10" r="2.2"></circle>
                                    <path d="M2 19c0-2.2 1.6-3.8 3.5-3.8"></path>
                                    <circle cx="18.5" cy="10" r="2.2"></circle>
                                    <path d="M22 19c0-2.2-1.6-3.8-3.5-3.8"></path>
                                </svg>
                            </div>
                            <div class="impact-metric-value">120k+</div>
                            <div class="impact-metric-label">Clients Worldwide</div>
                            <div class="impact-metric-pill"></div>
                        </div>

                        <!-- Stat 3: 99.8% -->
                        <div class="col-6 col-md-3 impact-metric-col" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="impact-metric-icon">
                                <!-- Seal / Badge Check Icon -->
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2l2.4 1.6 2.9-.3 1.2 2.6 2.6 1.2-.3 2.9L22 12l-1.2 2.4.3 2.9-2.6 1.2-1.2 2.6-2.9-.3L12 22l-2.4-1.2-2.9.3-1.2-2.6-2.6-1.2.3-2.9L2 12l1.2-2.4-.3-2.9 2.6-1.2 1.2-2.6 2.9.3L12 2z"></path>
                                    <path d="M9 12l2 2 4-4"></path>
                                </svg>
                            </div>
                            <div class="impact-metric-value">99.8%</div>
                            <div class="impact-metric-label">Satisfaction Rate</div>
                            <div class="impact-metric-pill"></div>
                        </div>

                        <!-- Stat 4: 40+ -->
                        <div class="col-6 col-md-3 impact-metric-col" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="impact-metric-icon">
                                <!-- Location Pin Icon -->
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 21s-6.5-5.6-6.5-11a6.5 6.5 0 1 1 13 0c0 5.4-6.5 11-6.5 11z"></path>
                                    <circle cx="12" cy="10" r="2.3"></circle>
                                </svg>
                            </div>
                            <div class="impact-metric-value">40+</div>
                            <div class="impact-metric-label">Strategic Locations</div>
                            <div class="impact-metric-pill"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Sweeping Gold Ribbon Curve at the Bottom -->
        <div class="impact-bottom-wave">
            <svg viewBox="0 0 1440 90" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="impactGoldGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#c4963a" stop-opacity="0.15"/>
                        <stop offset="45%" stop-color="#c4963a" stop-opacity="0.95"/>
                        <stop offset="85%" stop-color="#a67c28" stop-opacity="0.95"/>
                        <stop offset="100%" stop-color="#c4963a" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
                <path d="M220,38 Q620,88 1040,42 T1440,34 L1440,43 Q1040,56 620,84 Q220,44 220,38 Z" fill="url(#impactGoldGrad)"/>
            </svg>
        </div>
    </section>

    <style>
        /* ================= SIXTH SECTION: WHERE IT ALL STARTED ================= */
        .journey-section {
            padding: 5rem 0;
            background-color: #ffffff;
            overflow: hidden;
        }

        .journey-img-wrap {
            max-width: 560px;
            margin: 0 auto;
        }

        .journey-img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.45s ease;
        }

        .journey-img-wrap:hover .journey-img {
            transform: translateY(-5px) scale(1.015);
        }

        /* Eyebrow with trailing gold line */
        .journey-eyebrow-wrap {
            display: inline-flex;
            align-items: center;
            gap: 0.9rem;
            margin-bottom: 0.65rem;
        }

        .journey-eyebrow-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--brand-gold);
        }

        .journey-eyebrow-line {
            width: 70px;
            height: 1.5px;
            background-color: rgba(196, 150, 58, 0.6);
        }

        .journey-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(2rem, 3.6vw, 2.75rem);
            font-weight: 800;
            line-height: 1.15;
            color: var(--brand-dark);
            margin-bottom: 1rem;
        }

        .journey-title span {
            color: var(--brand-gold);
        }

        .journey-lead {
            font-size: 0.98rem;
            line-height: 1.65;
            color: var(--brand-muted);
            margin-bottom: 2rem;
            max-width: 540px;
        }

        /* Vertical Gold Milestone Timeline */
        .journey-timeline {
            position: relative;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        /* Continuous vertical line passing through the center of the node circles */
        .journey-timeline::before {
            content: "";
            position: absolute;
            top: 12px;
            bottom: 12px;
            left: 10px;
            width: 1.5px;
            background-color: rgba(196, 150, 58, 0.55);
        }

        .journey-step {
            position: relative;
            display: flex;
            align-items: flex-start;
            padding-left: 2.2rem;
            margin-bottom: 1.35rem;
            transition: transform 0.25s ease;
        }

        .journey-step:last-child {
            margin-bottom: 0;
        }

        .journey-step:hover {
            transform: translateX(4px);
        }

        /* Concentric Gold Target Node */
        .journey-node {
            position: absolute;
            left: 0;
            top: 2px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 1.5px solid var(--brand-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            transition: background-color 0.25s ease;
        }

        .journey-node::after {
            content: "";
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background-color: var(--brand-gold);
            transition: background-color 0.25s ease;
        }

        .journey-step:hover .journey-node {
            background-color: var(--brand-gold);
        }

        .journey-step:hover .journey-node::after {
            background-color: #ffffff;
        }

        .journey-year {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--brand-gold);
            min-width: 72px;
            line-height: 1.45;
            flex-shrink: 0;
        }

        .journey-milestone-text {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--brand-dark);
            line-height: 1.55;
            margin: 0;
        }

        @media (max-width: 991.98px) {
            .journey-img-wrap {
                max-width: 480px;
                margin-bottom: 1rem;
            }
        }

        @media (max-width: 575.98px) {
            .journey-year {
                min-width: 62px;
                font-size: 0.98rem;
            }
            .journey-milestone-text {
                font-size: 0.9rem;
            }
        }
    </style>

    <!-- ================= SIXTH SECTION: WHERE IT ALL STARTED ================= -->
    <section class="journey-section">
        <div class="container">
            <div class="row align-items-center g-5">
                
                <!-- Left Shaped Image Column -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <div class="journey-img-wrap">
                        <img src="<?=  $img; ?>/where-it-all-started.png" 
                            alt="Where It All Started - Devotion Group CSP" 
                            class="journey-img">
                    </div>
                </div>

                <!-- Right Timeline Content Column -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
                    <div class="journey-eyebrow-wrap">
                        <span class="journey-eyebrow-text">Our Presence</span>
                        <span class="journey-eyebrow-line"></span>
                    </div>

                    <h2 class="journey-title">
                        Where It <span>All Started</span>
                    </h2>

                    <p class="journey-lead">
                        Devotion Group began with a clear vision — to simplify global business opportunities and provide trusted corporate solutions for companies and entrepreneurs worldwide.
                    </p>

                    <!-- Vertical Gold Milestone Timeline -->
                    <ul class="journey-timeline">
                        <li class="journey-step" data-aos="fade-up" data-aos-delay="100">
                            <span class="journey-node"></span>
                            <span class="journey-year">2011</span>
                            <p class="journey-milestone-text">A strong foundation built on trust and expertise</p>
                        </li>

                        <li class="journey-step" data-aos="fade-up" data-aos-delay="200">
                            <span class="journey-node"></span>
                            <span class="journey-year">2015</span>
                            <p class="journey-milestone-text">Expanding services across key international markets</p>
                        </li>

                        <li class="journey-step" data-aos="fade-up" data-aos-delay="300">
                            <span class="journey-node"></span>
                            <span class="journey-year">2020</span>
                            <p class="journey-milestone-text">Building a global network of strategic partnerships</p>
                        </li>

                        <li class="journey-step" data-aos="fade-up" data-aos-delay="400">
                            <span class="journey-node"></span>
                            <span class="journey-year">Today</span>
                            <p class="journey-milestone-text">Continuing to empower businesses with innovative solutions</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* ================= SEVENTH SECTION: GLOBAL JURISDICTIONS ================= */
        .jurisdiction-section {
            position: relative;
            padding: 5.5rem 0;
            background-color: #ffffff;
            overflow: hidden;
        }

        /* Subtle Dotted World Map Watermark behind Header */
        .jurisdiction-map-bg {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 980px;
            height: 240px;
            background-image: radial-gradient(rgba(196, 150, 58, 0.28) 1.5px, transparent 1.5px);
            background-size: 12px 12px;
            -webkit-mask-image: radial-gradient(ellipse 52% 48% at 50% 45%, #000 35%, transparent 75%);
            mask-image: radial-gradient(ellipse 52% 48% at 50% 45%, #000 35%, transparent 75%);
            pointer-events: none;
            z-index: 0;
        }

        .jurisdiction-section .container {
            position: relative;
            z-index: 1;
        }

        .jurisdiction-eyebrow-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 0.65rem;
        }

        .jurisdiction-eyebrow-line {
            width: 65px;
            height: 1.5px;
            background-color: rgba(196, 150, 58, 0.6);
        }

        .jurisdiction-eyebrow-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--brand-gold);
        }

        .jurisdiction-main-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.9rem, 3.6vw, 2.75rem);
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 3rem;
        }

        .jurisdiction-main-title span {
            color: var(--brand-gold);
        }

        /* Jurisdiction Card */
        .jurisdiction-card {
            position: relative;
            background-color: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 26px rgba(0, 0, 0, 0.06);
            border: 1px solid #f0f1f3;
            border-bottom: 2.5px solid rgba(196, 150, 58, 0.65);
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .jurisdiction-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 18px 36px rgba(196, 150, 58, 0.16);
            border-bottom-color: var(--brand-gold);
        }

        .jurisdiction-img-box {
            position: relative;
            width: 100%;
            height: 155px;
            overflow: hidden;
        }

        .jurisdiction-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.5s ease;
        }

        .jurisdiction-card:hover .jurisdiction-img-box img {
            transform: scale(1.07);
        }

        /* Curved Gold & White Wave Overlay matching reference */
        .jurisdiction-wave-svg {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 36px;
            display: block;
            pointer-events: none;
            z-index: 2;
        }

        .jurisdiction-body {
            padding: 0.75rem 0.65rem 1.05rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.38rem;
            background-color: #ffffff;
            flex: 1;
        }

        .jurisdiction-pin {
            color: var(--brand-gold);
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .jurisdiction-card:hover .jurisdiction-pin {
            transform: translateY(-2px);
        }

        .jurisdiction-name {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.92rem;
            font-weight: 800;
            color: var(--brand-dark);
            margin: 0;
            white-space: nowrap;
        }

        @media (max-width: 1199.98px) {
            .jurisdiction-name {
                font-size: 0.86rem;
            }
        }

        @media (max-width: 575.98px) {
            .jurisdiction-eyebrow-line {
                width: 35px;
            }
            .jurisdiction-img-box {
                height: 135px;
            }
            .jurisdiction-name {
                font-size: 0.85rem;
            }
        }
    </style>

    <!-- ================= SEVENTH SECTION: GLOBAL JURISDICTIONS ================= -->
    <section class="jurisdiction-section">
        <!-- Subtle Dotted Map Accent -->
        <div class="jurisdiction-map-bg"></div>

        <div class="container">
            
            <!-- Section Header -->
            <div class="text-center" data-aos="fade-up" data-aos-duration="800">
                <div class="jurisdiction-eyebrow-wrap">
                    <span class="jurisdiction-eyebrow-line"></span>
                    <span class="jurisdiction-eyebrow-text">Our Presence</span>
                    <span class="jurisdiction-eyebrow-line"></span>
                </div>
                <h2 class="jurisdiction-main-title">
                    Enjoy Access to <span>Global Jurisdictions</span>
                </h2>
            </div>

            <!-- 6 Jurisdiction Cards Grid -->
            <div class="row g-3 g-lg-4 justify-content-center">
                
                <!-- 1. UAE -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="750" data-aos-delay="50">
                    <div class="jurisdiction-card">
                        <div class="jurisdiction-img-box">
                            <img src="<?=  $img ?>/uae.png" alt="UAE Jurisdiction">
                            <svg class="jurisdiction-wave-svg" viewBox="0 0 300 50" preserveAspectRatio="none">
                                <!-- Gold Asymmetric Crescent -->
                                <path d="M55,34 C135,28 215,-6 300,24 L300,36 C215,6 135,34 55,36 Z" fill="#c4963a"/>
                                <!-- White S-Curve Foreground -->
                                <path d="M0,36 C95,38 205,2 300,32 L300,50 L0,50 Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="jurisdiction-body">
                            <svg class="jurisdiction-pin" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                            </svg>
                            <h3 class="jurisdiction-name">UAE</h3>
                        </div>
                    </div>
                </div>

                <!-- 2. United Kingdom -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="750" data-aos-delay="120">
                    <div class="jurisdiction-card">
                        <div class="jurisdiction-img-box">
                            <img src="<?=  $img ?>/United-Kingdom.png" alt="United Kingdom Jurisdiction">
                            <svg class="jurisdiction-wave-svg" viewBox="0 0 300 50" preserveAspectRatio="none">
                                <path d="M55,34 C135,28 215,-6 300,24 L300,36 C215,6 135,34 55,36 Z" fill="#c4963a"/>
                                <path d="M0,36 C95,38 205,2 300,32 L300,50 L0,50 Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="jurisdiction-body">
                            <svg class="jurisdiction-pin" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                            </svg>
                            <h3 class="jurisdiction-name">United Kingdom</h3>
                        </div>
                    </div>
                </div>

                <!-- 3. India -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="750" data-aos-delay="190">
                    <div class="jurisdiction-card">
                        <div class="jurisdiction-img-box">
                            <img src="<?=  $img ?>/India.png" alt="India Jurisdiction">
                            <svg class="jurisdiction-wave-svg" viewBox="0 0 300 50" preserveAspectRatio="none">
                                <path d="M55,34 C135,28 215,-6 300,24 L300,36 C215,6 135,34 55,36 Z" fill="#c4963a"/>
                                <path d="M0,36 C95,38 205,2 300,32 L300,50 L0,50 Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="jurisdiction-body">
                            <svg class="jurisdiction-pin" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                            </svg>
                            <h3 class="jurisdiction-name">India</h3>
                        </div>
                    </div>
                </div>

                <!-- 4. Singapore -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="750" data-aos-delay="260">
                    <div class="jurisdiction-card">
                        <div class="jurisdiction-img-box">
                            <img src="<?=  $img ?>/Singapore.png" alt="Singapore Jurisdiction">
                            <svg class="jurisdiction-wave-svg" viewBox="0 0 300 50" preserveAspectRatio="none">
                                <path d="M55,34 C135,28 215,-6 300,24 L300,36 C215,6 135,34 55,36 Z" fill="#c4963a"/>
                                <path d="M0,36 C95,38 205,2 300,32 L300,50 L0,50 Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="jurisdiction-body">
                            <svg class="jurisdiction-pin" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                            </svg>
                            <h3 class="jurisdiction-name">Singapore</h3>
                        </div>
                    </div>
                </div>

                <!-- 5. Mauritius -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="750" data-aos-delay="330">
                    <div class="jurisdiction-card">
                        <div class="jurisdiction-img-box">
                            <img src="<?=  $img ?>/Mauritius.png" alt="Mauritius Jurisdiction">
                            <svg class="jurisdiction-wave-svg" viewBox="0 0 300 50" preserveAspectRatio="none">
                                <path d="M55,34 C135,28 215,-6 300,24 L300,36 C215,6 135,34 55,36 Z" fill="#c4963a"/>
                                <path d="M0,36 C95,38 205,2 300,32 L300,50 L0,50 Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="jurisdiction-body">
                            <svg class="jurisdiction-pin" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                            </svg>
                            <h3 class="jurisdiction-name">Mauritius</h3>
                        </div>
                    </div>
                </div>

                <!-- 6. Hong Kong -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="750" data-aos-delay="400">
                    <div class="jurisdiction-card">
                        <div class="jurisdiction-img-box">
                            <img src="<?=  $img ?>/Hong-Kong.png" alt="Hong Kong Jurisdiction">
                            <svg class="jurisdiction-wave-svg" viewBox="0 0 300 50" preserveAspectRatio="none">
                                <path d="M55,34 C135,28 215,-6 300,24 L300,36 C215,6 135,34 55,36 Z" fill="#c4963a"/>
                                <path d="M0,36 C95,38 205,2 300,32 L300,50 L0,50 Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <div class="jurisdiction-body">
                            <svg class="jurisdiction-pin" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                            </svg>
                            <h3 class="jurisdiction-name">Hong Kong</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* ================= EIGHTH SECTION: OUR GUIDING VALUES ================= */
        .guiding-section {
            padding: 5rem 0 6rem;
            background-color: #ffffff;
            overflow: hidden;
        }

        .guiding-eyebrow-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 0.65rem;
        }

        .guiding-eyebrow-line {
            width: 65px;
            height: 1.5px;
            background-color: rgba(196, 150, 58, 0.55);
        }

        .guiding-eyebrow-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--brand-gold);
        }

        .guiding-main-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(2rem, 3.6vw, 2.75rem);
            font-weight: 800;
            color: var(--brand-dark);
            margin-bottom: 3.25rem;
        }

        /* Value Card */
        .guiding-card {
            position: relative;
            background-color: #ffffff;
            border: 1.5px solid rgba(196, 150, 58, 0.55);
            border-radius: 14px;
            padding: 1.85rem 1.85rem 2.15rem;
            height: 100%;
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
        }

        .guiding-card:hover {
            transform: translateY(-6px);
            border-color: var(--brand-gold);
            box-shadow: 0 16px 35px rgba(196, 150, 58, 0.14);
        }

        /* Soft Top-Right Quarter-Circle Tint matching reference */
        .guiding-card-corner {
            position: absolute;
            top: 0;
            right: 0;
            width: 58px;
            height: 58px;
            background-color: rgba(196, 150, 58, 0.13);
            border-bottom-left-radius: 100%;
            border-top-right-radius: 12px;
            pointer-events: none;
            transition: width 0.3s ease, height 0.3s ease, background-color 0.3s ease;
        }

        .guiding-card:hover .guiding-card-corner {
            width: 68px;
            height: 68px;
            background-color: rgba(196, 150, 58, 0.2);
        }

        /* Centered Bottom Gold Pill Straddling the Border */
        .guiding-card-bottom-pill {
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 110px;
            height: 5px;
            background-color: var(--brand-gold);
            border-radius: 50px;
            transition: width 0.35s ease;
        }

        .guiding-card:hover .guiding-card-bottom-pill {
            width: 145px;
        }

        .guiding-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .guiding-card-icon {
            color: var(--brand-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .guiding-card:hover .guiding-card-icon {
            transform: scale(1.08);
        }

        .guiding-card-sep {
            width: 1.5px;
            height: 36px;
            background-color: rgba(196, 150, 58, 0.45);
            margin: 0 1.1rem;
            flex-shrink: 0;
        }

        .guiding-card-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--brand-dark);
            margin: 0;
            line-height: 1.2;
        }

        .guiding-card-text {
            font-size: 0.93rem;
            line-height: 1.65;
            color: var(--brand-muted);
            margin-bottom: 0;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 575.98px) {
            .guiding-eyebrow-line {
                width: 35px;
            }
            .guiding-card {
                padding: 1.5rem 1.4rem 1.85rem;
            }
            .guiding-card-title {
                font-size: 1.3rem;
            }
        }
    </style>

    <!-- ================= EIGHTH SECTION: OUR GUIDING VALUES ================= -->
    <section class="guiding-section">
        <div class="container">
            
            <!-- Section Header -->
            <div class="text-center" data-aos="fade-up" data-aos-duration="800">
                <div class="guiding-eyebrow-wrap">
                    <span class="guiding-eyebrow-line"></span>
                    <span class="guiding-eyebrow-text">Our Values</span>
                    <span class="guiding-eyebrow-line"></span>
                </div>
                <h2 class="guiding-main-title">Our Guiding Values</h2>
            </div>

            <!-- 3 Guiding Value Cards -->
            <div class="row g-4">
                
                <!-- Card 1: Integrity -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="guiding-card">
                        <span class="guiding-card-corner"></span>
                        <div class="guiding-card-header">
                            <div class="guiding-card-icon">
                                <!-- Shield Check SVG -->
                                <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3l7 3v6c0 4.5-3 7.8-7 9-4-1.2-7-4.5-7-9V6l7-3z"></path>
                                    <path d="M9 12l2 2 4-4"></path>
                                </svg>
                            </div>
                            <div class="guiding-card-sep"></div>
                            <h3 class="guiding-card-title">Integrity</h3>
                        </div>
                        <p class="guiding-card-text">
                            We uphold the highest ethical standards in everything we do.
                        </p>
                        <span class="guiding-card-bottom-pill"></span>
                    </div>
                </div>

                <!-- Card 2: Growth -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="guiding-card">
                        <span class="guiding-card-corner"></span>
                        <div class="guiding-card-header">
                            <div class="guiding-card-icon">
                                <svg width="40px" height="40px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path fill="#c4963a" d="M13 3c-0.538 0.515-1.185 0.92-1.902 1.178-0.748 0.132-2.818-0.828-3.838 0.152-0.17 0.17-0.38 0.34-0.6 0.51-0.48-0.21-1.22-0.53-1.76-0.84s-1.9-1-1.9-1l-3 3.5s0.74 1 1.2 1.66c0.3 0.44 0.67 1.11 0.91 1.56l-0.34 0.4c-0.058 0.115-0.093 0.25-0.093 0.393 0 0.235 0.092 0.449 0.243 0.607 0.138 0.103 0.311 0.165 0.5 0.165s0.362-0.062 0.502-0.167c-0.094 0.109-0.149 0.249-0.149 0.402 0 0.193 0.088 0.365 0.226 0.479 0.144 0.085 0.317 0.135 0.501 0.135s0.357-0.050 0.505-0.137c-0.112 0.139-0.177 0.313-0.177 0.503s0.065 0.364 0.174 0.502c0.099 0.035 0.214 0.056 0.334 0.056 0.207 0 0.399-0.063 0.558-0.17-0.043 0.095-0.065 0.203-0.065 0.317 0 0.234 0.096 0.445 0.252 0.595 0.13 0.059 0.283 0.093 0.443 0.093 0.226 0 0.437-0.068 0.611-0.185l0.516-0.467c0.472 0.47 1.123 0.761 1.842 0.761 0.020 0 0.041-0 0.061-0.001 0.494-0.042 0.908-0.356 1.094-0.791 0.146 0.056 0.312 0.094 0.488 0.094 0.236 0 0.455-0.068 0.64-0.185 0.585-0.387 0.445-0.687 0.445-0.687 0.125 0.055 0.27 0.087 0.423 0.087 0.321 0 0.61-0.142 0.806-0.366 0.176-0.181 0.283-0.427 0.283-0.697 0-0.19-0.053-0.367-0.145-0.518 0.008 0.005 0.015 0.005 0.021 0.005 0.421 0 0.787-0.232 0.978-0.574 0.068-0.171 0.105-0.363 0.105-0.563 0-0.342-0.11-0.659-0.296-0.917l0.003 0.005c0.82-0.16 0.79-0.57 1.19-1.17 0.384-0.494 0.852-0.902 1.387-1.208zM12.95 10.060c-0.44 0.44-0.78 0.25-1.53-0.32s-2.24-1.64-2.24-1.64c0.061 0.305 0.202 0.57 0.401 0.781 0.319 0.359 1.269 1.179 1.719 1.599 0.28 0.26 1 0.78 0.58 1.18s-0.75 0-1.44-0.56-2.23-1.94-2.23-1.94c-0.001 0.018-0.002 0.038-0.002 0.059 0 0.258 0.104 0.491 0.272 0.661 0.17 0.2 1.12 1.12 1.52 1.54s0.75 0.67 0.41 1-1.030-0.19-1.41-0.58c-0.59-0.57-1.76-1.63-1.76-1.63-0.001 0.016-0.001 0.034-0.001 0.053 0 0.284 0.098 0.544 0.263 0.75 0.288 0.378 0.848 0.868 1.188 1.248s0.54 0.7 0 1-1.34-0.44-1.69-0.8c0-0.001 0-0.001 0-0.002 0-0.103-0.038-0.197-0.1-0.269-0.159-0.147-0.374-0.238-0.609-0.238-0.104 0-0.204 0.018-0.297 0.050 0.128-0.114 0.204-0.274 0.204-0.452s-0.076-0.338-0.198-0.45c-0.126-0.095-0.284-0.152-0.455-0.152s-0.33 0.057-0.457 0.153c0.117-0.113 0.189-0.268 0.189-0.441 0-0.213-0.109-0.4-0.274-0.509-0.153-0.097-0.336-0.153-0.532-0.153-0.244 0-0.468 0.088-0.642 0.233 0.095-0.114 0.151-0.26 0.151-0.42 0-0.195-0.085-0.37-0.219-0.491-0.178-0.165-0.417-0.266-0.679-0.266-0.185 0-0.358 0.050-0.507 0.138l-0.665-1.123c-0.46-0.73-1-1.49-1-1.49l2.28-2.77s0.81 0.5 1.48 0.88c0.33 0.19 0.9 0.44 1.33 0.64-0.68 0.51-1.25 1-1.080 1.34 0.297 0.214 0.668 0.343 1.069 0.343 0.376 0 0.726-0.113 1.018-0.307 0.373-0.251 0.84-0.403 1.343-0.403 0.347 0 0.677 0.072 0.976 0.203 0.554 0.374 1.574 1.294 2.504 1.874v0c1.17 0.85 1.4 1.4 1.12 1.68z"></path>
                            </svg>
                            </div>
                            <div class="guiding-card-sep"></div>
                            <h3 class="guiding-card-title">Growth</h3>
                        </div>
                        <p class="guiding-card-text">
                            We create opportunities, build lasting relationships and grow together.
                        </p>
                        <span class="guiding-card-bottom-pill"></span>
                    </div>
                </div>

                <!-- Card 3: Innovation -->
                <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="guiding-card">
                        <span class="guiding-card-corner"></span>
                        <div class="guiding-card-header">
                            <div class="guiding-card-icon">
                                <!-- Shining Lightbulb SVG -->
                                <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2v2M4.93 4.93l1.41 1.41M2 12h2M20 12h2M19.07 4.93l-1.41 1.41"></path>
                                    <path d="M9 18h6"></path>
                                    <path d="M10 21h4"></path>
                                    <path d="M12 6a5 5 0 0 0-3.2 8.8c.7.6 1.2 1.4 1.2 2.2h4c0-.8.5-1.6 1.2-2.2A5 5 0 0 0 12 6z"></path>
                                </svg>
                            </div>
                            <div class="guiding-card-sep"></div>
                            <h3 class="guiding-card-title">Innovation</h3>
                        </div>
                        <p class="guiding-card-text">
                            We embrace new ideas and smarter solutions to drive progress.
                        </p>
                        <span class="guiding-card-bottom-pill"></span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-out-cubic'
        });
    </script>
</body>
</html>
<?php include ROOT_PATH . '/elements/footer.php'; ?>