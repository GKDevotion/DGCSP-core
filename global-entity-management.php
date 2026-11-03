<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$img = BASE_URL . BASE_FOLDER . '/assets/images/global-entity-management';
$obj = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';
?>

<!-- JSON-LD Structured Data for SEO / AEO / GEO -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://www.devotioncsp.com/#organization",
            "name": "Devotion Global CSP",
            "url": "https://www.devotioncsp.com",
            "logo": "https://www.devotioncsp.com/logo.png",
            "sameAs": [
                "https://www.linkedin.com/company/devotion-global-csp"
            ]
        },
        {
            "@type": "Service",
            "@id": "https://www.devotioncsp.com/global-entity-management/#service",
            "name": "Global Entity Management",
            "provider": {
                "@id": "https://www.devotioncsp.com/#organization"
            },
            "serviceType": "Corporate Services Provider",
            "description": "Comprehensive global entity management, multi-jurisdictional incorporation, annual compliance filings, and statutory record governance.",
            "areaServed": "Global",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Global Corporate Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Company Incorporation"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Corporate Secretarial Services"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Annual Compliance & Filings"
                        }
                    }
                ]
            }
        },
        {
            "@type": "FAQPage",
            "@id": "https://www.devotioncsp.com/global-entity-management/#faq",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What is Global Entity Management?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Global Entity Management is a centralized service provided by Corporate Service Providers (CSPs) to oversee, maintain, and ensure local legal compliance for a multinational enterprise's subsidiaries, branches, and affiliates across different jurisdictions."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Why do expanding companies need centralized corporate secretarial services?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Centralizing corporate secretarial services prevents compliance blind spots, avoids legal penalties due to missed local deadlines, lowers administrative costs, and provides leadership with a transparent overview of all global subsidiaries."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does Devotion Global CSP handle multi-jurisdictional filings?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Devotion Global CSP combines local jurisdictional expertise with a single point of administrative control, ensuring every statutory return, tax filing, and license renewal adheres precisely to local legislation."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can Devotion Global CSP set up a new entity in another jurisdiction?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. We fast-track local and cross-border entity setup with complete legal incorporation across premier global financial hubs, including entity classification and structuring, statutory registration filings, and operational setup with local tax IDs."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you provide a registered office address and mail handling?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Our registered office services fulfill statutory address obligations using official commercial addresses and local mail processing networks, with mail scanning, legal correspondence routing, and statutory representation support."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do you keep our entities compliant with annual filings and licenses?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "We guarantee on-time submission of mandatory annual returns, financial statements, and regulatory declarations with automated filing deadline alerts, and we acquire, track, and renew specialized business licenses and permits automatically."
                    }
                }
            ]
        }
    ]
}
</script>

