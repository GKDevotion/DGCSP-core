    <style>
        /* Fixed Selector Typo & Full Screen Canvas Styling */
        canvas.map-animate,
        #canvas.map-animate {
            display: block;
            width: 100%;
            height: 75vh;
        }
    </style>
    <canvas id="canvas" class="map-animate"></canvas>

    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        let width, height;
        let particles = [];
        let pulses = [];
        let activeBadges = [];

        // Configuration
        const PARTICLE_COUNT = 40;
        const CONNECT_DISTANCE = 250;
        const MOUSE_RADIUS = 30;
        const MAX_REPULSION_DIST = 300;
        const MAX_OFFSET = 35;

        // Map layout definitions with target URLs and Smooth Hover Scale state
        const countryData = [
            { name: "Mauritius", xRatio: 0.15, yRatio: 0.25, width: 185, height: 260, imgSrc: "assets/images/Jurisdictions/Mauritius.png", url: "https://example.com/mauritius" },
            { name: "UAE",       xRatio: 0.40, yRatio: 0.18, width: 190, height: 180, imgSrc: "assets/images/Jurisdictions/UAE.png",       url: "https://example.com/uae" },
            { name: "Hongkong",  xRatio: 0.80, yRatio: 0.20, width: 230, height: 190, imgSrc: "assets/images/Jurisdictions/HongKong.png",  url: "<?= BASE_URL ?>/hongkong" },
            { name: "Singapore", xRatio: 0.25, yRatio: 0.75, width: 280, height: 200, imgSrc: "assets/images/Jurisdictions/Singapore.png", url: "<?= BASE_URL ?>/singapore" },
            { name: "India",     xRatio: 0.58, yRatio: 0.58, width: 300, height: 400, imgSrc: "assets/images/Jurisdictions/India.png",     url: "https://example.com/india" },
            { name: "UK",        xRatio: 0.85, yRatio: 0.65, width: 170, height: 350, imgSrc: "assets/images/Jurisdictions/UK.png",        url: "https://example.com/uk" }
        ].map(country => ({
            ...country,
            offsetX: 0,
            offsetY: 0,
            targetOffsetX: 0,
            targetOffsetY: 0,
            scale: 1,             // Current scale factor
            targetScale: 1       // Target scale factor (1 normal, 1.15 zoomed)
        }));

        const staticNodes = [
            { x: 0.32, y: 0.13 },
            { x: 0.54, y: 0.06 },
            { x: 0.12, y: 0.61 },
            { x: 0.31, y: 0.42 },
            { x: 0.40, y: 0.88 },
            { x: 0.62, y: 0.42 },
            { x: 0.68, y: 0.66 }
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

        // Mouse Tracker
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

        // Click Handler for Country Redirection
        canvas.addEventListener('click', (e) => {
            const rect = canvas.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const clickY = e.clientY - rect.top;

            for (let i = countryData.length - 1; i >= 0; i--) {
                const country = countryData[i];
                const pos = getPosition(country);
                const currentW = country.width * country.scale;
                const currentH = country.height * country.scale;
                
                const left = pos.x - currentW / 2;
                const right = pos.x + currentW / 2;
                const top = pos.y - currentH / 2;
                const bottom = pos.y + currentH / 2;

                if (clickX >= left && clickX <= right && clickY >= top && clickY <= bottom) {
                    if (country.url) {
                        window.location.href = country.url;
                    }
                    break;
                }
            }
        });

        // Check Cursor Hover & Trigger Zoom
        function checkHoverAndCursor() {
            let isHovering = false;

            countryData.forEach(country => {
                const pos = getPosition(country);
                const currentW = country.width * country.scale;
                const currentH = country.height * country.scale;

                const left = pos.x - currentW / 2;
                const right = pos.x + currentW / 2;
                const top = pos.y - currentH / 2;
                const bottom = pos.y + currentH / 2;

                if (mouse.x >= left && mouse.x <= right && mouse.y >= top && mouse.y <= bottom) {
                    country.targetScale = 1.15; // Zoom scale factor on hover
                    isHovering = true;
                } else {
                    country.targetScale = 1;
                }
            });

            document.body.style.cursor = isHovering ? 'pointer' : 'default';
        }

        // Preload Map Images
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
                ctx.fillStyle = '#b58a2d';
                ctx.fill();
            }
        }

        // Pulse Ring Class
        class PulseRing {
            constructor(x, y) {
                this.x = x;
                this.y = y;
                this.maxRadius = Math.random() * 25 + 15;
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
                ctx.strokeStyle = `rgba(184, 134, 11, ${alpha * 0.8})`;
                ctx.lineWidth = 1;
                ctx.stroke();
            }
        }

        // Floating Service Badge Class
        class ServiceBadge {
            constructor(text) {
                this.text = text;
                this.x = Math.random() * (width - 240) + 120;
                this.y = Math.random() * (height - 180) + 90;

                this.bgColor = bgColors[Math.floor(Math.random() * bgColors.length)];
                this.alpha = 0;
                this.fadeState = 'in';
                this.fadeSpeed = 0.03;

                this.floatOffset = Math.random() * Math.PI * 2;
                this.floatSpeed = 0.015;
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

                const floatY = Math.sin(this.floatOffset) * 5;
                const drawY = this.y + floatY;

                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.font = '600 12px system-ui, -apple-system, sans-serif';

                const textMetrics = ctx.measureText(this.text);
                const paddingX = 14;
                const badgeWidth = textMetrics.width + paddingX * 2;
                const badgeHeight = 26;

                const rectX = this.x - badgeWidth / 2;
                const rectY = drawY - badgeHeight / 2;

                // Background Pill Badge
                ctx.beginPath();
                ctx.roundRect(rectX, rectY, badgeWidth, badgeHeight, 13);
                ctx.fillStyle = this.bgColor;
                ctx.shadowColor = 'rgba(184, 134, 11, 0.35)';
                ctx.shadowBlur = 10;
                ctx.shadowOffsetY = 3;
                ctx.fill();

                // Golden Accent Border
                ctx.strokeStyle = 'rgba(184, 134, 11, 0.6)';
                ctx.lineWidth = 1;
                ctx.stroke();

                // Text Formatting
                ctx.shadowColor = 'transparent';
                ctx.fillStyle = '#1a1a1a';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(this.text, this.x, drawY);

                ctx.restore();
            }
        }

        // Recursive Random Badge Trigger (every 2-3 seconds)
        function triggerRandomBadges() {
            activeBadges.forEach(badge => badge.fadeState = 'out');

            const countToSpawn = Math.floor(Math.random() * 8) + 2;
            const shuffledServices = [...servicesList].sort(() => 0.3 - Math.random());

            setTimeout(() => {
                activeBadges = activeBadges.filter(b => b.alpha > 0);
                for (let i = 0; i < countToSpawn; i++) {
                    activeBadges.push(new ServiceBadge(shuffledServices[i]));
                }
            }, 800);

            const nextInterval = Math.floor(Math.random() * 1000) + 2000;
            setTimeout(triggerRandomBadges, nextInterval);
        }

        function resize() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight - 125;
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

        // Opposite Direction Motion Logic & Scale Easing
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

                // Smooth linear interpolation for offsets & hover zoom scale
                country.offsetX += (country.targetOffsetX - country.offsetX) * 0.01;
                country.offsetY += (country.targetOffsetY - country.offsetY) * 0.01;
                country.scale += (country.targetScale - country.scale) * 0.01;
            });
        }

        // Draw Map Network Lines
        function drawMapConnections() {
            ctx.strokeStyle = 'rgba(210, 210, 210, 0.8)';
            ctx.lineWidth = 0.8;

            mapConnections.forEach(([t1, i1, t2, i2]) => {
                const p1 = getPosition(t1 === 'c' ? countryData[i1] : staticNodes[i1]);
                const p2 = getPosition(t2 === 'c' ? countryData[i2] : staticNodes[i2]);

                ctx.beginPath();
                ctx.moveTo(p1.x, p1.y);
                ctx.lineTo(p2.x, p2.y);
                ctx.stroke();
            });
        }

        // Connect Moving Particles to each other & Mouse
        function connectDynamicParticles() {
            for (let a = 0; a < particles.length; a++) {
                for (let b = a + 1; b < particles.length; b++) {
                    let dx = particles[a].x - particles[b].x;
                    let dy = particles[a].y - particles[b].y;
                    let dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < CONNECT_DISTANCE) {
                        let opacity = (1 - (dist / CONNECT_DISTANCE)) * 0.8;
                        ctx.strokeStyle = `rgba(150, 150, 150, ${opacity})`;
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
                        let mOpacity = (1 - (mdist / mouse.radius)) * 0.8;
                        ctx.strokeStyle = `rgba(184, 134, 11, ${mOpacity})`;
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(particles[a].x, particles[a].y);
                        ctx.lineTo(mouse.x, mouse.y);
                        ctx.stroke();
                    }
                }
            }
        }

        // Draw Map Node Dots
        function drawStaticNodes() {
            staticNodes.forEach(node => {
                const pos = getPosition(node);
                ctx.beginPath();
                ctx.arc(pos.x, pos.y, 3, 0, Math.PI * 2);
                ctx.fillStyle = '#a0a0a0';
                ctx.fill();
            });
        }

        // Draw Country Images with Smooth Zooming
        function drawCountries() {
            updateOppositeRepULSION();

            countryData.forEach(country => {
                const pos = getPosition(country);
                const currentWidth = country.width * country.scale;
                const currentHeight = country.height * country.scale;

                const drawX = pos.x - currentWidth / 2;
                const drawY = pos.y - currentHeight / 2;

                if (country.img.complete) {
                    ctx.drawImage(country.img, drawX, drawY, currentWidth, currentHeight);
                }
            });
        }

        // Main Render Loop (Strict Render Layering Order)
        function animate() {
            ctx.clearRect(0, 0, width, height);

            // Layer 1: Base Map Connection Lines
            drawMapConnections();

            // Layer 2: Node Pulse Rings
            pulses.forEach(pulse => {
                pulse.update();
                pulse.draw();
            });

            // Layer 3: Static Map Nodes
            drawStaticNodes();

            // Layer 4: Dynamic Background Particles & Network Mesh
            particles.forEach(particle => {
                particle.update();
                particle.draw();
            });
            connectDynamicParticles();

            // Layer 5: Country Maps (Renders under the badges)
            drawCountries();

            // Layer 6: Service Badges (Renders ALWAYS TOP of the Country Images)
            activeBadges.forEach(badge => {
                badge.update();
                badge.draw();
            });

            requestAnimationFrame(animate);
        }

        resize();
        triggerRandomBadges();
        animate();
    </script>