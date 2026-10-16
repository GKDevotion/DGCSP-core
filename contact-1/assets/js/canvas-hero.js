/**
 * DEVOTION GLOBAL CSP — LUXURY CANVAS & HERO 3D ENGINE
 * High-performance dual-layer golden constellation particle network
 * Real-time 3D parallax tilt & candlestick market oscillation
 */

(function () {
  'use strict';

  /* ==========================================================================
     1. GLOBAL INTERACTIVE GOLDEN CONSTELLATION CANVAS
     ========================================================================== */
  const canvas = document.getElementById('globalBgCanvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width, height;
  let particles = [];
  let orbs = [];
  let mouse = { x: -9999, y: -9999, radius: 140 };

  // Responsive Particle Density Configuration
  function getParticleCount() {
    if (window.innerWidth < 768) return 35;
    if (window.innerWidth < 1200) return 65;
    return 100;
  }

  function resize() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    initParticles();
  }

  // Particle Class (Sharp Golden Node)
  class GoldenParticle {
    constructor() {
      this.reset();
    }

    reset() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.vx = (Math.random() - 0.5) * 0.45;
      this.vy = (Math.random() - 0.5) * 0.45;
      this.radius = Math.random() * 2 + 1.2;
      this.alpha = Math.random() * 0.45 + 0.25;
      this.baseAlpha = this.alpha;
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;

      // Wrap around bounds
      if (this.x < -10) this.x = width + 10;
      if (this.x > width + 10) this.x = -10;
      if (this.y < -10) this.y = height + 10;
      if (this.y > height + 10) this.y = -10;

      // Subtle mouse repulsion
      const dx = mouse.x - this.x;
      const dy = mouse.y - this.y;
      const dist = Math.hypot(dx, dy);

      if (dist < mouse.radius) {
        const force = (mouse.radius - dist) / mouse.radius;
        const angle = Math.atan2(dy, dx);
        this.x -= Math.cos(angle) * force * 1.8;
        this.y -= Math.sin(angle) * force * 1.8;
        this.alpha = Math.min(1, this.baseAlpha + force * 0.4);
      } else {
        this.alpha = this.baseAlpha;
      }
    }

    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(184, 138, 56, ${this.alpha})`;
      ctx.fill();

      // Soft glow center
      ctx.shadowColor = 'rgba(184, 138, 56, 0.4)';
      ctx.shadowBlur = 6;
      ctx.fill();
      ctx.shadowBlur = 0;
    }
  }

  // Ambient Bokeh Orb (Soft Glowing Cloud)
  class BokehOrb {
    constructor() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.radius = Math.random() * 70 + 40;
      this.vx = (Math.random() - 0.5) * 0.2;
      this.vy = (Math.random() - 0.5) * 0.2;
      this.alpha = Math.random() * 0.045 + 0.02;
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;
      if (this.x < -100) this.x = width + 100;
      if (this.x > width + 100) this.x = -100;
      if (this.y < -100) this.y = height + 100;
      if (this.y > height + 100) this.y = -100;
    }

    draw() {
      const gradient = ctx.createRadialGradient(
        this.x, this.y, 0,
        this.x, this.y, this.radius
      );
      gradient.addColorStop(0, `rgba(184, 138, 56, ${this.alpha})`);
      gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

      ctx.beginPath();
      ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      ctx.fillStyle = gradient;
      ctx.fill();
    }
  }

  function initParticles() {
    particles = [];
    orbs = [];
    const count = getParticleCount();
    for (let i = 0; i < count; i++) {
      particles.push(new GoldenParticle());
    }
    for (let i = 0; i < 7; i++) {
      orbs.push(new BokehOrb());
    }
  }

  function connectParticles() {
    const maxDist = 130;
    for (let i = 0; i < particles.length; i++) {
      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const dist = Math.hypot(dx, dy);

        if (dist < maxDist) {
          const alpha = (1 - dist / maxDist) * 0.22;
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = `rgba(184, 138, 56, ${alpha})`;
          ctx.lineWidth = 0.9;
          ctx.stroke();
        }
      }
    }
  }

  function renderLoop() {
    ctx.clearRect(0, 0, width, height);

    // Draw Ambient Orbs
    for (let i = 0; i < orbs.length; i++) {
      orbs[i].update();
      orbs[i].draw();
    }

    // Connect Network Lines
    connectParticles();

    // Draw Golden Particles
    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();
    }

    requestAnimationFrame(renderLoop);
  }

  window.addEventListener('resize', () => {
    resize();
  });

  window.addEventListener('mousemove', (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  });

  window.addEventListener('mouseleave', () => {
    mouse.x = -9999;
    mouse.y = -9999;
  });

  resize();
  renderLoop();

  /* ==========================================================================
     2. REAL-TIME 3D PARALLAX MOUSE TILT FOR CRYPTO VAULT & TOKENS
     ========================================================================== */
  const vaultCore = document.getElementById('cryptoVaultCore');
  const heroStage = document.getElementById('cryptoHeroStage');
  const tokenEth = document.getElementById('tokenEth');
  const tokenSol = document.getElementById('tokenSol');
  const tokenUsdt = document.getElementById('tokenUsdt');
  const heroHeading = document.getElementById('heroHeading');
  const telemetryBadges = document.querySelectorAll('.crypto-telemetry-badge');
  const liveBlockEl = document.getElementById('liveBlockNumber');

  let mouseTargetX = 0;
  let mouseTargetY = 0;
  let currentTiltX = 0;
  let currentTiltY = 0;

  window.addEventListener('mousemove', (e) => {
    const halfWidth = window.innerWidth / 2;
    const halfHeight = window.innerHeight / 2;
    mouseTargetX = (e.clientX - halfWidth) / halfWidth;
    mouseTargetY = (e.clientY - halfHeight) / halfHeight;
  });

  function smoothParallax() {
    // Silky linear interpolation
    currentTiltX += (mouseTargetX - currentTiltX) * 0.055;
    currentTiltY += (mouseTargetY - currentTiltY) * 0.055;

    // 3D Parallax on Central Crypto Vault Core
    if (vaultCore && window.innerWidth > 1024) {
      const rotY = currentTiltX * 16;
      const rotX = -currentTiltY * 16;
      vaultCore.style.transform = `perspective(1200px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateZ(35px)`;
    }

    // 3D Stage Parallax Tilt
    if (heroStage && window.innerWidth > 1024) {
      const stageRotY = currentTiltX * 6;
      const stageRotX = -currentTiltY * 6;
      heroStage.style.transform = `perspective(1400px) rotateX(${stageRotX}deg) rotateY(${stageRotY}deg)`;
    }

    // Floating Web3 Tokens Multi-Layer Parallax
    if (tokenEth && window.innerWidth > 768) {
      const transX = currentTiltX * 22;
      const transY = currentTiltY * 22;
      tokenEth.style.transform = `translate3d(${transX}px, ${transY}px, 60px) rotate(${currentTiltX * 14}deg)`;
    }

    if (tokenSol && window.innerWidth > 768) {
      const transX = -currentTiltX * 20;
      const transY = -currentTiltY * 20;
      tokenSol.style.transform = `translate3d(${transX}px, ${transY}px, 50px) rotate(${-currentTiltX * 12}deg)`;
    }

    if (tokenUsdt && window.innerWidth > 768) {
      const transX = currentTiltX * 18;
      const transY = -currentTiltY * 18;
      tokenUsdt.style.transform = `translate3d(${transX}px, ${transY}px, 45px) rotate(${currentTiltX * 10}deg)`;
    }

    // Telemetry Badges Floating Depth
    telemetryBadges.forEach((badge, idx) => {
      if (window.innerWidth > 1024) {
        const factor = (idx % 2 === 0 ? 1 : -1) * (12 + idx * 3);
        const transX = currentTiltX * factor;
        const transY = currentTiltY * factor;
        badge.style.transform = `translate3d(${transX}px, ${transY}px, 40px)`;
      }
    });

    // Subtle 3D tilt on the main animated headline
    if (heroHeading && window.innerWidth > 1024) {
      const headRotY = currentTiltX * 5;
      const headRotX = -currentTiltY * 5;
      heroHeading.style.transform = `perspective(1000px) rotateX(${headRotX}deg) rotateY(${headRotY}deg)`;
    }

    requestAnimationFrame(smoothParallax);
  }

  smoothParallax();

  /* ==========================================================================
     3. LIVE BLOCKCHAIN VALIDATOR TELEMETRY
     ========================================================================== */
  if (liveBlockEl) {
    let currentBlock = 891428;
    setInterval(() => {
      currentBlock += 1;
      liveBlockEl.textContent = `Block #${currentBlock.toLocaleString('en-US')}`;
      liveBlockEl.style.color = '#b88a38';
      setTimeout(() => {
        liveBlockEl.style.color = '';
      }, 600);
    }, 4500);
  }

})();
