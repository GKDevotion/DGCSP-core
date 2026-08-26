<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <!-- Structured Data (JSON-LD) for SEO, AEO, and Search Engines -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FinancialService",
      "name": "Devotion Global Customer Service Provider",
      "url": "https://www.devotionglobal.com",
      "logo": "https://www.devotionglobal.com/assets/logo.png",
      "description": "Devotion Global specializes in legal entity setup, Payment Service Provider (PSP) licensing, Electronic Money Institution (EMI) registration, Crypto VASP approvals, and Forex brokerage setups.",
      "areaServed": "Global",
      "serviceType": "Payment Solution & Financial Licensing",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Financial Services Catalog",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Payment Service Provider (PSP) & EMI Licensing"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Cryptocurrency & VASP Registration"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Forex Broker Licensing (Offshore & Tier-1)"
            }
          }
        ]
      }
    }
    </script>

    <style>

        .btn-primary {
            background-color: var(--gold-primary);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: var(--gold-hover);
            box-shadow: var(--shadow-md);
        }

        /* SECTION 1: Hero Banner */
        .hero-banner {
            background-color: var(--gold-banner-bg);
            color: var(--white);
            padding: 5.5rem 0;
            text-align: center;
        }

        .hero-banner h1 {
            font-size: 2.75rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero-banner p {
            font-size: 1.15rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            opacity: 0.95;
        }

        /* Generic Section Utilities */
        section {
            padding: 4.5rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.2rem;
            color: var(--text-dark);
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            display: block;
            width: 50%;
            height: 3px;
            background-color: var(--gold-primary);
            margin: 0.5rem auto 0;
        }

        .section-title p {
            color: #666;
            margin-top: 0.5rem;
            font-size: 1rem;
        }

        /* AEO Answer Block */
        .aeo-answer-block {
            background-color: var(--gold-light);
            border-left: 4px solid var(--gold-primary);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 0 8px 8px 0;
        }

        .aeo-answer-block h3 {
            color: var(--gold-hover);
            margin-bottom: 0.5rem;
        }

        /* Responsive Card Layouts */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .card {
            background: var(--white);
            padding: 2.2rem;
            border-radius: 8px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .card h3 {
            color: var(--gold-primary);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        /* SECTION 2: Overview & Key Statistics */
        .overview-section {
            background-color: var(--white);
        }

        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 2.5rem;
        }

        .highlight-item {
            text-align: center;
            padding: 1.5rem;
            background-color: var(--gold-light);
            border-radius: 6px;
            border: 1px solid var(--gold-border);
        }

        .highlight-item h4 {
            font-size: 1.8rem;
            color: var(--gold-primary);
            margin-bottom: 0.25rem;
        }

        /* SECTION 3: Payment Solution Licensing */
        .payment-services-section {
            background-color: var(--gray-color);
        }

        /* SECTION 4: Crypto Licensing */
        .crypto-services-section {
            background-color: var(--white);
        }

        /* SECTION 5: Forex Licensing */
        .forex-services-section {
            background-color: var(--gray-color);
        }

        /* SECTION 6: 4-Step Process Timeline */
        .process-section {
            background-color: var(--white);
        }

        .timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
        }

        .step-card {
            background-color: var(--gray-color);
            padding: 2rem;
            border-radius: 8px;
            border-top: 4px solid var(--gold-primary);
            box-shadow: var(--shadow-sm);
        }

        .step-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--gold-primary);
            margin-bottom: 0.5rem;
        }

        /* SECTION 7: Comparison Table Matrix */
        .matrix-section {
            background-color: var(--gray-color);
        }

        .table-wrapper {
            overflow-x: auto;
            background: var(--white);
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gold-border);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th, td {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--gold-border);
        }

        th {
            background-color: var(--gold-light);
            color: var(--gold-hover);
            font-weight: 600;
        }

        /* SECTION 8: FAQ Section (AEO/SEO) */
        .faq-section {
            background-color: var(--white);
        }

        .faq-list {
            max-width: 850px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .faq-item {
            border: 1px solid var(--gold-border);
            border-radius: 6px;
            padding: 1.5rem;
            background: var(--gold-light);
        }

        .faq-item h3 {
            font-size: 1.1rem;
            color: var(--gold-hover);
            margin-bottom: 0.5rem;
        }

        /* SECTION 9: Call to Action Section */
        .cta-section {
            background-color: var(--gold-banner-bg);
            color: var(--white);
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
        }

        /* Footer */
        footer {
            background-color: var(--text-dark);
            color: var(--white);
            padding: 2rem 0;
            text-align: center;
            font-size: 0.9rem;
            border-top: 3px solid var(--gold-primary);
        }

        /* Responsive Breakpoints */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
            }
            .hero-banner h1 {
                font-size: 2rem;
            }
            .nav-links {
                gap: 0.5rem;
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
    
    <main>
        <!-- SECTION 1: Hero Banner -->
        <section class="hero-banner">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <h1>Payment Solution & Financial Licensing</h1>
                <p>Devotion Global Customer Service Provider authorizes fintech companies, PSPs, Electronic Money Institutions (EMIs), Crypto exchanges, and Forex brokerages with global regulatory licenses.</p>
                <a href="#payment-services" class="btn-primary">Explore License Types</a>
            </div>
        </section>

        <!-- SECTION 2: Overview & AI Answer Engine Optimization (AEO/GEO) -->
        <section class="overview-section" id="about">
            <div class="container">
                <article class="aeo-answer-block" data-aos="fade-right" data-aos-duration="1000">
                    <h3>What is a Payment Solution License by Devotion Global?</h3>
                    <p>A Payment Solution License (such as a PSP, EMI, PI, or Money Transmitter License) allows companies to process online merchant transactions, issue electronic money/IBANs, provide e-wallets, and facilitate international cross-border fund transfers legally. Devotion Global delivers complete turnkey setups including corporate structuring, regulatory filing, physical substance, PCI-DSS compliance guidance, and correspondent bank integrations globally.</p>
                </article>

                <div class="highlights-grid">
                    <div class="highlight-item" data-aos="fade-up" data-aos-delay="100">
                        <h4>PSP & EMI</h4>
                        <p>Fintech Approvals</p>
                    </div>
                    <div class="highlight-item" data-aos="fade-up" data-aos-delay="200">
                        <h4>60+</h4>
                        <p>Global Regulators</p>
                    </div>
                    <div class="highlight-item" data-aos="fade-up" data-aos-delay="300">
                        <h4>IBAN & Clearing</h4>
                        <p>Banking Integrations</p>
                    </div>
                    <div class="highlight-item" data-aos="fade-up" data-aos-delay="400">
                        <h4>PCI & AML</h4>
                        <p>Turnkey Compliance</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: Payment Solution Licensing Services -->
        <section class="payment-services-section" id="payment-services">
            <div class="container">
                <div class="section-title" data-aos="fade-down" data-aos-duration="800">
                    <h2>Payment Solution & Fintech Licensing</h2>
                    <p>Legal infrastructure tailored for payment gateways, money remitters, and digital banks.</p>
                </div>

                <div class="cards-grid">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <h3>Payment Service Provider (PSP)</h3>
                        <p>Process credit card transactions and alternative payment methods (APMs) for high-risk and low-risk merchant accounts globally.</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <h3>Electronic Money Institution (EMI)</h3>
                        <p>Issue e-money, create multi-currency virtual IBANs, offer prepaid cards, and operate digital wallet accounts for retail and business clients.</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Payment Institution (PI) License</h3>
                        <p>Authorize money remittance, direct debits, credit transfers, and account information services (Open Banking / PSD2 standard).</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="400">
                        <h3>Money Transmitter License (MTL)</h3>
                        <p>Secure regulatory permission for cross-border money transfers, peer-to-peer payout solutions, and currency conversion operations.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: Crypto Licensing Services -->
        <section class="crypto-services-section" id="crypto-services">
            <div class="container">
                <div class="section-title" data-aos="fade-down" data-aos-duration="800">
                    <h2>Cryptocurrency & VASP Licensing</h2>
                    <p>Regulatory frameworks for digital asset exchanges, Web3 companies, and custodians.</p>
                </div>

                <div class="cards-grid">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <h3>VASP Exchange Registration</h3>
                        <p>Legal setups in Lithuania, Dubai (VARA), El Salvador, or Czech Republic for crypto-to-fiat trading platforms.</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <h3>Crypto Merchant & Off-Ramp</h3>
                        <p>Integrate crypto payment gateways with card-to-crypto buying infrastructure and auto-fiat settlements.</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Custodial Wallet Licensing</h3>
                        <p>Authorizations to securely store client digital assets with cold-storage compliance and insurance protocols.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: Forex Licensing Services -->
        <section class="forex-services-section" id="forex-services">
            <div class="container">
                <div class="section-title" data-aos="fade-down" data-aos-duration="800">
                    <h2>Forex Broker Licensing Solutions</h2>
                    <p>Turnkey offshore and onshore licensing for international brokerage companies.</p>
                </div>

                <div class="cards-grid">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <h3>Offshore Forex Setup</h3>
                        <p>Incorporate and license in Mauritius (FSC), Vanuatu (VFSC), or Seychelles (FSA) with reduced capital overheads.</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <h3>Tier-1 Onshore Setup</h3>
                        <p>Full-scale regulatory approvals in Cyprus (CySEC), the UK (FCA), or Labuan (LFSA) for enterprise credibility.</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Liquidity & Tech Bridge</h3>
                        <p>Connecting your licensed entity with MT4/MT5/cTrader platforms, CRM systems, and Liquidity Providers.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6: 4-Step Licensing Process Timeline -->
        <section class="process-section" id="process">
            <div class="container">
                <div class="section-title" data-aos="fade-down" data-aos-duration="800">
                    <h2>Our Licensing Framework</h2>
                    <p>A structured step-by-step roadmap to achieving operational compliance.</p>
                </div>

                <div class="timeline">
                    <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-number">01</div>
                        <h3>Fintech Strategy</h3>
                        <p>We review your software architecture, payment flows, business model, and target corridors to choose the proper license type.</p>
                    </div>

                    <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-number">02</div>
                        <h3>Corporate Substation</h3>
                        <p>Establishment of legal entities, local office space, resident compliance officers, and required share capital structures.</p>
                    </div>

                    <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-number">03</div>
                        <h3>Filing & Policy Build</h3>
                        <p>Preparing AML/CTF frameworks, business plans, security procedures, and submitting formal applications to regulators.</p>
                    </div>

                    <div class="step-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-number">04</div>
                        <h3>Banking & Activation</h3>
                        <p>Opening central bank safeguarding accounts, acquiring network sponsorships, and integrating payment processing rails.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 7: Comparison Matrix Table -->
        <section class="matrix-section" id="jurisdictions">
            <div class="container">
                <div class="section-title" data-aos="fade-down" data-aos-duration="800">
                    <h2>Fintech License Comparison Matrix</h2>
                    <p>Evaluate timelines, requirements, and scope across payment, crypto, and FX jurisdictions.</p>
                </div>

                <div class="table-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <table>
                        <thead>
                            <tr>
                                <th>Jurisdiction</th>
                                <th>License Sector</th>
                                <th>Scope of Authority</th>
                                <th>Est. Timeline</th>
                                <th>Capital Need</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Lithuania (Bank of Lithuania)</strong></td>
                                <td>Payment / EMI</td>
                                <td>E-Money, IBAN Issuance, Passporting</td>
                                <td>6 - 10 Months</td>
                                <td>High (€350k for EMI)</td>
                            </tr>
                            <tr>
                                <td><strong>United Kingdom (FCA)</strong></td>
                                <td>API / Small Payment Inst.</td>
                                <td>Remittance & Payment Processing</td>
                                <td>4 - 8 Months</td>
                                <td>Moderate</td>
                            </tr>
                            <tr>
                                <td><strong>Canada (FINTRAC)</strong></td>
                                <td>MSB / Payment / Crypto</td>
                                <td>Foreign Exchange & Money Transfer</td>
                                <td>2 - 3 Months</td>
                                <td>Low</td>
                            </tr>
                            <tr>
                                <td><strong>Dubai (VARA / CBUAE)</strong></td>
                                <td>Crypto & Payment</td>
                                <td>Virtual Assets & Payment Gateway</td>
                                <td>4 - 6 Months</td>
                                <td>High</td>
                            </tr>
                            <tr>
                                <td><strong>Vanuatu (VFSC)</strong></td>
                                <td>Forex Brokerage</td>
                                <td>Financial FX Dealing</td>
                                <td>2 - 3 Months</td>
                                <td>Low</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- SECTION 8: FAQ Accordion Section (AEO/SEO) -->
        <section class="faq-section" id="faq">
            <div class="container">
                <div class="section-title" data-aos="fade-down" data-aos-duration="800">
                    <h2>Frequently Asked Questions</h2>
                    <p>Answers to common regulatory, capital, and operational questions for payment providers.</p>
                </div>

                <div class="faq-list">
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                        <h3>What is the difference between a PSP and an EMI license?</h3>
                        <p>A Payment Service Provider (PSP/PI) license allows a business to process transactions, accept merchant payments, and transfer money. An Electronic Money Institution (EMI) license includes all PSP capabilities plus the legal right to store client funds long-term, issue electronic wallets, and issue digital IBAN accounts.</p>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                        <h3>What is a Safeguarding Account in payment licensing?</h3>
                        <p>Regulated payment institutions are required to keep client funds separate from company operational funds. A safeguarding account is a dedicated account held at a credit institution (or central bank) to guarantee client money safety in case of insolvency.</p>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                        <h3>Can a single company hold both Payment and Crypto licenses?</h3>
                        <p>Yes. Many modern fintechs obtain hybrid authorization—such as an EMI or MSB license combined with a VASP crypto registration—allowing seamless fiat-to-crypto transactions and cross-border digital settlement within one platform.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 9: Call to Action Footer Section -->
        <section class="cta-section" id="contact" data-aos="zoom-in" data-aos-duration="800">
            <div class="container">
                <h2>Launch Your Payment Solution With Devotion Global</h2>
                <p style="max-width: 650px; margin: 0 auto 2rem; opacity: 0.9;">Speak with our corporate licensing team to structure your PSP, EMI, Crypto Exchange, or Forex brokerage today.</p>
                <a href="mailto:info@devotionglobal.com" class="btn-primary" style="background-color: var(--white); color: var(--gold-banner-bg); font-weight: 600;">Consult an Expert Today</a>
            </div>
        </section>
    </main>

<?php include ROOT_PATH . '/elements/footer.php'; ?>