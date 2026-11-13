<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/banking-solution';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$ctaFile  = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)  ? 'cta-bg.webp?v=' . FILE_VERSISON  : 'cta-bg.svg';
?>

    <!-- JSON-LD Structured Data (SEO, AEO, GEO Optimization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://www.devotionglobal.com/#organization",
          "name": "Devotion Global Banking Solutions",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global financial technology provider offering cloud-native core banking platforms, open banking APIs, and real-time payment solutions.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Banking Solutions Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "French", "German"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/banking-solutions#service",
          "name": "Devotion Global Core Banking Engine",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "High-throughput cloud-native core banking engine with ISO 20022 payment integration, automated AML screening, and real-time ledger accounting.",
          "areaServed": "Global",
          "category": "Core Banking Technology & Financial Infrastructure"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/banking-solutions#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What deployment models are supported by Devotion Global Banking Solutions?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our banking solutions support multi-cloud SaaS, isolated private cloud, hybrid cloud deployments, and fully managed on-premise infrastructure compliant with local data sovereignty laws."
              }
            },
            {
              "@type": "Question",
              "name": "Is the platform compliant with international regulatory standards?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our banking suite natively supports PCI-DSS Level 1, ISO 27001, SOC 2 Type II, GDPR, PSD2 Open Banking APIs, and ISO 20022 messaging standards."
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
    <img src="<?= $img ?>/cloud-netiv-bank-solution-hero-bg.jpg?v=<?= FILE_VERSISON ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Next-Gen FinTech Architecture</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Cloud-Native<br><span class="ip-gold">Core Banking Solutions</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Powering commercial banks, retail institutions, and neo-banks with real-time multi-currency ledgers, ISO 20022 payment rails, AI fraud prevention, and open banking APIs.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Book Architecture Consultation</a>
            </div>
        </div>
    </div>
</header>

<!-- 2. CORE SERVICES -->
<!-- Our Core Banking Technology Stack Section -->
<style>
  :root {
    --cb-gold: #b08843;
    --cb-gold-dark: #967234;
    --cb-bg: #ebedf0;
    --cb-card-border: #e2e5ea;
    --cb-text-dark: #111111;
    --cb-text-muted: #4a4f55;
  }

  .cb-services-section {
    background-color: var(--cb-bg);
    padding: 5.5rem 0;
  }

  /* Pill Badge ("Our Services") */
  .cb-pill {
    display: inline-block;
    background-color: var(--cb-gold);
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    padding: 0.55rem 2.35rem;
    border-radius: 50px;
    box-shadow: 0 6px 18px rgba(176, 136, 67, 0.25);
  }

  .cb-heading {
    font-size: clamp(1.85rem, 3.1vw, 2.55rem);
    color: var(--cb-text-dark);
    letter-spacing: -0.02em;
    line-height: 1.2;
  }

  .cb-subheading {
    font-size: clamp(0.95rem, 1.15vw, 1.05rem);
    color: #6b7280;
    line-height: 1.6;
    max-width: 560px;
  }

  /* Service Cards */
  .cb-card {
    background-color: #ffffff;
    border: 1px solid var(--cb-card-border);
    border-radius: 16px;
    padding: 2.15rem 2rem;
    position: relative;
    overflow: hidden;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
  }

  .cb-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 3px;
    background-color: var(--cb-gold);
    transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .cb-card:hover,
  .cb-card:focus-within {
    transform: translateY(-6px);
    border-color: rgba(176, 136, 67, 0.45);
    box-shadow: 0 18px 40px rgba(17, 17, 17, 0.07);
  }

  .cb-card:hover::after,
  .cb-card:focus-within::after {
    width: 100%;
  }

  /* Card Header (Title Left, SVG Icon Right) */
  .cb-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
  }

  .cb-card-title {
    font-size: 1.22rem;
    font-weight: 700;
    line-height: 1.32;
    color: var(--cb-text-dark);
    margin-bottom: 0;
    transition: color 0.3s ease;
  }

  .cb-card:hover .cb-card-title {
    color: var(--cb-gold-dark);
  }

  .cb-icon-wrap {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .cb-icon-wrap img {
    width: 48px;
    height: 48px;
    object-fit: contain;
  }

  .cb-card:hover .cb-icon-wrap {
    transform: scale(1.08) rotate(-2deg);
  }

  /* Gold Horizontal Accent Line */
  .cb-card-divider {
    width: 72px;
    height: 2px;
    background-color: var(--cb-gold);
    margin: 1.1rem 0 1.25rem;
    transition: width 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .cb-card:hover .cb-card-divider {
    width: 105px;
  }

  /* Card Body Text */
  .cb-card-desc {
    font-size: 0.94rem;
    line-height: 1.65;
    color: var(--cb-text-muted);
    margin-bottom: 0;
  }
</style>

<section class="cb-services-section" id="core-banking-stack">
  <div class="container">
    
    <!-- Centered Section Header -->
    <div class="text-center mb-5">
      <div data-aos="fade-down" data-aos-duration="700">
        <span class="cb-pill mb-3">Our Services</span>
      </div>
      
      <h2 class="cb-heading fw-bold mb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        Our Core Banking Technology Stack
      </h2>
      
      <p class="cb-subheading mx-auto mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
        Tailored corporate finance and regulatory tax advisory modules designed for multinational holdings and cross-border expansion.
      </p>
    </div>

    <!-- 3x2 Responsive Grid -->
    <div class="row g-4">
      
      <!-- Card 1: Real-Time Core Ledger -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
        <div class="cb-card h-100" tabindex="0">
          <div class="cb-card-header">
            <h3 class="cb-card-title">Real-Time<br>Core Ledger</h3>
            <div class="cb-icon-wrap">
              <img src="<?= $img ?>/real-time-ledger.svg?v=<?= FILE_VERSISON ?>" alt="Real-Time Core Ledger" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cb-card-divider"></div>
          <p class="cb-card-desc">
            High-throughput, double-entry multi-currency accounting engine capable of processing 50,000+ sub-second transactions per second with zero downtime.
          </p>
        </div>
      </div>

      <!-- Card 2: Omnichannel Digital Experience -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="800">
        <div class="cb-card h-100" tabindex="0">
          <div class="cb-card-header">
            <h3 class="cb-card-title">Omnichannel<br>Digital Experience</h3>
            <div class="cb-icon-wrap">
              <img src="<?= $img ?>/digital-experience.svg?v=<?= FILE_VERSISON ?>" alt="Omnichannel Digital Experience" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cb-card-divider"></div>
          <p class="cb-card-desc">
            Web and mobile frontend application suites for retail and corporate banking with self-service onboarding, bio-authentication, and transfer hubs.
          </p>
        </div>
      </div>

      <!-- Card 3: ISO 20022 Payment Hub -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240" data-aos-duration="800">
        <div class="cb-card h-100" tabindex="0">
          <div class="cb-card-header">
            <h3 class="cb-card-title">ISO 20022<br>Payment Hub</h3>
            <div class="cb-icon-wrap">
              <img src="<?= $img ?>/payment-hub.svg?v=<?= FILE_VERSISON ?>" alt="ISO 20022 Payment Hub" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cb-card-divider"></div>
          <p class="cb-card-desc">
            Native integration with SWIFT GPI, FedNow, SEPA Instant, and local clearing houses using standardized, rich-data XML messaging protocols.
          </p>
        </div>
      </div>

      <!-- Card 4: AI Fraud & Risk Engine -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="cb-card h-100" tabindex="0">
          <div class="cb-card-header">
            <h3 class="cb-card-title">AI Fraud &amp;<br>Risk Engine</h3>
            <div class="cb-icon-wrap">
              <img src="<?= $img ?>/risk-engine.svg?v=<?= FILE_VERSISON ?>" alt="AI Fraud & Risk Engine" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cb-card-divider"></div>
          <p class="cb-card-desc">
            Machine-learning-driven transaction monitoring, behavioral analytics, and real-time AML sanctions screening to intercept fraudulent activity.
          </p>
        </div>
      </div>

      <!-- Card 5: Open Banking API Gateway -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="220" data-aos-duration="800">
        <div class="cb-card h-100" tabindex="0">
          <div class="cb-card-header">
            <h3 class="cb-card-title">Open Banking<br>API Gateway</h3>
            <div class="cb-icon-wrap">
              <img src="<?= $img ?>/open-banking.svg?v=<?= FILE_VERSISON ?>" alt="Open Banking API Gateway" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cb-card-divider"></div>
          <p class="cb-card-desc">
            PSD2 and FDX compliant RESTful API platform enabling secure third-party integration, consent management, and Banking-as-a-Service (BaaS).
          </p>
        </div>
      </div>

      <!-- Card 6: Automated Lending -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="340" data-aos-duration="800">
        <div class="cb-card h-100" tabindex="0">
          <div class="cb-card-header">
            <h3 class="cb-card-title">Automated<br>Lending</h3>
            <div class="cb-icon-wrap">
              <img src="<?= $img ?>/automated-landing.svg?v=<?= FILE_VERSISON ?>" alt="Automated Lending" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cb-card-divider"></div>
          <p class="cb-card-desc">
            End-to-end loan origination, automated credit scoring engines, collateral management, and real-time treasury liquidity management.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3. PROCESS / PHASES -->
<!-- Modernization Deployment Roadmap Section -->
<style>
  :root {
    --mdr-gold: #b08843;
    --mdr-navy: #034687;
    --mdr-dark: #111111;
    --mdr-muted: #4a4f55;
  }

  .mdr-roadmap-section {
    background-color: #ffffff;
    padding: 0;
  }

  .mdr-heading {
    font-size: clamp(1.85rem, 3vw, 2.55rem);
    line-height: 1.22;
    letter-spacing: -0.02em;
    color: var(--mdr-dark);
  }

  .mdr-divider {
    width: 72px;
    height: 2px;
    background-color: var(--mdr-gold);
  }

  /* Left Serpentine Graphic Stage (Bleeds flush top-to-bottom like reference) */
  .mdr-path-stage {
    max-width: 470px;
  }

  .mdr-path-img {
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
  }

  /* Circular Node Hotspots Mapped Over Each Loop & Label in modernization -deployment-roadmap.jpg */
  .mdr-node-hotspot {
    position: absolute;
    background: transparent;
    border: 2px solid transparent;
    border-radius: 50%;
    cursor: pointer;
    padding: 0;
    outline: none;
    transition: background-color 0.35s ease,
                border-color 0.35s ease,
                box-shadow 0.35s ease,
                transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  /* Phase 01: Architecture Audit (Middle-Right Loop) */
  .mdr-hotspot-01 {
    top: 34.5%;
    left: 61.5%;
    width: 28%;
    height: 19%;
  }

  /* Phase 02: API Layer & Co-Existence (Upper-Center Loop) */
  .mdr-hotspot-02 {
    top: 34.5%;
    left: 31.5%;
    width: 28%;
    height: 19%;
  }

  /* Phase 03: Ledger Migration (Lower-Center Loop) */
  .mdr-hotspot-03 {
    top: 53.5%;
    left: 31.5%;
    width: 28%;
    height: 19%;
  }

  /* Phase 04: Full Cloud Cutover (Lower-Left Loop) */
  .mdr-hotspot-04 {
    top: 53.5%;
    left: 1.5%;
    width: 28%;
    height: 19%;
  }

  .mdr-node-hotspot:hover,
  .mdr-node-hotspot:focus-visible,
  .mdr-node-hotspot.is-active {
    background: rgba(176, 136, 67, 0.14);
    border-color: var(--mdr-gold);
    box-shadow: 0 0 0 8px rgba(176, 136, 67, 0.12);
    transform: scale(1.06);
  }

  .mdr-hotspot-02:hover,
  .mdr-hotspot-02:focus-visible,
  .mdr-hotspot-02.is-active {
    background: rgba(3, 70, 135, 0.12);
    border-color: var(--mdr-navy);
    box-shadow: 0 0 0 8px rgba(3, 70, 135, 0.1);
  }

  /* Right-Side 2x2 Phase Grid */
  .mdr-phase-item {
    cursor: pointer;
    padding: 1.15rem 1.25rem;
    margin-left: -1.25rem;
    border-radius: 12px;
    border-left: 3px solid transparent;
    position: relative;
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .mdr-phase-num {
    display: inline-block;
    font-size: 1.35rem;
    font-weight: 700;
    line-height: 1.1;
    color: var(--mdr-gold);
    margin-bottom: 0.45rem;
    transition: transform 0.35s ease, color 0.35s ease;
  }

  .mdr-phase-title {
    font-size: 1.12rem;
    font-weight: 700;
    color: var(--mdr-dark);
    margin-bottom: 0.45rem;
    transition: color 0.3s ease;
  }

  .mdr-phase-desc {
    font-size: 0.94rem;
    line-height: 1.6;
    color: var(--mdr-muted);
    margin-bottom: 0;
  }

  /* Active / Hover State */
  .mdr-phase-item:hover,
  .mdr-phase-item:focus-within,
  .mdr-phase-item.is-active {
    background-color: #faf8f5;
    border-left-color: var(--mdr-gold);
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(17, 17, 17, 0.06);
  }

  .mdr-phase-item[data-mdr-phase="02"]:hover,
  .mdr-phase-item[data-mdr-phase="02"]:focus-within,
  .mdr-phase-item[data-mdr-phase="02"].is-active {
    border-left-color: var(--mdr-navy);
  }

  .mdr-phase-item:hover .mdr-phase-num,
  .mdr-phase-item.is-active .mdr-phase-num {
    transform: translateX(4px);
  }

  .mdr-phase-item[data-mdr-phase="02"]:hover .mdr-phase-num,
  .mdr-phase-item[data-mdr-phase="02"].is-active .mdr-phase-num {
    color: var(--mdr-navy);
  }

  /* Softly dim unfocused phases during interaction */
  .mdr-phase-grid.has-active .mdr-phase-item:not(.is-active) {
    opacity: 0.52;
  }

  @media (max-width: 767.98px) {
    .mdr-phase-item {
      margin-left: 0;
    }
  }
</style>

<section class="mdr-roadmap-section position-relative overflow-hidden" id="modernization-deployment-roadmap">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Left Column: Serpentine Roadmap Diagram -->
      <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="950">
        <div class="mdr-path-stage position-relative mx-auto">
          
          <img 
            src="<?= $img ?>/modernization-deployment-roadmap.png?v=<?= FILE_VERSISON ?>" 
            alt="Modernization Deployment Roadmap: Phase 01 Architecture Audit, Phase 02 API Layer & Co-Existence, Phase 03 Ledger Migration, Phase 04 Full Cloud Cutover" 
            class="img-fluid w-100 d-block mdr-path-img"
            loading="lazy"
          >

          <!-- Circular Node Hotspots -->
          <button 
            type="button" 
            class="mdr-node-hotspot mdr-hotspot-01" 
            data-mdr-target="01" 
            aria-label="Highlight Phase 01: Architecture Audit"
          ></button>

          <button 
            type="button" 
            class="mdr-node-hotspot mdr-hotspot-02" 
            data-mdr-target="02" 
            aria-label="Highlight Phase 02: API Layer & Co-Existence"
          ></button>

          <button 
            type="button" 
            class="mdr-node-hotspot mdr-hotspot-03" 
            data-mdr-target="03" 
            aria-label="Highlight Phase 03: Ledger Migration"
          ></button>

          <button 
            type="button" 
            class="mdr-node-hotspot mdr-hotspot-04" 
            data-mdr-target="04" 
            aria-label="Highlight Phase 04: Full Cloud Cutover"
          ></button>

        </div>
      </div>

      <!-- Right Column: Heading & 2x2 Phase Grid -->
      <div class="col-lg-7 order-1 order-lg-2 py-5 ps-lg-5">
        
        <div data-aos="fade-left" data-aos-duration="800">
          <h2 class="mdr-heading fw-bold mb-3">
            Modernization<br>
            Deployment Roadmap
          </h2>
          <div class="mdr-divider mb-4 mb-lg-5" data-aos="zoom-in-right" data-aos-delay="200" data-aos-duration="800"></div>
        </div>

        <div class="row g-4 mdr-phase-grid">
          
          <!-- Phase 01 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="mdr-phase-item h-100" data-mdr-phase="01" tabindex="0">
              <span class="mdr-phase-num">01</span>
              <h3 class="mdr-phase-title">Architecture Audit</h3>
              <p class="mdr-phase-desc">
                Assessment of legacy mainframe systems, data mapping, regulatory requirements, and co-existence planning.
              </p>
            </div>
          </div>

          <!-- Phase 02 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
            <div class="mdr-phase-item h-100" data-mdr-phase="02" tabindex="0">
              <span class="mdr-phase-num">02</span>
              <h3 class="mdr-phase-title">API Layer &amp; Co-Existence</h3>
              <p class="mdr-phase-desc">
                Deploying middleware API wrappers to enable modern mobile applications without interrupting legacy core systems.
              </p>
            </div>
          </div>

          <!-- Phase 03 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
            <div class="mdr-phase-item h-100" data-mdr-phase="03" tabindex="0">
              <span class="mdr-phase-num">03</span>
              <h3 class="mdr-phase-title">Ledger Migration</h3>
              <p class="mdr-phase-desc">
                Incremental parallel balance migration, real-time sync verification, and shadow ledger validation run.
              </p>
            </div>
          </div>

          <!-- Phase 04 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            <div class="mdr-phase-item h-100" data-mdr-phase="04" tabindex="0">
              <span class="mdr-phase-num">04</span>
              <h3 class="mdr-phase-title">Full Cloud Cutover</h3>
              <p class="mdr-phase-desc">
                Zero-downtime cutover to cloud-native microservices with 24/7 hypercare support and automated compliance logging.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mdrSection = document.getElementById('modernization-deployment-roadmap');
    if (!mdrSection) return;

    const nodeHotspots = mdrSection.querySelectorAll('.mdr-node-hotspot');
    const mdrPhaseItems = mdrSection.querySelectorAll('.mdr-phase-item');
    const mdrPhaseGrid = mdrSection.querySelector('.mdr-phase-grid');
    const mdrPhases = ['01', '02', '03', '04'];

    let mdrIndex = 0;
    let mdrTimer = null;
    let mdrUserInteracting = false;

    function setActiveMdrPhase(phaseId) {
      nodeHotspots.forEach(n => n.classList.remove('is-active'));
      mdrPhaseItems.forEach(p => p.classList.remove('is-active'));

      if (!phaseId) {
        if (mdrPhaseGrid) mdrPhaseGrid.classList.remove('has-active');
        return;
      }

      if (mdrPhaseGrid) mdrPhaseGrid.classList.add('has-active');
      const targetNode = mdrSection.querySelector(`.mdr-node-hotspot[data-mdr-target="${phaseId}"]`);
      const targetItem = mdrSection.querySelector(`.mdr-phase-item[data-mdr-phase="${phaseId}"]`);

      if (targetNode) targetNode.classList.add('is-active');
      if (targetItem) targetItem.classList.add('is-active');
    }

    function startMdrCycle() {
      if (mdrTimer || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      mdrTimer = setInterval(() => {
        if (!mdrUserInteracting) {
          setActiveMdrPhase(mdrPhases[mdrIndex]);
          mdrIndex = (mdrIndex + 1) % mdrPhases.length;
        }
      }, 2600);
    }

    function stopMdrCycle() {
      clearInterval(mdrTimer);
      mdrTimer = null;
    }

    const bindMdrEvents = (elements, attr) => {
      elements.forEach(el => {
        const id = el.getAttribute(attr);
        el.addEventListener('mouseenter', () => {
          mdrUserInteracting = true;
          setActiveMdrPhase(id);
        });
        el.addEventListener('mouseleave', () => {
          mdrUserInteracting = false;
          setActiveMdrPhase(null);
        });
        el.addEventListener('focus', () => {
          mdrUserInteracting = true;
          setActiveMdrPhase(id);
        });
        el.addEventListener('blur', () => {
          mdrUserInteracting = false;
          setActiveMdrPhase(null);
        });
        el.addEventListener('click', () => {
          mdrUserInteracting = true;
          setActiveMdrPhase(id);
        });
      });
    };

    bindMdrEvents(nodeHotspots, 'data-mdr-target');
    bindMdrEvents(mdrPhaseItems, 'data-mdr-phase');

    const mdrObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startMdrCycle();
        } else {
          stopMdrCycle();
          setActiveMdrPhase(null);
        }
      });
    }, { threshold: 0.3 });

    mdrObserver.observe(mdrSection);
  });
