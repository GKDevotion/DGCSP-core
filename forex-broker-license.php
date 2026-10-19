<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/forex-broker-license';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp??v=' . FILE_VERSISON)') ? 'hero-bg.webp??v=' . FILE_VERSISON)' : 'hero-bg.svg';
$ctaFile  = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp??v=' . FILE_VERSISON)')  ? 'cta-bg.webp??v=' . FILE_VERSISON)'  : 'cta-bg.svg';
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
<header class="ip-hero">
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <span class="ip-line ip-line--grow" style="margin: 0 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Forex Broker<br><span class="ip-gold">Licensing Solutions</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Devotion Global Customer Service Provider offers turnkey corporate structuring, offshore and onshore licensing, and regulatory support for international financial brokerages.</p>
                <a href="#services" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Explore Solutions</a>
            </div>
        </div>
    </div>
</header>

<!-- OVERVIEW -->
<section class="ip-about">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 8%; left: 2%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 4%; width: 90px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container position-relative" style="z-index: 2;" id="about">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="ip-tiles">
                    <div class="ip-stat ip-stat--gold" data-aos="zoom-in" data-aos-delay="0"><span class="ip-stat__num ip-count">40+</span><span class="ip-stat__label">Global Jurisdictions</span></div>
                    <div class="ip-stat ip-stat--dark" data-aos="zoom-in" data-aos-delay="120"><span class="ip-stat__num ip-count">100%</span><span class="ip-stat__label">Regulatory Compliance</span></div>
                    <div class="ip-stat ip-stat--tan" data-aos="zoom-in" data-aos-delay="240"><span class="ip-stat__num ip-count">Turnkey</span><span class="ip-stat__label">Corporate Banking &amp; CRM</span></div>
                    <div class="ip-stat ip-stat--grey" data-aos="zoom-in" data-aos-delay="360"><span class="ip-stat__num ip-count">24/7</span><span class="ip-stat__label">Dedicated Support</span></div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <h2 class="ip-title">What is Forex Broker Licensing by Devotion Global?</h2>
                <span class="ip-line"></span>
                <p>Devotion Global provides an end-to-end Forex Broker Licensing framework that includes company formation, corporate bank account opening, CRM and trading platform setup, and financial compliance management. We assist clients in securing offshore licenses (Vanuatu VFSC, Mauritius FSC, Seychelles FSA) and onshore regulatory approvals (UK FCA, Cyprus CySEC, Labuan LFSA).</p>
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
<section class="ip-steps" id="process">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 4%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">How We Get You Licensed</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">A structured 4-step framework designed to navigate global compliance.</p></div>
        <div class="row g-4 ip-steps__row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-step">
                    <span class="ip-step__num">01</span>
                    <span class="ip-step__label">Step 01</span>
                    <h3>Jurisdiction Strategy</h3>
                    <p>We analyze your business plan, target markets, and capital structure to select the best legal location for your brokerage.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-step">
                    <span class="ip-step__num">02</span>
                    <span class="ip-step__label">Step 02</span>
                    <h3>Entity Formation</h3>
                    <p>Our team handles corporate incorporation, physical office establishment, local director appointments, and document drafting.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-step">
                    <span class="ip-step__num">03</span>
                    <span class="ip-step__label">Step 03</span>
                    <h3>Filing &amp; Compliance</h3>
                    <p>We submit formal applications to financial regulatory bodies, implementing required AML/KYC policies and risk frameworks.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-step">
                    <span class="ip-step__num">04</span>
                    <span class="ip-step__label">Step 04</span>
                    <h3>Banking &amp; Launch</h3>
                    <p>Upon license approval, we complete bank account integrations, connect liquidity bridges, and deliver your live trading ecosystem.</p>
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
<section class="ip-cta" id="contact">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <h2 class="ip-title">Launch Your Brokerage With Devotion Global</h2>
                <p>Speak with our corporate licensing specialists to discuss your business model, timeline, and jurisdiction selection.</p>
                <div class="d-flex flex-wrap justify-content-end gap-2"><a href="mailto:info@devotionglobal.com" class="ip-btn ip-btn--pill">Consult an Expert Today</a></div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
