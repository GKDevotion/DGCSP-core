<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/crypto-currency-license';
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
      "@type": "FinancialService",
      "name": "Devotion Global Customer Service Provider",
      "url": "https://www.devotionglobal.com",
      "logo": "https://www.devotionglobal.com/assets/logo.png",
      "description": "Devotion Global provides turnkey Cryptocurrency Licensing, VASP/CASP registrations, Forex Broker Licensing, corporate banking setups, and compliance frameworks.",
      "areaServed": "Global",
      "serviceType": "Crypto & Forex Licensing Solutions",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Financial Licensing Catalog",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Cryptocurrency & VASP Licensing (Lithuania, Dubai VARA, Labuan, El Salvador)"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Forex Broker Licensing (VFSC, FSC, CySEC, FCA)"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Crypto Off-Ramp & Corporate Banking Accounts"
            }
          }
        ]
      }
    }
</script>

<style>
    :root {
    --primary-gold: #c6922c;
    --primary-gold-hover: #a8791e;
    --primary-gold-light: rgba(198, 146, 44, 0.12);
    --dark-navy: #0e1628;
    --text-muted: #525d73;
    --light-bg: #f8f9fb;
    --border-color: #e6e9ef;
    }

    /* Hero Section using the provided background banner */
    .crypto-hero-section {
    position: relative;
    background-image: url('<?= $img; ?>/Crypto-Forex-Licensing-Solutions.png');
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    min-height: 560px;
    display: flex;
    align-items: center;
    padding: 5rem 0;
    border-bottom: 1px solid var(--border-color);
    }

    .gold-accent-line {
    width: 48px;
    height: 4px;
    background-color: var(--primary-gold);
    border-radius: 2px;
    margin-bottom: 1.25rem;
    }

    .hero-title {
    font-size: 3rem;
    font-weight: 800;
    line-height: 1.15;
    color: var(--dark-navy);
    letter-spacing: -0.02em;
    }

    .hero-title span {
    color: var(--primary-gold);
    display: block;
    }

    .hero-subtitle {
    font-size: 1.05rem;
    line-height: 1.65;
    color: var(--text-muted);
    max-width: 520px;
    }

    .btn-gold {
    background-color: var(--primary-gold);
    color: #ffffff;
    font-weight: 600;
    padding: 0.85rem 2rem;
    border-radius: 50px;
    border: none;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(198, 146, 44, 0.25);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    }

    .btn-gold:hover {
    background-color: var(--primary-gold-hover);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 12px 24px rgba(198, 146, 44, 0.35);
    }

    /* Hero Mini Feature Badges */
    .hero-feature-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    }

    .hero-feature-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 50%;
    background-color: var(--primary-gold-light);
    color: var(--primary-gold);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    }

    .hero-feature-text {
    font-size: 0.85rem;
    font-weight: 700;
    line-height: 1.25;
    color: var(--dark-navy);
    }

    /* Section Typography */
    .section-badge {
    display: inline-block;
    padding: 0.4rem 1rem;
    background-color: var(--primary-gold-light);
    color: var(--primary-gold);
    font-weight: 700;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    border-radius: 50px;
    margin-bottom: 0.75rem;
    }

    .section-heading {
    font-weight: 800;
    font-size: 2.15rem;
    color: var(--dark-navy);
    }

    /* Licensing Solution Cards */
    .solution-card {
    background: #ffffff;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    height: 100%;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    }

    .solution-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--primary-gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease;
    }

    .solution-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 36px rgba(14, 22, 40, 0.08);
    border-color: transparent;
    }

    .solution-card:hover::before {
    transform: scaleX(1);
    }

    .card-icon-box {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    background-color: var(--primary-gold-light);
    color: var(--primary-gold);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
    }

    /* Jurisdiction Cards */
    .jurisdiction-card {
    background: #ffffff;
    border: 1px solid var(--border-color);
    border-radius: 14px;
    padding: 1.5rem;
    transition: all 0.25s ease;
    height: 100%;
    }

    .jurisdiction-card:hover {
    border-color: var(--primary-gold);
    box-shadow: 0 10px 25px rgba(198, 146, 44, 0.1);
    }

    .jurisdiction-tag {
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--primary-gold);
    background: var(--primary-gold-light);
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    }

    /* Process Steps */
    .step-number {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--dark-navy);
    color: #ffffff;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.25rem;
    border: 4px solid var(--primary-gold-light);
    }

    /* CTA Banner */
    .cta-box {
    background: linear-gradient(135deg, #0e1628 0%, #1b2845 100%);
    border-radius: 20px;
    padding: 3.5rem 2.5rem;
    color: #ffffff;
    position: relative;
    overflow: hidden;
    }

    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
    .crypto-hero-section {
        background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url('Crypto-Forex-Licensing-Solutions.jpg');
        background-position: center;
        min-height: auto;
        padding: 4rem 0;
    }
    .hero-title {
        font-size: 2.35rem;
    }
    }
</style>

<!-- HERO SECTION -->
<section class="crypto-hero-section">
<div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
        <div class="gold-accent-line" data-aos="fade-right"></div>
        <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">
        Crypto &amp; Forex
        <span>Licensing Solutions</span>
        </h1>
        <p class="hero-subtitle mb-4" data-aos="fade-up" data-aos-delay="200">
        Comprehensive licensing and regulatory support for crypto exchanges, forex brokers, and financial institutions across global jurisdictions.
        </p>
        <div class="mb-5" data-aos="fade-up" data-aos-delay="300">
        <a href="#consultation" class="btn btn-gold">
            Get Licensing Support <i class="bi bi-arrow-right"></i>
        </a>
        </div>

        <!-- 4 Key Highlights matching banner -->
        <div class="row g-3 pt-2" data-aos="fade-up" data-aos-delay="400">
        <div class="col-6 col-sm-3">
            <div class="hero-feature-item">
            <div class="hero-feature-icon"><i class="bi bi-shield-check"></i></div>
            <div class="hero-feature-text">Regulatory<br>Guidance</div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="hero-feature-item">
            <div class="hero-feature-icon"><i class="bi bi-layers"></i></div>
            <div class="hero-feature-text">End-to-End<br>Setup</div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="hero-feature-item">
            <div class="hero-feature-icon"><i class="bi bi-globe2"></i></div>
            <div class="hero-feature-text">Global<br>Jurisdictions</div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="hero-feature-item">
            <div class="hero-feature-icon"><i class="bi bi-people"></i></div>
            <div class="hero-feature-text">Ongoing<br>Compliances</div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>

