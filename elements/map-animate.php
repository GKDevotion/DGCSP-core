<style>
    /* --- Canvas Interactive Map Banner Styling --- */
    .canvas-section {
        position: relative;
        width: 100%;
        background: radial-gradient(circle at 50% 30%, rgba(171, 129, 57, 0.08) 0%, transparent 70%),
                    linear-gradient(180deg, #ffffff 0%, var(--bg-light) 100%);
        overflow: hidden;
        border-bottom: 1px solid rgba(171, 129, 57, 0.1);
    }

    canvas.map-animate,
    #canvas.map-animate {
        display: block;
        width: 100%;
        height: 72vh;
        /* min-height: 420px; */
    }

    @media (max-width: 768px) {
        canvas.map-animate,
        #canvas.map-animate {
            height: 35vh;
            /* min-height: 320px; */
        }
        
        .glassmorphism-card{
            display: flex !important;
        }
    }

    /* --- Feature Section Below Canvas --- */
    
    .cards-wrapper-relative {
        position: relative;
        z-index: 2;
        margin-top: -4rem;
    }

    /* --- Glassmorphism Card Styling matching Reference Image --- */
    .glass-card {
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
        border: 1px solid rgba(255, 255, 255, 0.85);
        border-radius: 1.25rem;
        box-shadow: 
            0 10px 30px -5px rgba(0, 0, 0, 0.2),
            0 4px 12px 0 rgba(171, 129, 57, 0.5),
            inset 0 1px 1px 0 rgba(255, 255, 255, 0.6);
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        z-index: 3;
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
    }

    .glass-card:hover {
        transform: translateY(-8px);
        border-color: var(--text-dark);
        box-shadow: 
            0 20px 40px -10px rgba(171, 129, 57, 0.6),
            0 8px 20px -4px rgba(0, 0, 0, 0.1),
            inset 0 1px 2px 0 rgba(255, 255, 255, 1);
    }

    .glass-card:hover .card-icon {
        transform: scale(1.12);
        color: var(--gold-primary) !important;
    }

    .glass-card:hover .gold-divider {
        width: 3.2rem;
        background-color: var(--gold-primary);
    }

    /* Icon Container */
    .icon-container {
        height: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 1rem;
    }

    .card-icon {
        width: 5rem;
        height: auto;
        color: #1a1a1a;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    /* Gold Divider Bar */
    .gold-divider {
        height: 3px;
        width: 3rem;
        background-color: var(--gold-primary);
        border-radius: 2px;
        margin: 0.75rem auto;
        transition: width 0.35s ease, background-color 0.35s ease;
    }

    /* Text Content in lower gold tint block */
    .card-body-content {
        padding: 0.75rem 0.75rem 1.25rem 0.75rem;
    }

    .brand-font{
        line-height: 25px;
    }

    .gold-accent-banner {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 7.5rem;
        background-color: var(--gold-banner-bg);
        z-index: 1;
        box-shadow: 0 -4px 20px rgba(171, 129, 57, 0.2);
        background-image: radial-gradient(rgba(255, 255, 255, 0.2) 1.2px, transparent 1.2px);
        background-size: 16px 16px;
    }

</style>

<!-- Interactive Canvas Header Map Banner Section -->
<section class="canvas-section">
    <!-- The Canvas map animation element -->
    <canvas id="canvas" class="map-animate"></canvas>

    <div class="container-xl cards-wrapper-relative mb-4">
        <!-- Bootstrap 5 Grid for 6 Glass Cards -->
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-3 g-lg-4 align-items-stretch">
            
            <!-- Card 1: 10+ Countries -->
            <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
                <div class="glass-card text-center" onclick="handleCardClick('10+ Countries & Global Coverage')">
                    <div class="icon-container">
                        <img src="assets/images/icons/country.png" alt="Globe Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 text-dark mb-0 brand-font">
                            10+ Countries &<br>Global Coverage
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Card 2: Transparent Pricing -->
            <div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                <div class="glass-card text-center" onclick="handleCardClick('Transparent Pricing')">
                    <div class="icon-container">
                        <img src="assets/images/icons/best-price.png" alt="Best Pricing" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 text-dark mb-0 brand-font">
                            Transparent<br>Pricing
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Card 3: Fast Company Setup -->
            <div class="col" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <div class="glass-card text-center" onclick="handleCardClick('Fast Company Setup')">
                    <div class="icon-container">
                        <img src="assets/images/icons/clock.png" alt="Clock Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 text-dark mb-0 brand-font">
                            Fast Company<br>Setup
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Card 4: Secure & Confidential -->
            <div class="col" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700">
                <div class="glass-card text-center" onclick="handleCardClick('Secure & Confidential')">
                    <div class="icon-container">
                        <img src="assets/images/icons/cyber-security.png" alt="Globe Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 text-dark mb-0 brand-font">
                            Secure &<br>Confidential
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Card 5: Expert Business Support -->
            <div class="col" data-aos="fade-up" data-aos-delay="500" data-aos-duration="700">
                <div class="glass-card text-center" onclick="handleCardClick('Expert Business Support')">
                    <div class="icon-container">
                        <img src="assets/images/icons/customer-support.png" alt="Customer Support Icon" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 text-dark mb-0 brand-font">
                            Expert Business<br>Support
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Card 6: 24x7 Support Center -->
            <div class="col" data-aos="fade-up" data-aos-delay="600" data-aos-duration="700">
                <div class="glass-card text-center" onclick="handleCardClick('24 x 7 Support Center')">
                    <div class="icon-container">
                        <img src="assets/images/icons/24-hours-support.png" alt="24 Hours Support" class="card-icon">
                    </div>
                    <div class="card-body-content w-100">
                        <div class="gold-divider"></div>
                        <h3 class="fw-bold fs-6 mt-2 text-dark mb-0 brand-font">
                            24 x 7<br>Support Center
                        </h3>
                    </div>
                </div>
            </div>

        </div>

        <p class="hero-subtitle mx-auto mt-4">
            Global Business Consulting & Company Formation Services
        </p>

    </div>

    <!-- Gold Accent Banner under bottom section -->
    <div class="gold-accent-banner"></div>
</section>

<script>
    // Initialize AOS
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-out-cubic'
        });
    });

    // Toast logic
    let toastTimeout;
    function showToast(message) {
        const toast = document.getElementById('toast');
        const toastText = document.getElementById('toast-text');
        toastText.textContent = message;
        toast.classList.add('show');
        clearTimeout(toastTimeout);
        toastTimeout = setTimeout(() => {
            toast.classList.remove('show');
        }, 2500);
    }

    function handleCardClick(title) {
        showToast(`Selected: ${title}`);
    }

    function triggerAosRefresh() {
        AOS.refreshHard();
        showToast("AOS Animations Refreshed");
    }

    /* -------------------------------------------------------------
        CANVAS INTERACTIVE MAP BANNER ANIMATION LOGIC
    ------------------------------------------------------------- */
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    let width, height;
    let particles = [];
    let pulses = [];
    let activeBadges = [];

    // Configuration
    const PARTICLE_COUNT = 38;
    const CONNECT_DISTANCE = 220;
    const MOUSE_RADIUS = 160;
    const MAX_REPULSION_DIST = 260;
    const MAX_OFFSET = 30;

    // Vector SVG Generator Helper to guarantee maps render perfectly without 404 links
    function createCountrySvgDataUrl(label, color) {
        const svg = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80">
            <path d="M20,15 Q35,5 55,10 T85,25 Q95,45 75,65 T40,75 Q10,60 15,35 Z" fill="rgba(171, 129, 57, 0.12)" stroke="${color}" stroke-width="2.5" stroke-dasharray="4 2"/>
            <circle cx="50" cy="40" r="6" fill="${color}"/>
            <circle cx="50" cy="40" r="12" fill="none" stroke="${color}" stroke-width="1.5" opacity="0.6"/>
            <text x="50" y="68" font-family="Poppins, sans-serif" font-size="11" font-weight="700" fill="#2b2b2b" text-anchor="middle">${label}</text>
        </svg>`;
        return 'data:image/svg+xml;utf8,' + encodeURIComponent(svg);
    }

    // Map layout definitions using proportional width/height ratios (wRatio & hRatio)
    const countryData = [
        // { name: "Mauritius", xRatio: 0.18, yRatio: 0.35, wRatio: 0.12, hRatio: 0.32, url: "#mauritius", imgSrc: createCountrySvgDataUrl("Mauritius", "#ab8139") },
        // { name: "UAE",       xRatio: 0.36, yRatio: 0.22, wRatio: 0.12, hRatio: 0.32, url: "#uae",       imgSrc: createCountrySvgDataUrl("UAE", "#ab8139") },
        // { name: "HongKong",  xRatio: 0.76, yRatio: 0.28, wRatio: 0.12, hRatio: 0.32, url: "#hongkong",  imgSrc: createCountrySvgDataUrl("Hong Kong", "#ab8139") },
        // { name: "Singapore", xRatio: 0.32, yRatio: 0.72, wRatio: 0.13, hRatio: 0.32, url: "#singapore", imgSrc: createCountrySvgDataUrl("Singapore", "#ab8139") },
        // { name: "India",     xRatio: 0.54, yRatio: 0.52, wRatio: 0.13, hRatio: 0.35, url: "#india",     imgSrc: createCountrySvgDataUrl("India", "#ab8139") },
        // { name: "UK",        xRatio: 0.82, yRatio: 0.68, wRatio: 0.12, hRatio: 0.32, url: "#uk",        imgSrc: createCountrySvgDataUrl("UK", "#ab8139") }
        { name: "Mauritius", xRatio: 0.20, yRatio: 0.25, wRatio: 0.13, hRatio: 0.45, imgSrc: "assets/images/Jurisdictions/Mauritius.svg", url: "https://example.com/mauritius" },
        { name: "UAE",       xRatio: 0.40, yRatio: 0.18, wRatio: 0.13, hRatio: 0.32, imgSrc: "assets/images/Jurisdictions/UAE.svg",       url: "https://example.com/uae" },
        { name: "Hongkong",  xRatio: 0.72, yRatio: 0.20, wRatio: 0.13, hRatio: 0.35, imgSrc: "assets/images/Jurisdictions/HongKong.svg",  url: "<?= BASE_URL ?>/hongkong" },
        { name: "Singapore", xRatio: 0.32, yRatio: 0.75, wRatio: 0.16, hRatio: 0.33, imgSrc: "assets/images/Jurisdictions/Singapore.svg", url: "<?= BASE_URL ?>/singapore" },
        { name: "India",     xRatio: 0.55, yRatio: 0.58, wRatio: 0.16, hRatio: 0.60, imgSrc: "assets/images/Jurisdictions/India.svg",     url: "https://example.com/india" },
        { name: "UK",        xRatio: 0.78, yRatio: 0.63, wRatio: 0.12, hRatio: 0.60, imgSrc: "assets/images/Jurisdictions/UK.svg",        url: "https://example.com/uk" }
    ].map(country => ({
        ...country,
        offsetX: 0,
        offsetY: 0,
        targetOffsetX: 0,
        targetOffsetY: 0,
        scale: 1,
        targetScale: 1
    }));

    const staticNodes = [
        { x: 0.28, y: 0.18 },
        { x: 0.48, y: 0.12 },
        { x: 0.10, y: 0.55 },
        { x: 0.25, y: 0.48 },
        { x: 0.42, y: 0.82 },
        { x: 0.64, y: 0.38 },
        { x: 0.68, y: 0.72 }
    ];

    const mapConnections = [
        ['c', 0, 'n', 0], ['n', 0, 'c', 1], ['n', 0, 'n', 1],
        ['n', 1, 'c', 2], ['c', 0, 'n', 2], ['n', 2, 'c', 3],
        ['c', 1, 'n', 3], ['n', 3, 'c', 4], ['c', 3, 'n', 4],
        ['n', 4, 'c', 4], ['c', 1, 'c', 4], ['c', 4, 'n', 5],
        ['n', 5, 'c', 2], ['n', 5, 'n', 6], ['c', 2, 'n', 6],
        ['n', 6, 'c', 5], ['n', 4, 'c', 5]
    ];

    const servicesList = [
        "Global Entity Management",
        "Accounting & TAX",
        "Fund Services",
        "Private Wealth & Family Office",
        "Merger & Acquisition",
        "Corporate Advisory",
        "Banking Solutions"
    ];

    const bgColors = [
        "rgba(255, 248, 230, 0.95)",
        "rgba(240, 248, 255, 0.95)",
        "rgba(245, 243, 255, 0.95)",
        "rgba(240, 253, 244, 0.95)",
        "rgba(255, 241, 242, 0.95)",
        "rgba(254, 249, 195, 0.95)",
        "rgba(236, 253, 245, 0.95)"
    ];

    function getCountryDimensions(country) {
        return {
            w: (width * country.wRatio) * country.scale,
            h: (height * country.hRatio) * country.scale
        };
    }

    const mouse = {
        x: null,
        y: null,
        radius: MOUSE_RADIUS
    };

    window.addEventListener('mousemove', (e) => {
        const rect = canvas.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
        checkHoverAndCursor();
    });

    window.addEventListener('mouseleave', () => {
        mouse.x = null;
        mouse.y = null;
        countryData.forEach(c => c.targetScale = 1);
        document.body.style.cursor = 'default';
    });

    canvas.addEventListener('click', (e) => {
        const rect = canvas.getBoundingClientRect();
        const clickX = e.clientX - rect.left;
        const clickY = e.clientY - rect.top;

        for (let i = countryData.length - 1; i >= 0; i--) {
            const country = countryData[i];
            const pos = getPosition(country);
            const { w, h } = getCountryDimensions(country);
            
            const left = pos.x - w / 2;
            const right = pos.x + w / 2;
            const top = pos.y - h / 2;
            const bottom = pos.y + h / 2;

            if (clickX >= left && clickX <= right && clickY >= top && clickY <= bottom) {
                showToast(`Navigating to ${country.name} Jurisdiction...`);
                break;
            }
        }
    });

    function checkHoverAndCursor() {
        let isHovering = false;

        countryData.forEach(country => {
            const pos = getPosition(country);
            const { w, h } = getCountryDimensions(country);

            const left = pos.x - w / 2;
            const right = pos.x + w / 2;
            const top = pos.y - h / 2;
            const bottom = pos.y + h / 2;

            if (mouse.x >= left && mouse.x <= right && mouse.y >= top && mouse.y <= bottom) {
                country.targetScale = 1.15;
                isHovering = true;
            } else {
                country.targetScale = 1;
            }
        });

        document.body.style.cursor = isHovering ? 'pointer' : 'default';
    }

    // Preload Map SVG Images
    countryData.forEach(country => {
        country.img = new Image();
        country.img.src = country.imgSrc;
    });

    // Dynamic Moving Particles
    class Particle {
        constructor() {
            this.x = Math.random() * (width || window.innerWidth);
            this.y = Math.random() * (height || window.innerHeight);
            this.vx = (Math.random() - 0.5) * 0.8;
            this.vy = (Math.random() - 0.5) * 0.8;
            this.radius = Math.random() * 2 + 1;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;

            if (this.x < 0 || this.x > width) this.vx *= -1;
            if (this.y < 0 || this.y > height) this.vy *= -1;
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = '#ab8139';
            ctx.fill();
        }
    }

    // Pulse Ring Class
    class PulseRing {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.maxRadius = Math.random() * 22 + 14;
            this.currentRadius = 3;
            this.speed = Math.random() * 0.3 + 0.15;
        }

        update() {
            this.currentRadius += this.speed;
            if (this.currentRadius >= this.maxRadius) {
                this.currentRadius = 2;
            }
        }

        draw() {
            const alpha = 1 - (this.currentRadius / this.maxRadius);
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.currentRadius, 0, Math.PI * 2);
            ctx.strokeStyle = `rgba(171, 129, 57, ${alpha * 0.85})`;
            ctx.lineWidth = 1;
            ctx.stroke();
        }
    }

    // Floating Service Badge Class
    class ServiceBadge {
        constructor(text) {
            this.text = text;
            this.x = Math.random() * (width - 260) + 130;
            this.y = Math.random() * (height - 180) + 90;

            this.bgColor = bgColors[Math.floor(Math.random() * bgColors.length)];
            this.alpha = 0;
            this.fadeState = 'in';
            this.fadeSpeed = 0.035;

            this.floatOffset = Math.random() * Math.PI * 2;
            this.floatSpeed = 0.018;
        }

        update() {
            this.floatOffset += this.floatSpeed;

            if (this.fadeState === 'in') {
                this.alpha += this.fadeSpeed;
                if (this.alpha >= 1) {
                    this.alpha = 1;
                    this.fadeState = 'hold';
                }
            } else if (this.fadeState === 'out') {
                this.alpha -= this.fadeSpeed;
                if (this.alpha <= 0) {
                    this.alpha = 0;
                }
            }
        }

        draw() {
            if (this.alpha <= 0) return;

            const floatY = Math.sin(this.floatOffset) * 6;
            const drawY = this.y + floatY;

            ctx.save();
            ctx.globalAlpha = this.alpha;

            const fontSize = width < 768 ? 12 : 13; 
            ctx.font = `600 ${fontSize}px Poppins, sans-serif`;

            const textMetrics = ctx.measureText(this.text);
            const paddingX = 18;
            
            const badgeWidth = textMetrics.width + paddingX * 2;
            const badgeHeight = fontSize + 18;

            const rectX = this.x - badgeWidth / 2;
            const rectY = drawY - badgeHeight / 2;

            // Background Pill Badge
            ctx.beginPath();
            if (ctx.roundRect) {
                ctx.roundRect(rectX, rectY, badgeWidth, badgeHeight, badgeHeight / 2);
            } else {
                ctx.rect(rectX, rectY, badgeWidth, badgeHeight);
            }
            ctx.fillStyle = this.bgColor;
            ctx.shadowColor = 'rgba(171, 129, 57, 0.35)';
            ctx.shadowBlur = 12;
            ctx.shadowOffsetY = 4;
            ctx.fill();

            // Golden Accent Border
            ctx.strokeStyle = 'rgba(171, 129, 57, 0.7)';
            ctx.lineWidth = 1.2;
            ctx.stroke();

            // Text Render
            ctx.shadowColor = 'transparent';
            ctx.fillStyle = '#1a1a1a';
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            ctx.fillText(this.text, this.x, drawY);

            ctx.restore();
        }
    }

    let currentServiceIndex = 0;

    function triggerSequentialBadges() {
        activeBadges.forEach(badge => badge.fadeState = 'out');

        setTimeout(() => {
            activeBadges = activeBadges.filter(b => b.alpha > 0);
            const serviceText = servicesList[currentServiceIndex];
            activeBadges.push(new ServiceBadge(serviceText));
            currentServiceIndex = (currentServiceIndex + 1) % servicesList.length;
        }, 400);

        setTimeout(triggerSequentialBadges, 2800);
    }

    function resize() {
        const container = canvas.parentElement;
        width = canvas.width = container.clientWidth;
        height = canvas.height = container.clientHeight;
        init();
    }

    window.addEventListener('resize', resize);

    function getPosition(item) {
        return {
            x: (item.xRatio ? width * item.xRatio : width * item.x) + (item.offsetX || 0),
            y: (item.yRatio ? height * item.yRatio : height * item.y) + (item.offsetY || 0)
        };
    }

    function init() {
        particles = [];
        pulses = [];

        for (let i = 0; i < PARTICLE_COUNT; i++) {
            particles.push(new Particle());
        }

        staticNodes.forEach(node => {
            const pos = getPosition(node);
            pulses.push(new PulseRing(pos.x, pos.y));
        });
    }

    function updateOppositeRepULSION() {
        countryData.forEach(country => {
            const baseCenterX = country.xRatio * width;
            const baseCenterY = country.yRatio * height;

            if (mouse.x !== null && mouse.y !== null) {
                const dx = baseCenterX - mouse.x;
                const dy = baseCenterY - mouse.y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < MAX_REPULSION_DIST && dist > 0) {
                    const normX = dx / dist;
                    const normY = dy / dist;
                    const strength = (1 - dist / MAX_REPULSION_DIST);
                    const pushAmount = strength * MAX_OFFSET;

                    country.targetOffsetX = normX * pushAmount;
                    country.targetOffsetY = normY * pushAmount;
                } else {
                    country.targetOffsetX = 0;
                    country.targetOffsetY = 0;
                }
            } else {
                country.targetOffsetX = 0;
                country.targetOffsetY = 0;
            }

            country.offsetX += (country.targetOffsetX - country.offsetX) * 0.05;
            country.offsetY += (country.targetOffsetY - country.offsetY) * 0.05;
            country.scale += (country.targetScale - country.scale) * 0.08;
        });
    }

    function drawMapConnections() {
        ctx.strokeStyle = 'rgba(210, 190, 150, 0.45)';
        ctx.lineWidth = 1;

        mapConnections.forEach(([t1, i1, t2, i2]) => {
            const p1 = getPosition(t1 === 'c' ? countryData[i1] : staticNodes[i1]);
            const p2 = getPosition(t2 === 'c' ? countryData[i2] : staticNodes[i2]);

            ctx.beginPath();
            ctx.moveTo(p1.x, p1.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.stroke();
        });
    }

    function connectDynamicParticles() {
        for (let a = 0; a < particles.length; a++) {
            for (let b = a + 1; b < particles.length; b++) {
                let dx = particles[a].x - particles[b].x;
                let dy = particles[a].y - particles[b].y;
                let dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < CONNECT_DISTANCE) {
                    let opacity = (1 - (dist / CONNECT_DISTANCE)) * 0.4;
                    ctx.strokeStyle = `rgba(171, 129, 57, ${opacity})`;
                    ctx.lineWidth = 0.8;
                    ctx.beginPath();
                    ctx.moveTo(particles[a].x, particles[a].y);
                    ctx.lineTo(particles[b].x, particles[b].y);
                    ctx.stroke();
                }
            }

            if (mouse.x !== null && mouse.y !== null) {
                let mdx = particles[a].x - mouse.x;
                let mdy = particles[a].y - mouse.y;
                let mdist = Math.sqrt(mdx * mdx + mdy * mdy);

                if (mdist < mouse.radius) {
                    let mOpacity = (1 - (mdist / mouse.radius)) * 0.7;
                    ctx.strokeStyle = `rgba(171, 129, 57, ${mOpacity})`;
                    ctx.lineWidth = 1.1;
                    ctx.beginPath();
                    ctx.moveTo(particles[a].x, particles[a].y);
                    ctx.lineTo(mouse.x, mouse.y);
                    ctx.stroke();
                }
            }
        }
    }

    function drawStaticNodes() {
        staticNodes.forEach(node => {
            const pos = getPosition(node);
            ctx.beginPath();
            ctx.arc(pos.x, pos.y, 3.5, 0, Math.PI * 2);
            ctx.fillStyle = '#ab8139';
            ctx.fill();
        });
    }

    function drawCountries() {
        updateOppositeRepULSION();

        countryData.forEach(country => {
            const pos = getPosition(country);
            const { w, h } = getCountryDimensions(country);

            const drawX = pos.x - w / 2;
            const drawY = pos.y - h / 2;

            if (country.img.complete) {
                ctx.drawImage(country.img, drawX, drawY, w, h);
            }
        });
    }

    function animate() {
        ctx.clearRect(0, 0, width, height);

        // Layer 1: Connections
        drawMapConnections();

        // Layer 2: Pulse rings
        pulses.forEach(pulse => {
            pulse.update();
            pulse.draw();
        });

        // Layer 3: Static Nodes
        drawStaticNodes();

        // Layer 4: Particles Mesh
        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        connectDynamicParticles();

        // Layer 5: Country SVGs
        drawCountries();

        // Layer 6: Badges ALWAYS ON TOP
        activeBadges.forEach(badge => {
            badge.update();
            badge.draw();
        });

        requestAnimationFrame(animate);
    }

    // Initialize Canvas on load
    window.onload = function() {
        resize();
        triggerSequentialBadges();
        animate();
    };
</script>