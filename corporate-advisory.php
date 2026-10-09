<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/corporate-advisory';
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
          "name": "Devotion Global Corporate Advisory",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global strategic consulting and business service provider offering executive corporate advisory, board governance, and enterprise transformation.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Corporate Advisory Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "French", "German"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/corporate-advisory#service",
          "name": "Devotion Global Corporate Advisory Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "Strategic C-suite consulting, board advisory, corporate governance audit, capital optimization, and global market expansion strategy.",
          "areaServed": "Global",
          "category": "Corporate Strategy & Management Consulting"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/corporate-advisory#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What corporate advisory services does Devotion Global offer?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global delivers strategic transformation consulting, board governance advising, capital structure optimization, ESG implementation, risk management framework design, and market entry strategies."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global work with corporate boards and executive leadership?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We operate as an independent senior advisory partner, providing data-driven strategic insights, governance oversight, crisis management protocols, and executive decision support directly to Boards of Directors and C-suite leadership."
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
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Strategic Executive Consulting</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Corporate<br><span class="ip-gold">Advisory Services</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Empowering boards, executive leadership, and multinational enterprises with strategic transformation, corporate governance frameworks, capital optimization, and global expansion guidance.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Schedule Executive Consultation</a>
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
            <h2 class="ip-title">Our Corporate Advisory Capabilities</h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Board &amp; Governance Advisory</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-people-group"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Independent board evaluation, fiduciary policy development, oversight frameworks, and shareholder communication strategies for public and private boards.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Strategic Enterprise Transformation</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-arrows-rotate"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Business model realignment, operational restructuring, digital transformation roadmaps, and value creation programs for complex organizations.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Capital Structure &amp; Optimization</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-coins"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Advising on optimal debt-to-equity ratios, treasury strategies, liquidity management, credit rating alignment, and corporate refinancing.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">ESG &amp; Sustainability Strategy</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-leaf"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Designing environmental, social, and governance frameworks, sustainability reporting compliance, and decarbonization transition planning.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Global Market Entry &amp; Expansion</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-globe"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Cross-border market entry strategy, regulatory clearance support, international entity structuring, and foreign market risk assessment.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Crisis Management &amp; Restructuring</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-life-ring"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Turnaround management, operational crisis response, stakeholder alignment, and financial restructuring in distressed or high-volatility environments.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- 3. PROCESS / PHASES -->
<section class="ip-steps">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 4%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Our Strategic Advisory Approach</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4 ip-steps__row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-step">
                    <span class="ip-step__num">01</span>
                    <span class="ip-step__label">Phase 01</span>
                    <h3>Diagnostic &amp; Audit</h3>
                    <p>Operational audit, governance review, financial baseline benchmarking, and risk mapping.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-step">
                    <span class="ip-step__num">02</span>
                    <span class="ip-step__label">Phase 02</span>
                    <h3>Strategic Design</h3>
                    <p>C-suite strategy alignment, policy drafting, governance framework creation, and KPI setting.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-step">
                    <span class="ip-step__num">03</span>
                    <span class="ip-step__label">Phase 03</span>
                    <h3>Execution Guidance</h3>
                    <p>Change management oversight, PMO establishment, capital deployment, and stakeholder communication.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-step">
                    <span class="ip-step__num">04</span>
                    <span class="ip-step__label">Phase 04</span>
                    <h3>Review &amp; Optimization</h3>
                    <p>Continuous governance monitoring, annual board assessments, and strategic pivot execution.</p>
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
                    <span class="ip-stat__num ip-count">$50B+</span>
                    <span class="ip-stat__label">Enterprise Value Advised</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="120">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num ip-count">180+</span>
                    <span class="ip-stat__label">Corporate Transformations</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="240">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num ip-count">40+</span>
                    <span class="ip-stat__label">Global Jurisdictions</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="360">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num ip-count">100%</span>
                    <span class="ip-stat__label">Independent Governance Focus</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPLIANCE / SECURITY -->
<section class="ip-badges">
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Global Governance &amp; Compliance Alignment</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-badge"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>ISO 31000 Risk Management</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-badge"><i class="fa-solid fa-certificate" aria-hidden="true"></i><span>GRI &amp; ISSB Standards</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-badge"><i class="fa-solid fa-lock" aria-hidden="true"></i><span>OECD Corporate Governance</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-badge"><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span>SOX &amp; Regulatory Audit</span></div>
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
                        <span>What sets Devotion Global's corporate advisory apart from traditional consulting?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>We combine high-level strategic counsel with ongoing operational execution support. Rather than providing static reports, our senior partners work alongside executives and boards to drive measurable value creation and governance compliance.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>How do you support mid-market corporations vs. Fortune 500 enterprises?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>We tailor our engagement models dynamically. For mid-market companies, we often serve as fractional board advisors and transformation leads; for large enterprises, we focus on specialized restructuring, ESG strategy, or cross-border expansion desks.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>Can Devotion Global assist with corporate crisis response?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Yes. Our turn-key crisis management team provides rapid-deployment advisory covering liquidity stabilization, regulatory escalation, stakeholder communication, and board-level risk mitigation.</p></div></div>
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
                <h2 class="ip-title">Transform Your Corporate Strategy Today</h2>
                <p>Schedule a confidential executive consultation with Devotion Global’s Corporate Advisory Desk to align your strategic goals.</p>
                <a href="mailto:contact@devotioncsp.com" class="ip-btn ip-btn--pill">Schedule Executive Consultation</a>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
