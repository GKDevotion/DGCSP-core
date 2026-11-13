<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/private-family-wealth';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Check actual file on disk (without query string), then append version
$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp')
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg?v=' . FILE_VERSISON;
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
      "description": "Global BPO and specialized financial customer service provider offering 24/7 private wealth support, family office management, and UHNWI client desks.",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Private Wealth Concierge",
        "telephone": "+1-800-555-0199",
        "availableLanguage": ["English", "Mandarin", "Spanish", "Arabic", "French"]
      }
    },
    {
      "@type": "FinancialProduct",
      "@id": "https://www.devotionglobal.com/private-wealth-services#service",
      "name": "Devotion Global Family Office & Private Wealth Services",
      "provider": {
        "@id": "https://www.devotionglobal.com/#organization"
      },
      "description": "White-glove family office administration, high-net-worth client support, consolidated asset reporting, and discrete transaction handling.",
      "areaServed": "Global",
      "category": "Private Wealth & Family Office Management"
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.devotionglobal.com/private-wealth-services#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What private wealth and family office services does Devotion Global provide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Devotion Global provides 24/7 dedicated wealth client desks, consolidated multi-asset performance reporting, trust and estate administration support, cross-border KYC screening, and bespoke concierge services for UHNWIs."
          }
        },
        {
          "@type": "Question",
          "name": "How does Devotion Global maintain discretion and privacy for Family Offices?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We strictly enforce zero-trust access protocols, SOC 1 & 2 Type II compliance, localized data residency, and dedicated non-disclosure frameworks tailored to high-profile families."
          }
        }
      ]
    }
  ]
}
</script>

