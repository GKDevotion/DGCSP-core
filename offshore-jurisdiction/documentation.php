<?php 
require_once __DIR__ . '/../config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <style>
     
        /* Hero Banner */
        .hero-banner {
            background: radial-gradient(circle at 80% 20%, rgba(184, 150, 85, 0.25) 0%, transparent 40%),
                        radial-gradient(circle at 10% 80%, rgba(181, 141, 61, 0.2) 0%, transparent 40%),
                        linear-gradient(135deg, #111111 0%, #1e1b18 100%);
            color: var(--white);
            padding: 90px 0 70px;
        }

        .gold-badge {
            background: rgba(184, 150, 85, 0.15);
            border: 1px solid var(--gold-primary);
            color: var(--gold-primary);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 20px;
        }

        /* Document Card Style */
        .doc-card {
            background: var(--white);
            border-radius: 16px;
            padding: 25px;
            border: 1px solid var(--gold-border);
            border-left: 4px solid var(--gold-primary);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
        }

        .doc-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .doc-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background-color: var(--gold-light);
            color: var(--gold-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 16px;
        }

        /* Guardrail Warning Card */
        .guardrail-card {
            background: #fffdf9;
            border: 1px solid rgba(184, 150, 85, 0.4);
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow-sm);
        }
    </style>
    
    <!-- Hero Header -->
    <header class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                    <span class="gold-badge"><i class="fa-solid fa-folder-open me-2"></i>Module 6: Compliance & Setup</span>
                    <h1 class="display-4 fw-bold mb-3">Required Documentation</h1>
                    <p class="lead mb-0 text-light opacity-75">
                        To form an offshore company, the required documentation is divided into two distinct categories: <strong>Universal Baseline Documents</strong> required for any corporate entity and <strong>Activity-Specific Licensing Documents</strong> required for regulated sectors like Forex trading or highly specialized IT services.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container py-3">

            <!-- Intro Alert -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12">
                    <div class="p-4 rounded-4 bg-white border shadow-sm d-flex align-items-center gap-3">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-none d-md-flex align-items-center justify-content-center" style="width: 50px; height: 50px; flex-shrink: 0;">
                            <i class="fa-solid fa-shield-halved fs-4"></i>
                        </div>
                        <p class="mb-0 text-dark">
                            <strong>Global AML Frameworks:</strong> Because offshore jurisdictions must comply with global anti-money laundering (AML) frameworks, you cannot obscure the identities of the true owners.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 1: Universal Baseline Documents -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 mb-3">
                    <h3 class="fw-bold mb-1">1. Universal Baseline Documents <span class="text-muted fs-6 fw-normal">(Required for Everyone)</span></h3>
                    <p class="text-muted">Regardless of your industry (IT, Forex, E-commerce, or Holding), every director, shareholder, and Ultimate Beneficial Owner (UBO) must provide these certified documents:</p>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-passport"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Certified Passport Copy</h5>
                        <p class="text-muted small mb-0">High-resolution color copy of a valid passport, certified or notarized by an approved professional (lawyer, notary public, or CPA).</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Proof of Residential Address</h5>
                        <p class="text-muted small mb-0">A utility bill, landline phone bill, or bank statement issued within the last <strong>3 months</strong> showing your full legal name and physical address.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-file-signature"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Professional Reference Letter</h5>
                        <p class="text-muted small mb-0">A formal letter from a licensed bank, lawyer, or accountant confirming they have known you for at least 1-2 years and that you are in good financial standing.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-file-user"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Detailed Curriculum Vitae (CV)</h5>
                        <p class="text-muted small mb-0">An up-to-date resume outlining your professional background, education, and business experience to justify your capability to run the company.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-piggy-bank"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Source of Wealth / Funds Declaration</h5>
                        <p class="text-muted small mb-0">A signed statement backed by evidence (tax returns, dividend statements, property sale contracts, or corporate financial records) proving your startup capital was legally obtained.</p>
                    </div>
                </div>
            </div>

            <!-- Section 2: Forex & Brokerage -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 mb-3">
                    <h3 class="fw-bold mb-1">2. Specialized Documentation for Forex & Brokerage Companies</h3>
                    <p class="text-muted">Forex, crypto trading, and financial brokerage models face the highest level of regulatory scrutiny. If you are launching a Forex entity, you must provide a comprehensive regulatory application package alongside your personal documents:</p>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Comprehensive Business Plan</h5>
                        <p class="text-muted small mb-0">A highly detailed blueprint outlining your operational model, marketing strategies, target markets, and 3-to-5-year financial projections.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <h5 class="fw-bold mb-2">AML & CFT Policy Manual</h5>
                        <p class="text-muted small mb-0">A strict, written internal compliance protocol explaining how your company will screen clients (KYC), monitor transactions, and report suspicious activities.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Fit and Proper Questionnaires</h5>
                        <p class="text-muted small mb-0">Exhaustive personal disclosure questionnaires completed by all directors and shareholders to prove they have clean criminal records and no history of financial bankruptcy.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-building-shield"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Clean Criminal Record Certificates</h5>
                        <p class="text-muted small mb-0">Recent police clearance certificates or background check reports from your home country and any country where you have lived for the past 5+ years.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-vault"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Proof of Minimum Paid-Up Capital</h5>
                        <p class="text-muted small mb-0">Bank statements or escrow certificates proving you have deposited the legally required capital into a local bank account (ranging from <strong>$50,000</strong> in Vanuatu to <strong>$730,000+</strong> in Cyprus or the UAE).</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Professional Qualifications & Financial Licenses</h5>
                        <p class="text-muted small mb-0">Degrees, certifications, or past employment records proving your senior management has direct experience in regulated financial markets.</p>
                    </div>
                </div>
            </div>

            <!-- Section 3: IT & Tech -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 mb-3">
                    <h3 class="fw-bold mb-1">3. Specialized Documentation for IT, Tech & Software Companies</h3>
                    <p class="text-muted">While IT and software businesses are generally unregulated and easier to set up, they face strict modern scrutiny regarding Intellectual Property (IP) and digital data privacy:</p>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-copyright"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Intellectual Property (IP) Assignment Agreements</h5>
                        <p class="text-muted small mb-0">Legal contracts showing that any software, source code, or patents are formally owned by the offshore corporate entity and not by you personally.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Data Protection & GDPR/CCPA Compliance Policies</h5>
                        <p class="text-muted small mb-0">Documented frameworks explaining how your software or IT platform securely handles, stores, and transfers user data globally.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-file-contract"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Standard Service Level Agreements (SLA)</h5>
                        <p class="text-muted small mb-0">Draft templates of your master services agreements, client contracts, and terms of use to prove to offshore banks that your business operates on legitimate commercial billing.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="doc-card">
                        <div class="doc-icon">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Software/Tech Infrastructure Architecture</h5>
                        <p class="text-muted small mb-0">A brief technical overview detailing where your servers are hosted (e.g., AWS, Azure) and how your digital infrastructure is structured to satisfy local economic substance requirements.</p>
                    </div>
                </div>
            </div>

            <!-- Guardrails Section -->
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    <div class="guardrail-card">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="bg-warning bg-opacity-20 text-warning border border-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; flex-shrink: 0;">
                                <i class="fa-solid fa-triangle-exclamation text-dark"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-0 text-dark">Document Preparation & Certification Guardrails</h4>
                                <p class="text-muted small mb-0">Submitting documents incorrectly is the <strong>number one cause of corporate setup rejection and banking delays</strong>. Ensure your paperwork follows these legal protocols:</p>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="p-3 bg-white rounded-3 border h-100">
                                    <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-stamp text-warning me-2"></i>Apostille or Legalization</h6>
                                    <p class="text-muted small mb-0">If your home country is part of the Hague Convention, all notarized documents must bear an <strong>Apostille stamp</strong>. If not, they must be legalized via the ministry of foreign affairs and the embassy of your target jurisdiction.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="p-3 bg-white rounded-3 border h-100">
                                    <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-language text-warning me-2"></i>English Translations</h6>
                                    <p class="text-muted small mb-0">Any document not originally written in English must be translated by a certified, sworn translator and tied directly to the original-language copy.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div class="p-3 bg-white rounded-3 border h-100">
                                    <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-pen-nib text-warning me-2"></i>Clarity of Certification</h6>
                                    <p class="text-muted small mb-0">The certifying notary must explicitly write their full name, official title, contact details, date, and the exact statement: <em>"I hereby certify this to be a true copy of the original document."</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include ROOT_PATH . '/elements/offshore-jurisdiction-menu.php'; ?>
        </div>
    </main>

<?php include ROOT_PATH . '/elements/footer.php'; ?>