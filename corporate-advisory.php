<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/corporate-advisory';
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
          "name": "Devotion Global Corporate Advisory",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global strategic consulting and business service provider offering executive corporate advisory, board governance, and enterprise transformation.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Corporate Advisory Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "French", "German"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/corporate-advisory#service",
          "name": "Devotion Global Corporate Advisory Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "Strategic C-suite consulting, board advisory, corporate governance audit, capital optimization, and global market expansion strategy.",
          "areaServed": "Global",
          "category": "Corporate Strategy & Management Consulting"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/corporate-advisory#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What corporate advisory services does Devotion Global offer?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global delivers strategic transformation consulting, board governance advising, capital structure optimization, ESG implementation, risk management framework design, and market entry strategies."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global work with corporate boards and executive leadership?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We operate as an independent senior advisory partner, providing data-driven strategic insights, governance oversight, crisis management protocols, and executive decision support directly to Boards of Directors and C-suite leadership."
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
    <img src="<?= $img ?>/corporate-advisory-hero-bg-1.jpg" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Strategic Executive Consulting</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Corporate<br><span class="ip-gold">Advisory Services</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Empowering boards, executive leadership, and multinational enterprises with strategic transformation, corporate governance frameworks, capital optimization, and global expansion guidance.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Schedule Executive Consultation</a>
            </div>
        </div>
    </div>
</header>

