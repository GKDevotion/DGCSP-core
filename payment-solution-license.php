<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/payment-solution-license';
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
      "description": "Devotion Global specializes in legal entity setup, Payment Service Provider (PSP) licensing, Electronic Money Institution (EMI) registration, Crypto VASP approvals, and Forex brokerage setups.",
      "areaServed": "Global",
      "serviceType": "Payment Solution & Financial Licensing",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Financial Services Catalog",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Payment Service Provider (PSP) & EMI Licensing"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Cryptocurrency & VASP Registration"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Forex Broker Licensing (Offshore & Tier-1)"
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
                <h1 data-aos="fade-right" data-aos-delay="150">Payment Solution &amp;<br><span class="ip-gold">Financial Licensing</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Devotion Global Customer Service Provider authorizes fintech companies, PSPs, Electronic Money Institutions (EMIs), Crypto exchanges, and Forex brokerages with global regulatory licenses.</p>
                <a href="#payment-services" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Explore License Types</a>
            </div>
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= $img ?>/hero-overview.webp?v=<?= FILE_VERSISON ?>" alt="Payment solution licensing overview: payment cards, IBAN accounts, PCI-DSS compliance, 60+ regulators and PSP, EMI, PI and MTL license types" class="ip-hero__art" width="1400" height="1000" fetchpriority="high">
            </div>
        </div>
    </div>
</header>

<!-- OVERVIEW -->
<section class="ip-ov" id="about">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 8%; left: 2%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 4%; width: 90px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="ip-ov__bento">
                    <div class="ip-ov__tile ip-ov__tile--gold" data-aos="fade-up" data-aos-delay="0">
                        <span class="ip-ov__icon"><i class="fa-solid fa-earth-asia" aria-hidden="true"></i></span>
                        <span class="ip-ov__num ip-count">60+</span>
                        <span class="ip-ov__label">Global Regulators</span>
                    </div>
                    <div class="ip-ov__tile ip-ov__tile--dark" data-aos="fade-up" data-aos-delay="120">
                        <span class="ip-ov__icon"><i class="fa-solid fa-credit-card" aria-hidden="true"></i></span>
                        <span class="ip-ov__num ip-ov__num--sm ip-count">PSP &amp; EMI</span>
                        <span class="ip-ov__label">Fintech Approvals</span>
                    </div>
                    <div class="ip-ov__tile ip-ov__tile--tan" data-aos="fade-up" data-aos-delay="240">
                        <span class="ip-ov__icon"><i class="fa-solid fa-building-columns" aria-hidden="true"></i></span>
                        <span class="ip-ov__num ip-ov__num--sm ip-count">IBAN &amp; Clearing</span>
                        <span class="ip-ov__label">Banking Integrations</span>
                    </div>
                    <div class="ip-ov__tile ip-ov__tile--grey" data-aos="fade-up" data-aos-delay="360">
                        <span class="ip-ov__icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>
                        <span class="ip-ov__text"><span class="ip-ov__num ip-count">PCI &amp; AML</span><span class="ip-ov__label">Turnkey Compliance</span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <span class="ip-pill">About Licensing</span>
                <h2 class="ip-title">What is a Payment Solution License by Devotion Global?</h2>
                <span class="ip-line"></span>
                <p class="ip-ov__lead">A Payment Solution License (such as a PSP, EMI, PI, or Money Transmitter License) allows companies to process online merchant transactions, issue electronic money/IBANs, provide e-wallets, and facilitate international cross-border fund transfers legally. Devotion Global delivers complete turnkey setups including corporate structuring, regulatory filing, physical substance, PCI-DSS compliance guidance, and correspondent bank integrations globally.</p>

                <ul class="ip-ov__scope">
                    <li><i class="fa-solid fa-sitemap" aria-hidden="true"></i>Corporate structuring</li>
                    <li><i class="fa-solid fa-file-signature" aria-hidden="true"></i>Regulatory filing</li>
                    <li><i class="fa-solid fa-building" aria-hidden="true"></i>Physical substance</li>
                    <li><i class="fa-solid fa-lock" aria-hidden="true"></i>PCI-DSS compliance guidance</li>
                    <li><i class="fa-solid fa-link" aria-hidden="true"></i>Correspondent bank integrations</li>
                </ul>

                <div class="ip-ov__regs_payment">
                    <div class="ip-ov__reg">
                        <span class="ip-ov__reg-title">License types</span>
                        <span class="ip-ov__chips"><b>PSP</b><small>Payment Service Provider</small></span>
                        <span class="ip-ov__chips"><b>EMI</b><small>Electronic Money Institution</small></span>
                        <span class="ip-ov__chips"><b>PI</b><small>Payment Institution</small></span>
                        <span class="ip-ov__chips"><b>MTL</b><small>Money Transmitter License</small></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES 1 -->
