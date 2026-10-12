<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/news-insights';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp') ? 'hero-bg.webp' : 'hero-bg.svg';
$ctaFile  = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp')  ? 'cta-bg.webp'  : 'cta-bg.svg';
?>

<!-- Shared theme + app-page components (same look & animation set as the other pages) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/app-pages.css?v=<?= FILE_VERSISON ?>">
<main>

<!-- 1. HERO -->
<header class="ip-hero ip-hero--tall" id="news-hero">
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Thought Leadership &amp; Intelligence</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">News &amp;<br><span class="ip-gold">Insights</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Stay updated with industry trends, expert analysis, enterprise innovations, and company updates curated by our senior strategist team.</p>
                <div class="hero-search-box" data-aos="fade-up" data-aos-delay="450">
                    <input type="text" id="articleSearchInput" class="form-control" placeholder="Search by topic, keyword, or author name...">
                    <button class="search-btn" type="button" id="searchBtn" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- 2. LIVE STATS -->
<section class="ip-stats ip-stats--pull">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                <div class="ip-stat ip-stat--gold">
                    <span class="ip-stat__num stat-number-gold" data-target="250">0</span>
                    <span class="ip-stat__label">Articles Published</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="ip-stat ip-stat--dark">
                    <span class="ip-stat__num stat-number-gold" data-target="50">0</span>
                    <span class="ip-stat__label">k Monthly Readers</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="ip-stat ip-stat--tan">
                    <span class="ip-stat__num stat-number-gold" data-target="15">0</span>
                    <span class="ip-stat__label">Industry Experts</span>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="ip-stat ip-stat--grey">
                    <span class="ip-stat__num stat-number-gold" data-target="98">0</span>
                    <span class="ip-stat__label">% Reader Approval</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. FEATURED SPOTLIGHT ARTICLE -->
<section class="ip-section ip-section--cream" id="featured-spotlight">
    <canvas class="ip-constellation ip-constellation--left" aria-hidden="true"></canvas>
    <div class="container py-3" data-aos="fade-up">
        <div class="spotlight-card-gold">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-2" style="background-color: var(--gold-primary); color: white;">
                            <i class="fa-solid fa-fire me-1"></i> Editor's Choice Spotlight
                        </span>
                        <span class="text-muted small"><i class="fa-regular fa-clock me-1"></i> 8 min read</span>
                    </div>
                    <h2 class="fw-bold mb-3">The 2026 Enterprise AI Roadmap: Bridging Strategy & Scalable Architecture</h2>
                    <p class="text-muted mb-4">How Fortune 500 tech leaders are transitioning from experimental GenAI proofs-of-concept into resilient, zero-trust cloud architectures with measurable ROI.</p>
                    
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&h=100&q=80" alt="Author" class="author-avatar" onerror="this.src='https://placehold.co/100/ab8139/ffffff?text=Victoria'">
                        <div>
                            <h6 class="fw-bold mb-0" style="color: var(--brand-dark);">Dr. Victoria Vance</h6>
                            <span class="text-muted small">Chief Technology Strategist • Published Oct 12, 2026</span>
                        </div>
                    </div>

                    <button class="btn btn-gold-action px-4 py-2 view-article-modal-btn"
                            data-title="The 2026 Enterprise AI Roadmap: Bridging Strategy & Scalable Architecture"
                            data-category="Executive Leadership"
                            data-author="Dr. Victoria Vance"
                            data-author-role="Chief Technology Strategist"
                            data-author-img="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&h=100&q=80"
                            data-date="Oct 12, 2026"
                            data-readtime="8 min read"
                            data-img="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80"
                            data-content="Generative AI and automated reasoning engines have evolved from novelty experiments into essential pillars of modern enterprise software architecture. However, deploying AI models at global enterprise scale introduces complex engineering hurdles around latency, data governance, and cloud cost control.<br><br>Organizations that succeed in 2026 share three common pillars: robust continuous deployment pipelines, strict data anonymization gates, and hybrid infrastructure designed to handle peak inference loads dynamically without escalating operational overhead."
                            data-quote="Enterprise AI is no longer a luxury experiment; it is the fundamental core of operational efficiency and market dominance."
                            data-tags="GenAI, Cloud Architecture, Enterprise Strategy, DevOps">
                        Read Full Article <i class="fa-solid fa-arrow-right ms-2"></i>
                    </button>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80" alt="Featured AI Article" class="spotlight-img" onerror="this.src='https://placehold.co/800x500/ab8139/ffffff?text=Enterprise+AI+Roadmap'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. ARTICLE GRID & CATEGORY FILTER SECTION -->
