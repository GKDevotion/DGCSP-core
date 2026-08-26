<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <style>
        /* Hero Banner */
        .hero-banner {
            background: linear-gradient(135deg, var(--gold-banner-bg) 0%, var(--gold-hover) 100%);
            color: var(--white);
            padding: 80px 0 60px;
            position: relative;
        }

        /* Section Headings */
        .section-title {
            position: relative;
            padding-bottom: 12px;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--gold-primary);
            border-radius: 2px;
        }

        /* Cards Styling */
        .custom-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 12px;
            padding: 30px;
            height: 100%;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .jurisdiction-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 12px;
            padding: 28px;
            height: 100%;
            transition: var(--transition);
            position: relative;
        }

        .jurisdiction-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        /* Icon Styling */
        .icon-box {
            width: 48px;
            height: 48px;
            background-color: var(--gold-light);
            color: var(--gold-primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        /* Lists */
        .custom-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .custom-list li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .custom-list li::before {
            content: "\F272";
            font-family: "bootstrap-icons";
            position: absolute;
            left: 0;
            top: 0;
            color: var(--gold-primary);
            font-weight: bold;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gold-light);
            border: 1px solid var(--gold-border);
            border-radius: 16px;
            padding: 50px 30px;
        }

        /* Buttons */
        .btn-gold {
            background-color: var(--gold-primary);
            color: var(--white);
            border: none;
            padding: 12px 28px;
            border-radius: 6px;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-gold:hover {
            background-color: var(--gold-hover);
            color: var(--white);
            box-shadow: var(--shadow-sm);
        }

        .btn-outline-gold {
            background-color: transparent;
            color: var(--gold-primary);
            border: 2px solid var(--gold-primary);
            padding: 10px 26px;
            border-radius: 6px;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-outline-gold:hover {
            background-color: var(--gold-primary);
            color: var(--white);
        }

        .bg-gray-custom {
            background-color: var(--gray-color);
        }
    </style>
    
    <!-- Hero / Intro Section -->
    <header class="hero-banner">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-3">Ready-Made Companies</h1>
                    <p class="lead mb-0 text-white-50">Launch your business immediately with our legally pre-incorporated shelf companies ready for seamless ownership transfer.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview & Benefits Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row g-4 align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Immediate Corporate Presence</h2>
                    <p class="text-secondary leading-relaxed">
                        Launch your business immediately with our ready-made companies, also known as shelf companies. These pre-incorporated entities are legally established and ready for ownership transfer, allowing businesses to begin operations without the delays associated with a new company registration.
                    </p>
                    <p class="text-secondary leading-relaxed">
                        Whether you are expanding internationally, opening a corporate bank account, applying for licenses, or entering new markets, our ready-made companies provide a fast, compliant, and cost-effective solution.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="custom-card">
                        <h3 class="h4 section-title">Benefits</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="custom-list">
                                    <li>Immediate business availability</li>
                                    <li>Faster market entry</li>
                                    <li>Legally incorporated entities</li>
                                    <li>Suitable for international investors</li>
                                    <li>Simplified ownership transfer</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="custom-list">
                                    <li>Supports bank account applications</li>
                                    <li>Tax registration assistance</li>
                                    <li>Regulatory compliance support</li>
                                    <li>Experienced corporate advisory</li>
                                    <li>Multiple jurisdictions available</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Jurisdictions Section -->
    <section class="py-5 bg-gray-custom">
        <div class="container py-4">
            <div class="text-center max-w-700 mx-auto mb-5" data-aos="fade-up">
                <h2 class="section-title d-inline-block">Global Jurisdictions Available</h2>
                <p class="text-secondary">Explore our wide selection of pre-incorporated entities tailored across premier international trade and financial hubs.</p>
            </div>

            <div class="row g-4">
                
                <!-- India -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="jurisdiction-card">
                        <div class="icon-box">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3 class="h4 fw-bold">India</h3>
                        <p class="text-secondary small mb-3">
                            Acquire a pre-incorporated Indian company and start business operations immediately. Our shelf companies are fully compliant and ideal for domestic and international investors looking for a quick business setup.
                        </p>
                        <h4 class="h6 fw-bold text-uppercase text-muted mb-2">Ideal For:</h4>
                        <ul class="custom-list">
                            <li>IT Companies</li>
                            <li>Consulting Firms</li>
                            <li>Trading Businesses</li>
                            <li>Import & Export</li>
                            <li>E-commerce</li>
                            <li>Manufacturing</li>
                            <li>Professional Services</li>
                        </ul>
                    </div>
                </div>

                <!-- Singapore -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="jurisdiction-card">
                        <div class="icon-box">
                            <i class="bi bi-globe-americas"></i>
                        </div>
                        <h3 class="h4 fw-bold">Singapore</h3>
                        <p class="text-secondary small mb-3">
                            Enter one of Asia's leading financial hubs with a Singapore shelf company. Our ready-made Singapore companies enable investors to establish operations quickly while benefiting from the country's business-friendly environment.
                        </p>
                        <h4 class="h6 fw-bold text-uppercase text-muted mb-2">Suitable For:</h4>
                        <ul class="custom-list">
                            <li>FinTech</li>
                            <li>Investment Holding</li>
                            <li>Trading</li>
                            <li>SaaS Companies</li>
                            <li>International Business</li>
                            <li>Asset Management</li>
                            <li>Family Offices</li>
                        </ul>
                    </div>
                </div>

                <!-- Hong Kong -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="jurisdiction-card">
                        <div class="icon-box">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h3 class="h4 fw-bold">Hong Kong</h3>
                        <p class="text-secondary small mb-3">
                            Expand into Asia with a Hong Kong ready-made company. These companies are ideal for international trade, holding structures, investment businesses, and cross-border commercial activities.
                        </p>
                        <h4 class="h6 fw-bold text-uppercase text-muted mb-2">Suitable For:</h4>
                        <ul class="custom-list">
                            <li>International Trading</li>
                            <li>Import & Export</li>
                            <li>Investment Holding</li>
                            <li>Technology Companies</li>
                            <li>E-commerce</li>
                            <li>Supply Chain Businesses</li>
                        </ul>
                    </div>
                </div>

                <!-- UAE -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="jurisdiction-card">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h3 class="h4 fw-bold">UAE</h3>
                        <p class="text-secondary small mb-3">
                            Start your business immediately in the UAE with a ready-made mainland or free zone company. Benefit from one of the world's fastest-growing business destinations while reducing setup time.
                        </p>
                        <h4 class="h6 fw-bold text-uppercase text-muted mb-2">Suitable For:</h4>
                        <ul class="custom-list">
                            <li>Trading</li>
                            <li>Consultancy</li>
                            <li>Real Estate</li>
                            <li>Tourism</li>
                            <li>Financial Services</li>
                            <li>Technology</li>
                            <li>Logistics</li>
                        </ul>
                    </div>
                </div>

                <!-- UK -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="jurisdiction-card">
                        <div class="icon-box">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h3 class="h4 fw-bold">UK</h3>
                        <p class="text-secondary small mb-3">
                            Acquire a UK shelf company and begin trading without waiting for incorporation. UK companies offer international credibility and are widely used for global business expansion and investment.
                        </p>
                        <h4 class="h6 fw-bold text-uppercase text-muted mb-2">Suitable For:</h4>
                        <ul class="custom-list">
                            <li>Holding Companies</li>
                            <li>Consulting</li>
                            <li>E-commerce</li>
                            <li>International Trade</li>
                            <li>Software Companies</li>
                            <li>Financial Services</li>
                        </ul>
                    </div>
                </div>

                <!-- Mauritius -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="jurisdiction-card">
                        <div class="icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="h4 fw-bold">Mauritius</h3>
                        <p class="text-secondary small mb-3">
                            Mauritius is a preferred jurisdiction for international investment and wealth structuring. Our ready-made companies provide a fast solution for businesses seeking tax-efficient and globally recognized corporate structures.
                        </p>
                        <h4 class="h6 fw-bold text-uppercase text-muted mb-2">Suitable For:</h4>
                        <ul class="custom-list">
                            <li>Investment Funds</li>
                            <li>Holding Companies</li>
                            <li>Wealth Management</li>
                            <li>International Trading</li>
                            <li>Family Offices</li>
                            <li>Global Investments</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="cta-section text-center" data-aos="zoom-in">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2 class="fw-bold mb-3">Ready to Start Your Business Today?</h2>
                        <p class="text-secondary mb-4 fs-6">
                            Skip lengthy incorporation procedures and launch your business with a fully compliant ready-made company. Our specialists will guide you through entity selection, ownership transfer, banking support, and post-incorporation compliance to ensure a seamless experience.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#contact" class="btn btn-gold">Get Started Now</a>
                            <a href="#consultation" class="btn btn-outline-gold">Speak to a Specialist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>