<style>
    /* =========================================================
    ANIMATED PARALLELOGRAM GRID & CRYPTO LICENSE SECTION
    ========================================================= */
    .license-diamond-wrapper {
    position: relative;
    padding: 2rem 1.5rem;
    }

    /* Soft cream geometric backdrop blob matching the graphic */
    .license-diamond-wrapper::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 72%;
    height: 92%;
    background: rgba(198, 146, 44, 0.08);
    border-radius: 36px;
    transform: translate(-50%, -50%) skewX(-16deg);
    z-index: 0;
    animation: pulseBackdrop 6s ease-in-out infinite;
    }

    @keyframes pulseBackdrop {
    0%, 100% { transform: translate(-50%, -50%) skewX(-16deg) scale(1); }
    50% { transform: translate(-50%, -50%) skewX(-16deg) scale(1.04); }
    }

    .parallelogram-card {
    position: relative;
    z-index: 1;
    border-radius: 20px;
    padding: 2.15rem 1.25rem;
    text-align: center;
    transform: skewX(-16deg);
    transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    overflow: visible;
    cursor: pointer;
    }

    /* Un-skew inner content */
    .parallelogram-card > * {
    transform: skewX(16deg);
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }

    /* Continuous subtle floating animations (staggered) */
    .float-slow-1 { animation: floatCard1 5s ease-in-out infinite; }
    .float-slow-2 { animation: floatCard2 5.5s ease-in-out infinite; }
    .float-slow-3 { animation: floatCard2 5.2s ease-in-out infinite; }
    .float-slow-4 { animation: floatCard1 5.8s ease-in-out infinite; }

    @keyframes floatCard1 {
    0%, 100% { transform: skewX(-16deg) translateY(0px); }
    50% { transform: skewX(-16deg) translateY(-7px); }
    }

    @keyframes floatCard2 {
    0%, 100% { transform: skewX(-16deg) translateY(0px); }
    50% { transform: skewX(-16deg) translateY(7px); }
    }

    /* Hover Lift & Glow */
    .parallelogram-card:hover {
    animation-play-state: paused;
    transform: skewX(-16deg) translateY(-10px) scale(1.03);
    }

    .parallelogram-navy {
    background: linear-gradient(145deg, #092147 0%, #051530 100%);
    color: #ffffff;
    border: 1.5px solid var(--primary-gold);
    box-shadow: 0 16px 34px rgba(9, 33, 71, 0.22);
    }

    .parallelogram-navy:hover {
    box-shadow: 0 22px 44px rgba(9, 33, 71, 0.34), 0 0 20px rgba(198, 146, 44, 0.28);
    }

    .parallelogram-white {
    background: #ffffff;
    color: #092147;
    border: 1.5px solid var(--primary-gold);
    box-shadow: 0 12px 28px rgba(14, 22, 40, 0.06);
    }

    .parallelogram-white:hover {
    box-shadow: 0 20px 40px rgba(198, 146, 44, 0.18);
    }

    /* Slanted Gold Side Bars (Top-Left & Bottom-Right) */
    .accent-bar-tl::before {
    content: "";
    position: absolute;
    left: -18px;
    top: 25%;
    width: 8px;
    height: 54%;
    background: linear-gradient(180deg, #d8a53d, #a8791e);
    border-radius: 3px;
    transition: transform 0.4s ease;
    }

    .accent-bar-br::after {
    content: "";
    position: absolute;
    right: -18px;
    bottom: 22%;
    width: 8px;
    height: 54%;
    background: linear-gradient(180deg, #d8a53d, #a8791e);
    border-radius: 3px;
    transition: transform 0.4s ease;
    }

    .parallelogram-card:hover.accent-bar-tl::before {
    transform: translateX(-4px) scaleY(1.08);
    }

    .parallelogram-card:hover.accent-bar-br::after {
    transform: translateX(4px) scaleY(1.08);
    }

    /* Icons & Micro-animations */
    .p-card-icon {
    font-size: 2.3rem;
    margin-bottom: 0.7rem;
    line-height: 1;
    color: var(--primary-gold);
    }

    .parallelogram-navy .p-card-icon.icon-white {
    color: #ffffff;
    }

    .parallelogram-card:hover .p-card-icon {
    transform: skewX(16deg) scale(1.14);
    }

    .p-card-title {
    font-weight: 700;
    font-size: 0.98rem;
    line-height: 1.3;
    margin-bottom: 0.75rem;
    }

    .p-card-dash {
    width: 28px;
    height: 3.5px;
    background-color: var(--primary-gold);
    border-radius: 4px;
    transition: width 0.35s ease;
    }

    .parallelogram-card:hover .p-card-dash {
    width: 48px;
    }

    .about-license-title {
    font-size: 2.45rem;
    font-weight: 800;
    line-height: 1.18;
    color: #092147;
    }

    .about-license-title span {
    color: var(--primary-gold);
    }

    @media (max-width: 575.98px) {
    .parallelogram-card,
    .float-slow-1, .float-slow-2, .float-slow-3, .float-slow-4 {
        transform: none;
        animation: none;
    }
    .parallelogram-card > *,
    .parallelogram-card:hover .p-card-icon {
        transform: none;
    }
    .parallelogram-card:hover {
        transform: translateY(-5px);
    }
    .accent-bar-tl::before,
    .accent-bar-br::after,
    .license-diamond-wrapper::before {
        display: none;
    }
    .about-license-title {
        font-size: 1.95rem;
    }
    }
</style>

<!-- WHAT IS A CRYPTO CURRENCY LICENSE SECTION -->
<section class="py-5 my-4 overflow-hidden">
    <div class="container">
      <div class="row align-items-center g-5">
        
        <!-- Left 2x2 Animated Parallelogram Grid -->
        <div class="col-lg-6">
          <div class="license-diamond-wrapper">
            <div class="row g-3 g-sm-4">
              
              <!-- Card 1: Top-Left Navy -->
              <div class="col-6" data-aos="fade-down-right" data-aos-duration="850" data-aos-delay="100">
                <div class="parallelogram-card parallelogram-navy accent-bar-tl float-slow-1" data-tilt>
                  <div class="p-card-icon"><i class="bi bi-hammer"></i></div>
                  <div class="p-card-title">
                    <span class="counter-num" data-target="50">0</span>+<br>
                    Global Legal<br>Options
                  </div>
                  <div class="p-card-dash"></div>
                </div>
              </div>

              <!-- Card 2: Top-Right White -->
              <div class="col-6" data-aos="fade-down-left" data-aos-duration="850" data-aos-delay="250">
                <div class="parallelogram-card parallelogram-white float-slow-2" data-tilt>
                  <div class="p-card-icon"><i class="bi bi-shield-shaded"></i></div>
                  <div class="p-card-title">
                    VASP &amp; CASP<br>
                    Regulatory<br>Expertise
                  </div>
                  <div class="p-card-dash"></div>
                </div>
              </div>

              <!-- Card 3: Bottom-Left White -->
              <div class="col-6" data-aos="fade-up-right" data-aos-duration="850" data-aos-delay="400">
                <div class="parallelogram-card parallelogram-white float-slow-3" data-tilt>
                  <div class="p-card-icon"><i class="bi bi-bank2"></i></div>
                  <div class="p-card-title">
                    Crypto<br>
                    Banking
                  </div>
                  <div class="p-card-dash"></div>
                </div>
              </div>

              <!-- Card 4: Bottom-Right Navy -->
              <div class="col-6" data-aos="fade-up-left" data-aos-duration="850" data-aos-delay="550">
                <div class="parallelogram-card parallelogram-navy accent-bar-br float-slow-4" data-tilt>
                  <div class="p-card-icon icon-white"><i class="bi bi-file-earmark-check"></i></div>
                  <div class="p-card-title">
                    AML/KYC<br>
                    Compliance
                  </div>
                  <div class="p-card-dash"></div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Right Text Content -->
        <div class="col-lg-6">
          <div class="gold-accent-line" data-aos="fade-right" data-aos-duration="700"></div>
          <h2 class="about-license-title mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
            What is a<br>
            <span>Crypto Currency License</span> by Devotion Global?
          </h2>
          <p class="text-muted lh-lg mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            A Cryptocurrency License (or Virtual Asset Service Provider – VASP registration) is a regulatory authorization that permits companies to legally offer crypto exchange services, digital wallet custody, payment processing, and token launch solutions[cite: 5]. Devotion Global manages end-to-end licensing in leading crypto jurisdictions—including Dubai (VARA), Lithuania, El Salvador, Labuan, and offshore regions—providing corporate setup, AML compliance policies, and banking integrations[cite: 5].
          </p>
          <div data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="450">
            <a href="#consultation" class="btn btn-gold">
              Get Expert Guidance <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
</section>

  <!-- Custom Micro-Interaction & Counter Script (Place before closing </body>) -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
      // Smooth Counter Animation for "50+" when scrolled into view
      const counters = document.querySelectorAll(".counter-num");
      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const target = +el.getAttribute("data-target");
            let current = 0;
            const step = Math.ceil(target / 35);
            const timer = setInterval(() => {
              current += step;
              if (current >= target) {
                el.textContent = target;
                clearInterval(timer);
              } else {
                el.textContent = current;
              }
            }, 30);
            obs.unobserve(el);
          }
        });
      }, { threshold: 0.5 });

      counters.forEach(c => observer.observe(c));
    });
