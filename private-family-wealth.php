<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

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
          "description": "Global BPO and specialized financial customer service provider offering 24/7 private wealth support, family office management, and UHNWI client desks.",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Private Wealth Concierge",
            "telephone": "+1-800-555-0199",
            "availableLanguage": ["English", "Mandarin", "Spanish", "Arabic", "French"]
          }
        },
        {
          "@type": "FinancialProduct",
          "@id": "https://www.devotionglobal.com/private-wealth-services#service",
          "name": "Devotion Global Family Office & Private Wealth Services",
          "provider": {
            "@id": "https://www.devotionglobal.com/#organization"
          },
          "description": "White-glove family office administration, high-net-worth client support, consolidated asset reporting, and discrete transaction handling.",
          "areaServed": "Global",
          "category": "Private Wealth & Family Office Management"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.devotionglobal.com/private-wealth-services#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What private wealth and family office services does Devotion Global provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Devotion Global provides 24/7 dedicated wealth client desks, consolidated multi-asset performance reporting, trust and estate administration support, cross-border KYC screening, and bespoke concierge services for UHNWIs."
              }
            },
            {
              "@type": "Question",
              "name": "How does Devotion Global maintain discretion and privacy for Family Offices?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We strictly enforce zero-trust access protocols, SOC 1 & 2 Type II compliance, localized data residency, and dedicated non-disclosure frameworks tailored to high-profile families."
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
            <span class="badge">Bespoke Wealth Operations</span>
            <h1>Private Wealth & Family Office Services</h1>
            <p>Delivering white-glove client support, consolidated asset reporting, and administrative infrastructure tailored exclusively for family offices, wealth managers, and Ultra-HNW families worldwide.</p>
        </div>
    </header>

    <!-- 2. Core Services Section (Private Wealth Focused) -->
    <section class="py-80">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Bespoke Family Office Solutions</h2>
            </div>
            
            <div class="grid-3">
                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">01</div>
                    <h3>Dedicated Wealth Desk Support</h3>
                    <p>24/7 direct-access support desk offering high-touch, confidential assistance for principal family members and wealth advisors.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">02</div>
                    <h3>Consolidated Asset Reporting</h3>
                    <p>Aggregated operational reporting across multi-bank accounts, liquid investments, private equity holdings, real estate, and passion assets.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">03</div>
                    <h3>Cross-Border Compliance & KYC</h3>
                    <p>Streamlined identity verification, source of wealth (SoW) documentation support, and international regulatory alignment.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">04</div>
                    <h3>Trust & Estate Administration Desk</h3>
                    <p>Administrative coordination for fiduciary distributions, estate document maintenance, and multi-generational trust communication.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">05</div>
                    <h3>Family Portal Tech Concierge</h3>
                    <p>Personalized technical onboarding and continuous support for private family portals, vault storage, and secure communications.</p>
                </article>

                <article class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">06</div>
                    <h3>Lifestyle & Administrative Concierge</h3>
                    <p>Specialized middle-office execution for capital wire authorizations, bill pay tracking, and discrete administrative requests.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. Operational Advantages (GEO optimized) -->
    <section class="py-80 bg-gray">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Built for Uncompromised Discretion & Precision</h2>
            </div>

            <div class="grid-3">
                <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
                    <h3>Absolute Confidentiality</h3>
                    <p>Rigorous NDAs and zero-trust protocol access ensure family assets and identity remain completely protected.</p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
                    <h3>Multi-Generational Continuity</h3>
                    <p>Support workflows structured to seamlessly transition knowledge and portal navigation across family generations.</p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
                    <h3>Institutional Safeguards</h3>
                    <p>Combining the intimacy of a single-family office with bank-grade security and SOC-certified operational redundancy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Performance Metrics -->
    <section class="py-80">
        <div class="container">
            <div class="grid-4">
                <div class="stat-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="stat-number">$25B+</div>
                    <div class="stat-label">Family Wealth Supported</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Private Desk Access</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Confidentiality Guarantee</div>
                </div>
                <div class="stat-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="stat-number">5 Min</div>
                    <div class="stat-label">Priority Escalation SLA</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Security & Regulatory Compliance -->
    <section class="py-80 bg-light-gold">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Security & Governance Framework</h2>
            </div>
            <div class="grid-4">
                <div class="badge-card" data-aos="fade-up" data-aos-delay="100">SOC 2 Type II Certified</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="200">ISO 27001 Data Vault</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="300">Zero-Trust Data Policy</div>
                <div class="badge-card" data-aos="fade-up" data-aos-delay="400">GDPR & Global Privacy</div>
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
                    <h3>How does Devotion Global work alongside our existing Family Office staff?</h3>
                    <p>We act as an extension of your team, handling 24/7 client desk coverage, routine reporting aggregation, and administrative tasks so your core advisors can focus on strategic wealth preservation.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <h3>Do you support Multi-Family Offices (MFOs) as well as Single Family Offices (SFOs)?</h3>
                    <p>Yes. We offer scalable multi-tenant operations for MFOs managing dozens of families, as well as dedicated white-glove pod teams for Single Family Offices.</p>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <h3>How do you handle sensitive communication with family members?</h3>
                    <p>All client team members complete specialized family communication training, adhering strictly to pre-approved family communication guidelines and secure encrypted messaging channels.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Call to Action -->
    <section class="py-80" style="text-align: center; background-color: var(--white);">
        <div class="container" data-aos="flip-up" data-aos-duration="1000">
            <h2>Elevate Your Family Office Operations</h2>
            <p style="max-width: 600px; margin: 15px auto 0; color: #555;">Schedule a private consultation with Devotion Global to establish your custom family wealth customer service desk.</p>
            <a href="#contact" class="cta-btn">Request Private Consultation</a>
        </div>
    </section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>