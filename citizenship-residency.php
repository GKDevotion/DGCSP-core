<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/citizenship-residency';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Hero background: drop your own hero-bg.webp into the folder above and it is used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp?v=' . FILE_VERSISON)
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';

?>

<section class="sovereign-hero">
  <style>
    .sovereign-hero {
      position: relative;
      width: 100%;
      min-height: 540px;
      display: flex;
      align-items: center;
      /* Uses your clean background image */
      background: #f5f5f5 url('<?= $img ?>/Strategic-Citizenship-Global-Residency.png') no-repeat right center;
      background-size: cover;
      overflow: hidden;
      padding: 64px 20px;
      box-sizing: border-box;
    }

    .sovereign-hero .hero-container {
      max-width: 1240px;
      width: 100%;
      margin: 0 auto;
      padding: 0 4%;
    }

    .sovereign-hero .hero-content {
      max-width: 580px;
      z-index: 2;
    }

    .sovereign-hero .hero-eyebrow {
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: #333333;
      margin: 0 0 18px 0;
    }

    .sovereign-hero .hero-divider {
      width: 75px;
      height: 1.5px;
      background-color: #a6823e;
      margin-bottom: 28px;
      transform-origin: left center;
    }

    .sovereign-hero .hero-title {
      font-size: clamp(32px, 4vw, 48px);
      font-weight: 700;
      line-height: 1.18;
      color: #141414;
      margin: 0 0 22px 0;
    }

    .sovereign-hero .hero-title .highlight-gold {
      color: #a6823e;
    }

    .sovereign-hero .hero-description {
      font-size: 16px;
      line-height: 1.65;
      color: #5c5c5c;
      margin: 0 0 24px 0;
      max-width: 510px;
    }

    .sovereign-hero .hero-highlights {
      list-style: none;
      padding: 0;
      margin: 0 0 32px 0;
      display: flex;
      flex-wrap: wrap;
      gap: 12px 24px;
    }

    .sovereign-hero .hero-highlights li {
      font-size: 13.5px;
      font-weight: 500;
      color: #2b2b2b;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .sovereign-hero .hero-highlights li::before {
      content: "";
      width: 6px;
      height: 6px;
      background-color: #a6823e;
      border-radius: 50%;
      display: inline-block;
    }

    .sovereign-hero .hero-actions {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .sovereign-hero .hero-btn {
      display: inline-block;
      background-color: #a6823e;
      color: #ffffff;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 0.03em;
      text-decoration: none;
      padding: 14px 30px;
      border-radius: 2px;
      transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
    }

    .sovereign-hero .hero-btn:hover {
      background-color: #8c6b2f;
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(166, 130, 62, 0.25);
    }

    .sovereign-hero .hero-note {
      font-size: 12.5px;
      color: #6e6e6e;
      font-style: italic;
    }

    /* Text Reveal Animation States */
    .sovereign-hero .reveal-item {
      opacity: 0;
      transform: translateY(22px);
      transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
                  transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-hero .hero-divider.reveal-item {
      transform: scaleX(0);
    }

    .sovereign-hero .reveal-item.is-visible {
      opacity: 1;
      transform: translateY(0) scaleX(1);
    }

    /* Responsive Adjustments for Tablet/Mobile */
    @media (max-width: 991px) {
      .sovereign-hero {
        background-position: 75% center;
        min-height: 460px;
      }
      .sovereign-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(247, 247, 247, 0.95) 50%, rgba(247, 247, 247, 0.45) 100%);
        z-index: 1;
      }
      .sovereign-hero .hero-content {
        position: relative;
      }
    }
  </style>

  <div class="hero-container">
    <div class="hero-content">
      <p class="hero-eyebrow reveal-item" data-delay="100">
        Private Wealth &amp; Sovereign Advisory
      </p>

      <div class="hero-divider reveal-item" data-delay="220"></div>

      <h1 class="hero-title reveal-item" data-delay="360">
        Strategic Citizenship &amp; <br>
        <span class="highlight-gold">Residency Optimization</span>
      </h1>

      <p class="hero-description reveal-item" data-delay="500">
        Protect family capital, acquire sovereign mobility, and legally optimize multi-jurisdictional tax liabilities with tailor-made dual citizenship pathways.
      </p>

      <ul class="hero-highlights reveal-item" data-delay="640">
        <li>Second Passport Programs</li>
        <li>Cross-Border Tax Structuring</li>
        <li>Generational Wealth Protection</li>
      </ul>

      <div class="hero-actions reveal-item" data-delay="780">
        <a href="#consultation" class="hero-btn">Request Consultation</a>
        <span class="hero-note">Discreet, bespoke advisory for HNW families</span>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const revealItems = document.querySelectorAll(".sovereign-hero .reveal-item");

      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const el = entry.target;
              const delay = parseInt(el.getAttribute("data-delay") || "0", 10);

              setTimeout(() => {
                el.classList.add("is-visible");
              }, delay);

              obs.unobserve(el);
            }
          });
        },
        { threshold: 0.15 }
      );

      revealItems.forEach((item) => observer.observe(item));
    })();
  </script>
</section>