</script>

<style>
    /* =========================================================
    OUR SERVICES — CRYPTOCURRENCY & VASP LICENSING SECTION
    ========================================================= */
    .services-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 0.85rem;
    font-weight: 700;
    font-size: 0.95rem;
    color: #092147;
    margin-bottom: 0.5rem;
    }

    .services-eyebrow::before,
    .services-eyebrow::after {
    content: "";
    display: inline-block;
    width: 48px;
    height: 3px;
    background-color: var(--primary-gold);
    border-radius: 2px;
    }

    .services-main-title {
    font-size: 2.35rem;
    font-weight: 800;
    color: #092147;
    line-height: 1.2;
    }

    .services-main-title span {
    color: var(--primary-gold);
    }

    .vasp-service-card {
    background: #ffffff;
    border: 1.5px solid rgba(198, 146, 44, 0.45);
    border-radius: 18px;
    padding: 0.95rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
    }

    .vasp-service-card:hover {
    transform: translateY(-8px);
    border-color: var(--primary-gold);
    box-shadow: 0 18px 36px rgba(9, 33, 71, 0.1);
    }

    .vasp-card-img-wrap {
    width: 100%;
    height: 175px;
    border-radius: 12px;
    overflow: hidden;
    margin-bottom: 1.15rem;
    }

    .vasp-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    }

    .vasp-service-card:hover .vasp-card-img-wrap img {
    transform: scale(1.07);
    }

    .vasp-card-body {
    padding: 0 0.25rem 0.25rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    }

    .vasp-card-title {
    font-size: 1.08rem;
    font-weight: 800;
    color: #092147;
    margin-bottom: 0.6rem;
    }

    .vasp-card-text {
    font-size: 0.84rem;
    line-height: 1.55;
    color: var(--text-muted);
    margin-bottom: 1.25rem;
    flex-grow: 1;
    }

    .vasp-learn-link {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    font-size: 0.88rem;
    font-weight: 700;
    color: var(--primary-gold);
    text-decoration: none;
    padding-bottom: 0.35rem;
    border-bottom: 1.5px solid var(--primary-gold);
    width: fit-content;
    transition: color 0.25s ease, gap 0.25s ease;
    }

    .vasp-learn-link:hover {
    color: #092147;
    border-bottom-color: #092147;
    gap: 0.7rem;
    }

    @media (max-width: 575.98px) {
    .services-main-title {
        font-size: 1.85rem;
    }
    .services-eyebrow::before,
    .services-eyebrow::after {
        width: 30px;
    }
    }
</style>

<!-- OUR SERVICES: CRYPTOCURRENCY & VASP LICENSING -->
<section class="py-5 my-4">
    <div class="container">
      <!-- Centered Section Header -->
      <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="750">
        <div class="services-eyebrow">Our Services</div>
        <h2 class="services-main-title mb-2">
          Cryptocurrency &amp; <span>VASP Licensing</span>
        </h2>
        <p class="text-muted mx-auto" style="max-width: 680px;">
          Comprehensive corporate structures designed for Web3, crypto exchanges, and digital asset firms[cite: 6].
        </p>
      </div>

      <!-- 4 Service Cards Grid -->
      <div class="row g-4">
        
        <!-- Card 1: VASP Exchange License -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="vasp-service-card">
            <div class="vasp-card-img-wrap">
              <img src="<?= $img ?>/VASP-Exchange-License.png" alt="VASP Exchange License" />
            </div>
            <div class="vasp-card-body">
              <h5 class="vasp-card-title">VASP Exchange License</h5>
              <p class="vasp-card-text">
                Operate centralized or decentralized crypto spot and derivatives exchanges with compliant order matching, AML monitoring, and fiat processing[cite: 6].
              </p>
              <a href="#consultation" class="vasp-learn-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2: Digital Wallet Custody -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="220">
          <div class="vasp-service-card">
            <div class="vasp-card-img-wrap">
              <img src="<?= $img ?>/Digital-Wallet-Custody.png" alt="Digital Wallet Custody" />
            </div>
            <div class="vasp-card-body">
              <h5 class="vasp-card-title">Digital Wallet Custody</h5>
              <p class="vasp-card-text">
                Secure regulatory permission to store, manage, and safeguard digital asset private keys on behalf of retail and institutional clients[cite: 6].
              </p>
              <a href="#consultation" class="vasp-learn-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3: Crypto Merchant & Off-Ramp -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="340">
          <div class="vasp-service-card">
            <div class="vasp-card-img-wrap">
              <img src="<?= $img ?>/Crypto-Merchant-Off-Ramp.png" alt="Crypto Merchant & Off-Ramp" />
            </div>
            <div class="vasp-card-body">
              <h5 class="vasp-card-title">Crypto Merchant &amp; Off-Ramp</h5>
              <p class="vasp-card-text">
                Obtain processing authorizations to convert digital currencies to fiat cash payments using multi-currency merchant processing integrations[cite: 6].
              </p>
              <a href="#consultation" class="vasp-learn-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 4: Token Issuance & ICO/STO Setup -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="460">
          <div class="vasp-service-card">
            <div class="vasp-card-img-wrap">
              <img src="<?= $img ?>/Token-Issuance-ICO-STO-Setup.png" alt="Token Issuance & ICO/STO Setup" />
            </div>
            <div class="vasp-card-body">
              <h5 class="vasp-card-title">Token Issuance &amp; ICO/STO Setup</h5>
              <p class="vasp-card-text">
                Launch compliant token offerings with legal opinions, whitepaper compliance reviews, and legal token issuer corporate structures[cite: 6].
              </p>
              <a href="#consultation" class="vasp-learn-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
