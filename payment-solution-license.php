<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/payment-solution-license';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';
?>

<!-- JSON-LD Structured Data (SEO, AEO, GEO Optimization) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FinancialService",
    "name": "Devotion Global Customer Service Provider",
    "url": "https://www.devotionglobal.com",
    "logo": "https://www.devotionglobal.com/assets/logo.png",
    "description": "Devotion Global specializes in legal entity setup, Payment Service Provider (PSP) licensing, Electronic Money Institution (EMI) registration, Crypto VASP approvals, and Forex brokerage setups.",
    "areaServed": "Global",
    "serviceType": "Payment Solution & Financial Licensing",
    "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Financial Services Catalog",
    "itemListElement": [
        {
        "@type": "Offer",
        "itemOffered": {
            "@type": "Service",
            "name": "Payment Service Provider (PSP) & EMI Licensing"
        }
        },
        {
        "@type": "Offer",
        "itemOffered": {
            "@type": "Service",
            "name": "Cryptocurrency & VASP Registration"
        }
        },
        {
        "@type": "Offer",
        "itemOffered": {
            "@type": "Service",
            "name": "Forex Broker Licensing (Offshore & Tier-1)"
        }
        }
    ]
    }
}
</script>

<style>
    :root {
        --brand-gold: #b58932;
        --brand-gold-hover: #9a7224;
        --brand-dark: #1d1d1f;
        --brand-muted: #5c5f66;
    }

    .payment-hero-section {
        background-color: #ffffff;
        background-image: linear-gradient(90deg, #ffffff 35%, rgba(255, 255, 255, 0) 60%), 
                        url('<?= $img ?>/Payment-Solution-Financial-Licensing.png');
        background-repeat: no-repeat;
        background-position: right bottom;
        background-size: contain;
        min-height: 460px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .gold-accent-line {
        width: 65px;
        height: 4px;
        background-color: var(--brand-gold);
        border-radius: 2px;
        margin-bottom: 1.25rem;
    }

    .hero-title {
        font-size: clamp(2.1rem, 3.8vw, 3.1rem);
        font-weight: 800;
        line-height: 1.15;
        color: var(--brand-dark);
        letter-spacing: -0.02em;
    }

    .hero-title span {
        color: var(--brand-gold);
        display: block;
    }

    .hero-description {
        font-size: 1.05rem;
        line-height: 1.65;
        color: var(--brand-muted);
        max-width: 490px;
    }

    .btn-gold {
        background-color: var(--brand-gold);
        border-color: var(--brand-gold);
        color: #ffffff;
        font-weight: 600;
        padding: 0.75rem 1.75rem;
        border-radius: 6px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-gold:hover,
    .btn-gold:focus {
        background-color: var(--brand-gold-hover);
        border-color: var(--brand-gold-hover);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(181, 137, 50, 0.25);
    }

    .btn-gold svg {
        transition: transform 0.3s ease;
    }

    .btn-gold:hover svg {
        transform: translateX(4px);
    }

    @media (max-width: 991.98px) {
        .payment-hero-section {
            background-image: none;
            min-height: auto;
        }

        .hero-description {
            max-width: 100%;
        }
    }
</style>

<section class="payment-hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                <div class="gold-accent-line"></div>
                <h1 class="hero-title mb-3">
                    Payment Solution &amp;
                    <span>Financial Licensing</span>
                </h1>
                <p class="hero-description mb-4">
                    Devotion Global Customer Service Provider authorizes fintech companies, PSPs, Electronic Money Institutions (EMIs), Crypto exchanges, and Forex brokerages with global regulatory licenses.
                </p>
                <a href="#license-types" class="btn btn-gold">
                    Explore License Types
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <div class="col-lg-6 d-lg-none mt-4 text-center" data-aos="fade-up" data-aos-duration="800">
                <img src="Payment-Solution-Financial-Licensing.png" alt="Payment Solution and Financial Licensing" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<style>
    /* =========================================
    About Licensing Section
    ========================================= */
    .about-licensing-section {
        background-color: #ffffff;
        overflow: hidden;
    }

    .about-badge {
        display: inline-block;
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        font-size: 0.78rem;
        font-weight: 600;
        padding: 0.35rem 1rem;
        border-radius: 50px;
        letter-spacing: 0.03em;
    }

    .about-title {
        font-size: clamp(1.85rem, 3vw, 2.5rem);
        font-weight: 800;
        line-height: 1.2;
        color: var(--brand-dark, #1d1d1f);
    }

    .about-title span {
        color: var(--brand-gold, #b58932);
        display: block;
    }

    .about-description {
        font-size: 0.98rem;
        line-height: 1.7;
        color: var(--brand-muted, #5c5f66);
    }

    /* =========================================
    Left Composite Graphic (Part-Wise AOS)
    ========================================= */
    .licensing-visual-wrapper {
        position: relative;
        width: 100%;
        max-width: 560px;
        min-height: 440px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Center Skewed Frame */
    .visual-center-frame {
        position: relative;
        width: 240px;
        height: 360px;
        z-index: 2;
    }

    /* Decorative Gold Geometric Accents */
    .visual-gold-shape-top {
        position: absolute;
        top: -12px;
        right: 26px;
        width: 75px;
        height: 24px;
        background-color: var(--brand-gold, #b58932);
        transform: skewY(-10deg);
        border-radius: 4px;
        z-index: 1;
    }

    .visual-gold-shape-bottom {
        position: absolute;
        bottom: -10px;
        left: -14px;
        width: 160px;
        height: 180px;
        background-color: var(--brand-gold, #b58932);
        transform: skewY(-10deg);
        border-radius: 12px;
        z-index: 1;
    }

    .visual-gold-outline {
        position: absolute;
        inset: -6px 8px 4px -8px;
        border: 1.5px solid var(--brand-gold, #b58932);
        transform: skewY(-10deg);
        border-radius: 16px;
        z-index: 3;
        pointer-events: none;
    }

    .visual-image-mask {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 16px;
        overflow: hidden;
        transform: skewY(-10deg);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.14);
        z-index: 2;
        background-color: #162231;
    }

    .visual-image-mask img {
        width: 100%;
        height: 125%;
        object-fit: cover;
        object-position: center;
        transform: skewY(10deg) translateY(-10%);
    }

    /* 4 Floating Cards */
    .visual-floating-card {
        position: absolute;
        width: 240px;
        background: #fcfaf7;
        border: 1px solid #f0ebe1;
        border-radius: 16px;
        padding: 0.9rem 1rem;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        z-index: 4;
        display: flex;
        align-items: flex-start;
        gap: 0.7rem;
        text-align: left;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .visual-floating-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 35px rgba(181, 137, 50, 0.14);
    }

    .visual-floating-card::after {
        content: "";
        position: absolute;
        right: 10px;
        top: 22%;
        bottom: 22%;
        width: 2px;
        background-color: var(--brand-gold, #b58932);
        border-radius: 2px;
        opacity: 0.75;
    }

    .v-card-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        color: #ffffff;
        font-size: 1.15rem;
    }

    .v-card-icon.gold {
        background-color: var(--brand-gold, #b58932);
    }

    .v-card-icon.navy {
        background-color: #132232;
    }

    .v-card-content h6 {
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--brand-dark, #1d1d1f);
        margin-bottom: 0.25rem;
        line-height: 1.25;
    }

    .v-card-content p {
        font-size: 0.72rem;
        line-height: 1.4;
        color: var(--brand-muted, #5c5f66);
        margin-bottom: 0;
    }

    /* Card Positions */
    .v-card-top-left {
        top: 38px;
        left: 0;
    }

    .v-card-bottom-left {
        bottom: 42px;
        left: 0;
    }

    .v-card-top-right {
        top: 28px;
        right: 0;
    }

    .v-card-bottom-right {
        bottom: 42px;
        right: 0;
    }

    @media (max-width: 575.98px) {
        .licensing-visual-wrapper {
            min-height: auto;
            flex-direction: column;
            gap: 1rem;
        }

        .visual-center-frame {
            margin: 1.5rem 0;
            height: 280px;
        }

        .visual-floating-card {
            position: relative;
            top: auto;
            bottom: auto;
            left: auto;
            right: auto;
            width: 100%;
        }
    }

    /* Feature Checklist Grid */
    .licensing-features {
        position: relative;
    }

    @media (min-width: 768px) {
        .licensing-features-divider {
            border-right: 1px solid #e5e7eb;
        }
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-weight: 600;
        font-size: 0.92rem;
        color: var(--brand-dark, #1d1d1f);
    }

    .feature-icon {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        background-color: rgba(181, 137, 50, 0.14);
        color: var(--brand-gold, #b58932);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 0.9rem;
    }

    /* License Types Box */
    .license-types-box {
        border: 1px solid #e2d5b8;
        border-radius: 14px;
        padding: 0.65rem;
        background-color: #ffffff;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.03);
    }

    .license-types-badge {
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        border-radius: 10px;
        padding: 1rem 1.15rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        height: 100%;
    }

    .license-types-badge i {
        font-size: 1.5rem;
        opacity: 0.9;
    }

    .license-types-badge span {
        font-weight: 700;
        font-size: 0.85rem;
        line-height: 1.25;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }

    .license-pill {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border: 1px solid #eceef2;
        border-radius: 50px;
        padding: 0.45rem 0.9rem;
        font-size: 0.82rem;
        color: var(--brand-muted, #5c5f66);
        background-color: #fcfcfd;
        transition: all 0.25s ease;
    }

    .license-pill:hover {
        border-color: var(--brand-gold, #b58932);
        background-color: rgba(181, 137, 50, 0.05);
    }

    .license-pill strong {
        color: var(--brand-dark, #1d1d1f);
        font-weight: 700;
    }
</style>

<section class="about-licensing-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Left Graphic Column (Part-Wise Scroll Animations) -->
            <div class="col-lg-6">
                <div class="licensing-visual-wrapper">

                    <!-- Center Skewed Image Frame -->
                    <div class="visual-center-frame" data-aos="zoom-in" data-aos-duration="800">
                        <div class="visual-gold-shape-top" data-aos="fade-down" data-aos-delay="250"></div>
                        <div class="visual-gold-shape-bottom" data-aos="fade-up" data-aos-delay="250"></div>
                        <div class="visual-gold-outline"></div>
                        <div class="visual-image-mask">
                            <!-- Center Laptop / Dubai Skyline Photo -->
                            <img src="<?= $img; ?>/What-is-a-Payment-Solution-License-by-Devotion-Global.png" 
                                 alt="Payment Solution Infrastructure">
                        </div>
                    </div>

                    <!-- Card 1: Top Left (EMI) -->
                    <div class="visual-floating-card v-card-top-left" data-aos="fade-right" data-aos-delay="200" data-aos-duration="750">
                        <div class="v-card-icon gold">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <div class="v-card-content">
                            <h6>Electronic Money (EMI)</h6>
                            <p>Store and transfer digital money securely.</p>
                        </div>
                    </div>

                    <!-- Card 2: Bottom Left (PSP) -->
                    <div class="visual-floating-card v-card-bottom-left" data-aos="fade-right" data-aos-delay="350" data-aos-duration="750">
                        <div class="v-card-icon navy">
                            <i class="bi bi-credit-card-2-front"></i>
                        </div>
                        <div class="v-card-content">
                            <h6>Payment Service Provider (PSP)</h6>
                            <p>Comprehensive payment solutions for your business.</p>
                        </div>
                    </div>

                    <!-- Card 3: Top Right (MTL) -->
                    <div class="visual-floating-card v-card-top-right" data-aos="fade-left" data-aos-delay="300" data-aos-duration="750">
                        <div class="v-card-icon gold">
                            <i class="bi bi-send"></i>
                        </div>
                        <div class="v-card-content">
                            <h6>Money Transfer (MTL)</h6>
                            <p>Fast, secure &amp; compliant money transfers.</p>
                        </div>
                    </div>

                    <!-- Card 4: Bottom Right (Forex) -->
                    <div class="visual-floating-card v-card-bottom-right" data-aos="fade-left" data-aos-delay="450" data-aos-duration="750">
                        <div class="v-card-icon navy">
                            <i class="bi bi-bank"></i>
                        </div>
                        <div class="v-card-content">
                            <h6>Forex Broker Licensing</h6>
                            <p>Build a forex or investment firm with confidence.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Content Column -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="850">
                <span class="about-badge mb-3">About Licensing</span>

                <h2 class="about-title mb-3">
                    What is a Payment Solution
                    <span>License by Devotion Global?</span>
                </h2>

                <p class="about-description mb-4">
                    A Payment Solution License (such as a PSP, EMI, PI or Money Transmitter License) allows companies to process online merchant transactions, issue electronic money/IBANs, provide e-wallets, and facilitate international cross-border fund transfers legally. Devotion Global delivers complete turnkey setups including corporate structuring, regulatory filing, physical substance, PCI-DSS compliance guidance, and correspondent bank integrations globally.
                </p>

                <!-- Feature Checklist -->
                <div class="row licensing-features g-3 mb-4">
                    <div class="col-md-6 licensing-features-divider">
                        <div class="d-flex flex-column gap-3">
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                                <span class="feature-icon"><i class="bi bi-bank"></i></span>
                                <span>Corporate structuring</span>
                            </div>
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="150">
                                <span class="feature-icon"><i class="bi bi-building-check"></i></span>
                                <span>Physical substance</span>
                            </div>
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                                <span class="feature-icon"><i class="bi bi-link-45deg"></i></span>
                                <span>Correspondent bank integrations</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ps-md-4">
                        <div class="d-flex flex-column gap-3">
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="250">
                                <span class="feature-icon"><i class="bi bi-shield-check"></i></span>
                                <span>Regulatory filing</span>
                            </div>
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                                <span class="feature-icon"><i class="bi bi-lock"></i></span>
                                <span>PCI-DSS compliance guidance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 m-auto mt-4 d-none" id="license-types" data-aos="fade-up" data-aos-duration="850">
                <!-- License Types Bottom Box -->
                <div class="license-types-box" data-aos="fade-up" data-aos-delay="350">
                    <div class="row g-2 align-items-center">
                        <div class="col-sm-4">
                            <div class="license-types-badge">
                                <i class="bi bi-layers"></i>
                                <span>License Types</span>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="license-pill">
                                        <strong>PSP</strong>
                                        <span>Payment Service Provider</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="license-pill">
                                        <strong>EMI</strong>
                                        <span>Electronic Money Institution</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="license-pill">
                                        <strong>PI</strong>
                                        <span>Payment Institution</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="license-pill">
                                        <strong>MTL</strong>
                                        <span>Money Transmitter License</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* =========================================
    Our Services - Fintech Licensing Section
    ========================================= */
    .fintech-services-section {
        position: relative;
        background-color: #ffffff;
        background-image: url('<?= $img; ?>/Payment-Solution-Fintech-Licensing.png');
        background-repeat: no-repeat;
        background-position: right bottom;
        background-size: 46% auto;
        overflow: hidden;
    }

    .services-badge {
        display: inline-block;
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        font-size: 0.78rem;
        font-weight: 600;
        padding: 0.35rem 1.05rem;
        border-radius: 50px;
        letter-spacing: 0.03em;
    }

    .services-title {
        font-size: clamp(1.9rem, 3.1vw, 2.55rem);
        font-weight: 800;
        line-height: 1.18;
        color: var(--brand-dark, #1d1d1f);
        letter-spacing: -0.02em;
    }

    .services-title span {
        color: var(--brand-gold, #b58932);
        display: block;
    }

    .services-subtitle {
        font-size: 0.96rem;
        line-height: 1.65;
        color: var(--brand-muted, #5c5f66);
    }

    /* Service Cards */
    .fintech-service-card {
        position: relative;
        background: rgba(255, 255, 255, 0.96);
        backdrop-filter: blur(6px);
        border: 1px solid #e7d9bc;
        border-radius: 16px;
        padding: 1.75rem 1.5rem 1.6rem;
        height: 100%;
        display: flex;
        align-items: flex-start;
        gap: 1.15rem;
        overflow: hidden;
        transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.03);
    }

    .fintech-service-card::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, var(--brand-gold, #b58932), #d9b05b);
        transition: width 0.4s ease;
    }

    .fintech-service-card:hover {
        transform: translateY(-6px);
        border-color: var(--brand-gold, #b58932);
        box-shadow: 0 18px 40px rgba(181, 137, 50, 0.14);
    }

    .fintech-service-card:hover::before {
        width: 100%;
    }

    /* Top-Right Angled Number Badge */
    .service-number-tag {
        position: absolute;
        top: 0;
        right: 0;
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        font-size: 0.82rem;
        font-weight: 700;
        padding: 0.35rem 1rem 0.4rem 1.25rem;
        border-bottom-left-radius: 16px;
        letter-spacing: 0.04em;
        transition: background-color 0.3s ease, padding-right 0.3s ease;
    }

    .fintech-service-card:hover .service-number-tag {
        background-color: #9a7224;
        padding-right: 1.2rem;
    }

    /* Animated Icon Container */
    .service-icon-box {
        width: 54px;
        height: 54px;
        border-radius: 12px;
        background-color: #fbf7ef;
        border: 1px solid #efe3ca;
        color: var(--brand-gold, #b58932);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 1.5rem;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .fintech-service-card:hover .service-icon-box {
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        border-color: var(--brand-gold, #b58932);
        transform: scale(1.08) rotate(-5deg);
        box-shadow: 0 8px 18px rgba(181, 137, 50, 0.28);
    }

    .service-card-body h5 {
        font-size: 1.05rem;
        font-weight: 700;
        line-height: 1.32;
        color: var(--brand-dark, #1d1d1f);
        margin-bottom: 0.55rem;
        padding-right: 2.2rem;
    }

    .service-card-body p {
        font-size: 0.86rem;
        line-height: 1.6;
        color: var(--brand-muted, #5c5f66);
        margin-bottom: 0;
    }

    @media (max-width: 1199.98px) {
        .fintech-services-section {
            background-size: 55% auto;
        }
    }

    @media (max-width: 991.98px) {
        .fintech-services-section {
            background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)),
                              url('<?= $img; ?>/Payment-Solution-Fintech-Licensing.png');
            background-size: cover;
            background-position: right center;
        }
    }
</style>

<section class="fintech-services-section py-5">
    <div class="container py-lg-5">
        <div class="row align-items-start g-4 g-xl-5">
            <!-- Left Heading Column -->
            <div class="col-lg-4" data-aos="fade-right" data-aos-duration="800">
                <span class="services-badge mb-3">Our Services</span>
                <h2 class="services-title mb-3">
                    Payment Solution &amp;
                    <span>Fintech Licensing</span>
                </h2>
                <p class="services-subtitle mb-0">
                    Legal infrastructure tailored for payment gateways, money remitters, and digital banks.
                </p>
            </div>

            <!-- Right 2x2 Cards Grid -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- Card 01 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="750">
                        <div class="fintech-service-card">
                            <span class="service-number-tag">01</span>
                            <div class="service-icon-box">
                                <i class="bi bi-credit-card-2-front"></i>
                            </div>
                            <div class="service-card-body">
                                <h5>Payment Service Provider (PSP)</h5>
                                <p>
                                    Process credit card transactions and alternative payment methods (APMs) for high-risk and low-risk merchant accounts globally.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 02 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="750">
                        <div class="fintech-service-card">
                            <span class="service-number-tag">02</span>
                            <div class="service-icon-box">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <div class="service-card-body">
                                <h5>Electronic Money Institution (EMI)</h5>
                                <p>
                                    Issue e-money, create multi-currency virtual IBANs, offer prepaid cards, and operate digital wallet accounts for retail and business clients.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 03 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="750">
                        <div class="fintech-service-card">
                            <span class="service-number-tag">03</span>
                            <div class="service-icon-box">
                                <i class="bi bi-bank"></i>
                            </div>
                            <div class="service-card-body">
                                <h5>Payment Institution (PI) License</h5>
                                <p>
                                    Authorize money remittance, direct debits, credit transfers, and account information services (Open Banking / PSD2 standard).
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 04 -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="750">
                        <div class="fintech-service-card">
                            <span class="service-number-tag">04</span>
                            <div class="service-icon-box">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <div class="service-card-body">
                                <h5>Money Transmitter License (MTL)</h5>
                                <p>
                                    Secure regulatory permission for cross-border money transfers, peer-to-peer payout solutions, and currency conversion operations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* =========================================
    Our Licensing Framework Section
    ========================================= */
    .licensing-framework-section {
        background-color: #f7f7f7;
        position: relative;
        overflow: hidden;
    }

    .process-badge {
        display: inline-block;
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        font-size: 0.78rem;
        font-weight: 600;
        padding: 0.35rem 1.2rem;
        border-radius: 50px;
        letter-spacing: 0.04em;
    }

    .framework-title {
        font-size: clamp(1.9rem, 3.2vw, 2.6rem);
        font-weight: 800;
        color: var(--brand-dark, #1d1d1f);
        letter-spacing: -0.02em;
    }

    .framework-title span {
        color: var(--brand-gold, #b58932);
    }

    .framework-subtitle {
        font-size: 0.96rem;
        color: var(--brand-muted, #5c5f66);
    }

    /* Step Cards Wrapper */
    .framework-step-col {
        position: relative;
    }

    .framework-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.06);
        transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.4s ease;
        border: 1px solid rgba(181, 137, 50, 0.18);
    }

    .framework-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 22px 45px rgba(181, 137, 50, 0.2);
    }

    /* Light & Gold Card Themes */
    .framework-card.card-light {
        background-color: #ffffff;
        color: var(--brand-dark, #1d1d1f);
    }

    .framework-card.card-gold {
        background: linear-gradient(160deg, #b88c35 0%, #9c7222 100%);
        color: #ffffff;
    }

    /* Top Image Container with Diagonal Cut */
    .framework-card-img-wrap {
        position: relative;
        height: 155px;
        width: 100%;
        overflow: hidden;
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 76%);
    }

    .framework-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .framework-card:hover .framework-card-img-wrap img {
        transform: scale(1.1);
    }

    /* Step Number Pill */
    .framework-step-num {
        position: absolute;
        top: 14px;
        left: 14px;
        z-index: 3;
        background-color: #ffffff;
        color: var(--brand-gold, #b58932);
        font-weight: 800;
        font-size: 0.95rem;
        padding: 0.3rem 0.72rem;
        border-radius: 8px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
        transition: transform 0.35s ease, background-color 0.35s ease, color 0.35s ease;
    }

    .framework-card:hover .framework-step-num {
        transform: scale(1.08);
    }

    /* Overlapping Icon Box */
    .framework-icon-box {
        position: relative;
        z-index: 4;
        width: 48px;
        height: 48px;
        margin: -34px 0 0.85rem 1.35rem;
        background-color: #ffffff;
        border: 1.5px solid #e7d8b9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brand-gold, #b58932);
        font-size: 1.35rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.45s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .framework-card:hover .framework-icon-box {
        transform: translateY(-4px) rotate(6deg);
    }

    /* Card Content */
    .framework-card-body {
        padding: 0 1.35rem 1.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .framework-card-body h5 {
        font-size: 1.05rem;
        font-weight: 700;
        margin-bottom: 0.6rem;
    }

    .framework-card-body p {
        font-size: 0.82rem;
        line-height: 1.58;
        margin-bottom: 1.15rem;
    }

    .card-light .framework-card-body p {
        color: var(--brand-muted, #5c5f66);
    }

    .card-gold .framework-card-body p {
        color: rgba(255, 255, 255, 0.9);
    }

    /* Checklist inside cards */
    .framework-checklist {
        list-style: none;
        padding: 0;
        margin: auto 0 0;
        display: flex;
        flex-direction: column;
        gap: 0.45rem;
    }

    .framework-checklist li {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        font-size: 0.78rem;
        font-weight: 600;
        line-height: 1.35;
    }

    .card-light .framework-checklist li {
        color: var(--brand-dark, #1d1d1f);
    }

    .card-light .framework-checklist li i {
        color: var(--brand-gold, #b58932);
    }

    .card-gold .framework-checklist li {
        color: #ffffff;
    }

    .card-gold .framework-checklist li i {
        color: #ffffff;
    }

    /* Connector Arrow Between Cards */
    .step-connector-arrow {
        position: absolute;
        top: 52%;
        right: -19px;
        transform: translateY(-50%);
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background-color: var(--brand-gold, #b58932);
        border: 3px solid #ffffff;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        z-index: 10;
        box-shadow: 0 6px 16px rgba(181, 137, 50, 0.35);
        animation: pulseArrow 2s infinite ease-in-out;
    }

    @keyframes pulseArrow {
        0%, 100% {
            transform: translateY(-50%) scale(1);
            box-shadow: 0 0 0 0 rgba(181, 137, 50, 0.45);
        }
        50% {
            transform: translateY(-50%) translateX(3px) scale(1.08);
            box-shadow: 0 0 0 8px rgba(181, 137, 50, 0);
        }
    }

    @media (max-width: 991.98px) {
        .step-connector-arrow {
            display: none;
        }
    }
</style>

<section class="licensing-framework-section py-5">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="750">
            <span class="process-badge mb-2">Our Process</span>
            <h2 class="framework-title mb-2">
                Our Licensing <span>Framework</span>
            </h2>
            <p class="framework-subtitle mb-0">
                A structured step-by-step roadmap to achieving operational compliance.
            </p>
        </div>

        <!-- 4-Step Process Grid -->
        <div class="row g-4 align-items-stretch">
            <!-- Step 01 -->
            <div class="col-md-6 col-lg-3 framework-step-col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div class="framework-card card-light">
                    <span class="framework-step-num">01</span>
                    <div class="framework-card-img-wrap">
                        <img src="<?= $img; ?>/Fintech-Strategy.png" alt="Fintech Strategy">
                    </div>
                    <div class="framework-icon-box">
                        <i class="bi bi-credit-card-2-front"></i>
                    </div>
                    <div class="framework-card-body">
                        <h5>Fintech Strategy</h5>
                        <p>
                            We review your software architecture, payment flows, business model, and target corridors to choose the proper license type.
                        </p>
                        <ul class="framework-checklist">
                            <li><i class="bi bi-check-lg"></i> Software architecture review</li>
                            <li><i class="bi bi-check-lg"></i> Payment flow analysis</li>
                            <li><i class="bi bi-check-lg"></i> License type selection</li>
                        </ul>
                    </div>
                </div>
                <!-- Animated Connector -->
                <div class="step-connector-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-md-6 col-lg-3 framework-step-col" data-aos="fade-up" data-aos-delay="250" data-aos-duration="800">
                <div class="framework-card card-gold">
                    <span class="framework-step-num">02</span>
                    <div class="framework-card-img-wrap">
                        <img src="<?= $img; ?>/Corporate-Substation.png" alt="Corporate Substation">
                    </div>
                    <div class="framework-icon-box">
                        <i class="bi bi-bank"></i>
                    </div>
                    <div class="framework-card-body">
                        <h5>Corporate Substation</h5>
                        <p>
                            Establishment of legal entities, local office space, resident compliance officers, and required share capital structures.
                        </p>
                        <ul class="framework-checklist">
                            <li><i class="bi bi-check-lg"></i> Legal entity set-up</li>
                            <li><i class="bi bi-check-lg"></i> Local office &amp; compliance officer</li>
                            <li><i class="bi bi-check-lg"></i> Share capital structure</li>
                        </ul>
                    </div>
                </div>
                <!-- Animated Connector -->
                <div class="step-connector-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-md-6 col-lg-3 framework-step-col" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                <div class="framework-card card-light">
                    <span class="framework-step-num">03</span>
                    <div class="framework-card-img-wrap">
                        <img src="<?= $img; ?>/Filing-Policy-Build.png" alt="Filing & Policy Build">
                    </div>
                    <div class="framework-icon-box">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="framework-card-body">
                        <h5>Filing &amp; Policy Build</h5>
                        <p>
                            Preparing AML/CTF frameworks, business plans, security procedures, and submitting formal applications to regulators.
                        </p>
                        <ul class="framework-checklist">
                            <li><i class="bi bi-check-lg"></i> AML/CTF framework</li>
                            <li><i class="bi bi-check-lg"></i> Business plan &amp; security procedures</li>
                            <li><i class="bi bi-check-lg"></i> Formal regulator application</li>
                        </ul>
                    </div>
                </div>
                <!-- Animated Connector -->
                <div class="step-connector-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-md-6 col-lg-3 framework-step-col" data-aos="fade-up" data-aos-delay="550" data-aos-duration="800">
                <div class="framework-card card-gold">
                    <span class="framework-step-num">04</span>
                    <div class="framework-card-img-wrap">
                        <img src="<?= $img; ?>/Banking-Activation.png" alt="Banking & Activation">
                    </div>
                    <div class="framework-icon-box">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="framework-card-body">
                        <h5>Banking &amp; Activation</h5>
                        <p>
                            Opening central bank safeguarding accounts, acquiring network sponsorships, and integrating payment processing rails.
                        </p>
                        <ul class="framework-checklist">
                            <li><i class="bi bi-check-lg"></i> Safeguarding accounts</li>
                            <li><i class="bi bi-check-lg"></i> Network sponsorships</li>
                            <li><i class="bi bi-check-lg"></i> Payment rails integration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* =========================================
    Cryptocurrency & VASP Licensing Section
    ========================================= */
    .crypto-vasp-section {
        background-color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    /* Pill Badge with Flanking Gold Lines */
    .vasp-badge-wrap {
        display: inline-flex;
        align-items: center;
        gap: 1rem;
    }

    .vasp-badge-line {
        width: 55px;
        height: 1.5px;
        background: linear-gradient(90deg, transparent, var(--brand-gold, #b58932));
    }

    .vasp-badge-line.right {
        background: linear-gradient(90deg, var(--brand-gold, #b58932), transparent);
    }

    .vasp-badge {
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        font-size: 0.78rem;
        font-weight: 600;
        padding: 0.35rem 1.25rem;
        border-radius: 50px;
        letter-spacing: 0.04em;
    }

    .vasp-title {
        font-size: clamp(1.85rem, 3.2vw, 2.6rem);
        font-weight: 800;
        color: var(--brand-dark, #1d1d1f);
        letter-spacing: -0.02em;
    }

    .vasp-title span {
        color: var(--brand-gold, #b58932);
    }

    .vasp-subtitle {
        font-size: 0.96rem;
        line-height: 1.65;
        color: var(--brand-muted, #5c5f66);
        max-width: 560px;
        margin: 0 auto;
    }

    /* Card Outer Gold Frame */
    .vasp-card {
        position: relative;
        background-color: #ffffff;
        border: 1.5px solid #dec692;
        border-radius: 18px;
        padding: 0.55rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.04);
    }

    .vasp-card:hover {
        transform: translateY(-8px);
        border-color: var(--brand-gold, #b58932);
        box-shadow: 0 22px 45px rgba(181, 137, 50, 0.16);
    }

    /* Image Container with Diagonal Wave Bottom */
    .vasp-card-media {
        position: relative;
        height: 185px;
        border-radius: 13px 13px 0 0;
        overflow: hidden;
    }

    .vasp-card-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .vasp-card:hover .vasp-card-media img {
        transform: scale(1.08);
    }

    /* Gold Swoop Divider */
    .vasp-card-swoop {
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 36px;
        z-index: 2;
        pointer-events: none;
    }

    /* Floating Left Icon Box */
    .vasp-icon-badge {
        position: absolute;
        top: 50%;
        left: 16px;
        transform: translateY(-50%);
        z-index: 4;
        width: 56px;
        height: 56px;
        background-color: #ffffff;
        border: 1.5px solid #e7d8b9;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brand-gold, #b58932);
        font-size: 1.45rem;
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.12);
        transition: all 0.45s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .vasp-card:hover .vasp-icon-badge {
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        border-color: var(--brand-gold, #b58932);
        transform: translateY(-50%) scale(1.08) rotate(-6deg);
    }

    /* Card Text Body */
    .vasp-card-content {
        position: relative;
        padding: 1.15rem 1.15rem 2.75rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .vasp-card-content h5 {
        font-size: 1.08rem;
        font-weight: 700;
        color: var(--brand-dark, #1d1d1f);
        margin-bottom: 0.6rem;
        transition: color 0.3s ease;
    }

    .vasp-card:hover .vasp-card-content h5 {
        color: var(--brand-gold, #b58932);
    }

    .vasp-card-content p {
        font-size: 0.86rem;
        line-height: 1.62;
        color: var(--brand-muted, #5c5f66);
        margin-bottom: 0;
        position: relative;
        z-index: 2;
    }

    /* Outlined Watermark Step Number */
    .vasp-watermark-num {
        position: absolute;
        bottom: 6px;
        right: 14px;
        font-size: 2.65rem;
        font-weight: 800;
        line-height: 1;
        color: transparent;
        -webkit-text-stroke: 1.4px #dec692;
        user-select: none;
        pointer-events: none;
        transition: all 0.4s ease;
    }

    .vasp-card:hover .vasp-watermark-num {
        -webkit-text-stroke: 1.5px var(--brand-gold, #b58932);
        transform: translateY(-4px) scale(1.05);
    }

    @media (max-width: 575.98px) {
        .vasp-badge-line {
            width: 30px;
        }
        .vasp-card-media {
            height: 165px;
        }
    }
</style>

<section class="crypto-vasp-section py-5">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="750">
            <div class="vasp-badge-wrap mb-3">
                <span class="vasp-badge-line"></span>
                <span class="vasp-badge">Our Services</span>
                <span class="vasp-badge-line right"></span>
            </div>

            <h2 class="vasp-title mb-3">
                Cryptocurrency &amp; VASP <span>Licensing</span>
            </h2>

            <p class="vasp-subtitle">
                End-to-end licensing, compliance, and infrastructure solutions for crypto and virtual asset service providers (VASPs).
            </p>
        </div>

        <!-- 3-Column Cards Grid -->
        <div class="row g-4 justify-content-center">
            <!-- Card 01 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div class="vasp-card">
                    <div class="vasp-card-media">
                        <img src="<?= $img; ?>/MiCA-Crypto-Regulation.png" alt="MiCA & Crypto Regulation">
                        <div class="vasp-icon-badge">
                            <i class="bi bi-coin"></i>
                        </div>
                        <svg class="vasp-card-swoop" viewBox="0 0 400 40" preserveAspectRatio="none">
                            <path d="M0,12 Q180,45 400,26 L400,40 L0,40 Z" fill="#b58932" opacity="0.85" />
                            <path d="M0,18 Q190,48 400,32 L400,40 L0,40 Z" fill="#ffffff" />
                        </svg>
                    </div>

                    <div class="vasp-card-content">
                        <h5>MiCA &amp; Crypto Regulation</h5>
                        <p>
                            Advisory and licensing support under EU MiCA and other leading crypto regulatory frameworks.
                        </p>
                        <span class="vasp-watermark-num">01</span>
                    </div>
                </div>
            </div>

            <!-- Card 02 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250" data-aos-duration="800">
                <div class="vasp-card">
                    <div class="vasp-card-media">
                        <img src="<?= $img; ?>/VASP-Licensing-Setup.png" alt="VASP Licensing & Setup">
                        <div class="vasp-icon-badge">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <svg class="vasp-card-swoop" viewBox="0 0 400 40" preserveAspectRatio="none">
                            <path d="M0,12 Q180,45 400,26 L400,40 L0,40 Z" fill="#b58932" opacity="0.85" />
                            <path d="M0,18 Q190,48 400,32 L400,40 L0,40 Z" fill="#ffffff" />
                        </svg>
                    </div>

                    <div class="vasp-card-content">
                        <h5>VASP Licensing &amp; Setup</h5>
                        <p>
                            End-to-end VASP licensing, entity setup, compliance, and regulatory registration.
                        </p>
                        <span class="vasp-watermark-num">02</span>
                    </div>
                </div>
            </div>

            <!-- Card 03 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                <div class="vasp-card">
                    <div class="vasp-card-media">
                        <img src="<?= $img; ?>/Compliance-Ongoing-Support.png" alt="Compliance & Ongoing Support">
                        <div class="vasp-icon-badge">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <svg class="vasp-card-swoop" viewBox="0 0 400 40" preserveAspectRatio="none">
                            <path d="M0,12 Q180,45 400,26 L400,40 L0,40 Z" fill="#b58932" opacity="0.85" />
                            <path d="M0,18 Q190,48 400,32 L400,40 L0,40 Z" fill="#ffffff" />
                        </svg>
                    </div>

                    <div class="vasp-card-content">
                        <h5>Compliance &amp; Ongoing Support</h5>
                        <p>
                            Ongoing AML/KYC, transaction monitoring, policy development, and regulatory compliance support.
                        </p>
                        <span class="vasp-watermark-num">03</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* =========================================
    Fintech License Comparison Matrix Section
    ========================================= */
    .comparison-matrix-section {
        background-color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    /* Header Badge & Lines */
    .matrix-badge-wrap {
        display: inline-flex;
        align-items: center;
        gap: 1rem;
    }

    .matrix-badge-line {
        width: 55px;
        height: 1.5px;
        background: linear-gradient(90deg, transparent, var(--brand-gold, #b58932));
    }

    .matrix-badge-line.right {
        background: linear-gradient(90deg, var(--brand-gold, #b58932), transparent);
    }

    .matrix-badge {
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        font-size: 0.78rem;
        font-weight: 600;
        padding: 0.35rem 1.25rem;
        border-radius: 50px;
        letter-spacing: 0.04em;
    }

    .matrix-title {
        font-size: clamp(1.85rem, 3.2vw, 2.6rem);
        font-weight: 800;
        color: var(--brand-dark, #1d1d1f);
        letter-spacing: -0.02em;
    }

    .matrix-title span {
        color: var(--brand-gold, #b58932);
    }

    .matrix-subtitle {
        font-size: 0.96rem;
        line-height: 1.65;
        color: var(--brand-muted, #5c5f66);
        max-width: 560px;
        margin: 0 auto;
    }

    /* Table Wrapper */
    .matrix-table-wrapper {
        border: 1.5px solid #dec692;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 14px 36px rgba(0, 0, 0, 0.05);
        background-color: #ffffff;
    }

    .matrix-table {
        margin-bottom: 0;
        vertical-align: middle;
        border-collapse: collapse;
    }

    /* Table Head */
    .matrix-table thead th {
        background: linear-gradient(180deg, #b88b32 0%, #9f7523 100%);
        color: #ffffff;
        font-weight: 600;
        font-size: 0.92rem;
        padding: 1.15rem 1.35rem;
        border-bottom: none;
        border-right: 1px solid rgba(255, 255, 255, 0.16);
        white-space: nowrap;
    }

    .matrix-table thead th:last-child {
        border-right: none;
        text-align: center;
    }

    .matrix-table thead th i {
        font-size: 1.05rem;
        margin-right: 0.45rem;
        opacity: 0.95;
    }

    /* Table Body Rows */
    .matrix-table tbody tr {
        transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
        border-bottom: 1px solid #ede2cc;
    }

    .matrix-table tbody tr:last-child {
        border-bottom: none;
    }

    .matrix-table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .matrix-table tbody tr:nth-child(even) {
        background-color: #fbf7ef;
    }

    .matrix-table tbody tr:hover {
        background-color: #f6eedc;
        transform: scale(1.004);
        box-shadow: 0 6px 20px rgba(181, 137, 50, 0.12);
        position: relative;
        z-index: 2;
    }

    .matrix-table tbody td {
        padding: 1.1rem 1.35rem;
        font-size: 0.9rem;
        color: var(--brand-dark, #1d1d1f);
        border-right: 1px solid #f0e8d8;
    }

    .matrix-table tbody td:last-child {
        border-right: none;
        text-align: center;
    }

    /* Jurisdiction Flag & Text */
    .jurisdiction-cell {
        display: flex;
        align-items: center;
        gap: 0.85rem;
        min-width: 195px;
    }

    .flag-badge {
        width: 34px;
        height: 23px;
        border-radius: 4px;
        overflow: hidden;
        flex-shrink: 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.12);
        border: 1px solid rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .matrix-table tbody tr:hover .flag-badge {
        transform: scale(1.12);
    }

    .jurisdiction-info strong {
        display: block;
        font-weight: 700;
        font-size: 0.92rem;
        line-height: 1.25;
        color: var(--brand-dark, #1d1d1f);
    }

    .jurisdiction-info span {
        font-size: 0.8rem;
        color: var(--brand-muted, #5c5f66);
        font-weight: 500;
    }

    .license-type-text {
        font-weight: 600;
        color: var(--brand-dark, #1d1d1f);
        min-width: 170px;
    }

    .use-cases-text {
        color: #3f4248;
        font-size: 0.88rem;
        line-height: 1.45;
        min-width: 210px;
    }

    .timeline-text {
        font-weight: 600;
        color: var(--brand-dark, #1d1d1f);
        white-space: nowrap;
    }

    /* Cost Pills */
    .cost-pill {
        display: inline-block;
        padding: 0.42rem 1.15rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.84rem;
        line-height: 1.3;
        min-width: 128px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .matrix-table tbody tr:hover .cost-pill {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .cost-pill.pill-gray {
        background-color: #e6e8ec;
        color: #1f2328;
    }

    .cost-pill.pill-gold {
        background-color: #f6e7c6;
        color: #8c6314;
    }

    .cost-pill.pill-green {
        background-color: #dcf3e2;
        color: #176b34;
    }

    @media (max-width: 575.98px) {
        .matrix-badge-line {
            width: 30px;
        }
    }
</style>

<section class="comparison-matrix-section py-5">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="750">
            <div class="matrix-badge-wrap mb-3">
                <span class="matrix-badge-line"></span>
                <span class="matrix-badge">Comparison</span>
                <span class="matrix-badge-line right"></span>
            </div>

            <h2 class="matrix-title mb-3">
                Fintech License <span>Comparison Matrix</span>
            </h2>

            <p class="matrix-subtitle">
                A side-by-side view of key jurisdictions, use cases, timelines, and estimated costs for leading fintech licensing options.
            </p>
        </div>

        <!-- Comparison Table -->
        <div class="matrix-table-wrapper" data-aos="fade-up" data-aos-duration="850">
            <div class="table-responsive">
                <table class="table matrix-table">
                    <thead>
                        <tr>
                            <th><i class="bi bi-geo-alt"></i> Jurisdiction</th>
                            <th><i class="bi bi-layers"></i> License Type</th>
                            <th><i class="bi bi-gear"></i> Key Use Cases</th>
                            <th><i class="bi bi-calendar3"></i> Timeline</th>
                            <th><i class="bi bi-coin"></i> Estimated Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1: Lithuania -->
                        <tr data-aos="fade-up" data-aos-delay="100">
                            <td>
                                <div class="jurisdiction-cell">
                                    <svg class="flag-badge" viewBox="0 0 30 20">
                                        <rect width="30" height="6.67" y="0" fill="#FDB913"/>
                                        <rect width="30" height="6.67" y="6.67" fill="#006A44"/>
                                        <rect width="30" height="6.67" y="13.33" fill="#C1272D"/>
                                    </svg>
                                    <div class="jurisdiction-info">
                                        <strong>Lithuania</strong>
                                        <span>(EU)</span>
                                    </div>
                                </div>
                            </td>
                            <td class="license-type-text">E-Money (EMI)</td>
                            <td class="use-cases-text">Payments, IBAN issuance,<br>card programs</td>
                            <td class="timeline-text">3 – 6<br>Weeks</td>
                            <td>
                                <span class="cost-pill pill-gray">€35,000 –<br>€50,000</span>
                            </td>
                        </tr>

                        <!-- Row 2: UAE -->
                        <tr data-aos="fade-up" data-aos-delay="180">
                            <td>
                                <div class="jurisdiction-cell">
                                    <svg class="flag-badge" viewBox="0 0 30 20">
                                        <rect width="22" height="6.67" x="8" y="0" fill="#00732F"/>
                                        <rect width="22" height="6.67" x="8" y="6.67" fill="#FFFFFF"/>
                                        <rect width="22" height="6.67" x="8" y="13.33" fill="#000000"/>
                                        <rect width="8" height="20" x="0" y="0" fill="#FF0000"/>
                                    </svg>
                                    <div class="jurisdiction-info">
                                        <strong>United Arab Emirates</strong>
                                        <span>(UAE)</span>
                                    </div>
                                </div>
                            </td>
                            <td class="license-type-text">Payment Service Provider<br>(PSP)</td>
                            <td class="use-cases-text">Merchant acquiring, remittance,<br>e-wallets</td>
                            <td class="timeline-text">6 – 12<br>Weeks</td>
                            <td>
                                <span class="cost-pill pill-gold">On Request</span>
                            </td>
                        </tr>

                        <!-- Row 3: Estonia -->
                        <tr data-aos="fade-up" data-aos-delay="260">
                            <td>
                                <div class="jurisdiction-cell">
                                    <svg class="flag-badge" viewBox="0 0 30 20">
                                        <rect width="30" height="6.67" y="0" fill="#0072CE"/>
                                        <rect width="30" height="6.67" y="6.67" fill="#000000"/>
                                        <rect width="30" height="6.67" y="13.33" fill="#FFFFFF"/>
                                    </svg>
                                    <div class="jurisdiction-info">
                                        <strong>Estonia</strong>
                                        <span>(EU)</span>
                                    </div>
                                </div>
                            </td>
                            <td class="license-type-text">E-Money / Crypto<br>(VASP)</td>
                            <td class="use-cases-text">Crypto exchange, custody,<br>fiat on/off ramp</td>
                            <td class="timeline-text">4 – 8<br>Weeks</td>
                            <td>
                                <span class="cost-pill pill-green">€25,000+</span>
                            </td>
                        </tr>

                        <!-- Row 4: Czech Republic -->
                        <tr data-aos="fade-up" data-aos-delay="340">
                            <td>
                                <div class="jurisdiction-cell">
                                    <svg class="flag-badge" viewBox="0 0 30 20">
                                        <rect width="30" height="10" y="0" fill="#FFFFFF"/>
                                        <rect width="30" height="10" y="10" fill="#D7141A"/>
                                        <polygon points="0,0 15,10 0,20" fill="#11457E"/>
                                    </svg>
                                    <div class="jurisdiction-info">
                                        <strong>Czech Republic</strong>
                                        <span>(EU)</span>
                                    </div>
                                </div>
                            </td>
                            <td class="license-type-text">Crypto Service Provider<br>(VASP)</td>
                            <td class="use-cases-text">Exchange, custody, DeFi and<br>Web3 services</td>
                            <td class="timeline-text">6 – 10<br>Weeks</td>
                            <td>
                                <span class="cost-pill pill-green">€20,000+</span>
                            </td>
                        </tr>

                        <!-- Row 5: Luxembourg -->
                        <tr data-aos="fade-up" data-aos-delay="420">
                            <td>
                                <div class="jurisdiction-cell">
                                    <svg class="flag-badge" viewBox="0 0 30 20">
                                        <rect width="30" height="6.67" y="0" fill="#EA141D"/>
                                        <rect width="30" height="6.67" y="6.67" fill="#FFFFFF"/>
                                        <rect width="30" height="6.67" y="13.33" fill="#51ADDA"/>
                                    </svg>
                                    <div class="jurisdiction-info">
                                        <strong>Luxembourg</strong>
                                        <span>(EU)</span>
                                    </div>
                                </div>
                            </td>
                            <td class="license-type-text">Electronic Money (EMI)</td>
                            <td class="use-cases-text">Payments, digital banking,<br>embedded finance</td>
                            <td class="timeline-text">8 – 12<br>Weeks</td>
                            <td>
                                <span class="cost-pill pill-green">€50,000+</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<style>
    /* =========================================
    Launch Your Payment Solution Section
    ========================================= */
    .launch-payment-section {
        position: relative;
        background-color: #ffffff;
        overflow: hidden;
    }

    /* Top-Right & Bottom-Left Movable Decorative Objects */
    .decor-top-right {
        position: absolute;
        top: 10px;
        right: -10px;
        width: 140px;
        height: 140px;
        pointer-events: none;
        z-index: 1;
        animation: floatNetwork 6s ease-in-out infinite;
    }

    .decor-bottom-left {
        position: absolute;
        bottom: -15px;
        left: -15px;
        width: 130px;
        height: 130px;
        pointer-events: none;
        z-index: 1;
        animation: floatArcs 5.5s ease-in-out infinite;
    }

    @keyframes floatNetwork {
        0%, 100% {
            transform: translate(0, 0) rotate(0deg);
        }
        50% {
            transform: translate(-12px, 14px) rotate(4deg);
        }
    }

    @keyframes floatArcs {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(12px, -12px) scale(1.06);
        }
    }

    /* =========================================
    Left Circular Hub & Spoke Graphic
    ========================================= */
    .hub-diagram-wrapper {
        position: relative;
        width: 100%;
        max-width: 630px;
        min-height: 450px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }

    /* Connecting Orbit Ring */
    .hub-orbit-ring {
        position: absolute;
        width: 310px;
        height: 310px;
        border: 1.5px dashed rgba(181, 137, 50, 0.45);
        border-radius: 50%;
        animation: spinSlow 36s linear infinite;
        pointer-events: none;
    }

    @keyframes spinSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* Center Circle */
    .hub-center-circle {
        position: relative;
        width: 175px;
        height: 175px;
        border-radius: 50%;
        background-color: #ffffff;
        border: 2px solid var(--brand-gold, #b58932);
        box-shadow: 0 0 0 8px #ffffff, 0 14px 35px rgba(0, 0, 0, 0.08);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 1rem;
        z-index: 4;
        transition: transform 0.4s ease;
    }

    .hub-center-circle:hover {
        transform: scale(1.05);
    }

    .hub-center-circle p {
        font-size: 0.72rem;
        font-weight: 800;
        line-height: 1.45;
        letter-spacing: 0.04em;
        color: var(--brand-dark, #1d1d1f);
        margin-bottom: 0.55rem;
        text-transform: uppercase;
    }

    .hub-center-line {
        width: 32px;
        height: 2px;
        background-color: var(--brand-gold, #b58932);
        border-radius: 2px;
    }

    /* 4 Satellite Nodes */
    .hub-node {
        position: absolute;
        display: flex;
        align-items: center;
        z-index: 5;
        transition: transform 0.35s ease;
    }

    .hub-node:hover {
        transform: translateY(-4px);
    }

    .hub-node.node-left {
        flex-direction: row-reverse;
        text-align: right;
    }

    .hub-node.node-right {
        flex-direction: row;
        text-align: left;
    }

    .node-top-left {
        top: 22px;
        left: 0;
    }

    .node-bottom-left {
        bottom: 22px;
        left: 0;
    }

    .node-top-right {
        top: 22px;
        right: 0;
    }

    .node-bottom-right {
        bottom: 22px;
        right: 0;
    }

    /* Circular Photo Ring */
    .node-circle-wrap {
        position: relative;
        width: 112px;
        height: 112px;
        border-radius: 50%;
        padding: 4px;
        background-color: #ffffff;
        border: 2px solid var(--brand-gold, #b58932);
        box-shadow: 0 10px 26px rgba(0, 0, 0, 0.1);
        flex-shrink: 0;
    }

    .node-circle-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        transition: transform 0.5s ease;
    }

    .hub-node:hover .node-circle-wrap img {
        transform: scale(1.08);
    }

    /* Small Icon Badge on Circle */
    .node-mini-icon {
        position: absolute;
        top: -4px;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background-color: #ffffff;
        border: 1.5px solid var(--brand-gold, #b58932);
        color: var(--brand-gold, #b58932);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.35s ease;
    }

    .node-left .node-mini-icon {
        left: -4px;
    }

    .node-right .node-mini-icon {
        right: -4px;
    }

    .hub-node:hover .node-mini-icon {
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
    }

    /* Node Text & Pill */
    .node-info {
        max-width: 155px;
    }

    .node-left .node-info {
        margin-right: -12px;
    }

    .node-right .node-info {
        margin-left: -12px;
    }

    .node-pill-title {
        background-color: #ffffff;
        border: 1px solid #dec692;
        border-radius: 50px;
        padding: 0.42rem 1rem;
        font-size: 0.78rem;
        font-weight: 700;
        line-height: 1.25;
        color: var(--brand-dark, #1d1d1f);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.04);
        margin-bottom: 0.45rem;
    }

    .node-left .node-pill-title {
        padding-right: 1.35rem;
    }

    .node-right .node-pill-title {
        padding-left: 1.35rem;
    }

    .node-info p {
        font-size: 0.72rem;
        line-height: 1.4;
        color: var(--brand-muted, #5c5f66);
        margin-bottom: 0;
        padding: 0 0.4rem;
    }

    /* =========================================
    Right Content Column
    ========================================= */
    .launch-badge {
        display: inline-block;
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        font-size: 0.78rem;
        font-weight: 600;
        padding: 0.35rem 1.15rem;
        border-radius: 50px;
        letter-spacing: 0.03em;
    }

    .launch-title {
        font-size: clamp(1.9rem, 3.1vw, 2.55rem);
        font-weight: 800;
        line-height: 1.18;
        color: var(--brand-dark, #1d1d1f);
        letter-spacing: -0.02em;
    }

    .launch-title span {
        color: var(--brand-gold, #b58932);
        display: block;
    }

    .launch-description {
        font-size: 0.96rem;
        line-height: 1.65;
        color: var(--brand-muted, #5c5f66);
    }

    .launch-feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 2rem;
        display: flex;
        flex-direction: column;
        gap: 0.95rem;
    }

    .launch-feature-list li {
        display: flex;
        align-items: center;
        gap: 0.9rem;
        font-size: 0.94rem;
        font-weight: 600;
        color: var(--brand-dark, #1d1d1f);
    }

    .launch-list-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: var(--brand-gold, #b58932);
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 0.95rem;
        box-shadow: 0 6px 15px rgba(181, 137, 50, 0.25);
        transition: transform 0.3s ease;
    }

    .launch-feature-list li:hover .launch-list-icon {
        transform: scale(1.1) rotate(-6deg);
    }

    .btn-consult-pill {
        background-color: var(--brand-gold, #b58932);
        border: 1px solid var(--brand-gold, #b58932);
        color: #ffffff;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 0.8rem 2rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 0.65rem;
        text-decoration: none;
        transition: all 0.35s ease;
        box-shadow: 0 10px 24px rgba(181, 137, 50, 0.25);
    }

    .btn-consult-pill:hover {
        background-color: #9a7224;
        border-color: #9a7224;
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 14px 30px rgba(181, 137, 50, 0.35);
    }

    .btn-consult-pill i {
        transition: transform 0.3s ease;
    }

    .btn-consult-pill:hover i {
        transform: translateX(5px);
    }

    /* Responsive Adjustments */
    @media (max-width: 767.98px) {
        .hub-diagram-wrapper {
            min-height: auto;
            flex-direction: column;
            gap: 1.25rem;
        }

        .hub-orbit-ring {
            display: none;
        }

        .hub-center-circle {
            width: 155px;
            height: 155px;
            margin-bottom: 0.5rem;
        }

        .hub-node {
            position: relative;
            top: auto;
            bottom: auto;
            left: auto;
            right: auto;
            width: 100%;
            flex-direction: row !important;
            text-align: left !important;
            background: #fcfaf7;
            padding: 0.85rem;
            border-radius: 16px;
            border: 1px solid #efe4ce;
        }

        .node-circle-wrap {
            width: 82px;
            height: 82px;
        }

        .node-left .node-mini-icon {
            left: auto;
            right: -4px;
        }

        .node-info {
            max-width: 100%;
            margin-left: 0.85rem !important;
            margin-right: 0 !important;
        }

        .node-pill-title {
            padding: 0.35rem 0.9rem !important;
        }
    }
</style>

<section class="launch-payment-section py-5">
    <!-- Top-Right Movable Geometric Network Decoration -->
    <svg class="decor-top-right" viewBox="0 0 150 150" fill="none">
        <line x1="40" y1="30" x2="115" y2="55" stroke="#b58932" stroke-width="1" opacity="0.55"/>
        <line x1="115" y1="55" x2="145" y2="15" stroke="#b58932" stroke-width="1" opacity="0.55"/>
        <line x1="115" y1="55" x2="80" y2="115" stroke="#b58932" stroke-width="1" opacity="0.55"/>
        <line x1="80" y1="115" x2="140" y2="135" stroke="#b58932" stroke-width="1" opacity="0.55"/>
        <line x1="40" y1="30" x2="80" y2="115" stroke="#b58932" stroke-width="1" opacity="0.35"/>
        <circle cx="40" cy="30" r="4" fill="#b58932"/>
        <circle cx="115" cy="55" r="4.5" fill="#b58932"/>
        <circle cx="80" cy="115" r="3.5" fill="#b58932"/>
        <circle cx="140" cy="135" r="3" fill="#b58932"/>
    </svg>

    <!-- Bottom-Left Movable Concentric Arcs Decoration -->
    <svg class="decor-bottom-left" viewBox="0 0 140 140" fill="none">
        <circle cx="10" cy="130" r="45" stroke="#b58932" stroke-width="1.2" opacity="0.5"/>
        <circle cx="10" cy="130" r="65" stroke="#b58932" stroke-width="1.2" opacity="0.4"/>
        <circle cx="10" cy="130" r="85" stroke="#b58932" stroke-width="1.2" opacity="0.3"/>
        <circle cx="10" cy="130" r="105" stroke="#b58932" stroke-width="1.2" opacity="0.2"/>
    </svg>

    <div class="container py-lg-4 position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <!-- Left Side: Unique Circular Hub & Spoke Design with AOS -->
            <div class="col-lg-7">
                <div class="hub-diagram-wrapper">
                    <!-- Rotating Dashed Orbit Ring -->
                    <div class="hub-orbit-ring"></div>

                    <!-- Center Hub Circle -->
                    <div class="hub-center-circle" data-aos="zoom-in" data-aos-duration="800">
                        <p>
                            Your Payments.<br>
                            Your Licence.<br>
                            Our Expertise.
                        </p>
                        <div class="hub-center-line"></div>
                    </div>

                    <!-- Top Left Node: EMI -->
                    <div class="hub-node node-left node-top-left" data-aos="fade-right" data-aos-delay="150" data-aos-duration="750">
                        <div class="node-circle-wrap">
                            <img src="<?= $img; ?>/Fintech-Strategy.png" alt="Electronic Money (EMI)">
                            <span class="node-mini-icon"><i class="bi bi-credit-card-2-front"></i></span>
                        </div>
                        <div class="node-info">
                            <div class="node-pill-title">Electronic<br>Money (EMI)</div>
                            <p>Secure and efficient digital payment solutions.</p>
                        </div>
                    </div>

                    <!-- Bottom Left Node: PSP -->
                    <div class="hub-node node-left node-bottom-left" data-aos="fade-right" data-aos-delay="300" data-aos-duration="750">
                        <div class="node-circle-wrap">
                            <img src="<?= $img; ?>/Corporate-Substation.png" alt="Payment Service Provider (PSP)">
                            <span class="node-mini-icon"><i class="bi bi-receipt"></i></span>
                        </div>
                        <div class="node-info">
                            <div class="node-pill-title">Payment Service<br>Provider (PSP)</div>
                            <p>Comprehensive payment solutions for your business.</p>
                        </div>
                    </div>

                    <!-- Top Right Node: MTL -->
                    <div class="hub-node node-right node-top-right" data-aos="fade-left" data-aos-delay="225" data-aos-duration="750">
                        <div class="node-circle-wrap">
                            <img src="<?= $img; ?>/MiCA-Crypto-Regulation.png" alt="Money Transfer (MTL)">
                            <span class="node-mini-icon"><i class="bi bi-send"></i></span>
                        </div>
                        <div class="node-info">
                            <div class="node-pill-title">Money<br>Transfer (MTL)</div>
                            <p>Fast, safe and reliable cross-border transfers.</p>
                        </div>
                    </div>

                    <!-- Bottom Right Node: Forex -->
                    <div class="hub-node node-right node-bottom-right" data-aos="fade-left" data-aos-delay="375" data-aos-duration="750">
                        <div class="node-circle-wrap">
                            <img src="<?= $img; ?>/Payment-Solution-Financial-Licensing.png" alt="Forex Broker Licensing">
                            <span class="node-mini-icon"><i class="bi bi-currency-exchange"></i></span>
                        </div>
                        <div class="node-info">
                            <div class="node-pill-title">Forex Broker<br>Licensing</div>
                            <p>Global access to financial markets with confidence.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content & CTA -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="850">
                <span class="launch-badge mb-3">Our Services</span>

                <h2 class="launch-title mb-3">
                    Launch Your Payment Solution
                    <span>With Devotion Global</span>
                </h2>

                <p class="launch-description mb-4">
                    Speak with our corporate licensing team to structure your PSP, EMI, Crypto Exchange, or Forex brokerage today.
                </p>

                <ul class="launch-feature-list">
                    <li data-aos="fade-up" data-aos-delay="150">
                        <span class="launch-list-icon"><i class="bi bi-file-earmark-text"></i></span>
                        <span>License strategy for PSP, EMI, Crypto and Forex</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="250">
                        <span class="launch-list-icon"><i class="bi bi-bank"></i></span>
                        <span>Substance, banking and compliance under one team</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="350">
                        <span class="launch-list-icon"><i class="bi bi-headset"></i></span>
                        <span>Dedicated support from filing to activation</span>
                    </li>
                </ul>

                <div data-aos="fade-up" data-aos-delay="450">
                    <a href="#contact" class="btn-consult-pill">
                        Consult an Expert Today
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
