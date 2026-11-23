<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/ready-made-licenses';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp?v=' . FILE_VERSISON)
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';

?>

<style>
    :root {
        --rml-navy: #0f1c2e;
        --rml-gold: #a3781b;
        --rml-gold-light: rgba(163, 120, 27, 0.12);
        --rml-gold-hover: #876111;
        --rml-slate: #4a5568;
    }

    /* Section Base */
    .rml-hero-v3 {
        background-color: #ffffff;
        min-height: 580px;
        display: flex;
        align-items: center;
    }

    .rml-bg-grid {
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(to right, rgba(15, 28, 46, 0.03) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(15, 28, 46, 0.03) 1px, transparent 1px);
        background-size: 42px 42px;
        mask-image: radial-gradient(circle at 70% 50%, black 35%, transparent 80%);
        -webkit-mask-image: radial-gradient(circle at 70% 50%, black 35%, transparent 80%);
        z-index: 0;
    }

    .rml-ambient-glow {
        position: absolute;
        top: -15%;
        right: -10%;
        width: 550px;
        height: 550px;
        background: radial-gradient(circle, rgba(163, 120, 27, 0.14) 0%, rgba(255, 255, 255, 0) 70%);
        border-radius: 50%;
        z-index: 0;
        pointer-events: none;
    }

    /* Typography & Colors */
    .text-navy { color: var(--rml-navy) !important; }
    .text-gold { color: var(--rml-gold) !important; }

    .rml-title {
        font-size: clamp(2.4rem, 4.2vw, 3.5rem);
        line-height: 1.12;
        letter-spacing: -0.025em;
    }

    .rml-subtitle {
        font-size: 1.06rem;
        line-height: 1.7;
        color: var(--rml-slate);
    }

    /* Status Pill */
    .rml-badge {
        background-color: var(--rml-gold-light);
        color: var(--rml-gold);
        font-size: 0.78rem;
        letter-spacing: 0.06em;
        border: 1px solid rgba(163, 120, 27, 0.25);
    }

    .rml-live-dot {
        width: 8px;
        height: 8px;
        background-color: var(--rml-gold);
        border-radius: 50%;
        position: relative;
    }

    .rml-live-dot::after {
        content: "";
        position: absolute;
        inset: -4px;
        border-radius: 50%;
        border: 2px solid var(--rml-gold);
        animation: rmlRadar 2s infinite ease-out;
    }

    @keyframes rmlRadar {
        0% { transform: scale(0.8); opacity: 0.9; }
        100% { transform: scale(2.1); opacity: 0; }
    }

    /* Buttons */
    .rml-btn-primary {
        background-color: var(--rml-gold);
        color: #ffffff;
        border: none;
        border-radius: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(163, 120, 27, 0.22);
    }

    .rml-btn-primary:hover {
        background-color: var(--rml-gold-hover);
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 12px 24px rgba(163, 120, 27, 0.32);
    }

    .rml-btn-primary svg { transition: transform 0.3s ease; }
    .rml-btn-primary:hover svg { transform: translateX(5px); }

    .rml-btn-outline {
        background-color: #ffffff;
        color: var(--rml-navy);
        border: 1.5px solid rgba(15, 28, 46, 0.18);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .rml-btn-outline:hover {
        border-color: var(--rml-navy);
        background-color: var(--rml-navy);
        color: #ffffff;
        transform: translateY(-3px);
    }

    /* ===================================================
    RIGHT OVERLAPPING IMAGE COLLAGE (PROPERLY ALIGNED)
    =================================================== */
    .rml-collage-wrapper {
        width: 100%;
        max-width: 540px;
        height: 460px;
        position: relative;
    }

    /* Decorative Back Gold Outline Frame */
    .rml-gold-frame {
        position: absolute;
        top: 0;
        right: 0;
        width: 76%;
        height: 330px;
        border: 2.5px solid var(--rml-gold);
        border-radius: 18px;
        z-index: 1;
    }

    /* Decorative Dots Grid Bottom-Right */
    .rml-dots-accent {
        position: absolute;
        bottom: 24px;
        right: 28px;
        width: 130px;
        height: 130px;
        background-image: radial-gradient(var(--rml-gold) 1.8px, transparent 1.8px);
        background-size: 14px 14px;
        opacity: 0.45;
        z-index: 1;
    }

    /* Block 1: Main Landscape Photo */
    .rml-img-main {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 78%;
        height: 330px;
        border-radius: 16px;
        overflow: hidden;
        z-index: 2;
        background: #f1f5f9;
    }

    .rml-img-main img,
    .rml-img-secondary img {
        transition: transform 0.6s ease;
    }

    .rml-img-main:hover img,
    .rml-img-secondary:hover img {
        transform: scale(1.04);
    }

    /* Subtle Pill Tag inside Main Image */
    .rml-img-overlay-tag {
        position: absolute;
        top: 16px;
        right: 16px;
        background: rgba(15, 28, 46, 0.85);
        backdrop-filter: blur(6px);
        color: #ffffff;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 20px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .rml-dot-sm {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background-color: #10b981;
    }

    /* Block 2: Overlapping Secondary Square Photo (Bottom-Left) */
    .rml-img-secondary {
        position: absolute;
        bottom: 12px;
        left: 0;
        width: 48%;
        height: 215px;
        border-radius: 16px;
        border: 6px solid #ffffff;
        overflow: hidden;
        z-index: 3;
        background: #e2e8f0;
    }

    /* Block 3: Floating Trust Badge Card (Bottom-Right Overlap) */
    .rml-floating-badge {
        position: absolute;
        bottom: 34px;
        right: 8px;
        background: #ffffff;
        border-left: 4px solid var(--rml-gold);
        border-radius: 12px;
        padding: 14px 18px;
        z-index: 4;
        max-width: 270px;
        transition: transform 0.3s ease;
    }

    .rml-floating-badge:hover {
        transform: translateY(-4px);
    }

    .rml-shield-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background-color: var(--rml-gold-light);
        color: var(--rml-gold);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* Responsive Adjustments for Tablet & Mobile */
    @media (max-width: 575.98px) {
        .rml-collage-wrapper {
            height: 390px;
        }
        .rml-gold-frame,
        .rml-img-main {
            width: 85%;
            height: 260px;
        }
        .rml-img-secondary {
            width: 54%;
            height: 170px;
            bottom: 24px;
        }
        .rml-floating-badge {
            bottom: 0;
            right: 0;
            padding: 10px 14px;
            max-width: 235px;
        }
    }
</style>

<!-- Ready-Made Licenses Hero Section (Overlapping Image Collage + AOS) -->
<section class="rml-hero-v3 position-relative overflow-hidden py-5">
    <div class="rml-bg-grid"></div>
    <div class="rml-ambient-glow"></div>

    <div class="container position-relative z-2 py-lg-5">
        <div class="row align-items-center gy-5">
            
            <!-- Left Content Column (Kept Clean & Balanced) -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                <div class="rml-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4">
                    <span class="rml-live-dot"></span>
                    <span class="fw-semibold text-uppercase">Pre-Approved Global Entities</span>
                </div>

                <h1 class="rml-title fw-bold mb-3">
                    <span class="text-navy">Ready-Made</span>
                    <span class="text-gold d-block">Regulatory Licenses</span>
                </h1>

                <p class="rml-subtitle mb-4 pe-lg-4">
                    Skip 12–18 months of regulatory approval delays. Acquire clean, compliant, pre-licensed financial, EMI, VASP, and gaming entities with active bank accounts ready for immediate ownership transfer.
                </p>

                <!-- Key Metrics Strip -->
                <div class="row g-3 mb-4 pb-2" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
                    <div class="col-4">
                        <div class="rml-stat-box">
                            <h4 class="fw-bold text-navy mb-0">14 Days</h4>
                            <small class="text-muted">Avg. Transfer Time</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="rml-stat-box border-start ps-3">
                            <h4 class="fw-bold text-navy mb-0">25+</h4>
                            <small class="text-muted">Jurisdictions</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="rml-stat-box border-start ps-3">
                            <h4 class="fw-bold text-gold mb-0">100%</h4>
                            <small class="text-muted">Zero-Debt Audited</small>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap align-items-center gap-3" data-aos="fade-up" data-aos-delay="250" data-aos-duration="800">
                    <a href="#available-licenses" class="btn rml-btn-primary d-inline-flex align-items-center gap-2 px-4 py-3 fw-semibold">
                        <span>Browse Available Licenses</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="#consultation" class="btn rml-btn-outline px-4 py-3 fw-semibold">
                        Request Inventory List
                    </a>
                </div>
            </div>

            <!-- Right Overlapping Image Collage Column -->
            <div class="col-lg-6">
                <div class="rml-collage-wrapper position-relative mx-auto">
                    
                    <!-- Decorative Gold Frame Accent (Back Layer) -->
                    <div class="rml-gold-frame" data-aos="fade-down-left" data-aos-duration="900" data-aos-delay="100"></div>

                    <!-- Decorative Dotted Pattern Accent -->
                    <div class="rml-dots-accent" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200"></div>

                    <!-- Block 1: Primary Main Image (Top-Right Aligned) -->
                    <div class="rml-img-main shadow-lg" data-aos="fade-left" data-aos-duration="850" data-aos-delay="150">
                        <img src="<?= $img; ?>/financial-hub.png" alt="Global Financial Center" class="img-fluid w-100 h-100 object-fit-cover">
                        <div class="rml-img-overlay-tag">
                            <span class="rml-dot-sm"></span> UK • EU • Global Hubs
                        </div>
                    </div>

                    <!-- Block 2: Secondary Overlapping Photo (Bottom-Left Aligned) -->
                    <div class="rml-img-secondary shadow-lg" data-aos="fade-up-right" data-aos-duration="850" data-aos-delay="300">
                        <img src="<?= $img; ?>/corporate-signing.png" alt="Turnkey Ownership Transfer" class="img-fluid w-100 h-100 object-fit-cover">
                    </div>

                    <!-- Block 3: Overlapping Floating Verification Badge (Bottom-Right Aligned) -->
                    <div class="rml-floating-badge shadow-lg" data-aos="zoom-in" data-aos-duration="750" data-aos-delay="450">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rml-shield-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    <polyline points="9 12 11 14 15 10"></polyline>
                                </svg>
                            </div>
                            <div>
                                <span class="d-block fw-bold text-navy fs-6 lh-sm">Regulator Approved</span>
                                <small class="text-muted">Clean Compliance & Bank Ready</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize AOS cleanly
        if (typeof AOS !== "undefined") {
            AOS.init({
                once: true,
                offset: 60,
                duration: 850,
                easing: "ease-out-cubic"
            });
        }
    });