<!-- 2. CORE SERVICES -->
<!-- Our Corporate Advisory Capabilities Section -->
<style>
  :root {
    --ca-gold: #b08843;
    --ca-gold-dark: #967234;
    --ca-bg: #ebedf0;
    --ca-card-border: #e2e5ea;
    --ca-text-dark: #111111;
    --ca-text-muted: #4a4f55;
  }

  .ca-services-section {
    background-color: var(--ca-bg);
    padding: 5.5rem 0;
  }

  /* Pill Badge ("Our Services") */
  .ca-pill {
    display: inline-block;
    background-color: var(--ca-gold);
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    padding: 0.55rem 2.35rem;
    border-radius: 50px;
    box-shadow: 0 6px 18px rgba(176, 136, 67, 0.25);
  }

  .ca-heading {
    font-size: clamp(1.85rem, 3.1vw, 2.55rem);
    color: var(--ca-text-dark);
    letter-spacing: -0.02em;
    line-height: 1.2;
  }

  .ca-subheading {
    font-size: clamp(0.95rem, 1.15vw, 1.05rem);
    color: #6b7280;
    line-height: 1.6;
    max-width: 560px;
  }

  /* Service Cards */
  .ca-card {
    background-color: #ffffff;
    border: 1px solid var(--ca-card-border);
    border-radius: 16px;
    padding: 2.15rem 2rem;
    position: relative;
    overflow: hidden;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
  }

  .ca-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 3px;
    background-color: var(--ca-gold);
    transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ca-card:hover,
  .ca-card:focus-within {
    transform: translateY(-6px);
    border-color: rgba(176, 136, 67, 0.45);
    box-shadow: 0 18px 40px rgba(17, 17, 17, 0.07);
  }

  .ca-card:hover::after,
  .ca-card:focus-within::after {
    width: 100%;
  }

  /* Card Header (Title Left, SVG Icon Right) */
  .ca-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
  }

  .ca-card-title {
    font-size: 1.22rem;
    font-weight: 700;
    line-height: 1.32;
    color: var(--ca-text-dark);
    margin-bottom: 0;
    transition: color 0.3s ease;
  }

  .ca-card:hover .ca-card-title {
    color: var(--ca-gold-dark);
  }

  .ca-icon-wrap {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ca-icon-wrap img {
    width: 48px;
    height: 48px;
    object-fit: contain;
  }

  .ca-card:hover .ca-icon-wrap {
    transform: scale(1.08) rotate(-2deg);
  }

  /* Gold Horizontal Accent Line */
  .ca-card-divider {
    width: 72px;
    height: 2px;
    background-color: var(--ca-gold);
    margin: 1.1rem 0 1.25rem;
    transition: width 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ca-card:hover .ca-card-divider {
    width: 105px;
  }

  /* Card Body Text */
  .ca-card-desc {
    font-size: 0.94rem;
    line-height: 1.65;
    color: var(--ca-text-muted);
    margin-bottom: 0;
  }
</style>

<section class="ca-services-section" id="corporate-advisory-services">
  <div class="container">
    
    <!-- Centered Section Header -->
    <div class="text-center mb-5">
      <div data-aos="fade-down" data-aos-duration="700">
        <span class="ca-pill mb-3">Our Services</span>
      </div>
      
      <h2 class="ca-heading fw-bold mb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        Our Corporate Advisory Capabilities
      </h2>
      
      <p class="ca-subheading mx-auto mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
        Tailored corporate finance and regulatory tax advisory modules designed for multinational holdings and cross-border expansion.
      </p>
    </div>

    <!-- 3x2 Responsive Grid -->
    <div class="row g-4">
      
      <!-- Card 1: Governance Advisory -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
        <div class="ca-card h-100" tabindex="0">
          <div class="ca-card-header">
            <h3 class="ca-card-title">Governance<br>Advisory</h3>
            <div class="ca-icon-wrap">
              <img src="<?= $img ?>/governance-advisory.svg?v=<?= FILE_VERSISON ?>" alt="Governance Advisory" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ca-card-divider"></div>
          <p class="ca-card-desc">
            Maximizing business valuation through confidential teaser preparation, confidential information memorandum (CIM) creation, and auction process management.
          </p>
        </div>
      </div>

      <!-- Card 2: Strategic Enterprise Transformation -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="800">
        <div class="ca-card h-100" tabindex="0">
          <div class="ca-card-header">
            <h3 class="ca-card-title">Strategic Enterprise<br>Transformation</h3>
            <div class="ca-icon-wrap">
              <img src="<?= $img ?>/strategic-enterprise.svg?v=<?= FILE_VERSISON ?>" alt="Strategic Enterprise Transformation" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ca-card-divider"></div>
          <p class="ca-card-desc">
            Business model realignment, operational restructuring, digital transformation roadmaps, and value creation programs for complex organizations.
          </p>
        </div>
      </div>

      <!-- Card 3: Capital Structure & Optimization -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240" data-aos-duration="800">
        <div class="ca-card h-100" tabindex="0">
          <div class="ca-card-header">
            <h3 class="ca-card-title">Capital Structure<br>&amp; Optimization</h3>
            <div class="ca-icon-wrap">
              <img src="<?= $img ?>/capital-structure.svg?v=<?= FILE_VERSISON ?>" alt="Capital Structure & Optimization" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ca-card-divider"></div>
          <p class="ca-card-desc">
            Advising on optimal debt-to-equity ratios, treasury strategies, liquidity management, credit rating alignment, and corporate refinancing.
          </p>
        </div>
      </div>

      <!-- Card 4: Sustainability Strategy -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="ca-card h-100" tabindex="0">
          <div class="ca-card-header">
            <h3 class="ca-card-title">Sustainability<br>Strategy</h3>
            <div class="ca-icon-wrap">
              <img src="<?= $img ?>/sustainability.svg?v=<?= FILE_VERSISON ?>" alt="Sustainability Strategy" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ca-card-divider"></div>
          <p class="ca-card-desc">
            Designing environmental, social, and governance frameworks, sustainability reporting compliance, and decarbonization transition planning.
          </p>
        </div>
      </div>

      <!-- Card 5: Global Market Entry & Expansion -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="220" data-aos-duration="800">
        <div class="ca-card h-100" tabindex="0">
          <div class="ca-card-header">
            <h3 class="ca-card-title">Global Market<br>Entry &amp; Expansion</h3>
            <div class="ca-icon-wrap">
              <img src="<?= $img ?>/global-market.svg?v=<?= FILE_VERSISON ?>" alt="Global Market Entry & Expansion" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ca-card-divider"></div>
          <p class="ca-card-desc">
            Cross-border market entry strategy, regulatory clearance support, international entity structuring, and foreign market risk assessment.
          </p>
        </div>
      </div>

      <!-- Card 6: Crisis Management & Restructuring -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="340" data-aos-duration="800">
        <div class="ca-card h-100" tabindex="0">
          <div class="ca-card-header">
            <h3 class="ca-card-title">Crisis Management<br>&amp; Restructuring</h3>
            <div class="ca-icon-wrap">
              <img src="<?= $img ?>/crisis-management.svg?v=<?= FILE_VERSISON ?>" alt="Crisis Management & Restructuring" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="ca-card-divider"></div>
          <p class="ca-card-desc">
            Turnaround management, operational crisis response, stakeholder alignment, and financial restructuring in distressed or high-volatility environments.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3. PROCESS / PHASES -->
<!-- Our Strategic Advisory Approach Section -->
<style>
  :root {
    --sa-gold: #b08843;
    --sa-gold-deep: #856125;
    --sa-dark: #111111;
    --sa-muted: #4a4f55;
  }

  .sa-approach-section {
    background-color: #ffffff;
    padding: 5.5rem 0;
    border-bottom: 2px solid var(--sa-gold);
  }

  .sa-heading {
    font-size: clamp(1.85rem, 3vw, 2.55rem);
    line-height: 1.22;
    letter-spacing: -0.02em;
    color: var(--sa-dark);
  }

  .sa-divider {
    width: 72px;
    height: 2px;
    background-color: var(--sa-gold);
  }

  /* Left Graphic Stage & Ambient Float */
  .sa-arc-stage {
    max-width: 470px;
    animation: saArcFloat 6.5s ease-in-out infinite;
  }

  .sa-arc-img {
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
  }

  @keyframes saArcFloat {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-6px); }
  }

  /* Interactive Band Hotspots Mapped to Each Horizontal Tier of strategic-approach.png */
  .sa-band-hotspot {
    position: absolute;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
    outline: none;
    transition: background-color 0.35s ease, transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.35s ease;
  }

  /* Phase 1: Top Dome Tier */
  .sa-hotspot-01 {
    top: 1.2%;
    left: 14.5%;
    width: 79.5%;
    height: 24.8%;
    border-radius: 260px 260px 8px 8px / 170px 170px 8px 8px;
  }

  /* Phase 2: Upper-Mid Wide Tier */
  .sa-hotspot-02 {
    top: 26%;
    left: 0%;
    width: 91.5%;
    height: 24.6%;
    border-radius: 90px 90px 6px 6px / 150px 150px 6px 6px;
  }

  /* Phase 3: Lower-Mid Wide Tier */
  .sa-hotspot-03 {
    top: 50.6%;
    left: 8.5%;
    width: 91.5%;
    height: 24.7%;
    border-radius: 6px 6px 90px 90px / 6px 6px 150px 150px;
  }

  /* Phase 4: Bottom Bowl Tier */
  .sa-hotspot-04 {
    top: 75.3%;
    left: 6%;
    width: 79.5%;
    height: 24.7%;
    border-radius: 8px 8px 260px 260px / 8px 8px 170px 170px;
  }

  .sa-band-hotspot:hover,
  .sa-band-hotspot:focus-visible,
  .sa-band-hotspot.is-active {
    background: rgba(255, 255, 255, 0.22);
    box-shadow: 0 10px 28px rgba(176, 136, 67, 0.25);
    transform: scale(1.02);
  }

  /* Right-Side 2x2 Phase Grid */
  .sa-phase-item {
    cursor: pointer;
    padding: 1.15rem 1.25rem;
    margin-left: -1.25rem;
    border-radius: 12px;
    border-left: 3px solid transparent;
    position: relative;
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sa-phase-num {
    display: inline-block;
    font-size: 1.35rem;
    font-weight: 700;
    line-height: 1.1;
    color: var(--sa-gold);
    margin-bottom: 0.45rem;
    transition: transform 0.35s ease, color 0.35s ease;
  }

  .sa-phase-title {
    font-size: 1.12rem;
    font-weight: 700;
    color: var(--sa-dark);
    margin-bottom: 0.45rem;
    transition: color 0.3s ease;
  }

  .sa-phase-desc {
    font-size: 0.94rem;
    line-height: 1.6;
    color: var(--sa-muted);
    margin-bottom: 0;
  }

  /* Active / Hover State */
  .sa-phase-item:hover,
  .sa-phase-item:focus-within,
  .sa-phase-item.is-active {
    background-color: #faf8f5;
    border-left-color: var(--sa-gold);
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(17, 17, 17, 0.06);
  }

  .sa-phase-item:hover .sa-phase-num,
  .sa-phase-item.is-active .sa-phase-num {
    transform: translateX(4px);
    color: var(--sa-gold-deep);
  }

  /* Dim unfocused phases smoothly during interaction */
  .sa-phase-grid.has-active .sa-phase-item:not(.is-active) {
    opacity: 0.52;
  }

  @media (max-width: 767.98px) {
    .sa-phase-item {
      margin-left: 0;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .sa-arc-stage {
      animation: none;
    }
  }
</style>

<section class="sa-approach-section position-relative overflow-hidden" id="strategic-advisory-approach">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Left Column: Tiered Arc Graphic -->
      <div class="col-lg-5 order-2 order-lg-1" data-aos="zoom-in" data-aos-duration="950">
        <div class="sa-arc-stage position-relative mx-auto">
          
          <img 
            src="<?= $img ?>/strategic-approach.png?v=<?= FILE_VERSISON ?>" 
            alt="Our Strategic Advisory Approach: Diagnostic & Audit, Strategic Design, Execution Guidance, Review & Optimization" 
            class="img-fluid w-100 d-block sa-arc-img"
            loading="lazy"
          >

          <!-- Interactive Band Hotspots -->
          <button 
            type="button" 
            class="sa-band-hotspot sa-hotspot-01" 
            data-sa-target="01" 
            aria-label="Highlight Phase 1: Diagnostic & Audit"
          ></button>

          <button 
            type="button" 
            class="sa-band-hotspot sa-hotspot-02" 
            data-sa-target="02" 
            aria-label="Highlight Phase 2: Strategic Design"
          ></button>

          <button 
            type="button" 
            class="sa-band-hotspot sa-hotspot-03" 
            data-sa-target="03" 
            aria-label="Highlight Phase 3: Execution Guidance"
          ></button>

          <button 
            type="button" 
            class="sa-band-hotspot sa-hotspot-04" 
            data-sa-target="04" 
            aria-label="Highlight Phase 4: Review & Optimization"
          ></button>

        </div>
      </div>

      <!-- Right Column: Heading & 2x2 Phase Grid -->
      <div class="col-lg-7 order-1 order-lg-2 ps-lg-5">
        
        <div data-aos="fade-left" data-aos-duration="800">
          <h2 class="sa-heading fw-bold mb-3">
            Our Strategic<br>
            Advisory Approach
          </h2>
          <div class="sa-divider mb-4 mb-lg-5" data-aos="zoom-in-right" data-aos-delay="200" data-aos-duration="800"></div>
        </div>

        <div class="row g-4 sa-phase-grid">
          
          <!-- Phase 01 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="sa-phase-item h-100" data-sa-phase="01" tabindex="0">
              <span class="sa-phase-num">01</span>
              <h3 class="sa-phase-title">Diagnostic &amp; Audit</h3>
              <p class="sa-phase-desc">
                Operational audit, governance review, financial baseline benchmarking, and risk mapping.
              </p>
            </div>
          </div>

          <!-- Phase 02 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
            <div class="sa-phase-item h-100" data-sa-phase="02" tabindex="0">
              <span class="sa-phase-num">02</span>
              <h3 class="sa-phase-title">Strategic Design</h3>
              <p class="sa-phase-desc">
                C-suite strategy alignment, policy drafting, governance framework creation, and KPI setting.
              </p>
            </div>
          </div>

          <!-- Phase 03 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
            <div class="sa-phase-item h-100" data-sa-phase="03" tabindex="0">
              <span class="sa-phase-num">03</span>
              <h3 class="sa-phase-title">Execution Guidance</h3>
              <p class="sa-phase-desc">
                Change management oversight, PMO establishment, capital deployment, and stakeholder communication.
              </p>
            </div>
          </div>

          <!-- Phase 04 -->
          <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            <div class="sa-phase-item h-100" data-sa-phase="04" tabindex="0">
              <span class="sa-phase-num">04</span>
              <h3 class="sa-phase-title">Review &amp; Optimization</h3>
              <p class="sa-phase-desc">
                Continuous governance monitoring, annual board assessments, and strategic pivot execution.
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
    const saSection = document.getElementById('strategic-advisory-approach');
    if (!saSection) return;

    const bandHotspots = saSection.querySelectorAll('.sa-band-hotspot');
    const saPhaseItems = saSection.querySelectorAll('.sa-phase-item');
    const saPhaseGrid = saSection.querySelector('.sa-phase-grid');
    const saPhases = ['01', '02', '03', '04'];

    let saIndex = 0;
    let saTimer = null;
    let saUserInteracting = false;

    function setActiveSaPhase(phaseId) {
      bandHotspots.forEach(b => b.classList.remove('is-active'));
      saPhaseItems.forEach(p => p.classList.remove('is-active'));

      if (!phaseId) {
        if (saPhaseGrid) saPhaseGrid.classList.remove('has-active');
        return;
      }

      if (saPhaseGrid) saPhaseGrid.classList.add('has-active');
      const targetBand = saSection.querySelector(`.sa-band-hotspot[data-sa-target="${phaseId}"]`);
      const targetItem = saSection.querySelector(`.sa-phase-item[data-sa-phase="${phaseId}"]`);

      if (targetBand) targetBand.classList.add('is-active');
      if (targetItem) targetItem.classList.add('is-active');
    }

    function startSaCycle() {
      if (saTimer || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      saTimer = setInterval(() => {
        if (!saUserInteracting) {
          setActiveSaPhase(saPhases[saIndex]);
          saIndex = (saIndex + 1) % saPhases.length;
        }
      }, 2600);
    }

    function stopSaCycle() {
      clearInterval(saTimer);
      saTimer = null;
    }

    const bindSaEvents = (elements, attr) => {
      elements.forEach(el => {
        const id = el.getAttribute(attr);
        el.addEventListener('mouseenter', () => {
          saUserInteracting = true;
          setActiveSaPhase(id);
        });
        el.addEventListener('mouseleave', () => {
          saUserInteracting = false;
          setActiveSaPhase(null);
        });
        el.addEventListener('focus', () => {
          saUserInteracting = true;
          setActiveSaPhase(id);
        });
        el.addEventListener('blur', () => {
          saUserInteracting = false;
          setActiveSaPhase(null);
        });
        el.addEventListener('click', () => {
          saUserInteracting = true;
          setActiveSaPhase(id);
        });
      });
    };

    bindSaEvents(bandHotspots, 'data-sa-target');
    bindSaEvents(saPhaseItems, 'data-sa-phase');

    const saObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startSaCycle();
        } else {
          stopSaCycle();
          setActiveSaPhase(null);
        }
      });
    }, { threshold: 0.3 });

    saObserver.observe(saSection);
  });
