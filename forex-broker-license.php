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
 
  /* =========================================
      THEME 2 - SECTION 1: HERO BANNER
  ========================================= */
  .hero-v2-banner {
    position: relative;
    min-height: 540px;
    background-color: #f4f4f5;
    background-image: url('<?= $img; ?>/forex-broker-solution-header-bg.jpg');
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    padding: 80px 0;
  }

  .hero-v2-title-top {
    font-size: clamp(2rem, 3.8vw, 3.2rem);
    font-weight: 500;
    color: var(--text-dark);
    line-height: 1.18;
    margin-bottom: 4px;
    letter-spacing: 0.5px;
  }

  .hero-v2-title-gold {
    font-size: clamp(2.1rem, 4vw, 3.35rem);
    font-weight: 600;
    color: var(--gold-primary);
    line-height: 1.18;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
  }

  .hero-v2-desc {
    font-size: 0.98rem;
    line-height: 1.72;
    color: var(--text-body);
    max-width: 480px;
    margin-bottom: 30px;
    font-weight: 400;
  }

  .btn-v2-consultation {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 600;
    padding: 13px 28px;
    border-radius: 3px;
    border: none;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 6px 16px rgba(179, 135, 54, 0.22);
  }

  .btn-v2-consultation:hover {
    background-color: var(--gold-hover);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(179, 135, 54, 0.32);
  }

  /* Responsive Overlay for Tablet & Mobile */
  @media (max-width: 991.98px) {
    .hero-v2-banner {
      min-height: 480px;
      background-position: 80% center;
    }
    .hero-v2-banner::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, rgba(244, 244, 245, 0.96) 0%, rgba(244, 244, 245, 0.88) 58%, rgba(244, 244, 245, 0.3) 100%);
      z-index: 1;
    }
    .hero-v2-banner .container {
      position: relative;
      z-index: 2;
    }
  }

  @media (max-width: 575.98px) {
    .hero-v2-banner {
      padding: 60px 0;
      min-height: auto;
    }
    .hero-v2-banner::before {
      background: rgba(244, 244, 245, 0.94);
    }
  }
</style>

<!-- =========================================
      SECTION 1: HERO BANNER
========================================== -->
<section class="hero-v2-banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-8">

        <h1 class="mb-0" data-aos="fade-up" data-aos-duration="750">
          <span class="d-block hero-v2-title-top">Forex Broker</span>
          <span class="d-block hero-v2-title-gold">Licensing Solution</span>
        </h1>

        <p class="hero-v2-desc" data-aos="fade-up" data-aos-duration="750" data-aos-delay="120">
          Devotion Global Customer Service Provider offers turnkey corporate structuring, offshore and onshore licensing, and regulatory support for international financial brokerages.
        </p>

        <div data-aos="fade-up" data-aos-duration="750" data-aos-delay="220">
          <a href="#consultation" class="btn-v2-consultation">
            Request Consultation
          </a>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- =========================================
     THEME 2 - SECTION 2: INDIVIDUAL 3D IMAGE OBJECTS (ADD TO YOUR EXISTING CSS)
