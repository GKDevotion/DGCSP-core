<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/webinars';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp??v=' . FILE_VERSISON)') ? 'hero-bg.webp??v=' . FILE_VERSISON)' : 'hero-bg.svg';
$ctaFile  = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp??v=' . FILE_VERSISON)')  ? 'cta-bg.webp??v=' . FILE_VERSISON)'  : 'cta-bg.svg';
?>

<!-- Shared theme + app-page components (same look & animation set as the other pages) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/app-pages.css?v=<?= FILE_VERSISON ?>">
<main>

<!-- 1. HERO -->
<header class="ip-hero ip-hero--tall">
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Interactive Masterclasses &amp; Panels</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Executive Webinars &amp;<br><span class="ip-gold">Thought Leadership</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Explore upcoming live webinars, register for interactive panel discussions, or access our comprehensive library of on-demand expert recordings.</p>
                <div class="hero-search-box" data-aos="fade-up" data-aos-delay="450">
                    <input type="text" id="liveSearchInput" class="form-control" placeholder="Search by topic, speaker name, or key terms (e.g., AI, Leadership)...">
                    <span class="search-btn" aria-hidden="true"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- 2. LIVE STATS -->
<section class="ip-stats ip-stats--pull">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="ip-stat ip-stat--gold">
                    <i class="fa-solid fa-video"></i>
                    <span class="ip-stat__num stat-number" data-counter="120">0</span>
                    <span class="ip-stat__label">Webinars Hosted</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="ip-stat ip-stat--dark">
                    <i class="fa-solid fa-users"></i>
                    <span class="ip-stat__num stat-number" data-counter="45">0</span>
                    <span class="ip-stat__label">Global Attendees (K+)</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="ip-stat ip-stat--tan">
                    <i class="fa-solid fa-star"></i>
                    <span class="ip-stat__num stat-number" data-counter="98">0</span>
                    <span class="ip-stat__label">Attendee Rating %</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="ip-stat ip-stat--grey">
                    <i class="fa-solid fa-microphone-lines"></i>
                    <span class="ip-stat__num stat-number" data-counter="85">0</span>
                    <span class="ip-stat__label">Industry Experts</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Upcoming Featured Webinar Spotlight Card -->
