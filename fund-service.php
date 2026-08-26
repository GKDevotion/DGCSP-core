<?php include('elements/header.php'); ?>

    <!-- JSON-LD Structured Data (SEO, AEO, GEO Optimization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://www.devotionglobal.com/#organization",
          "name": "Devotion Global Customer Service Provider",
          "url": "https://www.devotionglobal.com",
          "logo": "https://www.devotionglobal.com/assets/logo.png",
          "description": "Global BPO and specialized financial customer service provider offering 24/7 fund support, compliance, and administration solutions.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Support",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "Arabic"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/fund-services#service",
          "name": "Devotion Global Fund Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "End-to-end fund administration, investor support, capital call execution, and regulatory KYC/AML verification.",
          "areaServed": "Global",
          "category": "Fund Administration & Investor Support"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/fund-services#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What fund services does Devotion Global provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global offers end-to-end fund administration, 24/7 investor relations support, NAV calculation support, KYC/AML compliance screening, capital call assistance, and escrow transaction handling."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global ensure data security for financial funds?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global adheres to SOC 1 Type II, SOC 2 Type II, and ISO 27001 standards, utilizing end-to-end encryption for all investor portal access and transaction data."
              }
            }
          ]
        }
      ]
    }
    </script>

    <style>
        /* Banner Section */
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

        /* Section Styling */
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

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px;
        }

        .grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        /* Card Styles */
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

        /* Section Padding */
        .py-80 { padding: 80px 0; }
        .bg-gray { background-color: var(--gray-color); }
        .bg-light-gold { background-color: var(--gold-light); }

        /* Stats */
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

        /* FAQ Accordion Styling */
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

        /* Compliance Badges */
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

        /* Responsive Fixes */
        @media (max-width: 768px) {
            .grid-2 { grid-template-columns: 1fr; }
            .banner h1 { font-size: 2.1rem; }
            .section-header h2 { font-size: 1.8rem; }
            .py-80 { padding: 50px 0; }
        }
    </style>
    

    <!-- 1. Hero / Banner Section -->
    <header class="banner">
        <div class="container" data-aos="fade-down" data-aos-duration="1000">
            <span class="badge">Institutional Grade Support</span>
            <h1>Devotion Global Fund Services</h1>
            <p>Empowering investment managers, private equity funds, and venture firms with seamless global customer service, investor administration, and regulatory compliance solutions.</p>
        </div>
    </header>

    <!-- 2. Core Fund Services Section (AEO Structured) -->
    <section class="py-80">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Comprehensive Fund Solutions</h2>
            </div>
            
            <div class="grid-3">
                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">01</div>
                    <h3>24/7 Investor Desk Support</h3>
                    <p>Multilingual, round-the-clock helpdesk providing rapid inquiry resolution for institutional and retail limited partners (LPs).</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">02</div>
                    <h3>Fund Accounting & NAV Assistance</h3>
                    <p>Operational support for daily/monthly Net Asset Value (NAV) reconciliations, fee calculations, and reporting verification.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">03</div>
                    <h3>KYC / AML Onboarding</h3>
                    <p>Automated and manual Identity Verification (IDV), Anti-Money Laundering screening, and continuous investor compliance checkups.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">04</div>
                    <h3>Capital Call & Distribution Desk</h3>
                    <p>Precision management of capital call notifications, wire confirmation follow-ups, and dividend payout communication.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">05</div>
                    <h3>Digital LP Portal Management</h3>
                    <p>Dedicated technical assistance guiding fund clients through reporting portal access, multi-factor authentication, and statement retrieval.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">06</div>
                    <h3>Escrow & Settlement Operations</h3>
                    <p>Direct assistance with transaction reconciliation, subscription tracking, and escrow confirmation workflows.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. Key Operational Features (GEO optimized) -->
    <section class="py-80 bg-gray">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Why Leading Fund Managers Partner With Us</h2>
            </div>

            <div class="grid-3">
                <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
                    <h3>99.9% SLA Commitment</h3>
                    <p>We operate strictly under contractually backed service level agreements to ensure fast query turnarounds and operational continuity.</p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
                    <h3>Multi-Jurisdictional Reach</h3>
                    <p>Full operational readiness tailored for funds domiciled in the US, Cayman Islands, Luxembourg, Singapore, and Europe.</p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
                    <h3>Bank-Grade Security</h3>
                    <p>ISO 27001 certified and SOC 2 Type II compliant processes engineered to protect sensitive investor financial records.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Performance Metrics -->
    <section class="py-80">
        <div class="container">
            <div class="grid-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="stat-number">$15B+</div>
                    <div class="stat-label">Assets Under Support</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="stat-number">24/7/365</div>
                    <div class="stat-label">Multilingual Availability</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="stat-number">99.8%</div>
                    <div class="stat-label">Investor Satisfaction</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="stat-number">15 Min</div>
                    <div class="stat-label">Avg. Inquiry Response</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Regulatory Compliance & Security -->
    <section class="py-80 bg-light-gold">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Regulatory & Compliance Infrastructure</h2>
            </div>
            <div class="grid-4">
                <div class="badge-card" data-aos="fade-up" data-aos-delay="100">SOC 1 Type II</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="200">SOC 2 Type II</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="300">ISO 27001 Certified</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="400">GDPR & CCPA Compliant</div>
            </div>
        </div>
    </section>

    <!-- 6. Frequently Asked Questions (AEO & SEO Target) -->
    <section class="py-80 bg-gray">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <h3>What types of funds does Devotion Global support?</h3>
                    <p>We support Hedge Funds, Private Equity (PE) firms, Venture Capital (VC) funds, Real Estate Funds, and Mutual Funds across domestic and offshore jurisdictions.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <h3>Can Devotion Global integrate with our existing CRM and software?</h3>
                    <p>Yes. Our team integrates directly with leading fund software like FIS, Investran, Allvue, Salesforce Financial Services Cloud, and custom investor portals.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <h3>How do you handle multilingual investor communications?</h3>
                    <p>Our global desks provide native support in English, Mandarin, Spanish, French, German, and Arabic to serve international LP bases seamlessly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Call to Action -->
    <section class="py-80" style="text-align: center; background-color: var(--white);">
        <div class="container" data-aos="flip-up" data-aos-duration="1000">
            <h2>Optimize Your Fund Operations Today</h2>
            <p style="max-width: 600px; margin: 15px auto 0; color: #555;">Partner with Devotion Global Customer Service Provider for institutional-grade fund administration and 24/7 LP desk support.</p>
            <a href="#contact" class="cta-btn">Request a Consultation</a>
        </div>
    </section>


<?php include('elements/footer.php'); ?>