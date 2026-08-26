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

        /* Pros Card Style */
        .pro-card {
            background: var(--white);
            border-radius: 16px;
            padding: 25px;
            border: 1px solid var(--gold-border);
            border-top: 4px solid #198754;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
        }

        .pro-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .pro-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 16px;
        }

        /* Cons Card Style */
        .con-card {
            background: var(--white);
            border-radius: 16px;
            padding: 25px;
            border: 1px solid var(--gold-border);
            border-top: 4px solid #dc3545;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
        }

        .con-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .con-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background-color: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 16px;
        }
    </style>
    
    <!-- Hero Header -->
    <header class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                    <span class="gold-badge"><i class="fa-solid fa-scale-balanced me-2"></i>Module 5: Strategic Trade-Offs</span>
                    <h1 class="display-4 fw-bold mb-3">Pros & Cons of Offshore Setup</h1>
                    <p class="lead mb-0 text-light opacity-75">
                        Evaluating whether to establish an offshore corporate or investment structure requires balancing structural advantages against strict modern compliance demands.
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
                    <div class="p-4 p-md-5 rounded-4 bg-white border shadow-sm text-center">
                        <p class="fs-5 mb-0 text-dark">
                            A successful offshore strategy maximizes core advantages while carefully accounting for compliance, operational, and maintenance trade-offs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pros Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fa-solid fa-thumbs-up"></i>
                        </div>
                        <h3 class="fw-bold mb-0">Pros of Offshore Setup</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pro-card">
                        <div class="pro-icon">
                            <i class="fa-solid fa-percent"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Tax Optimization</h5>
                        <p class="text-muted small mb-0">Legal minimization of corporate, capital gains, withholding, and inheritance taxes depending on your structure and home tax laws.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pro-card">
                        <div class="pro-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Asset Protection</h5>
                        <p class="text-muted small mb-0">Wealth is insulated from aggressive local lawsuits, political instability, domestic economic crises, or arbitrary asset seizures.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pro-card">
                        <div class="pro-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Global Market Access</h5>
                        <p class="text-muted small mb-0">Direct entry to international stock markets, foreign currency accounts, and cross-border real estate opportunities that might be restricted domestically.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="pro-card">
                        <div class="pro-icon">
                            <i class="fa-solid fa-coins"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Currency Hedging</h5>
                        <p class="text-muted small mb-0">Capital can be held in stable currencies (USD, EUR, SGD, CHF) to protect wealth against local currency inflation and devaluation.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="pro-card">
                        <div class="pro-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Streamlined Fast Setup</h5>
                        <p class="text-muted small mb-0">Simple holding entities in hubs like the BVI can be fully incorporated online in less than two weeks with no initial share capital.</p>
                    </div>
                </div>
            </div>

            <!-- Cons Section -->
            <div class="row" data-aos="fade-up">
                <div class="col-12 mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fa-solid fa-thumbs-down"></i>
                        </div>
                        <h3 class="fw-bold mb-0">Cons of Offshore Setup</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="con-card">
                        <div class="con-icon">
                            <i class="fa-solid fa-receipt"></i>
                        </div>
                        <h5 class="fw-bold mb-2">High Maintenance Costs</h5>
                        <p class="text-muted small mb-0">Initial setup is cheap, but mandatory annual renewals, registered agent fees, local accounting, and economic substance compliance add up quickly.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="con-card">
                        <div class="con-icon">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Banking Delays</h5>
                        <p class="text-muted small mb-0">Opening an offshore corporate bank account is notoriously difficult, taking anywhere from 1 to 3 months with high rejection rates.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="con-card">
                        <div class="con-icon">
                            <i class="fa-solid fa-file-contract"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Home Country Reporting</h5>
                        <p class="text-muted small mb-0">Strict rules like FATCA (for U.S. citizens) and the Common Reporting Standard (CRS) mean your offshore income is automatically reported to your home tax authority.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="con-card">
                        <div class="con-icon">
                            <i class="fa-solid fa-magnifying-glass-dollar"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Enhanced Scrutiny</h5>
                        <p class="text-muted small mb-0">Operating out of traditional offshore havens can trigger audits from your domestic tax agency and cause friction with mainstream onshore clients.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="con-card">
                        <div class="con-icon">
                            <i class="fa-solid fa-door-open"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Complex Exit Strategies</h5>
                        <p class="text-muted small mb-0">Liquidating an offshore entity or moving capital back home requires meticulous legal structuring to avoid heavy repatriation taxes.</p>
                    </div>
                </div>
            </div>

            <?php include ROOT_PATH . '/elements/offshore-jurisdiction-menu.php'; ?>
        </div>
    </main>


<?php include ROOT_PATH . '/elements/footer.php'; ?>