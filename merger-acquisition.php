<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/merger-acquisition';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp?v=' . FILE_VERSISON)
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

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
          "name": "Devotion Global M&A Advisory Provider",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global corporate advisory and business outsourcing provider delivering full-lifecycle Mergers & Acquisitions, valuation, and post-merger integration support.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "M&A Transaction Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "German", "Japanese"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/mergers-and-acquisitions#service",
          "name": "Devotion Global M&A Advisory Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "Buy-side and sell-side deal advisory, financial due diligence support, Virtual Data Room (VDR) administration, and post-close integration execution.",
          "areaServed": "Global",
          "category": "Corporate Finance & M&A Advisory"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/mergers-and-acquisitions#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What M&A advisory services does Devotion Global provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global provides end-to-end M&A advisory including target identification, sell-side preparation, financial due diligence support, Virtual Data Room (VDR) operations, deal structuring assistance, and post-merger integration (PMI)."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global protect confidential transaction data during M&A deals?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We enforce bank-grade Virtual Data Rooms (VDR), strict multi-layer NDAs, ISO 27001 data encryption standards, and zero-trust access control for all deal participants."
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
    <img 
        src="<?= $img ?>/merger-advisory-desk-hero-bg.jpg?v=<?= FILE_VERSISON ?>" 
        alt="Private Wealth and Family Office Operations" 
        class="ip-hero__bg" 
        width="2300" 
        height="795" 
        fetchpriority="high"
    >
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Strategic M&amp;A Execution</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Mergers &amp; Acquisitions<br><span class="ip-gold">Advisory</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Guiding corporations, private equity funds, and founder-led businesses through buy-side acquisitions, sell-side transactions, due diligence, and seamless post-merger integration.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request Confidential M&amp;A Consultation</a>
            </div>
        </div>
    </div>
</header>