</script>

<!-- 4. KEY NUMBERS -->
<!-- Corporate Advisory Stats, Governance Bridge & Executive Consultation CTA Section -->
<style>
  :root {
    --ca-gold-bg: #b08843;
    --ca-gold-hover: #967234;
    --ca-text-dark: #111111;
    --ca-text-muted: #55595e;
  }

  .ca-cta-wrapper {
    background-color: var(--ca-gold-bg);
  }

  /* =========================================
     1. GOLD STATS BAND
     ========================================= */
  .ca-stats-band {
    background-color: var(--ca-gold-bg);
    padding-top: 4.25rem;
    padding-bottom: 10.5rem;
    margin-bottom: 0;
  }

  .ca-stat-col {
    position: relative;
  }

  @media (min-width: 992px) {
    .ca-stat-col:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 10%;
      height: 80%;
      width: 1px;
      background-color: rgba(255, 255, 255, 0.35);
      transition: background-color 0.3s ease, height 0.3s ease;
    }

    .ca-stat-col:hover::after {
      background-color: rgba(255, 255, 255, 0.75);
      height: 90%;
      top: 5%;
    }
  }

  .ca-stat-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ca-stat-box:hover {
    transform: translateY(-4px);
  }

  .ca-stat-number {
    font-size: clamp(2rem, 3.2vw, 2.75rem);
    line-height: 1.15;
    letter-spacing: -0.02em;
  }

  .ca-stat-label {
    font-size: 0.98rem;
    line-height: 1.45;
    opacity: 0.94;
  }

  /* =========================================
     1.5 ZERO-HEIGHT FLOATING GOVERNANCE CARD
     ========================================= */
  .ca-governance-bridge {
    position: relative;
    height: 0;
    overflow: visible;
    z-index: 10;
    pointer-events: none;
  }

  .ca-governance-bridge > .container {
    transform: translateY(-64%);
  }

  .ca-governance-card {
    pointer-events: auto;
    max-width: 980px;
    margin-left: auto;
    margin-right: auto;
    padding: 2rem 0rem 2rem 0rem;
    background: rgba(255, 255, 255, 0.64);
    border: 1px solid rgba(255, 255, 255, 0.78);
    border-radius: 16px;
    box-shadow: 0 18px 42px rgba(17, 17, 17, 0.08);
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.4s ease;
  }

  .ca-governance-card:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, 0.78);
    box-shadow: 0 24px 52px rgba(17, 17, 17, 0.12);
  }

  .ca-governance-title {
    font-size: clamp(1.32rem, 2.2vw, 1.75rem);
    color: var(--ca-text-dark);
    letter-spacing: -0.015em;
    margin-bottom: 1.45rem;
  }

  .ca-governance-list {
    gap: 0.5rem 0.95rem;
  }

  .ca-governance-item {
    font-size: clamp(0.84rem, 1vw, 0.93rem);
    font-weight: 500;
    color: #2b2f33;
    padding: 0.2rem 0.35rem;
    transition: color 0.25s ease, transform 0.25s ease;
    cursor: default;
    margin-top: 55px;
  }

  .ca-governance-item:hover {
    color: #000000;
    transform: translateY(-2px);
  }

  .ca-governance-divider {
    width: 1px;
    height: 15px;
    background-color: rgba(43, 47, 51, 0.35);
    margin-top: 55px;
  }

  /* =========================================
     2. FULL-BLEED BANNER & LEFT-ALIGNED CTA
     ========================================= */
  .ca-cta-banner {
    min-height: 460px;
    margin-top: 0;
    padding-top: 5rem;
    background-color: #f6f7f9;
    overflow: hidden;
  }

  .ca-cta-bg-layer {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    animation: caDeskDrift 16s ease-in-out infinite alternate;
    will-change: transform;
  }

  @keyframes caDeskDrift {
    0% { transform: scale(1) translateX(0); }
    100% { transform: scale(1.035) translateX(0.5%); }
  }

  /* Readability veil on smaller screens where text overlaps right-side graphic */
  .ca-cta-mobile-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      270deg,
      rgba(246, 247, 249, 0.78) 0%,
      rgba(246, 247, 249, 0.95) 55%,
      rgba(246, 247, 249, 0.99) 100%
    );
    z-index: 1;
  }

  .ca-cta-title {
    font-size: clamp(1.75rem, 2.8vw, 2.45rem);
    line-height: 1.25;
    letter-spacing: -0.02em;
    color: var(--ca-text-dark);
  }

  .ca-cta-subtitle {
    font-size: clamp(0.98rem, 1.2vw, 1.08rem);
    line-height: 1.65;
    color: var(--ca-text-muted);
  }

  /* Gold Pill CTA Button */
  .ca-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.55rem;
    background-color: var(--ca-gold-bg);
    color: #ffffff;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    padding: 0.78rem 1.85rem;
    border-radius: 50px;
    box-shadow: 0 8px 22px rgba(176, 136, 67, 0.28);
    transition: background-color 0.3s ease, transform 0.3s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.3s ease;
  }

  .ca-cta-btn:hover,
  .ca-cta-btn:focus-visible {
    background-color: var(--ca-gold-hover);
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(176, 136, 67, 0.38);
  }

  @media (min-width: 1200px) {
    .ca-cta-banner {
      min-height: 490px;
    }
  }

  @media (max-width: 767.98px) {
    .ca-stats-band {
      padding-bottom: 11.5rem;
    }
    .ca-governance-bridge > .container {
      transform: translateY(-62%);
    }
    .ca-governance-card {
      padding: 1.65rem 1.25rem 1.35rem;
    }
    .ca-governance-item {
      background: rgba(255, 255, 255, 0.65);
      padding: 0.35rem 0.75rem;
      border-radius: 20px;
    }
    .ca-cta-banner {
      padding-top: 5.5rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ca-cta-bg-layer {
      animation: none;
    }
  }
</style>

<section class="ca-cta-wrapper overflow-hidden" id="corporate-advisory-cta">

  <!-- Part 1: Gold Stats Strip -->
  <div class="ca-stats-band">
    <div class="container">
      <div class="row g-4 g-lg-0 justify-content-center align-items-stretch">
        
        <!-- Stat 1 -->
        <div class="col-6 col-lg-3 ca-stat-col" data-aos="fade-up" data-aos-delay="0">
          <div class="ca-stat-box h-100 px-3 px-xl-4">
            <div class="ca-stat-number fw-bold text-white mb-1">
              <span class="ca-counter-value" data-prefix="$" data-target="50" data-suffix="B+">$50B+</span>
            </div>
            <p class="ca-stat-label text-white mb-0">Enterprise Value<br>Advised</p>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="col-6 col-lg-3 ca-stat-col" data-aos="fade-up" data-aos-delay="120">
          <div class="ca-stat-box h-100 px-3 px-xl-4">
            <div class="ca-stat-number fw-bold text-white mb-1">
              <span class="ca-counter-value" data-target="180" data-suffix="+">180+</span>
            </div>
            <p class="ca-stat-label text-white mb-0">Corporate<br>Transformations</p>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="col-6 col-lg-3 ca-stat-col" data-aos="fade-up" data-aos-delay="240">
          <div class="ca-stat-box h-100 px-3 px-xl-4">
            <div class="ca-stat-number fw-bold text-white mb-1">
              <span class="ca-counter-value" data-target="40" data-suffix="+">40+</span>
            </div>
            <p class="ca-stat-label text-white mb-0">Global Jurisdictions</p>
          </div>
        </div>

        <!-- Stat 4 -->
        <div class="col-6 col-lg-3 ca-stat-col" data-aos="fade-up" data-aos-delay="360">
          <div class="ca-stat-box h-100 px-3 px-xl-4">
            <div class="ca-stat-number fw-bold text-white mb-1">
              <span class="ca-counter-value" data-target="100" data-suffix="%">100%</span>
            </div>
            <p class="ca-stat-label text-white mb-0">Independent<br>Governance Focus</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Part 1.5: Overlapping Frosted Governance Bridge Card -->
  <div class="ca-governance-bridge">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-9">
          
          <div 
            class="ca-governance-card text-center" 
            data-aos="zoom-in-up" 
            data-aos-duration="850"
          >
            <h3 class="ca-governance-title fw-bold">
              Global Governance &amp; Compliance Alignment
            </h3>

            <ul class="ca-governance-list list-unstyled d-flex flex-wrap justify-content-center align-items-center mb-0">
              <li class="ca-governance-item" data-aos="fade-up" data-aos-delay="150">
                ISO 31000 Risk Management
              </li>
              <li class="ca-governance-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="ca-governance-item" data-aos="fade-up" data-aos-delay="250">
                GRI &amp; ISSB Standards
              </li>
              <li class="ca-governance-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="ca-governance-item" data-aos="fade-up" data-aos-delay="350">
                OECD Corporate Governance
              </li>
              <li class="ca-governance-divider d-none d-md-inline-block" aria-hidden="true"></li>
              
              <li class="ca-governance-item" data-aos="fade-up" data-aos-delay="450">
                SOX &amp; Regulatory Audit
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Part 2: Full-Bleed Desk Graphic & Left-Aligned Content -->
  <div class="ca-cta-banner position-relative d-flex align-items-center">
    
    <div 
      class="ca-cta-bg-layer" 
      style="background-image: url('<?= $img ?>/corporate-advisory-desk.png?v=<?= FILE_VERSISON ?>');"
      role="img"
      aria-label="Corporate Advisory Desk, Confidential Executive Consultation, Corporate Strategy, and Strategic Goals"
    ></div>

    <div class="ca-cta-mobile-overlay d-lg-none"></div>

    <div class="container position-relative z-2 py-5">
      <div class="row justify-content-start">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-start">
          
          <div data-aos="fade-right" data-aos-duration="900">
            <h2 class="ca-cta-title fw-bold mb-3">
              Transform Your Corporate<br>
              Strategy Today
            </h2>
          </div>

          <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="900">
            <p class="ca-cta-subtitle mb-4">
              Schedule a confidential executive consultation<br class="d-none d-sm-inline">
              with Devotion Global&rsquo;s Corporate Advisory<br class="d-none d-sm-inline">
              Desk to align your strategic goals.
            </p>
          </div>

          <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="900">
            <a href="#contact" class="ca-cta-btn">
              Schedule Executive Consultation
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const caCounters = document.querySelectorAll('.ca-counter-value');
    const duration = 1400;

    const animateCaCounter = (el) => {
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

    const caObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCaCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    caCounters.forEach(counter => caObserver.observe(counter));
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
                        <span>What sets Devotion Global's corporate advisory apart from traditional consulting?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>We combine high-level strategic counsel with ongoing operational execution support. Rather than providing static reports, our senior partners work alongside executives and boards to drive measurable value creation and governance compliance.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>How do you support mid-market corporations vs. Fortune 500 enterprises?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>We tailor our engagement models dynamically. For mid-market companies, we often serve as fractional board advisors and transformation leads; for large enterprises, we focus on specialized restructuring, ESG strategy, or cross-border expansion desks.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>Can Devotion Global assist with corporate crisis response?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Yes. Our turn-key crisis management team provides rapid-deployment advisory covering liquidity stabilization, regulatory escalation, stakeholder communication, and board-level risk mitigation.</p></div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