</script>

<!-- 4. KEY NUMBERS -->
<!-- Banking Modernization Stats, Security Bridge & Consultation CTA Section -->
<style>
  :root {
    --bm-gold-bg: #b08843;
    --bm-gold-hover: #967234;
    --bm-text-dark: #111111;
    --bm-text-muted: #55595e;
  }

  .bm-cta-wrapper {
    background-color: var(--bm-gold-bg);
  }

  /* =========================================
     1. GOLD STATS BAND
     ========================================= */
  .bm-stats-band {
    background-color: var(--bm-gold-bg);
    padding-top: 4.25rem;
    padding-bottom: 10.5rem;
    margin-bottom: 0;
  }

  .bm-stat-col {
    position: relative;
  }

  @media (min-width: 992px) {
    .bm-stat-col:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 10%;
      height: 80%;
      width: 1px;
      background-color: rgba(255, 255, 255, 0.35);
      transition: background-color 0.3s ease, height 0.3s ease;
    }

    .bm-stat-col:hover::after {
      background-color: rgba(255, 255, 255, 0.75);
      height: 90%;
      top: 5%;
    }
  }

  .bm-stat-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .bm-stat-box:hover {
    transform: translateY(-4px);
  }

  .bm-stat-number {
    font-size: clamp(2rem, 3.2vw, 2.75rem);
    line-height: 1.15;
    letter-spacing: -0.02em;
  }

  .bm-stat-label {
    font-size: 0.98rem;
    line-height: 1.45;
    opacity: 0.94;
  }

  /* =========================================
     1.5 ZERO-HEIGHT FLOATING SECURITY BRIDGE CARD
     ========================================= */
  .bm-security-bridge {
    position: relative;
    height: 0;
    overflow: visible;
    z-index: 10;
    pointer-events: none;
  }

  .bm-security-bridge > .container {
    transform: translateY(-64%);
  }

  .bm-security-card {
    pointer-events: auto;
    max-width: 950px;
    margin-left: auto;
    margin-right: auto;
    padding: 2.15rem 2.25rem 1.7rem;
    background: rgba(255, 255, 255, 0.64);
    border: 1px solid rgba(255, 255, 255, 0.78);
    border-radius: 16px;
    box-shadow: 0 18px 42px rgba(17, 17, 17, 0.08);
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.4s ease;
  }

  .bm-security-card:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, 0.78);
    box-shadow: 0 24px 52px rgba(17, 17, 17, 0.12);
  }

  .bm-security-title {
    font-size: clamp(1.32rem, 2.2vw, 1.75rem);
    color: var(--bm-text-dark);
    letter-spacing: -0.015em;
    margin-bottom: 1.45rem;
  }

  .bm-security-list {
    gap: 0.3rem;
  }

  .bm-security-item {
    font-size: clamp(0.82rem, 0.98vw, 0.8rem);
    font-weight: 500;
    color: #2b2f33;
    padding: 0.2rem 0.3rem;
    transition: color 0.25s ease, transform 0.25s ease;
    cursor: default;
    margin-top: 55px;
  }

  .bm-security-item:hover {
    color: #000000;
    transform: translateY(-2px);
  }

  .bm-security-divider {
    width: 1px;
    height: 15px;
    background-color: rgba(43, 47, 51, 0.35);
    margin-top: 55px;
  }

  /* =========================================
     2. FULL-BLEED BANNER & LEFT-ALIGNED CTA
     ========================================= */
  .bm-cta-banner {
    min-height: 460px;
    margin-top: 0;
    padding-top: 5rem;
    background-color: #f4f5f7;
    overflow: hidden;
  }

  .bm-cta-bg-layer {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    animation: bmDeskDrift 16s ease-in-out infinite alternate;
    will-change: transform;
  }

  @keyframes bmDeskDrift {
    0% { transform: scale(1) translateX(0); }
    100% { transform: scale(1.035) translateX(0.5%); }
  }

  /* Readability veil on smaller screens where text overlaps right-side graphic */
  .bm-cta-mobile-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      270deg,
      rgba(244, 245, 247, 0.78) 0%,
      rgba(244, 245, 247, 0.95) 55%,
      rgba(244, 245, 247, 0.99) 100%
    );
    z-index: 1;
  }

  .bm-cta-title {
    font-size: clamp(1.75rem, 2.8vw, 2.45rem);
    line-height: 1.25;
    letter-spacing: -0.02em;
    color: var(--bm-text-dark);
  }

  .bm-cta-subtitle {
    font-size: clamp(0.98rem, 1.2vw, 1.08rem);
    line-height: 1.65;
    color: var(--bm-text-muted);
  }

  /* Gold Pill CTA Button */
  .bm-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.55rem;
    background-color: var(--bm-gold-bg);
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    padding: 0.78rem 1.85rem;
    border-radius: 50px;
    box-shadow: 0 8px 22px rgba(176, 136, 67, 0.28);
    transition: background-color 0.3s ease, transform 0.3s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.3s ease;
  }

  .bm-cta-btn:hover,
  .bm-cta-btn:focus-visible {
    background-color: var(--bm-gold-hover);
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(176, 136, 67, 0.38);
  }

  @media (min-width: 1200px) {
    .bm-cta-banner {
      min-height: 490px;
    }
  }

  @media (max-width: 767.98px) {
    .bm-stats-band {
      padding-bottom: 11.5rem;
    }
    .bm-security-bridge > .container {
      transform: translateY(-62%);
    }
    .bm-security-card {
      padding: 1.65rem 1.25rem 1.35rem;
    }
    .bm-security-item {
      background: rgba(255, 255, 255, 0.65);
      padding: 0.35rem 0.75rem;
      border-radius: 20px;
    }
    .bm-cta-banner {
      padding-top: 5.5rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .bm-cta-bg-layer {
      animation: none;
    }
  }
</style>

<section class="bm-cta-wrapper overflow-hidden" id="banking-modernization-cta">

  <!-- Part 1: Gold Stats Strip -->
  <div class="bm-stats-band">
    <div class="container">
      <div class="row g-4 g-lg-0 justify-content-center align-items-stretch">
        
        <!-- Stat 1 -->
        <div class="col-6 col-lg-3 bm-stat-col" data-aos="fade-up" data-aos-delay="0">
          <div class="bm-stat-box h-100 px-3 px-xl-4">
            <div class="bm-stat-number fw-bold text-white mb-1">
              <span class="bm-counter-value" data-target="99.999" data-decimals="3" data-suffix="%">99.999%</span>
            </div>
            <p class="bm-stat-label text-white mb-0">Platform Service<br>Uptime SLA</p>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="col-6 col-lg-3 bm-stat-col" data-aos="fade-up" data-aos-delay="120">
          <div class="bm-stat-box h-100 px-3 px-xl-4">
            <div class="bm-stat-number fw-bold text-white mb-1">
              <span class="bm-counter-value" data-prefix="< " data-target="15" data-suffix="ms">&lt; 15ms</span>
            </div>
            <p class="bm-stat-label text-white mb-0">Average Transaction<br>Processing Latency</p>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="col-6 col-lg-3 bm-stat-col" data-aos="fade-up" data-aos-delay="240">
          <div class="bm-stat-box h-100 px-3 px-xl-4">
            <div class="bm-stat-number fw-bold text-white mb-1">
              <span class="bm-counter-value" data-target="50" data-suffix="M+">50M+</span>
            </div>
            <p class="bm-stat-label text-white mb-0">Daily Processed<br>Accounts</p>
          </div>
        </div>

        <!-- Stat 4 -->
        <div class="col-6 col-lg-3 bm-stat-col" data-aos="fade-up" data-aos-delay="360">
          <div class="bm-stat-box h-100 px-3 px-xl-4">
            <div class="bm-stat-number fw-bold text-white mb-1">
              <span>Zero</span>
            </div>
            <p class="bm-stat-label text-white mb-0">Data Breach<br>Record</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Part 1.5: Overlapping Frosted Security & Compliance Bridge Card -->
  <div class="bm-security-bridge">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-11 col-xl-10">
          
          <div 
            class="bm-security-card text-center" 
            data-aos="zoom-in-up" 
            data-aos-duration="850"
          >
            <h3 class="bm-security-title fw-bold">
              Bank-Grade Security &amp; Global Compliance
            </h3>

            <ul class="bm-security-list list-unstyled d-flex flex-wrap justify-content-center align-items-center mb-0">
              <li class="bm-security-item" data-aos="fade-up" data-aos-delay="150">
                PCI-DSS Level 1 Certified
              </li>
              <li class="bm-security-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="bm-security-item" data-aos="fade-up" data-aos-delay="250">
                ISO/IEC 27001 &amp; SOC 2 Type II
              </li>
              <li class="bm-security-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="bm-security-item" data-aos="fade-up" data-aos-delay="350">
                ISO 20022 Native Messaging
              </li>
              <li class="bm-security-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="bm-security-item" data-aos="fade-up" data-aos-delay="450">
                GDPR &amp; Data Sovereignty
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Part 2: Full-Bleed Desk Graphic & Left-Aligned Content -->
  <div class="bm-cta-banner position-relative d-flex align-items-center">
    
    <div 
      class="bm-cta-bg-layer" 
      style="background-image: url('<?= $img ?>/bank-modernization.jpg?v=<?= FILE_VERSISON ?>');"
      role="img"
      aria-label="Modern digital banking laptop dashboard in front of bank headquarters"
    ></div>

    <div class="bm-cta-mobile-overlay d-lg-none"></div>

    <div class="container position-relative z-2 py-5">
      <div class="row justify-content-start">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-start">
          
          <div data-aos="fade-right" data-aos-duration="900">
            <h2 class="bm-cta-title fw-bold mb-3">
              Accelerate Your<br>
              Banking Modernization
            </h2>
          </div>

          <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="900">
            <p class="bm-cta-subtitle mb-4">
              Speak with our enterprise banking architects<br class="d-none d-sm-inline">
              to schedule an architectural assessment and<br class="d-none d-sm-inline">
              custom solution presentation
            </p>
          </div>

          <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="900">
            <a href="#contact" class="bm-cta-btn">
              Book Architecture Consultation
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const bmCounters = document.querySelectorAll('.bm-counter-value');
    const duration = 1400;

    const animateBmCounter = (el) => {
      const target = parseFloat(el.getAttribute('data-target'));
      const decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
      const prefix = el.getAttribute('data-prefix') || '';
      const suffix = el.getAttribute('data-suffix') || '';
      const startTime = performance.now();

      const update = (now) => {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easeOut = 1 - Math.pow(1 - progress, 3);
        const rawVal = easeOut * target;
        const formatted = decimals > 0 ? rawVal.toFixed(decimals) : Math.round(rawVal);

        el.textContent = `${prefix}${formatted}${suffix}`;

        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          const finalFormatted = decimals > 0 ? target.toFixed(decimals) : target;
          el.textContent = `${prefix}${finalFormatted}${suffix}`;
        }
      };

      requestAnimationFrame(update);
    };

    const bmObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateBmCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    bmCounters.forEach(counter => bmObserver.observe(counter));
  });
</script>
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
                        <span>Can Devotion Global replace existing legacy core systems without service interruption?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>Yes. We specialize in progressive modernization. By deploying our middleware and sidecar ledger architecture, financial institutions migrate core functions incrementally without taking legacy mainframes offline or risking customer disruption.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>How does the platform handle regional data residency regulations?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Our architecture supports multi-region isolated tenant deployments across cloud providers (AWS, Azure, GCP) or private data centers, ensuring client transaction data remains fully contained within designated national borders.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>What tools are available for real-time fraud and AML prevention?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Our core includes an embedded AI event-stream monitor that cross-references all transfers against global sanctions lists, PEP databases, and behavioral anomaly models within sub-15-millisecond execution windows.</p></div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
