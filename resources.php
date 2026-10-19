<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/resources';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp??v=' . FILE_VERSISON)') ? 'hero-bg.webp??v=' . FILE_VERSISON)' : 'hero-bg.svg';
$ctaFile  = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp??v=' . FILE_VERSISON)')  ? 'cta-bg.webp??v=' . FILE_VERSISON)'  : 'cta-bg.svg';
?>

<!-- Shared theme + app-page components (same look & animation set as the other pages) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/app-pages.css?v=<?= FILE_VERSISON ?>">
<main>

<!-- 1. HERO -->
<header class="ip-hero ip-hero--tall">
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Knowledge Base &amp; Insights</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Enterprise Resource<br><span class="ip-gold">Hub</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Access world-class research whitepapers, executive frameworks, industry benchmarks, and actionable operational toolkits.</p>
                <div class="hero-search-box" data-aos="fade-up" data-aos-delay="450">
                    <input type="text" id="resourceSearchInput" class="form-control" placeholder="Search resources by keywords, topic, or format...">
                    <button class="search-btn" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- 2. LIVE STATS -->
<section class="ip-stats ip-stats--pull">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-stat ip-stat--gold">
                    <span class="ip-stat__num"><span class="counter" data-target="250">0</span>+</span>
                    <span class="ip-stat__label">Verified Assets</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num"><span class="counter" data-target="45">0</span>+</span>
                    <span class="ip-stat__label">Whitepapers</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num"><span class="counter" data-target="85">0</span>K+</span>
                    <span class="ip-stat__label">Active Downloads</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num"><span class="counter" data-target="4.9" data-decimals="1">0</span>/5</span>
                    <span class="ip-stat__label">User Rating</span>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- 2. Featured Spotlight Resource -->
<section class="ip-section ip-section--cream">
    <canvas class="ip-constellation ip-constellation--left" aria-hidden="true"></canvas>
    <div class="container">
    
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Featured Publication</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Handpicked benchmark study recommended for corporate leaders</p></div>

        <div class="spotlight-card">
            <div class="row g-0 align-items-center">
                <div class="col-lg-5 spotlight-graphic">
                    <span class="spotlight-badge"><i class="fa-solid fa-star me-1"></i> Flagship Report</span>
                    <div class="text-center p-4">
                        <i class="fa-solid fa-file-invoice text-gold opacity-75" style="font-size: 7rem; color: var(--gold-primary);"></i>
                        <div class="mt-3">
                            <span class="badge-format badge-pdf"><i class="fa-solid fa-file-pdf"></i> PDF Document</span>
                            <span class="badge bg-dark text-white ms-2" style="font-size: 0.75rem;">68 Pages</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-4 p-md-5">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge bg-light text-dark border fw-semibold">2026 Edition</span>
                            <div class="rating-stars ms-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="text-dark fw-bold ms-1" style="font-size: 0.85rem;">5.0</span>
                            </div>
                        </div>

                        <h3 class="fw-bold mb-3" style="color: var(--brand-dark);">2026 Global Enterprise Growth & AI Transformation Report</h3>
                        <p class="text-muted mb-4">
                            An exhaustive analysis of 1,200+ global enterprises. Discover actionable growth frameworks, technological adoption trends, capital allocation tactics, and operational efficiency metrics.
                        </p>

                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-3 border-top">
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://placehold.co/100x100/ab8139/ffffff?text=DR" alt="Author" class="rounded-circle" style="width: 44px; height: 44px;">
                                <div>
                                    <h6 class="mb-0 fw-bold text-dark" style="font-size: 0.9rem;">Dr. Marcus Sterling</h6>
                                    <small class="text-muted" style="font-size: 0.8rem;">Chief Strategy Officer</small>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-gold-outline btn-preview" 
                                        data-title="2026 Global Enterprise Growth & AI Transformation Report"
                                        data-type="PDF Whitepaper (68 Pages)"
                                        data-author="Dr. Marcus Sterling (Chief Strategy Officer)"
                                        data-size="12.4 MB"
                                        data-rating="5.0 / 5.0 (340 reviews)"
                                        data-summary="This benchmark report dives deep into organizational resilience, revenue diversification, and executive AI adoption strategies. Built from empirical data gathered across Fortune 500 decision-makers."
                                        data-toc="1. Executive Summary & Market Snapshot|2. AI Adoption Metrics & ROI Benchmarks|3. Cross-Border Scaling Frameworks|4. Capital Efficiency & Expense Optimization|5. 2026-2030 Strategic Roadmap">
                                    <i class="fa-regular fa-eye me-1"></i> Preview Details
                                </button>
                                <a href="#" class="btn btn-gold" onclick="triggerDownload('2026-Global-Enterprise-Growth-Report.pdf'); return false;">
                                    <i class="fa-solid fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</section>