<section class="sovereign-ecosystem-section">
  <style>
    .sovereign-ecosystem-section {
      --gold-primary: #a6823e;
      --gold-dark: #8c6b2f;
      --gold-tint: #ddd1ba;
      --slate-dark: #4e5663;
      --text-dark: #181818;
      --text-muted: #5a5a5a;
      --bg-light: #f3f4f6;
      position: relative;
      width: 100%;
      overflow: hidden;
      background-color: var(--bg-light);
    }

    .sovereign-ecosystem-section * {
      box-sizing: border-box;
    }

    /* =========================================
       DIV 1: TOP GOLD METRICS BAND
       ========================================= */
    .top-metrics-band {
      background: linear-gradient(135deg, #ab8642 0%, #9b7735 100%);
      color: #ffffff;
      padding: 64px 20px 185px;
    }

    .eco-container {
      max-width: 1140px;
      margin: 0 auto;
    }

    .metrics-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }

    .metric-item {
      padding: 0 24px;
      border-right: 1px solid rgba(255, 255, 255, 0.28);
    }

    .metric-item:first-child {
      padding-left: 0;
    }

    .metric-item:last-child {
      border-right: none;
      padding-right: 0;
    }

    .metric-number {
      font-size: clamp(28px, 3vw, 38px);
      font-weight: 700;
      letter-spacing: -0.02em;
      margin: 0 0 8px 0;
      line-height: 1.1;
    }

    .metric-label {
      font-size: 14px;
      line-height: 1.45;
      color: rgba(255, 255, 255, 0.92);
      margin: 0;
      font-weight: 400;
    }

    /* =========================================
       DIV 2: OVERLAPPING ESTIMATOR CARD
       ========================================= */
    .estimator-overlay-wrapper {
      position: relative;
      z-index: 10;
      margin-top: -135px;
      padding: 0 20px;
    }

    .estimator-card {
      max-width: 1020px;
      margin: 0 auto;
      background: #ffffff61;
      border-radius: 14px;
      box-shadow: 0 22px 50px rgba(18, 24, 38, 0.09);
      overflow: hidden;
      border: 1px solid rgba(166, 130, 62, 0.18);
    }

    .estimator-header {
      background-color: var(--gold-tint);
      padding: 36px 28px 32px;
      text-align: center;
    }

    .suite-badge {
      display: inline-block;
      background-color: var(--gold-primary);
      color: #ffffff;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 5px 16px;
      border-radius: 3px;
      margin-bottom: 14px;
    }

    .estimator-title {
      font-size: clamp(24px, 3vw, 32px);
      font-weight: 700;
      color: var(--text-dark);
      margin: 0 0 10px 0;
    }

    .estimator-subtitle {
      font-size: 13.5px;
      color: #4a453c;
      margin: 0 auto;
      max-width: 640px;
      line-height: 1.5;
    }

    .estimator-body {
      padding: 38px 46px 42px;
      display: grid;
      grid-template-columns: 1.08fr 0.92fr;
      gap: 40px;
      align-items: center;
      /* background: #ffffff; */
    }

    .control-group {
      margin-bottom: 22px;
    }

    .control-group:last-child {
      margin-bottom: 0;
    }

    .control-label {
      display: block;
      font-size: 12.5px;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 9px;
    }

    .styled-select {
      width: 100%;
      padding: 12px 38px 12px 14px;
      font-size: 13.5px;
      color: #2b2b2b;
      background-color: #ffffff;
      border: 1px solid #d5d8de;
      border-radius: 5px;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23555' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 14px center;
      cursor: pointer;
      transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .styled-select:focus {
      outline: none;
      border-color: var(--gold-primary);
      box-shadow: 0 0 0 3px rgba(166, 130, 62, 0.14);
    }

    .family-toggle-group {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      border: 1px solid #d5d8de;
      border-radius: 5px;
      overflow: hidden;
    }

    .family-btn {
      background: #ffffff;
      border: none;
      border-right: 1px solid #d5d8de;
      padding: 11px 10px;
      font-size: 13px;
      font-weight: 500;
      color: #444444;
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .family-btn:last-child {
      border-right: none;
    }

    .family-btn:hover:not(.active) {
      background: #f8f9fa;
    }

    .family-btn.active {
      background-color: var(--slate-dark);
      color: #ffffff;
      font-weight: 600;
    }

    /* Right Output Box */
    .parameters-box {
      border: 1px solid #cbb382;
      border-radius: 10px;
      padding: 26px 28px;
      background: #fdfcfa;
    }

    .parameters-heading {
      font-size: 15px;
      font-weight: 700;
      color: var(--text-dark);
      margin: 0 0 14px 0;
    }

    .param-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
      border-bottom: 1px solid #ece6da;
      font-size: 13px;
    }

    .param-row:last-of-type {
      border-bottom: none;
      margin-bottom: 16px;
    }

    .param-key {
      color: var(--text-muted);
    }

    .param-val {
      font-weight: 700;
      color: var(--text-dark);
      transition: opacity 0.2s ease, transform 0.2s ease;
    }

    .param-val.updating {
      opacity: 0.35;
      transform: translateY(-2px);
    }

    .quotation-btn {
      display: block;
      width: 100%;
      text-align: center;
      background-color: var(--gold-primary);
      color: #ffffff;
      font-size: 13px;
      font-weight: 600;
      text-decoration: none;
      padding: 12px 18px;
      border-radius: 4px;
      transition: background-color 0.25s ease, transform 0.2s ease;
    }

    .quotation-btn:hover {
      background-color: var(--gold-dark);
      transform: translateY(-1px);
    }

    /* =========================================
       DIV 3: BOTTOM 3D ADVISORY PILLARS SECTION
       ========================================= */
    .bottom-pillars-band {
      /* padding: 64px 20px 80px; */
      position: relative;
      z-index: 5;
    }

    .pillars-grid {
      max-width: 1020px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }

    .pillar-card {
      padding: 28px 24px 30px;
      text-align: center;
      transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.35s ease;
    }


    .pillar-img-wrap img {
      max-height: 165px;
      width: auto;
      object-fit: contain;
      animation: gentleFloat 4.5s ease-in-out infinite;
    }

    .pillar-card:nth-child(2) .pillar-img-wrap img {
      animation-delay: 0.8s;
    }

    .pillar-card:nth-child(3) .pillar-img-wrap img {
      animation-delay: 1.6s;
    }

    @keyframes gentleFloat {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-6px); }
    }

    /* =========================================
       AOS (ANIMATE ON SCROLL) SYSTEM
       ========================================= */
    [data-aos] {
      opacity: 0;
      transition-property: opacity, transform;
      transition-duration: 0.85s;
      transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
    }

    [data-aos="fade-up"] {
      transform: translateY(36px);
    }

    [data-aos="fade-down"] {
      transform: translateY(-28px);
    }

    [data-aos="zoom-in-up"] {
      transform: translateY(42px) scale(0.96);
    }

    [data-aos].aos-animate {
      opacity: 1;
      transform: translateY(0) scale(1);
    }

    /* =========================================
       RESPONSIVE BREAKPOINTS
       ========================================= */
    @media (max-width: 960px) {
      .metrics-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 28px 16px;
      }
      .metric-item:nth-child(2) {
        border-right: none;
      }
      .metric-item {
        padding: 0 12px;
      }
      .estimator-body {
        grid-template-columns: 1fr;
        padding: 28px 24px;
        gap: 28px;
      }
      .pillars-grid {
        grid-template-columns: 1fr;
        max-width: 480px;
      }
    }

    @media (max-width: 540px) {
      .metrics-grid {
        grid-template-columns: 1fr;
        text-align: center;
      }
      .metric-item {
        border-right: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding: 0 0 18px 0;
      }
      .metric-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
      }
    }
  </style>

  <!-- DIV 1: TOP GOLD METRICS BANNER -->
  <div class="top-metrics-band">
    <div class="eco-container">
      <div class="metrics-grid">
        <div class="metric-item" data-aos="fade-down" data-aos-delay="0">
          <h3 class="metric-number"><span class="counter" data-target="2.4" data-decimals="1" data-prefix="$" data-suffix="B+">$0B+</span></h3>
          <p class="metric-label">Capital Placement<br>Guided</p>
        </div>
        <div class="metric-item" data-aos="fade-down" data-aos-delay="120">
          <h3 class="metric-number"><span class="counter" data-target="100" data-decimals="0" data-suffix="%">0%</span></h3>
          <p class="metric-label">Regulatory<br>Compliance Record</p>
        </div>
        <div class="metric-item" data-aos="fade-down" data-aos-delay="240">
          <h3 class="metric-number"><span class="counter" data-target="170" data-decimals="0" data-suffix="+">0+</span></h3>
          <p class="metric-label">Global<br>Destinations Access</p>
        </div>
        <div class="metric-item" data-aos="fade-down" data-aos-delay="360">
          <h3 class="metric-number"><span class="counter" data-target="35" data-decimals="0" data-suffix="+">0+</span></h3>
          <p class="metric-label">Sovereign<br>Jurisdictions</p>
        </div>
      </div>
    </div>
  </div>

  <!-- DIV 2: OVERLAPPING INTERACTIVE ESTIMATOR CARD -->
  <div class="estimator-overlay-wrapper">
    <div class="estimator-card" data-aos="zoom-in-up" data-aos-delay="180">
      <div class="estimator-header">
        <span class="suite-badge">Interactive Suite</span>
        <h2 class="estimator-title">Residency &amp; Citizenship Investment Estimator</h2>
        <p class="estimator-subtitle">
          Simulate required capital thresholds, processing lead times, and global mobility advantages based on your strategic sovereign goals.
        </p>
      </div>

      <div class="estimator-body">
        <!-- Left Controls -->
        <div class="estimator-controls">
          <div class="control-group">
            <label class="control-label" for="jurisdictionSelect">Select Preferred Jurisdiction</label>
            <select id="jurisdictionSelect" class="styled-select">
              <option value="stkitts" selected>St. Kitts &amp; Nevis (CBI – Fast Pass)</option>
              <option value="portugal">Portugal (Golden Visa – EU Residency)</option>
              <option value="malta">Malta (MEIN – Direct EU Citizenship)</option>
              <option value="uae">United Arab Emirates (10-Year Golden Visa)</option>
              <option value="greece">Greece (Real Estate Residency Pathway)</option>
            </select>
          </div>

          <div class="control-group">
            <label class="control-label">Primary Family Size</label>
            <div class="family-toggle-group" id="familySizeGroup">
              <button type="button" class="family-btn" data-size="single">Single</button>
              <button type="button" class="family-btn" data-size="couple">Couple</button>
              <button type="button" class="family-btn active" data-size="family4">Family of 4</button>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="objectiveSelect">Primary Strategic Objective</label>
            <select id="objectiveSelect" class="styled-select">
              <option value="tax" selected>Tax Efficiency &amp; Asset Protection</option>
              <option value="mobility">Global Visa-Free Mobility &amp; Travel</option>
              <option value="legacy">Generational Succession &amp; Education</option>
              <option value="planb">Geopolitical Diversification (Plan B)</option>
            </select>
          </div>
        </div>

        <!-- Right Output Box -->
        <div class="parameters-box">
          <h3 class="parameters-heading">Estimated Parameters</h3>
          <div class="param-row">
            <span class="param-key">Min Capital Outlay:</span>
            <span class="param-val" id="outlayVal">$250,000 USD</span>
          </div>
          <div class="param-row">
            <span class="param-key">Avg Processing Time:</span>
            <span class="param-val" id="timeVal">4 - 6 Months</span>
          </div>
          <div class="param-row">
            <span class="param-key">Visa-Free Score:</span>
            <span class="param-val" id="visaVal">157 Countries</span>
          </div>
          <div class="param-row">
            <span class="param-key">Physical Stay Requirement:</span>
            <span class="param-val" id="stayVal">0 Days/Year</span>
          </div>
          <a href="#consultation" class="quotation-btn">Request Formal Quotation</a>
        </div>
      </div>
    </div>
  </div>

  <!-- DIV 3: BOTTOM 3-PILLAR VISUAL SHOWCASE -->
  <div class="bottom-pillars-band">
    <div class="pillars-grid">
      <div class="pillar-card" data-aos="fade-up" data-aos-delay="100" style="margin-top: -80px; margin-left: -80px;">
        <div class="pillar-img-wrap text-start">
          <img src="<?= $img; ?>/passport.png" alt="Sovereign Mobility & Second Citizenship">
        </div>
      </div>

      <div class="pillar-card" data-aos="fade-up" data-aos-delay="240" style="margin-top: -80px;">
        <div class="pillar-img-wrap">
          <img src="<?= $img; ?>/home-location.png" alt="Qualifying Real Estate & Domicile">
        </div>
      </div>

      <div class="pillar-card" data-aos="fade-up" data-aos-delay="380" style="margin-top: -80px; margin-right: -80px;">
        <div class="pillar-img-wrap text-end">
          <img src="<?= $img; ?>/targeting.png" alt="Precision Tax & Wealth Optimization">
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const section = document.querySelector(".sovereign-ecosystem-section");

      // 1. AOS (Animate On Scroll) Engine + Number Counter
      const animateCounter = (el) => {
        const target = parseFloat(el.getAttribute("data-target"));
        const decimals = parseInt(el.getAttribute("data-decimals") || "0", 10);
        const prefix = el.getAttribute("data-prefix") || "";
        const suffix = el.getAttribute("data-suffix") || "";
        const duration = 1600;
        const startTime = performance.now();

        const step = (now) => {
          const progress = Math.min((now - startTime) / duration, 1);
          const easeOut = 1 - Math.pow(1 - progress, 3);
          const current = (target * easeOut).toFixed(decimals);
          el.textContent = `${prefix}${current}${suffix}`;
          if (progress < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
      };

      const aosObserver = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const el = entry.target;
              const delay = parseInt(el.getAttribute("data-aos-delay") || "0", 10);
              setTimeout(() => {
                el.classList.add("aos-animate");
                const counter = el.querySelector(".counter");
                if (counter) animateCounter(counter);
              }, delay);
              obs.unobserve(el);
            }
          });
        },
        { threshold: 0.14 }
      );

      section.querySelectorAll("[data-aos]").forEach((el) => aosObserver.observe(el));

      // 2. Interactive Estimator Logic
      const programData = {
        stkitts: {
          outlay: { single: "$250,000 USD", couple: "$250,000 USD", family4: "$250,000 USD" },
          time: "4 - 6 Months",
          visa: "157 Countries",
          stay: "0 Days/Year"
        },
        portugal: {
          outlay: { single: "€500,000 EUR", couple: "€515,000 EUR", family4: "€530,000 EUR" },
          time: "8 - 12 Months",
          visa: "191 Countries (EU)",
          stay: "7 Days/Year"
        },
        malta: {
          outlay: { single: "€690,000 EUR", couple: "€740,000 EUR", family4: "€840,000 EUR" },
          time: "12 - 14 Months",
          visa: "190 Countries (EU)",
          stay: "14 Days Total"
        },
        uae: {
          outlay: { single: "$545,000 USD", couple: "$545,000 USD", family4: "$550,000 USD" },
          time: "2 - 4 Weeks",
          visa: "183 Countries (Residency)",
          stay: "1 Visit / 6 Mos"
        },
        greece: {
          outlay: { single: "€250,000 EUR", couple: "€250,000 EUR", family4: "€250,000 EUR" },
          time: "3 - 5 Months",
          visa: "190 Countries (Schengen)",
          stay: "0 Days/Year"
        }
      };

      let selectedFamily = "family4";
      const jurisdictionEl = section.querySelector("#jurisdictionSelect");
      const objectiveEl = section.querySelector("#objectiveSelect");
      const familyBtns = section.querySelectorAll(".family-btn");

      const outlayVal = section.querySelector("#outlayVal");
      const timeVal = section.querySelector("#timeVal");
      const visaVal = section.querySelector("#visaVal");
      const stayVal = section.querySelector("#stayVal");

      function updateEstimator() {
        const data = programData[jurisdictionEl.value];
        const values = [outlayVal, timeVal, visaVal, stayVal];

        values.forEach((v) => v.classList.add("updating"));

        setTimeout(() => {
          outlayVal.textContent = data.outlay[selectedFamily];
          timeVal.textContent = data.time;
          visaVal.textContent = data.visa;
          stayVal.textContent = data.stay;
          values.forEach((v) => v.classList.remove("updating"));
        }, 160);
      }

      jurisdictionEl.addEventListener("change", updateEstimator);
      objectiveEl.addEventListener("change", updateEstimator);

      familyBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
          familyBtns.forEach((b) => b.classList.remove("active"));
          btn.classList.add("active");
          selectedFamily = btn.getAttribute("data-size");
          updateEstimator();
        });
      });
    })();
  </script>
