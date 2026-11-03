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

<!-- Shared inner-page theme (same look & animation set as index) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">
<!-- Hero theme for this page only -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/crypto-forex-hero.css?v=<?= FILE_VERSISON ?>">

<main>

<!-- HERO -->
<header class="cf-hero">
    <svg class="cf-hero__waves" viewBox="0 0 800 400" fill="none" stroke="#ab8139" stroke-width="1" aria-hidden="true">
        <path d="M0 330 C200 250 400 380 800 200"/><path d="M0 345 C200 265 400 395 800 220"/><path d="M0 360 C200 280 400 410 800 240"/><path d="M0 375 C200 295 400 425 800 260"/>
    </svg>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="cf-rule" aria-hidden="true"></span>
                <h1 data-aos="fade-right" data-aos-delay="100">Crypto &amp; Forex <span>Licensing Solutions</span></h1>
                <p class="cf-hero__lead" data-aos="fade-right" data-aos-delay="200">Comprehensive licensing and regulatory support for crypto exchanges, forex brokers, and financial institutions across global jurisdictions.</p>
                <a href="#contact" class="cf-btn" data-aos="fade-up" data-aos-delay="300">Get Licensing Support <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                <ul class="cf-feats" data-aos="fade-up" data-aos-delay="400">
                    <li><span class="cf-feats__ic"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></span>Regulatory<br>Guidance</li>
                    <li><span class="cf-feats__ic"><i class="fa-solid fa-file-circle-check" aria-hidden="true"></i></span>End-to-End<br>Setup</li>
                    <li><span class="cf-feats__ic"><i class="fa-solid fa-globe" aria-hidden="true"></i></span>Global<br>Jurisdictions</li>
                    <li><span class="cf-feats__ic"><i class="fa-solid fa-user-shield" aria-hidden="true"></i></span>Ongoing<br>Compliance</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="cf-stage" role="img" aria-label="Crypto and forex exchange dashboard with Bitcoin and Ethereum, a world map and 50+ global licences">
                    <div class="cf-stage__in" aria-hidden="true">
                        <div class="cf-globe"><img src="<?= $img ?>/hero-globe.svg?v=<?= FILE_VERSISON ?>" alt="" width="600" height="600"></div>
                        <svg class="cf-orbit" viewBox="0 0 760 440" fill="none" stroke="#ab8139" stroke-width="1.2">
                            <ellipse cx="380" cy="220" rx="372" ry="190" transform="rotate(-8 380 220)" opacity=".55"/>
                            <ellipse cx="380" cy="230" rx="330" ry="150" transform="rotate(6 380 230)" opacity=".3"/>
                        </svg>

                        <div class="cf-dash">
                            <div class="cf-dash__bar">
                                <span class="cf-dash__brand"><svg viewBox="0 0 24 24" fill="none" stroke="#ab8139" stroke-width="2.2" stroke-linejoin="round"><path d="M12 2.5l8 4.6v9.8l-8 4.6-8-4.6V7.1z"/><circle cx="12" cy="12" r="2.6" fill="#ab8139" stroke="none"/></svg> Exchange</span>
                                <span class="cf-dash__nav"><span>Markets</span><span>Trade</span><span>Assets</span></span>
                                <span class="cf-dash__login">Login</span>
                            </div>
                            <div class="cf-dash__body">
                                <div class="cf-chart">
                                    <div class="cf-pair">BTC / USDT <b>+2.45%</b></div>
                                    <p class="cf-price">$67,438.24</p>
                                    <svg viewBox="0 0 300 110" preserveAspectRatio="none">
                                        <defs><linearGradient id="cfArea" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#ab8139" stop-opacity=".28"/><stop offset="1" stop-color="#ab8139" stop-opacity="0"/></linearGradient></defs>
                                        <path class="cf-chart__area" d="M0 96 L28 80 L48 86 L72 60 L96 66 L120 44 L142 52 L168 28 L196 36 L226 14 L262 8 L262 110 L0 110Z" fill="url(#cfArea)"/>
                                        <path d="M0 98 L40 92 L80 82 L120 70 L160 62 L200 50 L262 36" stroke="#b8b0a0" stroke-width="1.2" stroke-dasharray="2 3" fill="none"/>
                                        <path class="cf-chart__path" d="M0 96 L28 80 L48 86 L72 60 L96 66 L120 44 L142 52 L168 28 L196 36 L226 14 L262 8" stroke="#ab8139" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" fill="none"/>
                                        <circle class="cf-chart__dot" cx="262" cy="8" r="4.5" fill="#fff" stroke="#ab8139" stroke-width="2"/>
                                    </svg>
                                    <div class="cf-range"><span>1D</span><span class="on">1W</span><span>1M</span><span>3M</span><span>1Y</span><span>ALL</span></div>
                                </div>
                                <div class="cf-stats"><dl>
                                    <dt>24h Volume</dt><dd>$2.8B</dd>
                                    <dt>Market Cap</dt><dd>$1.3T</dd>
                                    <dt>Circulating Supply</dt><dd>19.6M BTC</dd>
                                </dl></div>
                            </div>
                        </div>

                        <div class="cf-tag cf-tag--secure"><i class="fa-solid fa-shield-halved"></i><div><strong>Secure &amp; Regulated</strong><small>Compliance First</small></div></div>
                        <div class="cf-tag cf-tag--multi"><i class="fa-solid fa-chart-simple"></i><strong>Multi-Jurisdiction Support</strong></div>
                        <div class="cf-shield"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="cf-tag cf-tag--lic"><b>50+</b><div><strong>Global Licenses</strong><small>Across Key Markets</small></div></div>

                        <div class="cf-podium"></div>
                        <div class="cf-coin cf-coin--btc"><i class="fa-brands fa-bitcoin"></i></div>
                        <div class="cf-coin cf-coin--eth"><i class="fa-brands fa-ethereum"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- OVERVIEW -->