<!-- 3. Interactive Filter Tabs & Resource Grid Section -->
<section class="ip-section ip-section--gray">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
    
        <div class="ip-head" data-aos="fade-up"><h2 class="ip-title">Resource Library</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Filter by content type to access specialized toolkits and publications</p></div>

        <!-- Filter Category Buttons -->
        <div class="filter-nav" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">All Resources</button>
            <button class="filter-btn" data-filter="whitepaper">Whitepapers</button>
            <button class="filter-btn" data-filter="ebook">E-Books</button>
            <button class="filter-btn" data-filter="template">Templates & Toolkits</button>
            <button class="filter-btn" data-filter="checklist">Checklists</button>
            <button class="filter-btn" data-filter="research">Research Reports</button>
        </div>

        <!-- Resource Cards Grid -->
        <div class="row g-4" id="resourceGrid">
            
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4 resource-item" data-category="whitepaper" data-title="Modern Executive Leadership Framework">
                <div class="resource-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="resource-icon-wrapper">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <span class="badge-format badge-pdf"><i class="fa-solid fa-file-pdf"></i> PDF • 3.4 MB</span>
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Executive Leadership Framework 2026</h5>
                        <p class="text-muted small mb-3 flex-grow-1">
                            Core principles for guiding remote and hybrid executive teams through complex digital transformations.
                        </p>
                        <div class="d-flex align-items-center justify-content-between mb-3 pt-2 border-top">
                            <span class="small text-muted"><i class="fa-regular fa-clock me-1"></i> 18 Min Read</span>
                            <div class="rating-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span class="text-dark fw-bold small ms-1">4.8</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-gold-outline w-50 btn-sm btn-preview"
                                    data-title="Executive Leadership Framework 2026"
                                    data-type="PDF Whitepaper"
                                    data-author="Sarah Jenkins (VP Talent & Strategy)"
                                    data-size="3.4 MB"
                                    data-rating="4.8 / 5.0"
                                    data-summary="A modern playbook designed for enterprise leaders navigating team alignment, hybrid culture building, and agile strategy execution."
                                    data-toc="1. The Changing Paradigm of Hybrid Work|2. Strategic Communication Loops|3. Key Performance Indicators for Leaders|4. Retention & Culture Building">
                                Preview
                            </button>
                            <button class="btn btn-gold w-50 btn-sm" onclick="triggerDownload('Executive-Leadership-Framework.pdf')">
                                <i class="fa-solid fa-download me-1"></i> Get Asset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4 resource-item" data-category="template" data-title="Financial Valuation & Modeling Spreadsheet">
                <div class="resource-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="resource-icon-wrapper" style="background: #e6f4ea; color: #1e8e3e;">
                                <i class="fa-solid fa-file-excel"></i>
                            </div>
                            <span class="badge-format badge-xlsx"><i class="fa-solid fa-file-excel"></i> XLSX • 1.8 MB</span>
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">DCF Financial Valuation Model</h5>
                        <p class="text-muted small mb-3 flex-grow-1">
                            Dynamic, pre-formatted Discounted Cash Flow model spreadsheet ready for startup or enterprise valuations.
                        </p>
                        <div class="d-flex align-items-center justify-content-between mb-3 pt-2 border-top">
                            <span class="small text-muted"><i class="fa-solid fa-table me-1"></i> Spreadsheet Toolkit</span>
                            <div class="rating-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="text-dark fw-bold small ms-1">4.9</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-gold-outline w-50 btn-sm btn-preview"
                                    data-title="DCF Financial Valuation Model Spreadsheet"
                                    data-type="Excel Template (.xlsx)"
                                    data-author="David Vance (Senior Financial Analyst)"
                                    data-size="1.8 MB"
                                    data-rating="4.9 / 5.0"
                                    data-summary="An automated excel template with pre-built formulas for WACC calculation, Sensitivity Analysis, and 5-Year Cash Flow Projections."
                                    data-toc="1. Assumption Input Dashboard|2. Revenue & Expense Drivers|3. Automated DCF & Valuation Summary|4. Scenario Analysis Engine">
                                Preview
                            </button>
                            <button class="btn btn-gold w-50 btn-sm" onclick="triggerDownload('Valuation-Model-2026.xlsx')">
                                <i class="fa-solid fa-download me-1"></i> Get Asset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4 resource-item" data-category="ebook" data-title="Enterprise Cybersecurity & Risk Management Guide">
                <div class="resource-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="resource-icon-wrapper">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <span class="badge-format badge-pdf"><i class="fa-solid fa-file-pdf"></i> PDF • 8.1 MB</span>
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Enterprise Cybersecurity Playbook</h5>
                        <p class="text-muted small mb-3 flex-grow-1">
                            Complete e-book detailing zero-trust architecture, threat prevention protocols, and incident response.
                        </p>
                        <div class="d-flex align-items-center justify-content-between mb-3 pt-2 border-top">
                            <span class="small text-muted"><i class="fa-regular fa-clock me-1"></i> 35 Min Read</span>
                            <div class="rating-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                <span class="text-dark fw-bold small ms-1">4.6</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-gold-outline w-50 btn-sm btn-preview"
                                    data-title="Enterprise Cybersecurity Playbook"
                                    data-type="E-Book (PDF)"
                                    data-author="Alex Mercer (Chief Information Security Officer)"
                                    data-size="8.1 MB"
                                    data-rating="4.6 / 5.0"
                                    data-summary="A robust guide covering infrastructure defense, Zero-Trust network setup, and compliance guidelines for SOC2, ISO27001, and GDPR."
                                    data-toc="1. Threat Landscape Overview|2. Zero-Trust Architecture Principles|3. Incident Response Playbook|4. Employee Awareness & Training Framework">
                                Preview
                            </button>
                            <button class="btn btn-gold w-50 btn-sm" onclick="triggerDownload('Cybersecurity-Playbook.pdf')">
                                <i class="fa-solid fa-download me-1"></i> Get Asset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4 resource-item" data-category="checklist" data-title="SOC2 & ISO 27001 Compliance Audit Checklist">
                <div class="resource-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="resource-icon-wrapper" style="background: #fef3c7; color: #d97706;">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <span class="badge-format badge-zip"><i class="fa-solid fa-file-zipper"></i> ZIP • 5.2 MB</span>
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">SOC2 Audit Readiness Checklist</h5>
                        <p class="text-muted small mb-3 flex-grow-1">
                            An interactive readiness kit complete with pre-audit checklists, sample policies, and evidence tracking logs.
                        </p>
                        <div class="d-flex align-items-center justify-content-between mb-3 pt-2 border-top">
                            <span class="small text-muted"><i class="fa-solid fa-boxes-stacked me-1"></i> Bundle Toolkit</span>
                            <div class="rating-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="text-dark fw-bold small ms-1">5.0</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-gold-outline w-50 btn-sm btn-preview"
                                    data-title="SOC2 Audit Readiness Checklist & Bundle"
                                    data-type="ZIP Package (Spreadsheets + Docs)"
                                    data-author="Compliance Advisory Group"
                                    data-size="5.2 MB"
                                    data-rating="5.0 / 5.0"
                                    data-summary="Ensure 100% compliance readiness before undergoing formal SOC2 Type II or ISO27001 audits."
                                    data-toc="1. Security & Controls Checklist|2. Evidence Collection Matrix|3. Vendor Risk Assessment Template|4. Policy Documentation Templates">
                                Preview
                            </button>
                            <button class="btn btn-gold w-50 btn-sm" onclick="triggerDownload('SOC2-Readiness-Kit.zip')">
                                <i class="fa-solid fa-download me-1"></i> Get Asset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4 resource-item" data-category="research" data-title="Global Supply Chain Resiliency Index">
                <div class="resource-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="resource-icon-wrapper">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <span class="badge-format badge-pdf"><i class="fa-solid fa-file-pdf"></i> PDF • 6.2 MB</span>
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Global Supply Chain Resiliency Report</h5>
                        <p class="text-muted small mb-3 flex-grow-1">
                            In-depth research analyzing supply bottlenecks, nearshoring trends, and logistics risk mitigation strategies.
                        </p>
                        <div class="d-flex align-items-center justify-content-between mb-3 pt-2 border-top">
                            <span class="small text-muted"><i class="fa-regular fa-clock me-1"></i> 25 Min Read</span>
                            <div class="rating-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span class="text-dark fw-bold small ms-1">4.7</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-gold-outline w-50 btn-sm btn-preview"
                                    data-title="Global Supply Chain Resiliency Report"
                                    data-type="PDF Research Report"
                                    data-author="Global Logistics Research Unit"
                                    data-size="6.2 MB"
                                    data-rating="4.7 / 5.0"
                                    data-summary="Analytical research mapping modern multi-tier supply chain vulnerabilities and geographic diversification models."
                                    data-toc="1. Global Shipping & Port Metrics|2. Regional Sourcing Shifts|3. Risk Mitigation Frameworks|4. Emerging Supply Chain Technologies">
                                Preview
                            </button>
                            <button class="btn btn-gold w-50 btn-sm" onclick="triggerDownload('Supply-Chain-Resiliency-Report.pdf')">
                                <i class="fa-solid fa-download me-1"></i> Get Asset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4 resource-item" data-category="template" data-title="SaaS Key Performance Indicators KPI Dashboard">
                <div class="resource-card" data-aos="fade-up" data-aos-delay="350">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="resource-icon-wrapper" style="background: #e6f4ea; color: #1e8e3e;">
                                <i class="fa-solid fa-chart-pie"></i>
                            </div>
                            <span class="badge-format badge-xlsx"><i class="fa-solid fa-file-excel"></i> XLSX • 2.1 MB</span>
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">SaaS Metrics & KPI Tracker</h5>
                        <p class="text-muted small mb-3 flex-grow-1">
                            Dynamic dashboard for tracking ARR, MRR, Churn Rate, LTV:CAC, and Net Revenue Retention seamlessly.
                        </p>
                        <div class="d-flex align-items-center justify-content-between mb-3 pt-2 border-top">
                            <span class="small text-muted"><i class="fa-solid fa-table me-1"></i> KPI Template</span>
                            <div class="rating-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span class="text-dark fw-bold small ms-1">4.9</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-gold-outline w-50 btn-sm btn-preview"
                                    data-title="SaaS Metrics & KPI Tracker"
                                    data-type="Excel Spreadsheet (.xlsx)"
                                    data-author="Elena Rostova (SaaS Operations Consultant)"
                                    data-size="2.1 MB"
                                    data-rating="4.9 / 5.0"
                                    data-summary="Track subscription revenue health, customer cohort retention, and burn multiple with built-in visualization charts."
                                    data-toc="1. Revenue & MRR Cohort Analysis|2. CAC & LTV Calculator|3. Churn Breakdown Dashboard|4. Investor Relations Summary Sheet">
                                Preview
                            </button>
                            <button class="btn btn-gold w-50 btn-sm" onclick="triggerDownload('SaaS-KPI-Tracker.xlsx')">
                                <i class="fa-solid fa-download me-1"></i> Get Asset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- No Search Results Found Message -->
        <div id="noResults" class="no-results-msg">
            <i class="fa-solid fa-magnifying-glass text-muted mb-3" style="font-size: 3rem;"></i>
            <h4 class="fw-bold text-dark">No matching resources found</h4>
            <p class="text-muted">Try adjusting your search query or switching category filters.</p>
        </div>
        </div>