</section>

<section class="sovereign-programs-v3 py-5">
  <style>
    .sovereign-programs-v3 {
      --gold-primary: #a6823e;
      --gold-dark: #8c6b2f;
      --gold-tint: #f8f5ee;
      --navy-accent: #1d4e89;
      --text-dark: #141414;
      --text-muted: #5f5f5f;
      /* background-color: #fbfaf7; */
      padding: 90px 0;
      overflow: hidden;
    }

    /* Section Header */
    .sovereign-programs-v3 .section-kicker {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--gold-primary);
      margin-bottom: 12px;
    }

    .sovereign-programs-v3 .section-kicker::before,
    .sovereign-programs-v3 .section-kicker::after {
      content: "";
      width: 28px;
      height: 1.5px;
      background-color: var(--gold-primary);
    }

    .sovereign-programs-v3 .section-heading {
      font-size: clamp(28px, 3.6vw, 40px);
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 14px;
      letter-spacing: -0.015em;
    }

    .sovereign-programs-v3 .section-subtext {
      font-size: 15px;
      color: var(--text-muted);
      max-width: 650px;
      margin: 0 auto 52px;
      line-height: 1.65;
    }

    /* Horizontal Split Program Card Variation */
    .sovereign-programs-v3 .program-showcase-card {
      background: #ffffff;
      border: 1px solid #e7e2d8;
      border-radius: 20px;
      overflow: hidden;
      height: 100%;
      display: flex;
      flex-direction: column;
      box-shadow: 0 14px 35px rgba(20, 20, 20, 0.045);
      transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                  box-shadow 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                  border-color 0.35s ease;
    }

    .sovereign-programs-v3 .program-showcase-card:hover {
      transform: translateY(-9px);
      box-shadow: 0 26px 52px rgba(166, 130, 62, 0.14);
      border-color: var(--gold-primary);
    }

    /* Top Accent Banner Inside Card */
    .sovereign-programs-v3 .card-top-ribbon {
      background: linear-gradient(135deg, #f9f6ef 0%, #f1eadc 100%);
      padding: 30px 34px;
      border-bottom: 1px solid #e9e2d3;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 18px;
    }

    .sovereign-programs-v3 .pathway-badge {
      display: inline-block;
      background-color: #ffffff;
      color: var(--gold-primary);
      border: 1px solid rgba(166, 130, 62, 0.3);
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 4px 12px;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    .sovereign-programs-v3 .program-name {
      font-size: clamp(22px, 2.3vw, 26px);
      font-weight: 700;
      color: var(--text-dark);
      margin: 0;
    }

    /* Animated Custom Gold SVG Icons */
    .sovereign-programs-v3 .icon-medallion {
      width: 68px;
      height: 68px;
      border-radius: 50%;
      background: #ffffff;
      border: 1.5px solid rgba(166, 130, 62, 0.35);
      box-shadow: 0 8px 20px rgba(166, 130, 62, 0.12);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-programs-v3 .program-showcase-card:hover .icon-medallion {
      transform: rotate(8deg) scale(1.08);
    }

    .sovereign-programs-v3 .icon-medallion svg {
      width: 80px;
      height: 80px;
      stroke: var(--gold-primary);
      fill: none;
      stroke-width: 1.75;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .sovereign-programs-v3 .draw-stroke {
      stroke-dasharray: 240;
      stroke-dashoffset: 240;
      transition: stroke-dashoffset 1.35s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-programs-v3 .bs-reveal.active .draw-stroke {
      stroke-dashoffset: 0;
    }

    /* Card Content Body */
    .sovereign-programs-v3 .card-content-body {
      padding: 32px 34px 36px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      flex-grow: 1;
    }

    .sovereign-programs-v3 .program-summary {
      font-size: 14.5px;
      line-height: 1.65;
      color: var(--text-muted);
      margin-bottom: 24px;
    }

    /* Highlight Strip */
    .sovereign-programs-v3 .key-metrics-strip {
      display: flex;
      justify-content: space-between;
      background: var(--gold-tint);
      border-radius: 12px;
      padding: 16px 20px;
      margin-bottom: 24px;
      gap: 12px;
    }

    .sovereign-programs-v3 .strip-item {
      flex: 1;
    }

    .sovereign-programs-v3 .strip-item:not(:last-child) {
      border-right: 1px solid #e2dac9;
      padding-right: 12px;
    }

    .sovereign-programs-v3 .strip-caption {
      display: block;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #7c7465;
      margin-bottom: 4px;
    }

    .sovereign-programs-v3 .strip-figure {
      display: block;
      font-size: 15px;
      font-weight: 700;
      color: var(--text-dark);
    }

    /* Checklist Advantages */
    .sovereign-programs-v3 .benefit-checklist {
      list-style: none;
      padding: 0;
      margin: 0 0 28px 0;
    }

    .sovereign-programs-v3 .benefit-checklist li {
      position: relative;
      padding-left: 24px;
      font-size: 13.5px;
      color: #383838;
      margin-bottom: 10px;
    }

    .sovereign-programs-v3 .benefit-checklist li::before {
      content: "✓";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--gold-primary);
      font-weight: 700;
    }

    /* Action Buttons */
    .sovereign-programs-v3 .card-cta-row {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .sovereign-programs-v3 .btn-primary-gold {
      flex: 1;
      text-align: center;
      background-color: var(--gold-primary);
      color: #ffffff;
      font-size: 13.5px;
      font-weight: 600;
      text-decoration: none;
      padding: 13px 20px;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.25s ease;
    }

    .sovereign-programs-v3 .btn-primary-gold:hover {
      background-color: var(--gold-dark);
      color: #ffffff;
      transform: translateY(-2px);
    }

    .sovereign-programs-v3 .btn-outline-subtle {
      text-align: center;
      border: 1px solid #d7d0c2;
      color: var(--text-dark);
      background: transparent;
      font-size: 13.5px;
      font-weight: 600;
      text-decoration: none;
      padding: 13px 18px;
      border-radius: 8px;
      transition: all 0.25s ease;
    }

    .sovereign-programs-v3 .btn-outline-subtle:hover {
      border-color: var(--gold-primary);
      color: var(--gold-primary);
      background: var(--gold-tint);
    }

    .sovereign-programs-v3 .btn-portfolio-all {
      display: inline-block;
      border: 1.5px solid var(--navy-accent);
      color: var(--navy-accent);
      background: #ffffff;
      font-size: 14px;
      font-weight: 600;
      text-decoration: none;
      padding: 13px 36px;
      border-radius: 50px;
      transition: all 0.3s ease;
    }

    .sovereign-programs-v3 .btn-portfolio-all:hover {
      background-color: var(--navy-accent);
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(29, 78, 137, 0.18);
    }

    /* Bootstrap Scroll Reveal States */
    .sovereign-programs-v3 .bs-reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.85s cubic-bezier(0.22, 1, 0.36, 1),
                  transform 0.85s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-programs-v3 .bs-reveal.from-left {
      transform: translateX(-32px);
    }

    .sovereign-programs-v3 .bs-reveal.from-right {
      transform: translateX(32px);
    }

    .sovereign-programs-v3 .bs-reveal.active {
      opacity: 1;
      transform: translate(0, 0);
    }

    @media (max-width: 767px) {
      .sovereign-programs-v3 .card-top-ribbon,
      .sovereign-programs-v3 .card-content-body {
        padding: 24px 22px;
      }
      .sovereign-programs-v3 .key-metrics-strip {
        flex-direction: column;
      }
      .sovereign-programs-v3 .strip-item:not(:last-child) {
        border-right: none;
        border-bottom: 1px solid #e2dac9;
        padding-right: 0;
        padding-bottom: 10px;
      }
      .sovereign-programs-v3 .card-cta-row {
        flex-direction: column;
      }
      .sovereign-programs-v3 .btn-primary-gold,
      .sovereign-programs-v3 .btn-outline-subtle {
        width: 100%;
      }
    }
  </style>

  <div class="container">
    <!-- Header -->
    <div class="text-center bs-reveal" data-delay="0">
      <span class="section-kicker">Sovereign Portfolio</span>
      <h2 class="section-heading">Featured Global Programs</h2>
      <p class="section-subtext">
        Evaluate premier European citizenship and residency solutions tailored for multi-generational security, tax optimization, and unrestricted global travel.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="row g-4 justify-content-center align-items-stretch">
      <!-- Card 1: Malta -->
      <div class="col-lg-6 col-md-10 bs-reveal from-left" data-delay="150">
        <div class="program-showcase-card">
          <div class="card-top-ribbon">
            <div>
              <span class="pathway-badge">Direct Citizenship</span>
              <h3 class="program-name">Malta (MEIN)</h3>
            </div>
            <div class="icon-medallion" aria-hidden="true">
              <svg viewBox="0 0 64 64">
                <circle class="draw-stroke" cx="32" cy="30" r="14" />
                <ellipse class="draw-stroke" cx="32" cy="30" rx="6.5" ry="14" />
                <line class="draw-stroke" x1="18" y1="30" x2="46" y2="30" />
                <path class="draw-stroke" d="M21 22.5h22M21 37.5h22" />
                <path class="draw-stroke" d="M24 50c-8-3-13-11-13-20 0-5 2-10 5-13" />
                <path class="draw-stroke" d="M13 38l-3-2M12 31l-3-2M13 24l-2-3M17 44l-2-3" />
                <path class="draw-stroke" d="M40 50c8-3 13-11 13-20 0-5-2-10-5-13" />
                <path class="draw-stroke" d="M51 38l3-2M52 31l3-2M51 24l2-3M47 44l2-3" />
              </svg>
            </div>
          </div>

          <div class="card-content-body">
            <div>
              <p class="program-summary">
                Acquire European Union citizenship by naturalization for exceptional services through structured sovereign contribution and real estate commitment.
              </p>

              <div class="key-metrics-strip">
                <div class="strip-item">
                  <span class="strip-caption">Min. Capital</span>
                  <span class="strip-figure">€690,000</span>
                </div>
                <div class="strip-item">
                  <span class="strip-caption">Processing</span>
                  <span class="strip-figure">12 – 36 Mos</span>
                </div>
                <div class="strip-item">
                  <span class="strip-caption">Visa-Free</span>
                  <span class="strip-figure">185+ Nations</span>
                </div>
              </div>

              <ul class="benefit-checklist">
                <li>Unrestricted right to live, work, and study across all 27 EU member states</li>
                <li>Visa-free mobility to the United States, United Kingdom, and Canada</li>
                <li>Citizenship passes automatically to future generations</li>
              </ul>
            </div>

            <div class="card-cta-row">
              <a href="#malta-programme" class="btn-primary-gold">Explore Malta Programme</a>
              <a href="#malta-brochure" class="btn-outline-subtle">Fact Sheet</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2: Portugal -->
      <div class="col-lg-6 col-md-10 bs-reveal from-right" data-delay="300">
        <div class="program-showcase-card">
          <div class="card-top-ribbon">
            <div>
              <span class="pathway-badge">EU Residency</span>
              <h3 class="program-name">Portugal Golden Visa</h3>
            </div>
            <div class="icon-medallion" aria-hidden="true">
              <svg viewBox="0 0 64 64">
                <path class="draw-stroke" d="M10 30L32 12l22 18" />
                <path class="draw-stroke" d="M43 16v-4h5v8" />
                <path class="draw-stroke" d="M16 26v26h32V26" />
                <circle class="draw-stroke" cx="25" cy="34" r="3" />
                <path class="draw-stroke" d="M20 47v-4a5 5 0 0 1 10 0v4" />
                <circle class="draw-stroke" cx="39" cy="34" r="3" />
                <path class="draw-stroke" d="M34 47v-4a5 5 0 0 1 10 0v4" />
                <circle class="draw-stroke" cx="32" cy="39" r="2.2" />
                <path class="draw-stroke" d="M28.5 47v-2.5a3.5 3.5 0 0 1 7 0V47" />
              </svg>
            </div>
          </div>

          <div class="card-content-body">
            <div>
              <p class="program-summary">
                Secure European residency through CMVM-regulated investment funds with minimal physical presence requirements and a 5-year citizenship horizon.
              </p>

              <div class="key-metrics-strip">
                <div class="strip-item">
                  <span class="strip-caption">Min. Capital</span>
                  <span class="strip-figure">€500,000</span>
                </div>
                <div class="strip-item">
                  <span class="strip-caption">Processing</span>
                  <span class="strip-figure">8 – 12 Mos</span>
                </div>
                <div class="strip-item">
                  <span class="strip-caption">Stay Rule</span>
                  <span class="strip-figure">7 Days / Yr</span>
                </div>
              </div>

              <ul class="benefit-checklist">
                <li>Visa-free movement across all 29 European Schengen Area countries</li>
                <li>Include spouse, dependent children, and dependent parents under one file</li>
                <li>Eligible for permanent residency or EU citizenship after 5 years</li>
              </ul>
            </div>

            <div class="card-cta-row">
              <a href="#portugal-programme" class="btn-primary-gold">Explore Portugal Programme</a>
              <a href="#portugal-brochure" class="btn-outline-subtle">Fact Sheet</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Portfolio CTA -->
    <div class="text-center mt-5 bs-reveal" data-delay="420">
      <a href="#all-programmes" class="btn-portfolio-all">Compare All 35+ Programmes</a>
    </div>
  </div>

  <script>
    (function () {
      const section = document.querySelector(".sovereign-programs-v3");
      const revealItems = section.querySelectorAll(".bs-reveal");

      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const el = entry.target;
              const delay = parseInt(el.getAttribute("data-delay") || "0", 10);
              setTimeout(() => {
                el.classList.add("active");
              }, delay);
              obs.unobserve(el);
            }
          });
        },
        { threshold: 0.15 }
      );

      revealItems.forEach((el) => observer.observe(el));
    })();
  </script>
