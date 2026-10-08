/**
 * Hero map animation (index page)
 * - Constellation canvas sized to the whole section (HiDPI aware)
 * - SVG mesh generated from real country-card positions (never drifts)
 * - Floating service badges that avoid country cards + title
 * - Gold banner floating dots
 * - Pauses when off-screen / tab hidden, respects prefers-reduced-motion
 */
(function () {
    'use strict';

    const section = document.querySelector('.canvas-section');
    if (!section) return;

    const canvas = section.querySelector('.gdb-constellation-canvas');
    const wrapper = section.querySelector('.map-banner-wrapper');
    const meshSvg = section.querySelector('.map-mesh-svg');
    const badgeLayer = document.getElementById('badgeContainer');
    const goldBanner = document.getElementById('goldBanner');

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isMobile = () => window.innerWidth <= 768;

    /* ---------------------------------------------------------
       Run-state: only animate while section is visible + tab active
    --------------------------------------------------------- */
    let inView = true;
    let running = false;
    const listeners = { start: [], stop: [] };

    function syncRunning() {
        const shouldRun = inView && !document.hidden && !reduceMotion;
        if (shouldRun === running) return;
        running = shouldRun;
        (running ? listeners.start : listeners.stop).forEach(fn => fn());
    }

    if ('IntersectionObserver' in window) {
        new IntersectionObserver(entries => {
            inView = entries[0].isIntersecting;
            syncRunning();
        }, { threshold: 0 }).observe(section);
    }
    document.addEventListener('visibilitychange', syncRunning);

    /* ---------------------------------------------------------
       1. Constellation canvas
    --------------------------------------------------------- */
    function initCanvas() {
        if (!canvas) return;
        const ctx = canvas.getContext('2d');

        const options = {
            nodeColor: '#ab8139',
            lineRGB: '171, 129, 57',
            maxDistance: 160,
            speed: 0.4,
            maxNodes: 90
        };
        const maxDist2 = options.maxDistance * options.maxDistance;

        let width = 0, height = 0, dpr = 1;
        let nodes = [];
        let rafId = null;
        const mouse = { x: null, y: null, radius: 180 };

        function targetCount() {
            const divisor = isMobile() ? 26000 : 18000;
            return Math.min(options.maxNodes, Math.floor((width * height) / divisor));
        }

        function makeNode() {
            return {
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * options.speed,
                vy: (Math.random() - 0.5) * options.speed,
                radius: Math.random() * 2 + 1.2
            };
        }

        function resize() {
            const rect = section.getBoundingClientRect();
            const newW = Math.round(rect.width);
            const newH = Math.round(rect.height);
            if (!newW || !newH) return;

            // keep existing nodes in place proportionally (no jump on resize)
            if (width && height && nodes.length) {
                const sx = newW / width, sy = newH / height;
                nodes.forEach(n => { n.x *= sx; n.y *= sy; });
            }

            width = newW;
            height = newH;
            dpr = Math.min(window.devicePixelRatio || 1, 2);
            canvas.width = width * dpr;
            canvas.height = height * dpr;
            canvas.style.width = width + 'px';
            canvas.style.height = height + 'px';
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

            const want = targetCount();
            while (nodes.length < want) nodes.push(makeNode());
            if (nodes.length > want) nodes.length = want;

            if (!running) draw(); // static frame when paused / reduced motion
        }

        function step() {
            for (let i = 0; i < nodes.length; i++) {
                const n = nodes[i];
                n.x += n.vx;
                n.y += n.vy;

                if (n.x < 0) { n.x = 0; n.vx *= -1; }
                else if (n.x > width) { n.x = width; n.vx *= -1; }
                if (n.y < 0) { n.y = 0; n.vy *= -1; }
                else if (n.y > height) { n.y = height; n.vy *= -1; }

                if (mouse.x !== null) {
                    const dx = mouse.x - n.x;
                    const dy = mouse.y - n.y;
                    const d2 = dx * dx + dy * dy;
                    if (d2 > 0 && d2 < mouse.radius * mouse.radius) {
                        const dist = Math.sqrt(d2);
                        const force = (mouse.radius - dist) / mouse.radius;
                        n.x -= (dx / dist) * force * 1.5;
                        n.y -= (dy / dist) * force * 1.5;
                    }
                }
            }
        }

        function draw() {
            ctx.clearRect(0, 0, width, height);

            ctx.fillStyle = options.nodeColor;
            for (let i = 0; i < nodes.length; i++) {
                ctx.beginPath();
                ctx.arc(nodes[i].x, nodes[i].y, nodes[i].radius, 0, Math.PI * 2);
                ctx.fill();
            }

            ctx.lineWidth = 0.85;
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const dx = nodes[i].x - nodes[j].x;
                    const dy = nodes[i].y - nodes[j].y;
                    const d2 = dx * dx + dy * dy;
                    if (d2 < maxDist2) {
                        const alpha = (1 - Math.sqrt(d2) / options.maxDistance) * 0.28;
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.strokeStyle = 'rgba(' + options.lineRGB + ',' + alpha + ')';
                        ctx.stroke();
                    }
                }
            }
        }

        function loop() {
            if (!running) { rafId = null; return; }
            step();
            draw();
            rafId = requestAnimationFrame(loop);
        }

        listeners.start.push(() => { if (!rafId) rafId = requestAnimationFrame(loop); });
        listeners.stop.push(() => { if (rafId) { cancelAnimationFrame(rafId); rafId = null; } });

        // Mouse: coordinates relative to the canvas (scroll-safe)
        section.addEventListener('mousemove', e => {
            const r = canvas.getBoundingClientRect();
            mouse.x = e.clientX - r.left;
            mouse.y = e.clientY - r.top;
        });
        section.addEventListener('mouseleave', () => { mouse.x = mouse.y = null; });

        if ('ResizeObserver' in window) new ResizeObserver(resize).observe(section);
        else window.addEventListener('resize', resize);

        resize();
    }

    /* ---------------------------------------------------------
       2. SVG mesh built from real country-card centres
    --------------------------------------------------------- */
    const MESH_LINKS = [
        ['mauritius', 'uae'],
        ['uae', 'hongkong'],
        ['mauritius', 'singapore'],
        ['singapore', 'india'],
        ['india', 'uk'],
        ['uae', 'india']
    ];
    const SVGNS = 'http://www.w3.org/2000/svg';

    // NOTE: .map-banner-wrapper is not positioned, so the absolute layers
    // (mesh svg, country cards, badges) are laid out against the SECTION.
    function cardCentres() {
        const wr = section.getBoundingClientRect();
        const centres = {};
        wrapper.querySelectorAll('.country-card').forEach(card => {
            const key = (card.className.match(/pos-(\w+)/) || [])[1];
            if (!key) return;
            const r = card.getBoundingClientRect();
            centres[key] = { x: r.left - wr.left + r.width / 2, y: r.top - wr.top + r.height / 2 };
        });
        return { w: wr.width, h: wr.height, centres };
    }

    function buildMesh() {
        if (!wrapper || !meshSvg || isMobile()) return;
        const { w, h, centres } = cardCentres();
        if (!w || !h) return;

        meshSvg.setAttribute('viewBox', '0 0 ' + w + ' ' + h);
        meshSvg.setAttribute('preserveAspectRatio', 'none');
        while (meshSvg.firstChild) meshSvg.removeChild(meshSvg.firstChild);

        MESH_LINKS.forEach(([a, b]) => {
            if (!centres[a] || !centres[b]) return;
            const line = document.createElementNS(SVGNS, 'line');
            line.setAttribute('x1', centres[a].x);
            line.setAttribute('y1', centres[a].y);
            line.setAttribute('x2', centres[b].x);
            line.setAttribute('y2', centres[b].y);
            line.setAttribute('class', 'mesh-line');
            meshSvg.appendChild(line);
        });

        Object.keys(centres).forEach((key, i) => {
            const g = document.createElementNS(SVGNS, 'g');
            g.setAttribute('transform', 'translate(' + centres[key].x + ',' + centres[key].y + ')');
            const core = document.createElementNS(SVGNS, 'circle');
            core.setAttribute('class', 'mesh-dot-core');
            core.setAttribute('r', 3);
            const ring = document.createElementNS(SVGNS, 'circle');
            ring.setAttribute('class', 'mesh-dot-ring');
            ring.setAttribute('r', 18);
            ring.style.animationDelay = (i * 0.45) + 's';
            g.appendChild(core);
            g.appendChild(ring);
            meshSvg.appendChild(g);
        });
    }

    function initMesh() {
        if (!wrapper || !meshSvg) return;
        buildMesh();
        if ('ResizeObserver' in window) new ResizeObserver(buildMesh).observe(section);
        else window.addEventListener('resize', buildMesh);
        // card height depends on image size → rebuild once images load
        wrapper.querySelectorAll('.country-card img').forEach(img => {
            if (!img.complete) img.addEventListener('load', buildMesh, { once: true });
        });
    }

    /* ---------------------------------------------------------
       3. Floating service badges (avoid cards + title)
    --------------------------------------------------------- */
    const servicesList = [
        'Global Entity Management', 'Accounting & TAX', 'Fund Services',
        'Private Wealth & Family Office', 'Merger & Acquisition',
        'Corporate Advisory', 'Banking Solutions'
    ];
    const bgColors = [
        'rgba(255, 248, 230, 0.95)', 'rgba(240, 248, 255, 0.95)',
        'rgba(245, 243, 255, 0.95)', 'rgba(240, 253, 244, 0.95)',
        'rgba(255, 241, 242, 0.95)', 'rgba(254, 249, 195, 0.95)'
    ];

    function initBadges() {
        if (!wrapper || !badgeLayer || reduceMotion) return;

        let serviceIndex = 0;
        let timers = [];

        const later = (fn, ms) => { timers.push(setTimeout(fn, ms)); };
        const clearTimers = () => { timers.forEach(clearTimeout); timers = []; };

        const intersects = (a, b) =>
            a.x < b.x + b.w && a.x + a.w > b.x && a.y < b.y + b.h && a.y + a.h > b.y;

        function avoidRects() {
            const sr = section.getBoundingClientRect();   // containing block
            const wr = wrapper.getBoundingClientRect();   // visible map area
            const pad = 20;
            const area = { x: 0, y: wr.top - sr.top, w: sr.width, h: wr.height };
            const rects = [{ x: 0, y: area.y, w: area.w, h: Math.max(70, area.h * 0.16) }]; // title zone
            wrapper.querySelectorAll('.country-card').forEach(card => {
                const r = card.getBoundingClientRect();
                rects.push({
                    x: r.left - sr.left - pad, y: r.top - sr.top - pad,
                    w: r.width + pad * 2, h: r.height + pad * 2
                });
            });
            return { rects, area, w: sr.width, h: sr.height };
        }

        function placeBadge(badge, taken) {
            const { rects, area, w, h } = avoidRects();
            const bw = badge.offsetWidth, bh = badge.offsetHeight;
            for (let i = 0; i < 60; i++) {
                const cx = area.x + area.w * (0.10 + Math.random() * 0.80);
                const cy = area.y + area.h * (0.12 + Math.random() * 0.80);
                const box = { x: cx - bw / 2, y: cy - bh / 2, w: bw, h: bh };
                if (box.x < 4 || box.x + bw > w - 4 ||
                    box.y < area.y + 4 || box.y + bh > area.y + area.h - 4) continue;
                if (rects.some(r => intersects(box, r))) continue;
                if (taken.some(r => intersects(box, { x: r.x - 20, y: r.y - 20, w: r.w + 40, h: r.h + 40 }))) continue;
                badge.style.left = (cx / w * 100) + '%';
                badge.style.top = (cy / h * 100) + '%';
                taken.push(box);
                return true;
            }
            return false;
        }

        function spawn() {
            if (isMobile()) return;
            badgeLayer.innerHTML = '';
            const taken = [];

            for (let i = 0; i < 2; i++) {
                const badge = document.createElement('div');
                badge.className = 'service-badge-item';
                badge.textContent = servicesList[serviceIndex];
                badge.style.backgroundColor = bgColors[Math.floor(Math.random() * bgColors.length)];
                badgeLayer.appendChild(badge);

                if (!placeBadge(badge, taken)) { badge.remove(); continue; }
                serviceIndex = (serviceIndex + 1) % servicesList.length;
                later(() => badge.classList.add('active'), 50);
            }

            later(() => {
                badgeLayer.querySelectorAll('.service-badge-item')
                    .forEach(el => el.classList.remove('active'));
            }, 2000);
            later(spawn, 2500);
        }

        // wait for images so country-card rects are real before first placement
        const go = () => { if (!running) return; clearTimers(); spawn(); };
        listeners.start.push(() => {
            if (document.readyState === 'complete') go();
            else window.addEventListener('load', go, { once: true });
        });
        listeners.stop.push(clearTimers);
    }

    /* ---------------------------------------------------------
       4. Gold banner floating dots
    --------------------------------------------------------- */
    function initGoldDots() {
        if (!goldBanner) return;

        const dots = [];
        let timer = null;

        const rand = (min, max) => min + Math.random() * (max - min);

        function build() {
            goldBanner.innerHTML = '';
            dots.length = 0;
            const count = Math.max(12, Math.round(goldBanner.clientWidth / 55));
            for (let i = 0; i < count; i++) {
                const d = document.createElement('span');
                d.className = 'moving-dot';
                d.style.left = rand(0, 98) + '%';
                d.style.top = rand(0, 92) + '%';
                goldBanner.appendChild(d);
                dots.push(d);
            }
        }

        function drift() {
            dots.forEach(d => {
                const l = parseFloat(d.style.left) + rand(-6, 6);
                const t = parseFloat(d.style.top) + rand(-25, 25);
                d.style.left = Math.min(98, Math.max(0, l)) + '%';
                d.style.top = Math.min(92, Math.max(0, t)) + '%';
            });
        }

        build();
        listeners.start.push(() => { if (!timer) timer = setInterval(drift, 5000); });
        listeners.stop.push(() => { clearInterval(timer); timer = null; });

        let lastW = goldBanner.clientWidth;
        if ('ResizeObserver' in window) {
            new ResizeObserver(() => {
                const w = goldBanner.clientWidth;
                if (Math.abs(w - lastW) > 80) { lastW = w; build(); }
            }).observe(goldBanner);
        }
    }

    /* ---------------------------------------------------------
       Boot
    --------------------------------------------------------- */
    function boot() {
        initCanvas();
        initMesh();
        initBadges();
        initGoldDots();
        syncRunning();
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
    else boot();
})();
