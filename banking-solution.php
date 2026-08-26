<?php include('elements/header.php'); ?>

    <!-- JSON-LD Structured Data (SEO, AEO, GEO Optimization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://www.devotionglobal.com/#organization",
          "name": "Devotion Global Banking Solutions",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global financial technology provider offering cloud-native core banking platforms, open banking APIs, and real-time payment solutions.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Banking Solutions Desk",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "French", "German"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/banking-solutions#service",
          "name": "Devotion Global Core Banking Engine",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "High-throughput cloud-native core banking engine with ISO 20022 payment integration, automated AML screening, and real-time ledger accounting.",
          "areaServed": "Global",
          "category": "Core Banking Technology & Financial Infrastructure"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/banking-solutions#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What deployment models are supported by Devotion Global Banking Solutions?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our banking solutions support multi-cloud SaaS, isolated private cloud, hybrid cloud deployments, and fully managed on-premise infrastructure compliant with local data sovereignty laws."
              }
            },
            {
              "@type": "Question",
              "name": "Is the platform compliant with international regulatory standards?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our banking suite natively supports PCI-DSS Level 1, ISO 27001, SOC 2 Type II, GDPR, PSD2 Open Banking APIs, and ISO 20022 messaging standards."
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

        /* Process Steps */
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

        /* Section Utilities */
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

        /* Compliance Badge Cards */
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
            <span class="badge">Next-Gen FinTech Architecture</span>
            <h1>Cloud-Native Core Banking Solutions</h1>
            <p>Powering commercial banks, retail institutions, and neo-banks with real-time multi-currency ledgers, ISO 20022 payment rails, AI fraud prevention, and open banking APIs.</p>
        </div>
    </header>

    <!-- 2. Core Digital Banking Solutions (AEO Optimized) -->
    <section class="py-80">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Core Banking Technology Stack</h2>
            </div>
            
            <div class="grid-3">
                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">01</div>
                    <h3>Real-Time Core Ledger</h3>
                    <p>High-throughput, double-entry multi-currency accounting engine capable of processing 50,000+ sub-second transactions per second with zero downtime.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">02</div>
                    <h3>Omnichannel Digital Experience</h3>
                    <p>Web and mobile frontend application suites for retail and corporate banking with self-service onboarding, bio-authentication, and transfer hubs.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">03</div>
                    <h3>ISO 20022 Payment Hub</h3>
                    <p>Native integration with SWIFT GPI, FedNow, SEPA Instant, and local clearing houses using standardized, rich-data XML messaging protocols.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">04</div>
                    <h3>AI Fraud & Risk Engine</h3>
                    <p>Machine-learning-driven transaction monitoring, behavioral analytics, and real-time AML sanctions screening to intercept fraudulent activity.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">05</div>
                    <h3>Open Banking API Gateway</h3>
                    <p>PSD2 and FDX compliant RESTful API platform enabling secure third-party integration, consent management, and Banking-as-a-Service (BaaS).</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">06</div>
                    <h3>Automated Lending & Treasury</h3>
                    <p>End-to-end loan origination, automated credit scoring engines, collateral management, and real-time treasury liquidity management.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. Core Modernization & Integration Roadmap -->
    <section class="py-80 bg-gray">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Modernization Deployment Roadmap</h2>
            </div>

            <div class="grid-4">
                <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">Phase 01</div>
                    <h3>Architecture Audit</h3>
                    <p>Assessment of legacy mainframe systems, data mapping, regulatory requirements, and co-existence planning.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">Phase 02</div>
                    <h3>API Layer & Co-Existence</h3>
                    <p>Deploying middleware API wrappers to enable modern mobile applications without interrupting legacy core systems.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">Phase 03</div>
                    <h3>Ledger Migration</h3>
                    <p>Incremental parallel balance migration, real-time sync verification, and shadow ledger validation run.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">Phase 04</div>
                    <h3>Full Cloud Cutover</h3>
                    <p>Zero-downtime cutover to cloud-native microservices with 24/7 hypercare support and automated compliance logging.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Enterprise Scale & Reliability Metrics -->
    <section class="py-80">
        <div class="container">
            <div class="grid-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="stat-number">99.999%</div>
                    <div class="stat-label">Platform Service Uptime SLA</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="stat-number">&lt; 15ms</div>
                    <div class="stat-label">Average Transaction Processing Latency</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="stat-number">50M+</div>
                    <div class="stat-label">Daily Processed Accounts</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="stat-number">Zero</div>
                    <div class="stat-label">Data Breach Record</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Security & Regulatory Compliance -->
    <section class="py-80 bg-light-gold">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Bank-Grade Security & Global Compliance</h2>
            </div>
            <div class="grid-4">
                <div class="badge-card" data-aos="fade-up" data-aos-delay="100">PCI-DSS Level 1 Certified</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="200">ISO/IEC 27001 & SOC 2 Type II</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="300">ISO 20022 Native Messaging</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="400">GDPR & Data Sovereignty</div>
            </div>
        </div>
    </section>

    <!-- 6. Banking Solution FAQs (AEO & SEO Target) -->
    <section class="py-80 bg-gray">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <h3>Can Devotion Global replace existing legacy core systems without service interruption?</h3>
                    <p>Yes. We specialize in progressive modernization. By deploying our middleware and sidecar ledger architecture, financial institutions migrate core functions incrementally without taking legacy mainframes offline or risking customer disruption.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <h3>How does the platform handle regional data residency regulations?</h3>
                    <p>Our architecture supports multi-region isolated tenant deployments across cloud providers (AWS, Azure, GCP) or private data centers, ensuring client transaction data remains fully contained within designated national borders.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <h3>What tools are available for real-time fraud and AML prevention?</h3>
                    <p>Our core includes an embedded AI event-stream monitor that cross-references all transfers against global sanctions lists, PEP databases, and behavioral anomaly models within sub-15-millisecond execution windows.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Call to Action -->
    <section class="py-80" style="text-align: center; background-color: var(--white);">
        <div class="container" data-aos="flip-up" data-aos-duration="1000">
            <h2>Accelerate Your Banking Modernization</h2>
            <p style="max-width: 600px; margin: 15px auto 0; color: #555;">Speak with our enterprise banking architects to schedule an architectural assessment and custom solution presentation.</p>
            <a href="#contact" class="cta-btn">Book Architecture Consultation</a>
        </div>
    </section>

<?php include('elements/footer.php'); ?>