========================================= -->
<style>
  .licensing-overview-v2 {
    padding: 95px 0;
    background-color: #ffffff;
    overflow: hidden;
  }

  /* Interactive Ecosystem Stage */
  .ecosystem-stage {
    position: relative;
    width: 100%;
    max-width: 560px;
    height: 430px;
    margin: 0 auto;
  }

  /* Individual Floating Object Node */
  .eco-node {
    position: absolute;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    z-index: 2;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1);
    animation: gentleFloat 4.5s ease-in-out infinite;
  }

  /* Exact Placement Matching Screenshot */
  .node-company {
    top: 12px;
    left: 0%;
    animation-delay: 0s;
  }

  .node-banking {
    top: 4%;
    right: 8%;
    flex-direction: column-reverse;
    align-items: center;
    gap: 4px;
    animation-delay: 0.7s;
  }

  .node-compliance {
    top: 140px;
    left: 0%;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    animation-delay: 1.4s;
  }

  .node-offshore {
    top: 35%;
    left: 38%;
    animation-delay: 2.1s;
  }

  .node-license {
    bottom: 0%;
    left: 15%;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    animation-delay: 1.1s;
  }

  .node-platform {
    bottom: 60px;
    right: -14%;
    animation-delay: 2.6s;
  }

  /* Hover Animation: Lifts upward and gently scales up */
  .eco-node:hover {
    animation-play-state: paused;
    transform: translateY(-9px) scale(1.06);
    z-index: 5;
  }

  /* Uploaded 3D PNG Image Sizing & Blend */
  .eco-3d-img {
    width: 100px;
    height: 100px;
    object-fit: contain;
    mix-blend-mode: multiply;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1), filter 0.38s ease;
  }

  .eco-node:hover .eco-3d-img {
    filter: drop-shadow(0 12px 18px rgba(179, 135, 54, 0.25));
  }

  /* Node Labels */
  .eco-label {
    font-size: 1rem;
    font-weight: 500;
    color: #5b616a;
    line-height: 1;
    white-space: nowrap;
    transition: color 0.3s ease;
  }

  .eco-label-gold {
    color: var(--gold-primary);
    font-weight: 600;
  }

  .eco-label-main {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--gold-primary);
  }

  .eco-node:hover .eco-label {
    color: #0b0d10;
  }

  .eco-node:hover .eco-label-gold,
  .eco-node:hover .eco-label-main {
    color: var(--gold-hover);
  }

  @keyframes gentleFloat {
    0%, 100% { transform: translateY(0px); }
    50%      { transform: translateY(-7px); }
  }

  /* Right Side Typography */
  .overview-v2-content {
    padding-left: 20px;
  }

  .overview-v2-title {
    font-size: clamp(1.75rem, 2.8vw, 2.35rem);
    font-weight: 700;
    color: #0b0d10;
    line-height: 1.25;
    margin-bottom: 22px;
    letter-spacing: -0.3px;
  }

  .overview-v2-desc {
    font-size: 0.98rem;
    line-height: 1.78;
    color: #5b616a;
    margin: 0;
  }

  /* Tablet Adjustment */
  @media (max-width: 1199.98px) and (min-width: 576px) {
    .ecosystem-stage {
      max-width: 500px;
      height: 400px;
    }
    .eco-3d-img {
      width: 72px;
      height: 72px;
    }
    .eco-label {
      font-size: 0.85rem;
    }
  }

  /* Mobile Responsive Grid Fallback */
  @media (max-width: 575.98px) {
    .ecosystem-stage {
      height: auto;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
    .eco-node {
      position: static;
      flex-direction: column !important;
      align-items: center !important;
      text-align: center;
      background: #faf9f6;
      border: 1px solid #ece8df;
      border-radius: 14px;
      padding: 16px 10px;
    }
    .node-company {
      flex-direction: column-reverse !important;
    }
    .eco-3d-img {
      width: 70px;
      height: 70px;
    }
    .eco-label {
      white-space: normal;
      font-size: 0.85rem;
    }
    .eco-label-main {
      font-size: 0.95rem;
    }
  }

  @media (max-width: 991.98px) {
    .licensing-overview-v2 {
      padding: 65px 0;
    }
    .overview-v2-content {
      padding-left: 0;
      margin-top: 28px;
    }
  }
</style>

<!-- =========================================
     THEME 2 - SECTION 2: HTML CONTENT
========================================= -->
<section id="what-is-licensing" class="licensing-overview-v2">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Side: 6 Individual Animated 3D Image Objects -->
      <div class="col-lg-6">
        <div class="ecosystem-stage">

          <!-- 1. Company Formation -->
          <div class="eco-node node-company" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="50">
            <span class="eco-label eco-label-gold">company formation</span>
            <img src="<?= $img; ?>/company-information.png" alt="Company Formation" class="eco-3d-img">
          </div>

          <!-- 2. Bank Account Opening -->
          <div class="eco-node node-banking" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
            <img src="<?= $img; ?>/bank-account-opening.png" alt="Bank Account Opening" class="eco-3d-img">
            <span class="eco-label">Bank account opening</span>
          </div>

          <!-- 3. Financial Compliance -->
          <div class="eco-node node-compliance" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="250">
            <img src="<?= $img; ?>/finanical-compience.png" alt="Financial Compliance" class="eco-3d-img">
            <span class="eco-label">financial compliance</span>
          </div>

          <!-- 4. Securing Offshore Licenses -->
          <div class="eco-node node-offshore" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="350">
            <img src="<?= $img; ?>/security-ofshore.png" alt="Securing Offshore Licenses" class="eco-3d-img">
            <span class="eco-label eco-label-gold">Securing Offshore Licenses</span>
          </div>

          <!-- 5. Forex Broker Licensing -->
          <div class="eco-node node-license" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="450">
            <img src="<?= $img; ?>/forex-broker-licencing.png" alt="Forex Broker Licensing" class="eco-3d-img">
            <span class="eco-label eco-label-main">Forex Broker Licensing</span>
          </div>

          <!-- 6. Trading Platform Setup -->
          <div class="eco-node node-platform" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="550">
            <img src="<?= $img; ?>/trading-platform-setup.png" alt="Trading Platform Setup" class="eco-3d-img">
            <span class="eco-label">trading platform setup</span>
          </div>

        </div>
      </div>

      <!-- Right Side Content -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
        <div class="overview-v2-content">
          <h2 class="overview-v2-title">
            What is Forex Broker Licensing<br>by Devotion Global?
          </h2>
          <p class="overview-v2-desc">
            Devotion Global provides an end-to-end Forex Broker Licensing framework that includes company formation, corporate bank account opening, CRM and trading platform setup, and financial compliance management. We assist clients in securing offshore licenses (Vanuatu VFSC, Mauritius FSC, Seychelles FSA) and onshore regulatory approvals (UK FCA, Cyprus CySEC, Labuan LFSA).
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================
     THEME 2 - SECTION 3: GOLD STATS BAR (ADD TO YOUR EXISTING CSS)
========================================= -->
<style>
  .stats-gold-banner {
    background-color: #a67d2e;
    padding: 58px 0;
    color: #ffffff;
  }

  .stat-strip-item {
    position: relative;
    padding: 8px 24px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    transition: transform 0.3s ease;
  }

  .stat-strip-item:hover {
    transform: translateY(-4px);
  }

  /* Vertical Divider between columns */
  .stat-strip-divider::after {
    content: "";
    position: absolute;
    right: 0;
    top: 10%;
    height: 80%;
    width: 1px;
    background-color: rgba(255, 255, 255, 0.38);
  }

  .stat-strip-value {
    font-size: clamp(2rem, 3.2vw, 2.65rem);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.15;
    margin-bottom: 8px;
    letter-spacing: -0.3px;
  }

  .stat-strip-label {
    font-size: 0.98rem;
    font-weight: 400;
    color: rgba(255, 255, 255, 0.92);
    line-height: 1.45;
  }

  /* Tablet: 2x2 Grid Divider Adjustment */
  @media (max-width: 991.98px) {
    .stats-gold-banner {
      padding: 48px 0;
    }
    .stat-strip-item {
      align-items: center;
      text-align: center;
      padding: 18px 16px;
    }
    .stat-strip-col:nth-child(2) .stat-strip-divider::after {
      display: none;
    }
  }

  /* Mobile: Clean Stacked Layout */
  @media (max-width: 575.98px) {
    .stat-strip-divider::after {
      display: none;
    }
    .stat-strip-col:not(:last-child) .stat-strip-item {
      border-bottom: 1px solid rgba(255, 255, 255, 0.25);
      padding-bottom: 22px;
      margin-bottom: 6px;
    }
  }
</style>

<!-- =========================================
     THEME 2 - SECTION 3: HTML CONTENT
========================================= -->
<section class="stats-gold-banner">
  <div class="container">
    <div class="row justify-content-center">

      <!-- Stat 1 -->
      <div class="col-lg-3 col-sm-6 stat-strip-col" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
        <div class="stat-strip-item stat-strip-divider mx-lg-auto">
          <div class="stat-strip-value">40+</div>
          <div class="stat-strip-label">Global<br>Jurisdictions</div>
        </div>
      </div>

      <!-- Stat 2 -->
      <div class="col-lg-3 col-sm-6 stat-strip-col" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
        <div class="stat-strip-item stat-strip-divider mx-lg-auto">
          <div class="stat-strip-value">100%</div>
          <div class="stat-strip-label">Regulatory<br>Compliance</div>
        </div>
      </div>

      <!-- Stat 3 -->
      <div class="col-lg-3 col-sm-6 stat-strip-col" data-aos="fade-up" data-aos-duration="650" data-aos-delay="250">
        <div class="stat-strip-item stat-strip-divider mx-lg-auto">
          <div class="stat-strip-value">Turnkey</div>
          <div class="stat-strip-label">Corporate Banking<br>&amp; CRM</div>
        </div>
      </div>

      <!-- Stat 4 -->
      <div class="col-lg-3 col-sm-6 stat-strip-col" data-aos="fade-up" data-aos-duration="650" data-aos-delay="350">
        <div class="stat-strip-item mx-lg-auto">
          <div class="stat-strip-value">24/7</div>
          <div class="stat-strip-label">Dedicated<br>Support</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================================
     THEME 2 - SECTION 4: OUR LICENSING & CORPORATE SERVICES (ADD TO YOUR EXISTING CSS)
========================================= -->
<style>
  .licensing-services-v2 {
    background-color: #ececf0;
    padding: 90px 0 100px;
  }

  /* Header */
  .services-v2-header {
    text-align: center;
    max-width: 540px;
    margin: 0 auto 88px;
  }

  .services-v2-title {
    font-size: clamp(1.75rem, 3vw, 2.35rem);
    font-weight: 700;
    color: #0b0d10;
    margin-bottom: 14px;
    letter-spacing: -0.3px;
  }

  .services-v2-subtitle {
    font-size: 0.96rem;
    line-height: 1.65;
    color: #6b7280;
    margin: 0;
  }

  /* Service Card with Overlapping 3D Top Icon */
  .service-v2-card {
    position: relative;
    background-color: #ffffff;
    border: 1px solid #e2e4ea;
    border-radius: 16px;
    padding: 78px 30px 50px;
    height: 100%;
    box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.38s ease,
                border-color 0.38s ease;
  }

  .service-v2-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 18px 36px rgba(15, 23, 42, 0.09);
    border-color: #d4b475;
  }

  /* Top Overlapping 3D Illustration */
  .service-v2-icon-wrap {
    position: absolute;
    top: -58px;
    left: 24px;
    width: 112px;
    height: 104px;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    pointer-events: none;
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .service-v2-icon-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    mix-blend-mode: multiply;
    filter: drop-shadow(0 8px 14px rgba(15, 30, 54, 0.14));
  }

  .service-v2-card:hover .service-v2-icon-wrap {
    transform: translateY(-7px) scale(1.06);
  }

  .service-v2-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #0b0d10;
    line-height: 1.3;
    margin-bottom: 16px;
  }

  .service-v2-divider {
    width: 72px;
    height: 2px;
    background-color: var(--gold-primary);
    margin-bottom: 18px;
    transition: width 0.35s ease;
  }

  .service-v2-card:hover .service-v2-divider {
    width: 105px;
  }

  .service-v2-desc {
    font-size: 0.88rem;
    line-height: 1.72;
    color: #4b5563;
    margin: 0;
  }

  /* Tablet & Mobile Spacing for Top Overlapping Icons */
  @media (max-width: 1199.98px) {
    .services-v2-cards-row {
      row-gap: 72px;
    }
  }

  @media (max-width: 575.98px) {
    .licensing-services-v2 {
      padding: 65px 0 75px;
    }
    .services-v2-header {
      margin-bottom: 76px;
    }
    .service-v2-card {
      padding: 62px 22px 28px;
    }
  }
