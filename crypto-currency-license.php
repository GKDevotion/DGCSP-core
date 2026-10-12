<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/crypto-currency-license';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp') ? 'hero-bg.webp' : 'hero-bg.svg';
$ctaFile  = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp')  ? 'cta-bg.webp'  : 'cta-bg.svg';
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
                <h1 data-aos="fade-right" data-aos-delay="150">Crypto &amp; Forex<br><span class="ip-gold">Licensing Solutions</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Devotion Global Customer Service Provider offers regulatory registration, VASP approvals, offshore crypto licensing, Forex broker setups, and corporate banking solutions worldwide.</p>
                <a href="#crypto-services" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Explore License Types</a>
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
                    <div class="ip-stat ip-stat--gold" data-aos="zoom-in" data-aos-delay="0"><span class="ip-stat__num ip-count">50+</span><span class="ip-stat__label">Global Legal Options</span></div>
                    <div class="ip-stat ip-stat--dark" data-aos="zoom-in" data-aos-delay="120"><span class="ip-stat__num ip-count">VASP &amp; CASP</span><span class="ip-stat__label">Regulatory Expertise</span></div>
                    <div class="ip-stat ip-stat--tan" data-aos="zoom-in" data-aos-delay="240"><span class="ip-stat__num ip-count">Crypto Banking</span><span class="ip-stat__label">Fiat &amp; Off-Ramp Setup</span></div>
                    <div class="ip-stat ip-stat--grey" data-aos="zoom-in" data-aos-delay="360"><span class="ip-stat__num ip-count">AML/KYC</span><span class="ip-stat__label">Complete Compliance</span></div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <h2 class="ip-title">What is a Crypto Currency License by Devotion Global?</h2>
                <span class="ip-line"></span>
                <p>A Cryptocurrency License (or Virtual Asset Service Provider - VASP registration) is a regulatory authorization that permits companies to legally offer crypto exchange services, digital wallet custody, payment processing, and token launch solutions. Devotion Global manages end-to-end licensing in leading crypto jurisdictions—including Dubai (VARA), Lithuania, El Salvador, Labuan, and offshore regions—providing corporate setup, AML compliance policies, and banking integrations.</p>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES 1 -->
<section class="ip-suite" id="crypto-services">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up">
            <span class="ip-pill">Our Services</span>
            <h2 class="ip-title">Cryptocurrency &amp; VASP Licensing</h2>
            <p class="ip-sub">Comprehensive corporate structures designed for Web3, crypto exchanges, and digital asset firms.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">VASP Exchange License</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-arrow-right-arrow-left"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Operate centralized or decentralized crypto spot and derivatives exchanges with compliant order matching, AML monitoring, and fiat processing.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="110">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Digital Wallet Custody</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-wallet"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Secure regulatory permission to store, manage, and safeguard digital asset private keys on behalf of retail and institutional clients.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="220">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Crypto Merchant &amp; Off-Ramp</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-cash-register"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Obtain processing authorizations to convert digital currencies to fiat cash payments using multi-currency merchant processing integrations.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="330">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Token Issuance &amp; ICO/STO Setup</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-coins"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Launch compliant token offerings with legal opinions, whitepaper compliance reviews, and legal token issuer corporate structures.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="ip-steps" id="process">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 4%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Our Licensing Process</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">A streamlined methodology from initial consultation to final operational launch.</p></div>
        <div class="row g-4 ip-steps__row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-step">
                    <span class="ip-step__num">01</span>
                    <span class="ip-step__label">Step 01</span>
                    <h3>Jurisdiction Selection</h3>
                    <p>We assess your business goals, target countries, and available capital to select the ideal VASP or FX framework.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-step">
                    <span class="ip-step__num">02</span>
                    <span class="ip-step__label">Step 02</span>
                    <h3>Corporate Structuring</h3>
                    <p>We draft corporate articles, incorporate local operating entities, and assign local compliance officers or directors.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-step">
                    <span class="ip-step__num">03</span>
                    <span class="ip-step__label">Step 03</span>
                    <h3>Filing &amp; Compliance</h3>
                    <p>Our regulatory legal team prepares AML/KYC policies, cyber audit documentation, and formal regulatory applications.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-step">
                    <span class="ip-step__num">04</span>
                    <span class="ip-step__label">Step 04</span>
                    <h3>Banking &amp; Integration</h3>
                    <p>Following approval, we setup dedicated corporate accounts, crypto payment rails, and platform technology bridges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES 2 -->
