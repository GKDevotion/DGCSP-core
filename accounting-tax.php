<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

<!-- AEO / SEO / GEO JSON-LD Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
    {
        "@type": "Organization",
        "@id": "https://www.devotioncsp.com/#organization",
        "name": "Devotion Global CSP",
        "url": "https://www.devotioncsp.com",
        "logo": "https://www.devotioncsp.com/logo.png"
    },
    {
        "@type": "Service",
        "@id": "https://www.devotioncsp.com/accounting-tax-services/#service",
        "name": "Accounting, Tax & Financial Services",
        "provider": { "@id": "https://www.devotioncsp.com/#organization" },
        "serviceType": "Financial & Tax Advisory Services",
        "description": "Full-spectrum accounting, bookkeeping, VAT filing, corporate tax compliance, transfer pricing, and fractional CFO advisory services for global enterprises.",
        "areaServed": "Global",
        "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Accounting & Tax Catalog",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bookkeeping Services" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Financial Reporting" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Payroll Processing" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "VAT / GST Registration & Filing" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Corporate Tax Compliance" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Tax Advisory" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "International Tax Planning" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Transfer Pricing" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Audit Support" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "CFO Services" } }
        ]
        }
    },
    {
        "@type": "FAQPage",
        "@id": "https://www.devotioncsp.com/accounting-tax-services/#faq",
        "mainEntity": [
        {
            "@type": "Question",
            "name": "What comprehensive tax and accounting services does Devotion Global CSP offer?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "Devotion Global CSP provides ten core financial service modules: Bookkeeping Services, Financial Reporting, Payroll Processing, VAT/GST Filings, Corporate Tax Compliance, Tax Advisory, International Tax Planning, Transfer Pricing, Audit Support, and Strategic CFO Services."
            }
        },
        {
            "@type": "Question",
            "name": "How does cross-border tax advisory benefit multinational entities?",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cross-border tax planning optimizes double-taxation treaties, ensures BEPS and transfer pricing compliance, minimizes tax exposure, and harmonizes financial reporting across regional subsidiaries."
            }
        }
        ]
    }
    ]
}
</script>

