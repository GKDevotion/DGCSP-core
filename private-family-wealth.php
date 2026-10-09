<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/private-family-wealth';
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
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://www.devotionglobal.com/#organization",
          "name": "Devotion Global Customer Service Provider",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global BPO and specialized financial customer service provider offering 24/7 private wealth support, family office management, and UHNWI client desks.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Private Wealth Concierge",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "Arabic", "French"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/private-wealth-services#service",
          "name": "Devotion Global Family Office & Private Wealth Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "White-glove family office administration, high-net-worth client support, consolidated asset reporting, and discrete transaction handling.",
          "areaServed": "Global",
          "category": "Private Wealth & Family Office Management"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/private-wealth-services#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What private wealth and family office services does Devotion Global provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global provides 24/7 dedicated wealth client desks, consolidated multi-asset performance reporting, trust and estate administration support, cross-border KYC screening, and bespoke concierge services for UHNWIs."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global maintain discretion and privacy for Family Offices?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We strictly enforce zero-trust access protocols, SOC 1 & 2 Type II compliance, localized data residency, and dedicated non-disclosure frameworks tailored to high-profile families."
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
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Bespoke Wealth Operations</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Private Wealth &amp;<br><span class="ip-gold">Family Office Services</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Delivering white-glove client support, consolidated asset reporting, and administrative infrastructure tailored exclusively for family offices, wealth managers, and Ultra-HNW families worldwide.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request Private Consultation</a>
            </div>
        </div>
    </div>
</header>

<!-- 2. CORE SERVICES -->
<section class="ip-suite" id="services">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="ip-float ip-float--c d-none d-md-block" style="bottom: 6%; left: 3%; width: 70px;"><img src="<?= $obj ?>/yellow-square.png" alt=""></div>
    <div class="container">
        <div class="ip-suite__head" data-aos="fade-up">
            <span class="ip-pill">Our Services</span>
            <h2 class="ip-title">Our Bespoke Family Office Solutions</h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Dedicated Wealth Desk Support</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-user-tie"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">24/7 direct-access support desk offering high-touch, confidential assistance for principal family members and wealth advisors.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Consolidated Asset Reporting</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-chart-pie"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Aggregated operational reporting across multi-bank accounts, liquid investments, private equity holdings, real estate, and passion assets.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Cross-Border Compliance &amp; KYC</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-user-shield"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Streamlined identity verification, source of wealth (SoW) documentation support, and international regulatory alignment.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Trust &amp; Estate Administration Desk</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-file-contract"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Administrative coordination for fiduciary distributions, estate document maintenance, and multi-generational trust communication.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Family Portal Tech Concierge</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-laptop"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Personalized technical onboarding and continuous support for private family portals, vault storage, and secure communications.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Lifestyle &amp; Administrative Concierge</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-concierge-bell"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Specialized middle-office execution for capital wire authorizations, bill pay tracking, and discrete administrative requests.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- 3. WHY US -->
<section class="ip-why">
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 4%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Built for Uncompromised Discretion &amp; Precision</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                <article class="ip-card">
                    <h3 class="ip-card__title">Absolute Confidentiality</h3>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Rigorous NDAs and zero-trust protocol access ensure family assets and identity remain completely protected.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="130">
                <article class="ip-card">
                    <h3 class="ip-card__title">Multi-Generational Continuity</h3>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Support workflows structured to seamlessly transition knowledge and portal navigation across family generations.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="260">
                <article class="ip-card">
                    <h3 class="ip-card__title">Institutional Safeguards</h3>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Combining the intimacy of a single-family office with bank-grade security and SOC-certified operational redundancy.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- 4. KEY NUMBERS -->
<section class="ip-stats">
    <canvas class="ip-constellation ip-constellation--left" aria-hidden="true"></canvas>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="0">
                <div class="ip-stat ip-stat--gold">
                    <span class="ip-stat__num ip-count">$25B+</span>
                    <span class="ip-stat__label">Family Wealth Supported</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="120">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num ip-count">24/7</span>
                    <span class="ip-stat__label">Private Desk Access</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="240">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num ip-count">100%</span>
                    <span class="ip-stat__label">Confidentiality Guarantee</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="360">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num ip-count">5 Min</span>
                    <span class="ip-stat__label">Priority Escalation SLA</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPLIANCE / SECURITY -->
<section class="ip-badges">
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Security &amp; Governance Framework</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-badge"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>SOC 2 Type II Certified</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-badge"><i class="fa-solid fa-certificate" aria-hidden="true"></i><span>ISO 27001 Data Vault</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-badge"><i class="fa-solid fa-lock" aria-hidden="true"></i><span>Zero-Trust Data Policy</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-badge"><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span>GDPR &amp; Global Privacy</span></div>
            </div>
        </div>
    </div>
</section>

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
                        <span>How does Devotion Global work alongside our existing Family Office staff?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>We act as an extension of your team, handling 24/7 client desk coverage, routine reporting aggregation, and administrative tasks so your core advisors can focus on strategic wealth preservation.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>Do you support Multi-Family Offices (MFOs) as well as Single Family Offices (SFOs)?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Yes. We offer scalable multi-tenant operations for MFOs managing dozens of families, as well as dedicated white-glove pod teams for Single Family Offices.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>How do you handle sensitive communication with family members?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>All client team members complete specialized family communication training, adhering strictly to pre-approved family communication guidelines and secure encrypted messaging channels.</p></div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. CALL TO ACTION -->
<section class="ip-cta" id="contact">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <h2 class="ip-title">Elevate Your Family Office Operations</h2>
                <p>Schedule a private consultation with Devotion Global to establish your custom family wealth customer service desk.</p>
                <a href="mailto:contact@devotioncsp.com" class="ip-btn ip-btn--pill">Request Private Consultation</a>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
