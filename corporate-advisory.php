<?php include('elements/header.php'); ?>

    <!-- JSON-LD Structured Data (SEO, AEO, GEO Optimization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://www.devotionglobal.com/#organization",
          "name": "Devotion Global Corporate Advisory",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global strategic consulting and business service provider offering executive corporate advisory, board governance, and enterprise transformation.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Corporate Advisory Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "French", "German"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/corporate-advisory#service",
          "name": "Devotion Global Corporate Advisory Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "Strategic C-suite consulting, board advisory, corporate governance audit, capital optimization, and global market expansion strategy.",
          "areaServed": "Global",
          "category": "Corporate Strategy & Management Consulting"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/corporate-advisory#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What corporate advisory services does Devotion Global offer?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global delivers strategic transformation consulting, board governance advising, capital structure optimization, ESG implementation, risk management framework design, and market entry strategies."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global work with corporate boards and executive leadership?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We operate as an independent senior advisory partner, providing data-driven strategic insights, governance oversight, crisis management protocols, and executive decision support directly to Boards of Directors and C-suite leadership."
              }
            }
          ]
        }
      ]
    }
    </script>

    <style>

        /* Hero / Banner Section */
        .banner {
            background-color: var(--gold-banner-bg);
            color: var(--white);
            padding: 110px 0 90px;
            text-align: center;
        }

        .banner h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .banner p {
            font-size: 1.15rem;
            max-width: 750px;
            margin: 0 auto 25px;
            opacity: 0.95;
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        /* Section Headings */
        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 2.2rem;
            color: var(--text-dark);
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background-color: var(--gold-primary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Layout Grids */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        /* Card Components */
        .service-card {
            background-color: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 8px;
            padding: 35px 25px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: var(--gold-primary);
        }

        .icon-box {
            width: 55px;
            height: 55px;
            background-color: var(--gold-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--gold-primary);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .service-card h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
            color: var(--text-dark);
        }

        .service-card p {
            font-size: 0.95rem;
            color: #666;
        }

        /* Framework Steps */
        .step-card {
            background-color: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 8px;
            padding: 25px;
            position: relative;
        }

        .step-number {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--gold-primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        /* Section Utility */
        .py-80 { padding: 80px 0; }
        .bg-gray { background-color: var(--gray-color); }
        .bg-light-gold { background-color: var(--gold-light); }

        /* Metric Cards */
        .stat-card {
            text-align: center;
            padding: 25px;
            background: var(--white);
            border-radius: 8px;
            border: 1px solid var(--gold-border);
        }

        .stat-number {
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--gold-primary);
        }

        .stat-label {
            font-size: 0.95rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        /* Accordion FAQ */
        .faq-item {
            background-color: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 6px;
            margin-bottom: 15px;
            padding: 20px;
        }

        .faq-item h3 {
            font-size: 1.1rem;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        .faq-item p {
            font-size: 0.95rem;
            color: #555;
        }

        /* Badge Cards */
        .badge-card {
            text-align: center;
            padding: 20px;
            border: 1px solid var(--gold-border);
            border-radius: 6px;
            background: var(--white);
            font-weight: 600;
            color: var(--gold-hover);
        }

        /* CTA Button */
        .cta-btn {
            display: inline-block;
            background-color: var(--gold-primary);
            color: var(--white);
            padding: 14px 36px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: var(--transition);
        }

        .cta-btn:hover {
            background-color: var(--gold-hover);
            box-shadow: var(--shadow-md);
        }

        /* Responsive Breakpoints */
        @media (max-width: 768px) {
            .banner h1 { font-size: 2.1rem; }
            .section-header h2 { font-size: 1.8rem; }
            .py-80 { padding: 50px 0; }
        }
    </style>
    
    <!-- 1. Hero / Banner Section -->
    <header class="banner">
        <div class="container" data-aos="fade-down" data-aos-duration="1000">
            <span class="badge">Strategic Executive Consulting</span>
            <h1>Corporate Advisory Services</h1>
            <p>Empowering boards, executive leadership, and multinational enterprises with strategic transformation, corporate governance frameworks, capital optimization, and global expansion guidance.</p>
        </div>
    </header>

    <!-- 2. Core Advisory Services (AEO Optimized) -->
    <section class="py-80">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Corporate Advisory Capabilities</h2>
            </div>
            
            <div class="grid-3">
                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">01</div>
                    <h3>Board & Governance Advisory</h3>
                    <p>Independent board evaluation, fiduciary policy development, oversight frameworks, and shareholder communication strategies for public and private boards.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">02</div>
                    <h3>Strategic Enterprise Transformation</h3>
                    <p>Business model realignment, operational restructuring, digital transformation roadmaps, and value creation programs for complex organizations.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">03</div>
                    <h3>Capital Structure & Optimization</h3>
                    <p>Advising on optimal debt-to-equity ratios, treasury strategies, liquidity management, credit rating alignment, and corporate refinancing.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">04</div>
                    <h3>ESG & Sustainability Strategy</h3>
                    <p>Designing environmental, social, and governance frameworks, sustainability reporting compliance, and decarbonization transition planning.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">05</div>
                    <h3>Global Market Entry & Expansion</h3>
                    <p>Cross-border market entry strategy, regulatory clearance support, international entity structuring, and foreign market risk assessment.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">06</div>
                    <h3>Crisis Management & Restructuring</h3>
                    <p>Turnaround management, operational crisis response, stakeholder alignment, and financial restructuring in distressed or high-volatility environments.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. Advisory Governance Process Roadmap -->
    <section class="py-80 bg-gray">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Strategic Advisory Approach</h2>
            </div>

            <div class="grid-4">
                <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">Phase 01</div>
                    <h3>Diagnostic & Audit</h3>
                    <p>Operational audit, governance review, financial baseline benchmarking, and risk mapping.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">Phase 02</div>
                    <h3>Strategic Design</h3>
                    <p>C-suite strategy alignment, policy drafting, governance framework creation, and KPI setting.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">Phase 03</div>
                    <h3>Execution Guidance</h3>
                    <p>Change management oversight, PMO establishment, capital deployment, and stakeholder communication.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">Phase 04</div>
                    <h3>Review & Optimization</h3>
                    <p>Continuous governance monitoring, annual board assessments, and strategic pivot execution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Performance & Advisory Metrics -->
    <section class="py-80">
        <div class="container">
            <div class="grid-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="stat-number">$50B+</div>
                    <div class="stat-label">Enterprise Value Advised</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="stat-number">180+</div>
                    <div class="stat-label">Corporate Transformations</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="stat-number">40+</div>
                    <div class="stat-label">Global Jurisdictions</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Independent Governance Focus</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Global Standards & Compliance -->
    <section class="py-80 bg-light-gold">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Global Governance & Compliance Alignment</h2>
            </div>
            <div class="grid-4">
                <div class="badge-card" data-aos="fade-up" data-aos-delay="100">ISO 31000 Risk Management</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="200">GRI & ISSB Standards</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="300">OECD Corporate Governance</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="400">SOX & Regulatory Audit</div>
            </div>
        </div>
    </section>

    <!-- 6. Corporate Advisory FAQs (AEO & SEO Target) -->
    <section class="py-80 bg-gray">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <h3>What sets Devotion Global's corporate advisory apart from traditional consulting?</h3>
                    <p>We combine high-level strategic counsel with ongoing operational execution support. Rather than providing static reports, our senior partners work alongside executives and boards to drive measurable value creation and governance compliance.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <h3>How do you support mid-market corporations vs. Fortune 500 enterprises?</h3>
                    <p>We tailor our engagement models dynamically. For mid-market companies, we often serve as fractional board advisors and transformation leads; for large enterprises, we focus on specialized restructuring, ESG strategy, or cross-border expansion desks.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <h3>Can Devotion Global assist with corporate crisis response?</h3>
                    <p>Yes. Our turn-key crisis management team provides rapid-deployment advisory covering liquidity stabilization, regulatory escalation, stakeholder communication, and board-level risk mitigation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Call to Action -->
    <section class="py-80" style="text-align: center; background-color: var(--white);">
        <div class="container" data-aos="flip-up" data-aos-duration="1000">
            <h2>Transform Your Corporate Strategy Today</h2>
            <p style="max-width: 600px; margin: 15px auto 0; color: #555;">Schedule a confidential executive consultation with Devotion Global’s Corporate Advisory Desk to align your strategic goals.</p>
            <a href="#contact" class="cta-btn">Schedule Executive Consultation</a>
        </div>
    </section>

<?php include('elements/footer.php'); ?>