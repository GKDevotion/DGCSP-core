<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/fund-service';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';
    
?>

    <!-- JSON-LD Structured Data (SEO, AEO, GEO Optimization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://www.devotionglobal.com/#organization",
          "name": "Devotion Global Customer Service Provider",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global BPO and specialized financial customer service provider offering 24/7 fund support, compliance, and administration solutions.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Support",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "Arabic"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/fund-services#service",
          "name": "Devotion Global Fund Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "End-to-end fund administration, investor support, capital call execution, and regulatory KYC/AML verification.",
          "areaServed": "Global",
          "category": "Fund Administration & Investor Support"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/fund-services#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What fund services does Devotion Global provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global offers end-to-end fund administration, 24/7 investor relations support, NAV calculation support, KYC/AML compliance screening, capital call assistance, and escrow transaction handling."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global ensure data security for financial funds?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global adheres to SOC 1 Type II, SOC 2 Type II, and ISO 27001 standards, utilizing end-to-end encryption for all investor portal access and transaction data."
              }
            }
          ]
        }
      ]
    }
    </script>

<!-- Shared inner-page theme (same look & animation set as index) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<main>

<!-- 1. HERO -->
<header class="ip-hero">
    <img src="<?= $img ?>/fund-service-hero-bg-1.jpg?v=<?= FILE_VERSISON ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Institutional Grade Support</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Devotion Global<br><span class="ip-gold">Fund Services</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Empowering investment managers, private equity funds, and venture firms with seamless global customer service, investor administration, and regulatory compliance solutions.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request a Consultation</a>
            </div>
        </div>
    </div>
</header>

<header class="ip-hero">
    <img src="<?= $img ?>/fund-service-hero-bg-2.jpg?v=<?= FILE_VERSISON ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Institutional Grade Support</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Devotion Global<br><span class="ip-gold">Fund Services</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Empowering investment managers, private equity funds, and venture firms with seamless global customer service, investor administration, and regulatory compliance solutions.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request a Consultation</a>
            </div>
        </div>
    </div>
</header>

<header class="ip-hero">
    <img src="<?= $img ?>/fund-service-hero-bg-3.jpg?v=<?= FILE_VERSISON ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Institutional Grade Support</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Devotion Global<br><span class="ip-gold">Fund Services</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Empowering investment managers, private equity funds, and venture firms with seamless global customer service, investor administration, and regulatory compliance solutions.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request a Consultation</a>
            </div>
        </div>
    </div>
</header>