<section class="ip-section ip-section--gray" id="articles-directory">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="container py-4">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill">Knowledge Hub</span><h2 class="ip-title">Explore Latest Articles & Reports</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Filtered by expert categories to deliver actionable perspectives for business leaders.</p></div>

        <!-- Filter Tabs -->
        <div class="category-tabs-gold" data-aos="fade-up" data-aos-delay="100">
            <button class="btn-filter-gold active" data-filter="all">All Insights</button>
            <button class="btn-filter-gold" data-filter="trends">Industry Trends</button>
            <button class="btn-filter-gold" data-filter="leadership">Executive Leadership</button>
            <button class="btn-filter-gold" data-filter="tech">Tech Innovations</button>
            <button class="btn-filter-gold" data-filter="case-studies">Case Studies</button>
            <button class="btn-filter-gold" data-filter="market">Market Research</button>
        </div>

        <!-- Article Cards Grid -->
        <div class="row g-4" id="articlesGrid">
            
            <!-- Article Card 1 -->
            <div class="col-md-6 col-lg-4 article-item" data-category="tech" data-title="Architecting Resilient Zero-Trust Cloud Networks" data-aos="fade-up" data-aos-delay="100">
                <div class="article-card-gold">
                    <div class="article-img-wrapper">
                        <span class="category-badge-overlay">Tech Innovations</span>
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80" alt="Zero Trust Security" onerror="this.src='https://placehold.co/600x400/ab8139/ffffff?text=Zero+Trust+Cloud'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Sep 28, 2026</span>
                            <span class="text-muted small"><i class="fa-regular fa-clock me-1"></i> 5 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Architecting Resilient Zero-Trust Cloud Networks</h5>
                        <p class="card-text text-muted small flex-grow-1">A deep dive into micro-segmentation, identity verification gates, and continuous automated auditing in AWS ecosystems.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Cybersecurity</span>
                            <span class="tag-pill-gold">Cloud Security</span>
                            <span class="tag-pill-gold">AWS</span>
                        </div>
                        <div class="pt-3 border-top border-light d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80" class="author-avatar" style="width:32px; height:32px;" alt="Author" onerror="this.src='https://placehold.co/80/ab8139/ffffff?text=Marcus'">
                                <span class="small fw-semibold text-dark">Marcus Thorne</span>
                            </div>
                            <button class="btn btn-outline-gold btn-sm px-3 view-article-modal-btn"
                                    data-title="Architecting Resilient Zero-Trust Cloud Networks"
                                    data-category="Tech Innovations"
                                    data-author="Marcus Thorne"
                                    data-author-role="Principal Security Architect"
                                    data-author-img="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80"
                                    data-date="Sep 28, 2026"
                                    data-readtime="5 min read"
                                    data-img="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80"
                                    data-content="Zero Trust is no longer just a security framework—it is the operational standard for hybrid enterprise networks. By enforcing dynamic least-privilege access controls across every endpoint and microservice, security teams can contain potential vulnerabilities before lateral movement occurs.<br><br>This blueprint explores automated token rotation, real-time identity telemetry, and policy-as-code paradigms designed to minimize attack vectors without degrading application speed."
                                    data-quote="Security is most effective when integrated naturally into developer workflows rather than enforced as a bottleneck."
                                    data-tags="Cybersecurity, Cloud, Zero Trust, Infrastructure">
                                Read Article
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Card 2 -->
            <div class="col-md-6 col-lg-4 article-item" data-category="trends" data-title="Global E-Commerce Microservices Trends for 2027" data-aos="fade-up" data-aos-delay="200">
                <div class="article-card-gold">
                    <div class="article-img-wrapper">
                        <span class="category-badge-overlay">Industry Trends</span>
                        <img src="https://images.unsplash.com/photo-1556742049-0a67568d049f?auto=format&fit=crop&w=600&q=80" alt="E-Commerce Trends" onerror="this.src='https://placehold.co/600x400/ab8139/ffffff?text=E-Commerce+Trends'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Sep 20, 2026</span>
                            <span class="text-muted small"><i class="fa-regular fa-clock me-1"></i> 6 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Global E-Commerce Microservices Trends for 2027</h5>
                        <p class="card-text text-muted small flex-grow-1">How composable commerce architectures and headless APIs are reshaping customer acquisition and conversion speed.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Headless</span>
                            <span class="tag-pill-gold">Microservices</span>
                            <span class="tag-pill-gold">Retail Tech</span>
                        </div>
                        <div class="pt-3 border-top border-light d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80" class="author-avatar" style="width:32px; height:32px;" alt="Author" onerror="this.src='https://placehold.co/80/ab8139/ffffff?text=Sophia'">
                                <span class="small fw-semibold text-dark">Sophia Lin</span>
                            </div>
                            <button class="btn btn-outline-gold btn-sm px-3 view-article-modal-btn"
                                    data-title="Global E-Commerce Microservices Trends for 2027"
                                    data-category="Industry Trends"
                                    data-author="Sophia Lin"
                                    data-author-role="Head of Retail Solutions"
                                    data-author-img="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80"
                                    data-date="Sep 20, 2026"
                                    data-readtime="6 min read"
                                    data-img="https://images.unsplash.com/photo-1556742049-0a67568d049f?auto=format&fit=crop&w=600&q=80"
                                    data-content="Monolithic e-commerce platforms are quickly yielding ground to modular, API-first headless ecosystems. Modern global retailers demand regional edge caching, dynamic currency conversions, and frictionless single-click mobile checkouts.<br><br>By decoupling front-end user experience layers from core ERP inventory backends, forward-thinking brands achieve sub-second page performance and continuous deployment freedom."
                                    data-quote="Speed is the ultimate currency in modern digital commerce; every millisecond saved translates directly into revenue."
                                    data-tags="E-Commerce, Headless, Microservices, Retail">
                                Read Article
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Card 3 -->
            <div class="col-md-6 col-lg-4 article-item" data-category="leadership" data-title="Navigating Enterprise Digital Transformation Budgets" data-aos="fade-up" data-aos-delay="300">
                <div class="article-card-gold">
                    <div class="article-img-wrapper">
                        <span class="category-badge-overlay">Executive Leadership</span>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" alt="Executive Leadership" onerror="this.src='https://placehold.co/600x400/ab8139/ffffff?text=Executive+Leadership'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Sep 14, 2026</span>
                            <span class="text-muted small"><i class="fa-regular fa-clock me-1"></i> 7 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Navigating Enterprise Digital Transformation Budgets</h5>
                        <p class="card-text text-muted small flex-grow-1">A pragmatic guide for CFOs and CTOs balancing legacy system maintenance with modern innovation investments.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Fintech</span>
                            <span class="tag-pill-gold">Leadership</span>
                            <span class="tag-pill-gold">Strategy</span>
                        </div>
                        <div class="pt-3 border-top border-light d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80" class="author-avatar" style="width:32px; height:32px;" alt="Author" onerror="this.src='https://placehold.co/80/ab8139/ffffff?text=Julian'">
                                <span class="small fw-semibold text-dark">Julian Sterling</span>
                            </div>
                            <button class="btn btn-outline-gold btn-sm px-3 view-article-modal-btn"
                                    data-title="Navigating Enterprise Digital Transformation Budgets"
                                    data-category="Executive Leadership"
                                    data-author="Julian Sterling"
                                    data-author-role="Managing Partner & Strategist"
                                    data-author-img="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80"
                                    data-date="Sep 14, 2026"
                                    data-readtime="7 min read"
                                    data-img="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80"
                                    data-content="Digital transformation initiatives frequently stall due to misaligned expectations between technical execution and financial stewardship. Chief Technology Officers must articulate technology investments in clear revenue-generating or cost-avoidance metrics.<br><br>This executive playbook outlines milestone-based capital allocation, cloud cost optimization frameworks (FinOps), and strategies for decommission legacy technical debt."
                                    data-quote="Transformation is not about spending more; it is about allocating capital toward agility and scalable leverage."
                                    data-tags="FinOps, Digital Strategy, Leadership, ROI">
                                Read Article
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Card 4 -->
            <div class="col-md-6 col-lg-4 article-item" data-category="case-studies" data-title="Scaling FinTech Core Services to 10M Active Users" data-aos="fade-up" data-aos-delay="100">
                <div class="article-card-gold">
                    <div class="article-img-wrapper">
                        <span class="category-badge-overlay">Case Studies</span>
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80" alt="FinTech Scaling" onerror="this.src='https://placehold.co/600x400/ab8139/ffffff?text=FinTech+Case+Study'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Aug 30, 2026</span>
                            <span class="text-muted small"><i class="fa-regular fa-clock me-1"></i> 9 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Scaling FinTech Core Services to 10M Active Users</h5>
                        <p class="card-text text-muted small flex-grow-1">Technical breakdown of database sharding, event-driven streaming with Kafka, and fault-tolerant banking APIs.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Kafka</span>
                            <span class="tag-pill-gold">Database</span>
                            <span class="tag-pill-gold">FinTech</span>
                        </div>
                        <div class="pt-3 border-top border-light d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80" class="author-avatar" style="width:32px; height:32px;" alt="Author" onerror="this.src='https://placehold.co/80/ab8139/ffffff?text=Elena'">
                                <span class="small fw-semibold text-dark">Elena Rostova</span>
                            </div>
                            <button class="btn btn-outline-gold btn-sm px-3 view-article-modal-btn"
                                    data-title="Scaling FinTech Core Services to 10M Active Users"
                                    data-category="Case Studies"
                                    data-author="Elena Rostova"
                                    data-author-role="Lead Backend Engineer"
                                    data-author-img="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80"
                                    data-date="Aug 30, 2026"
                                    data-readtime="9 min read"
                                    data-img="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80"
                                    data-content="High-frequency financial transaction networks demand near-zero latency and absolute transactional integrity. When our partner platform scaled past 10 million daily active users, monolithic relational databases became significant throughput bottlenecks.<br><br>By implementing an event-driven architecture powered by Apache Kafka, Redis cluster caching, and dynamic database sharding, we achieved 99.999% uptime during peak market volatility."
                                    data-quote="Scalability is not an afterthought; it must be designed into every data model and pipeline from day one."
                                    data-tags="FinTech, Kafka, Distributed Systems, Cloud">
                                Read Article
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Card 5 -->
            <div class="col-md-6 col-lg-4 article-item" data-category="market" data-title="2026 Global Healthcare Data & Privacy Report" data-aos="fade-up" data-aos-delay="200">
                <div class="article-card-gold">
                    <div class="article-img-wrapper">
                        <span class="category-badge-overlay">Market Research</span>
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Healthcare Research" onerror="this.src='https://placehold.co/600x400/ab8139/ffffff?text=Healthcare+Research'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Aug 18, 2026</span>
                            <span class="text-muted small"><i class="fa-regular fa-clock me-1"></i> 10 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">2026 Global Healthcare Data & Privacy Report</h5>
                        <p class="card-text text-muted small flex-grow-1">Key findings on clinical record interoperability, encryption standards, and AI-driven diagnostic privacy compliance.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">Healthcare</span>
                            <span class="tag-pill-gold">HIPAA</span>
                            <span class="tag-pill-gold">Data Privacy</span>
                        </div>
                        <div class="pt-3 border-top border-light d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80" class="author-avatar" style="width:32px; height:32px;" alt="Author" onerror="this.src='https://placehold.co/80/ab8139/ffffff?text=Marcus'">
                                <span class="small fw-semibold text-dark">Dr. Marcus Vance</span>
                            </div>
                            <button class="btn btn-outline-gold btn-sm px-3 view-article-modal-btn"
                                    data-title="2026 Global Healthcare Data & Privacy Report"
                                    data-category="Market Research"
                                    data-author="Dr. Marcus Vance"
                                    data-author-role="Medical Data Compliance Lead"
                                    data-author-img="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80"
                                    data-date="Aug 18, 2026"
                                    data-readtime="10 min read"
                                    data-img="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80"
                                    data-content="The healthcare industry is witnessing rapid adoption of AI diagnostic assistants and remote patient telemetry devices. However, this proliferation creates complex regulatory challenges across international boundaries.<br><br>Our comprehensive report synthesizes telemetry encryption protocols, federated machine learning models, and compliance framework guidelines designed to protect patient records without stalling research innovation."
                                    data-quote="Patient trust is built on the foundation of uncompromised data integrity and transparent privacy policies."
                                    data-tags="Healthcare, Privacy, Compliance, AI Research">
                                Read Article
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Card 6 -->
            <div class="col-md-6 col-lg-4 article-item" data-category="tech" data-title="DevOps to Platform Engineering: The Operational Paradigm" data-aos="fade-up" data-aos-delay="300">
                <div class="article-card-gold">
                    <div class="article-img-wrapper">
                        <span class="category-badge-overlay">Tech Innovations</span>
                        <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80" alt="Platform Engineering" onerror="this.src='https://placehold.co/600x400/ab8139/ffffff?text=Platform+Engineering'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted small"><i class="fa-regular fa-calendar me-1"></i> Aug 05, 2026</span>
                            <span class="text-muted small"><i class="fa-regular fa-clock me-1"></i> 4 min read</span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">DevOps to Platform Engineering: The Operational Shift</h5>
                        <p class="card-text text-muted small flex-grow-1">Why internal developer portals (IDPs) and self-service infrastructure are empowering software development velocity.</p>
                        <div class="mb-3">
                            <span class="tag-pill-gold">DevOps</span>
                            <span class="tag-pill-gold">Kubernetes</span>
                            <span class="tag-pill-gold">Engineering</span>
                        </div>
                        <div class="pt-3 border-top border-light d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80" class="author-avatar" style="width:32px; height:32px;" alt="Author" onerror="this.src='https://placehold.co/80/ab8139/ffffff?text=Julian'">
                                <span class="small fw-semibold text-dark">Julian Sterling</span>
                            </div>
                            <button class="btn btn-outline-gold btn-sm px-3 view-article-modal-btn"
                                    data-title="DevOps to Platform Engineering: The Operational Shift"
                                    data-category="Tech Innovations"
                                    data-author="Julian Sterling"
                                    data-author-role="Managing Partner & Strategist"
                                    data-author-img="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80"
                                    data-date="Aug 05, 2026"
                                    data-readtime="4 min read"
                                    data-img="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80"
                                    data-content="As cloud-native architectures grow increasingly complex, software developers often spend more time configuring infrastructure YAML files than writing business logic. Platform Engineering addresses this fatigue by providing self-service Internal Developer Portals (IDPs).<br><br>By packaging automated CI/CD pipelines, security compliance checks, and Kubernetes cluster provisioning into standardized developer APIs, organizations boost feature shipping speed significantly."
                                    data-quote="Empower your developers with curated platforms that eliminate cognitive friction and accelerate delivery."
                                    data-tags="DevOps, Platform Engineering, Kubernetes, Velocity">
                                Read Article
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Empty Search Result -->
        <div id="noResultsMsg" class="text-center py-5 d-none">
            <i class="fa-solid fa-magnifying-glass display-4 mb-3" style="color: var(--gold-primary);"></i>
            <h5 class="fw-bold">No matching articles or insights found</h5>
            <p class="text-muted">Try adjusting your search criteria or changing filter selection.</p>
        </div>
    </div>
