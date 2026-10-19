<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/our-clients';
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
<header class="ip-hero ip-hero--tall" id="client-hero">
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Premier Partner Network</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Our Valued Clients &amp;<br><span class="ip-gold">Success Partners</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Empowering global enterprise leaders, innovative startups, and visionary brands through bespoke digital engineering and strategic transformation.</p>
                <div class="hero-search-box" data-aos="fade-up" data-aos-delay="450">
                    <input type="text" id="clientSearchInput" class="form-control" placeholder="Search by company name, industry, or key technology...">
                    <button class="search-btn" type="button" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                    <span class="ip-stat__num stat-number-gold" data-target="200">0</span>
                    <span class="ip-stat__label">Clients Served</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num stat-number-gold" data-target="99">0</span>
                    <span class="ip-stat__label">% Success Rate</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num stat-number-gold" data-target="35">0</span>
                    <span class="ip-stat__label">Countries Reached</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num stat-number-gold" data-target="15">0</span>
                    <span class="ip-stat__label">Years Excellence</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. CLIENT GRID & FILTER TABS SECTION -->
<section class="ip-section ip-section--gray" id="client-directory">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container py-4">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill">Client Portfolio</span><h2 class="ip-title">Distinguished Client Network</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Explore our track record of collaborative excellence across diverse industries.</p></div>

        <!-- Filter Buttons -->
        <div class="category-tabs-gold" data-aos="fade-up" data-aos-delay="100">
            <button class="btn-filter-gold active" data-filter="all">All Clients</button>
            <button class="btn-filter-gold" data-filter="enterprise">Enterprise</button>
            <button class="btn-filter-gold" data-filter="tech">Tech & Startups</button>
            <button class="btn-filter-gold" data-filter="ecommerce">E-Commerce</button>
            <button class="btn-filter-gold" data-filter="healthcare">Healthcare</button>
            <button class="btn-filter-gold" data-filter="finance">Finance</button>
        </div>

        <!-- Client Grid Container -->
        <div class="row g-4" id="clientGrid">
            
            <!-- Client Card 1 -->
            <div class="col-md-6 col-lg-4 client-item" data-category="tech" data-name="Apex Logistics Systems" data-aos="fade-up" data-aos-delay="100">
                <div class="client-card-gold">
                    <div class="client-logo-container">
                        <svg width="140" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="8" fill="#ab8139"/>
                            <path d="M10 26L18 10L26 26" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="45" y="25" font-family="Poppins" font-weight="700" font-size="18" fill="#2b2b2b">APEX LOG</text>
                        </svg>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="client-badge-gold">Tech & Startups</span>
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Partner 2022</span>
                        </div>
                        <h5 class="card-title fw-bold">Apex Logistics</h5>
                        <p class="card-text text-muted small flex-grow-1">Automated cloud fleet routing engine delivering end-to-end global supply chain visibility.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Cloud AI</span>
                            <span class="tag-pill-gold">Microservices</span>
                            <span class="tag-pill-gold">React</span>
                        </div>
                        <button class="btn btn-outline-gold btn-sm w-100 py-2 view-modal-btn" 
                                data-title="Apex Logistics Systems" 
                                data-industry="Tech & Startups"
                                data-desc="Architected a resilient real-time fleet orchestration dashboard handling millions of tracking telemetry updates per second."
                                data-results="Reduced overall fuel overhead by 28% and increased delivery punctuality to 99.4%.">
                            View Case Study <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Client Card 2 -->
            <div class="col-md-6 col-lg-4 client-item" data-category="finance" data-name="Aureus Wealth Bank" data-aos="fade-up" data-aos-delay="200">
                <div class="client-card-gold">
                    <div class="client-logo-container">
                        <svg width="140" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="18" cy="18" r="16" fill="#966e27"/>
                            <path d="M12 18H24M18 12V24" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <text x="45" y="25" font-family="Poppins" font-weight="700" font-size="18" fill="#2b2b2b">AUREUS</text>
                        </svg>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="client-badge-gold">Finance & Banking</span>
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Partner 2020</span>
                        </div>
                        <h5 class="card-title fw-bold">Aureus Wealth</h5>
                        <p class="card-text text-muted small flex-grow-1">Next-generation private wealth management platform engineered for institutional security.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Fintech</span>
                            <span class="tag-pill-gold">Security</span>
                            <span class="tag-pill-gold">Node.js</span>
                        </div>
                        <button class="btn btn-outline-gold btn-sm w-100 py-2 view-modal-btn"
                                data-title="Aureus Wealth Bank" 
                                data-industry="Finance & Banking"
                                data-desc="Overhauled the online banking security core to comply with global financial regulatory standards while accelerating account onboarding."
                                data-results="Achieved 100% security audit compliance and scaled client assets under management by $1.2B.">
                            View Case Study <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Client Card 3 -->
            <div class="col-md-6 col-lg-4 client-item" data-category="healthcare" data-name="Veritas Health Science" data-aos="fade-up" data-aos-delay="300">
                <div class="client-card-gold">
                    <div class="client-logo-container">
                        <svg width="140" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="18" fill="#ab8139"/>
                            <path d="M18 10V26M10 18H26" stroke="white" stroke-width="4" stroke-linecap="round"/>
                            <text x="45" y="25" font-family="Poppins" font-weight="700" font-size="18" fill="#2b2b2b">VERITAS</text>
                        </svg>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="client-badge-gold">Healthcare</span>
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Partner 2021</span>
                        </div>
                        <h5 class="card-title fw-bold">Veritas Health</h5>
                        <p class="card-text text-muted small flex-grow-1">HIPAA-compliant telehealth ecosystem facilitating secure remote clinical diagnoses.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Telehealth</span>
                            <span class="tag-pill-gold">HIPAA</span>
                            <span class="tag-pill-gold">WebRTC</span>
                        </div>
                        <button class="btn btn-outline-gold btn-sm w-100 py-2 view-modal-btn"
                                data-title="Veritas Health Science" 
                                data-industry="Healthcare"
                                data-desc="Created a unified patient portal integrating video consultation, electronic records, and AI triage."
                                data-results="Facilitated over 450,000 successful virtual consultations in the first year.">
                            View Case Study <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Client Card 4 -->
            <div class="col-md-6 col-lg-4 client-item" data-category="ecommerce" data-name="Luxe Retail Global" data-aos="fade-up" data-aos-delay="100">
                <div class="client-card-gold">
                    <div class="client-logo-container">
                        <svg width="140" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="8" fill="#2b2b2b"/>
                            <path d="M12 14L18 26L24 14" stroke="#ab8139" stroke-width="3" stroke-linecap="round"/>
                            <text x="45" y="25" font-family="Poppins" font-weight="700" font-size="18" fill="#ab8139">LUXE</text>
                        </svg>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="client-badge-gold">E-Commerce</span>
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Partner 2023</span>
                        </div>
                        <h5 class="card-title fw-bold">Luxe Retail</h5>
                        <p class="card-text text-muted small flex-grow-1">Headless high-fashion commerce platform engineered for ultra-fast mobile checkouts.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Headless</span>
                            <span class="tag-pill-gold">Shopify Plus</span>
                            <span class="tag-pill-gold">GraphQL</span>
                        </div>
                        <button class="btn btn-outline-gold btn-sm w-100 py-2 view-modal-btn"
                                data-title="Luxe Retail Global" 
                                data-industry="E-Commerce"
                                data-desc="Re-designed the digital storefront to optimize mobile page load speeds under 1.2 seconds globally."
                                data-results="Boosted checkout conversion rate by 32% during seasonal peak campaigns.">
                            View Case Study <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Client Card 5 -->
            <div class="col-md-6 col-lg-4 client-item" data-category="enterprise" data-name="Sovereign Enterprise Tech" data-aos="fade-up" data-aos-delay="200">
                <div class="client-card-gold">
                    <div class="client-logo-container">
                        <svg width="140" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="36" height="36" rx="8" fill="#966e27"/>
                            <circle cx="18" cy="18" r="7" stroke="white" stroke-width="3"/>
                            <text x="45" y="25" font-family="Poppins" font-weight="700" font-size="18" fill="#2b2b2b">SOVEREIGN</text>
                        </svg>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="client-badge-gold">Enterprise</span>
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Partner 2019</span>
                        </div>
                        <h5 class="card-title fw-bold">Sovereign Corp</h5>
                        <p class="card-text text-muted small flex-grow-1">Multi-region enterprise ERP modernization and cloud DevOps continuous deployment pipelines.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">DevOps</span>
                            <span class="tag-pill-gold">AWS</span>
                            <span class="tag-pill-gold">Kubernetes</span>
                        </div>
                        <button class="btn btn-outline-gold btn-sm w-100 py-2 view-modal-btn"
                                data-title="Sovereign Enterprise Tech" 
                                data-industry="Enterprise"
                                data-desc="Migrated legacy on-premise infrastructure into a secure hybrid multi-cloud architecture."
                                data-results="Lowered cloud compute overhead by 41% while maintaining zero unexpected downtime.">
                            View Case Study <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Client Card 6 -->
            <div class="col-md-6 col-lg-4 client-item" data-category="tech" data-name="Aegis AI Cyber Labs" data-aos="fade-up" data-aos-delay="300">
                <div class="client-card-gold">
                    <div class="client-logo-container">
                        <svg width="140" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L30 11V19C30 26.5 24.8 33.5 18 35C11.2 33.5 6 26.5 6 19V11L18 6Z" fill="#ab8139"/>
                            <text x="45" y="25" font-family="Poppins" font-weight="700" font-size="18" fill="#2b2b2b">AEGIS AI</text>
                        </svg>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="client-badge-gold">Tech & Startups</span>
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Partner 2023</span>
                        </div>
                        <h5 class="card-title fw-bold">Aegis AI Labs</h5>
                        <p class="card-text text-muted small flex-grow-1">Real-time threat detection and AI predictive security monitoring for financial infrastructure.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">AI Security</span>
                            <span class="tag-pill-gold">Python</span>
                            <span class="tag-pill-gold">Vue.js</span>
                        </div>
                        <button class="btn btn-outline-gold btn-sm w-100 py-2 view-modal-btn"
                                data-title="Aegis AI Cyber Labs" 
                                data-industry="Tech & Startups"
                                data-desc="Built a custom machine learning threat mitigation system providing automated intrusion prevention."
                                data-results="Blocked over 85,000 potential security breaches proactively within 6 months.">
                            View Case Study <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Empty Search Result -->
        <div id="noResultsMsg" class="text-center py-5 d-none">
            <i class="fa-solid fa-magnifying-glass display-4 mb-3" style="color: var(--gold-primary);"></i>
            <h5 class="fw-bold">No matching client partners found</h5>
            <p class="text-muted">Try adjusting your search criteria or changing filter selection.</p>
        </div>
    </div>