<section class="ip-section ip-section--cream">
    <canvas class="ip-constellation ip-constellation--left" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill"><i class="fa-solid fa-star"></i> Next Featured Live Event</span><h2 class="ip-title">Spotlight Keynote Panel</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Don't miss our flagship interactive summit featuring C-suite executives discussing the future of enterprise decision making.</p></div>

        <div class="spotlight-card" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0 align-items-center">
                <div class="col-lg-5">
                    <div class="spotlight-img-wrap" style="background-image: url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1000&q=80');">
                        <div class="spotlight-badge">
                            <span class="pulse-dot"></span> Live Keynote
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="spotlight-content">
                        <!-- Countdown Badge -->
                        <div class="timer-box">
                            <i class="fa-regular fa-clock text-warning fs-5"></i>
                            <div class="d-flex gap-3">
                                <div class="timer-unit"><span class="timer-val" id="count-days">04</span> <span class="timer-lbl">Days</span></div>
                                <div class="timer-unit"><span class="timer-val" id="count-hours">18</span> <span class="timer-lbl">Hrs</span></div>
                                <div class="timer-unit"><span class="timer-val" id="count-mins">42</span> <span class="timer-lbl">Mins</span></div>
                                <div class="timer-unit"><span class="timer-val" id="count-secs">15</span> <span class="timer-lbl">Secs</span></div>
                            </div>
                        </div>

                        <h3 class="fw-bold mb-3 text-dark">Enterprise AI Transformation 2026: Navigating the Executive Frontier</h3>
                        <p class="text-muted mb-4">Join global industry leaders for an exclusive interactive discussion on leveraging generative intelligence, scaling ethical frameworks, and driving measurable ROI in global organization structures.</p>

                        <!-- Key takeaways preview -->
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <i class="fa-solid fa-check-circle text-warning mt-1"></i>
                                    <span class="small fw-medium">Navigating AI ROI Models</span>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <i class="fa-solid fa-check-circle text-warning mt-1"></i>
                                    <span class="small fw-medium">Data Privacy & Governance</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <i class="fa-solid fa-check-circle text-warning mt-1"></i>
                                    <span class="small fw-medium">Live Q&A with Panelists</span>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <i class="fa-solid fa-check-circle text-warning mt-1"></i>
                                    <span class="small fw-medium">Executive Playbook Access</span>
                                </div>
                            </div>
                        </div>

                        <!-- Speakers & Action -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-3 border-top">
                            <div>
                                <div class="small text-muted fw-semibold mb-1">Featured Panelists</div>
                                <div class="speaker-avatar-group">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80" alt="Dr. Elena Rostova" title="Dr. Elena Rostova - Chief AI Officer">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80" alt="Marcus Vance" title="Marcus Vance - CTO Nexus Global">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80" alt="Sarah Jenkins" title="Sarah Jenkins - Managing Director">
                                    <div class="more-speakers">+2</div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-gold btn-lg open-modal-btn" 
                                        data-title="Enterprise AI Transformation 2026: Navigating the Executive Frontier"
                                        data-date="Oct 14, 2026 • 10:00 AM EST"
                                        data-duration="75 Mins"
                                        data-type="Live Panel"
                                        data-speakers="Dr. Elena Rostova (Chief AI Officer), Marcus Vance (CTO Nexus Global), Sarah Jenkins (Managing Director)">
                                    <i class="fa-solid fa-calendar-check"></i> Reserve Spot
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Filter Tabs & 4. Webinars Grid Section -->
<section class="ip-section ip-section--gray">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill"><i class="fa-solid fa-filter"></i> Browse All Sessions</span><h2 class="ip-title">Explore Webinars & Recordings</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Filter through our live schedule or dive into high-impact recorded sessions on demand.</p></div>

        <!-- Filter Categories -->
        <div class="filter-container" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">All Events</button>
            <button class="filter-btn" data-filter="upcoming">Upcoming Live</button>
            <button class="filter-btn" data-filter="ondemand">On-Demand</button>
            <button class="filter-btn" data-filter="roundtable">Executive Roundtable</button>
            <button class="filter-btn" data-filter="tech">Tech & AI</button>
            <button class="filter-btn" data-filter="leadership">Leadership</button>
        </div>

        <!-- Grid of Cards -->
        <div class="row g-4" id="webinagrid">
            
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4 webinar-item" data-category="upcoming tech" data-title="generative ai in enterprise strategy and deployment" data-aos="fade-up" data-aos-delay="100">
                <div class="webinar-card">
                    <div class="webinar-card-img" style="background-image: url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80');">
                        <span class="webinar-status status-upcoming">Upcoming Live</span>
                        <span class="webinar-topic"><i class="fa-solid fa-microchip me-1"></i> Tech & AI</span>
                    </div>
                    <div class="webinar-body">
                        <div class="webinar-meta">
                            <span><i class="fa-regular fa-calendar text-warning"></i> Oct 18, 2026</span>
                            <span><i class="fa-regular fa-clock text-warning"></i> 60 Mins</span>
                        </div>
                        <h4 class="webinar-title">Generative AI in Enterprise Strategy & Scaling Frameworks</h4>
                        <p class="webinar-desc">A deep dive into integrating frontier LLM technologies directly into operational workflows while retaining compliance and data security.</p>
                        <div class="webinar-footer">
                            <div class="speaker-info-mini">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Speaker">
                                <div>
                                    <div class="speaker-name-mini">Dr. Elena Rostova</div>
                                    <div class="speaker-role-mini">Head of AI Research</div>
                                </div>
                            </div>
                            <button class="btn btn-gold-outline btn-sm open-modal-btn"
                                    data-title="Generative AI in Enterprise Strategy & Scaling Frameworks"
                                    data-date="Oct 18, 2026 • 2:00 PM EST"
                                    data-duration="60 Mins"
                                    data-type="Upcoming Live"
                                    data-speakers="Dr. Elena Rostova (Head of AI Research)">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4 webinar-item" data-category="ondemand leadership" data-title="global economic outlook leadership in volatile markets" data-aos="fade-up" data-aos-delay="200">
                <div class="webinar-card">
                    <div class="webinar-card-img" style="background-image: url('https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80');">
                        <span class="webinar-status status-ondemand">On-Demand</span>
                        <span class="webinar-topic"><i class="fa-solid fa-briefcase me-1"></i> Leadership</span>
                    </div>
                    <div class="webinar-body">
                        <div class="webinar-meta">
                            <span><i class="fa-regular fa-circle-play text-warning"></i> Recorded Sep 2026</span>
                            <span><i class="fa-regular fa-clock text-warning"></i> 45 Mins</span>
                        </div>
                        <h4 class="webinar-title">Global Economic Outlook: Strategic Leadership in Volatile Markets</h4>
                        <p class="webinar-desc">Examine macroeconomic trends, supply chain agility, and capital allocation strategies designed for C-level executives.</p>
                        <div class="webinar-footer">
                            <div class="speaker-info-mini">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80" alt="Speaker">
                                <div>
                                    <div class="speaker-name-mini">Arthur Pendelton</div>
                                    <div class="speaker-role-mini">Chief Economist</div>
                                </div>
                            </div>
                            <button class="btn btn-gold-outline btn-sm open-modal-btn"
                                    data-title="Global Economic Outlook: Strategic Leadership in Volatile Markets"
                                    data-date="Recorded Sep 2026"
                                    data-duration="45 Mins"
                                    data-type="On-Demand Video"
                                    data-speakers="Arthur Pendelton (Chief Economist)">
                                Watch Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4 webinar-item" data-category="upcoming roundtable" data-title="ciso panel building resilient cyber infrastructure" data-aos="fade-up" data-aos-delay="300">
                <div class="webinar-card">
                    <div class="webinar-card-img" style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80');">
                        <span class="webinar-status status-upcoming">Upcoming Live</span>
                        <span class="webinar-topic"><i class="fa-solid fa-shield-halved me-1"></i> Roundtable</span>
                    </div>
                    <div class="webinar-body">
                        <div class="webinar-meta">
                            <span><i class="fa-regular fa-calendar text-warning"></i> Nov 02, 2026</span>
                            <span><i class="fa-regular fa-clock text-warning"></i> 90 Mins</span>
                        </div>
                        <h4 class="webinar-title">CISO Executive Panel: Zero-Trust Cyber Resilience Strategies</h4>
                        <p class="webinar-desc">Top security officers from Fortune 500 organizations share active countermeasures and mitigation tactics for modern digital assets.</p>
                        <div class="webinar-footer">
                            <div class="speaker-info-mini">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80" alt="Speaker">
                                <div>
                                    <div class="speaker-name-mini">Sarah Jenkins</div>
                                    <div class="speaker-role-mini">VP Cyber Security</div>
                                </div>
                            </div>
                            <button class="btn btn-gold-outline btn-sm open-modal-btn"
                                    data-title="CISO Executive Panel: Zero-Trust Cyber Resilience Strategies"
                                    data-date="Nov 02, 2026 • 11:00 AM EST"
                                    data-duration="90 Mins"
                                    data-type="Executive Roundtable"
                                    data-speakers="Sarah Jenkins (VP Security), David Chen (CISO)">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4 webinar-item" data-category="ondemand tech" data-title="cloud migration strategies at scale hypergrowth" data-aos="fade-up" data-aos-delay="100">
                <div class="webinar-card">
                    <div class="webinar-card-img" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80');">
                        <span class="webinar-status status-ondemand">On-Demand</span>
                        <span class="webinar-topic"><i class="fa-solid fa-cloud me-1"></i> Tech & AI</span>
                    </div>
                    <div class="webinar-body">
                        <div class="webinar-meta">
                            <span><i class="fa-regular fa-circle-play text-warning"></i> Recorded Aug 2026</span>
                            <span><i class="fa-regular fa-clock text-warning"></i> 50 Mins</span>
                        </div>
                        <h4 class="webinar-title">Accelerating Cloud Architecture Modernization for FinTech</h4>
                        <p class="webinar-desc">Practical insights into migrating legacy monolith architectures to high-concurrency microservices cloud platforms seamlessly.</p>
                        <div class="webinar-footer">
                            <div class="speaker-info-mini">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80" alt="Speaker">
                                <div>
                                    <div class="speaker-name-mini">Marcus Vance</div>
                                    <div class="speaker-role-mini">CTO Apex Solutions</div>
                                </div>
                            </div>
                            <button class="btn btn-gold-outline btn-sm open-modal-btn"
                                    data-title="Accelerating Cloud Architecture Modernization for FinTech"
                                    data-date="Recorded Aug 2026"
                                    data-duration="50 Mins"
                                    data-type="On-Demand Video"
                                    data-speakers="Marcus Vance (CTO Apex Solutions)">
                                Watch Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4 webinar-item" data-category="upcoming leadership" data-title="sustainable esg practices modern business governance" data-aos="fade-up" data-aos-delay="200">
                <div class="webinar-card">
                    <div class="webinar-card-img" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80');">
                        <span class="webinar-status status-upcoming">Upcoming Live</span>
                        <span class="webinar-topic"><i class="fa-solid fa-leaf me-1"></i> Leadership</span>
                    </div>
                    <div class="webinar-body">
                        <div class="webinar-meta">
                            <span><i class="fa-regular fa-calendar text-warning"></i> Nov 15, 2026</span>
                            <span><i class="fa-regular fa-clock text-warning"></i> 60 Mins</span>
                        </div>
                        <h4 class="webinar-title">ESG Excellence: Aligning Sustainability with Stakeholder Value</h4>
                        <p class="webinar-desc">How forward-thinking board members are incorporating ESG metrics into executive compensation and long-term brand equity.</p>
                        <div class="webinar-footer">
                            <div class="speaker-info-mini">
                                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=150&q=80" alt="Speaker">
                                <div>
                                    <div class="speaker-name-mini">Amara Okafor</div>
                                    <div class="speaker-role-mini">Head of ESG Advisory</div>
                                </div>
                            </div>
                            <button class="btn btn-gold-outline btn-sm open-modal-btn"
                                    data-title="ESG Excellence: Aligning Sustainability with Stakeholder Value"
                                    data-date="Nov 15, 2026 • 1:00 PM EST"
                                    data-duration="60 Mins"
                                    data-type="Upcoming Live"
                                    data-speakers="Amara Okafor (Head of ESG Advisory)">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4 webinar-item" data-category="ondemand roundtable" data-title="the future of remote workforce human capital strategy" data-aos="fade-up" data-aos-delay="300">
                <div class="webinar-card">
                    <div class="webinar-card-img" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80');">
                        <span class="webinar-status status-ondemand">On-Demand</span>
                        <span class="webinar-topic"><i class="fa-solid fa-people-roof me-1"></i> Roundtable</span>
                    </div>
                    <div class="webinar-body">
                        <div class="webinar-meta">
                            <span><i class="fa-regular fa-circle-play text-warning"></i> Recorded Jul 2026</span>
                            <span><i class="fa-regular fa-clock text-warning"></i> 75 Mins</span>
                        </div>
                        <h4 class="webinar-title">Next-Gen Hybrid Workplaces: Culture, Performance & Tools</h4>
                        <p class="webinar-desc">Exploring how hyper-distributed teams leverage collaborative technology without losing organizational cohesion and identity.</p>
                        <div class="webinar-footer">
                            <div class="speaker-info-mini">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80" alt="Speaker">
                                <div>
                                    <div class="speaker-name-mini">Julian Vance</div>
                                    <div class="speaker-role-mini">Chief People Officer</div>
                                </div>
                            </div>
                            <button class="btn btn-gold-outline btn-sm open-modal-btn"
                                    data-title="Next-Gen Hybrid Workplaces: Culture, Performance & Tools"
                                    data-date="Recorded Jul 2026"
                                    data-duration="75 Mins"
                                    data-type="On-Demand Video"
                                    data-speakers="Julian Vance (Chief People Officer)">
                                Watch Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Empty Search Message Container -->
        <div id="noResultsMessage" class="text-center py-5 d-none">
            <i class="fa-solid fa-magnifying-glass-minus text-muted display-4 mb-3"></i>
            <h4 class="fw-bold">No Matching Webinars Found</h4>
            <p class="text-muted">Try tweaking your search term or select a different category pill above.</p>
        </div>
    </div>