<!-- 2. CORE SERVICES -->
<style>

    /* =========================================
    FUND SOLUTIONS SECTION
    ========================================= */

    .ip-suite {
        --suite-gold: #b38a36;
        --suite-bg: #eff0f5;
        --suite-text: #111111;
        --suite-muted: #484848;

        position: relative;
        padding: 75px 0 85px;
        background: var(--suite-bg);
        overflow: hidden;
    }

    /* Section Heading */

    .ip-suite__head {
        text-align: center;
        margin-bottom: 55px;
    }

    .ip-pill {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 198px;
        padding: 12px 30px;
        border-radius: 50px;
        background: var(--suite-gold);
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 17px;
    }

    .ip-title {
        font-family: 'Poppins', sans-serif;
        font-size: 35px;
        font-weight: 600;
        line-height: 1.35;
        letter-spacing: -0.7px;
        color: var(--suite-text);
        margin-bottom: 15px;
    }

    .ip-subtitle {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.75;
        color: #858585;
        margin: 0;
    }

    /* Service Cards */

    .ip-card {
        position: relative;
        height: 100%;
        min-height: 320px;
        padding: 32px 32px 30px;
        background: #ffffff;
        border: 1px solid #d8d8d8;
        border-radius: 19px;
        transition: all 0.35s ease;
    }

    /* Card Header */

    .ip-card__head {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 19px;
    }

    .ip-card__title {
        flex: 1;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: 700;
        line-height: 1.65;
        letter-spacing: -0.4px;
        color: #080808;
        margin: 0;
    }

    /* SVG Icons */

    .ip-card__icon {
        flex: 0 0 65px;
        width: 65px;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 3px;
    }

    .ip-card__icon img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.35s ease;
    }

    /* Gold Divider */

    .ip-card__divider {
        display: block;
        width: 90px;
        height: 2px;
        background: var(--suite-gold);
        margin-bottom: 18px;
    }

    /* Card Description */

    .ip-card__desc {
        font-family: 'Poppins', sans-serif;
        font-size: 14.5px;
        font-weight: 400;
        line-height: 1.68;
        color: var(--suite-muted);
        margin: 0;
    }

    /* Hover Effect */

    .ip-card:hover {
        transform: translateY(-7px);
        border-color: var(--suite-gold);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.07);
    }

    .ip-card:hover .ip-card__icon img {
        transform: scale(1.08);
    }

    /* =========================================
    RESPONSIVE DESIGN
    ========================================= */

    /* Laptop */

    @media (max-width: 1199px) {

        .ip-card {
            padding: 27px 24px;
            min-height: 320px;
        }

        .ip-card__title {
            font-size: 21px;
        }

        .ip-card__icon {
            flex-basis: 55px;
            width: 55px;
            height: 55px;
        }

        .ip-card__desc {
            font-size: 14px;
        }

    }

    /* Tablet */

    @media (max-width: 991px) {

        .ip-suite {
            padding: 65px 0;
        }

        .ip-suite__head {
            margin-bottom: 40px;
        }

        .ip-title {
            font-size: 31px;
        }

        .ip-card {
            min-height: 300px;
            padding: 28px 25px;
        }

        .ip-card__title {
            font-size: 22px;
        }

    }

    /* Mobile */

    @media (max-width: 575px) {

        .ip-suite {
            padding: 50px 0 55px;
        }

        .ip-suite__head {
            margin-bottom: 32px;
            padding: 0 10px;
        }

        .ip-pill {
            min-width: 165px;
            padding: 10px 22px;
            font-size: 13px;
        }

        .ip-title {
            font-size: 25px;
            line-height: 1.4;
            letter-spacing: -0.4px;
        }

        .ip-subtitle {
            font-size: 13px;
            line-height: 1.8;
        }

        .ip-card {
            min-height: auto;
            padding: 25px 23px;
            border-radius: 15px;
        }

        .ip-card__head {
            gap: 12px;
            margin-bottom: 16px;
        }

        .ip-card__title {
            font-size: 20px;
            line-height: 1.55;
        }

        .ip-card__icon {
            flex-basis: 55px;
            width: 55px;
            height: 55px;
        }

        .ip-card__divider {
            width: 75px;
            margin-bottom: 15px;
        }

        .ip-card__desc {
            font-size: 14px;
            line-height: 1.75;
        }

        .ip-card:hover {
            transform: translateY(-3px);
        }

    }

