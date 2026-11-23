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

<style>
  :root {
    --gold-primary: #a37e35;
    --gold-dark: #8c6b2a;
    --text-dark: #111111;
  }

  /* =========================================
     1. TOP GOLD STATS BAR
     ========================================= */
  .top-stats-section {
    background-color: var(--gold-primary);
    color: #ffffff;
    padding-top: 4.5rem;
    padding-bottom: 10.5rem; /* Space for top half of floating card */
    position: relative;
    z-index: 1;
    margin: 0;
  }

  .stat-item {
    padding: 0.25rem 1rem;
  }

  .stat-number {
    font-size: clamp(1.75rem, 2.8vw, 2.25rem);
    font-weight: 700;
    line-height: 1.15;
    margin-bottom: 0.3rem;
  }

  .stat-label {
    font-size: 0.92rem;
    font-weight: 400;
    line-height: 1.35;
    color: rgba(255, 255, 255, 0.92);
  }

  /* Desktop vertical dividers */
  @media (min-width: 992px) {
    .stat-col:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 8%;
      height: 84%;
      width: 1px;
      background-color: rgba(255, 255, 255, 0.35);
    }
  }

  @media (max-width: 991.98px) {
    .stat-col {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      padding-bottom: 1rem;
    }
    .stat-col:nth-last-child(-n+2) {
      border-bottom: none;
    }
  }

  @media (max-width: 575.98px) {
    .stat-col:nth-last-child(2) {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
  }

  /* =========================================
     2. CUT-TO-CUT OVERLAPPING FLOATING BANNER
     Zero-height anchor right on the exact seam!
     ========================================= */
  .floating-seam-anchor {
    position: relative;
    height: 0;
    z-index: 20;
    margin: 0;
    padding: 0;
  }

  .floating-banner {
    max-width: 820px;
    width: calc(100% - 24px);
    margin: 0 auto;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
    /* Moves the top beige box into the gold area and leaves the bottom white strip below the seam */
    transform: translateY(-73%);
  }

  .floating-banner-top {
    background: rgba(235, 224, 204, 0.65);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    padding: 2rem 1.25rem 1.65rem;
    text-align: center;
  }

  .floating-banner-top h2 {
    font-size: clamp(1.35rem, 2.4vw, 1.8rem);
    font-weight: 700;
    color: #111111;
    line-height: 1.35;
    margin: 0;
  }

  .floating-banner-bottom {
    background-color: #ffffff;
    padding: 0.95rem 1.5rem;
    text-align: center;
    font-size: 0.85rem;
    color: #333333;
    font-weight: 500;
    /* Covers any 1px subpixel seam */
    border-top: 1px solid #ffffff;
  }

  .compliance-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 0.5rem 0.9rem;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .compliance-list li {
    display: flex;
    align-items: center;
    gap: 0.9rem;
  }

  .compliance-list li:not(:last-child)::after {
    content: "";
    display: inline-block;
    width: 1.5px;
    height: 13px;
    background-color: var(--gold-primary);
  }

  @media (max-width: 575.98px) {
    .floating-banner {
      transform: translateY(-62%);
    }
    .compliance-list li:not(:last-child)::after {
      display: none;
    }
    .compliance-list li {
      background: #f8f5ef;
      padding: 0.25rem 0.65rem;
      border-radius: 6px;
      font-size: 0.8rem;
    }
  }

  /* =========================================
     3. BOTTOM CTA SECTION (CUT-TO-CUT FLUSH)
     ========================================= */
  .bottom-cta-section {
    position: relative;
    background-color: #ffffff;
    min-height: 540px;
    display: flex;
    align-items: center;
    padding-top: 5.5rem;
    padding-bottom: 3rem;
    overflow: hidden;
    margin: 0;
  }

  /* Bottom-Left Full Bleed Artwork */
  .bottom-left-artwork {
    position: absolute;
    top: -4px; /* Pulls image 4px up under the gold edge to hide the image's top white border */
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: calc(100% + 4px);
    pointer-events: none;
    z-index: 1;
  }

  .bottom-left-artwork img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: left bottom;
    display: block;
  }

  .cta-container {
    position: relative;
    z-index: 2;
  }

  .cta-content-box {
    max-width: 470px;
    margin-left: auto;
    text-align: right;
  }

  .cta-heading {
    font-size: clamp(1.65rem, 2.7vw, 2.15rem);
    font-weight: 700;
    line-height: 1.25;
    color: #111111;
    margin-bottom: 1rem;
  }

  .cta-description {
    font-size: 1rem;
    line-height: 1.6;
    color: #666666;
    margin-bottom: 1.75rem;
  }

  .btn-gold {
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 0.88rem;
    font-weight: 600;
    padding: 0.65rem 1.85rem;
    border-radius: 50px;
    border: none;
    text-decoration: none;
    display: inline-block;
    transition: all 0.25s ease;
    box-shadow: 0 4px 14px rgba(163, 126, 53, 0.28);
  }

  .btn-gold:hover,
  .btn-gold:focus {
    background-color: var(--gold-dark);
    color: #ffffff;
    transform: translateY(-1px);
  }

  /* Responsive Adjustments for Tablet & Mobile */
  @media (max-width: 991.98px) {
    .bottom-cta-section {
      display: block;
      min-height: auto;
      padding-top: 6.5rem;
      padding-bottom: 0;
    }

    .bottom-left-artwork {
      position: static;
      width: 100%;
      height: auto;
      margin-top: 2rem;
    }

    .bottom-left-artwork img {
      height: auto;
      object-fit: contain;
    }

    .cta-content-box {
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }
  }
