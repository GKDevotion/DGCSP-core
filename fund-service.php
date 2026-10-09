<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/fund-service';
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
          "description": "Global BPO and specialized financial customer service provider offering 24/7 fund support, compliance, and administration solutions.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Support",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "Arabic"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/fund-services#service",
          "name": "Devotion Global Fund Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "End-to-end fund administration, investor support, capital call execution, and regulatory KYC/AML verification.",
          "areaServed": "Global",
          "category": "Fund Administration & Investor Support"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/fund-services#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What fund services does Devotion Global provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global offers end-to-end fund administration, 24/7 investor relations support, NAV calculation support, KYC/AML compliance screening, capital call assistance, and escrow transaction handling."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global ensure data security for financial funds?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global adheres to SOC 1 Type II, SOC 2 Type II, and ISO 27001 standards, utilizing end-to-end encryption for all investor portal access and transaction data."
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
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Institutional Grade Support</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Devotion Global<br><span class="ip-gold">Fund Services</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Empowering investment managers, private equity funds, and venture firms with seamless global customer service, investor administration, and regulatory compliance solutions.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request a Consultation</a>
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
            <h2 class="ip-title">Our Comprehensive Fund Solutions</h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">24/7 Investor Desk Support</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-headset"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Multilingual, round-the-clock helpdesk providing rapid inquiry resolution for institutional and retail limited partners (LPs).</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Fund Accounting &amp; NAV Assistance</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Operational support for daily/monthly Net Asset Value (NAV) reconciliations, fee calculations, and reporting verification.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">KYC / AML Onboarding</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-user-check"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Automated and manual Identity Verification (IDV), Anti-Money Laundering screening, and continuous investor compliance checkups.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Capital Call &amp; Distribution Desk</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-money-bill-transfer"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Precision management of capital call notifications, wire confirmation follow-ups, and dividend payout communication.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Digital LP Portal Management</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-laptop"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Dedicated technical assistance guiding fund clients through reporting portal access, multi-factor authentication, and statement retrieval.</p>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Escrow &amp; Settlement Operations</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-scale-balanced"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Direct assistance with transaction reconciliation, subscription tracking, and escrow confirmation workflows.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- 3. WHY US -->
<section class="ip-why">
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 4%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Why Leading Fund Managers Partner With Us</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                <article class="ip-card">
                    <h3 class="ip-card__title">99.9% SLA Commitment</h3>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">We operate strictly under contractually backed service level agreements to ensure fast query turnarounds and operational continuity.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="130">
                <article class="ip-card">
                    <h3 class="ip-card__title">Multi-Jurisdictional Reach</h3>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Full operational readiness tailored for funds domiciled in the US, Cayman Islands, Luxembourg, Singapore, and Europe.</p>
                </article>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="260">
                <article class="ip-card">
                    <h3 class="ip-card__title">Bank-Grade Security</h3>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">ISO 27001 certified and SOC 2 Type II compliant processes engineered to protect sensitive investor financial records.</p>
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
                    <span class="ip-stat__num ip-count">$15B+</span>
                    <span class="ip-stat__label">Assets Under Support</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="120">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num ip-count">24/7/365</span>
                    <span class="ip-stat__label">Multilingual Availability</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="240">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num ip-count">99.8%</span>
                    <span class="ip-stat__label">Investor Satisfaction</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="360">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num ip-count">15 Min</span>
                    <span class="ip-stat__label">Avg. Inquiry Response</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPLIANCE / SECURITY -->
<section class="ip-badges">
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Regulatory &amp; Compliance Infrastructure</h2><span class="ip-line" style="margin: 1rem auto 0;"></span></div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-badge"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i><span>SOC 1 Type II</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <div class="ip-badge"><i class="fa-solid fa-certificate" aria-hidden="true"></i><span>SOC 2 Type II</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="ip-badge"><i class="fa-solid fa-lock" aria-hidden="true"></i><span>ISO 27001 Certified</span></div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="360">
                <div class="ip-badge"><i class="fa-solid fa-circle-check" aria-hidden="true"></i><span>GDPR &amp; CCPA Compliant</span></div>
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
                        <span>What types of funds does Devotion Global support?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>We support Hedge Funds, Private Equity (PE) firms, Venture Capital (VC) funds, Real Estate Funds, and Mutual Funds across domestic and offshore jurisdictions.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                        <span>Can Devotion Global integrate with our existing CRM and software?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Yes. Our team integrates directly with leading fund software like FIS, Investran, Allvue, Salesforce Financial Services Cloud, and custom investor portals.</p></div></div>
                </div>
                <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                    <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                        <span>How do you handle multilingual investor communications?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Our global desks provide native support in English, Mandarin, Spanish, French, German, and Arabic to serve international LP bases seamlessly.</p></div></div>
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
                <h2 class="ip-title">Optimize Your Fund Operations Today</h2>
                <p>Partner with Devotion Global Customer Service Provider for institutional-grade fund administration and 24/7 LP desk support.</p>
                <a href="mailto:contact@devotioncsp.com" class="ip-btn ip-btn--pill">Request a Consultation</a>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
