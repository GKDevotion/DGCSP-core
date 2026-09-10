<?php 
require_once __DIR__ . '/../config.php';
include ROOT_PATH . '/singapore/elements/header.php';

?>

<style>
    .section-subtitle {
        color: #666;
        max-width: 650px;
        margin: 0 auto 40px;
        font-size: 1rem;
    }

    
    /* Structure Cards */
    .structure-card {
        background: var(--white);
        border: 1px solid #eef0f4;
        border-radius: 12px;
        padding: 30px 25px;
        transition: var(--transition);
        height: 100%;
        position: relative;
    }
    .structure-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-md);
        border-color: var(--gold-border);
    }
    .structure-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--gold-light);
        color: var(--gold-hover);
        font-size: 0.75rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 20px;
    }

    /* Service Grid Cards */
    .service-card {
        background: var(--white);
        border: 1px solid #eef0f4;
        border-radius: 12px;
        padding: 30px 25px;
        transition: var(--transition);
        height: 100%;
        box-shadow: var(--shadow-sm);
        cursor: pointer;
    }
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-md);
        border-color: var(--gold-border);
    }
    .service-icon {
        width: 60px;
        height: 60px;
        background-color: var(--gold-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--gold-primary);
        font-size: 1.5rem;
        margin-bottom: 20px;
        transition: var(--transition);
    }
    .service-card:hover .service-icon {
        background-color: var(--gold-primary);
        color: var(--white);
    }
    .service-card h5 {
        font-weight: 700;
        font-size: 1.15rem;
        margin-bottom: 12px;
    }
    .service-card p {
        color: #666;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    .service-link {
        color: var(--gold-primary);
        font-weight: 600;
        text-decoration: none;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: var(--transition);
    }
    .service-card:hover .service-link {
        color: var(--gold-hover);
        gap: 10px;
    }

    /* Tabbed Guidance Section */
    .custom-nav-pills .nav-link {
        border-radius: 8px;
        padding: 12px 24px;
        font-weight: 600;
        color: var(--text-dark);
        background: var(--white);
        border: 1px solid #eef0f4;
        margin: 0 5px 10px;
        transition: var(--transition);
    }
    .custom-nav-pills .nav-link.active {
        background-color: var(--gold-primary) !important;
        color: var(--white) !important;
        border-color: var(--gold-primary);
        box-shadow: 0 4px 12px rgba(184, 150, 85, 0.3);
    }

    /* Calculator Card */
    .calculator-card {
        background: var(--white);
        border-radius: 16px;
        padding: 35px;
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-md);
    }

    /* CTA Banner */
    .cta-banner {
        background-color: var(--gold-banner-bg);
        color: var(--white);
        border-radius: 16px;
        padding: 50px;
        position: relative;
        overflow: hidden;
        box-shadow: var(--shadow-md);
    }

    /* Contact Form */
    .contact-form-card {
        background: var(--white);
        border-radius: 16px;
        padding: 40px;
        box-shadow: var(--shadow-sm);
        border: 1px solid #eef0f4;
    }

    /* Detailed Page Header & Content Styling */
    .page-header-banner {
        background: linear-gradient(135deg, #1f242d 0%, #2c323f 100%);
        color: var(--white);
        padding: 70px 0;
        border-bottom: 4px solid var(--gold-primary);
    }

    .detail-card-box {
        background: var(--white);
        border-radius: 12px;
        border: 1px solid #eef0f4;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: var(--shadow-sm);
    }
    .mas-badge {
        background: var(--gold-light);
        color: var(--gold-hover);
        border: 1px solid var(--gold-border);
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 0.85rem;
        display: inline-block;
        margin-bottom: 15px;
    }
    .table-custom th {
        background-color: var(--gold-light);
        color: var(--gold-hover);
        font-weight: 600;
    }

    @media (max-width: 991px) {
        .hero-title { font-size: 2.2rem; }
        .cta-banner { padding: 30px; }
        .dropdown-menu { max-height: 50vh; }
    }
</style>
<!-- ==================== VIEW 1: HOME VIEW ==================== -->
    <div id="home" class="app-view active-view">
        <!-- Hero Section -->
        <section class="hero-section" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
                        <span class="hero-badge"><i class="fa-solid fa-award me-2"></i> Premier Singapore MAS Advisory Partner</span>
                        <h1 class="hero-title">Incorporate & Scale Your <span>Singapore Financial</span> Business</h1>
                        <p class="hero-desc">End-to-end guidance for company incorporation, MAS Payment Institution licensing, Money Remittance setups, Capital Markets Services (CMS), and digital asset governance in Singapore.</p>
                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <a onclick="switchView('home', 'contact')" class="btn btn-gold"><i class="fa-solid fa-paper-plane me-2"></i> Consult Our Experts</a>
                            <a onclick="switchView('home', 'financial-services')" class="btn btn-outline-gold"><i class="fa-solid fa-compass me-2"></i> Explore All 13 Services</a>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1000">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="stat-card">
                                    <h3>100%</h3>
                                    <p>MAS Compliance Support</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <h3>500+</h3>
                                    <p>Setups Completed</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <h3>15+ Yrs</h3>
                                    <p>Singapore Industry Practice</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-card">
                                    <h3>24 Hrs</h3>
                                    <p>ACRA Fast Track Setup</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Corporate Structure Section -->
        <section class="py-5" id="corporate-structure" style="background-color: var(--gray-color);">
            <div class="container py-4">
                <div class="text-center" data-aos="fade-up">
                    <span class="section-tag">Corporate Architecture</span>
                    <h2 class="section-title">Singapore Legal Structures</h2>
                    <p class="section-subtitle">Select the most tax-efficient and legally compliant business structure for your expansion in Singapore.</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="structure-card">
                            <span class="structure-badge">Most Popular</span>
                            <h5 class="fw-bold mt-2">Private Limited (Pte Ltd)</h5>
                            <p class="text-muted small">Independent legal entity. Limited liability for shareholders.</p>
                            <hr>
                            <ul class="list-unstyled small lh-lg">
                                <li><i class="fa-solid fa-check text-success me-2"></i> 100% Foreign Ownership</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Min Capital: SGD $1</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> 1 Resident Director Req.</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Tax Exemption Eligible</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="structure-card">
                            <span class="structure-badge">Subsidiary</span>
                            <h5 class="fw-bold mt-2">Singapore Subsidiary</h5>
                            <p class="text-muted small">Foreign parent company holds majority or 100% shares.</p>
                            <hr>
                            <ul class="list-unstyled small lh-lg">
                                <li><i class="fa-solid fa-check text-success me-2"></i> Separate Legal Entity</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Parent Liability Protected</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Local Tax Incentives</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Strategic Asia Regional HQ</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="structure-card">
                            <span class="structure-badge">Branch</span>
                            <h5 class="fw-bold mt-2">Branch Office</h5>
                            <p class="text-muted small">Extension of parent company registered with ACRA.</p>
                            <hr>
                            <ul class="list-unstyled small lh-lg">
                                <li><i class="fa-solid fa-check text-success me-2"></i> Foreign HQ Liability</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> 2 Local Agents Required</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Non-Resident Tax Rate</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Seamless Bank Operations</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="structure-card">
                            <span class="structure-badge">Liaison</span>
                            <h5 class="fw-bold mt-2">Representative Office</h5>
                            <p class="text-muted small">Temporary non-commercial entity for market research.</p>
                            <hr>
                            <ul class="list-unstyled small lh-lg">
                                <li><i class="fa-solid fa-check text-success me-2"></i> Market Exploration Only</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> No Revenue Operations</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Chief Rep Appointment</li>
                                <li><i class="fa-solid fa-check text-success me-2"></i> Valid up to 3 Years</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Financial Services Grid Section -->
        <section class="py-5" id="financial-services">
            <div class="container py-4">
                <div class="text-center" data-aos="fade-up">
                    <span class="section-tag">MAS & FinTech Advisory</span>
                    <h2 class="section-title">Specialized Financial Services Portal</h2>
                    <p class="section-subtitle">Select any child service below to view its complete licensing requirements, capital criteria, and regulatory workflow.</p>
                    
                    <!-- Search Bar -->
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass text-gold"></i></span>
                                <input type="text" id="serviceSearch" class="form-control border-start-0" placeholder="Search financial service (e.g. Crypto, Remittance, CMS)..." onkeyup="filterServices()">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4" id="serviceGrid">
                    <!-- Item 1 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="money remittance business" data-aos="fade-up">
                        <div class="service-card border-gold-active" onclick="switchView('money-remittance')">
                            <div class="service-icon"><i class="fa-solid fa-money-bill-transfer"></i></div>
                            <span class="badge bg-warning text-dark mb-2">Popular Service</span>
                            <h5>Money Remittance Business</h5>
                            <p>Standard and Major Payment Institution (MPI) licensing under MAS Payment Services Act 2019 for cross-border funds transfer.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="stored value facility e-money" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('svf')">
                            <div class="service-icon"><i class="fa-solid fa-wallet"></i></div>
                            <h5>Stored Value Facility</h5>
                            <p>E-money issuance, prepaid account governance, user balance safeguarding, and MAS license filings.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="crypto currency solution" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('crypto-solution')">
                            <div class="service-icon"><i class="fa-solid fa-bitcoin-sign"></i></div>
                            <h5>Crypto Currency Solution</h5>
                            <p>Regulatory frameworks for digital payment token services, stablecoin issuance, and tokenomics legal opinions.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="cms license capital markets services" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('cms-license')">
                            <div class="service-icon"><i class="fa-solid fa-chart-pie"></i></div>
                            <h5>CMS License Guidance</h5>
                            <p>Capital Markets Services licensing for fund management, dealing in securities, REITs, and corporate finance.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="fintech business setup" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('fintech-business')">
                            <div class="service-icon"><i class="fa-solid fa-microchip"></i></div>
                            <h5>FinTech Business Setup</h5>
                            <p>MAS Regulatory Sandbox entry, open-banking API integration advisory, and strategic investor structuring.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="nft business setup digital assets" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('nft-business')">
                            <div class="service-icon"><i class="fa-solid fa-cubes"></i></div>
                            <h5>NFT Business Setup</h5>
                            <p>Non-Fungible Token marketplace compliance, utility vs security classification, and IP copyright contracts.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="crypto wallet exchange activity" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('crypto-wallet')">
                            <div class="service-icon"><i class="fa-solid fa-network-wired"></i></div>
                            <h5>Crypto Wallet & Exchange</h5>
                            <p>DPT Exchange licensing, custodial key architecture compliance, and Travel Rule implementation.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="resident director nominee" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('resident-director')">
                            <div class="service-icon"><i class="fa-solid fa-user-shield"></i></div>
                            <h5>Resident Director Services</h5>
                            <p>Provision of qualified nominee Resident Directors satisfying Section 145 statutory legal mandates.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 9 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="corporate finance solutions query" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('corporate-finance-query')">
                            <div class="service-icon"><i class="fa-solid fa-handshake"></i></div>
                            <h5>Corporate Finance Solutions?</h5>
                            <p>M&A advisory, cross-border equity structuring, debt financing, and valuation opinion letters.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 10 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="listing on stock exchange sgx ipo" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('sgx-listing')">
                            <div class="service-icon"><i class="fa-solid fa-chart-line"></i></div>
                            <h5>Listing on Stock Exchange?</h5>
                            <p>SGX Mainboard and Catalist pre-IPO listing readiness, restructuring, and sponsor coordination.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 11 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="financial company setup" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('financial-company')">
                            <div class="service-icon"><i class="fa-solid fa-building-columns"></i></div>
                            <h5>Financial Company Advisory</h5>
                            <p>Finance company licensing under the Finance Companies Act, merchant banking, and credit lines.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 12 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="crypto currency solutions advanced" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('crypto-solutions-adv')">
                            <div class="service-icon"><i class="fa-solid fa-shield-cat"></i></div>
                            <h5>Crypto Currency Solutions</h5>
                            <p>Institutional VASP governance, DeFi protocol risk assessments, and multi-jurisdictional tax advisory.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>

                    <!-- Item 13 -->
                    <div class="col-md-6 col-lg-4 service-grid-item" data-title="corporate finance solutions capital" data-aos="fade-up">
                        <div class="service-card" onclick="switchView('corporate-finance-solutions')">
                            <div class="service-icon"><i class="fa-solid fa-sack-dollar"></i></div>
                            <h5>Corporate Finance Solutions</h5>
                            <p>Structured finance, private equity syndication, venture debt, and Singapore tax incentives optimization.</p>
                            <span class="service-link">Read Full Guide <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tabbed Process Guidance -->
        <section class="py-5" id="guidance" style="background-color: var(--gray-color);">
            <div class="container py-4">
                <div class="text-center" data-aos="fade-up">
                    <span class="section-tag">Step-By-Step Roadmap</span>
                    <h2 class="section-title">Regulatory & Incorporation Guidance</h2>
                    <p class="section-subtitle">Navigate Singapore's regulatory framework seamlessly with our clear operating phases.</p>
                </div>

                <ul class="nav nav-pills custom-nav-pills justify-content-center mb-4" id="guidanceTabs" role="tablist" data-aos="fade-up">
                    <li class="nav-item">
                        <button class="nav-link active" id="inc-tab" data-bs-toggle="pill" data-bs-target="#tab-inc" type="button">1. ACRA Incorporation</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="mas-tab" data-bs-toggle="pill" data-bs-target="#tab-mas" type="button">2. MAS Licensing</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="rd-tab" data-bs-toggle="pill" data-bs-target="#tab-rd" type="button">3. Resident Director & Sec</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tax-tab" data-bs-toggle="pill" data-bs-target="#tab-tax" type="button">4. Tax & Audit Exemption</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 p-md-5 rounded-4 shadow-sm border" id="guidanceTabContent" data-aos="fade-up">
                    <div class="tab-pane fade show active" id="tab-inc">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Fast-Track ACRA Incorporation</h4>
                                <p class="text-muted">Setting up a Singapore Private Limited company is straightforward and can be completed within 24 hours upon name approval and document submission.</p>
                                <ul class="list-unstyled lh-lg">
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Reserve proposed company name on ACRA Bizfile portal</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Prepare SSIC (Singapore Standard Industrial Classification) codes</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Draft Constitution & Shareholder Agreements</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Issue Electronic Certificate of Incorporation & Business Profile</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Singapore Business District" class="img-fluid rounded-3 shadow">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-mas">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Monetary Authority of Singapore (MAS) Licensing</h4>
                                <p class="text-muted">Operating a Payment Institution, FinTech, or Money Remittance company requires compliance under the Payment Services Act (PSA) or Securities and Futures Act (SFA).</p>
                                <ul class="list-unstyled lh-lg">
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Standard Payment Institution (SPI) or Major Payment Institution (MPI) application</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Drafting AML/CFT policies and Enterprise Risk Assessment (ERA)</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Capital adequacy verification and escrow fund safeguarding</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Representation during MAS interview & query clearance</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80" alt="MAS Licensing" class="img-fluid rounded-3 shadow">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-rd">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Resident Director & Corporate Secretarial</h4>
                                <p class="text-muted">Under Section 145 of the Singapore Companies Act, every company must have at least 1 director who is ordinarily resident in Singapore.</p>
                                <ul class="list-unstyled lh-lg">
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Experienced local Nominee Resident Director fulfillment</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Statutory Corporate Secretary appointment within 6 months</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Maintenance of Register of Registrable Controllers (RORC)</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Registered business address at Marina Bay Financial District</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Corporate Boardroom" class="img-fluid rounded-3 shadow">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-tax">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Singapore Tax Incentives & Audit Exemption</h4>
                                <p class="text-muted">Singapore offers one of the world's most attractive tax frameworks, featuring single-tier territorial tax and generous startup tax exemptions.</p>
                                <ul class="list-unstyled lh-lg">
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> 17% flat corporate tax rate with 75% startup tax exemption on initial profits</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Zero capital gains tax and zero dividend withholding tax</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Audit Exemption for "Small Companies" (Revenue &lt; SGD $10M)</li>
                                    <li><i class="fa-solid fa-circle-check text-warning me-2"></i> Double Taxation Agreements (DTA) with over 90 foreign jurisdictions</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80" alt="Tax Consultation" class="img-fluid rounded-3 shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fee Calculator Widget -->
        <section class="py-5" id="calculator">
            <div class="container py-4">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5" data-aos="fade-right">
                        <span class="section-tag">Instant Quote Helper</span>
                        <h2 class="section-title">Singapore Setup Fee Estimator</h2>
                        <p class="text-muted">Select your target services below to calculate an estimated setup package for your Singapore expansion.</p>
                        <div class="p-3 rounded-3 bg-light border mb-3">
                            <small class="text-muted"><i class="fa-solid fa-circle-info text-gold me-2"></i> Note: Statutory government filing fees to ACRA and MAS are included in final quotes.</small>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="calculator-card">
                            <h5 class="fw-bold mb-4">Select Required Services</h5>
                            <form id="calcForm">
                                <div class="form-check mb-3">
                                    <input class="form-check-input calc-option" type="checkbox" id="opt1" value="1500" checked>
                                    <label class="form-check-label d-flex justify-content-between fw-500" for="opt1">
                                        <span>ACRA Company Incorporation & Govt Fees</span>
                                        <span class="text-gold fw-bold">$1,500 SGD</span>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input calc-option" type="checkbox" id="opt2" value="3500">
                                    <label class="form-check-label d-flex justify-content-between fw-500" for="opt2">
                                        <span>Resident Director Service (Annual Provision)</span>
                                        <span class="text-gold fw-bold">$3,500 SGD</span>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input calc-option" type="checkbox" id="opt3" value="1200">
                                    <label class="form-check-label d-flex justify-content-between fw-500" for="opt3">
                                        <span>Corporate Secretary & Address Registration</span>
                                        <span class="text-gold fw-bold">$1,200 SGD</span>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input calc-option" type="checkbox" id="opt4" value="8500">
                                    <label class="form-check-label d-flex justify-content-between fw-500" for="opt4">
                                        <span>MAS Money Remittance / Payment License Prep</span>
                                        <span class="text-gold fw-bold">$8,500 SGD</span>
                                    </label>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input calc-option" type="checkbox" id="opt5" value="2000">
                                    <label class="form-check-label d-flex justify-content-between fw-500" for="opt5">
                                        <span>Corporate Banking Account Opening Assistance</span>
                                        <span class="text-gold fw-bold">$2,000 SGD</span>
                                    </label>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-muted small">Estimated Total Investment:</span>
                                        <h3 class="fw-bold mb-0 text-dark"><span id="calcTotal" style="color: var(--gold-primary);">$1,500</span> SGD</h3>
                                    </div>
                                    <a onclick="switchView('home', 'contact')" class="btn btn-gold">Lock In Quote</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Banner -->
        <section class="py-5">
            <div class="container">
                <div class="cta-banner text-center" data-aos="zoom-in">
                    <h2 class="fw-bold mb-3">Establish Your Singapore Financial Footprint</h2>
                    <p class="mb-4 mx-auto" style="max-width: 700px; opacity: 0.95;">Speak directly with our senior corporate filing specialists and MAS licensing consultants today.</p>
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                        <a href="tel:+6567890123" class="btn btn-light fw-bold px-4 py-2" style="color: var(--gold-hover);"><i class="fa-solid fa-phone me-2"></i> +65 6789 0123</a>
                        <a onclick="switchView('home', 'contact')" class="btn btn-outline-light fw-bold px-4 py-2"><i class="fa-solid fa-envelope me-2"></i> Request Consultation</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-5" id="contact" style="background-color: var(--gray-color);">
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-lg-5" data-aos="fade-right">
                        <span class="section-tag">Direct Advisory</span>
                        <h2 class="section-title">Schedule a Consultation</h2>
                        <p class="text-muted mb-4">Our Singapore team will review your business requirements and provide a confidential roadmap for ACRA incorporation or MAS licensing.</p>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="p-3 rounded-3" style="background: var(--gold-light); color: var(--gold-primary);">
                                <i class="fa-solid fa-location-dot fa-xl"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Singapore HQ Office</h6>
                                <p class="text-muted small mb-0">Marina Bay Financial Centre, Tower 1, 8 Marina Blvd, Singapore 018981</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="p-3 rounded-3" style="background: var(--gold-light); color: var(--gold-primary);">
                                <i class="fa-solid fa-envelope-open-text fa-xl"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email & Helpdesk</h6>
                                <p class="text-muted small mb-0">contact@singaporeadvisory.sg<br>licensing@singaporeadvisory.sg</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="p-3 rounded-3" style="background: var(--gold-light); color: var(--gold-primary);">
                                <i class="fa-solid fa-clock fa-xl"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Operating Hours</h6>
                                <p class="text-muted small mb-0">Monday – Friday: 09:00 AM – 06:00 PM (SGT)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="contact-form-card">
                            <h4 class="fw-bold mb-4">Advisory Contact Form</h4>
                            <form id="consultationForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">Full Name *</label>
                                        <input type="text" class="form-control" placeholder="e.g. Alexander Wright" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">Corporate Email *</label>
                                        <input type="email" class="form-control" placeholder="name@company.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">Phone / WhatsApp *</label>
                                        <input type="tel" class="form-control" placeholder="+65 8123 4567" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-bold">Primary Service Required *</label>
                                        <select class="form-select" required>
                                            <option selected disabled value="">Choose Service...</option>
                                            <option>Money Remittance Business</option>
                                            <option>Stored Value Facility Setup</option>
                                            <option>Crypto Wallet & Exchange Activity</option>
                                            <option>CMS License Application</option>
                                            <option>FinTech Business Setup</option>
                                            <option>NFT Business Setup</option>
                                            <option>Resident Director Service</option>
                                            <option>Corporate Finance & SGX Listing</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label small fw-bold">Brief Scope / Questions</label>
                                        <textarea class="form-control" rows="4" placeholder="Tell us about your proposed entity, target launch timeline, or regulatory queries..."></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-gold w-100 py-3"><i class="fa-solid fa-paper-plane me-2"></i> Submit Consultation Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ==================== VIEW 3: STORED VALUE FACILITY ==================== -->
    <div id="svf" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Stored Value Facility (SVF / E-Money)</h1>
                <p class="mb-0 opacity-75">Governance, E-Wallet Issuance, and Account Issuance Services in Singapore.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-wallet me-2"></i> Account Issuance & E-Money Service</span>
                        <h3 class="fw-bold mb-3">E-Money & Stored Value Regulations</h3>
                        <p>Under the Payment Services Act, Stored Value Facilities (SVF) fall under <strong>Account Issuance Services</strong> and <strong>E-Money Issuance Services</strong>. Businesses issuing e-wallets, multi-currency balance accounts, or stored prepaid instruments must be fully licensed by MAS.</p>

                        <h4 class="fw-bold mt-4 mb-3">Core Licensing Guidelines</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 border rounded">
                                    <h6 class="fw-bold text-gold"><i class="fa-solid fa-lock me-2"></i> Customer Fund Isolation</h6>
                                    <p class="small text-muted mb-0">Daily reconciliation and strict segregation of float balances in designated safeguard banks.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 border rounded">
                                    <h6 class="fw-bold text-gold"><i class="fa-solid fa-shield me-2"></i> Cyber Security Mandate</h6>
                                    <p class="small text-muted mb-0">Adherence to MAS Technology Risk Management (TRM) guidelines and penetration testing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3"><i class="fa-solid fa-calculator text-gold me-2"></i> Quick Action</h5>
                        <p class="small text-muted">Assess whether your wallet or gift card system requires full licensing or fits an statutory exemption.</p>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100 mb-2">Schedule SVF Audit</button>
                        <button onclick="switchView('home')" class="btn btn-outline-gold w-100">Back to Overview</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 4: CRYPTO CURRENCY SOLUTION ==================== -->
    <div id="crypto-solution" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Crypto Currency Regulatory Solution</h1>
                <p class="mb-0 opacity-75">Digital Payment Token (DPT) compliance, token issuance, and MAS regulatory framework.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-coins me-2"></i> DPT Service Licensing</span>
                        <h3 class="fw-bold mb-3">Crypto Asset Compliance in Singapore</h3>
                        <p>Singapore is a global hub for regulated digital asset businesses. MAS regulates entities dealing in Digital Payment Tokens (DPT) with stringent focus on consumer protection, AML/CFT, and cybersecurity.</p>
                        <ul class="lh-lg">
                            <li>Legal Classification Opinions for Tokens (Utility vs Security vs DPT)</li>
                            <li>Travel Rule (MAS Notice PS-N02) system integration</li>
                            <li>Fit and Proper testing for Web3 founders and directors</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">Need Crypto Licensing?</h5>
                        <p class="small text-muted">Consult our specialized Web3 compliance team.</p>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Book Web3 Consultation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 5: CMS LICENSE ==================== -->
    <div id="cms-license" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Capital Markets Services (CMS) License</h1>
                <p class="mb-0 opacity-75">Securities and Futures Act (SFA) licensing for fund management and financial advisory.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-chart-pie me-2"></i> SFA Governance</span>
                        <h3 class="fw-bold mb-3">CMS License Categories</h3>
                        <p>A Capital Markets Services (CMS) license is required under the Securities and Futures Act (SFA) to carry out regulated activities including Fund Management, Dealing in Capital Markets Products, and Product Financing.</p>
                        <div class="p-3 bg-light rounded border mb-3">
                            <h6 class="fw-bold">Regulated CMS Scope:</h6>
                            <ul class="mb-0 small text-muted">
                                <li>Registered Fund Management Company (RFMC) or Licensed FMC (LFMC)</li>
                                <li>Real Estate Investment Trust (REIT) Management</li>
                                <li>Advising on Corporate Finance</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">CMS Application</h5>
                        <p class="small text-muted">Turnkey assistance for representative filings and MAS interviews.</p>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Contact CMS Specialist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 6: FINTECH BUSINESS ==================== -->
    <div id="fintech-business" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">FinTech Business Advisory & Sandbox</h1>
                <p class="mb-0 opacity-75">Scaling financial technology innovations under MAS Regulatory Sandbox protocols.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-microchip me-2"></i> Innovation & Sandbox</span>
                        <h3 class="fw-bold mb-3">MAS Regulatory Sandbox Express</h3>
                        <p>Test innovative financial products and services in a controlled environment with regulatory relaxation. We help startups apply for Sandbox Express for fast-track approvals within 21 days.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">FinTech Consultation</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Apply for Sandbox</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 7: NFT BUSINESS SETUP ==================== -->
    <div id="nft-business" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">NFT Business Structuring & Legal Setup</h1>
                <p class="mb-0 opacity-75">Intellectual property rights, marketplace terms, and compliance governance.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-cubes me-2"></i> Digital Asset & IP</span>
                        <h3 class="fw-bold mb-3">NFT Marketplace & Creator Governance</h3>
                        <p>Establishing Non-Fungible Token platforms requires clear IP assignment contracts, secondary royalty frameworks, and verified compliance checks ensuring tokens do not constitute securities under the SFA.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">NFT Legal Assessment</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Get Opinion Letter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 8: CRYPTO WALLET & EXCHANGE ==================== -->
    <div id="crypto-wallet" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Crypto Wallet & Exchange Licensing</h1>
                <p class="mb-0 opacity-75">Digital Payment Token exchange infrastructure and custodial wallet compliance.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-network-wired me-2"></i> Custody & Exchange Mandate</span>
                        <h3 class="fw-bold mb-3">MAS Custody & Exchange Mandates</h3>
                        <p>Operating a cryptocurrency exchange or custodial wallet service in Singapore requires a Major Payment Institution (MPI) DPT license. Strict user asset segregation and cold-storage security rules apply.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">Exchange Licensing</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Consult Exchange Legal Team</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 9: RESIDENT DIRECTOR ==================== -->
    <div id="resident-director" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Nominee Resident Director Services</h1>
                <p class="mb-0 opacity-75">Fulfilling statutory requirements under Section 145 of the Singapore Companies Act.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-user-shield me-2"></i> ACRA Statutory Requirement</span>
                        <h3 class="fw-bold mb-3">Professional Local Nominee Director Provision</h3>
                        <p>Every company registered in Singapore must have at least one director who is ordinarily resident in Singapore. We provide qualified, experienced local resident directors to ensure statutory compliance while you retain full commercial control.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">Director Provision</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Request Nominee Director</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 10: CORPORATE FINANCE QUERY ==================== -->
    <div id="corporate-finance-query" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Corporate Finance Solutions Advisory</h1>
                <p class="mb-0 opacity-75">Evaluating M&A, cross-border restructuring, and private equity options.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-handshake me-2"></i> Strategic Financing</span>
                        <h3 class="fw-bold mb-3">Do You Need Corporate Finance Support?</h3>
                        <p>We advise growth-stage enterprises and global companies expanding into Asia on debt financing, strategic M&A execution, and statutory corporate advisory in Singapore.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">Corporate Finance Consultation</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Speak to M&A Advisor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 11: SGX LISTING ==================== -->
    <div id="sgx-listing" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Listing on Singapore Exchange (SGX)</h1>
                <p class="mb-0 opacity-75">Mainboard and Catalist pre-IPO listing readiness and sponsor advisory.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-chart-line me-2"></i> Public Equity Capital Markets</span>
                        <h3 class="fw-bold mb-3">SGX Listing & Pre-IPO Structuring</h3>
                        <p>Listing on SGX provides access to international capital. We assist companies in corporate restructuring, financial auditing standards alignment, and liaison with accredited SGX Catalist Sponsors.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">IPO Readiness Check</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Book IPO Evaluation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 12: FINANCIAL COMPANY ==================== -->
    <div id="financial-company" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Financial Company Registration & Setup</h1>
                <p class="mb-0 opacity-75">Governance under the Singapore Finance Companies Act.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-building-columns me-2"></i> Banking & Credit Regulatory</span>
                        <h3 class="fw-bold mb-3">Finance Company Licensing Guidelines</h3>
                        <p>Full advisory on establishing merchant banks, commercial credit providers, and licensed finance companies operating under MAS regulatory supervision.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">Finance Co. Setup</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Contact Banking Specialist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 13: CRYPTO SOLUTIONS ADVANCED ==================== -->
    <div id="crypto-solutions-adv" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Crypto Currency Solutions (Advanced)</h1>
                <p class="mb-0 opacity-75">Institutional VASP risk frameworks, DeFi protocol compliance, and stablecoin licensing.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-shield-cat me-2"></i> Institutional Web3 Compliance</span>
                        <h3 class="fw-bold mb-3">Enterprise Digital Token Architecture</h3>
                        <p>Comprehensive solutions for institutional cryptocurrency funds, cross-border stablecoin issuers, and decentralized finance (DeFi) operational structures in Singapore.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">Advanced Web3 Audit</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Schedule VASP Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== VIEW 14: CORPORATE FINANCE SOLUTIONS ==================== -->
    <div id="corporate-finance-solutions" class="app-view">
        <div class="page-header-banner">
            <div class="container">
                <h1 class="fw-bold">Corporate Finance & Capital Solutions</h1>
                <p class="mb-0 opacity-75">Structured debt, equity syndication, and Singapore tax incentives.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-card-box">
                        <span class="mas-badge"><i class="fa-solid fa-sack-dollar me-2"></i> Strategic Capital</span>
                        <h3 class="fw-bold mb-3">Capital Raising & Tax Optimization</h3>
                        <p>Full support for private placement memorandum (PPM) drafting, venture debt structuring, and applying for EDB / Enterprise Singapore tax relief schemes.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-card-box bg-light">
                        <h5 class="fw-bold mb-3">Capital Solutions</h5>
                        <button onclick="switchView('home', 'contact')" class="btn btn-gold w-100">Request Financial Brief</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ROOT_PATH . '/singapore/elements/footer.php'; ?>