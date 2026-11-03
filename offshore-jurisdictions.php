<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/offshore-jurisdictions';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp?v=' . FILE_VERSISON)
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';
?>

<!-- Shared inner-page theme -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<style>
    :root {
        --gold-primary: #b89655;
        --gold-hover: #96783d;
        --gold-light: #fbf9f4;
        --gold-border: rgba(184, 150, 85, 0.28);
        --dark-navy: #0f1c2e;
        --navy-accent: #172a45;
        --text-dark: #0f172a;
        --text-muted: #64748b;
        --bg-slate: #f8fafc;
        --white: #ffffff;
        --shadow-sm: 0 6px 18px rgba(15, 28, 46, 0.05);
        --shadow-md: 0 16px 38px rgba(184, 150, 85, 0.16);
        --shadow-lg: 0 25px 60px rgba(15, 28, 46, 0.15);
        --transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
        background-color: #ffffff;
        overflow-x: hidden;
    }

    .section-padding { padding: 95px 0; }
    
    .sub-heading {
        color: var(--gold-primary);
        font-size: 0.82rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2.2px;
        display: inline-block;
        margin-bottom: 8px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark-navy);
        line-height: 1.25;
    }

    /* Hero Banner Styling */
    .hero-wrapper {
        background: radial-gradient(circle at 80% 20%, rgba(184, 150, 85, 0.15) 0%, rgba(255, 255, 255, 0) 60%),
                    linear-gradient(135deg, #ffffff 0%, #fbf9f4 100%);
        padding: 100px 0 85px;
        position: relative;
    }

    .hero-title {
        font-size: 3.6rem;
        font-weight: 700;
        color: var(--dark-navy);
        line-height: 1.15;
        letter-spacing: -0.5px;
    }

    .btn-gold {
        background-color: var(--gold-primary);
        color: var(--white);
        padding: 14px 34px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        transition: var(--transition);
        box-shadow: 0 6px 20px rgba(184, 150, 85, 0.35);
    }
    .btn-gold:hover {
        background-color: var(--gold-hover);
        color: var(--white);
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(184, 150, 85, 0.45);
    }

    .btn-outline-navy {
        border: 2px solid var(--dark-navy);
        color: var(--dark-navy);
        padding: 13px 32px;
        border-radius: 8px;
        font-weight: 600;
        background: transparent;
        transition: var(--transition);
    }
    .btn-outline-navy:hover {
        background: var(--dark-navy);
        color: var(--white);
        transform: translateY(-3px);
    }

    /* Graphic Visual Sphere */
    .globe-visual-wrapper {
        position: relative;
        width: 360px;
        height: 360px;
        margin: auto;
    }
    .globe-container {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        position: relative;
        background: radial-gradient(circle at 35% 35%, #ffffff, #eae3d2);
        border: 1px solid rgba(184, 150, 85, 0.4);
        box-shadow: 0 25px 60px rgba(184, 150, 85, 0.22);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .float-card {
        position: absolute;
        background: rgba(255, 255, 255, 0.94);
        backdrop-filter: blur(12px);
        box-shadow: 0 14px 35px rgba(15, 28, 46, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.9);
        border-radius: 12px;
        padding: 12px 18px;
        font-size: 0.85rem;
        z-index: 3;
        transition: var(--transition);
    }
    .float-card:hover { transform: translateY(-4px) scale(1.03); }
    .fc-1 { top: 10px; left: -30px; }
    .fc-2 { right: -40px; top: 150px; }
    .fc-3 { left: 0px; bottom: -10px; }

    /* Country Cards Grid */
    .country-card {
        background: var(--white);
        border: 1px solid var(--gold-border);
        border-radius: 18px;
        padding: 32px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }
    .country-card:hover {
        border-color: var(--gold-primary);
        box-shadow: var(--shadow-md);
        transform: translateY(-6px);
    }
    .price-tag {
        font-size: 2rem;
        font-weight: 700;
        color: var(--dark-navy);
    }
    .btn-navy-sm {
        background-color: var(--dark-navy);
        color: var(--white);
        font-size: 0.88rem;
        font-weight: 600;
        padding: 11px 24px;
        border-radius: 8px;
        border: none;
        transition: var(--transition);
    }
    .btn-navy-sm:hover {
        background-color: var(--gold-primary);
        color: var(--white);
    }

    /* Platform Features Section (Dark Banner) */
    .platform-dark-banner {
        background: linear-gradient(135deg, var(--dark-navy) 0%, var(--navy-accent) 100%);
        color: var(--white);
        border-radius: 24px;
        padding: 70px 50px;
        box-shadow: var(--shadow-lg);
    }
    .platform-feature-badge {
        background: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 14px;
        padding: 26px;
        height: 100%;
        transition: var(--transition);
    }
    .platform-feature-badge:hover {
        background: rgba(255, 255, 255, 0.12);
        transform: translateY(-4px);
    }

    /* Package Cards */
    .package-card {
        background: var(--white);
        border: 1px solid var(--gold-border);
        border-radius: 20px;
        padding: 42px 34px;
        height: 100%;
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }
    .package-card.featured {
        border: 2px solid var(--gold-primary);
        box-shadow: var(--shadow-md);
        position: relative;
        background: linear-gradient(180deg, #ffffff 0%, #fdfbf7 100%);
    }

    /* Step Process Cards */
    .step-card {
        padding: 30px 26px;
        background: var(--white);
        border-radius: 18px;
        border: 1px solid var(--gold-border);
        height: 100%;
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }
    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-color: var(--gold-primary);
    }
    .step-num {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background-color: var(--gold-light);
        color: var(--gold-primary);
        font-weight: 700;
        font-size: 1.15rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 22px;
        border: 1px solid var(--gold-border);
    }

    /* Order Configurator */
    .order-wrapper {
        background-color: var(--gold-light);
        border-radius: 24px;
        padding: 50px;
        border: 1px solid var(--gold-border);
    }
    .order-card {
        background: var(--white);
        border-radius: 18px;
        padding: 40px;
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-sm);
    }
    .wizard-steps {
        display: flex;
        gap: 20px;
        border-bottom: 1px solid var(--gold-border);
        padding-bottom: 18px;
        margin-bottom: 30px;
    }
    .wizard-step {
        font-size: 0.92rem;
        color: var(--text-muted);
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
    }
    .wizard-step.active {
        color: var(--dark-navy);
    }
    .wizard-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: #e2e8f0;
        color: #475569;
        font-size: 0.8rem;
        margin-right: 8px;
    }
    .wizard-step.active .wizard-badge {
        background: var(--dark-navy);
        color: var(--white);
    }

    .summary-card {
        background: var(--white);
        border-radius: 18px;
        padding: 38px;
        border: 1px solid var(--gold-border);
        height: 100%;
        box-shadow: var(--shadow-sm);
    }

    /* Matrix Table */
    .table-matrix th {
        background-color: var(--dark-navy);
        color: var(--white);
        font-weight: 600;
        padding: 18px 22px;
    }
    .table-matrix td {
        padding: 18px 22px;
        vertical-align: middle;
        border-bottom: 1px solid #e2e8f0;
        font-size: 0.92rem;
    }

    /* CTA Section Banner */
    .cta-banner {
        background: linear-gradient(135deg, var(--dark-navy) 0%, var(--navy-accent) 100%);
        border-radius: 22px;
        padding: 55px 60px;
        color: var(--white);
        box-shadow: var(--shadow-lg);
    }
</style>

<main>
    <!-- 1. HERO BANNER SECTION -->
    <section class="hero-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="sub-heading"><i class="bi bi-cpu-fill me-2"></i>Global Business Mobility</span>
                    <h1 class="hero-title mb-3">A global business.<br><span style="color: var(--gold-primary);">A simpler beginning.</span></h1>
                    <p class="text-muted fs-5 mb-4 pe-lg-4">Explore top-tier jurisdictions, configure your incorporation package, and launch your entity seamlessly through our platform.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-gold" onclick="document.getElementById('jurisdictions').scrollIntoView({behavior:'smooth'})">Explore Jurisdictions ↓</button>
                        <button class="btn btn-outline-navy" onclick="document.getElementById('order').scrollIntoView({behavior:'smooth'})">Build Your Package ↗</button>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="globe-visual-wrapper">
                        <div class="globe-container">
                            <svg viewBox="0 0 300 300" fill="none" stroke="#b8965580" style="width:90%; height:90%;">
                                <ellipse cx="150" cy="150" rx="60" ry="149"></ellipse>
                                <ellipse cx="150" cy="150" rx="115" ry="149"></ellipse>
                                <path d="M0 150H300M18 80Q150 40 282 80M18 220Q150 260 282 220"></path>
                            </svg>
                            <div class="float-card fc-1">
                                <span class="fi fi-vg me-2"></span><strong>BVI Company</strong>
                                <div class="text-muted extra-small">Zero Local Taxes</div>
                            </div>
                            <div class="float-card fc-2">
                                <span class="fi fi-ae me-2"></span><strong>UAE · RAK ICC</strong>
                                <div class="text-muted extra-small">100% Foreign Ownership</div>
                            </div>
                            <div class="float-card fc-3">
                                <span class="fi fi-sc me-2"></span><strong>Seychelles IBC</strong>
                                <div class="text-muted extra-small">Fast 1-Week Formation</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. DARK FEATURE BANNER (ZED STYLE) -->
    <section class="section-padding pt-0">
        <div class="container">
            <div class="platform-dark-banner" data-aos="fade-up">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-7">
                        <span class="sub-heading text-warning">Platform Capabilities</span>
                        <h2 class="text-white fw-bold display-6">Institutional-grade global entity management</h2>
                    </div>
                    <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                        <p class="text-white-50 mb-0">Engineered for speed, compliance, transparency, and multi-jurisdictional control.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="platform-feature-badge">
                            <i class="bi bi-shield-lock-fill text-warning fs-3 mb-3 d-block"></i>
                            <h5 class="fw-bold text-white mb-2">Automated Verification</h5>
                            <p class="text-white-50 small mb-0">Bank-level encrypted portal for shareholder identity verification and document filing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="platform-feature-badge">
                            <i class="bi bi-lightning-charge-fill text-warning fs-3 mb-3 d-block"></i>
                            <h5 class="fw-bold text-white mb-2">Accelerated Execution</h5>
                            <p class="text-white-50 small mb-0">Direct registry coordination yielding fast turnaround timelines for digital corporate kits.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="platform-feature-badge">
                            <i class="bi bi-bank2 text-warning fs-3 mb-3 d-block"></i>
                            <h5 class="fw-bold text-white mb-2">Banking Pre-Screening</h5>
                            <p class="text-white-50 small mb-0">Pre-approval coordination with tier-1 international banks and digital EMIs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. JURISDICTIONS CATALOGUE GRID -->
    <section class="section-padding" id="jurisdictions">
        <div class="container">
            <div class="row align-items-end mb-4" data-aos="fade-up">
                <div class="col-lg-6">
                    <span class="sub-heading">Select Jurisdiction</span>
                    <h2 class="section-title">Where will your business begin?</h2>
                </div>
                <div class="col-lg-6 text-lg-end mt-3 mt-lg-0">
                    <div class="d-flex gap-2 justify-content-lg-end flex-wrap">
                        <div class="input-group style-search" style="max-width:280px;">
                            <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
                            <input type="text" id="jurisdictionSearch" class="form-control border-start-0 py-2" placeholder="Search country..." onkeyup="filterJurisdictions()">
                        </div>
                        <select id="regionFilter" class="form-select w-auto py-2" onchange="filterJurisdictions()">
                            <option value="all">All Regions</option>
                            <option value="caribbean">Caribbean</option>
                            <option value="middle-east">Middle East</option>
                            <option value="africa">Africa & Indian Ocean</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-2" id="jurisdictionGrid">
                <!-- Seychelles -->
                <div class="col-lg-4 col-md-6 country-item" data-region="africa" data-name="seychelles" data-aos="fade-up" data-aos-delay="100">
                    <div class="country-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-dark border px-2 py-1"><span class="fi fi-sc me-1"></span> Seychelles IBC</span>
                                <span class="badge bg-success bg-opacity-10 text-success">Popular</span>
                            </div>
                            <p class="text-muted small mb-3">Fast incorporation with strict corporate privacy and zero local tax requirements.</p>
                            <div class="price-tag mb-3">$1,250 <span class="fs-6 fw-normal text-muted">USD / 1st Year</span></div>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Name Availability Check</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Incorporation Coordination</li>
                                <li class="mb-0"><i class="fa-solid fa-circle-check text-warning me-2"></i>Digital Corporate Documents</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                            <button class="btn btn-navy-sm" onclick="selectJurisdiction('Seychelles', 1250)">Build Package ↗</button>
                            <label class="small text-muted mb-0"><input type="checkbox" class="form-check-input me-1"> Compare</label>
                        </div>
                    </div>
                </div>

                <!-- BVI -->
                <div class="col-lg-4 col-md-6 country-item" data-region="caribbean" data-name="bvi" data-aos="fade-up" data-aos-delay="200">
                    <div class="country-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-dark border px-2 py-1"><span class="fi fi-vg me-1"></span> British Virgin Islands</span>
                                <span class="badge bg-primary bg-opacity-10 text-primary">Top Rated</span>
                            </div>
                            <p class="text-muted small mb-3">Premier international business structure favored by global investors and funds.</p>
                            <div class="price-tag mb-3">$2,450 <span class="fs-6 fw-normal text-muted">USD / 1st Year</span></div>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Tax Neutral Structure</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>No Minimum Paid-up Capital</li>
                                <li class="mb-0"><i class="fa-solid fa-circle-check text-warning me-2"></i>Flexible Share Capital Structure</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                            <button class="btn btn-navy-sm" onclick="selectJurisdiction('BVI', 2450)">Build Package ↗</button>
                            <label class="small text-muted mb-0"><input type="checkbox" class="form-check-input me-1"> Compare</label>
                        </div>
                    </div>
                </div>

                <!-- UAE RAK ICC -->
                <div class="col-lg-4 col-md-6 country-item" data-region="middle-east" data-name="uae" data-aos="fade-up" data-aos-delay="300">
                    <div class="country-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-dark border px-2 py-1"><span class="fi fi-ae me-1"></span> UAE · RAK ICC</span>
                                <span class="badge bg-warning bg-opacity-10 text-warning">Prestigious</span>
                            </div>
                            <p class="text-muted small mb-3">High-reputation entity with direct access to UAE corporate banking options.</p>
                            <div class="price-tag mb-3">$2,750 <span class="fs-6 fw-normal text-muted">USD / 1st Year</span></div>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>100% Foreign Ownership</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Double Taxation Treaty Benefits</li>
                                <li class="mb-0"><i class="fa-solid fa-circle-check text-warning me-2"></i>Zero Corporate Income Taxes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                            <button class="btn btn-navy-sm" onclick="selectJurisdiction('UAE RAK ICC', 2750)">Build Package ↗</button>
                            <label class="small text-muted mb-0"><input type="checkbox" class="form-check-input me-1"> Compare</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. COMPARISON MATRIX -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center max-width-600 mx-auto mb-5" data-aos="fade-up">
                <span class="sub-heading">Jurisdiction Matrix</span>
                <h2 class="section-title">Comparative Analysis Overview</h2>
            </div>
            <div class="table-responsive rounded-4 border shadow-sm" data-aos="fade-up">
                <table class="table table-matrix table-hover align-middle mb-0 bg-white">
                    <thead>
                        <tr>
                            <th>Feature / Criteria</th>
                            <th>🇸🇨 Seychelles IBC</th>
                            <th>🇻🇬 BVI Business Co.</th>
                            <th>🇦🇪 UAE RAK ICC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-dark">Incorporation Speed</td>
                            <td>3–5 Business Days</td>
                            <td>5–7 Business Days</td>
                            <td>4–6 Business Days</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Corporate Tax Rate</td>
                            <td><span class="badge bg-success">0% Local Tax</span></td>
                            <td><span class="badge bg-success">0% Local Tax</span></td>
                            <td><span class="badge bg-success">0% Tax (Offshore)</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Director Confidentiality</td>
                            <td>High / Confidential</td>
                            <td>Private Registry</td>
                            <td>Confidential</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Banking Compatibility</td>
                            <td>Remote EMI / Global</td>
                            <td>Global Institutional</td>
                            <td>UAE Local & Global</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 5. PACKAGES SECTION -->
    <section class="section-padding" id="packages">
        <div class="container">
            <div class="text-center max-width-600 mx-auto mb-5" data-aos="fade-up">
                <span class="sub-heading">Service Bundles</span>
                <h2 class="section-title">A package built around your goals</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="package-card">
                        <span class="sub-heading">The Essentials</span>
                        <h3 class="fw-bold mb-2">Essential</h3>
                        <p class="text-muted small mb-4">Streamlined starting point for simple holding or trading entities.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Company Name Search & Clearance</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Registry Application Filing</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>1st Year Registered Agent</li>
                            <li class="mb-0"><i class="fa-solid fa-check text-warning me-2"></i>Digital Corporate Certificate Delivery</li>
                        </ul>
                        <button class="btn btn-outline-navy w-100" onclick="choosePackage('Essential', 0)">Choose Essential</button>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="package-card featured">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">Recommended</span>
                        <span class="sub-heading">Enhanced Guidance</span>
                        <h3 class="fw-bold mb-2">Business</h3>
                        <p class="text-muted small mb-4">Formation support equipped with corporate bank account assistance.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Everything in Essential Package</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Corporate Banking Pre-Screening</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Compliance Setup Consultation</li>
                            <li class="mb-0"><i class="fa-solid fa-check text-warning me-2"></i>Dedicated Account Coordinator</li>
                        </ul>
                        <button class="btn btn-gold w-100" onclick="choosePackage('Business', 650)">Choose Business (+ $650)</button>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="package-card">
                        <span class="sub-heading">Complete Suite</span>
                        <h3 class="fw-bold mb-2">Complete</h3>
                        <p class="text-muted small mb-4">Comprehensive suite for active global entities requiring legalization.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Everything in Business Package</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Accounting & Bookkeeping Onboarding</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Apostille Legalization Services</li>
                            <li class="mb-0"><i class="fa-solid fa-check text-warning me-2"></i>Annual Compliance Reminders</li>
                        </ul>
                        <button class="btn btn-outline-navy w-100" onclick="choosePackage('Complete', 1250)">Choose Complete (+ $1,250)</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. PROCESS STEPS -->
    <section class="section-padding bg-light" id="process">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="sub-heading">Execution Path</span>
                <h2 class="section-title">From idea to incorporation</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-card">
                        <div class="step-num">1</div>
                        <h5 class="fw-bold mb-2">Configure Order</h5>
                        <p class="text-muted small mb-0">Select your preferred jurisdiction, package, and extra services.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-card">
                        <div class="step-num">2</div>
                        <h5 class="fw-bold mb-2">Verification (KYC)</h5>
                        <p class="text-muted small mb-0">Submit passport and proof of address through our secure platform.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-card">
                        <div class="step-num">3</div>
                        <h5 class="fw-bold mb-2">Registry Filing</h5>
                        <p class="text-muted small mb-0">Direct filing with government authorities by our licensed agents.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-card">
                        <div class="step-num">4</div>
                        <h5 class="fw-bold mb-2">Receive Corporate Kit</h5>
                        <p class="text-muted small mb-0">Obtain corporate certificates and proceed directly to bank account opening.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. INTERACTIVE ORDER BUILDER -->
    <section class="section-padding" id="order">
        <div class="container" data-aos="fade-up">
            <div class="order-wrapper">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="order-card">
                            <div class="wizard-steps">
                                <span class="wizard-step active" id="stepTab1"><span class="wizard-badge">1</span> Package</span>
                                <span class="wizard-step" id="stepTab2"><span class="wizard-badge">2</span> Details</span>
                                <span class="wizard-step" id="stepTab3"><span class="wizard-badge">3</span> Review</span>
                            </div>

                            <!-- Step 1 -->
                            <div id="stepContent1">
                                <h3 class="fw-bold mb-1">Configure Your Company</h3>
                                <p class="text-muted small mb-4">Choose your target location and setup modules.</p>

                                <div class="mb-4">
                                    <label class="form-label fw-bold small">Jurisdiction Location</label>
                                    <select class="form-select py-2" id="jurisdictionSelect" onchange="recalculateTotal()">
                                        <option value="1250" data-name="Seychelles">🇸🇨 Seychelles ($1,250)</option>
                                        <option value="2450" data-name="BVI">🇻🇬 British Virgin Islands ($2,450)</option>
                                        <option value="2750" data-name="UAE RAK ICC">🇦🇪 UAE · RAK ICC ($2,750)</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold small mb-2">Select Service Tier</label>
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <div class="border rounded p-2 text-center bg-light">
                                                <input type="radio" name="planOption" value="0" checked onchange="recalculateTotal()" class="form-check-input d-block mx-auto mb-1">
                                                <span class="d-block small fw-bold">Essential</span>
                                                <span class="text-muted extra-small">Base</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border rounded p-2 text-center">
                                                <input type="radio" name="planOption" value="650" onchange="recalculateTotal()" class="form-check-input d-block mx-auto mb-1">
                                                <span class="d-block small fw-bold">Business</span>
                                                <span class="text-muted extra-small">+ $650</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border rounded p-2 text-center">
                                                <input type="radio" name="planOption" value="1250" onchange="recalculateTotal()" class="form-check-input d-block mx-auto mb-1">
                                                <span class="d-block small fw-bold">Complete</span>
                                                <span class="text-muted extra-small">+ $1,250</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold small">Optional Service Add-ons</label>
                                    <div class="border-bottom py-2 d-flex justify-content-between align-items-center">
                                        <div>
                                            <input type="checkbox" id="addonBank" value="350" onchange="recalculateTotal()" class="form-check-input me-2">
                                            <label for="addonBank" class="small fw-bold mb-0">Bank Account Application Support</label>
                                            <span class="text-muted extra-small d-block">Guided application to corporate banks.</span>
                                        </div>
                                        <strong class="small">+ $350</strong>
                                    </div>
                                    <div class="border-bottom py-2 d-flex justify-content-between align-items-center">
                                        <div>
                                            <input type="checkbox" id="addonAccounting" value="250" onchange="recalculateTotal()" class="form-check-input me-2">
                                            <label for="addonAccounting" class="small fw-bold mb-0">Accounting & Bookkeeping Setup</label>
                                            <span class="text-muted extra-small d-block">Setup financial reporting ledgers.</span>
                                        </div>
                                        <strong class="small">+ $250</strong>
                                    </div>
                                </div>
                                <button class="btn btn-gold w-100 py-2 mt-3" onclick="nextStep(2)">Proceed to Details →</button>
                            </div>

                            <!-- Step 2 -->
                            <div id="stepContent2" style="display: none;">
                                <h3 class="fw-bold mb-1">Your Details</h3>
                                <p class="text-muted small mb-4">Provide details for company registration filing.</p>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">Full Legal Name</label>
                                        <input type="text" class="form-control" placeholder="John Doe">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">Email Address</label>
                                        <input type="email" class="form-control" placeholder="john@company.com">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small fw-bold">Proposed Company Name</label>
                                        <input type="text" class="form-control" placeholder="e.g. Apex Global Ventures Ltd">
                                    </div>
                                </div>
                                <div class="d-flex gap-2 mt-4">
                                    <button class="btn btn-outline-navy w-50" onclick="nextStep(1)">← Back</button>
                                    <button class="btn btn-gold w-50" onclick="nextStep(3)">Review Order →</button>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div id="stepContent3" style="display: none;">
                                <h3 class="fw-bold mb-1">Review Your Order</h3>
                                <p class="text-muted small mb-4">Please confirm your selection details.</p>
                                <div class="alert alert-light border small text-muted">
                                    <i class="fa-solid fa-circle-info text-warning me-2"></i>Our corporate advisor will contact you within 24 hours to review verification documents.
                                </div>
                                <div class="d-flex gap-2 mt-4">
                                    <button class="btn btn-outline-navy w-50" onclick="nextStep(2)">← Back</button>
                                    <button class="btn btn-gold w-50" onclick="alert('Thank you! Your package enquiry has been submitted.')">Submit Order ↗</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Summary Sidebar -->
                    <div class="col-lg-5">
                        <div class="summary-card d-flex flex-column justify-content-between">
                            <div>
                                <span class="sub-heading">Package Summary</span>
                                <h4 class="fw-bold mb-1" id="summaryJurisdiction">Seychelles</h4>
                                <span class="text-muted small d-block mb-3">1st Year Incorporation Fee</span>

                                <div class="d-flex justify-content-between mb-2 small">
                                    <span class="text-muted">Base Jurisdiction Fee</span>
                                    <strong id="summaryBasePrice">$1,250</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2 small" id="summaryTierRow" style="display:none;">
                                    <span class="text-muted">Package Upgrade</span>
                                    <strong id="summaryTierPrice">$0</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2 small" id="summaryAddonRow" style="display:none;">
                                    <span class="text-muted">Optional Add-ons</span>
                                    <strong id="summaryAddonPrice">$0</strong>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold">Total Investment</span>
                                    <span class="fs-3 fw-bold text-dark" id="summaryTotal">$1,250</span>
                                </div>
                                <p class="text-muted extra-small mb-4">USD · Includes government registry fees. Renewal fees billed annually.</p>
                            </div>
                            <button class="btn btn-gold w-100 py-3" onclick="document.getElementById('order').scrollIntoView({behavior:'smooth'})">Confirm & Build Package</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ SECTION -->
    <section class="section-padding bg-light" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-right">
                    <span class="sub-heading">Got Questions?</span>
                    <h2 class="section-title mb-3">A little more clarity.</h2>
                    <p class="text-muted small pe-lg-3">Have questions regarding offshore company formation, taxes, or legal compliance? Find answers below.</p>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Which jurisdiction should I choose?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Selection depends on your business model, banking needs, and tax residence. BVI is ideal for holding entities and investment funds, while Seychelles offers fast cost-effective privacy, and the UAE provides high reputation and banking access.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What documents are required for incorporation?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Standard onboarding requires a certified passport copy, proof of residential address (utility bill issued within 3 months), and a brief business description.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 rounded-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Can I open a corporate bank account remotely?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes. We partner with international banks and digital EMIs in major financial hubs that offer remote corporate account opening.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CONSULTATION CTA BANNER -->
    <section class="section-padding">
        <div class="container" data-aos="fade-up">
            <div class="cta-banner d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4">
                <div>
                    <h3 class="fw-bold mb-1">Not sure which path to take?</h3>
                    <p class="mb-0 text-white-50">Speak directly with our corporate advisors for custom guidance.</p>
                </div>
                <a href="mailto:support@devotionglobalcsp.com" class="btn btn-gold px-4 py-3 text-nowrap">Speak to an Advisor ↗</a>
            </div>
        </div>
    </section>
</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<script>
    AOS.init({ duration: 800, once: true });

    function filterJurisdictions() {
        var query = document.getElementById('jurisdictionSearch').value.toLowerCase();
        var region = document.getElementById('regionFilter').value;
        var items = document.querySelectorAll('.country-item');

        items.forEach(function(item) {
            var name = item.getAttribute('data-name');
            var itemRegion = item.getAttribute('data-region');
            
            var matchesQuery = name.includes(query);
            var matchesRegion = (region === 'all' || itemRegion === region);

            if(matchesQuery && matchesRegion) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function recalculateTotal() {
        var select = document.getElementById('jurisdictionSelect');
        var basePrice = parseInt(select.value);
        var jName = select.options[select.selectedIndex].getAttribute('data-name');
        
        var tierPrice = parseInt(document.querySelector('input[name="planOption"]:checked').value);
        
        var addonPrice = 0;
        if(document.getElementById('addonBank').checked) addonPrice += parseInt(document.getElementById('addonBank').value);
        if(document.getElementById('addonAccounting').checked) addonPrice += parseInt(document.getElementById('addonAccounting').value);
        
        var total = basePrice + tierPrice + addonPrice;

        document.getElementById('summaryJurisdiction').innerText = jName;
        document.getElementById('summaryBasePrice').innerText = '$' + basePrice.toLocaleString();
        
        if(tierPrice > 0) {
            document.getElementById('summaryTierRow').style.display = 'flex';
            document.getElementById('summaryTierPrice').innerText = '+$' + tierPrice.toLocaleString();
        } else {
            document.getElementById('summaryTierRow').style.display = 'none';
        }

        if(addonPrice > 0) {
            document.getElementById('summaryAddonRow').style.display = 'flex';
            document.getElementById('summaryAddonPrice').innerText = '+$' + addonPrice.toLocaleString();
        } else {
            document.getElementById('summaryAddonRow').style.display = 'none';
        }

        document.getElementById('summaryTotal').innerText = '$' + total.toLocaleString();
    }

    function nextStep(stepNum) {
        document.getElementById('stepContent1').style.display = 'none';
        document.getElementById('stepContent2').style.display = 'none';
        document.getElementById('stepContent3').style.display = 'none';

        document.getElementById('stepTab1').classList.remove('active');
        document.getElementById('stepTab2').classList.remove('active');
        document.getElementById('stepTab3').classList.remove('active');

        document.getElementById('stepContent' + stepNum).style.display = 'block';
        document.getElementById('stepTab' + stepNum).classList.add('active');
    }

    function selectJurisdiction(name, price) {
        var select = document.getElementById('jurisdictionSelect');
        for(var i=0; i<select.options.length; i++) {
            if(select.options[i].getAttribute('data-name') === name) {
                select.selectedIndex = i;
                break;
            }
        }
        recalculateTotal();
        document.getElementById('order').scrollIntoView({behavior: 'smooth'});
    }

    function choosePackage(packageName, price) {
        var radios = document.getElementsByName('planOption');
        for(var i=0; i<radios.length; i++) {
            if(parseInt(radios[i].value) === price) {
                radios[i].checked = true;
                break;
            }
        }
        recalculateTotal();
        document.getElementById('order').scrollIntoView({behavior: 'smooth'});
    }
</script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>