<section class="ip-suite" id="payment-services">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up">
            <span class="ip-pill">Our Services</span>
            <h2 class="ip-title">Payment Solution &amp; Fintech Licensing</h2>
            <p class="ip-sub">Legal infrastructure tailored for payment gateways, money remitters, and digital banks.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Payment Service Provider (PSP)</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-credit-card"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Process credit card transactions and alternative payment methods (APMs) for high-risk and low-risk merchant accounts globally.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="110">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Electronic Money Institution (EMI)</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-money-bill-transfer"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Issue e-money, create multi-currency virtual IBANs, offer prepaid cards, and operate digital wallet accounts for retail and business clients.</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="220">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Payment Institution (PI) License</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-building-columns"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Authorize money remittance, direct debits, credit transfers, and account information services (Open Banking / PSD2 standard).</p>
                </article>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="330">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Money Transmitter License (MTL)</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-paper-plane"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Secure regulatory permission for cross-border money transfers, peer-to-peer payout solutions, and currency conversion operations.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="ip-steps ip-journey" id="process">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 4%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill">Our Process</span><h2 class="ip-title">Our Licensing Framework</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">A structured step-by-step roadmap to achieving operational compliance.</p></div>
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
                        <h3>Fintech Strategy</h3>
                        <p>We review your software architecture, payment flows, business model, and target corridors to choose the proper license type.</p>
                        <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>Software architecture review</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Payment flow analysis</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>License type selection</li></ul>
                    </article>
                </div>
                <div class="ip-journey__step" style="--i: 1;" data-aos="fade-up" data-aos-delay="140">
                    <div class="ip-journey__node"><i class="fa-solid fa-building" aria-hidden="true"></i><span class="ip-journey__badge">02</span></div>
                    <span class="ip-journey__stem" aria-hidden="true"></span>
                    <article class="ip-journey__card">
                        <span class="ip-journey__ghost" aria-hidden="true">02</span>
                        <span class="ip-step__label">Step 02</span>
                        <h3>Corporate Substation</h3>
                        <p>Establishment of legal entities, local office space, resident compliance officers, and required share capital structures.</p>
                        <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>Legal entity set-up</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Local office &amp; compliance officer</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Share capital structure</li></ul>
                    </article>
                </div>
                <div class="ip-journey__step" style="--i: 2;" data-aos="fade-up" data-aos-delay="280">
                    <div class="ip-journey__node"><i class="fa-solid fa-file-shield" aria-hidden="true"></i><span class="ip-journey__badge">03</span></div>
                    <span class="ip-journey__stem" aria-hidden="true"></span>
                    <article class="ip-journey__card">
                        <span class="ip-journey__ghost" aria-hidden="true">03</span>
                        <span class="ip-step__label">Step 03</span>
                        <h3>Filing &amp; Policy Build</h3>
                        <p>Preparing AML/CTF frameworks, business plans, security procedures, and submitting formal applications to regulators.</p>
                        <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>AML/CTF framework</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Business plan &amp; security procedures</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Formal regulator application</li></ul>
                    </article>
                </div>
                <div class="ip-journey__step ip-journey__step--final" style="--i: 3;" data-aos="fade-up" data-aos-delay="420">
                    <div class="ip-journey__node"><i class="fa-solid fa-bolt" aria-hidden="true"></i><span class="ip-journey__badge">04</span></div>
                    <span class="ip-journey__stem" aria-hidden="true"></span>
                    <article class="ip-journey__card">
                        <span class="ip-journey__ghost" aria-hidden="true">04</span>
                        <span class="ip-step__label">Step 04</span>
                        <h3>Banking &amp; Activation</h3>
                        <p>Opening central bank safeguarding accounts, acquiring network sponsorships, and integrating payment processing rails.</p>
                        <ul class="ip-journey__list"><li><i class="fa-solid fa-check" aria-hidden="true"></i>Safeguarding accounts</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Network sponsorships</li><li><i class="fa-solid fa-check" aria-hidden="true"></i>Payment rails integration</li></ul>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES 2 -->
<section class="ip-why" id="crypto-services">
    <div class="container">
        <div class="ip-head" data-aos="fade-up">
            <span class="ip-pill">Our Services</span>
            <h2 class="ip-title">Cryptocurrency &amp; VASP Licensing</h2>
            <p class="ip-sub">Regulatory frameworks for digital asset exchanges, Web3 companies, and custodians.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">VASP Exchange Registration</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-arrow-right-arrow-left"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Legal setups in Lithuania, Dubai (VARA), El Salvador, or Czech Republic for crypto-to-fiat trading platforms.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="110">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Crypto Merchant &amp; Off-Ramp</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-cash-register"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Integrate crypto payment gateways with card-to-crypto buying infrastructure and auto-fiat settlements.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="220">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Custodial Wallet Licensing</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-wallet"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Authorizations to securely store client digital assets with cold-storage compliance and insurance protocols.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- SERVICES 3 -->
