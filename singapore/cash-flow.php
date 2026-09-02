<?php 
require_once __DIR__ . '/../config.php';
include ROOT_PATH . '/singapore/elements/header.php';
?>

<style>
  

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Cash Flow Hero Banner Section */
    .cashflow-hero {
      background: linear-gradient(135deg, var(--gold-banner-bg) 0%, #7c5a1d 100%);
      color: var(--white);
      padding: 90px 0 70px 0;
      position: relative;
    }

    .cashflow-hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
    }

    .cashflow-hero p {
      color: var(--gold-light);
      max-width: 750px;
      margin: 0 auto;
    }

    .stat-badge {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 8px;
      padding: 15px 25px;
      backdrop-filter: blur(5px);
    }

    /* Section Component Blocks */
    .cashflow-block {
      padding: 80px 0;
      border-bottom: 1px solid var(--gold-border);
    }

    .cashflow-block:nth-child(even) {
      background-color: var(--gray-color);
    }

    .block-tag {
      color: var(--gold-primary);
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 0.85rem;
      display: block;
      margin-bottom: 8px;
    }

    .block-title {
      font-weight: 700;
      font-size: 2.2rem;
      margin-bottom: 20px;
      color: var(--text-dark);
    }

    .card-icon-wrapper {
      width: 65px;
      height: 65px;
      background-color: var(--gold-light);
      color: var(--gold-primary);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.6rem;
      margin-bottom: 20px;
    }

    .feature-box {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: 10px;
      padding: 25px;
      height: 100%;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
    }

    .cashflow-block:nth-child(even) .feature-box {
      background: #ffffff;
    }

    .feature-box:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
      border-color: var(--gold-primary);
    }

    .feature-box h5 {
      font-weight: 600;
      margin-bottom: 12px;
      color: var(--text-dark);
    }

    .feature-box p {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 0;
    }

    .check-list {
      list-style: none;
      padding-left: 0;
    }

    .check-list li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 14px;
      font-size: 0.95rem;
      color: #444;
    }

    .check-list li i {
      position: absolute;
      left: 0;
      top: 3px;
      color: var(--gold-primary);
      font-size: 1.1rem;
    }

    /* Custom Accordion */
    .accordion-button:not(.collapsed) {
      color: var(--gold-hover);
      background-color: var(--gold-light);
      box-shadow: none;
    }

    .accordion-button:focus {
      box-shadow: none;
      border-color: var(--gold-border);
    }

    /* Buttons */
    .btn-gold {
      background-color: var(--gold-primary);
      color: var(--white);
      font-weight: 600;
      padding: 12px 28px;
      border-radius: 6px;
      border: none;
      transition: var(--transition);
      text-decoration: none;
      display: inline-block;
    }

    .btn-gold:hover {
      background-color: var(--gold-hover);
      color: var(--white);
      box-shadow: var(--shadow-md);
    }

    .btn-outline-gold {
      border: 2px solid var(--gold-primary);
      color: var(--gold-primary);
      font-weight: 600;
      padding: 10px 24px;
      border-radius: 6px;
      background: transparent;
      transition: var(--transition);
      text-decoration: none;
      display: inline-block;
    }

    .btn-outline-gold:hover {
      background-color: var(--gold-primary);
      color: var(--white);
    }

    /* Call to Action Banner */
    .cta-banner {
      background-color: var(--gold-banner-bg);
      color: var(--white);
      padding: 60px 0;
      border-radius: 12px;
      margin: 70px 0;
    }
