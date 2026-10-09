/**
 * Inner pages effects (shared)
 * - .ip-constellation canvases: gold drifting nodes (same look as index)
 * - .ip-acc accordion (single open, keyboard friendly)
 * Pauses when off-screen / tab hidden, static when prefers-reduced-motion.
 */
(function () {
    'use strict';

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------------- Corner constellation ---------------- */
    function initConstellation(canvas) {
        const ctx = canvas.getContext('2d');
        const left = canvas.classList.contains('ip-constellation--left');
        let w = 0, h = 0, dpr = 1, rafId = null, visible = true;
        const nodes = [];

        function resize() {
            const r = canvas.getBoundingClientRect();
            if (!r.width || !r.height) return;
            dpr = Math.min(window.devicePixelRatio || 1, 2);
            w = r.width; h = r.height;
            canvas.width = w * dpr;
            canvas.height = h * dpr;
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
            if (!nodes.length) {
                for (let i = 0; i < 9; i++) {
                    nodes.push({
                        x: (left ? 0 : w * 0.2) + Math.random() * w * 0.75,
                        y: Math.random() * h * 0.75,
                        vx: (Math.random() - 0.5) * 0.35,
                        vy: (Math.random() - 0.5) * 0.35,
                        r: Math.random() * 2 + 1.8
                    });
                }
            }
            draw();
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);
            ctx.fillStyle = '#ab8139';
            nodes.forEach(n => { ctx.beginPath(); ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2); ctx.fill(); });
            ctx.lineWidth = 0.85;
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const dx = nodes[i].x - nodes[j].x, dy = nodes[i].y - nodes[j].y;
                    const d2 = dx * dx + dy * dy;
                    if (d2 < 28900) {                       // 170px
                        const a = 0.18 * (1 - Math.sqrt(d2) / 170);
                        ctx.strokeStyle = 'rgba(0,0,0,' + a + ')';
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function step() {
            nodes.forEach(n => {
                n.x += n.vx; n.y += n.vy;
                if (n.x < w * 0.05 || n.x > w - 10) n.vx *= -1;
                if (n.y < 10 || n.y > h * 0.85) n.vy *= -1;
            });
        }

        function loop() {
            if (!visible || document.hidden) { rafId = null; return; }
            step(); draw();
            rafId = requestAnimationFrame(loop);
        }
        function kick() { if (!rafId && !reduceMotion) rafId = requestAnimationFrame(loop); }

        if ('IntersectionObserver' in window) {
            new IntersectionObserver(e => { visible = e[0].isIntersecting; if (visible) kick(); }).observe(canvas);
        }
        document.addEventListener('visibilitychange', kick);
        window.addEventListener('resize', resize);
        resize();
        kick();
    }

    /* ---------------- Accordion ---------------- */
    function initAccordion(root) {
        const items = root.querySelectorAll('.ip-acc-item');
        items.forEach(item => {
            const btn = item.querySelector('.ip-acc-btn');
            btn.addEventListener('click', () => {
                const open = item.classList.contains('is-open');
                items.forEach(i => {
                    i.classList.remove('is-open');
                    i.querySelector('.ip-acc-btn').setAttribute('aria-expanded', 'false');
                });
                if (!open) {
                    item.classList.add('is-open');
                    btn.setAttribute('aria-expanded', 'true');
                }
                if (window.AOS && AOS.refresh) setTimeout(AOS.refresh, 480);
            });
        });
    }

    /* ---------------- Count-up for .ip-count (e.g. "$15B+", "99.8%", "15 Min") ---------------- */
    function initCountUp(el) {
        const raw = el.textContent.trim();
        const m = raw.match(/^([^\d]*)(\d[\d,]*\.?\d*)(.*)$/);
        if (!m || raw.indexOf('/') !== -1 || reduceMotion) return;     // skip "24/7/365" etc.
        const prefix = m[1], numStr = m[2], suffix = m[3];
        const dec = (numStr.split('.')[1] || '').length;
        const to = parseFloat(numStr.replace(/,/g, ''));
        const useComma = numStr.indexOf(',') !== -1;
        let done = false;
        function run() {
            if (done) return; done = true;
            const start = performance.now(), dur = 1500;
            (function tick(now) {
                const t = Math.min((now - start) / dur, 1), e = 1 - Math.pow(1 - t, 3);
                let v = (to * e).toFixed(dec);
                if (useComma) v = Number(v).toLocaleString('en-US', { minimumFractionDigits: dec, maximumFractionDigits: dec });
                el.textContent = prefix + v + suffix;
                if (t < 1) requestAnimationFrame(tick);
            })(start);
        }
        if ('IntersectionObserver' in window) {
            const io = new IntersectionObserver(e => { if (e[0].isIntersecting) { run(); io.disconnect(); } }, { threshold: 0.4 });
            io.observe(el);
        } else run();
    }

    function boot() {
        document.querySelectorAll('canvas.ip-constellation').forEach(initConstellation);
        document.querySelectorAll('.ip-acc').forEach(initAccordion);
        document.querySelectorAll('.ip-count').forEach(initCountUp);
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
    else boot();
})();