</section>

<style>
    /* =========================================================
    LICENSING PROCESS SECTION (4-STEP ANIMATED CARDS)
    ========================================================= */
    .process-heading-wrap {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 0.75rem;
    }

    .process-heading-wrap::before,
    .process-heading-wrap::after {
    content: "";
    display: inline-block;
    width: 64px;
    height: 3.5px;
    background-color: var(--primary-gold);
    border-radius: 3px;
    }

    .process-main-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: #092147;
    margin: 0;
    line-height: 1.15;
    }

    .process-main-title span {
    color: var(--primary-gold);
    }

    .process-step-card {
    position: relative;
    background: #ffffff;
    border: 1.5px solid rgba(198, 146, 44, 0.55);
    border-radius: 20px;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    box-shadow: 0 10px 26px rgba(9, 33, 71, 0.05);
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
    }

    .process-step-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary-gold);
    box-shadow: 0 22px 42px rgba(9, 33, 71, 0.12);
    }

    /* Gold Number Ribbon Badge (01, 02, 03, 04) */
    .step-ribbon-badge {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    background: linear-gradient(135deg, #d8a53d 0%, #b88422 100%);
    color: #ffffff;
    font-weight: 800;
    font-size: 1.15rem;
    padding: 0.45rem 1.05rem;
    border-bottom-right-radius: 16px;
    box-shadow: 0 6px 14px rgba(184, 132, 34, 0.35);
    transition: transform 0.35s ease, padding 0.35s ease;
    }

    .process-step-card:hover .step-ribbon-badge {
    padding-right: 1.3rem;
    }

    .process-img-box {
    width: 100%;
    height: 185px;
    overflow: hidden;
    position: relative;
    }

    .process-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.55s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .process-step-card:hover .process-img-box img {
    transform: scale(1.08);
    }

    .process-card-content {
    padding: 1.4rem 1.25rem 1.65rem;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-grow: 1;
    }

    .process-gold-bar {
    width: 52px;
    height: 3.5px;
    background-color: var(--primary-gold);
    border-radius: 3px;
    margin-bottom: 0.85rem;
    transition: width 0.35s ease;
    }

    .process-step-card:hover .process-gold-bar {
    width: 84px;
    }

    .process-step-title {
    font-size: 1.12rem;
    font-weight: 800;
    color: #092147;
    margin-bottom: 0.65rem;
    }

    .process-step-desc {
    font-size: 0.86rem;
    line-height: 1.55;
    color: var(--text-muted);
    margin-bottom: 0;
    }

    @media (max-width: 575.98px) {
    .process-main-title {
        font-size: 1.9rem;
    }
    .process-heading-wrap::before,
    .process-heading-wrap::after {
        width: 32px;
    }
    }
</style>

<!-- LICENSING PROCESS SECTION -->
<section class="py-5 my-4">
    <div class="container">
      
      <!-- Section Heading -->
      <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="750">
        <div class="process-heading-wrap">
          <h2 class="process-main-title">
            Licensing <span>Process</span>
          </h2>
        </div>
        <p class="text-muted mx-auto" style="max-width: 680px;">
          A streamlined, end-to-end process to get your crypto business licensed and operational[cite: 11].
        </p>
      </div>

      <!-- 4-Step Animated Cards -->
      <div class="row g-4">
        
        <!-- Step 01 -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="process-step-card">
            <span class="step-ribbon-badge">01</span>
            <div class="process-img-box">
              <img src="<?= $img; ?>/Jurisdiction-Strategy.png" alt="Jurisdiction Strategy" />
            </div>
            <div class="process-card-content">
              <div class="process-gold-bar"></div>
              <h5 class="process-step-title">Jurisdiction Strategy</h5>
              <p class="process-step-desc">
                Identify the right licensing jurisdiction based on your business model and goals[cite: 11].
              </p>
            </div>
          </div>
        </div>

        <!-- Step 02 -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="220">
          <div class="process-step-card">
            <span class="step-ribbon-badge">02</span>
            <div class="process-img-box">
              <img src="<?= $img; ?>/Entity-Formation.png" alt="Entity Formation" />
            </div>
            <div class="process-card-content">
              <div class="process-gold-bar"></div>
              <h5 class="process-step-title">Entity Formation</h5>
              <p class="process-step-desc">
                Set up a compliant legal entity with the required corporate structure[cite: 11].
              </p>
            </div>
          </div>
        </div>

        <!-- Step 03 -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="340">
          <div class="process-step-card">
            <span class="step-ribbon-badge">03</span>
            <div class="process-img-box">
              <img src="<?= $img; ?>/Filing-Compliance.png" alt="Filing & Compliance" />
            </div>
            <div class="process-card-content">
              <div class="process-gold-bar"></div>
              <h5 class="process-step-title">Filing &amp; Compliance</h5>
              <p class="process-step-desc">
                Prepare and submit the license application, including AML, KYC, and policy frameworks[cite: 11].
              </p>
            </div>
          </div>
        </div>

        <!-- Step 04 -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="460">
          <div class="process-step-card">
            <span class="step-ribbon-badge">04</span>
            <div class="process-img-box">
              <img src="<?= $img; ?>/Banking-Launch.png" alt="Banking & Launch" />
            </div>
            <div class="process-card-content">
              <div class="process-gold-bar"></div>
              <h5 class="process-step-title">Banking &amp; Launch</h5>
              <p class="process-step-desc">
                Open corporate bank accounts, complete final approvals, and launch your operations[cite: 11].
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
</section>

<style>
    /* =========================================================
    FOREX BROKER LICENSING SOLUTIONS (INTERACTIVE SPOTLIGHT SHOWCASE)
    ========================================================= */
    .forex-showcase-section {
    background: linear-gradient(180deg, #f8f9fb 0%, #ffffff 100%);
    position: relative;
    }

    .fx-spotlight-card {
    position: relative;
    border-radius: 22px;
    overflow: hidden;
    height: 410px;
    border: 1.5px solid rgba(198, 146, 44, 0.45);
    box-shadow: 0 14px 32px rgba(9, 33, 71, 0.08);
    transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
    cursor: pointer;
    }

    .fx-spotlight-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary-gold);
    box-shadow: 0 24px 48px rgba(9, 33, 71, 0.18);
    }

    .fx-bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .fx-spotlight-card:hover .fx-bg-img {
    transform: scale(1.1);
    }

    /* Top Floating Glass Pill */
    .fx-top-pill {
    position: absolute;
    top: 1.15rem;
    left: 1.15rem;
    z-index: 2;
    background: rgba(9, 33, 71, 0.82);
    backdrop-filter: blur(8px);
    color: #ffffff;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    padding: 0.4rem 0.9rem;
    border-radius: 50px;
    border: 1px solid rgba(198, 146, 44, 0.5);
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    }

    .fx-top-pill i {
    color: var(--primary-gold);
    }

    /* Sliding Glassmorphism Content Drawer */
    .fx-glass-panel {
    position: absolute;
    left: 1rem;
    right: 1rem;
    bottom: 1rem;
    z-index: 2;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    border-radius: 16px;
    padding: 1.35rem 1.35rem 1.25rem;
    border-top: 3px solid var(--primary-gold);
    box-shadow: 0 10px 25px rgba(9, 33, 71, 0.12);
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.35s ease;
    }

    .fx-spotlight-card:hover .fx-glass-panel {
    background: #092147;
    transform: translateY(-4px);
    }

    .fx-panel-accent {
    width: 38px;
    height: 3.5px;
    background-color: var(--primary-gold);
    border-radius: 3px;
    margin-bottom: 0.65rem;
    transition: width 0.35s ease;
    }

    .fx-spotlight-card:hover .fx-panel-accent {
    width: 68px;
    }

    .fx-panel-title {
    font-size: 1.18rem;
    font-weight: 800;
    color: #092147;
    margin-bottom: 0.5rem;
    transition: color 0.35s ease;
    }

    .fx-spotlight-card:hover .fx-panel-title {
    color: #ffffff;
    }

    .fx-panel-desc {
    font-size: 0.85rem;
    line-height: 1.55;
    color: var(--text-muted);
    margin-bottom: 0.85rem;
    transition: color 0.35s ease;
    }

    .fx-spotlight-card:hover .fx-panel-desc {
    color: rgba(255, 255, 255, 0.82);
    }

    .fx-panel-cta {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.84rem;
    font-weight: 700;
    color: var(--primary-gold);
    text-decoration: none;
    transition: gap 0.3s ease;
    }

    .fx-spotlight-card:hover .fx-panel-cta {
    gap: 0.75rem;
    }

    @media (max-width: 575.98px) {
    .fx-spotlight-card {
        height: 390px;
    }
    }