</style>

  <!-- Hero Banner: Cash Flow -->
  <header class="cashflow-hero">
    <div class="container text-center" data-aos="fade-down">
      <span class="badge bg-light text-dark mb-3 px-3 py-2 rounded-pill fw-medium">Capital & Treasury Optimization</span>
      <h1 class="mb-3">Singapore Cash Flow Solutions & Growth</h1>
      <p class="lead mb-4">
        Unlock non-dilutive government grants, optimize international payment gateways, preserve family asset wealth, and build resilient cross-border liquidity frameworks.
      </p>

      <div class="d-flex justify-content-center gap-3 flex-wrap mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">Up to 70%</div>
          <div class="small opacity-75">Grant Funding Support</div>
        </div>
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">0% Tax</div>
          <div class="small opacity-75">13O / 13U Fund Exemptions</div>
        </div>
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">150+ Currencies</div>
          <div class="small opacity-75">Merchant Acquiring Rails</div>
        </div>
      </div>
    </div>
  </header>

  <!-- Child Sections Wrapper -->
  <main>

    <!-- 1. Government Incentives Section -->
    <section id="government-incentives" class="cashflow-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Government Support</span>
            <h2 class="block-title">Government Incentives & Grants</h2>
            <p class="text-secondary mb-4">
              Singapore provides an unmatched ecosystem for local and foreign-owned enterprises. We assist business leaders in identifying, structuring, and applying for statutory funding programs under Enterprise Singapore and the Inland Revenue Authority of Singapore (IRAS).
            </p>

            <ul class="check-list">
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>Enterprise Development Grant (EDG):</strong> Covers up to 50% of qualifying costs for core capabilities, innovation, and internationalization projects.
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>Market Readiness Assistance (MRA):</strong> Up to 70% support capped at S$100,000 per new market entry for advisory, promotion, and setup.
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>Double Tax Deduction for Internationalization (DTDi):</strong> 200% tax deduction on eligible market expansion expenses without prior approval.
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>Start-Up Tax Exemption (SOTE):</strong> 75% tax exemption on the first S$100,000 of normal chargeable income for qualifying new companies.
              </li>
            </ul>

            <div class="mt-4">
              <a href="#contact" class="btn btn-gold">Check Grant Eligibility</a>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <div class="row g-3">
              <div class="col-6">
                <div class="feature-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="card-icon-wrapper"><i class="fa-solid fa-seedling"></i></div>
                  <h5>Innovation Grants</h5>
                  <p>Co-funding for automation, proprietary tech development, and operational upgrades.</p>
                </div>
              </div>
              <div class="col-6">
                <div class="feature-box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="card-icon-wrapper"><i class="fa-solid fa-globe"></i></div>
                  <h5>Export Expansion</h5>
                  <p>Subsidized participation in trade missions, international exhibitions, and setup.</p>
                </div>
              </div>
              <div class="col-6">
                <div class="feature-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="card-icon-wrapper"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                  <h5>Tax Relief</h5>
                  <p>Strategic tax structuring ensuring maximum utilization of incentive tiers.</p>
                </div>
              </div>
              <div class="col-6">
                <div class="feature-box" data-aos="zoom-in" data-aos-delay="400">
                  <div class="card-icon-wrapper"><i class="fa-solid fa-user-gear"></i></div>
                  <h5>Human Capital</h5>
                  <p>SkillsFuture and talent development subsidies for building Singapore-based teams.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. Family Asset Companies Section -->
    <section id="family-asset-companies" class="cashflow-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left">
            <span class="block-tag">Wealth Protection</span>
            <h2 class="block-title">Family Asset Companies & Single Family Offices</h2>
            <p class="text-secondary mb-4">
              Consolidate, protect, and grow multi-generational family wealth. Singapore’s progressive regulatory landscape provides Single Family Offices (SFO) and Multi-Family Offices (MFO) with tax neutrality under MAS Section 13O and 13U programs.
            </p>

            <div class="accordion" id="familyOfficeAccordion">
              <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <h2 class="accordion-header">
                  <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#acc1">
                    Section 13O (Singapore Resident Fund Scheme)
                  </button>
                </h2>
                <div id="acc1" class="accordion-collapse collapse show" data-bs-parent="#familyOfficeAccordion">
                  <div class="accordion-body text-secondary small">
                    Requires a minimum AUM of S$20 million at the point of application. Grants 100% tax exemption on income derived from designated investments managed by a Singapore family office.
                  </div>
                </div>
              </div>

              <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#acc2">
                    Section 13U (Enhanced Tier Fund Scheme)
                  </button>
                </h2>
                <div id="acc2" class="accordion-collapse collapse" data-bs-parent="#familyOfficeAccordion">
                  <div class="accordion-body text-secondary small">
                    Requires a minimum AUM of S$50 million. Designed for larger fund structures with flexibility regarding foreign entities, offering complete tax exemption on qualifying investment gains.
                  </div>
                </div>
              </div>

              <div class="accordion-item border-0 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#acc3">
                    Employment Pass & Residency Pathway
                  </button>
                </h2>
                <div id="acc3" class="accordion-collapse collapse" data-bs-parent="#familyOfficeAccordion">
                  <div class="accordion-body text-secondary small">
                    Family office structures qualify family members and professional managers for Singapore Employment Passes (EP), opening pathways to long-term residency.
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <a href="#contact" class="btn btn-gold">Structure Family Office</a>
            </div>
          </div>

          <div class="col-lg-6 order-lg-1" data-aos="fade-right">
            <div class="p-4 bg-white border border-warning rounded-4 shadow-sm">
              <div class="card-icon-wrapper"><i class="fa-solid fa-vault"></i></div>
              <h4 class="fw-bold mb-3">Family Office Benefits Matrix</h4>
              <table class="table table-borderless small mb-0">
                <tbody>
                  <tr class="border-bottom">
                    <td class="fw-semibold py-3">Tax Rate:</td>
                    <td class="text-end py-3 text-success fw-bold">0% on Qualifying Gains</td>
                  </tr>
                  <tr class="border-bottom">
                    <td class="fw-semibold py-3">Jurisdiction:</td>
                    <td class="text-end py-3">Singapore (AAA Rated Risk Profile)</td>
                  </tr>
                  <tr class="border-bottom">
                    <td class="fw-semibold py-3">Eligible Assets:</td>
                    <td class="text-end py-3">Equities, Real Estate, Crypto, Private Equity</td>
                  </tr>
                  <tr>
                    <td class="fw-semibold py-3">Work Passes:</td>
                    <td class="text-end py-3">Up to 2-3 EPs per Structure</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. Merchant Accounts Section -->
    <section id="merchant-accounts" class="cashflow-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Payment Gateway Infrastructure</span>
            <h2 class="block-title">Merchant Accounts & Payment Processing</h2>
            <p class="text-secondary mb-4">
              Maintain frictionless payment processing and eliminate settlement delays. We assist corporate groups and global merchants in securing tier-1 bank merchant accounts, high-volume acquiring rails, and multi-currency payment gateway solutions.
            </p>

            <div class="row g-3">
              <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="feature-box">
                  <h5>Multi-Currency Settlement</h5>
                  <p>Process transactions in over 150 currencies with automated FX conversion to lower risk.</p>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="feature-box">
                  <h5>High-Volume Acquiring</h5>
                  <p>Tailored merchant accounts for SaaS, e-commerce, and cross-border digital services.</p>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="feature-box">
                  <h5>PSA Compliance</h5>
                  <p>Full alignment with Singapore's Payment Services Act for merchant acquiring services.</p>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="feature-box">
                  <h5>3D Secure 2.0 Fraud Shield</h5>
                  <p>Integrated chargeback protection and fraud scoring engines to maximize success rates.</p>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <a href="#contact" class="btn btn-gold">Setup Merchant Account</a>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <div class="bg-white p-4 border rounded-4 shadow-sm text-center">
              <div class="mb-4">
                <span class="badge bg-success px-3 py-2 rounded-pill">Active Acquiring Network</span>
              </div>
              <div class="row g-4 justify-content-center align-items-center opacity-75">
                <div class="col-4"><i class="fa-brands fa-cc-visa fa-3x text-primary"></i></div>
                <div class="col-4"><i class="fa-brands fa-cc-mastercard fa-3x text-danger"></i></div>
                <div class="col-4"><i class="fa-brands fa-cc-apple-pay fa-3x text-dark"></i></div>
                <div class="col-4"><i class="fa-brands fa-cc-stripe fa-3x text-purple"></i></div>
                <div class="col-4"><i class="fa-brands fa-alipay fa-3x text-info"></i></div>
                <div class="col-4"><i class="fa-solid fa-building-columns fa-3x text-warning"></i></div>
              </div>
              <hr class="my-4">
              <p class="small text-muted mb-0">Direct API integration with Singapore local clearing networks (FAST, PayNow, GIRO).</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. E-Commerce Sales Section -->
    <section id="ecommerce-sales" class="cashflow-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left">
            <span class="block-tag">Cross-Border Revenue Engine</span>
            <h2 class="block-title">E-Commerce Sales & Treasury Solutions</h2>
            <p class="text-secondary mb-4">
              Scale cross-border digital operations through optimized treasury workflows. We help global e-commerce operators establish Singapore regional hubs to manage high-volume sales, optimize supply chain financing, and reduce FX friction.
            </p>

            <ul class="check-list">
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>Cross-Border Currency Hedging:</strong> Protect profit margins against foreign exchange volatility across SEA currencies.
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>Automated Marketplace Payouts:</strong> Direct settlement connections from Amazon, Shopify, Lazada, Shopee, and TikTok Shop.
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>Revenue-Based Working Capital:</strong> Non-dilutive financing solutions secured against historical store revenue performance.
              </li>
              <li>
                <i class="fa-solid fa-circle-check"></i>
                <strong>GST & Cross-Border Tax Structuring:</strong> Compliance with Singapore Overseas Vendor Registration (OVR) regime.
              </li>
            </ul>

            <div class="mt-4">
              <a href="#contact" class="btn btn-gold">Scale E-Commerce Cash Flow</a>
            </div>
          </div>

          <div class="col-lg-6 order-lg-1" data-aos="fade-right">
            <div class="row g-3">
              <div class="col-12">
                <div class="feature-box d-flex align-items-start gap-3">
                  <div class="card-icon-wrapper mb-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                  <div>
                    <h5>Supply Chain Cash Flow</h5>
                    <p>Optimize working capital cycles by aligning supplier payment terms with platform settlement schedules.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="feature-box d-flex align-items-start gap-3">
                  <div class="card-icon-wrapper mb-0"><i class="fa-solid fa-arrow-right-arrow-left"></i></div>
                  <div>
                    <h5>Multi-Entity Treasury</h5>
                    <p>Centralize cash reserves from multiple regional subsidiaries into a single Singapore hub account.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="feature-box d-flex align-items-start gap-3">
                  <div class="card-icon-wrapper mb-0"><i class="fa-solid fa-calculator"></i></div>
                  <div>
                    <h5>Automated Reconciliation</h5>
                    <p>Integrate cloud accounting (Xero, QuickBooks) with merchant bank feeds for real-time reporting.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. Market Penetration Strategies Section -->
    <section id="market-penetration" class="cashflow-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Regional Market Expansion</span>
            <h2 class="block-title">Market Penetration Strategies</h2>
            <p class="text-secondary mb-4">
              Use Singapore as your strategic springboard into the rapidly growing Asian economies. Leverage Singapore’s network of over 90 Double Taxation Avoidance Agreements (DTAAs) and 26 Free Trade Agreements (FTAs) to optimize cross-border dividend flows and operational margins.
            </p>

            <div class="row g-3 mb-4">
              <div class="col-6">
                <div class="border-start border-4 border-warning ps-3">
                  <h4 class="fw-bold mb-1">90+</h4>
                  <p class="small text-muted mb-0">DTAA Tax Treaties</p>
                </div>
              </div>
              <div class="col-6">
                <div class="border-start border-4 border-warning ps-3">
                  <h4 class="fw-bold mb-1">17%</h4>
                  <p class="small text-muted mb-0">Flat Corporate Tax Rate</p>
                </div>
              </div>
              <div class="col-6">
                <div class="border-start border-4 border-warning ps-3">
                  <h4 class="fw-bold mb-1">0%</h4>
                  <p class="small text-muted mb-0">Capital Gains Tax</p>
                </div>
              </div>
              <div class="col-6">
                <div class="border-start border-4 border-warning ps-3">
                  <h4 class="fw-bold mb-1">0%</h4>
                  <p class="small text-muted mb-0">Dividend Withholding Tax</p>
                </div>
              </div>
            </div>

            <a href="#contact" class="btn btn-gold">Build Regional Strategy</a>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <div class="bg-white p-4 border rounded-4 shadow-sm">
              <h4 class="fw-bold mb-3"><i class="fa-solid fa-map-location-dot text-warning me-2"></i> ASEAN Penetration Roadmap</h4>
              
              <div class="d-flex gap-3 mb-4">
                <div class="badge bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px; flex-shrink: 0;">1</div>
                <div>
                  <h6 class="fw-bold mb-1">Singapore HQ Structuring</h6>
                  <p class="small text-muted mb-0">Establish parent holding company with full IP, licensing, and treasury ownership.</p>
                </div>
              </div>

              <div class="d-flex gap-3 mb-4">
                <div class="badge bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px; flex-shrink: 0;">2</div>
                <div>
                  <h6 class="fw-bold mb-1">Cross-Border Tax Routing</h6>
                  <p class="small text-muted mb-0">Utilize bilateral trade treaties to minimize withholding taxes on inter-company transactions.</p>
                </div>
              </div>

              <div class="d-flex gap-3">
                <div class="badge bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px; flex-shrink: 0;">3</div>
                <div>
                  <h6 class="fw-bold mb-1">Regional Distribution & Scaling</h6>
                  <p class="small text-muted mb-0">Deploy capital into regional operating subsidiaries in Indonesia, Vietnam, Malaysia, and Thailand.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="container" data-aos="zoom-in">
      <div class="cta-banner text-center">
        <h3 class="fw-bold mb-3">Optimize Your Corporate Cash Flow Strategy Today</h3>
        <p class="mb-4 text-light">Schedule a private session with our Singapore financial structuring consultants.</p>
        <a href="#contact" class="btn btn-light text-dark fw-bold px-4 py-3">Book Confidential Call</a>
      </div>
    </section>

    <!-- Contact Consultation Section -->
    <section id="contact" class="py-5 bg-light">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="text-center mb-5">
              <h2 class="fw-bold">Request Cash Flow Consultation</h2>
              <p class="text-muted">Fill out the form below to speak with an advisory specialist within 24 business hours.</p>
            </div>

            <form class="row g-3 bg-white p-4 p-md-5 rounded-4 shadow-sm border">
              <div class="col-md-6">
                <label class="form-label fw-medium">Full Name</label>
                <input type="text" class="form-control" placeholder="John Doe" required />
              </div>
              <div class="col-md-6">
                <label class="form-label fw-medium">Corporate Email</label>
                <input type="email" class="form-control" placeholder="john@company.com" required />
              </div>
              <div class="col-md-6">
                <label class="form-label fw-medium">Phone / WhatsApp</label>
                <input type="tel" class="form-control" placeholder="+65 ____ ____" />
              </div>
              <div class="col-md-6">
                <label class="form-label fw-medium">Focus Area</label>
                <select class="form-select">
                  <option selected>Government Incentives / Grants</option>
                  <option>Family Asset Companies (13O/13U)</option>
                  <option>Merchant Payment Accounts</option>
                  <option>E-Commerce Sales Optimization</option>
                  <option>Market Penetration Strategies</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label fw-medium">Business Overview</label>
                <textarea class="form-control" rows="4" placeholder="Briefly describe your company capital structure or expansion targets..."></textarea>
              </div>
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-gold px-5 py-3">Submit Strategy Request</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php include ROOT_PATH . '/singapore/elements/footer.php'; ?>