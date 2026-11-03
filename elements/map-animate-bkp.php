<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/map-animate.css?v=<?= FILE_VERSISON ?>">

<style>
    .gdb-constellation-canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        z-index: 0;
        pointer-events: none;
    }

    /* Center wrapper full screen */
    .map-centered-container {
        align-items: center;
        text-align: center;
        position: absolute;
        width: 100%;
        margin-top: 1.5rem;
        z-index: 4;
        pointer-events: none;
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
        transform-box: fill-box;
        transform-origin: center;
        animation: pulseRing 3s ease-out infinite;
    }

    /* transform-based (works in Safari too, cheaper than animating r) */
    @keyframes pulseRing {
        0%   { transform: scale(0.11); opacity: 1; }
        100% { transform: scale(1);    opacity: 0; }
    }

    @media (prefers-reduced-motion: reduce) {
        .mesh-line, .mesh-dot-ring { animation: none; }
        .mesh-dot-ring { opacity: 0; }
        .country-card, .service-badge-item, .moving-dot { transition: none; }
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
    .pos-mauritius { top: 20%; left: 17%; width: 11.5%; }
    .pos-uae       { top: 16%; left: 40%; width: 11.5%; }
    .pos-hongkong  { top: 15%; left: 70%; width: 15.5%; }
    .pos-singapore { top: 44%; left: 30%; width: 15.5%; }
    .pos-india     { top: 42%; left: 55%; width: 15.5%; }
    .pos-uk        { top: 38%; left: 81%; width: 11.5%; }

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

        <!-- Mesh is generated by map-animate.js from the real country-card positions -->
        <svg class="map-mesh-svg" aria-hidden="true"></svg>

        <!-- Interactive Map Items -->
        <div class="jurisdiction-layer">
            <a href="<?= getJurisditionLink( 'mauritius' ) ?>" class="country-card pos-mauritius">
                <img src="<?=  BASE_URL.BASE_FOLDER.'/assets/images/Jurisdictions/Mauritius.png' ?>" alt="Mauritius">
                <!-- <span class="country-label">Mauritius</span> -->
            </a>

            <a href="<?= getJurisditionLink( 'uae' ) ?>" class="country-card pos-uae">
                <img src="<?=  BASE_URL.BASE_FOLDER.'/assets/images/Jurisdictions/UAE.png' ?>" alt="UAE">
                <!-- <span class="country-label">UAE</span> -->
            </a>

            <a href="<?= getJurisditionLink( 'hongkong' ) ?>" class="country-card pos-hongkong">
                <img src="<?=  BASE_URL.BASE_FOLDER.'/assets/images/Jurisdictions/HongKong.png' ?>" alt="Hong Kong">
                <!-- <span class="country-label">Hong Kong</span> -->
            </a>

            <a href="<?= getJurisditionLink( 'singapore' ) ?>" class="country-card pos-singapore">
                <img src="<?=  BASE_URL.BASE_FOLDER.'/assets/images/Jurisdictions/Singapore.png' ?>" alt="Singapore">
                <!-- <span class="country-label">Singapore</span> -->
            </a>

            <a href="<?= getJurisditionLink( 'india' ) ?>" class="country-card pos-india">
                <img src="<?=  BASE_URL.BASE_FOLDER.'/assets/images/Jurisdictions/India.png' ?>" alt="India">
                <!-- <span class="country-label">India</span> -->
            </a>

            <a href="<?= getJurisditionLink( 'uk' ) ?>" class="country-card pos-uk">
                <img src="<?=  BASE_URL.BASE_FOLDER.'/assets/images/Jurisdictions/UK.png' ?>" alt="UK">
                <!-- <span class="country-label">UK</span> -->
            </a>
        </div>

        <!-- Floating Badge Container -->
        <div class="service-badge-layer" id="badgeContainer"></div>

    </div>

    <style>
        /* Country Selector Container */
        .country-selector-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 0 25px 0;
            position: relative;
            z-index: 5;
        }

        .country-select-dropdown {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 15px;
            font-weight: 600;
            color: #333333;
            background-color: #ffffff;
            border: 1.5px solid #ab8139;
            border-radius: 30px;
            outline: none;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(171, 129, 57, 0.15);
            transition: all 0.3s ease;
            text-align-last: center;
        }

        .country-select-dropdown:hover, 
        .country-select-dropdown:focus {
            border-color: #7d5e27;
            box-shadow: 0 6px 18px rgba(171, 129, 57, 0.25);
        }
    </style>

    <!-- Country Select Dropdown -->
    <div class="country-selector-wrapper">
        <select class="country-select-dropdown" id="countryDropdown" onchange="navigateToJurisdiction(this.value)">
            <option value="" disabled selected>-- Select Country / Jurisdiction --</option>
            <option value="<?= BASE_URL.BASE_FOLDER ?>/mauritius-company-registration">Mauritius</option>
            <option value="<?= BASE_URL.BASE_FOLDER ?>/uae-company-registration">UAE</option>
            <option value="<?= BASE_URL.BASE_FOLDER ?>/hongkong-company-registration">Hong Kong</option>
            <option value="<?= BASE_URL.BASE_FOLDER ?>/singapore-company-registration">Singapore</option>
            <option value="<?= BASE_URL.BASE_FOLDER ?>/india-company-registration">India</option>
            <option value="<?= BASE_URL.BASE_FOLDER ?>/uk-company-registration">United Kingdom (UK)</option>
        </select>
    </div>

    <script>
        function navigateToJurisdiction(url) {
            if (url) {
                window.location.href = url;
            }
        }
    </script>

    <style>
        /* Feature cards styled to match the supplied reference */
        .gdb-feature-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px 20px;
            padding-top: 12px;
        }

        .gdb-feature-card {
            min-height: 104px;
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 16px 22px;
            border: 1px solid #b38f51;
            border-radius: 19px;
            background: rgba(255, 255, 255, 0.6);
            box-shadow: 0 8px 20px rgba(45, 35, 18, 0.08);
            text-align: left;
            transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
        }

        .gdb-feature-card:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.65);
            box-shadow: 0 12px 26px rgba(45, 35, 18, 0.13);
        }

        .gdb-feature-icon {
            flex: 0 0 72px;
            width: 72px;
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #eee7d9;
        }

        .gdb-feature-icon img {
            display: block;
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .gdb-feature-divider {
            align-self: center;
            flex: 0 0 1px;
            height: 54px;
            background: #c5a66c;
        }

        .gdb-feature-title {
            margin: 0;
            color: #111;
            font-family: inherit;
            font-size: 16px;
            line-height: 1.65;
            font-weight: 700;
        }

        @media (max-width: 991.98px) {
            .gdb-feature-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 16px;
            }
            .gdb-feature-card {
                padding: 15px 18px;
                gap: 15px;
            }
        }

        @media (max-width: 575.98px) {
            .gdb-feature-grid {
                grid-template-columns: 1fr;
                gap: 12px;
                padding-top: 8px;
            }
            .gdb-feature-card {
                min-height: 94px;
                border-radius: 15px;
                padding: 13px 16px;
                gap: 15px;
            }
            .gdb-feature-icon {
                flex-basis: 62px;
                width: 62px;
                height: 62px;
            }
            .gdb-feature-icon img {
                width: 42px;
                height: 42px;
            }
            .gdb-feature-divider {
                height: 46px;
            }
            .gdb-feature-title {
                font-size: 15px;
                line-height: 1.5;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .gdb-feature-card { transition: none; }
        }
    </style>

    <div class="container-xl cards-wrapper-relative mb-4">
        <div class="gdb-feature-grid">
            <div class="gdb-feature-card" >
                <div class="gdb-feature-icon">
                    <img src="<?= BASE_URL.BASE_FOLDER.'/assets/images/gif/emerging-industries.gif' ?>" alt="Global coverage icon" loading="lazy">
                </div>
                <span class="gdb-feature-divider" aria-hidden="true"></span>
                <div class="gdb-feature-content">
                    <h3 class="gdb-feature-title">10+ Countries &amp;<br>Global Coverage</h3>
                </div>
            </div>

            <div class="gdb-feature-card" >
                <div class="gdb-feature-icon">
                    <img src="<?= BASE_URL.BASE_FOLDER.'/assets/images/gif/transparent-pricing.gif' ?>" alt="Transparent pricing icon" loading="lazy">
                </div>
                <span class="gdb-feature-divider" aria-hidden="true"></span>
                <div class="gdb-feature-content">
                    <h3 class="gdb-feature-title">Transparent<br>Pricing</h3>
                </div>
            </div>

            <div class="gdb-feature-card" >
                <div class="gdb-feature-icon">
                    <img src="<?= BASE_URL.BASE_FOLDER.'/assets/images/gif/clock-icon.gif' ?>" alt="Fast company setup icon" loading="lazy">
                </div>
                <span class="gdb-feature-divider" aria-hidden="true"></span>
                <div class="gdb-feature-content">
                    <h3 class="gdb-feature-title">Fast Company<br>Setup</h3>
                </div>
            </div>

            <div class="gdb-feature-card" data-aos="fade-up" data-aos-delay="500">
                <div class="gdb-feature-icon">
                    <img src="<?= BASE_URL.BASE_FOLDER.'/assets/images/gif/secure-confidential.gif' ?>" alt="Security and confidentiality icon" loading="lazy">
                </div>
                <span class="gdb-feature-divider" aria-hidden="true"></span>
                <div class="gdb-feature-content">
                    <h3 class="gdb-feature-title">Secure &amp;<br>Confidential</h3>
                </div>
            </div>

            <div class="gdb-feature-card" data-aos="fade-up" data-aos-delay="600">
                <div class="gdb-feature-icon">
                    <img src="<?= BASE_URL.BASE_FOLDER.'/assets/images/gif/expert-support.gif' ?>" alt="Expert business support icon" loading="lazy">
                </div>
                <span class="gdb-feature-divider" aria-hidden="true"></span>
                <div class="gdb-feature-content">
                    <h3 class="gdb-feature-title">Expert Business<br>Support</h3>
                </div>
            </div>

            <div class="gdb-feature-card" data-aos="fade-up" data-aos-delay="700">
                <div class="gdb-feature-icon">
                    <img src="<?= BASE_URL.BASE_FOLDER.'/assets/images/gif/24-7-support.gif' ?>" alt="24/7 support icon" loading="lazy">
                </div>
                <span class="gdb-feature-divider" aria-hidden="true"></span>
                <div class="gdb-feature-content">
                    <h3 class="gdb-feature-title">24 x 7<br>Support Center</h3>
                </div>
            </div>
        </div>

        <p class="hero-subtitle mx-auto mt-3">
            Global Business Consulting &amp; Company Formation Services
        </p>
    </div>

    <div class="gold-accent-banner" id="goldBanner"></div>
</section>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/map-animate.js?v=<?= FILE_VERSISON ?>"></script>