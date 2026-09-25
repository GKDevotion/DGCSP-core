<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

<style>

    /* Gold Banner Header Section */
    .gold-hero-banner {
        background: linear-gradient(135deg, var(--brand-dark) 0%, #1a1a1a 40%, var(--dark-gold) 100%);
        color: var(--white);
        padding: 80px 0 70px 0;
        position: relative;
        overflow: hidden;
        border-bottom: 3px solid var(--gold-primary);
    }

    .gold-hero-banner::before {
        content: '';
        position: absolute;
        top: -20%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, var(--overlay-gold) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .gold-badge {
        background-color: rgba(171, 129, 57, 0.2);
        color: var(--gold-light);
        border: 1px solid var(--gold-primary);
        font-size: 0.85rem;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    /* Custom Search Box */
    .search-box-gold {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        border: 1px solid var(--gold-border);
        border-radius: 50px;
        padding: 6px 8px 6px 22px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }

    .search-box-gold:focus-within {
        border-color: var(--gold-primary);
        box-shadow: 0 0 15px rgba(171, 129, 57, 0.3);
        background: rgba(255, 255, 255, 0.18);
    }

    .search-box-gold input {
        background: transparent;
        border: none;
        color: var(--white);
        font-size: 0.95rem;
    }

    .search-box-gold input::placeholder {
        color: rgba(255, 255, 255, 0.65);
    }

    .search-box-gold input:focus {
        box-shadow: none;
        background: transparent;
        color: var(--white);
    }

    .btn-gold-action {
        background-color: var(--gold-primary);
        color: var(--white);
        border-radius: 30px;
        font-weight: 600;
        padding: 10px 24px;
        border: none;
        transition: var(--transition);
    }

    .btn-gold-action:hover {
        background-color: var(--gold-hover);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(171, 129, 57, 0.35);
    }

    /* Hero Stat Counters */
    .stat-card-gold {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid var(--gold-border);
        border-radius: var(--card-radius);
        padding: 20px 15px;
        text-align: center;
        backdrop-filter: blur(8px);
        transition: var(--transition);
    }

    .stat-card-gold:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--gold-primary);
    }

    .stat-number-gold {
        font-size: 2rem;
        font-weight: 800;
        color: #e5c07b;
        line-height: 1.2;
    }

    /* Filter Tabs */
    .category-tabs-gold {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 45px;
    }

    .btn-filter-gold {
        border-radius: 30px;
        padding: 10px 24px;
        font-weight: 600;
        font-size: 0.9rem;
        border: 1px solid var(--gold-border);
        background-color: var(--white);
        color: var(--text-dark);
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }

    .btn-filter-gold:hover, .btn-filter-gold.active {
        background-color: var(--gold-primary);
        color: var(--white);
        border-color: var(--gold-primary);
        box-shadow: var(--shadow-md);
    }

    /* Article Grid & Cards */
    .article-card-gold {
        background: var(--white);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-card);
        transition: var(--transition);
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        position: relative;
    }

    .article-card-gold:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-hover);
        border-color: var(--gold-primary);
    }

    .article-img-wrapper {
        position: relative;
        overflow: hidden;
        height: 220px;
    }

    .article-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .article-card-gold:hover .article-img-wrapper img {
        transform: scale(1.08);
    }

    .category-badge-overlay {
        position: absolute;
        top: 15px;
        left: 15px;
        background: rgba(43, 43, 43, 0.85);
        backdrop-filter: blur(6px);
        color: var(--gold-light);
        border: 1px solid var(--gold-primary);
        font-weight: 600;
        font-size: 0.75rem;
        padding: 5px 14px;
        border-radius: 20px;
        z-index: 2;
    }

    .tag-pill-gold {
        font-size: 0.75rem;
        background: var(--gray-color);
        color: var(--brand-text-sub);
        padding: 4px 10px;
        border-radius: 6px;
        margin-right: 6px;
        margin-bottom: 6px;
        display: inline-block;
        border: 1px solid var(--brand-grey);
    }

    .btn-outline-gold {
        color: var(--gold-primary);
        border: 1px solid var(--gold-primary);
        background: transparent;
        font-weight: 600;
        border-radius: 30px;
        transition: var(--transition);
    }

    .btn-outline-gold:hover {
        background: var(--gold-primary);
        color: var(--white);
        box-shadow: 0 4px 12px rgba(171, 129, 57, 0.25);
    }

    /* Featured Spotlight Card */
    .spotlight-card-gold {
        background: var(--golden-gradient-background);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-border);
        padding: 45px;
        box-shadow: var(--shadow-md);
        position: relative;
        overflow: hidden;
    }

    .spotlight-img {
        border-radius: 12px;
        box-shadow: var(--shadow-md);
        object-fit: cover;
        width: 100%;
        max-height: 380px;
    }

    /* Trending Highlights */
    .trending-item-gold {
        background: var(--white);
        border-radius: var(--card-radius);
        padding: 20px;
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 20px;
        height: 100%;
    }

    .trending-item-gold:hover {
        transform: translateX(5px);
        border-color: var(--gold-primary);
        box-shadow: var(--shadow-card);
    }

    .trending-rank-badge {
        width: 48px;
        height: 48px;
        background: var(--gold-light);
        border: 1px solid var(--gold-primary);
        color: var(--dark-gold);
        font-weight: 800;
        font-size: 1.2rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* Newsletter CTA Section */
    .cta-gold-banner {
        background: linear-gradient(135deg, var(--brand-dark) 0%, var(--dark-gold) 100%);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-primary);
        color: var(--white);
        padding: 60px 40px;
        box-shadow: var(--shadow-hover);
    }

    .newsletter-input {
        border-radius: 30px;
        padding: 12px 24px;
        border: 1px solid var(--gold-border);
        font-size: 0.95rem;
    }

    .newsletter-input:focus {
        box-shadow: 0 0 10px rgba(171, 129, 57, 0.4);
        border-color: var(--gold-primary);
    }

    /* Modal Custom Styling */
    .modal-content-gold {
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-primary);
        box-shadow: var(--shadow-hover);
        background: var(--white);
    }

    .modal-header-gold {
        border-bottom: 1px solid var(--gold-border);
        background: var(--gold-light);
    }

    .author-avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--gold-primary);
    }
