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
            padding: 18px 20px;
            border: none;
        }

        .table-custom td {
            padding: 18px 20px;
            vertical-align: middle;
            border-color: rgba(0, 0, 0, 0.05);
            font-size: 0.92rem;
        }

        /* Bottleneck Box */
        .bottleneck-card {
            background: var(--white);
            border-radius: 16px;
            padding: 25px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
        }

        .bottleneck-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .bottleneck-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background-color: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 18px;
        }

        /* Golden Visa Cards */
        .visa-card {
            background: var(--white);
            border-radius: 16px;
            padding: 28px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .visa-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .visa-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background-color: var(--gold-light);
            color: var(--gold-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 18px;
        }

        .amount-tag {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--gold-primary);
            margin-bottom: 8px;
        }

        /* Note Banner */
        .note-banner {
            background: var(--gold-light);
            border-left: 4px solid var(--gold-primary);
            border-radius: 8px;
            padding: 16px 20px;
            font-size: 0.88rem;
            color: #555;
        }
    </style>
    
    <!-- Hero Header -->
    <header class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                    <span class="gold-badge"><i class="fa-solid fa-clock-dollar me-2"></i>Module 4: Capital & Timelines</span>
                    <h1 class="display-4 fw-bold mb-3">Minimum Setup Investment & Duration</h1>
                    <p class="lead mb-0 text-light opacity-75">
                        The initial cost and setup time vary drastically depending on whether you choose a simple tax haven or a premium, reputation-forward hybrid financial hub.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container py-3">

            <!-- Cost & Timeline Breakdown Table Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 mb-3">
                    <h3 class="fw-bold mb-2">Cost & Timeline Breakdown by Destination</h3>
                    <p class="text-muted">The figures below represent standard entry-level requirements for incorporating a corporate entity or setting up a holding structure:</p>
                </div>

                <div class="col-12 mb-3">
                    <div class="table-responsive">
                        <table class="table table-custom">
                            <thead>
                                <tr>
                                    <th>Jurisdiction</th>
                                    <th>Minimum Setup Investment (USD)</th>
                                    <th>Total Setup Duration</th>
                                    <th>Required Local Capital</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>British Virgin Islands (BVI)</strong></td>
                                    <td><strong>$2,500 – $4,500</strong></td>
                                    <td><strong>1 – 2 weeks</strong></td>
                                    <td>$0 (No minimum)</td>
                                </tr>
                                <tr>
                                    <td><strong>Cayman Islands</strong></td>
                                    <td><strong>$6,000 – $12,000</strong></td>
                                    <td><strong>2 – 3 weeks</strong></td>
                                    <td>$0 (No minimum)</td>
                                </tr>
                                <tr>
                                    <td><strong>UAE (Dubai Free Zones)</strong></td>
                                    <td><strong>$5,500 – $15,000</strong></td>
                                    <td><strong>2 – 4 weeks</strong></td>
                                    <td>$0 – $13,500 (Varies by zone)</td>
                                </tr>
                                <tr>
                                    <td><strong>Singapore</strong></td>
                                    <td><strong>$4,000 – $8,000</strong></td>
                                    <td><strong>1 – 3 weeks</strong></td>
                                    <td>$1 (Fully paid-up share capital)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12">
                    <div class="note-banner">
                        <i class="fa-solid fa-circle-info me-2 text-warning"></i>
                        <strong>Note:</strong> Setup investments include government registration fees, local registered agent fees, and corporate secretarial costs for the first year. They do not include ongoing annual renewal fees.
                    </div>
                </div>
            </div>

            <!-- Critical Bottlenecks Section -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 mb-3">
                    <h3 class="fw-bold mb-2">Critical Bottlenecks That Extend the Duration</h3>
                    <p class="text-muted">While incorporating a business can take less than a week, making the structure operational takes significantly longer due to two main hurdles:</p>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="bottleneck-card">
                        <div class="bottleneck-icon">
                            <i class="fa-solid fa-piggy-bank"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Offshore Corporate Banking</h5>
                        <div class="badge bg-danger mb-3">4 to 12 weeks</div>
                        <p class="text-muted small mb-0">
                            Opening a high-tier corporate bank account is the longest part of the process. International banks require exhaustive documentation, background checks, and proof of wealth source before approving accounts.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bottleneck-card">
                        <div class="bottleneck-icon">
                            <i class="fa-solid fa-building-user"></i>
                        </div>
                        <div class="badge bg-danger mb-3">2 to 4 weeks</div>
                        <h5 class="fw-bold mb-2">Economic Substance Proof</h5>
                        <p class="text-muted small mb-0">
                            If your entity falls under local economic substance laws, hiring a local director or leasing a physical office desk space adds extra time to your setup window.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Golden Visa & Residency Alternatives -->
            <div class="row" data-aos="fade-up">
                <div class="col-12 mb-3">
                    <h3 class="fw-bold mb-2">Golden Visa & Residency-by-Investment Alternatives</h3>
                    <p class="text-muted">If your goal is to secure physical residency or a second passport alongside your offshore investment, the minimum entry points shift from corporate setup fees to substantial capital placement:</p>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="visa-card">
                        <div class="visa-icon">
                            <i class="fa-solid fa-passport"></i>
                        </div>
                        <h5 class="fw-bold mb-1">UAE (Dubai Golden Visa)</h5>
                        <div class="amount-tag">$545,000 <span class="fs-6 text-muted font-weight-normal">(AED 2 million)</span></div>
                        <p class="text-muted small mb-0">
                            Requires a minimum real estate investment to secure a 10-year renewable residency visa.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="visa-card">
                        <div class="visa-icon">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <h5 class="fw-bold mb-1">Singapore (Global Investor Program)</h5>
                        <div class="amount-tag">$7.5 million <span class="fs-6 text-muted font-weight-normal">(SGD 10 million)</span></div>
                        <p class="text-muted small mb-0">
                            Requires a minimum investment into a new business or an approved GIP fund for immediate permanent residency.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="visa-card">
                        <div class="visa-icon">
                            <i class="fa-solid fa-earth-americas"></i>
                        </div>
                        <h5 class="fw-bold mb-1">Caribbean Passports</h5>
                        <div class="amount-tag">Starting at $200,000</div>
                        <p class="text-muted small mb-0">
                            Antigua, Dominica, St. Lucia require a minimum donation or real estate purchase for direct citizenship, taking 4 to 6 months to process.
                        </p>
                    </div>
                </div>
            </div>

            <?php include ROOT_PATH . '/elements/offshore-jurisdiction-menu.php'; ?>
        </div>
    </main>

<?php include ROOT_PATH . '/elements/footer.php'; ?>