<!-- Shared inner-page theme -->
<link rel="stylesheet" href="<?= BASE_URL . BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<style>
  :root {
    --pw-gold: #b08843;
    --pw-gold-dark: #967234;
    --pw-navy: #034687;
    --pw-bg-light: #f4f4f5;
    --pw-border: #e5e7eb;
    --pw-text-dark: #111111;
    --pw-text-muted: #55595e;
  }

  /* =========================================================
     2. BESPOKE FAMILY OFFICE SOLUTIONS (SERVICES GRID)
     ========================================================= */
  .services-section {
    background-color: var(--pw-bg-light);
    padding: 5.5rem 0;
  }

  .services-pill {
    display: inline-block;
    background-color: var(--pw-gold);
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.03em;
    padding: 0.55rem 2.35rem;
    border-radius: 50px;
    box-shadow: 0 6px 18px rgba(176, 136, 67, 0.25);
  }

  .services-heading {
    font-size: clamp(1.85rem, 3.1vw, 2.55rem);
    color: var(--pw-text-dark);
    letter-spacing: -0.02em;
    line-height: 1.2;
  }

  .services-subheading {
    font-size: clamp(0.95rem, 1.15vw, 1.05rem);
    color: #6b7280;
    line-height: 1.6;
    max-width: 560px;
  }

  .service-card {
    background-color: #ffffff;
    border: 1px solid var(--pw-border);
    border-radius: 16px;
    padding: 2.15rem 2rem;
    position: relative;
    overflow: hidden;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
  }

  .service-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 3px;
    background-color: var(--pw-gold);
    transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .service-card:hover {
    transform: translateY(-6px);
    border-color: rgba(176, 136, 67, 0.45);
    box-shadow: 0 18px 40px rgba(17, 17, 17, 0.07);
  }

  .service-card:hover::after {
    width: 100%;
  }

  .service-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
  }

  .service-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1.32;
    color: var(--pw-text-dark);
    margin-bottom: 0;
    transition: color 0.3s ease;
  }

  .service-card:hover .service-card-title {
    color: var(--pw-gold-dark);
  }

  .service-icon-wrap {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .service-icon-wrap img {
    width: 48px;
    height: 48px;
    object-fit: contain;
  }

  .service-card:hover .service-icon-wrap {
    transform: scale(1.08) rotate(-2deg);
  }

  .service-card-divider {
    width: 72px;
    height: 2px;
    background-color: var(--pw-gold);
    margin: 1.15rem 0 1.25rem;
    transition: width 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .service-card:hover .service-card-divider {
    width: 105px;
  }

  .service-card-desc {
    font-size: 0.94rem;
    line-height: 1.65;
    color: var(--pw-text-muted);
    margin-bottom: 0;
  }

  /* =========================================================
     3. DISCRETION & PRECISION (INTERACTIVE LEAF DIAGRAM)
     ========================================================= */
  .discretion-section {
    background-color: #ffffff;
    border-bottom: 2px solid var(--pw-gold);
  }

  .section-heading {
    font-size: clamp(1.85rem, 3vw, 2.55rem);
    line-height: 1.22;
    letter-spacing: -0.02em;
    color: var(--pw-text-dark);
  }

  .gold-divider {
    width: 72px;
    height: 2px;
    background-color: var(--pw-gold);
  }

  .graphic-stage {
    max-width: 460px;
    animation: gentleBreathe 6s ease-in-out infinite;
    transform-origin: bottom center;
  }

  .main-tree-img {
    mix-blend-mode: multiply;
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
  }

  @keyframes gentleBreathe {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-5px); }
  }

  .leaf-hotspot {
    position: absolute;
    background: transparent;
    border: 2px solid transparent;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    padding: 0;
    outline: none;
  }

  .hotspot-safeguards {
    top: 0%;
    left: 17.5%;
    width: 34.5%;
    height: 30.5%;
    border-radius: 0 60px 0 55px;
  }

  .hotspot-confidentiality {
    top: 21%;
    left: 55%;
    width: 45%;
    height: 40%;
    border-radius: 70px 0 70px 0;
  }

  .hotspot-continuity {
    top: 38.5%;
    left: 0%;
    width: 52%;
    height: 46.5%;
    border-radius: 0 90px 0 95px;
  }

  .leaf-hotspot.is-active,
  .leaf-hotspot:hover,
  .leaf-hotspot:focus-visible {
    background: rgba(255, 255, 255, 0.14);
    box-shadow: 0 12px 30px rgba(176, 136, 67, 0.25);
    transform: scale(1.025);
  }

  .hotspot-safeguards.is-active,
  .hotspot-safeguards:hover,
  .hotspot-safeguards:focus-visible {
    box-shadow: 0 12px 30px rgba(3, 70, 135, 0.28);
  }

  .feature-item {
    cursor: pointer;
    border-left: 3px solid transparent;
    transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    margin-left: -1rem;
  }

  .feature-title {
    font-size: 1.15rem;
    color: var(--pw-text-dark);
    transition: color 0.3s ease;
  }

  .feature-desc {
    font-size: 0.96rem;
    line-height: 1.6;
    color: var(--pw-text-muted);
  }

  .feature-item:hover,
  .feature-item:focus-within,
  .feature-item.is-active {
    background-color: #faf8f5;
    border-left-color: var(--pw-gold);
    transform: translateX(8px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
  }

  .feature-item[data-feature="safeguards"]:hover,
  .feature-item[data-feature="safeguards"]:focus-within,
  .feature-item[data-feature="safeguards"].is-active {
    border-left-color: var(--pw-navy);
  }

  .feature-item:hover .feature-title,
  .feature-item.is-active .feature-title {
    color: var(--pw-gold);
  }

  .feature-item[data-feature="safeguards"]:hover .feature-title,
  .feature-item[data-feature="safeguards"].is-active .feature-title {
    color: var(--pw-navy);
  }

  .feature-list.has-active .feature-item:not(.is-active) {
    opacity: 0.55;
  }

  /* =========================================================
     4. STATS, GOVERNANCE BRIDGE & OPERATIONS BANNER
     ========================================================= */
  .operations-wrapper {
    background-color: var(--pw-gold);
  }

  /* Part 1: Gold Stats Band */
  .gold-stats-band {
    background-color: var(--pw-gold);
    padding-top: 4.25rem;
    padding-bottom: 10.5rem;
    margin-bottom: 0;
  }

  .stat-col {
    position: relative;
  }

  @media (min-width: 992px) {
    .stat-col:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 10%;
      height: 80%;
      width: 1px;
      background-color: rgba(255, 255, 255, 0.35);
      transition: background-color 0.3s ease, height 0.3s ease;
    }

    .stat-col:hover::after {
      background-color: rgba(255, 255, 255, 0.75);
      height: 90%;
      top: 5%;
    }
  }

  .stat-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .stat-box:hover {
    transform: translateY(-4px);
  }

  .stat-number {
    font-size: clamp(2rem, 3.2vw, 2.75rem);
    line-height: 1.15;
    letter-spacing: -0.02em;
  }

  .stat-label {
    font-size: 0.98rem;
    line-height: 1.45;
    opacity: 0.94;
  }

  /* Part 1.5: Zero-Height Floating Governance Card */
  .governance-bridge {
    position: relative;
    height: 0;
    overflow: visible;
    z-index: 10;
    pointer-events: none;
  }

  .governance-bridge > .container {
    transform: translateY(-64%);
  }

  .governance-card {
    pointer-events: auto;
    max-width: 950px;
    margin-left: auto;
    margin-right: auto;
    padding: 2.15rem 2.25rem 1.7rem;
    background: rgba(255, 255, 255, 0.62);
    border: 1.5px solid #3898ec;
    border-radius: 16px;
    box-shadow: 0 18px 40px rgba(17, 17, 17, 0.08);
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.4s ease;
  }

  .governance-card:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, 0.76);
    box-shadow: 0 24px 50px rgba(17, 17, 17, 0.12);
  }

  .governance-title {
    font-size: clamp(1.35rem, 2.2vw, 1.78rem);
    color: var(--pw-text-dark);
    letter-spacing: -0.015em;
    margin-bottom: 1.45rem;
  }

  .governance-list {
    gap: 0.5rem 0.95rem;
  }

  .governance-item {
    font-size: clamp(0.84rem, 1vw, 0.94rem);
    font-weight: 500;
    color: #2b2f33;
    padding: 0.2rem 0.35rem;
    transition: color 0.25s ease, transform 0.25s ease;
    cursor: default;
    margin-top: 55px;
  }

  .governance-item:hover {
    color: #000000;
    transform: translateY(-2px);
  }

  .governance-divider {
    width: 1px;
    height: 15px;
    background-color: rgba(43, 47, 51, 0.35);
    margin-top: 55px;
  }

  /* Part 2: Full-Bleed Desk Banner */
  .operations-banner {
    min-height: 460px;
    margin-top: 0;
    padding-top: 5rem;
    background-color: #ffffff;
    overflow: hidden;
  }

  .operations-bg-layer {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: left center;
    background-repeat: no-repeat;
    animation: subtleDeskDrift 16s ease-in-out infinite alternate;
    will-change: transform;
  }

  @keyframes subtleDeskDrift {
    0% { transform: scale(1) translateX(0); }
    100% { transform: scale(1.035) translateX(-0.5%); }
  }

  .operations-mobile-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.8) 0%,
      rgba(255, 255, 255, 0.95) 55%,
      rgba(255, 255, 255, 0.99) 100%
    );
    z-index: 1;
  }

  .operations-title {
    font-size: clamp(1.75rem, 2.8vw, 2.45rem);
    line-height: 1.25;
    letter-spacing: -0.02em;
    color: var(--pw-text-dark);
  }

  .operations-subtitle {
    font-size: clamp(0.98rem, 1.2vw, 1.1rem);
    line-height: 1.65;
    color: var(--pw-text-muted);
  }

  @media (min-width: 1200px) {
    .operations-banner {
      min-height: 490px;
    }
  }

  @media (max-width: 767.98px) {
    .gold-stats-band {
      padding-bottom: 11.5rem;
    }
    .governance-bridge > .container {
      transform: translateY(-62%);
    }
    .governance-card {
      padding: 1.65rem 1.25rem 1.35rem;
    }
    .governance-item {
      background: rgba(255, 255, 255, 0.6);
      padding: 0.35rem 0.75rem;
      border-radius: 20px;
    }
    .operations-banner {
      padding-top: 5.5rem;
    }
    .feature-item {
      margin-left: 0;
    }
  }

  /* Respect user motion preferences */
  @media (prefers-reduced-motion: reduce) {
    .graphic-stage,
    .operations-bg-layer {
      animation: none;
    }
  }
