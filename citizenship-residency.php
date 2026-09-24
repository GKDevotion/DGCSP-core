<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>
<style>
       
        .text-gold {
            color: var(--gold-primary) !important;
        }

        .bg-gold-light {
            background-color: var(--gold-light) !important;
        }

        .bg-gray-custom {
            background-color: var(--gray-color) !important;
        }

        .btn-gold {
            background-color: var(--gold-primary);
            color: #ffffff;
            border: 1px solid var(--gold-primary);
            font-weight: 600;
            padding: 0.75rem 1.75rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-gold:hover {
            background-color: var(--gold-hover);
            border-color: var(--gold-hover);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(184, 150, 85, 0.25);
        }

        .btn-outline-gold {
            background-color: transparent;
            color: var(--gold-primary);
            border: 2px solid var(--gold-primary);
            font-weight: 600;
            padding: 0.75rem 1.75rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-outline-gold:hover {
            background-color: var(--gold-primary);
            color: #ffffff;
        }

        .card-luxury {
            border: 1px solid var(--border-light);
            background: #ffffff;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-luxury:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.07);
        }

        /* Hero Banner */
        .hero-banner {
            background: linear-gradient(135deg, #1f1d1a 0%, #362e24 100%);
            color: #ffffff;
            padding: 5rem 0 6rem 0;
            position: relative;
        }

        .hero-banner::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--gold-primary) 0%, #e3ce9c 50%, var(--gold-primary) 100%);
        }

        /* Accordion Customization */
        .accordion-item {
            border: 1px solid var(--border-light);
            margin-bottom: 0.75rem;
            border-radius: 6px !important;
            overflow: hidden;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--gold-light);
            color: var(--gold-hover);
            box-shadow: none;
            font-weight: 600;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--gold-primary);
        }

        /* Estimator Tool Styling */
        .estimator-box {
            background-color: #ffffff;
            border: 2px solid var(--border-light);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        /* Step Timeline */
        .step-number {
            width: 48px;
            height: 48px;
            background-color: var(--gold-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        /* Badges */
        .badge-gold {
            background-color: var(--gold-light);
            color: var(--gold-hover);
            border: 1px solid var(--gold-primary);
            padding: 0.4rem 0.8rem;
            font-size: 0.85rem;
        }
    </style>
<!-- SECTION 1: HERO / BANNER -->
    <section class="hero-banner d-flex align-items-center">
        <div class="container position-relative z-1">
            <div class="row align-items-center py-4">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <span class="badge badge-gold rounded-pill text-uppercase tracking-wider mb-3 px-3 py-2">Private Wealth & Sovereign Advisory</span>
                    <h1 class="display-4 fw-bold mb-3 text-white">Strategic Citizenship & Global Residency Optimization</h1>
                    <p class="lead text-light opacity-90 mb-4 px-md-4">
                        Protect family capital, acquire sovereign mobility, and legally optimize multi-jurisdictional tax liabilities with tailor-made dual citizenship pathways.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <button class="btn btn-gold btn-lg shadow-sm" data-bs-toggle="modal" data-bs-target="#consultationModal">
                            <i class="fa-solid fa-user-shield me-2"></i> Request Private Assessment
                        </button>
                        <a href="#estimator" class="btn btn-outline-light btn-lg">
                            <i class="fa-solid fa-calculator me-2"></i> Calculate Investment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: KEY PERFORMANCE & TRUST METRICS -->
    <section class="py-5 bg-gold-light border-bottom border-top border-warning-subtle">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="h1 fw-bold text-gold mb-1">$2.4B+</div>
                    <p class="text-muted small text-uppercase mb-0 fw-semibold">Capital Placement Guided</p>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="h1 fw-bold text-gold mb-1">100%</div>
                    <p class="text-muted small text-uppercase mb-0 fw-semibold">Regulatory Compliance Record</p>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="h1 fw-bold text-gold mb-1">170+</div>
                    <p class="text-muted small text-uppercase mb-0 fw-semibold">Global Destinations Access</p>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="h1 fw-bold text-gold mb-1">35+</div>
                    <p class="text-muted small text-uppercase mb-0 fw-semibold">Sovereign Jurisdictions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: INTERACTIVE CITIZENSHIP & RESIDENCY ESTIMATOR -->
    <section id="estimator" class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-gold text-uppercase fw-bold small">Interactive Suite</span>
                <h2 class="h1 fw-bold mt-1">Residency & Citizenship Investment Estimator</h2>
                <p class="text-muted">Simulate required capital thresholds, processing lead times, and global mobility advantages based on your strategic sovereign goals.</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-10">
                    <div class="estimator-box">
                        <div class="row g-4">
                            <div class="col-md-6 border-end-md">
                                <label class="form-label fw-bold text-dark mb-2">Select Preferred Jurisdiction</label>
                                <select id="jurisdictionSelect" class="form-select form-select-lg mb-4 border-secondary-subtle">
                                    <option value="stkitts" selected>St. Kitts & Nevis (CBI - Fast Pass)</option>
                                    <option value="malta">Malta (MEIN Direct Investment)</option>
                                    <option value="portugal">Portugal Golden Visa (ARI Funds)</option>
                                    <option value="uae">UAE Golden Visa (10-Year Real Estate)</option>
                                    <option value="antigua">Antigua & Barbuda (Family CBI)</option>
                                </select>

                                <label class="form-label fw-bold text-dark mb-2">Primary Family Size</label>
                                <div class="btn-group w-full d-flex mb-4" role="group" id="familySizeGroup">
                                    <input type="radio" class="btn-check" name="familySize" id="single" value="1" checked>
                                    <label class="btn btn-outline-secondary" for="single">Single</label>
                                    <input type="radio" class="btn-check" name="familySize" id="couple" value="2">
                                    <label class="btn btn-outline-secondary" for="couple">Couple</label>
                                    <input type="radio" class="btn-check" name="familySize" id="family4" value="4">
                                    <label class="btn btn-outline-secondary" for="family4">Family of 4</label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold text-dark">Primary Strategic Objective</label>
                                    <select id="objectiveSelect" class="form-select border-secondary-subtle">
                                        <option value="tax">Tax Efficiency & Asset Protection</option>
                                        <option value="mobility">Unrestricted Visa-Free Travel</option>
                                        <option value="planb">Geopolitical Risk Mitigation (Plan B)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex flex-column justify-content-between ps-md-4">
                                <div class="p-4 bg-gold-light rounded-3 border border-warning-subtle">
                                    <h4 class="h5 text-gold fw-bold mb-3 border-bottom pb-2 border-warning-subtle">Estimated Parameters</h4>
                                    
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Min Capital Outlay:</span>
                                        <span id="estMinInvestment" class="fw-bold text-dark">$250,000 USD</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Avg Processing Time:</span>
                                        <span id="estProcessing" class="fw-bold text-dark">4 - 6 Months</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Visa-Free Score:</span>
                                        <span id="estVisaFree" class="fw-bold text-dark">157 Countries</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted">Physical Stay Requirement:</span>
                                        <span id="estStayReq" class="fw-bold text-dark">0 Days/Year</span>
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <button class="btn btn-gold w-100 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#consultationModal">
                                        Request Formal Quotation <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: STRATEGIC PROGRAMS & GLOBAL PATHWAYS -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-end mb-5">
                <div class="col-md-8" data-aos="fade-right">
                    <span class="text-gold text-uppercase fw-bold small">Sovereign Portfolio</span>
                    <h2 class="h1 fw-bold mt-1 mb-0">Featured Global Programs</h2>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0" data-aos="fade-left">
                    <button class="btn btn-outline-gold" data-bs-toggle="modal" data-bs-target="#consultationModal">Compare All 35+ Programs</button>
                </div>
            </div>

            <div class="row g-4">
                <!-- Program 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-luxury h-100 p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge badge-gold rounded-1">Citizenship</span>
                                <i class="fa-solid fa-passport fa-2x text-gold"></i>
                            </div>
                            <h3 class="h4 fw-bold">Malta (MEIN)</h3>
                            <p class="text-muted small">Direct citizenship by naturalization for exceptional services via direct investment in Europe.</p>
                            <hr class="my-3 text-light">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Access:</strong> 185+ Countries (Incl. US, UK)</li>
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Min. Investment:</strong> €690,000</li>
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Timeline:</strong> 12 - 36 Months</li>
                                <li class="small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Benefit:</strong> Full EU Settlement Rights</li>
                            </ul>
                        </div>
                        <button class="btn btn-gold w-100" data-bs-toggle="modal" data-bs-target="#consultationModal">Explore Malta Program</button>
                    </div>
                </div>

                <!-- Program 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-luxury h-100 p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge badge-gold rounded-1">Residency</span>
                                <i class="fa-solid fa-building-columns fa-2x text-gold"></i>
                            </div>
                            <h3 class="h4 fw-bold">Portugal Golden Visa</h3>
                            <p class="text-muted small">Flexible European residency pathway via fund subscription, offering a pathway to EU citizenship.</p>
                            <hr class="my-3 text-light">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Access:</strong> Schengen Zone Freedom</li>
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Min. Investment:</strong> €500,000 (Funds)</li>
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Stay Req:</strong> 7 Days / Year</li>
                                <li class="small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Benefit:</strong> Passport Eligibility in 5 Yrs</li>
                            </ul>
                        </div>
                        <button class="btn btn-gold w-100" data-bs-toggle="modal" data-bs-target="#consultationModal">Explore Portugal ARI</button>
                    </div>
                </div>

                <!-- Program 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-luxury h-100 p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge badge-gold rounded-1">Citizenship</span>
                                <i class="fa-solid fa-plane fa-2x text-gold"></i>
                            </div>
                            <h3 class="h4 fw-bold">Caribbean CBI (St. Kitts)</h3>
                            <p class="text-muted small">Premier Caribbean passport providing rapid international mobility and tax restructuring advantages.</p>
                            <hr class="my-3 text-light">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Access:</strong> 155+ Destinations</li>
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Min. Investment:</strong> $250,000 USD</li>
                                <li class="mb-2 small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Timeline:</strong> 4 - 6 Months</li>
                                <li class="small"><i class="fa-solid fa-check text-gold me-2"></i><strong>Benefit:</strong> Zero Capital Gains/Wealth Tax</li>
                            </ul>
                        </div>
                        <button class="btn btn-gold w-100" data-bs-toggle="modal" data-bs-target="#consultationModal">Explore Caribbean CBI</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: DUAL CITIZENSHIP & TAX OPTIMIZATION MATRIX -->
    <section class="py-5 bg-gray-custom">
        <div class="container py-4">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-gold text-uppercase fw-bold small">Strategic Comparison</span>
                <h2 class="h1 fw-bold mt-1">Sovereign Tax & Mobility Matrix</h2>
                <p class="text-muted">Cross-jurisdictional evaluation of physical residency duties, personal tax structures, and capital safeguards.</p>
            </div>

            <div class="table-responsive bg-white rounded-3 shadow-sm border" data-aos="fade-up" data-aos-delay="100">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark bg-dark">
                        <tr>
                            <th scope="col" class="py-3 ps-4">Jurisdiction</th>
                            <th scope="col" class="py-3">Type</th>
                            <th scope="col" class="py-3">Physical Presence</th>
                            <th scope="col" class="py-3">Personal Tax Structure</th>
                            <th scope="col" class="py-3">Worldwide Income Tax</th>
                            <th scope="col" class="py-3 text-end pe-4">Wealth Preservation Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-bold">UAE (Dubai)</td>
                            <td><span class="badge bg-secondary-subtle text-dark">Golden Visa</span></td>
                            <td>None Required</td>
                            <td>0% Personal Income Tax</td>
                            <td>Tax Resident Exempt*</td>
                            <td class="text-end pe-4 text-gold fw-bold">AAA+</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Malta</td>
                            <td><span class="badge bg-secondary-subtle text-dark">EU Citizenship</span></td>
                            <td>12 Months (Residency Phase)</td>
                            <td>Remittance Basis Available</td>
                            <td>0% Non-Remitted Foreign</td>
                            <td class="text-end pe-4 text-gold fw-bold">AAA</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">St. Kitts & Nevis</td>
                            <td><span class="badge bg-secondary-subtle text-dark">CBI Passport</span></td>
                            <td>0 Days</td>
                            <td>No Income / Wealth Tax</td>
                            <td>Exempt</td>
                            <td class="text-end pe-4 text-gold fw-bold">AA+</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Monaco</td>
                            <td><span class="badge bg-secondary-subtle text-dark">Residency</span></td>
                            <td>183 Days / Year</td>
                            <td>0% Personal Income Tax</td>
                            <td>Exempt (Non-French)</td>
                            <td class="text-end pe-4 text-gold fw-bold">AAA+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- SECTION 6: 6-STEP ADVISORY LIFECYCLE -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-gold text-uppercase fw-bold small">Institutional Execution</span>
                <h2 class="h1 fw-bold mt-1">End-to-End Advisory Lifecycle</h2>
                <p class="text-muted">A structured, legally audited methodology delivering seamless citizenship and residency acquisition.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-luxury p-4 h-100">
                        <div class="step-number">01</div>
                        <h4 class="h5 fw-bold">Pre-Clearance & KYB</h4>
                        <p class="text-muted small mb-0">Internal compliance screen using Interpol & World-Check databases before signing mandates, ensuring 99.8% approval guarantee.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-luxury p-4 h-100">
                        <div class="step-number">02</div>
                        <h4 class="h5 fw-bold">Portfolio & Asset Selection</h4>
                        <p class="text-muted small mb-0">Curating qualifying real estate investments, government fund placements, or capital contributions matching financial return targets.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-luxury p-4 h-100">
                        <div class="step-number">03</div>
                        <h4 class="h5 fw-bold">Legal Dossier Compilation</h4>
                        <p class="text-muted small mb-0">Complete legal preparation, official translations, apostilles, and notarizations by licensed immigration attorneys.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card card-luxury p-4 h-100">
                        <div class="step-number">04</div>
                        <h4 class="h5 fw-bold">Government Due Diligence</h4>
                        <p class="text-muted small mb-0">Formal submission to government authorities and state intelligence units for final background vetting.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card card-luxury p-4 h-100">
                        <div class="step-number">05</div>
                        <h4 class="h5 fw-bold">Capital Disbursement</h4>
                        <p class="text-muted small mb-0">Secure escrow release or direct sovereign bank placement upon receipt of official Approval-in-Principle.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card card-luxury p-4 h-100">
                        <div class="step-number">06</div>
                        <h4 class="h5 fw-bold">Passport & Identity Handover</h4>
                        <p class="text-muted small mb-0">Hand delivery of naturalization certificates, passports, national IDs, and ongoing family legacy maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7: FAMILY INCLUSION & MULTI-GENERATIONAL WEALTH -->
    <section class="py-5 bg-gold-light border-top border-bottom border-warning-subtle">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="text-gold text-uppercase fw-bold small">Legacy Structuring</span>
                    <h2 class="h1 fw-bold mt-1 mb-4">Multi-Generational Family Inclusion</h2>
                    <p class="text-muted mb-4">A single application can safeguard your extended lineage. Most tier-1 sovereign programs accommodate dependent family structures under unified application umbrellas.</p>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1"><i class="fa-solid fa-users text-gold fa-xl"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Dependent Children & Siblings</h5>
                            <p class="text-muted small mb-0">Include unmarried children up to age 30 and unmarried, childless siblings under qualifying programs.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1"><i class="fa-solid fa-heart text-gold fa-xl"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Parents & Grandparents</h5>
                            <p class="text-muted small mb-0">Extend citizenship or permanent European residency status to financially dependent parents above age 55-65.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="me-3 mt-1"><i class="fa-solid fa-shield-halved text-gold fa-xl"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Inherited Sovereign Security</h5>
                            <p class="text-muted small mb-0">Citizenship acquired through investment is passed down directly to future generations by descent.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="bg-white p-4 rounded-3 shadow-sm border">
                        <h3 class="h4 fw-bold mb-3 border-bottom pb-2">Family Coverage Checklist</h3>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label fw-semibold text-dark">Primary Applicant & Spouse</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label fw-semibold text-dark">Minor Children (< 18 Yrs)</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label fw-semibold text-dark">Adult Dependent Students (18 - 30 Yrs)</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label fw-semibold text-dark">Dependent Parents (55+ Yrs)</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label class="form-check-label fw-semibold text-dark">Future Unborn Generations</label>
                        </div>
                        <button class="btn btn-gold w-100" data-bs-toggle="modal" data-bs-target="#consultationModal">Structure Family Application</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: RISK MITIGATION & DUE DILIGENCE -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-gold text-uppercase fw-bold small">Regulatory Governance</span>
                <h2 class="h1 fw-bold mt-1">Risk Mitigation & Vetting Standards</h2>
                <p class="text-muted">Our institutional compliance framework guarantees complete legal safety and reputation management.</p>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fa-solid fa-magnifying-glass-dollar fa-2x text-gold mb-3"></i>
                        <h5 class="fw-bold">FATF Compliance</h5>
                        <p class="text-muted small mb-0">Rigorous Source-of-Funds validation conforming to global anti-money laundering policies.</p>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fa-solid fa-user-check fa-2x text-gold mb-3"></i>
                        <h5 class="fw-bold">Interpol Clearance</h5>
                        <p class="text-muted small mb-0">Pre-screening against international sanctions, law enforcement, and PEP databases.</p>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fa-solid fa-vault fa-2x text-gold mb-3"></i>
                        <h5 class="fw-bold">Escrow Protections</h5>
                        <p class="text-muted small mb-0">Capital allocations remain safely held in Tier-1 institutional escrow until government authorization.</p>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 border rounded-3 h-100">
                        <i class="fa-solid fa-lock fa-2x text-gold mb-3"></i>
                        <h5 class="fw-bold">Swiss Vault Confidentiality</h5>
                        <p class="text-muted small mb-0">End-to-end encrypted record management adhering to strict Swiss-style data privacy laws.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 9: CLIENT CASE STUDIES & TRANSFORMATION OUTCOMES -->
    <section class="py-5 bg-gray-custom">
        <div class="container py-4">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-gold text-uppercase fw-bold small">Proven Results</span>
                <h2 class="h1 fw-bold mt-1">Client Transformations</h2>
                <p class="text-muted">Anonymized case profiles showing how dual citizenship protects wealth and opens global markets.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-luxury p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge badge-gold">Tech Entrepreneur</span>
                            <span class="text-muted small">Origin: East Asia</span>
                        </div>
                        <h4 class="h5 fw-bold">Cross-Border Business Expansion & EU Mobility</h4>
                        <p class="text-muted small">Acquired Malta MEIN citizenship to establish a European holding structure. Reduced corporate tax exposure by 32% while securing visa-free travel to over 180 countries for international deal-making.</p>
                        <hr class="text-light">
                        <div class="d-flex justify-content-between text-muted small">
                            <span>Outlay: €850,000</span>
                            <span class="text-gold fw-bold">Timeframe: 14 Months</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-luxury p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge badge-gold">Family Office Trustee</span>
                            <span class="text-muted small">Origin: Latin America</span>
                        </div>
                        <h4 class="h5 fw-bold">Multi-Generational Wealth Safeguard & Plan B</h4>
                        <p class="text-muted small">Structured Caribbean CBI and UAE Golden Visa for a family of 6 amidst regional political volatility. Created a sovereign safe-haven and zero-tax domicile for international investments.</p>
                        <hr class="text-light">
                        <div class="d-flex justify-content-between text-muted small">
                            <span>Outlay: $350,000 USD</span>
                            <span class="text-gold fw-bold">Timeframe: 5 Months</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10: FREQUENTLY ASKED QUESTIONS (BOOTSTRAP ACCORDION) -->
    <section class="py-5">
        <div class="container py-4 max-w-xl">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-gold text-uppercase fw-bold small">Clarifications</span>
                <h2 class="h1 fw-bold mt-1">Frequently Asked Questions</h2>
                <p class="text-muted">Key details regarding dual citizenship, legality, tax residence, and investment security.</p>
            </div>

            <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Is dual citizenship legal in my home country?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted small">
                            Most sovereign nations (including the US, UK, Canada, and EU states) fully recognize dual citizenship. However, certain jurisdictions restrict or disallow dual nationality. Our legal team conducts a strict preliminary check to confirm your home country's regulations before initiating any program.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            What is the difference between Residency and Citizenship by Investment?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted small">
                            Residency by Investment (Golden Visa) gives you the right to reside in a host country and travel within its economic zone (e.g., EU Schengen Area) without granting a passport immediately. Citizenship by Investment grants immediate, full passport ownership, civic rights, and lifelong nationality for you and your family.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Am I required to move or live in the country I invest in?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted small">
                            No. Most Caribbean (e.g., St. Kitts) and Pacific CBI programs require zero physical presence. European Golden Visas (e.g., Portugal) often require as little as 7 days per year, giving you total freedom without altering your day-to-day life.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            How are my funds protected during the application process?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted small">
                            Capital contributions are placed into regulated government-monitored escrow accounts or institutional bank accounts. Primary funds are only disbursed once official, written "Approval-in-Principle" is granted by the sovereign government's immigration unit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 11: CONFIDENTIAL CONSULTATION FORM SECTION -->
    <section class="py-5 bg-gold-light border-top border-warning-subtle">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="zoom-in">
                    <div class="bg-white p-5 rounded-3 shadow border text-center">
                        <span class="badge badge-gold mb-3">Strictly Confidential</span>
                        <h2 class="h1 fw-bold">Request a Private Eligibility Review</h2>
                        <p class="text-muted mb-4">Connect directly with a Senior Sovereign Partner. Complete the assessment below for an immediate, non-binding preliminary clearance consultation.</p>

                        <form id="pageLeadForm" onsubmit="handleFormSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-lg" placeholder="Full Legal Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control form-control-lg" placeholder="Private Email Address *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control form-control-lg" placeholder="Phone / WhatsApp *" required>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-select-lg">
                                        <option selected>Current Citizenship / Passport</option>
                                        <option>United States / Canada</option>
                                        <option>United Kingdom / EU</option>
                                        <option>Middle East / GCC</option>
                                        <option>Asia / Pacific</option>
                                        <option>Other Region</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="3" placeholder="Specify key goals (e.g., Tax Reduction, EU Settlement, Wealth Transfer)..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-gold btn-lg w-100 py-3 mt-2">Submit Confidential Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL COMPONENT (FOR BUTTON TRIGGERS) -->
    <div class="modal fade" id="consultationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-dark text-white border-0">
                    <h5 class="modal-title font-serif text-gold"><i class="fa-solid fa-shield-halved me-2"></i> Private Advisory Consultation</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="modalLeadForm" onsubmit="handleFormSubmit(event)">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Full Legal Name</label>
                                <input type="text" class="form-control" required placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Encrypted Email</label>
                                <input type="email" class="form-control" required placeholder="john@company.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Target Budget</label>
                                <select class="form-select">
                                    <option>$200k - $500k USD</option>
                                    <option>$500k - $1M USD</option>
                                    <option>$1M - $5M USD</option>
                                    <option>$5M+ USD</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Target Timeframe</label>
                                <select class="form-select">
                                    <option>Immediate (1-3 Months)</option>
                                    <option>Medium Term (3-6 Months)</option>
                                    <option>Strategic Planning (12+ Months)</option>
                                </select>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-gold w-100 py-2">Submit Direct Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom Interactive Logic -->
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Estimator Interactive Dataset
        const programData = {
            stkitts: { minInv: "$250,000 USD", time: "4 - 6 Months", visaFree: "157 Countries", stay: "0 Days/Year" },
            malta: { minInv: "€690,000 EUR", time: "12 - 36 Months", visaFree: "185 Countries", stay: "12 Months (Residency)" },
            portugal: { minInv: "€500,000 EUR", time: "18 - 24 Months", visaFree: "172 Schengen Zone", stay: "7 Days/Year" },
            uae: { minInv: "$545,000 USD", time: "1 - 2 Months", visaFree: "180 Countries", stay: "None Required" },
            antigua: { minInv: "$230,000 USD", time: "3 - 5 Months", visaFree: "150 Countries", stay: "5 Days in 5 Years" }
        };

        // DOM elements
        const jurisdictionSelect = document.getElementById('jurisdictionSelect');
        const estMinInvestment = document.getElementById('estMinInvestment');
        const estProcessing = document.getElementById('estProcessing');
        const estVisaFree = document.getElementById('estVisaFree');
        const estStayReq = document.getElementById('estStayReq');

        // Update Estimator Values
        function updateEstimator() {
            const selected = jurisdictionSelect.value;
            const data = programData[selected];
            if(data) {
                estMinInvestment.textContent = data.minInv;
                estProcessing.textContent = data.time;
                estVisaFree.textContent = data.visaFree;
                estStayReq.textContent = data.stay;
            }
        }

        // Add event listeners
        if(jurisdictionSelect) {
            jurisdictionSelect.addEventListener('change', updateEstimator);
        }

        // Form submission feedback
        function handleFormSubmit(e) {
            e.preventDefault();
            const modalEl = document.getElementById('consultationModal');
            const modal = bootstrap.Modal.getInstance(modalEl);
            if(modal) modal.hide();
            
            // Custom luxury feedback without alert()
            const feedbackDiv = document.createElement('div');
            feedbackDiv.className = 'position-fixed bottom-0 end-0 p-3';
            feedbackDiv.style.zIndex = '9999';
            feedbackDiv.innerHTML = `
                <div class="toast show bg-dark text-white border-warning" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-dark text-gold border-bottom border-secondary">
                        <strong class="me-auto"><i class="fa-solid fa-shield-halved me-2"></i> Confidential Request Received</strong>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                        Your private inquiry has been encrypted and assigned to a Senior Sovereign Partner. You will be contacted within 4 business hours.
                    </div>
                </div>
            `;
            document.body.appendChild(feedbackDiv);
            
            setTimeout(() => {
                feedbackDiv.remove();
            }, 6000);
        }
    </script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>