</style>

<!-- 1. Top Gold Metrics Bar -->
<section class="top-stats-section">
  <div class="container">
    <div class="row g-3 justify-content-center">

      <div class="col-6 col-lg-3 position-relative stat-col d-flex justify-content-center">
        <div class="stat-item text-start">
          <div class="stat-number">$15B+</div>
          <div class="stat-label">Assets Under<br />Support</div>
        </div>
      </div>

      <div class="col-6 col-lg-3 position-relative stat-col d-flex justify-content-center">
        <div class="stat-item text-start">
          <div class="stat-number">24/7/365</div>
          <div class="stat-label">Multilingual<br />Availability</div>
        </div>
      </div>

      <div class="col-6 col-lg-3 position-relative stat-col d-flex justify-content-center">
        <div class="stat-item text-start">
          <div class="stat-number">99.8%</div>
          <div class="stat-label">Investor<br />Satisfaction</div>
        </div>
      </div>

      <div class="col-6 col-lg-3 position-relative stat-col d-flex justify-content-center">
        <div class="stat-item text-start">
          <div class="stat-number">15 Min</div>
          <div class="stat-label">Avg. Inquiry<br />Response</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2. Zero-Height Seam Anchor for Floating Card -->
<div class="floating-seam-anchor">
  <div class="floating-banner">
    <div class="floating-banner-top">
      <h2>Have a business vision in mind?<br />Let's turn it into reality!</h2>
    </div>
    <div class="floating-banner-bottom">
      <ul class="compliance-list">
        <li>SOC 1 Type II</li>
        <li>SOC 2 Type II</li>
        <li>ISO 27001 Certified</li>
        <li>GDPR &amp; CCPA Compliant</li>
      </ul>
    </div>
  </div>
</div>

<!-- 3. Bottom CTA Section -->
<section class="bottom-cta-section">
  <div class="container cta-container">
    <div class="row">
      <div class="col-lg-6 offset-lg-6">
        <div class="cta-content-box">
          <h3 class="cta-heading">Optimize Your Fund<br />Operations Today</h3>
          <p class="cta-description">
            Partner with Devotion Global Customer Service<br class="d-none d-sm-inline" />
            Provider for institutional-grade fund administration<br class="d-none d-sm-inline" />
            and 24/7 LP desk support.
          </p>
          <a href="#consultation" class="btn-gold">Request a consultation</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom-Left Full-Bleed Image -->
  <div class="bottom-left-artwork">
    <img src="<?= $img; ?>/optimize-fund-operations.jpg" alt="24/7 LP Desk Support" />
  </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