</style>

<!-- FOREX BROKER LICENSING SOLUTIONS SECTION -->
<section class="forex-showcase-section py-5 my-4">
    <div class="container">

      <!-- Section Heading -->
      <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="750">
        <div class="process-heading-wrap">
          <h2 class="process-main-title">
            Forex Broker <span>Licensing Solutions</span>
          </h2>
        </div>
        <p class="text-muted mx-auto" style="max-width: 680px;">
          Comprehensive licensing and setup services for Forex brokers across multiple jurisdictions.[cite: 16]
        </p>
      </div>

      <!-- 3-Column Interactive Glass-Drawer Showcase -->
      <div class="row g-4">

        <!-- Card 1: Offshore Forex Setup -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-delay="100">
          <div class="fx-spotlight-card">
            <span class="fx-top-pill"><i class="bi bi-compass"></i> Fast-Track Setup</span>
            <img src="<?= $img ?>/Offshore-Forex-Setup.png" alt="Offshore Forex Setup" class="fx-bg-img" />
            <div class="fx-glass-panel">
              <div class="fx-panel-accent"></div>
              <h5 class="fx-panel-title">Offshore Forex Setup</h5>
              <p class="fx-panel-desc">
                Establish your Forex brokerage in cost-effective and business-friendly jurisdictions such as Mauritius or Seychelles.[cite: 16]
              </p>
              <a href="#consultation" class="fx-panel-cta">
                Explore Offshore Setup <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2: Tier-1 European Licenses -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-delay="250">
          <div class="fx-spotlight-card">
            <span class="fx-top-pill"><i class="bi bi-award"></i> Institutional Trust</span>
            <img src="<?= $img ?>/Tier-1-European-Licenses.png" alt="Tier-1 European Licenses" class="fx-bg-img" />
            <div class="fx-glass-panel">
              <div class="fx-panel-accent"></div>
              <h5 class="fx-panel-title">Tier-1 European Licenses</h5>
              <p class="fx-panel-desc">
                Obtain regulatory licenses from reputable European jurisdictions to build a globally trusted Forex brand.[cite: 16]
              </p>
              <a href="#consultation" class="fx-panel-cta">
                Explore EU Licensing <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3: Hybrid Crypto/FX Setup -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-delay="400">
          <div class="fx-spotlight-card">
            <span class="fx-top-pill"><i class="bi bi-intersect"></i> Dual-Asset Model</span>
            <img src="<?= $img ?>/VASP-Exchange-License.png" alt="Hybrid Crypto/FX Setup" class="fx-bg-img" />
            <div class="fx-glass-panel">
              <div class="fx-panel-accent"></div>
              <h5 class="fx-panel-title">Hybrid Crypto/FX Setup</h5>
              <p class="fx-panel-desc">
                Combine Forex and crypto operations under a flexible, compliant structure to diversify your business and market reach.[cite: 16]
              </p>
              <a href="#consultation" class="fx-panel-cta">
                Explore Hybrid Setup <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
</section>

