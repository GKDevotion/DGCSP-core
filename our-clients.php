<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';
?>

<style>
    
    /* Gold Banner Header Section */
    .gold-hero-banner {
        background: linear-gradient(135deg, var(--brand-dark) 0%, #1a1a1a 40%, var(--dark-gold) 100%);
        color: var(--white);
        padding: 80px 0 70px 0;
        position: relative;
        overflow: hidden;
        border-bottom: 3px solid var(--gold-primary);
    }

    .gold-hero-banner::before {
        content: '';
        position: absolute;
        top: -20%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, var(--overlay-gold) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .gold-badge {
        background-color: rgba(171, 129, 57, 0.2);
        color: var(--gold-light);
        border: 1px solid var(--gold-primary);
        font-size: 0.85rem;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    /* Custom Search Box */
    .search-box-gold {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        border: 1px solid var(--gold-border);
        border-radius: 50px;
        padding: 6px 8px 6px 22px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }

    .search-box-gold:focus-within {
        border-color: var(--gold-primary);
        box-shadow: 0 0 15px rgba(171, 129, 57, 0.3);
        background: rgba(255, 255, 255, 0.18);
    }

    .search-box-gold input {
        background: transparent;
        border: none;
        color: var(--white);
        font-size: 0.95rem;
    }

    .search-box-gold input::placeholder {
        color: rgba(255, 255, 255, 0.65);
    }

    .search-box-gold input:focus {
        box-shadow: none;
        background: transparent;
        color: var(--white);
    }

    .btn-gold-action {
        background-color: var(--gold-primary);
        color: var(--white);
        border-radius: 30px;
        font-weight: 600;
        padding: 10px 24px;
        border: none;
        transition: var(--transition);
    }

    .btn-gold-action:hover {
        background-color: var(--gold-hover);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(171, 129, 57, 0.35);
    }

    /* Hero Stat Counters */
    .stat-card-gold {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid var(--gold-border);
        border-radius: var(--card-radius);
        padding: 20px 15px;
        text-align: center;
        backdrop-filter: blur(8px);
        transition: var(--transition);
    }

    .stat-card-gold:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--gold-primary);
    }

    .stat-number-gold {
        font-size: 2rem;
        font-weight: 800;
        color: #e5c07b;
        line-height: 1.2;
    }

    /* Filter Tabs */
    .category-tabs-gold {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 45px;
    }

    .btn-filter-gold {
        border-radius: 30px;
        padding: 10px 24px;
        font-weight: 600;
        font-size: 0.9rem;
        border: 1px solid var(--gold-border);
        background-color: var(--white);
        color: var(--text-dark);
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }

    .btn-filter-gold:hover, .btn-filter-gold.active {
        background-color: var(--gold-primary);
        color: var(--white);
        border-color: var(--gold-primary);
        box-shadow: var(--shadow-md);
    }

    /* Client Grid & Cards */
    .client-card-gold {
        background: var(--white);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-card);
        transition: var(--transition);
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        position: relative;
    }

    .client-card-gold:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-hover);
        border-color: var(--gold-primary);
    }

    .client-logo-container {
        height: 110px;
        background: linear-gradient(180deg, var(--gold-light) 0%, #ffffff 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border-bottom: 1px solid var(--gold-border);
        position: relative;
    }

    .client-badge-gold {
        background-color: var(--gold-light);
        color: var(--dark-gold);
        border: 1px solid var(--gold-border);
        font-weight: 600;
        font-size: 0.75rem;
        padding: 5px 12px;
        border-radius: 20px;
    }

    .tag-pill-gold {
        font-size: 0.75rem;
        background: var(--gray-color);
        color: var(--brand-text-sub);
        padding: 4px 10px;
        border-radius: 6px;
        margin-right: 6px;
        margin-bottom: 6px;
        display: inline-block;
        border: 1px solid var(--brand-grey);
    }

    .btn-outline-gold {
        color: var(--gold-primary);
        border: 1px solid var(--gold-primary);
        background: transparent;
        font-weight: 600;
        border-radius: 30px;
        transition: var(--transition);
    }

    .btn-outline-gold:hover {
        background: var(--gold-primary);
        color: var(--white);
        box-shadow: 0 4px 12px rgba(171, 129, 57, 0.25);
    }

    /* Featured Spotlight */
    .spotlight-card-gold {
        background: var(--golden-gradient-background);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-border);
        padding: 45px;
        box-shadow: var(--shadow-md);
        position: relative;
        overflow: hidden;
    }

    .spotlight-metric-box {
        background: var(--white);
        border-radius: 12px;
        padding: 16px;
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-sm);
        text-align: center;
    }

    /* Testimonials */
    .testimonial-card-gold {
        background: var(--white);
        border-radius: var(--card-radius);
        padding: 40px;
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-card);
        position: relative;
    }

    .quote-icon-gold {
        font-size: 3rem;
        color: var(--overlay-gold);
        position: absolute;
        top: 20px;
        right: 30px;
    }

    /* CTA Section */
    .cta-gold-banner {
        background: linear-gradient(135deg, var(--brand-dark) 0%, var(--dark-gold) 100%);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-primary);
        color: var(--white);
        padding: 60px 40px;
        box-shadow: var(--shadow-hover);
    }

    .btn-cta-gold {
        background-color: var(--gold-primary);
        color: var(--white);
        font-weight: 700;
        padding: 14px 36px;
        border-radius: 30px;
        border: 2px solid var(--gold-light);
        transition: var(--transition);
        text-decoration: none;
        display: inline-block;
    }

    .btn-cta-gold:hover {
        background-color: var(--white);
        color: var(--dark-gold);
        border-color: var(--white);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    /* Modal Custom Styling */
    .modal-content-gold {
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-primary);
        box-shadow: var(--shadow-hover);
        background: var(--white);
    }

    .modal-header-gold {
        border-bottom: 1px solid var(--gold-border);
        background: var(--gold-light);
    }
