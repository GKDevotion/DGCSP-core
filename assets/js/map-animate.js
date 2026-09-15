/* -------------------------------------------------------------
    CANVAS INTERACTIVE MAP BANNER ANIMATION LOGIC
------------------------------------------------------------- */
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

let width, height;
let dpr = window.devicePixelRatio || 1;
let particles = [];
let pulses = [];
let activeBadges = [];

const PARTICLE_COUNT = 32;
const CONNECT_DISTANCE = 180;
const MOUSE_RADIUS = 140;
const MAX_REPULSION_DIST = 220;
const MAX_OFFSET = 25;

const countryData = [
    { name: "Mauritius", xRatio: 0.20, yRatio: 0.25, wRatio: 0.13, imgSrc: "assets/images/Jurisdictions/Mauritius.svg" },
    { name: "UAE",       xRatio: 0.40, yRatio: 0.18, wRatio: 0.13, imgSrc: "assets/images/Jurisdictions/UAE.svg" },
    { name: "Hongkong",  xRatio: 0.72, yRatio: 0.20, wRatio: 0.13, imgSrc: "assets/images/Jurisdictions/HongKong.svg" },
    { name: "Singapore", xRatio: 0.32, yRatio: 0.72, wRatio: 0.15, imgSrc: "assets/images/Jurisdictions/Singapore.svg" },
    { name: "India",     xRatio: 0.55, yRatio: 0.54, wRatio: 0.15, imgSrc: "assets/images/Jurisdictions/India.svg" },
    { name: "UK",        xRatio: 0.78, yRatio: 0.60, wRatio: 0.12, imgSrc: "assets/images/Jurisdictions/UK.svg" }
].map(country => ({
    ...country,
    offsetX: 0, offsetY: 0, targetOffsetX: 0, targetOffsetY: 0, scale: 1, targetScale: 1
}));

const staticNodes = [
    { x: 0.28, y: 0.18 }, { x: 0.48, y: 0.12 }, { x: 0.10, y: 0.55 },
    { x: 0.25, y: 0.48 }, { x: 0.42, y: 0.82 }, { x: 0.64, y: 0.38 }, { x: 0.68, y: 0.72 }
];

const mapConnections = [
    ['c', 0, 'n', 0], ['n', 0, 'c', 1], ['n', 0, 'n', 1], ['n', 1, 'c', 2],
    ['c', 0, 'n', 2], ['n', 2, 'c', 3], ['c', 1, 'n', 3], ['n', 3, 'c', 4],
    ['c', 3, 'n', 4], ['n', 4, 'c', 4], ['c', 1, 'c', 4], ['c', 4, 'n', 5],
    ['n', 5, 'c', 2], ['n', 5, 'n', 6], ['c', 2, 'n', 6], ['n', 6, 'c', 5]
];

const servicesList = [
    "Global Entity Management", "Accounting & TAX", "Fund Services",
    "Private Wealth & Family Office", "Merger & Acquisition", "Corporate Advisory", "Banking Solutions"
];

const bgColors = [
    "rgba(255, 248, 230, 0.95)", "rgba(240, 248, 255, 0.95)", "rgba(245, 243, 255, 0.95)",
    "rgba(240, 253, 244, 0.95)", "rgba(255, 241, 242, 0.95)", "rgba(254, 249, 195, 0.95)"
];

countryData.forEach(country => {
    country.img = new Image();
    country.img.src = country.imgSrc;
});

function getCountryDimensions(country) {
    let mobileMultiplier = width < 576 ? 0.75 : (width < 992 ? 0.88 : 1.0);
    const w = width * country.wRatio * country.scale * mobileMultiplier;
    let h = w; 
    if (country.img && country.img.naturalWidth && country.img.naturalHeight) {
        h = w * (country.img.naturalHeight / country.img.naturalWidth);
    }
    return { w, h };
}

const mouse = { x: null, y: null, radius: MOUSE_RADIUS };

window.addEventListener('mousemove', (e) => {
    const rect = canvas.getBoundingClientRect();
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
});

window.addEventListener('mouseleave', () => {
    mouse.x = null; mouse.y = null;
});

class ServiceBadge {
    constructor(text, posX, posY) {
        this.text = text;
        this.x = posX;
        this.y = posY;
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
            if (this.alpha >= 1) { this.alpha = 1; this.fadeState = 'hold'; }
        } else if (this.fadeState === 'out') {
            this.alpha -= this.fadeSpeed;
            if (this.alpha <= 0) { this.alpha = 0; }
        }
    }

    draw() {
        if (this.alpha <= 0) return;
        const drawY = this.y + Math.sin(this.floatOffset) * 4;

        ctx.save();
        ctx.globalAlpha = this.alpha;

        const fontSize = width < 576 ? 14 : (width < 992 ? 15 : 17);
        ctx.font = `500 ${fontSize}px poppins, sans-serif`;

        const textMetrics = ctx.measureText(this.text);
        const paddingX = width < 576 ? 12 : 18;
        const badgeWidth = textMetrics.width + paddingX * 2;
        const badgeHeight = fontSize + (width < 576 ? 12 : 16);

        const rectX = this.x - badgeWidth / 2;
        const rectY = drawY - badgeHeight / 2;

        ctx.beginPath();
        if (ctx.roundRect) {
            ctx.roundRect(rectX, rectY, badgeWidth, badgeHeight, badgeHeight / 2);
        } else {
            ctx.rect(rectX, rectY, badgeWidth, badgeHeight);
        }
        ctx.fillStyle = this.bgColor;
        ctx.shadowColor = 'rgba(171, 129, 57, 0.35)';
        ctx.shadowBlur = 8;
        ctx.shadowOffsetY = 2;
        ctx.fill();

        ctx.strokeStyle = 'rgba(171, 129, 57, 0.7)';
        ctx.lineWidth = 1;
        ctx.stroke();

        ctx.shadowColor = 'transparent';
        ctx.fillStyle = '#1a1a1a';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(this.text, this.x, drawY);

        ctx.restore();
    }
}