</script>

<!-- Ready-Made License Benefits Section -->
<section class="rml-benefits-section py-5">
    <style>
        /* Section Base */
        .rml-benefits-section {
            background-color: #ffffff;
        }

        /* Left Column Typography & Vertical Divider */
        .rml-sec-title {
            font-size: clamp(2rem, 3.2vw, 2.65rem);
            line-height: 1.15;
            letter-spacing: -0.02em;
        }

        .rml-sec-text {
            font-size: 0.96rem;
            line-height: 1.68;
            color: var(--rml-slate, #4a5568);
        }

        @media (min-width: 992px) {
            .rml-benefits-intro {
                border-right: 1px solid rgba(163, 120, 27, 0.35);
            }
        }

        /* Slanted Gold "Benefits" Tab & Line */
        .rml-tab-label {
            background-color: var(--rml-gold, #a3781b);
            font-size: 1.05rem;
            letter-spacing: 0.02em;
            position: relative;
            padding-right: 2.2rem !important;
            clip-path: polygon(0 0, 100% 0, 86% 100%, 0% 100%);
        }

        .rml-tab-line {
            height: 1.5px;
            background-color: rgba(163, 120, 27, 0.55);
            margin-left: -10px;
        }

        /* Benefit Card Styling */
        .rml-benefit-card {
            position: relative;
            background-color: #ffffff;
            border: 1px solid rgba(15, 28, 46, 0.07);
            border-radius: 12px;
            padding: 1.5rem 0.9rem 1.65rem;
            box-shadow: 0 6px 20px rgba(15, 28, 46, 0.04);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Bottom-Right Gold Triangle Corner Accent (Matches Reference) */
        .rml-benefit-card::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, transparent 50%, rgba(163, 120, 27, 0.42) 50%);
            transition: all 0.3s ease;
        }

        /* Hover Micro-Interaction */
        .rml-benefit-card:hover {
            transform: translateY(-6px);
            border-color: rgba(163, 120, 27, 0.45);
            box-shadow: 0 14px 28px rgba(15, 28, 46, 0.09);
        }

        .rml-benefit-card:hover::after {
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, transparent 50%, var(--rml-gold, #a3781b) 50%);
        }

        /* Bootstrap Icon Styling */
        .rml-b-icon {
            font-size: 2.15rem;
            line-height: 1;
            color: var(--rml-gold, #a3781b);
            transition: transform 0.3s ease;
        }

        .rml-benefit-card:hover .rml-b-icon {
            transform: scale(1.12);
        }

        /* Card Title */
        .rml-b-title {
            font-size: 0.88rem;
            font-weight: 600;
            line-height: 1.4;
            color: var(--rml-navy, #0f1c2e);
        }
    </style>
    <div class="container py-lg-4">
        <div class="row gy-5 align-items-start">
            
            <!-- Left Sticky Intro Column -->
            <div class="col-lg-4 rml-benefits-intro pe-lg-4" data-aos="fade-right" data-aos-duration="800">
                <h2 class="rml-sec-title fw-bold mb-4">
                    <span class="text-navy d-block">Immediate</span>
                    <span class="text-gold d-block">Regulatory</span>
                    <span class="text-gold d-block">Presence</span>
                </h2>

                <p class="rml-sec-text mb-3">
                    Launch your regulated operations immediately with our ready-made licenses. These pre-approved financial, crypto, and gaming entities are legally established and ready for ownership transfer, allowing you to operate without waiting months for new regulatory authorization.
                </p>

                <p class="rml-sec-text mb-0">
                    Whether you are expanding cross-border, connecting payment rails, or entering regulated markets, our turnkey licensed entities provide a fast, compliant, and cost-effective solution.
                </p>
            </div>

            <!-- Right Benefits Grid Column -->
            <div class="col-lg-8 ps-lg-5">
                
                <!-- Slanted Gold "Benefits" Header + Horizontal Line -->
                <div class="rml-benefits-header d-flex align-items-center mb-4" data-aos="fade-left" data-aos-duration="750">
                    <div class="rml-tab-label fw-bold text-white px-4 py-2">
                        Benefits
                    </div>
                    <div class="rml-tab-line flex-grow-1"></div>
                </div>

                <!-- 5x2 Responsive Card Grid (5 cols on XL, 3 on MD, 2 on SM) -->
                <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 g-3">
                    
                    <!-- Card 1 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="50">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-rocket-takeoff"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Immediate license availability</h6>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Faster market entry</h6>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="150">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-layers"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Pre-approved entities</h6>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Suitable for global founders</h6>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="250">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Simplified ownership transfer</h6>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="300">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-bank"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Active bank & PSP accounts</h6>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="350">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Zero-debt audited history</h6>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="400">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Regulatory compliance support</h6>
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="450">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Experienced legal advisory</h6>
                        </div>
                    </div>

                    <!-- Card 10 -->
                    <div class="col" data-aos="fade-up" data-aos-delay="500">
                        <div class="rml-benefit-card h-100 text-center">
                            <div class="rml-b-icon mb-3">
                                <i class="bi bi-globe2"></i>
                            </div>
                            <h6 class="rml-b-title mb-0">Multiple jurisdictions available</h6>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Optional Flag Icons CDN (if not already included in your <head>) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">

<!-- Global Jurisdictions Section (Exact Sample Card Layout) -->
<section class="rml-jur-sample-section py-5">

    <style>
        /* Section Base */
        .rml-jur-sample-section {
            background-color: #f8f9fa;
        }

        /* Header Styling */
        .rml-reach-pill {
            background-color: var(--rml-gold, #a3781b);
            color: #ffffff;
            font-size: 0.78rem;
            letter-spacing: 0.04em;
        }

        .rml-side-line {
            width: 75px;
            height: 1.5px;
            background: linear-gradient(90deg, transparent, var(--rml-gold, #a3781b));
        }

        .rml-heading-wrapper .rml-side-line:last-child {
            background: linear-gradient(90deg, var(--rml-gold, #a3781b), transparent);
        }

        .rml-jur-title {
            font-size: clamp(1.85rem, 3.2vw, 2.55rem);
            letter-spacing: -0.02em;
        }

        .rml-jur-subtitle {
            font-size: 0.96rem;
            line-height: 1.6;
            color: var(--rml-slate, #4a5568);
        }

        /* =========================================================
        JURISDICTION CARD (EXACT MATCH TO UPLOADED SAMPLE IMAGE)
        ========================================================= */
        .rml-sample-card {
            position: relative;
            background-color: #ffffff;
            border-radius: 18px;
            border: 1px solid rgba(15, 28, 46, 0.07);
            box-shadow: 0 8px 26px rgba(15, 28, 46, 0.06);
            overflow: hidden;
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
        }

        .rml-sample-card:hover {
            transform: translateY(-6px);
            border-color: rgba(163, 120, 27, 0.4);
            box-shadow: 0 18px 36px rgba(15, 28, 46, 0.11);
        }

        /* Inner Content Layer (Sits Above Landmark Image) */
        .rml-card-inner {
            position: relative;
            z-index: 2;
            padding: 1.75rem 1.85rem;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Vertical Gold Bar + Thin Horizontal Underline under Country Title */
        .rml-v-bar {
            width: 4.5px;
            height: 24px;
            background-color: var(--rml-gold, #a3781b);
            border-radius: 2px;
            display: inline-block;
        }

        .rml-h-underline {
            width: 75px;
            height: 1.5px;
            background-color: rgba(163, 120, 27, 0.55);
        }

        /* Circular Flag on Top-Right with Drop Shadow */
        .rml-top-flag {
            width: 52px !important;
            height: 52px;
            border-radius: 50%;
            border: 3px solid #ffffff;
            box-shadow: 0 4px 14px rgba(15, 28, 46, 0.16);
            background-size: cover;
            flex-shrink: 0;
        }

        /* Body Description (Constrained slightly so right edge breathes) */
        .rml-sample-desc {
            font-size: 0.88rem;
            line-height: 1.62;
            color: #334155;
            max-width: 86%;
        }

        /* "Ideal For:" Solid Gold Pill */
        .rml-ideal-badge {
            background-color: #b5892e;
            color: #ffffff;
            font-size: 0.78rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 6px;
            letter-spacing: 0.02em;
        }

        /* Stacked Cream Checkmark Pills on Bottom-Left */
        .rml-check-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: #fbf7ef;
            border: 1px solid rgba(163, 120, 27, 0.16);
            color: var(--rml-navy, #0f1c2e);
            font-size: 0.82rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 50px;
            position: relative;
            z-index: 3;
            transition: background-color 0.25s ease, transform 0.25s ease;
        }

        .rml-check-pill i {
            color: var(--rml-gold, #a3781b);
            font-size: 1rem;
            font-weight: bold;
        }

        .rml-sample-card:hover .rml-check-pill {
            background-color: #f6eedc;
        }

        /* =========================================================
        SOFT-FEATHERED BOTTOM-RIGHT LANDMARK IMAGE OVERLAY
        ========================================================= */
        .rml-landmark-bg {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 56%;
            height: 62%;
            background-size: cover;
            background-position: bottom right;
            background-repeat: no-repeat;
            z-index: 1;
            pointer-events: none;
            transition: transform 0.5s ease;
            /* Smooth radial + linear feathering into pure white card background */
            -webkit-mask-image: radial-gradient(ellipse 85% 85% at 85% 85%, #000 38%, rgba(0, 0, 0, 0.45) 65%, transparent 92%);
            mask-image: radial-gradient(ellipse 85% 85% at 85% 85%, #000 38%, rgba(0, 0, 0, 0.45) 75%, transparent 92%);
        }

        .rml-sample-card:hover .rml-landmark-bg {
            transform: scale(1.04);
        }

        /* Responsive Adjustments */
        @media (max-width: 575.98px) {
            .rml-card-inner {
                padding: 1.4rem 1.35rem;
            }
            .rml-sample-desc {
                max-width: 100%;
            }
            .rml-top-flag {
                width: 44px;
                height: 44px;
            }
            .rml-landmark-bg {
                width: 65%;
                height: 48%;
                opacity: 0.75;
            }
        }
    </style>
    <div class="container py-lg-4">
        
        <!-- Centered Section Header -->
        <div class="text-center mx-auto mb-5" style="max-width: 720px;" data-aos="fade-up" data-aos-duration="750">
            <span class="rml-reach-pill d-inline-block px-3 py-1 rounded-pill fw-semibold mb-2">
                Our Global Reach
            </span>
            <div class="rml-heading-wrapper d-flex align-items-center justify-content-center gap-3 mb-2">
                <span class="rml-side-line d-none d-md-inline-block"></span>
                <h2 class="rml-jur-title fw-bold mb-0">
                    <span class="text-navy">Global Jurisdictions</span>
                    <span class="text-gold">Available</span>
                </h2>
                <span class="rml-side-line d-none d-md-inline-block"></span>
            </div>
            <p class="rml-jur-subtitle mb-0">
                Choose from a wide range of trusted regulatory jurisdictions to acquire your ready-made license, each offering pre-approved compliance tailored to your business.
            </p>
        </div>

        <!-- 2-Column Card Grid (Matches Sample Layout) -->
        <div class="row g-4">
            
            <!-- Card 1: United Kingdom -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                <div class="rml-sample-card h-100">
                    <!-- Bottom-Right Soft-Feathered Landmark Image -->
                    <div class="rml-landmark-bg" style="background-image: url('<?= $img; ?>/United-Kingdom.png');"></div>

                    <div class="rml-card-inner">
                        <!-- Top Row: Title + Circular Flag -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="rml-title-group">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rml-v-bar"></span>
                                    <h4 class="fw-bold text-navy mb-0">United Kingdom</h4>
                                </div>
                                <div class="rml-h-underline mt-2"></div>
                            </div>
                            <span class="rml-top-flag fi fi-gb fis" title="United Kingdom"></span>
                        </div>

                        <!-- Description -->
                        <p class="rml-sample-desc mb-4">
                            Acquire an FCA-authorized Small EMI or Payment Institution license without waiting 12+ months for approval. UK licensed entities offer tier-1 international credibility and active safeguarding bank accounts.
                        </p>

                        <!-- Bottom Left: Ideal For Badge + Stacked Pills -->
                        <div class="rml-ideal-block mt-auto">
                            <span class="rml-ideal-badge d-inline-block mb-2">Ideal For:</span>
                            <div class="d-flex flex-column align-items-start gap-2">
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> EMI & Payment Institutions</span>
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Cross-Border FX & FinTech</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: India (IN) -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="rml-sample-card h-100">
                    <div class="rml-landmark-bg" style="background-image: url('https://images.unsplash.com/photo-1549890762-0a3f8933bc76?auto=format&fit=crop&w=700&q=80');"></div>

                    <div class="rml-card-inner">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="rml-title-group">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rml-v-bar"></span>
                                    <h4 class="fw-bold text-navy mb-0">India (IN)</h4>
                                </div>
                                <div class="rml-h-underline mt-2"></div>
                            </div>
                            <span class="rml-top-flag fi fi-in fis" title="India"></span>
                        </div>

                        <p class="rml-sample-desc mb-4">
                            Enter Europe's leading fintech and crypto hub with a pre-approved EU VASP or EMI entity. Our ready-made Indian licenses enable immediate EEA passporting and direct SEPA banking integration.
                        </p>

                        <div class="rml-ideal-block mt-auto">
                            <span class="rml-ideal-badge d-inline-block mb-2">Ideal For:</span>
                            <div class="d-flex flex-column align-items-start gap-2">
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Crypto Exchanges & VASP</span>
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> EU-Wide Payment Services</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: UAE (Dubai) -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="rml-sample-card h-100">
                    <div class="rml-landmark-bg" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=700&q=80');"></div>

                    <div class="rml-card-inner">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="rml-title-group">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rml-v-bar"></span>
                                    <h4 class="fw-bold text-navy mb-0">UAE</h4>
                                </div>
                                <div class="rml-h-underline mt-2"></div>
                            </div>
                            <span class="rml-top-flag fi fi-ae fis" title="UAE"></span>
                        </div>

                        <p class="rml-sample-desc mb-4">
                            Start regulated operations immediately in the UAE with a ready-made DIFC, ADGM, or VARA licensed entity. Benefit from 100% foreign ownership, tax efficiency, and rapid regulatory handover[cite: 8, 9].
                        </p>

                        <div class="rml-ideal-block mt-auto">
                            <span class="rml-ideal-badge d-inline-block mb-2">Ideal For:</span>
                            <div class="d-flex flex-column align-items-start gap-2">
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Virtual Assets & Web3</span>
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Wealth & Brokerage Firms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4: Singapore -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="rml-sample-card h-100">
                    <div class="rml-landmark-bg" style="background-image: url('https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=700&q=80');"></div>

                    <div class="rml-card-inner">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="rml-title-group">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rml-v-bar"></span>
                                    <h4 class="fw-bold text-navy mb-0">Singapore</h4>
                                </div>
                                <div class="rml-h-underline mt-2"></div>
                            </div>
                            <span class="rml-top-flag fi fi-sg fis" title="Singapore"></span>
                        </div>

                        <p class="rml-sample-desc mb-4">
                            Enter one of Asia's leading financial hubs with a MAS-regulated payment or fund management entity. Ready-made Singapore licenses enable instant APAC expansion with institutional banking[cite: 8, 9].
                        </p>

                        <div class="rml-ideal-block mt-auto">
                            <span class="rml-ideal-badge d-inline-block mb-2">Ideal For:</span>
                            <div class="d-flex flex-column align-items-start gap-2">
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> FinTech & Digital Payments</span>
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Fund & Asset Management</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5: Hong Kong -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="rml-sample-card h-100">
                    <div class="rml-landmark-bg" style="background-image: url('https://images.unsplash.com/photo-1536599018102-9f803c140fc1?auto=format&fit=crop&w=700&q=80');"></div>

                    <div class="rml-card-inner">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="rml-title-group">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rml-v-bar"></span>
                                    <h4 class="fw-bold text-navy mb-0">Hong Kong</h4>
                                </div>
                                <div class="rml-h-underline mt-2"></div>
                            </div>
                            <span class="rml-top-flag fi fi-hk fis" title="Hong Kong"></span>
                        </div>

                        <p class="rml-sample-desc mb-4">
                            Expand into Asia with a Hong Kong ready-made Money Service Operator (MSO) or SFC license. Ideal for cross-border currency exchange, international remittance, and multi-currency settlement.
                        </p>

                        <div class="rml-ideal-block mt-auto">
                            <span class="rml-ideal-badge d-inline-block mb-2">Ideal For:</span>
                            <div class="d-flex flex-column align-items-start gap-2">
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Money Service & Remittance</span>
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Cross-Border Settlement</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6: Mauritius -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="rml-sample-card h-100">
                    <div class="rml-landmark-bg" style="background-image: url('https://images.unsplash.com/photo-1542359649-31e03cd4d909?auto=format&fit=crop&w=700&q=80');"></div>

                    <div class="rml-card-inner">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="rml-title-group">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="rml-v-bar"></span>
                                    <h4 class="fw-bold text-navy mb-0">Mauritius</h4>
                                </div>
                                <div class="rml-h-underline mt-2"></div>
                            </div>
                            <span class="rml-top-flag fi fi-mu fis" title="Mauritius"></span>
                        </div>

                        <p class="rml-sample-desc mb-4">
                            Mauritius is a preferred whitelisted jurisdiction for FSC Investment Dealer (Forex/CFD) licenses and global funds[cite: 8, 9]. Our ready-made entities provide tax-efficient, globally recognized regulatory structures.
                        </p>

                        <div class="rml-ideal-block mt-auto">
                            <span class="rml-ideal-badge d-inline-block mb-2">Ideal For:</span>
                            <div class="d-flex flex-column align-items-start gap-2">
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Forex & CFD Brokerages</span>
                                <span class="rml-check-pill"><i class="bi bi-check2"></i> Global Investment Funds</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Ready-Made License CTA Section -->
<section class="rml-cta-section position-relative overflow-hidden pt-5 pb-0">

    <style>
        /* Section Base */
        .rml-cta-section {
            background-color: #ffffff;
            border-top: 1px solid rgba(15, 28, 46, 0.06);
        }

        /* Top-Right Subtle Dotted Globe Watermark (Matches Reference) */
        .rml-cta-globe-bg {
            position: absolute;
            top: -40px;
            right: -40px;
            width: 340px;
            height: 340px;
            border-radius: 50%;
            background-image: radial-gradient(rgba(163, 120, 27, 0.25) 1.5px, transparent 1.5px);
            background-size: 11px 11px;
            opacity: 0.55;
            -webkit-mask-image: radial-gradient(circle at 65% 35%, black 20%, transparent 72%);
            mask-image: radial-gradient(circle at 65% 35%, black 20%, transparent 72%);
            pointer-events: none;
            z-index: 1;
        }

        /* Left Cutout Image Alignment (Sits Flush on Bottom Edge) */
        .rml-cta-img-wrap {
            position: relative;
            margin-left: -2rem;
        }

        .rml-cta-building {
            max-height: 410px;
            width: auto;
            object-fit: contain;
            display: block;
            transition: transform 0.5s ease;
        }

        .rml-cta-section:hover .rml-cta-building {
            transform: translateY(-4px);
        }

        /* Right Typography */
        .rml-cta-title {
            font-size: clamp(2rem, 3.4vw, 2.75rem);
            line-height: 1.15;
            letter-spacing: -0.02em;
        }

        .rml-cta-bar {
            width: 58px;
            height: 4px;
            background-color: var(--rml-gold, #a3781b);
            border-radius: 2px;
        }

        .rml-cta-desc {
            font-size: 0.98rem;
            line-height: 1.68;
            color: var(--rml-slate, #4a5568);
        }

        /* Primary Solid Gold Button */
        .rml-cta-btn-solid {
            background-color: var(--rml-gold, #a3781b);
            color: #ffffff;
            border: 1.5px solid var(--rml-gold, #a3781b);
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            box-shadow: 0 6px 18px rgba(163, 120, 27, 0.22);
        }

        .rml-cta-btn-solid:hover {
            background-color: #876111;
            border-color: #876111;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(163, 120, 27, 0.3);
        }

        .rml-cta-btn-solid i {
            transition: transform 0.3s ease;
        }

        .rml-cta-btn-solid:hover i {
            transform: translateX(4px);
        }

        /* Secondary Outlined Gold Button (Matches Reference) */
        .rml-cta-btn-outline {
            background-color: #ffffff;
            color: var(--rml-gold, #a3781b);
            border: 1.5px solid rgba(163, 120, 27, 0.55);
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .rml-cta-btn-outline:hover {
            background-color: rgba(163, 120, 27, 0.08);
            border-color: var(--rml-gold, #a3781b);
            color: #876111;
            transform: translateY(-2px);
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .rml-cta-img-wrap {
                margin-left: 0;
                display: flex;
                justify-content: center;
            }
            .rml-cta-building {
                max-height: 320px;
            }
        }
    </style>
    <!-- Subtle Top-Right Dotted Globe Watermark -->
    <div class="rml-cta-globe-bg d-none d-md-block" aria-hidden="true"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-end gy-5">
            
            <!-- Left Architectural Cutout Image (Flush Bottom Alignment) -->
            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start" data-aos="fade-up" data-aos-duration="850">
                <div class="rml-cta-img-wrap">
                    <img src="<?= $img; ?>/Ready-to-Start-Your-Business-Today.png" 
                         alt="Corporate Financial Headquarters" 
                         class="img-fluid rml-cta-building">
                </div>
            </div>

            <!-- Right CTA Content Column -->
            <div class="col-lg-6 order-1 order-lg-2 pb-lg-5 mb-lg-4" data-aos="fade-left" data-aos-duration="850" data-aos-delay="100">
                <div class="rml-cta-content ps-lg-3">
                    
                    <h2 class="rml-cta-title fw-bold mb-3">
                        <span class="text-navy d-block">Ready to Acquire Your</span>
                        <span class="text-gold d-block">License Today?</span>
                    </h2>

                    <!-- Short Gold Underline Accent -->
                    <div class="rml-cta-bar mb-4"></div>

                    <p class="rml-cta-desc mb-4">
                        Skip lengthy regulatory approval procedures and launch your operations with a fully compliant ready-made license[cite: 11]. Our specialists will guide you through jurisdiction selection, ownership transfer, safeguarding bank accounts, and post-transfer compliance to ensure a seamless experience[cite: 11].
                    </p>

                    <!-- Dual Action Buttons (Solid Gold + Outlined) -->
                    <div class="d-flex flex-wrap align-items-center gap-3 pt-1">
                        <a href="#get-started" class="btn rml-cta-btn-solid d-inline-flex align-items-center gap-2 px-4 py-3 fw-semibold">
                            <span>Get Started Now</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="#contact-specialist" class="btn rml-cta-btn-outline d-inline-flex align-items-center gap-2 px-4 py-3 fw-semibold">
                            <span>Speak to a Specialist</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<?php include ROOT_PATH . '/elements/footer.php'; ?>