</style>

<main>

<!-- 1. HERO -->
<header class="ip-hero">
  <img 
    src="<?= $img ?>/private-family-wealth-hero-bg-1.jpg?v=<?= FILE_VERSISON ?>" 
    alt="Private Wealth and Family Office Operations" 
    class="ip-hero__bg" 
    width="2300" 
    height="795" 
    fetchpriority="high"
  >
  <div class="container ip-hero__content">
    <div class="row">
      <div class="col-lg-6 col-md-8">
        <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Bespoke Wealth Operations</p>
        <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
        <h1 data-aos="fade-right" data-aos-delay="150">Private Wealth &amp;<br><span class="ip-gold">Family Office Services</span></h1>
        <p data-aos="fade-right" data-aos-delay="300">Delivering white-glove client support, consolidated asset reporting, and administrative infrastructure tailored exclusively for family offices, wealth managers, and Ultra-HNW families worldwide.</p>
        <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request Private Consultation</a>
      </div>
    </div>
  </div>
</header>

<!-- 2. CORE SERVICES (OUR BESPOKE FAMILY OFFICE SOLUTIONS) -->
<section class="services-section" id="services">
  <div class="container">
    
    <!-- Centered Section Header -->
    <div class="text-center mb-5">
      <div data-aos="fade-down" data-aos-duration="700">
        <span class="services-pill mb-3">Our Services</span>
      </div>
      
      <h2 class="services-heading fw-bold mb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        Our Bespoke Family Office Solutions
      </h2>
      
      <p class="services-subheading mx-auto mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
        Tailored corporate finance and regulatory tax advisory modules designed for multinational holdings and cross-border expansion.
      </p>
    </div>

    <!-- 3x2 Responsive Grid -->
    <div class="row g-4">
      
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
        <div class="service-card h-100">
          <div class="service-card-header">
            <h3 class="service-card-title">Dedicated Wealth<br>Desk Support</h3>
            <div class="service-icon-wrap">
              <img src="<?= $img ?>/desk-support.svg?v=<?= FILE_VERSISON ?>" alt="Dedicated Wealth Desk Support" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="service-card-divider"></div>
          <p class="service-card-desc">
            24/7 direct-access support desk offering high-touch, confidential assistance for principal family members and wealth advisors.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="800">
        <div class="service-card h-100">
          <div class="service-card-header">
            <h3 class="service-card-title">Consolidated<br>Asset Reporting</h3>
            <div class="service-icon-wrap">
              <img src="<?= $img ?>/assets-reporting.svg?v=<?= FILE_VERSISON ?>" alt="Consolidated Asset Reporting" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="service-card-divider"></div>
          <p class="service-card-desc">
            Aggregated operational reporting across multi-bank accounts, liquid investments, private equity holdings, real estate, and passion assets.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240" data-aos-duration="800">
        <div class="service-card h-100">
          <div class="service-card-header">
            <h3 class="service-card-title">Cross-Border<br>Compliance &amp; KYC</h3>
            <div class="service-icon-wrap">
              <img src="<?= $img ?>/complience-kyc.svg?v=<?= FILE_VERSISON ?>" alt="Cross-Border Compliance & KYC" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="service-card-divider"></div>
          <p class="service-card-desc">
            Streamlined identity verification, source of wealth (SoW) documentation support, and international regulatory alignment.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="service-card h-100">
          <div class="service-card-header">
            <h3 class="service-card-title">Trust &amp; Estate<br>Administration</h3>
            <div class="service-icon-wrap">
              <img src="<?= $img ?>/trust-estate.svg?v=<?= FILE_VERSISON ?>" alt="Trust & Estate Administration" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="service-card-divider"></div>
          <p class="service-card-desc">
            Administrative coordination for fiduciary distributions, estate document maintenance, and multi-generational trust communication.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="220" data-aos-duration="800">
        <div class="service-card h-100">
          <div class="service-card-header">
            <h3 class="service-card-title">Family Portal<br>Tech Concierge</h3>
            <div class="service-icon-wrap">
              <img src="<?= $img ?>/family-portal.svg?v=<?= FILE_VERSISON ?>" alt="Family Portal Tech Concierge" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="service-card-divider"></div>
          <p class="service-card-desc">
            Personalized technical onboarding and continuous support for private family portals, vault storage, and secure communications.
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="340" data-aos-duration="800">
        <div class="service-card h-100">
          <div class="service-card-header">
            <h3 class="service-card-title">Lifestyle &amp;<br>Administrative</h3>
            <div class="service-icon-wrap">
              <img src="<?= $img ?>/life-style.svg?v=<?= FILE_VERSISON ?>" alt="Lifestyle & Administrative" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="service-card-divider"></div>
          <p class="service-card-desc">
            Specialized middle-office execution for capital wire authorizations, bill pay tracking, and discrete administrative requests.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3. DISCRETION & PRECISION -->