<!-- Shared inner-page theme -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<main>

    <!-- 1. HERO -->
    <header class="ip-hero">
        <img src="<?= $img ?>/hero-bg.webp?v=<?= FILE_VERSISON ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
        <div class="container ip-hero__content">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Global Entity Services</p>
                    <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                    <h1 data-aos="fade-right" data-aos-delay="150">Your Global Presence,<br><span class="ip-gold">Our Expertise.</span></h1>
                    <p data-aos="fade-right" data-aos-delay="300">Centralize governance, accelerate cross-border expansion, and maintain strict jurisdictional compliance across your international corporate structures.</p>
                    <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Consult an Entity Expert</a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. WHAT IS GLOBAL ENTITY MANAGEMENT -->
    <section class="ip-about">
        <div class="ip-float ip-float--a d-none d-md-block" style="top: 8%; left: 2%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
        <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 4%; width: 90px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="zoom-in">
                    <img src="<?= $img ?>/entity-overview.webp" alt="Global expansion, our expertise" class="ip-about__img img-fluid" style="max-width: 600px;" width="1580" height="1012" loading="lazy">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <h2 class="ip-title">What is Global Entity Management?</h2>
                    <span class="ip-line"></span>
                    <p><strong>Global Entity Management (GEM)</strong> is a centralized corporate governance framework that ensures a multinational organization's subsidiaries, branches, and legal entities remain fully compliant with regional statutory regulations, annual filings, and corporate secretarial laws worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CORE SERVICES -->
    <section class="ip-suite" id="services">
        <canvas class="ip-constellation" aria-hidden="true"></canvas>
        <div class="ip-float ip-float--c d-none d-md-block" style="bottom: 6%; left: 3%; width: 70px;"><img src="<?= $obj ?>/yellow-square.png" alt=""></div>
        <div class="container">
            <div class="ip-suite__head text-center" data-aos="fade-up">
                <span class="ip-pill">Solutions Overview</span>
                <h2 class="ip-title">Core Corporate Entity Services</h2>
                <p class="ip-sub">An integrated suite of legal entity management solutions designed for international businesses and holding operations.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Company Incorporation</h3>
                            <img src="<?= $img ?>/company-corporation.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Fast-track local and cross-border entity setup with complete legal incorporation across premier global financial hubs.</p>
                        <ul class="ip-card__list">
                            <li>Entity classification &amp; structuring</li>
                            <li>Statutory registration filings</li>
                            <li>Operational setup &amp; local tax IDs</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Global Business Expansion</h3>
                            <img src="<?= $img ?>/global-business.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Seamlessly enter target international markets with structured market-entry blueprints and administrative backing.</p>
                        <ul class="ip-card__list">
                            <li>Cross-border legal structuring</li>
                            <li>Jurisdictional readiness audits</li>
                            <li>Operational launch management</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Registered Office Services</h3>
                            <img src="<?= $img ?>/registered.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Fulfill statutory address obligations using official commercial addresses and local mail processing networks.</p>
                        <ul class="ip-card__list">
                            <li>Official corporate address provision</li>
                            <li>Mail scan &amp; legal correspondence</li>
                            <li>Statutory representation support</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Corporate Secretarial</h3>
                            <img src="<?= $img ?>/corporate-sacratrail.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Maintain accurate statutory minute books, board resolutions, and officer appointment registries.</p>
                        <ul class="ip-card__list">
                            <li>Board resolution drafting</li>
                            <li>Share register &amp; director changes</li>
                            <li>Statutory minute book</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Annual Compliance</h3>
                            <img src="<?= $img ?>/annual-compliance.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Guarantee on-time submission of mandatory annual returns, financial statements, and regulatory declarations.</p>
                        <ul class="ip-card__list">
                            <li>Automated filing deadline alerts</li>
                            <li>Annual return submissions</li>
                            <li>Regulatory portal synchronization</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Entity Governance</h3>
                            <img src="<?= $img ?>/entity-governance.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Implement unified governance standards across subsidiaries to maintain full visibility and risk control.</p>
                        <ul class="ip-card__list">
                            <li>Entity health scoring</li>
                            <li>Cross-border corporate consistency</li>
                            <li>Director oversight management</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Statutory Record Management</h3>
                            <img src="<?= $img ?>/record-management.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Centralize ownership structures, certificates, and constitutional documents in secure, audit-ready vaults.</p>
                        <ul class="ip-card__list">
                            <li>Encrypted document repository</li>
                            <li>Real-time audit log tracking</li>
                            <li>Role-based access permissions</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Business License Management</h3>
                            <img src="<?= $img ?>/contract_1.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Acquire, track, and renew specialized industry permits and municipal business licenses automatically.</p>
                        <ul class="ip-card__list">
                            <li>Permit acquisition &amp; renewal</li>
                            <li>Local authority coordination</li>
                            <li>License gap analysis</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                        <div class="ip-card__head">
                            <h3 class="ip-card__title" itemprop="name">Compliance Monitoring</h3>
                            <img src="<?= $img ?>/compliance-monitoring.svg" alt="" class="ip-card__icon" width="56" height="56" loading="lazy">
                        </div>
                        <span class="ip-card__divider"></span>
                        <p class="ip-card__desc" itemprop="description">Gain active tracking over regulatory changes and corporate status across every region of operation.</p>
                        <ul class="ip-card__list">
                            <li>Real-time status tracking</li>
                            <li>Jurisdictional law update alerts</li>
                            <li>Interactive compliance dashboards</li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE CAPABILITIES (SOLUTIONS MATRIX) -->
    <section class="gem-solutions-section" id="core-solutions">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="ip-pill">Comprehensive Coverage</span>
                <h2 class="ip-title">Our Global Entity Management Capabilities</h2>
                <p class="ip-sub">Seamlessly manage corporate compliance, governance, and entity lifecycles across key international jurisdictions.</p>
            </div>

            <div class="solutions-grid">
                <article class="solution-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="icon-wrapper">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 10h4M6 14h4M6 18h4M14 10h4M14 14h4M14 18h4M9 3l3-2 3 2"/></svg>
                    </div>
                    <h3>Global Incorporation & Setup</h3>
                    <p>Rapid setup of subsidiaries, branch offices, and holding companies tailored to local regulatory frameworks.</p>
                    <ul class="feature-list">
                        <li>Local entity registration</li>
                        <li>Tax ID & bank account setup support</li>
                    </ul>
                </article>

                <article class="solution-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="icon-wrapper">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>
                    </div>
                    <h3>Corporate Secretarial & Compliance</h3>
                    <p>Keep your corporate records accurate and up to date while satisfying local statutory requirements.</p>
                    <ul class="feature-list">
                        <li>Annual statutory filings</li>
                        <li>Board minute & register maintenance</li>
                    </ul>
                </article>

                <article class="solution-card" data-aos="fade-up" data-aos-delay="240">
                    <div class="icon-wrapper">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <h3>Governance & Risk Mitigation</h3>
                    <p>Mitigate regulatory non-compliance across all entities with ongoing health monitoring and audits.</p>
                    <ul class="feature-list">
                        <li>Directorship & officer tracking</li>
                        <li>Compliance gap analysis</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. PROCESS WORKFLOW -->
    <section class="gem-process-section" id="how-it-works">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="ip-pill">Structured Workflow</span>
                <h2 class="ip-title">How We Streamline Your Global Fleet</h2>
                <p class="ip-sub">A simple 4-step framework to consolidate multi-country entity operations and eliminate administrative friction.</p>
            </div>

            <div class="process-steps">
                <div class="step-item" data-aos="fade-up" data-aos-delay="0">
                    <div class="step-number">01</div>
                    <h3>Discovery & Audit</h3>
                    <p>We review your global entities, assessing current legal status, active filings, and compliance standing.</p>
                </div>

                <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">02</div>
                    <h3>Centralized Onboarding</h3>
                    <p>Migrate all legal records, key renewal dates, and ownership structures into a single organized structure.</p>
                </div>

                <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">03</div>
                    <h3>Local Execution</h3>
                    <p>Deploy dedicated local corporate secretarial experts to manage filings and handle regulatory updates.</p>
                </div>

                <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">04</div>
                    <h3>Continuous Oversight</h3>
                    <p>Proactive renewal tracking, regular health checks, and complete oversight across all active jurisdictions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. GLOBAL REACH -->
    <section class="gem-reach-section" id="global-reach">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="ip-pill">Worldwide Support</span>
                <h2 class="ip-title">Global Reach Across Major Financial Hubs</h2>
                <p class="ip-sub">Maintain consistent governance and regulatory compliance across all major international markets with localized expertise.</p>
            </div>

            <div class="reach-grid">
                <div class="reach-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="reach-region">Americas</div>
                    <h3>North & Latin America</h3>
                    <p>Full support for cross-border operations, entity formations, and ongoing governance compliance across key Western economies.</p>
                    <ul class="reach-list">
                        <li>United States (Delaware & Multi-State)</li>
                        <li>Cayman Islands & BVI</li>
                        <li>Brazil, Mexico, & Colombia</li>
                    </ul>
                </div>

                <div class="reach-card" data-aos="fade-up" data-aos-delay="120">
                    <div class="reach-region">EMEA</div>
                    <h3>Europe, Middle East & Africa</h3>
                    <p>Navigate complex regional legal requirements and statutory reporting obligations across European and Gulf centers.</p>
                    <ul class="reach-list">
                        <li>United Kingdom & Ireland</li>
                        <li>Netherlands, Luxembourg, & Germany</li>
                        <li>UAE (Free Zones & Mainland)</li>
                    </ul>
                </div>

                <div class="reach-card" data-aos="fade-up" data-aos-delay="240">
                    <div class="reach-region">APAC</div>
                    <h3>Asia-Pacific</h3>
                    <p>Streamline corporate actions, directorship services, and local annual filings throughout rapidly expanding Asian commercial hubs.</p>
                    <ul class="reach-list">
                        <li>Singapore & Hong Kong</li>
                        <li>Australia & New Zealand</li>
                        <li>India & Southeast Asia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FAQ -->
    <section class="ip-faq">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <img src="<?= $faqArt ?>" alt="FAQ" class="ip-faq__art img-fluid" width="811" height="582" loading="lazy">
                    <div class="ip-faq__tag">
                        <img src="<?= $img ?>/skill-development_1.svg" alt="" width="44" height="44" loading="lazy">
                        <span class="ip-pill">AI &amp; Search Insights</span>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <p class="ip-faq__lead">Clear answers to global entity management queries for decision-makers and automated search engines.</p>
                </div>
                <div class="col-lg-7">
                    <div class="ip-acc">
                        <div class="ip-acc-item is-open" data-aos="fade-left" data-aos-delay="0">
                            <button class="ip-acc-btn" type="button" aria-expanded="true" aria-controls="ipFaq0" id="ipFaqBtn0">
                                <span>What is Global Entity Management?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ip-acc-panel" id="ipFaq0" role="region" aria-labelledby="ipFaqBtn0"><div><p>Global Entity Management is a centralized service provided by Corporate Service Providers (CSPs) to oversee, maintain, and ensure local legal compliance for a multinational enterprise's subsidiaries, branches, and affiliates across different jurisdictions.</p></div></div>
                        </div>
                        <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="80">
                            <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq1" id="ipFaqBtn1">
                                <span>Why do expanding companies need centralized corporate secretarial services?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ip-acc-panel" id="ipFaq1" role="region" aria-labelledby="ipFaqBtn1"><div><p>Centralizing corporate secretarial services prevents compliance blind spots, avoids legal penalties due to missed local deadlines, lowers administrative costs, and provides leadership with a transparent overview of all global subsidiaries.</p></div></div>
                        </div>
                        <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="160">
                            <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq2" id="ipFaqBtn2">
                                <span>How does Devotion Global CSP handle multi-jurisdictional filings?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ip-acc-panel" id="ipFaq2" role="region" aria-labelledby="ipFaqBtn2"><div><p>Devotion Global CSP combines local jurisdictional expertise with a single point of administrative control, ensuring every statutory return, tax filing, and license renewal adheres precisely to local legislation.</p></div></div>
                        </div>
                        <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="240">
                            <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq3" id="ipFaqBtn3">
                                <span>Can Devotion Global CSP set up a new entity in another jurisdiction?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ip-acc-panel" id="ipFaq3" role="region" aria-labelledby="ipFaqBtn3"><div><p>Yes. We fast-track local and cross-border entity setup with complete legal incorporation across premier global financial hubs, including entity classification and structuring, statutory registration filings, and operational setup with local tax IDs.</p></div></div>
                        </div>
                        <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="320">
                            <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq4" id="ipFaqBtn4">
                                <span>Do you provide a registered office address and mail handling?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ip-acc-panel" id="ipFaq4" role="region" aria-labelledby="ipFaqBtn4"><div><p>Yes. Our registered office services fulfill statutory address obligations using official commercial addresses and local mail processing networks, with mail scanning, legal correspondence routing, and statutory representation support.</p></div></div>
                        </div>
                        <div class="ip-acc-item" data-aos="fade-left" data-aos-delay="400">
                            <button class="ip-acc-btn" type="button" aria-expanded="false" aria-controls="ipFaq5" id="ipFaqBtn5">
                                <span>How do you keep our entities compliant with annual filings and licenses?</span><span class="ip-acc-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ip-acc-panel" id="ipFaq5" role="region" aria-labelledby="ipFaqBtn5"><div><p>We guarantee on-time submission of mandatory annual returns, financial statements, and regulatory declarations with automated filing deadline alerts, and we acquire, track, and renew specialized business licenses and permits automatically.</p></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CALL TO ACTION -->
    <section class="container py-1" id="contact">
        <div class="row align-items-center">
            <!-- Left Image Column -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?= $img ?>/Optimize-Your-Global-Entity.png" alt="Optimize Your Global Entity Governance" class="img-fluid ip-cta__bg" width="2300" height="787" loading="lazy">
            </div>

            <!-- Right Content Column -->
            <div class="col-lg-6">
                <div class="ip-cta__content ps-lg-4" data-aos="fade-left">
                    <h2 class="ip-title mb-3">Optimize Your Global Entity<br>Governance Today</h2>
                    <p class="mb-0">Partner with Devotion Global CSP for seamless compliance across all operational territories.</p>
                    <a href="mailto:contact@devotioncsp.com" class="btn ip-btn ip-btn--pill mt-4">Speak with a CSP Advisor</a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* ==========================================
        GLOBAL ENTITY MANAGEMENT - STYLING & THEMING
        ========================================== */

        :root {
            --ip-primary: #0f172a;
            --ip-accent: #0284c7;
            --ip-accent-light: #e0f2fe;
            --ip-text-main: #334155;
            --ip-text-muted: #64748b;
            --ip-bg-light: #f8fafc;
            --ip-border-color: #e2e8f0;
        }

        .section-header {
            margin-bottom: 3rem;
        }

        .ip-sub {
            font-size: 1.1rem;
            color: var(--ip-text-muted);
            max-width: 650px;
            margin: 0.75rem auto 0;
            line-height: 1.6;
        }

        /* Core Solutions Grid */
        .gem-solutions-section {
            padding: 5rem 0;
            background-color: var(--ip-bg-light);
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .solution-card {
            background: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            border: 1px solid var(--ip-border-color);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .solution-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px -3px rgba(0, 0, 0, 0.08);
        }

        .icon-wrapper {
            width: 52px;
            height: 52px;
            background-color: var(--ip-primary);
            color: #ffffff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
        }

        .solution-card h3 {
            font-size: 1.25rem;
            color: var(--ip-primary);
            margin-bottom: 0.75rem;
            font-weight: 700;
        }

        .solution-card p {
            color: var(--ip-text-muted);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid #f1f5f9;
            padding-top: 1rem;
        }

        .feature-list li {
            position: relative;
            padding-left: 1.5rem;
            color: var(--ip-text-main);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .feature-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--ip-accent);
            font-weight: bold;
        }

        /* Process Steps */
        .gem-process-section {
            padding: 5rem 0;
            background-color: #ffffff;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
        }

        .step-item {
            position: relative;
            padding: 1.75rem;
            background-color: var(--ip-bg-light);
            border-top: 4px solid var(--ip-accent);
            border-radius: 8px;
            height: 100%;
        }

        .step-number {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--ip-accent);
            line-height: 1;
            margin-bottom: 0.75rem;
        }

        .step-item h3 {
            font-size: 1.15rem;
            color: var(--ip-primary);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .step-item p {
            font-size: 0.925rem;
            color: var(--ip-text-muted);
            line-height: 1.55;
            margin: 0;
        }

        /* Reach Grid */
        .gem-reach-section {
            padding: 5rem 0;
            background-color: var(--ip-bg-light);
        }

        .reach-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .reach-card {
            background: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            border: 1px solid var(--ip-border-color);
            height: 100%;
        }

        .reach-region {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--ip-accent);
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .reach-card h3 {
            font-size: 1.25rem;
            color: var(--ip-primary);
            margin-bottom: 0.75rem;
            font-weight: 700;
        }

        .reach-card p {
            color: var(--ip-text-muted);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
        }

        .reach-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid #f1f5f9;
            padding-top: 1rem;
        }

        .reach-list li {
            position: relative;
            padding-left: 1.25rem;
            color: var(--ip-text-main);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .reach-list li::before {
            content: "•";
            position: absolute;
            left: 0.25rem;
            color: var(--ip-accent);
            font-weight: bold;
        }

        /* Responsive Breakpoints */
        @media (max-width: 768px) {
            .gem-solutions-section,
            .gem-process-section,
            .gem-reach-section {
                padding: 3rem 0;
            }
            .solutions-grid,
            .process-steps,
            .reach-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>