</style>

<!-- 1. HEADER BANNER SECTION -->
<section class="gold-hero-banner" id="client-hero">
    <div class="container relative-10">
        <div class="row align-items-center gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <span class="badge gold-badge rounded-pill px-3 py-2 mb-3">
                    <i class="fa-solid fa-crown me-2 text-warning"></i> Premier Partner Network
                </span>
                <h1 class="display-4 text-white fw-bold mb-3">Our Valued Clients & Success Partners</h1>
                <p class="lead text-white-50 mb-4">Empowering global enterprise leaders, innovative startups, and visionary brands through bespoke digital engineering and strategic transformation.</p>
                
                <!-- Search Input Filter -->
                <div class="search-box-gold d-flex align-items-center max-w-lg mb-2">
                    <i class="fa-solid fa-magnifying-glass text-white-50 me-2"></i>
                    <input type="text" id="clientSearchInput" class="form-control" placeholder="Search by company name, industry, or key technology...">
                    <button class="btn btn-gold-action" type="button">Search</button>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="200">0</div>
                            <div class="text-white-50 small mt-1">Clients Served</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="99">0</div>
                            <div class="text-white-50 small mt-1">% Success Rate</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="35">0</div>
                            <div class="text-white-50 small mt-1">Countries Reached</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="15">0</div>
                            <div class="text-white-50 small mt-1">Years Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. CLIENT GRID & FILTER TABS SECTION -->
<section class="py-5" id="client-directory">
    <div class="container py-4">
        <div class="text-center max-w-2xl mx-auto mb-4" data-aos="fade-up">
            <h6 class="text-uppercase fw-bold letter-spacing-1" style="color: var(--gold-primary);">Client Portfolio</h6>
            <h2 class="fw-bold mb-2">Distinguished Client Network</h2>
            <p class="text-muted">Explore our track record of collaborative excellence across diverse industries.</p>
        </div>

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
<section class="py-5" style="background-color: var(--gold-light);">
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
<section class="py-5">
    <div class="container py-4">
        <div class="text-center max-w-2xl mx-auto mb-5" data-aos="fade-up">
            <h6 class="text-uppercase fw-bold letter-spacing-1" style="color: var(--gold-primary);">Client Endorsements</h6>
            <h2 class="fw-bold">What Industry Leaders Say</h2>
            <p class="text-muted">Unfiltered feedback from partners who trust us with their critical platforms.</p>
        </div>

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
<section class="py-5">
    <div class="container" data-aos="zoom-in">
        <div class="cta-gold-banner text-center">
            <h2 class="display-6 text-white fw-bold mb-3">Ready to Build Your Success Story?</h2>
            <p class="lead text-white-50 mb-4 max-w-xl mx-auto">Join our ecosystem of industry-leading enterprise partners and elevate your digital engineering capabilities today.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#" class="btn-cta-gold">Schedule Executive Consultation</a>
            </div>
        </div>
    </div>
</section>

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