</style>
<section class="ip-suite" id="services">

    <div class="container">

        <!-- SECTION HEADING -->
        <div class="ip-suite__head" data-aos="fade-up">

            <span class="ip-pill">Solutions Suite</span>

            <h2 class="ip-title">
                Our Comprehensive Fund Solutions
            </h2>

            <p class="ip-subtitle">
                Tailored corporate finance and regulatory tax advisory modules
                <br class="d-none d-md-block">
                designed for multinational holdings and cross-border expansion.
            </p>

        </div>

        <!-- SERVICES GRID -->
        <div class="row g-4">

            <!-- SERVICE 01 -->
            <div class="col-lg-4 col-md-6"
                 data-aos="fade-up" data-aos-delay="0">

                <article class="ip-card"
                         itemscope itemtype="https://schema.org/Service">

                    <div class="ip-card__head">

                        <h3 class="ip-card__title" itemprop="name">
                            24/7 Investor<br class="d-none d-sm-block">
                            Desk Support
                        </h3>

                        <div class="ip-card__icon">
                            <img src="<?= $img ?>/24x7-investor.svg"
                                 alt=""
                                 loading="lazy">
                        </div>

                    </div>

                    <span class="ip-card__divider"></span>

                    <p class="ip-card__desc" itemprop="description">
                        Multilingual, round-the-clock helpdesk providing
                        rapid inquiry resolution for institutional and
                        retail limited partners (LPs).
                    </p>

                </article>
            </div>


            <!-- SERVICE 02 -->
            <div class="col-lg-4 col-md-6"
                 data-aos="fade-up" data-aos-delay="120">

                <article class="ip-card"
                         itemscope itemtype="https://schema.org/Service">

                    <div class="ip-card__head">

                        <h3 class="ip-card__title" itemprop="name">
                            Fund Accounting<br class="d-none d-sm-block">
                            &amp; NAV Assistance
                        </h3>

                        <div class="ip-card__icon">
                            <img src="<?= $img ?>/fund-accounting.svg"
                                 alt=""
                                 loading="lazy">
                        </div>

                    </div>

                    <span class="ip-card__divider"></span>

                    <p class="ip-card__desc" itemprop="description">
                        Operational support for daily/monthly Net Asset
                        Value (NAV) reconciliations, fee calculations,
                        and reporting verification.
                    </p>

                </article>
            </div>


            <!-- SERVICE 03 -->
            <div class="col-lg-4 col-md-6"
                 data-aos="fade-up" data-aos-delay="240">

                <article class="ip-card"
                         itemscope itemtype="https://schema.org/Service">

                    <div class="ip-card__head">

                        <h3 class="ip-card__title" itemprop="name">
                            KYC / AML<br class="d-none d-sm-block">
                            Onboarding
                        </h3>

                        <div class="ip-card__icon">
                            <img src="<?= $img ?>/kyc-aml.svg"
                                 alt=""
                                 loading="lazy">
                        </div>

                    </div>

                    <span class="ip-card__divider"></span>

                    <p class="ip-card__desc" itemprop="description">
                        Automated and manual Identity Verification (IDV),
                        Anti-Money Laundering screening, and continuous
                        investor compliance checkups.
                    </p>

                </article>
            </div>


            <!-- SERVICE 04 -->
            <div class="col-lg-4 col-md-6"
                 data-aos="fade-up" data-aos-delay="0">

                <article class="ip-card"
                         itemscope itemtype="https://schema.org/Service">

                    <div class="ip-card__head">

                        <h3 class="ip-card__title" itemprop="name">
                            Capital Call &amp;<br class="d-none d-sm-block">
                            Distribution Desk
                        </h3>

                        <div class="ip-card__icon">
                            <img src="<?= $img ?>/capital-call.svg"
                                 alt=""
                                 loading="lazy">
                        </div>

                    </div>

                    <span class="ip-card__divider"></span>

                    <p class="ip-card__desc" itemprop="description">
                        Precision management of capital call notifications,
                        wire confirmation follow-ups, and dividend payout
                        communication.
                    </p>

                </article>
            </div>


            <!-- SERVICE 05 -->
            <div class="col-lg-4 col-md-6"
                 data-aos="fade-up" data-aos-delay="120">

                <article class="ip-card"
                         itemscope itemtype="https://schema.org/Service">

                    <div class="ip-card__head">

                        <h3 class="ip-card__title" itemprop="name">
                            Digital LP Portal<br class="d-none d-sm-block">
                            Management
                        </h3>

                        <div class="ip-card__icon">
                            <img src="<?= $img ?>/digital-lp-product.svg"
                                 alt=""
                                 loading="lazy">
                        </div>

                    </div>

                    <span class="ip-card__divider"></span>

                    <p class="ip-card__desc" itemprop="description">
                        Dedicated technical assistance guiding fund clients
                        through reporting portal access, multi-factor
                        authentication, and statement retrieval.
                    </p>

                </article>
            </div>


            <!-- SERVICE 06 -->
            <div class="col-lg-4 col-md-6"
                 data-aos="fade-up" data-aos-delay="240">

                <article class="ip-card"
                         itemscope itemtype="https://schema.org/Service">

                    <div class="ip-card__head">

                        <h3 class="ip-card__title" itemprop="name">
                            Escrow &amp;<br class="d-none d-sm-block">
                            Settlement Operations
                        </h3>

                        <div class="ip-card__icon">
                            <img src="<?= $img ?>/escrow-settlement.svg"
                                 alt=""
                                 loading="lazy">
                        </div>

                    </div>

                    <span class="ip-card__divider"></span>

                    <p class="ip-card__desc" itemprop="description">
                        Direct assistance with transaction reconciliation,
                        subscription tracking, and escrow confirmation
                        workflows.
                    </p>

                </article>
            </div>

        </div>
    </div>

</section>

