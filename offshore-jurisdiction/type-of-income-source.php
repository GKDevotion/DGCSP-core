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

        /* Income Cards */
        .income-card {
            background: var(--white);
            border-radius: 16px;
            padding: 35px 30px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .income-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .card-header-icon {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            background-color: var(--gold-light);
            color: var(--gold-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
            transition: var(--transition);
        }

        .income-card:hover .card-header-icon {
            background-color: var(--gold-primary);
            color: var(--white);
            transform: scale(1.08) rotate(-5deg);
        }

        .item-list {
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
        }

        .item-list li {
            padding: 10px 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.08);
            font-size: 0.93rem;
        }

        .item-list li:last-child {
            border-bottom: none;
        }

        .item-list strong {
            color: var(--text-dark);
        }

        /* Offshore Insight Callout Box */
        .offshore-tag {
            margin-top: auto;
            background: var(--gold-light);
            border-left: 3px solid var(--gold-primary);
            padding: 12px 15px;
            border-radius: 0 8px 8px 0;
            font-size: 0.85rem;
            color: var(--gold-hover);
            font-weight: 500;
        }

        /* Comparison Table */
        .table-custom {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gold-border);
        }

        .table-custom th {
            background-color: #1e1b18;
            color: var(--gold-primary);
            font-weight: 600;
            padding: 16px 20px;
            border: none;
        }

        .table-custom td {
            padding: 16px 20px;
            vertical-align: middle;
            border-color: rgba(0, 0, 0, 0.05);
            font-size: 0.92rem;
        }

        /* Advisory Banner */
        .advisory-card {
            background: linear-gradient(135deg, var(--gray-color) 0%, var(--gold-light) 100%);
            border-left: 4px solid var(--gold-primary);
            border-radius: 12px;
            padding: 30px;
        }
    </style>


    <!-- Hero Header -->
    <header class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                    <span class="gold-badge"><i class="fa-solid fa-layer-group me-2"></i>Module 1: Offshore Framework</span>
                    <h1 class="display-4 fw-bold mb-3">Types of Income Sources</h1>
                    <p class="lead mb-0 text-light opacity-75">
                        Categorizing how your wealth is generated (Active, Passive, or Portfolio) is the essential first step to structuring legal international tax optimization, foreign entities, and cross-border asset protection.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container py-3">

            <!-- Intro Overview -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12">
                    <div class="p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                        <p class="fs-5 mb-0 text-dark font-weight-normal">
                            Income sources are generally categorized into three main types based on how they are earned, managed, and taxed: <strong>Active</strong>, <strong>Passive</strong>, and <strong>Portfolio</strong> income. Understanding these distinctions is critical when setting up offshore corporations, trusts, or tax residencies, as foreign tax treaties (CFC rules, OECD guidelines) treat each classification differently.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 3 Main Categories Grid -->
            <div class="row g-4 mb-5">
                
                <!-- 1. Active Income Card -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="income-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <h4 class="fw-bold mb-2">1. Active Income</h4>
                        <span class="text-muted small mb-3">Earned Income</span>
                        <p class="text-secondary small">
                            Money received in direct exchange for your time, physical labor, or ongoing services. If you stop working, this income stream halts.
                        </p>
                        
                        <ul class="item-list mb-4">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Wages & Salaries:</strong> Regular pay from an employer.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Hourly Wages:</strong> Compensation calculated by hours worked.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Bonuses & Tips:</strong> Performance or service-based extra cash.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Commissions:</strong> Percentage-based sales earnings.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Active Business Income:</strong> Profits from a company you physically manage daily.</li>
                        </ul>

                        <div class="offshore-tag">
                            <i class="fa-solid fa-lightbulb me-1"></i> <strong>Offshore Note:</strong> Subject to local physical presence rules & foreign earned income exclusions (FEIE).
                        </div>
                    </div>
                </div>

                <!-- 2. Passive Income Card -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="income-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-house-laptop"></i>
                        </div>
                        <h4 class="fw-bold mb-2">2. Passive Income</h4>
                        <span class="text-muted small mb-3">Unearned Asset Cash Flow</span>
                        <p class="text-secondary small">
                            Money generated from enterprises or assets where you are not materially or actively involved in the day-to-day operations.
                        </p>
                        
                        <ul class="item-list mb-4">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Rental Income:</strong> Cash flow from leasing real estate properties.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Digital Products:</strong> Royalties from e-books, courses, or software (SaaS).</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Business Royalties:</strong> Licensing intellectual property, patents, or franchises.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Silent Partnerships:</strong> Business profits funded by you but run by third parties.</li>
                        </ul>

                        <div class="offshore-tag">
                            <i class="fa-solid fa-lightbulb me-1"></i> <strong>Offshore Note:</strong> Ideal for holding IP or real estate in zero-tax IP box or holding regimes.
                        </div>
                    </div>
                </div>

                <!-- 3. Portfolio Income Card -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="income-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h4 class="fw-bold mb-2">3. Portfolio Income</h4>
                        <span class="text-muted small mb-3">Investment & Paper Capital</span>
                        <p class="text-secondary small">
                            Income generated by buying, holding, or liquidating paper or financial assets. Offshore entities heavily target this stream for tax optimization.
                        </p>
                        
                        <ul class="item-list mb-4">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Dividends:</strong> Periodic corporate profit distributions to shareholders.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Interest:</strong> Returns earned from bonds, savings, or lending products.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Capital Gains:</strong> Net gains from selling stocks, crypto, or assets above cost.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Annuities:</strong> Insurance-backed payout streams from lump-sum deposits.</li>
                        </ul>

                        <div class="offshore-tag">
                            <i class="fa-solid fa-lightbulb me-1"></i> <strong>Offshore Note:</strong> Frequently shielded using offshore trusts, foundations, or private wealth funds.
                        </div>
                    </div>
                </div>

            </div>

            <!-- Detailed Structural Comparison Table -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12">
                    <h3 class="fw-bold mb-4">Offshore Tax & Strategic Breakdown</h3>
                    <div class="table-responsive">
                        <table class="table table-custom">
                            <thead>
                                <tr>
                                    <th>Income Classification</th>
                                    <th>Primary Taxation Risk</th>
                                    <th>Best Offshore Vehicle</th>
                                    <th>Key Structuring Goal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Active Income</strong></td>
                                    <td>High (Personal income tax & local social security)</td>
                                    <td>Foreign Corporation (IBC) / Nomad Tax Residence</td>
                                    <td>Qualify for Foreign Earned Exemption or low corporate tax rates.</td>
                                </tr>
                                <tr>
                                    <td><strong>Passive Income</strong></td>
                                    <td>Moderate (Withholding taxes on cross-border royalties)</td>
                                    <td>Offshore IP Holding Company / Special License Co.</td>
                                    <td>Protect intellectual property rights & utilize favorable tax treaties.</td>
                                </tr>
                                <tr>
                                    <td><strong>Portfolio Income</strong></td>
                                    <td>Variable (Capital gains & dividend withholding taxes)</td>
                                    <td>Offshore Trust / Foundation / Private Investment Co. (PIC)</td>
                                    <td>Defer or eliminate capital gains taxes legally and protect equity from lawsuits.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tax Compliance Disclaimer -->
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    <div class="advisory-card">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-shield-cat fs-3 text-warning mt-1"></i>
                            <div>
                                <h5 class="fw-bold mb-2">Important Compliance Note on Offshore Income</h5>
                                <p class="text-muted small mb-0">
                                    Categorizing your income correctly is essential for maintaining compliance with Controlled Foreign Corporation (CFC) laws, Passive Foreign Investment Company (PFIC) rules, and international reporting frameworks such as CRS (Common Reporting Standard) and FATCA. Always consult a qualified cross-border tax specialist before setting up offshore accounts or structures.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include ROOT_PATH . '/elements/offshore-jurisdiction-menu.php'; ?>
        </div>
    </main>

<?php include ROOT_PATH . '/elements/footer.php'; ?>