</section>

<!-- 4. Top Downloaded Toolkits / Quick Access Grid -->
<section class="ip-section ">
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 3%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container">
    
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h3 class="fw-bold text-dark mb-1">Most Popular Toolkits</h3>
                <p class="text-muted mb-0">High-demand quick access files used by thousands of professionals</p>
            </div>
            <a href="#resourceGrid" class="btn btn-gold-outline btn-sm d-none d-md-inline-block">View All Library</a>
        </div>

        <div class="row g-3">
            <!-- Toolkit 1 -->
            <div class="col-md-4">
                <div class="toolkit-card">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="badge bg-light text-dark border">Excel / Sheet</span>
                        <small class="text-muted"><i class="fa-solid fa-download me-1"></i> 14.2k</small>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">M&A Acquisition Due Diligence Checklist</h6>
                    <p class="text-muted small mb-3">120+ point audit checklist covering legal, financial, and tech assets.</p>
                    <a href="#" class="small text-decoration-none fw-bold" style="color: var(--gold-primary);" onclick="triggerDownload('MA-Due-Diligence.xlsx'); return false;">
                        Download File <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            <!-- Toolkit 2 -->
            <div class="col-md-4">
                <div class="toolkit-card">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="badge bg-light text-dark border">PDF Matrix</span>
                        <small class="text-muted"><i class="fa-solid fa-download me-1"></i> 9.8k</small>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">OKRs & Goal Setting Playbook</h6>
                    <p class="text-muted small mb-3">Step-by-step framework to align department goals with enterprise vision.</p>
                    <a href="#" class="small text-decoration-none fw-bold" style="color: var(--gold-primary);" onclick="triggerDownload('OKR-Setting-Playbook.pdf'); return false;">
                        Download File <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            <!-- Toolkit 3 -->
            <div class="col-md-4">
                <div class="toolkit-card">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="badge bg-light text-dark border">PowerPoint</span>
                        <small class="text-muted"><i class="fa-solid fa-download me-1"></i> 22.1k</small>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Board Meeting Deck Template</h6>
                    <p class="text-muted small mb-3">Clean executive slide deck layout built for quarterly investor reviews.</p>
                    <a href="#" class="small text-decoration-none fw-bold" style="color: var(--gold-primary);" onclick="triggerDownload('Board-Deck-Template.pptx'); return false;">
                        Download File <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        </div>
