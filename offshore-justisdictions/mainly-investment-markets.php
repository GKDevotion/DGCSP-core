<?php include('elements/header.php'); ?>

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

        /* Asset Cards */
        .asset-card {
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .asset-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .card-header-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background-color: var(--gold-light);
            color: var(--gold-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 20px;
            transition: var(--transition);
        }

        .asset-card:hover .card-header-icon {
            background-color: var(--gold-primary);
            color: var(--white);
            transform: scale(1.08) rotate(-5deg);
        }

        .item-list {
            list-style: none;
            padding: 0;
            margin: 15px 0 0;
        }

        .item-list li {
            padding: 8px 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.08);
            font-size: 0.92rem;
        }

        .item-list li:last-child {
            border-bottom: none;
        }

        .item-list strong {
            color: var(--text-dark);
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
                    <span class="gold-badge"><i class="fa-solid fa-chart-line me-2"></i>Module 2: International Markets</span>
                    <h1 class="display-4 fw-bold mb-3">Mainly Investment Markets</h1>
                    <p class="lead mb-0 text-light opacity-75">
                        Discover the five primary asset classes leveraged in international wealth management to optimize portfolio yield, mitigate sovereign risk, and eliminate friction taxes.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container py-3">

            <!-- Intro Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12">
                    <div class="p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                        <p class="fs-5 mb-0 text-dark font-weight-normal">
                            Portfolio and passive income dominate international wealth management. Offshore financial centers optimize these specific assets by eliminating or reducing local withholding taxes, capital gains taxes, and inheritance taxes. The investment market splits into five primary asset classes:
                        </p>
                    </div>
                </div>
            </div>

            <!-- 5 Asset Classes Grid -->
            <div class="row g-4 mb-5">
                
                <!-- 1. Public Equities (Stocks) -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="asset-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h4 class="fw-bold mb-2">1. Public Equities (Stocks)</h4>
                        <p class="text-secondary small mb-2">Liquid equity vehicles accessed via global stock exchanges.</p>
                        
                        <ul class="item-list">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Global ETFs:</strong> Trade baskets of international companies through single liquid funds.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Blue-Chip Stocks:</strong> Buy direct shares in established, multinational corporations.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Emerging Markets:</strong> Capture high growth in developing economies (e.g., Southeast Asia).</li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Fixed Income and Debt Instruments -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="asset-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <h4 class="fw-bold mb-2">2. Fixed Income & Debt</h4>
                        <p class="text-secondary small mb-2">Predictable yield generation hedging against volatility.</p>
                        
                        <ul class="item-list">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Eurobonds:</strong> Invest in bonds issued in a currency different from the country of origin.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Sovereign Debt:</strong> Buy high-yield government bonds in economically stable jurisdictions.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Corporate Bonds:</strong> Secure predictable yields from major international companies.</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Alternative Investments -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="asset-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <h4 class="fw-bold mb-2">3. Alternative Investments</h4>
                        <p class="text-secondary small mb-2">Private market vehicles generating asymmetric returns.</p>
                        
                        <ul class="item-list">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Private Equity:</strong> Fund high-growth startup or mid-market companies before they go public.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Venture Capital:</strong> Target early-stage tech, fintech and biotech firms globally.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Hedge Funds:</strong> Utilize advanced arbitrage strategies to profit in volatile markets.</li>
                        </ul>
                    </div>
                </div>

                <!-- 4. Real Estate and Hard Assets -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="asset-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <h4 class="fw-bold mb-2">4. Real Estate & Hard Assets</h4>
                        <p class="text-secondary small mb-2">Tangible asset holding combining security with capital appreciation.</p>
                        
                        <ul class="item-list">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Golden Visa Property:</strong> Purchase physical real estate to secure legal foreign residency.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>REITs:</strong> Earn fractional real estate distributions without managing local property laws.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Precious Metals:</strong> Store physical gold or silver in highly secure offshore vaults.</li>
                        </ul>
                    </div>
                </div>

                <!-- 5. Private Credit and Cash Derivatives -->
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="asset-card">
                        <div class="card-header-icon">
                            <i class="fa-solid fa-vault"></i>
                        </div>
                        <h4 class="fw-bold mb-2">5. Private Credit & Cash Derivatives</h4>
                        <p class="text-secondary small mb-2">Capital preservation and custom yield structures.</p>
                        
                        <ul class="item-list">
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>Structured Notes:</strong> Access customized financial instruments tailored to specific risk tolerances.</li>
                            <li><i class="fa-solid fa-circle-check text-warning me-2"></i><strong>High-Yield Cash Deposits:</strong> Move liquidity into foreign banks offering superior interest rates.</li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Asset Allocation Strategy Matrix Table -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12">
                    <h3 class="fw-bold mb-4">Offshore Asset Allocation Matrix</h3>
                    <div class="table-responsive">
                        <table class="table table-custom">
                            <thead>
                                <tr>
                                    <th>Asset Class</th>
                                    <th>Primary Tax Efficiency</th>
                                    <th>Liquidity Profile</th>
                                    <th>Typical Offshore Objective</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Public Equities</strong></td>
                                    <td>0% local capital gains tax</td>
                                    <td>High (Daily)</td>
                                    <td>Long-term capital growth & dividend reinvestment</td>
                                </tr>
                                <tr>
                                    <td><strong>Fixed Income</strong></td>
                                    <td>Exemption from local withholding interest tax</td>
                                    <td>Moderate</td>
                                    <td>Steady cash flow & currency hedging</td>
                                </tr>
                                <tr>
                                    <td><strong>Alternative Investments</strong></td>
                                    <td>Tax-deferred growth in private funds</td>
                                    <td>Low (3–7 yr lockups)</td>
                                    <td>Alpha generation & early startup access</td>
                                </tr>
                                <tr>
                                    <td><strong>Real Estate & Hard Assets</strong></td>
                                    <td>Estate tax protection via holding companies</td>
                                    <td>Low</td>
                                    <td>Residency rights & inflation defense</td>
                                </tr>
                                <tr>
                                    <td><strong>Private Credit & Derivatives</strong></td>
                                    <td>Zero local tax on derivative income</td>
                                    <td>Variable</td>
                                    <td>Principal protection & enhanced yield</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Regulatory Advisory Banner -->
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    <div class="advisory-card">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-shield-halved fs-3 text-warning mt-1"></i>
                            <div>
                                <h5 class="fw-bold mb-2">Regulatory & Risk Management Note</h5>
                                <p class="text-muted small mb-0">
                                    When investing across offshore markets, verify that custodian banks, private funds, and brokers comply with global standards (such as CRS, FATCA, and MiFID II). While offshore structures reduce local withholding or estate taxes, domestic tax obligations may still apply under your home country's worldwide income rules.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php include('elements/footer.php'); ?>