</section>

<!-- 3. FEATURED CLIENT SPOTLIGHT -->
<section class="ip-section ip-section--cream">
    <canvas class="ip-constellation ip-constellation--left" aria-hidden="true"></canvas>
    <div class="container py-3" data-aos="fade-up">
        <div class="spotlight-card-gold">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <span class="badge rounded-pill px-3 py-2 mb-3" style="background-color: var(--gold-primary); color: white;">
                        <i class="fa-solid fa-star me-1"></i> Spotlight Case Study
                    </span>
                    <h2 class="fw-bold mb-3">Accelerating Modernization for Aureus Wealth Bank</h2>
                    <p class="text-muted mb-4">Discover how our bespoke engineering team helped Aureus Wealth modernize their core transaction API layer across European and Asian markets without disrupting existing banking infrastructure.</p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <div class="spotlight-metric-box">
                                <h3 class="fw-bold mb-1" style="color: var(--dark-gold);">+220%</h3>
                                <span class="text-muted small">Digital Growth</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="spotlight-metric-box">
                                <h3 class="fw-bold mb-1" style="color: var(--gold-primary);">-50%</h3>
                                <span class="text-muted small">Latency Reduction</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="spotlight-metric-box">
                                <h3 class="fw-bold mb-1" style="color: var(--brand-dark);">100%</h3>
                                <span class="text-muted small">Data Compliance</span>
                            </div>
                        </div>
                    </div>

                    <blockquote class="blockquote border-start border-3 ps-3 fst-italic text-secondary small" style="border-color: var(--gold-primary) !important;">
                        "The engineering finesse and dedication delivered were unparalleled. They didn't just build software; they redefined our digital future."
                    </blockquote>
                    <div class="fw-bold mt-2" style="color: var(--brand-dark);">Julian Thorne <span class="text-muted fw-normal text-sm">— Chief Digital Officer, Aureus Wealth</span></div>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80" alt="Spotlight Showcase" class="img-fluid rounded-4 shadow-lg" onerror="this.src='https://placehold.co/600x400/ab8139/ffffff?text=Aureus+Wealth+Case+Study'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. CLIENT TESTIMONIALS -->
