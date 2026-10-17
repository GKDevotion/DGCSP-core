<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>
    <!-- Custom CSS Variables and Theme -->
    <style>

        /* Utility Fallbacks for Bootstrap Classes */
        .list-unstyled {
            padding-left: 0 !important;
            list-style: none !important;
            margin-bottom: 0 !important;
        }
        .small, small {
            font-size: 0.875em !important;
        }
        .text-muted {
            color: var(--text-muted) !important;
        }
        .fw-bold { font-weight: 700 !important; }
        .fw-semibold { font-weight: 600 !important; }

        /* Hero Section Styling Matching Reference Design */
        .hero-section {
            background: var(--golden-gradient-background);
            padding: 120px 0 60px;
            position: relative;
        }

        .badge-established {
            background: #ffffff;
            border: 1px solid rgba(171, 129, 57, 0.25);
            border-radius: 30px;
            padding: 6px 18px;
            font-size: 0.825rem;
            font-weight: 600;
            color: var(--dark-gold);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: var(--shadow-sm);
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -0.5px;
            color: #111827;
        }

        .hero-title .highlight-country {
            color: var(--gold-primary);
            text-transform: uppercase;
        }

        .hero-feature-pill {
            background: #ffffff;
            border: 1px solid var(--gold-border);
            border-radius: 30px;
            padding: 8px 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #374151;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .hero-feature-pill i {
            color: var(--gold-primary);
        }

        .global-gateway-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 35px 28px;
            border: 1px solid var(--gold-border);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .global-gateway-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            background: var(--gold-light);
            color: var(--gold-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
        }

        /* 3x2 Quick Nav Grid Styling */
        .quick-nav-card {
            background: #ffffff;
            border: 1px solid var(--gold-border);
            border-radius: 16px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            text-decoration: none;
            color: #1f2937;
            transition: var(--transition);
            height: 100%;
        }

        .quick-nav-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-primary);
            color: var(--gold-primary);
        }

        .nav-num-badge {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.1rem;
            color: #ffffff;
            flex-shrink: 0;
        }

        .badge-c1 { background-color: #0d9488; } /* Teal */
        .badge-c2 { background-color: #0284c7; } /* Blue */
        .badge-c3 { background-color: #d97706; } /* Amber */
        .badge-c4 { background-color: #65a30d; } /* Green */
        .badge-c5 { background-color: #7c3aed; } /* Purple */
        .badge-c6 { background-color: #dc2626; } /* Red */

        /* Comparison Matrix Table */
        .table-container {
            border-radius: var(--card-radius);
            overflow-x: auto;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-card);
            background: #ffffff;
        }

        .table-custom {
            margin-bottom: 0;
            white-space: nowrap;
        }

        .table-custom th {
            background-color: var(--gold-light);
            color: var(--dark-gold);
            font-weight: 700;
            padding: 16px 20px;
            border-bottom: 2px solid var(--gold-border);
            text-align: center;
        }

        .table-custom th:first-child, .table-custom td:first-child {
            text-align: left;
            position: sticky;
            left: 0;
            background-color: #ffffff;
            z-index: 2;
            box-shadow: 2px 0 5px rgba(0,0,0,0.03);
            font-weight: 600;
        }

        .table-custom th:first-child {
            background-color: var(--gold-light);
            z-index: 3;
        }

        .table-custom td {
            padding: 14px 18px;
            text-align: center;
            vertical-align: middle;
            font-size: 0.9rem;
            border-bottom: 1px solid #f0f0f0;
        }

        /* Advantage & Disadvantage List Cards */
        .check-list-item, .cross-list-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 18px;
            padding: 16px;
            border-radius: 12px;
            background: #ffffff;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
        }

        .check-icon { color: #10b981; font-size: 1.25rem; margin-top: 2px; }
        .cross-icon { color: #ef4444; font-size: 1.25rem; margin-top: 2px; }

        /* Timeline Graphics */
        .timeline-steps {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
        }

        .timeline-step-card {
            background: #0d2c4a;
            color: #ffffff;
            border-radius: 12px;
            padding: 22px 16px;
            text-align: center;
            box-shadow: var(--shadow-md);
            position: relative;
            transition: var(--transition);
        }

        .timeline-step-card:hover {
            transform: translateY(-5px);
            background: var(--dark-gold);
        }

        .timeline-step-card h6 {
            color: #ffffff;
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .timeline-step-card .duration {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.8);
            font-weight: 500;
        }

        /* Banking Logos Grid */
        .bank-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 12px;
            padding: 22px 15px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--brand-dark);
        }

        .bank-card:hover {
            border-color: var(--gold-primary);
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }

        /* Form Card */
        .form-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: var(--card-radius);
            padding: 35px;
            box-shadow: var(--shadow-hover);
        }

        .aeo-summary-box {
            background: var(--gold-light);
            border-left: 5px solid var(--gold-primary);
            padding: 20px 24px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .floating-cta {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
        }
        @media (max-width: 991px) {
            .hero-title { font-size: 2.2rem; }
            .timeline-steps { grid-template-columns: 1fr; }
        }
    </style>

    <!-- Schema.org JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://example.com/#organization",
          "name": "Mauritius Corporate Formation Services",
          "url": "https://example.com",
          "description": "Professional Mauritius company incorporation, Global Business License (GBC), Authorised Company formation, and offshore corporate bank account opening.",
          "telephone": "+2304000000"
        },
        {
          "@type": "Service",
          "name": "Mauritius Company Registration 2026",
          "provider": { "@id": "https://example.com/#organization" },
          "areaServed": "Worldwide"
        }
      ]
    }
    </script>

    <!-- Hero Section with Updated Reference Design -->
    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Left Hero Content -->
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="badge-established mb-3">
                        <i class="fa-solid fa-shield-halved"></i> Established Since 2003 • 2026 Updated Guide
                    </div>
                    
                    <h1 class="hero-title mb-3">
                        How to Register a Company in <span class="highlight-country">MAURITIUS</span> in 2026
                    </h1>

                    <p class="text-muted fs-6 mb-4">
                        Since 2003, Healy Consultants Group has assisted our Clients to establish their company in Mauritius. Our comprehensive services include <strong>i)</strong> Mauritius company setup services; <strong>ii)</strong> corporate bank account opening services in Mauritius and abroad; <strong>iii)</strong> assistance with FSC licensing and merchant accounts; <strong>iv)</strong> employee recruitment and relocation strategies; and <strong>v)</strong> office rental solutions in Mauritius.
                    </p>

                    <!-- Feature Badges Row -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <div class="hero-feature-pill">
                            <i class="fa-solid fa-credit-card"></i> Pay by Instalments
                        </div>
                        <div class="hero-feature-pill">
                            <i class="fa-solid fa-plane-slash"></i> Solutions Without Travel
                        </div>
                        <div class="hero-feature-pill">
                            <i class="fa-solid fa-circle-check"></i> Guaranteed Solutions
                        </div>
                    </div>
                </div>

                <!-- Right Side Global Gateway Card -->
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="global-gateway-card">
                        <div class="global-gateway-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-2">Global Gateway</h3>
                        <p class="text-muted small mb-4">
                            Incorporate your business in Africa's premier financial center with 3% effective tax rate and 80% partial exemption.
                        </p>
                        <a href="#register" class="btn btn-gold w-100 mb-3 fw-bold">Get Started Free Consultation</a>
                        <div class="text-muted small">
                            <i class="fa-solid fa-lock me-1"></i> 100% Confidential & Secure
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6 Numbered Quick Navigation Cards (3x2 Desktop Layout) -->
            <div class="row g-3 mt-4" id="quick-nav-grid" data-aos="fade-up">
                <div class="col-md-6 col-lg-4">
                    <a href="#entities" class="quick-nav-card">
                        <div class="nav-num-badge badge-c1">01</div>
                        <div>
                            <div class="fw-bold mb-0">Company Structure</div>
                            <div class="text-muted small">Ideal entity for my business?</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#advantages" class="quick-nav-card">
                        <div class="nav-num-badge badge-c2">02</div>
                        <div>
                            <div class="fw-bold mb-0">Key Facts & Pros/Cons</div>
                            <div class="text-muted small">Things to know before registering?</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#timeline" class="quick-nav-card">
                        <div class="nav-num-badge badge-c3">03</div>
                        <div>
                            <div class="fw-bold mb-0">Setup Process</div>
                            <div class="text-muted small">How does the process work?</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#banking-tax" class="quick-nav-card">
                        <div class="nav-num-badge badge-c4">04</div>
                        <div>
                            <div class="fw-bold mb-0">Additional Services</div>
                            <div class="text-muted small">Banking, Tax, Visas & Audits</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#faq" class="quick-nav-card">
                        <div class="nav-num-badge badge-c5">05</div>
                        <div>
                            <div class="fw-bold mb-0">More Questions</div>
                            <div class="text-muted small">Frequently Asked Questions</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#register" class="quick-nav-card">
                        <div class="nav-num-badge badge-c6">06</div>
                        <div>
                            <div class="fw-bold mb-0">Register Now</div>
                            <div class="text-muted small">Start incorporation today</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION 01: Popular Business Entities Matrix -->
    <section id="entities" class="py-5 bg-light">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-4" data-aos="fade-up">
                <div class="nav-num-badge badge-c1">01</div>
                <div>
                    <h2 class="h3 mb-0">Popular Business Entities in Mauritius</h2>
                    <p class="text-muted mb-0">Compare legal parameters, FSC licensing requirements, tax benefits, and setup timelines.</p>
                </div>
            </div>

            <!-- GEO & AEO AI Overview -->
            <div class="aeo-summary-box" data-aos="fade-up">
                <h3 class="h6 font-weight-bold text-uppercase text-dark mb-2"><i class="fa-solid fa-circle-info me-2"></i>AEO Quick Key Takeaway</h3>
                <p class="mb-0 fs-6">
                    For foreign investors conducting cross-border trading, holding, or investment activities, the <strong>Global Business Company (GBC)</strong> is the primary vehicle. It qualifies for a 3% effective corporate tax rate via an 80% partial exemption, has access to double tax treaties, and requires 2 resident directors. For offshore holding with zero tax, the <strong>Authorised Company (AC)</strong> offers tax-exempt status.
                </p>
            </div>

            <!-- Full Responsive Matrix Table -->
            <div class="table-container" data-aos="fade-up">
                <table class="table table-custom table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Feature / Criteria</th>
                            <th>Global Business Co (GBC)</th>
                            <th>Authorised Co (AC)</th>
                            <th>Domestic Company</th>
                            <th>Freeport Company</th>
                            <th>Branch Office</th>
                            <th>Partnership</th>
                            <th>Mauritius Trust</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>How long to set up?</td>
                            <td>2 - 3 weeks</td>
                            <td>2 weeks</td>
                            <td>1 - 2 weeks</td>
                            <td>3 - 4 weeks</td>
                            <td>2 - 3 weeks</td>
                            <td>2 weeks</td>
                            <td>2 weeks</td>
                        </tr>
                        <tr>
                            <td>Bank account opening?</td>
                            <td>4 - 6 weeks</td>
                            <td>4 - 6 weeks</td>
                            <td>3 - 4 weeks</td>
                            <td>4 weeks</td>
                            <td>4 - 6 weeks</td>
                            <td>4 weeks</td>
                            <td>4 - 6 weeks</td>
                        </tr>
                        <tr>
                            <td>Legal Liability?</td>
                            <td>Limited</td>
                            <td>Limited</td>
                            <td>Limited</td>
                            <td>Limited</td>
                            <td><span class="text-danger fw-bold">Unlimited</span></td>
                            <td><span class="text-danger fw-bold">Unlimited</span></td>
                            <td>Fiduciary</td>
                        </tr>
                        <tr>
                            <td>Wholly Foreign Owned?</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                        </tr>
                        <tr>
                            <td>Minimum paid-up capital?</td>
                            <td><strong>US$ 1</strong></td>
                            <td><strong>US$ 1</strong></td>
                            <td><strong>MUR 1</strong></td>
                            <td>MUR 100,000</td>
                            <td>None</td>
                            <td>None</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>Effective Corporate Tax Rate</td>
                            <td><strong class="text-success">3%</strong> (80% exemption)</td>
                            <td><strong class="text-success">0%</strong> (Exempt)</td>
                            <td><strong>15%</strong></td>
                            <td><strong>3% / 0%</strong></td>
                            <td><strong>15%</strong></td>
                            <td>Pass-through</td>
                            <td><strong>0% / 15%</strong></td>
                        </tr>
                        <tr>
                            <td>Tax Treaty Access (DTAA)?</td>
                            <td><span class="badge bg-success">Yes (45+ countries)</span></td>
                            <td><span class="badge bg-secondary">No</span></td>
                            <td><span class="badge bg-success">Yes</span></td>
                            <td><span class="badge bg-success">Yes</span></td>
                            <td><span class="badge bg-secondary">No</span></td>
                            <td>No</td>
                            <td>Conditional</td>
                        </tr>
                        <tr>
                            <td>Resident Directors Required?</td>
                            <td><span class="text-warning fw-bold">Yes (2 required)</span></td>
                            <td>No</td>
                            <td>Yes (1 required)</td>
                            <td>Yes (1 required)</td>
                            <td>Yes (1 Rep)</td>
                            <td>No</td>
                            <td>1 Resident Trustee</td>
                        </tr>
                        <tr>
                            <td>FSC License Required?</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes (GBC)</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes (AC)</td>
                            <td>No</td>
                            <td>Yes (Board of Investment)</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Does Client Need to Travel?</td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                        </tr>
                        <tr>
                            <td>Corporate Bank Account</td>
                            <td>MCB / AfrAsia / SBM</td>
                            <td>AfrAsia / Bank One</td>
                            <td>MCB / SBM</td>
                            <td>SBM / Absa</td>
                            <td>MCB / HSBC</td>
                            <td>MCB</td>
                            <td>AfrAsia</td>
                        </tr>
                        <tr>
                            <td>Audit & Annual Return?</td>
                            <td>Yes</td>
                            <td>Financial Summary</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Allowed to trade in Mauritius?</td>
                            <td>Limited</td>
                            <td><span class="text-danger">No (Offshore only)</span></td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td>Freeport Zone Only</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>N/A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- SECTION 02: Advantages & Disadvantages -->
    <section id="advantages" class="py-5">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-5" data-aos="fade-up">
                <div class="nav-num-badge badge-c2">02</div>
                <div>
                    <h2 class="h3 mb-0">Advantages and Disadvantages of Doing Business in Mauritius</h2>
                    <p class="text-muted mb-0">Strategic evaluation for international expansion and tax structuring.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Advantages -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="h-100 p-4 border rounded-4 bg-white shadow-sm">
                        <h3 class="h4 text-success mb-4 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-circle-check"></i> Strategic Advantages
                        </h3>

                        <div class="check-list-item">
                            <i class="fa-solid fa-check check-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Attractive 3% Effective Corporate Tax</h4>
                                <p class="text-muted small mb-0">Through the 80% Partial Exemption regime on foreign dividends, interest, and reinsurance, GBC entities achieve a net corporate tax rate of just 3% with 0% capital gains tax and 0% dividend withholding tax.</p>
                            </div>
                        </div>

                        <div class="check-list-item">
                            <i class="fa-solid fa-check check-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Extensive DTAA & IPPA Network</h4>
                                <p class="text-muted small mb-0">Double Tax Avoidance Agreements with 45+ countries (including India, China, and African nations) combined with Investment Promotion Agreements make Mauritius the ultimate gateway to Africa and Asia.</p>
                            </div>
                        </div>

                        <div class="check-list-item">
                            <i class="fa-solid fa-check check-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">#1 Business Environment in Africa</h4>
                                <p class="text-muted small mb-0">Ranked 1st in Africa for ease of doing business, legal protection, political stability, and bilingual (English/French) professional workforce.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disadvantages -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="h-100 p-4 border rounded-4 bg-white shadow-sm">
                        <h3 class="h4 text-danger mb-4 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-triangle-exclamation"></i> Challenges & Compliance Points
                        </h3>

                        <div class="cross-list-item">
                            <i class="fa-solid fa-xmark cross-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Economic Substance Requirements for GBC</h4>
                                <p class="text-muted small mb-0">To claim the 80% partial tax exemption, a GBC must employ local staff, incur minimum annual operating expenditure in Mauritius, and have 2 resident directors.</p>
                            </div>
                        </div>

                        <div class="cross-list-item">
                            <i class="fa-solid fa-xmark cross-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Rigorous Banking KYC & AML Vetting</h4>
                                <p class="text-muted small mb-0">Mauritius financial institutions adhere strictly to OECD, FATF, and EU AML frameworks, requiring detailed source-of-wealth proof from foreign ultimate beneficial owners (UBOs).</p>
                            </div>
                        </div>

                        <div class="cross-list-item">
                            <i class="fa-solid fa-xmark cross-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Authorised Companies Cannot Trade Domestically</h4>
                                <p class="text-muted small mb-0">Authorised Companies (AC) must derive 100% of revenue outside Mauritius and cannot enter into local Mauritian commercial contracts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 03: Engagement Steps & Timeline -->
    <section id="timeline" class="py-5 bg-light">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-4" data-aos="fade-up">
                <div class="nav-num-badge badge-c3">03</div>
                <div>
                    <h2 class="h3 mb-0">Typical Mauritius Engagement Steps & Timeline</h2>
                    <p class="text-muted mb-0">10-week structured roadmap from filing CBRIS application to corporate account setup.</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 border shadow-sm mb-5" data-aos="fade-up">
                <h3 class="h5 fw-bold mb-3">Key Sequential Incorporation Steps:</h3>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 1</span>
                            <h4 class="h6 fw-bold mb-1">CBRIS Name Clearance</h4>
                            <p class="small text-muted mb-0">Reserve company name via Corporate and Business Registration Department (CBRIS).</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 2</span>
                            <h4 class="h6 fw-bold mb-1">FSC Application</h4>
                            <p class="small text-muted mb-0">File license application with Financial Services Commission (FSC Mauritius).</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 3</span>
                            <h4 class="h6 fw-bold mb-1">Tax Residency Card</h4>
                            <p class="small text-muted mb-0">Obtain Tax Residence Certificate (TRC) from Mauritius Revenue Authority (MRA).</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 4</span>
                            <h4 class="h6 fw-bold mb-1">Banking Onboarding</h4>
                            <p class="small text-muted mb-0">Complete multi-currency corporate banking application with a leading Mauritian bank.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline Card Grid -->
            <h3 class="h5 fw-bold mb-3" data-aos="fade-up">Total Engagement Timeline (10 Weeks Total)</h3>
            <div class="timeline-steps" data-aos="fade-up">
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 1</div>
                    <h6>Planning & Due Diligence</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 1 Week</div>
                </div>
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 2</div>
                    <h6>CBRIS & FSC Licensing</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 2 Weeks</div>
                </div>
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 3</div>
                    <h6>Bank Account Approval</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 4 Weeks</div>
                </div>
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 4</div>
                    <h6>Tax Residency & TRC</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 2 Weeks</div>
                </div>
                <div class="timeline-step-card" style="background: var(--gold-primary);">
                    <div class="text-white fw-bold small">STEP 5</div>
                    <h6>Engagement Completion</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 1 Week</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 04: Banking, Tax & Visas -->
    <section id="banking-tax" class="py-5">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-5" data-aos="fade-up">
                <div class="nav-num-badge badge-c4">04</div>
                <div>
                    <h2 class="h3 mb-0">Corporate Banking & Tax Considerations</h2>
                    <p class="text-muted mb-0">Multi-currency banking solutions and Mauritius tax framework details.</p>
                </div>
            </div>

            <!-- Recommended Banking Partners -->
            <div class="mb-5" data-aos="fade-up">
                <h3 class="h5 fw-bold mb-3"><i class="fa-solid fa-building-columns text-warning me-2"></i>Recommended Mauritius Corporate Banks</h3>
                <p class="text-muted small mb-4">Mauritius financial institutions offer multi-currency accounts (USD, EUR, GBP, MUR, ZAR) with global online banking capabilities:</p>
                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-building-columns me-2 text-warning"></i> MCB Bank</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-landmark me-2 text-warning"></i> SBM Bank</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-vault me-2 text-warning"></i> Absa Mauritius</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-coins me-2 text-warning"></i> AfrAsia Bank</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-globe me-2 text-warning"></i> Standard Bank</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-money-bill-transfer me-2 text-warning"></i> HSBC Mauritius</div>
                    </div>
                </div>
            </div>

            <!-- Tax Rate Cards -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-3">
                    <div class="p-4 rounded-4 bg-light text-center border h-100">
                        <div class="display-6 fw-bold text-dark mb-1">15% / 3%</div>
                        <div class="fw-semibold">Corporate Tax Rate</div>
                        <p class="small text-muted mb-0 mt-2">15% standard rate; 3% effective rate for GBC with 80% Partial Exemption.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 rounded-4 bg-light text-center border h-100">
                        <div class="display-6 fw-bold text-dark mb-1">0%</div>
                        <div class="fw-semibold">Withholding Tax</div>
                        <p class="small text-muted mb-0 mt-2">0% withholding tax on dividends, interest, and royalties paid abroad.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 rounded-4 bg-light text-center border h-100">
                        <div class="display-6 fw-bold text-dark mb-1">0%</div>
                        <div class="fw-semibold">Capital Gains Tax</div>
                        <p class="small text-muted mb-0 mt-2">No capital gains tax on sale of shares or assets in Mauritius.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 rounded-4 bg-light text-center border h-100">
                        <div class="display-6 fw-bold text-dark mb-1">15%</div>
                        <div class="fw-semibold">Value Added Tax (VAT)</div>
                        <p class="small text-muted mb-0 mt-2">Applicable only on domestic goods & services within Mauritius.</p>
                    </div>
                </div>
            </div>

            <!-- Visas & Permits -->
            <div id="visas" class="pt-4" data-aos="fade-up">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="nav-num-badge badge-c4">05</div>
                    <div>
                        <h3 class="h4 mb-0">Mauritius Visas & Occupation Permits</h3>
                        <p class="text-muted mb-0">Relocation and residency programs for foreign investors and professionals.</p>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2"><i class="fa-solid fa-briefcase text-warning me-2"></i>Investor Permit</h4>
                            <p class="small text-muted mb-0">10-year residency permit for investors generating a minimum initial investment of USD 50,000 in a business activity.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2"><i class="fa-solid fa-user-gear text-warning me-2"></i>Self-Employed Permit</h4>
                            <p class="small text-muted mb-0">10-year permit for solo consultants/freelancers with a minimum deposit of USD 35,000 into a local bank account.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2"><i class="fa-solid fa-id-card text-warning me-2"></i>Professional Permit</h4>
                            <p class="small text-muted mb-0">Work permit for expatriate employees hired by Mauritius entities earning a basic monthly salary threshold.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 06: Registration Form -->
    <section id="register" class="py-5">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-5" data-aos="fade-up">
                <div class="nav-num-badge badge-c6">06</div>
                <div>
                    <h2 class="h3 mb-0">Register Your Mauritius Company</h2>
                    <p class="text-muted mb-0">Submit your company preferences for an instant custom proposal.</p>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-lg-8">
                    <div class="form-card">
                        <form id="mauritiusForm" onsubmit="handleFormSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Full Name *</label>
                                    <input type="text" class="form-control" required placeholder="Jane Doe">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Email Address *</label>
                                    <input type="email" class="form-control" required placeholder="jane@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Phone / WhatsApp</label>
                                    <input type="tel" class="form-control" placeholder="+230 5000 0000">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Preferred Entity Type</label>
                                    <select class="form-select">
                                        <option selected>Global Business Company (GBC)</option>
                                        <option>Authorised Company (AC)</option>
                                        <option>Mauritius Domestic Company</option>
                                        <option>Freeport Enterprise</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Required Services</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bankCheck" checked>
                                            <label class="form-check-label" for="bankCheck">Corporate Bank Account Setup</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="fscCheck" checked>
                                            <label class="form-check-label" for="fscCheck">FSC License Processing</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="residencyCheck">
                                            <label class="form-check-label" for="residencyCheck">Investor / Occupation Permit</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Proposed Business Activity</label>
                                    <textarea class="form-control" rows="3" placeholder="Briefly describe your intended trade, holding, or financial activity..."></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-gold btn-lg w-100"><i class="fa-solid fa-paper-plane me-2"></i> Request Incorporation Proposal</button>
                                </div>
                            </div>
                        </form>
                        <div id="formSuccess" class="alert alert-success mt-3 d-none" role="alert">
                            Thank you! Your Mauritius company formation request has been recorded. An offshore corporate expert will contact you within 24 hours.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instant Cost Calculator Modal -->
    <div class="modal fade" id="calcModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: var(--card-radius);">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold"><i class="fa-solid fa-calculator text-warning me-2"></i>Mauritius Cost Estimate Calculator</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Entity Structure</label>
                        <select id="calcEntity" class="form-select" onchange="calculateFee()">
                            <option value="3500">Global Business Company (GBC) - $3,500</option>
                            <option value="2200">Authorised Company (AC) - $2,200</option>
                            <option value="1800">Domestic Company - $1,800</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Add-on Services</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="calcBank" value="1200" onchange="calculateFee()" checked>
                            <label class="form-check-label" for="calcBank">Corporate Bank Account Opening (+$1,200)</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="calcTRC" value="800" onchange="calculateFee()" checked>
                            <label class="form-check-label" for="calcTRC">Tax Residency Certificate (TRC) (+$800)</label>
                        </div>
                    </div>
                    <div class="p-3 bg-light rounded text-center border mt-4">
                        <span class="text-muted small uppercase d-block">Estimated Total Setup Cost</span>
                        <span id="totalFee" class="fs-2 fw-bold text-dark">$5,500</span>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-gold w-100" data-bs-dismiss="modal" onclick="location.href='#register'">Proceed to Form</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Contact Button -->
    <div class="floating-cta">
        <a href="#register" class="btn btn-gold rounded-circle p-3 shadow-lg d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
            <i class="fa-solid fa-comments fs-4"></i>
        </a>
    </div>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out'
        });

        // Fee Calculator
        function calculateFee() {
            let entityCost = parseInt(document.getElementById('calcEntity').value) || 0;
            let bankCost = document.getElementById('calcBank').checked ? parseInt(document.getElementById('calcBank').value) : 0;
            let trcCost = document.getElementById('calcTRC').checked ? parseInt(document.getElementById('calcTRC').value) : 0;
            let total = entityCost + bankCost + trcCost;
            document.getElementById('totalFee').innerText = '$' + total.toLocaleString();
        }

        // Form Submit Handler
        function handleFormSubmit(event) {
            event.preventDefault();
            const successAlert = document.getElementById('formSuccess');
            successAlert.classList.remove('d-none');
            document.getElementById('mauritiusForm').reset();
            setTimeout(() => {
                successAlert.classList.add('d-none');
            }, 6000);
        }
    </script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>