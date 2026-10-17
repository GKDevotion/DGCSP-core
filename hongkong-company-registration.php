<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <!-- Custom Themes & CSS Variables -->
    <style>

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--gold-primary);
            border-radius: 4px;
        }

        /* Typography & Utilities */
        .text-gold { color: var(--gold-primary) !important; }
        .bg-gold { background-color: var(--gold-primary) !important; }
        .bg-gold-light { background-color: var(--gold-light) !important; }
        .border-gold { border-color: var(--gold-border) !important; }

        /* Hero Banner */
        .hero-section {
            background: var(--golden-gradient-background);
            padding: 120px 0 60px;
            position: relative;
        }

        .badge-trust {
            background-color: #fff;
            border: 1px solid var(--gold-border);
            padding: 8px 16px;
            border-radius: 50px;
            box-shadow: var(--shadow-sm);
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--dark-gold);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        /* Navigation Quick Cards Grid */
        .quick-nav-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: var(--card-radius);
            padding: 20px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            text-decoration: none;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 15px;
            height: 100%;
        }

        .quick-nav-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-primary);
            color: var(--gold-primary);
        }

        .quick-nav-card .num-badge {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--white);
            flex-shrink: 0;
        }

        /* Section Styling */
        .section-padding {
            padding: 80px 0;
        }

        .section-header {
            margin-bottom: 45px;
        }

        .section-tag {
            background: var(--gold-light);
            color: var(--dark-gold);
            padding: 6px 14px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
            margin-bottom: 12px;
        }

        /* Comparison Table Styling */
        .table-custom-wrapper {
            background: var(--white);
            border-radius: var(--card-radius);
            box-shadow: var(--shadow-card);
            overflow: hidden;
            border: 1px solid var(--gold-border);
        }

        .table-custom {
            margin-bottom: 0;
            vertical-align: middle;
            font-size: 0.9rem;
        }

        .table-custom thead th {
            background-color: var(--gold-primary);
            color: var(--white);
            font-weight: 600;
            padding: 16px 12px;
            text-align: center;
            border: none;
        }

        .table-custom thead th:first-child {
            text-align: left;
            padding-left: 20px;
        }

        .table-custom tbody tr:nth-of-type(even) {
            background-color: var(--bg-light);
        }

        .table-custom td {
            padding: 12px;
            text-align: center;
            border-color: rgba(0,0,0,0.04);
        }

        .table-custom td:first-child {
            text-align: left;
            font-weight: 500;
            padding-left: 20px;
            color: var(--brand-dark);
        }

        .table-section-title {
            background-color: var(--gold-light) !important;
            color: var(--dark-gold);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        /* Cards & Lists */
        .advantage-card, .disadvantage-card {
            background: var(--white);
            border-radius: var(--card-radius);
            padding: 24px;
            box-shadow: var(--shadow-sm);
            height: 100%;
            border-left: 4px solid var(--gold-primary);
            transition: var(--transition);
        }

        .disadvantage-card {
            border-left-color: #d9534f;
        }

        .advantage-card:hover, .disadvantage-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }

        /* Timeline Graphics */
        .timeline-wrapper {
            position: relative;
            padding: 30px 0;
        }

        .timeline-line {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--brand-grey);
            transform: translateY(-50%);
            z-index: 1;
        }

        .timeline-progress {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gold-primary);
            transform: translateY(-50%);
            z-index: 2;
        }

        .timeline-steps {
            position: relative;
            z-index: 3;
            display: flex;
            justify-content: space-between;
        }

        .timeline-step {
            background: var(--white);
            border: 3px solid var(--gold-primary);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--gold-primary);
            margin: 0 auto 12px;
            box-shadow: var(--shadow-sm);
        }

        .timeline-card {
            background: var(--white);
            padding: 20px;
            border-radius: var(--card-radius);
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            text-align: center;
            height: 100%;
        }

        /* Bank Logos Grid */
        .bank-logo-card {
            background: var(--white);
            border-radius: 12px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            height: 80px;
            font-weight: 700;
            color: var(--brand-dark);
            transition: var(--transition);
        }

        .bank-logo-card:hover {
            border-color: var(--gold-primary);
            transform: scale(1.03);
        }

        /* Stats Card Grid */
        .stat-card {
            background: var(--white);
            border-radius: var(--card-radius);
            padding: 25px;
            text-align: center;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .stat-card:hover {
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--gold-primary);
            line-height: 1.2;
        }

        /* FAQ Accordion */
        .accordion-item {
            border: 1px solid var(--gold-border);
            border-radius: 12px !important;
            margin-bottom: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }

        .accordion-button {
            font-weight: 600;
            color: var(--brand-dark);
            padding: 18px 24px;
            background-color: var(--white);
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--gold-light);
            color: var(--dark-gold);
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--gold-primary);
        }

        /* Contact Form Form Card */
        .contact-form-card {
            background: var(--white);
            border-radius: var(--card-radius);
            padding: 35px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--gold-border);
        }

        .form-control, .form-select {
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid var(--brand-grey);
            font-size: 0.95rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 0.25rem rgba(171, 129, 57, 0.25);
        }

        /* Floating Contact Widget */
        .floating-contact-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
            background: var(--gold-primary);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(171, 129, 57, 0.5);
            font-size: 1.5rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .floating-contact-btn:hover {
            transform: scale(1.1);
            background: var(--gold-hover);
            color: white;
        }

        /* Mobile tweaks */
        @media (max-width: 768px) {
            .timeline-line, .timeline-progress { display: none; }
            .timeline-steps { flex-direction: column; gap: 15px; }
            .hero-section { padding-top: 100px; }
        }
    </style>

    <!-- Schema.org JSON-LD (SEO, AEO & GEO Structured Data) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://example.com/#organization",
          "name": "Healy Consultants Group / Global Corporate Services",
          "url": "https://example.com",
          "logo": "https://example.com/logo.png",
          "description": "Global business setup consultants offering Hong Kong company formation, banking, and tax services.",
          "sameAs": [
            "https://www.linkedin.com/company/healy-consultants",
            "https://twitter.com/healyconsult"
          ]
        },
        {
          "@type": "WebPage",
          "@id": "https://example.com/hong-kong-company-registration-2026#webpage",
          "url": "https://example.com/hong-kong-company-registration-2026",
          "name": "How to Register a Company in Hong Kong (2026 Edition)",
          "description": "Comprehensive corporate setup guide for Hong Kong covering legal structures, bank account setup, tax rules, and timelines.",
          "isPartOf": {
            "@type": "WebSite",
            "name": "Global Business Setup Portal",
            "url": "https://example.com"
          }
        },
        {
          "@type": "Article",
          "headline": "How to Register a Company in HONG KONG in 2026",
          "description": "Complete breakdown of Hong Kong company formation, advantages, disadvantages, required steps, corporate bank opening, and tax exemptions.",
          "author": {
            "@type": "Organization",
            "name": "Healy Consultants Group"
          },
          "datePublished": "2026-01-01",
          "dateModified": "2026-10-17",
          "mainEntityOfPage": "https://example.com/hong-kong-company-registration-2026"
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the corporate tax rate in Hong Kong for 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The corporate tax rate for resident companies in Hong Kong is 16.5% on profits derived within Hong Kong. Foreign income and non-resident offshore companies enjoy a 0% tax rate."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to register a company in Hong Kong?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Hong Kong private limited company can be incorporated in under 1 week with 1 director and 1 shareholder. Opening a corporate bank account takes approximately 4 weeks, with the complete engagement typically taking 8 weeks."
              }
            },
            {
              "@type": "Question",
              "name": "Is travel required to open a corporate bank account in Hong Kong?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, standard Hong Kong bank regulations require all bank signatories, directors, and shareholders to attend a physical 1-hour KYC meeting in Hong Kong. However, alternatives like shelf companies or multi-currency Fintech accounts may offer solutions without travel."
              }
            },
            {
              "@type": "Question",
              "name": "What is the minimum paid-up capital requirement in Hong Kong?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The minimum required paid-up share capital for incorporating a Hong Kong private limited company is US$1."
              }
            }
          ]
        }
      ]
    }
    </script>
    
    <!-- Hero Section -->
    <header class="hero-section" id="overview">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1000">
                    <span class="badge-trust mb-3">
                        <i class="fa-solid fa-shield-halved"></i> Established Since 2003 • 2026 Updated Guide
                    </span>
                    <h1 class="display-4 fw-bold mb-3 text-dark">
                        How to Register a Company in <span class="text-gold">HONG KONG</span> in 2026
                    </h1>
                    <p class="lead text-muted mb-4">
                        Since 2003, Healy Consultants Group has assisted our Clients to establish their company in Hong Kong. 
                        Our comprehensive services include <strong>i)</strong> Hong Kong company setup services; <strong>ii)</strong> corporate bank account opening services in Hong Kong and abroad; <strong>iii)</strong> assistance to open HK merchant accounts and secure corporate finance; <strong>iv)</strong> employee recruitment and relocation strategies; and <strong>v)</strong> office rental solutions in Hong Kong.
                    </p>

                    <!-- Trust Badges Bar -->
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <div class="badge-trust bg-white">
                            <i class="fa-solid fa-credit-card text-gold"></i> Pay by Instalments
                        </div>
                        <div class="badge-trust bg-white">
                            <i class="fa-solid fa-plane-slash text-gold"></i> Solutions Without Travel
                        </div>
                        <div class="badge-trust bg-white">
                            <i class="fa-solid fa-circle-check text-gold"></i> Guaranteed Solutions
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card border-0 shadow-md p-4 text-center rounded-4" style="background: rgba(255,255,255,0.9); backdrop-filter: blur(5px);">
                        <div class="mb-3 text-gold fs-1">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Global Gateway</h4>
                        <p class="text-muted small mb-3">Incorporate your business in Asia's premier financial center with zero tax on foreign profit.</p>
                        <a href="#register" class="btn btn-gold w-100 mb-2">Get Started Free Consultation</a>
                        <span class="text-muted" style="font-size: 0.75rem;"><i class="fa-solid fa-lock"></i> 100% Confidential & Secure</span>
                    </div>
                </div>
            </div>

            <!-- Quick Jump Navigation Cards (6 Key Options) -->
            <div class="row g-3 mt-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-4 col-sm-6">
                    <a href="#entities" class="quick-nav-card">
                        <div class="num-badge" style="background-color: #009688;">01</div>
                        <div>
                            <div class="fw-bold">Company Structure</div>
                            <small class="text-muted">Ideal entity for my business?</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#pros-cons" class="quick-nav-card">
                        <div class="num-badge" style="background-color: #2b7bb9;">02</div>
                        <div>
                            <div class="fw-bold">Key Facts & Pros/Cons</div>
                            <small class="text-muted">Things to know before registering?</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#process" class="quick-nav-card">
                        <div class="num-badge" style="background-color: #f39c12;">03</div>
                        <div>
                            <div class="fw-bold">Setup Process</div>
                            <small class="text-muted">How does the process work?</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#banking" class="quick-nav-card">
                        <div class="num-badge" style="background-color: #8bc34a;">04</div>
                        <div>
                            <div class="fw-bold">Additional Services</div>
                            <small class="text-muted">Banking, Tax, Visas & Audits</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#faq" class="quick-nav-card">
                        <div class="num-badge" style="background-color: #673ab7;">05</div>
                        <div>
                            <div class="fw-bold">More Questions</div>
                            <small class="text-muted">Frequently Asked Questions</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#register" class="quick-nav-card">
                        <div class="num-badge" style="background-color: #c0392b;">06</div>
                        <div>
                            <div class="fw-bold">Register Now</div>
                            <small class="text-muted">Start incorporation today</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION 01: Popular Business Entities Matrix -->
    <section class="section-padding bg-white" id="entities">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag">01. Entity Selection</span>
                <h2 class="fw-bold">Popular Business Entities in Hong Kong</h2>
                <p class="text-muted max-w-700 mx-auto">Compare operational requirements, tax liabilities, and company law compliance for all official business structures in Hong Kong.</p>
            </div>

            <div class="table-custom-wrapper" data-aos="fade-up" data-aos-delay="100">
                <div class="table-responsive">
                    <table class="table table-custom table-hover">
                        <thead>
                            <tr>
                                <th style="width: 25%;">Operations & Logistics</th>
                                <th>Resident Company</th>
                                <th>Offshore Company</th>
                                <th>Offshore Trust</th>
                                <th>PLC</th>
                                <th>Branch</th>
                                <th>RO (Rep Office)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bank signatory must travel?</td>
                                <td><span class="badge bg-warning text-dark">Yes</span></td>
                                <td><span class="badge bg-warning text-dark">Yes</span></td>
                                <td><span class="badge bg-warning text-dark">Yes</span></td>
                                <td><span class="badge bg-warning text-dark">Yes</span></td>
                                <td><span class="badge bg-warning text-dark">Yes</span></td>
                                <td><span class="badge bg-warning text-dark">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Doing business in HK permitted?</td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-danger"><i class="fa-solid fa-xmark"></i> No</span></td>
                            </tr>
                            <tr>
                                <td>Allowed to sign contracts with local Clients?</td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-danger"><i class="fa-solid fa-xmark"></i> No</span></td>
                            </tr>
                            <tr>
                                <td>Allowed to invoice local Clients?</td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-danger"><i class="fa-solid fa-xmark"></i> No</span></td>
                            </tr>
                            <tr>
                                <td>Can rent local office premises?</td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-muted">N/A</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                            </tr>
                            <tr>
                                <td>Allowed to import raw materials?</td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-danger"><i class="fa-solid fa-xmark"></i> No</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-danger"><i class="fa-solid fa-xmark"></i> No</span></td>
                            </tr>
                            <tr>
                                <td>Allowed to export goods?</td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-danger"><i class="fa-solid fa-xmark"></i> No</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-success"><i class="fa-solid fa-check"></i> Yes</span></td>
                                <td><span class="text-danger"><i class="fa-solid fa-xmark"></i> No</span></td>
                            </tr>

                            <!-- Accounting and Tax Section -->
                            <tr class="table-section-title">
                                <td colspan="7">Accounting & Tax Rules</td>
                            </tr>
                            <tr>
                                <td>Corporate tax on local income?</td>
                                <td><strong>16.5%</strong></td>
                                <td><strong>16.5%</strong></td>
                                <td><strong>16.5%</strong></td>
                                <td><strong>16.5%</strong></td>
                                <td><strong>16.5%</strong></td>
                                <td><span class="text-muted">Not allowed</span></td>
                            </tr>
                            <tr>
                                <td>Corporate tax on foreign income?</td>
                                <td><strong class="text-success">0%</strong></td>
                                <td><strong class="text-success">0%</strong></td>
                                <td><strong class="text-success">0%</strong></td>
                                <td><strong class="text-success">0%</strong></td>
                                <td><strong class="text-success">0%</strong></td>
                                <td><span class="text-muted">Not allowed</span></td>
                            </tr>
                            <tr>
                                <td>Supported Corporate Bank Account</td>
                                <td><small>BOC HK</small></td>
                                <td><small>HSBC HK</small></td>
                                <td><small>DBS HK</small></td>
                                <td><small>Statrys HK</small></td>
                                <td><small>Fubon Bank</small></td>
                                <td><small>OCBC Wing Hang</small></td>
                            </tr>
                            <tr>
                                <td>Statutory audit required?</td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-danger">No</span></td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-danger">No</span></td>
                                <td><span class="text-danger">No</span></td>
                            </tr>
                            <tr>
                                <td>Annual tax return to be submitted?</td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-danger">No</span></td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-success">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Access to DTAAs (Double Tax Treaties)?</td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-warning">Not all</span></td>
                                <td><span class="text-danger">No</span></td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-success">Yes</span></td>
                                <td><span class="text-danger">No</span></td>
                            </tr>
                            <tr>
                                <td>Tax on dividends to foreign shareholders?</td>
                                <td><strong class="text-success">No (0%)</strong></td>
                                <td><strong class="text-success">No (0%)</strong></td>
                                <td><strong class="text-success">No (0%)</strong></td>
                                <td><strong class="text-success">No (0%)</strong></td>
                                <td><strong class="text-success">No (0%)</strong></td>
                                <td><strong class="text-success">No (0%)</strong></td>
                            </tr>

                            <!-- Company Law Section -->
                            <tr class="table-section-title">
                                <td colspan="7">Company Law & Structure</td>
                            </tr>
                            <tr>
                                <td>Issued share capital required?</td>
                                <td>US$1</td>
                                <td>US$1</td>
                                <td>US$1</td>
                                <td>US$1</td>
                                <td>None</td>
                                <td>None</td>
                            </tr>
                            <tr>
                                <td>Resident director required?</td>
                                <td>No</td>
                                <td>No</td>
                                <td>Resident trustee</td>
                                <td>No</td>
                                <td>No</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>HK shareholder required?</td>
                                <td>No</td>
                                <td>No</td>
                                <td>No</td>
                                <td>No</td>
                                <td>No</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Minimum number of directors</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Minimum number of shareholders</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1 settlor</td>
                                <td>1</td>
                                <td>Parent company</td>
                                <td>Parent company</td>
                            </tr>
                            <tr>
                                <td>Individual shareholders allowed?</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>No</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Corporate director(s) allowed?</td>
                                <td>No</td>
                                <td>No</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 02: Advantages & Disadvantages -->
    <section class="section-padding bg-light" id="pros-cons">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag">02. Strategic Evaluation</span>
                <h2 class="fw-bold">Advantages & Disadvantages of Doing Business in Hong Kong</h2>
                <p class="text-muted max-w-700 mx-auto">Make an informed decision by weighing key jurisdictional benefits against strict regulatory standards.</p>
            </div>

            <div class="row g-4">
                <!-- Advantages Column -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="h-100">
                        <h4 class="fw-bold text-success mb-3 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-circle-check"></i> Strategic Advantages
                        </h4>
                        
                        <div class="d-flex flex-column gap-3">
                            <div class="advantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i>Ease of Doing Business</h6>
                                <p class="text-muted small mb-0">A Hong Kong company can be easily set up in less than a week. Corporate bank account opening can be streamlined via ready-made HK shelf companies with existing bank accounts.</p>
                            </div>

                            <div class="advantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i>Competitive Taxation</h6>
                                <p class="text-muted small mb-0">Corporate tax rate is <strong>16.5%</strong> for local profits, which is among the lowest in Asia. Offshore companies trading outside Hong Kong pay <strong>0% tax</strong>.</p>
                            </div>

                            <div class="advantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i>Excellent Business Environment</h6>
                                <p class="text-muted small mb-0">Ranked as one of the least corrupt territories globally. Leading financial center whose regulation does not restrict foreign investment nor income repatriation.</p>
                            </div>

                            <div class="advantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i>Ideal Base for E-Commerce</h6>
                                <p class="text-muted small mb-0">Vibrant local market for start-ups, venture capital, mergers and acquisitions. High connectivity for international trade.</p>
                            </div>

                            <div class="advantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-check text-success me-2"></i>Global Banking Hub</h6>
                                <p class="text-muted small mb-0">Multi-currency accounts with independent IBAN/SWIFT numbers. Directly integrations with Amazon, PayPal, WeChat, eBay, and Shopify in <1 week.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disadvantages Column -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="h-100">
                        <h4 class="fw-bold text-danger mb-3 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-triangle-exclamation"></i> Challenges & Regulations
                        </h4>

                        <div class="d-flex flex-column gap-3">
                            <div class="disadvantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-xmark text-danger me-2"></i>Strict Regulations & Foreigner Limits</h6>
                                <p class="text-muted small mb-0">Registration for foreign entrepreneurs is becoming stricter. Certain nationalities are restricted, and travel to HK for bank account opening is frequently required.</p>
                            </div>

                            <div class="disadvantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-xmark text-danger me-2"></i>High Property & Rental Costs</h6>
                                <p class="text-muted small mb-0">Commercial office spaces in Hong Kong are among the most expensive globally, impacting overall net profit margins for physical setups.</p>
                            </div>

                            <div class="disadvantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-xmark text-danger me-2"></i>Tighter Local Substance Requirements</h6>
                                <p class="text-muted small mb-0">Hong Kong banks require proof of local substance prior to multi-currency corporate bank account approval (e.g., local customers, physical address, or local staff).</p>
                            </div>

                            <div class="disadvantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-xmark text-danger me-2"></i>Mandatory In-Person KYC Meeting</h6>
                                <p class="text-muted small mb-0">All traditional Hong Kong banks enforce a non-negotiable 1-hour physical KYC meeting with signatories before granting bank account approval.</p>
                            </div>

                            <div class="disadvantage-card">
                                <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-xmark text-danger me-2"></i>IRD Offshore Tax Audits</h6>
                                <p class="text-muted small mb-0">Profitable offshore companies face rigorous statutory audits from the Hong Kong Inland Revenue Department (IRD) to maintain legally exempt tax status.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 03: Engagement Steps & Timeline -->
    <section class="section-padding bg-white" id="process">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag">03. Execution Plan</span>
                <h2 class="fw-bold">Typical Engagement Steps & Timeline</h2>
                <p class="text-muted max-w-700 mx-auto">Hong Kong private limited companies can be incorporated within 1 week with 1 director, 1 shareholder, and minimum capital of US$1.</p>
            </div>

            <!-- Steps List -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-6 col-lg-3">
                    <div class="timeline-card">
                        <div class="text-gold fs-2 mb-2"><i class="fa-solid fa-magnifying-glass text-gold"></i></div>
                        <h6 class="fw-bold">Step 1: Name Check</h6>
                        <p class="text-muted small mb-0">Check company name availability with Companies Registry and reserve chosen name.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="timeline-card">
                        <div class="text-gold fs-2 mb-2"><i class="fa-solid fa-id-card"></i></div>
                        <h6 class="fw-bold">Step 2: KYC & Identity</h6>
                        <p class="text-muted small mb-0">Register and verify the identities of all initial directors and shareholders.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="timeline-card">
                        <div class="text-gold fs-2 mb-2"><i class="fa-solid fa-file-signature"></i></div>
                        <h6 class="fw-bold">Step 3: Filing & IRBR1</h6>
                        <p class="text-muted small mb-0">Submit incorporation application to Companies Registry & IRD for tax registration.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="timeline-card">
                        <div class="text-gold fs-2 mb-2"><i class="fa-solid fa-vault"></i></div>
                        <h6 class="fw-bold">Step 4: Bank Account</h6>
                        <p class="text-muted small mb-0">Attend bank KYC interview and complete corporate bank account activation.</p>
                    </div>
                </div>
            </div>

            <!-- Timeline Diagram -->
            <div class="card border-0 bg-light p-4 rounded-4 shadow-sm mt-4" data-aos="fade-up">
                <h5 class="fw-bold text-center mb-4">Overall Engagement Roadmap (Total Target: 8 Weeks)</h5>
                
                <div class="row g-3 text-center">
                    <div class="col-md">
                        <div class="p-3 bg-white rounded-3 border border-gold">
                            <span class="badge bg-gold text-white mb-2">1 Week</span>
                            <div class="fw-bold small">Engagement Planning</div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="p-3 bg-white rounded-3 border border-gold">
                            <span class="badge bg-gold text-white mb-2">1 Week</span>
                            <div class="fw-bold small">Company Incorporation</div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="p-3 bg-white rounded-3 border border-gold">
                            <span class="badge bg-gold text-white mb-2">4 Weeks</span>
                            <div class="fw-bold small">Bank Account Approval</div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="p-3 bg-white rounded-3 border border-gold">
                            <span class="badge bg-gold text-white mb-2">1 Week</span>
                            <div class="fw-bold small">Internet Banking Setup</div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="p-3 bg-white rounded-3 border border-gold">
                            <span class="badge bg-gold text-white mb-2">1 Week</span>
                            <div class="fw-bold small">Engagement Completion</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 04: Banking, Tax & Visas -->
    <section class="section-padding bg-light" id="banking">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag">04. Support Ecosystem</span>
                <h2 class="fw-bold">Banking, Tax Considerations & Visas</h2>
                <p class="text-muted max-w-700 mx-auto">Complete corporate backing including top Tier-1 bank introductions, tax compliance, and relocation visas.</p>
            </div>

            <!-- Supported Banks Section -->
            <div class="mb-5" data-aos="fade-up">
                <h4 class="fw-bold mb-3"><i class="fa-solid fa-building-columns text-gold me-2"></i> Corporate Bank Account Opening</h4>
                <p class="text-muted">Opening a corporate bank account in Hong Kong requires strict compliance. We recommend and assist with the following 10 leading banking institutions: <strong>HSBC, DBS, Citibank, BNP Paribas, Deutsche Bank, United Overseas Bank (UOB), Bank of East Asia (BEA), Dah Sing Bank, Hang Seng Bank, and OCBC Wing Hang.</strong></p>
                <div class="alert alert-warning border-0 shadow-sm d-flex align-items-center gap-3">
                    <i class="fa-solid fa-circle-info fs-4 text-warning"></i>
                    <div>
                        <strong>Professional Advisory Fee:</strong> Opening corporate accounts involves tight money laundering filters. Engaging professional advisors increases approval success. Standard fee: <strong>US$4,950</strong>.
                    </div>
                </div>

                <!-- Bank Grid -->
                <div class="row g-3 mt-2">
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> HSBC</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> DBS</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> Citibank</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> BNP Paribas</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> Deutsche Bank</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> UOB</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> BEA East Asia</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> Dah Sing Bank</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> Hang Seng</div></div>
                    <div class="col-6 col-md-4 col-lg-2.4"><div class="bank-logo-card"><i class="fa-solid fa-university me-2 text-gold"></i> OCBC Wing Hang</div></div>
                </div>
            </div>

            <!-- Tax Stats Cards -->
            <div class="mb-5" data-aos="fade-up">
                <h4 class="fw-bold mb-4"><i class="fa-solid fa-calculator text-gold me-2"></i> Hong Kong Tax Summary Stats</h4>
                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">0%</div>
                            <div class="fw-bold mt-2">Corporate Tax</div>
                            <small class="text-muted">For Non-Resident Offshore Companies</small>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">16.5%</div>
                            <div class="fw-bold mt-2">Resident Corporate Tax</div>
                            <small class="text-muted">On Local Sourced Profits</small>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">0%</div>
                            <div class="fw-bold mt-2">VAT / Sales Tax</div>
                            <small class="text-muted">Zero Goods & Services Tax</small>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">1st April</div>
                            <div class="fw-bold mt-2">Filing Deadline</div>
                            <small class="text-muted">Annual Corporate Tax Return Submission</small>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">37</div>
                            <div class="fw-bold mt-2">Signed Treaties</div>
                            <small class="text-muted">Double Taxation Avoidance Agreements (DTAA)</small>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">US$1</div>
                            <div class="fw-bold mt-2">Min Share Capital</div>
                            <small class="text-muted">No High Minimum Capital Requirement</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visa Categories -->
            <div data-aos="fade-up">
                <h4 class="fw-bold mb-4"><i class="fa-solid fa-passport text-gold me-2"></i> Hong Kong Visa Programs</h4>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-4 rounded-4">
                            <h6 class="fw-bold text-gold mb-2"><i class="fa-solid fa-briefcase me-2"></i>Entry for Investment</h6>
                            <p class="text-muted small mb-0">Designed for foreign entrepreneurs who intend to relocate to Hong Kong to establish or join a local business as self-employed individuals.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-4 rounded-4">
                            <h6 class="fw-bold text-gold mb-2"><i class="fa-solid fa-user-gear me-2"></i>Professional Employment</h6>
                            <p class="text-muted small mb-0">Includes <strong>i) IANG</strong> for HK graduates; <strong>ii) ASMTP</strong> for Mainland talent; and <strong>iii) GEP</strong> (General Employment Policy) for skilled foreign talent.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-4 rounded-4">
                            <h6 class="fw-bold text-gold mb-2"><i class="fa-solid fa-house-user me-2"></i>Residence Visas</h6>
                            <p class="text-muted small mb-0">Suitable for foreign business founders seeking long-term residency and eventual permanent resident status after 7 years.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 05: AEO/SEO FAQs -->
    <section class="section-padding bg-white" id="faq">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-tag">05. Frequently Asked Questions</span>
                <h2 class="fw-bold">Answers to Common Hong Kong Setup Questions</h2>
                <p class="text-muted max-w-700 mx-auto">Direct, authoritative answers designed for quick search engine indexing and AI answers.</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="accordion" id="hkFaqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Can a foreigner legally own 100% of a Hong Kong company?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#hkFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. Foreigners of any nationality can own 100% of a Hong Kong Private Limited Company. There is no requirement for a local Hong Kong shareholder or resident director for standard incorporations.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How does Hong Kong tax offshore profits?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#hkFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Hong Kong adopts a territorial basis of taxation. Profits derived outside of Hong Kong are completely exempt from Hong Kong corporate income tax (0%). However, companies must file an offshore tax claim supported by audited financial statements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Is travel mandatory for bank account opening?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#hkFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Traditional Hong Kong tier-1 banks (HSBC, DBS, Standard Chartered) require a 1-hour physical KYC meeting in HK. However, alternative solutions—such as purchasing ready-made shelf companies with existing bank accounts or setting up international multi-currency Fintech accounts—can be processed without travel.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    What documents are required to register a company?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#hkFaqAccordion">
                                <div class="accordion-body text-muted">
                                    You will need: i) Proposed company English/Chinese name; ii) Passport copies for all directors and shareholders; iii) Proof of residential address (utility bill or bank statement within 3 months); and iv) Brief business plan description.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 06: Registration Call to Action Form -->
    <section class="section-padding bg-light" id="register">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-tag">06. Get Started Today</span>
                    <h2 class="fw-bold display-6 mb-3">Ready to Register Your Hong Kong Company?</h2>
                    <p class="text-muted mb-4">Our dedicated corporate specialists will guide you through entity selection, IRD registration, bank account introductions, and tax structuring.</p>
                    
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-gold-light text-gold p-3 rounded-circle"><i class="fa-solid fa-clock fs-4"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">Fast 1-Week Incorporation</h6>
                                <small class="text-muted">Swift application handling with Companies Registry</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-gold-light text-gold p-3 rounded-circle"><i class="fa-solid fa-shield-cat fs-4"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">Guaranteed Compliance</h6>
                                <small class="text-muted">Full statutory audit & tax exemption support</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-form-card">
                        <h4 class="fw-bold mb-3 text-center">Inquire Now</h4>
                        <form id="hkRegistrationForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">First Name</label>
                                    <input type="text" class="form-control" placeholder="John" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Doe" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Corporate Email</label>
                                    <input type="email" class="form-control" placeholder="john@company.com" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Phone / WhatsApp</label>
                                    <input type="tel" class="form-control" placeholder="+1 (555) 000-0000" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Preferred Entity Structure</label>
                                    <select class="form-select">
                                        <option selected>Resident Private Limited Company</option>
                                        <option>Offshore Company</option>
                                        <option>Branch Office</option>
                                        <option>Representative Office (RO)</option>
                                        <option>Offshore Trust / PLC</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Additional Services Needed</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="srv1" checked>
                                        <label class="form-check-label small" for="srv1">Corporate Bank Account Setup</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="srv2">
                                        <label class="form-check-label small" for="srv2">Tax Advisory & Statutory Audit</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="srv3">
                                        <label class="form-check-label small" for="srv3">Hong Kong Visa Application</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-gold w-100 py-3">Submit Registration Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Initialize Animate On Scroll
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Form submission handling
        document.getElementById('hkRegistrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your submission. Our Hong Kong corporate specialist will reach out within 24 hours.');
            this.reset();
        });
    </script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>