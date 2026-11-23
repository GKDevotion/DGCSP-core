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

<!-- Shared inner-page theme (same look & animation set as index) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<main>

<!-- HERO -->
<header class="ip-hero ip-hero--split">
    <div class="ip-float ip-float--c d-none d-md-block" style="bottom: 8%; left: 3%; width: 54px;"><img src="<?= $obj ?>/yellow-square.png" alt=""></div>
    <div class="container ip-hero__content">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="ip-line ip-line--grow" style="margin: 0 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Forex Broker<br><span class="ip-gold">Licensing Solutions</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Devotion Global Customer Service Provider offers turnkey corporate structuring, offshore and onshore licensing, and regulatory support for international financial brokerages.</p>
                <a href="#services" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Explore Solutions</a>
            </div>
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= $img ?>/hero-overview.webp?v=<?= FILE_VERSISON ?>" alt="Forex broker licensing overview: trading platform, licence certificate, regulated status, 40+ jurisdictions and VFSC, FSC, FSA, CySEC, FCA, ASIC regulators" class="ip-hero__art" width="1400" height="1000" fetchpriority="high">
            </div>
        </div>
    </div>
</header>

<!-- OVERVIEW -->
<section class="ip-ov" id="about">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 6%; left: 2%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 5%; right: 3%; width: 90px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container position-relative" style="z-index: 2;">

        <!-- Key figures + intro -->
        <div class="row g-4 g-xl-5 align-items-center ip-ov__intro">
            <div class="col-lg-6">
                <div class="ip-ov__figures">
                    <div class="ip-ov__fig ip-ov__fig--gold" data-aos="fade-up" data-aos-delay="0">
                        <span class="ip-ov__fig-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c2.5 2.6 3.8 5.6 3.8 9s-1.3 6.4-3.8 9c-2.5-2.6-3.8-5.6-3.8-9S9.5 5.6 12 3z"/></svg></span>
                        <span class="ip-ov__fig-num ip-count">40+</span>
                        <span class="ip-ov__fig-label">Global Jurisdictions</span>
                    </div>
                    <div class="ip-ov__fig ip-ov__fig--dark" data-aos="fade-up" data-aos-delay="100">
                        <span class="ip-ov__fig-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3 4.5 6v5.5c0 4.5 3.1 8 7.5 9.5 4.4-1.5 7.5-5 7.5-9.5V6z"/><path d="m8.8 12 2.4 2.4 4.2-4.6"/></svg></span>
                        <span class="ip-ov__fig-num ip-count">100%</span>
                        <span class="ip-ov__fig-label">Regulatory Compliance</span>
                    </div>
                    <div class="ip-ov__fig ip-ov__fig--tan" data-aos="fade-up" data-aos-delay="200">
                        <span class="ip-ov__fig-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="12" r="3.5"/><path d="M11.5 12H21"/><path d="M17.5 12v3M20.5 12v2"/></svg></span>
                        <span class="ip-ov__fig-num">Turnkey</span>
                        <span class="ip-ov__fig-label">Corporate Banking &amp; CRM</span>
                    </div>
                    <div class="ip-ov__fig ip-ov__fig--grey" data-aos="fade-up" data-aos-delay="300">
                        <span class="ip-ov__fig-icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 14v-2a8 8 0 0 1 16 0v2"/><rect x="3" y="13" width="4" height="6" rx="1.5"/><rect x="17" y="13" width="4" height="6" rx="1.5"/><path d="M19 19c0 1.5-1.5 2.5-4 2.5h-2"/></svg></span>
                        <span class="ip-ov__fig-num ip-count">24/7</span>
                        <span class="ip-ov__fig-label">Dedicated Support</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="ip-ov__copy">
                    <span class="ip-ov__eyebrow">Overview</span>
                    <h2 class="ip-title ip-ov__title">What is Forex Broker Licensing by Devotion Global?</h2>
                    <span class="ip-line"></span>
                    <p class="ip-ov__lead">Devotion Global provides an end-to-end Forex Broker Licensing framework that includes company formation, corporate bank account opening, CRM and trading platform setup, and financial compliance management.</p>
                    <p class="ip-ov__lead">We assist clients in securing offshore licenses (Vanuatu VFSC, Mauritius FSC, Seychelles FSA) and onshore regulatory approvals (UK FCA, Cyprus CySEC, Labuan LFSA).</p>
                </div>
            </div>
        </div>

        <!-- What the framework covers -->
        <div class="ip-ov__group" data-aos="fade-up">
            <span class="ip-ov__group-label">What the framework covers</span>
            <span class="ip-ov__group-rule" aria-hidden="true"></span>
        </div>
        <div class="row g-3 g-xl-4">
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-ov__card">
                    <div class="ip-ov__card-top"><span class="ip-ov__icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 21V5.5A1.5 1.5 0 0 1 5.5 4h8A1.5 1.5 0 0 1 15 5.5V21"/><path d="M15 10h3.5a1.5 1.5 0 0 1 1.5 1.5V21"/><path d="M2.5 21h19"/><path d="M8 8h3M8 12h3M8 16h3"/></svg></span><span class="ip-ov__idx">01</span></div>
                    <h3>Company Formation</h3>
                    <p>Incorporation, directors, registered office and statutory documents prepared for the regulator.</p>
                </article>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article class="ip-ov__card">
                    <div class="ip-ov__card-top"><span class="ip-ov__icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 9.5 12 4l9 5.5"/><path d="M5 10.5v7.5M9.7 10.5v7.5M14.3 10.5v7.5M19 10.5v7.5"/><path d="M3 21h18"/><path d="M4 18h16"/></svg></span><span class="ip-ov__idx">02</span></div>
                    <h3>Corporate Banking</h3>
                    <p>Corporate and client-segregated account opening, with payment gateways suited to brokerages.</p>
                </article>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article class="ip-ov__card">
                    <div class="ip-ov__card-top"><span class="ip-ov__icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/><path d="m6.5 12.5 3-3 2.5 2 4.5-4.5"/></svg></span><span class="ip-ov__idx">03</span></div>
                    <h3>CRM &amp; Trading Platform</h3>
                    <p>Platform, client portal and CRM configured and ready for client onboarding.</p>
                </article>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article class="ip-ov__card">
                    <div class="ip-ov__card-top"><span class="ip-ov__icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3 4.5 6v5.5c0 4.5 3.1 8 7.5 9.5 4.4-1.5 7.5-5 7.5-9.5V6z"/><path d="m8.8 12 2.4 2.4 4.2-4.6"/></svg></span><span class="ip-ov__idx">04</span></div>
                    <h3>Financial Compliance</h3>
                    <p>AML/KYC policies, risk frameworks and ongoing regulatory reporting managed end to end.</p>
                </article>
            </div>
        </div>

        <!-- Licence routes -->
        <div class="ip-ov__group" data-aos="fade-up">
            <span class="ip-ov__group-label">Licensing routes</span>
            <span class="ip-ov__group-rule" aria-hidden="true"></span>
        </div>
        <div class="row g-3 g-xl-4">
            <div class="col-lg-6" data-aos="fade-right">
                <article class="ip-ov__route">
                    <div class="ip-ov__route-head">
                        <span class="ip-ov__route-tag">Offshore</span>
                        <h3>Offshore Licenses</h3>
                    </div>
                    <p>Faster approvals and lower capital requirements for emerging brokers.</p>
                    <ul class="ip-ov__regs">
                        <li><strong>VFSC</strong><span>Vanuatu</span></li>
                        <li><strong>FSC</strong><span>Mauritius</span></li>
                        <li><strong>FSA</strong><span>Seychelles</span></li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <article class="ip-ov__route ip-ov__route--dark">
                    <div class="ip-ov__route-head">
                        <span class="ip-ov__route-tag">Onshore</span>
                        <h3>Onshore Approvals</h3>
                    </div>
                    <p>Tier-1 regulatory standing with stronger trust and wider market access.</p>
                    <ul class="ip-ov__regs">
                        <li><strong>FCA</strong><span>United Kingdom</span></li>
                        <li><strong>CySEC</strong><span>Cyprus</span></li>
                        <li><strong>LFSA</strong><span>Labuan</span></li>
                    </ul>
                </article>
            </div>
        </div>

    </div>