<section class="ip-section">
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 3%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container py-4">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill">Client Endorsements</span><h2 class="ip-title">What Industry Leaders Say</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Unfiltered feedback from partners who trust us with their critical platforms.</p></div>

        <div id="goldTestimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="100">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="testimonial-card-gold text-center">
                                <i class="fa-solid fa-quote-right quote-icon-gold"></i>
                                <div class="mb-3" style="color: var(--gold-primary);">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="lead text-dark mb-4">"The professionalism and technical precision were evident from day one. Their team helped us transform a complex supply chain pipeline into an elegant, scalable cloud platform."</p>
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&h=100&q=80" class="rounded-circle mb-3 border border-2" style="border-color: var(--gold-primary) !important;" width="70" height="70" alt="Client Avatar" onerror="this.src='https://placehold.co/100/ab8139/ffffff?text=Elena'">
                                <h6 class="fw-bold mb-0">Elena Rostova</h6>
                                <span class="text-muted small">VP of Logistics, Apex Systems</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="testimonial-card-gold text-center">
                                <i class="fa-solid fa-quote-right quote-icon-gold"></i>
                                <div class="mb-3" style="color: var(--gold-primary);">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="lead text-dark mb-4">"Working with them allowed us to roll out our telehealth portal in record time. Their compliance team ensured HIPAA security without compromising user experience."</p>
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&h=100&q=80" class="rounded-circle mb-3 border border-2" style="border-color: var(--gold-primary) !important;" width="70" height="70" alt="Client Avatar" onerror="this.src='https://placehold.co/100/ab8139/ffffff?text=Marcus'">
                                <h6 class="fw-bold mb-0">Dr. Marcus Vance</h6>
                                <span class="text-muted small">Chief Operations Officer, Veritas Health</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#goldTestimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon rounded-circle p-3" style="background-color: var(--brand-dark);" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#goldTestimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon rounded-circle p-3" style="background-color: var(--brand-dark);" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