<!-- 3. WHY US -->
<style>
    .fund-section {
        padding: 75px 0;
        overflow: hidden;
    }

    /* Left Image */

    .visual-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .visual-wrapper img {
        width: 100%;
        max-width: 550px;
        height: auto;
        display: block;
        object-fit: contain;
    }

    /* Right Content */

    .content-wrapper {
        padding: 20px 10px 20px 30px;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 45px;
        row-gap: 28px;
        align-items: start;
    }

    .main-heading {
        grid-column: 1;
        grid-row: 1;
        padding-right: 5px;
    }

    .main-heading h2 {
        font-size: 34px;
        font-weight: 600;
        line-height: 1.55;
        letter-spacing: -1px;
        color: #080808;
        margin-bottom: 34px;
    }

    .heading-line {
        width: 90px;
        height: 2px;
        background: var(--gold-dark);
    }

    /* Information Items */

    .feature-item {
        position: relative;
    }

    .feature-01 {
        grid-column: 2;
        grid-row: 1;
    }

    .feature-02 {
        grid-column: 1;
        grid-row: 2;
    }

    .feature-03 {
        grid-column: 2;
        grid-row: 2;
    }

    .feature-number {
        display: block;
        font-size: 30px;
        font-weight: 600;
        color: var(--gold);
        line-height: 1.2;
        margin-bottom: 5px;
    }

    .feature-item h3 {
        font-size: 19px;
        font-weight: 600;
        color: #080808;
        line-height: 1.5;
        margin-bottom: 3px;
    }

    .feature-item p {
        font-size: 15.5px;
        font-weight: 400;
        color: var(--text);
        line-height: 1.85;
        margin-bottom: 0;
    }

    /* Tablet */

    @media (max-width: 1199px) {
        .content-wrapper {
            padding-left: 15px;
        }

        .content-grid {
            column-gap: 25px;
            row-gap: 25px;
        }

        .main-heading h2 {
            font-size: 29px;
        }

        .feature-item h3 {
            font-size: 17px;
        }

        .feature-item p {
            font-size: 14px;
        }
    }

    /* Mobile */

    @media (max-width: 991px) {
        .fund-section {
            padding: 55px 0;
        }

        .visual-wrapper {
            margin-bottom: 35px;
        }

        .visual-wrapper img {
            max-width: 450px;
        }

        .content-wrapper {
            padding: 0 15px;
        }

        .content-grid {
            column-gap: 30px;
        }

        .main-heading h2 {
            font-size: 32px;
        }
    }

    @media (max-width: 575px) {
        .fund-section {
            padding: 35px 0 50px;
        }

        .visual-wrapper {
            margin-bottom: 25px;
        }

        .visual-wrapper img {
            max-width: 100%;
        }

        .content-wrapper {
            padding: 0 20px;
        }

        .content-grid {
            display: flex;
            flex-direction: column;
            gap: 27px;
        }

        .main-heading {
            width: 100%;
            margin-bottom: 5px;
        }

        .main-heading h2 {
            font-size: 27px;
            line-height: 1.4;
            margin-bottom: 20px;
        }

        .heading-line {
            width: 70px;
        }

        .feature-number {
            font-size: 26px;
        }

        .feature-item h3 {
            font-size: 17px;
        }

        .feature-item p {
            font-size: 14px;
            line-height: 1.8;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        [data-aos] {
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }
    }
</style>
<section class="fund-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT IMAGE -->
            <div class="col-lg-5 col-md-12">
                <div class="visual-wrapper"
                     data-aos="zoom-in"
                     data-aos-duration="1100">

                    <img
                        src="<?= $img ?>/why-leading-fund-manager.jpg?v=<?= FILE_VERSISON ?>"
                        alt="Why leading fund managers partner with us"
                        class="img-fluid"
                    >

                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-lg-7 col-md-12">
                <div class="content-wrapper">

                    <div class="content-grid">

                        <!-- MAIN HEADING -->
                        <div class="main-heading"
                             data-aos="fade-up"
                             data-aos-delay="100">

                            <h2>
                                Why Leading<br>
                                Fund Managers<br>
                                Partner With Us
                            </h2>

                            <div class="heading-line"></div>
                        </div>

                        <!-- FEATURE 01 -->
                        <div class="feature-item feature-01"
                             data-aos="fade-left"
                             data-aos-delay="200">

                            <span class="feature-number">01</span>

                            <h3>99.9% SLA Commitment</h3>

                            <p>
                                We operate strictly under contractually
                                backed service level agreements to ensure
                                fast query turnarounds and operational
                                continuity.
                            </p>
                        </div>

                        <!-- FEATURE 02 -->
                        <div class="feature-item feature-02"
                             data-aos="fade-up"
                             data-aos-delay="300">

                            <span class="feature-number">02</span>

                            <h3>Bank-Grade Security</h3>

                            <p>
                                ISO 27001 certified and SOC 2 Type II
                                compliant processes engineered to protect
                                sensitive investor financial records.
                            </p>
                        </div>

                        <!-- FEATURE 03 -->
                        <div class="feature-item feature-03"
                             data-aos="fade-up"
                             data-aos-delay="400">

                            <span class="feature-number">03</span>

                            <h3>Multi-Jurisdictional Reach</h3>

                            <p>
                                Full operational readiness tailored for
                                funds domiciled in the US, Cayman Islands,
                                Luxembourg, Singapore, and Europe.
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. KEY NUMBERS -->


<!-- =================================
        HERO SECTION
================================= -->

<section class="hero-section"
            aria-labelledby="hero-title">

    <div class="container-fluid px-0 hero-inner">

        <div class="row g-0 h-100">

            <!-- Right-side content -->

            <div class="col-lg-6 offset-lg-6 hero-copy-col"
                    data-aos="fade-left"
                    data-aos-duration="1000">

                <div class="hero-copy">

                    <h1 id="hero-title">
                        Optimize Your Fund<br class="d-none d-md-block">
                        Operations Today
                    </h1>


                    <p>
                        Partner with Devotion Global Customer Service
                        Provider for institutional-grade fund
                        administration and 24/7 LP desk support.
                    </p>


                    <a href="#contact" class="btn-gold">
                        Request a consultation
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =================================
        CONTACT TARGET
================================= -->

<div id="contact"
        class="visually-hidden"
        aria-hidden="true">
</div>

<!-- 5. COMPLIANCE / SECURITY -->
<section class="ip-badges">
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Regulatory &amp; Compliance Infrastructure</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-badge"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>SOC 1 Type II</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-badge"><i class="fa-solid fa-certificate" aria-hidden="true"></i><span>SOC 2 Type II</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-badge"><i class="fa-solid fa-lock" aria-hidden="true"></i><span>ISO 27001 Certified</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-badge"><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span>GDPR &amp; CCPA Compliant</span></div>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQ -->
<section class="ip-faq">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <img src="<?= $faqArt ?>" alt="FAQ" class="ip-faq__art" width="811" height="582" loading="lazy">
                <div class="ip-faq__tag">
                    <img src="<?= BASE_URL . BASE_FOLDER ?>/assets/images/global-entity-management/skill-development_1.svg" alt="" width="44" height="44" loading="lazy">
                    <span class="ip-pill">AI &amp; Search Insights</span>
                </div>
                <h2>Frequently Asked Questions</h2>
                <p class="ip-faq__lead">Clear answers for decision-makers and automated search engines.</p>
            </div>
            <div class="col-lg-7">
                <div class="ip-acc">
                <div class="ip-acc-item is-open" data-aos="fade-left" data-aos-delay="0">
                    <button class="ip-acc-btn" type="button" aria-expanded="true" aria-controls="ipFaq0" id="ipFaqBtn0">
                        <span>What types of funds does Devotion Global support?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>We support Hedge Funds, Private Equity (PE) firms, Venture Capital (VC) funds, Real Estate Funds, and Mutual Funds across domestic and offshore jurisdictions.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>Can Devotion Global integrate with our existing CRM and software?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Yes. Our team integrates directly with leading fund software like FIS, Investran, Allvue, Salesforce Financial Services Cloud, and custom investor portals.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>How do you handle multilingual investor communications?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Our global desks provide native support in English, Mandarin, Spanish, French, German, and Arabic to serve international LP bases seamlessly.</p></div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. CALL TO ACTION -->
<section class="ip-cta" id="contact">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <h2 class="ip-title">Optimize Your Fund Operations Today</h2>
                <p>Partner with Devotion Global Customer Service Provider for institutional-grade fund administration and 24/7 LP desk support.</p>
                <a href="mailto:contact@devotioncsp.com" class="ip-btn ip-btn--pill">Request a Consultation</a>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