<section class="ip-suite" id="forex-services">
    <canvas class="ip-constellation ip-constellation--left" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up">
            <span class="ip-pill">Our Services</span>
            <h2 class="ip-title">Forex Broker Licensing Solutions</h2>
            <p class="ip-sub">Turnkey offshore and onshore licensing for international brokerage companies.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Offshore Forex Setup</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-earth-asia"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Incorporate and license in Mauritius (FSC), Vanuatu (VFSC), or Seychelles (FSA) with reduced capital overheads.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="110">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Tier-1 Onshore Setup</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-landmark"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Full-scale regulatory approvals in Cyprus (CySEC), the UK (FCA), or Labuan (LFSA) for enterprise credibility.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="220">
                <article class="ip-card ip-card--pro" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Liquidity &amp; Tech Bridge</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-diagram-project"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Connecting your licensed entity with MT4/MT5/cTrader platforms, CRM systems, and Liquidity Providers.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- COMPARISON MATRIX -->
<section class="ip-matrix" id="jurisdictions">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Fintech License Comparison Matrix</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Evaluate timelines, requirements, and scope across payment, crypto, and FX jurisdictions.</p></div>
        <div class="ip-table-wrap" data-aos="fade-up" data-aos-delay="100">
            <table class="ip-table">
                <thead><tr><th>Jurisdiction</th><th>License Sector</th><th>Scope of Authority</th><th>Est. Timeline</th><th>Capital Need</th></tr></thead>
                <tbody>
                    <tr><td>Lithuania (Bank of Lithuania)</td><td>Payment / EMI</td><td>E-Money, IBAN Issuance, Passporting</td><td>6 - 10 Months</td><td><span class="ip-chip ip-chip--high">High (€350k for EMI)</span></td></tr>
                    <tr><td>United Kingdom (FCA)</td><td>API / Small Payment Inst.</td><td>Remittance &amp; Payment Processing</td><td>4 - 8 Months</td><td><span class="ip-chip ip-chip--mid">Moderate</span></td></tr>
                    <tr><td>Canada (FINTRAC)</td><td>MSB / Payment / Crypto</td><td>Foreign Exchange &amp; Money Transfer</td><td>2 - 3 Months</td><td><span class="ip-chip ip-chip--low">Low</span></td></tr>
                    <tr><td>Dubai (VARA / CBUAE)</td><td>Crypto &amp; Payment</td><td>Virtual Assets &amp; Payment Gateway</td><td>4 - 6 Months</td><td><span class="ip-chip ip-chip--high">High</span></td></tr>
                    <tr><td>Vanuatu (VFSC)</td><td>Forex Brokerage</td><td>Financial FX Dealing</td><td>2 - 3 Months</td><td><span class="ip-chip ip-chip--low">Low</span></td></tr>
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
                        <span>What is the difference between a PSP and an EMI license?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>A Payment Service Provider (PSP/PI) license allows a business to process transactions, accept merchant payments, and transfer money. An Electronic Money Institution (EMI) license includes all PSP capabilities plus the legal right to store client funds long-term, issue electronic wallets, and issue digital IBAN accounts.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>What is a Safeguarding Account in payment licensing?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Regulated payment institutions are required to keep client funds separate from company operational funds. A safeguarding account is a dedicated account held at a credit institution (or central bank) to guarantee client money safety in case of insolvency.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>Can a single company hold both Payment and Crypto licenses?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Yes. Many modern fintechs obtain hybrid authorization—such as an EMI or MSB license combined with a VASP crypto registration—allowing seamless fiat-to-crypto transactions and cross-border digital settlement within one platform.</p></div></div>
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
                <img src="<?= $img ?>/cta-overview.webp?v=<?= FILE_VERSISON ?>" alt="Devotion Global payment licensing ecosystem: PSP, EMI, money transmitter, crypto and VASP, and forex broker licensing" class="ip-about__img ip-cta__art" width="1580" height="1000" loading="lazy">
            </div>
            <div class="col-lg-6 ip-cta__content" data-aos="fade-left" data-aos-delay="150">
                <h2 class="ip-title">Launch Your Payment Solution With Devotion Global</h2>
                <span class="ip-line"></span>
                <p>Speak with our corporate licensing team to structure your PSP, EMI, Crypto Exchange, or Forex brokerage today.</p>
                <ul class="ip-cta__points">
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> License strategy for PSP, EMI, Crypto and Forex</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Substance, banking and compliance under one team</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Dedicated support from filing to activation</li>
                </ul>
                <div class="d-flex flex-wrap justify-content-end gap-2 ip-cta__actions"><a href="mailto:info@devotionglobal.com" class="ip-btn ip-btn--pill">Consult an Expert Today</a></div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