<!-- 5. PARTNERSHIP CALL TO ACTION -->
<section class="ip-cta" id="contact">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <h2 class="ip-title">Ready to Build Your Success Story?</h2>
                <p>Join our ecosystem of industry-leading enterprise partners and elevate your digital engineering capabilities today.</p>
                <a href="#" class="ip-btn ip-btn--pill">Schedule Executive Consultation</a>
            </div>
        </div>
    </div>
</section>

</main>

<!-- 6. CASE STUDY DETAILS MODAL -->
<div class="modal fade" id="clientModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content modal-content-gold">
            <div class="modal-header modal-header-gold">
                <span class="client-badge-gold" id="modalIndustry">Industry</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="p-3 rounded-3" style="background-color: var(--gold-light); border: 1px solid var(--gold-border);">
                        <i class="fa-solid fa-building-columns display-6" style="color: var(--gold-primary);"></i>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-1" id="modalTitle" style="color: var(--brand-dark);">Client Name</h3>
                        <p class="text-muted small mb-0"><i class="fa-solid fa-crown me-1" style="color: var(--gold-primary);"></i> Verified Strategic Partner</p>
                    </div>
                </div>

                <h6 class="fw-bold text-uppercase small mb-2" style="color: var(--gold-primary);">Challenge & Solution Architecture</h6>
                <p id="modalDesc" class="text-muted mb-4">Detailed client project breakdown...</p>

                <h6 class="fw-bold text-uppercase small mb-2" style="color: var(--dark-gold);">Measured Business Impact</h6>
                <div class="p-3 rounded-3 mb-4" style="background-color: var(--gold-light); border-left: 4px solid var(--gold-primary);">
                    <p id="modalResults" class="fw-semibold mb-0" style="color: var(--brand-dark);">Key metric impact results...</p>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-gold-action" data-bs-dismiss="modal">Inquire Similar Solution</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize AOS Animation
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });

        // Animated Counter Logic
        const counters = document.querySelectorAll('.stat-number-gold');
        let counterAnimated = false;

        function runCounters() {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const duration = 2000;
                const stepTime = 20;
                const steps = duration / stepTime;
                const increment = target / steps;
                let current = 0;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.innerText = target + (target === 99 ? '%' : '+');
                        clearInterval(timer);
                    } else {
                        counter.innerText = Math.ceil(current) + '+';
                    }
                }, stepTime);
            });
        }

        // Trigger counter on scroll
        window.addEventListener('scroll', () => {
            const heroSection = document.querySelector('.gold-hero-banner');
            if (heroSection) {
                const position = heroSection.getBoundingClientRect();
                if (position.top < window.innerHeight && !counterAnimated) {
                    counterAnimated = true;
                    runCounters();
                }
            }
        });
        runCounters();

        // Category Filter Logic
        const filterButtons = document.querySelectorAll('.btn-filter-gold');
        const clientItems = document.querySelectorAll('.client-item');
        const noResultsMsg = document.getElementById('noResultsMsg');

        filterButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const selectedFilter = this.getAttribute('data-filter');
                filterClients(selectedFilter, document.getElementById('clientSearchInput').value.toLowerCase());
            });
        });

        // Search Bar Live Search
        const searchInput = document.getElementById('clientSearchInput');
        searchInput.addEventListener('keyup', function () {
            const activeFilter = document.querySelector('.btn-filter-gold.active').getAttribute('data-filter');
            filterClients(activeFilter, this.value.toLowerCase());
        });

        function filterClients(category, searchTerm) {
            let visibleCount = 0;

            clientItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                const itemName = item.getAttribute('data-name').toLowerCase();
                const itemText = item.innerText.toLowerCase();

                const matchesCategory = (category === 'all' || itemCategory === category);
                const matchesSearch = itemName.includes(searchTerm) || itemText.includes(searchTerm);

                if (matchesCategory && matchesSearch) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            if (visibleCount === 0) {
                noResultsMsg.classList.remove('d-none');
            } else {
                noResultsMsg.classList.add('d-none');
            }

            AOS.refresh();
        }

        // Dynamic Modal Handling
        const clientModal = new bootstrap.Modal(document.getElementById('clientModal'));
        const modalButtons = document.querySelectorAll('.view-modal-btn');

        modalButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const title = this.getAttribute('data-title');
                dataIndustry = this.getAttribute('data-industry');
                const desc = this.getAttribute('data-desc');
                const results = this.getAttribute('data-results');

                document.getElementById('modalTitle').innerText = title;
                document.getElementById('modalIndustry').innerText = dataIndustry;
                document.getElementById('modalDesc').innerText = desc;
                document.getElementById('modalResults').innerText = results;

                clientModal.show();
            });
        });
    });
</script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>