</style>

<!-- =========================================
     THEME 2 - SECTION 4: HTML CONTENT
========================================= -->
<section id="corporate-services" class="licensing-services-v2">
  <div class="container">

    <!-- Header -->
    <div class="services-v2-header" data-aos="fade-up" data-aos-duration="750">
      <h2 class="services-v2-title">Our Licensing &amp; Corporate Services</h2>
      <p class="services-v2-subtitle">
        Tailored legal and technological foundations for every scale of Forex operation.
      </p>
    </div>

    <!-- 4 Cards Grid -->
    <div class="row g-4 services-v2-cards-row">

      <!-- Card 1: Offshore Licensing -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="100">
        <div class="service-v2-card">
          <div class="service-v2-icon-wrap">
            <img src="<?= $img; ?>/offshore-licensing.png" alt="Offshore Licensing">
          </div>
          <h3 class="service-v2-card-title">Offshore<br>Licensing</h3>
          <div class="service-v2-divider"></div>
          <p class="service-v2-desc">
            Rapid registration in Vanuatu (VFSC), Mauritius (FSC), or Seychelles (FSA). Ideal for emerging brokers seeking minimal capital requirements and speedy setup.
          </p>
        </div>
      </div>

      <!-- Card 2: Tier-1 Onshore Setup -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="200">
        <div class="service-v2-card">
          <div class="service-v2-icon-wrap">
            <img src="<?= $img; ?>/tier-1-onshore.png" alt="Tier-1 Onshore Setup">
          </div>
          <h3 class="service-v2-card-title">Tier-1<br>Onshore Setup</h3>
          <div class="service-v2-divider"></div>
          <p class="service-v2-desc">
            Establish high credibility in regulated environments such as Cyprus (CySEC), the UK (FCA), or Australia (ASIC) with full passporting rights.
          </p>
        </div>
      </div>

      <!-- Card 3: Corporate Banking & PSPs -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="300">
        <div class="service-v2-card">
          <div class="service-v2-icon-wrap">
            <img src="<?= $img; ?>/corporate-banking.png" alt="Corporate Banking & PSPs">
          </div>
          <h3 class="service-v2-card-title">Corporate<br>Banking &amp; PSPs</h3>
          <div class="service-v2-divider"></div>
          <p class="service-v2-desc">
            Secure multi-currency corporate accounts, client segregated bank accounts, and integrated Payment Service Providers (PSPs) for smooth processing.
          </p>
        </div>
      </div>

      <!-- Card 4: Turnkey Tech Integration -->
      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="750" data-aos-delay="400">
        <div class="service-v2-card">
          <div class="service-v2-icon-wrap">
            <img src="<?= $img; ?>/turn-key-tech.png" alt="Turnkey Tech Integration">
          </div>
          <h3 class="service-v2-card-title">Turnkey Tech<br>Integration</h3>
          <div class="service-v2-divider"></div>
          <p class="service-v2-desc">
            Deploy custom FX CRM systems, client portals, Liquidity Provider (LP) bridge connectivity, and trading platforms ready for client onboarding.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- =========================================
     THEME 2 - SECTION 5: HOW WE GET YOU LICENSED (UPDATED CSS)
