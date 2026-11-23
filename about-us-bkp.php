<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>
  <style>
    /* Subtitles and Typography */
    .section-subtitle {
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2.5px;
      color: var(--gold-primary);
      margin-bottom: 10px;
      display: inline-block;
    }

    .section-title {
      font-weight: 700;
      color: var(--brand-dark);
      letter-spacing: -0.5px;
    }

    /* Universal Card Style */
    .custom-card {
      background: var(--white);
      border-radius: var(--card-radius);
      border: 1px solid var(--gold-border);
      box-shadow: var(--shadow-card);
      transition: var(--transition);
      overflow: hidden;
    }

    .custom-card:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-5px);
    }

    /* 1. HERO HEADER SECTION */
    .hero-section {
      background: var(--golden-gradient-background);
      padding: 90px 0 70px;
      position: relative;
    }

    .hero-title {
      font-size: 2.8rem;
      font-weight: 800;
      color: var(--brand-dark);
      line-height: 1.25;
    }

    .hero-title .text-gold {
      color: var(--gold-primary);
    }

    .hero-banner-wrapper {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow-md);
    }

    .hero-banner-wrapper img {
      width: 100%;
      height: 380px;
      object-fit: cover;
      display: block;
    }

    .hero-banner-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(171, 129, 57, 0.25) 0%, rgba(0, 0, 0, 0.1) 100%);
      pointer-events: none;
    }

    /* 2. MISSION & VISION SECTION */
    .mission-vision-card {
      padding: 30px;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .mission-vision-img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 20px;
    }

    .icon-badge {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background-color: var(--gold-light);
      border: 1px solid var(--gold-border);
      color: var(--gold-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    /* 3. APPROACH / NUMBERED CARDS SECTION */
    .approach-card {
      position: relative;
      background: var(--white);
      border-radius: var(--card-radius);
      border: 1px solid var(--gold-border);
      padding: 32px 24px;
      height: 100%;
      box-shadow: var(--shadow-card);
      transition: var(--transition);
    }

    .approach-card:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-6px);
      border-color: var(--gold-primary);
    }

    .step-number {
      position: absolute;
      top: 18px;
      right: 22px;
      font-size: 1.8rem;
      font-weight: 800;
      color: rgba(171, 129, 57, 0.35);
      line-height: 1;
    }

    .approach-icon-box {
      width: 52px;
      height: 52px;
      background-color: var(--gold-light);
      border: 1px solid var(--gold-border);
      color: var(--gold-primary);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      margin-bottom: 22px;
    }

    /* 4. OUR COMMITMENT BANNER */
    .commitment-section {
      background-color: var(--brand-dark);
      color: var(--white);
      padding: 80px 0;
      position: relative;
    }

    .commitment-img-box {
      border-radius: var(--card-radius);
      overflow: hidden;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .commitment-img-box img {
      width: 100%;
      height: 360px;
      object-fit: cover;
    }

    .golden-divider {
      width: 50px;
      height: 3px;
      background-color: var(--gold-primary);
      margin: 18px 0;
    }

    /* 5. STANDARDS & NETWORK GRAPHIC */
    .bullet-check-list {
      list-style: none;
      padding-left: 0;
      margin-bottom: 0;
    }

    .bullet-check-list li {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
      font-weight: 500;
      font-size: 0.95rem;
      color: var(--text-dark);
    }

    .check-circle {
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background-color: var(--gold-light);
      border: 1px solid var(--gold-border);
      color: var(--gold-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.75rem;
      margin-right: 14px;
      flex-shrink: 0;
    }

    /* Global Network Visual SVG Map simulation */
    .network-graphic-wrapper {
      position: relative;
      background: radial-gradient(circle, var(--gold-light) 0%, var(--white) 70%);
      border-radius: var(--card-radius);
      padding: 40px 20px;
      text-align: center;
      border: 1px solid var(--gold-border);
    }

    .network-globe-container {
      position: relative;
      display: inline-block;
      max-width: 320px;
      width: 100%;
    }

    .network-globe-container img {
      width: 100%;
      height: auto;
      border-radius: 50%;
      box-shadow: 0 10px 30px rgba(171, 129, 57, 0.2);
    }

    .globe-node {
      position: absolute;
      width: 38px;
      height: 38px;
      background: var(--white);
      border: 1px solid var(--gold-primary);
      box-shadow: var(--shadow-sm);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold-primary);
      font-size: 0.85rem;
      animation: pulseNode 3s infinite ease-in-out;
    }

    .node-1 { top: -10px; left: 50%; transform: translateX(-50%); }
    .node-2 { top: 20%; right: -12px; }
    .node-3 { bottom: 20%; right: -12px; }
    .node-4 { bottom: -10px; left: 50%; transform: translateX(-50%); }
    .node-5 { bottom: 20%; left: -12px; }
    .node-6 { top: 20%; left: -12px; }

    @keyframes pulseNode {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); box-shadow: 0 0 15px rgba(171, 129, 57, 0.4); }
    }

    /* 6. STATS / GLOBAL IMPACT */
    .stats-container {
      background-color: var(--bg-light);
      border-top: 1px solid var(--gold-border);
      border-bottom: 1px solid var(--gold-border);
      padding: 60px 0;
    }

    .stat-number {
      font-size: 2.8rem;
      font-weight: 800;
      color: var(--gold-primary);
      line-height: 1;
      margin-bottom: 10px;
    }

    .stat-label {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--text-dark);
      margin-bottom: 0;
    }

    .stat-divider {
      width: 40px;
      height: 2px;
      background-color: var(--gold-primary);
      margin: 12px auto 0;
    }

    /* 7. TIMELINE SECTION */
    .timeline-wrapper {
      position: relative;
      padding-left: 28px;
      border-left: 2px solid var(--gold-primary);
      margin-top: 25px;
    }

    .timeline-item {
      position: relative;
      margin-bottom: 24px;
    }

    .timeline-item:last-child {
      margin-bottom: 0;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: -35px;
      top: 6px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: var(--gold-primary);
      border: 3px solid var(--white);
      box-shadow: 0 0 0 1px var(--gold-primary);
    }

    .timeline-year {
      font-weight: 700;
      color: var(--brand-dark);
      min-width: 65px;
      display: inline-block;
    }

    .timeline-desc {
      color: var(--text-muted);
      font-size: 0.9rem;
    }

    /* 8. JURISDICTIONS SECTION */
    .jurisdiction-card {
      background: var(--white);
      border: 1px solid var(--gold-border);
      border-radius: 12px;
      padding: 24px 12px;
      text-align: center;
      transition: var(--transition);
      height: 100%;
      box-shadow: var(--shadow-sm);
    }

    .jurisdiction-card:hover {
      background-color: var(--gold-light);
      border-color: var(--gold-primary);
      transform: translateY(-4px);
    }

    .jurisdiction-icon-box {
      width: 48px;
      height: 48px;
      margin: 0 auto 12px;
      background-color: rgba(171, 129, 57, 0.1);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold-primary);
      font-size: 1.4rem;
    }

    .jurisdiction-title {
      font-size: 0.88rem;
      font-weight: 600;
      color: var(--brand-dark);
      margin-bottom: 0;
    }

    /* 9. VALUES SECTION */
    .value-card-img {
      height: 190px;
      width: 100%;
      object-fit: cover;
    }

    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
      .hero-title { font-size: 2.2rem; }
      .hero-banner-wrapper img { height: 280px; }
      .node-1, .node-2, .node-3, .node-4, .node-5, .node-6 { display: none; }
    }
  </style>
  
  <!-- 1. HERO HEADER SECTION -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
          <span class="section-subtitle">ABOUT US</span>
          <h1 class="hero-title mb-3">
            Get to know <br><span class="text-gold">Devotion Group CSP</span>
          </h1>
          <p class="text-muted leading-relaxed pe-lg-4 mb-0">
            Confidence driven by experience. We craft premium corporate solutions across global jurisdictions with unwavering integrity and a client-first approach.
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
          <div class="hero-banner-wrapper">
            <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1200&q=80" alt="Dubai Cityscape Banner">
            <div class="hero-banner-overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. MISSION & VISION SECTION -->
  <section class="py-5">
    <div class="container py-3">
      <div class="row g-4">
        <!-- Our Mission -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="custom-card mission-vision-card">
            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80" alt="Our Mission Target" class="mission-vision-img">
            <div class="d-flex align-items-center mb-2">
              <div class="icon-badge me-3">
                <i class="fa-solid fa-bullseye"></i>
              </div>
              <h4 class="fw-bold mb-0">Our Mission</h4>
            </div>
            <p class="text-muted small mb-0">
              To deliver reliable and innovative corporate solutions that empower businesses to grow across global markets.
            </p>
          </div>
        </div>

        <!-- Our Vision -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="custom-card mission-vision-card">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Our Vision Modern Architecture" class="mission-vision-img">
            <div class="d-flex align-items-center mb-2">
              <div class="icon-badge me-3">
                <i class="fa-solid fa-check-double"></i>
              </div>
              <h4 class="fw-bold mb-0">Our Vision</h4>
            </div>
            <p class="text-muted small mb-0">
              To be a trusted global partner for business establishment and strategic advisory services.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. WHAT WE STAND FOR (OUR APPROACH) -->
  <section class="py-5 bg-light">
    <div class="container py-3">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="section-subtitle">OUR APPROACH</span>
        <h2 class="section-title h1">What We Stand For</h2>
        <p class="text-muted mx-auto" style="max-width: 620px;">
          Our approach is built on trust, expertise and long-term partnerships to help businesses succeed globally.
        </p>
      </div>

      <div class="row g-4">
        <!-- 01 -->
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="approach-card">
            <span class="step-number">01</span>
            <div class="approach-icon-box">
              <i class="fa-solid fa-landmark"></i>
            </div>
            <h5 class="fw-bold mb-2">Seamless Business Setup</h5>
            <p class="text-muted small mb-0">
              Simplifying company formation across multiple jurisdictions.
            </p>
          </div>
        </div>

        <!-- 02 -->
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
          <div class="approach-card">
            <span class="step-number">02</span>
            <div class="approach-icon-box">
              <i class="fa-solid fa-building-columns"></i>
            </div>
            <h5 class="fw-bold mb-2">Banking & Payments</h5>
            <p class="text-muted small mb-0">
              End-to-end support for corporate banking and payment solutions.
            </p>
          </div>
        </div>

        <!-- 03 -->
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
          <div class="approach-card">
            <span class="step-number">03</span>
            <div class="approach-icon-box">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h5 class="fw-bold mb-2">Compliance First</h5>
            <p class="text-muted small mb-0">
              Advisory and compliance services aligned with global regulations.
            </p>
          </div>
        </div>

        <!-- 04 -->
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
          <div class="approach-card">
            <span class="step-number">04</span>
            <div class="approach-icon-box">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <h5 class="fw-bold mb-2">Strategic Advisory</h5>
            <p class="text-muted small mb-0">
              Tailored guidance for sustainable business growth and expansion.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. OUR COMMITMENT (DARK BANNER) -->
  <section class="commitment-section">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="commitment-img-box">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1000&q=80" alt="Corporate Highrise Glass Building">
          </div>
        </div>
        <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
          <span class="section-subtitle" style="color: var(--gold-primary);">OUR COMMITMENT</span>
          <h2 class="text-white fw-bold display-6 mb-2">Creating Opportunities <br><span style="color: var(--gold-primary);">Without Boundaries</span></h2>
          <div class="golden-divider"></div>
          <p class="text-white-50 leading-relaxed mb-0">
            We are committed to providing transparent, efficient and reliable corporate services that enable businesses to explore new markets with confidence.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. STANDARDS & GLOBAL COMPLIANCE -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-5">
        <!-- Left Globe graphic & bottom 2 cards -->
        <div class="col-lg-6 order-lg-1 order-2" data-aos="fade-right">
          <div class="network-graphic-wrapper mb-4">
            <div class="network-globe-container">
              <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=600&q=80" alt="Golden Globe Diagram">
              <div class="globe-node node-1"><i class="fa-solid fa-landmark"></i></div>
              <div class="globe-node node-2"><i class="fa-solid fa-shield"></i></div>
              <div class="globe-node node-3"><i class="fa-solid fa-handshake"></i></div>
              <div class="globe-node node-4"><i class="fa-solid fa-users"></i></div>
              <div class="globe-node node-5"><i class="fa-solid fa-chart-pie"></i></div>
              <div class="globe-node node-6"><i class="fa-solid fa-building"></i></div>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-sm-6">
              <div class="custom-card p-3 h-100">
                <div class="d-flex align-items-center mb-2">
                  <div class="approach-icon-box mb-0 me-3" style="width:40px; height:40px; font-size:1rem;">
                    <i class="fa-solid fa-chart-line"></i>
                  </div>
                  <h6 class="fw-bold mb-0">Client-Centric Approach</h6>
                </div>
                <p class="text-muted extra-small mb-0" style="font-size: 0.8rem;">
                  Tailored solutions with dedicated support to help you achieve business goals.
                </p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="custom-card p-3 h-100">
                <div class="d-flex align-items-center mb-2">
                  <div class="approach-icon-box mb-0 me-3" style="width:40px; height:40px; font-size:1rem;">
                    <i class="fa-solid fa-shield-cat"></i>
                  </div>
                  <h6 class="fw-bold mb-0">Regulated & Reliable</h6>
                </div>
                <p class="text-muted extra-small mb-0" style="font-size: 0.8rem;">
                  Working with trusted partners to ensure your business is compliant and secure.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Content Block -->
        <div class="col-lg-6 order-lg-2 order-1 ps-lg-5" data-aos="fade-left">
          <span class="section-subtitle">OUR STANDARDS</span>
          <h2 class="section-title mb-3">Built on Global Compliance and <span style="color: var(--gold-primary);">Professional Excellence</span></h2>
          <p class="text-muted mb-4">
            Our services are designed to meet the highest international standards, ensuring security, transparency and long-term value for our clients.
          </p>

          <ul class="bullet-check-list">
            <li>
              <div class="check-circle"><i class="fa-solid fa-check"></i></div>
              <span>Regulatory compliance across multiple jurisdictions</span>
            </li>
            <li>
              <div class="check-circle"><i class="fa-solid fa-check"></i></div>
              <span>Client-centric and transparent approach</span>
            </li>
            <li>
              <div class="check-circle"><i class="fa-solid fa-check"></i></div>
              <span>Strong global network of strategic partners</span>
            </li>
            <li>
              <div class="check-circle"><i class="fa-solid fa-check"></i></div>
              <span>Consistent support throughout your business journey</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. GLOBAL IMPACT (STATS) -->
  <section class="stats-container">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="section-subtitle">OUR GLOBAL IMPACT</span>
        <h2 class="section-title">The Strength of Our Global Presence</h2>
        <p class="text-muted small">Our growing network and track record reflect the trust businesses place in Devotion Group.</p>
      </div>

      <div class="row text-center g-4">
        <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="stat-number">15+</div>
          <p class="stat-label">Years of Experience</p>
          <div class="stat-divider"></div>
        </div>
        <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="stat-number">120k+</div>
          <p class="stat-label">Clients Worldwide</p>
          <div class="stat-divider"></div>
        </div>
        <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
          <div class="stat-number">99.8%</div>
          <p class="stat-label">Satisfaction Rate</p>
          <div class="stat-divider"></div>
        </div>
        <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
          <div class="stat-number">40+</div>
          <p class="stat-label">Strategic Locations</p>
          <div class="stat-divider"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. WHERE IT ALL STARTED (PRESENCE & TIMELINE) -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="custom-card overflow-hidden">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1000&q=80" alt="Boardroom window overlooking skyline" class="img-fluid w-100" style="height: 380px; object-fit: cover;">
          </div>
        </div>

        <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
          <span class="section-subtitle">OUR PRESENCE</span>
          <h2 class="section-title mb-3">Where It <span style="color: var(--gold-primary);">All Started</span></h2>
          <p class="text-muted small mb-4">
            Devotion Group began with a clear vision — to simplify global business opportunities and provide trusted corporate solutions for companies and entrepreneurs worldwide.
          </p>

          <div class="timeline-wrapper">
            <div class="timeline-item">
              <span class="timeline-year">2011</span>
              <span class="timeline-desc">A strong foundation built on trust and expertise</span>
            </div>
            <div class="timeline-item">
              <span class="timeline-year">2015</span>
              <span class="timeline-desc">Expanding services across key international markets</span>
            </div>
            <div class="timeline-item">
              <span class="timeline-year">2020</span>
              <span class="timeline-desc">Building a global network of strategic partnerships</span>
            </div>
            <div class="timeline-item">
              <span class="timeline-year">Today</span>
              <span class="timeline-desc">Continuing to empower businesses with innovative solutions</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. GLOBAL JURISDICTIONS -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="section-subtitle">OUR PRESENCE</span>
        <h2 class="section-title">Enjoy Access to Global Jurisdictions</h2>
      </div>

      <div class="row g-3 justify-content-center">
        <!-- UAE -->
        <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="100">
          <div class="jurisdiction-card">
            <div class="jurisdiction-icon-box">
              <i class="fa-solid fa-city"></i>
            </div>
            <h6 class="jurisdiction-title">UAE</h6>
          </div>
        </div>
        <!-- United Kingdom -->
        <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="200">
          <div class="jurisdiction-card">
            <div class="jurisdiction-icon-box">
              <i class="fa-solid fa-crown"></i>
            </div>
            <h6 class="jurisdiction-title">United Kingdom</h6>
          </div>
        </div>
        <!-- India -->
        <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="300">
          <div class="jurisdiction-card">
            <div class="jurisdiction-icon-box">
              <i class="fa-solid fa-synagogue"></i>
            </div>
            <h6 class="jurisdiction-title">India</h6>
          </div>
        </div>
        <!-- Singapore -->
        <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="400">
          <div class="jurisdiction-card">
            <div class="jurisdiction-icon-box">
              <i class="fa-solid fa-landmark"></i>
            </div>
            <h6 class="jurisdiction-title">Singapore</h6>
          </div>
        </div>
        <!-- Mauritius -->
        <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="500">
          <div class="jurisdiction-card">
            <div class="jurisdiction-icon-box">
              <i class="fa-solid fa-umbrella-beach"></i>
            </div>
            <h6 class="jurisdiction-title">Mauritius</h6>
          </div>
        </div>
        <!-- Hong Kong -->
        <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="600">
          <div class="jurisdiction-card">
            <div class="jurisdiction-icon-box">
              <i class="fa-solid fa-building-user"></i>
            </div>
            <h6 class="jurisdiction-title">Hong Kong</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. OUR GUIDING VALUES -->
  <section class="py-5">
    <div class="container py-4">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="section-subtitle">OUR VALUES</span>
        <h2 class="section-title">Our Guiding Values</h2>
      </div>

      <div class="row g-4">
        <!-- Value 1 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="custom-card h-100">
            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80" alt="Integrity compass" class="value-card-img">
            <div class="p-4">
              <h5 class="fw-bold mb-2">Integrity</h5>
              <p class="text-muted small mb-0">
                Upholding the highest ethical standards in everything we do.
              </p>
            </div>
          </div>
        </div>

        <!-- Value 2 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="custom-card h-100">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80" alt="Growth teamwork" class="value-card-img">
            <div class="p-4">
              <h5 class="fw-bold mb-2">Growth</h5>
              <p class="text-muted small mb-0">
                Empowering businesses to reach their full potential across global markets.
              </p>
            </div>
          </div>
        </div>

        <!-- Value 3 -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="custom-card h-100">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80" alt="Innovation bulb" class="value-card-img">
            <div class="p-4">
              <h5 class="fw-bold mb-2">Innovation</h5>
              <p class="text-muted small mb-0">
                Delivering forward-thinking solutions to meet tomorrow's opportunities.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- AOS Initialization -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 80
      });
    });
  </script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>