<style>
    :root {
        --gold-primary: #b89655;
        --gold-hover: #96783d;
        --text-dark: #333333;
        --gold-banner-bg: #b58d3d;
        --gray-color: #f5f6f8;
        --font-family: 'Poppins', sans-serif;
        --gold-border: rgba(184, 150, 85, 0.25);
        --gold-light: #f9f5ed;
        --white: #ffffff;
        --shadow-sm: 0 4px 12px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 10px 30px rgba(184, 150, 85, 0.12);
        --transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: var(--font-family);
        color: var(--text-dark);
        background-color: var(--white);
        line-height: 1.6;
        overflow-x: hidden;
    }

    .container {
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* Typography & Badges */
    .badge {
        display: inline-block;
        padding: 6px 18px;
        background: var(--gold-light);
        border: 1px solid var(--gold-border);
        color: var(--gold-primary);
        border-radius: 50px;
        font-size: 0.82rem;
        font-weight: 600;
        margin-bottom: 16px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .section-padding {
        padding: 90px 0;
        position: relative;
    }

    .section-title {
        font-size: 2.4rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 16px;
        text-align: center;
        letter-spacing: -0.5px;
    }

    .section-subtitle {
        text-align: center;
        color: #666;
        max-width: 720px;
        margin: 0 auto 60px auto;
        font-size: 1.05rem;
    }

    /* 1. HERO SECTION (White Background) */
    .hero {
        position: relative;
        padding: 110px 0 90px 0;
        background-color: var(--white);
        border-bottom: 1px solid var(--gold-border);
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 60px;
        align-items: center;
    }

    .hero-content h1 {
        color: var(--text-dark);
        font-size: 3.2rem;
        line-height: 1.25;
        margin-bottom: 20px;
        font-weight: 800;
    }

    .hero-content h1 span {
        color: var(--gold-primary);
    }

    .hero-content p.lead {
        color: #555;
        font-size: 1.15rem;
        margin-bottom: 35px;
    }

    .btn-primary {
        display: inline-block;
        padding: 16px 38px;
        background-color: var(--gold-primary);
        color: var(--white);
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: var(--transition);
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(184, 150, 85, 0.25);
    }

    .btn-primary:hover {
        background-color: var(--gold-hover);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(150, 120, 61, 0.35);
    }

    /* Hero Light Visual Orb */
    .hero-visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .light-orb {
        position: relative;
        width: 320px;
        height: 320px;
        border-radius: 50%;
        background: radial-gradient(circle, var(--gold-light) 0%, var(--white) 80%);
        border: 2px dashed var(--gold-primary);
        box-shadow: var(--shadow-md);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .orbit-ring {
        position: absolute;
        width: 115%;
        height: 115%;
        border-radius: 50%;
        border: 1px solid var(--gold-border);
        animation: spin 35s linear infinite;
    }

    @keyframes spin { 100% { transform: rotate(360deg); } }

    /* 2. AEO DIRECT ANSWER SECTION (Gold Banner Background) */
    .aeo-banner {
        background-color: var(--gold-banner-bg);
        color: var(--white);
        padding: 55px 0;
    }

    .aeo-content {
        max-width: 980px;
        margin: 0 auto;
        text-align: center;
    }

    .aeo-content h2 {
        color: var(--white);
        font-size: 1.6rem;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .aeo-content p {
        font-size: 1.12rem;
        color: #f3f4f6;
        line-height: 1.75;
        font-weight: 300;
    }

    /* 3. SERVICES SECTION (Gray Background) */
    .services-section {
        background-color: var(--gray-color);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .grid-2col {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 32px;
    }

    .service-card {
        background: var(--white);
        border: 1px solid var(--gold-border);
        border-radius: 16px;
        padding: 38px;
        transition: var(--transition);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
    }

    .service-card:hover {
        transform: translateY(-6px);
        border-color: var(--gold-primary);
        box-shadow: var(--shadow-md);
    }

    .service-title {
        font-size: 1.45rem;
        color: var(--text-dark);
        margin-bottom: 12px;
        font-weight: 600;
    }

    .direct-answer {
        font-size: 0.96rem;
        color: #555;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .feature-list {
        list-style: none;
        margin: 20px 0;
        border-top: 1px solid rgba(0, 0, 0, 0.06);
        padding-top: 18px;
    }

    .feature-list li {
        position: relative;
        padding-left: 26px;
        margin-bottom: 10px;
        font-size: 0.92rem;
        color: #444;
    }

    .feature-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: var(--gold-primary);
        font-weight: bold;
        font-size: 0.9rem;
    }

    /* Light Graphic Elements */
    .anim-box {
        height: 95px;
        background: var(--gold-light);
        border-radius: 10px;
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px dashed var(--gold-border);
        position: relative;
        overflow: hidden;
    }

    /* Custom Motion Elements */
    .bar-chart { display: flex; align-items: flex-end; gap: 8px; height: 45px; }
    .bar { width: 14px; background: var(--gold-primary); border-radius: 3px; animation: pulseBar 2s infinite alternate ease-in-out; }
    .bar:nth-child(1) { height: 45%; animation-delay: 0.2s; }
    .bar:nth-child(2) { height: 85%; animation-delay: 0.4s; }
    .bar:nth-child(3) { height: 60%; animation-delay: 0.6s; }
    @keyframes pulseBar { 0% { opacity: 0.5; } 100% { opacity: 1; transform: scaleY(1.08); } }

    .line-graph { width: 70%; height: 3px; background: var(--gold-primary); position: relative; animation: lineGrow 2.5s infinite ease-in-out; }
    @keyframes lineGrow { 0% { width: 0%; } 50%, 100% { width: 70%; } }

    .anim-pulse-ring { width: 36px; height: 36px; border: 2px solid var(--gold-primary); border-radius: 50%; animation: pulseRing 2s infinite; }
    @keyframes pulseRing { 0% { transform: scale(0.8); opacity: 0.3; } 50% { transform: scale(1.2); opacity: 1; } 100% { transform: scale(0.8); opacity: 0.3; } }

    /* 4. GEO SEARCH ENGINE FAQ SECTION (White Background) */
    .faq-section {
        background-color: var(--white);
        border-bottom: 1px solid var(--gold-border);
    }

    .faq-grid {
        max-width: 920px;
        margin: 0 auto;
    }

    .faq-item {
        background: var(--gold-light);
        border: 1px solid var(--gold-border);
        padding: 28px;
        border-radius: 12px;
        margin-bottom: 20px;
        transition: var(--transition);
    }

    .faq-item:hover {
        border-color: var(--gold-primary);
    }

    .faq-item h3 {
        font-size: 1.18rem;
        color: var(--text-dark);
        margin-bottom: 12px;
    }

    .faq-item p {
        color: #555;
        font-size: 0.98rem;
        line-height: 1.7;
    }

    /* 5. CALL TO ACTION SECTION (Gray Background) */
    .cta-section {
        background-color: var(--gray-color);
        text-align: center;
    }

    .cta-box {
        background: var(--white);
        border: 1px solid var(--gold-border);
        padding: 70px 30px;
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
    }

    /* Responsive Breakpoints */
    @media (max-width: 992px) {
        .hero-grid { grid-template-columns: 1fr; text-align: center; }
        .hero-content h1 { font-size: 2.5rem; }
        .grid-2col { grid-template-columns: 1fr; }
    }
</style>


<!-- 1. HERO SECTION (White Background) -->
<header class="hero">
    <div class="container hero-grid">
        <div class="hero-content">
            <span class="badge">Devotion Global CSP Solutions</span>
            <h1>Global Accounting & <span>Tax Advisory</span></h1>
            <p class="lead">Streamline global financial reporting, ensure multi-jurisdictional tax compliance, and optimize international enterprise operations under one unified platform.</p>
            <a href="#contact" class="btn-primary">Request Consultation</a>
        </div>
        <div class="hero-visual">
            <div class="light-orb">
                <div class="orbit-ring"></div>
                <div style="color: var(--gold-primary); font-size: 2.2rem; font-weight: 800;">CSP</div>
            </div>
        </div>
    </div>
</header>

<!-- 2. AEO DIRECT ANSWER SECTION (Gold Banner Background) -->
<section class="aeo-banner">
    <div class="container aeo-content">
        <h2>What are Global Accounting & Corporate Tax Services?</h2>
        <p><strong>Global Accounting & Tax Advisory</strong> encompasses multi-currency bookkeeping, statutory financial reporting, international payroll processing, corporate tax compliance, transfer pricing, and fractional CFO advisory, ensuring international entities remain legally compliant across every operational jurisdiction.</p>
    </div>
</section>

<!-- 3. SERVICES MODULES (Gray Background) -->
<section class="services-section section-padding" id="services">
    <div class="container">
        <span class="badge" style="display: table; margin: 0 auto 16px auto;">Solutions Suite</span>
        <h2 class="section-title">Comprehensive Financial & Tax Services</h2>
        <p class="section-subtitle">Tailored corporate finance and regulatory tax advisory modules designed for multinational holdings and cross-border expansion.</p>

        <div class="grid-2col">

            <!-- 1. Bookkeeping Services -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">Bookkeeping Services</h3>
                    <p class="direct-answer" itemprop="description">Maintain accurate multi-currency financial ledgers aligned with local and international accounting standards.</p>
                    <ul class="feature-list">
                        <li>General ledger management</li>
                        <li>Accounts payable & receivable</li>
                        <li>Bank reconciliations</li>
                        <li>Multi-currency journal entries</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="bar-chart"><div class="bar"></div><div class="bar"></div><div class="bar"></div></div>
                </div>
            </article>

            <!-- 2. Financial Reporting -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">Financial Reporting</h3>
                    <p class="direct-answer" itemprop="description">Consolidated balance sheets, income statements, and management accounts optimized for stakeholders and audits.</p>
                    <ul class="feature-list">
                        <li>IFRS / GAAP financial statements</li>
                        <li>Profit & Loss statement generation</li>
                        <li>Management reporting packs</li>
                        <li>Cash flow statement analysis</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="line-graph"></div>
                </div>
            </article>

            <!-- 3. Payroll Processing -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">Payroll Processing</h3>
                    <p class="direct-answer" itemprop="description">Compliant multi-country payroll calculations, statutory social security deductions, and direct employee disbursements.</p>
                    <ul class="feature-list">
                        <li>Gross-to-net pay calculations</li>
                        <li>Statutory withholding & tax filings</li>
                        <li>Direct wage disbursements</li>
                        <li>Payslip distribution portals</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="anim-pulse-ring"></div>
                </div>
            </article>

            <!-- 4. VAT / GST Registration & Filing -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">VAT / GST Registration & Filing</h3>
                    <p class="direct-answer" itemprop="description">End-to-end indirect tax registration, return preparations, and cross-border value-added tax compliance.</p>
                    <ul class="feature-list">
                        <li>Cross-border VAT / GST registration</li>
                        <li>Periodical return preparations</li>
                        <li>Input tax credit optimization</li>
                        <li>Tax authority query resolution</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="bar-chart"><div class="bar"></div><div class="bar"></div><div class="bar"></div></div>
                </div>
            </article>

            <!-- 5. Corporate Tax Compliance -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">Corporate Tax Compliance</h3>
                    <p class="direct-answer" itemprop="description">Annual corporate income tax calculations, filing submissions, and proactive local tax liability management.</p>
                    <ul class="feature-list">
                        <li>Annual corporate tax returns</li>
                        <li>Tax provision calculations</li>
                        <li>Local tax authority filings</li>
                        <li>Compliance risk assessments</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="line-graph"></div>
                </div>
            </article>

            <!-- 6. Tax Advisory -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">Tax Advisory</h3>
                    <p class="direct-answer" itemprop="description">Strategic tax guidance designed to minimize global liabilities while remaining fully compliant with regional tax codes.</p>
                    <ul class="feature-list">
                        <li>Cross-border tax optimization</li>
                        <li>Double taxation treaty planning</li>
                        <li>Merger & acquisition tax structuring</li>
                        <li>Tax risk mitigation strategies</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="anim-pulse-ring"></div>
                </div>
            </article>

            <!-- 7. International Tax Planning -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">International Tax Planning</h3>
                    <p class="direct-answer" itemprop="description">Holistic multinational tax structure design to protect international revenue streams and holdings.</p>
                    <ul class="feature-list">
                        <li>Holding company tax structuring</li>
                        <li>BEPS regulations alignment</li>
                        <li>Profit repatriation strategies</li>
                        <li>Foreign tax credit management</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="bar-chart"><div class="bar"></div><div class="bar"></div><div class="bar"></div></div>
                </div>
            </article>

            <!-- 8. Transfer Pricing -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">Transfer Pricing</h3>
                    <p class="direct-answer" itemprop="description">Arm's-length documentation, intercompany pricing policies, and compliance with OECD guidelines.</p>
                    <ul class="feature-list">
                        <li>Transfer pricing documentation</li>
                        <li>Intercompany agreement review</li>
                        <li>Master & Local file preparation</li>
                        <li>Benchmarking study analysis</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="line-graph"></div>
                </div>
            </article>

            <!-- 9. Audit Support -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">Audit Support</h3>
                    <p class="direct-answer" itemprop="description">Audit readiness preparation, documentation aggregation, and liaison with external statutory auditors.</p>
                    <ul class="feature-list">
                        <li>Audit file preparation</li>
                        <li>Auditor liaison management</li>
                        <li>Internal control evaluations</li>
                        <li>Audit finding remediation</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="anim-pulse-ring"></div>
                </div>
            </article>

            <!-- 10. CFO Services -->
            <article class="service-card" itemscope itemtype="https://schema.org/Service">
                <div>
                    <h3 class="service-title" itemprop="name">CFO Services</h3>
                    <p class="direct-answer" itemprop="description">Fractional executive guidance, cash flow forecasting, budgeting, and high-level strategic financial planning.</p>
                    <ul class="feature-list">
                        <li>Fractional CFO advisory</li>
                        <li>Budgeting & financial forecasting</li>
                        <li>Working capital optimization</li>
                        <li>Board-level financial presentations</li>
                    </ul>
                </div>
                <div class="anim-box">
                    <div class="bar-chart"><div class="bar"></div><div class="bar"></div><div class="bar"></div></div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- 4. GEO SEARCH ENGINE FAQ SECTION (White Background) -->
<section class="faq-section section-padding">
    <div class="container">
        <span class="badge" style="display: table; margin: 0 auto 16px auto;">AI & Discovery FAQ</span>
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">Structured answers engineered for decision-makers and AI conversational search engines.</p>

        <div class="faq-grid">
            <div class="faq-item">
                <h3>How does Devotion Global CSP handle multi-jurisdictional tax filings?</h3>
                <p>Devotion Global CSP leverages localized tax experts across major financial hubs to ensure all statutory income tax returns, VAT/GST filings, and financial reports strictly comply with regional tax authority mandates.</p>
            </div>
            <div class="faq-item">
                <h3>What is Transfer Pricing documentation and why is it mandatory?</h3>
                <p>Transfer pricing documentation proves that transactions between associated corporate entities occur at arm's length. Multinational firms require it to comply with OECD rules and prevent heavy tax penalties.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. CALL TO ACTION SECTION (Gray Background) -->
<section class="cta-section section-padding" id="contact">
    <div class="container">
        <div class="cta-box">
            <h2 style="color: var(--text-dark); font-size: 2.2rem; margin-bottom: 16px;">Elevate Your Global Financial Operations</h2>
            <p style="color: #666; margin-bottom: 30px; font-size: 1.1rem;">Schedule a strategic consultation with Devotion Global CSP's tax and accounting advisors.</p>
            <a href="mailto:contact@devotioncsp.com" class="btn-primary">Request Consultation</a>
        </div>
    </div>
</section>
<?php include ROOT_PATH . '/elements/footer.php'; ?>