</section>

<!-- 6. CUSTOM RESOURCE REQUEST (CTA) -->
<section class="ip-cta" id="request">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <span class="ip-pill">Tailored Research Service</span>
                <h2 class="ip-title" style="margin-top: 1rem;">Need a Custom Research Paper or Toolkit?</h2>
                <p>Our expert research analysts build tailored financial models, enterprise benchmarks, and regulatory compliance kits specific to your business requirements.</p>
                <button class="ip-btn ip-btn--pill" data-bs-toggle="modal" data-bs-target="#requestResourceModal"><i class="fa-solid fa-paper-plane me-2"></i>Request Custom Resource</button>
            </div>
        </div>
    </div>
</section>

</main>

<!-- 5. Interactive Resource Modal -->
<div class="modal fade" id="resourcePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <div>
                    <span class="badge bg-warning text-dark me-2" id="modalFormatBadge">PDF Document</span>
                    <small class="text-muted" id="modalFileSize">2.5 MB</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <h3 class="fw-bold text-dark mb-2" id="modalTitle">Resource Title</h3>
                <p class="text-muted small mb-4" id="modalAuthor">By Senior Analyst</p>

                <div class="row g-4 mb-4">
                    <div class="col-md-7">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-circle-info me-1" style="color: var(--gold-primary);"></i> Summary & Overview</h6>
                        <p class="text-muted small" id="modalSummary">
                            Resource overview content goes here...
                        </p>
                    </div>
                    <div class="col-md-5 bg-light p-3 rounded-3 border">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-list-ol me-1" style="color: var(--gold-primary);"></i> Table of Contents</h6>
                        <ul class="toc-list" id="modalToc">
                            <!-- Dynamic List -->
                        </ul>
                    </div>
                </div>

                <div class="p-3 rounded-3 border d-flex align-items-center justify-content-between" style="background: var(--gold-light);">
                    <div>
                        <span class="small text-muted d-block">Overall User Rating</span>
                        <span class="fw-bold text-dark" id="modalRating"><i class="fa-solid fa-star text-warning me-1"></i> 4.9 / 5.0</span>
                    </div>
                    <button class="btn btn-gold" id="modalDownloadBtn">
                        <i class="fa-solid fa-download me-1"></i> Download Asset Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Request Custom Resource Modal -->