<!-- 2. CORE SERVICES -->
<!-- Full-Lifecycle M&A Services Section -->
<style>
  :root {
    --ma-gold: #b08843;
    --ma-gold-dark: #967234;
    --ma-bg: #ebedf0;
    --ma-card-border: #e2e5ea;
    --ma-active-blue: #1890ff;
    --ma-text-dark: #111111;
    --ma-text-muted: #4a4f55;
  }

  .ma-services-section {
    background-color: var(--ma-bg);
    padding: 5.5rem 0;
  }

  /* Pill Badge ("Our Services") */
  .ma-pill {
    display: inline-block;
    background-color: var(--ma-gold);
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    padding: 0.55rem 2.35rem;
    border-radius: 50px;
    box-shadow: 0 6px 18px rgba(176, 136, 67, 0.25);
  }

  .ma-heading {
    font-size: clamp(1.85rem, 3.1vw, 2.55rem);
    color: var(--ma-text-dark);
    letter-spacing: -0.02em;
    line-height: 1.2;
  }

  .ma-subheading {
    font-size: clamp(0.95rem, 1.15vw, 1.05rem);
    color: #6b7280;
    line-height: 1.6;
    max-width: 560px;
  }

  /* Service Cards */
  .ma-card {
    background-color: #ffffff;
    border: 2px solid transparent;
    box-shadow: 0 0 0 1px var(--ma-card-border), 0 8px 24px rgba(17, 17, 17, 0.03);
    border-radius: 16px;
    padding: 2.15rem 2rem;
    position: relative;
    overflow: hidden;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.3s ease;
  }

  .ma-card:hover,
  .ma-card:focus-within {
    transform: translateY(-6px);
    border-color: var(--ma-active-blue);
    box-shadow: 0 18px 40px rgba(24, 144, 255, 0.12);
  }

  /* Card Header (Title Left, SVG Icon Right) */
  .ma-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
  }

  .ma-card-title {
    font-size: 1.22rem;
    font-weight: 700;
    line-height: 1.32;
    color: var(--ma-text-dark);
    margin-bottom: 0;
    transition: color 0.3s ease;
  }

  .ma-card:hover .ma-card-title {
    color: var(--ma-gold-dark);
  }

  .ma-icon-wrap {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ma-icon-wrap img {
    width: 48px;
    height: 48px;
    object-fit: contain;
  }

  .ma-card:hover .ma-icon-wrap {
    transform: scale(1.08) rotate(-2deg);
  }

  /* Gold Horizontal Accent Line */
  .ma-card-divider {
    width: 72px;
    height: 2px;
    background-color: var(--ma-gold);
    margin: 1.1rem 0 1.25rem;
    transition: width 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ma-card:hover .ma-card-divider {
    width: 105px;
  }

  /* Card Body Text */
  .ma-card-desc {
    font-size: 0.94rem;
    line-height: 1.65;
    color: var(--ma-text-muted);
    margin-bottom: 0;
  }
</style>

<section class="ma-services-section" id="ma-services">
  <div class="container">
    
    <!-- Centered Section Header -->
    <div class="text-center mb-5">
      <div data-aos="fade-down" data-aos-duration="700">
        <span class="ma-pill mb-3">Our Services</span>
      </div>
      
      <h2 class="ma-heading fw-bold mb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        Full-Lifecycle M&amp;A Services
      </h2>
      
      <p class="ma-subheading mx-auto mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
        Tailored corporate finance and regulatory tax advisory modules designed for multinational holdings and cross-border expansion.
      </p>
    </div>

    <!-- 3x2 Responsive Grid -->
    <div class="row g-4">
      
      <!-- Card 1: Sell-Side Transaction -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
        <div class="ma-card h-100" tabindex="0">
          <div class="ma-card-header">
            <h3 class="ma-card-title">Sell-Side<br>Transaction</h3>
            <div class="ma-icon-wrap">
              <img src="<?= $img ?>/sell-side-desk.svg?v=<?= FILE_VERSISON ?>" alt="Sell-Side Transaction" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ma-card-divider"></div>
          <p class="ma-card-desc">
            Maximizing business valuation through confidential teaser preparation, confidential information memorandum (CIM) creation, and auction process management.
          </p>
        </div>
      </div>

      <!-- Card 2: Buy-Side Target Acquisition -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="800">
        <div class="ma-card h-100" tabindex="0">
          <div class="ma-card-header">
            <h3 class="ma-card-title">Buy-Side Target<br>Acquisition</h3>
            <div class="ma-icon-wrap">
              <img src="<?= $img ?>/buy-side-target.svg?v=<?= FILE_VERSISON ?>" alt="Buy-Side Target Acquisition" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ma-card-divider"></div>
          <p class="ma-card-desc">
            Strategic target identification, proprietary deal pipeline sourcing, valuation modeling, and synergistic transaction structuring.
          </p>
        </div>
      </div>

      <!-- Card 3: Financial & Quality of Earnings (QofE) -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240" data-aos-duration="800">
        <div class="ma-card h-100" tabindex="0">
          <div class="ma-card-header">
            <h3 class="ma-card-title">Financial &amp; Quality<br>of Earnings (QofE)</h3>
            <div class="ma-icon-wrap">
              <img src="<?= $img ?>/financial-quality.svg?v=<?= FILE_VERSISON ?>" alt="Financial and Quality of Earnings" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ma-card-divider"></div>
          <p class="ma-card-desc">
            Comprehensive due diligence support analyzing historical EBITDA quality, working capital pegs, and balance sheet exposure.
          </p>
        </div>
      </div>

      <!-- Card 4: Virtual Data Room (VDR) -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="ma-card h-100" tabindex="0">
          <div class="ma-card-header">
            <h3 class="ma-card-title">Virtual Data<br>Room (VDR)</h3>
            <div class="ma-icon-wrap">
              <img src="<?= $img ?>/virtual-data-room.svg?v=<?= FILE_VERSISON ?>" alt="Virtual Data Room" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ma-card-divider"></div>
          <p class="ma-card-desc">
            Secure setup, index creation, permission governance, and real-time bidder access monitoring in bank-grade virtual environment.
          </p>
        </div>
      </div>

      <!-- Card 5: Post-Merger Integration (PMI) -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="220" data-aos-duration="800">
        <div class="ma-card h-100" tabindex="0">
          <div class="ma-card-header">
            <h3 class="ma-card-title">Post-Merger<br>Integration (PMI)</h3>
            <div class="ma-icon-wrap">
              <img src="<?= $img ?>/post-merger.svg?v=<?= FILE_VERSISON ?>" alt="Post-Merger Integration" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ma-card-divider"></div>
          <p class="ma-card-desc">
            Operational day-one readiness planning, system migration, synergy capture execution, and organizational cultural alignment.
          </p>
        </div>
      </div>

      <!-- Card 6: Cross-Border Joint Venture Structuring -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="340" data-aos-duration="800">
        <div class="ma-card h-100" tabindex="0">
          <div class="ma-card-header">
            <h3 class="ma-card-title">Cross-Border Joint<br>Venture Structuring</h3>
            <div class="ma-icon-wrap">
              <img src="<?= $img ?>/cross-border-structure.svg?v=<?= FILE_VERSISON ?>" alt="Cross-Border Joint Venture Structuring" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ma-card-divider"></div>
          <p class="ma-card-desc">
            Structuring cross-border alliances, JV governance frameworks, regulatory filings support, and multi-currency deal escrow.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3. PROCESS / PHASES -->
<!-- The 4-Phase M&A Execution Framework Section -->
<style>
  :root {
    --ma-exec-gold: #b08843;
    --ma-exec-navy: #034687;
    --ma-exec-dark: #111111;
    --ma-exec-muted: #4a4f55;
  }

  .ma-execution-section {
    background-color: #ffffff;
    padding: 5.5rem 0;
    border-bottom: 2px solid var(--ma-exec-gold);
  }

  .ma-exec-heading {
    font-size: clamp(1.85rem, 3vw, 2.55rem);
    line-height: 1.22;
    letter-spacing: -0.02em;
    color: var(--ma-exec-dark);
  }

  .ma-exec-divider {
    width: 72px;
    height: 2px;
    background-color: var(--ma-exec-gold);
  }

  /* Left Graphic Stage & Ambient Float */
  .ma-hex-stage {
    max-width: 440px;
    animation: maHexFloat 6.5s ease-in-out infinite;
  }

  .ma-hex-img {
    mix-blend-mode: multiply;
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
  }

  @keyframes maHexFloat {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-6px); }
  }

  /* Clipped Hexagonal Interactive Hotspots Over m-a-execution-framework_2.jpg */
  .hex-hotspot {
    position: absolute;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
    outline: none;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    transition: background-color 0.4s ease, transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  /* Phase 01: Top Gold Hexagon */
  .hotspot-phase-01 {
    top: 0%;
    left: 24.5%;
    width: 46%;
    height: 38.5%;
  }

  /* Phase 02: Middle-Left Grey Hexagon */
  .hotspot-phase-02 {
    top: 30.8%;
    left: 0%;
    width: 46%;
    height: 38.5%;
  }

  /* Phase 03: Middle-Right Navy Hexagon */
  .hotspot-phase-03 {
    top: 30.8%;
    left: 49.5%;
    width: 46%;
    height: 38.5%;
  }

  /* Phase 04: Bottom Gold Hexagon */
  .hotspot-phase-04 {
    top: 61.5%;
    left: 24.5%;
    width: 46%;
    height: 38.5%;
  }

  .hex-hotspot:hover,
  .hex-hotspot:focus-visible,
  .hex-hotspot.is-active {
    background: rgba(255, 255, 255, 0.24);
    transform: scale(1.035);
  }

  /* Right-Side 2x2 Phase Grid */
  .phase-item {
    cursor: pointer;
    padding: 1.15rem 1.25rem;
    margin-left: -1.25rem;
    border-radius: 12px;
    border-left: 3px solid transparent;
    position: relative;
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .phase-num {
    display: inline-block;
    font-size: 1.35rem;
    font-weight: 700;
    line-height: 1.1;
    color: var(--ma-exec-gold);
    margin-bottom: 0.45rem;
    transition: transform 0.35s ease, color 0.35s ease;
  }

  .phase-title {
    font-size: 1.12rem;
    font-weight: 700;
    color: var(--ma-exec-dark);
    margin-bottom: 0.45rem;
    transition: color 0.3s ease;
  }

  .phase-desc {
    font-size: 0.94rem;
    line-height: 1.6;
    color: var(--ma-exec-muted);
    margin-bottom: 0;
  }

  /* Active / Hover State */
  .phase-item:hover,
  .phase-item:focus-within,
  .phase-item.is-active {
    background-color: #faf8f5;
    border-left-color: var(--ma-exec-gold);
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(17, 17, 17, 0.06);
  }

  .phase-item[data-phase="03"]:hover,
  .phase-item[data-phase="03"]:focus-within,
  .phase-item[data-phase="03"].is-active {
    border-left-color: var(--ma-exec-navy);
  }

  .phase-item:hover .phase-num,
  .phase-item.is-active .phase-num {
    transform: translateX(4px);
  }

  .phase-item[data-phase="03"]:hover .phase-num,
  .phase-item[data-phase="03"].is-active .phase-num {
    color: var(--ma-exec-navy);
  }

  /* Dim non-active phases smoothly when one is focused */
  .phase-grid.has-active .phase-item:not(.is-active) {
    opacity: 0.52;
  }

  @media (max-width: 767.98px) {
    .phase-item {
      margin-left: 0;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ma-hex-stage {
      animation: none;
    }
  }
</style>

<section class="ma-execution-section position-relative overflow-hidden" id="ma-execution-framework">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Left Column: Hexagonal Execution Diagram -->
      <div class="col-lg-5 order-2 order-lg-1" data-aos="zoom-in" data-aos-duration="950">
        <div class="ma-hex-stage position-relative mx-auto">
          
          <img 
            src="<?= $img ?>/m-a-execution-framework.jpg?v=<?= FILE_VERSISON ?>" 
            alt="The 4-Phase M&A Execution Framework: Strategy & Readiness, Outreach & LOI, Due Diligence & SPA, Closing & PMI" 
            class="img-fluid w-100 d-block ma-hex-img"
            loading="lazy"
          >

          <!-- Clipped Hexagon Hotspots -->
          <button 
            type="button" 
            class="hex-hotspot hotspot-phase-01" 
            data-target-phase="01" 
            aria-label="Highlight Phase 01: Strategy & Readiness"
          ></button>

          <button 
            type="button" 
            class="hex-hotspot hotspot-phase-02" 
            data-target-phase="02" 
            aria-label="Highlight Phase 02: Outreach & LOI"
          ></button>

          <button 
            type="button" 
            class="hex-hotspot hotspot-phase-03" 
            data-target-phase="03" 
            aria-label="Highlight Phase 03: Due Diligence & SPA"
          ></button>

          <button 
            type="button" 
            class="hex-hotspot hotspot-phase-04" 
            data-target-phase="04" 
            aria-label="Highlight Phase 04: Closing & PMI"
          ></button>

        </div>
      </div>

      <!-- Right Column: Heading & 2x2 Phase Grid -->
      <div class="col-lg-7 order-1 order-lg-2 ps-lg-5">
        
        <div data-aos="fade-left" data-aos-duration="800">
          <h2 class="ma-exec-heading fw-bold mb-3">
            The 4-Phase M&amp;A Execution<br>
            Framework
          </h2>
          <div class="ma-exec-divider mb-4 mb-lg-5" data-aos="zoom-in-right" data-aos-delay="200" data-aos-duration="800"></div>
        </div>

        <div class="row g-4 phase-grid">
          
          <!-- Phase 01 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="phase-item h-100" data-phase="01" tabindex="0">
              <span class="phase-num">01</span>
              <h3 class="phase-title">Strategy &amp; Readiness</h3>
              <p class="phase-desc">
                Valuation assessment, strategic alignment, CIM preparation, and target profiling.
              </p>
            </div>
          </div>

          <!-- Phase 02 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
            <div class="phase-item h-100" data-phase="02" tabindex="0">
              <span class="phase-num">02</span>
              <h3 class="phase-title">Outreach &amp; LOI</h3>
              <p class="phase-desc">
                Confidential outreach, VDR launch, non-binding Letter of Intent (LOI) negotiations.
              </p>
            </div>
          </div>

          <!-- Phase 03 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
            <div class="phase-item h-100" data-phase="03" tabindex="0">
              <span class="phase-num">03</span>
              <h3 class="phase-title">Due Diligence &amp; SPA</h3>
              <p class="phase-desc">
                QofE reviews, legal due diligence support, Definitive Purchase Agreement (SPA) drafting.
              </p>
            </div>
          </div>

          <!-- Phase 04 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            <div class="phase-item h-100" data-phase="04" tabindex="0">
              <span class="phase-num">04</span>
              <h3 class="phase-title">Closing &amp; PMI</h3>
              <p class="phase-desc">
                Funds transfer oversight, regulatory sign-offs, and 100-day post-merger integration plan.
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
    const section = document.getElementById('ma-execution-framework');
    if (!section) return;

    const hexHotspots = section.querySelectorAll('.hex-hotspot');
    const phaseItems = section.querySelectorAll('.phase-item');
    const phaseGrid = section.querySelector('.phase-grid');
    const phases = ['01', '02', '03', '04'];

    let currentIndex = 0;
    let autoPlayTimer = null;
    let isUserInteracting = false;

    function setActivePhase(phaseId) {
      hexHotspots.forEach(h => h.classList.remove('is-active'));
      phaseItems.forEach(p => p.classList.remove('is-active'));

      if (!phaseId) {
        if (phaseGrid) phaseGrid.classList.remove('has-active');
        return;
      }

      if (phaseGrid) phaseGrid.classList.add('has-active');
      const targetHex = section.querySelector(`.hex-hotspot[data-target-phase="${phaseId}"]`);
      const targetPhase = section.querySelector(`.phase-item[data-phase="${phaseId}"]`);

      if (targetHex) targetHex.classList.add('is-active');
      if (targetPhase) targetPhase.classList.add('is-active');
    }

    function startAutoCycle() {
      if (autoPlayTimer || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      autoPlayTimer = setInterval(() => {
        if (!isUserInteracting) {
          setActivePhase(phases[currentIndex]);
          currentIndex = (currentIndex + 1) % phases.length;
        }
      }, 2600);
    }

    function stopAutoCycle() {
      clearInterval(autoPlayTimer);
      autoPlayTimer = null;
    }

    // Bind manual interaction events (Mouse, Touch, Keyboard)
    const bindEvents = (elements, attr) => {
      elements.forEach(el => {
        const id = el.getAttribute(attr);
        el.addEventListener('mouseenter', () => {
          isUserInteracting = true;
          setActivePhase(id);
        });
        el.addEventListener('mouseleave', () => {
          isUserInteracting = false;
          setActivePhase(null);
        });
        el.addEventListener('focus', () => {
          isUserInteracting = true;
          setActivePhase(id);
        });
        el.addEventListener('blur', () => {
          isUserInteracting = false;
          setActivePhase(null);
        });
        el.addEventListener('click', () => {
          isUserInteracting = true;
          setActivePhase(id);
        });
      });
    };

    bindEvents(hexHotspots, 'data-target-phase');
    bindEvents(phaseItems, 'data-phase');

    // Start auto-cycle only when section enters viewport
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startAutoCycle();
        } else {
          stopAutoCycle();
          setActivePhase(null);
        }
      });
    }, { threshold: 0.3 });

    observer.observe(section);
  });
