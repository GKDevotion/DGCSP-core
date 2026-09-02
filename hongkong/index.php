<?php 
require_once __DIR__ . '/../config.php';
include ROOT_PATH . '/hongkong/elements/header.php';
?>

<style>
    /* Page View Switching system */
    .page-view {
        transition: opacity 0.4s ease-in-out;
        display: block;
        opacity: 1;
    }

    .sg-hero-section {
        background: linear-gradient(135deg, rgba(249, 245, 237, 0.9) 0%, rgba(255, 255, 255, 0.95) 100%), url('https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
        padding: 90px 0 70px;
        position: relative;
        border-bottom: 1px solid var(--gold-border);
    }

    .badge-gold {
        background-color: var(--gold-light);
        color: var(--gold-primary);
        border: 1px solid var(--gold-border);
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.8rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 12px;
    }

    /* Cards & Components */
    .card-custom {
        border: 1px solid var(--gold-border);
        border-radius: 12px;
        background: var(--white);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        height: 100%;
    }

    .card-custom:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-color: var(--gold-primary);
    }

    .icon-box {
        width: 54px;
        height: 54px;
        border-radius: 12px;
        background-color: var(--gold-light);
        color: var(--gold-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    /* Custom Buttons */
    .btn-gold {
        background-color: var(--gold-primary);
        color: var(--white);
        font-weight: 500;
        border: none;
        padding: 10px 24px;
        border-radius: 8px;
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }

    .btn-gold:hover, .btn-gold:focus {
        background-color: var(--gold-hover);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-gold {
        background-color: transparent;
        color: var(--gold-primary);
        border: 1.5px solid var(--gold-primary);
        font-weight: 500;
        padding: 10px 24px;
        border-radius: 8px;
        transition: var(--transition);
    }

    .btn-outline-gold:hover {
        background-color: var(--gold-primary);
        color: var(--white);
        border-color: var(--gold-primary);
    }
</style>

<!-- MAIN PAGE CONTAINER -->
<main>

    <!-- ================= PAGE 1: HOME ================= -->
    <div id="page-home" class="page-view">
        <section class="sg-hero-section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-7">
                        <span class="badge-gold"><i class="fa-solid fa-shield-halved me-1"></i> Singapore Jurisdiction Excellence</span>
                        <h1 class="display-6 fw-bold text-dark mb-3">Enterprise-Grade Customer Experience Hubs in Singapore</h1>
                        <p class="lead text-muted mb-4">Empowering global financial institutions, SaaS platforms, and e-commerce leaders with ACRA-compliant, multilingual customer service solutions operated out of Asia's premier business hub.</p>
                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <button class="btn btn-gold btn-lg" onclick="navigateToPage('inquiry')">Custom SG Proposal <i class="fa-solid fa-arrow-right ms-2"></i></button>
                            <button class="btn btn-outline-gold btn-lg" onclick="navigateToPage('investment')">Calculate Setup Cost</button>
                        </div>
                        <div class="row g-3 pt-2 text-center text-sm-start">
                            <div class="col-6 col-sm-4">
                                <div class="fw-bold text-dark fs-4 mb-0" style="color: var(--gold-primary) !important;">100%</div>
                                <small class="text-muted">ACRA & PDPA Compliant</small>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="fw-bold text-dark fs-4 mb-0" style="color: var(--gold-primary) !important;">24/7/365</div>
                                <small class="text-muted">Multilingual APAC Operations</small>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="fw-bold text-dark fs-4 mb-0" style="color: var(--gold-primary) !important;">2-4 Weeks</div>
                                <small class="text-muted">Fast-Track Setup SLA</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card-custom p-4 border-2">
                            <h4 class="fw-bold mb-3"><i class="fa-solid fa-briefcase text-warning me-2"></i> Singapore Quick Setup</h4>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                    <div><strong>Corporate Tax Rate:</strong> 17% competitive flat rate with partial tax exemption incentives.</div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                    <div><strong>Location Tier:</strong> Grade-A Office Hubs (MBFC, Suntec, Jurong Tech District).</div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                    <div><strong>Talent Capabilities:</strong> Native English, Mandarin, Malay, Tamil & Bahasa Indonesia support personnel.</div>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                    <div><strong>Min Setup Capital:</strong> Starting from ~S$10,000 for boutique operational hubs.</div>
                                </li>
                            </ul>
                            <button class="btn btn-gold w-full w-100" onclick="navigateToPage('rules')">Explore SG Rules & Regulations</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .section-title-wrap {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
        }

        .gold-divider {
            width: 70px;
            height: 3px;
            background-color: var(--gold-primary);
            margin: 0 auto 15px;
            border-radius: 2px;
        }
    </style>
    <!-- ================= PAGE 2: INCOME SOURCES ================= -->
    <div id="page-income" class="page-view">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="section-title-wrap">
                    <span class="badge-gold">Revenue Models & Services</span>
                    <h2 class="section-title">Types of Customer Service Income Sources</h2>
                    <div class="gold-divider"></div>
                    <p class="text-muted">How Devotion Global structures profitable client support outsourcing frameworks in Singapore.</p>
                </div>

                <div class="row g-4">
                    <!-- Revenue Model 1 -->
                    <div class="col-lg-6">
                        <div class="card-custom p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box mb-0"><i class="fa-solid fa-repeat"></i></div>
                                <div>
                                    <h4 class="mb-0">BPO Monthly Retainers</h4>
                                    <small class="text-muted">Recurring Service Contracts</small>
                                </div>
                            </div>
                            <p class="text-muted">Fixed monthly seat-based or team-based retainer contracts for enterprises seeking dedicated support teams stationed in Singapore office hubs. Provides predictable cash flow and guaranteed SLA performance.</p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Dedicated Team Management</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Guaranteed 99.9% Uptime SLAs</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Quarterly Quality Assurance Audits</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Revenue Model 2 -->
                    <div class="col-lg-6">
                        <div class="card-custom p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box mb-0"><i class="fa-solid fa-layer-group"></i></div>
                                <div>
                                    <h4 class="mb-0">Tiered Support Packages (Tier 1 to Tier 3)</h4>
                                    <small class="text-muted">Usage & Complexity Billing</small>
                                </div>
                            </div>
                            <p class="text-muted">Structured pricing based on customer query complexity. Tier 1 covers routine inquiries; Tier 2 handles technical troubleshooting; Tier 3 manages high-value enterprise escalations.</p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Hybrid Ticket & Phone Billing</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Specialized Tech Helpdesk Operators</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> VIP Escalation Workflows</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Revenue Model 3 -->
                    <div class="col-lg-6">
                        <div class="card-custom p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box mb-0"><i class="fa-solid fa-language"></i></div>
                                <div>
                                    <h4 class="mb-0">Multilingual APAC Hub Support</h4>
                                    <small class="text-muted">Cross-Border Premium Services</small>
                                </div>
                            </div>
                            <p class="text-muted">Premium revenue streams derived from providing multi-lingual support (English, Mandarin, Bahasa, Japanese) across SEA and Greater China from Singapore’s neutral jurisdiction.</p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Localized Cultural Nuances</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Cross-border APAC Coverage</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Seamless Shift Handovers</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Revenue Model 4 -->
                    <div class="col-lg-6">
                        <div class="card-custom p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-box mb-0"><i class="fa-solid fa-robot"></i></div>
                                <div>
                                    <h4 class="mb-0">AI-Hybrid Omnichannel Plans</h4>
                                    <small class="text-muted">Tech-Enabled Customer Service</small>
                                </div>
                            </div>
                            <p class="text-muted">High-margin combination of custom AI Chatbot training with human-in-the-loop fallback operators for WhatsApp, Live Chat, Email, and Voice channels.</p>
                            <ul class="list-unstyled text-muted small">
                                <li><i class="fa-solid fa-check text-warning me-2"></i> 24/7 Automated Query Deflection</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Zendesk & Salesforce Integrations</li>
                                <li><i class="fa-solid fa-check text-warning me-2"></i> Real-time Sentiment Analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ================= PAGE 3: INVESTMENT MARKETS ================= -->
    <div id="page-markets" class="page-view">
        <section class="py-5">
            <div class="container">
                <div class="section-title-wrap">
                    <span class="badge-gold">Target Industry Vertical Markets</span>
                    <h2 class="section-title">Singapore & APAC Investment Markets</h2>
                    <div class="gold-divider"></div>
                    <p class="text-muted">Key business sectors in Singapore requiring high-touch, compliant customer service outsourcing.</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card-custom p-4 text-center">
                            <div class="icon-box mx-auto"><i class="fa-solid fa-coins"></i></div>
                            <h4>FinTech & Financial Services</h4>
                            <p class="text-muted">MAS (Monetary Authority of Singapore) compliant support for crypto exchanges, digital banks, and payment gateways.</p>
                            <span class="badge bg-light text-dark border">Strict Data Standards</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-custom p-4 text-center">
                            <div class="icon-box mx-auto"><i class="fa-solid fa-cart-shopping"></i></div>
                            <h4>E-Commerce & Retail APAC</h4>
                            <p class="text-muted">Omnichannel support for regional shopping platforms handling order inquiries, refunds, and VIP shopper care.</p>
                            <span class="badge bg-light text-dark border">High Volume Seasonal SLA</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-custom p-4 text-center">
                            <div class="icon-box mx-auto"><i class="fa-solid fa-laptop-code"></i></div>
                            <h4>SaaS & Enterprise Tech Hubs</h4>
                            <p class="text-muted">Technical helpdesk and customer success management for B2B software companies expanding in SEA.</p>
                            <span class="badge bg-light text-dark border">Tier 2/3 Tech Expertise</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-custom p-4 text-center">
                            <div class="icon-box mx-auto"><i class="fa-solid fa-notes-medical"></i></div>
                            <h4>HealthTech & MedTech</h4>
                            <p class="text-muted">Confidential patient and telehealth concierge services adhering to Singapore healthcare privacy norms.</p>
                            <span class="badge bg-light text-dark border">High Privacy Security</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-custom p-4 text-center">
                            <div class="icon-box mx-auto"><i class="fa-solid fa-ship"></i></div>
                            <h4>Maritime & Logistics</h4>
                            <p class="text-muted">24/7 global port operational support, tracking helpdesks, and freight customer engagement.</p>
                            <span class="badge bg-light text-dark border">24/7 Critical Coverage</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card-custom p-4 text-center">
                            <div class="icon-box mx-auto"><i class="fa-solid fa-plane-departure"></i></div>
                            <h4>Luxury Travel & Concierge</h4>
                            <p class="text-muted">Premium VIP booking support and lifestyle management for high-net-worth clients in Asia.</p>
                            <span class="badge bg-light text-dark border">White-Glove Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ================= PAGE 4: OFFICE LOCATIONS & REGULATIONS ================= -->
    <style>
        /* Custom Tabs */
        .nav-pills-custom .nav-link {
            border: 1px solid var(--gold-border);
            color: var(--text-dark);
            background-color: var(--white);
            margin: 0 5px 10px;
            border-radius: 8px;
            font-weight: 500;
            padding: 10px 20px;
        }

        .nav-pills-custom .nav-link.active {
            background-color: var(--gold-primary) !important;
            color: var(--white) !important;
            border-color: var(--gold-primary) !important;
        }
    </style>
    <div id="page-rules" class="page-view">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="section-title-wrap">
                    <span class="badge-gold">Singapore Governance & Real Estate</span>
                    <h2 class="section-title">Office Locations, Rules & Regulations</h2>
                    <div class="gold-divider"></div>
                    <p class="text-muted">Establishing physical customer service centers with full regulatory compliance in Singapore.</p>
                </div>

                <!-- Interactive Nav Tabs for Office vs Regulations -->
                <ul class="nav nav-pills nav-pills-custom justify-content-center mb-4" id="rulesTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-offices" data-bs-toggle="pill" data-bs-target="#content-offices" type="button">Strategic SG Office Hubs</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-acra" data-bs-toggle="pill" data-bs-target="#content-acra" type="button">ACRA & PDPA Laws</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-mom" data-bs-toggle="pill" data-bs-target="#content-mom" type="button">MOM Hiring & Pass Regulations</button>
                    </li>
                </ul>

                <div class="tab-content" id="rulesTabsContent">
                    <!-- Office Locations Content -->
                    <div class="tab-pane fade show active" id="content-offices" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card-custom p-4">
                                    <span class="badge bg-dark text-warning mb-2">CBD Financial Hub</span>
                                    <h4>Marina Bay Financial Centre (MBFC)</h4>
                                    <p class="text-muted small">Ideal for FinTech & Banking CX operations. Premium Grade-A prestige with ultra-high speed fiber redundant connectivity.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fa-solid fa-location-dot me-2 text-warning"></i> Downtown Core, SG</li>
                                        <li><i class="fa-solid fa-building me-2 text-warning"></i> S$11 - S$14 / sq.ft / mo</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-custom p-4">
                                    <span class="badge bg-dark text-warning mb-2">Central Tech Cluster</span>
                                    <h4>Suntec Tower Hub</h4>
                                    <p class="text-muted small">Perfect for enterprise customer service hubs and hybrid BPO operations with direct access to MRT interchanges.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fa-solid fa-location-dot me-2 text-warning"></i> Marina Centre, SG</li>
                                        <li><i class="fa-solid fa-building me-2 text-warning"></i> S$8 - S$11 / sq.ft / mo</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-custom p-4">
                                    <span class="badge bg-dark text-warning mb-2">Innovation District</span>
                                    <h4>Jurong Innovation District / One-North</h4>
                                    <p class="text-muted small">Cost-effective operational center suited for high-headcount call centers and tech support helpdesks.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fa-solid fa-location-dot me-2 text-warning"></i> West Region, SG</li>
                                        <li><i class="fa-solid fa-building me-2 text-warning"></i> S$5 - S$7.50 / sq.ft / mo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ACRA & PDPA Laws Content -->
                    <div class="tab-pane fade" id="content-acra" role="tabpanel">
                        <div class="card-custom p-4">
                            <h3><i class="fa-solid fa-shield-cat text-warning me-2"></i> ACRA & Data Protection Regulations</h3>
                            <hr class="my-3">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h5 class="fw-bold">1. ACRA Incorporation Requirements</h5>
                                    <p class="text-muted small">Customer service entities must register under SSIC code 82200 (Call Center Activities) or 70201 (Management Consultancy). Requires at least 1 resident director residing in Singapore.</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold">2. PDPA Data Security (Critical)</h5>
                                    <p class="text-muted small">Call recording, customer chat logs, and CRM records must comply with Singapore's Personal Data Protection Act. Mandatory appointment of a Data Protection Officer (DPO).</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold">3. Do Not Call (DNC) Registry</h5>
                                    <p class="text-muted small">Outbound telemarketing support must check numbers against the Singapore DNC registry before conducting sales or outreach calls.</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold">4. ISO 27001 Infrastructure Standard</h5>
                                    <p class="text-muted small">Recommended data center hosting in Singapore (e.g., Equinix SG) with end-to-end encrypted VoIP telecommunication links.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MOM Regulations Content -->
                    <div class="tab-pane fade" id="content-mom" role="tabpanel">
                        <div class="card-custom p-4">
                            <h3><i class="fa-solid fa-users-gear text-warning me-2"></i> MOM Employment & Pass Framework</h3>
                            <hr class="my-3">
                            <p class="text-muted">Singapore's Ministry of Manpower (MOM) governs foreign headcount ratios and fair hiring practices:</p>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Pass Type</th>
                                            <th>Minimum Monthly Salary</th>
                                            <th>Target Personnel</th>
                                            <th>Quota / Rules</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Employment Pass (EP)</strong></td>
                                            <td>S$5,000+ (Higher in FinTech)</td>
                                            <td>CX Directors, Operations Lead</td>
                                            <td>COMPASS Point System Evaluation</td>
                                        </tr>
                                        <tr>
                                            <td><strong>S Pass</strong></td>
                                            <td>S$3,150+</td>
                                            <td>Specialized Tech Support Specialists</td>
                                            <td>Subject to Services Sector Dependency Ceiling Ratio (10%)</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Local Workforce</strong></td>
                                            <td>Market Competitive (S$2,800 - S$4,500)</td>
                                            <td>Tier 1 & 2 Multilingual Support Agents</td>
                                            <td>Qualifies for Singapore SkillsFuture & Enterprise Grants</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ================= PAGE 5: SETUP INVESTMENT & DURATION ================= -->
    <div id="page-investment" class="page-view">
        <section class="py-5">
            <div class="container">
                <div class="section-title-wrap">
                    <span class="badge-gold">Capital & Timeline Requirements</span>
                    <h2 class="section-title">Minimum Setup Investment & Cost Calculator</h2>
                    <div class="gold-divider"></div>
                    <p class="text-muted">Estimate the capital required to launch a fully compliant customer support operation in Singapore.</p>
                </div>

                <div class="row g-4 align-items-start">
                    <!-- Cost Calculator Column -->
                    <div class="col-lg-7">
                        <div class="calc-card">
                            <h4 class="fw-bold mb-3"><i class="fa-solid fa-sliders text-warning me-2"></i> Singapore Setup Cost Estimator</h4>
                            <p class="text-muted small mb-4">Adjust parameters to compute estimated setup capital and monthly operational costs in Singapore Dollars (S$).</p>

                            <form id="roiCalcForm">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">1. Support Scale / Team Seats:</label>
                                    <div class="d-flex align-items-center gap-3">
                                        <input type="range" class="form-range" id="teamSeats" min="2" max="50" value="5" oninput="updateCostCalculator()">
                                        <span class="fw-bold text-dark px-3 py-1 bg-light border rounded" id="seatsVal">5 Seats</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">2. Support Complexity Tier:</label>
                                    <select class="form-select" id="supportTier" onchange="updateCostCalculator()">
                                        <option value="1">Tier 1: Basic Helpline & Live Chat (S$3,000 / agent)</option>
                                        <option value="2" selected>Tier 2: Technical Helpdesk & Multilingual (S$4,500 / agent)</option>
                                        <option value="3">Tier 3: Enterprise FinTech / VIP Concierge (S$6,500 / agent)</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">3. Office Infrastructure Model:</label>
                                    <select class="form-select" id="officeType" onchange="updateCostCalculator()">
                                        <option value="virtual">Virtual / Hybrid Remote SG Hub (Lowest Capex)</option>
                                        <option value="coworking" selected>Co-working Dedicated Desk (Suntec/CBD Hub)</option>
                                        <option value="private">Private Lease Dedicated Call Center (Jurong/One-North)</option>
                                    </select>
                                </div>

                                <div class="p-3 bg-light rounded-3 border mb-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Est. Initial Setup & ACRA Licensing:</span>
                                        <strong id="initialSetupCost">S$ 12,500</strong>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Est. Monthly Operational Opex:</span>
                                        <strong id="monthlyOpexCost">S$ 26,500 / mo</strong>
                                    </div>
                                    <hr class="my-2">
                                    <div class="d-flex justify-content-between align-items-center text-dark fw-bold fs-5">
                                        <span>Total Min Capex Buffer (3 Mo):</span>
                                        <span style="color: var(--gold-primary);" id="totalCapex">S$ 92,000</span>
                                    </div>
                                </div>
                            </form>

                            <button class="btn btn-gold w-100" onclick="navigateToPage('inquiry')">Lock In Estimate & Request Proposal</button>
                        </div>
                    </div>

                    <!-- Timeline & Roadmap Column -->
                    <div class="col-lg-5">
                        <div class="card-custom p-4">
                            <h4 class="fw-bold mb-3"><i class="fa-solid fa-clock-rotate-left text-warning me-2"></i> Fast-Track Setup Duration (2-4 Weeks)</h4>
                            <div class="timeline-wrap pt-2">
                                <div class="d-flex mb-3">
                                    <div class="me-3 text-center" style="width: 40px;">
                                        <span class="badge bg-dark rounded-circle p-2">W1</span>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Week 1: ACRA Incorporation & DPO</h6>
                                        <p class="text-muted small mb-0">Entity setup, local director assignment, bank account opening, and PDPA policy setup.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="me-3 text-center" style="width: 40px;">
                                        <span class="badge bg-dark rounded-circle p-2">W2</span>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Week 2: Telecom & CRM System Integration</h6>
                                        <p class="text-muted small mb-0">SIP trunking, Singapore local phone numbers, Zendesk/Freshdesk, and AI Chatbot training.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="me-3 text-center" style="width: 40px;">
                                        <span class="badge bg-dark rounded-circle p-2">W3</span>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Week 3: Recruitment & Product Training</h6>
                                        <p class="text-muted small mb-0">Hiring local/regional agents, SLA playbook preparation, and client product onboarding.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-3 text-center" style="width: 40px;">
                                        <span class="badge bg-success rounded-circle p-2">W4</span>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Week 4: Dry Run & Go-Live</h6>
                                        <p class="text-muted small mb-0">Shadowing calls, simulated escalations, final quality audit, and official customer service launch.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ================= PAGE 6: PROS & CONS ================= -->
    <div id="page-proscons" class="page-view">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="section-title-wrap">
                    <span class="badge-gold">Strategic Evaluation</span>
                    <h2 class="section-title">Pros & Cons of Singapore Customer Service Setup</h2>
                    <div class="gold-divider"></div>
                    <p class="text-muted">A balanced analysis for decision-makers evaluating Singapore versus other regional locations.</p>
                </div>

                <div class="row g-4">
                    <!-- Pros Card -->
                    <div class="col-md-6">
                        <div class="card-custom p-4 border-success border-2">
                            <h3 class="text-success fw-bold mb-3"><i class="fa-solid fa-thumbs-up me-2"></i> Key Advantages (Pros)</h3>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-circle-check text-success fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">Tax Efficiency & Incentives</h5>
                                    <p class="text-muted small mb-0">Low 17% corporate tax, 0% capital gains tax, and eligibility for Enterprise Singapore innovation grants.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-circle-check text-success fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">World-Class Infrastructure & IP Protection</h5>
                                    <p class="text-muted small mb-0">Top-tier telecom reliability, strict enforcement of intellectual property, and robust data protection laws.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-circle-check text-success fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">High-Caliber Multilingual Talent</h5>
                                    <p class="text-muted small mb-0">Native English fluency combined with Mandarin, Malay, and regional Asian language capabilities.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="fa-solid fa-circle-check text-success fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">Neutral Regional Prestige</h5>
                                    <p class="text-muted small mb-0">High trust factor among international enterprise clients when serviced out of a Singapore jurisdiction.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cons Card -->
                    <div class="col-md-6">
                        <div class="card-custom p-4 border-danger border-2">
                            <h3 class="text-danger fw-bold mb-3"><i class="fa-solid fa-thumbs-down me-2"></i> Considerations & Challenges (Cons)</h3>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-triangle-exclamation text-danger fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">Higher Talent & Real Estate Costs</h5>
                                    <p class="text-muted small mb-0">Higher wage expectations and office rents compared to offshore destinations like the Philippines or India.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-triangle-exclamation text-danger fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">Strict MOM Foreign Headcount Quotas</h5>
                                    <p class="text-muted small mb-0">Stringent rules on S Pass and EP approvals require maintaining a high ratio of local Singaporean staff.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-triangle-exclamation text-danger fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">Rigid Regulatory Compliance</h5>
                                    <p class="text-muted small mb-0">Mandatory audits, DPO registration, and high financial penalties for PDPA non-compliance.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <i class="fa-solid fa-lightbulb text-warning fs-5 me-3 mt-1"></i>
                                <div>
                                    <h5 class="mb-1">Devotion Global Solution</h5>
                                    <p class="text-muted small mb-0">Our hybrid onshore/nearshore model mitigates costs while preserving Singapore's jurisdiction quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ================= PAGE 7: CASE STUDIES ================= -->
    <div id="page-cases" class="page-view">
        <section class="py-5">
            <div class="container">
                <div class="section-title-wrap">
                    <span class="badge-gold">Proven Track Record</span>
                    <h2 class="section-title">Client Case Studies & Testimonials</h2>
                    <div class="gold-divider"></div>
                    <p class="text-muted">Discover how Devotion Global elevated client engagement for enterprises operating in Singapore.</p>
                </div>

                <!-- Filter Buttons -->
                <div class="d-flex justify-content-center gap-2 mb-4 flex-wrap">
                    <button class="btn btn-sm btn-gold filter-btn active" onclick="filterCases('all', this)">All Sectors</button>
                    <button class="btn btn-sm btn-outline-gold filter-btn" onclick="filterCases('fintech', this)">FinTech</button>
                    <button class="btn btn-sm btn-outline-gold filter-btn" onclick="filterCases('ecom', this)">E-Commerce</button>
                    <button class="btn btn-sm btn-outline-gold filter-btn" onclick="filterCases('saas', this)">SaaS Hub</button>
                </div>

                <div class="row g-4" id="caseStudiesGrid">
                    <!-- Case Study 1 -->
                    <div class="col-md-6 col-lg-4 case-item fintech">
                        <div class="card-custom p-4 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-dark text-warning">FinTech</span>
                                <span class="text-muted small">Singapore CBD</span>
                            </div>
                            <h5>SG PayTech Global</h5>
                            <p class="text-muted small flex-grow-1">Scaled a 24/7 Tier 2 customer response desk for cross-border payments under MAS regulatory standards.</p>
                            <div class="p-3 bg-light rounded my-3">
                                <div class="row text-center">
                                    <div class="col-6 border-end">
                                        <div class="fw-bold text-success">+94%</div>
                                        <small class="text-muted">CSAT Score</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="fw-bold text-dark">&lt; 20s</div>
                                        <small class="text-muted">First Response</small>
                                    </div>
                                </div>
                            </div>
                            <p class="fst-italic text-muted small mb-0">"Devotion Global's Singapore team ensured 100% compliance with data laws while maintaining white-glove support."</p>
                        </div>
                    </div>

                    <!-- Case Study 2 -->
                    <div class="col-md-6 col-lg-4 case-item ecom">
                        <div class="card-custom p-4 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-dark text-warning">E-Commerce</span>
                                <span class="text-muted small">Suntec Hub</span>
                            </div>
                            <h5>Asian Luxury Retail</h5>
                            <p class="text-muted small flex-grow-1">Deployed a trilingual (English, Mandarin, Bahasa) VIP concierge desk for high-net-worth online shoppers.</p>
                            <div class="p-3 bg-light rounded my-3">
                                <div class="row text-center">
                                    <div class="col-6 border-end">
                                        <div class="fw-bold text-success">3.5x</div>
                                        <small class="text-muted">ROI Growth</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="fw-bold text-dark">45%</div>
                                        <small class="text-muted">Ticket Reduction</small>
                                    </div>
                                </div>
                            </div>
                            <p class="fst-italic text-muted small mb-0">"The hybrid AI + human operator model solved our seasonal peak volume challenges seamlessly."</p>
                        </div>
                    </div>

                    <!-- Case Study 3 -->
                    <div class="col-md-6 col-lg-4 case-item saas">
                        <div class="card-custom p-4 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-dark text-warning">SaaS</span>
                                <span class="text-muted small">Jurong Tech Hub</span>
                            </div>
                            <h5>CloudSync APAC</h5>
                            <p class="text-muted small flex-grow-1">Outsourced Tier 3 technical helpdesk engineering for enterprise software clients across 8 APAC countries.</p>
                            <div class="p-3 bg-light rounded my-3">
                                <div class="row text-center">
                                    <div class="col-6 border-end">
                                        <div class="fw-bold text-success">99.8%</div>
                                        <small class="text-muted">SLA Met</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="fw-bold text-dark">2 Weeks</div>
                                        <small class="text-muted">Go-Live SLA</small>
                                    </div>
                                </div>
                            </div>
                            <p class="fst-italic text-muted small mb-0">"Their setup calculator was spot on. Transitioning our support team to Singapore was smooth and transparent."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ================= PAGE 8: CUSTOMIZABLE INQUIRY FORM ================= -->
    <div id="page-inquiry" class="page-view">
        <section class="py-5 bg-light">
            <div class="container">
                <div class="section-title-wrap">
                    <span class="badge-gold">Get Started in Singapore</span>
                    <h2 class="section-title">Request a Tailored Singapore Proposal</h2>
                    <div class="gold-divider"></div>
                    <p class="text-muted">Fill in your support preferences and our Singapore jurisdiction team will formulate a custom blueprint within 24 hours.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card-custom p-4 p-md-5">
                            <form id="proposalForm" onsubmit="handleFormSubmit(event)">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Company Name *</label>
                                        <input type="text" class="form-control" placeholder="e.g. Apex Global Solutions" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Business Email *</label>
                                        <input type="email" class="form-control" placeholder="name@company.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Phone Number / WhatsApp *</label>
                                        <input type="tel" class="form-control" placeholder="+65 8123 4567" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Primary Industry *</label>
                                        <select class="form-select" required>
                                            <option value="" selected disabled>Select Industry Sector</option>
                                            <option value="fintech">FinTech & Banking</option>
                                            <option value="ecom">E-Commerce & Retail</option>
                                            <option value="saas">SaaS & Enterprise Tech</option>
                                            <option value="health">HealthTech</option>
                                            <option value="logistics">Maritime & Logistics</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Desired Team Scale</label>
                                        <select class="form-select" id="formTeamSize">
                                            <option value="1-4">Boutique (1 - 4 Agents)</option>
                                            <option value="5-15" selected>Growth (5 - 15 Agents)</option>
                                            <option value="16-50">Enterprise (16 - 50 Agents)</option>
                                            <option value="50+">Custom Regional Hub (50+ Agents)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Target Setup Timeline</label>
                                        <select class="form-select">
                                            <option value="immediate">Immediate (Within 2 Weeks)</option>
                                            <option value="1month" selected>1 Month (Standard)</option>
                                            <option value="quarter">Next Quarter</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Language & Operational Requirements</label>
                                        <div class="d-flex flex-wrap gap-3 p-3 bg-light rounded border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="langEn" checked>
                                                <label class="form-check-label" for="langEn">English</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="langZh" checked>
                                                <label class="form-check-label" for="langZh">Mandarin</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="langMs">
                                                <label class="form-check-label" for="langMs">Bahasa Melayu</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="langId">
                                                <label class="form-check-label" for="langId">Bahasa Indonesia</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="support247" checked>
                                                <label class="form-check-label" for="support247">24/7 Coverage Needed</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Additional Details / Specific SLA Requirements</label>
                                        <textarea class="form-control" rows="4" placeholder="Mention specific ACRA compliance needs, CRM systems, or call volume expectations..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-gold btn-lg w-100 py-3">Submit Singapore Proposal Request <i class="fa-solid fa-paper-plane ms-2"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div id="formSuccessMessage" class="alert alert-success mt-4 d-none">
                                <i class="fa-solid fa-circle-check me-2 fs-5"></i>
                                <strong>Proposal Request Received!</strong> Our Singapore Jurisdiction Lead will contact you within 24 business hours with a tailored blueprint.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>

<?php include ROOT_PATH . '/hongkong/elements/footer.php'; ?>