========================================= -->
<style>
  .how-licensed-v2 {
    padding: 95px 0;
    background-color: #ffffff;
    overflow: hidden;
  }

  /* Left Interactive Quadrant Process Diagram */
  .quad-process-stage {
    position: relative;
    width: 100%;
    max-width: 470px;
    height: 455px;
    margin: 0 auto;
    user-select: none;
  }

  /* Individual Step Object: No outer drop-shadow overlay on hover so connectors never overlap */
  .quad-step-object {
    position: absolute;
    z-index: 2;
  }

  .quad-step-object:hover {
    z-index: 6;
  }

  .quad-wedge,
  .quad-meta {
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), color 0.3s ease;
  }

  .quad-step-object:hover .quad-wedge {
    transform: translateY(-4px) scale(1.03);
  }

  .quad-step-object:hover .quad-meta {
    transform: translateY(-4px);
  }

  /* Step 1: Top-Right Gold Quadrant */
  .step-obj-1 {
    top: 52px;
    left: 238px;
    width: 112px;
    height: 112px;
  }

  .step-obj-1 .quad-wedge {
    width: 112px;
    height: 112px;
    background-color: #a87e2d;
    border-radius: 0 112px 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 14px 0 0 12px;
  }

  .step-obj-1 .quad-connector {
    position: absolute;
    top: 42px;
    left: 90px;
    width: 92px;
    height: 138px;
    border: 13px solid #b4b6b9;
    border-left: none;
    border-radius: 0 90px 90px 0;
    pointer-events: none;
    z-index: -1;
  }

  /* Aligned cleanly above-right of Quadrant 1 & clear of the grey arc */
  .step-obj-1 .quad-meta {
    position: absolute;
    top: -66px;
    left: 118px;
    text-align: left;
    width: 130px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  /* Step 2: Middle-Right Amber Quadrant */
  .step-obj-2 {
    top: 175px;
    left: 238px;
    width: 112px;
    height: 112px;
  }

  .step-obj-2 .quad-wedge {
    width: 112px;
    height: 112px;
    background-color: #e4b159;
    border-radius: 0 0 112px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 0 14px 12px;
  }

  .step-obj-2 .quad-meta {
    position: absolute;
    top: 84px;
    left: 118px;
    text-align: left;
    width: 130px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  /* Step 3: Middle-Left Dark Navy Quadrant */
  .step-obj-3 {
    top: 175px;
    left: 114px;
    width: 112px;
    height: 112px;
  }

  .step-obj-3 .quad-wedge {
    width: 112px;
    height: 112px;
    background-color: #06335e;
    border-radius: 112px 0 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 14px 12px 0 0;
  }

  .step-obj-3 .quad-connector-h {
    position: absolute;
    top: 49px;
    left: 112px;
    width: 14px;
    height: 13px;
    background-color: #b4b6b9;
    pointer-events: none;
  }

  .step-obj-3 .quad-connector-arc {
    position: absolute;
    top: 50px;
    left: -72px;
    width: 90px;
    height: 128px;
    border: 13px solid #b4b6b9;
    border-right: none;
    border-radius: 80px 0 0 80px;
    pointer-events: none;
    z-index: -1;
  }

  .step-obj-3 .quad-meta {
    position: absolute;
    top: -66px;
    left: -124px;
    text-align: center;
    width: 125px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* Step 4: Bottom-Left Light Sky Quadrant */
  .step-obj-4 {
    top: 298px;
    left: 114px;
    width: 112px;
    height: 112px;
  }

  .step-obj-4 .quad-wedge {
    width: 112px;
    height: 112px;
    background-color: #9ec0df;
    border-radius: 0 0 0 112px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 12px 14px 0;
  }

  .step-obj-4 .quad-meta {
    position: absolute;
    top: 76px;
    left: -116px;
    text-align: center;
    width: 115px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* Quadrant Numbers */
  .quad-num {
    font-size: 2.35rem;
    font-weight: 700;
    color: #ffffff;
    line-height: 1;
    position: relative;
    z-index: 3;
  }

  /* Step Icon + Label Alignment */
  .quad-icon {
    font-size: 2.05rem;
    color: #a6a8ab;
    line-height: 1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 7px;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  .quad-step-object:hover .quad-icon {
    color: var(--gold-primary);
    transform: translateY(-2px);
  }

  .quad-label {
    font-size: 0.92rem;
    font-weight: 700;
    color: #2b2f36;
    line-height: 1.25;
  }

  /* Right Side Content */
  .licensed-v2-heading {
    font-size: clamp(1.75rem, 2.8vw, 2.35rem);
    font-weight: 700;
    color: #0b0d10;
    line-height: 1.22;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
  }

  .licensed-v2-sub {
    font-size: 0.96rem;
    line-height: 1.65;
    color: #6b7280;
    max-width: 390px;
    margin-bottom: 22px;
  }

  .licensed-v2-bar {
    width: 66px;
    height: 2px;
    background-color: var(--gold-primary);
    margin-bottom: 30px;
  }

  /* 2x2 Step Breakdown Grid on Right */
  .step-detail-box {
    padding: 8px 10px;
    border-radius: 10px;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .step-detail-box:hover {
    transform: translateY(-4px);
    background-color: #fcfaf5;
  }

  .step-detail-num {
    font-size: 1.35rem;
    font-weight: 600;
    color: var(--gold-primary);
    line-height: 1.2;
    margin-bottom: 6px;
  }

  .step-detail-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 8px;
  }

  .step-detail-desc {
    font-size: 0.86rem;
    line-height: 1.65;
    color: #5b616a;
    margin: 0;
  }

  /* Tablet & Mobile Responsive Layout */
  @media (max-width: 1199.98px) and (min-width: 576px) {
    .quad-process-stage {
      transform: scale(0.86);
      transform-origin: center top;
      height: 400px;
    }
  }

  @media (max-width: 575.98px) {
    .quad-process-stage {
      height: auto;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
    .quad-step-object {
      position: static;
      background: #faf9f6;
      border: 1px solid #ece8df;
      border-radius: 14px;
      padding: 16px 12px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    .quad-connector,
    .quad-connector-h,
    .quad-connector-arc {
      display: none;
    }
    .quad-wedge {
      width: 68px !important;
      height: 68px !important;
      border-radius: 16px !important;
      padding: 0 !important;
      margin-bottom: 10px;
    }
    .quad-num {
      font-size: 1.5rem;
    }
    .quad-meta {
      position: static !important;
      width: auto !important;
      text-align: center !important;
      align-items: center !important;
    }
    .quad-icon {
      display: none;
    }
    .quad-label {
      font-size: 0.85rem;
    }
  }

  @media (max-width: 991.98px) {
    .how-licensed-v2 {
      padding: 65px 0;
    }
    .licensed-v2-right {
      margin-top: 20px;
    }
  }
</style>

<!-- =========================================
     THEME 2 - SECTION 6: JURISDICTION COMPARISON MATRIX (NO VERTICAL SCROLL - FULL HEIGHT)
========================================= -->
<style>
  .matrix-v2-section {
    background-color: #ececf0;
    padding: 90px 0 100px;
  }

  .matrix-v2-header {
    text-align: center;
    margin-bottom: 42px;
  }

  .matrix-v2-title {
    font-size: clamp(1.75rem, 3vw, 2.35rem);
    font-weight: 700;
    color: #0b0d10;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
  }

  .matrix-v2-subtitle {
    font-size: 0.94rem;
    color: #6b7280;
    margin: 0;
  }

  .matrix-v2-wrapper {
    max-width: 1140px;
    margin: 0 auto;
    height: auto;
    max-height: none;
    overflow: visible;
  }

  /* Ensure no internal vertical scrollbar is ever created */
  .matrix-v2-wrapper .table-responsive {
    height: auto !important;
    max-height: none !important;
    overflow-y: visible !important;
    overflow-x: auto;
  }

  .matrix-v2-table {
    width: 100%;
    height: auto;
    border-collapse: collapse;
    margin-bottom: 0;
  }

  /* Header Bar matching warm stone tint in screenshot */
  .matrix-v2-table thead th {
    background-color: #dedbd4;
    color: #111827;
    font-size: 0.9rem;
    font-weight: 700;
    padding: 15px 18px;
    border: none;
    white-space: nowrap;
  }

  .matrix-v2-table thead th:last-child {
    text-align: right;
  }

  /* Body Rows with clean bottom hairline dividers */
  .matrix-v2-table tbody tr {
    border-bottom: 1px solid #d5d7dc;
    transition: background-color 0.28s ease, transform 0.28s ease;
  }

  .matrix-v2-table tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.65);
  }

  .matrix-v2-table tbody td {
    padding: 18px 18px;
    font-size: 0.9rem;
    color: #374151;
    vertical-align: middle;
    border: none;
    white-space: nowrap;
  }

  .matrix-v2-jur {
    font-weight: 600;
    color: #111827 !important;
  }

  .matrix-v2-cap {
    text-align: right !important;
    font-weight: 700;
    color: var(--gold-primary) !important;
    transition: transform 0.25s ease, color 0.25s ease;
  }

  .matrix-v2-table tbody tr:hover .matrix-v2-cap {
    transform: translateX(-3px);
    color: var(--gold-hover) !important;
  }

  @media (max-width: 767.98px) {
    .matrix-v2-section {
      padding: 65px 0 75px;
    }
    .matrix-v2-table thead th,
    .matrix-v2-table tbody td {
      padding: 14px 12px;
      font-size: 0.84rem;
    }
  }
</style>

<!-- =========================================
     THEME 2 - SECTION 6: HTML CONTENT
========================================= -->
<section id="jurisdiction-matrix-v2" class="matrix-v2-section">
  <div class="container">

    <!-- Section Header -->
    <div class="matrix-v2-header" data-aos="fade-up" data-aos-duration="750">
      <h2 class="matrix-v2-title">Jurisdiction Comparison Matrix</h2>
      <p class="matrix-v2-subtitle">
        Select the jurisdiction that aligns with your capital requirements and operating timeline.
      </p>
    </div>

    <!-- Full-Height Comparison Table (All Rows Visible Without Vertical Scroll) -->
    <div class="matrix-v2-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="120">
      <div class="table-responsive">
        <table class="table matrix-v2-table">
          <thead>
            <tr>
              <th>Jurisdiction</th>
              <th>License Type</th>
              <th>Est. Timeline</th>
              <th>Reputation Level</th>
              <th>Min. Capital</th>
            </tr>
          </thead>
          <tbody>
            <tr data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
              <td class="matrix-v2-jur">Vanuatu (VFSC)</td>
              <td>Financial Dealers License</td>
              <td>2 - 3 Months</td>
              <td>Offshore / Emerging</td>
              <td class="matrix-v2-cap">Low</td>
            </tr>
            <tr data-aos="fade-up" data-aos-duration="600" data-aos-delay="220">
              <td class="matrix-v2-jur">Mauritius (FSC)</td>
              <td>SEC / Investment Dealer</td>
              <td>3 - 5 Months</td>
              <td>Mid-Shore Preferred</td>
              <td class="matrix-v2-cap">Moderate</td>
            </tr>
            <tr data-aos="fade-up" data-aos-duration="600" data-aos-delay="290">
              <td class="matrix-v2-jur">Labuan, Malaysia (LFSA)</td>
              <td>Money Broking License</td>
              <td>4 - 6 Months</td>
              <td>Asian Financial Hub</td>
              <td class="matrix-v2-cap">Moderate</td>
            </tr>
            <tr data-aos="fade-up" data-aos-duration="600" data-aos-delay="360">
              <td class="matrix-v2-jur">Cyprus (CySEC)</td>
              <td>CIF (EU Passporting)</td>
              <td>6 - 9 Months</td>
              <td>Tier-1 Onshore</td>
              <td class="matrix-v2-cap">High</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>


<!-- =========================================
     THEME 2 - SECTION 7: LAUNCH YOUR BROKERAGE CTA (ADD TO YOUR EXISTING CSS)
========================================= -->
<style>
  .launch-cta-v2-section {
    background-color: #ffffff;
    padding: 90px 0 95px;
    overflow: hidden;
  }

  .launch-cta-v2-content {
    max-width: 470px;
  }

  .launch-cta-v2-heading {
    font-size: clamp(1.75rem, 2.8vw, 2.3rem);
    font-weight: 700;
    color: #0b0d10;
    line-height: 1.3;
    margin-bottom: 25px;
    letter-spacing: 1px;
  }

  .launch-cta-v2-desc {
    font-size: 1.2rem;
    line-height: 1.5;
    color: #5b616a;
    margin-bottom: 30px;
    font-weight: 400;
  }

  .btn-v2-expert-pill {
    display: inline-block;
    background-color: #a87e2d;
    color: #ffffff;
    font-size: 0.88rem;
    font-weight: 500;
    padding: 12px 34px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(168, 126, 45, 0.24);
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.3s ease,
                box-shadow 0.35s ease;
  }

  .btn-v2-expert-pill:hover {
    background-color: #8f6922;
    color: #ffffff;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 12px 26px rgba(168, 126, 45, 0.36);
  }

  /* Right Side 3D Illustration Showcase with Smooth Hover Animation */
  .launch-cta-visual-box {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
  }

  .launch-cta-visual-box img {
    width: 100%;
    max-width: 560px;
    height: auto;
    object-fit: contain;
    mix-blend-mode: multiply;
    border-radius: 16px;
    transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                filter 0.45s ease;
  }

  @media (max-width: 991.98px) {
    .launch-cta-v2-section {
      padding: 65px 0 75px;
    }
    .launch-cta-v2-content {
      max-width: 100%;
      margin-bottom: 16px;
    }
  }
</style>

<!-- =========================================
     THEME 2 - SECTION 7: HTML CONTENT
========================================= -->
<section id="launch-brokerage-cta" class="launch-cta-v2-section">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Column: Heading, Description & Pill CTA -->
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="750">
        <div class="launch-cta-v2-content">
          <h2 class="launch-cta-v2-heading">
            Launch Your Brokerage<br>
            With Devotion Global
          </h2>
          <p class="launch-cta-v2-desc">
            Speak with our corporate licensing specialists to discuss your business model, timeline, and jurisdiction selection.
          </p>
          <a href="#contact" class="btn-v2-expert-pill">
            Consult an Expert Today
          </a>
        </div>
      </div>

      <!-- Right Column: 3D Licensing & Brokerage Visual -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
        <div class="launch-cta-visual-box">
          <img src="<?= $img; ?>/Devotion-Global-Licensing-Launch.png" alt="Launch Your Brokerage With Devotion Global">
        </div>
      </div>

    </div>
  </div>
</section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
