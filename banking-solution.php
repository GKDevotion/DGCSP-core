<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/banking-solution';
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
          "name": "Devotion Global Banking Solutions",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global financial technology provider offering cloud-native core banking platforms, open banking APIs, and real-time payment solutions.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Banking Solutions Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "French", "German"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/banking-solutions#service",
          "name": "Devotion Global Core Banking Engine",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "High-throughput cloud-native core banking engine with ISO 20022 payment integration, automated AML screening, and real-time ledger accounting.",
          "areaServed": "Global",
          "category": "Core Banking Technology & Financial Infrastructure"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/banking-solutions#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What deployment models are supported by Devotion Global Banking Solutions?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our banking solutions support multi-cloud SaaS, isolated private cloud, hybrid cloud deployments, and fully managed on-premise infrastructure compliant with local data sovereignty laws."
              }
            },
            {
              "@type": "Question",
              "name": "Is the platform compliant with international regulatory standards?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our banking suite natively supports PCI-DSS Level 1, ISO 27001, SOC 2 Type II, GDPR, PSD2 Open Banking APIs, and ISO 20022 messaging standards."
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
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Next-Gen FinTech Architecture</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Cloud-Native<br><span class="ip-gold">Core Banking Solutions</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Powering commercial banks, retail institutions, and neo-banks with real-time multi-currency ledgers, ISO 20022 payment rails, AI fraud prevention, and open banking APIs.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Book Architecture Consultation</a>
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
            <h2 class="ip-title">Our Core Banking Technology Stack</h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Real-Time Core Ledger</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-database"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">High-throughput, double-entry multi-currency accounting engine capable of processing 50,000+ sub-second transactions per second with zero downtime.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Omnichannel Digital Experience</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-mobile-screen-button"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Web and mobile frontend application suites for retail and corporate banking with self-service onboarding, bio-authentication, and transfer hubs.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">ISO 20022 Payment Hub</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-money-bill-transfer"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Native integration with SWIFT GPI, FedNow, SEPA Instant, and local clearing houses using standardized, rich-data XML messaging protocols.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">AI Fraud &amp; Risk Engine</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-shield-halved"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Machine-learning-driven transaction monitoring, behavioral analytics, and real-time AML sanctions screening to intercept fraudulent activity.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Open Banking API Gateway</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-code"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">PSD2 and FDX compliant RESTful API platform enabling secure third-party integration, consent management, and Banking-as-a-Service (BaaS).</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Automated Lending &amp; Treasury</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-landmark"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">End-to-end loan origination, automated credit scoring engines, collateral management, and real-time treasury liquidity management.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- 3. PROCESS / PHASES -->
<section class="ip-steps">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 4%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Modernization Deployment Roadmap</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4 ip-steps__row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-step">
                    <span class="ip-step__num">01</span>
                    <span class="ip-step__label">Phase 01</span>
                    <h3>Architecture Audit</h3>
                    <p>Assessment of legacy mainframe systems, data mapping, regulatory requirements, and co-existence planning.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-step">
                    <span class="ip-step__num">02</span>
                    <span class="ip-step__label">Phase 02</span>
                    <h3>API Layer &amp; Co-Existence</h3>
                    <p>Deploying middleware API wrappers to enable modern mobile applications without interrupting legacy core systems.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-step">
                    <span class="ip-step__num">03</span>
                    <span class="ip-step__label">Phase 03</span>
                    <h3>Ledger Migration</h3>
                    <p>Incremental parallel balance migration, real-time sync verification, and shadow ledger validation run.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-step">
                    <span class="ip-step__num">04</span>
                    <span class="ip-step__label">Phase 04</span>
                    <h3>Full Cloud Cutover</h3>
                    <p>Zero-downtime cutover to cloud-native microservices with 24/7 hypercare support and automated compliance logging.</p>
                </div>
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
                    <span class="ip-stat__num ip-count">99.999%</span>
                    <span class="ip-stat__label">Platform Service Uptime SLA</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="120">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num ip-count">&lt; 15ms</span>
                    <span class="ip-stat__label">Average Transaction Processing Latency</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="240">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num ip-count">50M+</span>
                    <span class="ip-stat__label">Daily Processed Accounts</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="360">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num ip-count">Zero</span>
                    <span class="ip-stat__label">Data Breach Record</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPLIANCE / SECURITY -->
<section class="ip-badges">
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Bank-Grade Security &amp; Global Compliance</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-badge"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>PCI-DSS Level 1 Certified</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-badge"><i class="fa-solid fa-certificate" aria-hidden="true"></i><span>ISO/IEC 27001 &amp; SOC 2 Type II</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-badge"><i class="fa-solid fa-lock" aria-hidden="true"></i><span>ISO 20022 Native Messaging</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-badge"><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span>GDPR &amp; Data Sovereignty</span></div>
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
                        <span>Can Devotion Global replace existing legacy core systems without service interruption?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>Yes. We specialize in progressive modernization. By deploying our middleware and sidecar ledger architecture, financial institutions migrate core functions incrementally without taking legacy mainframes offline or risking customer disruption.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>How does the platform handle regional data residency regulations?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Our architecture supports multi-region isolated tenant deployments across cloud providers (AWS, Azure, GCP) or private data centers, ensuring client transaction data remains fully contained within designated national borders.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>What tools are available for real-time fraud and AML prevention?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Our core includes an embedded AI event-stream monitor that cross-references all transfers against global sanctions lists, PEP databases, and behavioral anomaly models within sub-15-millisecond execution windows.</p></div></div>
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
                <h2 class="ip-title">Accelerate Your Banking Modernization</h2>
                <p>Speak with our enterprise banking architects to schedule an architectural assessment and custom solution presentation.</p>
                <a href="mailto:contact@devotioncsp.com" class="ip-btn ip-btn--pill">Book Architecture Consultation</a>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