<section class="ip-why" id="forex-services">
    <div class="container">
        <div class="ip-head" data-aos="fade-up">
            <span class="ip-pill">Our Services</span>
            <h2 class="ip-title">Forex Broker Licensing Solutions</h2>
            <p class="ip-sub">Establish legal credibility across global FX markets with established licenses.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Offshore Forex Setup</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-earth-asia"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Fast-track licensing in cost-effective regions like Vanuatu (VFSC), Mauritius (FSC), or Seychelles (FSA) with lower starting capital.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="110">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Tier-1 European Licenses</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-landmark"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Secure premium regulatory status with Cyprus (CySEC) or the UK (FCA) for passporting rights across European markets.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="220">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Hybrid Crypto/FX Setup</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-diagram-project"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Integrate MetaTrader/cTrader engines alongside crypto wallet infrastructures to service multi-asset traders.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- COMPARISON MATRIX -->
<section class="ip-matrix" id="jurisdictions">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Global Jurisdictions Matrix</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Compare popular legal frameworks for crypto asset and Forex service providers.</p></div>
        <div class="ip-table-wrap" data-aos="fade-up" data-aos-delay="100">
            <table class="ip-table">
                <thead><tr><th>Jurisdiction</th><th>Sector</th><th>License / Status</th><th>Est. Timeline</th><th>Min. Capital</th></tr></thead>
                <tbody>
                    <tr><td>Lithuania</td><td>Crypto</td><td>VASP / CASP Framework</td><td>2 - 3 Months</td><td><span class="ip-chip ip-chip--mid">Moderate</span></td></tr>
                    <tr><td>Dubai (VARA)</td><td>Crypto</td><td>Virtual Asset Service Provider</td><td>3 - 5 Months</td><td><span class="ip-chip ip-chip--high">High</span></td></tr>
                    <tr><td>El Salvador</td><td>Crypto / Bitcoin</td><td>Digital Asset Service Provider (DASP)</td><td>2 - 4 Months</td><td><span class="ip-chip ip-chip--low">Low</span></td></tr>
                    <tr><td>Vanuatu (VFSC)</td><td>Forex / Crypto Class B</td><td>Financial Dealers License</td><td>2 - 3 Months</td><td><span class="ip-chip ip-chip--low">Low</span></td></tr>
                    <tr><td>Labuan (LFSA)</td><td>Forex / Digital Asset</td><td>Money Broking License</td><td>4 - 6 Months</td><td><span class="ip-chip ip-chip--mid">Moderate</span></td></tr>
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
                        <span>What is a VASP License?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>A Virtual Asset Service Provider (VASP) license is an official regulatory authorization allowing businesses to conduct crypto-to-fiat exchange, crypto-to-crypto trading, digital wallet management, and virtual asset transfer services in compliance with international FATF and AML requirements.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>Can Devotion Global open crypto-friendly corporate bank accounts?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Yes. Devotion Global maintains partnerships with crypto-friendly international banks, EMIs (Electronic Money Institutions), and fiat payment providers to establish dedicated corporate accounts for operating expenses and client funds.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>How long does it take to register a crypto business?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Depending on the jurisdiction, offshore crypto setups and basic European VASP filings take approximately 6 to 12 weeks. Specialized onshore regulators like Dubai VARA may take between 3 to 6 months.</p></div></div>
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
                <h2 class="ip-title">Ready to Launch Your Crypto or Forex Business?</h2>
                <p>Contact Devotion Global's compliance and licensing experts to structure your exchange, brokerage, or wallet company today.</p>
                <div class="d-flex flex-wrap justify-content-end gap-2"><a href="mailto:info@devotionglobal.com" class="ip-btn ip-btn--pill">Consult an Expert Today</a></div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