</section>

<!-- SERVICES 1 -->
<section class="ip-suite" id="services">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up">
            <span class="ip-pill">Our Services</span>
            <h2 class="ip-title">Our Licensing &amp; Corporate Services</h2>
            <p class="ip-sub">Tailored legal and technological foundations for every scale of Forex operation.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Offshore Licensing</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-earth-asia"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Rapid registration in Vanuatu (VFSC), Mauritius (FSC), or Seychelles (FSA). Ideal for emerging brokers seeking minimal capital requirements and speedy setup.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="110">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Tier-1 Onshore Setup</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-landmark"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Establish high credibility in regulated environments such as Cyprus (CySEC), the UK (FCA), or Australia (ASIC) with full passporting rights.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="220">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Corporate Banking &amp; PSPs</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-building-columns"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Secure multi-currency corporate accounts, client segregated bank accounts, and integrated Payment Service Providers (PSPs) for smooth processing.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="330">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Turnkey Tech Integration</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-plug"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Deploy custom FX CRM systems, client portals, Liquidity Provider (LP) bridge connectivity, and trading platforms ready for client onboarding.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="ip-steps ip-journey" id="process">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 4%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill">Our Process</span><h2 class="ip-title">How We Get You Licensed</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">A structured 4-step framework designed to navigate global compliance.</p></div>
        <div class="ip-journey__wrap">
            <div class="ip-journey__track d-none d-lg-block" data-aos="fade-in" data-aos-duration="400" aria-hidden="true">
                <svg viewBox="0 0 1000 170" preserveAspectRatio="none" focusable="false">
                    <defs><linearGradient id="ipRoadGrad" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="1000" y2="0"><stop offset="0" stop-color="#ab8139" stop-opacity="0"/><stop offset="0.12" stop-color="#ab8139" stop-opacity="1"/><stop offset="1" stop-color="#ab8139"/></linearGradient></defs>
                    <path class="ip-journey__path-base" d="M0 136 H125 C250 136 250 102 375 102 S500 68 625 68 S750 34 875 34 H1000" />
                </svg>
                <svg class="ip-journey__fill" viewBox="0 0 1000 170" preserveAspectRatio="none" focusable="false">
                    <path d="M0 136 H125 C250 136 250 102 375 102 S500 68 625 68 S750 34 875 34 H1000" stroke="url(#ipRoadGrad)" />
                </svg>
            </div>
            <div class="ip-journey__grid">
            <div class="ip-journey__step" style="--i: 0;" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-journey__node"><i class="fa-solid fa-compass" aria-hidden="true"></i><span class="ip-journey__badge">01</span></div>
                <span class="ip-journey__stem" aria-hidden="true"></span>
                <article class="ip-journey__card">
                    <span class="ip-journey__ghost" aria-hidden="true">01</span>
                    <span class="ip-step__label">Step 01</span>
                    <h3>Jurisdiction Strategy</h3>
                    <p>We analyze your business plan, target markets, and capital structure to select the best legal location for your brokerage.</p>
                    <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>Business plan review</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Target market mapping</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Jurisdiction shortlist</li></ul>
                </article>
            </div>
            <div class="ip-journey__step" style="--i: 1;" data-aos="fade-up" data-aos-delay="140">
                <div class="ip-journey__node"><i class="fa-solid fa-building" aria-hidden="true"></i><span class="ip-journey__badge">02</span></div>
                <span class="ip-journey__stem" aria-hidden="true"></span>
                <article class="ip-journey__card">
                    <span class="ip-journey__ghost" aria-hidden="true">02</span>
                    <span class="ip-step__label">Step 02</span>
                    <h3>Entity Formation</h3>
                    <p>Our team handles corporate incorporation, physical office establishment, local director appointments, and document drafting.</p>
                    <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>Company incorporation</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Local director appointment</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Office &amp; document drafting</li></ul>
                </article>
            </div>
            <div class="ip-journey__step" style="--i: 2;" data-aos="fade-up" data-aos-delay="280">
                <div class="ip-journey__node"><i class="fa-solid fa-file-shield" aria-hidden="true"></i><span class="ip-journey__badge">03</span></div>
                <span class="ip-journey__stem" aria-hidden="true"></span>
                <article class="ip-journey__card">
                    <span class="ip-journey__ghost" aria-hidden="true">03</span>
                    <span class="ip-step__label">Step 03</span>
                    <h3>Filing &amp; Compliance</h3>
                    <p>We submit formal applications to financial regulatory bodies, implementing required AML/KYC policies and risk frameworks.</p>
                    <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>Regulatory application</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>AML/KYC policies</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Risk framework</li></ul>
                </article>
            </div>
            <div class="ip-journey__step ip-journey__step--final" style="--i: 3;" data-aos="fade-up" data-aos-delay="420">
                <div class="ip-journey__node"><i class="fa-solid fa-rocket" aria-hidden="true"></i><span class="ip-journey__badge">04</span></div>
                <span class="ip-journey__stem" aria-hidden="true"></span>
                <article class="ip-journey__card">
                    <span class="ip-journey__ghost" aria-hidden="true">04</span>
                    <span class="ip-step__label">Step 04</span>
                    <h3>Banking &amp; Launch</h3>
                    <p>Upon license approval, we complete bank account integrations, connect liquidity bridges, and deliver your live trading ecosystem.</p>
                    <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>Bank account integration</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Liquidity bridge connectivity</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Live trading ecosystem</li></ul>
                </article>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- COMPARISON MATRIX -->