</section>

<section class="sovereign-matrix-section py-5">
  <style>
    .sovereign-matrix-section {
      --gold-primary: #a6823e;
      --gold-dark: #8c6b2f;
      --navy-pill: #0b3c6d;
      --header-sand: #dcdad3;
      --bg-surface: #eceef2;
      --text-dark: #141414;
      --text-muted: #555962;
      background-color: var(--bg-surface);
      padding: 85px 0;
      overflow: hidden;
    }

    /* Section Header */
    .sovereign-matrix-section .matrix-badge {
      display: inline-block;
      background-color: var(--gold-primary);
      color: #ffffff;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.04em;
      padding: 6px 18px;
      border-radius: 3px;
      margin-bottom: 16px;
    }

    .sovereign-matrix-section .matrix-heading {
      font-size: clamp(26px, 3.5vw, 38px);
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 12px;
      letter-spacing: -0.015em;
    }

    .sovereign-matrix-section .matrix-subtext {
      font-size: 14.5px;
      color: var(--text-muted);
      max-width: 680px;
      margin: 0 auto 36px;
      line-height: 1.6;
    }

    /* Interactive Filter Bar */
    .sovereign-matrix-section .matrix-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 14px;
      margin-bottom: 22px;
    }

    .sovereign-matrix-section .filter-group {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .sovereign-matrix-section .filter-btn {
      background: #ffffff;
      border: 1px solid #d5d8df;
      color: #444952;
      font-size: 12.5px;
      font-weight: 600;
      padding: 7px 16px;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .sovereign-matrix-section .filter-btn:hover {
      border-color: var(--gold-primary);
      color: var(--gold-primary);
    }

    .sovereign-matrix-section .filter-btn.active {
      background-color: var(--navy-pill);
      border-color: var(--navy-pill);
      color: #ffffff;
      box-shadow: 0 4px 12px rgba(11, 60, 109, 0.2);
    }

    .sovereign-matrix-section .search-box {
      position: relative;
      min-width: 240px;
    }

    .sovereign-matrix-section .search-input {
      width: 100%;
      background: #ffffff;
      border: 1px solid #d5d8df;
      border-radius: 50px;
      padding: 8px 16px 8px 36px;
      font-size: 13px;
      color: var(--text-dark);
      transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .sovereign-matrix-section .search-input:focus {
      outline: none;
      border-color: var(--gold-primary);
      box-shadow: 0 0 0 3px rgba(166, 130, 62, 0.14);
    }

    .sovereign-matrix-section .search-icon {
      position: absolute;
      left: 13px;
      top: 50%;
      transform: translateY(-50%);
      width: 14px;
      height: 14px;
      stroke: #7a808c;
      fill: none;
      stroke-width: 2;
      pointer-events: none;
    }

    /* Matrix Table Styling */
    .sovereign-matrix-section .matrix-wrapper {
      width: 100%;
    }

    .sovereign-matrix-section .matrix-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    .sovereign-matrix-section .matrix-table thead th {
      background-color: var(--header-sand);
      color: var(--text-dark);
      font-size: 13.5px;
      font-weight: 700;
      padding: 15px 20px;
      border: none;
      white-space: nowrap;
    }

    .sovereign-matrix-section .matrix-table thead th:last-child {
      text-align: right;
    }

    .sovereign-matrix-section .matrix-table tbody tr {
      border-bottom: 1px solid #cfd3dc;
      transition: background-color 0.25s ease, transform 0.25s ease;
    }

    .sovereign-matrix-section .matrix-table tbody tr:hover {
      background-color: rgba(255, 255, 255, 0.72);
    }

    .sovereign-matrix-section .matrix-table tbody td {
      padding: 18px 20px;
      font-size: 14px;
      color: #24272e;
      vertical-align: middle;
    }

    .sovereign-matrix-section .jurisdiction-name {
      font-weight: 700;
      color: var(--text-dark);
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .sovereign-matrix-section .jurisdiction-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background-color: var(--gold-primary);
      flex-shrink: 0;
    }

    /* Navy Type Pill */
    .sovereign-matrix-section .type-pill {
      display: inline-block;
      background-color: var(--navy-pill);
      color: #ffffff;
      font-size: 12.5px;
      font-weight: 500;
      padding: 6px 18px;
      border-radius: 50px;
      min-width: 132px;
      text-align: center;
      letter-spacing: 0.01em;
    }

    /* Gold Rating Badge */
    .sovereign-matrix-section .rating-cell {
      text-align: right;
      font-weight: 700;
      font-size: 14px;
      color: var(--gold-primary);
      letter-spacing: 0.03em;
    }

    .sovereign-matrix-section .empty-state {
      display: none;
      text-align: center;
      padding: 32px 16px;
      font-size: 14px;
      color: var(--text-muted);
    }

    /* Scroll Reveal Animations */
    .sovereign-matrix-section .matrix-anim {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.75s cubic-bezier(0.22, 1, 0.36, 1),
                  transform 0.75s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-matrix-section .matrix-anim.is-visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Responsive Card Transformation on Mobile/Tablet */
    @media (max-width: 820px) {
      .sovereign-matrix-section .matrix-controls {
        flex-direction: column;
        align-items: stretch;
      }

      .sovereign-matrix-section .search-box {
        width: 100%;
      }

      .sovereign-matrix-section .matrix-table thead {
        display: none;
      }

      .sovereign-matrix-section .matrix-table,
      .sovereign-matrix-section .matrix-table tbody,
      .sovereign-matrix-section .matrix-table tr,
      .sovereign-matrix-section .matrix-table td {
        display: block;
        width: 100%;
      }

      .sovereign-matrix-section .matrix-table tbody tr {
        background: #ffffff;
        border: 1px solid #dcdfe6;
        border-radius: 14px;
        margin-bottom: 16px;
        padding: 16px 18px;
        box-shadow: 0 8px 20px rgba(17, 24, 39, 0.04);
      }

      .sovereign-matrix-section .matrix-table tbody td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #eef0f4;
        text-align: right;
        gap: 12px;
      }

      .sovereign-matrix-section .matrix-table tbody td:first-child {
        padding-top: 2px;
        padding-bottom: 12px;
        border-bottom: 1px solid #e2e5ec;
        font-size: 16px;
      }

      .sovereign-matrix-section .matrix-table tbody td:last-child {
        border-bottom: none;
        padding-bottom: 2px;
      }

      .sovereign-matrix-section .matrix-table tbody td::before {
        content: attr(data-label);
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        color: #6b7280;
        text-align: left;
      }

      .sovereign-matrix-section .matrix-table tbody td:first-child::before {
        display: none;
      }
    }
  </style>

  <div class="container">
    <!-- Section Header -->
    <div class="text-center matrix-anim" data-delay="0">
      <span class="matrix-badge">Strategic Comparison</span>
      <h2 class="matrix-heading">Sovereign Tax &amp; Mobility Matrix</h2>
      <p class="matrix-subtext">
        Cross-jurisdictional evaluation of physical residency duties, personal tax structures, and capital safeguards.
      </p>
    </div>

    <!-- User-Friendly Filter & Search Controls -->
    <div class="matrix-controls matrix-anim" data-delay="120">
      <div class="filter-group" role="group" aria-label="Filter jurisdictions">
        <button type="button" class="filter-btn active" data-filter="all">All Jurisdictions</button>
        <button type="button" class="filter-btn" data-filter="citizenship">Citizenship</button>
        <button type="button" class="filter-btn" data-filter="residency">Residency &amp; Visa</button>
        <button type="button" class="filter-btn" data-filter="zero-tax">0% Income Tax</button>
      </div>

      <div class="search-box">
        <svg class="search-icon" viewBox="0 0 24 24" aria-hidden="true">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <input type="text" class="search-input" id="matrixSearchInput" placeholder="Search country or tax benefit..." aria-label="Search matrix">
      </div>
    </div>

    <!-- Responsive Matrix Table -->
    <div class="matrix-wrapper matrix-anim" data-delay="220">
      <table class="matrix-table" id="sovereignMatrixTable">
        <thead>
          <tr>
            <th>Jurisdiction</th>
            <th>Type</th>
            <th>Physical Presence</th>
            <th>Personal Tax Structure</th>
            <th>Wealth Preservation Rating</th>
          </tr>
        </thead>
        <tbody>
          <tr data-tags="residency zero-tax">
            <td data-label="Jurisdiction">
              <span class="jurisdiction-name"><span class="jurisdiction-dot"></span>UAE (Dubai)</span>
            </td>
            <td data-label="Type">
              <span class="type-pill">Golden Visa</span>
            </td>
            <td data-label="Physical Presence">None Required</td>
            <td data-label="Personal Tax Structure">0% Personal Income Tax</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AAA+</td>
          </tr>

          <tr data-tags="citizenship">
            <td data-label="Jurisdiction">
              <span class="jurisdiction-name"><span class="jurisdiction-dot"></span>Malta</span>
            </td>
            <td data-label="Type">
              <span class="type-pill">EU Citizenship</span>
            </td>
            <td data-label="Physical Presence">12 Months (Residency Phase)</td>
            <td data-label="Personal Tax Structure">Remittance Basis Available</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AAA</td>
          </tr>

          <tr data-tags="citizenship zero-tax">
            <td data-label="Jurisdiction">
              <span class="jurisdiction-name"><span class="jurisdiction-dot"></span>St. Kitts &amp; Nevis</span>
            </td>
            <td data-label="Type">
              <span class="type-pill">CBI Passport</span>
            </td>
            <td data-label="Physical Presence">0 Days</td>
            <td data-label="Personal Tax Structure">No Income / Wealth Tax</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AA+</td>
          </tr>

          <tr data-tags="residency zero-tax">
            <td data-label="Jurisdiction">
              <span class="jurisdiction-name"><span class="jurisdiction-dot"></span>Monaco</span>
            </td>
            <td data-label="Type">
              <span class="type-pill">Residency</span>
            </td>
            <td data-label="Physical Presence">183 Days / Year</td>
            <td data-label="Personal Tax Structure">0% Personal Income Tax</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AAA+</td>
          </tr>
        </tbody>
      </table>

      <div class="empty-state" id="matrixEmptyState">
        No matching jurisdictions found. Try clearing your filter or search term.
      </div>
    </div>
  </div>

  <script>
    (function () {
      const section = document.querySelector(".sovereign-matrix-section");
      const animItems = section.querySelectorAll(".matrix-anim");

      // Scroll Reveal Observer
      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const el = entry.target;
              const delay = parseInt(el.getAttribute("data-delay") || "0", 10);
              setTimeout(() => {
                el.classList.add("is-visible");
              }, delay);
              obs.unobserve(el);
            }
          });
        },
        { threshold: 0.12 }
      );

      animItems.forEach((el) => observer.observe(el));

      // Interactive Filter + Live Search
      const filterButtons = section.querySelectorAll(".filter-btn");
      const searchInput = section.querySelector("#matrixSearchInput");
      const rows = section.querySelectorAll("#sovereignMatrixTable tbody tr");
      const emptyState = section.querySelector("#matrixEmptyState");

      let activeCategory = "all";

      function filterMatrix() {
        const query = searchInput.value.trim().toLowerCase();
        let visibleCount = 0;

        rows.forEach((row) => {
          const tags = row.getAttribute("data-tags") || "";
          const rowText = row.textContent.toLowerCase();

          const matchesCategory = activeCategory === "all" || tags.includes(activeCategory);
          const matchesSearch = rowText.includes(query);

          if (matchesCategory && matchesSearch) {
            row.style.display = "";
            visibleCount++;
          } else {
            row.style.display = "none";
          }
        });

        emptyState.style.display = visibleCount === 0 ? "block" : "none";
      }

      filterButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
          filterButtons.forEach((b) => b.classList.remove("active"));
          btn.classList.add("active");
          activeCategory = btn.getAttribute("data-filter");
          filterMatrix();
        });
      });

      searchInput.addEventListener("input", filterMatrix);
    })();
  </script>