</section>

<!-- 4. TRENDING HIGHLIGHTS SECTION -->
<section class="ip-section">
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 8%; right: 3%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container py-3">
        <div class="ip-head" data-aos="fade-up"><span class="ip-pill">Most Popular</span><h2 class="ip-title">Trending Insights This Month</h2><span class="ip-line" style="margin: 1rem auto 0.9rem;"></span><p class="ip-sub">Top-read executive briefings curated by readership engagement metrics.</p></div>

        <div class="row g-4">
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="trending-item-gold">
                    <div class="trending-rank-badge">#1</div>
                    <div>
                        <span class="text-muted small"><i class="fa-regular fa-eye me-1"></i> 14.2k Reads</span>
                        <h6 class="fw-bold my-1" style="color: var(--brand-dark);">Mastering Cloud FinOps in High-Growth Scaleups</h6>
                        <span class="text-muted small">By Victoria Vance • 5 min read</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="trending-item-gold">
                    <div class="trending-rank-badge">#2</div>
                    <div>
                        <span class="text-muted small"><i class="fa-regular fa-eye me-1"></i> 11.8k Reads</span>
                        <h6 class="fw-bold my-1" style="color: var(--brand-dark);">The Modern CTO's Guide to AI Data Governance</h6>
                        <span class="text-muted small">By Marcus Thorne • 7 min read</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="trending-item-gold">
                    <div class="trending-rank-badge">#3</div>
                    <div>
                        <span class="text-muted small"><i class="fa-regular fa-eye me-1"></i> 9.5k Reads</span>
                        <h6 class="fw-bold my-1" style="color: var(--brand-dark);">Building High-Throughput Web3 Payment Gateways</h6>
                        <span class="text-muted small">By Elena Rostova • 6 min read</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 5. NEWSLETTER SUBSCRIPTION (CTA) -->
