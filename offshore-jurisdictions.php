<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/offshore-jurisdictions';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp?v=' . FILE_VERSISON)
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';
?>

<!-- Bootstrap 5 CSS (include in your HTML <head> if not already loaded) -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<style>
  :root {
    --oj-navy: #142238;
    --oj-gold: #a98134;
    --oj-gold-hover: #8f6b27;
    --oj-text: #4a5260;
    --oj-bg: #fff;
    --oj-border: #d8cfc0;
  }

  .offshore-hero-banner {
    background-color: var(--oj-bg);
    background-image: url("<?= $img; ?>/A-global-business-A-simpler-beginning.png");
    background-size: auto;
    background-position: right center;
    background-repeat: no-repeat;
    min-height: 90vh;
    color: var(--oj-navy);
  }

  .offshore-hero-banner-v2 {
    background-image: url("<?= $img; ?>/A-global-business-A-simpler-beginning-2.png");
    
  }

  .oj-eyebrow-bar {
    width: 5px;
    height: 18px;
    background-color: var(--oj-gold);
    border-radius: 2px;
    flex-shrink: 0;
  }

  .oj-eyebrow-text {
    color: var(--oj-navy);
    font-size: 0.875rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
  }

  .oj-hero-title {
    font-size: clamp(2.15rem, 4.2vw, 3.6rem);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -0.025em;
    color: var(--oj-navy);
  }

  .oj-hero-title .oj-gold-line {
    color: var(--oj-gold);
    display: block;
  }

  .oj-accent-rule {
    width: 64px;
    height: 3px;
    background-color: var(--oj-gold);
    border-radius: 2px;
  }

  .oj-hero-copy {
    color: var(--oj-text);
    font-size: 1.075rem;
    line-height: 1.65;
    max-width: 540px;
  }

  .oj-btn-primary {
    background-color: var(--oj-gold);
    border: 1.5px solid var(--oj-gold);
    color: #ffffff;
    font-weight: 600;
    padding: 0.78rem 1.6rem;
    border-radius: 0.5rem;
    transition: background-color 0.2s ease, border-color 0.2s ease, transform 0.15s ease;
  }

  .oj-btn-primary:hover,
  .oj-btn-primary:focus {
    background-color: var(--oj-gold-hover);
    border-color: var(--oj-gold-hover);
    color: #ffffff;
    transform: translateY(-1px);
  }

  .oj-btn-outline {
    background-color: rgba(255, 255, 255, 0.88);
    border: 1.5px solid var(--oj-border);
    color: var(--oj-navy);
    font-weight: 600;
    padding: 0.78rem 1.6rem;
    border-radius: 0.5rem;
    transition: background-color 0.2s ease, border-color 0.2s ease, transform 0.15s ease;
  }

  .oj-btn-outline:hover,
  .oj-btn-outline:focus {
    background-color: #ffffff;
    border-color: var(--oj-gold);
    color: var(--oj-navy);
    transform: translateY(-1px);
  }

  .oj-visual-card {
    background: rgba(255, 255, 255, 0.72);
    backdrop-filter: blur(6px);
    border: 1px solid rgba(169, 129, 52, 0.22);
    border-radius: 1rem;
    box-shadow: 0 18px 40px rgba(20, 34, 56, 0.08);
  }

  @media (max-width: 991.98px) {
    .offshore-hero-banner {
      background-image:
        linear-gradient(180deg, rgba(250, 249, 246, 0.96) 0%, rgba(250, 249, 246, 0.92) 100%),
        url("<?= $img; ?>/A-global-business-A-simpler-beginning.png");
      min-height: auto;
    }
  }
</style>

