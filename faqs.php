<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

    <style>
     
        section {
            padding: 80px 0;
        }

        /* Common Elements */
        .badge {
            display: inline-block;
            background: var(--gold-light);
            color: var(--gold-primary);
            border: 1px solid var(--gold-border);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .btn-gold {
            display: inline-block;
            background: var(--gold-primary);
            color: var(--white);
            padding: 14px 32px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .btn-gold:hover {
            background: var(--gold-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Hero Banner */
        .hero {
            background: linear-gradient(135deg, var(--gold-banner-bg), var(--gold-hover));
            color: var(--white);
            text-align: center;
            padding: 120px 0 90px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.15rem;
            max-width: 650px;
            margin: 0 auto;
            opacity: 0.95;
        }

        /* Category Filter Nav */
        .faq-categories {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .category-btn {
            background: var(--white);
            border: 1px solid var(--gold-border);
            color: var(--text-dark);
            padding: 10px 24px;
            border-radius: 50px;
            font-family: var(--font-family);
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .category-btn.active,
        .category-btn:hover {
            background: var(--gold-primary);
            color: var(--white);
            border-color: var(--gold-primary);
            box-shadow: var(--shadow-sm);
        }

        /* Accordion Style */
        .accordion-item {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            transition: var(--transition);
        }

        .accordion-item:hover {
            box-shadow: var(--shadow-sm);
        }

        .accordion-header {
            width: 100%;
            background: none;
            border: none;
            padding: 22px 28px;
            text-align: left;
            font-family: var(--font-family);
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--text-dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .accordion-header:hover {
            color: var(--gold-primary);
        }

        .accordion-icon {
            font-size: 1.3rem;
            color: var(--gold-primary);
            transition: var(--transition);
        }

        .accordion-item.active .accordion-icon {
            transform: rotate(45deg);
        }

        .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            background-color: var(--gold-light);
            border-top: 0px solid var(--gold-border);
        }

        .accordion-item.active .accordion-body {
            max-height: 300px;
            padding: 20px 28px 24px;
            border-top-width: 1px;
        }

        .accordion-body p {
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        /* CTA Box */
        .cta-box {
            background: var(--gray-color);
            border: 1px solid var(--gold-border);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <!-- Hero Banner -->
    <section class="hero">
        <div class="container" data-aos="fade-up">
            <h1>How Can We Help?</h1>
            <p>Find answers to common questions about our service offerings, luxury standards, and global operations.</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section>
        <div class="container">
            <!-- Filter Categories -->
            <div class="faq-categories" data-aos="fade-up">
                <button class="category-btn active">All Questions</button>
                <button class="category-btn">Services</button>
                <button class="category-btn">Membership</button>
                <button class="category-btn">Billing</button>
                <button class="category-btn">Support</button>
            </div>

            <!-- Accordion List -->
            <div data-aos="fade-up" data-aos-delay="100">
                
                <div class="accordion-item">
                    <button class="accordion-header">
                        What distinguishes your brand services from competitors?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-body">
                        <p>We combine bespoke attention to detail with uncompromising standards of quality. Every client engagement is managed by dedicated specialists committed to delivering tailored solutions.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">
                        How do I schedule an initial private consultation?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-body">
                        <p>You can request an appointment through our Contact page or by directly reaching our client service desk via phone. A representative will confirm your tailored schedule within 24 hours.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">
                        What global regions do you currently support?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-body">
                        <p>We serve international clients across North America, Europe, Asia-Pacific, and the Middle East, offering both remote digital consultations and localized in-person meetings.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">
                        What security measures protect personal and billing data?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-body">
                        <p>We enforce rigorous data protection standards using enterprise-grade encryption and privacy protocols. Your information remains strictly confidential and secure at all times.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">
                        Can services be customized to specific organizational requirements?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-body">
                        <p>Yes, all our offerings are customizable. We perform an in-depth evaluation of your specific goals to design solutions tailored precisely to your operational needs.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header">
                        What is your policy regarding service revisions or adjustments?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-body">
                        <p>Client satisfaction is fundamental. We provide dedicated review cycles with every service package to ensure the final delivery fully aligns with your expectations.</p>
                    </div>
                </div>

            </div>

            <!-- Still Have Questions CTA -->
            <div class="cta-box" data-aos="zoom-in" data-aos-delay="200">
                <span class="badge">Support</span>
                <h2 class="section-title">Still Have Questions?</h2>
                <p style="margin-bottom: 24px; color: var(--text-dark);">Can’t find the answer you’re looking for? Please reach out to our dedicated concierge team.</p>
                <a href="#" class="btn-gold">Contact US</a>
            </div>
        </div>
    </section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>