<style>
    /* =========================================================
    GLOBAL JURISDICTIONS MATRIX SECTION
    ========================================================= */
    .jurisdictions-matrix-section {
    position: relative;
    background-image: url('<?= $img; ?>/Global-Jurisdictions-Matrix.png');
    background-size: 100% auto;
    background-position: bottom center;
    background-repeat: no-repeat;
    background-color: #ffffff;
    padding: 5.5rem 0 6.5rem;
    overflow: hidden;
    }

    /* Matrix Card Container */
    .matrix-table-card {
    background: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(9, 33, 71, 0.1);
    border: 1px solid rgba(198, 146, 44, 0.25);
    }

    .matrix-table {
    margin-bottom: 0;
    width: 100%;
    border-collapse: collapse;
    }

    /* Gold Gradient Table Header */
    .matrix-table thead {
    background: linear-gradient(90deg, #a6781e 0%, #c6922c 50%, #b07f20 100%);
    color: #ffffff;
    }

    .matrix-table thead th {
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 1.15rem 1.5rem;
    border: none;
    white-space: nowrap;
    }

    /* Table Rows & Staggered Hover Effect */
    .matrix-row {
    border-bottom: 1px solid #eef1f6;
    transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.3s ease,
                box-shadow 0.3s ease;
    background-color: #ffffff;
    }

    .matrix-row:last-child {
    border-bottom: none;
    }

    .matrix-row:hover {
    background-color: #fdfaf3;
    transform: scale(1.01);
    box-shadow: 0 6px 20px rgba(198, 146, 44, 0.12);
    position: relative;
    z-index: 2;
    }

    .matrix-row td {
    padding: 1.1rem 1.5rem;
    vertical-align: middle;
    font-size: 0.95rem;
    color: #1e293b;
    }

    /* Circular Flag Avatar */
    .flag-circle {
    width: 34px;
    height: 34px;
    min-width: 34px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
    border: 2px solid #ffffff;
    transition: transform 0.3s ease;
    }

    .matrix-row:hover .flag-circle {
    transform: rotate(8deg) scale(1.1);
    }

    .jurisdiction-name {
    font-weight: 800;
    color: #092147;
    font-size: 0.98rem;
    }

    /* Capital Level Pill Badges */
    .cap-badge {
    display: inline-block;
    min-width: 105px;
    text-align: center;
    padding: 0.35rem 1rem;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.85rem;
    transition: transform 0.25s ease;
    }

    .matrix-row:hover .cap-badge {
    transform: translateY(-1px);
    }

    .cap-moderate {
    background-color: #f8e4bd;
    color: #8c6214;
    }

    .cap-high {
    background-color: #dbe3f0;
    color: #1e3a6e;
    }

    .cap-low {
    background-color: #d9f2d9;
    color: #1f6b29;
    }

    /* =========================================================
    RESPONSIVE BREAKPOINTS (Mobile Card Transformation)
    ========================================================= */
    @media (max-width: 991.98px) {
    .jurisdictions-matrix-section {
        background-size: cover;
        padding: 4rem 0 4.5rem;
    }
    }

    @media (max-width: 767.98px) {
    .matrix-table thead {
        display: none;
    }

    .matrix-table,
    .matrix-table tbody,
    .matrix-row,
    .matrix-row td {
        display: block;
        width: 100%;
    }

    .matrix-table-card {
        background: transparent;
        box-shadow: none;
        border: none;
    }

    .matrix-row {
        background: #ffffff;
        border: 1.5px solid rgba(198, 146, 44, 0.45);
        border-radius: 16px;
        margin-bottom: 1rem;
        padding: 0.75rem 1rem;
        box-shadow: 0 8px 22px rgba(9, 33, 71, 0.06);
    }

    .matrix-row:hover {
        transform: translateY(-3px);
    }

    .matrix-row td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0.25rem;
        border-bottom: 1px dashed #e6e9ef;
        text-align: right;
    }

    .matrix-row td:first-child {
        justify-content: flex-start;
        text-align: left;
        border-bottom: 1.5px solid rgba(198, 146, 44, 0.3);
        padding-bottom: 0.85rem;
        margin-bottom: 0.25rem;
    }

    .matrix-row td:last-child {
        border-bottom: none;
    }

    .matrix-row td::before {
        content: attr(data-label);
        font-size: 0.76rem;
        font-weight: 700;
        text-transform: uppercase;
        color: var(--text-muted);
        letter-spacing: 0.04em;
        text-align: left;
        margin-right: 1rem;
    }

    .matrix-row td:first-child::before {
        display: none;
    }
    }
</style>

<!-- GLOBAL JURISDICTIONS MATRIX SECTION -->
<section class="jurisdictions-matrix-section">
    <div class="container">

      <!-- Section Header -->
      <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="750">
        <div class="process-heading-wrap">
          <h2 class="process-main-title">
            Global Jurisdictions <span>Matrix</span>
          </h2>
        </div>
        <p class="text-muted mx-auto mb-0" style="max-width: 680px;">
          Compare popular legal frameworks for crypto asset and Forex service providers.
        </p>
      </div>

      <!-- Responsive Comparison Matrix -->
      <div class="matrix-table-card" data-aos="fade-up" data-aos-duration="850" data-aos-delay="150">
        <table class="matrix-table">
          <thead>
            <tr>
              <th>Jurisdiction</th>
              <th>Sector</th>
              <th>License / Status</th>
              <th>Est. Timeline</th>
              <th class="text-center">Min. Capital</th>
            </tr>
          </thead>
          <tbody>

            <!-- Row 1: Lithuania -->
            <tr class="matrix-row" data-aos="fade-right" data-aos-delay="100">
              <td data-label="Jurisdiction">
                <div class="d-flex align-items-center gap-3">
                  <img src="https://flagcdn.com/w80/lt.png" alt="Lithuania Flag" class="flag-circle" />
                  <span class="jurisdiction-name">Lithuania</span>
                </div>
              </td>
              <td data-label="Sector">Crypto</td>
              <td data-label="License / Status">VASP / CASP Framework</td>
              <td data-label="Est. Timeline" class="fw-semibold">2 – 3 Months</td>
              <td data-label="Min. Capital" class="text-md-center">
                <span class="cap-badge cap-moderate">Moderate</span>
              </td>
            </tr>

            <!-- Row 2: Dubai (VARA) -->
            <tr class="matrix-row" data-aos="fade-right" data-aos-delay="200">
              <td data-label="Jurisdiction">
                <div class="d-flex align-items-center gap-3">
                  <img src="https://flagcdn.com/w80/ae.png" alt="UAE Flag" class="flag-circle" />
                  <span class="jurisdiction-name">Dubai (VARA)</span>
                </div>
              </td>
              <td data-label="Sector">Crypto</td>
              <td data-label="License / Status">Virtual Asset Service Provider</td>
              <td data-label="Est. Timeline" class="fw-semibold">3 – 5 Months</td>
              <td data-label="Min. Capital" class="text-md-center">
                <span class="cap-badge cap-high">High</span>
              </td>
            </tr>

            <!-- Row 3: El Salvador -->
            <tr class="matrix-row" data-aos="fade-right" data-aos-delay="300">
              <td data-label="Jurisdiction">
                <div class="d-flex align-items-center gap-3">
                  <img src="https://flagcdn.com/w80/sv.png" alt="El Salvador Flag" class="flag-circle" />
                  <span class="jurisdiction-name">El Salvador</span>
                </div>
              </td>
              <td data-label="Sector">Crypto / Bitcoin</td>
              <td data-label="License / Status">Digital Asset Service Provider (DASP)</td>
              <td data-label="Est. Timeline" class="fw-semibold">2 – 4 Months</td>
              <td data-label="Min. Capital" class="text-md-center">
                <span class="cap-badge cap-low">Low</span>
              </td>
            </tr>

            <!-- Row 4: Vanuatu (VFSC) -->
            <tr class="matrix-row" data-aos="fade-right" data-aos-delay="400">
              <td data-label="Jurisdiction">
                <div class="d-flex align-items-center gap-3">
                  <img src="https://flagcdn.com/w80/vu.png" alt="Vanuatu Flag" class="flag-circle" />
                  <span class="jurisdiction-name">Vanuatu (VFSC)</span>
                </div>
              </td>
              <td data-label="Sector">Forex / Crypto Class B</td>
              <td data-label="License / Status">Financial Dealers License</td>
              <td data-label="Est. Timeline" class="fw-semibold">2 – 3 Months</td>
              <td data-label="Min. Capital" class="text-md-center">
                <span class="cap-badge cap-low">Low</span>
              </td>
            </tr>

            <!-- Row 5: Labuan (LFSA) -->
            <tr class="matrix-row" data-aos="fade-right" data-aos-delay="500">
              <td data-label="Jurisdiction">
                <div class="d-flex align-items-center gap-3">
                  <img src="https://flagcdn.com/w80/my.png" alt="Malaysia Labuan Flag" class="flag-circle" />
                  <span class="jurisdiction-name">Labuan (LFSA)</span>
                </div>
              </td>
              <td data-label="Sector">Forex / Digital Asset</td>
              <td data-label="License / Status">Money Broking License</td>
              <td data-label="Est. Timeline" class="fw-semibold">4 – 6 Months</td>
              <td data-label="Min. Capital" class="text-md-center">
                <span class="cap-badge cap-moderate">Moderate</span>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
