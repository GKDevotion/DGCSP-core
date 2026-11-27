<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/forex-broker-license';
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
    "description": "Devotion Global specializes in corporate service provisioning, turnkey forex broker licensing, offshore registration, corporate banking setup, and compliance.",
    "areaServed": "Global",
    "serviceType": "Forex Broker Licensing & Corporate Setup",
    "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Forex Solutions Catalog",
    "itemListElement": [
        {
        "@type": "Offer",
        "itemOffered": {
            "@type": "Service",
            "name": "Offshore Forex Licensing (VFSC, FSC, FSA)"
        }
        },
        {
        "@type": "Offer",
        "itemOffered": {
            "@type": "Service",
            "name": "Onshore Tier-1 Licensing (FCA, CySEC, ASIC)"
        }
        },
        {
        "@type": "Offer",
        "itemOffered": {
            "@type": "Service",
            "name": "Corporate Banking & Merchant Accounts"
        }
        }
    ]
    }
}
</script>

<style>
    :root {
      --gold-primary: #b38736;
      --gold-hover: #997129;
      --gold-light: #fdf9f2;
      --text-dark: #141619;
      --text-body: #4b5563;
      --text-muted: #6b7280;
    }

    /* =========================================
       SECTION 1: HERO BANNER
    ========================================= */
    .hero-forex-banner {
      position: relative;
      min-height: 580px;
      background-image: url('<?=  $img ?>/Forex-Broker-Licensing-Solutions.png');
      background-size: cover;
      background-position: right center;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      padding: 80px 0;
    }

    .accent-line {
      width: 48px;
      height: 3px;
      background-color: var(--gold-primary);
      margin-bottom: 24px;
    }

    .hero-title-top {
      font-size: clamp(2.1rem, 4vw, 3.35rem);
      font-weight: 500;
      color: var(--text-dark);
      line-height: 1.15;
      margin-bottom: 4px;
      letter-spacing: -0.5px;
    }

    .hero-title-highlight {
      font-size: clamp(2.2rem, 4.2vw, 3.3rem);
      font-weight: 700;
      color: var(--gold-primary);
      line-height: 1.15;
      margin-bottom: 22px;
      letter-spacing: -0.5px;
    }

    .hero-description {
      font-size: 1rem;
      line-height: 1.75;
      color: var(--text-muted);
      max-width: 520px;
      margin-bottom: 34px;
      font-weight: 400;
    }

    .btn-gold-solution {
      background-color: var(--gold-primary);
      color: #ffffff;
      font-weight: 600;
      font-size: 0.95rem;
      padding: 14px 30px;
      border-radius: 5px;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 6px 18px rgba(179, 135, 54, 0.22);
    }

    .btn-gold-solution:hover {
      background-color: var(--gold-hover);
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 10px 24px rgba(179, 135, 54, 0.32);
    }

    /* =========================================
       SECTION 2: OVERVIEW & FRAMEWORK COVERS
    ========================================= */
    .overview-framework-section {
      position: relative;
      background-image: url('<?=  $img ?>/What-is-Forex-Broker-Licensing-by-Devotion-Global-and-What-the-framework-covers.png');
      background-size: cover;
      background-position: left top;
      background-repeat: no-repeat;
      padding: 85px 0 95px;
    }

    /* Left Offset to avoid overlapping the curved building image */
    .content-safe-zone {
      padding-left: 14%;
    }

    /* 2x2 Stats Grid */
    .stats-grid-wrapper {
      position: relative;
    }

    .stat-box {
      padding: 18px 14px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .stat-box:hover {
      transform: translateY(-3px);
    }

    .stat-box-top-left {
      border-right: 1px solid #d1d5db;
      border-bottom: 1px solid #d1d5db;
    }

    .stat-box-top-right {
      border-bottom: 1px solid #d1d5db;
    }

    .stat-box-bottom-left {
      border-right: 1px solid #d1d5db;
    }

    .stat-icon {
      font-size: 2rem;
      color: var(--gold-primary);
      margin-bottom: 8px;
      display: inline-block;
      line-height: 1;
    }

    .stat-value {
      font-size: 1.85rem;
      font-weight: 800;
      color: var(--gold-primary);
      line-height: 1.15;
      margin-bottom: 4px;
    }

    .stat-label {
      font-size: 0.85rem;
      font-weight: 600;
      color: #374151;
      line-height: 1.3;
    }

    /* Right Overview Column */
    .overview-eyebrow {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      color: var(--gold-primary);
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .overview-eyebrow::after {
      content: "";
      flex-grow: 1;
      height: 1px;
      background-color: #d1d5db;
      max-width: 180px;
    }

    .overview-heading {
      font-size: clamp(1.65rem, 2.6vw, 2.15rem);
      font-weight: 800;
      color: var(--text-dark);
      line-height: 1.25;
      margin-bottom: 16px;
    }

    .overview-short-bar {
      width: 46px;
      height: 4px;
      background-color: var(--gold-primary);
      border-radius: 2px;
      margin-bottom: 18px;
    }

    .overview-text {
      font-size: 0.92rem;
      line-height: 1.68;
      color: var(--text-body);
      margin-bottom: 14px;
    }

    /* Subtle Wave Band Divider for Framework Title */
    .framework-divider-header {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 18px;
      margin: 56px 0 38px;
    }

    .framework-divider-header .line {
      width: 85px;
      height: 2px;
      background-color: var(--gold-primary);
    }

    .framework-divider-header h3 {
      font-size: 1.15rem;
      font-weight: 800;
      letter-spacing: 0.8px;
      color: var(--text-dark);
      margin: 0;
      text-transform: uppercase;
      text-align: center;
    }

    /* 4 Feature Cards */
    .framework-card {
      background: transparent;
      transition: transform 0.3s ease;
      height: 100%;
    }

    .framework-card:hover {
      transform: translateY(-6px);
    }

    .framework-img-wrapper {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      height: 145px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      margin-bottom: 24px;
      background-color: #f3f4f6;
    }

    .framework-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .framework-card:hover .framework-img-wrapper img {
      transform: scale(1.06);
    }

    .framework-badge-icon {
      position: absolute;
      bottom: 8px;
      left: 10px;
      width: 42px;
      height: 42px;
      background-color: #ffffff;
      border: 1.5px solid #e5d5b5;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold-primary);
      font-size: 1.25rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
      z-index: 2;
    }

    .framework-card-title {
      font-size: 1rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 8px;
    }

    .framework-card-bar {
      width: 24px;
      height: 2.5px;
      background-color: var(--gold-primary);
      margin-bottom: 10px;
    }

    .framework-card-desc {
      font-size: 0.84rem;
      line-height: 1.58;
      color: var(--text-body);
      margin: 0;
    }

    /* =========================================
       RESPONSIVE BREAKPOINTS
    ========================================= */
    @media (max-width: 1399.98px) {
      .content-safe-zone {
        padding-left: 17%;
      }
    }

    @media (max-width: 1199.98px) {
      .content-safe-zone {
        padding-left: 20%;
      }
    }

    @media (max-width: 991.98px) {
      .hero-forex-banner {
        min-height: 500px;
        background-position: 75% center;
      }
      .hero-forex-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.96) 0%, rgba(255, 255, 255, 0.88) 60%, rgba(255, 255, 255, 0.35) 100%);
        z-index: 1;
      }
      .hero-forex-banner .container {
        position: relative;
        z-index: 2;
      }

      /* Mobile/Tablet: remove left building image overlap */
      .overview-framework-section {
        background-image: none;
        background-color: #ffffff;
        padding: 65px 0;
      }
      .content-safe-zone {
        padding-left: 0;
      }
    }

    @media (max-width: 575.98px) {
      .hero-forex-banner {
        padding: 60px 0;
        min-height: auto;
      }
      .hero-forex-banner::before {
        background: rgba(255, 255, 255, 0.93);
      }
      .framework-divider-header .line {
        width: 35px;
      }
    }
