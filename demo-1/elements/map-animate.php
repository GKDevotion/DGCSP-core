<style>
    canvas.map-animate {
        display: block;
        width: 100%;
        height: 100%;
    }
</style>

<canvas id="canvas" class="map-animate"></canvas>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    let width, height;
    let particles = [];
    let pulses = [];

    // Configuration
    const PARTICLE_COUNT = 40;
    const CONNECT_DISTANCE = 250;
    const MOUSE_RADIUS = 30;
    const MAX_REPULSION_DIST = 300; // How far away the mouse triggers repulsion
    const MAX_OFFSET = 35; // Maximum pixel displacement in opposite direction

    // Map layout definitions
    const countryData = [
        { name: "Mauritius", xRatio: 0.16, yRatio: 0.28, width: 226, height: 246, imgSrc: "assets/images/Jurisdictions/Mauritius.png" },
        { name: "UAE", xRatio: 0.36, yRatio: 0.22, width: 200, height: 163, imgSrc: "assets/images/Jurisdictions/UAE.png" },
        { name: "Hongkong", xRatio: 0.72, yRatio: 0.18, width: 230, height: 184, imgSrc: "assets/images/Jurisdictions/HongKong.png" },
        { name: "Singapore", xRatio: 0.26, yRatio: 0.72, width: 263, height: 161, imgSrc: "assets/images/Jurisdictions/Singapore.png" },
        { name: "India", xRatio: 0.53, yRatio: 0.58, width: 297, height: 333, imgSrc: "assets/images/Jurisdictions/India.png" },
        { name: "UK", xRatio: 0.81, yRatio: 0.62, width: 187, height: 313, imgSrc: "assets/images/Jurisdictions/UK.png" }
    ].map(country => ({
        ...country,
        offsetX: 0,
        offsetY: 0,
        targetOffsetX: 0,
        targetOffsetY: 0
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

    // Mouse Tracker
    const mouse = {
        x: null,
        y: null,
        radius: MOUSE_RADIUS
    };

    window.addEventListener('mousemove', (e) => {
        mouse.x = e.x;
        mouse.y = e.y;
    });

    window.addEventListener('mouseleave', () => {
        mouse.x = null;
        mouse.y = null;
    });

    // Preload Map Images
    countryData.forEach(country => {
        country.img = new Image();
        country.img.src = country.imgSrc;
    });

    // Particle Class (Dynamic Moving Points)
    class Particle {
        constructor() {
            this.x = Math.random() * window.innerWidth;
            this.y = Math.random() * window.innerHeight;
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

    function resize() {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
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

    // --- Opposite Direction Motion Logic ---

    function updateOppositeRepULSION() {
        countryData.forEach(country => {
            const baseCenterX = country.xRatio * width;
            const baseCenterY = country.yRatio * height;

            if (mouse.x !== null && mouse.y !== null) {
                // Calculate vector from mouse to image center
                const dx = baseCenterX - mouse.x;
                const dy = baseCenterY - mouse.y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < MAX_REPULSION_DIST && dist > 0) {
                    // Normalize direction vector (points away from mouse)
                    const normX = dx / dist;
                    const normY = dy / dist;

                    // Repulsion strength increases as mouse gets closer
                    const strength = (1 - dist / MAX_REPULSION_DIST);
                    const pushAmount = strength * MAX_OFFSET;

                    // Set target offset in opposite direction
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

            // Smooth linear interpolation (easing) towards target offsets
            country.offsetX += (country.targetOffsetX - country.offsetX) * 0.08;
            country.offsetY += (country.targetOffsetY - country.offsetY) * 0.08;
        });
    }

    // --- End Motion Logic ---

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

    // Draw Country Images
    function drawCountries() {
        updateOppositeRepULSION(); // Compute push away from mouse cursor

        countryData.forEach(country => {
            const pos = getPosition(country);
            const drawX = pos.x - country.width / 2;
            const drawY = pos.y - country.height / 2;

            if (country.img.complete) {
                ctx.drawImage(country.img, drawX, drawY, country.width, country.height);
            }
        });
    }

    // Main Animation Loop
    function animate() {
        ctx.clearRect(0, 0, width, height);

        // 1. Static map connections (follows repelled images)
        drawMapConnections();

        // 2. Animated pulse rings at nodes
        pulses.forEach(pulse => {
            pulse.update();
            pulse.draw();
        });

        // 3. Static network dots
        drawStaticNodes();

        // 4. Floating dynamic particles & mouse interaction lines
        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        connectDynamicParticles();

        // 5. Country maps overlay
        drawCountries();

        requestAnimationFrame(animate);
    }

    resize();
    animate();
</script>