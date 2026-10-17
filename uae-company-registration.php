<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';
?>

    <!-- JSON-LD Structured Data for AEO / GEO / SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ProfessionalService",
          "@id": "https://www.healyconsultants.com/#organization",
          "name": "Healy Consultants Group DMCC",
          "url": "https://www.healyconsultants.com/",
          "logo": "https://placehold.co/300x100/ab8139/ffffff?text=Healy+Consultants",
          "description": "Global corporate services firm specializing in Dubai company setup, trade licensing, UAE national sponsorship, banking solutions, and visa services.",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Dubai",
            "addressCountry": "AE"
          },
          "telephone": "+971-4-1234567",
          "priceRange": "$$$"
        },
        {
          "@type": "WebPage",
          "@id": "https://www.healyconsultants.com/dubai-company-setup/#webpage",
          "url": "https://www.healyconsultants.com/dubai-company-setup/",
          "name": "Dubai Company Setup & Business Incorporation Guide",
          "description": "Complete breakdown of advantages, steps, free zones, mainland LLC, offshore entities, costs, and compliance for setting up a company in Dubai, UAE.",
          "isPartOf": {
            "@id": "https://www.healyconsultants.com/#website"
          }
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Can a foreign company have 100% foreign ownership in Dubai Mainland?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, 100% foreign-owned Dubai mainland LLCs can be registered without a local partner or registered agent for most commercial, trading, and industrial activities following recent UAE legal reforms."
              }
            },
            {
              "@type": "Question",
              "name": "What is the corporate tax rate for companies in Dubai, UAE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The UAE standard corporate tax rate is 9% on taxable profits exceeding AED 375,000. Qualifying Free Zone entities meeting specific statutory conditions may benefit from 0% tax on qualifying income."
              }
            },
            {
              "@type": "Question",
              "name": "What bank deposit is required when establishing a Dubai foreign branch?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A branch of a foreign company in Dubai is required to deposit a bank guarantee of AED 50,000 (US$13,650) during company registration, which remains blocked until entity de-registration."
              }
            }
          ]
        }
      ]
    }
    </script>

    <style>

        .text-gold {
            color: var(--gold-primary) !important;
        }

        .bg-gold-light {
            background-color: var(--gold-light);
        }

        .bg-golden-gradient {
            background: var(--golden-gradient-background);
        }

        .btn-gold {
            background-color: var(--gold-primary);
            color: var(--white);
            border-radius: 50px;
            padding: 0.6rem 1.6rem;
            font-weight: 600;
            border: none;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .btn-gold:hover {
            background-color: var(--gold-hover);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline-gold {
            border: 2px solid var(--gold-primary);
            color: var(--gold-primary);
            border-radius: 50px;
            padding: 0.55rem 1.5rem;
            font-weight: 600;
            background: transparent;
            transition: var(--transition);
        }

        .btn-outline-gold:hover {
            background-color: var(--gold-primary);
            color: var(--white);
        }

        /* Hero Section */
        .hero-section {
            padding: 5rem 0 4rem;
            background: linear-gradient(135deg, #2b2b2b 0%, #1a1a1a 100%);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: radial-gradient(circle at 80% 20%, rgba(171, 129, 57, 0.25) 0%, transparent 60%);
            pointer-events: none;
        }

        .hero-badge {
            background: rgba(171, 129, 57, 0.2);
            border: 1px solid var(--gold-primary);
            color: #e5c17c;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--card-radius);
            padding: 1.25rem;
            text-align: center;
            transition: var(--transition);
        }

        .stat-card:hover {
            border-color: var(--gold-primary);
            transform: translateY(-50px) scale(1.02);
            transform: translateY(-4px);
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--gold-primary);
        }

        /* Quick Nav Cards */
        .toc-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            border-radius: var(--card-radius);
            padding: 1.25rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: var(--text-dark);
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
            height: 100%;
        }

        .toc-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-primary);
            color: var(--gold-primary);
        }

        .toc-num {
            background: var(--brand-dark);
            color: var(--white);
            font-weight: 700;
            font-size: 1.1rem;
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .toc-card:hover .toc-num {
            background: var(--gold-primary);
        }

        /* Content Cards & Sections */
        .section-title-wrap {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        .section-subtitle {
            color: var(--text-muted);
            max-width: 650px;
            margin: 0 auto;
        }

        .custom-card {
            background: var(--white);
            border-radius: var(--card-radius);
            border: 1px solid var(--gold-border);
            padding: 2rem;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            height: 100%;
        }

        .custom-card:hover {
            box-shadow: var(--shadow-hover);
        }

        /* Lists with Custom Icons */
        .pro-list, .con-list {
            list-style: none;
            padding-left: 0;
        }

        .pro-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1.2rem;
        }

        .pro-list li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: #10b981;
            background: rgba(16, 185, 129, 0.1);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
        }

        .con-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1.2rem;
        }

        .con-list li::before {
            content: "\f00d";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: #ef4444;
            background: rgba(239, 68, 68, 0.1);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
        }

        /* Testimonial Box */
        .testimonial-box {
            background: var(--gold-light);
            border-left: 4px solid var(--gold-primary);
            padding: 1.8rem;
            border-radius: 0 var(--card-radius) var(--card-radius) 0;
            margin: 2rem 0;
            position: relative;
        }

        .testimonial-quote {
            font-style: italic;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        /* Free Zone Table & Badges */
        .custom-table-container {
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gold-border);
        }

        .table-custom {
            margin-bottom: 0;
            width: 100%;
        }

        .table-custom th {
            background-color: var(--brand-dark);
            color: var(--white);
            padding: 1rem;
            font-weight: 600;
            border: none;
        }

        .table-custom td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #eef0f3;
        }

        /* Interactive Filter Tabs */
        .filter-btn {
            border: 1px solid var(--gold-border);
            background: var(--white);
            color: var(--text-dark);
            padding: 0.5rem 1.2rem;
            border-radius: 30px;
            font-weight: 500;
            margin: 0.2rem;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--gold-primary);
            color: var(--white);
            border-color: var(--gold-primary);
        }

        /* Timeline for Setup Steps */
        .step-timeline {
            position: relative;
            padding-left: 2rem;
        }

        .step-timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--gold-border);
        }

        .step-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .step-node {
            position: absolute;
            left: -2rem;
            top: 0;
            width: 33px;
            height: 33px;
            border-radius: 50%;
            background: var(--gold-primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.85rem;
            box-shadow: 0 0 0 4px var(--gold-light);
        }

        /* Calculator Card */
        .calc-card {
            background: linear-gradient(145deg, #ffffff 0%, var(--gold-light) 100%);
            border: 1px solid var(--gold-primary);
            border-radius: var(--card-radius);
            padding: 2rem;
        }

        /* Accordion Customization */
        .accordion-button:not(.collapsed) {
            color: var(--gold-primary);
            background-color: var(--gold-light);
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--gold-primary);
        }

        /* Floating Actions */
        .floating-cta {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn-float {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            transition: var(--transition);
            text-decoration: none;
        }

        .btn-float-wa { background-color: #25D366; }
        .btn-float-mail { background-color: var(--gold-primary); }

        .btn-float:hover {
            transform: scale(1.1);
            color: white;
        }

    </style>

    <!-- Hero Banner -->
    <section class="hero-section" id="overview">
        <div class="container position-relative z-1">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7" data-aos="fade-right">
                    <span class="hero-badge"><i class="fa-solid fa-award me-1"></i> 10+ Years UAE Incorporation Expertise</span>
                    <h1 class="display-5 fw-bold mb-3 text-white">Doing Business in Dubai</h1>
                    <p class="lead mb-4 text-light">
                        For over a decade, <strong>Healy Consultants Group</strong> has been providing established international companies with comprehensive <strong>i)</strong> company setup services in Dubai, <strong>ii)</strong> trade licensing services, <strong>iii)</strong> UAE national sponsorship (where required), <strong>iv)</strong> corporate bank account solutions, <strong>v)</strong> employment visa consultation, <strong>vi)</strong> payroll services, and <strong>vii)</strong> office space solutions.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#calculator" class="btn btn-gold btn-lg"><i class="fa-solid fa-calculator me-2"></i>Estimate Setup Cost</a>
                        <a href="#guide-toc" class="btn btn-outline-gold btn-lg text-white"><i class="fa-solid fa-book-open me-2"></i>Explore Setup Guide</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number">3.68M+</div>
                                <div class="text-white-50 small mt-1">Dubai Population</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number">67,222</div>
                                <div class="text-white-50 small mt-1">New Companies (2023)</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number">217,788</div>
                                <div class="text-white-50 small mt-1">Active Chamber Members</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-number">$6.81B</div>
                                <div class="text-white-50 small mt-1">Dubai FDI Inflow (2023)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Table of Contents / Quick Navigation -->
    <section class="py-5 bg-gold-light" id="guide-toc">
        <div class="container">
            <div class="section-title-wrap" data-aos="fade-up">
                <h2 class="section-title">Dubai Company Setup Guide</h2>
                <p class="section-subtitle">Navigate through our detailed breakdown on establishing and expanding your enterprise in Dubai</p>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="#advantages" class="toc-card">
                        <div class="toc-num">01</div>
                        <div>
                            <h6 class="mb-1 fw-bold">Advantages & Disadvantages</h6>
                            <small class="text-muted">Key benefits & market challenges</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <a href="#steps" class="toc-card">
                        <div class="toc-num">02</div>
                        <div>
                            <h6 class="mb-1 fw-bold">Steps to Setup a Company</h6>
                            <small class="text-muted">Step-by-step registration workflow</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="#freezones" class="toc-card">
                        <div class="toc-num">03</div>
                        <div>
                            <h6 class="mb-1 fw-bold">Dubai Free Zones Guide</h6>
                            <small class="text-muted">DMCC, JAFZA, DAFZA comparison</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                    <a href="#mainland" class="toc-card">
                        <div class="toc-num">04</div>
                        <div>
                            <h6 class="mb-1 fw-bold">Dubai Mainland Company</h6>
                            <small class="text-muted">DED registration & 100% ownership</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#offshore" class="toc-card">
                        <div class="toc-num">05</div>
                        <div>
                            <h6 class="mb-1 fw-bold">Dubai Offshore Company</h6>
                            <small class="text-muted">Asset protection & international trade</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="350">
                    <a href="#testimonial" class="toc-card">
                        <div class="toc-num">06</div>
                        <div>
                            <h6 class="mb-1 fw-bold">Case Studies & Testimonials</h6>
                            <small class="text-muted">Real client setup success stories</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="400">
                    <a href="#faq" class="toc-card">
                        <div class="toc-num">07</div>
                        <div>
                            <h6 class="mb-1 fw-bold">Frequently Asked Questions</h6>
                            <small class="text-muted">Corporate laws, tax & bank accounts</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Insights Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="text-gold fw-bold text-uppercase tracking-wider">Economic Landscape</span>
                    <h2 class="mt-2 mb-3">Why Dubai is a Favourable Destination for International Businesses</h2>
                    <p class="text-muted">
                        Home to over <strong>3.68 million people</strong>, Dubai is the largest and most developed city in the UAE. It has established itself as a leading financial hub over the years, solidifying its economic influence in the Middle East and beyond.
                    </p>
                    <p class="text-muted">
                        In 2023, the Dubai Chamber of Commerce welcomed <strong>67,222 new companies</strong>, increasing its active members by 26.8% from the previous year to a total of <strong>217,788</strong>.
                    </p>
                    <div class="p-3 bg-gold-light border-start border-4 border-warning rounded-2">
                        <i class="fa-solid fa-chart-line text-gold me-2 fs-5"></i>
                        <strong>FDI Growth:</strong> UAE total FDI capital inflows rose to <strong>US$15.08 billion in 2023</strong> (+33% YoY). Dubai captured the majority share with <strong>US$6.81 billion</strong>.
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="custom-card">
                        <h5 class="fw-bold mb-3"><i class="fa-solid fa-globe text-gold me-2"></i> Key Drivers for Foreign Headquarters</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-3">
                                <div class="badge bg-gold-light text-gold p-2 me-3 rounded-circle" style="width:36px; height:36px;"><i class="fa-solid fa-vault"></i></div>
                                <div>
                                    <strong>Consistent Foreign Direct Investment (FDI)</strong>
                                    <p class="text-muted small mb-0">Steady economic landscape providing businesses a secure growth environment.</p>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <div class="badge bg-gold-light text-gold p-2 me-3 rounded-circle" style="width:36px; height:36px;"><i class="fa-solid fa-scale-balanced"></i></div>
                                <div>
                                    <strong>Business-Friendly Ecosystem</strong>
                                    <p class="text-muted small mb-0">Liberal business laws and instant access to Middle East, African, and Asian markets.</p>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <div class="badge bg-gold-light text-gold p-2 me-3 rounded-circle" style="width:36px; height:36px;"><i class="fa-solid fa-users"></i></div>
                                <div>
                                    <strong>Global Network of Entrepreneurs</strong>
                                    <p class="text-muted small mb-0">Foreigners represent over 80% of Dubai's population, fostering vibrant international networking.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="badge bg-gold-light text-gold p-2 me-3 rounded-circle" style="width:36px; height:36px;"><i class="fa-solid fa-heart"></i></div>
                                <div>
                                    <strong>Welcoming Environment & High Liveability</strong>
                                    <p class="text-muted small mb-0">Ranked 10th best city for expatriates globally with world-class infrastructure and lifestyle.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pros & Cons Section -->
    <section class="py-5 bg-golden-gradient" id="advantages">
        <div class="container">
            <div class="section-title-wrap" data-aos="fade-up">
                <h2 class="section-title">Advantages & Disadvantages of Dubai Business</h2>
                <p class="section-subtitle">A balanced strategic overview to help corporate leaders evaluate UAE expansion</p>
            </div>

            <div class="row g-4">
                <!-- Advantages -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="custom-card border-top border-success border-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-circle-check text-success fs-3 me-3"></i>
                            <h4 class="mb-0 fw-bold">Advantages of Dubai Companies</h4>
                        </div>
                        <ul class="pro-list">
                            <li>
                                <strong>Over 20 Specialized Free Zones:</strong> Tailored hubs for manufacturing, logistics, media, IT, healthcare, and commodities (e.g., DMCC).
                            </li>
                            <li>
                                <strong>DIFC Financial Leadership:</strong> Premier financial hub in MEA; first in Middle East to launch tailored peer-to-peer and crowdfunding regulations.
                            </li>
                            <li>
                                <strong>Global Logistics Hub:</strong> Unmatched freight and shipping infrastructure connecting Europe, Asia, and Africa.
                            </li>
                            <li>
                                <strong>Thriving Trading Ecosystem:</strong> Favourable trade finance facilities and global trade agreements.
                            </li>
                            <li>
                                <strong>100% Foreign Ownership Mainland LLC:</strong> No requirement for local Emirati sponsor or agent for most commercial activities.
                            </li>
                            <li>
                                <strong>Work Bundle Platform:</strong> Streamlined employee recruitment and labor management processing.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Disadvantages & Challenges -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="custom-card border-top border-danger border-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-circle-xmark text-danger fs-3 me-3"></i>
                            <h4 class="mb-0 fw-bold">Problems & Compliance Factors</h4>
                        </div>
                        <ul class="con-list">
                            <li>
                                <strong>Global Recession Vulnerability:</strong> High reliance on international trade exposes local economy to external global downturns.
                            </li>
                            <li>
                                <strong>Blocked Foreign Branch Guarantee:</strong> Foreign branches must deposit an AED 50,000 (US$13,650) bank guarantee blocked until entity liquidation.
                            </li>
                            <li>
                                <strong>Strict Regulatory Compliance:</strong> Penalties apply for failing to meet Economic Substance Rules (ESR), AML, and VAT filing requirements.
                            </li>
                            <li>
                                <strong>Free Zone Trading Restrictions:</strong> Restricted from directly trading in Mainland UAE without an agent or DED NOC.
                            </li>
                            <li>
                                <strong>Specific Joint Venture Rules:</strong> Certain restricted strategic activities still require meaningful Emirati shareholding.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-4 bg-white" id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="zoom-in">
                    <div class="testimonial-box">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-quote-left text-gold fs-1"></i>
                            <div>
                                <p class="testimonial-quote fs-5">
                                    "iPayLinks engaged Healy Consultants Group DMCC to establish a branch of a foreign company in Dubai. During the engagement Healy Consultants team professionally communicated and obtained appropriate licenses from multiple local authorities. We are confident to recommend Healy Consultants Group for business setup and are looking forward to working with the company again for future projects."
                                </p>
                                <div class="fw-bold text-dark">— Mr. Wang Shuaijiang, Branch Manager</div>
                                <div class="text-gold small"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> Verified Client Case Study</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step by Step Setup Process -->
    <section class="py-5 bg-gold-light" id="steps">
        <div class="container">
            <div class="section-title-wrap" data-aos="fade-up">
                <h2 class="section-title">Steps to Incorporate a Company in Dubai</h2>
                <p class="section-subtitle">Our structured methodology for hassle-free business incorporation</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="step-timeline">
                        <div class="step-item">
                            <div class="step-node">1</div>
                            <h5 class="fw-bold">Select Entity Structure & Business Activity</h5>
                            <p class="text-muted small">Determine whether Free Zone, Mainland LLC, or Offshore best aligns with your target market and operations.</p>
                        </div>
                        <div class="step-item">
                            <div class="step-node">2</div>
                            <h5 class="fw-bold">Trade Name Reservation & Pre-Approval</h5>
                            <p class="text-muted small">Submit proposed corporate name options to DED or relevant Free Zone Authority for clearance.</p>
                        </div>
                        <div class="step-item">
                            <div class="step-node">3</div>
                            <h5 class="fw-bold">Document Drafting & Verification</h5>
                            <p class="text-muted small">Prepare Memorandum of Association (MOA), passport copies, business plan, and board resolutions.</p>
                        </div>
                        <div class="step-item">
                            <div class="step-node">4</div>
                            <h5 class="fw-bold">Lease Office Space & Ejari Registration</h5>
                            <p class="text-muted small">Secure physical office space or flexi-desk agreement as mandated by authority licensing rules.</p>
                        </div>
                        <div class="step-item">
                            <div class="step-node">5</div>
                            <h5 class="fw-bold">License Issuance & Bank Account Setup</h5>
                            <p class="text-muted small">Receive official Commercial/Service License and proceed with corporate multi-currency banking setup.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="custom-card bg-white">
                        <h4 class="fw-bold mb-3 text-gold"><i class="fa-solid fa-shield-halved me-2"></i>Why Choose Healy Consultants?</h4>
                        <p class="text-muted">
                            Establishing a company in Dubai can be complex for foreign corporations unfamiliar with local administrative intricacies. Healy Consultants offers:
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fa-solid fa-check-circle text-gold me-2"></i> <strong>Expert Legal Guidance:</strong> Tailored incorporation strategies.</li>
                            <li class="mb-2"><i class="fa-solid fa-check-circle text-gold me-2"></i> <strong>End-to-End Processing:</strong> Complete handling of licensing, legal translation, and visas.</li>
                            <li class="mb-2"><i class="fa-solid fa-check-circle text-gold me-2"></i> <strong>Corporate Banking Assistance:</strong> Introduction to top UAE & international banks.</li>
                            <li class="mb-2"><i class="fa-solid fa-check-circle text-gold me-2"></i> <strong>Time & Cost Savings:</strong> Minimizing administrative delays and unbudgeted expenses.</li>
                        </ul>
                        <button class="btn btn-gold w-full mt-3" data-bs-toggle="modal" data-bs-target="#inquiryModal">Schedule Advisory Call</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Zones Section with Interactive Filter -->
    <section class="py-5" id="freezones">
        <div class="container">
            <div class="section-title-wrap" data-aos="fade-up">
                <h2 class="section-title">Dubai Free Zones Comparison & Directory</h2>
                <p class="section-subtitle">Compare tax benefits, foreign ownership, and sector specialization across top Dubai Free Zones</p>
            </div>

            <!-- Free Zone Filter Controls -->
            <div class="d-flex justify-content-center flex-wrap gap-2 mb-4" data-aos="fade-up">
                <button class="filter-btn active" onclick="filterFZ('all', this)">All Free Zones</button>
                <button class="filter-btn" onclick="filterFZ('trade', this)">Trade & Commodities</button>
                <button class="filter-btn" onclick="filterFZ('finance', this)">Finance & Tech</button>
                <button class="filter-btn" onclick="filterFZ('logistics', this)">Logistics & Port</button>
                <button class="filter-btn" onclick="filterFZ('media', this)">Media & Design</button>
            </div>

            <!-- Free Zone Matrix Table -->
            <div class="custom-table-container mb-5" data-aos="fade-up">
                <div class="table-responsive">
                    <table class="table table-custom table-hover">
                        <thead>
                            <tr>
                                <th>Free Zone Jurisdiction</th>
                                <th>Primary Specialization / Key Features</th>
                                <th>Foreign Ownership</th>
                                <th>Corp. Tax Rate</th>
                            </tr>
                        </thead>
                        <tbody id="fzTableBody">
                            <tr data-category="trade">
                                <td><strong>DMCC</strong> (Dubai Multi Commodities Centre)</td>
                                <td>Gold, diamonds, commodities, crypto, technology & general trading</td>
                                <td><span class="badge bg-success">100%</span></td>
                                <td>0% Qualifying</td>
                            </tr>
                            <tr data-category="finance">
                                <td><strong>DIFC</strong> (Dubai International Financial Centre)</td>
                                <td>Banking, asset management, fintech, insurance & legal services</td>
                                <td><span class="badge bg-success">100%</span></td>
                                <td>0% Qualifying</td>
                            </tr>
                            <tr data-category="logistics">
                                <td><strong>JAFZA</strong> (Jebel Ali Free Zone)</td>
                                <td>Heavy industry, global logistics, maritime, warehousing & manufacturing</td>
                                <td><span class="badge bg-success">100%</span></td>
                                <td>0% Qualifying</td>
                            </tr>
                            <tr data-category="logistics">
                                <td><strong>DAFZA</strong> (Dubai Airport Freezone)</td>
                                <td>Aviation, high-value electronics, freight forwarding & light industry</td>
                                <td><span class="badge bg-success">100%</span></td>
                                <td>0% Qualifying</td>
                            </tr>
                            <tr data-category="media">
                                <td><strong>d3 / DMC</strong> (Dubai Design & Media City)</td>
                                <td>Design, fashion, publishing, broadcasting, digital media & creative agency</td>
                                <td><span class="badge bg-success">100%</span></td>
                                <td>0% Qualifying</td>
                            </tr>
                            <tr data-category="trade">
                                <td><strong>IFZA / Meydan Free Zone</strong></td>
                                <td>Cost-effective consultancy, e-commerce, service & general trading licenses</td>
                                <td><span class="badge bg-success">100%</span></td>
                                <td>0% Qualifying</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Comparative Summary Matrix -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="custom-card">
                        <h5 class="fw-bold text-gold"><i class="fa-solid fa-gem me-2"></i>DMCC Spotlight</h5>
                        <p class="small text-muted">Voted Global Free Zone of the Year multiple times. Ideal for trading companies, commodities, and modern tech firms.</p>
                        <ul class="small text-muted ps-3 mb-0">
                            <li>Physical office / flexi-desk required</li>
                            <li>Annual audit required</li>
                            <li>Average setup time: 3-4 weeks</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-card">
                        <h5 class="fw-bold text-gold"><i class="fa-solid fa-ship me-2"></i>JAFZA Spotlight</h5>
                        <p class="small text-muted">Directly connected to Jebel Ali Port. Designed for large-scale manufacturing, international distribution, and warehousing.</p>
                        <ul class="small text-muted ps-3 mb-0">
                            <li>Land plots & customized warehouses</li>
                            <li>Direct sea-air freight link</li>
                            <li>Average setup time: 4 weeks</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-card">
                        <h5 class="fw-bold text-gold"><i class="fa-solid fa-plane-departure me-2"></i>DAFZA Spotlight</h5>
                        <p class="small text-muted">Adjoins Dubai International Airport. Premium infrastructure for high-value cargo, pharma, and rapid air transport.</p>
                        <ul class="small text-muted ps-3 mb-0">
                            <li>Rapid customs clearance</li>
                            <li>Dedicated cold storage facilities</li>
                            <li>Average setup time: 2-3 weeks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mainland Business Setup & Tax Section -->
    <section class="py-5 bg-gold-light" id="mainland">
        <div class="container">
            <div class="section-title-wrap" data-aos="fade-up">
                <h2 class="section-title">Dubai Mainland Company Setup & Tax Regime</h2>
                <p class="section-subtitle">Direct access to UAE local market & corporate tax regulations for foreign corporations</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="custom-card bg-white">
                        <h4 class="fw-bold mb-3"><i class="fa-solid fa-city text-gold me-2"></i>Mainland Structure Highlights</h4>
                        <p class="text-muted">
                            A Dubai Mainland company is registered under the Department of Economy and Tourism (DET / DED). It grants unrestricted capability to trade across all UAE Emirates and directly engage in government contracts.
                        </p>
                        <div class="mb-3">
                            <h6><i class="fa-solid fa-check text-success me-2"></i> Unrestricted Market Access</h6>
                            <p class="small text-muted mb-0">Operate anywhere in UAE and expand across the broader GCC region (Saudi Arabia, Qatar, Oman, Kuwait, Bahrain).</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fa-solid fa-check text-success me-2"></i> 100% Foreign Ownership</h6>
                            <p class="small text-muted mb-0">Foreign corporations can maintain total ownership across commercial, trading, IT, and industrial categories.</p>
                        </div>
                        <div>
                            <h6><i class="fa-solid fa-check text-success me-2"></i> Diverse License Types</h6>
                            <p class="small text-muted mb-0">Options include Limited Liability Company (LLC), Branch Office of a Foreign Company, and Representative Office.</p>
                        </div>
                    </div>
                </div>

                <!-- Tax Regulations Box -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="custom-card bg-white border-gold">
                        <h4 class="fw-bold mb-3 text-gold"><i class="fa-solid fa-file-invoice-dollar me-2"></i>UAE Corporate Tax Structure</h4>
                        <div class="p-3 bg-gold-light rounded-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <strong>Standard Corporate Tax Rate</strong>
                                <span class="badge bg-gold-primary fs-6">9%</span>
                            </div>
                            <small class="text-muted">Applicable on taxable business net profits exceeding <strong>AED 375,000</strong> (effective June 1, 2023).</small>
                        </div>
                        <div class="mb-2">
                            <strong>DMTT Tax Reform:</strong>
                            <p class="small text-muted mb-0">15% Domestic Minimum Top-up Tax for large multinationals with global revenues exceeding €750M ($793M+).</p>
                        </div>
                        <div class="mb-2">
                            <strong>Standard VAT:</strong>
                            <p class="small text-muted mb-0">Low standard rate of 5% on taxable goods and services with zero-rated international exports.</p>
                        </div>
                        <div>
                            <strong>Low Import Tariffs:</strong>
                            <p class="small text-muted mb-0">Standard customs duty of 5% with extensive exemptions under UAE strategic trade agreements.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Required Documents Checklist -->
            <div class="custom-card bg-white" data-aos="fade-up">
                <h5 class="fw-bold mb-3"><i class="fa-solid fa-folder-open text-gold me-2"></i>Required Documentation Checklist for Mainland Setup</h5>
                <div class="row g-3 text-muted">
                    <div class="col-md-4"><i class="fa-regular fa-file-pdf text-gold me-2"></i> Valid Passport copies of shareholders/managers</div>
                    <div class="col-md-4"><i class="fa-regular fa-file-pdf text-gold me-2"></i> Proof of residential address (utility bill)</div>
                    <div class="col-md-4"><i class="fa-regular fa-file-pdf text-gold me-2"></i> Memorandum of Association (MOA)</div>
                    <div class="col-md-4"><i class="fa-regular fa-file-pdf text-gold me-2"></i> Trade Name Reservation Certificate from DED</div>
                    <div class="col-md-4"><i class="fa-regular fa-file-pdf text-gold me-2"></i> Comprehensive Business Plan</div>
                    <div class="col-md-4"><i class="fa-regular fa-file-pdf text-gold me-2"></i> Commercial Tenancy Contract (Ejari)</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offshore Company Formation -->
    <section class="py-5" id="offshore">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="text-gold fw-bold text-uppercase">Tax-Efficient International Holding</span>
                    <h2 class="mt-2 mb-3">Dubai Offshore Company Formation</h2>
                    <p class="text-muted">
                        For corporations seeking to establish an offshore company in Dubai, the UAE offers a cost-efficient, tax-exempt structure designed for managing international business activities, holding assets, and managing global intellectual property.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa-solid fa-shield text-gold me-2"></i> <strong>Asset Protection:</strong> Secure holding mechanism for real estate and corporate shares.</li>
                        <li class="mb-2"><i class="fa-solid fa-user-check text-gold me-2"></i> <strong>Flexible Structure:</strong> Minimum single director and shareholder allowed (any nationality).</li>
                        <li class="mb-2"><i class="fa-solid fa-globe text-gold me-2"></i> <strong>Key Jurisdictions:</strong> Jebel Ali Free Zone (JAFZA Offshore), RAK ICC, and Ajman Free Zone (AFZ).</li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="p-4 bg-golden-gradient rounded-4 border border-gold">
                        <h5 class="fw-bold mb-3"><i class="fa-solid fa-circle-info text-gold me-2"></i>Offshore Key Operating Parameters</h5>
                        <div class="d-flex mb-3 border-bottom pb-2">
                            <span class="fw-bold w-50">Local UAE Trading:</span>
                            <span class="text-danger w-50"><i class="fa-solid fa-xmark me-1"></i> Not Permitted</span>
                        </div>
                        <div class="d-flex mb-3 border-bottom pb-2">
                            <span class="fw-bold w-50">UAE Visas Eligible:</span>
                            <span class="text-danger w-50"><i class="fa-solid fa-xmark me-1"></i> No Visas</span>
                        </div>
                        <div class="d-flex mb-3 border-bottom pb-2">
                            <span class="fw-bold w-50">Physical Office:</span>
                            <span class="text-success w-50"><i class="fa-solid fa-check me-1"></i> Registered Agent Address</span>
                        </div>
                        <div class="d-flex">
                            <span class="fw-bold w-50">Corporate Bank Account:</span>
                            <span class="text-success w-50"><i class="fa-solid fa-check me-1"></i> Allowed (UAE & Global)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Cost Estimator -->
    <section class="py-5 bg-gold-light" id="calculator">
        <div class="container">
            <div class="section-title-wrap" data-aos="fade-up">
                <h2 class="section-title">Dubai Business Setup Cost Estimator</h2>
                <p class="section-subtitle">Get an instant indicative budget for your proposed UAE corporate structure</p>
            </div>

            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-lg-8">
                    <div class="calc-card">
                        <form id="setupCalcForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Jurisdiction Type</label>
                                    <select class="form-select" id="calcJurisdiction" onchange="calculateCost()">
                                        <option value="15000">Free Zone (Standard / Flexi-Desk)</option>
                                        <option value="25000">Dubai Mainland LLC (DET)</option>
                                        <option value="12000">Offshore Entity (RAK ICC / JAFZA)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Number of Residence Visas</label>
                                    <select class="form-select" id="calcVisas" onchange="calculateCost()">
                                        <option value="0">0 Visas</option>
                                        <option value="4000">1 Visa (~AED 4,000)</option>
                                        <option value="8000">2 Visas (~AED 8,000)</option>
                                        <option value="16000">4 Visas (~AED 16,000)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Office Space Requirements</label>
                                    <select class="form-select" id="calcOffice" onchange="calculateCost()">
                                        <option value="0">Shared / Flexi-Desk (Included)</option>
                                        <option value="15000">Physical Executive Office (~AED 15,000+)</option>
                                        <option value="35000">Warehouse / Industrial Unit (~AED 35,000+)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Corporate Banking Assistance</label>
                                    <select class="form-select" id="calcBanking" onchange="calculateCost()">
                                        <option value="5000">Standard UAE Bank Account Introduction</option>
                                        <option value="8000">Multi-Jurisdictional International Banking</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-muted small">Estimated Setup Budget:</span>
                                    <h3 class="fw-bold text-gold mb-0" id="calcTotal">AED 20,000</h3>
                                    <small class="text-muted">(Approx. <span id="calcUsd">$5,450</span> USD)</small>
                                </div>
                                <button type="button" class="btn btn-gold" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                                    Request Official Quote
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Consultation Modal -->
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header bg-gold-primary text-white">
                    <h5 class="modal-title fw-bold" id="inquiryModalLabel">Get Free Advisory Consultation</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="consultationForm" onsubmit="handleFormSubmit(event)">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" placeholder="e.g., Mr. Wang Shuaijiang" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" placeholder="name@company.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Corporate Structure Interest</label>
                            <select class="form-select">
                                <option>Dubai Free Zone Entity</option>
                                <option>Dubai Mainland LLC</option>
                                <option>Dubai Offshore Entity</option>
                                <option>Branch Office of Foreign Entity</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Message / Business Plan Details</label>
                            <textarea class="form-control" rows="3" placeholder="Briefly describe your business activities and timeline..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-gold w-100 py-2">Submit Inquiry</button>
                    </form>
                    <div id="formSuccess" class="alert alert-success mt-3 d-none">
                        Thank you! Your inquiry has been logged. An expert consultant will reach out shortly.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS Animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
            calculateCost();
        });

        // Free Zone Filtering Functionality
        function filterFZ(category, btnElement) {
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            btnElement.classList.add('active');

            const rows = document.querySelectorAll('#fzTableBody tr');
            rows.forEach(row => {
                if (category === 'all' || row.getAttribute('data-category') === category) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Setup Cost Estimator Logic
        function calculateCost() {
            const jur = parseInt(document.getElementById('calcJurisdiction').value) || 0;
            const visa = parseInt(document.getElementById('calcVisas').value) || 0;
            const office = parseInt(document.getElementById('calcOffice').value) || 0;
            const bank = parseInt(document.getElementById('calcBanking').value) || 0;

            const totalAed = jur + visa + office + bank;
            const totalUsd = Math.round(totalAed / 3.6725);

            document.getElementById('calcTotal').innerText = `AED ${totalAed.toLocaleString()}`;
            document.getElementById('calcUsd').innerText = `$${totalUsd.toLocaleString()}`;
        }

        // Contact Form Handler
        function handleFormSubmit(e) {
            e.preventDefault();
            const successBox = document.getElementById('formSuccess');
            successBox.classList.remove('d-none');
            setTimeout(() => {
                const modalEl = document.getElementById('inquiryModal');
                const modal = bootstrap.Modal.getInstance(modalEl);
                if (modal) modal.hide();
                successBox.classList.add('d-none');
                document.getElementById('consultationForm').reset();
            }, 2500);
        }
    </script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>