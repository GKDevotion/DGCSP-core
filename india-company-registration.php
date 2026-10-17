<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <!-- Custom CSS Variables & Styling -->
    <style>

        /* Hero Banner */
        .hero-banner {
            background: var(--golden-gradient-background);
            padding: 70px 0 60px;
            position: relative;
            border-bottom: 1px solid var(--gold-border);
        }
        .badge-seal {
            background: linear-gradient(135deg, #f7ce68 0%, #fbab7e 100%);
            color: #4a3200;
            font-weight: 700;
            font-size: 0.8rem;
            padding: 10px 18px;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(247, 206, 104, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        /* Direct Quick Access Navigation Grid (Image 1 replica) */
        .quick-nav-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: var(--card-radius);
            padding: 18px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
            text-decoration: none;
            color: var(--text-dark);
            height: 100%;
        }
        .quick-nav-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-primary);
            color: var(--gold-primary);
        }
        .nav-num-box {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--white);
            flex-shrink: 0;
        }
        .num-01 { background-color: #00a884; }
        .num-02 { background-color: #2b7bb9; }
        .num-03 { background-color: #e69d00; }
        .num-04 { background-color: #8cb851; }
        .num-05 { background-color: #58335e; }
        .num-06 { background-color: #c0392b; }

        /* Section Styling */
        .section-title {
            position: relative;
            margin-bottom: 35px;
        }
        .section-badge {
            background: var(--gold-light);
            color: var(--dark-gold);
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 1rem;
            display: inline-block;
            margin-bottom: 12px;
            border: 1px solid var(--gold-border);
        }
        .section-heading {
            font-weight: 700;
            color: var(--brand-dark);
            font-size: 2rem;
        }

        /* Table Styling (Image 5) */
        .table-responsive-container {
            border-radius: var(--card-radius);
            box-shadow: var(--shadow-card);
            background: var(--white);
            overflow: hidden;
            border: 1px solid var(--gold-border);
        }
        .entity-table {
            margin-bottom: 0;
            width: 100%;
        }
        .entity-table thead th {
            background-color: #e3f2fd;
            color: #0d47a1;
            font-weight: 700;
            text-align: center;
            padding: 16px 10px;
            border-bottom: 2px solid #bbdefb;
            font-size: 0.95rem;
        }
        .entity-table tbody tr.section-header td {
            background-color: var(--bg-light);
            font-weight: 700;
            color: var(--dark-gold);
            padding: 12px 16px;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }
        .entity-table td {
            padding: 12px 14px;
            font-size: 0.88rem;
            vertical-align: middle;
            border-bottom: 1px solid #f0f0f0;
        }
        .entity-table td.feature-title {
            font-weight: 500;
            color: var(--text-dark);
            background-color: #fafafa;
            width: 28%;
        }
        .entity-table td.val-col {
            text-align: center;
        }
        .val-yes { color: #2e7d32; font-weight: 600; }
        .val-no { color: #d32f2f; font-weight: 600; }

        /* Timeline Graphics (Image 3) */
        .timeline-wrapper {
            background: #004d6d;
            color: white;
            padding: 30px;
            border-radius: var(--card-radius);
            box-shadow: var(--shadow-md);
        }
        .timeline-steps-line {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding: 0 10px;
        }
        .timeline-steps-line::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 3px;
            background: #0088b3;
            z-index: 1;
        }
        .step-node {
            position: relative;
            z-index: 2;
            background: #00d2ff;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 3px solid #004d6d;
        }
        .step-label-box {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 16px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.15);
            height: 100%;
        }
        .step-label-box h6 {
            color: #ffd700;
            font-size: 0.95rem;
            margin-bottom: 6px;
            font-weight: 600;
        }
        .step-label-box p {
            font-size: 0.8rem;
            margin-bottom: 0;
            color: #e0f7fa;
        }

        /* Bank Logos styling (Image 4) */
        .bank-logo-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 12px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            min-height: 70px;
            font-weight: 700;
            font-size: 1.1rem;
            color: #1a365d;
        }
        .bank-logo-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-3px);
        }

        /* Stat Card */
        .stat-card {
            background: var(--white);
            border-radius: var(--card-radius);
            padding: 22px;
            border-left: 4px solid var(--gold-primary);
            box-shadow: var(--shadow-sm);
            height: 100%;
            transition: var(--transition);
        }
        .stat-card:hover {
            box-shadow: var(--shadow-hover);
        }
        .stat-val {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-gold);
            margin-bottom: 4px;
        }
        .stat-title {
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* GEO Fact Snippet Box for Generative Engine Optimization */
        .geo-snippet-box {
            background: var(--gold-light);
            border: 1px solid var(--gold-primary);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--gold-primary);
            border-radius: 4px;
        }

    </style>

    <!-- Schema.org JSON-LD Structured Data for SEO/AEO/GEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FinancialService",
      "name": "Healy Consultants Group - India Corporate Services",
      "description": "Assisting international clients with company registration, regulatory compliance, bank accounts, and taxation in India.",
      "url": "https://www.healyconsultants.com/india-company-registration/",
      "logo": "https://www.healyconsultants.com/images/logo.png",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "IN"
      },
      "serviceType": [
        "Company Registration in India",
        "Corporate Tax Advisory",
        "Bank Account Opening",
        "India Visa Applications"
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the timeline to register a company in India in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The entire process takes approximately 4 months (16 weeks), including engagement planning (1 week), company incorporation (2 months), corporate bank account approval (1 month), and internet banking setup."
          }
        },
        {
          "@type": "Question",
          "name": "Is travel required to open a corporate bank account or register a company in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Healy Consultants Group provides guaranteed solutions without requiring physical travel by company directors or bank signatories."
          }
        },
        {
          "@type": "Question",
          "name": "What are the corporate tax rates for companies in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Resident companies pay between 20% to 30% corporate tax. Non-resident companies are subject to 40% tax. Dividend Distribution Tax (DDT) is 15%, and GST ranges from 0% to 28%."
          }
        }
      ]
    }
    </script>

    <!-- MAIN CONTENT AREA -->
    <main>
        
        <!-- Hero Section -->
        <section id="hero" class="hero-banner">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <h1 class="display-5 fw-bold mb-3 text-dark">How to Register a Company in INDIA in 2026</h1>
                        <p class="lead text-secondary mx-auto max-w-75 mb-4" style="max-width: 900px;">
                            Since 2003, Healy Consultants Group has been efficiently and effectively assisting our Clients with company registration in India. Our experts serve our Clients with: 
                            <strong>i) company registration process</strong>; <strong>ii) regulatory compliance</strong>; <strong>iii) license registrations</strong>; 
                            <strong>iv) visa applications</strong>; <strong>v) workspace rental solutions</strong>; and <strong>vi) employee recruitment solutions</strong>.
                        </p>
                        
                        <!-- 3 Gold Trust Badges (Image 1) -->
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                            <span class="badge-seal"><i class="fa-solid fa-credit-card"></i> Pay by Instalments</span>
                            <span class="badge-seal"><i class="fa-solid fa-plane-slash"></i> Solutions Without Travel</span>
                            <span class="badge-seal"><i class="fa-solid fa-shield-halved"></i> Guaranteed Solutions</span>
                        </div>
                    </div>
                </div>

                <!-- 6 Navigation Cards (Image 1 Exact Layout) -->
                <div class="row g-3 mt-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6 col-lg-4">
                        <a href="#entities" class="quick-nav-card">
                            <div class="nav-num-box num-01">01</div>
                            <div class="fw-semibold">Ideal company structure for my business?</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#pros-cons" class="quick-nav-card">
                            <div class="nav-num-box num-02">02</div>
                            <div class="fw-semibold">Things I should know before registering a company?</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#process" class="quick-nav-card">
                            <div class="nav-num-box num-03">03</div>
                            <div class="fw-semibold">How does the process work?</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#banking-tax" class="quick-nav-card">
                            <div class="nav-num-box num-04">04</div>
                            <div class="fw-semibold">Additional services?</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#faq" class="quick-nav-card">
                            <div class="nav-num-box num-05">05</div>
                            <div class="fw-semibold">I have more questions</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#contact-modal" data-bs-toggle="modal" class="quick-nav-card">
                            <div class="nav-num-box num-06">06</div>
                            <div class="fw-semibold">I want to register a company now</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- GEO Key Summary Data Snippet -->
        <section class="py-4 bg-white">
            <div class="container">
                <div class="geo-snippet-box shadow-sm" data-aos="fade-up">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa-solid fa-lightbulb text-warning fs-4 me-2"></i>
                        <h2 class="h5 mb-0 fw-bold">Executive Summary: India Business Incorporation At A Glance</h2>
                    </div>
                    <p class="small text-muted mb-3">Key fact-based parameters verified for 2026 corporate setups in India:</p>
                    <div class="row g-3 text-dark small">
                        <div class="col-6 col-md-3"><strong>Standard Incorporation:</strong> 16 Weeks (4 Months)</div>
                        <div class="col-6 col-md-3"><strong>LLC Share Capital:</strong> US$ 1,650</div>
                        <div class="col-6 col-md-3"><strong>LLP Capital Requirement:</strong> US$ 1</div>
                        <div class="col-6 col-md-3"><strong>Resident Director Required:</strong> Yes (1 minimum)</div>
                        <div class="col-6 col-md-3"><strong>Corporate Tax (Resident):</strong> 20% - 30%</div>
                        <div class="col-6 col-md-3"><strong>Corporate Tax (Non-Resident):</strong> 40%</div>
                        <div class="col-6 col-md-3"><strong>Double Tax Treaties (DTAA):</strong> 90+ Countries</div>
                        <div class="col-6 col-md-3"><strong>Physical Travel Required:</strong> No (100% Remote)</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 01: Popular Business Entities Comparison (Image 5) -->
        <section id="entities" class="py-5 bg-light">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <span class="section-badge">01</span>
                    <h2 class="section-heading">Popular Business Entities in India</h2>
                    <p class="text-muted">Compare features across LLC, LLP, EPZ Company, Branch Office, and Project Office</p>
                </div>

                <div class="table-responsive-container" data-aos="fade-up">
                    <div class="table-responsive">
                        <table class="table table-hover entity-table align-middle">
                            <thead>
                                <tr>
                                    <th class="text-start ps-4">Entity Characteristic</th>
                                    <th>LLC</th>
                                    <th>LLP</th>
                                    <th>EPZ Company</th>
                                    <th>Branch</th>
                                    <th>Project Office</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Operations & Logistics -->
                                <tr class="section-header">
                                    <td colspan="6" class="ps-4"><i class="fa-solid fa-gears me-2"></i> Operations & Logistics</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Bank signatory must travel?</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Is doing business in India permitted?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Allowed to sign contracts with local clients?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Allowed to invoice local clients?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Can rent local office premises?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Tenancy agreement required before incorporation?</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Allowed to import raw materials?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Allowed to export goods?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>

                                <!-- Accounting & Tax -->
                                <tr class="section-header">
                                    <td colspan="6" class="ps-4"><i class="fa-solid fa-calculator me-2"></i> Accounting & Tax</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Corporate tax payable?</td>
                                    <td class="val-col fw-bold">34%</td>
                                    <td class="val-col fw-bold">0%</td>
                                    <td class="val-col fw-bold">Up to 0%</td>
                                    <td class="val-col fw-bold">43%</td>
                                    <td class="val-col fw-bold">43%</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Corporate bank account?</td>
                                    <td class="val-col">SCB India</td>
                                    <td class="val-col">HDFC India</td>
                                    <td class="val-col">HSBC India</td>
                                    <td class="val-col">Citibank India</td>
                                    <td class="val-col">Citibank India</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Statutory audit always required?</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Annual tax return to be submitted?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Access to double taxation treaties?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>

                                <!-- Company Law -->
                                <tr class="section-header">
                                    <td colspan="6" class="ps-4"><i class="fa-solid fa-scale-balanced me-2"></i> Company Law Requirements</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Issued share capital required?</td>
                                    <td class="val-col fw-bold">US$1,650</td>
                                    <td class="val-col fw-bold">US$1</td>
                                    <td class="val-col fw-bold">US$1,650</td>
                                    <td class="val-col text-muted">None</td>
                                    <td class="val-col text-muted">None</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Resident director/manager required?</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-yes">Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Indian shareholder/trustee/partner required?</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-yes">Yes</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                    <td class="val-col val-no">No</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Minimum number of directors/managers?</td>
                                    <td class="val-col">2</td>
                                    <td class="val-col">1</td>
                                    <td class="val-col">2</td>
                                    <td class="val-col">1</td>
                                    <td class="val-col">1</td>
                                </tr>
                                <tr>
                                    <td class="feature-title ps-4">Minimum number of shareholders/partners?</td>
                                    <td class="val-col">1</td>
                                    <td class="val-col">2</td>
                                    <td class="val-col">1</td>
                                    <td class="val-col">Parent company</td>
                                    <td class="val-col">Parent company</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 02: Advantages & Disadvantages (Image 2) -->
        <section id="pros-cons" class="py-5 bg-white">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <span class="section-badge">02</span>
                    <h2 class="section-heading">Advantages & Disadvantages of Doing Business in India</h2>
                    <p class="text-muted">A balanced perspective for foreign investors & global businesses</p>
                </div>

                <div class="row g-4">
                    <!-- Advantages Column -->
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="p-4 rounded-4 bg-light border border-success border-opacity-25 h-100 shadow-sm">
                            <h3 class="h4 text-success fw-bold mb-4 d-flex align-items-center">
                                <i class="fa-solid fa-circle-check me-2"></i> Key Advantages
                            </h3>
                            
                            <div class="mb-4">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i> Massive Untapped Market Potential</h4>
                                <p class="small text-muted mb-0">Aside from having the <strong>2nd largest population</strong> in the world, India is also the <strong>3rd largest economy in Asia</strong> in terms of GDP. Businesses benefit from numerous signed DTAAs and FTAs, giving seamless access to major consumer markets including China and Australia.</p>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i> Low Operation Cost</h4>
                                <p class="small text-muted mb-0">The costs to establish and run a business in India are relatively low compared to other countries, translating to higher net profit. Businesses benefit from low paid-up capital requirements, low average salary levels, and affordable electricity prices.</p>
                            </div>

                            <div class="mb-3">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i> Attractive Government Incentives</h4>
                                <p class="small text-muted mb-0">Companies are entitled to generous financial incentives such as: 
                                    <span class="d-block mt-1">i) complete exemption from corporate taxes;</span>
                                    <span class="d-block">ii) refunds of training cost, research cost, or project investment;</span>
                                    <span class="d-block">iii) financial grants;</span>
                                    <span class="d-block">iv) accelerated depreciation on equipment value; and</span>
                                    <span class="d-block">v) reimbursements of operation costs.</span>
                                </p>
                            </div>

                            <a href="#contact-modal" data-bs-toggle="modal" class="btn btn-outline-gold btn-sm mt-3">See More Benefits <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <!-- Disadvantages Column -->
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="p-4 rounded-4 bg-light border border-danger border-opacity-25 h-100 shadow-sm">
                            <h3 class="h4 text-danger fw-bold mb-4 d-flex align-items-center">
                                <i class="fa-solid fa-triangle-exclamation me-2"></i> Challenges & Disadvantages
                            </h3>

                            <div class="mb-4">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-xmark text-danger me-2"></i> Cultural Difference in Business & Red Tape</h4>
                                <p class="small text-muted mb-0">The government of India and its regulatory system tend to favor local entrepreneurs over foreigners. Moreover, delays in application processes related to business matters are common due to bureaucracy. As a result, standard registration without professional counsel can take months.</p>
                            </div>

                            <div class="mb-4">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-xmark text-danger me-2"></i> High Taxation & Statutory Compliance</h4>
                                <p class="small text-muted mb-0">Companies are subject to <strong>surcharges starting from 2% up to 12%</strong>, along with a <strong>Health & Education Cess of 4%</strong> on top of base corporate taxes. Businesses may also be liable for Dividend Distribution Tax (DDT), withholding tax, and GST compliance.</p>
                            </div>

                            <div class="p-3 bg-white rounded-3 border mt-4">
                                <p class="small fw-semibold text-dark mb-0"><i class="fa-solid fa-shield-cat text-warning me-1"></i> How Healy Consultants Helps:</p>
                                <p class="small text-muted mb-0">We handle bureaucracy directly with MCA and ROC to bypass delays and ensure strict compliance without unexpected tax penalties.</p>
                            </div>

                            <a href="#contact-modal" data-bs-toggle="modal" class="btn btn-outline-gold btn-sm mt-3">See More Challenges <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 03: Engagement Steps & Timeline (Image 3) -->
        <section id="process" class="py-5 bg-light">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <span class="section-badge">03</span>
                    <h2 class="section-heading">Typical India Engagement Steps & Timeline</h2>
                    <p class="text-muted">A limited liability company in India can be incorporated within 16 weeks with 2 directors and 2 shareholders. At least 1 resident director is required.</p>
                </div>

                <!-- Incorporation Legal Steps List -->
                <div class="row mb-5" data-aos="fade-up">
                    <div class="col-lg-10 mx-auto">
                        <div class="bg-white p-4 rounded-4 border shadow-sm">
                            <h3 class="h5 fw-bold text-dark mb-3"><i class="fa-solid fa-list-check text-warning me-2"></i> Sequential Registration Steps:</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-2 small text-secondary">
                                    <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                    <span>Apply for <strong>Digital Signature Certificates (DSC)</strong> for proposed directors.</span>
                                </li>
                                <li class="d-flex align-items-start mb-2 small text-secondary">
                                    <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                    <span>File <strong>DIN-3 and DIR-6</strong> with Ministry of Corporate Affairs (MCA) for Director Identification Number (DIN) application.</span>
                                </li>
                                <li class="d-flex align-items-start mb-2 small text-secondary">
                                    <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                    <span>File <strong>INC-1</strong> with the Registrar of Companies (ROC) for company name reservation.</span>
                                </li>
                                <li class="d-flex align-items-start mb-2 small text-secondary">
                                    <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                    <span>File <strong>INC-33 and INC-34, MOA and AOA</strong> with MCA to obtain the official Certificate of Incorporation.</span>
                                </li>
                                <li class="d-flex align-items-start mb-3 small text-secondary">
                                    <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                    <span>File <strong>Form 49A</strong> for Permanent Account Number (PAN) and <strong>Form 49B</strong> for Tax Deduction and Collection Account Number (TAN) with Income Tax Department (ITD).</span>
                                </li>
                            </ul>
                            <a href="#contact-modal" data-bs-toggle="modal" class="btn btn-gold btn-sm">View All Steps & Requirements</a>
                        </div>
                    </div>
                </div>

                <!-- Visual Timeline Component (Image 3) -->
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12">
                        <h3 class="h5 fw-bold text-center mb-3">Typical Engagement Timeline (4 MONTHS TOTAL)</h3>
                        <div class="timeline-wrapper">
                            
                            <!-- Timeline Horizontal Bar -->
                            <div class="d-none d-md-block">
                                <div class="d-flex justify-content-between mb-2 small text-warning fw-bold">
                                    <span>START</span>
                                    <span>4 MONTHS</span>
                                </div>
                                <div class="timeline-steps-line">
                                    <div class="step-node"></div>
                                    <div class="step-node"></div>
                                    <div class="step-node"></div>
                                    <div class="step-node"></div>
                                    <div class="step-node"></div>
                                </div>
                            </div>

                            <!-- Phase Boxes -->
                            <div class="row g-3">
                                <div class="col-md-2-4 col-sm-6 col-12">
                                    <div class="step-label-box">
                                        <h6>Engagement Planning</h6>
                                        <p>1 Week</p>
                                    </div>
                                </div>
                                <div class="col-md-2-4 col-sm-6 col-12">
                                    <div class="step-label-box">
                                        <h6>Company Incorporation</h6>
                                        <p>2 Months</p>
                                    </div>
                                </div>
                                <div class="col-md-2-4 col-sm-6 col-12">
                                    <div class="step-label-box">
                                        <h6>Corporate Bank Account Approval</h6>
                                        <p>1 Month</p>
                                    </div>
                                </div>
                                <div class="col-md-2-4 col-sm-6 col-12">
                                    <div class="step-label-box">
                                        <h6>Corporate Internet Banking Approval</h6>
                                        <p>2 Weeks</p>
                                    </div>
                                </div>
                                <div class="col-md-2-4 col-sm-6 col-12">
                                    <div class="step-label-box">
                                        <h6>Engagement Completion</h6>
                                        <p>1 Week</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section 04: Additional Support Services, Banking & Tax (Image 4) -->
        <section id="banking-tax" class="py-5 bg-white">
            <div class="container">
                <div class="section-title text-center" data-aos="fade-up">
                    <span class="section-badge">04</span>
                    <h2 class="section-heading">Additional Support Services</h2>
                    <p class="text-muted">Bank accounts, tax compliance, and immigration solutions</p>
                </div>

                <!-- Banking Sub-Section -->
                <div class="mb-5" data-aos="fade-up">
                    <h3 class="h4 fw-bold text-dark mb-2"><i class="fa-solid fa-piggy-bank text-warning me-2"></i> Opening a Corporate Bank Account for an India Company</h3>
                    <p class="text-muted small">
                        Healy Consultants Group recommends these 6 top tier international & local banks: 
                        <strong>Citibank, HSBC, Standard Chartered Bank, Barclays, HDFC Bank, and ICICI Bank</strong>. 
                        Engaging a professional service provider will increase bank account approval success rate. Our fee for this service is US$4,950. 
                        We also assist to obtain approval from the <strong>Reserve Bank of India (RBI)</strong> to repatriate funds from India.
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="bank-logo-card">citibank</div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="bank-logo-card text-danger">HSBC</div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="bank-logo-card text-success">Standard Chartered</div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="bank-logo-card text-info">BARCLAYS</div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="bank-logo-card text-primary">HDFC BANK</div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="bank-logo-card text-warning">ICICI Bank</div>
                        </div>
                    </div>
                </div>

                <!-- Tax Considerations Grid (Image 4 Exact Data) -->
                <div class="mb-5" data-aos="fade-up">
                    <h3 class="h4 fw-bold text-dark mb-4"><i class="fa-solid fa-coins text-warning me-2"></i> India Accounting & Tax Considerations</h3>
                    
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="stat-val">40%</div>
                                <div class="stat-title">Corporate tax for non-resident companies</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="stat-val">20 - 30%</div>
                                <div class="stat-title">Corporate tax for resident companies</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="stat-val">15%</div>
                                <div class="stat-title">Dividend Distribution Tax (DDT)</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="stat-val">0 - 28%</div>
                                <div class="stat-title">Goods & Services Tax (GST)</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="stat-val">30th Sept</div>
                                <div class="stat-title">Filing deadline for corporate tax return</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="stat-val">90+</div>
                                <div class="stat-title">Signed double taxation treaties (DTAAs)</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visa Breakdown Section (Image 4) -->
                <div id="visas" class="p-4 rounded-4 bg-light border" data-aos="fade-up">
                    <h3 class="h4 fw-bold text-dark mb-3"><i class="fa-solid fa-passport text-warning me-2"></i> India Visas Breakdown</h3>
                    <p class="small text-muted mb-4">Only non-EU/EFTA citizens are required to secure a work visa in order to work in India.</p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="bg-white p-3 rounded-3 border h-100">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-briefcase text-warning me-2"></i> Business Visas</h4>
                                <p class="small text-muted mb-0">Issued to foreign entrepreneurs visiting India for non-remunerated work, maximum duration of stay is between 1 to 5 years.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-3 rounded-3 border h-100">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-plane text-warning me-2"></i> Tourist Visas</h4>
                                <p class="small text-muted mb-0">Allow foreigners for casual business visits for a period of up to 6 months. No special documents are required for the application which makes acquiring this visa easier.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-3 rounded-3 border h-100">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-user-tie text-warning me-2"></i> Employment Visas</h4>
                                <p class="small text-muted mb-0">Granted to employees whose annual salaries are above US$25,000.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-3 rounded-3 border h-100">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-address-card text-warning me-2"></i> Persons of Indian Origin (PIO Card)</h4>
                                <p class="small text-muted mb-0">Allow descendants of Indian citizens to stay, study, or work in India for up to 15 years. Option to apply for citizenship is also available.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-white p-3 rounded-3 border">
                                <h4 class="h6 fw-bold text-dark mb-1"><i class="fa-solid fa-id-card text-warning me-2"></i> Overseas Citizenship of India (OCI)</h4>
                                <p class="small text-muted mb-0">Allow persons of Indian origin who are citizens of other countries to stay in India indefinitely without separate visa requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Contact Form Modal (Section 06 Interactive CTA) -->
    <div class="modal fade" id="contact-modal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow-lg">
                <div class="modal-header bg-dark text-white rounded-top-4">
                    <h5 class="modal-title fw-bold" id="contactModalLabel"><i class="fa-solid fa-paper-plane text-warning me-2"></i> Register Your India Company Now</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="incorporationForm" onsubmit="event.preventDefault(); handleFormSubmit();">
                        <div class="mb-3">
                            <label for="fullName" class="form-label small fw-semibold">Full Name *</label>
                            <input type="text" class="form-control" id="fullName" required placeholder="e.g. John Doe">
                        </div>
                        <div class="mb-3">
                            <label for="emailAddr" class="form-label small fw-semibold">Email Address *</label>
                            <input type="email" class="form-control" id="emailAddr" required placeholder="name@company.com">
                        </div>
                        <div class="mb-3">
                            <label for="phoneNum" class="form-label small fw-semibold">Phone / WhatsApp *</label>
                            <input type="tel" class="form-control" id="phoneNum" required placeholder="+1 234 567 890">
                        </div>
                        <div class="mb-3">
                            <label for="entityType" class="form-label small fw-semibold">Preferred Entity Type</label>
                            <select class="form-select" id="entityType">
                                <option selected>Limited Liability Company (LLC)</option>
                                <option>Limited Liability Partnership (LLP)</option>
                                <option>EPZ Company</option>
                                <option>Branch Office</option>
                                <option>Project Office</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notes" class="form-label small fw-semibold">Additional Details / Questions</label>
                            <textarea class="form-control" id="notes" rows="3" placeholder="Tell us about your business activity..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-gold w-full py-2 fw-bold">Submit Registration Request</button>
                    </form>

                    <!-- Alert Box for feedback (Never use alert()) -->
                    <div id="formSuccessAlert" class="alert alert-success mt-3 d-none" role="alert">
                        <i class="fa-solid fa-circle-check me-2"></i> Thank you! Our India incorporation specialist will contact you within 24 hours.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize AOS Animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        });

        // Form submission handler without alert()
        function handleFormSubmit() {
            const alertBox = document.getElementById('formSuccessAlert');
            const form = document.getElementById('incorporationForm');
            
            alertBox.classList.remove('d-none');
            form.reset();

            setTimeout(() => {
                const modalEl = document.getElementById('contact-modal');
                const modal = bootstrap.Modal.getInstance(modalEl);
                if(modal) {
                    modal.hide();
                }
                alertBox.classList.add('d-none');
            }, 3000);
        }
    </script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>