let currentServiceIndex = 0;

function getRandomNonOverlappingPositions() {
    const minDistance = width < 576 ? 110 : 180;
    const marginX = width < 576 ? 70 : 100;
    const marginY = width < 576 ? 50 : 80;

    let x1 = Math.random() * (width - marginX * 2) + marginX;
    let y1 = Math.random() * (height - marginY * 2) + marginY;

    let x2, y2, attempts = 0;
    do {
        x2 = Math.random() * (width - marginX * 2) + marginX;
        y2 = Math.random() * (height - marginY * 2) + marginY;
        let dx = x1 - x2, dy = y1 - y2;
        if (Math.sqrt(dx * dx + dy * dy) >= minDistance) break;
        attempts++;
    } while (attempts < 40);

    return [{ x: x1, y: y1 }, { x: x2, y: y2 }];
}

function triggerSequentialBadges() {
    activeBadges.forEach(badge => badge.fadeState = 'out');

    setTimeout(() => {
        activeBadges = activeBadges.filter(b => b.alpha > 0);
        const pos = getRandomNonOverlappingPositions();

        const service1 = servicesList[currentServiceIndex];
        currentServiceIndex = (currentServiceIndex + 1) % servicesList.length;

        const service2 = servicesList[currentServiceIndex];
        currentServiceIndex = (currentServiceIndex + 1) % servicesList.length;

        activeBadges.push(new ServiceBadge(service1, pos[0].x, pos[0].y));
        activeBadges.push(new ServiceBadge(service2, pos[1].x, pos[1].y));
    }, 400);

    setTimeout(triggerSequentialBadges, 2500);
}

class Particle {
    constructor() {
        this.x = Math.random() * width;
        this.y = Math.random() * height;
        this.vx = (Math.random() - 0.5) * 0.7;
        this.vy = (Math.random() - 0.5) * 0.7;
        this.radius = Math.random() * 2 + 1;
    }
    update() {
        this.x += this.vx; this.y += this.vy;
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

class PulseRing {
    constructor(x, y) {
        this.x = x; this.y = y;
        this.maxRadius = Math.random() * 18 + 12;
        this.currentRadius = 3;
        this.speed = Math.random() * 0.25 + 0.15;
    }
    update() {
        this.currentRadius += this.speed;
        if (this.currentRadius >= this.maxRadius) this.currentRadius = 2;
    }
    draw() {
        const alpha = 1 - (this.currentRadius / this.maxRadius);
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.currentRadius, 0, Math.PI * 2);
        ctx.strokeStyle = `rgba(171, 129, 57, ${alpha * 0.8})`;
        ctx.lineWidth = 1;
        ctx.stroke();
    }
}

function getPosition(item) {
    return {
        x: (item.xRatio ? width * item.xRatio : width * item.x) + (item.offsetX || 0),
        y: (item.yRatio ? height * item.yRatio : height * item.y) + (item.offsetY || 0)
    };
}

// DPI and Canvas Resolution Handler
function resize() {
    const container = canvas.parentElement;
    width = container.clientWidth;
    height = container.clientHeight;
    dpr = window.devicePixelRatio || 1;

    canvas.width = width * dpr;
    canvas.height = height * dpr;
    ctx.scale(dpr, dpr);

    init();
}
window.addEventListener('resize', resize);

function init() {
    particles = []; pulses = [];
    for (let i = 0; i < PARTICLE_COUNT; i++) particles.push(new Particle());
    staticNodes.forEach(node => {
        const pos = getPosition(node);
        pulses.push(new PulseRing(pos.x, pos.y));
    });
}

function drawMapConnections() {
    ctx.strokeStyle = 'rgba(210, 190, 150, 0.4)';
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
                let opacity = (1 - (dist / CONNECT_DISTANCE)) * 0.35;
                ctx.strokeStyle = `rgba(171, 129, 57, ${opacity})`;
                ctx.lineWidth = 0.8;
                ctx.beginPath();
                ctx.moveTo(particles[a].x, particles[a].y);
                ctx.lineTo(particles[b].x, particles[b].y);
                ctx.stroke();
            }
        }
    }
}

function drawCountries() {
    countryData.forEach(country => {
        const pos = getPosition(country);
        const { w, h } = getCountryDimensions(country);
        if (country.img.complete) {
            ctx.drawImage(country.img, pos.x - w / 2, pos.y - h / 2, w, h);
        }
    });
}

function animate() {
    ctx.clearRect(0, 0, width, height);

    drawMapConnections();
    pulses.forEach(p => { p.update(); p.draw(); });
    particles.forEach(p => { p.update(); p.draw(); });
    connectDynamicParticles();
    drawCountries();

    activeBadges.forEach(b => { b.update(); b.draw(); });

    requestAnimationFrame(animate);
}

window.onload = function() {
    resize();
    triggerSequentialBadges();
    animate();
};