<section class="discretion-section position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-end">
      
      <!-- Left Column: Interactive Graphic -->
      <div class="col-lg-6 order-2 order-lg-1 pt-4 pt-lg-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="graphic-stage position-relative mx-auto">
          
          <img 
            src="<?= $img ?>/built-4-uncompromised.jpg?v=<?= FILE_VERSISON ?>" 
            alt="Institutional Safeguards, Multi-Generational Continuity, and Absolute Confidentiality" 
            class="img-fluid w-100 d-block main-tree-img"
            loading="lazy"
          >

          <!-- Interactive Hotspots mapped to each leaf -->
          <button 
            type="button"
            class="leaf-hotspot hotspot-safeguards" 
            data-target="safeguards"
            aria-label="Highlight Institutional Safeguards"
          ></button>

          <button 
            type="button"
            class="leaf-hotspot hotspot-confidentiality" 
            data-target="confidentiality"
            aria-label="Highlight Absolute Confidentiality"
          ></button>

          <button 
            type="button"
            class="leaf-hotspot hotspot-continuity" 
            data-target="continuity"
            aria-label="Highlight Multi-Generational Continuity"
          ></button>

        </div>
      </div>

      <!-- Right Column: Editorial Content -->
      <div class="col-lg-6 order-1 order-lg-2 py-5 ps-lg-5 align-self-center">
        
        <div data-aos="fade-left" data-aos-duration="800">
          <h2 class="section-heading fw-bold text-dark mb-3">
            Built for Uncompromised<br>
            Discretion &amp; Precision
          </h2>
          <div class="gold-divider mb-4" data-aos="zoom-in-right" data-aos-delay="200" data-aos-duration="800"></div>
        </div>

        <div class="feature-list mt-4">
          
          <!-- Item 1 -->
          <div 
            class="feature-item p-3 rounded-3 mb-2" 
            data-feature="confidentiality"
            tabindex="0"
            data-aos="fade-up" 
            data-aos-delay="150"
          >
            <h3 class="feature-title fw-bold mb-1">Absolute Confidentiality</h3>
            <p class="feature-desc mb-0">
              Rigorous NDAs and zero-trust protocol access ensure family assets and identity remain completely protected.
            </p>
          </div>

          <!-- Item 2 -->
          <div 
            class="feature-item p-3 rounded-3 mb-2" 
            data-feature="safeguards"
            tabindex="0"
            data-aos="fade-up" 
            data-aos-delay="300"
          >
            <h3 class="feature-title fw-bold mb-1">Institutional Safeguards</h3>
            <p class="feature-desc mb-0">
              Combining the intimacy of a single-family office with bank-grade security and SOC-certified operational redundancy.
            </p>
          </div>

          <!-- Item 3 -->
          <div 
            class="feature-item p-3 rounded-3" 
            data-feature="continuity"
            tabindex="0"
            data-aos="fade-up" 
            data-aos-delay="450"
          >
            <h3 class="feature-title fw-bold mb-1">Multi-Generational Continuity</h3>
            <p class="feature-desc mb-0">
              Support workflows structured to seamlessly transition knowledge and portal navigation across family generations.
            </p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- 4. STATS, GOVERNANCE BRIDGE & OPERATIONS CTA -->