</section>

<style>
    /* =========================================================
    READY TO LAUNCH CTA SECTION (INTERACTIVE ORBIT DIAGRAM)
    ========================================================= */
    .launch-cta-section {
    position: relative;
    background: linear-gradient(180deg, #ffffff 0%, #fcfaf5 100%);
    padding: 5.5rem 0;
    overflow: hidden;
    border-top: 1px solid var(--border-color);
    }

    /* Interactive Circular Orbit Hub (Left Side) */
    .orbit-hub-container {
    position: relative;
    width: 100%;
    max-width: 470px;
    height: 450px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    /* Outer Gold Ring with 4 Cardinal Dots */
    .orbit-ring-track {
    position: absolute;
    width: 340px;
    height: 340px;
    border-radius: 50%;
    border: 3.5px solid rgba(198, 146, 44, 0.55);
    box-shadow: 0 0 0 18px rgba(198, 146, 44, 0.04);
    z-index: 1;
    transition: transform 0.6s ease, border-color 0.35s ease;
    }

    .orbit-hub-container:hover .orbit-ring-track {
    border-color: var(--primary-gold);
    }

    .orbit-dot {
    position: absolute;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: var(--primary-gold);
    border: 3px solid #ffffff;
    box-shadow: 0 2px 8px rgba(198, 146, 44, 0.4);
    }

    .orbit-dot.top    { top: -9px; left: 50%; transform: translateX(-50%); }
    .orbit-dot.bottom { bottom: -9px; left: 50%; transform: translateX(-50%); }
    .orbit-dot.left   { left: -9px; top: 50%; transform: translateY(-50%); }
    .orbit-dot.right  { right: -9px; top: 50%; transform: translateY(-50%); }

    /* Center Dynamic Laptop Showcase */
    .orbit-center-laptop {
    position: relative;
    z-index: 2;
    width: 185px;
    text-align: center;
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .laptop-screen-box {
    background: linear-gradient(145deg, #0b2246 0%, #06142c 100%);
    border: 4px solid #1e293b;
    border-bottom: none;
    border-radius: 12px 12px 0 0;
    height: 122px;
    padding: 0.75rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 14px 30px rgba(9, 33, 71, 0.22);
    transition: all 0.35s ease;
    }

    /* Subtle Candlestick Bars inside Laptop Screen */
    .laptop-chart-bars {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: flex-end;
    justify-content: space-around;
    padding: 12px 16px;
    opacity: 0.22;
    pointer-events: none;
    }

    .laptop-chart-bars span {
    width: 6px;
    background: var(--primary-gold);
    border-radius: 2px;
    transition: height 0.4s ease;
    }

    .laptop-screen-icon {
    position: relative;
    z-index: 2;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--primary-gold);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.45rem;
    box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.9);
    margin-bottom: 0.35rem;
    transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .laptop-screen-label {
    position: relative;
    z-index: 2;
    font-size: 0.68rem;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: 0.03em;
    text-transform: uppercase;
    }

    .laptop-base-bar {
    height: 10px;
    width: 210px;
    margin-left: -12.5px;
    background: linear-gradient(180deg, #e2e8f0 0%, #94a3b8 100%);
    border-radius: 0 0 10px 10px;
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
    }

    /* 4 Interactive Orbit Nodes */
    .orbit-node-circle {
    position: absolute;
    z-index: 3;
    width: 146px;
    height: 146px;
    border-radius: 50%;
    background: #ffffff;
    border: 2.5px solid var(--primary-gold);
    box-shadow: 0 12px 28px rgba(9, 33, 71, 0.09);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0.85rem;
    cursor: pointer;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                background-color 0.35s ease,
                box-shadow 0.35s ease;
    }

    .orbit-node-tl { top: 8px; left: 12px; }
    .orbit-node-tr { top: 8px; right: 12px; }
    .orbit-node-bl { bottom: 8px; left: 12px; }
    .orbit-node-br { bottom: 8px; right: 12px; }

    .orbit-node-icon {
    font-size: 1.85rem;
    color: var(--primary-gold);
    line-height: 1;
    margin-bottom: 0.45rem;
    transition: transform 0.35s ease, color 0.35s ease;
    }

    .orbit-node-title {
    font-size: 0.8rem;
    font-weight: 800;
    line-height: 1.25;
    color: #092147;
    transition: color 0.35s ease;
    }

    /* Hover & Active State Transformation */
    .orbit-node-circle:hover,
    .orbit-node-circle.active {
    background: #092147;
    transform: scale(1.09) translateY(-4px);
    box-shadow: 0 18px 36px rgba(9, 33, 71, 0.24), 0 0 0 5px rgba(198, 146, 44, 0.22);
    }

    .orbit-node-circle:hover .orbit-node-icon,
    .orbit-node-circle.active .orbit-node-icon {
    color: #ffffff;
    transform: scale(1.12);
    }

    .orbit-node-circle:hover .orbit-node-title,
    .orbit-node-circle.active .orbit-node-title {
    color: #ffffff;
    }

    /* Vertical Divider & Right Content Styling */
    .cta-right-divider {
    border-left: 2px solid rgba(198, 146, 44, 0.55);
    padding-left: 2.5rem;
    }

    .cta-launch-title {
    font-size: 2.65rem;
    font-weight: 800;
    line-height: 1.15;
    color: #092147;
    }

    .cta-launch-title span {
    color: var(--primary-gold);
    display: block;
    }

    .cta-mini-feature {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    }

    .cta-mini-feature i {
    font-size: 1.65rem;
    color: var(--primary-gold);
    line-height: 1.1;
    margin-top: 2px;
    }

    .cta-mini-feature p {
    font-size: 0.84rem;
    font-weight: 700;
    line-height: 1.35;
    color: #092147;
    margin: 0;
    }

    .btn-consult-pill {
    background: linear-gradient(90deg, #b88422 0%, #d4a038 100%);
    color: #ffffff;
    font-size: 1rem;
    font-weight: 700;
    padding: 0.5rem 2rem;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
    text-decoration: none;
    box-shadow: 0 14px 30px rgba(184, 132, 34, 0.3);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .btn-consult-pill .arrow-circle {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #ffffff;
    color: #b88422;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    transition: transform 0.35s ease;
    }

    .btn-consult-pill:hover {
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 20px 38px rgba(184, 132, 34, 0.42);
    }

    .btn-consult-pill:hover .arrow-circle {
    transform: translateX(5px);
    }

    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
    .cta-right-divider {
        border-left: none;
        padding-left: 0;
        text-align: center;
    }
    .cta-right-divider .gold-accent-line {
        margin-left: auto;
        margin-right: auto;
    }
    .cta-mini-feature {
        justify-content: center;
        text-align: left;
    }
    }

    @media (max-width: 575.98px) {
    .orbit-hub-container {
        height: auto;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        padding: 0.5rem 0;
    }
    .orbit-ring-track,
    .orbit-center-laptop {
        display: none;
    }
    .orbit-node-circle {
        position: static;
        width: 100%;
        height: 150px;
        border-radius: 20px;
    }
    .cta-launch-title {
        font-size: 2rem;
    }
    .btn-consult-pill {
        font-size: 1.05rem;
        padding: 0.85rem 1.5rem;
        width: 100%;
    }
    }
</style>

<!-- READY TO LAUNCH CTA SECTION -->
<section class="launch-cta-section">
    <div class="container">
      <div class="row align-items-center g-5">

        <!-- Left Side: Unique Interactive Orbit Hub -->
        <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="850">
          <div class="orbit-hub-container">
            
            <!-- Connecting Gold Ring & Dots -->
            <div class="orbit-ring-track">
              <span class="orbit-dot top"></span>
              <span class="orbit-dot bottom"></span>
              <span class="orbit-dot left"></span>
              <span class="orbit-dot right"></span>
            </div>

            <!-- Center Interactive Laptop Display -->
            <div class="orbit-center-laptop" id="orbitLaptop">
              <div class="laptop-screen-box">
                <div class="laptop-chart-bars" id="laptopBars">
                  <span style="height: 35%"></span>
                  <span style="height: 60%"></span>
                  <span style="height: 45%"></span>
                  <span style="height: 80%"></span>
                  <span style="height: 55%"></span>
                  <span style="height: 90%"></span>
                  <span style="height: 70%"></span>
                </div>
                <div class="laptop-screen-icon" id="laptopIcon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <div class="laptop-screen-label" id="laptopLabel">Regulated &amp; Ready</div>
              </div>
              <div class="laptop-base-bar"></div>
            </div>

            <!-- Node 1: Top-Left -->
            <div class="orbit-node-circle orbit-node-tl"
                 data-icon="bi-file-earmark-ruled"
                 data-label="VASP / FX Licensed"
                 data-bars="45,75,60,92,70,85,95">
              <div class="orbit-node-icon"><i class="bi bi-file-earmark-ruled"></i></div>
              <div class="orbit-node-title">Licensing &amp;<br>Regulatory Setup</div>
            </div>

            <!-- Node 2: Top-Right -->
            <div class="orbit-node-circle orbit-node-tr"
                 data-icon="bi-building-check"
                 data-label="Corporate Structure"
                 data-bars="30,50,70,65,88,76,90">
              <div class="orbit-node-icon"><i class="bi bi-building-check"></i></div>
              <div class="orbit-node-title">Entity<br>Formation</div>
            </div>

            <!-- Node 3: Bottom-Left -->
            <div class="orbit-node-circle orbit-node-bl"
                 data-icon="bi-bank"
                 data-label="EMI &amp; Fiat Rails"
                 data-bars="65,45,85,72,95,80,88">
              <div class="orbit-node-icon"><i class="bi bi-bank"></i></div>
              <div class="orbit-node-title">Banking &amp;<br>Payment Solutions</div>
            </div>

            <!-- Node 4: Bottom-Right -->
            <div class="orbit-node-circle orbit-node-br"
                 data-icon="bi-headset"
                 data-label="AML / KYC Audit"
                 data-bars="50,68,55,90,82,94,78">
              <div class="orbit-node-icon"><i class="bi bi-headset"></i></div>
              <div class="orbit-node-title">Ongoing<br>Compliance Support</div>
            </div>

          </div>
        </div>

        <!-- Right Side: Headline, 3 Value Pillars & CTA Button -->
        <div class="col-lg-7">
          <div class="cta-right-divider" data-aos="fade-left" data-aos-duration="850" data-aos-delay="150">
            <h2 class="cta-launch-title mb-3">
              Ready to Launch Your
              <span>Crypto or Forex Business?</span>
            </h2>
            <div class="gold-accent-line mb-4"></div>
            <p class="text-muted fs-6 lh-lg mb-4">
              Contact Devotion Global's compliance and licensing experts to structure your exchange, brokerage, or wallet company today.[cite: 23]
            </p>

            <!-- 3 Mini Value Pillars -->
            <div class="row g-3 mb-4 pb-2">
              <div class="col-sm-4">
                <div class="cta-mini-feature">
                  <i class="bi bi-award"></i>
                  <p>Licence route matched to your crypto or forex model[cite: 23]</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="cta-mini-feature">
                  <i class="bi bi-bank2"></i>
                  <p>Entity, banking and AML/KYC set-up under one team[cite: 23]</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="cta-mini-feature">
                  <i class="bi bi-headset"></i>
                  <p>Dedicated support from filing to go-live[cite: 23]</p>
                </div>
              </div>
            </div>

            <!-- Pill CTA Button -->
             <div class="text-center w-100">
                <a href="#consultation" class="btn-consult-pill">
                <span>Consult an Expert Today</span>
                <span class="arrow-circle"><i class="bi bi-arrow-right"></i></span>
                </a>
             </div>
          </div>
        </div>

      </div>
    </div>
</section>

  <!-- Interactive Orbit Hover Script (Append inside your existing script tag) -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
      const orbitNodes = document.querySelectorAll(".orbit-node-circle");
      const laptopIcon = document.getElementById("laptopIcon");
      const laptopLabel = document.getElementById("laptopLabel");
      const laptopBars = document.querySelectorAll("#laptopBars span");
      const laptopBox = document.getElementById("orbitLaptop");

      orbitNodes.forEach(node => {
        node.addEventListener("mouseenter", () => {
          orbitNodes.forEach(n => n.classList.remove("active"));
          node.classList.add("active");

          const newIcon = node.getAttribute("data-icon");
          const newLabel = node.getAttribute("data-label");
          const barHeights = node.getAttribute("data-bars").split(",");

          // Pop animation on laptop center screen
          laptopIcon.style.transform = "scale(0.75) rotate(-10deg)";
          setTimeout(() => {
            laptopIcon.innerHTML = `<i class="bi ${newIcon}"></i>`;
            laptopLabel.textContent = newLabel;
            laptopIcon.style.transform = "scale(1.08) rotate(0deg)";
          }, 140);

          // Animate candlestick chart heights dynamically
          laptopBars.forEach((bar, idx) => {
            if (barHeights[idx]) {
              bar.style.height = barHeights[idx] + "%";
            }
          });
        });

        node.addEventListener("mouseleave", () => {
          node.classList.remove("active");
          laptopIcon.style.transform = "scale(1)";
        });
      });
    });
</script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>