<section id="offshore-jurisdiction" class="offshore-hero-banner d-flex align-items-center py-5">
  <div class="container py-lg-4">
    <div class="row align-items-center gy-4 gy-lg-0">
      <!-- Left Content Column: Aligned properly across desktop, tablet, and mobile -->
      <div class="col-12 col-lg-7 col-xl-6 text-center text-lg-start">
        <div class="d-inline-flex align-items-center gap-2 mb-3">
          <span class="oj-eyebrow-bar" aria-hidden="true"></span>
          <span class="oj-eyebrow-text">Global Business Mobility</span>
        </div>

        <h1 class="oj-hero-title mb-3">
          A global business.
          <span class="oj-gold-line">A simpler beginning.</span>
        </h1>

        <div class="oj-accent-rule mx-auto mx-lg-0 mb-4" aria-hidden="true"></div>

        <p class="oj-hero-copy mx-auto mx-lg-0 mb-4">
          Explore top jurisdictions, configure your incorporation package, and launch your business seamlessly through our platform.
        </p>

        <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
          <a href="#jurisdictions" class="btn oj-btn-primary">
            Explore Jurisdictions
          </a>
          <a href="#package-builder" class="btn oj-btn-outline">
            Build Your Package
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="offshore-jurisdiction-2" class="offshore-hero-banner offshore-hero-banner-v2 d-flex align-items-center py-5">
  <div class="container py-lg-4">
    <div class="row align-items-center gy-4 gy-lg-0">
      <!-- Left Content Column: Aligned properly across desktop, tablet, and mobile -->
      <div class="col-12 col-lg-7 col-xl-6 text-center text-lg-start">
        <div class="d-inline-flex align-items-center gap-2 mb-3">
          <span class="oj-eyebrow-bar" aria-hidden="true"></span>
          <span class="oj-eyebrow-text">Global Business Mobility</span>
        </div>

        <h1 class="oj-hero-title mb-3">
          A global business.
          <span class="oj-gold-line">A simpler beginning.</span>
        </h1>

        <div class="oj-accent-rule mx-auto mx-lg-0 mb-4" aria-hidden="true"></div>

        <p class="oj-hero-copy mx-auto mx-lg-0 mb-4">
          Explore top jurisdictions, configure your incorporation package, and launch your business seamlessly through our platform.
        </p>

        <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
          <a href="#jurisdictions" class="btn oj-btn-primary">
            Explore Jurisdictions
          </a>
          <a href="#package-builder" class="btn oj-btn-outline">
            Build Your Package
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .oj-foundation-section {
    position: relative;
    background-color: var(--oj-bg);
    background-image:
      radial-gradient(circle at 12% 18%, rgba(169, 129, 52, 0.07), transparent 42%),
      radial-gradient(circle at 88% 82%, rgba(20, 34, 56, 0.04), transparent 45%);
    color: var(--oj-navy);
    overflow: hidden;
  }

  /* Matching top-left & bottom-right flowing gold ribbon curves */
  .oj-wave-top-left {
    position: absolute;
    top: 0;
    left: 0;
    width: clamp(190px, 28vw, 420px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-wave-bottom-right {
    position: absolute;
    bottom: 0;
    right: 0;
    width: clamp(210px, 32vw, 480px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-kicker {
    color: var(--oj-gold);
    font-size: 0.8125rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .oj-section-title {
    font-size: clamp(1.85rem, 3.4vw, 2.75rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.02em;
    color: var(--oj-navy);
  }

  .oj-divider-line {
    width: 56px;
    height: 3px;
    background-color: var(--oj-gold);
    border-radius: 2px;
  }

  .oj-step-card {
    background-color: #ffffff;
    border: 1px solid rgba(216, 207, 192, 0.75);
    border-radius: 1rem;
    box-shadow: 0 12px 30px rgba(20, 34, 56, 0.05);
    transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
  }

  .oj-step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(20, 34, 56, 0.09);
    border-color: rgba(169, 129, 52, 0.55);
  }

  .oj-card-img-wrap {
    position: relative;
    aspect-ratio: 16 / 10;
    overflow: hidden;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
    background-color: #f1ede4;
  }

  .oj-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
  }

  .oj-step-card:hover .oj-card-img-wrap img {
    transform: scale(1.03);
  }

  .oj-step-pill {
    display: inline-block;
    background-color: rgba(169, 129, 52, 0.14);
    color: var(--oj-gold-hover);
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    padding: 0.3rem 0.75rem;
    border-radius: 999px;
  }

  .oj-card-title {
    color: var(--oj-navy);
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1.3;
  }

  .oj-card-desc {
    color: var(--oj-text);
    font-size: 0.9625rem;
    line-height: 1.62;
  }
</style>

<section id="corporate-foundation" class="oj-foundation-section py-5">
  <!-- Top-Left Gold Ribbon Pattern -->
  <svg class="oj-wave-top-left" viewBox="0 0 420 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M-30 220C45 190 95 110 155 25C172 1 182 -14 190 -25" stroke="#a98134" stroke-opacity="0.28" stroke-width="1.5"/>
    <path d="M-20 245C62 212 118 128 184 32C202 6 214 -12 224 -25" stroke="#a98134" stroke-opacity="0.42" stroke-width="1.5"/>
    <path d="M-10 268C78 232 140 144 212 40C232 12 246 -9 258 -25" stroke="#a98134" stroke-opacity="0.20" stroke-width="1.2"/>
    <path d="M-40 192C25 166 72 90 126 12C138 -5 147 -17 154 -25" stroke="#a98134" stroke-opacity="0.16" stroke-width="1.2"/>
  </svg>

  <!-- Bottom-Right Gold Ribbon Pattern -->
  <svg class="oj-wave-bottom-right" viewBox="0 0 480 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M180 295C255 245 340 215 510 185" stroke="#a98134" stroke-opacity="0.24" stroke-width="1.4"/>
    <path d="M215 305C295 252 378 225 515 204" stroke="#a98134" stroke-opacity="0.42" stroke-width="1.6"/>
    <path d="M250 315C332 262 412 238 518 224" stroke="#a98134" stroke-opacity="0.52" stroke-width="1.5"/>
    <path d="M288 322C366 274 442 254 520 245" stroke="#a98134" stroke-opacity="0.25" stroke-width="1.2"/>
  </svg>

  <div class="container position-relative py-lg-4" style="z-index: 1;">
    <!-- Centered Section Header -->
    <div class="row justify-content-center text-center mb-4 mb-lg-5">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="oj-kicker mb-2">Corporate Foundation</div>
        <h2 class="oj-section-title mb-3">Built around your success</h2>
        <div class="oj-divider-line mx-auto" aria-hidden="true"></div>
      </div>
    </div>

    <!-- 3-Column Feature Step Cards -->
    <div class="row g-4">
      <!-- Step 01 -->
      <div class="col-12 col-md-6 col-lg-4">
        <article class="oj-step-card h-100 d-flex flex-column">
          <div class="oj-card-img-wrap">
            <img
              src="<?= $img; ?>/Tools-That-Work-For-Everyone.png"
              alt="Laptop displaying analytics charts and dashboard tools on a wooden desk"
            >
          </div>
          <div class="p-4 flex-grow-1 d-flex flex-column">
            <div class="mb-3">
              <span class="oj-step-pill">Step 01</span>
            </div>
            <h3 class="oj-card-title mb-2">Tools That Work For Everyone</h3>
            <p class="oj-card-desc mb-0">
              Intuitive digital tools tailored for both first-time founders and complex enterprise operations.
            </p>
          </div>
        </article>
      </div>

      <!-- Step 02 -->
      <div class="col-12 col-md-6 col-lg-4">
        <article class="oj-step-card h-100 d-flex flex-column">
          <div class="oj-card-img-wrap">
            <img
              src="<?= $img; ?>/Actionable-Insights.png"
              alt="Advisors reviewing financial and regulatory reports with charts at a conference table"
            >
          </div>
          <div class="p-4 flex-grow-1 d-flex flex-column">
            <div class="mb-3">
              <span class="oj-step-pill">Step 02</span>
            </div>
            <h3 class="oj-card-title mb-2">Actionable Insights</h3>
            <p class="oj-card-desc mb-0">
              In-depth regulatory intelligence and jurisdictional reporting to maximize tax efficiencies.
            </p>
          </div>
        </article>
      </div>

      <!-- Step 03 -->
      <div class="col-12 col-md-6 col-lg-4 mx-auto mx-lg-0">
        <article class="oj-step-card h-100 d-flex flex-column">
          <div class="oj-card-img-wrap">
            <img
              src="<?= $img; ?>/Dedicated-Support.png"
              alt="Support specialist with headset assisting a client during a consultation"
            >
          </div>
          <div class="p-4 flex-grow-1 d-flex flex-column">
            <div class="mb-3">
              <span class="oj-step-pill">Step 03</span>
            </div>
            <h3 class="oj-card-title mb-2">Dedicated Support</h3>
            <p class="oj-card-desc mb-0">
              Hands-on account management and continuous post-incorporation advisory.
            </p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<style>
  .oj-jurisdictions-section {
    position: relative;
    background-color: var(--oj-bg);
    background-image:
      radial-gradient(circle at 10% 15%, rgba(169, 129, 52, 0.08), transparent 42%),
      radial-gradient(circle at 90% 85%, rgba(20, 34, 56, 0.05), transparent 45%);
    color: var(--oj-navy);
    overflow: hidden;
  }

  .oj-kicker-line {
    display: inline-block;
    width: 34px;
    height: 1.5px;
    background-color: rgba(169, 129, 52, 0.55);
    vertical-align: middle;
  }

  .oj-kicker-label {
    color: var(--oj-gold);
    font-size: 0.8125rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .oj-jurisdictions-title {
    font-size: clamp(1.9rem, 3.6vw, 2.85rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.025em;
    color: var(--oj-navy);
  }

  .oj-jurisdictions-title .oj-gold-highlight {
    color: var(--oj-gold);
  }

  .oj-title-underline {
    width: 60px;
    height: 3px;
    background-color: var(--oj-gold);
    border-radius: 2px;
  }

  .oj-jurisdictions-subcopy {
    color: var(--oj-text);
    font-size: 1.025rem;
    line-height: 1.65;
    max-width: 680px;
  }

  .oj-entity-card {
    background-color: #ffffff;
    border: 1px solid rgba(216, 207, 192, 0.78);
    border-radius: 1rem;
    box-shadow: 0 12px 28px rgba(20, 34, 56, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    overflow: hidden;
  }

  .oj-entity-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 42px rgba(20, 34, 56, 0.1);
    border-color: rgba(169, 129, 52, 0.6);
  }

  /* Image frame + curved gold wave divider between image and content */
  .oj-entity-media {
    position: relative;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    background-color: #efeae0;
  }

  .oj-entity-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }

  .oj-entity-card:hover .oj-entity-media img {
    transform: scale(1.04);
  }

  .oj-media-wave-divider {
    position: absolute;
    left: -1px;
    right: -1px;
    bottom: -1px;
    width: calc(100% + 2px);
    height: 28px;
    pointer-events: none;
    z-index: 2;
  }

  .oj-entity-body {
    position: relative;
    z-index: 3;
    background-color: #ffffff;
    padding: 0.75rem 1.25rem 1.2rem;
  }

  .oj-flag-badge {
    width: 44px;
    height: 30px;
    border-radius: 0.35rem;
    overflow: hidden;
    border: 1px solid rgba(20, 34, 56, 0.12);
    box-shadow: 0 3px 8px rgba(20, 34, 56, 0.08);
    flex-shrink: 0;
    background-color: #f8f7f4;
  }

  .oj-flag-badge svg {
    width: 100%;
    height: 100%;
    display: block;
  }

  .oj-vertical-sep {
    width: 1.5px;
    height: 34px;
    background-color: rgba(216, 207, 192, 0.95);
    flex-shrink: 0;
  }

  .oj-entity-name {
    color: var(--oj-navy);
    font-size: 1.08rem;
    font-weight: 700;
    line-height: 1.25;
  }

  .oj-entity-region {
    color: var(--oj-text);
    font-size: 0.875rem;
    font-weight: 500;
    line-height: 1.3;
  }
</style>

<section id="jurisdictions" class="oj-jurisdictions-section py-5">
  <div class="container py-lg-4">
    <!-- Section Heading -->
    <div class="row justify-content-center text-center mb-4 mb-lg-5" data-aos="fade-up" data-aos-duration="700">
      <div class="col-12 col-lg-10">
        <div class="d-inline-flex align-items-center justify-content-center gap-2 mb-2">
          <span class="oj-kicker-line" aria-hidden="true"></span>
          <span class="oj-kicker-label">Global Reach</span>
          <span class="oj-kicker-line" aria-hidden="true"></span>
        </div>

        <h2 class="oj-jurisdictions-title mb-3">
          Multi-Jurisdiction Entities at <span class="oj-gold-highlight">Your Fingertips</span>
        </h2>

        <div class="oj-title-underline mx-auto mb-3" aria-hidden="true"></div>

        <p class="oj-jurisdictions-subcopy mx-auto mb-0">
          Incorporate and coordinate tax-optimized holdings across prime financial hubs worldwide with complete peace of mind.
        </p>
      </div>
    </div>

    <!-- 6-Card Jurisdiction Grid -->
    <div class="row g-4">
      <!-- 1. BVI Company -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50" data-aos-duration="650">
        <article class="oj-entity-card h-100 d-flex flex-column">
          <div class="oj-entity-media">
            <img src="<?= $img; ?>/BVI-Company-Caribbean-Region.png" alt="BVI Company turquoise bay and lush coastal hills in the Caribbean">
            <svg class="oj-media-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>
          <div class="oj-entity-body d-flex align-items-center gap-3 flex-grow-1">
            <div class="oj-flag-badge" aria-hidden="true">
              <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="40" fill="#012169"/>
                <path d="M0 0 L60 40 M60 0 L0 40" stroke="#ffffff" stroke-width="6"/>
                <path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="3"/>
                <path d="M30 0 V40 M0 20 H60" stroke="#ffffff" stroke-width="10"/>
                <path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="6"/>
                <rect x="38" y="10" width="14" height="18" rx="2" fill="#007A33" stroke="#ffffff" stroke-width="1.2"/>
                <circle cx="45" cy="19" r="3.5" fill="#FCD116"/>
              </svg>
            </div>
            <span class="oj-vertical-sep" aria-hidden="true"></span>
            <div>
              <h3 class="oj-entity-name mb-1">BVI Company</h3>
              <p class="oj-entity-region mb-0">Caribbean Region</p>
            </div>
          </div>
        </article>
      </div>

      <!-- 2. Seychelles IBC -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="650">
        <article class="oj-entity-card h-100 d-flex flex-column">
          <div class="oj-entity-media">
            <img src="<?= $img; ?>/Seychelles-IBC.png" alt="Seychelles IBC granite boulders, palm trees, and clear ocean in the Indian Ocean">
            <svg class="oj-media-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>
          <div class="oj-entity-body d-flex align-items-center gap-3 flex-grow-1">
            <div class="oj-flag-badge" aria-hidden="true">
              <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="40" fill="#007A3D"/>
                <polygon points="0,0 24,0 0,40" fill="#003F87"/>
                <polygon points="24,0 46,0 0,40" fill="#FCD116"/>
                <polygon points="46,0 60,0 60,18 0,40" fill="#D62828"/>
                <polygon points="60,18 60,30 0,40" fill="#ffffff"/>
              </svg>
            </div>
            <span class="oj-vertical-sep" aria-hidden="true"></span>
            <div>
              <h3 class="oj-entity-name mb-1">Seychelles IBC</h3>
              <p class="oj-entity-region mb-0">Indian Ocean</p>
            </div>
          </div>
        </article>
      </div>

      <!-- 3. UAE RAK ICC -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="190" data-aos-duration="650">
        <article class="oj-entity-card h-100 d-flex flex-column">
          <div class="oj-entity-media">
            <img src="<?= $img; ?>/UAE-RAK-ICC-Middle-East.png" alt="UAE RAK ICC modern skyline and waterfront tower at golden hour in the Middle East">
            <svg class="oj-media-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>
          <div class="oj-entity-body d-flex align-items-center gap-3 flex-grow-1">
            <div class="oj-flag-badge" aria-hidden="true">
              <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                <rect x="15" y="0" width="45" height="13.34" fill="#00732F"/>
                <rect x="15" y="13.34" width="45" height="13.34" fill="#ffffff"/>
                <rect x="15" y="26.68" width="45" height="13.32" fill="#000000"/>
                <rect x="0" y="0" width="15" height="40" fill="#FF0000"/>
              </svg>
            </div>
            <span class="oj-vertical-sep" aria-hidden="true"></span>
            <div>
              <h3 class="oj-entity-name mb-1">UAE RAK ICC</h3>
              <p class="oj-entity-region mb-0">Middle East</p>
            </div>
          </div>
        </article>
      </div>

      <!-- 4. United Kingdom -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240" data-aos-duration="650">
        <article class="oj-entity-card h-100 d-flex flex-column">
          <div class="oj-entity-media">
            <img src="<?= $img; ?>/United-Kingdom-Europe-Region.png" alt="United Kingdom historic parliament architecture and clock tower in Europe">
            <svg class="oj-media-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>
          <div class="oj-entity-body d-flex align-items-center gap-3 flex-grow-1">
            <div class="oj-flag-badge" aria-hidden="true">
              <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="40" fill="#012169"/>
                <path d="M0 0 L60 40 M60 0 L0 40" stroke="#ffffff" stroke-width="7"/>
                <path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="3.5"/>
                <path d="M30 0 V40 M0 20 H60" stroke="#ffffff" stroke-width="11"/>
                <path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="6.5"/>
              </svg>
            </div>
            <span class="oj-vertical-sep" aria-hidden="true"></span>
            <div>
              <h3 class="oj-entity-name mb-1">United Kingdom</h3>
              <p class="oj-entity-region mb-0">Europe Region</p>
            </div>
          </div>
        </article>
      </div>

      <!-- 5. Singapore Pte Ltd -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="650">
        <article class="oj-entity-card h-100 d-flex flex-column">
          <div class="oj-entity-media">
            <img src="<?= $img; ?>/Singapore-Pte-Ltd-Asia-Pacific.png" alt="Singapore waterfront skyline and iconic financial towers in Asia-Pacific">
            <svg class="oj-media-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>
          <div class="oj-entity-body d-flex align-items-center gap-3 flex-grow-1">
            <div class="oj-flag-badge" aria-hidden="true">
              <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="20" fill="#EF3340"/>
                <rect y="20" width="60" height="20" fill="#ffffff"/>
                <circle cx="17" cy="10" r="6.5" fill="#ffffff"/>
                <circle cx="19.5" cy="10" r="5.5" fill="#EF3340"/>
                <circle cx="24" cy="8.5" r="1.2" fill="#ffffff"/>
                <circle cx="26" cy="11.5" r="1.2" fill="#ffffff"/>
                <circle cx="24.5" cy="14" r="1.2" fill="#ffffff"/>
                <circle cx="21.5" cy="13.5" r="1.2" fill="#ffffff"/>
                <circle cx="21.5" cy="9.5" r="1.2" fill="#ffffff"/>
              </svg>
            </div>
            <span class="oj-vertical-sep" aria-hidden="true"></span>
            <div>
              <h3 class="oj-entity-name mb-1">Singapore Pte Ltd</h3>
              <p class="oj-entity-region mb-0">Asia-Pacific</p>
            </div>
          </div>
        </article>
      </div>

      <!-- 6. Cayman Islands -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="360" data-aos-duration="650">
        <article class="oj-entity-card h-100 d-flex flex-column">
          <div class="oj-entity-media">
            <img src="<?= $img; ?>/Cayman-Islands-Caribbean-Hub.png" alt="Cayman Islands colorful coastal buildings and crystal blue water in the Caribbean Hub">
            <svg class="oj-media-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>
          <div class="oj-entity-body d-flex align-items-center gap-3 flex-grow-1">
            <div class="oj-flag-badge" aria-hidden="true">
              <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="40" fill="#002D72"/>
                <path d="M0 0 L60 40 M60 0 L0 40" stroke="#ffffff" stroke-width="6"/>
                <path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="3"/>
                <path d="M30 0 V40 M0 20 H60" stroke="#ffffff" stroke-width="10"/>
                <path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="6"/>
                <rect x="38" y="10" width="14" height="18" rx="2" fill="#007A33" stroke="#ffffff" stroke-width="1.2"/>
                <circle cx="45" cy="19" r="3.5" fill="#FCD116"/>
              </svg>
            </div>
            <span class="oj-vertical-sep" aria-hidden="true"></span>
            <div>
              <h3 class="oj-entity-name mb-1">Cayman Islands</h3>
              <p class="oj-entity-region mb-0">Caribbean Hub</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<style>
  .oj-begin-section {
    position: relative;
    background-color: var(--oj-bg);
    background-image:
      radial-gradient(circle at 12% 16%, rgba(169, 129, 52, 0.08), transparent 42%),
      radial-gradient(circle at 88% 84%, rgba(20, 34, 56, 0.05), transparent 45%);
    color: var(--oj-navy);
    overflow: hidden;
  }

  .oj-begin-kicker {
    color: var(--oj-gold);
    font-size: 0.8125rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .oj-begin-title {
    font-size: clamp(1.9rem, 3.6vw, 2.85rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.025em;
    color: var(--oj-navy);
  }

  .oj-begin-title .oj-gold-word {
    color: var(--oj-gold);
  }

  .oj-begin-underline {
    width: 58px;
    height: 3px;
    background-color: var(--oj-gold);
    border-radius: 2px;
  }

  .oj-begin-subtitle {
    color: var(--oj-text);
    font-size: 1rem;
    line-height: 1.6;
  }

  .oj-filter-input,
  .oj-filter-select {
    background-color: #ffffff;
    border: 1.5px solid var(--oj-border);
    border-radius: 0.6rem;
    color: var(--oj-navy);
    font-size: 0.9375rem;
    padding: 0.62rem 0.9rem;
    box-shadow: 0 6px 18px rgba(20, 34, 56, 0.04);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
  }

  .oj-filter-input:focus,
  .oj-filter-select:focus {
    border-color: var(--oj-gold);
    box-shadow: 0 0 0 0.2rem rgba(169, 129, 52, 0.16);
    outline: none;
  }

  .oj-package-card {
    background-color: #ffffff;
    border: 1px solid rgba(216, 207, 192, 0.8);
    border-radius: 1rem;
    box-shadow: 0 12px 30px rgba(20, 34, 56, 0.06);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .oj-package-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 44px rgba(20, 34, 56, 0.11);
    border-color: rgba(169, 129, 52, 0.65);
  }

  .oj-package-media {
    position: relative;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    background-color: #efeae0;
  }

  .oj-package-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }

  .oj-package-card:hover .oj-package-media img {
    transform: scale(1.04);
  }

  .oj-card-wave-divider {
    position: absolute;
    left: -1px;
    right: -1px;
    bottom: -1px;
    width: calc(100% + 2px);
    height: 28px;
    pointer-events: none;
    z-index: 2;
  }

  .oj-package-body {
    position: relative;
    z-index: 3;
    background-color: #ffffff;
    padding: 0.65rem 1.35rem 1.35rem;
  }

  .oj-mini-flag {
    width: 34px;
    height: 23px;
    border-radius: 0.25rem;
    overflow: hidden;
    border: 1px solid rgba(20, 34, 56, 0.12);
    flex-shrink: 0;
  }

  .oj-mini-flag svg {
    width: 100%;
    height: 100%;
    display: block;
  }

  .oj-package-name {
    color: var(--oj-navy);
    font-size: 1.08rem;
    font-weight: 700;
    line-height: 1.25;
  }

  .oj-tag-badge {
    background-color: rgba(169, 129, 52, 0.14);
    color: var(--oj-gold-hover);
    font-size: 0.75rem;
    font-weight: 700;
    padding: 0.25rem 0.65rem;
    border-radius: 0.4rem;
    white-space: nowrap;
  }

  .oj-package-summary {
    color: var(--oj-text);
    font-size: 0.9rem;
    line-height: 1.55;
  }

  .oj-price-value {
    color: var(--oj-navy);
    font-size: 1.75rem;
    font-weight: 800;
    letter-spacing: -0.02em;
  }

  .oj-price-term {
    color: var(--oj-text);
    font-size: 0.85rem;
    font-weight: 600;
  }

  .oj-feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .oj-feature-list li {
    display: flex;
    align-items: center;
    gap: 0.55rem;
    color: var(--oj-navy);
    font-size: 0.885rem;
    font-weight: 500;
    padding: 0.3rem 0;
  }

  .oj-check-icon {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background-color: rgba(169, 129, 52, 0.16);
    color: var(--oj-gold-hover);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 800;
    flex-shrink: 0;
  }

  .oj-build-btn {
    background-color: var(--oj-gold);
    border: 1.5px solid var(--oj-gold);
    color: #ffffff;
    font-size: 0.875rem;
    font-weight: 600;
    padding: 0.55rem 1.05rem;
    border-radius: 0.5rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    transition: background-color 0.2s ease, border-color 0.2s ease, transform 0.15s ease;
  }

  .oj-build-btn:hover {
    background-color: var(--oj-gold-hover);
    border-color: var(--oj-gold-hover);
    color: #ffffff;
    transform: translateY(-1px);
  }

  .oj-compare-label {
    color: var(--oj-text);
    font-size: 0.875rem;
    font-weight: 600;
    cursor: pointer;
    user-select: none;
  }

  .oj-compare-check {
    width: 16px;
    height: 16px;
    accent-color: var(--oj-gold);
    cursor: pointer;
  }
</style>

<section id="package-builder" class="oj-begin-section py-5">
  <div class="container py-lg-4">
    <!-- Top Bar: Heading + Search & Region Filter -->
    <div class="row align-items-end justify-content-between gy-3 mb-4 mb-lg-5" data-aos="fade-up" data-aos-duration="700">
      <div class="col-12 col-lg-7">
        <div class="d-inline-flex align-items-center gap-2 mb-2">
          <span class="oj-kicker-line" aria-hidden="true"></span>
          <span class="oj-begin-kicker">Global Business Mobility</span>
          <span class="oj-kicker-line" aria-hidden="true"></span>
        </div>

        <h2 class="oj-begin-title mb-2">
          Where will your <span class="oj-gold-word">business</span> begin?
        </h2>

        <div class="oj-begin-underline mb-2" aria-hidden="true"></div>

        <p class="oj-begin-subtitle mb-0">
          Choose from our top jurisdictions to set up and grow your global business.
        </p>
      </div>

      <div class="col-12 col-lg-5">
        <div class="row g-2">
          <div class="col-12 col-sm-7">
            <label for="ojCountrySearch" class="visually-hidden">Search country</label>
            <input
              id="ojCountrySearch"
              type="search"
              class="form-control oj-filter-input"
              placeholder="Search country..."
            >
          </div>
          <div class="col-12 col-sm-5">
            <label for="ojRegionFilter" class="visually-hidden">Filter by region</label>
            <select id="ojRegionFilter" class="form-select oj-filter-select">
              <option value="all" selected>All Regions</option>
              <option value="indian-ocean">Indian Ocean</option>
              <option value="caribbean">Caribbean</option>
              <option value="middle-east">Middle East</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- 3-Column Jurisdiction Package Cards -->
    <div id="ojJurisdictionGrid" class="row g-4">
      <!-- Seychelles IBC -->
      <div
        class="col-12 col-md-6 col-lg-4 oj-jurisdiction-item"
        data-country="seychelles ibc"
        data-region="indian-ocean"
        data-aos="fade-up"
        data-aos-delay="60"
        data-aos-duration="650"
      >
        <article class="oj-package-card h-100 d-flex flex-column">
          <div class="oj-package-media">
            <img src="<?= $img; ?>/Seychelles-IBC.png" alt="Seychelles IBC tropical beach, palm trees, and clear turquoise water">
            <svg class="oj-card-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>

          <div class="oj-package-body d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
              <div class="d-flex align-items-center gap-2">
                <span class="oj-mini-flag" aria-hidden="true">
                  <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                    <rect width="60" height="40" fill="#007A3D"/>
                    <polygon points="0,0 24,0 0,40" fill="#003F87"/>
                    <polygon points="24,0 46,0 0,40" fill="#FCD116"/>
                    <polygon points="46,0 60,0 60,18 0,40" fill="#D62828"/>
                    <polygon points="60,18 60,30 0,40" fill="#ffffff"/>
                  </svg>
                </span>
                <h3 class="oj-package-name mb-0">Seychelles IBC</h3>
              </div>
              <span class="oj-tag-badge">Popular</span>
            </div>

            <p class="oj-package-summary mb-3">
              Fast incorporation with strict corporate privacy and zero local tax requirements.
            </p>

            <div class="d-flex align-items-baseline gap-2 mb-3 pb-2 border-bottom border-light">
              <span class="oj-price-value">$1,250</span>
              <span class="oj-price-term">USD / 1st Year</span>
            </div>

            <ul class="oj-feature-list mb-4 flex-grow-1">
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>Name Availability Check</span></li>
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>Incorporation Coordination</span></li>
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>Digital Corporate Documents</span></li>
            </ul>

            <div class="d-flex align-items-center justify-content-between gap-2 pt-2 border-top border-light">
              <a href="#configure-seychelles" class="oj-build-btn">
                Build Package <span aria-hidden="true">&#8599;</span>
              </a>
              <label class="d-inline-flex align-items-center gap-2 oj-compare-label mb-0">
                <input type="checkbox" class="oj-compare-check" value="Seychelles IBC">
                <span>Compare</span>
              </label>
            </div>
          </div>
        </article>
      </div>

      <!-- British Virgin Islands -->
      <div
        class="col-12 col-md-6 col-lg-4 oj-jurisdiction-item"
        data-country="british virgin islands bvi"
        data-region="caribbean"
        data-aos="fade-up"
        data-aos-delay="140"
        data-aos-duration="650"
      >
        <article class="oj-package-card h-100 d-flex flex-column">
          <div class="oj-package-media">
            <img src="<?= $img; ?>/British-Virgin-Islands.png" alt="British Virgin Islands scenic bay with sailboats and tropical hillside">
            <svg class="oj-card-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>

          <div class="oj-package-body d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
              <div class="d-flex align-items-center gap-2">
                <span class="oj-mini-flag" aria-hidden="true">
                  <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                    <rect width="60" height="40" fill="#012169"/>
                    <path d="M0 0 L60 40 M60 0 L0 40" stroke="#ffffff" stroke-width="6"/>
                    <path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="3"/>
                    <path d="M30 0 V40 M0 20 H60" stroke="#ffffff" stroke-width="10"/>
                    <path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="6"/>
                    <rect x="38" y="10" width="14" height="18" rx="2" fill="#007A33" stroke="#ffffff" stroke-width="1.2"/>
                    <circle cx="45" cy="19" r="3.5" fill="#FCD116"/>
                  </svg>
                </span>
                <h3 class="oj-package-name mb-0">British Virgin Islands</h3>
              </div>
              <span class="oj-tag-badge">Top Rated</span>
            </div>

            <p class="oj-package-summary mb-3">
              Premier international business structure favored by global investors and funds.
            </p>

            <div class="d-flex align-items-baseline gap-2 mb-3 pb-2 border-bottom border-light">
              <span class="oj-price-value">$2,450</span>
              <span class="oj-price-term">USD / 1st Year</span>
            </div>

            <ul class="oj-feature-list mb-4 flex-grow-1">
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>Tax Neutral Structure</span></li>
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>No Minimum Paid-up Capital</span></li>
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>Flexible Share Capital Structure</span></li>
            </ul>

            <div class="d-flex align-items-center justify-content-between gap-2 pt-2 border-top border-light">
              <a href="#configure-bvi" class="oj-build-btn">
                Build Package <span aria-hidden="true">&#8599;</span>
              </a>
              <label class="d-inline-flex align-items-center gap-2 oj-compare-label mb-0">
                <input type="checkbox" class="oj-compare-check" value="British Virgin Islands">
                <span>Compare</span>
              </label>
            </div>
          </div>
        </article>
      </div>

      <!-- UAE - RAK ICC -->
      <div
        class="col-12 col-md-6 col-lg-4 oj-jurisdiction-item"
        data-country="uae rak icc middle east"
        data-region="middle-east"
        data-aos="fade-up"
        data-aos-delay="220"
        data-aos-duration="650"
      >
        <article class="oj-package-card h-100 d-flex flex-column">
          <div class="oj-package-media">
            <img src="<?= $img; ?>/UAE-RAK-ICC-Middle-East.png" alt="UAE RAK ICC modern city skyline and waterfront at sunset">
            <svg class="oj-card-wave-divider" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.2"/>
            </svg>
          </div>

          <div class="oj-package-body d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
              <div class="d-flex align-items-center gap-2">
                <span class="oj-mini-flag" aria-hidden="true">
                  <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="0" width="45" height="13.34" fill="#00732F"/>
                    <rect x="15" y="13.34" width="45" height="13.34" fill="#ffffff"/>
                    <rect x="15" y="26.68" width="45" height="13.32" fill="#000000"/>
                    <rect x="0" y="0" width="15" height="40" fill="#FF0000"/>
                  </svg>
                </span>
                <h3 class="oj-package-name mb-0">UAE - RAK ICC</h3>
              </div>
              <span class="oj-tag-badge">Prestigious</span>
            </div>

            <p class="oj-package-summary mb-3">
              High-reputation entity with direct access to UAE corporate banking options.
            </p>

            <div class="d-flex align-items-baseline gap-2 mb-3 pb-2 border-bottom border-light">
              <span class="oj-price-value">$2,750</span>
              <span class="oj-price-term">USD / 1st Year</span>
            </div>

            <ul class="oj-feature-list mb-4 flex-grow-1">
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>100% Foreign Ownership</span></li>
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>Double Taxation Treaty Benefits</span></li>
              <li><span class="oj-check-icon" aria-hidden="true">&#10003;</span><span>Zero Corporate Income Taxes</span></li>
            </ul>

            <div class="d-flex align-items-center justify-content-between gap-2 pt-2 border-top border-light">
              <a href="#configure-uae-rak" class="oj-build-btn">
                Build Package <span aria-hidden="true">&#8599;</span>
              </a>
              <label class="d-inline-flex align-items-center gap-2 oj-compare-label mb-0">
                <input type="checkbox" class="oj-compare-check" value="UAE - RAK ICC">
                <span>Compare</span>
              </label>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<style>
  .oj-compliance-section {
    position: relative;
    min-height: 80vh;
    width: 100%;
    display: flex;
    align-items: center;
    background-color: var(--oj-bg);
    background-image:
      radial-gradient(circle at 12% 16%, rgba(169, 129, 52, 0.08), transparent 42%),
      radial-gradient(circle at 88% 84%, rgba(20, 34, 56, 0.05), transparent 45%);
    color: var(--oj-navy);
    overflow: hidden;
  }

  .oj-corner-graphic-tl {
    position: absolute;
    top: 0;
    left: 0;
    width: clamp(200px, 30vw, 440px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-corner-graphic-br {
    position: absolute;
    bottom: 0;
    right: 0;
    width: clamp(220px, 34vw, 500px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-compliance-banner {
    position: relative;
    background: linear-gradient(115deg, #9c7429 0%, var(--oj-gold) 52%, #b98f3d 100%);
    border-radius: 0.9rem;
    padding: 1.25rem 1.75rem;
    color: #ffffff;
    box-shadow: 0 14px 32px rgba(169, 129, 52, 0.24);
    overflow: hidden;
  }

  .oj-banner-world-map {
    position: absolute;
    right: 1.25rem;
    top: 50%;
    transform: translateY(-50%);
    width: 190px;
    height: auto;
    opacity: 0.22;
    pointer-events: none;
  }

  .oj-compliance-banner-text {
    position: relative;
    z-index: 1;
    font-size: clamp(1rem, 1.45vw, 1.22rem);
    font-weight: 600;
    line-height: 1.5;
    max-width: 920px;
  }

  .oj-compliance-outer-frame {
    background-color: rgba(255, 255, 255, 0.72);
    border: 1.5px solid rgba(216, 207, 192, 0.9);
    border-radius: 1.25rem;
    padding: 1.25rem;
    box-shadow: 0 16px 38px rgba(20, 34, 56, 0.05);
  }

  .oj-pillar-card {
    background-color: #ffffff;
    border: 1px solid rgba(216, 207, 192, 0.78);
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 10px 26px rgba(20, 34, 56, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .oj-pillar-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 38px rgba(20, 34, 56, 0.1);
    border-color: rgba(169, 129, 52, 0.6);
  }

  .oj-pillar-media {
    position: relative;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    background-color: #efeae0;
  }

  .oj-pillar-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }

  .oj-pillar-card:hover .oj-pillar-media img {
    transform: scale(1.04);
  }

  .oj-pillar-wave {
    position: absolute;
    left: -1px;
    right: -1px;
    bottom: -1px;
    width: calc(100% + 2px);
    height: 30px;
    pointer-events: none;
    z-index: 2;
  }

  .oj-pillar-body {
    position: relative;
    z-index: 3;
    background-color: #ffffff;
    padding: 0.55rem 1.25rem 1.3rem;
  }

  .oj-pillar-icon-box {
    width: 44px;
    height: 44px;
    border-radius: 0.65rem;
    background-color: rgba(169, 129, 52, 0.12);
    border: 1px solid rgba(169, 129, 52, 0.35);
    color: var(--oj-gold-hover);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .oj-pillar-title {
    color: var(--oj-navy);
    font-size: 1.04rem;
    font-weight: 700;
    line-height: 1.3;
  }

  .oj-pillar-copy {
    color: var(--oj-text);
    font-size: 0.9rem;
    line-height: 1.55;
  }

  @media (max-width: 767.98px) {
    .oj-compliance-section {
      min-height: auto;
    }

    .oj-banner-world-map {
      display: none;
    }
  }
</style>

<section id="compliance-protocols" class="oj-compliance-section py-5">
  <!-- Top-Left Graphical Ribbon Design -->
  <svg class="oj-corner-graphic-tl" viewBox="0 0 440 270" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M-35 225C45 190 98 112 162 24C178 2 189 -14 198 -26" stroke="#a98134" stroke-opacity="0.28" stroke-width="1.5"/>
    <path d="M-22 250C64 212 122 130 192 32C210 7 222 -11 232 -26" stroke="#a98134" stroke-opacity="0.44" stroke-width="1.6"/>
    <path d="M-10 272C82 232 146 146 220 40C240 12 254 -9 266 -26" stroke="#a98134" stroke-opacity="0.22" stroke-width="1.2"/>
    <circle cx="52" cy="48" r="3.5" fill="#a98134" fill-opacity="0.35"/>
  </svg>

  <!-- Bottom-Right Graphical Ribbon Design -->
  <svg class="oj-corner-graphic-br" viewBox="0 0 500 290" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M185 305C265 252 352 222 528 190" stroke="#a98134" stroke-opacity="0.24" stroke-width="1.4"/>
    <path d="M222 315C305 260 390 232 532 210" stroke="#a98134" stroke-opacity="0.44" stroke-width="1.6"/>
    <path d="M258 325C342 270 425 245 536 230" stroke="#a98134" stroke-opacity="0.54" stroke-width="1.5"/>
    <path d="M298 332C378 282 456 260 538 250" stroke="#a98134" stroke-opacity="0.26" stroke-width="1.2"/>
    <circle cx="438" cy="158" r="3.5" fill="#a98134" fill-opacity="0.35"/>
  </svg>

  <div class="container position-relative py-lg-3" style="z-index: 1;">
    <!-- Top Gold Callout Banner -->
    <div class="oj-compliance-banner mb-4" data-aos="fade-up" data-aos-duration="650">
      <svg class="oj-banner-world-map" viewBox="0 0 220 110" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="45" cy="36" r="2.2" fill="#ffffff"/>
        <circle cx="54" cy="32" r="2.2" fill="#ffffff"/>
        <circle cx="63" cy="35" r="2.2" fill="#ffffff"/>
        <circle cx="52" cy="44" r="2.2" fill="#ffffff"/>
        <circle cx="60" cy="52" r="2.2" fill="#ffffff"/>
        <circle cx="68" cy="68" r="2.2" fill="#ffffff"/>
        <circle cx="74" cy="78" r="2.2" fill="#ffffff"/>
        <circle cx="105" cy="30" r="2.2" fill="#ffffff"/>
        <circle cx="114" cy="28" r="2.2" fill="#ffffff"/>
        <circle cx="123" cy="31" r="2.2" fill="#ffffff"/>
        <circle cx="110" cy="40" r="2.2" fill="#ffffff"/>
        <circle cx="118" cy="44" r="2.2" fill="#ffffff"/>
        <circle cx="114" cy="58" r="2.2" fill="#ffffff"/>
        <circle cx="122" cy="64" r="2.2" fill="#ffffff"/>
        <circle cx="142" cy="34" r="2.2" fill="#ffffff"/>
        <circle cx="152" cy="36" r="2.2" fill="#ffffff"/>
        <circle cx="162" cy="40" r="2.2" fill="#ffffff"/>
        <circle cx="150" cy="48" r="2.2" fill="#ffffff"/>
        <circle cx="168" cy="54" r="2.2" fill="#ffffff"/>
        <circle cx="176" cy="76" r="2.2" fill="#ffffff"/>
        <circle cx="185" cy="82" r="2.2" fill="#ffffff"/>
      </svg>

      <p class="oj-compliance-banner-text mb-0">
        At Devotion Global CSP, we provide risk management &amp; legal compliance protocols ensuring that clients incorporate safely and with total regulatory clarity.
      </p>
    </div>

    <!-- Outer Framed 3-Pillar Grid with Wave Dividers -->
    <div class="oj-compliance-outer-frame" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
      <div class="row g-4">
        <!-- Pillar 1: Compliance Transparency -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="650">
          <article class="oj-pillar-card h-100 d-flex flex-column">
            <div class="oj-pillar-media">
              <img src="<?= $img; ?>/Compliance-Transparency.png" alt="Legal gavel, scales of justice, and regulatory checklist on desk">
              <svg class="oj-pillar-wave" viewBox="0 0 400 34" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0 19 Q 200 2 400 22 L 400 34 L 0 34 Z" fill="#ffffff"/>
                <path d="M0 19 Q 200 2 400 22" fill="none" stroke="#a98134" stroke-width="2.2"/>
              </svg>
            </div>

            <div class="oj-pillar-body d-flex align-items-start gap-3 flex-grow-1">
              <div class="oj-pillar-icon-box" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 3l7 3.2v5.8c0 4.9-3 9.2-7 10.8-4-1.6-7-5.9-7-10.8V6.2L12 3z"/>
                  <path d="M9 12l2 2 4-4"/>
                </svg>
              </div>
              <div>
                <h3 class="oj-pillar-title mb-1">Compliance Transparency:</h3>
                <p class="oj-pillar-copy mb-0">
                  Jurisdictional guidelines and annual government license fees are disclosed upfront.
                </p>
              </div>
            </div>
          </article>
        </div>

        <!-- Pillar 2: Banking Regulatory Alignment -->
        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="650">
          <article class="oj-pillar-card h-100 d-flex flex-column">
            <div class="oj-pillar-media">
              <img src="<?= $img; ?>/Banking-Regulatory-Alignment.png" alt="Corporate bank building with regulatory compliance checklist and seal">
              <svg class="oj-pillar-wave" viewBox="0 0 400 34" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0 19 Q 200 2 400 22 L 400 34 L 0 34 Z" fill="#ffffff"/>
                <path d="M0 19 Q 200 2 400 22" fill="none" stroke="#a98134" stroke-width="2.2"/>
              </svg>
            </div>

            <div class="oj-pillar-body d-flex align-items-start gap-3 flex-grow-1">
              <div class="oj-pillar-icon-box" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M3 10h18"/>
                  <path d="M5 10v8M9 10v8M15 10v8M19 10v8"/>
                  <path d="M2 20h20"/>
                  <path d="M12 3l10 5H2l10-5z"/>
                </svg>
              </div>
              <div>
                <h3 class="oj-pillar-title mb-1">Banking Regulatory Alignment:</h3>
                <p class="oj-pillar-copy mb-0">
                  Cross-border entity structures undergo pre-screening to match corporate banking KYC standards.
                </p>
              </div>
            </div>
          </article>
        </div>

        <!-- Pillar 3: Data Security & Privacy -->
        <div class="col-12 col-md-6 col-lg-4 mx-auto mx-lg-0" data-aos="fade-up" data-aos-delay="280" data-aos-duration="650">
          <article class="oj-pillar-card h-100 d-flex flex-column">
            <div class="oj-pillar-media">
              <img src="<?= $img; ?>/Data-Security-Privacy.png" alt="Laptop displaying encrypted shield security interface and data protection">
              <svg class="oj-pillar-wave" viewBox="0 0 400 34" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0 19 Q 200 2 400 22 L 400 34 L 0 34 Z" fill="#ffffff"/>
                <path d="M0 19 Q 200 2 400 22" fill="none" stroke="#a98134" stroke-width="2.2"/>
              </svg>
            </div>

            <div class="oj-pillar-body d-flex align-items-start gap-3 flex-grow-1">
              <div class="oj-pillar-icon-box" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <ellipse cx="12" cy="6" rx="7" ry="3"/>
                  <path d="M5 6v6c0 1.66 3.13 3 7 3s7-1.34 7-3V6"/>
                  <path d="M5 12v6c0 1.66 3.13 3 7 3"/>
                  <rect x="15" y="13" width="6" height="6" rx="1"/>
                  <path d="M16.5 13v-1.5a1.5 1.5 0 0 1 3 0V13"/>
                </svg>
              </div>
              <div>
                <h3 class="oj-pillar-title mb-1">Data Security &amp; Privacy:</h3>
                <p class="oj-pillar-copy mb-0">
                  All client documentation is stored within encrypted corporate vaults adhering to strict international privacy mandates.
                </p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .oj-matrix-section {
    position: relative;
    background-color: var(--oj-bg);
    background-image:
      radial-gradient(circle at 10% 15%, rgba(169, 129, 52, 0.08), transparent 42%),
      radial-gradient(circle at 90% 85%, rgba(20, 34, 56, 0.05), transparent 45%);
    color: var(--oj-navy);
    overflow: hidden;
  }

  .oj-matrix-wave-tl {
    position: absolute;
    top: 0;
    left: 0;
    width: clamp(190px, 28vw, 420px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-matrix-wave-br {
    position: absolute;
    bottom: 0;
    right: 0;
    width: clamp(210px, 32vw, 480px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-matrix-kicker {
    color: var(--oj-gold);
    font-size: 0.8125rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .oj-matrix-title {
    font-size: clamp(1.9rem, 3.6vw, 2.85rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.025em;
    color: var(--oj-navy);
  }

  .oj-matrix-underline {
    width: 60px;
    height: 3px;
    background-color: var(--oj-gold);
    border-radius: 2px;
  }

  .oj-matrix-shell {
    background-color: #ffffff;
    border: 1.5px solid rgba(216, 207, 192, 0.88);
    border-radius: 1.1rem;
    box-shadow: 0 16px 38px rgba(20, 34, 56, 0.06);
    overflow: hidden;
  }

  .oj-matrix-table {
    margin-bottom: 0;
    vertical-align: middle;
    border-collapse: separate;
    border-spacing: 0;
  }

  .oj-matrix-table thead th {
    background: linear-gradient(180deg, #b88e3d 0%, var(--oj-gold) 100%);
    color: #ffffff;
    font-size: 0.96rem;
    font-weight: 700;
    padding: 1.05rem 1.25rem;
    border: 0;
    white-space: nowrap;
  }

  .oj-matrix-table thead th:not(:last-child) {
    border-right: 1px solid rgba(255, 255, 255, 0.22);
  }

  .oj-matrix-table tbody tr {
    transition: background-color 0.2s ease;
  }

  .oj-matrix-table tbody tr:hover {
    background-color: rgba(169, 129, 52, 0.045);
  }

  .oj-matrix-table tbody tr:not(:last-child) td {
    border-bottom: 1px solid rgba(216, 207, 192, 0.55);
  }

  .oj-matrix-table tbody td {
    padding: 1.1rem 1.25rem;
    font-size: 0.96rem;
    color: var(--oj-navy);
  }

  .oj-matrix-table tbody td:not(:last-child) {
    border-right: 1px solid rgba(216, 207, 192, 0.4);
  }

  .oj-criteria-icon {
    width: 34px;
    height: 34px;
    border-radius: 0.55rem;
    background-color: rgba(169, 129, 52, 0.12);
    border: 1px solid rgba(169, 129, 52, 0.35);
    color: var(--oj-gold-hover);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .oj-criteria-label {
    font-weight: 700;
    color: var(--oj-navy);
  }

  .oj-matrix-flag {
    width: 28px;
    height: 19px;
    border-radius: 0.2rem;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.45);
    flex-shrink: 0;
    display: inline-flex;
  }

  .oj-matrix-flag svg {
    width: 100%;
    height: 100%;
    display: block;
  }

  .oj-tax-pill {
    display: inline-block;
    background-color: #2f7d32;
    color: #ffffff;
    font-size: 0.84rem;
    font-weight: 700;
    padding: 0.32rem 0.85rem;
    border-radius: 0.45rem;
    letter-spacing: 0.01em;
    box-shadow: 0 3px 8px rgba(47, 125, 50, 0.22);
  }

  .oj-matrix-val-strong {
    font-weight: 600;
    color: var(--oj-navy);
  }

  .oj-matrix-val-muted {
    font-weight: 500;
    color: var(--oj-text);
  }
</style>

<section id="jurisdiction-matrix" class="oj-matrix-section py-5">
  <!-- Top-Left & Bottom-Right Gold Pattern Curves -->
  <svg class="oj-matrix-wave-tl" viewBox="0 0 420 260" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M-30 220C45 190 95 110 155 25C172 1 182 -14 190 -25" stroke="#a98134" stroke-opacity="0.28" stroke-width="1.5"/>
    <path d="M-20 245C62 212 118 128 184 32C202 6 214 -12 224 -25" stroke="#a98134" stroke-opacity="0.42" stroke-width="1.5"/>
    <path d="M-10 268C78 232 140 144 212 40C232 12 246 -9 258 -25" stroke="#a98134" stroke-opacity="0.20" stroke-width="1.2"/>
  </svg>

  <svg class="oj-matrix-wave-br" viewBox="0 0 480 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M180 295C255 245 340 215 510 185" stroke="#a98134" stroke-opacity="0.24" stroke-width="1.4"/>
    <path d="M215 305C295 252 378 225 515 204" stroke="#a98134" stroke-opacity="0.42" stroke-width="1.6"/>
    <path d="M250 315C332 262 412 238 518 224" stroke="#a98134" stroke-opacity="0.52" stroke-width="1.5"/>
  </svg>

  <div class="container position-relative py-lg-4" style="z-index: 1;">
    <!-- Section Heading -->
    <div class="row justify-content-center text-center mb-4 mb-lg-5" data-aos="fade-up" data-aos-duration="700">
      <div class="col-12 col-lg-9">
        <div class="d-inline-flex align-items-center justify-content-center gap-2 mb-2">
          <span class="oj-kicker-line" aria-hidden="true"></span>
          <span class="oj-matrix-kicker">Jurisdiction Matrix</span>
          <span class="oj-kicker-line" aria-hidden="true"></span>
        </div>

        <h2 class="oj-matrix-title mb-3">Comparative Analysis Overview</h2>

        <div class="oj-matrix-underline mx-auto" aria-hidden="true"></div>
      </div>
    </div>

    <!-- Classic Comparative Matrix Table -->
    <div class="oj-matrix-shell" data-aos="fade-up" data-aos-delay="120" data-aos-duration="700">
      <div class="table-responsive">
        <table class="table oj-matrix-table align-middle">
          <thead>
            <tr>
              <th scope="col">Feature / Criteria</th>
              <th scope="col">
                <span class="d-inline-flex align-items-center gap-2">
                  <span class="oj-matrix-flag" aria-hidden="true">
                    <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                      <rect width="60" height="40" fill="#007A3D"/>
                      <polygon points="0,0 24,0 0,40" fill="#003F87"/>
                      <polygon points="24,0 46,0 0,40" fill="#FCD116"/>
                      <polygon points="46,0 60,0 60,18 0,40" fill="#D62828"/>
                      <polygon points="60,18 60,30 0,40" fill="#ffffff"/>
                    </svg>
                  </span>
                  <span>SC Seychelles IBC</span>
                </span>
              </th>
              <th scope="col">
                <span class="d-inline-flex align-items-center gap-2">
                  <span class="oj-matrix-flag" aria-hidden="true">
                    <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                      <rect width="60" height="40" fill="#012169"/>
                      <path d="M0 0 L60 40 M60 0 L0 40" stroke="#ffffff" stroke-width="6"/>
                      <path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="3"/>
                      <path d="M30 0 V40 M0 20 H60" stroke="#ffffff" stroke-width="10"/>
                      <path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="6"/>
                      <rect x="38" y="10" width="14" height="18" rx="2" fill="#007A33" stroke="#ffffff" stroke-width="1.2"/>
                      <circle cx="45" cy="19" r="3.5" fill="#FCD116"/>
                    </svg>
                  </span>
                  <span>VG BVI Business Co.</span>
                </span>
              </th>
              <th scope="col">
                <span class="d-inline-flex align-items-center gap-2">
                  <span class="oj-matrix-flag" aria-hidden="true">
                    <svg viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                      <rect x="15" y="0" width="45" height="13.34" fill="#00732F"/>
                      <rect x="15" y="13.34" width="45" height="13.34" fill="#ffffff"/>
                      <rect x="15" y="26.68" width="45" height="13.32" fill="#000000"/>
                      <rect x="0" y="0" width="15" height="40" fill="#FF0000"/>
                    </svg>
                  </span>
                  <span>AE UAE RAK ICC</span>
                </span>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="d-inline-flex align-items-center gap-3">
                  <span class="oj-criteria-icon" aria-hidden="true">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="13" r="8"/>
                      <path d="M12 9v4l2.5 1.5"/>
                      <path d="M9.5 2h5"/>
                    </svg>
                  </span>
                  <span class="oj-criteria-label">Incorporation Speed</span>
                </span>
              </td>
              <td class="oj-matrix-val-strong">3–5 Business Days</td>
              <td class="oj-matrix-val-strong">5–7 Business Days</td>
              <td class="oj-matrix-val-strong">4–6 Business Days</td>
            </tr>

            <tr>
              <td>
                <span class="d-inline-flex align-items-center gap-3">
                  <span class="oj-criteria-icon" aria-hidden="true">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <line x1="19" y1="5" x2="5" y2="19"/>
                      <circle cx="6.5" cy="6.5" r="2.5"/>
                      <circle cx="17.5" cy="17.5" r="2.5"/>
                    </svg>
                  </span>
                  <span class="oj-criteria-label">Corporate Tax Rate</span>
                </span>
              </td>
              <td><span class="oj-tax-pill">0% Local Tax</span></td>
              <td><span class="oj-tax-pill">0% Local Tax</span></td>
              <td><span class="oj-tax-pill">0% Tax (Offshore)</span></td>
            </tr>

            <tr>
              <td>
                <span class="d-inline-flex align-items-center gap-3">
                  <span class="oj-criteria-icon" aria-hidden="true">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M12 3l7 3.2v5.8c0 4.9-3 9.2-7 10.8-4-1.6-7-5.9-7-10.8V6.2L12 3z"/>
                      <path d="M9.5 12l1.8 1.8 3.2-3.4"/>
                    </svg>
                  </span>
                  <span class="oj-criteria-label">Director Confidentiality</span>
                </span>
              </td>
              <td class="oj-matrix-val-strong">High / Confidential</td>
              <td class="oj-matrix-val-strong">Private Registry</td>
              <td class="oj-matrix-val-strong">Confidential</td>
            </tr>

            <tr>
              <td>
                <span class="d-inline-flex align-items-center gap-3">
                  <span class="oj-criteria-icon" aria-hidden="true">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M3 10h18"/>
                      <path d="M6 10v7M10 10v7M14 10v7M18 10v7"/>
                      <path d="M2 20h20"/>
                      <path d="M12 3l10 5H2l10-5z"/>
                    </svg>
                  </span>
                  <span class="oj-criteria-label">Banking Compatibility</span>
                </span>
              </td>
              <td class="oj-matrix-val-muted">Remote EMI / Global</td>
              <td class="oj-matrix-val-muted">Global Institutional</td>
              <td class="oj-matrix-val-muted">UAE Local &amp; Global</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<style>
  .oj-bundles-section {
    position: relative;
    background-color: var(--oj-bg);
    background-image:
      radial-gradient(circle at 12% 16%, rgba(169, 129, 52, 0.08), transparent 42%),
      radial-gradient(circle at 88% 84%, rgba(20, 34, 56, 0.05), transparent 45%);
    color: var(--oj-navy);
    overflow: hidden;
  }

  .oj-bundles-ribbon-tl {
    position: absolute;
    top: 0;
    left: 0;
    width: clamp(200px, 30vw, 440px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-bundles-ribbon-br {
    position: absolute;
    bottom: 0;
    right: 0;
    width: clamp(220px, 34vw, 500px);
    height: auto;
    pointer-events: none;
    z-index: 0;
  }

  .oj-bundles-kicker {
    color: var(--oj-gold);
    font-size: 0.8125rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .oj-bundles-title {
    font-size: clamp(1.9rem, 3.6vw, 2.85rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.025em;
    color: var(--oj-navy);
  }

  .oj-bundles-underline {
    width: 60px;
    height: 3px;
    background-color: var(--oj-gold);
    border-radius: 2px;
  }

  .oj-bundle-card {
    position: relative;
    background-color: #ffffff;
    border: 1.5px solid rgba(216, 207, 192, 0.85);
    border-radius: 1.15rem;
    box-shadow: 0 12px 32px rgba(20, 34, 56, 0.05);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .oj-bundle-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 44px rgba(20, 34, 56, 0.1);
    border-color: rgba(169, 129, 52, 0.65);
  }

  .oj-bundle-card--featured {
    border: 2px solid var(--oj-gold);
    box-shadow: 0 18px 42px rgba(169, 129, 52, 0.16);
  }

  .oj-bundle-header-strip {
    position: relative;
    min-height: 112px;
    background: linear-gradient(135deg, rgba(169, 129, 52, 0.12) 0%, rgba(250, 249, 246, 0.96) 62%);
    padding: 1.15rem 1.35rem 1.85rem;
    overflow: hidden;
  }

  .oj-bundle-card--featured .oj-bundle-header-strip {
    background: linear-gradient(135deg, rgba(20, 34, 56, 0.94) 0%, rgba(34, 54, 86, 0.88) 65%, rgba(169, 129, 52, 0.35) 100%);
    color: #ffffff;
  }

  .oj-bundle-header-art {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 44%;
    opacity: 0.22;
    pointer-events: none;
  }

  .oj-bundle-card--featured .oj-bundle-header-art {
    opacity: 0.32;
  }

  .oj-bundle-wave-cut {
    position: absolute;
    left: -1px;
    right: -1px;
    bottom: -1px;
    width: calc(100% + 2px);
    height: 28px;
    pointer-events: none;
    z-index: 2;
  }

  .oj-bundle-icon-badge {
    width: 44px;
    height: 44px;
    border-radius: 0.7rem;
    background-color: #ffffff;
    border: 1.5px solid rgba(169, 129, 52, 0.45);
    color: var(--oj-gold-hover);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 16px rgba(20, 34, 56, 0.08);
    flex-shrink: 0;
  }

  .oj-bundle-sublabel {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--oj-gold-hover);
  }

  .oj-bundle-card--featured .oj-bundle-sublabel {
    color: #e4c27c;
  }

  .oj-bundle-name {
    font-size: 1.45rem;
    font-weight: 800;
    line-height: 1.15;
    color: var(--oj-navy);
  }

  .oj-bundle-card--featured .oj-bundle-name {
    color: #ffffff;
  }

  .oj-bundle-vdivider {
    width: 1.5px;
    height: 38px;
    background-color: rgba(169, 129, 52, 0.35);
    flex-shrink: 0;
  }

  .oj-bundle-card--featured .oj-bundle-vdivider {
    background-color: rgba(255, 255, 255, 0.25);
  }

  .oj-recommended-pill {
    background-color: var(--oj-gold);
    color: #ffffff;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    padding: 0.28rem 0.7rem;
    border-radius: 999px;
    box-shadow: 0 4px 12px rgba(169, 129, 52, 0.35);
    white-space: nowrap;
  }

  .oj-bundle-body {
    position: relative;
    z-index: 3;
    background-color: #ffffff;
    padding: 0.5rem 1.45rem 1.5rem;
  }

  .oj-bundle-desc {
    color: var(--oj-text);
    font-size: 0.9375rem;
    line-height: 1.58;
    min-height: 3rem;
  }

  .oj-bundle-rule {
    border: 0;
    border-top: 1px solid rgba(216, 207, 192, 0.75);
    margin: 0.85rem 0 1rem;
  }

  .oj-bundle-features {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .oj-bundle-features li {
    display: flex;
    align-items: flex-start;
    gap: 0.65rem;
    color: var(--oj-navy);
    font-size: 0.9rem;
    font-weight: 500;
    line-height: 1.45;
    padding: 0.42rem 0;
  }

  .oj-bundle-check {
    width: 19px;
    height: 19px;
    border-radius: 50%;
    background-color: rgba(169, 129, 52, 0.16);
    color: var(--oj-gold-hover);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 800;
    margin-top: 1px;
    flex-shrink: 0;
  }

  .oj-bundle-btn-outline {
    width: 100%;
    background-color: #ffffff;
    border: 1.5px solid var(--oj-border);
    color: var(--oj-navy);
    font-size: 0.95rem;
    font-weight: 700;
    padding: 0.78rem 1.15rem;
    border-radius: 0.65rem;
    transition: all 0.2s ease;
  }

  .oj-bundle-btn-outline:hover {
    border-color: var(--oj-gold);
    background-color: rgba(169, 129, 52, 0.06);
    color: var(--oj-navy);
    transform: translateY(-1px);
  }

  .oj-bundle-btn-gold {
    width: 100%;
    background: linear-gradient(135deg, #b58b3a 0%, var(--oj-gold) 100%);
    border: 1.5px solid var(--oj-gold);
    color: #ffffff;
    font-size: 0.95rem;
    font-weight: 700;
    padding: 0.78rem 1.15rem;
    border-radius: 0.65rem;
    box-shadow: 0 8px 20px rgba(169, 129, 52, 0.28);
    transition: all 0.2s ease;
  }

  .oj-bundle-btn-gold:hover {
    background: linear-gradient(135deg, #9d762c 0%, var(--oj-gold-hover) 100%);
    border-color: var(--oj-gold-hover);
    color: #ffffff;
    transform: translateY(-1px);
  }
</style>

<section id="service-bundles" class="oj-bundles-section py-5">
  <!-- Top-Left & Bottom-Right Graphical Ribbon Accents -->
  <svg class="oj-bundles-ribbon-tl" viewBox="0 0 440 270" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M-35 225C45 190 98 112 162 24C178 2 189 -14 198 -26" stroke="#a98134" stroke-opacity="0.28" stroke-width="1.5"/>
    <path d="M-22 250C64 212 122 130 192 32C210 7 222 -11 232 -26" stroke="#a98134" stroke-opacity="0.44" stroke-width="1.6"/>
    <path d="M-10 272C82 232 146 146 220 40C240 12 254 -9 266 -26" stroke="#a98134" stroke-opacity="0.22" stroke-width="1.2"/>
  </svg>

  <svg class="oj-bundles-ribbon-br" viewBox="0 0 500 290" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M185 305C265 252 352 222 528 190" stroke="#a98134" stroke-opacity="0.24" stroke-width="1.4"/>
    <path d="M222 315C305 260 390 232 532 210" stroke="#a98134" stroke-opacity="0.44" stroke-width="1.6"/>
    <path d="M258 325C342 270 425 245 536 230" stroke="#a98134" stroke-opacity="0.54" stroke-width="1.5"/>
  </svg>

  <div class="container position-relative py-lg-4" style="z-index: 1;">
    <!-- Section Heading -->
    <div class="row justify-content-center text-center mb-4 mb-lg-5" data-aos="fade-up" data-aos-duration="700">
      <div class="col-12 col-lg-9">
        <div class="d-inline-flex align-items-center justify-content-center gap-2 mb-2">
          <span class="oj-kicker-line" aria-hidden="true"></span>
          <span class="oj-bundles-kicker">Service Bundles</span>
          <span class="oj-kicker-line" aria-hidden="true"></span>
        </div>

        <h2 class="oj-bundles-title mb-3">A package built around your goals</h2>

        <div class="oj-bundles-underline mx-auto" aria-hidden="true"></div>
      </div>
    </div>

    <!-- 3-Column Service Bundles -->
    <div class="row g-4 align-items-stretch">
      <!-- Essential Bundle -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="60" data-aos-duration="650">
        <article class="oj-bundle-card h-100 d-flex flex-column">
          <div class="oj-bundle-header-strip">
            <svg class="oj-bundle-header-art" viewBox="0 0 180 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <circle cx="145" cy="34" r="46" stroke="#a98134" stroke-width="1.5"/>
              <circle cx="145" cy="34" r="28" stroke="#a98134" stroke-width="1.2" stroke-dasharray="4 4"/>
              <path d="M60 115C95 85 130 72 185 68" stroke="#a98134" stroke-width="1.6"/>
            </svg>

            <div class="d-flex align-items-center gap-3 position-relative" style="z-index: 1;">
              <span class="oj-bundle-icon-badge" aria-hidden="true">
                <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/>
                  <rect x="9" y="3" width="6" height="4" rx="1"/>
                  <path d="M9 12h6M9 16h4"/>
                </svg>
              </span>
              <span class="oj-bundle-vdivider" aria-hidden="true"></span>
              <div>
                <div class="oj-bundle-sublabel">The Essentials</div>
                <h3 class="oj-bundle-name mb-0">Essential</h3>
              </div>
            </div>

            <svg class="oj-bundle-wave-cut" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2"/>
            </svg>
          </div>

          <div class="oj-bundle-body d-flex flex-column flex-grow-1">
            <p class="oj-bundle-desc mb-0">
              Streamlined starting point for simple holding or trading entities.
            </p>

            <hr class="oj-bundle-rule">

            <ul class="oj-bundle-features mb-4 flex-grow-1">
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Company Name Search &amp; Clearance</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Registry Application Filing</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>1st Year Registered Agent</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Digital Corporate Certificate Delivery</span></li>
            </ul>

            <button type="button" class="btn oj-bundle-btn-outline">
              Choose Essential
            </button>
          </div>
        </article>
      </div>

      <!-- Business Bundle (Recommended) -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="140" data-aos-duration="650">
        <article class="oj-bundle-card oj-bundle-card--featured h-100 d-flex flex-column">
          <div class="oj-bundle-header-strip">
            <svg class="oj-bundle-header-art" viewBox="0 0 180 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <circle cx="145" cy="34" r="46" stroke="#e4c27c" stroke-width="1.5"/>
              <circle cx="145" cy="34" r="28" stroke="#e4c27c" stroke-width="1.2" stroke-dasharray="4 4"/>
              <path d="M60 115C95 85 130 72 185 68" stroke="#e4c27c" stroke-width="1.6"/>
            </svg>

            <div class="d-flex align-items-start justify-content-between gap-2 position-relative" style="z-index: 1;">
              <div class="d-flex align-items-center gap-3">
                <span class="oj-bundle-icon-badge" aria-hidden="true">
                  <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 10h18"/>
                    <path d="M5 10v8M10 10v8M14 10v8M19 10v8"/>
                    <path d="M2 20h20"/>
                    <path d="M12 3l10 5H2l10-5z"/>
                  </svg>
                </span>
                <span class="oj-bundle-vdivider" aria-hidden="true"></span>
                <div>
                  <div class="oj-bundle-sublabel">Enhanced Guidance</div>
                  <h3 class="oj-bundle-name mb-0">Business</h3>
                </div>
              </div>
              <span class="oj-recommended-pill">Recommended</span>
            </div>

            <svg class="oj-bundle-wave-cut" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2.4"/>
            </svg>
          </div>

          <div class="oj-bundle-body d-flex flex-column flex-grow-1">
            <p class="oj-bundle-desc mb-0">
              Formation support equipped with corporate bank account assistance.
            </p>

            <hr class="oj-bundle-rule">

            <ul class="oj-bundle-features mb-4 flex-grow-1">
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Everything in Essential Package</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Corporate Banking Pre-Screening</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Compliance Setup Consultation</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Dedicated Account Coordinator</span></li>
            </ul>

            <button type="button" class="btn oj-bundle-btn-gold">
              Choose Business (+ $650)
            </button>
          </div>
        </article>
      </div>

      <!-- Complete Bundle -->
      <div class="col-12 col-md-6 col-lg-4 mx-auto mx-lg-0" data-aos="fade-up" data-aos-delay="220" data-aos-duration="650">
        <article class="oj-bundle-card h-100 d-flex flex-column">
          <div class="oj-bundle-header-strip">
            <svg class="oj-bundle-header-art" viewBox="0 0 180 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <circle cx="145" cy="34" r="46" stroke="#a98134" stroke-width="1.5"/>
              <circle cx="145" cy="34" r="28" stroke="#a98134" stroke-width="1.2" stroke-dasharray="4 4"/>
              <path d="M60 115C95 85 130 72 185 68" stroke="#a98134" stroke-width="1.6"/>
            </svg>

            <div class="d-flex align-items-center gap-3 position-relative" style="z-index: 1;">
              <span class="oj-bundle-icon-badge" aria-hidden="true">
                <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                  <polyline points="2 12 12 17 22 12"/>
                  <polyline points="2 17 12 22 22 17"/>
                </svg>
              </span>
              <span class="oj-bundle-vdivider" aria-hidden="true"></span>
              <div>
                <div class="oj-bundle-sublabel">Complete Suite</div>
                <h3 class="oj-bundle-name mb-0">Complete</h3>
              </div>
            </div>

            <svg class="oj-bundle-wave-cut" viewBox="0 0 400 32" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 18 Q 200 2 400 20 L 400 32 L 0 32 Z" fill="#ffffff"/>
              <path d="M0 18 Q 200 2 400 20" fill="none" stroke="#a98134" stroke-width="2"/>
            </svg>
          </div>

          <div class="oj-bundle-body d-flex flex-column flex-grow-1">
            <p class="oj-bundle-desc mb-0">
              Comprehensive suite for active global entities requiring legalization.
            </p>

            <hr class="oj-bundle-rule">

            <ul class="oj-bundle-features mb-4 flex-grow-1">
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Everything in Business Package</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Accounting &amp; Bookkeeping Onboarding</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Apostille Legalization Services</span></li>
              <li><span class="oj-bundle-check" aria-hidden="true">&#10003;</span><span>Annual Compliance Reminders</span></li>
            </ul>

            <button type="button" class="btn oj-bundle-btn-outline">
              Choose Complete (+ $1,250)
            </button>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>


<style>
  .oj-configurator-section {
    position: relative;
    background-color: var(--oj-bg);
    background-image:
      linear-gradient(180deg, rgba(250, 249, 246, 0.72) 0%, rgba(250, 249, 246, 0.88) 100%),
      url("<?= $img; ?>/Configure-Your-Company.png");
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    color: var(--oj-navy);
    overflow: hidden;
  }

  /* Subtle Paisley decorative motifs in corners matching the warm gold & navy palette */
  .oj-paisley-tl {
    position: absolute;
    top: -18px;
    left: -18px;
    width: clamp(150px, 20vw, 270px);
    height: auto;
    opacity: 0.24;
    pointer-events: none;
    z-index: 0;
  }

  .oj-paisley-br {
    position: absolute;
    bottom: -24px;
    right: -18px;
    width: clamp(160px, 22vw, 290px);
    height: auto;
    opacity: 0.22;
    pointer-events: none;
    z-index: 0;
  }

  .oj-config-panel,
  .oj-summary-panel {
    position: relative;
    background-color: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(8px);
    border: 1.5px solid rgba(169, 129, 52, 0.36);
    border-radius: 1.15rem;
    box-shadow: 0 18px 42px rgba(20, 34, 56, 0.08);
    overflow: hidden;
  }

  /* Decorative paisley accent strip along top of cards */
  .oj-paisley-topbar {
    height: 10px;
    width: 100%;
    background-color: rgba(169, 129, 52, 0.14);
    border-bottom: 1px solid rgba(169, 129, 52, 0.28);
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='10' viewBox='0 0 48 10'%3E%3Cpath d='M12 8C7 8 5 5 8 2.5C10.5 0.5 15 1.5 16 4.5C16.8 6.8 14.5 8 12 8Z' fill='none' stroke='%23a98134' stroke-opacity='0.55' stroke-width='1'/%3E%3Ccircle cx='24' cy='5' r='1.3' fill='%23a98134' fill-opacity='0.45'/%3E%3Cpath d='M36 8C31 8 29 5 32 2.5C34.5 0.5 39 1.5 40 4.5C40.8 6.8 38.5 8 36 8Z' fill='none' stroke='%23a98134' stroke-opacity='0.55' stroke-width='1'/%3E%3C/svg%3E");
    background-repeat: repeat-x;
  }

  .oj-step-tabs {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 1.25rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid rgba(216, 207, 192, 0.75);
  }

  .oj-step-tab-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: transparent;
    border: 0;
    padding: 0.25rem 0;
    font-size: 0.92rem;
    font-weight: 700;
    color: var(--oj-text);
    cursor: pointer;
    transition: color 0.2s ease;
  }

  .oj-step-tab-btn.is-active {
    color: var(--oj-navy);
  }

  .oj-step-num {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background-color: #ece6da;
    color: var(--oj-text);
    font-size: 0.78rem;
    font-weight: 800;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.2s ease, color 0.2s ease;
  }

  .oj-step-tab-btn.is-active .oj-step-num {
    background-color: var(--oj-gold);
    color: #ffffff;
    box-shadow: 0 4px 10px rgba(169, 129, 52, 0.3);
  }

  .oj-config-heading {
    font-size: clamp(1.55rem, 2.5vw, 2.05rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    color: var(--oj-navy);
  }

  .oj-config-sub {
    color: var(--oj-text);
    font-size: 0.94rem;
  }

  .oj-field-label {
    display: block;
    font-size: 0.88rem;
    font-weight: 700;
    color: var(--oj-navy);
    margin-bottom: 0.45rem;
  }

  .oj-jurisdiction-select {
    background-color: #ffffff;
    border: 1.5px solid var(--oj-border);
    border-radius: 0.6rem;
    padding: 0.68rem 0.95rem;
    font-size: 0.96rem;
    font-weight: 600;
    color: var(--oj-navy);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
  }

  .oj-jurisdiction-select:focus {
    border-color: var(--oj-gold);
    box-shadow: 0 0 0 0.2rem rgba(169, 129, 52, 0.16);
    outline: none;
  }

  .oj-tier-option-card {
    position: relative;
    background-color: #ffffff;
    border: 1.5px solid rgba(216, 207, 192, 0.9);
    border-radius: 0.75rem;
    padding: 0.85rem 0.65rem;
    text-align: center;
    cursor: pointer;
    height: 100%;
    transition: all 0.2s ease;
  }

  .oj-tier-option-card:hover {
    border-color: rgba(169, 129, 52, 0.65);
    background-color: rgba(250, 249, 246, 0.9);
  }

  .oj-tier-option-card.is-selected {
    background-color: rgba(169, 129, 52, 0.12);
    border-color: var(--oj-gold);
    box-shadow: 0 6px 16px rgba(169, 129, 52, 0.16);
  }

  .oj-radio-dot {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    border: 2px solid #b5aba0;
    margin: 0 auto 0.45rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: border-color 0.2s ease;
  }

  .oj-tier-option-card.is-selected .oj-radio-dot {
    border-color: var(--oj-gold);
  }

  .oj-tier-option-card.is-selected .oj-radio-dot::after {
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: var(--oj-gold);
  }

  .oj-tier-option-title {
    font-size: 0.92rem;
    font-weight: 700;
    color: var(--oj-navy);
    line-height: 1.25;
  }

  .oj-tier-option-price {
    font-size: 0.84rem;
    font-weight: 600;
    color: var(--oj-text);
  }

  .oj-addon-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.75rem;
    padding: 0.75rem 0.25rem;
    border-bottom: 1px solid rgba(216, 207, 192, 0.55);
    cursor: pointer;
  }

  .oj-addon-row:last-child {
    border-bottom: 0;
  }

  .oj-addon-checkbox {
    width: 18px;
    height: 18px;
    accent-color: var(--oj-gold);
    cursor: pointer;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .oj-addon-title {
    font-size: 0.92rem;
    font-weight: 700;
    color: var(--oj-navy);
    line-height: 1.3;
  }

  .oj-addon-desc {
    font-size: 0.82rem;
    color: var(--oj-text);
    line-height: 1.35;
  }

  .oj-addon-price {
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--oj-navy);
    white-space: nowrap;
  }

  .oj-primary-action-btn {
    width: 100%;
    background: linear-gradient(135deg, #b58b3a 0%, var(--oj-gold) 100%);
    border: 1.5px solid var(--oj-gold);
    color: #ffffff;
    font-size: 0.96rem;
    font-weight: 700;
    padding: 0.82rem 1.25rem;
    border-radius: 0.65rem;
    box-shadow: 0 8px 20px rgba(169, 129, 52, 0.25);
    transition: all 0.2s ease;
  }

  .oj-primary-action-btn:hover {
    background: linear-gradient(135deg, #9d762c 0%, var(--oj-gold-hover) 100%);
    border-color: var(--oj-gold-hover);
    color: #ffffff;
    transform: translateY(-1px);
  }

  /* Summary Card Styling with Soft Coastal Scenery Backdrop */
  .oj-summary-kicker {
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--oj-gold-hover);
  }

  .oj-summary-jurisdiction {
    font-size: 1.65rem;
    font-weight: 800;
    color: var(--oj-navy);
    line-height: 1.2;
  }

  .oj-summary-sub {
    font-size: 0.86rem;
    color: var(--oj-text);
    font-weight: 500;
  }

  .oj-summary-line {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.62rem 0;
    border-bottom: 1px solid rgba(216, 207, 192, 0.65);
    font-size: 0.92rem;
  }

  .oj-summary-line-label {
    color: var(--oj-text);
    font-weight: 600;
  }

  .oj-summary-line-val {
    color: var(--oj-navy);
    font-weight: 700;
  }

  .oj-summary-total-row {
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    padding: 0.95rem 0 0.5rem;
  }

  .oj-summary-total-label {
    font-size: 1rem;
    font-weight: 800;
    color: var(--oj-navy);
  }

  .oj-summary-total-val {
    font-size: 1.85rem;
    font-weight: 800;
    color: var(--oj-navy);
    letter-spacing: -0.02em;
  }

  .oj-summary-scenic-footer {
    position: relative;
    border-radius: 0.75rem;
    overflow: hidden;
  }

  .oj-summary-scenic-footer img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    opacity: 0.75;
  }

  .oj-summary-scenic-fade {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.92) 0%, rgba(255, 255, 255, 0.22) 100%);
    pointer-events: none;
  }
</style>

<section id="company-configurator" class="oj-configurator-section py-5">
  <div class="container position-relative py-lg-4" style="z-index: 1;">
    <div class="row g-4 align-items-stretch">
      <!-- Left Column: Company Configuration Form -->
      <div class="col-12 col-lg-7" data-aos="fade-up" data-aos-duration="650">
        <div class="oj-config-panel h-100 d-flex flex-column">
          <div class="oj-paisley-topbar" aria-hidden="true"></div>

          <div class="p-4 p-md-5 d-flex flex-column flex-grow-1">
            <!-- Step Indicator -->
            <div class="oj-step-tabs mb-4" role="tablist" aria-label="Configuration steps">
              <button type="button" class="oj-step-tab-btn is-active" data-step="1">
                <span class="oj-step-num">1</span>
                <span>Package</span>
              </button>
              <button type="button" class="oj-step-tab-btn" data-step="2">
                <span class="oj-step-num">2</span>
                <span>Details</span>
              </button>
              <button type="button" class="oj-step-tab-btn" data-step="3">
                <span class="oj-step-num">3</span>
                <span>Review</span>
              </button>
            </div>

            <h2 class="oj-config-heading mb-1">Configure Your Company</h2>
            <p class="oj-config-sub mb-4">Choose your target location and service modules.</p>

            <!-- Jurisdiction Location Select -->
            <div class="mb-4">
              <label for="ojConfigJurisdiction" class="oj-field-label">Jurisdiction Location</label>
              <select id="ojConfigJurisdiction" class="form-select oj-jurisdiction-select">
                <option value="Seychelles" data-fee="1250" selected>Seychelles ($1,250)</option>
                <option value="British Virgin Islands" data-fee="2450">British Virgin Islands ($2,450)</option>
                <option value="UAE - RAK ICC" data-fee="2750">UAE - RAK ICC ($2,750)</option>
              </select>
            </div>

            <!-- Service Tier Selector -->
            <div class="mb-4">
              <span class="oj-field-label">Select Service Tier</span>
              <div class="row g-2 g-sm-3" id="ojTierGroup">
                <div class="col-4">
                  <div class="oj-tier-option-card is-selected" data-tier="Essential" data-price="250" tabindex="0" role="button" aria-pressed="true">
                    <div class="oj-radio-dot" aria-hidden="true"></div>
                    <div class="oj-tier-option-title">Essential</div>
                    <div class="oj-tier-option-price">$250</div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="oj-tier-option-card" data-tier="Business" data-price="500" tabindex="0" role="button" aria-pressed="false">
                    <div class="oj-radio-dot" aria-hidden="true"></div>
                    <div class="oj-tier-option-title">Business</div>
                    <div class="oj-tier-option-price">$500</div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="oj-tier-option-card" data-tier="Complete" data-price="1250" tabindex="0" role="button" aria-pressed="false">
                    <div class="oj-radio-dot" aria-hidden="true"></div>
                    <div class="oj-tier-option-title">Complete</div>
                    <div class="oj-tier-option-price">$1,250</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Optional Service Add-ons -->
            <div class="mb-4 flex-grow-1">
              <span class="oj-field-label">Optional Service Add-ons</span>

              <label class="oj-addon-row">
                <span class="d-flex align-items-start gap-3">
                  <input type="checkbox" class="oj-addon-checkbox oj-config-addon" value="350">
                  <span>
                    <span class="d-block oj-addon-title">Bank Account Application Support</span>
                    <span class="d-block oj-addon-desc">Guided application to corporate banks.</span>
                  </span>
                </span>
                <span class="oj-addon-price">+ $350</span>
              </label>

              <label class="oj-addon-row">
                <span class="d-flex align-items-start gap-3">
                  <input type="checkbox" class="oj-addon-checkbox oj-config-addon" value="250">
                  <span>
                    <span class="d-block oj-addon-title">Accounting &amp; Bookkeeping Setup</span>
                    <span class="d-block oj-addon-desc">Setup financial reporting systems.</span>
                  </span>
                </span>
                <span class="oj-addon-price">+ $250</span>
              </label>
            </div>

            <!-- Proceed CTA -->
            <button type="button" id="ojProceedDetailsBtn" class="btn oj-primary-action-btn">
              Proceed to Details &rarr;
            </button>
          </div>
        </div>
      </div>

      <!-- Right Column: Live Package Summary -->
      <div class="col-12 col-lg-5" data-aos="fade-up" data-aos-delay="120" data-aos-duration="650">
        <div class="oj-summary-panel h-100 d-flex flex-column">
          <div class="oj-paisley-topbar" aria-hidden="true"></div>

          <div class="p-4 p-md-5 d-flex flex-column flex-grow-1">
            <div class="oj-summary-kicker mb-1">Package Summary</div>
            <h3 id="ojSummaryJurisdiction" class="oj-summary-jurisdiction mb-1">Seychelles</h3>
            <p class="oj-summary-sub mb-4">1st Year Incorporation Fee</p>

            <div class="oj-summary-line">
              <span class="oj-summary-line-label">Base Jurisdiction Fee</span>
              <span id="ojSummaryBaseFee" class="oj-summary-line-val">$1,250</span>
            </div>

            <div class="oj-summary-line">
              <span class="oj-summary-line-label">Package Upgrades (<span id="ojSummaryTierName">Essential</span>)</span>
              <span id="ojSummaryUpgradeFee" class="oj-summary-line-val">$250</span>
            </div>

            <div class="oj-summary-line">
              <span class="oj-summary-line-label">Optional Add-ons</span>
              <span id="ojSummaryAddonFee" class="oj-summary-line-val">$0</span>
            </div>

            <div class="oj-summary-total-row">
              <span class="oj-summary-total-label">Total Investment</span>
              <span id="ojSummaryTotal" class="oj-summary-total-val">$1,500</span>
            </div>

            <p class="oj-summary-sub mb-3">
              USD &ndash; Includes government registry fees. Renewal fees billed annually.
            </p>

            <!-- Soft Scenery Accent -->
            <div class="oj-summary-scenic-footer mb-4 flex-grow-1">
              <img src="<?= $img; ?>/Package-Summary-Seychelles.png" alt="Warm sepia coastal palms and boulders illustration">
              <div class="oj-summary-scenic-fade" aria-hidden="true"></div>
            </div>

            <button type="button" id="ojConfirmBuildBtn" class="btn oj-primary-action-btn">
              Confirm &amp; Build Package
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  (function () {
    const jurisdictionSelect = document.getElementById("ojConfigJurisdiction");
    const tierCards = document.querySelectorAll(".oj-tier-option-card");
    const addonCheckboxes = document.querySelectorAll(".oj-config-addon");
    const stepBtns = document.querySelectorAll(".oj-step-tab-btn");

    const summaryJurisdiction = document.getElementById("ojSummaryJurisdiction");
    const summaryBaseFee = document.getElementById("ojSummaryBaseFee");
    const summaryTierName = document.getElementById("ojSummaryTierName");
    const summaryUpgradeFee = document.getElementById("ojSummaryUpgradeFee");
    const summaryAddonFee = document.getElementById("ojSummaryAddonFee");
    const summaryTotal = document.getElementById("ojSummaryTotal");

    let selectedTierName = "Essential";
    let selectedTierPrice = 250;

    function formatUsd(amount) {
      return "$" + Number(amount || 0).toLocaleString("en-US");
    }

    function recalculateSummary() {
      const selectedOption = jurisdictionSelect
        ? jurisdictionSelect.options[jurisdictionSelect.selectedIndex]
        : null;
      const jurisdictionName = selectedOption ? selectedOption.value : "Seychelles";
      const baseFee = selectedOption ? Number(selectedOption.getAttribute("data-fee") || 0) : 0;

      let addonsTotal = 0;
      addonCheckboxes.forEach((cb) => {
        if (cb.checked) {
          addonsTotal += Number(cb.value || 0);
        }
      });

      const total = baseFee + selectedTierPrice + addonsTotal;

      if (summaryJurisdiction) summaryJurisdiction.textContent = jurisdictionName;
      if (summaryBaseFee) summaryBaseFee.textContent = formatUsd(baseFee);
      if (summaryTierName) summaryTierName.textContent = selectedTierName;
      if (summaryUpgradeFee) summaryUpgradeFee.textContent = formatUsd(selectedTierPrice);
      if (summaryAddonFee) summaryAddonFee.textContent = formatUsd(addonsTotal);
      if (summaryTotal) summaryTotal.textContent = formatUsd(total);
    }

    if (jurisdictionSelect) {
      jurisdictionSelect.addEventListener("change", recalculateSummary);
    }

    tierCards.forEach((card) => {
      function selectCard() {
        tierCards.forEach((c) => {
          c.classList.remove("is-selected");
          c.setAttribute("aria-pressed", "false");
        });
        card.classList.add("is-selected");
        card.setAttribute("aria-pressed", "true");
        selectedTierName = card.getAttribute("data-tier") || "Essential";
        selectedTierPrice = Number(card.getAttribute("data-price") || 0);
        recalculateSummary();
      }

      card.addEventListener("click", selectCard);
      card.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          selectCard();
        }
      });
    });

    addonCheckboxes.forEach((cb) => {
      cb.addEventListener("change", recalculateSummary);
    });

    stepBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        stepBtns.forEach((b) => b.classList.remove("is-active"));
        btn.classList.add("is-active");
      });
    });

    recalculateSummary();
  })();
</script>

<style>
  .oj-cta-belt-section {
    position: relative;
    overflow: hidden;
  }

  .oj-cta-belt {
    position: relative;
    background: linear-gradient(105deg, #7b5314 0%, #9b6f22 34%, var(--oj-gold) 68%, #b98e3d 100%);
    border-radius: 1rem;
    padding: 1.35rem 1.75rem;
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .oj-cta-belt:hover {
    transform: translateY(-2px);
    box-shadow:
      0 18px 38px rgba(123, 83, 20, 0.28),
      inset 0 0 0 2px rgba(255, 255, 255, 0.65);
  }

  /* Subtle world map & ribbon accents inside the gold belt */
  .oj-cta-belt-map {
    position: absolute;
    right: 12%;
    top: 50%;
    transform: translateY(-50%);
    width: 280px;
    height: auto;
    opacity: 0.16;
    pointer-events: none;
    z-index: 0;
  }

  .oj-cta-belt-wave {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 46px;
    pointer-events: none;
    z-index: 0;
  }

  .oj-cta-belt-arc-tl {
    position: absolute;
    left: -18px;
    top: -18px;
    width: 120px;
    height: 120px;
    pointer-events: none;
    z-index: 0;
  }

  .oj-cta-icon-wrap {
    position: relative;
    z-index: 1;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.14);
    border: 1px solid rgba(255, 255, 255, 0.35);
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .oj-cta-divider-v {
    position: relative;
    z-index: 1;
    width: 1px;
    height: 44px;
    background-color: rgba(255, 255, 255, 0.32);
    flex-shrink: 0;
  }

  .oj-cta-title {
    color: #ffffff;
    font-size: clamp(1.25rem, 2.2vw, 1.75rem);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.015em;
  }

  .oj-cta-subtitle {
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.95rem;
    font-weight: 500;
    line-height: 1.45;
  }

  .oj-cta-advisor-btn {
    position: relative;
    z-index: 1;
    background-color: #faf7f0;
    color: #875e19;
    border: 1.5px solid rgba(255, 255, 255, 0.85);
    border-radius: 0.65rem;
    padding: 0.72rem 1.35rem;
    font-size: 0.95rem;
    font-weight: 700;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.45rem;
    white-space: nowrap;
    box-shadow: 0 6px 18px rgba(42, 26, 4, 0.22);
    transition: background-color 0.2s ease, color 0.2s ease, transform 0.18s ease, box-shadow 0.2s ease;
  }

  .oj-cta-advisor-btn:hover,
  .oj-cta-advisor-btn:focus {
    background-color: #ffffff;
    color: var(--oj-navy);
    transform: translateY(-1px);
    box-shadow: 0 10px 22px rgba(20, 34, 56, 0.25);
  }

  @media (max-width: 767.98px) {
    .oj-cta-belt {
      padding: 1.25rem;
    }

    .oj-cta-divider-v {
      display: none;
    }

    .oj-cta-belt-map {
      display: none;
    }

    .oj-cta-advisor-btn {
      width: 100%;
    }
  }
</style>

<section id="advisor-cta-belt" class="oj-cta-belt-section py-4 py-md-5">
  <div class="container position-relative" style="z-index: 1;">
    <div class="oj-cta-belt" data-aos="fade-up" data-aos-duration="650">
      <!-- Top-Left Decorative Highlight Arc -->
      <svg class="oj-cta-belt-arc-tl" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M-10 95C32 76 62 42 84 -10" stroke="#ffffff" stroke-opacity="0.32" stroke-width="2.2"/>
        <path d="M-2 108C44 86 76 48 100 -8" stroke="#f0d394" stroke-opacity="0.45" stroke-width="1.5"/>
      </svg>

      <!-- Subtle Dotted World Map Accent -->
      <svg class="oj-cta-belt-map" viewBox="0 0 280 120" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="42" cy="36" r="2" fill="#ffffff"/>
        <circle cx="52" cy="32" r="2" fill="#ffffff"/>
        <circle cx="62" cy="35" r="2" fill="#ffffff"/>
        <circle cx="72" cy="38" r="2" fill="#ffffff"/>
        <circle cx="54" cy="46" r="2" fill="#ffffff"/>
        <circle cx="66" cy="54" r="2" fill="#ffffff"/>
        <circle cx="78" cy="70" r="2" fill="#ffffff"/>
        <circle cx="84" cy="82" r="2" fill="#ffffff"/>
        <circle cx="126" cy="28" r="2" fill="#ffffff"/>
        <circle cx="136" cy="26" r="2" fill="#ffffff"/>
        <circle cx="146" cy="29" r="2" fill="#ffffff"/>
        <circle cx="132" cy="38" r="2" fill="#ffffff"/>
        <circle cx="142" cy="42" r="2" fill="#ffffff"/>
        <circle cx="138" cy="58" r="2" fill="#ffffff"/>
        <circle cx="148" cy="66" r="2" fill="#ffffff"/>
        <circle cx="176" cy="34" r="2" fill="#ffffff"/>
        <circle cx="188" cy="36" r="2" fill="#ffffff"/>
        <circle cx="200" cy="40" r="2" fill="#ffffff"/>
        <circle cx="212" cy="38" r="2" fill="#ffffff"/>
        <circle cx="186" cy="48" r="2" fill="#ffffff"/>
        <circle cx="204" cy="54" r="2" fill="#ffffff"/>
        <circle cx="222" cy="78" r="2" fill="#ffffff"/>
        <circle cx="232" cy="84" r="2" fill="#ffffff"/>
      </svg>

      <!-- Bottom Wave Curve -->
      <svg class="oj-cta-belt-wave" viewBox="0 0 1200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M0 36C340 12 780 10 1200 26V50H0V36Z" fill="rgba(255,255,255,0.08)"/>
        <path d="M0 34C360 10 800 8 1200 24" stroke="#f0d394" stroke-opacity="0.55" stroke-width="2" fill="none"/>
      </svg>

      <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 gap-md-4 position-relative" style="z-index: 1;">
        <div class="d-flex align-items-center gap-3 gap-md-4">
          <!-- Speech Bubble Icon -->
          <span class="oj-cta-icon-wrap" aria-hidden="true">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
              <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
              <path d="M8 12h.01M12 12h.01M16 12h.01"/>
            </svg>
          </span>

          <span class="oj-cta-divider-v" aria-hidden="true"></span>

          <div>
            <h2 class="oj-cta-title mb-1">Not sure which path to take?</h2>
            <p class="oj-cta-subtitle mb-0">
              Speak directly with our corporate advisors for custom guidance.
            </p>
          </div>
        </div>

        <a href="#contact-advisor" class="oj-cta-advisor-btn">
          <span>Speak to an Advisor</span>
          <span aria-hidden="true">&rsaquo;</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