</section>

<!-- 5. Featured Speakers Spotlight Grid -->
<section class="ip-section">
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 3%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill"><i class="fa-solid fa-user-tie"></i> World-Class Thought Leaders</span><h2 class="ip-title">Meet Our Keynote Speakers</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Learn directly from globally recognized pioneers, researchers, executives, and innovators driving industry evolution.</p></div>

        <div class="row g-4">
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="speaker-card">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=300&q=80" alt="Dr. Elena Rostova" class="speaker-img">
                    <h4 class="speaker-name">Dr. Elena Rostova</h4>
                    <div class="speaker-title">Chief AI Strategist</div>
                    <div class="speaker-company">Global Dynamics Inc.</div>
                    <span class="speaker-stats-pill"><i class="fa-solid fa-video me-1"></i> 14 Webinars Hosted</span>
                    <div>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="speaker-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80" alt="Marcus Vance" class="speaker-img">
                    <h4 class="speaker-name">Marcus Vance</h4>
                    <div class="speaker-title">VP Engineering & Cloud</div>
                    <div class="speaker-company">Apex Cloud Systems</div>
                    <span class="speaker-stats-pill"><i class="fa-solid fa-video me-1"></i> 9 Webinars Hosted</span>
                    <div>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="speaker-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80" alt="Sarah Jenkins" class="speaker-img">
                    <h4 class="speaker-name">Sarah Jenkins</h4>
                    <div class="speaker-title">Managing Director</div>
                    <div class="speaker-company">Vanguard Capital</div>
                    <span class="speaker-stats-pill"><i class="fa-solid fa-video me-1"></i> 22 Webinars Hosted</span>
                    <div>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="speaker-card">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80" alt="Julian Vance" class="speaker-img">
                    <h4 class="speaker-name">Julian Vance</h4>
                    <div class="speaker-title">Chief Human Capital Officer</div>
                    <div class="speaker-company">Enterprise Next</div>
                    <span class="speaker-stats-pill"><i class="fa-solid fa-video me-1"></i> 11 Webinars Hosted</span>
                    <div>
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. On-Demand Popular Series Section -->
<section class="ip-section ip-section--cream">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill"><i class="fa-solid fa-layer-group"></i> Masterclass Collections</span><h2 class="ip-title">Popular On-Demand Series</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Curated multi-part video series structured to upskill leadership teams on key organizational disciplines.</p></div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="series-card">
                    <div>
                        <span class="series-tag">4-Part Series</span>
                        <h3 class="series-title">AI Leadership & Frontier Governance 2026</h3>
                        <p class="series-count"><i class="fa-solid fa-film me-2"></i> 4 Sessions • 3h 40m Total</p>
                        <p class="small opacity-75">Master real-world enterprise deployment strategies, vendor evaluation, and mitigation of generative AI hallucinations.</p>
                    </div>
                    <div class="pt-3">
                        <button class="btn btn-gold btn-sm w-100 open-modal-btn"
                                data-title="AI Leadership & Frontier Governance 2026 (Full Series Access)"
                                data-date="Instant On-Demand Stream"
                                data-duration="3h 40m Total"
                                data-type="Complete Series"
                                data-speakers="Dr. Elena Rostova & Guest Panelists">
                            Unlock Series <i class="fa-solid fa-lock-open ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="series-card">
                    <div>
                        <span class="series-tag">3-Part Series</span>
                        <h3 class="series-title">Digital Transformation & Legacy Modernization</h3>
                        <p class="series-count"><i class="fa-solid fa-film me-2"></i> 3 Sessions • 2h 50m Total</p>
                        <p class="small opacity-75">Transition legacy core software systems into agile, scalable micro-frontend and multi-cloud architectures.</p>
                    </div>
                    <div class="pt-3">
                        <button class="btn btn-gold btn-sm w-100 open-modal-btn"
                                data-title="Digital Transformation & Legacy Modernization (Full Series Access)"
                                data-date="Instant On-Demand Stream"
                                data-duration="2h 50m Total"
                                data-type="Complete Series"
                                data-speakers="Marcus Vance & Cloud Architects">
                            Unlock Series <i class="fa-solid fa-lock-open ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="series-card">
                    <div>
                        <span class="series-tag">5-Part Series</span>
                        <h3 class="series-title">Executive Financial Strategy & M&A Insights</h3>
                        <p class="series-count"><i class="fa-solid fa-film me-2"></i> 5 Sessions • 4h 15m Total</p>
                        <p class="small opacity-75">Valuation dynamics, venture debt structuring, and modern cross-border M&A strategy for growing organizations.</p>
                    </div>
                    <div class="pt-3">
                        <button class="btn btn-gold btn-sm w-100 open-modal-btn"
                                data-title="Executive Financial Strategy & M&A Insights (Full Series Access)"
                                data-date="Instant On-Demand Stream"
                                data-duration="4h 15m Total"
                                data-type="Complete Series"
                                data-speakers="Sarah Jenkins & Investment Partners">
                            Unlock Series <i class="fa-solid fa-lock-open ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. HOST A WEBINAR (CTA) -->