<div class="modal fade" id="requestResourceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background: var(--gold-light);">
                <h5 class="modal-title fw-bold text-dark"><i class="fa-solid fa-pen-ruler me-2" style="color: var(--gold-primary);"></i> Request Custom Resource</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="customResourceForm" onsubmit="handleRequestSubmit(event)">
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-dark">Full Name</label>
                        <input type="text" class="form-control" required placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-dark">Work Email</label>
                        <input type="email" class="form-control" required placeholder="john@company.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-dark">Resource Category Needed</label>
                        <select class="form-select">
                            <option>Custom Research Report</option>
                            <option>Financial Modeling Spreadsheet</option>
                            <option>Regulatory / Compliance Checklist</option>
                            <option>Executive Presentation Deck</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-dark">Description of Requirements</label>
                        <textarea class="form-control" rows="3" required placeholder="Describe the industry, metrics, or template layout you require..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-gold w-100 py-2">Submit Request</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification for Download simulation -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1080">
    <div id="downloadToast" class="toast align-items-center text-white bg-dark border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body d-flex align-items-center gap-2">
                <i class="fa-solid fa-circle-check text-success fs-5"></i>
                <span id="toastMessage">Download started automatically...</span>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize AOS Animations
        AOS.init({
            duration: 800,
            once: true
        });

        // 1. Counter Animation for Stat Cards
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-target'));
            const decimals = parseInt(counter.getAttribute('data-decimals')) || 0;
            const duration = 2000;
            const stepTime = 20;
            const steps = duration / stepTime;
            const increment = target / steps;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.innerText = target.toFixed(decimals);
                    clearInterval(timer);
                } else {
                    counter.innerText = current.toFixed(decimals);
                }
            }, stepTime);
        });

        // 2. Interactive Filtering Logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        const resourceItems = document.querySelectorAll('.resource-item');
        const noResults = document.getElementById('noResults');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');
                filterResources(filterValue, document.getElementById('resourceSearchInput').value.toLowerCase());
            });
        });

        // 3. Live Keyword Search Logic
        const searchInput = document.getElementById('resourceSearchInput');
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
            filterResources(activeFilter, query);
        });

        function filterResources(category, query) {
            let visibleCount = 0;

            resourceItems.forEach(item => {
                const itemCat = item.getAttribute('data-category');
                const itemTitle = item.getAttribute('data-title').toLowerCase();

                const matchesCategory = (category === 'all' || itemCat === category);
                const matchesSearch = itemTitle.includes(query);

                if (matchesCategory && matchesSearch) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            if (visibleCount === 0) {
                noResults.style.display = 'block';
            } else {
                noResults.style.display = 'none';
            }
        }

        // 4. Preview Modal Population Logic
        const previewBtns = document.querySelectorAll('.btn-preview');
        const previewModal = new bootstrap.Modal(document.getElementById('resourcePreviewModal'));

        previewBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const title = this.getAttribute('data-title');
                const type = this.getAttribute('data-type');
                const author = this.getAttribute('data-author');
                const size = this.getAttribute('data-size');
                const rating = this.getAttribute('data-rating');
                const summary = this.getAttribute('data-summary');
                const tocRaw = this.getAttribute('data-toc') || '';

                document.getElementById('modalTitle').innerText = title;
                document.getElementById('modalFormatBadge').innerText = type;
                document.getElementById('modalAuthor').innerText = 'By ' + author;
                document.getElementById('modalFileSize').innerText = size;
                document.getElementById('modalRating').innerHTML = `<i class="fa-solid fa-star text-warning me-1"></i> ${rating}`;
                document.getElementById('modalSummary').innerText = summary;

                // Populate Table of Contents
                const tocList = document.getElementById('modalToc');
                tocList.innerHTML = '';
                if (tocRaw) {
                    const items = tocRaw.split('|');
                    items.forEach(item => {
                        const li = document.createElement('li');
                        li.innerHTML = `<i class="fa-solid fa-angle-right"></i> ${item}`;
                        tocList.appendChild(li);
                    });
                }

                // Attach click handler for download inside modal
                document.getElementById('modalDownloadBtn').onclick = function () {
                    triggerDownload(title.replace(/\s+/g, '-') + '.pdf');
                    previewModal.hide();
                };

                previewModal.show();
            });
        });
    });

    // 5. Helper Function for Simulated File Download Toast
    function triggerDownload(filename) {
        const toastEl = document.getElementById('downloadToast');
        document.getElementById('toastMessage').innerText = `Downloading "${filename}"...`;
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    }

    // 6. Custom Request Form Submission Handler
    function handleRequestSubmit(e) {
        e.preventDefault();
        const modalEl = document.getElementById('requestResourceModal');
        const modal = bootstrap.Modal.getInstance(modalEl);
        modal.hide();

        triggerDownload('Custom_Resource_Request_Confirmation.pdf');
        e.target.reset();
    }
</script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>