<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

  <!-- Schema.org JSON-LD Structured Data for Voice Search, SGE & AI Answer Engines -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://www.healyconsultants.com/#organization",
        "name": "Healy Consultants Group",
        "url": "https://www.healyconsultants.com/",
        "logo": "https://www.healyconsultants.com/wp-content/uploads/2021/04/healy-consultants-logo.png",
        "foundingDate": "2003",
        "description": "Premier global corporate services firm providing luxury, turnkey company registration, private wealth, corporate banking, and visa solutions."
      },
      {
        "@type": "Service",
        "name": "Singapore Company Registration Services",
        "provider": {
          "@id": "https://www.healyconsultants.com/#organization"
        },
        "areaServed": {
          "@type": "Country",
          "name": "Singapore"
        },
        "serviceType": "Corporate Formation & ACRA Compliance"
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "Can foreign investors own 100% of a Singapore company in 2026?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, foreign individuals and legal entities can own 100% of shares in a Singapore Private Limited Company (Pte Ltd) across virtually all industries without any local shareholder requirements."
            }
          },
          {
            "@type": "Question",
            "name": "Is travel required to open a Singapore company and corporate bank account?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "No. ACRA company registration and bank account opening with select international and local tier-1 banks can be completed 100% remotely via secure video verification."
            }
          },
          {
            "@type": "Question",
            "name": "What are the core tax exemptions for new Singapore companies?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Qualifying new startups enjoy a 75% tax exemption on the first S$10,000 of normal chargeable income and 50% exemption on the next S$190,000 for their first 3 consecutive years of assessment."
            }
          }
        ]
      }
    ]
  }
  </script>

  <!-- Custom Theme Variable System & Luxury Glassmorphism Styling -->
  <style>
   
    ul.list-unstyled, ol.list-unstyled {
      padding-left: 0;
      list-style: none !important;
      margin-bottom: 0;
    }

    .small, small {
      font-size: 0.875rem;
    }

    .text-muted {
      color: var(--text-muted) !important;
    }

    .text-gold {
      color: var(--gold-primary) !important;
    }

    .bg-gold-light {
      background-color: var(--gold-light) !important;
    }

    .border-gold {
      border-color: var(--gold-border) !important;
    }

    /* Hero Banner Section */
    .hero-wrapper {
      background: var(--golden-gradient-background);
      padding: 4rem 0 5rem;
      position: relative;
      border-bottom: 1px solid var(--gold-border);
    }

    .hero-badge-gold {
      background: linear-gradient(135deg, var(--gold-primary), var(--dark-gold));
      color: #fff;
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      padding: 0.45rem 1.25rem;
      border-radius: 50rem;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      box-shadow: 0 4px 15px rgba(171, 129, 57, 0.25);
    }

    .hero-title {
      font-size: 2.8rem;
      font-weight: 800;
      color: var(--brand-dark);
      line-height: 1.2;
      margin-top: 1rem;
    }

    .hero-stats-card {
      background: var(--brand-dark);
      border: 1px solid var(--gold-border);
      border-radius: var(--card-radius);
      padding: 2.25rem;
      color: #fff;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
      position: relative;
      overflow: hidden;
    }

    .hero-stats-card::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200px;
      height: 200px;
      background: radial-gradient(circle, var(--overlay-gold) 0%, transparent 70%);
      pointer-events: none;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 800;
      color: var(--gold-primary);
      line-height: 1;
    }

    /* Interactive Floating Navigation Dock */
    .dock-card {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: var(--card-radius);
      padding: 1.5rem;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: var(--transition);
      cursor: pointer;
      box-shadow: var(--shadow-sm);
      position: relative;
    }
    .dock-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--shadow-hover);
      border-color: var(--gold-primary);
    }

    /* Next-Gen Segmented Switcher & Matrix */
    .segmented-switcher {
      background: #e9ecef;
      border-radius: 50rem;
      padding: 0.35rem;
      display: inline-flex;
      flex-wrap: wrap;
      gap: 0.25rem;
    }

    .switcher-btn {
      border: none;
      background: transparent;
      padding: 0.6rem 1.4rem;
      border-radius: 50rem;
      font-weight: 600;
      font-size: 0.85rem;
      color: var(--text-dark);
      transition: var(--transition);
    }

    .switcher-btn.active {
      background: var(--brand-dark);
      color: var(--gold-primary);
      box-shadow: var(--shadow-sm);
    }

    .entity-display-card {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: var(--card-radius);
      padding: 2.5rem;
      box-shadow: var(--shadow-card);
    }

    /* Modern Stepper / Timeline */
    .stepper-wrapper {
      position: relative;
      display: flex;
      justify-content: space-between;
      margin-bottom: 2rem;
    }
    
    .stepper-item {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
      z-index: 2;
    }

    .stepper-item::before {
      position: absolute;
      content: "";
      border-bottom: 3px solid #e1e1e1;
      width: 100%;
      top: 25px;
      left: -50%;
      z-index: 1;
    }

    .stepper-item:first-child::before {
      content: none;
    }

    .stepper-item.active .stepper-circle {
      background: var(--gold-primary);
      color: #fff;
      border-color: var(--dark-gold);
      box-shadow: 0 0 0 6px var(--overlay-gold);
    }

    .stepper-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #fff;
      border: 3px solid #e1e1e1;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      margin-bottom: 0.75rem;
      transition: var(--transition);
      z-index: 3;
    }

    /* AI Estimator Slider Box */
    .estimator-box {
      background: var(--brand-dark);
      color: #fff;
      border-radius: var(--card-radius);
      padding: 2.5rem;
      border: 1px solid var(--gold-border);
      box-shadow: var(--shadow-hover);
    }

    .form-range::-webkit-slider-thumb {
      background: var(--gold-primary);
    }

    /* Banking & Visa Cards */
    .bank-card {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: 16px;
      padding: 1.5rem;
      transition: var(--transition);
      text-align: center;
      height: 100%;
    }

    .bank-card:hover {
      border-color: var(--gold-primary);
      box-shadow: var(--shadow-md);
      transform: translateY(-4px);
    }

    /* Custom Buttons */
    .btn-gold-luxury {
      background: linear-gradient(135deg, var(--gold-primary) 0%, var(--dark-gold) 100%);
      color: #fff;
      font-weight: 600;
      padding: 0.85rem 1.8rem;
      border-radius: 12px;
      border: none;
      transition: var(--transition);
      box-shadow: 0 6px 20px rgba(171, 129, 57, 0.25);
    }
    .btn-gold-luxury:hover {
      background: linear-gradient(135deg, var(--dark-gold) 0%, #7d591d 100%);
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(171, 129, 57, 0.35);
    }

    .btn-outline-dark-gold {
      border: 2px solid var(--gold-primary);
      color: var(--gold-primary);
      font-weight: 600;
      padding: 0.75rem 1.5rem;
      border-radius: 12px;
      background: transparent;
      transition: var(--transition);
    }
    .btn-outline-dark-gold:hover {
      background: var(--gold-primary);
      color: #fff;
    }

    /* AI SGE Answer Box */
    .ai-answer-box {
      background: var(--gold-light);
      border-left: 4px solid var(--gold-primary);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 2rem;
    }

    @media (max-width: 768px) {
      .hero-title { font-size: 2.1rem; }
      .stepper-wrapper { flex-direction: column; gap: 1.5rem; }
      .stepper-item::before { content: none; }
    }
  </style>

  <!-- 2. Dynamic Hero Section with Split-Screen & Stats -->
  <section class="hero-wrapper">
    <div class="container">
      <div class="row align-items-center gy-5">
        
        <div class="col-lg-7" data-aos="fade-right">
          <div class="hero-badge-gold mb-3">
            <i class="fa-solid fa-crown me-1"></i> Premier Corporate Entry • Updated for ACRA 2026
          </div>
          <h1 class="hero-title">
            Incorporate Your <span class="text-gold">Singapore Company</span> With Complete Confidence
          </h1>
          <p class="text-muted fs-6 my-3">
            Healy Consultants Group delivers high-touch, turnkey Singapore business registration, 100% foreign equity structuring, tier-1 corporate banking, and Employment Pass approvals without travel requirements.
          </p>

          <div class="d-flex flex-wrap gap-3 mt-4">
            <button class="btn btn-gold-luxury" onclick="scrollToSection('estimator')">
              <i class="fa-solid fa-calculator me-2"></i> Launch AI Cost Estimator
            </button>
            <button class="btn btn-outline-dark-gold" onclick="scrollToSection('entities')">
              <i class="fa-solid fa-layer-group me-2"></i> Compare Legal Entities
            </button>
          </div>

          <!-- Quick Trust Highlights -->
          <div class="d-flex align-items-center gap-4 mt-4 pt-3 border-top border-gold">
            <div class="d-flex align-items-center gap-2">
              <i class="fa-solid fa-shield-check text-gold fs-5"></i>
              <span class="small fw-semibold">100% Guaranteed Bank Account</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="fa-solid fa-plane-slash text-gold fs-5"></i>
              <span class="small fw-semibold">0 Travel Required</span>
            </div>
          </div>
        </div>

        <!-- Hero Stats Box -->
        <div class="col-lg-5" data-aos="fade-left">
          <div class="hero-stats-card">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h5 class="fw-bold mb-0 text-white">Track Record Excellence</h5>
              <span class="badge bg-gold-light text-dark fw-bold">Since 2003</span>
            </div>

            <div class="row g-3">
              <div class="col-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(171,129,57,0.2);">
                  <div class="stat-number">23+</div>
                  <div class="small text-white-50 mt-1">Years Experience</div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(171,129,57,0.2);">
                  <div class="stat-number">10k+</div>
                  <div class="small text-white-50 mt-1">Entities Setup</div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(171,129,57,0.2);">
                  <div class="stat-number">99.4%</div>
                  <div class="small text-white-50 mt-1">Approval Success</div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(171,129,57,0.2);">
                  <div class="stat-number">1 - 2</div>
                  <div class="small text-white-50 mt-1">Days ACRA Setup</div>
                </div>
              </div>
            </div>

            <div class="mt-4 pt-3 border-top border-secondary text-center">
              <span class="small text-white-50"><i class="fa-solid fa-lock text-gold me-1"></i> ISO 27001 Certified Client Data Protection</span>
            </div>
          </div>
        </div>

      </div>

      <!-- 3. Interactive Dock / Navigation Hub -->
      <div class="mt-5 pt-3">
        <h6 class="text-uppercase tracking-wide text-muted fw-bold mb-3" style="font-size: 0.8rem; letter-spacing: 1px;">
          <i class="fa-solid fa-compass me-1 text-gold"></i> Fast Navigation Dock
        </h6>
        <div class="row g-3">
          
          <div class="col-md-4 col-sm-6" onclick="scrollToSection('entities')">
            <div class="dock-card">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold text-gold">01</span>
                <i class="fa-solid fa-sitemap fs-4 text-gold"></i>
              </div>
              <h6 class="fw-bold mb-1">Entity Explorer</h6>
              <p class="text-muted small mb-0">Pte Ltd, Subsidiary, Branch & LLP comparison matrix.</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6" onclick="scrollToSection('estimator')">
            <div class="dock-card">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold text-gold">02</span>
                <i class="fa-solid fa-calculator fs-4 text-gold"></i>
              </div>
              <h6 class="fw-bold mb-1">AI Cost Estimator</h6>
              <p class="text-muted small mb-0">Interactive setup fee calculation & breakdown.</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6" onclick="scrollToSection('stepper')">
            <div class="dock-card">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold text-gold">03</span>
                <i class="fa-solid fa-timeline fs-4 text-gold"></i>
              </div>
              <h6 class="fw-bold mb-1">Incorporation Roadmap</h6>
              <p class="text-muted small mb-0">Step-by-step timeline from name check to banking.</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6" onclick="scrollToSection('banking')">
            <div class="dock-card">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold text-gold">04</span>
                <i class="fa-solid fa-building-columns fs-4 text-gold"></i>
              </div>
              <h6 class="fw-bold mb-1">Banking & Visas</h6>
              <p class="text-muted small mb-0">Tier-1 bank setup & Employment Pass applications.</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6" onclick="scrollToSection('faq')">
            <div class="dock-card">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold text-gold">05</span>
                <i class="fa-solid fa-circle-question fs-4 text-gold"></i>
              </div>
              <h6 class="fw-bold mb-1">Knowledge Hub</h6>
              <p class="text-muted small mb-0">AEO/GEO direct answers for company formation.</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6" onclick="scrollToSection('contact')">
            <div class="dock-card" style="background: var(--gold-light);">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="fw-bold text-dark">06</span>
                <i class="fa-solid fa-paper-plane fs-4 text-gold"></i>
              </div>
              <h6 class="fw-bold mb-1">Request Engagement</h6>
              <p class="text-muted small mb-0">Direct consultation with Singapore specialists.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 01: Next-Gen Entity Explorer -->
  <section id="entities" class="py-5">
    <div class="container">
      <div class="text-center max-w-2xl mx-auto mb-4" data-aos="fade-up">
        <span class="badge bg-gold-light text-dark fw-bold px-3 py-2 rounded-pill border border-gold mb-2">Interactive Matrix</span>
        <h2 class="fw-bold">Singapore Entity Explorer 2026</h2>
        <p class="text-muted">Select an entity type to view specific tax benefits, director requirements, and setup timelines</p>
      </div>

      <!-- Segmented Switcher Controls -->
      <div class="text-center mb-4" data-aos="fade-up">
        <div class="segmented-switcher">
          <button class="switcher-btn active" onclick="switchEntity('pteltd', this)">Private Limited (Pte Ltd)</button>
          <button class="switcher-btn" onclick="switchEntity('branch', this)">Foreign Branch Office</button>
          <button class="switcher-btn" onclick="switchEntity('subsidiary', this)">Subsidiary Company</button>
          <button class="switcher-btn" onclick="switchEntity('llp', this)">Limited Liability Partnership (LLP)</button>
        </div>
      </div>

      <!-- Dynamic Display Box -->
      <div class="entity-display-card" id="entityDisplay" data-aos="fade-up">
        <div class="row align-items-center gy-4">
          <div class="col-lg-7">
            <div class="d-flex align-items-center gap-2 mb-2">
              <span class="badge bg-success-subtle text-success border border-success fw-bold px-3 py-1">Popular Choice</span>
              <span class="badge bg-gold-light text-dark border border-gold fw-bold">100% Foreign Shareholding</span>
            </div>
            <h3 class="fw-bold text-dark mb-3" id="entityTitle">Private Limited Company (Pte Ltd)</h3>
            <p class="text-muted" id="entityDesc">
              The standard and most versatile corporate vehicle in Singapore. Offers limited personal liability, tax exemptions for startups, and seamless foreign equity ownership.
            </p>

            <div class="row g-3 my-3">
              <div class="col-sm-6">
                <div class="p-3 bg-light rounded-3">
                  <div class="small text-muted">Paid-Up Capital</div>
                  <div class="fw-bold text-dark fs-5" id="entityCapital">S$1 Minimum</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 bg-light rounded-3">
                  <div class="small text-muted">ACRA Setup Duration</div>
                  <div class="fw-bold text-dark fs-5" id="entityTime">1 - 2 Business Days</div>
                </div>
              </div>
            </div>

            <ul class="list-unstyled space-y-2 mb-4" id="entityFeatures">
              <li class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-circle-check text-gold"></i> 1 Resident Director required (Nominee available)</li>
              <li class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-circle-check text-gold"></i> Effective tax rate ~8.5% up to S$200k income</li>
              <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-gold"></i> 0% Dividend and Capital Gains taxation</li>
            </ul>
          </div>

          <div class="col-lg-5 text-center">
            <div class="p-4 rounded-4" style="background: var(--bg-light); border: 1px dashed var(--gold-primary);">
              <i class="fa-solid fa-building-circle-check text-gold" style="font-size: 3.5rem;"></i>
              <h5 class="fw-bold mt-3 mb-1">Recommended Entity</h5>
              <p class="small text-muted mb-3">Ideal for startups, SMEs, and foreign expansion holding companies.</p>
              <button class="btn btn-gold-luxury w-100" onclick="scrollToSection('estimator')">
                Select This Entity
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 02: AI-Powered Dynamic Cost Estimator -->
  <section id="estimator" class="py-5 bg-white">
    <div class="container">
      <div class="text-center max-w-2xl mx-auto mb-4" data-aos="fade-up">
        <span class="badge bg-gold-light text-dark fw-bold px-3 py-2 rounded-pill border border-gold mb-2">Transparent Pricing</span>
        <h2 class="fw-bold">AI Dynamic Cost Estimator</h2>
        <p class="text-muted">Customize your required incorporation modules for an instant, transparent quote estimate</p>
      </div>

      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <div class="estimator-box">
            <div class="row gy-4">
              
              <div class="col-md-7">
                <h5 class="fw-bold text-gold mb-3"><i class="fa-solid fa-sliders me-2"></i> Configure Setup Options</h5>
                
                <div class="mb-4">
                  <label class="form-label small fw-semibold text-white-50">ACRA Registration & Legal Constitution</label>
                  <div class="p-3 rounded-3 bg-dark d-flex justify-content-between align-items-center border border-secondary">
                    <span>Base Government & Legal Filing</span>
                    <span class="fw-bold text-gold">S$2,850</span>
                  </div>
                </div>

                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="chkBank" checked onchange="updateCalculatedCost()">
                  <label class="form-check-label text-white d-flex justify-content-between w-100" for="chkBank">
                    <span>Tier-1 Bank Account Setup</span>
                    <span class="fw-bold text-gold">+S$3,500</span>
                  </label>
                </div>

                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="chkNominee" onchange="updateCalculatedCost()">
                  <label class="form-check-label text-white d-flex justify-content-between w-100" for="chkNominee">
                    <span>Nominee Resident Director (Annual)</span>
                    <span class="fw-bold text-gold">+S$4,200</span>
                  </label>
                </div>

                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="chkVisa" onchange="updateCalculatedCost()">
                  <label class="form-check-label text-white d-flex justify-content-between w-100" for="chkVisa">
                    <span>Employment Pass (EP) Application</span>
                    <span class="fw-bold text-gold">+S$3,800</span>
                  </label>
                </div>
              </div>

              <div class="col-md-5 d-flex flex-column justify-content-between border-start border-secondary ps-md-4">
                <div>
                  <span class="text-white-50 small">Estimated Total Fee</span>
                  <div class="display-5 fw-bold text-gold my-2" id="estPriceDisplay">S$6,350</div>
                  <p class="small text-white-50 mb-0">Includes all ACRA filing fees, corporate secretarial registration for year 1, and dedicated account officer.</p>
                </div>

                <div class="mt-4">
                  <button class="btn btn-gold-luxury w-100 mb-2" onclick="scrollToSection('contact')">
                    Lock In This Quote
                  </button>
                  <div class="text-center small text-white-50">
                    <i class="fa-solid fa-credit-card me-1 text-gold"></i> Flexible Instalment Payment Terms
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 03: Multi-Step Incorporation Roadmap -->
  <section id="stepper" class="py-5">
    <div class="container">
      <div class="text-center max-w-2xl mx-auto mb-5" data-aos="fade-up">
        <span class="badge bg-gold-light text-dark fw-bold px-3 py-2 rounded-pill border border-gold mb-2">Turnkey Execution</span>
        <h2 class="fw-bold">5-Step Incorporation Stepper</h2>
        <p class="text-muted">A streamlined, stress-free path to operating your Singapore enterprise</p>
      </div>

      <div class="stepper-wrapper" data-aos="fade-up">
        <div class="stepper-item active">
          <div class="stepper-circle">1</div>
          <h6 class="fw-bold mb-1">Name Reservation</h6>
          <span class="small text-muted text-center">ACRA BizFile Approval</span>
        </div>
        <div class="stepper-item active">
          <div class="stepper-circle">2</div>
          <h6 class="fw-bold mb-1">KYC Verification</h6>
          <span class="small text-muted text-center">Passport & Address Proof</span>
        </div>
        <div class="stepper-item active">
          <div class="stepper-circle">3</div>
          <h6 class="fw-bold mb-1">Official Setup</h6>
          <span class="small text-muted text-center">UEN Issuance</span>
        </div>
        <div class="stepper-item">
          <div class="stepper-circle">4</div>
          <h6 class="fw-bold mb-1">Bank Opening</h6>
          <span class="small text-muted text-center">Remote Account Activation</span>
        </div>
        <div class="stepper-item">
          <div class="stepper-circle">5</div>
          <h6 class="fw-bold mb-1">Tax & Visas</h6>
          <span class="small text-muted text-center">GST & EP Formalities</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 04: Interactive Banking & Visa Hub -->
  <section id="banking" class="py-5 bg-white">
    <div class="container">
      <div class="text-center max-w-2xl mx-auto mb-5" data-aos="fade-up">
        <span class="badge bg-gold-light text-dark fw-bold px-3 py-2 rounded-pill border border-gold mb-2">Banking & Immigration</span>
        <h2 class="fw-bold">Corporate Banking & Work Pass Hub</h2>
        <p class="text-muted">We maintain direct corporate relations with top global financial institutions and MOM immigration officers</p>
      </div>

      <div class="row g-4" data-aos="fade-up">
        <!-- Bank cards -->
        <div class="col-lg-2 col-md-4 col-6">
          <div class="bank-card">
            <i class="fa-solid fa-building-columns text-gold fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">DBS Bank</h6>
            <span class="badge bg-light text-dark border small">Remote Opening</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="bank-card">
            <i class="fa-solid fa-building-columns text-gold fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">OCBC</h6>
            <span class="badge bg-light text-dark border small">Multi-Currency</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="bank-card">
            <i class="fa-solid fa-building-columns text-gold fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">UOB</h6>
            <span class="badge bg-light text-dark border small">Fast Approval</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="bank-card">
            <i class="fa-solid fa-building-columns text-gold fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">HSBC SG</h6>
            <span class="badge bg-light text-dark border small">Global Transfers</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="bank-card">
            <i class="fa-solid fa-building-columns text-gold fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">StanChart</h6>
            <span class="badge bg-light text-dark border small">Trade Finance</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="bank-card">
            <i class="fa-solid fa-building-columns text-gold fs-2 mb-2"></i>
            <h6 class="fw-bold mb-1">Citibank</h6>
            <span class="badge bg-light text-dark border small">Institutional</span>
          </div>
        </div>
      </div>

      <!-- Visa Tabs -->
      <div class="mt-5 p-4 rounded-4" style="background: var(--bg-light); border: 1px solid var(--gold-border);" data-aos="fade-up">
        <div class="row align-items-center gy-3">
          <div class="col-md-8">
            <h5 class="fw-bold text-dark mb-1"><i class="fa-solid fa-passport text-gold me-2"></i> Employment Pass & COMPASS Evaluation</h5>
            <p class="text-muted small mb-0">We assist international business leaders with qualifying under Singapore's points-based COMPASS immigration framework for executive visas.</p>
          </div>
          <div class="col-md-4 text-md-end">
            <button class="btn btn-outline-dark-gold btn-sm" onclick="scrollToSection('contact')">
              Evaluate My EP Eligibility
            </button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 05: Knowledge Hub & FAQ (AEO / GEO Snippet Optimized) -->
  <section id="faq" class="py-5">
    <div class="container">
      <div class="text-center max-w-2xl mx-auto mb-4" data-aos="fade-up">
        <span class="badge bg-gold-light text-dark fw-bold px-3 py-2 rounded-pill border border-gold mb-2">Knowledge Center</span>
        <h2 class="fw-bold">Frequently Asked Questions</h2>
        <p class="text-muted">AEO & GEO optimized direct answers for Singapore corporate inquiries</p>
      </div>

      <!-- AI SGE Quick Answer Banner -->
      <div class="ai-answer-box" data-aos="fade-up">
        <div class="d-flex gap-2 align-items-center mb-1">
          <i class="fa-solid fa-wand-magic-sparkles text-gold"></i>
          <strong class="text-dark">AI Quick Summary (Singapore Setup 2026):</strong>
        </div>
        <p class="small text-muted mb-0">
          In 2026, Singapore remains Asia's top choice for 100% foreign-owned company incorporation. Setup takes 1-2 business days via ACRA. A local resident director is required, which can be fulfilled via Healy Consultants' nominee services. Capital gains and dividends carry 0% tax.
        </p>
      </div>

      <div class="accordion accordion-custom" id="faqAccordion" data-aos="fade-up">
        
        <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
          <h2 class="accordion-header" id="faqHead1">
            <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol1">
              Can foreign investors own 100% of a Singapore company in 2026?
            </button>
          </h2>
          <div id="faqCol1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
            <div class="accordion-body text-muted small">
              Yes. Singapore permits 100% foreign equity ownership across almost all commercial sectors. Foreign shareholders can be either individuals or corporate holding entities.
            </div>
          </div>
        </div>

        <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
          <h2 class="accordion-header" id="faqHead2">
            <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol2">
              Is a resident director mandatory for ACRA registration?
            </button>
          </h2>
          <div id="faqCol2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body text-muted small">
              Yes. Under ACRA rules, every Singapore company must have at least one director who is ordinarily resident in Singapore (Singapore Citizen, Permanent Resident, or eligible Pass holder). Healy Consultants Group provides qualified nominee resident director services.
            </div>
          </div>
        </div>

        <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
          <h2 class="accordion-header" id="faqHead3">
            <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol3">
              What are the tax advantages for a new Singapore company?
            </button>
          </h2>
          <div id="faqCol3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body text-muted small">
              Standard flat corporate tax is 17%. New qualifying companies enjoy partial tax exemptions reducing effective taxation to ~8.5% on profits up to S$200,000. Furthermore, there is 0% capital gains tax and 0% withholding tax on dividends paid to foreign shareholders.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 06: Contact & Engagement Request -->
  <section id="contact" class="py-5 bg-white">
    <div class="container">
      <div class="row align-items-center gy-4">
        
        <div class="col-lg-6" data-aos="fade-right">
          <span class="badge bg-gold-light text-dark fw-bold px-3 py-2 rounded-pill border border-gold mb-2">Direct Engagement</span>
          <h2 class="fw-bold">Start Your Singapore Corporate Setup Today</h2>
          <p class="text-muted">Speak directly with our Singapore corporate specialists to receive an itemized proposal tailored to your business structure.</p>

          <div class="p-4 rounded-4 mb-4" style="background: var(--bg-light); border-left: 4px solid var(--gold-primary);">
            <div class="fw-bold text-dark"><i class="fa-solid fa-headset text-gold me-2"></i> Client Consultation Hotline</div>
            <div class="text-muted small mt-1">+65 6735 0120 | contact@healyconsultants.com</div>
          </div>

          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-circle-check text-success"></i>
            <span class="small text-muted">Guaranteed Corporate Bank Account Opening</span>
          </div>
          <div class="d-flex align-items-center gap-3 mt-2">
            <i class="fa-solid fa-circle-check text-success"></i>
            <span class="small text-muted">Pay by Instalments Options Available</span>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
          <div class="card border-0 shadow-lg p-4" style="border-radius: var(--card-radius); border-top: 4px solid var(--gold-primary);">
            <h4 class="fw-bold mb-3">Enquiry Form</h4>
            <form onsubmit="event.preventDefault(); alert('Thank you for your enquiry. A Singapore specialist will contact you within 24 hours.');">
              <div class="mb-3">
                <label class="form-label small fw-bold">Full Name</label>
                <input type="text" class="form-control" placeholder="John Doe" required />
              </div>
              <div class="row g-2 mb-3">
                <div class="col-md-6">
                  <label class="form-label small fw-bold">Email Address</label>
                  <input type="email" class="form-control" placeholder="john@company.com" required />
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-bold">Phone Number</label>
                  <input type="tel" class="form-control" placeholder="+1 234 567 890" required />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Desired Primary Service</label>
                <select class="form-select">
                  <option selected>Full Turnkey Incorporation + Banking</option>
                  <option>ACRA Registration Only</option>
                  <option>Nominee Director Service</option>
                  <option>Employment Pass (EP) Visa Application</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Project Details</label>
                <textarea class="form-control" rows="3" placeholder="Briefly describe your proposed Singapore activities..."></textarea>
              </div>
              <button type="submit" class="btn btn-gold-luxury w-100">Submit Consultation Request</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script>
    // Initialize AOS
    AOS.init({ duration: 800, once: true });

    // Smooth Scroll Helper
    function scrollToSection(id) {
      document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
    }

    // Entity Switcher Logic
    const entityData = {
      pteltd: {
        title: "Private Limited Company (Pte Ltd)",
        desc: "The standard and most versatile corporate vehicle in Singapore. Offers limited personal liability, tax exemptions for startups, and seamless foreign equity ownership.",
        capital: "S$1 Minimum",
        time: "1 - 2 Business Days",
        features: [
          "1 Resident Director required (Nominee available)",
          "Effective tax rate ~8.5% up to S$200k income",
          "0% Dividend and Capital Gains taxation"
        ]
      },
      branch: {
        title: "Foreign Branch Office",
        desc: "An extension of an overseas parent company. Does not constitute a separate legal entity, leaving parent company liable for branch obligations.",
        capital: "N/A (Parent Capital)",
        time: "2 - 3 Weeks",
        features: [
          "Requires 2 local resident agents in Singapore",
          "Subject to 17% flat corporate tax rate",
          "Must file parent company audited financial accounts"
        ]
      },
      subsidiary: {
        title: "Subsidiary Company",
        desc: "A Private Limited entity 100% owned by a foreign parent corporation. Shields parent company from local liabilities.",
        capital: "S$1 Minimum",
        time: "1 - 2 Weeks",
        features: [
          "Treats parent company as sole corporate shareholder",
          "Qualifies for local tax incentives if eligible",
          "Requires 1 local resident director"
        ]
      },
      llp: {
        title: "Limited Liability Partnership (LLP)",
        desc: "Combines partnership flexibility with limited liability protection. Ideal for professional service firms.",
        capital: "S$0 Minimum",
        time: "1 - 2 Days",
        features: [
          "Tax transparency (partners taxed individually)",
          "Requires at least 2 partners & 1 local manager",
          "Reduced annual compliance filing obligations"
        ]
      }
    };

    function switchEntity(key, btn) {
      document.querySelectorAll('.switcher-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const data = entityData[key];
      document.getElementById('entityTitle').innerText = data.title;
      document.getElementById('entityDesc').innerText = data.desc;
      document.getElementById('entityCapital').innerText = data.capital;
      document.getElementById('entityTime').innerText = data.time;

      const featList = document.getElementById('entityFeatures');
      featList.innerHTML = '';
      data.features.forEach(f => {
        featList.innerHTML += `<li class="d-flex align-items-center gap-2 mb-2"><i class="fa-solid fa-circle-check text-gold"></i> ${f}</li>`;
      });
    }

    // AI Estimator Calculation Logic
    function updateCalculatedCost() {
      let base = 2850;
      if (document.getElementById('chkBank').checked) base += 3500;
      if (document.getElementById('chkNominee').checked) base += 4200;
      if (document.getElementById('chkVisa').checked) base += 3800;

      document.getElementById('estPriceDisplay').innerText = 'S$' + base.toLocaleString();
    }
  </script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>