<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/merger-acquisition';
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
          "name": "Devotion Global M&A Advisory Provider",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global corporate advisory and business outsourcing provider delivering full-lifecycle Mergers & Acquisitions, valuation, and post-merger integration support.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "M&A Transaction Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "German", "Japanese"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/mergers-and-acquisitions#service",
          "name": "Devotion Global M&A Advisory Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "Buy-side and sell-side deal advisory, financial due diligence support, Virtual Data Room (VDR) administration, and post-close integration execution.",
          "areaServed": "Global",
          "category": "Corporate Finance & M&A Advisory"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/mergers-and-acquisitions#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What M&A advisory services does Devotion Global provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global provides end-to-end M&A advisory including target identification, sell-side preparation, financial due diligence support, Virtual Data Room (VDR) operations, deal structuring assistance, and post-merger integration (PMI)."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global protect confidential transaction data during M&A deals?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We enforce bank-grade Virtual Data Rooms (VDR), strict multi-layer NDAs, ISO 27001 data encryption standards, and zero-trust access control for all deal participants."
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
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Strategic M&amp;A Execution</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Mergers &amp; Acquisitions<br><span class="ip-gold">Advisory</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Guiding corporations, private equity funds, and founder-led businesses through buy-side acquisitions, sell-side transactions, due diligence, and seamless post-merger integration.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request Confidential M&amp;A Consultation</a>
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
            <h2 class="ip-title">Full-Lifecycle M&amp;A Services</h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Sell-Side Transaction Advisory</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Maximizing business valuation through confidential teaser preparation, confidential information memorandum (CIM) creation, and auction process management.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Buy-Side Target Acquisition</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Strategic target identification, proprietary deal pipeline sourcing, valuation modeling, and synergistic transaction structuring.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Financial &amp; Quality of Earnings (QofE)</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Comprehensive due diligence support analyzing historical EBITDA quality, working capital pegs, and balance sheet exposure.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Virtual Data Room (VDR) Administration</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-folder-open"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Secure setup, index creation, permission governance, and real-time bidder access monitoring in bank-grade virtual environment.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Post-Merger Integration (PMI)</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-puzzle-piece"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Operational day-one readiness planning, system migration, synergy capture execution, and organizational cultural alignment.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Cross-Border Joint Venture Structuring</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-link"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Structuring cross-border alliances, JV governance frameworks, regulatory filings support, and multi-currency deal escrow.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- 3. PROCESS / PHASES -->
<section class="ip-steps">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 4%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">The 4-Phase M&amp;A Execution Framework</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4 ip-steps__row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-step">
                    <span class="ip-step__num">01</span>
                    <span class="ip-step__label">Phase 01</span>
                    <h3>Strategy &amp; Readiness</h3>
                    <p>Valuation assessment, strategic alignment, CIM preparation, and target profiling.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-step">
                    <span class="ip-step__num">02</span>
                    <span class="ip-step__label">Phase 02</span>
                    <h3>Outreach &amp; LOI</h3>
                    <p>Confidential outreach, VDR launch, non-binding Letter of Intent (LOI) negotiations.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-step">
                    <span class="ip-step__num">03</span>
                    <span class="ip-step__label">Phase 03</span>
                    <h3>Due Diligence &amp; SPA</h3>
                    <p>QofE reviews, legal due diligence support, Definitive Purchase Agreement (SPA) drafting.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-step">
                    <span class="ip-step__num">04</span>
                    <span class="ip-step__label">Phase 04</span>
                    <h3>Closing &amp; PMI</h3>
                    <p>Funds transfer oversight, regulatory sign-offs, and 100-day post-merger integration plan.</p>
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
                    <span class="ip-stat__num ip-count">$12B+</span>
                    <span class="ip-stat__label">Total M&amp;A Volume Supported</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="120">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num ip-count">250+</span>
                    <span class="ip-stat__label">Completed Transactions</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="240">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num ip-count">98%</span>
                    <span class="ip-stat__label">Due Diligence Accuracy</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="360">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num ip-count">35 Days</span>
                    <span class="ip-stat__label">Avg. VDR Setup &amp; Closing</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPLIANCE / SECURITY -->
<section class="ip-badges">
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Bank-Grade Security &amp; Information Protection</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-badge"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>ISO 27001 Data Vault</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-badge"><i class="fa-solid fa-certificate" aria-hidden="true"></i><span>SOC 2 Type II VDR</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-badge"><i class="fa-solid fa-lock" aria-hidden="true"></i><span>Strict Multi-Tier NDAs</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-badge"><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span>FINRA / SEC Compliance Support</span></div>
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
                        <span>How does Devotion Global support Sell-Side business owners?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>We handle end-to-end deal administration—from preparing financial teasers and managing the Virtual Data Room (VDR) to screening buyers and assisting in final contract negotiation.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>What is included in Post-Merger Integration (PMI) support?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Our integration desk manages 100-day post-close action plans, customer support consolidation, IT infrastructure migration, payroll handovers, and corporate culture alignment.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>Do you assist with cross-border M&amp;A transactions?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Yes. Our global transaction desk supports cross-border deals across North America, Europe, Asia-Pacific, and Latin America with multi-currency escrow support and localized regulatory compliance.</p></div></div>
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
                <h2 class="ip-title">Ready to Explore an M&amp;A Transaction?</h2>
                <p>Schedule a strictly confidential consultation with Devotion Global’s M&amp;A Advisory Desk to evaluate your transaction roadmap.</p>
                <a href="mailto:contact@devotioncsp.com" class="ip-btn ip-btn--pill">Request Confidential M&amp;A Consultation</a>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