</section>

<section class="sovereign-roadmap-section py-5">
  <style>
    .sovereign-roadmap-section {
      --gold-primary: #a6823e;
      --gold-dark: #8c6b2f;
      --text-dark: #111111;
      --text-muted: #5a5e66;
      --line-gray: #d8dbe0;
      background-color: #ffffff;
      padding: 85px 0;
      overflow: hidden;
    }

    /* Section Header */
    .sovereign-roadmap-section .roadmap-badge {
      display: inline-block;
      background-color: var(--gold-primary);
      color: #ffffff;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.04em;
      padding: 6px 18px;
      border-radius: 3px;
      margin-bottom: 16px;
    }

    .sovereign-roadmap-section .roadmap-heading {
      font-size: clamp(26px, 3.5vw, 38px);
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 12px;
      letter-spacing: -0.015em;
    }

    .sovereign-roadmap-section .roadmap-subtext {
      font-size: 14.5px;
      color: var(--text-muted);
      max-width: 680px;
      margin: 0 auto 56px;
      line-height: 1.6;
    }

    /* ===================================================================
       EXACT STAGGERED STADIUM WAVE GEOMETRY (MATCHING REFERENCE IMAGE)
       Width: 1180px -> 6 columns of 196.666px each.
       Column Centers X: 98.33, 295.00, 491.66, 688.33, 885.00, 1081.66.
       Arc Radius R = 98.333px (exact half-column width).
       - Odd Medallions (1, 3, 5) sit LOWER: center Y = 296px (inside bottom U-cups).
       - Even Medallions (2, 4, 6) sit HIGHER: center Y = 152px (inside top caps).
       - Vertical straight connector segments run from Y = 152px to Y = 296px!
       =================================================================== */
    .sovereign-roadmap-section .roadmap-wrapper {
      position: relative;
      max-width: 1180px;
      margin: 0 auto;
    }

    .sovereign-roadmap-section .wave-track-svg {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 500px;
      pointer-events: none;
      z-index: 1;
    }

    .sovereign-roadmap-section .wave-path {
      fill: none;
      stroke: var(--gold-primary);
      stroke-width: 18;
      stroke-linecap: butt;
      stroke-dasharray: 2600;
      stroke-dashoffset: 2600;
      transition: stroke-dashoffset 2.1s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-roadmap-section.wave-drawn .wave-path {
      stroke-dashoffset: 0;
    }

    /* 6-Column Grid */
    .sovereign-roadmap-section .steps-grid {
      position: relative;
      z-index: 2;
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 0;
      height: 525px;
    }

    .sovereign-roadmap-section .step-col {
      position: relative;
      height: 100%;
    }

    /* Text Blocks */
    .sovereign-roadmap-section .step-text-box {
      position: absolute;
      left: 10px;
      right: 10px;
      text-align: left;
    }

    .sovereign-roadmap-section .step-title {
      font-size: 16px;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1.25;
      margin-bottom: 8px;
      text-align: center;
    }

    .sovereign-roadmap-section .step-desc {
      font-size: 12px;
      line-height: 1.5;
      color: var(--text-muted);
      margin: 0;
      text-align: center;
    }

    /* ODD COLUMNS (1, 3, 5): Text at top, Medallion pushed DOWN into lower U-cup (Center Y = 296px) */
    .sovereign-roadmap-section .step-col.is-odd .step-text-box {
      top: 0;
    }

    .sovereign-roadmap-section .step-col.is-odd .step-medallion {
      top: 225px; /* 296 - 72 */
    }

    /* EVEN COLUMNS (2, 4, 6): Medallion pushed UP into upper arch (Center Y = 152px), Text below */
    .sovereign-roadmap-section .step-col.is-even .step-medallion {
      top: 65px; /* 152 - 72 */
    }

    .sovereign-roadmap-section .step-col.is-even .step-text-box {
      top: 260px;
    }

    /* Neumorphic White Medallion Circle (144px diameter) */
    .sovereign-roadmap-section .step-medallion {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      width: 140px;
      height: 140px;
      border-radius: 50%;
      background: radial-gradient(circle at 28% 28%, #ffffff 0%, #f1f2f5 72%, #e5e7eb 100%);
      box-shadow: 0 14px 30px rgba(0, 0, 0, 0.2), inset 0 2px 5px rgb(163 156 156 / 95%);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                  box-shadow 0.4s ease;
    }

    .sovereign-roadmap-section .step-col:hover .step-medallion {
      transform: translateX(-50%) scale(1.05);
      box-shadow: 0 20px 38px rgba(166, 130, 62, 0.28),
                  inset 0 2px 5px rgba(255, 255, 255, 1);
    }

    .sovereign-roadmap-section .step-medallion svg {
      width: 50px;
      height: 50px;
      stroke: #33353a;
      fill: none;
      stroke-width: 1.65;
      stroke-linecap: round;
      stroke-linejoin: round;
      transition: stroke 0.3s ease, transform 0.35s ease;
    }

    .sovereign-roadmap-section .step-col:hover .step-medallion svg {
      stroke: var(--gold-primary);
      transform: scale(1.06);
    }

    /* Bottom Stem Line & Number Badge */
    .sovereign-roadmap-section .step-footer-marker {
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .sovereign-roadmap-section .stem-line {
      width: 1px;
      background-color: var(--line-gray);
    }

    /* Odd columns: stem connects from bottom of lower U-curve (Y=403) down to badge */
    .sovereign-roadmap-section .step-col.is-odd .stem-line {
      height: 68px;
    }

    /* Even columns: stem connects below bottom text block to badge */
    .sovereign-roadmap-section .step-col.is-even .stem-line {
      height: 30px;
    }

    .sovereign-roadmap-section .step-num-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 1px solid var(--line-gray);
      background-color: #ffffff;
      color: var(--text-dark);
      font-size: 14px;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .sovereign-roadmap-section .step-col:hover .step-num-circle {
      background-color: var(--gold-primary);
      border-color: var(--gold-primary);
      color: #ffffff;
      transform: scale(1.1);
    }

    /* AOS Animation System */
    .sovereign-roadmap-section [data-aos] {
      opacity: 0;
      transition-property: opacity, transform;
      transition-duration: 0.8s;
      transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-roadmap-section [data-aos="fade-up"] {
      transform: translateY(28px);
    }

    .sovereign-roadmap-section [data-aos="fade-down"] {
      transform: translateY(-24px);
    }

    .sovereign-roadmap-section [data-aos="zoom-in"] {
      transform: scale(0.9) translateY(16px);
    }

    .sovereign-roadmap-section [data-aos].aos-animate {
      opacity: 1;
      transform: translate(0, 0) scale(1);
    }

    /* Tablet & Mobile Responsive Layout */
    @media (max-width: 1180px) {
      .sovereign-roadmap-section .wave-track-svg {
        display: none;
      }

      .sovereign-roadmap-section .steps-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        height: auto;
        padding: 0 12px;
      }

      .sovereign-roadmap-section .step-col {
        background: #faf9f6;
        border: 1px solid #e8e3d8;
        border-top: 4px solid var(--gold-primary);
        border-radius: 18px;
        padding: 28px 22px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        height: auto;
      }

      .sovereign-roadmap-section .step-footer-marker,
      .sovereign-roadmap-section .step-medallion,
      .sovereign-roadmap-section .step-text-box {
        position: static;
        transform: none !important;
        left: auto;
        right: auto;
        top: auto;
        bottom: auto;
      }

      .sovereign-roadmap-section .step-footer-marker {
        order: 1;
        margin-bottom: 16px;
      }

      .sovereign-roadmap-section .stem-line {
        display: none;
      }

      .sovereign-roadmap-section .step-medallion {
        order: 2;
        width: 108px;
        height: 108px;
        margin-bottom: 18px;
      }

      .sovereign-roadmap-section .step-text-box {
        order: 3;
        text-align: center;
      }
    }

    @media (max-width: 767px) {
      .sovereign-roadmap-section .steps-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
      }
    }

    @media (max-width: 520px) {
      .sovereign-roadmap-section .steps-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <div class="container">
    <!-- Section Header -->
    <div class="text-center" data-aos="fade-down" data-aos-delay="0">
      <span class="roadmap-badge">Strategic Comparison</span>
      <h2 class="roadmap-heading">Sovereign Tax &amp; Mobility Matrix</h2>
      <p class="roadmap-subtext">
        Cross-jurisdictional evaluation of physical residency duties, personal tax structures, and capital safeguards.
      </p>
    </div>

    <!-- Exact Staggered Serpentine 6-Step Roadmap -->
    <div class="roadmap-wrapper">
      <!-- Continuous Stadium-Wave SVG:
           Bottom U-cups centered at Y=296, Top arches centered at Y=152, connected by vertical lines -->
      <svg class="wave-track-svg" viewBox="0 0 1180 500" preserveAspectRatio="none" aria-hidden="true">
        <path class="wave-path" d="
          M 9 296
          A 89.333 89.333 0 0 0 187.666 296
          L 187.666 152
          A 107.333 107.333 0 0 1 402.333 152
          L 402.333 296
          A 89.333 89.333 0 0 0 581 296
          L 581 152
          A 107.333 107.333 0 0 1 795.666 152
          L 795.666 296
          A 89.333 89.333 0 0 0 974.333 296
          L 974.333 152
          A 98.333 98.333 0 0 1 1171 152
        " />
      </svg>

      <div class="steps-grid">
        <!-- STEP 1 (Odd: Text Top, Medallion Low in U-Cup) -->
        <div class="step-col is-odd" data-aos="fade-up" data-aos-delay="100">
          <div class="step-text-box">
            <h3 class="step-title">Pre-Clearance &amp;<br>KYB</h3>
            <p class="step-desc">
              Internal compliance screen using Interpol &amp; World-Check databases before signing mandates, ensuring 99.8% approval guarantee.
            </p>
          </div>
          <div class="step-medallion">
            <svg viewBox="0 0 48 48">
              <path d="M12 8h18l6 6v14" />
              <path d="M30 8v6h6" />
              <path d="M12 8v30h14" />
              <circle cx="21" cy="19" r="3.5" />
              <path d="M19 22l-1 4 3-1.5 3 1.5-1-4" />
              <line x1="16" y1="30" x2="25" y2="30" />
              <circle cx="33" cy="34" r="6.5" />
              <path d="M30.2 34l2 2 3.8-4" />
            </svg>
          </div>
          <div class="step-footer-marker">
            <div class="stem-line"></div>
            <div class="step-num-circle">1</div>
          </div>
        </div>

        <!-- STEP 2 (Even: Medallion High in Top Arch, Text Below) -->
        <div class="step-col is-even" data-aos="zoom-in" data-aos-delay="220">
          <div class="step-medallion">
            <svg viewBox="0 0 48 48">
              <path d="M12 22h24l-2 16H14L12 22z" />
              <path d="M17 22V11h14v11" />
              <circle cx="24" cy="16" r="2.5" />
              <path d="M20 21a4 4 0 0 1 8 0" />
              <circle cx="24" cy="29" r="3" />
            </svg>
          </div>
          <div class="step-text-box">
            <h3 class="step-title">Portfolio &amp;<br>Asset Selection</h3>
            <p class="step-desc">
              Curating qualifying real estate investments, government fund placements, or capital contributions matching financial return targets.
            </p>
          </div>
          <div class="step-footer-marker">
            <div class="stem-line"></div>
            <div class="step-num-circle">2</div>
          </div>
        </div>

        <!-- STEP 3 (Odd: Text Top, Medallion Low in U-Cup) -->
        <div class="step-col is-odd" data-aos="fade-up" data-aos-delay="340">
          <div class="step-text-box">
            <h3 class="step-title">Legal Dossier<br>Compilation</h3>
            <p class="step-desc">
              Complete legal preparation, official translations, apostilles, and notarizations by licensed immigration attorneys.
            </p>
          </div>
          <div class="step-medallion">
            <svg viewBox="0 0 48 48">
              <path d="M11 8h16l5 5v15" />
              <path d="M11 8v28h12" />
              <circle cx="19" cy="15" r="3" />
              <path d="M17.8 15l1 1 2-2" />
              <line x1="15" y1="22" x2="25" y2="22" />
              <line x1="15" y1="27" x2="22" y2="27" />
              <rect x="24" y="35" width="12" height="3.5" rx="1" />
              <path d="M27 25l5-5 4 4-5 5z" />
              <line x1="33" y1="26" x2="39" y2="32" />
            </svg>
          </div>
          <div class="step-footer-marker">
            <div class="stem-line"></div>
            <div class="step-num-circle">3</div>
          </div>
        </div>

        <!-- STEP 4 (Even: Medallion High in Top Arch, Text Below) -->
        <div class="step-col is-even" data-aos="zoom-in" data-aos-delay="460">
          <div class="step-medallion">
            <svg viewBox="0 0 48 48">
              <polygon points="24,11 12,18 36,18" />
              <line x1="24" y1="6" x2="24" y2="11" />
              <path d="M24 6h5l-1 2.5 1 2.5h-5" />
              <line x1="16" y1="18" x2="16" y2="25" />
              <line x1="24" y1="18" x2="24" y2="25" />
              <line x1="32" y1="18" x2="32" y2="25" />
              <path d="M11 29l6-3 7 4 7-4 6 3" />
              <path d="M15 32l9 7 9-7" />
            </svg>
          </div>
          <div class="step-text-box">
            <h3 class="step-title">Government<br>Due Diligence</h3>
            <p class="step-desc">
              Formal submission to government authorities and state intelligence units for final background vetting.
            </p>
          </div>
          <div class="step-footer-marker">
            <div class="stem-line"></div>
            <div class="step-num-circle">4</div>
          </div>
        </div>

        <!-- STEP 5 (Odd: Text Top, Medallion Low in U-Cup) -->
        <div class="step-col is-odd" data-aos="fade-up" data-aos-delay="580">
          <div class="step-text-box">
            <h3 class="step-title">Capital<br>Disbursement</h3>
            <p class="step-desc">
              Secure escrow release or direct sovereign bank placement upon receipt of official Approval-in-Principle.
            </p>
          </div>
          <div class="step-medallion">
            <svg viewBox="0 0 48 48">
              <path d="M13 10h16v24H15a3 3 0 0 1-2-5V10z" />
              <line x1="17" y1="15" x2="25" y2="15" />
              <line x1="17" y1="20" x2="23" y2="20" />
              <circle cx="31" cy="24" r="5.5" />
              <path d="M31 21v6M29.5 22.5c0-1 3-1 3 0s-3 1.5-3 2.5 3 1 3 0" />
              <rect x="25" y="31" width="12" height="3.5" rx="1" />
              <rect x="25" y="34.5" width="12" height="3.5" rx="1" />
            </svg>
          </div>
          <div class="step-footer-marker">
            <div class="stem-line"></div>
            <div class="step-num-circle">5</div>
          </div>
        </div>

        <!-- STEP 6 (Even: Medallion High in Top Arch, Text Below) -->
        <div class="step-col is-even" data-aos="zoom-in" data-aos-delay="700">
          <div class="step-medallion" style="left: 90px;top: 70px;">
            <svg viewBox="0 0 48 48">
              <rect x="9" y="15" width="22" height="18" rx="2.5" />
              <circle cx="16" cy="22" r="2.5" />
              <path d="M12.5 29a3.5 3.5 0 0 1 7 0" />
              <line x1="22" y1="21" x2="26" y2="21" />
              <line x1="22" y1="26" x2="25" y2="26" />
              <path d="M32 14l7 2.5v6.5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9v-6.5L32 14z" fill="#f4f5f7" />
              <path d="M29.5 22.5l1.8 1.8 3.2-3.5" />
            </svg>
          </div>
          <div class="step-text-box">
            <h3 class="step-title">Passport &amp;<br>Identity Handover</h3>
            <p class="step-desc">
              Hand delivery of naturalization certificates, passports, national IDs, and ongoing family legacy maintenance.
            </p>
          </div>
          <div class="step-footer-marker">
            <div class="stem-line"></div>
            <div class="step-num-circle">6</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const section = document.querySelector(".sovereign-roadmap-section");
      const aosItems = section.querySelectorAll("[data-aos]");

      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              section.classList.add("wave-drawn");
              aosItems.forEach((el) => {
                const delay = parseInt(el.getAttribute("data-aos-delay") || "0", 10);
                setTimeout(() => {
                  el.classList.add("aos-animate");
                }, delay);
              });
              obs.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.15 }
      );

      observer.observe(section);
    })();
  </script>
