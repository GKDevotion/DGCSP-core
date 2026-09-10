<?php 
require_once __DIR__ . '/../config.php';
include ROOT_PATH . '/singapore/elements/header.php';
?>

<style>

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Hero Banner Section */
    .setup-hero {
      background: linear-gradient(135deg, var(--gold-banner-bg) 0%, #7c5a1d 100%);
      color: var(--white);
      padding: 90px 0 70px 0;
      position: relative;
    }

    .setup-hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
    }

    .setup-hero p {
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

    /* Section Blocks */
    .setup-block {
      padding: 80px 0;
      border-bottom: 1px solid var(--gold-border);
    }

    .setup-block:nth-child(even) {
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

    .setup-block:nth-child(even) .feature-box {
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

    /* CTA Banner */
    .cta-banner {
      background-color: var(--gold-banner-bg);
      color: var(--white);
      padding: 60px 0;
      border-radius: 12px;
      margin: 70px 0;
    }
</style>

<!-- Hero Section -->
  <header class="setup-hero">
    <div class="container text-center" data-aos="fade-down">
      <span class="badge bg-light text-dark mb-3 px-3 py-2 rounded-pill fw-medium">End-to-End Corporate Solutions</span>
      <h1 class="mb-3">Singapore Business Setup Advisory</h1>
      <p class="lead mb-4">
        From work visas and office leasing to HR compliance, trademarking, and corporate structuring — everything required to establish and scale your business in Singapore.
      </p>

      <div class="d-flex justify-content-center gap-3 flex-wrap mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">100%</div>
          <div class="small opacity-75">ACRA & MOM Compliance</div>
        </div>
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">24 Hours</div>
          <div class="small opacity-75">Virtual Office Turnaround</div>
        </div>
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">500+</div>
          <div class="small opacity-75">Visas & Licenses Processed</div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- 1. Employment & Residence Visa -->
    <section id="employment-visa" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Immigration Advisory</span>
            <h2 class="block-title">Employeement & Residence Visa Solutions</h2>
            <p class="text-secondary mb-4">
              Secure work passes and residency for foreign founders, executives, and technical specialists under Singapore’s Ministry of Manpower (MOM) COMPASS framework.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Employment Pass (EP):</strong> COMPASS points calculation, candidate profiling, and MOM filing.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>EntrePass:</strong> Specialized visa for venture-backed entrepreneurs and innovative founders.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>ONE Pass & Tech.Pass:</strong> Executive passes for top global leaders and niche specialists.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Dependant's Pass (DP) & LTVP:</strong> Relocation support for family members and dependents.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Apply for Work Pass</a>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="row g-3">
              <div class="col-6">
                <div class="feature-box">
                  <div class="card-icon-wrapper"><i class="fa-solid fa-passport"></i></div>
                  <h5>COMPASS Eligibility</h5>
                  <p>Pre-evaluation of qualification points before formal MOM submission.</p>
                </div>
              </div>
              <div class="col-6">
                <div class="feature-box">
                  <div class="card-icon-wrapper"><i class="fa-solid fa-user-check"></i></div>
                  <h5>PR Advisory</h5>
                  <p>Strategic counseling for long-term Permanent Residency applications.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. Human Resource Service -->
    <section id="hr-services" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left">
            <span class="block-tag">Workforce Management</span>
            <h2 class="block-title">Human Resource Services</h2>
            <p class="text-secondary mb-4">
              Comprehensive HR management, payroll administration, Central Provident Fund (CPF) compliance, and employment contract drafting aligned with the Singapore Employment Act.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Payroll & CPF Processing:</strong> Automated monthly payroll and mandatory statutory deductions.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Employment Contracts:</strong> Customized contracts adhering to MOM statutory requirements.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>IR8A Tax Filing:</strong> Annual employee tax reporting directly submitted to IRAS.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Outsource HR Operations</a>
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-right">
            <div class="feature-box p-4 border border-warning">
              <div class="card-icon-wrapper"><i class="fa-solid fa-users-gear"></i></div>
              <h4 class="fw-bold mb-3">Complete HR Administration</h4>
              <p class="text-secondary small">Outsource your HR tasks to certified Singapore payroll specialists to avoid penalty risks and simplify headcount growth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. Employee Considerations -->
    <section id="employee-considerations" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Labour Compliance</span>
            <h2 class="block-title">Employee Considerations & Policies</h2>
            <p class="text-secondary mb-4">
              Ensure fair employment practices, work-life balance policies, and statutory medical insurance coverage as mandated by the Tripartite Alliance for Fair & Progressive Employment Practices (TAFEP).
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Work Injury Compensation (WICA):</strong> Mandatory insurance policies for operational staff.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>TAFEP Guidelines:</strong> Non-discriminatory hiring framework implementation.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Staff Handbooks:</strong> Company handbook creation covering leaves, benefits, and conduct.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Review HR Policies</a>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="row g-3">
              <div class="col-12">
                <div class="feature-box d-flex align-items-start gap-3">
                  <div class="card-icon-wrapper mb-0"><i class="fa-solid fa-notes-medical"></i></div>
                  <div>
                    <h5>Group Health Insurance</h5>
                    <p>Brokerage setup for comprehensive staff medical and hospital coverage.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="feature-box d-flex align-items-start gap-3">
                  <div class="card-icon-wrapper mb-0"><i class="fa-solid fa-scale-balanced"></i></div>
                  <div>
                    <h5>Dispute Resolution</h5>
                    <p>Legal assistance in managing employee grievances and retrenchment protocols.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. Virtual Office Services -->
    <section id="virtual-office" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left">
            <span class="block-tag">CBD Registered Address</span>
            <h2 class="block-title">Virtual Office Services</h2>
            <p class="text-secondary mb-4">
              Fulfill ACRA's statutory registered address requirements with prestigious Central Business District (CBD) addresses in Raffles Place and Marina Bay.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Mail Handling & Scanning:</strong> Daily mail notification with digital scan forwarding.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Dedicated Line & Reception:</strong> Local business phone number with call forwarding.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>ACRA Approved Address:</strong> Fully compliant address for official government correspondence.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Get Virtual Address</a>
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-right">
            <div class="feature-box text-center p-4">
              <div class="card-icon-wrapper mx-auto"><i class="fa-solid fa-envelope-open-text"></i></div>
              <h4 class="fw-bold">Prime CBD Business Address</h4>
              <p class="text-muted small">Raffles Place / Marina Bay Financial District</p>
              <div class="badge bg-warning text-dark px-3 py-2 rounded-pill mt-2">Instant ACRA Approval</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. Find Office Premises -->
    <section id="office-premises" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Commercial Real Estate</span>
            <h2 class="block-title">Find Office Premises</h2>
            <p class="text-secondary mb-4">
              Commercial lease negotiation, co-working space sourcing, and physical office search services tailored to your headcount and budget.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Grade-A Commercial Leasing:</strong> CBD office spaces, tech parks, and industrial units.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Co-Working Membership:</strong> Flexible enterprise desks across top Singapore hubs.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Lease Negotiation:</strong> Legal review of tenancy agreements and rent-free periods.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Find Office Space</a>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="feature-box p-4">
              <div class="card-icon-wrapper"><i class="fa-solid fa-building-user"></i></div>
              <h5>Commercial Space Advisory</h5>
              <p>We work directly with major Singapore landlords to secure optimal commercial leasing terms for incoming foreign entities.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. Trademark Registration -->
    <section id="trademark-registration" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left">
            <span class="block-tag">IP Rights Protection</span>
            <h2 class="block-title">Trademark Registration (IPOS)</h2>
            <p class="text-secondary mb-4">
              Protect your brand assets, logo, and intellectual property in Singapore and internationally via the Intellectual Property Office of Singapore (IPOS) and Madrid Protocol.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>IPOS Filing:</strong> Pre-application search, classification, and direct registration.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Madrid Protocol:</strong> Extend Singapore trademark protection to 120+ countries.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>IP Portfolio Management:</strong> Trademark monitoring and renewal maintenance.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Register Trademark</a>
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-right">
            <div class="feature-box p-4 border border-warning">
              <div class="card-icon-wrapper"><i class="fa-solid fa-copyright"></i></div>
              <h4 class="fw-bold mb-3">Protect Brand Assets</h4>
              <p class="text-secondary small">Comprehensive IP legal checks to guarantee your logo, name, and trade secrets remain protected across ASEAN.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 7. Entrepreneur Startup Guides -->
    <section id="startup-guides" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Founder Resources</span>
            <h2 class="block-title">Entrepreneur Startup Guides</h2>
            <p class="text-secondary mb-4">
              Step-by-step guidance on licensing, fundraising, tax structure, and venture ecosystem connections for first-time founders in Singapore.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Incubator & Accelerator Access:</strong> Connections to EnterpriseSG partner hubs.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Cap Table Advisory:</strong> Structuring equity for seed and Series A fundraising.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Compliance Checklists:</strong> Statutory deadlines calendar for ACRA and IRAS.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Download Founder Guide</a>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="feature-box p-4">
              <div class="card-icon-wrapper"><i class="fa-solid fa-rocket"></i></div>
              <h5>Venture Launchpad</h5>
              <p>Everything foreign entrepreneurs need to know about setting up, launching, and scaling an innovative business in Singapore.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 8. Business Support Services -->
    <section id="business-support" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left">
            <span class="block-tag">Concierge Operations</span>
            <h2 class="block-title">Business Support Services</h2>
            <p class="text-secondary mb-4">
              On-demand corporate secretarial, bookkeeping, mail scanning, document notarization, and administrative assistance.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Corporate Secretarial:</strong> Preparation of AGM minutes, board resolutions, and ACRA annual returns.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Notary & Legalization:</strong> Apostille certification and embassy attestation services.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Bank Account Opening Support:</strong> Assistance with top-tier Singapore bank onboarding.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Get Support Services</a>
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-right">
            <div class="feature-box p-4">
              <div class="card-icon-wrapper"><i class="fa-solid fa-headset"></i></div>
              <h5>Dedicated Corporate Secretary</h5>
              <p>Assigned ACRA Qualified Company Secretary to ensure your entity remains 100% compliant with statutory deadlines.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 9. LLC Transfer Solutions -->
    <section id="llc-transfer" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Inward Redomiciliation</span>
            <h2 class="block-title">LLC Transfer & Transfer Solutions</h2>
            <p class="text-secondary mb-4">
              Transfer your existing foreign company’s registration to Singapore via legal Inward Redomiciliation under the Companies Act without dissolving the original corporate entity.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Continuity of Legal History:</strong> Maintain existing contracts, credit history, and operational track record.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Cross-Border Transfer:</strong> Migration of offshore entities (BVI, Cayman, HK) to Singapore.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Asset Retention:</strong> Seamless transfer of property rights and brand ownership.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Redomicile Company</a>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="feature-box p-4 border border-warning">
              <div class="card-icon-wrapper"><i class="fa-solid fa-arrows-spin"></i></div>
              <h4 class="fw-bold mb-3">Seamless Entity Transfer</h4>
              <p class="text-secondary small">Relocate your parent entity to Singapore while keeping operational history, contracts, and banking relations intact.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 10. Ship Registration -->
    <section id="ship-registration" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left">
            <span class="block-tag">Maritime Registry</span>
            <h2 class="block-title">Singapore Ship Registration (SRS)</h2>
            <p class="text-secondary mb-4">
              Register commercial vessels under the Singapore Flag — one of the top 5 largest and cleanest ship registries in the world managed by the Maritime and Port Authority of Singapore (MPA).
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>Tax Exemptions:</strong> 100% tax exemption on qualifying shipping income under Section 13A & 13F.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Tonnage Tax System:</strong> Attractive tonnage tax schemes and absence of capital gains tax.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>MPA Compliance:</strong> Surveying, certification, and vessel mortgage registration.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Register Vessel</a>
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-right">
            <div class="feature-box p-4">
              <div class="card-icon-wrapper"><i class="fa-solid fa-ship"></i></div>
              <h5>Singapore Maritime Registry</h5>
              <p>Full advisory for shipowners, charterers, and maritime funds seeking registration under the Singapore flag.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 11. Company De-Registration -->
    <section id="company-deregistration" class="setup-block">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="block-tag">Entity Strike-Off</span>
            <h2 class="block-title">Company De-Registration & Strike-Off</h2>
            <p class="text-secondary mb-4">
              Orderly closure, ACRA company strike-off, and voluntary liquidation for dormant or restructuring businesses in compliance with Singapore law.
            </p>
            <ul class="check-list">
              <li><i class="fa-solid fa-circle-check"></i> <strong>ACRA Strike-Off Application:</strong> Complete filing process ensuring zero outstanding liabilities.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>IRAS Tax Clearance:</strong> Final tax return submission and tax clearance certificate acquisition.</li>
              <li><i class="fa-solid fa-circle-check"></i> <strong>Members' Voluntary Liquidation (MVL):</strong> Formal liquidation process for solvent entities.</li>
            </ul>
            <a href="#contact" class="btn btn-gold mt-3">Start Strike-Off Process</a>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="feature-box p-4">
              <div class="card-icon-wrapper"><i class="fa-solid fa-file-circle-xmark"></i></div>
              <h5>Orderly Business Closure</h5>
              <p>Avoid director disqualification risks and statutory fines by closing dormant entities cleanly through ACRA and IRAS clearance.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Banner CTA -->
    <section class="container" data-aos="zoom-in">
      <div class="cta-banner text-center">
        <h3 class="fw-bold mb-3">Need Assistance Setting Up Your Business in Singapore?</h3>
        <p class="mb-4 text-light">Speak directly with our qualified corporate secretarial and immigration specialists.</p>
        <a href="#contact" class="btn btn-light text-dark fw-bold px-4 py-3">Book Confidential Call</a>
      </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-5 bg-light">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="text-center mb-5">
              <h2 class="fw-bold">Request Business Setup Consultation</h2>
              <p class="text-muted">Fill out the form below and our team will get back to you within 24 hours.</p>
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
                <label class="form-label fw-medium">Select Setup Service</label>
                <select class="form-select">
                  <option selected>Employment & Residence Visa</option>
                  <option>Human Resource Service</option>
                  <option>Virtual Office Services</option>
                  <option>Find Office Premises</option>
                  <option>Trademark Registration</option>
                  <option>Business Support Services</option>
                  <option>LLC Transfer Solutions</option>
                  <option>Ship Registration</option>
                  <option>Company De-Registration</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label fw-medium">Business Requirements</label>
                <textarea class="form-control" rows="4" placeholder="Briefly describe your business setup or immigration goals..."></textarea>
              </div>
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-gold px-5 py-3">Submit Setup Request</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include ROOT_PATH . '/singapore/elements/footer.php'; ?>