<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>

<style>
    /* Gold Gradient Utility Elements */
    .bg-golden-gradient {
        background: var(--golden-gradient-background);
    }

    .gold-badge {
        background-color: rgba(171, 129, 57, 0.12);
        color: var(--dark-gold);
        border: 1px solid var(--gold-border);
        font-weight: 600;
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .section-title-wrap {
        text-align: center;
        margin-bottom: 3.5rem;
    }

    .section-title {
        font-weight: 700;
        color: var(--brand-dark);
        font-size: 2.25rem;
        margin-top: 0.75rem;
        letter-spacing: -0.5px;
    }

    .section-subtitle {
        color: var(--brand-text-sub);
        max-width: 680px;
        margin: 0.5rem auto 0;
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Buttons */
    .btn-gold {
        background: linear-gradient(135deg, var(--gold-primary) 0%, var(--dark-gold) 100%);
        color: var(--white);
        font-weight: 600;
        border: none;
        padding: 12px 28px;
        border-radius: 12px;
        transition: var(--transition);
        box-shadow: 0 4px 15px rgba(171, 129, 57, 0.25);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn-gold:hover, .btn-gold:focus {
        background: linear-gradient(135deg, var(--dark-gold) 0%, var(--gold-hover) 100%);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(171, 129, 57, 0.35);
    }

    .btn-gold-outline {
        background: transparent;
        color: var(--gold-primary);
        border: 1.5px solid var(--gold-primary);
        font-weight: 600;
        padding: 11px 26px;
        border-radius: 12px;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn-gold-outline:hover {
        background-color: var(--gold-primary);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(171, 129, 57, 0.2);
    }

    .hero-banner {
        position: relative;
        background: linear-gradient(135deg, #1d1b18 0%, #2b251a 50%, #151310 100%);
        padding: 5rem 0 7rem;
        color: var(--white);
        overflow: hidden;
        border-bottom: 3px solid var(--gold-primary);
    }

    .hero-banner::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(171, 129, 57, 0.15) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .hero-banner::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(171, 129, 57, 0.12) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .search-box-wrap {
        position: relative;
        max-width: 680px;
        margin: 2.2rem auto 0;
    }

    .search-box-wrap input {
        width: 100%;
        padding: 16px 20px 16px 54px;
        border-radius: 50px;
        border: 1px solid var(--gold-border);
        background: rgba(255, 255, 255, 0.95);
        font-size: 1rem;
        color: var(--text-dark);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        transition: var(--transition);
    }

    .search-box-wrap input:focus {
        outline: none;
        background: #ffffff;
        border-color: var(--gold-primary);
        box-shadow: 0 12px 35px rgba(171, 129, 57, 0.3);
    }

    .search-box-wrap i {
        position: absolute;
        left: 22px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gold-primary);
        font-size: 1.25rem;
    }

    .stats-wrapper {
        margin-top: -3.5rem;
        position: relative;
        z-index: 10;
    }

    .stat-card {
        background: var(--white);
        border-radius: var(--card-radius);
        padding: 1.75rem 1.25rem;
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-card);
        text-align: center;
        transition: var(--transition);
        height: 100%;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-hover);
        border-color: var(--gold-primary);
    }

    .stat-card i {
        font-size: 2rem;
        color: var(--gold-primary);
        margin-bottom: 0.75rem;
    }

    .stat-number {
        font-size: 2.1rem;
        font-weight: 700;
        color: var(--brand-dark);
        line-height: 1.1;
    }

    .stat-label {
        font-size: 0.85rem;
        color: var(--text-muted);
        font-weight: 500;
        margin-top: 0.35rem;
    }

    .spotlight-card {
        background: linear-gradient(135deg, #ffffff 0%, var(--gold-light) 100%);
        border: 1px solid var(--gold-border);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow-card);
        position: relative;
        transition: var(--transition);
    }

    .spotlight-card:hover {
        box-shadow: var(--shadow-hover);
    }

    .spotlight-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: #e63946;
        color: #ffffff;
        font-weight: 700;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 6px 14px;
        border-radius: 50px;
        box-shadow: 0 4px 12px rgba(230, 57, 70, 0.3);
        z-index: 3;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .spotlight-badge .pulse-dot {
        width: 8px;
        height: 8px;
        background: #fff;
        border-radius: 50%;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7); }
        70% { transform: scale(1.2); box-shadow: 0 0 0 8px rgba(255, 255, 255, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
    }

    .spotlight-img-wrap {
        position: relative;
        min-height: 380px;
        height: 100%;
        background-size: cover;
        background-position: center;
        border-radius: 20px 0 0 20px;
    }

    @media (max-width: 991px) {
        .spotlight-img-wrap {
            min-height: 260px;
            border-radius: 20px 20px 0 0;
        }
    }

    .spotlight-content {
        padding: 2.75rem 2.5rem;
    }

    .timer-box {
        background: rgba(171, 129, 57, 0.08);
        border: 1px dashed var(--gold-primary);
        border-radius: 12px;
        padding: 12px 18px;
        display: inline-flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 1.25rem;
    }

    .timer-unit {
        text-align: center;
    }

    .timer-val {
        font-weight: 700;
        font-size: 1.2rem;
        color: var(--dark-gold);
        line-height: 1;
    }

    .timer-lbl {
        font-size: 0.65rem;
        text-transform: uppercase;
        color: var(--text-muted);
        letter-spacing: 0.5px;
    }

    .speaker-avatar-group {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .speaker-avatar-group img {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 2px solid var(--white);
        margin-right: -12px;
        object-fit: cover;
        box-shadow: var(--shadow-sm);
    }

    .speaker-avatar-group .more-speakers {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: var(--gold-primary);
        color: #fff;
        font-size: 0.75rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid var(--white);
        box-shadow: var(--shadow-sm);
    }

    .filter-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 3rem;
    }

    .filter-btn {
        background: var(--white);
        color: var(--text-dark);
        border: 1px solid var(--brand-grey);
        border-radius: 50px;
        padding: 8px 22px;
        font-weight: 500;
        font-size: 0.9rem;
        transition: var(--transition);
        cursor: pointer;
    }

    .filter-btn:hover, .filter-btn.active {
        background: var(--gold-primary);
        color: var(--white);
        border-color: var(--gold-primary);
        box-shadow: 0 4px 14px rgba(171, 129, 57, 0.25);
    }

    .webinar-card {
        background: var(--white);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-border);
        box-shadow: var(--shadow-card);
        transition: var(--transition);
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .webinar-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-hover);
        border-color: var(--gold-primary);
    }

    .webinar-card-img {
        height: 200px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .webinar-status {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .status-live {
        background: #e63946;
        color: #ffffff;
    }

    .status-upcoming {
        background: #2a9d8f;
        color: #ffffff;
    }

    .status-ondemand {
        background: #4a5568;
        color: #ffffff;
    }

    .webinar-topic {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: rgba(0, 0, 0, 0.65);
        backdrop-filter: blur(4px);
        color: #ffffff;
        font-size: 0.75rem;
        padding: 4px 10px;
        border-radius: 6px;
        font-weight: 500;
    }

    .webinar-body {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .webinar-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-bottom: 0.75rem;
    }

    .webinar-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--brand-dark);
        margin-bottom: 0.75rem;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .webinar-desc {
        font-size: 0.875rem;
        color: var(--brand-text-sub);
        margin-bottom: 1.25rem;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .webinar-footer {
        margin-top: auto;
        padding-top: 1rem;
        border-top: 1px solid var(--gray-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .speaker-info-mini {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .speaker-info-mini img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid var(--gold-border);
    }

    .speaker-name-mini {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--brand-dark);
        line-height: 1.2;
    }

    .speaker-role-mini {
        font-size: 0.7rem;
        color: var(--text-muted);
    }

    .speaker-card {
        background: var(--white);
        border-radius: var(--card-radius);
        border: 1px solid var(--gold-border);
        padding: 1.75rem 1.25rem;
        text-align: center;
        box-shadow: var(--shadow-card);
        transition: var(--transition);
    }

    .speaker-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-hover);
        border-color: var(--gold-primary);
    }

    .speaker-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 1.2rem;
        border: 3px solid var(--gold-light);
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
    }

    .speaker-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--brand-dark);
        margin-bottom: 0.25rem;
    }

    .speaker-title {
        font-size: 0.8rem;
        color: var(--gold-primary);
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .speaker-company {
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-bottom: 1rem;
    }

    .speaker-stats-pill {
        background: var(--gold-light);
        color: var(--dark-gold);
        font-size: 0.75rem;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 50px;
        display: inline-block;
        margin-bottom: 1rem;
    }

    .social-link {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--gray-color);
        color: var(--brand-dark);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
        text-decoration: none;
    }

    .social-link:hover {
        background: var(--gold-primary);
        color: var(--white);
    }

    .series-card {
        background: linear-gradient(135deg, #2b251a 0%, #1a1712 100%);
        border-radius: var(--card-radius);
        padding: 2.25rem;
        color: var(--white);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(171, 129, 57, 0.3);
        box-shadow: var(--shadow-card);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .series-card::after {
        content: '';
        position: absolute;
        top: -30%;
        right: -20%;
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(171, 129, 57, 0.2) 0%, transparent 70%);
        border-radius: 50%;
    }

    .series-tag {
        color: var(--gold-primary);
        font-weight: 700;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0.75rem;
        display: block;
    }

    .series-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        line-height: 1.3;
    }

    .series-count {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 1.5rem;
    }

    .cta-host-banner {
        background: linear-gradient(135deg, var(--gold-primary) 0%, var(--dark-gold) 100%);
        border-radius: 24px;
        padding: 3.5rem 2.5rem;
        color: var(--white);
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(171, 129, 57, 0.25);
    }

    .cta-host-banner::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.6;
    }

    /* Custom Modal Styling */
    .modal-content {
        border-radius: 20px;
        border: 1px solid var(--gold-border);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .modal-header {
        background: linear-gradient(135deg, #2b251a 0%, #1f1b13 100%);
        color: var(--white);
        border-bottom: 2px solid var(--gold-primary);
        padding: 1.5rem 2rem;
    }

    .modal-header .btn-close {
        filter: invert(1) grayscale(100%) brightness(200%);
    }

    .modal-body {
        padding: 2rem;
        background-color: #ffffff;
    }

    .takeaway-list {
        padding-left: 0;
        list-style: none;
    }

    .takeaway-list li {
        position: relative;
        padding-left: 28px;
        margin-bottom: 10px;
        font-size: 0.9rem;
        color: var(--brand-dark);
    }

    .takeaway-list li::before {
        content: '\f00c';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 2px;
        color: var(--gold-primary);
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--gold-primary);
        box-shadow: 0 0 0 0.25rem rgba(171, 129, 57, 0.2);
    }

    /* Toast notification */
    .toast-custom {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        background: #2b2b2b;
        color: #fff;
        padding: 16px 24px;
        border-radius: 12px;
        border-left: 4px solid var(--gold-primary);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 12px;
        transform: translateY(100px);
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .toast-custom.show {
        transform: translateY(0);
        opacity: 1;
    }
</style>

<!-- 1. Header Banner Section -->
<header class="hero-banner text-center">
    <div class="container position-relative z-1">
        <span class="gold-badge bg-dark text-warning border-warning mb-3" data-aos="fade-down">
            <i class="fa-solid fa-tower-broadcast text-warning"></i> Interactive Masterclasses & Panels
        </span>
        <h1 class="display-4 fw-bold mb-3 text-white" data-aos="fade-up" data-aos-delay="100">
            Executive Webinars & <span style="color: var(--gold-primary);">Thought Leadership</span>
        </h1>
        <p class="lead text-light opacity-75 max-w-700 mx-auto" style="max-width: 720px;" data-aos="fade-up" data-aos-delay="200">
            Explore upcoming live webinars, register for interactive panel discussions, or access our comprehensive library of on-demand expert recordings.
        </p>

        <!-- Search Input Box -->
        <div class="search-box-wrap" data-aos="fade-up" data-aos-delay="300">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="liveSearchInput" placeholder="Search by topic, speaker name, or key terms (e.g., AI, Leadership)...">
        </div>
    </div>
</header>

<!-- Stat Counter Cards -->
<section class="stats-wrapper">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-card">
                    <i class="fa-solid fa-video"></i>
                    <div class="stat-number" data-counter="120">0</div>
                    <div class="stat-label">Webinars Hosted</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-card">
                    <i class="fa-solid fa-users"></i>
                    <div class="stat-number" data-counter="45">0</div>
                    <div class="stat-label">Global Attendees (K+)</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-card">
                    <i class="fa-solid fa-star"></i>
                    <div class="stat-number" data-counter="98">0</div>
                    <div class="stat-label">Attendee Rating %</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-card">
                    <i class="fa-solid fa-microphone-lines"></i>
                    <div class="stat-number" data-counter="85">0</div>
                    <div class="stat-label">Industry Experts</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Upcoming Featured Webinar Spotlight Card -->
<section class="py-5 mt-4">
    <div class="container">
        <div class="section-title-wrap" data-aos="fade-up">
            <span class="gold-badge"><i class="fa-solid fa-star"></i> Next Featured Live Event</span>
            <h2 class="section-title">Spotlight Keynote Panel</h2>
            <p class="section-subtitle">Don't miss our flagship interactive summit featuring C-suite executives discussing the future of enterprise decision making.</p>
        </div>

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
<section class="py-5 bg-golden-gradient">
    <div class="container">
        <div class="section-title-wrap" data-aos="fade-up">
            <span class="gold-badge"><i class="fa-solid fa-filter"></i> Browse All Sessions</span>
            <h2 class="section-title">Explore Webinars & Recordings</h2>
            <p class="section-subtitle">Filter through our live schedule or dive into high-impact recorded sessions on demand.</p>
        </div>

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
<section class="py-5">
    <div class="container">
        <div class="section-title-wrap" data-aos="fade-up">
            <span class="gold-badge"><i class="fa-solid fa-user-tie"></i> World-Class Thought Leaders</span>
            <h2 class="section-title">Meet Our Keynote Speakers</h2>
            <p class="section-subtitle">Learn directly from globally recognized pioneers, researchers, executives, and innovators driving industry evolution.</p>
        </div>

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
<section class="py-5 bg-golden-gradient">
    <div class="container">
        <div class="section-title-wrap" data-aos="fade-up">
            <span class="gold-badge"><i class="fa-solid fa-layer-group"></i> Masterclass Collections</span>
            <h2 class="section-title">Popular On-Demand Series</h2>
            <p class="section-subtitle">Curated multi-part video series structured to upskill leadership teams on key organizational disciplines.</p>
        </div>

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

<!-- 8. Host a Webinar / Speaker Invitation CTA Banner -->
<section class="py-5">
    <div class="container" data-aos="zoom-in">
        <div class="cta-host-banner">
            <div class="row align-items-center position-relative z-1">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <span class="badge bg-white text-dark fw-bold px-3 py-2 rounded-pill mb-3">Partner With Us</span>
                    <h2 class="fw-bold mb-3">Interested in Hosting an Executive Webinar?</h2>
                    <p class="lead opacity-90 mb-0">We collaborate with renowned thinkers, C-suite executives, and industry tech leaders to co-create high-impact interactive masterclasses and panel discussions.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <button class="btn btn-light btn-lg text-dark fw-bold shadow-lg px-4" id="btnHostSubmit">
                        Apply as Speaker <i class="fa-solid fa-paper-plane ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

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