<section class="cf-about" id="about">  
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="cf-vis" role="img" aria-label="Crypto license illustration: shield with check mark, crypto license certificate, Bitcoin and Ethereum coins, with 50+ legal options, VASP and CASP expertise, crypto banking and AML/KYC compliance">
                    <div class="cf-vis__in" aria-hidden="true">
                        <svg class="cf-vis__arc" viewBox="0 0 600 560" fill="none" stroke="#ab8139"><path d="M60 330 C60 150 190 20 360 20 C470 20 560 80 585 170" stroke-width="1.4" opacity=".55"/><path d="M40 360 C40 160 190 0 370 4" stroke-width=".8" opacity=".3"/></svg>
                        <div class="cf-vis__ghost"><i></i><i></i><i></i><i></i><i></i><i></i></div>

                        <svg class="cf-shield3" viewBox="0 0 260 310">
                            <defs>
                                <linearGradient id="cfSG" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#f4dfa5"/><stop offset=".5" stop-color="#c79a45"/><stop offset="1" stop-color="#8a6528"/></linearGradient>
                                <linearGradient id="cfSD" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#4a4c54"/><stop offset="1" stop-color="#16171b"/></linearGradient>
                                <linearGradient id="cfSC" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#fbeab8"/><stop offset="1" stop-color="#b98f45"/></linearGradient>
                                <filter id="cfSh" x="-20%" y="-20%" width="140%" height="150%"><feDropShadow dx="0" dy="10" stdDeviation="10" flood-color="#5a3e12" flood-opacity=".28"/></filter>
                            </defs>
                            <g filter="url(#cfSh)">
                                <path d="M130 4 L248 42 V140 C248 218 198 272 130 306 C62 272 12 218 12 140 V42 Z" fill="url(#cfSG)"/>
                                <path d="M130 24 L228 55 V140 C228 205 187 252 130 282 C73 252 32 205 32 140 V55 Z" fill="url(#cfSD)"/>
                                <path d="M130 24 L228 55 V100 C190 70 150 60 130 24Z" fill="#fff" opacity=".07"/>
                                <path d="M78 150 L116 190 L184 112" stroke="url(#cfSC)" stroke-width="22" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </g>
                        </svg>

                        <div class="cf-cert">
                            <b>CRYPTO<br>LICENSE</b>
                            <span></span><span></span><span></span><span class="s"></span><span class="s"></span>
                            <svg class="cf-cert__seal" viewBox="0 0 80 100">
                                <defs><linearGradient id="cfSeal" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#f4dfa5"/><stop offset="1" stop-color="#a97c32"/></linearGradient></defs>
                                <path d="M24 52 L12 96 L30 86 L40 98 L44 56Z" fill="#c79a45"/><path d="M56 52 L68 96 L50 86 L40 98 L36 56Z" fill="#b98f45"/>
                                <circle cx="40" cy="36" r="32" fill="url(#cfSeal)"/><circle cx="40" cy="36" r="24" fill="none" stroke="#fff" stroke-opacity=".55" stroke-width="2"/>
                                <path d="M28 37 L36 45 L53 27" stroke="#fff" stroke-opacity=".9" stroke-width="5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <div class="cf-podium2"></div>

                        <svg class="cf-stack cf-stack--a" viewBox="0 0 160 110">
                            <defs>
                                <linearGradient id="cfCT" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#f7e3ae"/><stop offset="1" stop-color="#c79a45"/></linearGradient>
                                <linearGradient id="cfCS" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#8a6528"/><stop offset=".45" stop-color="#d8b062"/><stop offset="1" stop-color="#8a6528"/></linearGradient>
                                <g id="cfDisc"><rect x="0" y="8" width="80" height="12" fill="url(#cfCS)"/><path d="M0 14 H80" stroke="#6f4f18" stroke-opacity=".35" stroke-dasharray="1.6 1.6"/><ellipse cx="40" cy="20" rx="40" ry="9" fill="url(#cfCS)"/><ellipse cx="40" cy="8" rx="40" ry="9" fill="url(#cfCT)"/><ellipse cx="40" cy="8" rx="31" ry="6.5" fill="none" stroke="#fff" stroke-opacity=".45"/></g>
                            </defs>
                            <use href="#cfDisc" x="0" y="82"/><use href="#cfDisc" x="0" y="68"/><use href="#cfDisc" x="0" y="54"/><use href="#cfDisc" x="0" y="40"/><use href="#cfDisc" x="0" y="26"/>
                            <use href="#cfDisc" x="46" y="90"/><use href="#cfDisc" x="46" y="76"/><use href="#cfDisc" x="46" y="62"/>
                        </svg>
                        <svg class="cf-stack cf-stack--b" viewBox="0 0 160 60"><use href="#cfDisc" x="0" y="36"/><use href="#cfDisc" x="0" y="22"/><use href="#cfDisc" x="0" y="8"/></svg>

                        <div class="cf-gcoin cf-gcoin--btc"><i class="fa-brands fa-bitcoin"></i></div>
                        <div class="cf-gcoin cf-gcoin--eth"><i class="fa-brands fa-ethereum"></i></div>

                        <div class="cf-sc cf-sc--1"><i class="fa-solid fa-gavel"></i><b>50+</b><span>Global Legal<br>Options</span></div>
                        <div class="cf-sc cf-sc--2"><i class="fa-solid fa-shield-halved"></i><b>VASP &amp; CASP</b><span>Regulatory<br>Expertise</span></div>
                        <div class="cf-sc cf-sc--3"><i class="fa-solid fa-building-columns"></i><b>Crypto</b><span>Banking</span></div>
                        <div class="cf-sc cf-sc--4"><i class="fa-solid fa-file-shield"></i><b>AML/KYC</b><span>Compliance</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <h2 class="cf-about__title">What is a<br><span>Crypto Currency License</span> by Devotion Global?</h2>
                <span class="cf-rule cf-rule--sm" aria-hidden="true"></span>
                <p class="cf-about__text">A Cryptocurrency License (or Virtual Asset Service Provider - VASP registration) is a regulatory authorization that permits companies to legally offer crypto exchange services, digital wallet custody, payment processing, and token launch solutions. Devotion Global manages end-to-end licensing in leading crypto jurisdictions—including Dubai (VARA), Lithuania, El Salvador, Labuan, and offshore regions—providing corporate setup, AML compliance policies, and banking integrations.</p>
                <a href="#contact" class="cf-btn">Get Expert Guidance <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES 1 -->