<section class="ip-cta" id="contact">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <span class="ip-pill">Partner With Us</span>
                <h2 class="ip-title" style="margin-top: 1rem;">Interested in Hosting an Executive Webinar?</h2>
                <p>We collaborate with renowned thinkers, C-suite executives, and industry tech leaders to co-create high-impact interactive masterclasses and panel discussions.</p>
                <button class="ip-btn ip-btn--pill" id="btnHostSubmit">Apply as Speaker <i class="fa-solid fa-paper-plane ms-2"></i></button>
            </div>
        </div>
    </div>
</section>

</main>

<!-- 7. Registration & Event Details Dynamic Modal -->
<div class="modal fade" id="eventRegistrationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <span class="badge bg-warning text-dark mb-2" id="modalEventType">Live Webinar</span>
                    <h4 class="modal-title fw-bold" id="modalEventTitle">Event Title Placeholder</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-md-6 border-end-md">
                        <h6 class="fw-bold text-uppercase text-muted fs-7 mb-3">Event Details</h6>
                        <div class="mb-3">
                            <i class="fa-regular fa-calendar-alt text-warning me-2"></i>
                            <strong id="modalEventDate">Oct 14, 2026</strong>
                        </div>
                        <div class="mb-3">
                            <i class="fa-regular fa-clock text-warning me-2"></i>
                            <span id="modalEventDuration">60 Mins</span>
                        </div>
                        <div class="mb-4">
                            <i class="fa-solid fa-user-group text-warning me-2"></i>
                            <span id="modalEventSpeakers">Keynote Speaker List</span>
                        </div>

                        <h6 class="fw-bold text-uppercase text-muted fs-7 mb-2">Key Takeaways</h6>
                        <ul class="takeaway-list">
                            <li>Direct access to executive strategic playbooks</li>
                            <li>Interactive live Q&A session with industry leaders</li>
                            <li>Downloadable slides and companion summary report</li>
                            <li>Certificate of completion for attendees</li>
                        </ul>
                    </div>

                    <!-- 1-Click Seamless Form -->
                    <div class="col-md-6">
                        <h5 class="fw-bold mb-3">Reserve Your Access</h5>
                        <form id="webinarRegisterForm">
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Full Name *</label>
                                <input type="text" class="form-control" required placeholder="e.g. John Doe">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Work Email *</label>
                                <input type="email" class="form-control" required placeholder="name@company.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Work Role / Title</label>
                                <input type="text" class="form-control" placeholder="e.g. VP of Innovation">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Company Name</label>
                                <input type="text" class="form-control" placeholder="e.g. Acme Corp">
                            </div>
                            <button type="submit" class="btn btn-gold w-100 py-2">
                                Confirm Registration <i class="fa-solid fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Floating Toast Notification -->
