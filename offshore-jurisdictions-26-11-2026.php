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

    /* Keyframe Animations */
    @keyframes floatAnim {
        0% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-10px) rotate(2deg); }
        100% { transform: translateY(0px) rotate(0deg); }
    }
    .floating-element { animation: floatAnim 4.5s ease-in-out infinite; }

    /* 1. HERO SECTION WITH BACKGROUND SVG & CORNER ELEMENTS */
    .hero-wrapper {
        background: radial-gradient(circle at 85% 15%, rgba(184, 150, 85, 0.18) 0%, rgba(255, 255, 255, 0) 55%),
                    linear-gradient(135deg, #ffffff 0%, #fbf9f4 100%);
        padding: 100px 0 85px;
        position: relative;
        overflow: hidden;
    }

    .hero-bg-grid {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(184, 150, 85, 0.15) 1px, transparent 1px);
        background-size: 28px 28px;
        opacity: 0.6;
        pointer-events: none;
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

    /* Globe & Corner Visuals */
    .globe-visual-wrapper {
        position: relative;
        width: 370px;
        height: 370px;
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

    /* 2. ADAPTED FROM image_e7330a.png: FULL-WIDTH ACCESS STRIP WITH BADGES & 3D POLYGONS */
    .access-platform-strip {
        background: linear-gradient(135deg, var(--dark-navy) 0%, var(--navy-accent) 100%);
        padding: 50px 0;
        position: relative;
        color: var(--white);
        overflow: hidden;
    }
    .platform-icon-bar {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 18px;
        padding: 14px 28px;
        display: inline-flex;
        gap: 20px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }
    .platform-icon-btn {
        width: 58px;
        height: 58px;
        border-radius: 14px;
        background: #ffffff;
        box-shadow: 0 4px 14px rgba(0,0,0,0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        color: var(--dark-navy);
        transition: var(--transition);
    }
    .platform-icon-btn:hover {
        background: var(--gold-light);
        color: var(--gold-primary);
        transform: translateY(-4px);
    }

    /* Floating 3D Graphic Polygon Accents */
    .poly-shape {
        position: absolute;
        pointer-events: none;
        z-index: 2;
    }
    .poly-1 { right: 8%; top: 15%; width: 50px; }
    .poly-2 { right: 4%; bottom: 12%; width: 65px; }

    /* 3. ADAPTED FROM image_e7328d.png: TRI-CIRCULAR HUB GRID */
    .tri-hub-container {
        position: relative;
        max-width: 650px;
        margin: 0 auto;
        padding: 40px 0;
    }
    .tri-circle-item {
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: var(--white);
        border: 1px solid var(--gold-border);
        box-shadow: 0 16px 40px rgba(15, 28, 46, 0.08);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 30px;
        position: relative;
        z-index: 2;
        transition: var(--transition);
    }
    .tri-circle-item:hover {
        transform: scale(1.05);
        border-color: var(--gold-primary);
        box-shadow: var(--shadow-md);
    }
    .tri-hub-center-badge {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: var(--gold-primary);
        border-radius: 50%;
        z-index: 3;
        box-shadow: 0 0 25px rgba(184, 150, 85, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.8rem;
    }
    .tri-number {
        font-size: 2.2rem;
        font-weight: 700;
        color: #cbd5e1;
        margin-top: 5px;
    }

    /* 4. ADAPTED FROM image_e7281b.png: FLOATING ICON CLOUD CONTAINER */
    .icon-cloud-section {
        background: linear-gradient(180deg, #ffffff 0%, var(--bg-slate) 100%);
        position: relative;
        padding: 80px 0;
        overflow: hidden;
    }
    .cloud-icon-card {
        background: var(--white);
        border-radius: 18px;
        padding: 16px;
        box-shadow: 0 14px 30px rgba(15, 28, 46, 0.08);
        border: 1px solid var(--gold-border);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
    }
    .cloud-icon-card:hover {
        transform: translateY(-8px) scale(1.08);
        border-color: var(--gold-primary);
    }

    /* 5. ADAPTED FROM image_e727be.png: CALLOUT / RISK NOTICE BOX WITH 3D ACCENTS */
    .notice-callout-card {
        background: var(--white);
        border: 1px solid var(--gold-border);
        border-radius: 20px;
        padding: 40px;
        box-shadow: var(--shadow-sm);
        position: relative;
    }
    .notice-card-header {
        background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-hover) 100%);
        color: var(--white);
        border-radius: 12px;
        padding: 18px 24px;
        font-weight: 600;
        margin-bottom: 25px;
    }
    .chevron-list li {
        position: relative;
        padding-left: 24px;
        margin-bottom: 12px;
        color: var(--text-muted);
        font-size: 0.92rem;
    }
    .chevron-list li::before {
        content: '❯';
        position: absolute;
        left: 0;
        color: var(--gold-primary);
        font-weight: 700;
    }

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

    /* Comparison Table */
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
        position: relative;
        overflow: hidden;
    }

    /* Section artwork: a consistent atlas and document motif throughout the page. */
    .hero-wrapper {
        background-image: url('<?= $img ?>/<?= $heroFile ?>'), radial-gradient(circle at 85% 15%, rgba(184,150,85,.18), transparent 55%), linear-gradient(135deg,#fff 0%,#fbf9f4 100%);
        background-size: cover;
        background-position: center;
    }
    .hero-bg-grid { opacity: .22; }
    .globe-container { background: radial-gradient(circle at 35% 32%,rgba(255,255,255,.98),rgba(232,224,205,.78)); }
    .access-platform-strip::after {
        content: ''; position: absolute; width: 360px; height: 360px; right: 12%; top: 50%;
        transform: translateY(-50%); border: 1px solid rgba(255,255,255,.12); border-radius: 50%;
        box-shadow: 0 0 0 34px rgba(255,255,255,.035), 0 0 0 68px rgba(255,255,255,.025); pointer-events:none;
    }
    .flow-step-card { position: relative; }
    .flow-step-node { background: radial-gradient(circle at 35% 30%,#fff 0%,#f6f0e3 100%); }
    .map-matrix-wrapper { overflow: hidden; position: relative; }
    .map-artwork { display:block; width:100%; max-height:180px; object-fit:contain; object-position:left center; margin-top:18px; opacity:.92; }
    .country-card { position:relative; overflow:hidden; }
    .country-card::before { content:''; position:absolute; width:150px; height:150px; top:-92px; right:-55px; border-radius:50%; background:radial-gradient(circle,rgba(184,150,85,.16),rgba(184,150,85,0) 70%); pointer-events:none; }
    .notice-callout-card { overflow:hidden; background:linear-gradient(115deg,#fff 0%,#fff 68%,#fbf8f0 100%); }
    .table-responsive { position:relative; }
    .table-matrix thead th { background-image:linear-gradient(110deg,#0f1c2e,#203a5d); }
    .package-card { position:relative; overflow:hidden; }
    .package-card::after { content:''; display:block; width:96px; height:96px; position:absolute; right:-38px; bottom:-44px; border:1px solid rgba(184,150,85,.25); border-radius:50%; box-shadow:0 0 0 12px rgba(184,150,85,.045),0 0 0 24px rgba(184,150,85,.035); pointer-events:none; }
    .order-wrapper { background-image:radial-gradient(circle at 100% 0%,rgba(184,150,85,.16),transparent 32%),linear-gradient(135deg,#fbf9f4,#f7f4ed); }
    .order-card,.summary-card { position:relative; overflow:hidden; }
    .cta-banner::after { content:''; position:absolute; width:260px; height:260px; right:12%; top:-150px; border:1px solid rgba(255,255,255,.16); border-radius:50%; box-shadow:0 0 0 24px rgba(255,255,255,.035),0 0 0 48px rgba(255,255,255,.025); pointer-events:none; }
    @media (max-width: 767px) {
        .hero-wrapper { background-position:62% center; }
        .map-artwork { max-height:130px; }
        .access-platform-strip::after { right:-180px; }
    }
</style>

<main>
    <!-- 1. HERO BANNER SECTION WITH AOS ANIMATED GRAPHICS -->
    <section class="hero-wrapper">
        <div class="hero-bg-grid"></div>
        <div class="container position-relative">
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
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="globe-visual-wrapper">
                        <div class="globe-container">
                            <svg viewBox="0 0 300 300" fill="none" stroke="#b8965580" style="width:90%; height:90%;">
                                <ellipse cx="150" cy="150" rx="60" ry="149"></ellipse>
                                <ellipse cx="150" cy="150" rx="115" ry="149"></ellipse>
                                <path d="M0 150H300M18 80Q150 40 282 80M18 220Q150 260 282 220"></path>
                            </svg>
                            <div class="float-card fc-1 floating-element" data-aos="fade-down" data-aos-delay="300">
                                <span class="fi fi-vg me-2"></span><strong>BVI Company</strong>
                                <div class="text-muted extra-small">Zero Local Taxes</div>
                            </div>
                            <div class="float-card fc-2 floating-element" data-aos="fade-left" data-aos-delay="400">
                                <span class="fi fi-ae me-2"></span><strong>UAE · RAK ICC</strong>
                                <div class="text-muted extra-small">100% Foreign Ownership</div>
                            </div>
                            <div class="float-card fc-3 floating-element" data-aos="fade-up" data-aos-delay="500">
                                <span class="fi fi-sc me-2"></span><strong>Seychelles IBC</strong>
                                <div class="text-muted extra-small">Fast 1-Week Formation</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. REFERENCE ADAPTATION 1 (image_e7330a.png & image_e727e1.jpg): FULL-WIDTH DARK STRIP WITH PLATFORM ACCESS BADGES & 3D POLYGONS -->
    <section class="access-platform-strip">
        <!-- Corner 3D Polygon Graphics from reference -->
        <svg class="poly-shape poly-1 floating-element" viewBox="0 0 100 100" fill="none">
            <polygon points="50,15 90,85 10,85" fill="#b89655" opacity="0.8" />
        </svg>
        <svg class="poly-shape poly-2 floating-element" style="animation-delay: 2s;" viewBox="0 0 100 100" fill="none">
            <polygon points="50,10 90,50 50,90 10,50" fill="#ffffff" opacity="0.4" />
        </svg>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 text-center" data-aos="fade-right">
                    <div class="platform-icon-bar">
                        <div class="platform-icon-btn"><i class="bi bi-windows"></i></div>
                        <div class="platform-icon-btn"><i class="bi bi-android2"></i></div>
                        <div class="platform-icon-btn"><i class="bi bi-apple"></i></div>
                        <div class="platform-icon-btn"><i class="bi bi-display"></i></div>
                        <div class="platform-icon-btn"><i class="bi bi-globe"></i></div>
                    </div>
                    <h3 class="fw-bold text-white mt-4 mb-0" data-aos="fade-up" data-aos-delay="100">Deploy Entities Across Any Device Now</h3>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <p class="text-white-50 lead mb-0">Our offshore formation portal is engineered for maximum stability, precision, and complete remote management of your global corporate structures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Built around your success -->
    <style>
        /* Option 2: Connected Flow */
        .flow-line-container {
            position: relative;
            padding: 30px 0;
        }
        .flow-line-container::before {
            content: '';
            position: absolute;
            top: 90px;
            left: 10%;
            right: 10%;
            height: 2px;
            background: repeating-linear-gradient(90deg, var(--gold-primary) 0, var(--gold-primary) 8px, transparent 8px, transparent 16px);
            z-index: 1;
        }
        @media (max-width: 991px) {
            .flow-line-container::before { display: none; }
        }
        .flow-step-node {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--white);
            border: 2px solid var(--gold-primary);
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--gold-primary);
            margin: 0 auto 24px;
            position: relative;
            z-index: 2;
            transition: var(--transition);
        }
        .flow-step-card:hover .flow-step-node {
            background: var(--dark-navy);
            color: var(--white);
            transform: scale(1.1);
        }
    </style>   
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center max-width-600 mx-auto mb-5" data-aos="fade-up">
                <span class="sub-heading">Corporate Foundation</span>
                <h2 class="section-title">Built around your success</h2>
            </div>

            <div class="flow-line-container">
                <div class="row g-4 text-center">
                    <!-- Step 1 -->
                    <div class="col-lg-4 flow-step-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="flow-step-node">
                            <i class="bi bi-sliders"></i>
                        </div>
                        <span class="badge bg-warning bg-opacity-10 text-dark px-3 py-1 mb-2 fw-bold">Step 01</span>
                        <h5 class="fw-bold text-dark mb-2">Tools That Work For Everyone</h5>
                        <p class="text-muted small px-lg-3">Intuitive digital tools tailored for both first-time founders and complex enterprise operations.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-4 flow-step-card" data-aos="zoom-in" data-aos-delay="250">
                        <div class="flow-step-node">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <span class="badge bg-warning bg-opacity-10 text-dark px-3 py-1 mb-2 fw-bold">Step 02</span>
                        <h5 class="fw-bold text-dark mb-2">Actionable Insights</h5>
                        <p class="text-muted small px-lg-3">In-depth regulatory intelligence and jurisdictional reporting to maximize tax efficiencies.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-4 flow-step-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="flow-step-node">
                            <i class="bi bi-headset"></i>
                        </div>
                        <span class="badge bg-warning bg-opacity-10 text-dark px-3 py-1 mb-2 fw-bold">Step 03</span>
                        <h5 class="fw-bold text-dark mb-2">Dedicated Support</h5>
                        <p class="text-muted small px-lg-3">Hands-on account management and continuous post-incorporation advisory.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. REFERENCE ADAPTATION 3 (image_e7281b.png): FLOATING 3D ICON MATRIX CLOUD -->
    
    <style>
        /* Concept 4 Styles */
        .map-matrix-wrapper {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 20px;
            padding: 40px;
            box-shadow: var(--shadow-md);
        }
        .jurisdiction-chip {
            background: var(--bg-slate);
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 14px;
            transition: var(--transition);
        }
        .jurisdiction-chip:hover {
            border-color: var(--gold-primary);
            background: var(--gold-light);
            transform: translateY(-4px);
            box-shadow: var(--shadow-sm);
        }
    </style>
    <section class="section-padding">
        <div class="container" data-aos="fade-up">
            <div class="map-matrix-wrapper">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5" data-aos="fade-right">
                        <span class="sub-heading">Global Reach</span>
                        <h2 class="section-title mb-3">Multi-Jurisdiction Entities at Your Fingertips</h2>
                        <p class="text-muted small mb-4">Incorporate and coordinate tax-optimized holdings across prime financial hubs worldwide with complete peace of mind.</p>
                        
                        <div class="p-3 rounded-3 bg-light border mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-shield-check text-warning fs-3"></i>
                                <div>
                                    <strong class="small d-block text-dark">Direct Registry Access</strong>
                                    <span class="extra-small text-muted">Licensed agents in all featured jurisdictions.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                        <div class="row g-3">
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="jurisdiction-chip">
                                    <span class="fi fi-vg fs-2"></span>
                                    <div>
                                        <strong class="d-block small text-dark">BVI Company</strong>
                                        <span class="extra-small text-muted">Caribbean Region</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="jurisdiction-chip">
                                    <span class="fi fi-sc fs-2"></span>
                                    <div>
                                        <strong class="d-block small text-dark">Seychelles IBC</strong>
                                        <span class="extra-small text-muted">Indian Ocean</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
                                <div class="jurisdiction-chip">
                                    <span class="fi fi-ae fs-2"></span>
                                    <div>
                                        <strong class="d-block small text-dark">UAE RAK ICC</strong>
                                        <span class="extra-small text-muted">Middle East</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                                <div class="jurisdiction-chip">
                                    <span class="fi fi-gb fs-2"></span>
                                    <div>
                                        <strong class="d-block small text-dark">United Kingdom</strong>
                                        <span class="extra-small text-muted">Europe Region</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
                                <div class="jurisdiction-chip">
                                    <span class="fi fi-sg fs-2"></span>
                                    <div>
                                        <strong class="d-block small text-dark">Singapore Pte Ltd</strong>
                                        <span class="extra-small text-muted">Asia-Pacific</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="600">
                                <div class="jurisdiction-chip">
                                    <span class="fi fi-ky fs-2"></span>
                                    <div>
                                        <strong class="d-block small text-dark">Cayman Islands</strong>
                                        <span class="extra-small text-muted">Caribbean Hub</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. JURISDICTIONS CATALOGUE GRID -->
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

    <!-- 6. REFERENCE ADAPTATION 4 (image_e727be.png): RISK MANAGEMENT CALLOUT CARD WITH CHEVRONS & 3D CORNER SHAPES -->
    <section class="section-padding bg-light">
        <div class="container" data-aos="fade-up">
            <div class="notice-callout-card">
                <div class="notice-card-header">
                    At Devotion Global CSP, we provide risk management & legal compliance protocols ensuring that clients incorporate safely and with total regulatory clarity.
                </div>
                <ul class="list-unstyled chevron-list mb-0">
                    <li><strong>Compliance Transparency:</strong> Jurisdictional guidelines and annual government license fees are disclosed upfront.</li>
                    <li><strong>Banking Regulatory Alignment:</strong> Cross-border entity structures undergo pre-screening to match corporate banking KYC standards.</li>
                    <li><strong>Data Security & Privacy:</strong> All client documentation is stored within encrypted corporate vaults adhering to strict international privacy mandates.</li>
                </ul>
                <svg class="poly-shape poly-2 floating-element" style="bottom: 10px; right: 20px; width: 45px;" viewBox="0 0 100 100" fill="none">
                    <polygon points="50,10 90,50 50,90 10,50" fill="#b89655" opacity="0.6" />
                </svg>
            </div>
        </div>
    </section>

    <!-- 7. COMPARISON MATRIX -->
    <section class="section-padding pt-0 bg-light">
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

    <!-- 8. SERVICE BUNDLES -->
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

    <!-- 9. INTERACTIVE ORDER BUILDER -->
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

    <!-- 10. CONSULTATION CTA BANNER -->
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