<section class="cf-services" id="crypto-services"> 
    <div class="container">
        <div class="cf-head" data-aos="fade-up">
            <span class="cf-eyebrow"><i></i>Our Services<i></i></span>
            <h2 class="cf-head__title">Cryptocurrency &amp; <span>VASP Licensing</span></h2>
            <p class="cf-head__sub">Comprehensive corporate structures designed for Web3, crypto exchanges, and digital asset firms.</p>
        </div>
        <div class="row g-4">

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="cf-svc" itemscope itemtype="https://schema.org/Service">
                    <div class="cf-svc__top">
                        <span class="cf-svc__ic" aria-hidden="true"><i class="fa-solid fa-arrow-right-arrow-left"></i></span>
                        <span class="cf-svc__no" aria-hidden="true">01</span>
                    </div>
                    <h3 class="cf-svc__title" itemprop="name">VASP Exchange<br>License</h3>
                    <span class="cf-svc__rule" aria-hidden="true"></span>
                    <p class="cf-svc__desc" itemprop="description">Operate centralized or decentralized crypto spot and derivatives exchanges with compliant order matching, AML monitoring, and fiat processing.</p>
                    <a href="#contact" class="cf-svc__more">Learn More <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i></a>
                </article>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="110">
                <article class="cf-svc" itemscope itemtype="https://schema.org/Service">
                    <div class="cf-svc__top">
                        <span class="cf-svc__ic" aria-hidden="true"><i class="fa-solid fa-wallet"></i></span>
                        <span class="cf-svc__no" aria-hidden="true">02</span>
                    </div>
                    <h3 class="cf-svc__title" itemprop="name">Digital<br>Wallet Custody</h3>
                    <span class="cf-svc__rule" aria-hidden="true"></span>
                    <p class="cf-svc__desc" itemprop="description">Secure regulatory permission to store, manage, and safeguard digital asset private keys on behalf of retail and institutional clients.</p>
                    <a href="#contact" class="cf-svc__more">Learn More <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i></a>
                </article>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="220">
                <article class="cf-svc" itemscope itemtype="https://schema.org/Service">
                    <div class="cf-svc__top">
                        <span class="cf-svc__ic" aria-hidden="true"><i class="fa-solid fa-clone"></i></span>
                        <span class="cf-svc__no" aria-hidden="true">03</span>
                    </div>
                    <h3 class="cf-svc__title" itemprop="name">Crypto Merchant &amp;<br>Off-Ramp</h3>
                    <span class="cf-svc__rule" aria-hidden="true"></span>
                    <p class="cf-svc__desc" itemprop="description">Obtain processing authorizations to convert digital currencies to fiat cash payments using multi-currency merchant processing integrations.</p>
                    <a href="#contact" class="cf-svc__more">Learn More <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i></a>
                </article>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="330">
                <article class="cf-svc" itemscope itemtype="https://schema.org/Service">
                    <div class="cf-svc__top">
                        <span class="cf-svc__ic" aria-hidden="true"><i class="fa-solid fa-coins"></i></span>
                        <span class="cf-svc__no" aria-hidden="true">04</span>
                    </div>
                    <h3 class="cf-svc__title" itemprop="name">Token Issuance &amp;<br>ICO/STO Setup</h3>
                    <span class="cf-svc__rule" aria-hidden="true"></span>
                    <p class="cf-svc__desc" itemprop="description">Launch compliant token offerings with legal opinions, whitepaper compliance reviews, and legal token issuer corporate structures.</p>
                    <a href="#contact" class="cf-svc__more">Learn More <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i></a>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="cf-proc" id="process">
    <div class="container">
        <div class="cf-head" data-aos="fade-up">
            <span class="cf-eyebrow"><i></i>How We Work<i></i></span>
            <h2 class="cf-head__title">Our <span>Licensing Process</span></h2>
            <p class="cf-head__sub">A streamlined methodology from initial consultation to final operational launch.</p>
        </div>
        <div class="row g-4 cf-proc__row">

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="cf-proc__card">
                    <div class="cf-proc__top">
                        <span class="cf-proc__ic" aria-hidden="true"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                        <div>
                            <span class="cf-proc__step">Step 01</span>
                            <span class="cf-proc__rule" aria-hidden="true"></span>
                            <h3 class="cf-proc__title">Jurisdiction<br>Selection</h3>
                        </div>
                    </div>
                    <p class="cf-proc__desc">We assess your business goals, target countries, and available capital to select the ideal VASP or FX framework.</p>
                    <span class="cf-proc__chev" aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="cf-proc__card">
                    <div class="cf-proc__top">
                        <span class="cf-proc__ic" aria-hidden="true"><i class="fa-solid fa-file-pen"></i></span>
                        <div>
                            <span class="cf-proc__step">Step 02</span>
                            <span class="cf-proc__rule" aria-hidden="true"></span>
                            <h3 class="cf-proc__title">Corporate<br>Structuring</h3>
                        </div>
                    </div>
                    <p class="cf-proc__desc">We draft corporate articles, incorporate local operating entities, and assign local compliance officers or directors.</p>
                    <span class="cf-proc__chev" aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="cf-proc__card">
                    <div class="cf-proc__top">
                        <span class="cf-proc__ic" aria-hidden="true"><i class="fa-solid fa-shield-halved"></i></span>
                        <div>
                            <span class="cf-proc__step">Step 03</span>
                            <span class="cf-proc__rule" aria-hidden="true"></span>
                            <h3 class="cf-proc__title">Filing &amp;<br>Compliance</h3>
                        </div>
                    </div>
                    <p class="cf-proc__desc">Our regulatory legal team prepares AML/KYC policies, cyber audit documentation, and formal regulatory applications.</p>
                    <span class="cf-proc__chev" aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="cf-proc__card">
                    <div class="cf-proc__top">
                        <span class="cf-proc__ic" aria-hidden="true"><i class="fa-solid fa-building-columns"></i></span>
                        <div>
                            <span class="cf-proc__step">Step 04</span>
                            <span class="cf-proc__rule" aria-hidden="true"></span>
                            <h3 class="cf-proc__title">Banking &amp;<br>Integration</h3>
                        </div>
                    </div>
                    <p class="cf-proc__desc">Following approval, we setup dedicated corporate accounts, crypto payment rails, and platform technology bridges.</p>
                    <span class="cf-proc__chev" aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
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
<section class="ip-cta ip-cta--split" id="contact">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 9%; left: 2%; width: 56px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 3%; width: 84px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="zoom-in">
                <img src="<?= $img ?>/cta-overview.webp?v=<?= FILE_VERSISON ?>" alt="Go-live roadmap for a crypto or forex business: jurisdiction strategy, entity formation, regulatory filing, banking and PSP setup, with crypto exchange, wallet custody, forex broker and token launch licensing" class="ip-about__img ip-cta__art" width="1580" height="1000" loading="lazy">
            </div>
            <div class="col-lg-6 ip-cta__content" data-aos="fade-left" data-aos-delay="150">
                <h2 class="ip-title">Ready to Launch Your Crypto or Forex Business?</h2>
                <span class="ip-line"></span>
                <p>Contact Devotion Global's compliance and licensing experts to structure your exchange, brokerage, or wallet company today.</p>
                <ul class="ip-cta__points">
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Licence route matched to your crypto or forex model</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Entity, banking and AML/KYC set-up under one team</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Dedicated support from filing to go-live</li>
                </ul>
                <div class="d-flex flex-wrap justify-content-end gap-2 ip-cta__actions"><a href="mailto:info@devotionglobal.com" class="ip-btn ip-btn--pill">Consult an Expert Today</a></div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