<div id="toastNotification" class="toast-custom">
    <i class="fa-solid fa-circle-check text-warning fs-4"></i>
    <div>
        <div class="fw-bold" id="toastTitle">Registration Confirmed</div>
        <div class="small opacity-75" id="toastBody">Access link sent to your work email.</div>
    </div>
</div>

<!-- Dynamic JavaScript Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Initialize AOS Animation Library
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-cubic'
        });

        // 2. Stat Counter Animation
        const counters = document.querySelectorAll('.stat-number');
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = +entry.target.getAttribute('data-counter');
                    let count = 0;
                    const speed = target / 30; // speed modifier
                    
                    const updateCount = () => {
                        count += speed;
                        if (count < target) {
                            entry.target.innerText = Math.ceil(count);
                            setTimeout(updateCount, 40);
                        } else {
                            entry.target.innerText = target + "+";
                        }
                    };
                    updateCount();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));

        // 3. Spotlight Live Countdown Timer Simulation
        function startCountdown() {
            let days = 4, hours = 18, mins = 42, secs = 15;
            setInterval(() => {
                secs--;
                if (secs < 0) { secs = 59; mins--; }
                if (mins < 0) { mins = 59; hours--; }
                if (hours < 0) { hours = 23; days--; }

                document.getElementById('count-days').innerText = String(days).padStart(2, '0');
                document.getElementById('count-hours').innerText = String(hours).padStart(2, '0');
                document.getElementById('count-mins').innerText = String(mins).padStart(2, '0');
                document.getElementById('count-secs').innerText = String(secs).padStart(2, '0');
            }, 1000);
        }
        startCountdown();

        // 4. Filter Tabs Logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        const webinarItems = document.querySelectorAll('.webinar-item');
        const noResultsMsg = document.getElementById('noResultsMessage');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');
                filterCards();
            });
        });

        // 5. Search Bar Live Filtering Logic
        const searchInput = document.getElementById('liveSearchInput');
        searchInput.addEventListener('input', filterCards);

        function filterCards() {
            const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
            const searchTerm = searchInput.value.toLowerCase().trim();
            let visibleCount = 0;

            webinarItems.forEach(item => {
                const itemCategories = item.getAttribute('data-category');
                const itemTitle = item.getAttribute('data-title');

                const matchesCategory = (activeFilter === 'all') || itemCategories.includes(activeFilter);
                const matchesSearch = itemTitle.includes(searchTerm);

                if (matchesCategory && matchesSearch) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            if (visibleCount === 0) {
                noResultsMsg.classList.remove('d-none');
            } else {
                noResultsMsg.classList.add('d-none');
            }
        }

        // 6. Dynamic Modal Population
        const eventModal = new bootstrap.Modal(document.getElementById('eventRegistrationModal'));
        const modalButtons = document.querySelectorAll('.open-modal-btn');

        modalButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const title = this.getAttribute('data-title');
                const date = this.getAttribute('data-date');
                const duration = this.getAttribute('data-duration');
                const type = this.getAttribute('data-type');
                const speakers = this.getAttribute('data-speakers');

                document.getElementById('modalEventTitle').innerText = title;
                document.getElementById('modalEventDate').innerText = date;
                document.getElementById('modalEventDuration').innerText = duration;
                document.getElementById('modalEventType').innerText = type;
                document.getElementById('modalEventSpeakers').innerText = speakers;

                eventModal.show();
            });
        });

        // 7. Form Submission Handler & Custom Toast
        const registerForm = document.getElementById('webinarRegisterForm');
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            eventModal.hide();
            showToast('Registration Confirmed!', 'Access calendar invite & link sent to your email.');
            registerForm.reset();
        });

        document.getElementById('btnHostSubmit').addEventListener('click', function() {
            showToast('Speaker Application Received', 'Our event team will reach out within 24 hours.');
        });

        function showToast(title, body) {
            const toast = document.getElementById('toastNotification');
            document.getElementById('toastTitle').innerText = title;
            document.getElementById('toastBody').innerText = body;

            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 4000);
        }
    });
</script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>