<section class="ip-cta" id="subscribe">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <h2 class="ip-title">Subscribe to Insights Digest</h2>
                <p>Get our bi-weekly executive intelligence brief delivered straight to your inbox. No spam, only high-impact technology and strategy updates.</p>
                <form id="newsletterForm" class="row g-2 justify-content-end">
                    <div class="col-sm-8">
                        <input type="email" id="newsletterEmail" class="form-control newsletter-input" placeholder="Enter your executive email address..." required>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-gold-action w-100">Subscribe</button>
                    </div>
                </form>
                <div id="newsletterSuccess" class="alert alert-success bg-white text-dark border-0 mt-3 d-none rounded-pill fw-semibold" role="alert">
                    <i class="fa-solid fa-circle-check text-success me-2"></i> Thank you for subscribing to Insights Digest!
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<!-- 6. DYNAMIC ARTICLE READER MODAL -->
<div class="modal fade" id="articleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content modal-content-gold">
            <div class="modal-header modal-header-gold">
                <span class="client-badge-gold" id="modalCategory">Category</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <span class="text-muted small" id="modalDateRead"><i class="fa-regular fa-calendar me-1"></i> Oct 12, 2026 • 8 min read</span>
                </div>

                <h2 class="fw-bold mb-4" id="modalTitle" style="color: var(--brand-dark);">Article Title</h2>

                <div class="d-flex align-items-center gap-3 mb-4 p-3 rounded-3" style="background-color: var(--gold-light); border: 1px solid var(--gold-border);">
                    <img src="" id="modalAuthorImg" class="author-avatar" alt="Author" onerror="this.src='https://placehold.co/100/ab8139/ffffff?text=Author'">
                    <div>
                        <h6 class="fw-bold mb-0" id="modalAuthor">Author Name</h6>
                        <span class="text-muted small" id="modalAuthorRole">Author Role</span>
                    </div>
                </div>

                <img src="" id="modalImg" class="img-fluid rounded-4 mb-4 w-100" style="max-height: 350px; object-fit: cover;" alt="Article Image" onerror="this.src='https://placehold.co/800x400/ab8139/ffffff?text=News+Insight'">

                <div id="modalContent" class="text-secondary lead-sm mb-4" style="line-height: 1.8;">
                    Full article text will be injected here dynamically...
                </div>

                <blockquote class="blockquote border-start border-4 ps-3 fst-italic my-4" style="border-color: var(--gold-primary) !important; color: var(--brand-dark);">
                    "<span id="modalQuote">Key quote snippet...</span>"
                </blockquote>

                <div class="mb-4" id="modalTagsContainer">
                    <!-- Dynamic Tags -->
                </div>

                <div class="d-flex justify-content-between align-items-center pt-3 border-top border-light">
                    <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-outline-gold btn-sm rounded-circle" style="width:38px; height:38px;" title="Share"><i class="fa-solid fa-share-nodes"></i></button>
                        <button type="button" class="btn btn-gold-action btn-sm px-4" data-bs-dismiss="modal">Bookmark Article</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize AOS Animation
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });

        // Animated Counter Logic
        const counters = document.querySelectorAll('.stat-number-gold');
        let counterAnimated = false;

        function runCounters() {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const duration = 2000;
                const stepTime = 20;
                const steps = duration / stepTime;
                const increment = target / steps;
                let current = 0;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.innerText = target + (target === 98 ? '%' : (target === 50 ? 'k+' : '+'));
                        clearInterval(timer);
                    } else {
                        counter.innerText = Math.ceil(current) + '+';
                    }
                }, stepTime);
            });
        }

        // Trigger counter on scroll
        window.addEventListener('scroll', () => {
            const heroSection = document.querySelector('.gold-hero-banner');
            if (heroSection) {
                const position = heroSection.getBoundingClientRect();
                if (position.top < window.innerHeight && !counterAnimated) {
                    counterAnimated = true;
                    runCounters();
                }
            }
        });
        runCounters();

        // Category Filter Logic
        const filterButtons = document.querySelectorAll('.btn-filter-gold');
        const articleItems = document.querySelectorAll('.article-item');
        const noResultsMsg = document.getElementById('noResultsMsg');

        filterButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const selectedFilter = this.getAttribute('data-filter');
                filterArticles(selectedFilter, document.getElementById('articleSearchInput').value.toLowerCase());
            });
        });

        // Live Search
        const searchInput = document.getElementById('articleSearchInput');
        searchInput.addEventListener('keyup', function () {
            const activeFilter = document.querySelector('.btn-filter-gold.active').getAttribute('data-filter');
            filterArticles(activeFilter, this.value.toLowerCase());
        });

        document.getElementById('searchBtn').addEventListener('click', function () {
            const activeFilter = document.querySelector('.btn-filter-gold.active').getAttribute('data-filter');
            filterArticles(activeFilter, searchInput.value.toLowerCase());
        });

        function filterArticles(category, searchTerm) {
            let visibleCount = 0;

            articleItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                const itemTitle = item.getAttribute('data-title').toLowerCase();
                const itemText = item.innerText.toLowerCase();

                const matchesCategory = (category === 'all' || itemCategory === category);
                const matchesSearch = itemTitle.includes(searchTerm) || itemText.includes(searchTerm);

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

            AOS.refresh();
        }

        // Dynamic Modal Handling
        const articleModal = new bootstrap.Modal(document.getElementById('articleModal'));
        const modalButtons = document.querySelectorAll('.view-article-modal-btn');

        modalButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const title = this.getAttribute('data-title');
                const category = this.getAttribute('data-category');
                const author = this.getAttribute('data-author');
                const authorRole = this.getAttribute('data-author-role');
                const authorImg = this.getAttribute('data-author-img');
                const date = this.getAttribute('data-date');
                const readtime = this.getAttribute('data-readtime');
                const img = this.getAttribute('data-img');
                const content = this.getAttribute('data-content');
                const quote = this.getAttribute('data-quote');
                const tags = this.getAttribute('data-tags').split(',');

                document.getElementById('modalTitle').innerText = title;
                document.getElementById('modalCategory').innerText = category;
                document.getElementById('modalAuthor').innerText = author;
                document.getElementById('modalAuthorRole').innerText = authorRole;
                document.getElementById('modalAuthorImg').src = authorImg;
                document.getElementById('modalDateRead').innerHTML = `<i class="fa-regular fa-calendar me-1"></i> ${date} • ${readtime}`;
                document.getElementById('modalImg').src = img;
                document.getElementById('modalContent').innerHTML = content;
                document.getElementById('modalQuote').innerText = quote;

                const tagsContainer = document.getElementById('modalTagsContainer');
                tagsContainer.innerHTML = '';
                tags.forEach(tag => {
                    const pill = document.createElement('span');
                    pill.className = 'tag-pill-gold';
                    pill.innerText = tag.trim();
                    tagsContainer.appendChild(pill);
                });

                articleModal.show();
            });
        });

        // Newsletter Form Submission Handling
        const newsletterForm = document.getElementById('newsletterForm');
        const newsletterSuccess = document.getElementById('newsletterSuccess');

        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();
            newsletterSuccess.classList.remove('d-none');
            newsletterForm.reset();
            setTimeout(() => {
                newsletterSuccess.classList.add('d-none');
            }, 4000);
        });
    });
</script>
<?php include ROOT_PATH . '/elements/footer.php'; ?>