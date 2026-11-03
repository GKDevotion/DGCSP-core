<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/offshore-jurisdictions';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Hero background: drop your own hero-bg.webp into the folder above and it is used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp?v=' . FILE_VERSISON)
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';

?>

<!-- Shared inner-page theme (same look & animation set as index) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<style>
    :root {
        --gold-primary: #b89655;
        --gold-hover: #96783d;
        --text-dark: #1e293b;
        --gold-banner-bg: #b58d3d;
        --gray-color: #f8fafc;
        --gold-border: rgba(184, 150, 85, 0.25);
        --gold-light: #fbf9f4;
        --white: #ffffff;
        --dark-navy: #14273b;
        --shadow-sm: 0 4px 14px rgba(0, 0, 0, 0.04);
        --shadow-md: 0 12px 32px rgba(184, 150, 85, 0.12);
        --transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
        background-color: var(--white);
    }

    .section-padding { padding: 80px 0; }
    .sub-heading {
        color: var(--gold-primary);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.8px;
        display: block;
        margin-bottom: 8px;
    }
    .section-title {
        font-size: 2.3rem;
        font-weight: 700;
        color: var(--dark-navy);
        line-height: 1.25;
    }

    /* Hero Banner Styling */
    .hero-wrapper {
        background: linear-gradient(135deg, #fefefe 0%, #f7f3ea 100%);
        padding: 90px 0 70px;
        position: relative;
        overflow: hidden;
    }
    .hero-title {
        font-size: 3.4rem;
        font-weight: 700;
        color: var(--dark-navy);
        line-height: 1.15;
    }
    .btn-gold {
        background-color: var(--gold-primary);
        color: var(--white);
        padding: 13px 32px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(184, 150, 85, 0.3);
    }
    .btn-gold:hover {
        background-color: var(--gold-hover);
        color: var(--white);
        transform: translateY(-2px);
    }
    .btn-outline-navy {
        border: 2px solid var(--dark-navy);
        color: var(--dark-navy);
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        background: transparent;
        transition: var(--transition);
    }
    .btn-outline-navy:hover {
        background: var(--dark-navy);
        color: var(--white);
        transform: translateY(-2px);
    }

    /* Globe Visual Sphere */
    .globe-container {
        width: 320px;
        height: 320px;
        border-radius: 50%;
        position: relative;
        margin: auto;
        background: radial-gradient(circle at 30% 30%, #ffffff, #ede5d4);
        border: 1px solid rgba(184, 150, 85, 0.4);
        box-shadow: 0 20px 50px rgba(184, 150, 85, 0.2);
    }
    .float-card {
        position: absolute;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        box-shadow: 0 10px 25px rgba(20, 39, 59, 0.08);
        border: 1px solid var(--white);
        border-radius: 10px;
        padding: 10px 16px;
        font-size: 0.85rem;
        z-index: 2;
        transition: var(--transition);
    }
    .float-card:hover { transform: scale(1.05); }
    .fc-1 { top: 20px; left: -20px; }
    .fc-2 { right: -30px; top: 140px; }
    .fc-3 { left: 10px; bottom: 10px; }

    /* Country Cards */
    .country-card {
        background: var(--white);
        border: 1px solid var(--gold-border);
        border-radius: 14px;
        padding: 28px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: var(--transition);
    }
    .country-card:hover {
        border-color: var(--gold-primary);
        box-shadow: var(--shadow-md);
        transform: translateY(-5px);
    }
    .price-tag {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--dark-navy);
    }
    .btn-navy-sm {
        background-color: var(--dark-navy);
        color: var(--white);
        font-size: 0.88rem;
        font-weight: 600;
        padding: 10px 22px;
        border-radius: 6px;
        border: none;
        transition: var(--transition);
    }
    .btn-navy-sm:hover {
        background-color: var(--gold-primary);
        color: var(--white);
    }

    /* Packages */
    .package-card {
        background: var(--white);
        border: 1px solid var(--gold-border);
        border-radius: 16px;
        padding: 38px 30px;
        height: 100%;
        transition: var(--transition);
    }
    .package-card.featured {
        border: 2px solid var(--gold-primary);
        box-shadow: var(--shadow-md);
        position: relative;
    }

    /* Process Workflow */
    .step-card {
        padding: 24px;
        background: var(--white);
        border-radius: 14px;
        border: 1px solid var(--gold-border);
        height: 100%;
        transition: var(--transition);
    }
    .step-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow-sm);
    }
    .step-num {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background-color: var(--gold-light);
        color: var(--gold-primary);
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        border: 1px solid var(--gold-border);
    }

    /* Interactive Order Configurator */
    .order-wrapper {
        background-color: var(--gold-light);
        border-radius: 20px;
        padding: 45px;
        border: 1px solid var(--gold-border);
    }
    .order-card {
        background: var(--white);
        border-radius: 14px;
        padding: 36px;
        border: 1px solid var(--gold-border);
    }
    .wizard-steps {
        display: flex;
        gap: 16px;
        border-bottom: 1px solid var(--gold-border);
        padding-bottom: 16px;
        margin-bottom: 28px;
    }
    .wizard-step {
        font-size: 0.9rem;
        color: #64748b;
        font-weight: 500;
        cursor: pointer;
    }
    .wizard-step.active {
        color: var(--dark-navy);
        font-weight: 700;
    }
    .wizard-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #e2e8f0;
        font-size: 0.75rem;
        margin-right: 6px;
    }
    .wizard-step.active .wizard-badge {
        background: var(--dark-navy);
        color: var(--white);
    }
    .summary-card {
        background: var(--white);
        border-radius: 14px;
        padding: 32px;
        border: 1px solid var(--gold-border);
        height: 100%;
    }

    /* Accordion FAQ */
    .accordion-button:not(.collapsed) {
        background-color: var(--gold-light);
        color: var(--gold-hover);
        box-shadow: none;
    }
    .accordion-button:focus { box-shadow: none; }

    /* Bottom CTA Box */
    .cta-banner {
        background: linear-gradient(135deg, var(--dark-navy) 0%, #1c354e 100%);
        border-radius: 16px;
        padding: 50px;
        color: var(--white);
    }
</style>

<main>
    <!-- 1. HERO BANNER SECTION -->
    <section class="hero-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="sub-heading"><i class="bi bi-globe-americas me-2"></i>Global Expansion Simplified</span>
                    <h1 class="hero-title mb-3">A global business.<br><span class="text-warning" style="color: var(--gold-primary) !important;">A simpler beginning.</span></h1>
                    <p class="text-muted fs-5 mb-4 pe-lg-4">Explore top-tier jurisdictions, build your custom entity setup package, and start your incorporation journey online seamlessly.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-gold" onclick="document.getElementById('jurisdictions').scrollIntoView({behavior:'smooth'})">Explore Jurisdictions ↓</button>
                        <button class="btn btn-outline-navy" onclick="document.getElementById('order').scrollIntoView({behavior:'smooth'})">Build Your Package ↗</button>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="globe-container">
                        <svg viewBox="0 0 300 300" fill="none" stroke="#b8965580" style="width:100%; height:100%;">
                            <ellipse cx="150" cy="150" rx="60" ry="149"></ellipse>
                            <ellipse cx="150" cy="150" rx="115" ry="149"></ellipse>
                            <path d="M0 150H300M18 80Q150 40 282 80M18 220Q150 260 282 220"></path>
                        </svg>
                        <div class="float-card fc-1">
                            <span class="fi fi-vg me-2"></span><strong>BVI</strong>
                            <div class="text-muted extra-small">Zero Capital Duty</div>
                        </div>
                        <div class="float-card fc-2">
                            <span class="fi fi-ae me-2"></span><strong>UAE · RAK ICC</strong>
                            <div class="text-muted extra-small">100% Foreign Ownership</div>
                        </div>
                        <div class="float-card fc-3">
                            <span class="fi fi-sc me-2"></span><strong>Seychelles</strong>
                            <div class="text-muted extra-small">Fast 1-Week Registration</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. JURISDICTIONS CATALOGUE -->
    <section class="section-padding" id="jurisdictions">
        <div class="container">
            <div class="row align-items-end mb-4" data-aos="fade-up">
                <div class="col-lg-7">
                    <span class="sub-heading">Find The Right Starting Point</span>
                    <h2 class="section-title">Where will your business begin?</h2>
                </div>
                <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
                        <input type="text" id="jurisdictionSearch" class="form-control border-start-0 py-2" placeholder="Search jurisdiction (e.g., BVI, Seychelles)...">
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-2">
                <!-- Seychelles Card -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="country-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-dark border px-2 py-1"><span class="fi fi-sc me-1"></span> Seychelles IBC</span>
                                <span class="badge bg-success bg-opacity-10 text-success">Popular</span>
                            </div>
                            <p class="text-muted small mb-3">Fast incorporation with strict corporate privacy and zero local taxes.</p>
                            <div class="price-tag mb-3">$1,250 <span class="fs-6 fw-normal text-muted">USD / 1st Year</span></div>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Name Availability Check</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Incorporation Coordination</li>
                                <li class="mb-0"><i class="fa-solid fa-circle-check text-warning me-2"></i>Digital Corporate Kit Documents</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                            <button class="btn btn-navy-sm" onclick="selectJurisdiction('Seychelles', 1250)">Select & Build ↗</button>
                            <label class="small text-muted mb-0"><input type="checkbox" class="form-check-input me-1"> Compare</label>
                        </div>
                    </div>
                </div>

                <!-- BVI Card -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="country-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-dark border px-2 py-1"><span class="fi fi-vg me-1"></span> British Virgin Islands</span>
                                <span class="badge bg-primary bg-opacity-10 text-primary">Top Rated</span>
                            </div>
                            <p class="text-muted small mb-3">Premier international business company hub favored by global venture capital.</p>
                            <div class="price-tag mb-3">$2,450 <span class="fs-6 fw-normal text-muted">USD / 1st Year</span></div>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Tax Neutrality & Legal Security</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>No Mandatory Paid-up Capital</li>
                                <li class="mb-0"><i class="fa-solid fa-circle-check text-warning me-2"></i>Flexible Entity Management</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                            <button class="btn btn-navy-sm" onclick="selectJurisdiction('BVI', 2450)">Select & Build ↗</button>
                            <label class="small text-muted mb-0"><input type="checkbox" class="form-check-input me-1"> Compare</label>
                        </div>
                    </div>
                </div>

                <!-- UAE RAK ICC Card -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="country-card">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-dark border px-2 py-1"><span class="fi fi-ae me-1"></span> UAE · RAK ICC</span>
                                <span class="badge bg-warning bg-opacity-10 text-warning">Prestigious</span>
                            </div>
                            <p class="text-muted small mb-3">High-reputation offshore structure with direct access to UAE corporate banking.</p>
                            <div class="price-tag mb-3">$2,750 <span class="fs-6 fw-normal text-muted">USD / 1st Year</span></div>
                            <ul class="list-unstyled small text-muted mb-4">
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>100% Foreign Capital Ownership</li>
                                <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2"></i>Double Taxation Treaty Benefits</li>
                                <li class="mb-0"><i class="fa-solid fa-circle-check text-warning me-2"></i>Zero Corporate Income Taxes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                            <button class="btn btn-navy-sm" onclick="selectJurisdiction('UAE RAK ICC', 2750)">Select & Build ↗</button>
                            <label class="small text-muted mb-0"><input type="checkbox" class="form-check-input me-1"> Compare</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICE BUNDLES & PACKAGES -->
    <section class="section-padding bg-light" id="packages">
        <div class="container">
            <div class="text-center max-width-600 mx-auto mb-5" data-aos="fade-up">
                <span class="sub-heading">Tailored Service Bundles</span>
                <h2 class="section-title">A package built around your goals</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="package-card">
                        <span class="sub-heading">The Essentials</span>
                        <h3 class="fw-bold mb-2">Essential</h3>
                        <p class="text-muted small mb-4">Streamlined starting point for simple holding or trading entities.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Company Name Search & Approval</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Incorporation Application Coordination</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>1st-Year Registered Agent & Office Address</li>
                            <li class="mb-0"><i class="fa-solid fa-check text-warning me-2"></i>Digital Document Delivery Package</li>
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
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Nominee Secretary & Annual Compliance Setup</li>
                            <li class="mb-0"><i class="fa-solid fa-check text-warning me-2"></i>Dedicated Onboarding Officer</li>
                        </ul>
                        <button class="btn btn-gold w-100" onclick="choosePackage('Business', 650)">Choose Business (+ $650)</button>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="package-card">
                        <span class="sub-heading">Complete Corporate Suite</span>
                        <h3 class="fw-bold mb-2">Complete</h3>
                        <p class="text-muted small mb-4">Comprehensive suite for active global businesses requiring accounting.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Everything in Business Package</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Accounting & Bookkeeping Consultation</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>Apostille & Document Legalization</li>
                            <li class="mb-0"><i class="fa-solid fa-check text-warning me-2"></i>Tax Residency & Mail Forwarding Setup</li>
                        </ul>
                        <button class="btn btn-outline-navy w-100" onclick="choosePackage('Complete', 1250)">Choose Complete (+ $1,250)</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PROCESS STEPS -->
    <section class="section-padding" id="process">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="sub-heading">Simple 4-Step Journey</span>
                <h2 class="section-title">From idea to incorporation</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-card">
                        <div class="step-num">1</div>
                        <h5 class="fw-bold mb-2">Configure Package</h5>
                        <p class="text-muted small mb-0">Select your preferred jurisdiction, base package, and optional add-ons.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-card">
                        <div class="step-num">2</div>
                        <h5 class="fw-bold mb-2">KYC Verification</h5>
                        <p class="text-muted small mb-0">Upload passport copies and proof of residence through our secure portal.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-card">
                        <div class="step-num">3</div>
                        <h5 class="fw-bold mb-2">Registry Filing</h5>
                        <p class="text-muted small mb-0">Our local licensed agents submit entity details directly to government registries.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-card">
                        <div class="step-num">4</div>
                        <h5 class="fw-bold mb-2">Receive Corporate Kit</h5>
                        <p class="text-muted small mb-0">Get certified digital and physical corporate documents to begin banking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. INTERACTIVE ORDER BUILDER -->
    <section class="section-padding pt-0" id="order">
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

                            <!-- Step 1: Configurator -->
                            <div id="stepContent1">
                                <h3 class="fw-bold mb-1">Configure Your Company</h3>
                                <p class="text-muted small mb-4">Choose your target location and setup modules.</p>

                                <div class="mb-4">
                                    <label class="form-label fw-bold small">Jurisdiction Location</label>
                                    <select class="form-select" id="jurisdictionSelect" onchange="recalculateTotal()">
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
                                            <span class="text-muted extra-small d-block">Guided application to international offshore banks.</span>
                                        </div>
                                        <strong class="small">+ $350</strong>
                                    </div>
                                    <div class="border-bottom py-2 d-flex justify-content-between align-items-center">
                                        <div>
                                            <input type="checkbox" id="addonAccounting" value="250" onchange="recalculateTotal()" class="form-check-input me-2">
                                            <label for="addonAccounting" class="small fw-bold mb-0">Accounting & Bookkeeping Onboarding</label>
                                            <span class="text-muted extra-small d-block">Setup financial ledgers for compliance.</span>
                                        </div>
                                        <strong class="small">+ $250</strong>
                                    </div>
                                </div>
                                <button class="btn btn-gold w-100 py-2 mt-3" onclick="nextStep(2)">Proceed to Details →</button>
                            </div>

                            <!-- Step 2: Contact Form -->
                            <div id="stepContent2" style="display: none;">
                                <h3 class="fw-bold mb-1">Your Details</h3>
                                <p class="text-muted small mb-4">Provide basic information for company registration.</p>
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

                            <!-- Step 3: Review -->
                            <div id="stepContent3" style="display: none;">
                                <h3 class="fw-bold mb-1">Review Your Order</h3>
                                <p class="text-muted small mb-4">Please confirm your selections before submitting.</p>
                                <div class="alert alert-light border small text-muted">
                                    <i class="fa-solid fa-circle-info text-warning me-2"></i>An advisor will contact you within 24 hours to finalize KYC verification documents.
                                </div>
                                <div class="d-flex gap-2 mt-4">
                                    <button class="btn btn-outline-navy w-50" onclick="nextStep(2)">← Back</button>
                                    <button class="btn btn-gold w-50" onclick="alert('Thank you! Your enquiry has been submitted.')">Submit Order ↗</button>
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
                                <p class="text-muted extra-small mb-4">USD · All government fees included. Bank approval independent.</p>
                            </div>
                            <button class="btn btn-gold w-100 py-3" onclick="document.getElementById('order').scrollIntoView({behavior:'smooth'})">Confirm & Build Package</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FAQ SECTION -->
    <section class="section-padding bg-light" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-right">
                    <span class="sub-heading">Frequently Asked Questions</span>
                    <h2 class="section-title mb-3">A little more clarity.</h2>
                    <p class="text-muted small pe-lg-3">Have questions regarding offshore company formation, taxes, or legal compliance? Find answers below.</p>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Which offshore jurisdiction should I select for my business?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Selection depends on your target market, banking requirements, tax residence, and privacy needs. BVI is ideal for holding entities and VC funding, while Seychelles offers cost-effective privacy, and the UAE provides high-reputation prestige with regional treaty access.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What compliance documents are required for incorporation?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted small">
                                    Under international Anti-Money Laundering (AML) standards, you must provide a certified copy of your valid passport, proof of residential address (utility bill issued within 3 months), and a brief business profile or CV.
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
                                    Yes. We partner with top-tier international digital EMI banks and traditional financial institutions in Singapore, Switzerland, and the UAE that allow remote bank account opening for non-resident companies.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CONSULTATION CTA BANNER -->
    <section class="section-padding">
        <div class="container" data-aos="fade-up">
            <div class="cta-banner d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4">
                <div>
                    <h3 class="fw-bold mb-1">Not sure which path to take?</h3>
                    <p class="mb-0 text-white-50">Speak directly with our international corporate structuring advisors for custom guidance.</p>
                </div>
                <a href="mailto:support@devotionglobalcsp.com" class="btn btn-gold px-4 py-3 text-nowrap">Speak to an Advisor ↗</a>
            </div>
        </div>
    </section>
</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<script>
    AOS.init({ duration: 800, once: true });

    // Interactive Order Wizard Logic
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
