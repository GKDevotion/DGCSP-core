<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$img = BASE_URL . BASE_FOLDER . '/assets/images/accounting-tax';
$obj = BASE_URL . BASE_FOLDER . '/assets/images/objects';
?>

<!-- AEO / SEO / GEO JSON-LD Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://www.devotioncsp.com/#organization",
            "name": "Devotion Global CSP",
            "url": "https://www.devotioncsp.com",
            "logo": "https://www.devotioncsp.com/logo.png"
        },
        {
            "@type": "Service",
            "@id": "https://www.devotioncsp.com/accounting-tax-services/#service",
            "name": "Accounting, Tax & Financial Services",
            "provider": {
                "@id": "https://www.devotioncsp.com/#organization"
            },
            "serviceType": "Financial & Tax Advisory Services",
            "description": "Full-spectrum accounting, bookkeeping, VAT filing, corporate tax compliance, transfer pricing, and fractional CFO advisory services for global enterprises.",
            "areaServed": "Global",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Accounting & Tax Catalog",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Bookkeeping Services"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Financial Reporting"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Payroll Processing"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "VAT / GST Registration & Filing"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Corporate Tax Compliance"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Tax Advisory"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "International Tax Planning"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Transfer Pricing"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Audit Support"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "CFO Services"
                        }
                    }
                ]
            }
        },
        {
            "@type": "FAQPage",
            "@id": "https://www.devotioncsp.com/accounting-tax-services/#faq",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "How does Devotion Global CSP handle multi-jurisdictional tax filings?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Devotion Global CSP leverages localized tax experts across major financial hubs to ensure all statutory income tax returns, VAT/GST filings, and financial reports strictly comply with regional tax authority mandates."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is Transfer Pricing documentation and why is it mandatory?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Transfer pricing documentation proves that transactions between associated corporate entities occur at arm's length. Multinational firms require it to comply with OECD rules and prevent heavy tax penalties."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does cross-border tax advisory benefit multinational entities?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Cross-border tax planning optimizes double-taxation treaties, ensures BEPS and transfer pricing compliance, minimizes tax exposure, and harmonizes financial reporting across regional subsidiaries."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What comprehensive tax and accounting services does Devotion Global CSP offer?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Devotion Global CSP provides ten core financial service modules: Bookkeeping Services, Financial Reporting, Payroll Processing, VAT/GST Filings, Corporate Tax Compliance, Tax Advisory, International Tax Planning, Transfer Pricing, Audit Support, and Strategic CFO Services."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can you manage VAT / GST registration and returns in several countries?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Devotion Global CSP handles cross-border VAT / GST registration, periodical return preparation, input tax credit optimization, and tax authority query resolution for multinational entities."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you support statutory audits and external auditor requests?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Our audit support covers audit file preparation, documentation aggregation, liaison with external statutory auditors, internal control evaluations, and remediation of audit findings."
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
        <img src="<?= $img ?>/hero-bg.webp" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
        <div class="container ip-hero__content">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <p class="ip-eyebrow" data-aos="fade-right">Devotion Global CSP Solutions</p>
                    <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                    <h1 data-aos="fade-right" data-aos-delay="150">Global Accounting &amp;<br><span class="ip-gold">Tax Advisory</span></h1>
                    <p data-aos="fade-right" data-aos-delay="300">Streamline global financial reporting, ensure multi-jurisdictional tax compliance, and optimize international enterprise operations under one unified platform.</p>
                    <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Request Consultation</a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. WHAT ARE GLOBAL ACCOUNTING & CORPORATE TAX SERVICES -->
    <section class="ip-about">
        <div class="ip-float ip-float--a d-none d-md-block" style="top: 12%; left: 3%; width: 70px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
        <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 4%; width: 90px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="<?= $img ?>/accounting-sketch.webp" alt="Accounting, audit, report, calculation, balance, analyze and consult workflow" class="ip-about__img" width="2488" height="1660" loading="lazy">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <h2 class="ip-title">What are Global Accounting &amp; Corporate Tax Services?</h2>
                    <span class="ip-line"></span>
                    <p><strong>Global Accounting &amp; Tax Advisory</strong> encompasses multi-currency bookkeeping, statutory financial reporting, international payroll processing, corporate tax compliance, transfer pricing, and fractional CFO advisory, ensuring international entities remain legally compliant across every operational jurisdiction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICES MODULES -->
    <section class="ip-suite" id="services">
        <canvas class="ip-constellation" aria-hidden="true"></canvas>
        <div class="ip-float ip-float--c d-none d-md-block" style="bottom: 6%; left: 3%; width: 80px;"><img src="<?= $obj ?>/cap-triangle.png" alt=""></div>
        <div class="container">
            <div class="ip-suite__head" data-aos="fade-up">
                <span class="ip-pill">Solutions Suite</span>
                <h2 class="ip-title">Comprehensive Financial &amp; Tax Services</h2>
                <p class="ip-sub">Tailored corporate finance and regulatory tax advisory modules designed for multinational holdings and cross-border expansion.</p>
            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Bookkeeping Services</h3>
                            <img src="<?= $img ?>/bookkeeping-service.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Maintain accurate multi-currency financial ledgers aligned with local and international accounting standards.</p>
                        <ul class="ip-card__list">
                            <li>General ledger management</li>
                            <li>Accounts payable &amp; receivable</li>
                            <li>Bank reconciliations</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Financial Reporting</h3>
                            <img src="<?= $img ?>/financial-report.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Consolidated balance sheets, income statements, and management accounts optimized for stakeholders and audits.</p>
                        <ul class="ip-card__list">
                            <li>IFRS / GAAP financial statements</li>
                            <li>Profit &amp; Loss statement generation</li>
                            <li>Management reporting packs</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Payroll Processing</h3>
                            <img src="<?= $img ?>/payroll-procesing.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Compliant multi-country payroll calculations, statutory social security deductions, and direct employee disbursements.</p>
                        <ul class="ip-card__list">
                            <li>Gross-to-net pay calculations</li>
                            <li>Statutory withholding &amp; tax filings</li>
                            <li>Direct wage disbursements</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">VAT / GST Registration</h3>
                            <img src="<?= $img ?>/vat-gst.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">End-to-end indirect tax registration, return preparations, and cross-border value-added tax compliance.</p>
                        <ul class="ip-card__list">
                            <li>Cross-border VAT / GST registration</li>
                            <li>Periodical return preparations</li>
                            <li>Input tax credit optimization</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Corporate Tax Compliance</h3>
                            <img src="<?= $img ?>/corporate-tax.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Annual corporate income tax calculations, filing submissions, and proactive local tax liability management.</p>
                        <ul class="ip-card__list">
                            <li>Annual corporate tax returns</li>
                            <li>Tax provision calculations</li>
                            <li>Local tax authority filings</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Tax Advisory</h3>
                            <img src="<?= $img ?>/tax-advisory.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Strategic tax guidance designed to minimize global liabilities while remaining fully compliant with regional tax codes.</p>
                        <ul class="ip-card__list">
                            <li>Cross-border tax optimization</li>
                            <li>Double taxation treaty planning</li>
                            <li>Merger &amp; acquisition tax structuring</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">International Tax Planning</h3>
                            <img src="<?= $img ?>/international-tax.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Holistic multinational tax structure design to protect international revenue streams and holdings.</p>
                        <ul class="ip-card__list">
                            <li>Holding company tax structuring</li>
                            <li>BEPS regulations alignment</li>
                            <li>Profit repatriation strategies</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Transfer Pricing</h3>
                            <img src="<?= $img ?>/transfer-pricing.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Arm's-length documentation, intercompany pricing policies, and compliance with OECD guidelines.</p>
                        <ul class="ip-card__list">
                            <li>Transfer pricing documentation</li>
                            <li>Intercompany agreement review</li>
                            <li>Master &amp; Local file preparation</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Audit Support</h3>
                            <img src="<?= $img ?>/audit-support.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Audit readiness preparation, documentation aggregation, and liaison with external statutory auditors.</p>
                        <ul class="ip-card__list">
                            <li>Audit file preparation</li>
                            <li>Auditor liaison management</li>
                            <li>Internal control evaluations</li>
                        </ul>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. FAQ -->
    <section class="ip-faq">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <!-- FAQ illustration (inline SVG, brand gold) -->
                    <svg class="ip-faq__art" viewBox="0 0 360 300" role="img" aria-label="FAQ">
                        <defs>
                            <linearGradient id="ipGold" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0" stop-color="#f3d78a"/><stop offset="0.55" stop-color="#d4a548"/><stop offset="1" stop-color="#ab8139"/>
                            </linearGradient>
                            <linearGradient id="ipDark" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0" stop-color="#5b5e63"/><stop offset="1" stop-color="#34363a"/>
                            </linearGradient>
                            <filter id="ipShadow" x="-20%" y="-20%" width="140%" height="150%"><feDropShadow dx="0" dy="10" stdDeviation="9" flood-color="#000" flood-opacity="0.28"/></filter>
                        </defs>
                        <g filter="url(#ipShadow)">
                            <path d="M70 90 Q70 62 98 62 H300 Q330 62 330 90 V190 Q330 218 300 218 H190 L140 262 L146 218 H98 Q70 218 70 190 Z" fill="url(#ipDark)"/>
                        </g>
                        <text x="200" y="176" text-anchor="middle" font-family="Poppins, Arial, sans-serif" font-weight="800" font-size="84" fill="url(#ipGold)" stroke="#8a6a2c" stroke-width="1.5">FAQ</text>
                        <g filter="url(#ipShadow)">
                            <path d="M18 70 Q18 24 62 24 H92 Q134 24 134 68 Q134 106 96 112 L86 132 L76 112 Q18 112 18 70 Z" fill="url(#ipGold)"/>
                        </g>
                        <text x="76" y="92" text-anchor="middle" font-family="Poppins, Arial, sans-serif" font-weight="800" font-size="64" fill="#5a3f10">?</text>
                        <g stroke="url(#ipGold)" stroke-width="7" stroke-linecap="round">
                            <line x1="268" y1="22" x2="280" y2="44"/><line x1="298" y1="38" x2="322" y2="52"/><line x1="304" y1="72" x2="334" y2="74"/>
                        </g>
                    </svg>
                    <div class="ip-faq__tag">
                        <i class="fa-regular fa-lightbulb" aria-hidden="true"></i>
                        <span class="ip-pill">AI &amp; Search Insights</span>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <p class="ip-faq__lead">Clear answers to global entity management queries for decision-makers and automated search engines.</p>
                </div>
                <div class="col-lg-7">
                    <div class="ip-acc">
                    <div class="ip-acc-item is-open" data-aos="fade-left" data-aos-delay="0">
                        <button class="ip-acc-btn" type="button" aria-expanded="true" aria-controls="ipFaq0" id="ipFaqBtn0">
                            <span>How does Devotion Global CSP handle multi-jurisdictional tax filings?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                        </button>
                        <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>Devotion Global CSP leverages localized tax experts across major financial hubs to ensure all statutory income tax returns, VAT/GST filings, and financial reports strictly comply with regional tax authority mandates.</p></div></div>
                    </div>
                    <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                        <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                            <span>What is Transfer Pricing documentation and why is it mandatory?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                        </button>
                        <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Transfer pricing documentation proves that transactions between associated corporate entities occur at arm's length. Multinational firms require it to comply with OECD rules and prevent heavy tax penalties.</p></div></div>
                    </div>
                    <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                        <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                            <span>How does cross-border tax advisory benefit multinational entities?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                        </button>
                        <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Cross-border tax planning optimizes double-taxation treaties, ensures BEPS and transfer pricing compliance, minimizes tax exposure, and harmonizes financial reporting across regional subsidiaries.</p></div></div>
                    </div>
                    <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="240">
                        <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq3" id="ipFaqBtn3">
                            <span>What comprehensive tax and accounting services does Devotion Global CSP offer?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                        </button>
                        <div class="ip-acc-panel" id="ipFaq3" role="region" aria-labelledby="ipFaqBtn3"><div><p>Devotion Global CSP provides ten core financial service modules: Bookkeeping Services, Financial Reporting, Payroll Processing, VAT/GST Filings, Corporate Tax Compliance, Tax Advisory, International Tax Planning, Transfer Pricing, Audit Support, and Strategic CFO Services.</p></div></div>
                    </div>
                    <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="320">
                        <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq4" id="ipFaqBtn4">
                            <span>Can you manage VAT / GST registration and returns in several countries?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                        </button>
                        <div class="ip-acc-panel" id="ipFaq4" role="region" aria-labelledby="ipFaqBtn4"><div><p>Yes. Devotion Global CSP handles cross-border VAT / GST registration, periodical return preparation, input tax credit optimization, and tax authority query resolution for multinational entities.</p></div></div>
                    </div>
                    <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="400">
                        <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq5" id="ipFaqBtn5">
                            <span>Do you support statutory audits and external auditor requests?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                        </button>
                        <div class="ip-acc-panel" id="ipFaq5" role="region" aria-labelledby="ipFaqBtn5"><div><p>Yes. Our audit support covers audit file preparation, documentation aggregation, liaison with external statutory auditors, internal control evaluations, and remediation of audit findings.</p></div></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CALL TO ACTION -->
    <section class="ip-cta" id="contact">
        <img src="<?= $img ?>/cta-bg.webp" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
        <div class="container ip-cta__content">
            <div class="row">
                <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                    <h2 class="ip-title">Optimize Your Global Entity<br>Governance Today</h2>
                    <p>Partner with Devotion Global CSP for seamless compliance across all operational territories.</p>
                    <a href="mailto:contact@devotioncsp.com" class="ip-btn ip-btn--pill">Speak with a CSP Advisor</a>
                </div>
            </div>
        </div>
    </section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