<section class="operations-wrapper overflow-hidden">

  <!-- Part 1: Gold Stats Strip -->
  <div class="gold-stats-band">
    <div class="container">
      <div class="row g-4 g-lg-0 justify-content-center align-items-stretch">
        
        <div class="col-6 col-lg-3 stat-col" data-aos="fade-up" data-aos-delay="0">
          <div class="stat-box h-100 px-3 px-xl-4">
            <div class="stat-number fw-bold text-white mb-1">
              <span class="counter-value" data-prefix="$" data-target="25" data-suffix="B+">$25B+</span>
            </div>
            <p class="stat-label text-white mb-0">Family Wealth<br>Supported</p>
          </div>
        </div>

        <div class="col-6 col-lg-3 stat-col" data-aos="fade-up" data-aos-delay="120">
          <div class="stat-box h-100 px-3 px-xl-4">
            <div class="stat-number fw-bold text-white mb-1">
              <span class="counter-value" data-target="24" data-suffix="/7">24/7</span>
            </div>
            <p class="stat-label text-white mb-0">Private Desk<br>Access</p>
          </div>
        </div>

        <div class="col-6 col-lg-3 stat-col" data-aos="fade-up" data-aos-delay="240">
          <div class="stat-box h-100 px-3 px-xl-4">
            <div class="stat-number fw-bold text-white mb-1">
              <span class="counter-value" data-target="100" data-suffix="%">100%</span>
            </div>
            <p class="stat-label text-white mb-0">Confidentiality<br>Guarantee</p>
          </div>
        </div>

        <div class="col-6 col-lg-3 stat-col" data-aos="fade-up" data-aos-delay="360">
          <div class="stat-box h-100 px-3 px-xl-4">
            <div class="stat-number fw-bold text-white mb-1">
              <span class="counter-value" data-target="5" data-suffix=" Min">5 Min</span>
            </div>
            <p class="stat-label text-white mb-0">Priority<br>Escalation SLA</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Part 1.5: Overlapping Frosted Governance Bridge Card -->
  <div class="governance-bridge">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-9">
          
          <div 
            class="governance-card text-center" 
            data-aos="zoom-in-up" 
            data-aos-duration="850"
          >
            <h3 class="governance-title fw-bold">
              Security &amp; Governance Framework
            </h3>

            <ul class="governance-list list-unstyled d-flex flex-wrap justify-content-center align-items-center mb-0">
              <li class="governance-item" data-aos="fade-up" data-aos-delay="150">
                SOC 2 Type II Certified
              </li>
              <li class="governance-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="governance-item" data-aos="fade-up" data-aos-delay="250">
                ISO 27001 Data Vault
              </li>
              <li class="governance-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="governance-item" data-aos="fade-up" data-aos-delay="350">
                Zero-Trust Data Policy
              </li>
              <li class="governance-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="governance-item" data-aos="fade-up" data-aos-delay="450">
                GDPR &amp; Global Privacy
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Part 2: Full-Bleed Desk Graphic & Right-Aligned Content -->
  <div class="operations-banner position-relative d-flex align-items-center">
    
    <div 
      class="operations-bg-layer" 
      style="background-image: url('<?= $img ?>/family-office-operations-desk.jpg?v=<?= FILE_VERSISON ?>');"
      role="img"
      aria-label="Family Office Operations leather binder and desk"
    ></div>

    <div class="operations-mobile-overlay d-lg-none"></div>

    <div class="container position-relative z-2 py-5">
      <div class="row justify-content-end">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-start text-lg-end">
          
          <div data-aos="fade-left" data-aos-duration="900">
            <h2 class="operations-title fw-bold mb-3">
              Elevate Your Family<br>
              Office Operations
            </h2>
          </div>

          <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="900">
            <p class="operations-subtitle mb-0">
              Schedule a private consultation with<br class="d-none d-sm-inline">
              Devotion Global to establish your custom<br class="d-none d-sm-inline">
              family wealth customer service desk.
            </p>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<!-- 5. FAQ -->
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
              <span>How does Devotion Global work alongside our existing Family Office staff?</span><span class="ip-acc-icon" aria-hidden="true"></span>
            </button>
            <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0">
              <div><p>We act as an extension of your team, handling 24/7 client desk coverage, routine reporting aggregation, and administrative tasks so your core advisors can focus on strategic wealth preservation.</p></div>
            </div>
          </div>
          <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
            <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
              <span>Do you support Multi-Family Offices (MFOs) as well as Single Family Offices (SFOs)?</span><span class="ip-acc-icon" aria-hidden="true"></span>
            </button>
            <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1">
              <div><p>Yes. We offer scalable multi-tenant operations for MFOs managing dozens of families, as well as dedicated white-glove pod teams for Single Family Offices.</p></div>
            </div>
          </div>
          <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
            <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
              <span>How do you handle sensitive communication with family members?</span><span class="ip-acc-icon" aria-hidden="true"></span>
            </button>
            <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2">
              <div><p>All client team members complete specialized family communication training, adhering strictly to pre-approved family communication guidelines and secure encrypted messaging channels.</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // 1. Initialize AOS
    if (typeof AOS !== 'undefined') {
      AOS.init({
        once: true,
        offset: 80
      });
    }

    // 2. Interactive Leaf & Feature Sync (Mouse + Keyboard)
    const hotspots = document.querySelectorAll('.leaf-hotspot');
    const featureItems = document.querySelectorAll('.feature-item');
    const featureList = document.querySelector('.feature-list');

    function setActiveFeature(key) {
      hotspots.forEach(h => h.classList.remove('is-active'));
      featureItems.forEach(f => f.classList.remove('is-active'));

      if (!key) {
        if (featureList) featureList.classList.remove('has-active');
        return;
      }

      if (featureList) featureList.classList.add('has-active');
      const targetHotspot = document.querySelector(`.leaf-hotspot[data-target="${key}"]`);
      const targetFeature = document.querySelector(`.feature-item[data-feature="${key}"]`);

      if (targetHotspot) targetHotspot.classList.add('is-active');
      if (targetFeature) targetFeature.classList.add('is-active');
    }

    hotspots.forEach(spot => {
      const key = spot.getAttribute('data-target');
      spot.addEventListener('mouseenter', () => setActiveFeature(key));
      spot.addEventListener('mouseleave', () => setActiveFeature(null));
      spot.addEventListener('focus', () => setActiveFeature(key));
      spot.addEventListener('blur', () => setActiveFeature(null));
      spot.addEventListener('click', () => setActiveFeature(key));
    });

    featureItems.forEach(item => {
      const key = item.getAttribute('data-feature');
      item.addEventListener('mouseenter', () => setActiveFeature(key));
      item.addEventListener('mouseleave', () => setActiveFeature(null));
      item.addEventListener('focus', () => setActiveFeature(key));
      item.addEventListener('blur', () => setActiveFeature(null));
      item.addEventListener('click', () => setActiveFeature(key));
    });

    // 3. Smooth Counter Animation on Scroll
    const counters = document.querySelectorAll('.counter-value');
    const speed = 1400;

    const animateCounter = (el) => {
      const target = parseFloat(el.getAttribute('data-target'));
      const prefix = el.getAttribute('data-prefix') || '';
      const suffix = el.getAttribute('data-suffix') || '';
      const startTime = performance.now();

      const updateCount = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / speed, 1);
        const easeOut = 1 - Math.pow(1 - progress, 3);
        const currentVal = Math.round(easeOut * target);

        el.textContent = `${prefix}${currentVal}${suffix}`;

        if (progress < 1) {
          requestAnimationFrame(updateCount);
        } else {
          el.textContent = `${prefix}${target}${suffix}`;
        }
      };

      requestAnimationFrame(updateCount);
    };

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    counters.forEach(counter => observer.observe(counter));
  });
</script>

<script src="<?= BASE_URL . BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>