</style>

<!-- =========================================
       SECTION 1: HERO BANNER
  ========================================== -->
<section class="hero-forex-banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-8">
          <div class="accent-line" data-aos="fade-right" data-aos-duration="700"></div>

          <h1 class="mb-0" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <span class="d-block hero-title-top">Forex Broker</span>
            <span class="d-block hero-title-highlight">Licensing Solutions</span>
          </h1>

          <p class="hero-description" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Devotion Global Customer Service Provider offers turnkey corporate structuring, offshore and onshore licensing, and regulatory support for international financial brokerages.
          </p>

          <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            <a href="#overview-section" class="btn btn-gold-solution">
              Explore Solutions
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================
       SECTION 2: OVERVIEW & WHAT THE FRAMEWORK COVERS
  ========================================== -->
  <section id="overview-section" class="overview-framework-section">
    <div class="container">
        <div class="content-safe-zone">

            <!-- TOP ROW: 2x2 Stats Grid + Overview Text -->
            <div class="row align-items-center g-4 g-xl-5">
            
                <!-- Left Column: 2x2 Metric Grid -->
                <div class="col-lg-5" data-aos="fade-up" data-aos-duration="800">
                    <div class="stats-grid-wrapper">
                    <div class="row g-0">
                        <!-- Stat 1 -->
                        <div class="col-6 stat-box stat-box-top-left">
                        <i class="bi bi-globe2 stat-icon"></i>
                        <div class="stat-value">40+</div>
                        <div class="stat-label">Global<br>Jurisdictions</div>
                        </div>
                        <!-- Stat 2 -->
                        <div class="col-6 stat-box stat-box-top-right">
                        <i class="bi bi-shield-check stat-icon"></i>
                        <div class="stat-value">100%</div>
                        <div class="stat-label">Regulatory<br>Compliance</div>
                        </div>
                        <!-- Stat 3 -->
                        <div class="col-6 stat-box stat-box-bottom-left">
                        <i class="bi bi-layers stat-icon"></i>
                        <div class="stat-value">Turnkey</div>
                        <div class="stat-label">Corporate<br>Banking &amp; CRM</div>
                        </div>
                        <!-- Stat 4 -->
                        <div class="col-6 stat-box">
                        <i class="bi bi-headset stat-icon"></i>
                        <div class="stat-value">24/7</div>
                        <div class="stat-label">Dedicated<br>Support</div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Right Column: Overview Content -->
                <div class="col-lg-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                    <div class="overview-eyebrow">OVERVIEW</div>
                    <h2 class="overview-heading">
                    What is Forex Broker<br>Licensing by Devotion Global?
                    </h2>
                    <div class="overview-short-bar"></div>
                    <p class="overview-text">
                    Devotion Global provides an end-to-end Forex Broker Licensing framework that includes company formation, corporate bank account opening, CRM and trading platform setup, and financial compliance management.
                    </p>
                    <p class="overview-text mb-0">
                    We assist clients in securing offshore licenses (Vanuatu VFSC, Mauritius FSC, Seychelles FSA) and onshore regulatory approvals (UK FCA, Cyprus CySEC, Labuan LFSA).
                    </p>
                </div>

            </div>

            <!-- DIVIDER HEADING: WHAT THE FRAMEWORK COVERS -->
            <div class="framework-divider-header" data-aos="fade-up" data-aos-duration="700">
                <span class="line"></span>
                <h3>WHAT THE FRAMEWORK COVERS</h3>
                <span class="line"></span>
            </div>

            <!-- BOTTOM ROW: 4 Framework Cards -->
            <div class="row g-4">
            
                <!-- Card 1: Company Formation -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="100">
                    <div class="framework-card">
                    <div class="framework-img-wrapper">
                        <img src="<?= $img; ?>/Company-Formation-Documents-Clipboard.png" alt="Company Formation">
                        <div class="framework-badge-icon">
                        <i class="bi bi-building-check"></i>
                        </div>
                    </div>
                    <h4 class="framework-card-title">Company Formation</h4>
                    <div class="framework-card-bar"></div>
                    <p class="framework-card-desc">
                        Incorporation, directors, registered office and statutory documents prepared for the regulator.
                    </p>
                    </div>
                </div>

                <!-- Card 2: Corporate Banking -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="200">
                    <div class="framework-card">
                    <div class="framework-img-wrapper">
                        <img src="<?= $img; ?>/Corporate-Banking-Bank-Building.png" alt="Corporate Banking">
                        <div class="framework-badge-icon">
                        <i class="bi bi-bank"></i>
                        </div>
                    </div>
                    <h4 class="framework-card-title">Corporate Banking</h4>
                    <div class="framework-card-bar"></div>
                    <p class="framework-card-desc">
                        Corporate and client-segregated account opening, with payment gateways suited to brokerages.
                    </p>
                    </div>
                </div>

                <!-- Card 3: CRM & Trading Platform -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="300">
                    <div class="framework-card">
                    <div class="framework-img-wrapper">
                        <img src="<?= $img; ?>/Banking-Launch.png" alt="CRM & Trading Platform">
                        <div class="framework-badge-icon">
                        <i class="bi bi-display"></i>
                        </div>
                    </div>
                    <h4 class="framework-card-title">CRM &amp; Trading Platform</h4>
                    <div class="framework-card-bar"></div>
                    <p class="framework-card-desc">
                        Platform, client portal and CRM configured and ready for client onboarding.
                    </p>
                    </div>
                </div>

                <!-- Card 4: Financial Compliance -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="400">
                    <div class="framework-card">
                    <div class="framework-img-wrapper">
                        <img src="<?= $img; ?>/Financial-Compliance-Justice-Scale.png" alt="Financial Compliance">
                        <div class="framework-badge-icon">
                        <i class="bi bi-shield-check"></i>
                        </div>
                    </div>
                    <h4 class="framework-card-title">Financial Compliance</h4>
                    <div class="framework-card-bar"></div>
                    <p class="framework-card-desc">
                        AML/KYC policies, risk frameworks and ongoing regulatory reporting managed end to end.
                    </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- =========================================
     SECTION 3: OUR SERVICES (ADD TO YOUR EXISTING CSS)
