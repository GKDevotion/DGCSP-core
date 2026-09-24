<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/map-animate.css?v=<?= FILE_VERSISON ?>">

<style>
    .gdb-constellation-canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
    }

    /* Center wrapper full screen */
    .map-centered-container {
        align-items: center;
        text-align: center;
        position: absolute;
        width: 100%;
        margin-top: 1.5rem;
    }

    /* Heading style */
    .map-title {
        color: #333333;
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0;
    }

    .map-banner-wrapper {
        width: 100%;
        aspect-ratio: auto;
        border-radius: 16px;
        overflow: hidden;
        height: 75vh;
        
    }

    /* -------------------------------------------------------------
        RESPONSIVE ANIMATED SVG LINE MESH
    ------------------------------------------------------------- */
    .map-mesh-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .mesh-line {
        stroke: rgba(171, 129, 57, 0.25);
        stroke-width: 1.5;
        vector-effect: non-scaling-stroke;
        stroke-dasharray: 6 6;
        animation: moveGridLines 25s linear infinite;
    }

    @keyframes moveGridLines {
        from { stroke-dashoffset: 0; }
        to   { stroke-dashoffset: 120; }
    }

    .mesh-dot-core {
        fill: #ab8139;
    }

    .mesh-dot-ring {
        fill: none;
        stroke: rgba(171, 129, 57, 0.6);
        stroke-width: 1;
        vector-effect: non-scaling-stroke;
        transform-origin: center;
        animation: pulseRing 3s ease-out infinite;
    }

    @keyframes pulseRing {
        0%   { r: 2px; opacity: 1; }
        100% { r: 18px; opacity: 0; }
    }

    /* -------------------------------------------------------------
        INTERACTIVE JURISDICTION NODES
    ------------------------------------------------------------- */
    .jurisdiction-layer {
        position: absolute;
        inset: 0;
        z-index: 2;
    }

    .country-card {
        position: absolute;
        transform: translate(-50%, -50%);
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .country-card img {
        width: 100%;
        height: auto;
        display: block;
        transition: filter 0.3s ease;
    }

    .country-card .country-label {
        margin-top: 6px;
        font-size: 12px;
        font-weight: 500;
        color: #d1d5db;
        background: rgba(15, 23, 42, 0.75);
        padding: 3px 10px;
        border-radius: 12px;
        border: 1px solid rgba(171, 129, 57, 0.3);
        backdrop-filter: blur(4px);
        white-space: nowrap;
        transition: all 0.3s ease;
    }

    /* Hover States */
    .country-card:hover {
        transform: translate(-50%, -50%) scale(1.15);
        z-index: 10;
    }

    .country-card:hover img {
        filter: drop-shadow(0 0 15px rgba(171, 129, 57, 0.7));
    }

    .country-card:hover .country-label {
        color: #ffffff;
        background: rgba(171, 129, 57, 0.85);
        border-color: #ffffff;
        box-shadow: 0 0 10px rgba(171, 129, 57, 0.5);
    }

    /* Absolute Percentage Positioning (Desktop) */
    .pos-mauritius { top: 20%; left: 17%; width: 12%; }
    .pos-uae       { top: 16%; left: 40%; width: 12%; }
    .pos-hongkong  { top: 15%; left: 70%; width: 16%; }
    .pos-singapore { top: 44%; left: 30%; width: 16%; }
    .pos-india     { top: 42%; left: 55%; width: 16%; }
    .pos-uk        { top: 38%; left: 81%; width: 12%; }

    /* -------------------------------------------------------------
        RANDOMIZED FLOATING SERVICE BADGES
    ------------------------------------------------------------- */
    .service-badge-layer {
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 3;
    }

    .service-badge-item {
        position: absolute;
        padding: 8px 18px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 500;
        color: #1a1a1a;
        border: 1px solid rgba(171, 129, 57, 0.7);
        box-shadow: 0 6px 18px rgba(171, 129, 57, 0.35);
        white-space: nowrap;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .service-badge-item.active {
        opacity: 1;
        transform: translate(-50%, -50%) translateY(-5px);
    }

    /* -------------------------------------------------------------
        MOBILE RESPONSIVE FALLBACK
    ------------------------------------------------------------- */
    @media (max-width: 768px) {
        .map-banner-wrapper {
            aspect-ratio: auto;
            height: auto;
            padding: 24px 16px;
        }

        .map-mesh-svg, .service-badge-layer {
            display: none;
        }

        .jurisdiction-layer {
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .country-card {
            position: relative;
            top: auto !important;
            left: auto !important;
            width: 100% !important;
            transform: none !important;
            padding: 16px;
            border-radius: 12px;
            
        }

        .country-card:hover {
            transform: translateY(-4px) !important;
        }

        .country-card img {
            margin: 0 auto;
        }

        .country-card .country-label {
            margin-top: 10px;
            font-size: 13px;
        }
    }
</style>

<section class="canvas-section">
    <canvas class="gdb-constellation-canvas"></canvas>
    <div class="map-centered-container">
        <h1 class="map-title"  data-aos="fade-right" data-aos-delay="400">Where can we assist you to set up business?</h1>
    </div>
    
    <div class="map-banner-wrapper">

        <!-- Responsive Vector Mesh -->
        <svg class="map-mesh-svg" viewBox="0 0 1000 562.5" preserveAspectRatio="xMidYMid meet">
            <line x1="200" y1="140" x2="430" y2="112" class="mesh-line" />
            <line x1="430" y1="112" x2="740" y2="112" class="mesh-line" />
            <line x1="200" y1="140" x2="320" y2="382" class="mesh-line" />
            <line x1="320" y1="382" x2="550" y2="337" class="mesh-line" />
            <line x1="550" y1="337" x2="850" y2="337" class="mesh-line" />
            <line x1="430" y1="112" x2="550" y2="337" class="mesh-line" />

            <g transform="translate(200, 140)"><circle class="mesh-dot-core" r="3"/><circle class="mesh-dot-ring" /></g>
            <g transform="translate(430, 112)"><circle class="mesh-dot-core" r="3"/><circle class="mesh-dot-ring" /></g>
            <g transform="translate(740, 112)"><circle class="mesh-dot-core" r="3"/><circle class="mesh-dot-ring" /></g>
            <g transform="translate(320, 382)"><circle class="mesh-dot-core" r="3"/><circle class="mesh-dot-ring" /></g>
            <g transform="translate(550, 337)"><circle class="mesh-dot-core" r="3"/><circle class="mesh-dot-ring" /></g>
            <g transform="translate(850, 337)"><circle class="mesh-dot-core" r="3"/><circle class="mesh-dot-ring" /></g>
        </svg>

        <!-- Interactive Map Items -->
        <div class="jurisdiction-layer">
            <a href="mauritius" class="country-card pos-mauritius">
                <img src="<?=  BASE_URL.'/assets/images/Jurisdictions/Mauritius.png' ?>" alt="Mauritius">
                <!-- <span class="country-label">Mauritius</span> -->
            </a>

            <a href="uae" class="country-card pos-uae">
                <img src="<?=  BASE_URL.'/assets/images/Jurisdictions/UAE.png' ?>" alt="UAE">
                <!-- <span class="country-label">UAE</span> -->
            </a>

            <a href="hongkong" class="country-card pos-hongkong">
                <img src="<?=  BASE_URL.'/assets/images/Jurisdictions/HongKong.png' ?>" alt="Hong Kong">
                <!-- <span class="country-label">Hong Kong</span> -->
            </a>

            <a href="singapore" class="country-card pos-singapore">
                <img src="<?=  BASE_URL.'/assets/images/Jurisdictions/Singapore.png' ?>" alt="Singapore">
                <!-- <span class="country-label">Singapore</span> -->
            </a>

            <a href="india" class="country-card pos-india">
                <img src="<?=  BASE_URL.'/assets/images/Jurisdictions/India.png' ?>" alt="India">
                <!-- <span class="country-label">India</span> -->
            </a>

            <a href="uk" class="country-card pos-uk">
                <img src="<?=  BASE_URL.'/assets/images/Jurisdictions/UK.png' ?>" alt="UK">
                <!-- <span class="country-label">UK</span> -->
            </a>
        </div>

        <!-- Floating Badge Container -->
        <div class="service-badge-layer" id="badgeContainer"></div>

    </div>

    <div class="container-xl cards-wrapper-relative mb-4">
        
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-3 g-lg-4 align-items-stretch pb-0">
            
            <div class="col mt-0">
                <div class="glass-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-container">
                        <img src="<?=  BASE_URL.'/assets/images/gif/emerging-industries.gif' ?>" alt="Globe Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 mb-2 text-dark mb-0 brand-font">10+ Countries &<br>Global Coverage</h3>
                    </div>
                </div>
            </div>

            <div class="col mt-0">
                <div class="glass-card text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-container">
                        <img src="<?=  BASE_URL.'/assets/images/gif/transparent-pricing.gif' ?>" alt="Pricing Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 mb-2 text-dark mb-0 brand-font">Transparent<br>Pricing</h3>
                    </div>
                </div>
            </div>

            <div class="col mt-0">
                <div class="glass-card text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-container">
                        <img src="<?=  BASE_URL.'/assets/images/gif/clock-icon.gif' ?>" alt="Clock Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 mb-2 text-dark mb-0 brand-font">Fast Company<br>Setup</h3>
                    </div>
                </div>
            </div>

            <div class="col mt-0">
                <div class="glass-card text-center" data-aos="fade-up" data-aos-delay="800">
                    <div class="icon-container">
                        <img src="<?=  BASE_URL.'/assets/images/gif/secure-confidential.gif' ?>" alt="Security Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 mb-2 text-dark mb-0 brand-font">Secure &<br>Confidential</h3>
                    </div>
                </div>
            </div>

            <div class="col mt-0">
                <div class="glass-card text-center" data-aos="fade-up" data-aos-delay="1000">
                    <div class="icon-container">
                        <img src="<?=  BASE_URL.'/assets/images/gif/expert-support.gif' ?>" alt="Support Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 mb-2 text-dark mb-0 brand-font">Expert Business<br>Support</h3>
                    </div>
                </div>
            </div>

            <div class="col mt-0">
                <div class="glass-card text-center" data-aos="fade-up" data-aos-delay="1200">
                    <div class="icon-container">
                        <img src="<?=  BASE_URL.'/assets/images/gif/24-7-support.gif' ?>" alt="24/7 Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 mb-2 text-dark mb-0 brand-font">24 x 7<br>Support Center</h3>
                    </div>
                </div>
            </div>

        </div>

        <p class="hero-subtitle mx-auto mt-2">
            Global Business Consulting & Company Formation Services
        </p>
    </div>

    <div class="gold-accent-banner" id="goldBanner"></div>
</section>

<script src="<?= BASE_URL ?>/assets/js/map-animate.js?v=<?= FILE_VERSISON ?>"></script>