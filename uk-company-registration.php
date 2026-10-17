<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <!-- Custom CSS Variables and Theme -->
    <style>

        /* Custom Buttons */
        .btn-gold {
            background-color: var(--gold-primary);
            color: var(--white);
            border: 2px solid var(--gold-primary);
            border-radius: 30px;
            padding: 12px 28px;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .btn-gold:hover, .btn-gold:focus {
            background-color: var(--gold-hover);
            border-color: var(--gold-hover);
            color: var(--white);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .btn-outline-gold {
            background-color: transparent;
            color: var(--gold-primary);
            border: 2px solid var(--gold-primary);
            border-radius: 30px;
            padding: 10px 24px;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-outline-gold:hover {
            background-color: var(--gold-primary);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: var(--golden-gradient-background);
            padding: 60px 0 70px;
            position: relative;
        }

        .badge-gold {
            background: var(--gold-light);
            color: var(--dark-gold);
            border: 1px solid var(--gold-border);
            border-radius: 20px;
            padding: 6px 16px;
            font-size: 0.88rem;
            font-weight: 600;
            display: inline-block;
        }

        /* Feature Badges from original image */
        .trust-badge {
            background: #ffffff;
            border: 1px solid var(--gold-border);
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: var(--shadow-sm);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--dark-gold);
            transition: var(--transition);
        }

        .trust-badge:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        /* Quick Index Grid (Numbered 01 to 06) */
        .index-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: var(--card-radius);
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            text-decoration: none;
            color: var(--brand-dark);
            height: 100%;
        }

        .index-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-primary);
            color: var(--gold-primary);
        }

        .index-number {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            color: #ffffff;
            flex-shrink: 0;
        }

        /* Custom color accent accents matching image numbering */
        .num-01 { background: #00a884; }
        .num-02 { background: #2b7bb9; }
        .num-03 { background: #e69d00; }
        .num-04 { background: #8bb33b; }
        .num-05 { background: #543153; }
        .num-06 { background: #c2392a; }

        /* Table Matrix Style */
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
            padding: 16px;
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
            padding: 14px 16px;
            text-align: center;
            vertical-align: middle;
            font-size: 0.9rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .table-custom tr:nth-child(even) td {
            background-color: #fcfcfc;
        }

        .table-custom tr:nth-child(even) td:first-child {
            background-color: #fcfcfc;
        }

        /* Advantages / Disadvantages lists */
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

        .check-icon {
            color: #10b981;
            font-size: 1.2rem;
            margin-top: 2px;
        }

        .cross-icon {
            color: #ef4444;
            font-size: 1.2rem;
            margin-top: 2px;
        }

        /* Timeline Graphics */
        .timeline-wrapper {
            position: relative;
            padding: 30px 0;
        }

        .timeline-bar {
            height: 6px;
            background: var(--brand-grey);
            border-radius: 3px;
            position: relative;
            margin: 40px 0;
        }

        .timeline-progress {
            height: 100%;
            background: var(--gold-primary);
            width: 100%;
            border-radius: 3px;
        }

        .timeline-steps {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
        }

        .timeline-step-card {
            background: #003366;
            color: #ffffff;
            border-radius: 12px;
            padding: 20px 15px;
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
            padding: 20px;
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

        /* Floating CTA Button */
        .floating-cta {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
        }

        /* GEO & AEO Quick Summary Card */
        .aeo-summary-box {
            background: var(--gold-light);
            border-left: 5px solid var(--gold-primary);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        /* Responsive timeline overrides */
        @media (max-width: 991px) {
            .timeline-steps {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Schema.org JSON-LD for SEO, GEO & AEO Optimization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://example.com/#organization",
          "name": "UK Corporate Registration Services",
          "url": "https://example.com",
          "logo": "https://example.com/logo.png",
          "description": "Professional UK company incorporation, foreign entity formation, and corporate bank account opening since 2003.",
          "telephone": "+442079460000",
          "priceRange": "$$$"
        },
        {
          "@type": "Service",
          "name": "UK Company Registration 2026",
          "provider": { "@id": "https://example.com/#organization" },
          "areaServed": "Worldwide",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "UK Business Entities",
            "itemListElement": [
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "UK Private Limited Company (LLC)" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "UK Tax Exempt LLC" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Public Limited Company (PLC)" } },
              { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Limited Liability Partnership (LLP)" } }
            ]
          }
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How long does it take to register a company in the UK in 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Incorporating a UK company takes approximately 1 week with 1 director and 1 shareholder. The full engagement timeline including corporate bank account opening takes around 10 weeks."
              }
            },
            {
              "@type": "Question",
              "name": "Can non-residents or foreigners open a UK company without traveling?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, 100% foreign ownership is permitted in the UK. Non-residents can form a UK company online without traveling."
              }
            },
            {
              "@type": "Question",
              "name": "What is the corporate tax rate in the UK for 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The main UK corporate tax rate is 25%. The standard VAT rate is 20%, and there is 0% withholding tax on dividend payments."
              }
            }
          ]
        }
      ]
    }
    </script>

    <!-- Main Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <span class="badge-gold mb-3"><i class="fa-solid fa-award me-1"></i> Established Expertise Since 2003</span>
                    <h1 class="display-4 fw-extrabold mb-3">How to Register a Company in UK in <span style="color: var(--gold-primary);">2026</span></h1>
                    <p class="lead text-muted mb-4">
                        Assisting global entrepreneurs with seamless UK company incorporation, corporate bank account setup, local employee recruitment, visa strategies, and virtual office rentals.
                    </p>
                    
                    <p class="mb-4 text-dark font-weight-500">
                        A <strong>UK limited liability company</strong> is a world-class legal vehicle through which international business can be conducted efficiently and reputably worldwide.
                    </p>

                    <!-- Trust Badges from Source Image 1 -->
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <div class="trust-badge">
                            <i class="fa-solid fa-credit-card"></i> Pay by Instalments
                        </div>
                        <div class="trust-badge">
                            <i class="fa-solid fa-plane-slash"></i> Solutions Without Travel
                        </div>
                        <div class="trust-badge">
                            <i class="fa-solid fa-shield-halved"></i> Guaranteed Solutions
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="#register" class="btn btn-gold"><i class="fa-solid fa-paper-plane me-2"></i>Start Registration</a>
                        <a href="#entities" class="btn btn-outline-gold"><i class="fa-solid fa-table-list me-2"></i>Compare Entities</a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="card border-0 shadow-lg p-3" style="border-radius: 20px; background: rgba(255,255,255,0.9);">
                        <div class="card-body">
                            <h3 class="h5 fw-bold mb-3"><i class="fa-solid fa-bolt text-warning me-2"></i>Quick Navigation Guide</h3>
                            <div class="row g-2">
                                <div class="col-12">
                                    <a href="#entities" class="index-card">
                                        <div class="index-number num-01">01</div>
                                        <div class="fw-semibold">Ideal company structure for my business?</div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#advantages" class="index-card">
                                        <div class="index-number num-02">02</div>
                                        <div class="fw-semibold">Things I should know before registering?</div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#timeline" class="index-card">
                                        <div class="index-number num-03">03</div>
                                        <div class="fw-semibold">How does the process work?</div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#banking-visas" class="index-card">
                                        <div class="index-number num-04">04</div>
                                        <div class="fw-semibold">Additional support services & Visas?</div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#faq" class="index-card">
                                        <div class="index-number num-05">05</div>
                                        <div class="fw-semibold">I have more questions (FAQ)</div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#register" class="index-card">
                                        <div class="index-number num-06">06</div>
                                        <div class="fw-semibold">I want to register a company now</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION 01: Popular Business Entities (Matrix Table) -->
    <section id="entities" class="py-5 bg-light">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-4" data-aos="fade-up">
                <div class="index-number num-01">01</div>
                <div>
                    <h2 class="h3 mb-0">Popular Business Entities in UK</h2>
                    <p class="text-muted mb-0">Compare legal requirements, setup timelines, and tax rates across entities.</p>
                </div>
            </div>

            <!-- GEO & AEO Concise Overview Box -->
            <div class="aeo-summary-box" data-aos="fade-up">
                <h3 class="h6 font-weight-bold text-uppercase text-dark mb-2"><i class="fa-solid fa-circle-info me-2"></i>AEO Direct Key Takeaway</h3>
                <p class="mb-0 fs-6">
                    For 95% of foreign investors, the <strong>UK Private Limited Company (LLC)</strong> is the optimal business structure. It offers 100% foreign ownership, setup in 2 weeks, minimum capital of just £1, no local director requirements, and limited legal liability.
                </p>
            </div>

            <!-- Full Responsive Matrix Table -->
            <div class="table-container" data-aos="fade-up">
                <table class="table table-custom table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Feature / Criteria</th>
                            <th>LLC</th>
                            <th>UK Tax Exempt LLC</th>
                            <th>PLC</th>
                            <th>Limited by Guarantee</th>
                            <th>LLP</th>
                            <th>Rep. Office</th>
                            <th>Branch</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>How long to set the company up?</td>
                            <td>2 weeks</td>
                            <td>2 weeks</td>
                            <td>2 weeks</td>
                            <td>2 weeks</td>
                            <td>2 weeks</td>
                            <td>2 weeks</td>
                            <td>2 weeks</td>
                        </tr>
                        <tr>
                            <td>How long to open company bank account?</td>
                            <td>6 weeks</td>
                            <td>6 weeks</td>
                            <td>6 weeks</td>
                            <td>6 weeks</td>
                            <td>6 weeks</td>
                            <td>6 weeks</td>
                            <td>6 weeks</td>
                        </tr>
                        <tr>
                            <td>Legal Liability?</td>
                            <td>Limited</td>
                            <td>Limited</td>
                            <td>Limited</td>
                            <td>Limited</td>
                            <td>Limited</td>
                            <td><span class="text-danger font-weight-bold">Unlimited</span></td>
                            <td><span class="text-danger font-weight-bold">Unlimited</span></td>
                        </tr>
                        <tr>
                            <td>Wholly Foreign owned?</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-circle-check text-success"></i> Yes</td>
                        </tr>
                        <tr>
                            <td>Minimum paid-up share capital?</td>
                            <td><strong>£1</strong></td>
                            <td><strong>£1</strong></td>
                            <td><strong>£50,000</strong></td>
                            <td>None</td>
                            <td>None</td>
                            <td>None</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>Must file annual tax return?</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><span class="text-muted">No</span></td>
                            <td><span class="text-muted">No</span></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Tax Registration Certificate required?</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Bank Recommendation</td>
                            <td><span class="badge bg-light text-dark border">HSBC UK</span></td>
                            <td><span class="badge bg-light text-dark border">Bank of Ireland</span></td>
                            <td><span class="badge bg-light text-dark border">RBS Group</span></td>
                            <td><span class="badge bg-light text-dark border">SCB</span></td>
                            <td><span class="badge bg-light text-dark border">Barclays PLC</span></td>
                            <td><span class="badge bg-light text-dark border">Santander Bank</span></td>
                            <td><span class="badge bg-light text-dark border">HSBC UK</span></td>
                        </tr>
                        <tr>
                            <td>Does client need to travel?</td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                            <td><span class="badge bg-success-subtle text-success">No</span></td>
                        </tr>
                        <tr>
                            <td>Resident director required?</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td><span class="text-warning font-weight-bold">Yes</span></td>
                            <td><span class="text-warning font-weight-bold">Yes</span></td>
                        </tr>
                        <tr>
                            <td>UK Shareholder required?</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Min Directors / Representatives</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Min Shareholders / Partners</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>British resident company secretary?</td>
                            <td>No</td>
                            <td>No</td>
                            <td><span class="text-primary font-weight-bold">Yes</span></td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Corporate Shareholders allowed?</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>UK Corporate Tax Rate</td>
                            <td><strong>25%</strong></td>
                            <td><strong>0%</strong> (Exempt)</td>
                            <td><strong>25%</strong></td>
                            <td><strong>25%</strong></td>
                            <td><strong>0%</strong></td>
                            <td><strong>0%</strong></td>
                            <td><strong>25%</strong></td>
                        </tr>
                        <tr>
                            <td>Annual Financial Statements?</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Statutory Audit Required?</td>
                            <td>No</td>
                            <td>No</td>
                            <td><span class="text-danger font-weight-bold">Yes</span></td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Allowed to issue sales invoices?</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-xmark text-danger"></i> No</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                        </tr>
                        <tr>
                            <td>Allowed to sign contracts?</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
                            <td><i class="fa-solid fa-xmark text-danger"></i> No</td>
                            <td><i class="fa-solid fa-check text-success"></i> Yes</td>
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
                <div class="index-number num-02">02</div>
                <div>
                    <h2 class="h3 mb-0">Advantages and Disadvantages of Doing Business in UK</h2>
                    <p class="text-muted mb-0">Key insights foreign business owners must evaluate prior to setup.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Advantages Column -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="h-100 p-4 border rounded-4 bg-white shadow-sm">
                        <h3 class="h4 text-success mb-4 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-circle-check"></i> Key Advantages
                        </h3>

                        <div class="check-list-item">
                            <i class="fa-solid fa-check check-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Quick and simple registration process</h4>
                                <p class="text-muted small mb-0">Foreigners are allowed to register a new company online completely remotely, thereby drastically reducing travel expenses. Standard incorporation takes under 1 week.</p>
                            </div>
                        </div>

                        <div class="check-list-item">
                            <i class="fa-solid fa-check check-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Globally reputable jurisdiction</h4>
                                <p class="text-muted small mb-0">Recognized as one of the <strong>top 10 most competitive economies in the world</strong> by the World Economic Forum due to strong infrastructure, financial markets, and macro stability.</p>
                            </div>
                        </div>

                        <div class="check-list-item">
                            <i class="fa-solid fa-check check-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Attractive tax & dividend regime</h4>
                                <p class="text-muted small mb-0">Competitive corporate tax rates, no dividend withholding tax, and extensive double-taxation treaties globally.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disadvantages Column -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="h-100 p-4 border rounded-4 bg-white shadow-sm">
                        <h3 class="h4 text-danger mb-4 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-triangle-exclamation"></i> Challenges & Considerations
                        </h3>

                        <div class="cross-list-item">
                            <i class="fa-solid fa-xmark cross-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Compulsory Value Added Tax (VAT) Regime</h4>
                                <p class="text-muted small mb-0">VAT (standard rate 20%) is mandatory once revenue exceeds thresholds on eligible goods and services produced or imported.</p>
                            </div>
                        </div>

                        <div class="cross-list-item">
                            <i class="fa-solid fa-xmark cross-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Limited Scope for Cryptocurrency Businesses</h4>
                                <p class="text-muted small mb-0">UK traditional banks generally do not onboard corporate bank account applications directly for crypto-centric activities.</p>
                            </div>
                        </div>

                        <div class="cross-list-item">
                            <i class="fa-solid fa-xmark cross-icon"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Complex Banking Process for Non-Residents</h4>
                                <p class="text-muted small mb-0">While foreign directors are permitted, banks conduct thorough KYC/AML compliance checks which require tailored expert documentation.</p>
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
                <div class="index-number num-03">03</div>
                <div>
                    <h2 class="h3 mb-0">Typical UK Engagement Steps & Timeline</h2>
                    <p class="text-muted mb-0">Complete roadmap from initial filing to fully operational company with corporate banking.</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-4 border shadow-sm mb-5" data-aos="fade-up">
                <h3 class="h5 fw-bold mb-3">Key Sequential Engagement Steps:</h3>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 1</span>
                            <h4 class="h6 fw-bold mb-1">IN01 Form</h4>
                            <p class="small text-muted mb-0">Complete statutory incorporation form IN01 with company structure details.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 2</span>
                            <h4 class="h6 fw-bold mb-1">Companies House</h4>
                            <p class="small text-muted mb-0">File incorporation documents directly with Companies House UK.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 3</span>
                            <h4 class="h6 fw-bold mb-1">HMRC Registration</h4>
                            <p class="small text-muted mb-0">Register for VAT and PAYE (Payroll) with the UK tax office (HMRC).</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="p-3 border rounded bg-light h-100">
                            <span class="badge bg-warning text-dark mb-2">Step 4</span>
                            <h4 class="h6 fw-bold mb-1">Corporate Banking</h4>
                            <p class="small text-muted mb-0">Apply for a dedicated UK corporate bank account and internet banking access.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline Diagram Visual -->
            <h3 class="h5 fw-bold mb-3" data-aos="fade-up">Total Engagement Timeline (10 Weeks Total)</h3>
            <div class="timeline-steps" data-aos="fade-up">
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 1</div>
                    <h6>Engagement Planning</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 1 Week</div>
                </div>
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 2</div>
                    <h6>Company Incorporation</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 1 Week</div>
                </div>
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 3</div>
                    <h6>Bank Account Approval</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 4 Weeks</div>
                </div>
                <div class="timeline-step-card">
                    <div class="text-warning fw-bold small">STEP 4</div>
                    <h6>Internet Banking Setup</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 3 Weeks</div>
                </div>
                <div class="timeline-step-card" style="background: var(--gold-primary);">
                    <div class="text-white fw-bold small">STEP 5</div>
                    <h6>Engagement Completion</h6>
                    <div class="duration"><i class="fa-regular fa-clock me-1"></i> 1 Week</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 04: Additional Support Services (Banking, Tax, Visas) -->
    <section id="banking-visas" class="py-5">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-5" data-aos="fade-up">
                <div class="index-number num-04">04</div>
                <div>
                    <h2 class="h3 mb-0">Additional Support Services</h2>
                    <p class="text-muted mb-0">Banking relationships, UK tax & accounting rates, and foreign business visa pathways.</p>
                </div>
            </div>

            <!-- Banking Recommendations -->
            <div class="mb-5" data-aos="fade-up">
                <h3 class="h5 fw-bold mb-3"><i class="fa-solid fa-building-columns text-warning me-2"></i>Recommended Corporate Banking Partners</h3>
                <p class="text-muted small mb-4">UK is fully compliant with Money Laundering Regulations 2007 and FATCA. Recommended banking institutions include:</p>
                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-piggy-bank me-2 text-warning"></i> HSBC UK</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-landmark me-2 text-warning"></i> Citibank</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-vault me-2 text-warning"></i> Barclays</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-coins me-2 text-warning"></i> Lloyds Bank</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-globe me-2 text-warning"></i> ANZ</div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="bank-card"><i class="fa-solid fa-money-bill-transfer me-2 text-warning"></i> Bank of China</div>
                    </div>
                </div>
            </div>

            <!-- Tax & Accounting Highlights -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 bg-light text-center border">
                        <div class="display-5 fw-bold text-dark mb-1">25%</div>
                        <div class="fw-semibold">UK Corporate Tax Rate</div>
                        <p class="small text-muted mb-0 mt-2">Standard rate applicable to active corporate profits.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 bg-light text-center border">
                        <div class="display-5 fw-bold text-dark mb-1">20%</div>
                        <div class="fw-semibold">UK Standard VAT Rate</div>
                        <p class="small text-muted mb-0 mt-2">Value Added Tax on applicable domestic sales.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 bg-light text-center border">
                        <div class="display-5 fw-bold text-dark mb-1">0%</div>
                        <div class="fw-semibold">Withholding Tax on Dividends</div>
                        <p class="small text-muted mb-0 mt-2">Zero tax withheld when paying dividends abroad.</p>
                    </div>
                </div>
            </div>

            <!-- Visa Options -->
            <div data-aos="fade-up">
                <h3 class="h5 fw-bold mb-4"><i class="fa-solid fa-passport text-warning me-2"></i>UK Visas & Immigration Strategies</h3>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2">Innovator / Start-up Visa</h4>
                            <p class="small text-muted mb-0">Designed for non-EEA entrepreneurs seeking to establish an innovative business endorsed by an authorized UK body.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2">Representative of Overseas Business</h4>
                            <p class="small text-muted mb-0">For sole representatives of an overseas parent company intending to set up a UK branch or subsidiary.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2">Investor Visa (Tier 1)</h4>
                            <p class="small text-muted mb-0">For high-net-worth foreign investors willing to make substantial financial investments in the UK.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2">Intra-company Transfer Visa (Tier 2)</h4>
                            <p class="small text-muted mb-0">For existing foreign entity employees transferred to the UK branch (Categorized into long-term staff & graduate trainees).</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="p-4 border rounded-4 bg-white shadow-sm h-100">
                            <h4 class="h6 fw-bold text-dark mb-2">General Work Visa (Tier 2)</h4>
                            <p class="small text-muted mb-0">Suitable for skilled workers sponsored by a licensed UK corporate employer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 05: Frequently Asked Questions (FAQ / AEO Target) -->
    <section id="faq" class="py-5 bg-light">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-5" data-aos="fade-up">
                <div class="index-number num-05">05</div>
                <div>
                    <h2 class="h3 mb-0">Frequently Asked Questions</h2>
                    <p class="text-muted mb-0">Clear answers formatted for Search, Voice Assistants & AI Search Engines.</p>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Can a non-resident foreign citizen register a UK company remotely?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    <strong>Yes.</strong> UK corporate law permits 100% foreign ownership and directorship. You do not need to reside in the UK or visit in person to complete incorporation or register for taxes.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    What is the minimum share capital needed for a UK LLC?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    The minimum paid-up share capital required to incorporate a UK Private Limited Company (LLC) is just <strong>£1</strong>.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    How long does the entire setup process take including banking?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Company incorporation with Companies House takes 1 week. Setting up a dedicated corporate bank account and internet banking takes an additional 7 to 8 weeks, making the total timeline roughly <strong>10 weeks</strong>.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    What are the ongoing tax requirements in the UK?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Companies are subject to a 25% Corporate Tax rate on profits. Standard VAT rate is 20%. Annual financial statements and annual tax returns must be submitted to HMRC and Companies House.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 06: Registration & Call To Action -->
    <section id="register" class="py-5">
        <div class="container py-4">
            <div class="d-flex align-items-center gap-3 mb-5" data-aos="fade-up">
                <div class="index-number num-06">06</div>
                <div>
                    <h2 class="h3 mb-0">Start UK Company Registration</h2>
                    <p class="text-muted mb-0">Submit your registration details to receive an immediate tailored proposal.</p>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-lg-8">
                    <div class="form-card">
                        <form id="incorporationForm" onsubmit="handleFormSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label font-weight-600">Full Name *</label>
                                    <input type="text" class="form-control" required placeholder="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-weight-600">Email Address *</label>
                                    <input type="email" class="form-control" required placeholder="john@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-weight-600">Phone / WhatsApp</label>
                                    <input type="tel" class="form-control" placeholder="+1 234 567 890">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-weight-600">Preferred Entity Type</label>
                                    <select class="form-select">
                                        <option selected>Private Limited Company (LLC)</option>
                                        <option>UK Tax Exempt LLC</option>
                                        <option>Public Limited Company (PLC)</option>
                                        <option>Limited Liability Partnership (LLP)</option>
                                        <option>Branch / Overseas Entity</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label font-weight-600">Additional Requirements</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bankAcc" checked>
                                            <label class="form-check-label" for="bankAcc">Bank Account Opening</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="vatReg">
                                            <label class="form-check-label" for="vatReg">VAT / HMRC Registration</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="visaSupport">
                                            <label class="form-check-label" for="visaSupport">UK Visa Support</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label font-weight-600">Message / Special Questions</label>
                                    <textarea class="form-control" rows="3" placeholder="Tell us about your proposed business activity..."></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-gold btn-lg w-100"><i class="fa-solid fa-paper-plane me-2"></i> Submit Registration Request</button>
                                </div>
                            </div>
                        </form>
                        <div id="formSuccess" class="alert alert-success mt-3 d-none" role="alert">
                            Thank you! Your registration request has been received. Our UK corporate specialist will reach out within 24 hours.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Initialize AOS Animations
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out'
        });

        // Form Submit Handler
        function handleFormSubmit(event) {
            event.preventDefault();
            const successAlert = document.getElementById('formSuccess');
            successAlert.classList.remove('d-none');
            document.getElementById('incorporationForm').reset();
            setTimeout(() => {
                successAlert.classList.add('d-none');
            }, 6000);
        }
    </script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>