<section class="ip-matrix" id="jurisdictions">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Jurisdiction Comparison Matrix</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Select the jurisdiction that aligns with your capital requirements and operating timeline.</p></div>
        <div class="ip-table-wrap" data-aos="fade-up" data-aos-delay="100">
            <table class="ip-table">
                <thead><tr><th>Jurisdiction</th><th>License Type</th><th>Est. Timeline</th><th>Reputation Level</th><th>Min. Capital</th></tr></thead>
                <tbody>
                    <tr><td>Vanuatu (VFSC)</td><td>Financial Dealers License</td><td>2 - 3 Months</td><td>Offshore / Emerging</td><td><span class="ip-chip ip-chip--low">Low</span></td></tr>
                    <tr><td>Mauritius (FSC)</td><td>SEC / Investment Dealer</td><td>3 - 5 Months</td><td>Mid-Shore Preferred</td><td><span class="ip-chip ip-chip--mid">Moderate</span></td></tr>
                    <tr><td>Labuan, Malaysia (LFSA)</td><td>Money Broking License</td><td>4 - 6 Months</td><td>Asian Financial Hub</td><td><span class="ip-chip ip-chip--mid">Moderate</span></td></tr>
                    <tr><td>Cyprus (CySEC)</td><td>CIF (EU Passporting)</td><td>6 - 9 Months</td><td>Tier-1 Onshore</td><td><span class="ip-chip ip-chip--high">High</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FAQ -->
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
                        <span>How long does it take to get a Forex license?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>Offshore jurisdictions like Vanuatu or Seychelles typically take between 2 to 4 months. Onshore European licenses like CySEC or FCA usually require 6 to 12 months depending on regulatory review timelines.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>Does Devotion Global assist with corporate banking?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Yes, Devotion Global provides complete banking assistance. We introduce and assist in setting up corporate accounts, client segregated accounts, and payment gateways suited for financial brokerages.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>What is the difference between offshore and onshore licensing?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Offshore licenses feature faster approval times, lower minimum capital requirements, and flexible reporting. Onshore licenses (such as FCA or CySEC) offer stronger regulatory trust, access to European retail traders, and passporting rights.</p></div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="ip-cta ip-cta--split" id="contact">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 9%; left: 2%; width: 56px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 3%; width: 84px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="zoom-in">
                <img src="<?= $img ?>/cta-overview.webp?v=<?= FILE_VERSISON ?>" alt="Devotion Global forex licensing ecosystem: offshore licensing, Tier-1 onshore setup, turnkey tech integration, AML/KYC compliance and corporate banking with PSPs" class="ip-about__img ip-cta__art" width="1580" height="1000" loading="lazy">
            </div>
            <div class="col-lg-6 ip-cta__content" data-aos="fade-left" data-aos-delay="150">
                <h2 class="ip-title">Launch Your Brokerage With Devotion Global</h2>
                <span class="ip-line"></span>
                <p>Speak with our corporate licensing specialists to discuss your business model, timeline, and jurisdiction selection.</p>
                <ul class="ip-cta__points">
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Jurisdiction strategy tailored to your capital</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Banking, PSP and CRM set-up under one team</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Dedicated support from filing to launch</li>
                </ul>
                <div class="d-flex flex-wrap justify-content-end gap-2 ip-cta__actions"><a href="mailto:info@devotionglobal.com" class="ip-btn ip-btn--pill">Consult an Expert Today</a></div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
