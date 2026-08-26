<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <style>

        /* Animated Mesh Background Hero */
        .hero-banner {
            background: radial-gradient(circle at 80% 20%, rgba(184, 150, 85, 0.25) 0%, transparent 40%),
                        radial-gradient(circle at 10% 80%, rgba(181, 141, 61, 0.2) 0%, transparent 40%),
                        linear-gradient(135deg, #111111 0%, #1e1b18 100%);
            color: var(--white);
            padding: 100px 0 80px;
            position: relative;
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

        /* Glassmorphic Hub Cards */
        .hub-card {
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
            z-index: 1;
            height: 100%;
        }

        .hub-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--gold-light), transparent);
            opacity: 0;
            transition: var(--transition);
            z-index: -1;
        }

        .hub-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .hub-card:hover::before {
            opacity: 1;
        }

        .hub-flag {
            width: 48px;
            height: 48px;
            background-color: var(--gold-light);
            color: var(--gold-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 20px;
            transition: var(--transition);
        }

        .hub-card:hover .hub-flag {
            background-color: var(--gold-primary);
            color: var(--white);
            transform: scale(1.1) rotate(-5deg);
        }

        /* Modern Feature Item List */
        .feature-box {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 18px;
            border-radius: 12px;
            background: var(--white);
            border: 1px solid var(--gold-border);
            transition: var(--transition);
            margin-bottom: 16px;
        }

        .feature-box:hover {
            border-color: var(--gold-primary);
            transform: translateX(6px);
            box-shadow: var(--shadow-sm);
        }

        .feature-box .icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: var(--gold-light);
            color: var(--gold-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1rem;
        }

        /* External Link Cards */
        .resource-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--gold-primary);
            font-weight: 600;
            text-decoration: none;
            position: relative;
            padding-bottom: 2px;
        }

        .resource-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--gold-primary);
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        .resource-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Disclaimer Section Banner */
        .disclaimer-card {
            background: linear-gradient(135deg, var(--gray-color) 0%, var(--gold-light) 100%);
            border-left: 4px solid var(--gold-primary);
            border-radius: 12px;
            padding: 35px;
        }
    </style>

    <!-- Hero Header -->
    <header class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
                    <span class="gold-badge"><i class="fa-solid fa-globe me-2"></i>Global Expansion Strategies</span>
                    <h1 class="display-3 fw-bold mb-3">Offshore Jurisdictions</h1>
                    <p class="lead mb-0 text-light opacity-75">
                        Shield your capital from domestic sovereign risk, optimize tax structures, access high-growth global markets, and unlock international residency rights.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container py-4">

            <!-- Intro Quote Banner -->
            <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12">
                    <div class="p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                        <p class="fs-4 mb-0 text-dark fw-light">
                            <i class="fa-solid fa-quote-left text-warning me-3 opacity-50"></i>
                            Living and investing offshore offers a powerful combination of <strong>wealth protection, tax optimization,</strong> and <strong>lifestyle diversification</strong>. Branching out internationally guarantees freedom, privacy, and resilience against local volatility.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Two-Column Section: Invest vs Live -->
            <div class="row g-4 mb-5">
                
                <!-- Why Invest Offshore Column -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <h3 class="fw-bold mb-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-chart-pie text-warning"></i> Why Invest Offshore
                    </h3>

                    <div class="feature-box">
                        <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Asset Protection</h6>
                            <p class="text-muted small mb-0">Insulate your wealth from domestic litigation, local economic crises, or aggressive creditors in top-tier legal systems.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="icon"><i class="fa-solid fa-coins"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Currency Diversification</h6>
                            <p class="text-muted small mb-0">Hold and grow capital in stronger global currencies to hedge against domestic inflation and market volatility.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="icon"><i class="fa-solid fa-globe"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Access to Global Markets</h6>
                            <p class="text-muted small mb-0">Gain entrance into high-yield international asset classes, tech sectors, and real estate markets.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="icon"><i class="fa-solid fa-percent"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Favorable Tax Structures</h6>
                            <p class="text-muted small mb-0">Financial hubs like Cayman Islands or the Bahamas impose little to no capital gains, inheritance, or corporate taxes.</p>
                        </div>
                    </div>
                </div>

                <!-- Why Live Offshore Column -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <h3 class="fw-bold mb-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-plane-departure text-warning"></i> Why Live Offshore
                    </h3>

                    <div class="feature-box">
                        <div class="icon"><i class="fa-solid fa-user-shield"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Privacy and Security</h6>
                            <p class="text-muted small mb-0">Offshore banking and trust structures provide robust personal privacy and financial confidentiality.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="icon"><i class="fa-solid fa-house-chimney-window"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Lifestyle Upgrades</h6>
                            <p class="text-muted small mb-0">Relocate to destinations offering a lower cost of living, superior healthcare, and optimal weather conditions.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="icon"><i class="fa-solid fa-passport"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Residency Programs</h6>
                            <p class="text-muted small mb-0">Gain Golden Visas or residency pathways through real estate or local investment, leading to second passports.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Hubs Section Grid -->
            <div class="pt-4 mb-5">
                <div class="text-center max-width-600 mx-auto mb-5" data-aos="fade-up">
                    <h2 class="fw-bold">Popular Offshore Hubs</h2>
                    <p class="text-muted">Tailored jurisdiction catering to unique financial objectives, privacy demands, and lifestyle goals.</p>
                </div>

                <div class="row g-4">
                    <!-- Switzerland -->
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="hub-card">
                            <div class="hub-flag"><i class="fa-solid fa-vault"></i></div>
                            <h5 class="fw-bold mb-2">Switzerland</h5>
                            <p class="text-muted small mb-0">Renowned for strict banking privacy, world-class wealth management, and unmatched economic stability.</p>
                        </div>
                    </div>

                    <!-- Singapore -->
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="hub-card">
                            <div class="hub-flag"><i class="fa-solid fa-building-columns"></i></div>
                            <h5 class="fw-bold mb-2">Singapore</h5>
                            <p class="text-muted small mb-0">Asia's premier financial capital featuring business-friendly tax policies, security, and infrastructure.</p>
                        </div>
                    </div>

                    <!-- Cayman Islands & Bahamas -->
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="hub-card">
                            <div class="hub-flag"><i class="fa-solid fa-island-tropical"></i></div>
                            <h5 class="fw-bold mb-2">Cayman & Bahamas</h5>
                            <p class="text-muted small mb-0">Famed for zero-tax frameworks on capital gains and corporate income for international investors.</p>
                        </div>
                    </div>

                    <!-- UAE (Dubai) -->
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                        <div class="hub-card">
                            <div class="hub-flag"><i class="fa-solid fa-city"></i></div>
                            <h5 class="fw-bold mb-2">UAE (Dubai)</h5>
                            <p class="text-muted small mb-0">Offers 0% personal income tax, 100% foreign corporate ownership, and world-class luxury expatriate living.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advisory Disclaimer Section -->
            <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12">
                    <div class="disclaimer-card">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-scale-balanced fs-3 text-warning mt-1"></i>
                            <div>
                                <h5 class="fw-bold mb-2">Compliance & Tax Advisory</h5>
                                <p class="text-muted mb-3">
                                    When considering an offshore move, consulting international financial and legal advisors is crucial to ensure full compliance with home-country tax reporting laws.
                                </p>
                                <p class="mb-0">
                                    Learn more with detailed guides from 
                                    <a href="https://www.investopedia.com" target="_blank" class="resource-link me-3">Investopedia <i class="fa-solid fa-arrow-up-right-from-square fs-6"></i></a> 
                                    or consult wealth managers at 
                                    <a href="https://alpenpartners.com" target="_blank" class="resource-link">Alpen Partners <i class="fa-solid fa-arrow-up-right-from-square fs-6"></i></a>.
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