</style>

<!-- 1. HEADER BANNER SECTION -->
<section class="gold-hero-banner" id="news-hero">
    <div class="container relative-10">
        <div class="row align-items-center gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <span class="badge gold-badge rounded-pill px-3 py-2 mb-3">
                    <i class="fa-solid fa-newspaper me-2 text-warning"></i> Thought Leadership & Intelligence
                </span>
                <h1 class="display-4 text-white fw-bold mb-3">News & Insights</h1>
                <p class="lead text-white-50 mb-4">Stay updated with industry trends, expert analysis, enterprise innovations, and company updates curated by our senior strategist team.</p>
                
                <!-- Search Input Filter -->
                <div class="search-box-gold d-flex align-items-center max-w-lg mb-2">
                    <i class="fa-solid fa-magnifying-glass text-white-50 me-2"></i>
                    <input type="text" id="articleSearchInput" class="form-control" placeholder="Search by topic, keyword, or author name...">
                    <button class="btn btn-gold-action" type="button" id="searchBtn">Search</button>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="250">0</div>
                            <div class="text-white-50 small mt-1">Articles Published</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="50">0</div>
                            <div class="text-white-50 small mt-1">k Monthly Readers</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="15">0</div>
                            <div class="text-white-50 small mt-1">Industry Experts</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card-gold">
                            <div class="stat-number-gold" data-target="98">0</div>
                            <div class="text-white-50 small mt-1">% Reader Approval</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. FEATURED SPOTLIGHT ARTICLE -->
<section class="py-5" style="background-color: var(--gold-light);" id="featured-spotlight">
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
<section class="py-5" id="articles-directory">
    <div class="container py-4">
        <div class="text-center max-w-2xl mx-auto mb-4" data-aos="fade-up">
            <h6 class="text-uppercase fw-bold letter-spacing-1" style="color: var(--gold-primary);">Knowledge Hub</h6>
            <h2 class="fw-bold mb-2">Explore Latest Articles & Reports</h2>
            <p class="text-muted">Filtered by expert categories to deliver actionable perspectives for business leaders.</p>
        </div>

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
<section class="py-5" style="background-color: var(--gold-light);">
    <div class="container py-3">
        <div class="text-center max-w-2xl mx-auto mb-5" data-aos="fade-up">
            <h6 class="text-uppercase fw-bold letter-spacing-1" style="color: var(--gold-primary);">Most Popular</h6>
            <h2 class="fw-bold">Trending Insights This Month</h2>
            <p class="text-muted">Top-read executive briefings curated by readership engagement metrics.</p>
        </div>

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

<!-- 5. NEWSLETTER SUBSCRIPTION CTA BANNER -->
<section class="py-5">
    <div class="container" data-aos="zoom-in">
        <div class="cta-gold-banner text-center">
            <h2 class="display-6 text-white fw-bold mb-3">Subscribe to Insights Digest</h2>
            <p class="lead text-white-50 mb-4 max-w-xl mx-auto">Get our bi-weekly executive intelligence brief delivered straight to your inbox. No spam, only high-impact technology and strategy updates.</p>
            
            <form id="newsletterForm" class="row g-2 justify-content-center max-w-lg mx-auto">
                <div class="col-sm-8">
                    <input type="email" id="newsletterEmail" class="form-control newsletter-input" placeholder="Enter your executive email address..." required>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-gold-action w-100 py-2">Subscribe</button>
                </div>
            </form>
            
            <div id="newsletterSuccess" class="alert alert-success bg-white text-dark border-0 mt-3 max-w-lg mx-auto d-none rounded-pill fw-semibold" role="alert">
                <i class="fa-solid fa-circle-check text-success me-2"></i> Thank you for subscribing to Insights Digest!
            </div>
        </div>
    </div>
</section>

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