</section>

<section class="sovereign-legacy-header-div">
  <style>
    .sovereign-legacy-header-div {
      --gold-primary: #a6823e;
      --bg-surface: #eceef2;
      --text-dark: #0e1015;
      --text-muted: #6c7078;
      background-color: var(--bg-surface);
      padding: 80px 0 44px;
      overflow: hidden;
    }

    .sovereign-legacy-header-div .header-inner {
      max-width: 820px;
      text-align: left;
    }

    .sovereign-legacy-header-div .legacy-badge {
      display: inline-block;
      background-color: var(--gold-primary);
      color: #ffffff;
      font-size: 12.5px;
      font-weight: 600;
      letter-spacing: 0.03em;
      padding: 7px 20px;
      border-radius: 2px;
      margin-bottom: 24px;
    }

    .sovereign-legacy-header-div .legacy-title {
      font-size: clamp(28px, 3.6vw, 40px);
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1.2;
      letter-spacing: -0.015em;
      margin: 0 0 18px 0;
    }

    .sovereign-legacy-header-div .legacy-description {
      font-size: clamp(15px, 1.4vw, 17px);
      font-weight: 400;
      color: var(--text-muted);
      line-height: 1.68;
      margin: 0;
      max-width: 780px;
    }

    /* AOS Animation Rules */
    .sovereign-legacy-header-div [data-aos] {
      opacity: 0;
      transition-property: opacity, transform;
      transition-duration: 0.8s;
      transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-legacy-header-div [data-aos="fade-right"] {
      transform: translateX(-26px);
    }

    .sovereign-legacy-header-div [data-aos="fade-up"] {
      transform: translateY(24px);
    }

    .sovereign-legacy-header-div [data-aos].aos-animate {
      opacity: 1;
      transform: translate(0, 0);
    }
  </style>

  <div class="container">
    <div class="header-inner">
      <div data-aos="fade-right" data-aos-delay="0">
        <span class="legacy-badge">Legacy Structuring</span>
      </div>

      <h2 class="legacy-title" data-aos="fade-up" data-aos-delay="140">
        Multi-Generational Family Inclusion
      </h2>

      <p class="legacy-description" data-aos="fade-up" data-aos-delay="280">
        A single application can safeguard your extended lineage. Most tier-1 sovereign programs accommodate dependent family structures under unified application umbrellas.
      </p>
    </div>
  </div>

  <script>
    (function () {
      const section = document.querySelector(".sovereign-legacy-header-div");
      const aosItems = section.querySelectorAll("[data-aos]");

      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const el = entry.target;
              const delay = parseInt(el.getAttribute("data-aos-delay") || "0", 10);
              setTimeout(() => {
                el.classList.add("aos-animate");
              }, delay);
              obs.unobserve(el);
            }
          });
        },
        { threshold: 0.15 }
      );

      aosItems.forEach((el) => observer.observe(el));
    })();
  </script>