</script>

<!-- M&A Stats, Security Bridge & Consultation CTA Section -->
<style>
  :root {
    --ma-gold-bg: #b08843;
    --ma-gold-hover: #967234;
    --ma-text-dark: #111111;
    --ma-text-muted: #55595e;
  }

  .ma-cta-wrapper {
    background-color: var(--ma-gold-bg);
  }

  /* =========================================
     1. GOLD STATS BAND
     ========================================= */
  .ma-stats-band {
    background-color: var(--ma-gold-bg);
    padding-top: 4.25rem;
    padding-bottom: 10.5rem;
    margin-bottom: 0;
  }

  .ma-stat-col {
    position: relative;
  }

  @media (min-width: 992px) {
    .ma-stat-col:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 10%;
      height: 80%;
      width: 1px;
      background-color: rgba(255, 255, 255, 0.35);
      transition: background-color 0.3s ease, height 0.3s ease;
    }

    .ma-stat-col:hover::after {
      background-color: rgba(255, 255, 255, 0.75);
      height: 90%;
      top: 5%;
    }
  }

  .ma-stat-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ma-stat-box:hover {
    transform: translateY(-4px);
  }

  .ma-stat-number {
    font-size: clamp(2rem, 3.2vw, 2.75rem);
    line-height: 1.15;
    letter-spacing: -0.02em;
  }

  .ma-stat-label {
    font-size: 0.98rem;
    line-height: 1.45;
    opacity: 0.94;
  }

  /* =========================================
     1.5 ZERO-HEIGHT FLOATING SECURITY BRIDGE CARD
     ========================================= */
  .ma-security-bridge {
    position: relative;
    height: 0;
    overflow: visible;
    z-index: 10;
    pointer-events: none;
  }

  .ma-security-bridge > .container {
    transform: translateY(-64%);
  }

  .ma-security-card {
    pointer-events: auto;
    max-width: 950px;
    margin-left: auto;
    margin-right: auto;
    padding: 2.15rem 2.25rem 1.7rem;
    background: rgba(255, 255, 255, 0.64);
    border: 1px solid rgba(255, 255, 255, 0.75);
    border-radius: 16px;
    box-shadow: 0 18px 42px rgba(17, 17, 17, 0.08);
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.4s ease;
  }

  .ma-security-card:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, 0.78);
    box-shadow: 0 24px 52px rgba(17, 17, 17, 0.12);
  }

  .ma-security-title {
    font-size: clamp(1.32rem, 2.2vw, 1.75rem);
    color: var(--ma-text-dark);
    letter-spacing: -0.015em;
    margin-top: 0.65rem;
    margin-bottom: 65px;
  }

  .ma-security-list {
    gap: 0.5rem 0.95rem;
  }

  .ma-security-item {
    font-size: clamp(0.84rem, 1vw, 0.93rem);
    font-weight: 500;
    color: #2b2f33;
    padding: 0.2rem 0.35rem;
    transition: color 0.25s ease, transform 0.25s ease;
    cursor: default;
  }

  .ma-security-item:hover {
    color: #000000;
    transform: translateY(-2px);
  }

  .ma-security-divider {
    width: 1px;
    height: 15px;
    background-color: rgba(43, 47, 51, 0.35);
  }

  /* =========================================
     2. FULL-BLEED BANNER & LEFT-ALIGNED CTA
     ========================================= */
  .ma-cta-banner {
    min-height: 460px;
    margin-top: 0;
    padding-top: 5rem;
    background-color: #ffffff;
    overflow: hidden;
  }

  .ma-cta-bg-layer {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    animation: maDeskDrift 16s ease-in-out infinite alternate;
    will-change: transform;
  }

  @keyframes maDeskDrift {
    0% { transform: scale(1) translateX(0); }
    100% { transform: scale(1.035) translateX(0.5%); }
  }

  /* Readability veil on smaller screens where text overlaps right-side photo */
  .ma-cta-mobile-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      270deg,
      rgba(255, 255, 255, 0.78) 0%,
      rgba(255, 255, 255, 0.95) 55%,
      rgba(255, 255, 255, 0.99) 100%
    );
    z-index: 1;
  }

  .ma-cta-title {
    font-size: clamp(1.75rem, 2.8vw, 2.45rem);
    line-height: 1.25;
    letter-spacing: -0.02em;
    color: var(--ma-text-dark);
  }

  .ma-cta-subtitle {
    font-size: clamp(0.98rem, 1.2vw, 1.08rem);
    line-height: 1.65;
    color: var(--ma-text-muted);
  }

  /* Gold Pill CTA Button */
  .ma-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.55rem;
    background-color: var(--ma-gold-bg);
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    padding: 0.78rem 1.85rem;
    border-radius: 50px;
    box-shadow: 0 8px 22px rgba(176, 136, 67, 0.28);
    transition: background-color 0.3s ease, transform 0.3s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.3s ease;
  }

  .ma-cta-btn:hover,
  .ma-cta-btn:focus-visible {
    background-color: var(--ma-gold-hover);
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(176, 136, 67, 0.38);
  }

  @media (min-width: 1200px) {
    .ma-cta-banner {
      min-height: 490px;
    }
  }

  @media (max-width: 767.98px) {
    .ma-stats-band {
      padding-bottom: 11.5rem;
    }
    .ma-security-bridge > .container {
      transform: translateY(-62%);
    }
    .ma-security-card {
      padding: 1.65rem 1.25rem 1.35rem;
    }
    .ma-security-item {
      background: rgba(255, 255, 255, 0.6);
      padding: 0.35rem 0.75rem;
      border-radius: 20px;
    }
    .ma-cta-banner {
      padding-top: 5.5rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ma-cta-bg-layer {
      animation: none;
    }
  }
</style>

<section class="ma-cta-wrapper overflow-hidden" id="ma-consultation-cta">

  <!-- Part 1: Gold Stats Strip -->
  <div class="ma-stats-band">
    <div class="container">
      <div class="row g-4 g-lg-0 justify-content-center align-items-stretch">
        
        <!-- Stat 1 -->
        <div class="col-6 col-lg-3 ma-stat-col" data-aos="fade-up" data-aos-delay="0">
          <div class="ma-stat-box h-100 px-3 px-xl-4">
            <div class="ma-stat-number fw-bold text-white mb-1">
              <span class="ma-counter-value" data-prefix="$" data-target="12" data-suffix="B+">$12B+</span>
            </div>
            <p class="ma-stat-label text-white mb-0">Total M&amp;A Volume<br>Supported</p>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="col-6 col-lg-3 ma-stat-col" data-aos="fade-up" data-aos-delay="120">
          <div class="ma-stat-box h-100 px-3 px-xl-4">
            <div class="ma-stat-number fw-bold text-white mb-1">
              <span class="ma-counter-value" data-target="250" data-suffix="+">250+</span>
            </div>
            <p class="ma-stat-label text-white mb-0">Completed<br>Transactions</p>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="col-6 col-lg-3 ma-stat-col" data-aos="fade-up" data-aos-delay="240">
          <div class="ma-stat-box h-100 px-3 px-xl-4">
            <div class="ma-stat-number fw-bold text-white mb-1">
              <span class="ma-counter-value" data-target="98" data-suffix="%">98%</span>
            </div>
            <p class="ma-stat-label text-white mb-0">Due Diligence<br>Accuracy</p>
          </div>
        </div>

        <!-- Stat 4 -->
        <div class="col-6 col-lg-3 ma-stat-col" data-aos="fade-up" data-aos-delay="360">
          <div class="ma-stat-box h-100 px-3 px-xl-4">
            <div class="ma-stat-number fw-bold text-white mb-1">
              <span class="ma-counter-value" data-target="35" data-suffix=" Days">35 Days</span>
            </div>
            <p class="ma-stat-label text-white mb-0">Avg. VDR Setup<br>&amp; Closing</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Part 1.5: Overlapping Frosted Security Bridge Card -->
  <div class="ma-security-bridge">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-9">
          
          <div 
            class="ma-security-card text-center" 
            data-aos="zoom-in-up" 
            data-aos-duration="850"
          >
            <h3 class="ma-security-title fw-bold">
              Bank-Grade Security &amp; Information Protection
            </h3>

            <ul class="ma-security-list list-unstyled d-flex flex-wrap justify-content-center align-items-center mb-0">
              <li class="ma-security-item" data-aos="fade-up" data-aos-delay="150">
                ISO 27001 Data Vault
              </li>
              <li class="ma-security-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="ma-security-item" data-aos="fade-up" data-aos-delay="250">
                SOC 2 Type II VDR
              </li>
              <li class="ma-security-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="ma-security-item" data-aos="fade-up" data-aos-delay="350">
                Strict Multi-Tier NDAs
              </li>
              <li class="ma-security-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="ma-security-item" data-aos="fade-up" data-aos-delay="450">
                FINRA / SEC Compliance Support
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Part 2: Full-Bleed Desk Graphic & Left-Aligned Content -->
  <div class="ma-cta-banner position-relative d-flex align-items-center">
    
    <div 
      class="ma-cta-bg-layer" 
      style="background-image: url('<?= $img ?>/ready-to-explore-transition.jpg?v=<?= FILE_VERSISON ?>');"
      role="img"
      aria-label="M&A Transaction binder and Advisory Desk nameplate"
    ></div>

    <div class="ma-cta-mobile-overlay d-lg-none"></div>

    <div class="container position-relative z-2 py-5">
      <div class="row justify-content-start">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-start">
          
          <div data-aos="fade-right" data-aos-duration="900">
            <h2 class="ma-cta-title fw-bold mb-3">
              Ready to Explore an<br>
              M&amp;A Transaction?
            </h2>
          </div>

          <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="900">
            <p class="ma-cta-subtitle mb-4">
              Schedule a strictly confidential consultation<br class="d-none d-sm-inline">
              with Devotion Global&rsquo;s M&amp;A Advisory Desk to<br class="d-none d-sm-inline">
              evaluate your transaction roadmap.
            </p>
          </div>

          <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="900">
            <a href="#contact" class="ma-cta-btn">
              Request Confidential M&amp;A Consultation
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const maCounters = document.querySelectorAll('.ma-counter-value');
    const duration = 1400;

    const animateMaCounter = (el) => {
      const target = parseFloat(el.getAttribute('data-target'));
      const prefix = el.getAttribute('data-prefix') || '';
      const suffix = el.getAttribute('data-suffix') || '';
      const startTime = performance.now();

      const update = (now) => {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easeOut = 1 - Math.pow(1 - progress, 3);
        const current = Math.round(easeOut * target);

        el.textContent = `${prefix}${current}${suffix}`;

        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          el.textContent = `${prefix}${target}${suffix}`;
        }
      };

      requestAnimationFrame(update);
    };

    const maObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateMaCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    maCounters.forEach(counter => maObserver.observe(counter));
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
                        <span>How does Devotion Global support Sell-Side business owners?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>We handle end-to-end deal administration—from preparing financial teasers and managing the Virtual Data Room (VDR) to screening buyers and assisting in final contract negotiation.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>What is included in Post-Merger Integration (PMI) support?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Our integration desk manages 100-day post-close action plans, customer support consolidation, IT infrastructure migration, payroll handovers, and corporate culture alignment.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>Do you assist with cross-border M&amp;A transactions?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Yes. Our global transaction desk supports cross-border deals across North America, Europe, Asia-Pacific, and Latin America with multi-currency escrow support and localized regulatory compliance.</p></div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