========================================= -->
<style>
  .our-services-section {
    position: relative;
    background-image: url('<?= $img; ?>/OUR-SERVICES.png');
    background-size: cover;
    background-position: right top;
    background-repeat: no-repeat;
    padding: 85px 0 95px;
    background-color: #ffffff;
  }

  /* Right Safe Zone to prevent overlapping the curved Dubai skyline on the right */
  .services-safe-zone {
    padding-right: 18%;
  }

  .services-eyebrow {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 0.95rem;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: var(--text-dark);
    text-transform: uppercase;
    margin-bottom: 24px;
  }

  .services-eyebrow::after {
    content: "";
    width: 110px;
    height: 2px;
    background-color: var(--gold-primary);
  }

  /* Top Comparison Boxes (Offshore vs Onshore) */
  .license-tier-box {
    border-radius: 16px;
    padding: 24px 26px;
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .license-tier-box:hover {
    transform: translateY(-4px);
  }

  .tier-offshore {
    background-color: #fbf7ef;
    border: 1px solid #efe4ce;
    box-shadow: 0 8px 24px rgba(179, 135, 54, 0.06);
  }

  .tier-onshore {
    background-color: #0b2239;
    border: 1px solid #163656;
    color: #ffffff;
    box-shadow: 0 10px 28px rgba(11, 34, 57, 0.16);
  }

  .tier-badge {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.8px;
    padding: 5px 14px;
    border-radius: 50px;
    text-transform: uppercase;
  }

  .tier-title {
    font-size: 1.15rem;
    font-weight: 700;
    margin: 0;
  }

  .tier-offshore .tier-title {
    color: var(--text-dark);
  }

  .tier-onshore .tier-title {
    color: #ffffff;
  }

  .tier-desc {
    font-size: 0.85rem;
    line-height: 1.55;
    margin: 12px 0 18px;
  }

  .tier-offshore .tier-desc {
    color: var(--text-body);
  }

  .tier-onshore .tier-desc {
    color: #cbd5e1;
  }

  /* Jurisdiction Mini Pills */
  .jurisdiction-pill {
    border-radius: 10px;
    padding: 10px 14px;
    height: 100%;
  }

  .tier-offshore .jurisdiction-pill {
    background-color: #ffffff;
    border: 1px solid #ede2cc;
  }

  .tier-onshore .jurisdiction-pill {
    background-color: #132e4a;
    border: 1px solid #21456b;
  }

  .jurisdiction-code {
    font-size: 0.92rem;
    font-weight: 800;
    color: var(--gold-primary);
    line-height: 1.2;
  }

  .tier-onshore .jurisdiction-code {
    color: #d4a853;
  }

  .jurisdiction-country {
    font-size: 0.78rem;
    font-weight: 500;
    margin-top: 2px;
  }

  .tier-offshore .jurisdiction-country {
    color: var(--text-dark);
  }

  .tier-onshore .jurisdiction-country {
    color: #e2e8f0;
  }

  /* Center Divider Pill & Heading */
  .services-center-header {
    text-align: center;
    margin: 48px 0 34px;
  }

  .pill-divider-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin-bottom: 14px;
  }

  .pill-divider-wrap .gold-line {
    width: 110px;
    height: 2px;
    background-color: var(--gold-primary);
  }

  .pill-badge-center {
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 6px 20px;
    border-radius: 50px;
  }

  .services-main-heading {
    font-size: clamp(1.55rem, 2.5vw, 2.05rem);
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 6px;
  }

  .services-sub-heading {
    font-size: 0.9rem;
    color: var(--text-body);
    margin: 0;
  }

  /* 4 Service Split Cards */
  .service-split-card {
    background-color: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    overflow: hidden;
    height: 100%;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.04);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    align-items: stretch;
  }

  .service-split-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.09);
  }

  .service-card-body {
    padding: 20px 18px 20px 20px;
    flex: 1 1 56%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .service-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
  }

  .service-icon-box {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 10px;
    background-color: #fbf7ef;
    border: 1px solid #ead9b7;
    color: var(--gold-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
  }

  .service-card-title {
    font-size: 1rem;
    font-weight: 700;
    color: var(--text-dark);
    line-height: 1.25;
    margin: 0;
  }

  .service-card-text {
    font-size: 0.78rem;
    line-height: 1.55;
    color: var(--text-body);
    margin: 0;
  }

  .service-card-media {
    flex: 0 0 50%;
    position: relative;
    overflow: hidden;
    clip-path: polygon(25% 0, 100% 0, 100% 100%, 0% 100%);
  }

  .service-card-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .service-split-card:hover .service-card-media img {
    transform: scale(1.07);
  }

  /* Responsive Adjustments */
  @media (max-width: 1399.98px) {
    .services-safe-zone {
      padding-right: 20%;
    }
  }

  @media (max-width: 1199.98px) {
    .services-safe-zone {
      padding-right: 22%;
    }
  }

  @media (max-width: 991.98px) {
    .our-services-section {
      background-image: none;
      padding: 65px 0;
    }
    .services-safe-zone {
      padding-right: 0;
    }
  }

  @media (max-width: 575.98px) {
    .service-split-card {
      flex-direction: column-reverse;
    }
    .service-card-media {
      clip-path: none;
      height: 160px;
      flex: none;
    }
    .pill-divider-wrap .gold-line {
      width: 45px;
    }
  }
</style>

<!-- =========================================
     SECTION 3: HTML CONTENT
========================================= -->
<section id="our-services" class="our-services-section">
  <div class="container">
    <div class="services-safe-zone">

      <!-- Section Eyebrow -->
      <div class="services-eyebrow" data-aos="fade-right" data-aos-duration="700">
        OUR SERVICES
      </div>

      <!-- Top 2 Boxes: Offshore vs Onshore -->
      <div class="row g-4">
        
        <!-- Left Box: Offshore Licenses -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="100">
          <div class="license-tier-box tier-offshore">
            <div class="d-flex align-items-center gap-3 flex-wrap">
              <span class="tier-badge">OFFSHORE</span>
              <h3 class="tier-title">Offshore Licenses</h3>
            </div>
            <p class="tier-desc">
              Faster approvals and lower capital requirements for emerging brokers.
            </p>
            <div class="row g-2">
              <div class="col-4">
                <div class="jurisdiction-pill">
                  <div class="jurisdiction-code">VFSC</div>
                  <div class="jurisdiction-country">Vanuatu</div>
                </div>
              </div>
              <div class="col-4">
                <div class="jurisdiction-pill">
                  <div class="jurisdiction-code">FSC</div>
                  <div class="jurisdiction-country">Mauritius</div>
                </div>
              </div>
              <div class="col-4">
                <div class="jurisdiction-pill">
                  <div class="jurisdiction-code">FSA</div>
                  <div class="jurisdiction-country">Seychelles</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Box: Onshore Approvals -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="200">
          <div class="license-tier-box tier-onshore">
            <div class="d-flex align-items-center gap-3 flex-wrap">
              <span class="tier-badge">ONSHORE</span>
              <h3 class="tier-title">Onshore Approvals</h3>
            </div>
            <p class="tier-desc">
              Tier-1 regulatory standing with stronger trust and wider market access.
            </p>
            <div class="row g-2">
              <div class="col-4">
                <div class="jurisdiction-pill">
                  <div class="jurisdiction-code">FCA</div>
                  <div class="jurisdiction-country">United Kingdom</div>
                </div>
              </div>
              <div class="col-4">
                <div class="jurisdiction-pill">
                  <div class="jurisdiction-code">CySEC</div>
                  <div class="jurisdiction-country">Cyprus</div>
                </div>
              </div>
              <div class="col-4">
                <div class="jurisdiction-pill">
                  <div class="jurisdiction-code">LFSA</div>
                  <div class="jurisdiction-country">Labuan</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Center Header -->
      <div class="services-center-header" data-aos="fade-up" data-aos-duration="750">
        <div class="pill-divider-wrap">
          <span class="gold-line"></span>
          <span class="pill-badge-center">Our Services</span>
          <span class="gold-line"></span>
        </div>
        <h2 class="services-main-heading">Our Licensing &amp; Corporate Services</h2>
        <p class="services-sub-heading">
          Tailored legal and technological foundations for every scale of Forex operation.
        </p>
      </div>

      <!-- Bottom 2x2 Grid: 4 Service Cards -->
      <div class="row g-4">

        <!-- Card 1: Offshore Licensing -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="100">
          <div class="service-split-card">
            <div class="service-card-body">
              <div class="service-card-header">
                <div class="service-icon-box">
                  <i class="bi bi-globe2"></i>
                </div>
                <h4 class="service-card-title">Offshore<br>Licensing</h4>
              </div>
              <p class="service-card-text">
                Rapid registration in Vanuatu (VFSC), Mauritius (FSC), or Seychelles (FSA), ideal for emerging brokers seeking minimal capital requirements and speedy setup.
              </p>
            </div>
            <div class="service-card-media">
              <img src="<?= $img ?>/Offshore-Licensing.png" alt="Offshore Licensing">
            </div>
          </div>
        </div>

        <!-- Card 2: Tier-1 Onshore Setup -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="200">
          <div class="service-split-card">
            <div class="service-card-body">
              <div class="service-card-header">
                <div class="service-icon-box">
                  <i class="bi bi-bank"></i>
                </div>
                <h4 class="service-card-title">Tier-1<br>Onshore<br>Setup</h4>
              </div>
              <p class="service-card-text">
                Establish high credibility in regulated environments such as Cyprus (CySEC), the UK (FCA), or Australia (ASIC), with full passporting rights.
              </p>
            </div>
            <div class="service-card-media">
              <img src="<?= $img ?>/Tier-1-Onshore-Setup.png" alt="Tier-1 Onshore Setup">
            </div>
          </div>
        </div>

        <!-- Card 3: Corporate Banking & PSPs -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="300">
          <div class="service-split-card">
            <div class="service-card-body">
              <div class="service-card-header">
                <div class="service-icon-box">
                  <i class="bi bi-layers"></i>
                </div>
                <h4 class="service-card-title">Corporate<br>Banking &amp;<br>PSPs</h4>
              </div>
              <p class="service-card-text">
                Secure multi-currency corporate accounts, client-segregated bank accounts, and integrated Payment Service Providers (PSPs) for smooth processing.
              </p>
            </div>
            <div class="service-card-media">
              <img src="<?= $img ?>/Corporate-Banking-PSPs.png" alt="Corporate Banking & PSPs">
            </div>
          </div>
        </div>

        <!-- Card 4: Turnkey Tech Integration -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="400">
          <div class="service-split-card">
            <div class="service-card-body">
              <div class="service-card-header">
                <div class="service-icon-box">
                  <i class="bi bi-plug"></i>
                </div>
                <h4 class="service-card-title">Turnkey<br>Tech<br>Integration</h4>
              </div>
              <p class="service-card-text">
                Deploy custom FX CRM systems, client portals, liquidity provider (LP) bridge connectivity, and trading platforms ready for client onboarding.
              </p>
            </div>
            <div class="service-card-media">
              <img src="<?= $img ?>/Turnkey-Tech-Integration.png" alt="Turnkey Tech Integration">
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- =========================================
     SECTION 4: OUR PROCESS (ADD TO YOUR EXISTING CSS)
========================================= -->
<style>
  .our-process-section {
    position: relative;
    padding: 85px 0 95px;
    background-color: #faf9f6;
  }

  /* Section Header */
  .process-header {
    text-align: center;
    margin-bottom: 48px;
  }

  .process-pill-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin-bottom: 14px;
  }

  .process-pill-wrap .gold-line {
    width: 110px;
    height: 2px;
    background-color: var(--gold-primary);
  }

  .process-pill-badge {
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 0.82rem;
    font-weight: 600;
    padding: 6px 22px;
    border-radius: 50px;
  }

  .process-main-heading {
    font-size: clamp(1.65rem, 2.8vw, 2.25rem);
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 8px;
  }

  .process-sub-heading {
    font-size: 0.92rem;
    color: var(--text-body);
    margin: 0;
  }

  /* Timeline Connector Line across 4 Columns */
  .process-steps-wrapper {
    position: relative;
  }

  .process-timeline-line {
    position: absolute;
    top: 22px;
    left: 12.5%;
    right: 12.5%;
    height: 2px;
    background-color: #d8be8a;
    z-index: 1;
  }

  .process-step-item {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  /* Numbered Gold Circle Badge (01, 02, 03, 04) */
  .process-number-badge {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow: 0 0 0 4px #faf9f6, 0 0 0 5.5px #d8be8a;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .process-step-item:hover .process-number-badge {
    transform: scale(1.08);
    background-color: var(--gold-hover);
  }

  /* Step Card */
  .process-card {
    background-color: #ffffff;
    border: 1px solid #ece8df;
    border-radius: 16px;
    padding: 12px 12px 24px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }

  .process-step-item:hover .process-card {
    transform: translateY(-6px);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
  }

  .process-card-img {
    height: 130px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 18px;
    background-color: #f3f4f6;
  }

  .process-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .process-step-item:hover .process-card-img img {
    transform: scale(1.06);
  }

  .process-card-body {
    padding: 0 10px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .process-step-tag {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.8px;
    color: var(--gold-primary);
    text-transform: uppercase;
    margin-bottom: 4px;
  }

  .process-card-title {
    font-size: 1.08rem;
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 10px;
  }

  .process-card-desc {
    font-size: 0.8rem;
    line-height: 1.6;
    color: var(--text-body);
    margin-bottom: 18px;
  }

  /* Checklist at bottom of card */
  .process-checklist {
    list-style: none;
    padding: 0;
    margin: auto 0 0 0;
  }

  .process-checklist li {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 0.79rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 8px;
    line-height: 1.35;
  }

  .process-checklist li:last-child {
    margin-bottom: 0;
  }

  .process-checklist li i {
    color: var(--gold-primary);
    font-size: 0.9rem;
    line-height: 1.2;
  }

  /* Hide horizontal connector line on Tablet & Mobile */
  @media (max-width: 1199.98px) {
    .process-timeline-line {
      display: none;
    }
  }

  @media (max-width: 575.98px) {
    .our-process-section {
      padding: 65px 0;
    }
    .process-pill-wrap .gold-line {
      width: 45px;
    }
  }
</style>

<!-- =========================================
     SECTION 4: HTML CONTENT
========================================= -->
<section id="our-process" class="our-process-section">
  <div class="container">

    <!-- Header -->
    <div class="process-header" data-aos="fade-up" data-aos-duration="750">
      <div class="process-pill-wrap">
        <span class="gold-line"></span>
        <span class="process-pill-badge">Our Process</span>
        <span class="gold-line"></span>
      </div>
      <h2 class="process-main-heading">How We Get You Licensed</h2>
      <p class="process-sub-heading">
        A structured 4-step framework designed to navigate global compliance.
      </p>
    </div>

    <!-- 4-Step Process Grid -->
    <div class="process-steps-wrapper">
      <!-- Connecting Gold Line -->
      <div class="process-timeline-line" data-aos="fade-in" data-aos-duration="1000"></div>

      <div class="row g-4">

        <!-- STEP 01: Jurisdiction Strategy -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="100">
          <div class="process-step-item">
            <div class="process-number-badge">01</div>
            <div class="process-card">
              <div class="process-card-img">
                <img src="<?= $img; ?>/Jurisdiction-Strategy.png" alt="Jurisdiction Strategy">
              </div>
              <div class="process-card-body">
                <div class="process-step-tag">STEP 01</div>
                <h3 class="process-card-title">Jurisdiction Strategy</h3>
                <p class="process-card-desc">
                  We analyze your business plan, target markets, and capital structure to select the best legal location for your brokerage.
                </p>
                <ul class="process-checklist">
                  <li><i class="bi bi-check2"></i><span>Business plan review</span></li>
                  <li><i class="bi bi-check2"></i><span>Target market mapping</span></li>
                  <li><i class="bi bi-check2"></i><span>Jurisdiction shortlist</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- STEP 02: Entity Formation -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="200">
          <div class="process-step-item">
            <div class="process-number-badge">02</div>
            <div class="process-card">
              <div class="process-card-img">
                <img src="<?= $img; ?>/Entity-Formation.png" alt="Entity Formation">
              </div>
              <div class="process-card-body">
                <div class="process-step-tag">STEP 02</div>
                <h3 class="process-card-title">Entity Formation</h3>
                <p class="process-card-desc">
                  Our team handles corporate incorporation, physical office establishment, local director appointments, and document drafting.
                </p>
                <ul class="process-checklist">
                  <li><i class="bi bi-check2"></i><span>Company incorporation</span></li>
                  <li><i class="bi bi-check2"></i><span>Local director appointment</span></li>
                  <li><i class="bi bi-check2"></i><span>Office &amp; document drafting</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- STEP 03: Filing & Compliance -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="300">
          <div class="process-step-item">
            <div class="process-number-badge">03</div>
            <div class="process-card">
              <div class="process-card-img">
                <img src="<?= $img; ?>/Filing-Compliance.png" alt="Filing & Compliance">
              </div>
              <div class="process-card-body">
                <div class="process-step-tag">STEP 03</div>
                <h3 class="process-card-title">Filing &amp; Compliance</h3>
                <p class="process-card-desc">
                  We submit formal applications to financial regulatory bodies, implementing required AML/KYC policies and risk frameworks.
                </p>
                <ul class="process-checklist">
                  <li><i class="bi bi-check2"></i><span>Regulatory application</span></li>
                  <li><i class="bi bi-check2"></i><span>AML/KYC policies</span></li>
                  <li><i class="bi bi-check2"></i><span>Risk framework</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- STEP 04: Banking & Launch -->
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="400">
          <div class="process-step-item">
            <div class="process-number-badge">04</div>
            <div class="process-card">
              <div class="process-card-img">
                <img src="<?= $img; ?>/Banking-Launch.png" alt="Banking & Launch">
              </div>
              <div class="process-card-body">
                <div class="process-step-tag">STEP 04</div>
                <h3 class="process-card-title">Banking &amp; Launch</h3>
                <p class="process-card-desc">
                  Upon license approval, we complete bank account integrations, connect liquidity bridges, and deliver your live trading ecosystem.
                </p>
                <ul class="process-checklist">
                  <li><i class="bi bi-check2"></i><span>Bank account integration</span></li>
                  <li><i class="bi bi-check2"></i><span>Liquidity bridge connectivity</span></li>
                  <li><i class="bi bi-check2"></i><span>Live trading ecosystem</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- =========================================
     SECTION 5: JURISDICTION MATRIX & LAUNCH CTA (ADD TO YOUR EXISTING CSS)
========================================= -->
<style>
  .jurisdiction-cta-section {
    position: relative;
    background-image: url('<?= $img; ?>/Jurisdiction-Comparison-Matrix-Launch-Your-Brokerage-With-Devotion-Global.png');
    background-size: cover;
    background-position: left center;
    background-repeat: no-repeat;
    padding: 85px 0 95px;
    background-color: #ffffff;
  }

  /* Left Safe Zone so content stays cleanly inside the white area away from the curved team photo */
  .matrix-safe-zone {
    padding-left: 34%;
  }

  /* Header */
  .matrix-header {
    text-align: center;
    margin-bottom: 28px;
  }

  .matrix-pill-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 14px;
    margin-bottom: 12px;
  }

  .matrix-pill-wrap .gold-line {
    width: 75px;
    height: 1.5px;
    background-color: var(--gold-primary);
  }

  .matrix-pill-badge {
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 0.78rem;
    font-weight: 600;
    padding: 5px 18px;
    border-radius: 50px;
  }

  .matrix-main-heading {
    font-size: clamp(1.5rem, 2.5vw, 2rem);
    font-weight: 800;
    color: var(--text-dark);
    margin-bottom: 6px;
  }

  .matrix-sub-heading {
    font-size: 0.85rem;
    color: var(--text-body);
    max-width: 460px;
    margin: 0 auto;
    line-height: 1.5;
  }

  /* Comparison Table Card */
  .matrix-table-card {
    background-color: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    border: 1px solid #ece8df;
    margin-bottom: 44px;
  }

  .matrix-table {
    width: 100%;
    margin-bottom: 0;
    border-collapse: collapse;
  }

  .matrix-table thead {
    background: linear-gradient(90deg, #a87f32 0%, #c19a49 100%);
    color: #ffffff;
  }

  .matrix-table thead th {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    padding: 13px 16px;
    border: none;
    white-space: nowrap;
  }

  .matrix-table tbody td {
    font-size: 0.8rem;
    padding: 13px 16px;
    vertical-align: middle;
    border-bottom: 1px solid #f1f3f5;
    color: var(--text-dark);
    white-space: nowrap;
  }

  .matrix-table tbody tr:last-child td {
    border-bottom: none;
  }

  .matrix-table tbody tr:hover {
    background-color: #fdfbf7;
  }

  .jurisdiction-name {
    font-weight: 700;
    color: var(--text-dark);
  }

  /* Capital Level Badges */
  .cap-badge {
    display: inline-block;
    min-width: 78px;
    text-align: center;
    font-size: 0.73rem;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 6px;
  }

  .cap-low {
    background-color: #dff5e3;
    color: #1f7a38;
  }

  .cap-moderate {
    background-color: #fef3c7;
    color: #a16207;
  }

  .cap-high {
    background-color: #dbeafe;
    color: #1d4ed8;
  }

  /* Launch CTA Block */
  .launch-cta-block {
    max-width: 520px;
    padding-left: 14px;
  }

  .launch-cta-heading {
    font-size: clamp(1.55rem, 2.4vw, 1.95rem);
    font-weight: 800;
    color: var(--text-dark);
    line-height: 1.25;
    margin-bottom: 14px;
  }

  .launch-cta-bar {
    width: 44px;
    height: 3.5px;
    background-color: var(--gold-primary);
    border-radius: 2px;
    margin-bottom: 16px;
  }

  .launch-cta-text {
    font-size: 0.9rem;
    line-height: 1.6;
    color: var(--text-body);
    margin-bottom: 18px;
  }

  .launch-cta-list {
    list-style: none;
    padding: 0;
    margin: 0 0 28px 0;
  }

  .launch-cta-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.88rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 10px;
  }

  .launch-cta-list li i {
    color: var(--gold-primary);
    font-size: 1.05rem;
    font-weight: 700;
  }

  .btn-consult-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(90deg, #a87f32 0%, #c09644 100%);
    color: #ffffff;
    font-size: 0.92rem;
    font-weight: 600;
    padding: 13px 28px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(179, 135, 54, 0.25);
    transition: all 0.3s ease;
  }

  .btn-consult-pill:hover {
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(179, 135, 54, 0.35);
  }

  /* Responsive Adjustments */
  @media (max-width: 1399.98px) {
    .matrix-safe-zone {
      padding-left: 36%;
    }
  }

  @media (max-width: 1199.98px) {
    .matrix-safe-zone {
      padding-left: 38%;
    }
  }

  @media (max-width: 991.98px) {
    .jurisdiction-cta-section {
      background-image: none;
      padding: 65px 0;
    }
    .matrix-safe-zone {
      padding-left: 0;
    }
    .launch-cta-block {
      padding-left: 0;
      max-width: 100%;
    }
  }

  @media (max-width: 575.98px) {
    .matrix-pill-wrap .gold-line {
      width: 40px;
    }
  }
</style>

<!-- =========================================
     SECTION 5: HTML CONTENT
========================================= -->
<section id="jurisdiction-matrix" class="jurisdiction-cta-section">
  <div class="container">
    <div class="matrix-safe-zone">

      <!-- Matrix Header -->
      <div class="matrix-header" data-aos="fade-up" data-aos-duration="750">
        <div class="matrix-pill-wrap">
          <span class="gold-line"></span>
          <span class="matrix-pill-badge">Global Jurisdictions</span>
          <span class="gold-line"></span>
        </div>
        <h2 class="matrix-main-heading">Jurisdiction Comparison Matrix</h2>
        <p class="matrix-sub-heading">
          Select the jurisdiction that aligns with your capital requirements and operating timeline.
        </p>
      </div>

      <!-- Comparison Table -->
      <div class="matrix-table-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <div class="table-responsive">
          <table class="table matrix-table">
            <thead>
              <tr>
                <th>JURISDICTION</th>
                <th>LICENSE TYPE</th>
                <th>EST. TIMELINE</th>
                <th>REPUTATION LEVEL</th>
                <th class="text-center">MIN. CAPITAL</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="jurisdiction-name">Vanuatu (VFSC)</td>
                <td>Financial Dealers License</td>
                <td>2 – 3 Months</td>
                <td>Offshore / Emerging</td>
                <td class="text-center"><span class="cap-badge cap-low">Low</span></td>
              </tr>
              <tr>
                <td class="jurisdiction-name">Mauritius (FSC)</td>
                <td>SEC / Investment Dealer</td>
                <td>3 – 5 Months</td>
                <td>Mid-Shore Preferred</td>
                <td class="text-center"><span class="cap-badge cap-moderate">Moderate</span></td>
              </tr>
              <tr>
                <td class="jurisdiction-name">Labuan, Malaysia (LFSA)</td>
                <td>Money Broking License</td>
                <td>4 – 6 Months</td>
                <td>Asian Financial Hub</td>
                <td class="text-center"><span class="cap-badge cap-moderate">Moderate</span></td>
              </tr>
              <tr>
                <td class="jurisdiction-name">Cyprus (CySEC)</td>
                <td>CIF (EU Passporting)</td>
                <td>6 – 9 Months</td>
                <td>Tier-1 Onshore</td>
                <td class="text-center"><span class="cap-badge cap-high">High</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Bottom Launch CTA -->
      <div class="launch-cta-block" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <h3 class="launch-cta-heading">
          Launch Your Brokerage With<br>Devotion Global
        </h3>
        <div class="launch-cta-bar"></div>
        <p class="launch-cta-text">
          Speak with our corporate licensing specialists to discuss your business model, timeline, and jurisdiction selection.
        </p>
        <ul class="launch-cta-list">
          <li>
            <i class="bi bi-check2"></i>
            <span>Jurisdiction strategy tailored to your capital</span>
          </li>
          <li>
            <i class="bi bi-check2"></i>
            <span>Banking, PSP and CRM set-up under one team</span>
          </li>
          <li>
            <i class="bi bi-check2"></i>
            <span>Dedicated support from filing to launch</span>
          </li>
        </ul>
        <a href="#contact" class="btn-consult-pill">
          <span>Consult an Expert Today</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>
<?php include ROOT_PATH . '/elements/footer.php'; ?>