</section>

<section class="sovereign-legacy-pillars-div">
  <style>
    .sovereign-legacy-pillars-div {
      --gold-primary: #a6823e;
      --gold-soft: rgba(166, 130, 62, 0.12);
      --bg-surface: #eceef2;
      --text-dark: #0e1015;
      --text-muted: #6c7078;
      background-color: var(--bg-surface);
      padding: 20px 0 64px;
      overflow: hidden;
    }

    .sovereign-legacy-pillars-div .pillar-card {
      position: relative;
      padding: 28px 24px;
      border-radius: 16px;
      background-color: transparent;
      border: 1px solid transparent;
      transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                  background-color 0.35s ease,
                  border-color 0.35s ease,
                  box-shadow 0.35s ease;
      cursor: default;
    }

    .sovereign-legacy-pillars-div .pillar-card:hover {
      background-color: #ffffff;
      border-color: rgba(166, 130, 62, 0.25);
      transform: translateY(-6px);
      box-shadow: 0 16px 36px rgba(14, 16, 21, 0.06);
    }

    /* Bootstrap Icon Wrapper with Mouse Hover Animation */
    .sovereign-legacy-pillars-div .bi-icon-box {
      width: 64px;
      height: 64px;
      border-radius: 14px;
      display: inline-flex;
      align-items: center;
      justify-content: flex-start;
      margin-bottom: 18px;
      color: #7c8089;
      font-size: 46px;
      line-height: 1;
      transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-legacy-pillars-div .pillar-card:hover .bi-icon-box {
      width: 64px;
      justify-content: center;
      background-color: var(--gold-soft);
      color: var(--gold-primary);
      font-size: 32px;
      transform: translateY(-3px) rotate(-6deg) scale(1.06);
    }

    .sovereign-legacy-pillars-div .pillar-title {
      font-size: 18px;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1.35;
      margin: 0 0 12px 0;
      transition: color 0.3s ease;
    }

    .sovereign-legacy-pillars-div .pillar-card:hover .pillar-title {
      color: var(--gold-primary);
    }

    .sovereign-legacy-pillars-div .pillar-desc {
      font-size: 14.5px;
      font-weight: 400;
      color: var(--text-muted);
      line-height: 1.65;
      margin: 0;
    }

    /* Bottom Gold Accent Bar Reveal on Hover */
    .sovereign-legacy-pillars-div .pillar-accent-line {
      width: 0;
      height: 2.5px;
      background-color: var(--gold-primary);
      border-radius: 2px;
      margin-top: 18px;
      transition: width 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-legacy-pillars-div .pillar-card:hover .pillar-accent-line {
      width: 44px;
    }

    /* AOS Animation Rules */
    .sovereign-legacy-pillars-div [data-aos] {
      opacity: 0;
      transition-property: opacity, transform;
      transition-duration: 0.8s;
      transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-legacy-pillars-div [data-aos="fade-up"] {
      transform: translateY(28px);
    }

    .sovereign-legacy-pillars-div [data-aos].aos-animate {
      opacity: 1;
      transform: translateY(0);
    }
  </style>

  <div class="container">
    <div class="row g-4">
      <!-- Column 1: Dependent Children & Siblings -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
        <div class="pillar-card h-100">
          <div class="bi-icon-box" aria-hidden="true">
            <i class="bi bi-people"></i>
          </div>
          <h3 class="pillar-title">Dependent Children &amp;<br>Siblings</h3>
          <p class="pillar-desc">
            Include unmarried children up to age 30 and unmarried, childless siblings under qualifying programs.
          </p>
          <div class="pillar-accent-line"></div>
        </div>
      </div>

      <!-- Column 2: Parents & Grandparents -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="140">
        <div class="pillar-card h-100">
          <div class="bi-icon-box" aria-hidden="true">
            <i class="bi bi-person-hearts"></i>
          </div>
          <h3 class="pillar-title">Parents &amp; Grandparents</h3>
          <p class="pillar-desc">
            Extend citizenship or permanent European residency status to financially dependent parents above age 55–65.
          </p>
          <div class="pillar-accent-line"></div>
        </div>
      </div>

      <!-- Column 3: Inherited Sovereign Security -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="280">
        <div class="pillar-card h-100">
          <div class="bi-icon-box" aria-hidden="true">
            <i class="bi bi-shield-lock"></i>
          </div>
          <h3 class="pillar-title">Inherited Sovereign<br>Security</h3>
          <p class="pillar-desc">
            Citizenship acquired through investment is passed down directly to future generations by descent.
          </p>
          <div class="pillar-accent-line"></div>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const section = document.querySelector(".sovereign-legacy-pillars-div");
      const aosItems = section.querySelectorAll("[data-aos]");

      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const el = entry.target;
              const delay = parseInt(el.getAttribute("data-aos-delay") || "0", 10);
              setTimeout(() => {
                el.classList.add("aos-animate");
              }, delay);
              obs.unobserve(el);
            }
          });
        },
        { threshold: 0.15 }
      );

      aosItems.forEach((el) => observer.observe(el));
    })();
  </script>
