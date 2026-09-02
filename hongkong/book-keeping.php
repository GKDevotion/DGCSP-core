<?php 
require_once __DIR__ . '/../config.php';
include ROOT_PATH . '/hongkong/elements/header.php';
?>

<style>
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Dedicated Hero Banner */
    .bookkeeping-hero {
      background: linear-gradient(135deg, var(--gold-banner-bg) 0%, #6e501a 100%);
      color: var(--white);
      padding: 90px 0 70px 0;
      position: relative;
    }

    .bookkeeping-hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
    }

    .bookkeeping-hero p {
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

    /* Section Content Blocks */
    .content-block {
      padding: 80px 0;
      border-bottom: 1px solid var(--gold-border);
    }

    .content-block:nth-child(even) {
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

    .feature-box:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
      border-color: var(--gold-primary);
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

    /* Button */
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

    /* Table Styling for Tax Rates */
    .custom-table {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: var(--shadow-sm);
    }

    .custom-table th {
      background-color: var(--gold-primary);
      color: white;
      font-weight: 600;
    }

</style>

<header id="bookkeeping-hero" class="bookkeeping-hero text-center">
  <div class="container" data-aos="fade-down">
      <span class="badge bg-light text-dark mb-3 px-3 py-2 rounded-pill fw-medium">IRAS & ACRA Statutory Compliance</span>
      <h1 class="mb-3">Book Keeping & Tax Advisory</h1>
      <p class="lead mb-4">
        End-to-end accounting solutions, statutory financial reporting, tax audit preparation, resident director governance, and cross-border Asian tax structure planning.
      </p>

      <div class="d-flex justify-content-center gap-3 flex-wrap mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">100%</div>
          <div class="small opacity-75">SFRS & IRAS Compliant</div>
        </div>
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">17%</div>
          <div class="small opacity-75">Flat Corporate Tax Rate</div>
        </div>
        <div class="stat-badge text-start">
          <div class="h4 mb-0 fw-bold">90+</div>
          <div class="small opacity-75">Avoidance of DTA Treaties</div>
        </div>
      </div>
  </div>
</header>

<main>
  <section id="accounting-tax" class="content-block">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <span class="block-tag">Financial Record Management</span>
          <h2 class="block-title">Accounting & Tax Services</h2>
          <p class="text-secondary mb-4">
            Routine bookkeeping and annual tax return preparation adhering to Singapore Financial Reporting Standards (SFRS).
          </p>
          <ul class="check-list">
            <li><i class="fa-solid fa-circle-check"></i> <strong>Routine Bookkeeping:</strong> Monthly/quarterly ledger maintenance on Xero or QuickBooks.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>IRAS Tax Submissions:</strong> Filing Form C-S / Form C and Estimated Chargeable Income (ECI).</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>Financial Statements:</strong> Unaudited statutory reports for AGM and ACRA filing.</li>
          </ul>
          <a href="#contact" class="btn btn-gold mt-3">Outsource Accounting</a>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="feature-box p-4 border border-warning">
            <div class="card-icon-wrapper"><i class="fa-solid fa-calculator"></i></div>
            <h4 class="fw-bold mb-3">Complete Tax Compliance</h4>
            <p class="text-secondary small">Prevent statutory penalties and keep your company in good standing with timely tax returns and clean general ledgers.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="legal-consideration" class="content-block">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-left">
          <span class="block-tag">Regulatory & Compliance</span>
          <h2 class="block-title">Legal Considerations</h2>
          <p class="text-secondary mb-4">
            Navigating legal mandates under the Singapore Companies Act, shareholder agreement clauses, and statutory accounting retention laws.
          </p>
          <ul class="check-list">
            <li><i class="fa-solid fa-circle-check"></i> <strong>5-Year Record Retention:</strong> Ensuring accounting documents conform to statutory holding laws.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>Corporate Governance:</strong> Director resolution review for major financial transactions.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>ACRA Annual Returns:</strong> Filing compliant financial statements via the XBRL portal.</li>
          </ul>
          <a href="#contact" class="btn btn-gold mt-3">Review Legal Compliance</a>
        </div>
        <div class="col-lg-6 order-lg-1" data-aos="fade-right">
          <div class="feature-box p-4">
            <div class="card-icon-wrapper"><i class="fa-solid fa-scale-balanced"></i></div>
            <h4 class="fw-bold mb-3">Statutory Protection</h4>
            <p class="text-secondary small">Ensure full legal adherence to ACRA and IRAS regulations to safeguard your board of directors from personal liability.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tax-audit" class="content-block">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <span class="block-tag">Independent Assurance</span>
          <h2 class="block-title">Tax Audit Services</h2>
          <p class="text-secondary mb-4">
            Independent financial statement audits and representation during official IRAS tax queries or field audits.
          </p>
          <ul class="check-list">
            <li><i class="fa-solid fa-circle-check"></i> <strong>Statutory Audit:</strong> Complete audits for entities exceeding S$10M revenue thresholds.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>IRAS Field Audit Support:</strong> Expert representation and investigation resolution.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>Internal Controls Review:</strong> Identifying accounting risks and operational vulnerabilities.</li>
          </ul>
          <a href="#contact" class="btn btn-gold mt-3">Schedule Audit Support</a>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="feature-box p-4">
            <div class="card-icon-wrapper"><i class="fa-solid fa-file-signature"></i></div>
            <h5>Audit Readiness Assessment</h5>
            <p>Thorough pre-audit reviews to ensure your balance sheet and income statements meet public accounting standards without adjustments.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="residence-director" class="content-block">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-left">
          <span class="block-tag">ACRA Statutory Mandate</span>
          <h2 class="block-title">Residence Director Services</h2>
          <p class="text-secondary mb-4">
            Fulfill Section 145 of the Singapore Companies Act requiring every entity to have at least one local resident director.
          </p>
          <ul class="check-list">
            <li><i class="fa-solid fa-circle-check"></i> <strong>Nominee Director Appointment:</strong> Qualified Singapore Citizens / PRs to meet ACRA statutory setup laws.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>Non-Executive Governance:</strong> Protect your management control while maintaining 100% legal compliance.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>Security Deposit Escrow:</strong> Transparent, refundable security deposit structures.</li>
          </ul>
          <a href="#contact" class="btn btn-gold mt-3">Appoint Resident Director</a>
        </div>
        <div class="col-lg-6 order-lg-1" data-aos="fade-right">
          <div class="feature-box text-center p-4">
            <div class="card-icon-wrapper mx-auto"><i class="fa-solid fa-user-shield"></i></div>
            <h4 class="fw-bold">Nominee Resident Director</h4>
            <p class="text-muted small">ACRA Statutory Requirement Service</p>
            <div class="badge bg-warning text-dark px-3 py-2 rounded-pill mt-2">Instant ACRA Compliance</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="withholding-tax" class="content-block">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <span class="block-tag">Cross-Border Compliance</span>
          <h2 class="block-title">WithHolding TAX Advisory</h2>
          <p class="text-secondary mb-4">
            Manage IRAS withholding tax obligations on payments made to non-resident companies or individuals for royalties, interest, and technical fees.
          </p>
          <ul class="check-list">
            <li><i class="fa-solid fa-circle-check"></i> <strong>IRAS Filing (Form S45):</strong> Timely reporting and payment submission by the 15th of the month.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>DTA Rate Relief:</strong> Applying reduced withholding rates under Double Taxation Agreements.</li>
            <li><i class="fa-solid fa-circle-check"></i> <strong>Software & Royalty Structuring:</strong> Planning international IP fee payments efficiently.</li>
          </ul>
          <a href="#contact" class="btn btn-gold mt-3">File Withholding Tax</a>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="feature-box p-4 border border-warning">
            <div class="card-icon-wrapper"><i class="fa-solid fa-percent"></i></div>
            <h4 class="fw-bold mb-3">Withholding Tax Rates Overview</h4>
            <p class="text-secondary small mb-2"><strong>Interest Payments:</strong> 15% standard rate</p>
            <p class="text-secondary small mb-2"><strong>Royalties & IP:</strong> 10% standard rate</p>
            <p class="text-secondary small mb-0"><strong>Management Fees:</strong> Prevailing corporate tax rate (17%)</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="asia-tax-rates" class="content-block">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-12 text-center" data-aos="fade-up">
          <span class="block-tag">Regional Tax Comparison</span>
          <h2 class="block-title">ASIA TAX Rates Matrix</h2>
          <p class="text-secondary mb-5 mx-auto" style="max-width: 700px;">
            Compare corporate tax rates, GST/VAT rates, and capital gains policies across key Asian financial jurisdictions to optimize your expansion model.
          </p>
        </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
          <div class="table-responsive custom-table">
            <table class="table table-hover align-middle mb-0">
              <thead>
                <tr>
                  <th scope="col" class="py-3 ps-4">Jurisdiction</th>
                  <th scope="col" class="py-3">Corporate Tax Rate</th>
                  <th scope="col" class="py-3">GST / VAT Rate</th>
                  <th scope="col" class="py-3">Capital Gains Tax</th>
                  <th scope="col" class="py-3 pe-4">Dividend Tax</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ps-4 fw-bold"><i class="fa-solid fa-flag me-2 text-warning"></i> Singapore</td>
                  <td>17% (Partial Exemptions)</td>
                  <td>9%</td>
                  <td><span class="badge bg-success">0% (None)</span></td>
                  <td><span class="badge bg-success">0% (Tier 1)</span></td>
                </tr>
                <tr>
                  <td class="ps-4 fw-bold">Hong Kong</td>
                  <td>16.5%</td>
                  <td>0%</td>
                  <td><span class="badge bg-success">0% (None)</span></td>
                  <td><span class="badge bg-success">0%</span></td>
                </tr>
                <tr>
                  <td class="ps-4 fw-bold">Malaysia</td>
                  <td>24%</td>
                  <td>8% (SST)</td>
                  <td>0% - 10%</td>
                  <td>0%</td>
                </tr>
                <tr>
                  <td class="ps-4 fw-bold">Indonesia</td>
                  <td>22%</td>
                  <td>11%</td>
                  <td>Prevailing Rate</td>
                  <td>10%</td>
                </tr>
                <tr>
                  <td class="ps-4 fw-bold">Vietnam</td>
                  <td>20%</td>
                  <td>10%</td>
                  <td>20%</td>
                  <td>5%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="py-5 bg-light">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up">
          <div class="text-center mb-5">
            <h2 class="fw-bold">Book Bookkeeping & Tax Consultation</h2>
            <p class="text-muted">Fill out the form below and our tax accountants will get back to you within 24 hours.</p>
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
              <label class="form-label fw-medium">Select Service Requirement</label>
              <select class="form-select">
                <option selected>Accounting & Tax</option>
                <option>Legal Consideration</option>
                <option>Tax Audit Services</option>
                <option>Residence Director Service</option>
                <option>Withholding TAX Filing</option>
                <option>Asia Tax Advisory</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label fw-medium">Business / Tax Context</label>
              <textarea class="form-control" rows="4" placeholder="Briefly describe your company's bookkeeping, audit, or tax requirements..."></textarea>
            </div>
            <div class="col-12 text-center mt-4">
              <button type="submit" class="btn btn-gold px-5 py-3">Submit Request</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

  <?php include ROOT_PATH . '/hongkong/elements/footer.php'; ?>