</section>

<section class="sovereign-legacy-checklist-div">
  <style>
    .sovereign-legacy-checklist-div {
      --gold-primary: #a6823e;
      --gold-dark: #8c6b2f;
      --navy-card: #083868;
      --navy-deep: #05284c;
      --bg-surface: #eceef2;
      background-color: var(--bg-surface);
      padding: 10px 0 85px;
      overflow: hidden;
    }

    /* Left 3D Visual Wrapper */
    .sovereign-legacy-checklist-div .visual-stage {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      background-color: transparent;
    }

    .sovereign-legacy-checklist-div .visual-stage img {
      max-width: 430px;
      width: 100%;
      height: auto;
      display: block;
      background: transparent;
      mix-blend-mode: multiply;
      filter: contrast(1.03);
      /* animation: gentleLegacyHover 5s ease-in-out infinite; */
    }

    @keyframes gentleLegacyHover {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-7px); }
    }

    /* Right Dark Navy Checklist Card */
    .sovereign-legacy-checklist-div .checklist-card {
      background: linear-gradient(145deg, var(--navy-card) 0%, var(--navy-deep) 100%);
      color: #ffffff;
      border-radius: 24px;
      padding: 46px 52px;
      box-shadow: 0 22px 48px rgba(5, 40, 76, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.08);
      position: relative;
      overflow: hidden;
    }

    .sovereign-legacy-checklist-div .checklist-card::after {
      content: "";
      position: absolute;
      top: -65px;
      right: -65px;
      width: 210px;
      height: 210px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(166, 130, 62, 0.2) 0%, transparent 70%);
      pointer-events: none;
    }

    .sovereign-legacy-checklist-div .checklist-heading {
      font-size: clamp(22px, 2.5vw, 27px);
      font-weight: 700;
      color: #ffffff;
      margin: 0 0 22px 0;
      letter-spacing: -0.01em;
    }

    .sovereign-legacy-checklist-div .checklist-items {
      list-style: none;
      padding: 0;
      margin: 0 0 32px 0;
    }

    .sovereign-legacy-checklist-div .checklist-items li {
      position: relative;
      padding-left: 22px;
      font-size: 16px;
      font-weight: 400;
      color: rgba(255, 255, 255, 0.94);
      line-height: 1.5;
      margin-bottom: 13px;
      transition: transform 0.25s ease, color 0.25s ease;
    }

    .sovereign-legacy-checklist-div .checklist-items li:last-child {
      margin-bottom: 0;
    }

    .sovereign-legacy-checklist-div .checklist-items li:hover {
      transform: translateX(6px);
      color: #ffffff;
    }

    .sovereign-legacy-checklist-div .checklist-items li::before {
      content: "";
      position: absolute;
      left: 0;
      top: 9px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background-color: #ffffff;
      transition: background-color 0.25s ease, transform 0.25s ease;
    }

    .sovereign-legacy-checklist-div .checklist-items li:hover::before {
      background-color: var(--gold-primary);
      transform: scale(1.3);
    }

    .sovereign-legacy-checklist-div .btn-structure-app {
      display: inline-block;
      background-color: var(--gold-primary);
      color: #ffffff;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      padding: 13px 34px;
      border-radius: 50px;
      transition: background-color 0.3s ease, transform 0.25s ease, box-shadow 0.3s ease;
    }

    .sovereign-legacy-checklist-div .btn-structure-app:hover {
      background-color: var(--gold-dark);
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 10px 24px rgba(0, 0, 0, 0.26);
    }

    /* AOS Animation Rules */
    .sovereign-legacy-checklist-div [data-aos] {
      opacity: 0;
      transition-property: opacity, transform;
      transition-duration: 0.85s;
      transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
    }

    .sovereign-legacy-checklist-div [data-aos="fade-right"] {
      transform: translateX(-34px);
    }

    .sovereign-legacy-checklist-div [data-aos="fade-left"] {
      transform: translateX(34px);
    }

    .sovereign-legacy-checklist-div [data-aos].aos-animate {
      opacity: 1;
      transform: translate(0, 0);
    }

    /* Responsive Alignment */
    @media (max-width: 991px) {
      .sovereign-legacy-checklist-div .visual-stage {
        margin-bottom: 28px;
      }

      .sovereign-legacy-checklist-div .visual-stage img {
        max-width: 340px;
      }

      .sovereign-legacy-checklist-div .checklist-card {
        padding: 36px 32px;
      }
    }

    @media (max-width: 575px) {
      .sovereign-legacy-checklist-div .visual-stage img {
        max-width: 280px;
      }

      .sovereign-legacy-checklist-div .checklist-card {
        padding: 30px 24px;
        border-radius: 18px;
      }

      .sovereign-legacy-checklist-div .checklist-items li {
        font-size: 14.5px;
      }

      .sovereign-legacy-checklist-div .btn-structure-app {
        width: 100%;
        text-align: center;
      }
    }
  </style>

  <div class="container">
    <div class="row align-items-center justify-content-between g-4">
      <!-- Left Column: Multi-Generational European Citizenship 3D Visual -->
      <div class="col-lg-5" data-aos="fade-right" data-aos-delay="0" style="background-color: var(--bg-surface);">
        <div class="visual-stage">
          <img src="<?= $img; ?>/Multi-Generational-European-Citizenship-Legacy.png" alt="Multi-Generational European Citizenship Legacy">
        </div>
      </div>

      <!-- Right Column: Family Coverage Checklist Card -->
      <div class="col-lg-7" data-aos="fade-left" data-aos-delay="160">
        <div class="checklist-card">
          <h3 class="checklist-heading">Family Coverage Checklist</h3>
          <ul class="checklist-items">
            <li>Primary Applicant &amp; Spouse</li>
            <li>Minor Children (&lt; 18 Yrs)</li>
            <li>Adult Dependent Students (18 - 30 Yrs)</li>
            <li>Dependent Parents (55+ Yrs)</li>
            <li>Future Unborn Generations</li>
          </ul>
          <a href="#structure-family-application" class="btn-structure-app">
            Structure Family Application
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const section = document.querySelector(".sovereign-legacy-checklist-div");
      const aosItems = section.querySelectorAll("[data-aos]");

      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const el = entry.target;
              const delay = parseInt(el.getAttribute("data-aos-delay") || "0", 10);
              setTimeout(() => {
                el.classList.add("aos-animate");
              }, delay);
              obs.unobserve(el);
            }
          });
        },
        { threshold: 0.15 }
      );

      aosItems.forEach((el) => observer.observe(el));
    })();
  </script>
</section>
<?php include ROOT_PATH . '/elements/footer.php'; ?>