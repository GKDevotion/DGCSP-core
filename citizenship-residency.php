<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/citizenship-residency';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Fixed file_exists check (query strings must be appended AFTER checking disk path)
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp')
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp')
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';
?>

<style>
  /* ==========================================================================
     GLOBAL DESIGN TOKENS & BASE STYLES
     ========================================================================== */
  :root {
    --gold-primary: #a6823e;
    --gold-accent: #b38b3f;
    --gold-dark: #8c6b2f;
    --gold-tint: #ddd1ba;
    --gold-soft: rgba(166, 130, 62, 0.12);
    --navy-pill: #0b3c6d;
    --navy-card: #083868;
    --navy-deep: #05284c;
    --slate-dark: #4e5663;
    --text-dark: #0f1115;
    --text-muted: #5c6472;
    --bg-surface: #eceef2;
    --bg-light: #f3f4f6;
    --border-light: #e2e5ec;
  }

  * {
    box-sizing: border-box;
  }

  /* ==========================================================================
     AMBIENT RANDOM FLOATING OBJECTS LAYER (GPU ACCELERATED)
     ========================================================================== */
  .ambient-objects-canvas {
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100vh;
    pointer-events: none;
    z-index: 4;
    overflow: hidden;
  }

  .ambient-float-item {
    position: absolute;
    opacity: 0;
    will-change: transform, opacity;
    animation: ambientDrift var(--dur, 18s) ease-in-out var(--delay, 0s) infinite alternate;
    transition: opacity 1.2s ease;
  }

  .ambient-float-item.is-ready {
    opacity: var(--max-opacity, 0.35);
  }

  .ambient-float-item svg {
    display: block;
    width: 100%;
    height: 100%;
  }

  @keyframes ambientDrift {
    0% {
      transform: translate3d(0, 0, 0) rotate(0deg) scale(1);
    }
    33% {
      transform: translate3d(var(--dx1, 18px), var(--dy1, -24px), 0) rotate(var(--rot1, 12deg)) scale(1.04);
    }
    66% {
      transform: translate3d(var(--dx2, -14px), var(--dy2, 16px), 0) rotate(var(--rot2, -10deg)) scale(0.96);
    }
    100% {
      transform: translate3d(var(--dx3, 22px), var(--dy3, -12px), 0) rotate(var(--rot3, 18deg)) scale(1.02);
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ambient-objects-canvas {
      display: none;
    }
  }

  /* ==========================================================================
     UNIFIED REVEAL / AOS ENGINE
     ========================================================================== */
  [data-reveal] {
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 0.8s;
    transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
  }

  [data-reveal="fade-up"] { transform: translateY(28px); }
  [data-reveal="fade-down"] { transform: translateY(-24px); }
  [data-reveal="fade-left"] { transform: translateX(32px); }
  [data-reveal="fade-right"] { transform: translateX(-32px); }
  [data-reveal="zoom-in"] { transform: scale(0.92) translateY(20px); }
  [data-reveal="scale-x"] { transform: scaleX(0); transform-origin: left center; }

  [data-reveal].is-revealed {
    opacity: 1;
    transform: translate3d(0, 0, 0) scale(1) scaleX(1);
  }

  /* ==========================================================================
     1. HERO SECTION
     ========================================================================== */
  .sovereign-hero {
    position: relative;
    width: 100%;
    min-height: 540px;
    display: flex;
    align-items: center;
    background: #f5f5f5 url('<?= $img ?>/Strategic-Citizenship-Global-Residency.png') no-repeat right center;
    background-size: cover;
    overflow: hidden;
    padding: 64px 20px;
  }

  .sovereign-hero .hero-container {
    max-width: 1240px;
    width: 100%;
    margin: 0 auto;
    padding: 0 4%;
    position: relative;
    z-index: 5;
  }

  .sovereign-hero .hero-content {
    max-width: 580px;
  }

  .sovereign-hero .hero-eyebrow {
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 0.28em;
    text-transform: uppercase;
    color: #333333;
    margin: 0 0 18px 0;
  }

  .sovereign-hero .hero-divider {
    width: 75px;
    height: 1.5px;
    background-color: var(--gold-primary);
    margin-bottom: 28px;
  }

  .sovereign-hero .hero-title {
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 700;
    line-height: 1.18;
    color: #141414;
    margin: 0 0 22px 0;
  }

  .sovereign-hero .hero-title .highlight-gold {
    color: var(--gold-primary);
  }

  .sovereign-hero .hero-description {
    font-size: 16px;
    line-height: 1.65;
    color: #5c5c5c;
    margin: 0 0 24px 0;
    max-width: 510px;
  }

  .sovereign-hero .hero-highlights {
    list-style: none;
    padding: 0;
    margin: 0 0 32px 0;
    display: flex;
    flex-wrap: wrap;
    gap: 12px 24px;
  }

  .sovereign-hero .hero-highlights li {
    font-size: 13.5px;
    font-weight: 500;
    color: #2b2b2b;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .sovereign-hero .hero-highlights li::before {
    content: "";
    width: 6px;
    height: 6px;
    background-color: var(--gold-primary);
    border-radius: 50%;
    display: inline-block;
  }

  .sovereign-hero .hero-actions {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
  }

  .sovereign-hero .hero-btn {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.03em;
    text-decoration: none;
    padding: 14px 30px;
    border-radius: 2px;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
  }

  .sovereign-hero .hero-btn:hover {
    background-color: var(--gold-dark);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(166, 130, 62, 0.25);
  }

  .sovereign-hero .hero-note {
    font-size: 12.5px;
    color: #6e6e6e;
    font-style: italic;
  }

  @media (max-width: 991px) {
    .sovereign-hero {
      background-position: 75% center;
      min-height: 460px;
    }
    .sovereign-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, rgba(247, 247, 247, 0.95) 50%, rgba(247, 247, 247, 0.45) 100%);
      z-index: 1;
    }
  }

  /* ==========================================================================
     2. ECOSYSTEM & INTERACTIVE ESTIMATOR
     ========================================================================== */
  .sovereign-ecosystem-section {
    position: relative;
    width: 100%;
    overflow: hidden;
    background-color: var(--bg-light);
  }

  .top-metrics-band {
    background: linear-gradient(135deg, #ab8642 0%, #9b7735 100%);
    color: #ffffff;
    padding: 64px 20px 250px;
  }

  .eco-container {
    max-width: 1140px;
    margin: 0 auto;
  }

  .metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
  }

  .metric-item {
    padding: 0 24px;
    border-right: 1px solid rgba(255, 255, 255, 0.28);
  }

  .metric-item:first-child { padding-left: 0; }
  .metric-item:last-child { border-right: none; padding-right: 0; }

  .metric-number {
    font-size: clamp(28px, 3vw, 38px);
    font-weight: 700;
    letter-spacing: -0.02em;
    margin: 0 0 8px 0;
    line-height: 1.1;
  }

  .metric-label {
    font-size: 14px;
    line-height: 1.45;
    color: rgba(255, 255, 255, 0.92);
    margin: 0;
  }

  .estimator-overlay-wrapper {
    position: relative;
    z-index: 10;
    margin-top: -200px;
    padding: 0 20px;
  }

  .estimator-card {
    max-width: 1140px;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.6);
    /* backdrop-filter: blur(10px); */
    border-radius: 14px;
    box-shadow: 0 22px 50px rgba(18, 24, 38, 0.09);
    overflow: hidden;
    border: 1px solid rgba(166, 130, 62, 0.18);
  }

  .estimator-header {
    background-color: var(--gold-tint);
    padding: 36px 28px 32px;
    text-align: center;
  }

  .suite-badge {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 5px 16px;
    border-radius: 3px;
    margin-bottom: 14px;
  }

  .estimator-title {
    font-size: clamp(24px, 3vw, 32px);
    font-weight: 700;
    color: var(--text-dark);
    margin: 0 0 10px 0;
  }

  .estimator-subtitle {
    font-size: 13.5px;
    color: #4a453c;
    margin: 0 auto;
    max-width: 640px;
    line-height: 1.5;
  }

  .estimator-body {
    padding: 38px 46px 42px;
    display: grid;
    grid-template-columns: 1.08fr 0.92fr;
    gap: 40px;
    align-items: center;
  }

  .control-group { margin-bottom: 22px; }
  .control-group:last-child { margin-bottom: 0; }

  .control-label {
    display: block;
    font-size: 12.5px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 9px;
  }

  .styled-select {
    width: 100%;
    padding: 12px 38px 12px 14px;
    font-size: 13.5px;
    color: #2b2b2b;
    background-color: #ffffff;
    border: 1px solid #d5d8de;
    border-radius: 5px;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23555' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    cursor: pointer;
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
  }

  .styled-select:focus {
    outline: none;
    border-color: var(--gold-primary);
    box-shadow: 0 0 0 3px rgba(166, 130, 62, 0.14);
  }

  .family-toggle-group {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    border: 1px solid #d5d8de;
    border-radius: 5px;
    overflow: hidden;
  }

  .family-btn {
    background: #ffffff;
    border: none;
    border-right: 1px solid #d5d8de;
    padding: 11px 10px;
    font-size: 13px;
    font-weight: 500;
    color: #444444;
    cursor: pointer;
    transition: all 0.25s ease;
  }

  .family-btn:last-child { border-right: none; }
  .family-btn:hover:not(.active) { background: #f8f9fa; }
  .family-btn.active {
    background-color: var(--slate-dark);
    color: #ffffff;
    font-weight: 600;
  }

  .parameters-box {
    border: 1px solid #cbb382;
    border-radius: 10px;
    padding: 26px 28px;
    background: #fdfcfa;
  }

  .parameters-heading {
    font-size: 15px;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0 0 14px 0;
  }

  .param-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ece6da;
    font-size: 13px;
  }

  .param-row:last-of-type {
    border-bottom: none;
    margin-bottom: 16px;
  }

  .param-key { color: var(--text-muted); }

  .param-val {
    font-weight: 700;
    color: var(--text-dark);
    transition: opacity 0.2s ease, transform 0.2s ease;
  }

  .param-val.updating {
    opacity: 0.35;
    transform: translateY(-2px);
  }

  .quotation-btn {
    display: block;
    width: 100%;
    text-align: center;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    padding: 12px 18px;
    border-radius: 4px;
    transition: background-color 0.25s ease, transform 0.2s ease;
  }

  .quotation-btn:hover {
    background-color: var(--gold-dark);
    transform: translateY(-1px);
  }

  .bottom-pillars-band {
    position: relative;
    z-index: 5;
  }

  .pillars-grid {
    max-width: 1140px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  .bottom-pillars-band .pillar-card {
    padding: 28px 24px 30px;
    text-align: center;
    margin-top: -80px;
  }

  .bottom-pillars-band .pillar-card:first-child { margin-left: -80px; }
  .bottom-pillars-band .pillar-card:last-child { margin-right: -80px; }

  .pillar-img-wrap img {
    max-height: 165px;
    width: auto;
    object-fit: contain;
    animation: gentleFloat 4.5s ease-in-out infinite;
  }

  .bottom-pillars-band .pillar-card:nth-child(2) .pillar-img-wrap img { animation-delay: 0.8s; }
  .bottom-pillars-band .pillar-card:nth-child(3) .pillar-img-wrap img { animation-delay: 1.6s; }

  @keyframes gentleFloat {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-6px); }
  }

  @media (max-width: 960px) {
    .metrics-grid { grid-template-columns: repeat(2, 1fr); gap: 28px 16px; }
    .metric-item:nth-child(2) { border-right: none; }
    .metric-item { padding: 0 12px; }
    .estimator-body { grid-template-columns: 1fr; padding: 28px 24px; gap: 28px; }
    .pillars-grid { grid-template-columns: 1fr; max-width: 480px; }
    .bottom-pillars-band .pillar-card { margin: 0 !important; }
  }

  @media (max-width: 540px) {
    .metrics-grid { grid-template-columns: 1fr; text-align: center; }
    .metric-item {
      border-right: none;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      padding: 0 0 18px 0;
    }
    .metric-item:last-child { border-bottom: none; padding-bottom: 0; }
  }

  /* ==========================================================================
     3. FEATURED GLOBAL PROGRAMS
     ========================================================================== */
  .sovereign-programs-v3 {
    --prog-gold: #a67c32;
    --prog-gold-dark: #8c6626;
    --navy-accent: #1d4e89;
    background-color: #ffffff;
    padding: 80px 0;
    overflow: hidden;
    position: relative;
    z-index: 5;
  }

  .sovereign-programs-v3 .section-kicker-badge {
    display: inline-block;
    background-color: var(--prog-gold);
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.02em;
    padding: 7px 20px;
    border-radius: 3px;
    margin-bottom: 14px;
  }

  .sovereign-programs-v3 .section-heading {
    font-size: clamp(28px, 3.5vw, 38px);
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 10px;
    letter-spacing: -0.02em;
  }

  .sovereign-programs-v3 .section-subtext {
    font-size: 14.5px;
    color: var(--text-muted);
    max-width: 720px;
    margin: 0 auto 52px;
    line-height: 1.6;
  }

  .sovereign-programs-v3 .program-showcase-card {
    background: #ffffff;
    border: 1px solid #ececec;
    border-radius: 28px;
    padding: 40px 42px 38px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.06);
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.3s ease;
  }

  .sovereign-programs-v3 .program-showcase-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 44px rgba(166, 124, 50, 0.12);
    border-color: rgba(166, 124, 50, 0.45);
  }

  .sovereign-programs-v3 .card-top-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    margin-bottom: 20px;
  }

  .sovereign-programs-v3 .pathway-label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #6d6d6d;
    margin-bottom: 4px;
  }

  .sovereign-programs-v3 .program-name {
    font-size: clamp(24px, 2.4vw, 30px);
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
    letter-spacing: -0.015em;
  }

  .sovereign-programs-v3 .program-icon-wrap {
    width: 64px;
    height: 58px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sovereign-programs-v3 .program-showcase-card:hover .program-icon-wrap {
    transform: scale(1.06);
  }

  .sovereign-programs-v3 .program-icon-wrap svg {
    width: 62px;
    height: 56px;
    stroke: var(--prog-gold);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .sovereign-programs-v3 .program-summary {
    font-size: 14.5px;
    line-height: 1.55;
    color: #666666;
    max-width: 390px;
    margin-bottom: 26px;
  }

  .sovereign-programs-v3 .spec-table-list { margin-bottom: 34px; }

  .sovereign-programs-v3 .spec-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 13px 2px;
    border-bottom: 1px solid #e5e5e5;
  }

  .sovereign-programs-v3 .spec-label {
    font-size: 14px;
    font-weight: 700;
    color: var(--text-dark);
    flex-shrink: 0;
  }

  .sovereign-programs-v3 .spec-value {
    font-size: 14px;
    color: #1c1c1c;
    text-align: left;
    flex: 0 0 60%;
  }

  .sovereign-programs-v3 .btn-card-pill {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    max-width: 330px;
    margin: 0 auto;
    background-color: var(--prog-gold);
    color: #ffffff;
    font-size: 14.5px;
    font-weight: 600;
    text-decoration: none;
    padding: 13px 24px;
    border-radius: 999px;
    transition: background-color 0.28s ease, transform 0.25s ease, box-shadow 0.28s ease;
  }

  .sovereign-programs-v3 .btn-card-pill:hover {
    background-color: var(--prog-gold-dark);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(166, 124, 50, 0.25);
  }

  .sovereign-programs-v3 .btn-portfolio-all {
    display: inline-block;
    border: 1.3px solid var(--navy-accent);
    color: var(--navy-accent);
    background-color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    padding: 11px 32px;
    border-radius: 999px;
    transition: all 0.28s ease;
  }

  .sovereign-programs-v3 .btn-portfolio-all:hover {
    background-color: transparent;
    color: #6d6d6d;
    border-color: #c9cfd6;
    transform: translateY(-1px);
  }

  @media (max-width: 767px) {
    .sovereign-programs-v3 { padding: 60px 0; }
    .sovereign-programs-v3 .program-showcase-card { padding: 28px 22px; border-radius: 22px; }
    .sovereign-programs-v3 .spec-row { flex-direction: column; align-items: flex-start; gap: 4px; }
    .sovereign-programs-v3 .spec-value { flex: none; }
  }

  /* ==========================================================================
     4. SOVEREIGN TAX & MOBILITY MATRIX
     ========================================================================== */
  .sovereign-matrix-section {
    background-color: var(--bg-surface);
    padding: 85px 0;
    overflow: hidden;
    position: relative;
    z-index: 5;
  }

  .sovereign-matrix-section .matrix-badge {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.04em;
    padding: 6px 18px;
    border-radius: 3px;
    margin-bottom: 16px;
  }

  .sovereign-matrix-section .matrix-heading {
    font-size: clamp(26px, 3.5vw, 38px);
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 12px;
    letter-spacing: -0.015em;
  }

  .sovereign-matrix-section .matrix-subtext {
    font-size: 14.5px;
    color: var(--text-muted);
    max-width: 680px;
    margin: 0 auto 36px;
    line-height: 1.6;
  }

  .sovereign-matrix-section .matrix-controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 14px;
    margin-bottom: 22px;
  }

  .sovereign-matrix-section .filter-group {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .sovereign-matrix-section .filter-btn {
    background: #ffffff;
    border: 1px solid #d5d8df;
    color: #444952;
    font-size: 12.5px;
    font-weight: 600;
    padding: 7px 16px;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.25s ease;
  }

  .sovereign-matrix-section .filter-btn:hover {
    border-color: var(--gold-primary);
    color: var(--gold-primary);
  }

  .sovereign-matrix-section .filter-btn.active {
    background-color: var(--navy-pill);
    border-color: var(--navy-pill);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(11, 60, 109, 0.2);
  }

  .sovereign-matrix-section .search-box {
    position: relative;
    min-width: 240px;
  }

  .sovereign-matrix-section .search-input {
    width: 100%;
    background: #ffffff;
    border: 1px solid #d5d8df;
    border-radius: 50px;
    padding: 8px 16px 8px 36px;
    font-size: 13px;
    color: var(--text-dark);
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
  }

  .sovereign-matrix-section .search-input:focus {
    outline: none;
    border-color: var(--gold-primary);
    box-shadow: 0 0 0 3px rgba(166, 130, 62, 0.14);
  }

  .sovereign-matrix-section .search-icon {
    position: absolute;
    left: 13px;
    top: 50%;
    transform: translateY(-50%);
    width: 14px;
    height: 14px;
    stroke: #7a808c;
    fill: none;
    stroke-width: 2;
    pointer-events: none;
  }

  .sovereign-matrix-section .matrix-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
  }

  .sovereign-matrix-section .matrix-table thead th {
    background-color: #dcdad3;
    color: var(--text-dark);
    font-size: 13.5px;
    font-weight: 700;
    padding: 15px 20px;
    white-space: nowrap;
  }

  .sovereign-matrix-section .matrix-table thead th:last-child { text-align: right; }

  .sovereign-matrix-section .matrix-table tbody tr {
    border-bottom: 1px solid #cfd3dc;
    transition: background-color 0.25s ease;
  }

  .sovereign-matrix-section .matrix-table tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.72);
  }

  .sovereign-matrix-section .matrix-table tbody td {
    padding: 18px 20px;
    font-size: 14px;
    color: #24272e;
    vertical-align: middle;
  }

  .sovereign-matrix-section .jurisdiction-name {
    font-weight: 700;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .sovereign-matrix-section .jurisdiction-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background-color: var(--gold-primary);
    flex-shrink: 0;
  }

  .sovereign-matrix-section .type-pill {
    display: inline-block;
    background-color: var(--navy-pill);
    color: #ffffff;
    font-size: 12.5px;
    font-weight: 500;
    padding: 6px 18px;
    border-radius: 50px;
    min-width: 132px;
    text-align: center;
  }

  .sovereign-matrix-section .rating-cell {
    text-align: right;
    font-weight: 700;
    font-size: 14px;
    color: var(--gold-primary);
    letter-spacing: 0.03em;
  }

  .sovereign-matrix-section .empty-state {
    display: none;
    text-align: center;
    padding: 32px 16px;
    font-size: 14px;
    color: var(--text-muted);
  }

  @media (max-width: 820px) {
    .sovereign-matrix-section .matrix-controls { flex-direction: column; align-items: stretch; }
    .sovereign-matrix-section .search-box { width: 100%; }
    .sovereign-matrix-section .matrix-table thead { display: none; }
    .sovereign-matrix-section .matrix-table,
    .sovereign-matrix-section .matrix-table tbody,
    .sovereign-matrix-section .matrix-table tr,
    .sovereign-matrix-section .matrix-table td { display: block; width: 100%; }
    .sovereign-matrix-section .matrix-table tbody tr {
      background: #ffffff;
      border: 1px solid #dcdfe6;
      border-radius: 14px;
      margin-bottom: 16px;
      padding: 16px 18px;
    }
    .sovereign-matrix-section .matrix-table tbody td {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
      border-bottom: 1px solid #eef0f4;
      text-align: right;
      gap: 12px;
    }
    .sovereign-matrix-section .matrix-table tbody td:first-child { font-size: 16px; }
    .sovereign-matrix-section .matrix-table tbody td:last-child { border-bottom: none; }
    .sovereign-matrix-section .matrix-table tbody td::before {
      content: attr(data-label);
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      color: #6b7280;
    }
    .sovereign-matrix-section .matrix-table tbody td:first-child::before { display: none; }
  }

  /* ==========================================================================
     5. 6-STEP ROADMAP SECTION
     ========================================================================== */
  .sovereign-roadmap-section {
    background-color: #ffffff;
    padding: 85px 0;
    overflow: hidden;
    position: relative;
    z-index: 5;
  }

  .sovereign-roadmap-section .roadmap-badge {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    padding: 6px 18px;
    border-radius: 3px;
    margin-bottom: 16px;
  }

  .sovereign-roadmap-section .roadmap-heading {
    font-size: clamp(26px, 3.5vw, 38px);
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 12px;
  }

  .sovereign-roadmap-section .roadmap-subtext {
    font-size: 14.5px;
    color: var(--text-muted);
    max-width: 680px;
    margin: 0 auto 56px;
    line-height: 1.6;
  }

  .sovereign-roadmap-section .roadmap-wrapper {
    position: relative;
    max-width: 1180px;
    margin: 0 auto;
  }

  .sovereign-roadmap-section .wave-track-svg {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 500px;
    pointer-events: none;
    z-index: 1;
  }

  .sovereign-roadmap-section .wave-path {
    fill: none;
    stroke: var(--gold-primary);
    stroke-width: 18;
    stroke-dasharray: 2600;
    stroke-dashoffset: 2600;
    transition: stroke-dashoffset 2.1s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sovereign-roadmap-section.wave-drawn .wave-path {
    stroke-dashoffset: 0;
  }

  .sovereign-roadmap-section .steps-grid {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    height: 525px;
  }

  .sovereign-roadmap-section .step-col {
    position: relative;
    height: 100%;
  }

  .sovereign-roadmap-section .step-text-box {
    position: absolute;
    left: 10px;
    right: 10px;
  }

  .sovereign-roadmap-section .step-title {
    font-size: 16px;
    font-weight: 700;
    color: var(--text-dark);
    line-height: 1.25;
    margin-bottom: 8px;
    text-align: center;
  }

  .sovereign-roadmap-section .step-desc {
    font-size: 12px;
    line-height: 1.5;
    color: var(--text-muted);
    margin: 0;
    text-align: center;
  }

  .sovereign-roadmap-section .step-col.is-odd .step-text-box { top: 0; }
  .sovereign-roadmap-section .step-col.is-odd .step-medallion { top: 225px; }
  .sovereign-roadmap-section .step-col.is-even .step-medallion { top: 65px; }
  .sovereign-roadmap-section .step-col.is-even .step-text-box { top: 260px; }

  .sovereign-roadmap-section .step-medallion {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 140px;
    height: 140px;
    border-radius: 50%;
    background: radial-gradient(circle at 28% 28%, #ffffff 0%, #f1f2f5 72%, #e5e7eb 100%);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.2), inset 0 2px 5px rgba(163, 156, 156, 0.95);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.4s ease;
  }

  .sovereign-roadmap-section .step-col:hover .step-medallion {
    transform: translateX(-50%) scale(1.05);
    box-shadow: 0 20px 38px rgba(166, 130, 62, 0.28), inset 0 2px 5px #ffffff;
  }

  .sovereign-roadmap-section .step-medallion svg {
    width: 50px;
    height: 50px;
    stroke: #33353a;
    fill: none;
    stroke-width: 1.65;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke 0.3s ease, transform 0.35s ease;
  }

  .sovereign-roadmap-section .step-col:hover .step-medallion svg {
    stroke: var(--gold-primary);
    transform: scale(1.06);
  }

  .sovereign-roadmap-section .step-footer-marker {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .sovereign-roadmap-section .stem-line {
    width: 1px;
    background-color: #d8dbe0;
  }

  .sovereign-roadmap-section .step-col.is-odd .stem-line { height: 68px; }
  .sovereign-roadmap-section .step-col.is-even .stem-line { height: 30px; }

  .sovereign-roadmap-section .step-num-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #d8dbe0;
    background-color: #ffffff;
    color: var(--text-dark);
    font-size: 14px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
  }

  .sovereign-roadmap-section .step-col:hover .step-num-circle {
    background-color: var(--gold-primary);
    border-color: var(--gold-primary);
    color: #ffffff;
    transform: scale(1.1);
  }

  @media (max-width: 1180px) {
    .sovereign-roadmap-section .wave-track-svg { display: none; }
    .sovereign-roadmap-section .steps-grid {
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      height: auto;
      padding: 0 12px;
    }
    .sovereign-roadmap-section .step-col {
      background: #faf9f6;
      border: 1px solid #e8e3d8;
      border-top: 4px solid var(--gold-primary);
      border-radius: 18px;
      padding: 28px 22px;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: auto;
    }
    .sovereign-roadmap-section .step-footer-marker,
    .sovereign-roadmap-section .step-medallion,
    .sovereign-roadmap-section .step-text-box {
      position: static;
      transform: none !important;
    }
    .sovereign-roadmap-section .step-footer-marker { order: 1; margin-bottom: 16px; }
    .sovereign-roadmap-section .stem-line { display: none; }
    .sovereign-roadmap-section .step-medallion { order: 2; width: 108px; height: 108px; margin-bottom: 18px; }
    .sovereign-roadmap-section .step-text-box { order: 3; }
  }

  @media (max-width: 767px) { .sovereign-roadmap-section .steps-grid { grid-template-columns: repeat(2, 1fr); gap: 18px; } }
  @media (max-width: 520px) { .sovereign-roadmap-section .steps-grid { grid-template-columns: 1fr; } }

  /* ==========================================================================
     6. LEGACY STRUCTURING (HEADER, PILLARS & CHECKLIST)
     ========================================================================== */
  .sovereign-legacy-header-div {
    background-color: var(--bg-surface);
    padding: 80px 0 44px;
    position: relative;
    z-index: 5;
  }

  .sovereign-legacy-header-div .header-inner { max-width: 820px; }

  .sovereign-legacy-header-div .legacy-badge {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 12.5px;
    font-weight: 600;
    padding: 7px 20px;
    border-radius: 2px;
    margin-bottom: 24px;
  }

  .sovereign-legacy-header-div .legacy-title {
    font-size: clamp(28px, 3.6vw, 40px);
    font-weight: 700;
    color: var(--text-dark);
    line-height: 1.2;
    margin: 0 0 18px 0;
  }

  .sovereign-legacy-header-div .legacy-description {
    font-size: clamp(15px, 1.4vw, 17px);
    color: #6c7078;
    line-height: 1.68;
    margin: 0;
    max-width: 780px;
  }

  .sovereign-legacy-pillars-div {
    background-color: var(--bg-surface);
    padding: 20px 0 64px;
    position: relative;
    z-index: 5;
  }

  .sovereign-legacy-pillars-div .pillar-card {
    padding: 28px 24px;
    border-radius: 16px;
    background-color: transparent;
    border: 1px solid transparent;
    transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sovereign-legacy-pillars-div .pillar-card:hover {
    background-color: #ffffff;
    border-color: rgba(166, 130, 62, 0.25);
    transform: translateY(-6px);
    box-shadow: 0 16px 36px rgba(14, 16, 21, 0.06);
  }

  .sovereign-legacy-pillars-div .bi-icon-box {
    width: 64px;
    height: 64px;
    border-radius: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: flex-start;
    margin-bottom: 18px;
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sovereign-legacy-pillars-div .pillar-card:hover .bi-icon-box {
    justify-content: center;
    background-color: var(--gold-soft);
    transform: translateY(-3px) rotate(-6deg) scale(1.06);
  }

  .sovereign-legacy-pillars-div .pillar-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-dark);
    line-height: 1.35;
    margin: 0 0 12px 0;
    transition: color 0.3s ease;
  }

  .sovereign-legacy-pillars-div .pillar-card:hover .pillar-title { color: var(--gold-primary); }

  .sovereign-legacy-pillars-div .pillar-desc {
    font-size: 14.5px;
    color: #6c7078;
    line-height: 1.65;
    margin: 0;
  }

  .sovereign-legacy-pillars-div .pillar-accent-line {
    width: 0;
    height: 2.5px;
    background-color: var(--gold-primary);
    border-radius: 2px;
    margin-top: 18px;
    transition: width 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sovereign-legacy-pillars-div .pillar-card:hover .pillar-accent-line { width: 44px; }

  .sovereign-legacy-checklist-div {
    background-color: var(--bg-surface);
    padding: 10px 0 85px;
    position: relative;
    z-index: 5;
  }

  .sovereign-legacy-checklist-div .visual-stage {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--bg-surface);
  }

  .sovereign-legacy-checklist-div .visual-stage img {
    max-width: 430px;
    width: 100%;
    height: auto;
    mix-blend-mode: multiply;
    background: transparent;
    filter: contrast(1.03);
  }

  .sovereign-legacy-checklist-div .checklist-card {
    background: linear-gradient(145deg, var(--navy-card) 0%, var(--navy-deep) 100%);
    color: #ffffff;
    border-radius: 24px;
    padding: 46px 52px;
    box-shadow: 0 22px 48px rgba(5, 40, 76, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.08);
    position: relative;
    overflow: hidden;
  }

  .sovereign-legacy-checklist-div .checklist-card::after {
    content: "";
    position: absolute;
    top: -65px;
    right: -65px;
    width: 210px;
    height: 210px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(166, 130, 62, 0.2) 0%, transparent 70%);
    pointer-events: none;
  }

  .sovereign-legacy-checklist-div .checklist-heading {
    font-size: clamp(22px, 2.5vw, 27px);
    font-weight: 700;
    margin: 0 0 22px 0;
  }

  .sovereign-legacy-checklist-div .checklist-items {
    list-style: none;
    padding: 0;
    margin: 0 0 32px 0;
  }

  .sovereign-legacy-checklist-div .checklist-items li {
    position: relative;
    padding-left: 22px;
    font-size: 16px;
    color: rgba(255, 255, 255, 0.94);
    line-height: 1.5;
    margin-bottom: 13px;
    transition: transform 0.25s ease;
  }

  .sovereign-legacy-checklist-div .checklist-items li:hover { transform: translateX(6px); }

  .sovereign-legacy-checklist-div .checklist-items li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 9px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: #ffffff;
    transition: background-color 0.25s ease, transform 0.25s ease;
  }

  .sovereign-legacy-checklist-div .checklist-items li:hover::before {
    background-color: var(--gold-primary);
    transform: scale(1.3);
  }

  .sovereign-legacy-checklist-div .btn-structure-app {
    display: inline-block;
    background-color: var(--gold-primary);
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    padding: 13px 34px;
    border-radius: 50px;
    transition: all 0.3s ease;
  }

  .sovereign-legacy-checklist-div .btn-structure-app:hover {
    background-color: var(--gold-dark);
    transform: translateY(-2px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.26);
  }

  @media (max-width: 991px) {
    .sovereign-legacy-checklist-div .visual-stage { margin-bottom: 28px; }
    .sovereign-legacy-checklist-div .checklist-card { padding: 36px 32px; }
  }

  /* ==========================================================================
     7. REGULATORY GOVERNANCE
     ========================================================================== */
  .sovereign-governance-div {
    background-color: #ffffff;
    padding: 82px 0;
    position: relative;
    z-index: 5;
  }

  .sovereign-governance-div .governance-badge {
    display: inline-block;
    background-color: #a67c32;
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
    padding: 7px 22px;
    border-radius: 3px;
    margin-bottom: 16px;
  }

  .sovereign-governance-div .governance-title {
    font-size: clamp(28px, 3.6vw, 40px);
    font-weight: 700;
    color: var(--text-dark);
    margin: 0 0 12px 0;
  }

  .sovereign-governance-div .governance-subtitle {
    font-size: 15px;
    color: #6f7278;
    max-width: 720px;
    margin: 0 auto 50px;
    line-height: 1.6;
  }

  .sovereign-governance-div .governance-card {
    background-color: #ffffff;
    border: 1px solid #f0f1f4;
    border-radius: 16px;
    padding: 26px 24px 30px;
    height: 100%;
    box-shadow: 0 10px 26px rgba(14, 16, 21, 0.055);
    transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sovereign-governance-div .governance-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 38px rgba(166, 124, 50, 0.12);
    border-color: rgba(166, 124, 50, 0.35);
  }

  .sovereign-governance-div .card-top-row {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 14px;
  }

  .sovereign-governance-div .card-heading {
    font-size: 17px;
    font-weight: 700;
    color: var(--text-dark);
    line-height: 1.32;
    margin: 0;
    transition: color 0.3s ease;
  }

  .sovereign-governance-div .governance-card:hover .card-heading { color: #a67c32; }

  .sovereign-governance-div .governance-icon-box {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sovereign-governance-div .governance-icon-box svg { width: 38px; height: 38px; }

  .sovereign-governance-div .governance-card:hover .governance-icon-box {
    background-color: var(--gold-soft);
    transform: scale(1.08) rotate(-4deg);
  }

  .sovereign-governance-div .card-divider {
    width: 28px;
    height: 1.5px;
    background-color: #d6d8dd;
    margin-bottom: 16px;
    transition: width 0.35s cubic-bezier(0.22, 1, 0.36, 1), background-color 0.3s ease;
  }

  .sovereign-governance-div .governance-card:hover .card-divider {
    width: 46px;
    background-color: #a67c32;
  }

  .sovereign-governance-div .card-copy {
    font-size: 13.5px;
    color: #787b82;
    line-height: 1.62;
    margin: 0;
  }

  /* ==========================================================================
     8. CLIENT TRANSFORMATIONS (GLASS CARDS)
     ========================================================================== */
  .transformations-section {
    padding: 90px 0 110px;
    background-color: #f0f1f6;
    position: relative;
    z-index: 5;
  }

  .badge-proven {
    display: inline-block;
    background-color: var(--gold-accent);
    color: #ffffff;
    font-size: 0.82rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    padding: 8px 34px;
    border-radius: 2px;
    margin-bottom: 18px;
  }

  .section-heading-main {
    font-size: clamp(1.85rem, 3.2vw, 2.5rem);
    font-weight: 700;
    color: var(--text-dark);
    letter-spacing: -0.02em;
    margin-bottom: 12px;
  }

  .section-subtitle-main {
    font-size: 0.95rem;
    color: #626773;
    max-width: 660px;
    margin: 0 auto 75px;
    line-height: 1.6;
  }

  .card-stack-wrapper {
    position: relative;
    height: 100%;
    padding-top: 24px;
  }

  .corner-svg-behind {
    position: absolute;
    top: -32px;
    right: 16px;
    width: 96px;
    height: 96px;
    z-index: 1;
    pointer-events: none;
    transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .card-stack-wrapper:hover .corner-svg-behind {
    transform: translateY(-20px);
  }

  .glass-case-card {
    position: relative;
    z-index: 2;
    height: 100%;
    background: rgba(255, 255, 255, 0.6);
    /* backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px); */
    border: 1px solid rgba(255, 255, 255, 0.85);
    border-radius: 18px;
    padding: 36px 40px 38px;
    box-shadow: 0 14px 36px rgba(17, 24, 39, 0.045);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: box-shadow 0.35s ease, background 0.35s ease;
  }

  .card-stack-wrapper:hover .glass-case-card {
    background: rgba(255, 255, 255, 0.82);
    box-shadow: 0 20px 44px rgba(17, 24, 39, 0.075);
  }

  .role-tag {
    display: inline-block;
    align-self: flex-start;
    background-color: var(--gold-accent);
    color: #ffffff;
    font-size: 0.76rem;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 2px;
    margin-bottom: 22px;
  }

  .card-title-h3 {
    position: relative;
    font-size: clamp(1.32rem, 2vw, 1.62rem);
    font-weight: 700;
    color: var(--text-dark);
    line-height: 1.35;
    padding-bottom: 16px;
    margin-bottom: 20px;
  }

  .card-title-h3::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: var(--gold-accent);
    transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .card-stack-wrapper:hover .card-title-h3::after { width: 56px; }

  .card-body-copy {
    font-size: 0.86rem;
    color: #787d87;
    line-height: 1.68;
    margin-bottom: 30px;
  }

  .card-meta-footer {
    font-size: 0.79rem;
    color: #848994;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px;
    margin-top: auto;
  }

  .meta-dot { color: var(--gold-accent); font-weight: 800; }
  .meta-timeframe { color: var(--gold-accent); font-weight: 700; }

  /* ==========================================================================
     9. ELIGIBILITY REVIEW FORM SECTION
     ========================================================================== */
  .eligibility-section {
    background-color: #ffffff;
    padding: 95px 0;
    border-top: 1px solid #eceef4;
    position: relative;
    z-index: 5;
  }

  .eligibility-title {
    font-size: clamp(1.75rem, 2.8vw, 2.3rem);
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 14px;
  }

  .eligibility-desc {
    font-size: 0.92rem;
    color: #7c818c;
    line-height: 1.65;
    max-width: 520px;
    margin-bottom: 36px;
  }

  .input-icon-group {
    position: relative;
    display: flex;
    align-items: center;
  }

  .input-icon-group .field-icon {
    position: absolute;
    left: 15px;
    width: 17px;
    height: 17px;
    color: #6d727d;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .eligibility-input {
    width: 100%;
    height: 46px;
    padding: 10px 16px 10px 42px;
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--text-dark);
    background-color: #ffffff;
    border: 1px solid var(--border-light);
    border-radius: 6px;
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
  }

  .eligibility-input:focus,
  .eligibility-textarea:focus {
    outline: none;
    border-color: var(--gold-accent);
    box-shadow: 0 0 0 3px rgba(179, 139, 63, 0.12);
  }

  .eligibility-textarea {
    width: 100%;
    min-height: 92px;
    padding: 14px 16px;
    font-size: 0.85rem;
    color: var(--text-dark);
    background-color: #ffffff;
    border: 1px solid var(--border-light);
    border-radius: 6px;
    resize: vertical;
  }

  .btn-confidential {
    background-color: var(--gold-accent);
    color: #ffffff;
    font-size: 0.84rem;
    font-weight: 600;
    padding: 11px 26px;
    border: none;
    border-radius: 5px;
    transition: all 0.25s ease;
  }

  .btn-confidential:hover {
    background-color: #9a7632;
    color: #ffffff;
    transform: translateY(-1px);
    box-shadow: 0 8px 20px rgba(179, 139, 63, 0.24);
  }

  .eligibility-visual-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
  }

  .eligibility-visual-img {
    max-width: 100%;
    width: 470px;
    height: auto;
    border-radius: 12px;
    object-fit: contain;
    background: transparent;
    mix-blend-mode: multiply;
  }
</style>

<!-- AMBIENT RANDOM FLOATING OBJECTS LAYER -->
<div class="ambient-objects-canvas" id="ambientSovereignObjects" aria-hidden="true"></div>

<!-- =========================================================
    1. HERO SECTION
    ========================================================= -->
<section class="sovereign-hero">
  <div class="hero-container">
    <div class="hero-content">
      <p class="hero-eyebrow" data-reveal="fade-up" data-delay="100">
        Private Wealth &amp; Sovereign Advisory
      </p>

      <div class="hero-divider" data-reveal="scale-x" data-delay="220"></div>

      <h1 class="hero-title" data-reveal="fade-up" data-delay="340">
        Strategic Citizenship &amp; <br>
        <span class="highlight-gold">Residency Optimization</span>
      </h1>

      <p class="hero-description" data-reveal="fade-up" data-delay="460">
        Protect family capital, acquire sovereign mobility, and legally optimize multi-jurisdictional tax liabilities with tailor-made dual citizenship pathways.
      </p>

      <ul class="hero-highlights" data-reveal="fade-up" data-delay="580">
        <li>Second Passport Programs</li>
        <li>Cross-Border Tax Structuring</li>
        <li>Generational Wealth Protection</li>
      </ul>

      <div class="hero-actions" data-reveal="fade-up" data-delay="700">
        <a href="#consultation" class="hero-btn">Request Consultation</a>
        <span class="hero-note">Discreet, bespoke advisory for HNW families</span>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    2. ECOSYSTEM METRICS & ESTIMATOR
    ========================================================= -->
<section class="sovereign-ecosystem-section">
  <div class="top-metrics-band">
    <div class="eco-container">
      <div class="metrics-grid">
        <div class="metric-item" data-reveal="fade-down" data-delay="0">
          <h3 class="metric-number"><span class="counter" data-target="2.4" data-decimals="1" data-prefix="$" data-suffix="B+">$0B+</span></h3>
          <p class="metric-label">Capital Placement<br>Guided</p>
        </div>
        <div class="metric-item" data-reveal="fade-down" data-delay="120">
          <h3 class="metric-number"><span class="counter" data-target="100" data-decimals="0" data-suffix="%">0%</span></h3>
          <p class="metric-label">Regulatory<br>Compliance Record</p>
        </div>
        <div class="metric-item" data-reveal="fade-down" data-delay="240">
          <h3 class="metric-number"><span class="counter" data-target="170" data-decimals="0" data-suffix="+">0+</span></h3>
          <p class="metric-label">Global<br>Destinations Access</p>
        </div>
        <div class="metric-item" data-reveal="fade-down" data-delay="360">
          <h3 class="metric-number"><span class="counter" data-target="35" data-decimals="0" data-suffix="+">0+</span></h3>
          <p class="metric-label">Sovereign<br>Jurisdictions</p>
        </div>
      </div>
    </div>
  </div>

  <div class="estimator-overlay-wrapper">
    <div class="estimator-card" data-reveal="zoom-in" data-delay="160">
      <div class="estimator-header">
        <span class="suite-badge">Interactive Suite</span>
        <h2 class="estimator-title">Residency &amp; Citizenship Investment Estimator</h2>
        <p class="estimator-subtitle">
          Simulate required capital thresholds, processing lead times, and global mobility advantages based on your strategic sovereign goals.
        </p>
      </div>

      <div class="estimator-body">
        <div class="estimator-controls">
          <div class="control-group">
            <label class="control-label" for="jurisdictionSelect">Select Preferred Jurisdiction</label>
            <select id="jurisdictionSelect" class="styled-select">
              <option value="stkitts" selected>St. Kitts &amp; Nevis (CBI – Fast Pass)</option>
              <option value="portugal">Portugal (Golden Visa – EU Residency)</option>
              <option value="malta">Malta (MEIN – Direct EU Citizenship)</option>
              <option value="uae">United Arab Emirates (10-Year Golden Visa)</option>
              <option value="greece">Greece (Real Estate Residency Pathway)</option>
            </select>
          </div>

          <div class="control-group">
            <label class="control-label">Primary Family Size</label>
            <div class="family-toggle-group" id="familySizeGroup">
              <button type="button" class="family-btn" data-size="single">Single</button>
              <button type="button" class="family-btn" data-size="couple">Couple</button>
              <button type="button" class="family-btn active" data-size="family4">Family of 4</button>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="objectiveSelect">Primary Strategic Objective</label>
            <select id="objectiveSelect" class="styled-select">
              <option value="tax" selected>Tax Efficiency &amp; Asset Protection</option>
              <option value="mobility">Global Visa-Free Mobility &amp; Travel</option>
              <option value="legacy">Generational Succession &amp; Education</option>
              <option value="planb">Geopolitical Diversification (Plan B)</option>
            </select>
          </div>
        </div>

        <div class="parameters-box">
          <h3 class="parameters-heading">Estimated Parameters</h3>
          <div class="param-row">
            <span class="param-key">Min Capital Outlay:</span>
            <span class="param-val" id="outlayVal">$250,000 USD</span>
          </div>
          <div class="param-row">
            <span class="param-key">Avg Processing Time:</span>
            <span class="param-val" id="timeVal">4 - 6 Months</span>
          </div>
          <div class="param-row">
            <span class="param-key">Visa-Free Score:</span>
            <span class="param-val" id="visaVal">157 Countries</span>
          </div>
          <div class="param-row">
            <span class="param-key">Physical Stay Requirement:</span>
            <span class="param-val" id="stayVal">0 Days/Year</span>
          </div>
          <a href="#consultation" class="quotation-btn">Request Formal Quotation</a>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom-pillars-band">
    <div class="pillars-grid">
      <div class="pillar-card" data-reveal="fade-up" data-delay="100">
        <div class="pillar-img-wrap text-start">
          <img src="<?= $img; ?>/passport.png" alt="Sovereign Mobility & Second Citizenship" loading="lazy">
        </div>
      </div>
      <div class="pillar-card" data-reveal="fade-up" data-delay="220">
        <div class="pillar-img-wrap">
          <img src="<?= $img; ?>/home-location.png" alt="Qualifying Real Estate & Domicile" loading="lazy">
        </div>
      </div>
      <div class="pillar-card" data-reveal="fade-up" data-delay="340">
        <div class="pillar-img-wrap text-end">
          <img src="<?= $img; ?>/targeting.png" alt="Precision Tax & Wealth Optimization" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    3. FEATURED GLOBAL PROGRAMS
    ========================================================= -->
<section class="sovereign-programs-v3 py-5">
  <div class="container">
    <div class="text-center" data-reveal="fade-up" data-delay="0">
      <span class="section-kicker-badge">Sovereign Portfolio</span>
      <h2 class="section-heading">Featured Global Programs</h2>
      <p class="section-subtext">
        Simulate required capital thresholds, processing lead times, and global mobility advantages based on your strategic sovereign goals.
      </p>
    </div>

    <div class="row g-4 g-xl-5 justify-content-center align-items-stretch">
      <div class="col-lg-6 col-md-10" data-reveal="fade-up" data-delay="120">
        <div class="program-showcase-card">
          <div>
            <div class="card-top-header">
              <div>
                <span class="pathway-label">Citizenship</span>
                <h3 class="program-name">Malta (MEIN)</h3>
              </div>
              <div class="program-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 64 58">
                  <circle cx="32" cy="25" r="13" />
                  <ellipse cx="32" cy="25" rx="6" ry="13" />
                  <line x1="19" y1="25" x2="45" y2="25" />
                  <path d="M22 18h20M22 32h20" />
                  <path d="M24 46c-7.5-3.2-12-10-12-18.5 0-4.5 1.6-8.5 4.2-11.5" />
                  <path d="M13 35l-3.5-2M12.2 28.5l-3.8-1.2M13.5 22l-3-2.5M16.5 41l-3-2" />
                  <path d="M40 46c7.5-3.2 12-10 12-18.5 0-4.5-1.6-8.5-4.2-11.5" />
                  <path d="M51 35l3.5-2M51.8 28.5l3.8-1.2M50.5 22l3-2.5M47.5 41l3-2" />
                </svg>
              </div>
            </div>
            <p class="program-summary">
              Direct citizenship by naturalization for exceptional services via direct investment in Europe.
            </p>
            <div class="spec-table-list">
              <div class="spec-row"><span class="spec-label">Access</span><span class="spec-value">185+ Countries (Incl. US, UK)</span></div>
              <div class="spec-row"><span class="spec-label">Min. Investment</span><span class="spec-value">€690,000</span></div>
              <div class="spec-row"><span class="spec-label">Timeline</span><span class="spec-value">12 - 36 Months</span></div>
              <div class="spec-row"><span class="spec-label">Benefit</span><span class="spec-value">Full EU Settlement Rights</span></div>
            </div>
          </div>
          <a href="#consultation" class="btn-card-pill">Explore Malta Programme</a>
        </div>
      </div>

      <div class="col-lg-6 col-md-10" data-reveal="fade-up" data-delay="240">
        <div class="program-showcase-card">
          <div>
            <div class="card-top-header">
              <div>
                <span class="pathway-label">Residency</span>
                <h3 class="program-name">Portugal Golden Visa</h3>
              </div>
              <div class="program-icon-wrap" aria-hidden="true">
                <svg viewBox="0 0 64 58">
                  <path d="M11 27L32 9l21 18" />
                  <path d="M43 13v-4h5v8" />
                  <path d="M17 23v27h30V23" />
                  <circle cx="25.5" cy="31" r="2.8" />
                  <path d="M21 44v-3.5a4.5 4.5 0 0 1 9 0V44" />
                  <circle cx="38.5" cy="31" r="2.8" />
                  <path d="M34 44v-3.5a4.5 4.5 0 0 1 9 0V44" />
                  <circle cx="32" cy="35.5" r="2.1" />
                  <path d="M28.8 44v-2.2a3.2 3.2 0 0 1 6.4 0V44" />
                </svg>
              </div>
            </div>
            <p class="program-summary">
              Flexible European Union residency pathway via regulated investment funds with minimal physical stay requirements.
            </p>
            <div class="spec-table-list">
              <div class="spec-row"><span class="spec-label">Access</span><span class="spec-value">191 Countries (Schengen Area)</span></div>
              <div class="spec-row"><span class="spec-label">Min. Investment</span><span class="spec-value">€500,000</span></div>
              <div class="spec-row"><span class="spec-label">Timeline</span><span class="spec-value">8 - 12 Months</span></div>
              <div class="spec-row"><span class="spec-label">Benefit</span><span class="spec-value">5-Year Path to EU Citizenship</span></div>
            </div>
          </div>
          <a href="#consultation" class="btn-card-pill">Explore Portugal Programme</a>
        </div>
      </div>
    </div>

    <div class="text-center mt-5" data-reveal="fade-up" data-delay="320">
      <a href="#consultation" class="btn-portfolio-all">Compare All 35+ Programmes</a>
    </div>
  </div>
</section>

<!-- =========================================================
     4. SOVEREIGN TAX & MOBILITY MATRIX
     ========================================================= -->
<section class="sovereign-matrix-section py-5">
  <div class="container">
    <div class="text-center" data-reveal="fade-up" data-delay="0">
      <span class="matrix-badge">Strategic Comparison</span>
      <h2 class="matrix-heading">Sovereign Tax &amp; Mobility Matrix</h2>
      <p class="matrix-subtext">
        Cross-jurisdictional evaluation of physical residency duties, personal tax structures, and capital safeguards.
      </p>
    </div>

    <div class="matrix-controls" data-reveal="fade-up" data-delay="100">
      <div class="filter-group" role="group" aria-label="Filter jurisdictions">
        <button type="button" class="filter-btn active" data-filter="all">All Jurisdictions</button>
        <button type="button" class="filter-btn" data-filter="citizenship">Citizenship</button>
        <button type="button" class="filter-btn" data-filter="residency">Residency &amp; Visa</button>
        <button type="button" class="filter-btn" data-filter="zero-tax">0% Income Tax</button>
      </div>

      <div class="search-box">
        <svg class="search-icon" viewBox="0 0 24 24" aria-hidden="true">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <input type="text" class="search-input" id="matrixSearchInput" placeholder="Search country or tax benefit..." aria-label="Search matrix">
      </div>
    </div>

    <div class="matrix-wrapper" data-reveal="fade-up" data-delay="200">
      <table class="matrix-table" id="sovereignMatrixTable">
        <thead>
          <tr>
            <th>Jurisdiction</th>
            <th>Type</th>
            <th>Physical Presence</th>
            <th>Personal Tax Structure</th>
            <th>Wealth Preservation Rating</th>
          </tr>
        </thead>
        <tbody>
          <tr data-tags="residency zero-tax">
            <td data-label="Jurisdiction"><span class="jurisdiction-name"><span class="jurisdiction-dot"></span>UAE (Dubai)</span></td>
            <td data-label="Type"><span class="type-pill">Golden Visa</span></td>
            <td data-label="Physical Presence">None Required</td>
            <td data-label="Personal Tax Structure">0% Personal Income Tax</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AAA+</td>
          </tr>
          <tr data-tags="citizenship">
            <td data-label="Jurisdiction"><span class="jurisdiction-name"><span class="jurisdiction-dot"></span>Malta</span></td>
            <td data-label="Type"><span class="type-pill">EU Citizenship</span></td>
            <td data-label="Physical Presence">12 Months (Residency Phase)</td>
            <td data-label="Personal Tax Structure">Remittance Basis Available</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AAA</td>
          </tr>
          <tr data-tags="citizenship zero-tax">
            <td data-label="Jurisdiction"><span class="jurisdiction-name"><span class="jurisdiction-dot"></span>St. Kitts &amp; Nevis</span></td>
            <td data-label="Type"><span class="type-pill">CBI Passport</span></td>
            <td data-label="Physical Presence">0 Days</td>
            <td data-label="Personal Tax Structure">No Income / Wealth Tax</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AA+</td>
          </tr>
          <tr data-tags="residency zero-tax">
            <td data-label="Jurisdiction"><span class="jurisdiction-name"><span class="jurisdiction-dot"></span>Monaco</span></td>
            <td data-label="Type"><span class="type-pill">Residency</span></td>
            <td data-label="Physical Presence">183 Days / Year</td>
            <td data-label="Personal Tax Structure">0% Personal Income Tax</td>
            <td data-label="Wealth Preservation Rating" class="rating-cell">AAA+</td>
          </tr>
        </tbody>
      </table>
      <div class="empty-state" id="matrixEmptyState">
        No matching jurisdictions found. Try clearing your filter or search term.
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    5. 6-STEP SOVEREIGN ACQUISITION ROADMAP
    ========================================================= -->
<section class="sovereign-roadmap-section py-5">
  <div class="container">
    <div class="text-center" data-reveal="fade-down" data-delay="0">
      <span class="roadmap-badge">Execution Protocol</span>
      <h2 class="roadmap-heading">Sovereign Acquisition Roadmap</h2>
      <p class="roadmap-subtext">
        A structured six-stage legal and compliance architecture ensuring discreet, timely sovereign status delivery.
      </p>
    </div>

    <div class="roadmap-wrapper">
      <svg class="wave-track-svg" viewBox="0 0 1180 500" preserveAspectRatio="none" aria-hidden="true">
        <path class="wave-path" d="
          M 9 296
          A 89.333 89.333 0 0 0 187.666 296
          L 187.666 152
          A 107.333 107.333 0 0 1 402.333 152
          L 402.333 296
          A 89.333 89.333 0 0 0 581 296
          L 581 152
          A 107.333 107.333 0 0 1 795.666 152
          L 795.666 296
          A 89.333 89.333 0 0 0 974.333 296
          L 974.333 152
          A 98.333 98.333 0 0 1 1171 152
        " />
      </svg>

      <div class="steps-grid">
        <div class="step-col is-odd" data-reveal="fade-up" data-delay="100">
          <div class="step-text-box">
            <h3 class="step-title">Pre-Clearance &amp;<br>KYB</h3>
            <p class="step-desc">Internal compliance screen using Interpol &amp; World-Check databases before signing mandates, ensuring 99.8% approval guarantee.</p>
          </div>
          <div class="step-medallion">
            <svg viewBox="0 0 48 48"><path d="M12 8h18l6 6v14" /><path d="M30 8v6h6" /><path d="M12 8v30h14" /><circle cx="21" cy="19" r="3.5" /><path d="M19 22l-1 4 3-1.5 3 1.5-1-4" /><line x1="16" y1="30" x2="25" y2="30" /><circle cx="33" cy="34" r="6.5" /><path d="M30.2 34l2 2 3.8-4" /></svg>
          </div>
          <div class="step-footer-marker"><div class="stem-line"></div><div class="step-num-circle">1</div></div>
        </div>

        <div class="step-col is-even" data-reveal="zoom-in" data-delay="220">
          <div class="step-medallion">
            <svg viewBox="0 0 48 48"><path d="M12 22h24l-2 16H14L12 22z" /><path d="M17 22V11h14v11" /><circle cx="24" cy="16" r="2.5" /><path d="M20 21a4 4 0 0 1 8 0" /><circle cx="24" cy="29" r="3" /></svg>
          </div>
          <div class="step-text-box">
            <h3 class="step-title">Portfolio &amp;<br>Asset Selection</h3>
            <p class="step-desc">Curating qualifying real estate investments, government fund placements, or capital contributions matching financial return targets.</p>
          </div>
          <div class="step-footer-marker"><div class="stem-line"></div><div class="step-num-circle">2</div></div>
        </div>

        <div class="step-col is-odd" data-reveal="fade-up" data-delay="340">
          <div class="step-text-box">
            <h3 class="step-title">Legal Dossier<br>Compilation</h3>
            <p class="step-desc">Complete legal preparation, official translations, apostilles, and notarizations by licensed immigration attorneys.</p>
          </div>
          <div class="step-medallion">
            <svg viewBox="0 0 48 48"><path d="M11 8h16l5 5v15" /><path d="M11 8v28h12" /><circle cx="19" cy="15" r="3" /><path d="M17.8 15l1 1 2-2" /><line x1="15" y1="22" x2="25" y2="22" /><line x1="15" y1="27" x2="22" y2="27" /><rect x="24" y="35" width="12" height="3.5" rx="1" /><path d="M27 25l5-5 4 4-5 5z" /><line x1="33" y1="26" x2="39" y2="32" /></svg>
          </div>
          <div class="step-footer-marker"><div class="stem-line"></div><div class="step-num-circle">3</div></div>
        </div>

        <div class="step-col is-even" data-reveal="zoom-in" data-delay="460">
          <div class="step-medallion">
            <svg viewBox="0 0 48 48"><polygon points="24,11 12,18 36,18" /><line x1="24" y1="6" x2="24" y2="11" /><path d="M24 6h5l-1 2.5 1 2.5h-5" /><line x1="16" y1="18" x2="16" y2="25" /><line x1="24" y1="18" x2="24" y2="25" /><line x1="32" y1="18" x2="32" y2="25" /><path d="M11 29l6-3 7 4 7-4 6 3" /><path d="M15 32l9 7 9-7" /></svg>
          </div>
          <div class="step-text-box">
            <h3 class="step-title">Government<br>Due Diligence</h3>
            <p class="step-desc">Formal submission to government authorities and state intelligence units for final background vetting.</p>
          </div>
          <div class="step-footer-marker"><div class="stem-line"></div><div class="step-num-circle">4</div></div>
        </div>

        <div class="step-col is-odd" data-reveal="fade-up" data-delay="580">
          <div class="step-text-box">
            <h3 class="step-title">Capital<br>Disbursement</h3>
            <p class="step-desc">Secure escrow release or direct sovereign bank placement upon receipt of official Approval-in-Principle.</p>
          </div>
          <div class="step-medallion">
            <svg viewBox="0 0 48 48"><path d="M13 10h16v24H15a3 3 0 0 1-2-5V10z" /><line x1="17" y1="15" x2="25" y2="15" /><line x1="17" y1="20" x2="23" y2="20" /><circle cx="31" cy="24" r="5.5" /><path d="M31 21v6M29.5 22.5c0-1 3-1 3 0s-3 1.5-3 2.5 3 1 3 0" /><rect x="25" y="31" width="12" height="3.5" rx="1" /><rect x="25" y="34.5" width="12" height="3.5" rx="1" /></svg>
          </div>
          <div class="step-footer-marker"><div class="stem-line"></div><div class="step-num-circle">5</div></div>
        </div>

        <div class="step-col is-even" data-reveal="zoom-in" data-delay="700">
          <div class="step-medallion">
            <svg viewBox="0 0 48 48"><rect x="9" y="15" width="22" height="18" rx="2.5" /><circle cx="16" cy="22" r="2.5" /><path d="M12.5 29a3.5 3.5 0 0 1 7 0" /><line x1="22" y1="21" x2="26" y2="21" /><line x1="22" y1="26" x2="25" y2="26" /><path d="M32 14l7 2.5v6.5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9v-6.5L32 14z" fill="#f4f5f7" /><path d="M29.5 22.5l1.8 1.8 3.2-3.5" /></svg>
          </div>
          <div class="step-text-box">
            <h3 class="step-title">Passport &amp;<br>Identity Handover</h3>
            <p class="step-desc">Hand delivery of naturalization certificates, passports, national IDs, and ongoing family legacy maintenance.</p>
          </div>
          <div class="step-footer-marker"><div class="stem-line"></div><div class="step-num-circle">6</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    6. LEGACY STRUCTURING (HEADER, PILLARS & CHECKLIST)
    ========================================================= -->
<section class="sovereign-legacy-header-div">
  <div class="container">
    <div class="header-inner">
      <div data-reveal="fade-right" data-delay="0"><span class="legacy-badge">Legacy Structuring</span></div>
      <h2 class="legacy-title" data-reveal="fade-up" data-delay="120">Multi-Generational Family Inclusion</h2>
      <p class="legacy-description" data-reveal="fade-up" data-delay="240">
        A single application can safeguard your extended lineage. Most tier-1 sovereign programs accommodate dependent family structures under unified application umbrellas.
      </p>
    </div>
  </div>
</section>

<section class="sovereign-legacy-pillars-div">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-reveal="fade-up" data-delay="0">
        <div class="pillar-card h-100">
          <div class="bi-icon-box" aria-hidden="true">
            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_36720_1884)">
              <path d="M85.0295 54.6193C84.6553 51.5533 83.4394 49.1505 80.7003 47.4771C78.7158 46.262 77.1089 46.0729 69.5091 44.1808V43.7835H77.095C78.9344 43.7835 80.4337 42.2985 80.4564 40.4643C81.4139 24.2272 81.5583 22.367 81.493 21.5996C81.493 20.8875 80.916 20.3105 80.2039 20.3105C79.4918 20.3105 78.9148 20.8875 78.9148 21.5996V22.8225C77.8336 41.1604 77.8786 40.3474 77.8786 40.4217C77.8786 40.8464 77.5197 41.2052 77.095 41.2052H69.5091V40.8716C69.9249 40.5937 73.0057 39.2354 75.2427 35.6112C77.7203 31.6132 77.3752 28.234 77.3796 24.9616C77.3796 23.6504 76.3568 22.5841 75.0509 22.5341H75.0507C65.491 22.1687 60.5857 16.75 59.3097 15.0977C58.918 14.5903 58.3255 14.2868 57.6846 14.2648C57.0463 14.2454 56.4296 14.5054 56.0032 14.9855C53.997 17.2438 51.7279 17.9582 50.5538 18.1831C49.4901 18.3869 48.7179 19.3222 48.7179 20.4073C48.7225 28.5097 48.7079 28.0633 48.7296 28.6332C48.7641 33.6652 52.1507 38.7228 56.538 40.8464V41.2047H48.843C48.4183 41.2047 48.0596 40.8459 48.0596 40.4211C48.0596 40.346 48.1027 41.127 47.0211 22.784C47.0196 22.7604 47.0175 22.7364 47.0149 22.7132C46.9996 22.5793 45.5756 9.29951 53.0316 7.66102C53.4068 7.57869 53.7258 7.33291 53.9015 6.99122C53.9326 6.93107 57.1126 0.993289 67.371 2.991C71.4541 3.76959 77.5637 8.63177 78.7112 15.7876C78.8237 16.4904 79.4841 16.9677 80.1881 16.8564C80.891 16.7438 81.3695 16.0824 81.2568 15.3794C80.7604 11.9899 79.0731 8.41177 76.5218 5.69649L76.4302 5.59852C73.8703 2.88736 70.0605 0.888101 67.8629 0.460303C64.4049 -0.21276 59.4109 -0.466792 55.2531 2.14588C53.4625 3.27064 52.4185 4.56847 51.9354 5.27986C48.1316 6.35992 45.6398 9.75171 44.713 15.1293C44.0506 18.9721 44.4029 22.5385 44.4497 22.9696C45.6571 41.616 45.2431 40.9182 45.9421 42.1127C42.2789 41.5237 38.5504 42.5708 35.725 45.2417L34.5981 44.9611C34.567 44.9461 31.7304 43.5885 31.463 43.4606V40.8441C37.8478 37.6765 38.8694 31.3396 38.9311 31.2231C39.1549 30.2152 39.2774 29.149 39.2774 28.0788V28.0662C41.6053 27.559 43.3358 25.7121 43.3358 23.5167C43.3358 22.6073 43.0379 21.7582 42.5245 21.0386C42.5457 17.6484 42.6416 15.6541 41.9156 12.9804C41.7298 12.5072 41.1213 9.51263 38.4231 6.29392C38.4189 6.28877 38.4145 6.28344 38.4103 6.27846C33.4235 0.347381 24.8229 -1.91656 17.1083 1.8427C11.2547 4.76148 7.36742 10.7816 7.36742 17.5803C7.36759 18.7117 7.36707 20.9016 7.36793 21.0388C5.45152 23.7247 7.08778 27.2983 10.6159 28.0666C10.7336 33.9115 13.8775 38.5236 18.492 40.8747V43.4312L15.2281 44.9936C11.6722 45.9891 8.91327 46.2493 6.80143 47.8152C4.24341 49.7682 3.34708 51.5377 2.97033 54.6321C-0.0876738 82.2926 -0.0163455 80.6132 0.00462334 81.8447C-0.0326736 85.1297 2.26358 87.9957 6.06306 87.9957L17.3321 87.9956C18.0441 87.9956 18.6211 87.4186 18.6211 86.7065C18.6211 85.9944 18.0441 85.4174 17.3321 85.4174H12.4884L13.7667 61.2399C13.8043 60.529 13.2584 59.9223 12.5474 59.8847C11.8391 59.8451 11.2296 60.3929 11.1922 61.1039L10.9233 66.189L4.34791 65.4993L4.3694 65.3078C5.69645 54.7992 5.21949 53.207 6.99307 51.098L7.00786 51.0803C9.16747 48.5302 12.5916 48.4739 15.2427 47.6464L19.2055 52.7192C20.1531 53.9326 21.9526 54.0412 23.0394 52.9466L23.6574 52.3237V58.5617C23.6574 59.2738 24.2344 59.8508 24.9465 59.8508C25.6586 59.8508 26.2355 59.2738 26.2355 58.5617V52.3239L26.8534 52.9466C27.3354 53.4321 27.9902 53.703 28.6702 53.703C28.7205 53.703 28.7712 53.7014 28.8218 53.6987C29.5551 53.655 30.2351 53.2982 30.6873 52.7193L32.4987 50.4007C31.7476 52.8202 32.0112 54.6378 31.9557 55.6655C29.4847 57.9806 30.7449 61.7784 34.2348 62.553C34.7317 65.4613 36.4968 68.0692 39.2872 69.597V71.1647C34.7398 72.3895 31.1634 72.4398 29.545 76.2962C29.4756 76.4619 29.4288 76.5999 29.3797 76.7585C29.3137 76.9675 29.2518 77.2133 29.2179 77.3762C29.0194 78.3374 29.0117 78.9453 28.2544 85.4174H23.3477C22.6356 85.4174 22.0586 85.9944 22.0586 86.7065C22.0586 87.4186 22.6356 87.9956 23.3477 87.9956H29.4049H29.4207C29.4218 87.9956 29.4228 87.9957 29.4237 87.9957C29.4249 87.9957 29.4261 87.9956 29.4273 87.9956H58.5748C58.5748 87.9956 58.5772 87.9957 58.5784 87.9957C58.5784 87.9957 58.5804 87.9956 58.5813 87.9956H58.5968H64.0371C64.7492 87.9956 65.3262 87.4186 65.3262 86.7065C65.3262 85.9944 64.7492 85.4174 64.0371 85.4174H59.7473C59.0474 80.2765 59.1139 78.0677 58.5302 76.484C57.7544 74.3677 55.8662 72.9525 53.8207 72.4355L48.7146 71.1643V69.5743C51.3996 68.1022 53.2363 65.4907 53.726 62.5527C53.7437 62.5427 56.7273 61.9977 57.2305 59.1831C57.3739 58.3986 57.2649 57.57 56.8699 56.8041C59.3241 56.3048 61.7237 54.4909 63.0207 53.3666C69.5904 59.0653 75.4907 58.3517 75.9723 48.4464C76.9176 48.7397 81.384 49.4236 82.2767 53.742C82.3437 54.0658 82.4207 54.5252 82.4689 54.9181L83.6524 65.4957L77.1285 66.1801L76.8602 61.1034C76.8228 60.3924 76.2076 59.8431 75.505 59.8841C74.7939 59.9218 74.2481 60.5285 74.2857 61.2394L75.5638 85.4169H70.0524C69.3403 85.4169 68.7634 85.9939 68.7634 86.706C68.7634 87.4181 69.3403 87.995 70.0524 87.995L81.9374 87.9952C83.6739 87.9952 85.1646 87.4145 86.2486 86.3157C87.363 85.1861 88.016 83.5137 87.996 81.8404C88.0129 80.7544 88.1014 82.284 85.0295 54.6193ZM10.708 68.7588L9.87113 85.4174H6.06289C3.82094 85.4174 2.63191 83.9501 2.58241 81.8201C2.56694 80.9074 2.61593 81.2163 4.06122 68.0613L10.708 68.7588ZM39.2773 25.3755V21.6587C41.2459 22.4708 41.2463 24.5632 39.2773 25.3755ZM10.6155 25.3759C8.64566 24.5636 8.64548 22.4707 10.6155 21.6584V25.3759ZM11.7298 18.8327C11.1018 18.8506 10.5012 18.9637 9.94555 19.156C9.96188 17.807 9.86236 16.5848 10.2121 14.7545C10.3615 14.3549 10.9295 9.96913 14.9853 6.36491C15.5282 5.9445 16.4199 5.00658 18.7194 3.92909C23.6746 1.66618 29.7365 2.02248 34.907 6.36508C38.4038 9.47156 39.1687 12.995 39.4254 13.648C40.1449 16.3012 39.8928 18.1757 39.9469 19.1562C39.3914 18.9637 38.791 18.8508 38.1634 18.8329C37.8364 18.6482 37.5339 18.3922 37.2959 18.1301C35.5383 16.1051 37.0291 14.5369 35.1438 12.9635C33.8146 11.8543 32.5417 12.2781 30.1892 12.5858C19.233 13.7671 17.0345 11.0564 14.7491 12.9635C14.075 13.5261 13.6507 14.3396 13.6218 15.3487C13.5185 18.0858 11.8415 18.7068 11.7298 18.8327ZM13.1936 28.0791C13.1936 26.6445 13.1936 23.4253 13.1936 20.9609C14.1694 20.2578 14.887 19.6878 15.5289 18.3257C15.8972 17.5473 16.1662 16.5657 16.2025 15.3485C16.2109 15.0147 16.5248 14.7596 16.8666 14.8143C30.4788 16.6266 33.6487 13.704 33.6903 15.3478C33.7721 18.2298 35.3563 19.8148 35.3817 19.8575C35.8549 20.38 36.1584 20.5713 36.6986 20.9607C36.6988 22.3014 36.6983 26.7839 36.6991 26.9262C36.6139 27.2985 37.6149 34.6154 30.3363 38.5254H30.3365C30.3183 38.5329 28.4404 39.6118 25.7246 39.8029C25.0422 39.8476 24.3705 39.8182 24.3879 39.8186C18.0099 39.521 13.1936 34.2314 13.1936 28.0791ZM21.2245 51.1157L17.7535 46.6724L19.4996 45.8368L23.0995 49.2263L21.2245 51.1157ZM24.9465 47.4242L21.07 43.7744V41.8769C23.6404 42.5998 26.343 42.5696 28.8539 41.868V43.745L24.9465 47.4242ZM28.6684 51.1157L26.7936 49.2263L30.4142 45.8172L32.1563 46.6511L28.6684 51.1157ZM34.0961 59.7686C32.9198 59.0966 33.0203 57.8802 34.0961 57.2685V59.7686ZM54.4767 36.1191C50.398 31.5871 51.2994 27.4989 51.2957 20.6634C52.7736 20.3415 55.2983 19.4622 57.587 17.0712C59.4188 19.2815 64.8821 24.6739 74.8012 25.1048C74.7957 28.5312 74.8108 27.9196 74.7896 28.6114L74.7891 28.6075C74.6735 29.0705 74.9105 33.328 70.5763 37.1036C70.5586 37.118 70.4097 37.2394 70.4276 37.225C66.3935 40.4839 60.7844 40.6253 56.6788 37.9558C56.4193 37.7877 54.7682 36.3982 54.4767 36.1191ZM49.8478 74.1037L49.9028 74.1175C52.5067 74.8284 53.3827 74.8297 54.5046 75.5016C56.8532 76.9089 56.1907 78.645 57.1386 85.4176H53.7074L53.5548 82.6353C53.5158 81.9242 52.908 81.3787 52.1971 81.4189C51.4863 81.4579 50.9416 82.0659 50.9808 82.7766L51.1257 85.4174H36.9114L37.0563 82.7766C37.0955 82.0657 36.5508 81.4578 35.8399 81.4189C35.1251 81.3804 34.5211 81.9244 34.4823 82.6353L34.3297 85.4176H30.8636C31.7177 78.0906 31.3562 76.7845 33.4975 75.5016C34.5674 74.86 35.2628 74.8698 38.1539 74.1037C39.6267 75.7699 41.7528 76.7422 44.0009 76.7422C46.2491 76.7422 48.3752 75.7701 49.8478 74.1037ZM41.865 70.5536C42.3743 70.6648 42.9303 70.7424 43.509 70.7693C43.5403 70.7709 43.5711 70.7719 43.6022 70.7728L43.6941 70.7759C44.6257 70.8006 45.5304 70.696 46.1365 70.5444C46.2002 71.0397 45.8537 72.4804 46.9316 73.2615C45.1597 74.4636 42.8451 74.4659 41.0698 73.2615C42.1445 72.4826 41.8037 71.027 41.865 70.5536ZM51.2728 61.316C51.2675 61.4104 51.2611 61.4994 51.2536 61.5852C51.0081 64.2199 49.3598 66.4462 47.0815 67.5133C47.0234 67.5206 43.1366 69.6006 39.3947 66.583C39.3532 66.5254 37.1383 64.9747 36.7352 61.8463C36.6258 61.0061 36.6959 60.3355 36.6742 56.7533C42.3343 57.9241 46.2793 55.6509 48.0054 53.3967C49.15 55.0819 50.453 55.8061 51.286 56.1132C51.2836 61.6318 51.2939 60.9328 51.2728 61.316ZM53.4266 54.4262C52.9934 53.8934 52.4828 53.7943 52.2784 53.7293C51.7104 53.5476 50.6195 52.9777 49.6934 51.2007C48.9695 49.8119 46.9794 49.864 46.3149 51.2617C45.5609 52.8472 42.1203 55.6051 36.2971 54.0125C35.7334 53.8591 35.1246 53.9876 34.6617 54.4101C34.6186 54.4159 34.5761 54.4235 34.5335 54.4304C34.537 53.5839 34.5437 53.5514 34.543 53.5688C34.8737 45.7017 44.2733 41.6281 50.2379 46.9017C50.2371 46.9084 50.2529 46.9076 50.2522 46.9143C51.7761 48.2691 52.8176 50.0209 53.2587 52.1991C53.4752 53.3329 53.4171 54.2489 53.4266 54.4262ZM52.2439 45.25C51.5951 44.6352 51.0777 44.2364 50.3555 43.7839H56.538V44.1811L52.2439 45.25ZM53.8643 59.7705V57.2687C54.3236 57.5313 54.7131 57.9865 54.7131 58.5196C54.7131 59.1889 54.2053 59.5148 53.8643 59.7705ZM56.0047 54.3443C55.9786 54.1488 56.1453 52.3524 55.3383 50.0247C56.6946 51.1866 58.2723 52.0248 59.9733 52.4806C58.7434 53.3639 57.259 54.2071 56.0047 54.3443ZM55.9842 46.9756L57.6569 46.5593C57.7327 46.5404 57.8066 46.5146 57.8778 46.4825C58.6299 46.1415 59.1158 45.2742 59.1158 44.273L59.116 41.8611C61.4483 42.5232 63.9122 42.6516 66.9308 41.8754V44.273C66.9308 45.2744 67.4169 46.1418 68.1692 46.4825C68.2403 46.5148 68.3142 46.5404 68.3899 46.5593L70.0583 46.9748C66.276 51.4004 59.7746 51.4097 55.9842 46.9756ZM71.2289 54.2083C69.735 54.8315 67.3803 53.4316 66.052 52.4712C68.789 51.7123 71.1165 50.0518 72.789 47.6545L73.4177 47.8111C73.3103 51.403 72.5437 53.66 71.2289 54.2083ZM84.4136 84.5055C83.0469 85.8906 81.1917 85.2528 78.1455 85.4174L77.2648 68.7584L83.9391 68.0582L85.3914 81.0375C85.5001 82.3194 85.3242 83.5825 84.4136 84.5055Z" fill="#808080"/>
              </g>
              <defs>
              <clipPath id="clip0_36720_1884">
              <rect width="88" height="88" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <h3 class="pillar-title">Dependent Children &amp;<br>Siblings</h3>
          <p class="pillar-desc">Include unmarried children up to age 30 and unmarried, childless siblings under qualifying programs.</p>
          <div class="pillar-accent-line"></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-reveal="fade-up" data-delay="140">
        <div class="pillar-card h-100">
          <div class="bi-icon-box" aria-hidden="true">
            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M71.0724 45.3848C70.2979 45.3848 69.6699 46.0127 69.6699 46.7873V49.1846C69.6699 49.9592 70.2979 50.5871 71.0724 50.5871C71.847 50.5871 72.4749 49.9592 72.4749 49.1846V46.7873C72.4749 46.0127 71.847 45.3848 71.0724 45.3848Z" fill="#808080"/>
            <path d="M83.5939 45.3848C82.8193 45.3848 82.1914 46.0127 82.1914 46.7873V49.1846C82.1914 49.9592 82.8193 50.5871 83.5939 50.5871C84.3685 50.5871 84.9964 49.9592 84.9964 49.1846V46.7873C84.9964 46.0127 84.3685 45.3848 83.5939 45.3848Z" fill="#808080"/>
            <path d="M78.6494 52.9345C78.2997 53.2487 77.848 53.4218 77.3772 53.4218C76.8803 53.4218 76.4103 53.2317 76.0533 52.8865C75.496 52.348 74.6084 52.363 74.0701 52.9197C73.5316 53.4766 73.5466 54.3645 74.1033 54.9029C74.9862 55.7565 76.1489 56.2268 77.3772 56.2268C78.5414 56.2268 79.6591 55.7986 80.5244 55.021C81.1004 54.5031 81.1478 53.6164 80.6301 53.0402C80.1123 52.4641 79.2254 52.4168 78.6494 52.9345Z" fill="#808080"/>
            <path d="M14.4884 35.375C13.7139 35.375 13.0859 36.0029 13.0859 36.7775V39.6318C13.0859 40.4064 13.7139 41.0343 14.4884 41.0343C15.263 41.0343 15.8909 40.4064 15.8909 39.6318V36.7775C15.8909 36.0029 15.263 35.375 14.4884 35.375Z" fill="#808080"/>
            <path d="M29.3966 41.0343C30.1712 41.0343 30.7991 40.4064 30.7991 39.6318V36.7775C30.7991 36.0029 30.1712 35.375 29.3966 35.375C28.6221 35.375 27.9941 36.0029 27.9941 36.7775V39.6318C27.9941 40.4064 28.6221 41.0343 29.3966 41.0343Z" fill="#808080"/>
            <path d="M25.5634 46.3807C26.1394 45.8628 26.1868 44.9761 25.6691 44.3999C25.1512 43.8237 24.2644 43.7765 23.6884 44.2942C23.223 44.7125 22.6217 44.9427 21.9949 44.9427C21.3337 44.9427 20.7079 44.6898 20.2329 44.2302C19.6757 43.6917 18.7881 43.7067 18.2497 44.2634C17.7112 44.8203 17.7262 45.7083 18.2831 46.2466C19.284 47.2147 20.6023 47.7477 21.9951 47.7477C23.3149 47.7479 24.5822 47.2623 25.5634 46.3807Z" fill="#808080"/>
            <path d="M44.8341 46.6248C45.6087 46.6248 46.2366 45.9969 46.2366 45.2223V42.5763C46.2366 41.8018 45.6087 41.1738 44.8341 41.1738C44.0596 41.1738 43.4316 41.8018 43.4316 42.5763V45.2223C43.4316 45.9971 44.0596 46.6248 44.8341 46.6248Z" fill="#808080"/>
            <path d="M57.6095 46.6248C58.3841 46.6248 59.012 45.9969 59.012 45.2223V42.5763C59.012 41.8018 58.3841 41.1738 57.6095 41.1738C56.835 41.1738 56.207 41.8018 56.207 42.5763V45.2223C56.207 45.9971 56.835 46.6248 57.6095 46.6248Z" fill="#808080"/>
            <path d="M51.2716 52.8465C52.5205 52.8465 53.7196 52.387 54.6479 51.5528C55.2241 51.0351 55.2713 50.1482 54.7535 49.5722C54.2358 48.996 53.3489 48.9486 52.7729 49.4667C52.3604 49.8374 51.8271 50.0415 51.2716 50.0415C50.6855 50.0415 50.1306 49.8171 49.7095 49.4099C49.1526 48.8714 48.2646 48.8865 47.7263 49.443C47.1878 49.9999 47.2028 50.8877 47.7595 51.4262C48.7064 52.342 49.9538 52.8465 51.2716 52.8465Z" fill="#808080"/>
            <path d="M91.4482 51.1383H91.902C94.1616 51.1383 96 49.2998 96 47.0403C96 44.7807 94.1616 42.9423 91.902 42.9423H91.5675C91.4897 37.3713 88.1966 32.5675 83.4636 30.3003C82.896 29.7884 82.2268 29.3768 81.4768 29.102C81.273 29.0273 81.1196 28.874 81.045 28.6702C80.0859 26.054 77.4724 24.4147 74.6904 24.6845C71.7913 24.9652 69.4836 27.2731 69.2029 30.172C69.1607 30.6074 69.1654 31.0385 69.213 31.4598C68.283 32.1082 67.4321 32.8625 66.6817 33.7085C65.7804 25.975 59.193 19.9523 51.2216 19.9523C48.5816 19.9523 46.0948 20.6155 43.9146 21.7801C43.2244 18.8 41.6344 16.2742 39.33 14.6515C36.5936 12.7246 33.1369 12.1912 30.0833 13.2247C29.9897 13.2563 29.5498 13.3912 29.0833 13.5327C28.2977 12.9402 27.4599 12.4049 26.5845 11.9362C22.0039 9.48366 16.7096 8.95828 12.0589 10.4947C11.3233 10.7377 10.9241 11.5308 11.1671 12.2663C11.4101 13.0019 12.2034 13.4013 12.9388 13.1581C16.8054 11.8807 21.4118 12.3483 25.2606 14.4091C26.2011 14.9127 27.0896 15.5056 27.9017 16.1712C28.263 16.4675 28.7484 16.5642 29.1956 16.4296C29.4523 16.3523 30.7447 15.9623 30.9831 15.8817C33.1912 15.1343 35.7082 15.5318 37.7152 16.9452C39.7393 18.3706 41.0113 20.6778 41.3809 23.4676C38.694 25.6662 36.7526 28.744 36 32.2576C29.9756 30.8182 26.6884 23.6288 26.6543 23.5529C26.4458 23.0836 25.9972 22.7658 25.4854 22.7245C24.9737 22.6825 24.48 22.925 24.1987 23.3549C19.4419 30.6284 7.72856 33.1816 6.43856 33.443H4.74506C3.9165 30.2995 3.11119 26.6772 3.91444 23.3506C4.59319 20.5398 6.0915 17.9377 8.13338 16.0235C8.6985 15.4938 8.72719 14.6062 8.19731 14.041C7.66744 13.4757 6.77981 13.4472 6.21488 13.9771C3.77869 16.2608 1.99331 19.3559 1.18781 22.6923C0.227813 26.668 1.12369 30.7147 2.04338 34.1988C0.813 35.0137 0 36.4098 0 37.9928C0 40.502 2.04131 42.5433 4.55044 42.5433H5.48869C6.31313 47.4503 9.28706 51.6374 13.4057 54.1004C11.5277 55.073 9.82369 56.374 8.39887 57.9368C8.40281 57.938 8.40675 57.9395 8.41069 57.9406C5.53631 61.1007 3.78225 65.2968 3.78225 69.8948V84.9672C3.78225 85.7418 4.41019 86.3697 5.18475 86.3697L92.5316 86.3693C93.3062 86.3693 93.9341 85.7414 93.9341 84.9668V79.7877C93.9341 79.0132 93.3062 78.3852 92.5316 78.3852C91.7571 78.3852 91.1291 79.0132 91.1291 79.7877V83.5643H87.1575V71.8482C87.1575 71.0737 86.5296 70.4457 85.755 70.4457C84.9804 70.4457 84.3525 71.0737 84.3525 71.8482V83.5643H70.3121V71.8482C70.3121 71.0737 69.6842 70.4457 68.9096 70.4457C68.1351 70.4457 67.5071 71.0737 67.5071 71.8482V83.5643H63.5353V73.3398C63.5353 68.3692 66.1798 64.0085 70.134 61.5803C72.2475 62.8246 74.7075 63.5403 77.3327 63.5403C79.9592 63.5403 82.4198 62.8225 84.5344 61.5773C88.4871 64.0062 91.1291 68.3699 91.1291 73.3398C91.1291 74.1143 91.7571 74.7423 92.5316 74.7423C93.3062 74.7423 93.9341 74.1143 93.9341 73.3398C93.9341 67.7609 91.1663 62.8182 86.9333 59.8066C89.3544 57.5917 91.0061 54.5521 91.4482 51.1383ZM91.5711 45.7473H91.902C92.6149 45.7473 93.195 46.3272 93.195 47.0403C93.195 47.7533 92.6149 48.3333 91.902 48.3333H91.5711V45.7473ZM5.17238 39.7383H4.55044C3.588 39.7383 2.805 38.9553 2.805 37.9928C2.805 37.0304 3.588 36.2474 4.55044 36.2474H5.17238V39.7383ZM71.9946 30.442C72.1438 28.9004 73.419 27.6252 74.9606 27.476C76.4492 27.3325 77.8952 28.2277 78.4112 29.6354C78.7691 30.6121 79.5347 31.3775 80.5114 31.7356C81.9291 32.2553 82.8171 33.6743 82.6708 35.1862C82.5214 36.7278 81.2464 38.003 79.7048 38.1522C78.1909 38.2975 76.7739 37.4105 76.2542 35.9928C75.8962 35.0163 75.1307 34.2507 74.1542 33.8926C72.7361 33.373 71.8481 31.954 71.9946 30.442ZM38.4576 35.521C38.4576 28.483 44.1834 22.7572 51.2216 22.7572C58.2596 22.7572 63.9855 28.483 63.9855 35.521V38.1862C54.4217 36.1362 52.6524 31.4478 52.5684 31.2076C52.4087 30.589 51.8612 30.1561 51.2214 30.1561C50.5817 30.1561 50.0342 30.589 49.8744 31.2076C49.7904 31.4478 48.0214 36.1362 38.4576 38.1862V35.521ZM38.4576 41.0482C45.9561 39.5662 49.5538 36.5427 51.2214 34.3923C52.8353 36.4733 56.2573 39.3719 63.2724 40.8998C63.1562 41.6309 63.0941 42.38 63.0941 43.1433V49.3017C63.0941 49.5305 63.1007 49.7577 63.1114 49.9838C61.2525 54.7373 56.6256 58.1148 51.2216 58.1148C44.1836 58.1148 38.4577 52.3889 38.4577 45.3509V41.0482H38.4576ZM61.824 59.9045C61.6892 60.7077 61.1602 61.5359 60.3345 62.2368C58.6978 63.6263 56.358 64.0748 54.6448 63.3275C53.6254 62.8827 52.9725 62.053 52.7269 60.9042L52.8576 60.8328C55.8936 60.514 58.6718 59.3193 60.9352 57.506C61.5786 58.1296 61.9665 59.0557 61.824 59.9045ZM41.5063 57.5058C43.7704 59.3195 46.5495 60.5146 49.5863 60.8332L49.7162 60.904C49.4706 62.0528 48.8177 62.8825 47.7982 63.3273C46.0849 64.0747 43.7451 63.6262 42.1084 62.2368C41.2828 61.5359 40.7539 60.7075 40.6191 59.9043C40.4766 59.0562 40.8639 58.1302 41.5063 57.5058ZM36.0208 48.7066C36.3332 50.1222 36.8361 51.4668 37.5058 52.7099C36.4847 52.819 35.5417 52.8278 34.8159 52.804L35.7039 49.1851C35.8119 49.0274 35.9179 48.8682 36.0208 48.7066ZM8.06306 39.7707V35.9583C11.3032 35.1901 20.0606 32.6495 25.1749 26.7072C26.8108 29.3982 30.2957 33.9357 35.6644 35.0549C35.6597 35.2102 35.6526 35.3648 35.6526 35.5212V41.9365C34.6095 48.5648 28.8594 53.6506 21.9427 53.6506C14.2896 53.6504 8.06306 47.4241 8.06306 39.7707ZM16.8804 55.6696C18.4778 56.1794 20.1786 56.4556 21.9427 56.4556C23.5605 56.4556 25.1246 56.2233 26.6049 55.7918C27.7676 56.2083 28.8647 56.7644 29.8749 57.4405C28.2167 60.4465 25.0624 62.3362 21.5657 62.3362C18.0681 62.3362 14.9134 60.4465 13.2549 57.4407C14.3676 56.696 15.5854 56.0969 16.8804 55.6696ZM36.5434 83.5645H31.9837V73.0214C31.9837 72.2468 31.3558 71.6189 30.5813 71.6189C29.8067 71.6189 29.1787 72.2468 29.1787 73.0214V83.5645H13.9519V73.0214C13.9519 72.2468 13.3239 71.6189 12.5494 71.6189C11.7748 71.6189 11.1469 72.2468 11.1469 73.0214V83.5645H6.58725V69.8947C6.58725 65.7282 8.29875 61.955 11.0539 59.2373C13.2602 62.876 17.2076 65.1412 21.5657 65.1412C25.9232 65.1412 29.8703 62.876 32.0764 59.237C34.8317 61.9548 36.5434 65.728 36.5434 69.8947V83.5645ZM37.5681 62.1779C36.7116 60.4 35.565 58.762 34.1655 57.3595C32.9619 56.1533 31.5857 55.1348 30.0986 54.3217C30.7054 53.9802 31.2876 53.6003 31.8444 53.1882C31.7664 53.7196 31.896 54.2615 32.214 54.7012C32.9616 55.7352 34.2829 55.6173 35.4257 55.6173C36.4987 55.6173 37.8368 55.5408 39.2372 55.2772C39.3158 55.3718 39.396 55.4654 39.4768 55.5582C38.2384 56.797 37.5551 58.5957 37.8529 60.3689C37.9103 60.7102 38.0029 61.0495 38.1266 61.3838C37.9328 61.6426 37.7467 61.9075 37.5681 62.1779ZM60.7303 73.3396V83.5642H44.3867V74.051C44.3867 73.2764 43.7587 72.6485 42.9842 72.6485C42.2096 72.6485 41.5817 73.2764 41.5817 74.051V83.5642H39.3484V69.8947C39.3484 68.4728 39.1704 67.0578 38.8311 65.6836C39.1067 65.0667 39.4281 64.4748 39.789 63.9102C39.9489 64.07 40.1166 64.2252 40.2932 64.3752C41.9194 65.7558 43.9852 66.4912 45.9786 66.4912C47.0012 66.4912 48.0047 66.2977 48.9201 65.8983C49.8497 65.4927 50.6233 64.8938 51.2216 64.1446C51.8199 64.8938 52.5936 65.4929 53.5232 65.8985C54.4388 66.2978 55.4419 66.4913 56.4647 66.4913C58.4578 66.4913 60.5239 65.7558 62.1501 64.3754C62.3276 64.2247 62.4964 64.0683 62.6571 63.9076C62.8282 64.1757 62.9902 64.45 63.1429 64.7305C61.6127 67.2421 60.7303 70.1896 60.7303 73.3396ZM64.9528 62.2919C64.7511 61.981 64.539 61.6777 64.3172 61.382C64.4406 61.0482 64.5332 60.7096 64.5904 60.3691C64.8883 58.595 64.2043 56.7957 62.9648 55.5569C63.3264 55.1412 63.6677 54.7073 63.9842 54.2549C64.7805 56.3939 66.0782 58.2899 67.7318 59.8034C66.7144 60.5268 65.7829 61.363 64.9528 62.2919ZM77.3325 60.7353C71.0282 60.7353 65.8991 55.6062 65.8991 49.3017V43.1433C65.8991 39.5247 67.5906 36.2956 70.2227 34.1993C70.9247 35.2418 71.946 36.0708 73.1884 36.5262C73.3922 36.601 73.5456 36.7544 73.6202 36.9582C74.5104 39.3863 76.8255 40.973 79.3781 40.973C81.6146 40.973 83.7173 39.7105 84.7721 37.7382C85.1496 37.0323 85.3851 36.2532 85.4623 35.4565C85.4726 35.3493 85.4792 35.2424 85.4841 35.1359C87.5123 37.2001 88.7659 40.0278 88.7659 43.1435V49.3019C88.7661 55.6062 83.637 60.7353 77.3325 60.7353Z" fill="#808080"/>
            </svg>

          </div>
          <h3 class="pillar-title">Parents &amp; Grandparents</h3>
          <p class="pillar-desc">Extend citizenship or permanent European residency status to financially dependent parents above age 55–65.</p>
          <div class="pillar-accent-line"></div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-reveal="fade-up" data-delay="280">
        <div class="pillar-card h-100">
          <div class="bi-icon-box" aria-hidden="true">
            <svg width="82" height="94" viewBox="0 0 82 94" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M41.3486 94H40.2373C39.1977 94 38.1768 93.8153 37.2029 93.451C26.4927 89.444 17.8867 82.9501 11.6239 74.1495C6.70589 67.2386 3.29481 58.9771 1.48561 49.5947C-1.49854 34.1191 0.917927 20.7043 1.02227 20.1409C1.55656 17.2559 3.49178 14.8582 6.19902 13.7272L37.4547 0.669296C38.5177 0.225166 39.6408 0 40.7929 0C41.945 0 43.0681 0.225166 44.1311 0.669246L75.3868 13.7271C78.094 14.8583 80.0293 17.2559 80.5635 20.1408C80.6678 20.7044 83.084 34.1206 80.1001 49.5946C78.2909 58.9771 74.8798 67.2385 69.9618 74.1495C63.699 82.9501 55.093 89.444 44.3829 93.4509C43.409 93.8153 42.3882 94 41.3486 94ZM40.7929 3.22747C40.0702 3.22747 39.3656 3.36872 38.6988 3.64729L7.44316 16.7052C5.74491 17.4147 4.53093 18.9187 4.19577 20.7285C4.09597 21.2674 1.7847 34.1001 4.65468 48.9836C6.37578 57.909 9.60531 65.7464 14.2535 72.2782C20.136 80.5444 28.2378 86.6509 38.3337 90.4281C38.9446 90.6566 39.5851 90.7725 40.2372 90.7725H41.3485C42.0007 90.7725 42.6411 90.6566 43.2521 90.428C53.3479 86.6509 61.4496 80.5444 67.3322 72.2782C71.9805 65.7464 75.21 57.909 76.9311 48.9835C79.8008 34.1016 77.4897 21.2673 77.39 20.7283C77.0549 18.9187 75.8409 17.4147 74.1426 16.7051L42.887 3.64724C42.2202 3.36872 41.5156 3.22747 40.7929 3.22747Z" fill="#808080"/>
            <path d="M41.3478 86.9548H40.2365C40.0434 86.9548 39.8519 86.9201 39.6711 86.8524C30.3018 83.3472 22.7967 77.6991 17.364 70.065C13.0351 63.9819 10.0203 56.6461 8.40345 48.2614C6.97404 40.8486 6.92441 33.9638 7.13445 29.4935C7.36275 24.6361 7.92589 21.5535 7.94974 21.4247C8.04893 20.889 8.41172 20.4395 8.9144 20.2295L40.17 7.17161C40.568 7.0053 41.0161 7.0053 41.4141 7.17161L72.6697 20.2295C73.1724 20.4395 73.5352 20.889 73.6344 21.4247C73.6583 21.5535 74.2214 24.6361 74.4497 29.4935C74.6598 33.9638 74.6102 40.8486 73.1807 48.2614C71.5639 56.6461 68.5492 63.9819 64.2202 70.065C58.7875 77.6991 51.2824 83.3472 41.9131 86.8524C41.7325 86.9201 41.5409 86.9548 41.3478 86.9548ZM40.5307 83.7273H41.0536C56.8087 77.7371 66.5503 65.6008 70.0117 47.6503C72.2313 36.1399 71.0293 25.8222 70.5959 22.8609L40.7921 10.4095L10.9878 22.861C10.8096 24.0732 10.5017 26.5152 10.3539 29.7427C10.1572 34.0393 10.2121 40.6503 11.5909 47.7449C15.0694 65.6439 24.8045 77.7482 40.5307 83.7273Z" fill="#808080"/>
            <path d="M48.5708 66.9752H33.0154C28.838 66.9752 25.4395 63.5764 25.4395 59.3987V46.7581C25.4395 42.5804 28.838 39.1816 33.0154 39.1816H48.5708C52.7482 39.1816 56.1467 42.5804 56.1467 46.7581V59.3987C56.1468 63.5764 52.7482 66.9752 48.5708 66.9752ZM33.0154 42.4091C30.6177 42.4091 28.6669 44.3601 28.6669 46.7581V59.3987C28.6669 61.7968 30.6177 63.7477 33.0154 63.7477H48.5708C50.9686 63.7477 52.9193 61.7967 52.9193 59.3987V46.7581C52.9193 44.3601 50.9685 42.4091 48.5708 42.4091H33.0154ZM40.7931 55.0068C38.3278 55.0068 36.3221 53.0012 36.3221 50.5358C36.3221 48.0701 38.3278 46.0642 40.7931 46.0642C43.2585 46.0642 45.2642 48.0701 45.2642 50.5358C45.2642 53.0012 43.2585 55.0068 40.7931 55.0068ZM40.7931 49.2917C40.1074 49.2917 39.5495 49.8497 39.5495 50.5358C39.5495 51.2215 40.1074 51.7794 40.7931 51.7794C41.4788 51.7794 42.0367 51.2215 42.0367 50.5358C42.0367 49.8497 41.4789 49.2917 40.7931 49.2917Z" fill="#808080"/>
            <path d="M50.8412 42.411C49.95 42.411 49.2275 41.6885 49.2275 40.7972V35.8544C49.2275 31.203 45.4433 27.4189 40.7919 27.4189C36.1405 27.4189 32.3564 31.2031 32.3564 35.8544V40.7972C32.3564 41.6885 31.6339 42.411 30.7426 42.411C29.8514 42.411 29.1289 41.6885 29.1289 40.7972V35.8544C29.1289 32.7391 30.3421 29.8103 32.5449 27.6074C34.7478 25.4046 37.6766 24.1914 40.7919 24.1914C43.9072 24.1914 46.8361 25.4046 49.0389 27.6074C51.2418 29.8103 52.4549 32.7391 52.4549 35.8544V40.7972C52.4549 41.6885 51.7324 42.411 50.8412 42.411Z" fill="#808080"/>
            <path d="M40.7915 59.8233C39.9002 59.8233 39.1777 59.1008 39.1777 58.2095V53.393C39.1777 52.5018 39.9002 51.7793 40.7915 51.7793C41.6827 51.7793 42.4052 52.5018 42.4052 53.393V58.2095C42.4052 59.1008 41.6827 59.8233 40.7915 59.8233Z" fill="#808080"/>
            </svg>

          </div>
          <h3 class="pillar-title">Inherited Sovereign<br>Security</h3>
          <p class="pillar-desc">Citizenship acquired through investment is passed down directly to future generations by descent.</p>
          <div class="pillar-accent-line"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sovereign-legacy-checklist-div">
  <div class="container">
    <div class="row align-items-center justify-content-between g-4">
      <div class="col-lg-5" data-reveal="fade-right" data-delay="0">
        <div class="visual-stage">
          <img src="<?= $img; ?>/Multi-Generational-European-Citizenship-Legacy.png" alt="Multi-Generational European Citizenship Legacy" loading="lazy">
        </div>
      </div>
      <div class="col-lg-7" data-reveal="fade-left" data-delay="140">
        <div class="checklist-card">
          <h3 class="checklist-heading">Family Coverage Checklist</h3>
          <ul class="checklist-items">
            <li>Primary Applicant &amp; Spouse</li>
            <li>Minor Children (&lt; 18 Yrs)</li>
            <li>Adult Dependent Students (18 - 30 Yrs)</li>
            <li>Dependent Parents (55+ Yrs)</li>
            <li>Future Unborn Generations</li>
          </ul>
          <a href="#consultation" class="btn-structure-app">Structure Family Application</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    7. REGULATORY GOVERNANCE
    ========================================================= -->
<section class="sovereign-governance-div py-5">
  <div class="container">
    <div class="text-center">
      <div data-reveal="fade-down" data-delay="0"><span class="governance-badge">Regulatory Governance</span></div>
      <h2 class="governance-title" data-reveal="fade-up" data-delay="120">Risk Mitigation &amp; Vetting Standards</h2>
      <p class="governance-subtitle" data-reveal="fade-up" data-delay="220">
        Institutional-grade due diligence frameworks safeguarding applicant reputation and sovereign program integrity.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-xl-3 col-lg-6 col-md-6" data-reveal="fade-up" data-delay="100">
        <div class="governance-card">
          <div class="card-top-row">
            <h3 class="card-heading">FATF<br>Compliance</h3>
            <div class="governance-icon-box" aria-hidden="true">
              <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_36739_2054" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="54" height="54">
              <path d="M1 53H53V1H1V53Z" fill="white" stroke-width="2" stroke="white"/>
              </mask>
              <g mask="url(#mask0_36739_2054)">
              <path d="M11.6819 39.1543H3.84161H1.58711C1.15606 39.1543 0.806641 38.8049 0.806641 38.3738V15.6273C0.806641 15.1962 1.15606 14.8467 1.58711 14.8467H35.9894" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M26.3125 39.1543H52.4123C52.8434 39.1543 53.1928 38.8049 53.1928 38.3738V15.6273C53.1928 15.1962 52.8434 14.8467 52.4123 14.8467H42.3175" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M17.9453 39.1543H22.9421" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M21.1758 35.9902H46.2078C46.2078 33.879 47.9193 32.1675 50.0306 32.1675V21.8335C47.9193 21.8335 46.2078 20.122 46.2078 18.0108H39.1553" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M32.8255 18.0108H7.79342C7.79342 20.122 6.08198 21.8335 3.9707 21.8335V32.1675C6.08198 32.1675 7.79342 33.879 7.79342 35.9902H14.846" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M34.6606 22.2932C35.5036 23.6623 35.99 25.2746 35.99 27.0005C35.99 31.9653 31.9651 35.9902 27.0003 35.9902C25.2744 35.9902 23.6622 35.5038 22.293 34.6607" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M19.341 31.707C18.4979 30.3379 18.0117 28.7256 18.0117 26.9999C18.0117 22.0349 22.0365 18.0101 27.0013 18.0101C28.7271 18.0101 30.3394 18.4964 31.7086 19.3396" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M3.86914 14.7923C8.25411 6.50091 16.9669 0.85116 26.9992 0.85116C37.053 0.85116 45.7815 6.52517 50.1573 14.8457" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M50.1583 39.1539C45.7825 47.4744 37.054 53.1484 27.0002 53.1484C16.9716 53.1484 8.26155 47.5028 3.875 39.2164" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M25.1077 25.9395L40.1853 10.8619C40.5992 10.448 40.553 9.76107 40.0838 9.41113C36.393 6.6585 31.8105 5.0385 26.8552 5.07067C19.3831 5.11929 12.7721 8.94633 8.8457 14.7287" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M8.78711 39.2008C8.98824 39.5 9.19664 39.794 9.4118 40.0826C9.76164 40.5518 10.4487 40.5979 10.8625 40.1841L22.7243 28.3224" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M45.2463 14.8462C45.0353 14.5305 44.8163 14.2205 44.5896 13.9165C44.2397 13.4473 43.5527 13.4012 43.139 13.8151L13.8159 43.138C13.402 43.5519 13.4482 44.2388 13.9174 44.5888C17.6082 47.3414 22.1908 48.9614 27.146 48.9292C30.7613 48.9057 34.1738 47.9956 37.1793 46.4097" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              <path d="M40.041 44.6035C42.0662 43.0976 43.8267 41.2535 45.2331 39.1535" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" stroke="#AB8136"/>
              </g>
              </svg>

            </div>
          </div>
          <div class="card-divider"></div>
          <p class="card-copy">Rigorous Source-of-Funds validation conforming to global anti-money laundering policies.</p>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6" data-reveal="fade-up" data-delay="200">
        <div class="governance-card">
          <div class="card-top-row">
            <h3 class="card-heading">Interpol<br>Clearance</h3>
            <div class="governance-icon-box" aria-hidden="true">
              <svg width="63" height="65" viewBox="0 0 63 65" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M35.9366 55.6486C36.0608 56.2025 35.7101 56.7518 35.1531 56.8754C33.2087 57.3069 31.195 57.5254 29.1643 57.5254C29.0811 57.5254 28.998 57.5251 28.9148 57.5244C21.1981 57.5244 13.9347 54.5326 8.47178 49.1001C3.00861 43.6677 0 36.4449 0 28.7622C0 21.0795 3.00861 13.8567 8.47165 8.42416C13.9346 2.99179 21.198 0 28.9239 0C36.6498 0 43.9131 2.99179 49.3761 8.42429C54.8392 13.8568 57.8478 21.0796 57.8478 28.7623C57.8478 31.8344 57.3631 34.8584 56.4071 37.7507C56.229 38.2898 55.645 38.5837 55.1027 38.4061C54.5605 38.2289 54.2655 37.6482 54.4436 37.1089C55.3311 34.4242 55.781 31.616 55.781 28.7623C55.781 14.0361 43.733 2.05546 28.924 2.05546C14.115 2.05546 2.06689 14.036 2.06689 28.7622C2.06689 43.4884 14.1149 55.4689 28.9239 55.4689C30.8914 55.4881 32.8322 55.2844 34.7029 54.8694C35.2601 54.7459 35.8123 55.0947 35.9366 55.6485V55.6486ZM36.9776 42.8085C34.9895 40.2972 32.0574 38.8569 28.9329 38.8569C24.9225 38.8569 21.3265 41.1826 19.5482 44.9261C19.3719 45.2975 19.0005 45.5151 18.6131 45.5151C18.4652 45.5151 18.3149 45.4833 18.1723 45.4163C17.6562 45.1739 17.4355 44.5614 17.6794 44.0482C19.2209 40.8031 21.9165 38.4517 25.1215 37.406C23.8924 36.346 23.1128 34.7837 23.1128 33.0425C23.1128 29.857 25.7189 27.2655 28.9223 27.2655C32.1257 27.2655 34.7318 29.857 34.7318 33.0425C34.7318 34.7837 33.9521 36.3461 32.7231 37.4061C35.0018 38.1534 37.0455 39.5712 38.6017 41.5371C38.9547 41.9831 38.8774 42.6291 38.429 42.9802C37.9805 43.331 37.3307 43.2541 36.9778 42.8083L36.9776 42.8085ZM25.1797 33.0427C25.1797 35.0948 26.8587 36.7644 28.9223 36.7644C30.986 36.7644 32.6649 35.0948 32.6649 33.0427C32.6649 30.9906 30.986 29.321 28.9223 29.321C26.8587 29.321 25.1797 30.9906 25.1797 33.0427ZM48.4314 35.8989C48.5258 35.6438 48.6142 35.3872 48.6982 35.1291C47.5901 35.5453 46.5381 36.2252 46.2051 36.6251C45.4291 37.5573 44.4475 38.0813 43.489 38.0813C43.4367 38.0813 43.3843 38.0798 43.3321 38.0767C42.6953 38.0383 41.7808 37.7518 41.0413 36.6053C41.025 36.5802 41.0099 36.5542 40.9958 36.5276C39.2911 33.2933 41.9768 30.7668 43.9377 28.922C44.1172 28.7533 44.2939 28.587 44.4649 28.4227C45.1864 27.73 45.1669 27.3924 45.1312 26.7797C45.0452 25.2974 45.2532 23.978 48.5207 21.8898C47.5579 19.1832 46.0435 16.7339 44.1121 14.676C44.1083 14.6909 44.1044 14.7055 44.1006 14.7205C43.749 16.0866 43.2177 18.151 39.9665 18.4024C38.8539 18.4886 37.6256 18.4592 36.9506 17.5894C36.2281 16.6586 36.6757 15.3749 36.8227 14.9532C37.1046 14.1447 37.0019 13.8141 36.9614 13.7756C36.8963 13.7138 36.476 13.6265 35.7679 13.9077C34.8111 14.2875 33.8187 15.1633 33.7724 16.1028C33.7604 16.3479 33.759 16.6702 33.7572 17.0433C33.7472 19.1647 33.7321 22.3704 31.8218 23.4098C30.7894 23.9716 29.4865 23.7677 27.9488 22.8043C27.8846 22.8053 27.5754 22.841 26.8809 23.3624C26.2929 23.8041 25.7013 24.3873 25.2262 24.8558C25.0523 25.0271 24.896 25.1812 24.7631 25.3059C23.8622 26.1508 22.8281 26.6081 21.8535 26.6081C21.6699 26.6081 21.4884 26.5919 21.3102 26.559C20.6053 26.4287 19.6239 25.9808 18.9515 24.5865C18.2426 23.1164 17.7707 22.7853 17.5525 22.7186C17.5056 22.7044 17.4599 22.6868 17.4156 22.6659C15.8874 21.9504 15.7361 21.0674 15.8782 20.4527C16.0799 19.5808 17.0056 18.9202 18.7915 18.374C19.8278 18.057 21.1264 17.8064 21.6833 17.8113C23.0361 17.8296 23.142 17.3651 23.3964 16.2477C23.5647 15.5089 23.774 14.5893 24.5627 13.9996C26.1452 12.8165 26.0331 12.3394 25.8633 11.6174C25.7075 10.9543 25.4721 9.9523 26.3978 8.85745C26.5861 8.63471 26.6843 8.46733 26.5908 8.22955C16.227 9.38644 8.14392 18.1527 8.14392 28.7623C8.14392 30.2414 8.3023 31.6842 8.6007 33.0761C9.3493 32.1656 9.91692 31.0562 10.0041 30.5451C10.2186 29.2867 10.8594 28.3078 11.7623 27.8596C12.3332 27.576 13.269 27.3697 14.486 27.9948C14.5129 28.0085 14.539 28.0236 14.5646 28.0396C17.667 29.9931 16.6116 33.5164 15.8409 36.0891C15.7705 36.3243 15.701 36.5564 15.6354 36.7835C15.3588 37.7422 15.5454 38.0247 15.8844 38.5376C16.7035 39.7775 17.1864 41.0225 15.4125 44.4485C19.0482 47.5496 23.7695 49.4261 28.9238 49.4261C30.663 49.4261 32.3912 49.2121 34.0604 48.7902C34.6138 48.65 35.1758 48.9829 35.3166 49.5329C35.4572 50.0829 35.1229 50.6424 34.5697 50.7821C32.7343 51.2461 30.8347 51.4814 28.9238 51.4814C16.3259 51.4814 6.07703 41.2897 6.07703 28.7624C6.07703 16.2352 16.3261 6.04306 28.9238 6.04306C41.5214 6.04306 51.7706 16.2348 51.7706 28.7622C51.7706 31.4594 51.2997 34.0994 50.3711 36.6087C50.1741 37.1413 49.5801 37.4142 49.0442 37.2182C48.5087 37.0222 48.2342 36.4315 48.4313 35.8988L48.4314 35.8989ZM9.23472 35.3738C10.2095 38.2366 11.7995 40.8195 13.8468 42.9674C14.8945 40.786 14.5355 40.2388 14.157 39.666C13.7153 38.9976 13.1105 38.0821 13.6486 36.2165C13.716 35.9827 13.7876 35.744 13.86 35.502C14.6868 32.7423 15.1088 30.849 13.4975 29.8005C13.1581 29.6338 12.8848 29.5993 12.6855 29.6983C12.3884 29.8457 12.1418 30.3018 12.0419 30.8884C11.8314 32.1243 10.6263 34.1619 9.23472 35.3738ZM42.0983 14.2108C42.1907 13.8518 42.2917 13.4645 42.4381 13.0786C38.8021 9.97594 34.0795 8.09852 28.9239 8.09852C28.8403 8.09852 28.7572 8.10071 28.6738 8.10173C28.7649 8.81108 28.5343 9.52428 27.9797 10.1802C27.7282 10.4776 27.745 10.592 27.876 11.1497C28.1739 12.4169 28.2591 13.8075 25.8048 15.6425C25.6223 15.7789 25.5156 16.2479 25.4122 16.7016C25.1397 17.8989 24.6785 19.9043 21.6584 19.8666C21.6559 19.8666 21.6534 19.8666 21.6508 19.8666C21.0479 19.8666 19.121 20.3371 18.2358 20.778C18.2377 20.779 18.2396 20.7799 18.2416 20.7808C19.2068 21.111 20.0037 22.0158 20.815 23.698C21.0536 24.1928 21.3472 24.4755 21.6876 24.5385C22.148 24.6243 22.7679 24.3517 23.3446 23.8109C23.4669 23.6962 23.6106 23.5542 23.7705 23.3965C25.1646 22.0217 27.2715 19.9443 29.0341 21.0552C29.8492 21.5688 30.5202 21.7748 30.8293 21.6068C31.6706 21.149 31.6842 18.2652 31.69 17.0337C31.692 16.6361 31.6935 16.2927 31.7078 16.0026C31.8011 14.1029 33.4292 12.6229 35.0013 11.9989C36.362 11.4586 37.6282 11.5673 38.3885 12.2892C38.9199 12.7938 39.4184 13.7823 38.7754 15.6264C38.6433 16.0056 38.6177 16.2186 38.6159 16.3199C38.7442 16.3574 39.0678 16.4103 39.806 16.3532C41.582 16.2159 41.7545 15.5458 42.0982 14.2108H42.0983ZM49.3027 32.8253C49.5694 31.4954 49.7038 30.1372 49.7038 28.7623C49.7038 27.1057 49.5056 25.4945 49.1335 23.9496C47.1192 25.3226 47.1551 25.9759 47.1949 26.6613C47.2411 27.4599 47.3047 28.5533 45.9006 29.9014C45.7247 30.0703 45.5428 30.2414 45.3583 30.4151C43.2548 32.394 41.9373 33.8238 42.8056 35.533C43.0158 35.8461 43.235 36.0119 43.4573 36.0252C43.7907 36.0436 44.2316 35.7728 44.6131 35.3146C45.4175 34.3485 47.4876 33.1823 49.3027 32.8255V32.8253ZM63 51.7395C63 59.0514 57.0179 65 49.665 65C42.312 65 36.3299 59.0514 36.3299 51.7395C36.3299 44.4277 42.312 38.479 49.665 38.479C57.0179 38.479 63 44.4277 63 51.7395ZM60.9331 51.7395C60.9331 45.5609 55.8783 40.5344 49.665 40.5344C43.4516 40.5344 38.3968 45.5609 38.3968 51.7395C38.3968 57.9181 43.4516 62.9447 49.665 62.9447C55.8783 62.9447 60.9331 57.9181 60.9331 51.7395ZM54.6679 45.3984L43.2884 56.7144C43.0934 56.9083 42.83 57.0154 42.5577 57.0154C42.516 57.0154 42.4743 57.0129 42.4323 57.0077C42.1167 56.9694 41.8365 56.7888 41.6724 56.518C40.8007 55.0793 40.3401 53.4269 40.3401 51.7396C40.3401 46.6265 44.5233 42.4666 49.6652 42.4666C51.3621 42.4666 53.0238 42.9247 54.4706 43.7914C54.7429 43.9546 54.9245 44.2332 54.963 44.547C55.0015 44.8608 54.8926 45.1749 54.6679 45.3984ZM52.1786 44.9671C51.3788 44.6741 50.5278 44.522 49.665 44.522C45.6628 44.522 42.4067 47.7597 42.4067 51.7396C42.4067 52.5976 42.5595 53.4438 42.8544 54.2392L52.1786 44.9671ZM58.9901 51.7396C58.9901 56.8528 54.8069 61.0127 49.665 61.0127C47.9683 61.0127 46.3067 60.5546 44.8597 59.6877C44.5874 59.5246 44.4058 59.246 44.3671 58.9321C44.3286 58.6183 44.4374 58.3042 44.6622 58.0807L56.0417 46.7648C56.2666 46.5415 56.5826 46.4328 56.8978 46.4716C57.2134 46.5098 57.4935 46.6905 57.6576 46.9613C58.5293 48.4 58.99 50.0523 58.99 51.7396H58.9901ZM56.9232 51.7396C56.9232 50.8817 56.7704 50.0355 56.4755 49.2401L47.1514 58.5121C47.9513 58.8052 48.8022 58.9573 49.665 58.9573C53.6671 58.9573 56.9232 55.7195 56.9232 51.7396Z" fill="#AB8136"/>
              </svg>

            </div>
          </div>
          <div class="card-divider"></div>
          <p class="card-copy">Pre-screening against international sanctions, law enforcement, and PEP databases.</p>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6" data-reveal="fade-up" data-delay="300">
        <div class="governance-card">
          <div class="card-top-row">
            <h3 class="card-heading">Escrow<br>Protections</h3>
            <div class="governance-icon-box" aria-hidden="true">
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.8 56.0001H29.568C30.0835 56.0001 30.5014 55.5822 30.5014 55.0667C30.5014 54.5513 30.0835 54.1334 29.568 54.1334H2.8C2.28454 54.1334 1.86667 53.7155 1.86667 53.2001V8.40001C1.86667 7.88454 2.28454 7.46667 2.8 7.46667H26.1334V15.8667C26.1334 17.4131 27.387 18.6667 28.9334 18.6667H37.3334V20.86C37.3334 21.3755 37.7512 21.7934 38.2667 21.7934C38.7822 21.7934 39.2 21.3755 39.2 20.86V17.7334C39.1914 17.4876 39.0943 17.2533 38.9266 17.0735L27.7266 5.87347C27.5467 5.70585 27.3124 5.60874 27.0667 5.60001H7.46667V2.8C7.46667 2.28454 7.88454 1.86667 8.40001 1.86667H32.2803L42.9334 12.5197V19.6C42.9334 20.1155 43.3512 20.5334 43.8667 20.5334C44.3822 20.5334 44.8 20.1155 44.8 19.6V12.1333C44.8 11.8858 44.7016 11.6485 44.5266 11.4735L33.3266 0.273467C33.1516 0.0984207 32.9142 5.28641e-05 32.6667 0H8.40001C6.85361 0 5.60001 1.2536 5.60001 2.8V5.60001H2.8C1.2536 5.60001 0 6.85361 0 8.40001V53.2001C0 54.7464 1.2536 56.0001 2.8 56.0001ZM36.0136 16.8H28.9334C28.4179 16.8 28 16.3821 28 15.8667V8.78641L36.0136 16.8Z" fill="#AB8136"/>
              <path d="M54.1324 35.986V32.6671C54.1324 26.9969 49.5359 22.4004 43.8658 22.4004C38.1956 22.4004 33.5991 26.9969 33.5991 32.6671V35.986C32.448 36.6477 31.7366 37.8726 31.7324 39.2004V52.2671C31.7324 54.329 33.4039 56.0004 35.4658 56.0004H52.2658C54.3276 56.0004 55.9991 54.329 55.9991 52.2671V39.2004C55.9949 37.8726 55.2836 36.6477 54.1324 35.986ZM35.4658 32.6671C35.4658 28.0279 39.2266 24.2671 43.8658 24.2671C48.505 24.2671 52.2658 28.0279 52.2658 32.6671V35.4671H50.3991V32.6671C50.3991 29.0588 47.474 26.1337 43.8658 26.1337C40.2575 26.1337 37.3324 29.0588 37.3324 32.6671V35.4671H35.4658V32.6671ZM39.1991 35.4671V32.6671C39.1991 30.0897 41.2884 28.0004 43.8658 28.0004C46.4431 28.0004 48.5324 30.0897 48.5324 32.6671V35.4671H39.1991ZM54.1324 52.2671C54.1324 53.298 53.2967 54.1338 52.2658 54.1338H35.4658C34.4348 54.1338 33.5991 53.298 33.5991 52.2671V39.2004C33.5991 38.1695 34.4348 37.3337 35.4658 37.3337H52.2658C53.2967 37.3337 54.1324 38.1695 54.1324 39.2004V52.2671Z" fill="#AB8136"/>
              <path d="M44.5624 40.1964C43.4695 39.9889 42.341 40.2796 41.4844 40.9894C40.6277 41.6991 40.1322 42.7538 40.1328 43.8663C40.1296 44.776 40.4619 45.6549 41.0662 46.3349V48.5329C41.0662 50.0793 42.3198 51.3329 43.8662 51.3329C45.4126 51.3329 46.6662 50.0793 46.6662 48.5329V46.3359C47.5547 45.3298 47.8347 43.9242 47.3996 42.6544C46.9645 41.3846 45.8813 40.4461 44.5624 40.1964ZM45.1224 45.2439C44.918 45.4206 44.8002 45.6773 44.7995 45.9476V48.5329C44.7995 49.0484 44.3816 49.4663 43.8662 49.4663C43.3507 49.4663 42.9328 49.0484 42.9328 48.5329V45.9476C42.9329 45.6778 42.8161 45.4211 42.6127 45.2439C42.2186 44.895 41.995 44.3925 41.9995 43.8663C41.999 43.3123 42.2445 42.7868 42.6696 42.4317C43.0046 42.1503 43.4287 41.9971 43.8662 41.9996C43.9886 41.9998 44.1107 42.011 44.2311 42.0332C44.9838 42.1836 45.5686 42.778 45.7067 43.5331C45.8229 44.1667 45.6004 44.8151 45.1196 45.2439H45.1224Z" fill="#AB8136"/>
              <path d="M7.73323 28.6459C7.75563 28.6683 7.78457 28.6823 7.80977 28.7028C11.4847 31.513 16.5911 31.4961 20.2474 28.6618L20.2623 28.6506C23.7443 25.9689 25.1331 21.3683 23.7166 17.2079C22.3002 13.0474 18.3927 10.25 13.9978 10.25C9.60283 10.25 5.69534 13.0474 4.27891 17.2079C2.86247 21.3683 4.25129 25.9689 7.73323 28.6506V28.6459ZM9.36937 27.5324C9.53644 25.9139 10.5345 24.4993 12.0032 23.7991C13.2621 24.4213 14.739 24.4213 15.9979 23.7991C17.4663 24.4995 18.464 25.9141 18.6308 27.5324C15.8253 29.3972 12.1749 29.3972 9.36937 27.5324ZM14.0006 22.3991C12.4542 22.3991 11.2006 21.1455 11.2006 19.5991C11.2006 18.0527 12.4542 16.7991 14.0006 16.7991C15.547 16.7991 16.8006 18.0527 16.8006 19.5991C16.8006 21.1455 15.547 22.3991 14.0006 22.3991ZM14.0006 12.1324C17.3146 12.1257 20.3217 14.0712 21.6738 17.0968C23.026 20.1224 22.4695 23.6605 20.2539 26.125C19.8064 24.6607 18.8612 23.3988 17.5818 22.5578C18.2791 21.7292 18.6633 20.682 18.6672 19.5991C18.6672 17.0218 16.5779 14.9324 14.0006 14.9324C11.4232 14.9324 9.3339 17.0218 9.3339 19.5991C9.33864 20.6824 9.72382 21.7296 10.4222 22.5578C9.14168 23.3984 8.19543 24.6603 7.74723 26.125C5.53163 23.6605 4.97518 20.1224 6.32733 17.0968C7.67948 14.0712 10.6866 12.1257 14.0006 12.1324Z" fill="#AB8136"/>
              <path d="M26.1324 33.5996H4.66576C4.15029 33.5996 3.73242 34.0175 3.73242 34.5329C3.73242 35.0484 4.15029 35.4663 4.66576 35.4663H26.1324C26.6479 35.4663 27.0658 35.0484 27.0658 34.5329C27.0658 34.0175 26.6479 33.5996 26.1324 33.5996Z" fill="#AB8136"/>
              <path d="M26.1324 38.2676H4.66576C4.15029 38.2676 3.73242 38.6854 3.73242 39.2009C3.73242 39.7164 4.15029 40.1342 4.66576 40.1342H26.1324C26.6479 40.1342 27.0658 39.7164 27.0658 39.2009C27.0658 38.6854 26.6479 38.2676 26.1324 38.2676Z" fill="#AB8136"/>
              <path d="M27.0658 43.8669C27.0658 43.3515 26.6479 42.9336 26.1324 42.9336H4.66576C4.15029 42.9336 3.73242 43.3515 3.73242 43.8669C3.73242 44.3824 4.15029 44.8003 4.66576 44.8003H26.1324C26.6479 44.8003 27.0658 44.3824 27.0658 43.8669Z" fill="#AB8136"/>
              <path d="M4.66576 47.5996C4.15029 47.5996 3.73242 48.0175 3.73242 48.5329C3.73242 49.0484 4.15029 49.4663 4.66576 49.4663H14.9324C15.4479 49.4663 15.8658 49.0484 15.8658 48.5329C15.8658 48.0175 15.4479 47.5996 14.9324 47.5996H4.66576Z" fill="#AB8136"/>
              </svg>

            </div>
          </div>
          <div class="card-divider"></div>
          <p class="card-copy">Capital allocations remain safely held in Tier-1 institutional escrow until government authorization.</p>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6" data-reveal="fade-up" data-delay="400">
        <div class="governance-card">
          <div class="card-top-row">
            <h3 class="card-heading">Swiss Vault<br>Confidentiality</h3>
            <div class="governance-icon-box" aria-hidden="true">
              <svg width="52" height="61" viewBox="0 0 52 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M51.9041 9.71914C51.8999 9.45221 51.8137 9.19306 51.6572 8.97701C51.5008 8.76096 51.2816 8.5985 51.0297 8.51177L26.4178 0.0731881C26.1455 -0.024396 25.848 -0.024396 25.5758 0.0731881L0.963802 8.51177C0.711879 8.5985 0.49276 8.76096 0.336294 8.97701C0.179829 9.19306 0.0936262 9.45221 0.0894291 9.71914L0.0246605 13.549C-0.169645 25.3435 0.78245 33.8081 2.94571 39.4359C4.56771 43.6735 7.01366 47.5458 10.1415 50.828C13.8832 54.6418 18.3172 57.7042 23.2052 59.8508L25.4592 60.8829C25.6279 60.9601 25.8113 61 25.9968 61C26.1823 61 26.3656 60.9601 26.5343 60.8829L28.7883 59.8508C33.6763 57.7042 38.1104 54.6418 41.8521 50.828C44.9829 47.5445 47.4311 43.6699 49.0543 39.4294C51.2176 33.8016 52.1696 25.337 51.9753 13.5425L51.9041 9.71914ZM46.6384 38.4947C45.1397 42.4169 42.8762 46.0006 39.9802 49.0364C36.4633 52.6019 32.3027 55.4655 27.7196 57.475L25.9968 58.2735L24.2739 57.488C19.6908 55.4785 15.5303 52.6149 12.0133 49.0494C9.11587 46.0098 6.85234 42.4216 5.35509 38.4947C3.32784 33.1849 2.41461 25.0384 2.60892 13.6139L2.65426 10.6928L25.9968 2.6502L49.3134 10.6669L49.3587 13.5879C49.5789 25.0384 48.6657 33.1849 46.6384 38.4947Z" fill="#AB8136"/>
              <path d="M44.9623 14.5273C44.9595 14.2587 44.876 13.9977 44.7231 13.78C44.5703 13.5622 44.3556 13.3985 44.1087 13.3112L26.4034 7.06843C26.1366 6.97719 25.8482 6.97719 25.5814 7.06843L7.87614 13.3112C7.62918 13.3985 7.41455 13.5622 7.2617 13.78C7.10886 13.9977 7.0253 14.2587 7.02249 14.5273V14.6508C6.85176 24.9645 7.65482 32.82 9.36844 37.372C10.6217 40.7456 12.5179 43.8277 14.9456 46.4371C17.9387 49.5658 21.4839 52.0796 25.3917 53.8439L25.4676 53.8764C25.6307 53.9592 25.8105 54.0015 25.9924 54C26.1735 54 26.3525 53.9601 26.5172 53.8829L26.5931 53.8439C30.5034 52.0888 34.0529 49.5839 37.0519 46.4631C39.4796 43.8537 41.3758 40.7716 42.629 37.398C44.33 32.846 45.1583 24.9905 44.975 14.6833L44.9623 14.5273ZM40.2515 36.4421C39.1121 39.4922 37.3923 42.2779 35.1928 44.6358C32.5476 47.4068 29.4288 49.653 25.9924 51.2622C22.5468 49.6643 19.4171 47.4267 16.7604 44.6618C14.5609 42.3039 12.8411 39.5183 11.7017 36.4681C10.1841 32.3323 9.4127 25.101 9.55181 15.5027L25.9924 9.70211L42.433 15.5027C42.5721 25.0945 41.8007 32.3323 40.2641 36.4681L40.2515 36.4421Z" fill="#AB8136"/>
              <path d="M31.8659 24.3872L22.9577 33.8088L20.1341 30.8225C20.018 30.6997 19.8802 30.6023 19.7285 30.5359C19.5768 30.4694 19.4143 30.4352 19.2501 30.4352C19.0859 30.4352 18.9234 30.4694 18.7717 30.5359C18.62 30.6023 18.4822 30.6997 18.3661 30.8225C18.2501 30.9452 18.158 31.091 18.0952 31.2514C18.0323 31.4118 18 31.5837 18 31.7573C18 31.931 18.0323 32.1029 18.0952 32.2633C18.158 32.4237 18.2501 32.5695 18.3661 32.6922L22.0706 36.6102C22.1869 36.7339 22.3251 36.832 22.4773 36.8989C22.6296 36.9658 22.7928 37.0001 22.9577 37C23.2885 36.9985 23.6053 36.8583 23.8385 36.6102L33.6339 26.257C33.7499 26.1343 33.842 25.9885 33.9048 25.8281C33.9677 25.6677 34 25.4958 34 25.3221C34 25.1485 33.9677 24.9766 33.9048 24.8162C33.842 24.6558 33.7499 24.51 33.6339 24.3872C33.5178 24.2645 33.38 24.1671 33.2283 24.1006C33.0766 24.0342 32.9141 24 32.7499 24C32.5857 24 32.4232 24.0342 32.2715 24.1006C32.1198 24.1671 31.982 24.2645 31.8659 24.3872Z" fill="#AB8136"/>
              </svg>

            </div>
          </div>
          <div class="card-divider"></div>
          <p class="card-copy">End-to-end encrypted record management adhering to strict Swiss-style data privacy laws.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    8. CLIENT TRANSFORMATIONS
    ========================================================= -->
<section class="transformations-section">
  <div class="container">
    <div class="text-center" data-reveal="fade-up" data-delay="0">
      <span class="badge-proven">Proven Results</span>
      <h2 class="section-heading-main">Client Transformations</h2>
      <p class="section-subtitle-main">
        Anonymized case profiles showing how dual citizenship protects wealth and opens global markets.
      </p>
    </div>

    <div class="row justify-content-center g-4 g-lg-5">
      <div class="col-12 col-md-6 col-lg-5" data-reveal="fade-up" data-delay="120">
        <div class="card-stack-wrapper">
          <svg class="corner-svg-behind" width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M71.2282 63.4101C71.3482 58.9688 71.3097 55.1596 71.1072 51.4792C70.8819 48.5714 70.2886 47.9469 68.8899 47.1267C67.464 46.2907 64.5819 45.5549 62.2661 44.9639C61.6143 44.7975 60.9846 44.6368 60.4041 44.4797L59.9882 44.3637C59.3516 44.1861 58.7698 44.3102 58.2597 44.7315C57.7803 45.1277 57.2727 45.4554 56.7473 45.7181L58.1569 59.8141C58.1918 60.1621 58.1007 60.5109 57.9005 60.7976L54.6988 65.3806C54.4251 65.7725 53.9774 66.0057 53.4997 66.0057C53.0219 66.0057 52.5741 65.7723 52.3005 65.3806L49.0987 60.7976C48.8985 60.5109 48.8073 60.1621 48.8422 59.8141L50.252 45.7183C49.7265 45.4556 49.2188 45.1277 48.7394 44.7317C48.2295 44.3102 47.6481 44.1865 47.0107 44.3639L46.6059 44.4768C46.0145 44.6368 45.3848 44.7978 44.733 44.9641C42.4172 45.5553 39.5351 46.291 38.1092 47.1269C36.7107 47.9469 36.1174 48.5712 35.8919 51.4792C35.6896 55.16 35.6509 58.9675 35.7709 63.4049C37.2144 64.5742 38.7746 65.6038 40.4319 66.4736V59.3197C40.4319 58.5117 41.0868 57.8568 41.8948 57.8568C42.7027 57.8568 43.3577 58.5117 43.3577 59.3197V67.8023C46.5077 69.0203 49.9285 69.6901 53.5032 69.6901C57.0779 69.6901 60.4937 69.0213 63.6421 67.8048V59.3197C63.6421 58.5117 64.297 57.8568 65.105 57.8568C65.9129 57.8568 66.5679 58.5117 66.5679 59.3197V66.4772C68.2249 65.6078 69.7854 64.5788 71.2289 63.4101H71.2282Z" fill="#FFCE45"/>
          <path d="M38.3379 93.9186C38.3379 94.9169 39.15 95.729 40.1481 95.729H66.8517C67.85 95.729 68.6621 94.9169 68.6621 93.9186V90.1953H38.3379V93.9186Z" fill="#FFCE45"/>
          <path d="M53.1932 82.0284C46.9809 81.9761 40.9202 80.4627 35.1426 77.5312V84.8284C35.1426 86.1736 36.2368 87.2678 37.5821 87.2678H69.4171C70.7623 87.2678 71.8565 86.1734 71.8565 84.8284V77.5317C65.9778 80.5162 59.823 82.0294 53.5242 82.0296C53.4135 82.0296 53.3039 82.0292 53.1932 82.0284Z" fill="#FFCE45"/>
          <path d="M53.5035 10.3282C70.1854 10.3282 83.8449 23.513 84.6116 40.009H91.1825C90.411 19.8911 73.8067 3.76172 53.5035 3.76172C33.2002 3.76172 16.5958 19.8911 15.8242 40.009H22.3951C23.1619 23.513 36.8213 10.3282 53.5035 10.3282Z" fill="#FFCE45"/>
          <path d="M46.168 100.326C46.168 101.932 47.4743 103.238 49.0804 103.238H57.92C59.526 103.238 60.8326 101.932 60.8326 100.326V98.6543H46.1682V100.326H46.168Z" fill="#FFCE45"/>
          <path d="M53.5004 18.9795C47.7652 18.9795 43.9333 22.869 43.7383 28.8885C43.5461 34.8216 47.1876 41.475 53.4057 41.8784C53.4373 41.8805 53.4688 41.8815 53.5004 41.8815C53.532 41.8815 53.5635 41.8805 53.5951 41.8784C59.8132 41.475 63.4547 34.8216 63.2625 28.8885C63.0675 22.869 59.2356 18.9795 53.5004 18.9795ZM53.5004 38.9518C49.2242 38.6032 46.5149 33.5403 46.6624 28.9832C46.7163 27.3228 47.3684 21.9053 53.5004 21.9053C59.6324 21.9053 60.2845 27.3228 60.3384 28.9832C60.4859 33.5403 57.7766 38.603 53.5004 38.9518ZM100.8 40.0092H94.1102C93.3372 18.2776 75.4203 0.835938 53.5037 0.835938C31.5871 0.835938 13.6701 18.2776 12.8968 40.009H6.20117C5.39324 40.009 4.73828 40.664 4.73828 41.4719V49.3433C4.73828 50.0421 5.23253 50.6434 5.91821 50.7786L14.6613 52.5025L18.2376 61.1244L13.2713 68.5302C12.8822 69.1105 12.9576 69.8852 13.4517 70.3795L24.5889 81.5167C25.0829 82.0107 25.8576 82.0863 26.4382 81.6972L32.2176 77.8216V84.8295C32.2176 87.0157 33.5326 88.8992 35.4124 89.7343V93.918C35.4124 96.5297 37.5369 98.6542 40.1484 98.6542H43.2424V100.326C43.2424 103.545 45.8614 106.164 49.0806 106.164H57.9202C61.1394 106.164 63.7586 103.545 63.7586 100.326V98.6542H66.8524C69.4639 98.6542 71.5886 96.5295 71.5886 93.918V89.7343C73.4684 88.8992 74.7834 87.0154 74.7834 84.8295V77.8216L80.5626 81.6972C81.1423 82.0861 81.9175 82.0107 82.4117 81.5167L93.5491 70.3795C94.0434 69.8854 94.119 69.1107 93.7297 68.5302L88.7632 61.1244L92.3397 52.5025L101.083 50.7786C101.768 50.6434 102.263 50.0421 102.263 49.3433V41.4719C102.263 40.664 101.608 40.009 100.8 40.009L100.8 40.0092ZM53.5037 3.76172C73.807 3.76172 90.4112 19.8911 91.1828 40.009H84.6119C83.8453 23.513 70.1859 10.3282 53.5039 10.3282C36.822 10.3282 23.1621 23.513 22.3954 40.009H15.8245C16.5961 19.8911 33.2003 3.76172 53.5037 3.76172ZM65.1055 57.8565C64.2976 57.8565 63.6426 58.5114 63.6426 59.3194V67.8046C60.4945 69.0209 57.0759 69.6898 53.5037 69.6898C49.9316 69.6898 46.5084 69.02 43.3582 67.8021V59.3194C43.3582 58.5114 42.7032 57.8565 41.8953 57.8565C41.0873 57.8565 40.4324 58.5114 40.4324 59.3194V66.4733C38.7751 65.6033 37.2149 64.5737 35.7716 63.4046C35.6517 58.9672 35.6903 55.1598 35.8926 51.4789C36.1181 48.5709 36.7114 47.9469 38.11 47.1266C39.5359 46.2907 42.418 45.5548 44.7337 44.9638C45.3855 44.7975 46.0152 44.6368 46.6066 44.4765L47.0114 44.3636C47.649 44.1862 48.2302 44.3099 48.7402 44.7314C49.2196 45.1275 49.7272 45.4554 50.2528 45.718L48.843 59.8138C48.8081 60.1618 48.8992 60.5106 49.0994 60.7973L52.3012 65.3803C52.575 65.772 53.0227 66.0054 53.5004 66.0054C53.9781 66.0054 54.426 65.772 54.6996 65.3803L57.9012 60.7973C58.1014 60.5106 58.1925 60.1618 58.1576 59.8138L56.748 45.7178C57.2736 45.4551 57.781 45.1273 58.2604 44.7312C58.7704 44.3099 59.3524 44.1858 59.9889 44.3634L60.4048 44.4794C60.9854 44.6366 61.6151 44.7973 62.2669 44.9636C64.5826 45.5548 67.4647 46.2905 68.8906 47.1264C70.2894 47.9464 70.8827 48.5711 71.108 51.4789C71.3105 55.1593 71.3489 58.9685 71.229 63.4098C69.7855 64.5785 68.2252 65.6075 66.5682 66.4769V59.3194C66.5682 58.5114 65.9132 57.8565 65.1053 57.8565H65.1055ZM53.8845 46.4842L55.1925 59.566L53.5004 61.9881L51.808 59.566L53.1163 46.4842C53.3721 46.498 53.6285 46.498 53.8843 46.4842H53.8845ZM74.0287 51.3017C74.0281 51.2912 74.0275 51.2806 74.0266 51.2701C73.7545 47.7281 72.8319 46.0455 70.3705 44.6025C68.5887 43.5576 65.6146 42.7985 62.9908 42.1287C62.3532 41.9659 61.7371 41.8088 61.1802 41.6581L60.7747 41.545C59.2067 41.1081 57.6519 41.4389 56.3971 42.4759C54.6644 43.9072 52.3364 43.9074 50.6041 42.4759C49.3495 41.4391 47.7949 41.1079 46.2263 41.545L45.8319 41.655C45.2639 41.8086 44.6478 41.9657 44.0102 42.1285C41.3862 42.7983 38.4123 43.5574 36.6303 44.6023C34.1693 46.0455 33.2467 47.7279 32.9744 51.2697C32.9735 51.2804 32.9729 51.2908 32.9723 51.3015C32.8099 54.2488 32.7501 57.2697 32.79 60.6115C28.1355 55.5779 25.2863 48.8518 25.2863 41.4715C25.2863 25.9122 37.9446 13.2538 53.5039 13.2538C69.0633 13.2538 81.7214 25.9122 81.7214 41.4715C81.7214 48.8551 78.8694 55.5842 74.211 60.6186C74.2511 57.2728 74.1913 54.2496 74.0287 51.3015V51.3017ZM60.8326 100.326C60.8326 101.932 59.526 103.238 57.92 103.238H49.0804C47.4743 103.238 46.168 101.932 46.168 100.326V98.6542H60.8324L60.8326 100.326ZM66.8522 95.7284H40.1486C39.1505 95.7284 38.3384 94.9163 38.3384 93.918V90.1947H68.6628V93.918C68.6628 94.9163 67.8507 95.7284 66.8524 95.7284H66.8522ZM69.4179 87.269H37.5829C36.2377 87.269 35.1434 86.1745 35.1434 84.8295V77.5322C40.921 80.4636 46.9818 81.9771 53.194 82.0293C53.3048 82.0301 53.4143 82.0305 53.5251 82.0305C59.8238 82.0305 65.9786 80.5171 71.8574 77.5326V84.8293C71.8574 86.1745 70.7631 87.2687 69.4179 87.2687V87.269ZM99.3367 48.1408L91.0054 49.7834C90.5255 49.8781 90.1245 50.2062 89.9372 50.6582L85.7603 60.7277C85.5728 61.1802 85.6238 61.6964 85.8965 62.103L90.6298 69.1611L81.1931 78.5976L74.1351 73.8643C73.672 73.5537 73.072 73.5335 72.589 73.8124C60.2796 80.9196 46.7214 80.9192 34.4122 73.8124C33.9292 73.5335 33.329 73.5535 32.8661 73.8643L25.8079 78.5976L16.3714 69.1611L21.1045 62.103C21.3774 61.6964 21.4284 61.18 21.2407 60.7277L17.064 50.6582C16.8767 50.2064 16.4757 49.8781 15.9959 49.7834L7.66448 48.1408V42.935H22.3954C23.1621 59.431 36.8214 72.6156 53.5035 72.6156C70.1857 72.6156 83.8447 59.431 84.6115 42.935H99.3365V48.1408H99.3367Z" fill="#282828"/>
          </svg>


          <article class="glass-case-card">
            <div>
              <span class="role-tag">Tech Entrepreneur</span>
              <h3 class="card-title-h3">Cross-Border Business<br>Expansion &amp; EU Mobility</h3>
              <p class="card-body-copy">
                Acquired Malta MEIN citizenship to establish a European holding structure. Reduced corporate tax exposure by 32% while securing visa-free travel to over 180 countries for international deal-making.
              </p>
            </div>
            <div class="card-meta-footer">
              <span>Outlay: $350,000 USD</span>
              <span class="meta-dot">&bull;</span>
              <span class="meta-timeframe">Timeframe: 5 Months</span>
            </div>
          </article>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-5" data-reveal="fade-up" data-delay="240">
        <div class="card-stack-wrapper">
          <svg class="corner-svg-behind" width="159" height="159" viewBox="0 0 159 159" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M79.4996 111.48C81.5251 111.48 83.1671 113.122 83.1671 115.148C83.1671 117.174 81.5251 118.816 79.4996 118.816C77.474 118.816 75.832 117.174 75.832 115.148C75.832 113.122 77.474 111.48 79.4996 111.48Z" fill="#CFD8DD"/>
          <path d="M64.4883 71.4084C64.4301 71.4294 64.3951 71.3898 64.3672 71.3525C63.8191 70.6251 63.6956 69.4466 63.6001 68.5731C63.2943 65.7906 63.3253 63.5865 63.5885 62.96C63.7469 62.5819 64.5512 60.7342 66.4471 58.9027C69.5114 55.9409 74.5586 54.3897 77.1268 53.8563C79.2059 53.4254 81.4046 53.2057 83.5528 53.3556C84.7507 53.4386 86.0053 53.5916 87.1699 53.8858C88.1264 54.1281 89.0751 54.5869 89.6496 55.3897C90.2684 56.2538 90.4182 57.3461 91.1596 58.138C91.9686 59.0021 93.0718 59.5184 93.9002 60.3623C95.0073 61.4911 96.109 63.2682 96.2689 64.8606C96.4125 66.2953 95.7837 67.65 95.0593 68.8457C94.9297 69.0599 93.4158 71.4077 93.2092 71.4193C93.2038 71.417 93.1991 71.4154 93.1937 71.4139C92.894 71.0979 92.1953 69.0017 89.7226 65.8683C89.0262 64.9856 88.697 64.6191 88.4291 64.3583C88.2506 64.1836 87.6994 63.6611 86.8865 63.0951C86.6241 62.9127 86.0628 62.502 85.9114 62.7574C85.6039 63.2628 85.0745 63.9763 84.2096 64.5159C82.8836 65.3435 81.5303 65.2883 80.3309 65.2596C80.3309 65.2596 76.3465 65.1641 72.0276 65.4622C70.4586 65.5709 68.7832 65.6563 67.3663 66.411C65.5418 67.3838 64.9068 69.4139 64.5644 71.3129C64.5566 71.3556 64.5295 71.3945 64.4883 71.4084Z" fill="#A85936"/>
          <path d="M93.2082 71.4191C97.8167 72.9183 96.257 80.6649 92.6919 81.265C92.2967 83.1198 91.3938 86.254 89.1905 88.8618C87.9568 90.3221 86.7659 91.1598 86.4678 91.364C85.8094 91.8166 84.4034 92.7646 82.3165 93.2576C81.763 93.3888 79.6249 93.8499 76.9402 93.2576C76.4596 93.152 74.3246 92.6512 72.07 90.9983C71.879 90.8578 71.6873 90.7095 71.4955 90.5527C70.8682 90.0395 68.5337 88.0334 67.276 84.5335C66.8684 83.4 66.6207 82.0492 66.5268 81.3551C62.8763 80.2953 60.5022 74.888 64.4873 71.4083C64.5284 71.3943 64.5556 71.3555 64.5633 71.3128C64.9057 69.4138 65.5408 67.3836 67.3653 66.4108C68.7821 65.6562 70.4575 65.5708 72.0266 65.4621C76.3455 65.164 80.3298 65.2594 80.3298 65.2594C81.5293 65.2882 82.8825 65.3433 84.2085 64.5157C85.0734 63.9761 85.6029 63.2626 85.9103 62.7572C86.0617 62.5018 86.623 62.9125 86.8855 63.0949C87.6983 63.6609 88.2495 64.1834 88.4281 64.3581C88.6959 64.6189 89.0251 64.9854 89.7215 65.8681C92.1943 69.0015 92.893 71.0977 93.1927 71.4137C93.1965 71.4176 93.2012 71.4191 93.2082 71.4191Z" fill="#F4BAA6"/>
          <path d="M87.8251 99.2656V99.2664H87.8243L84.1707 102.525H74.4514L70.9453 99.2338C71.5944 97.9256 72.4421 95.5972 72.4926 93.6703C72.5244 92.4669 72.2908 91.9732 72.0687 91.1091L72.071 90.998C74.3256 92.6509 76.4606 93.1517 76.9412 93.2573C79.6259 93.8496 81.764 93.3885 82.3175 93.2573C84.4044 92.7643 85.8104 91.8163 86.4688 91.3637L86.5022 91.3955C86.3073 92.0974 86.1287 92.6059 86.1559 93.6703C86.2141 95.8666 87.0355 97.8565 87.8251 99.2656Z" fill="#EBB39E"/>
          <path d="M105.233 127.771V129.118C105.233 132.549 102.452 135.329 99.0216 135.329H59.9766C56.5466 135.329 53.7656 132.549 53.7656 129.118V127.771H57.2996H101.699H105.233Z" fill="#345A75"/>
          <path d="M101.7 105.631V127.773H57.3008V105.631C57.3008 103.916 58.6913 102.525 60.4062 102.525H74.4515H84.1709H98.5942C100.309 102.525 101.7 103.916 101.7 105.631ZM83.1678 115.149C83.1678 113.124 81.5258 111.482 79.5002 111.482C77.4747 111.482 75.8327 113.124 75.8327 115.149C75.8327 117.175 77.4747 118.817 79.5002 118.817C81.5258 118.817 83.1678 117.175 83.1678 115.149Z" fill="#4F8AB3"/>
          <path d="M74.4505 102.526H60.4052C58.6902 102.526 57.2998 103.916 57.2998 105.631V127.773H53.7657V129.12C53.7657 132.551 56.5467 135.331 59.9767 135.331H58.969H45.2684C45.2591 132.562 45.2839 117.545 47.8421 109.301C48.4701 107.275 49.1976 105.737 50.13 104.328C50.6525 103.536 52.9451 100.21 57.4224 97.9333C61.5822 95.8185 65.4376 95.7261 67.2885 95.8022L70.9444 99.2345L74.4505 102.526Z" fill="#A6D4ED"/>
          <path d="M111.156 109.301C113.715 117.545 113.739 132.562 113.73 135.331H100.03H99.0218C102.452 135.331 105.233 132.551 105.233 129.12V127.773H101.699V105.631C101.699 103.916 100.308 102.526 98.5933 102.526H84.1699L87.8235 99.2671H87.8243V99.2664L91.71 95.8022C93.5609 95.7261 97.4163 95.8185 101.576 97.9333C106.053 100.21 108.346 103.536 108.868 104.328C109.801 105.737 110.528 107.275 111.156 109.301Z" fill="#A6D4ED"/>
          <path d="M64.3665 71.3521C64.3945 71.3893 64.4294 71.4289 64.4876 71.408C60.5025 74.8876 62.8767 80.295 66.5271 81.3548C66.6211 82.0489 66.8687 83.3997 67.2763 84.5332C68.534 88.0331 70.8686 90.0392 71.4959 90.5524C71.6876 90.7092 71.8794 90.8575 72.0704 90.998L72.0681 91.1091C72.2901 91.9732 72.5238 92.4669 72.492 93.6703C72.4415 95.5972 71.5937 97.9256 70.9447 99.2337L67.2887 95.8014C65.4379 95.7253 61.5825 95.8177 57.4227 97.9325C52.9454 100.209 50.6528 103.536 50.1303 104.327C49.1978 105.737 48.4704 107.275 47.8423 109.3C45.2842 117.544 45.2593 132.562 45.2687 135.33H32.2715V68.5471L79.4995 23.6699L126.727 68.5471V135.33H113.73C113.74 132.562 113.715 117.544 111.157 109.3C110.529 107.275 109.801 105.737 108.869 104.327C108.346 103.536 106.054 100.209 101.576 97.9325C97.4165 95.8177 93.561 95.7253 91.7102 95.8014L87.8244 99.2656C87.0349 97.8565 86.2135 95.8666 86.1552 93.6703C86.1281 92.6059 86.3066 92.0974 86.5015 91.3955L86.4681 91.3637C86.7663 91.1595 87.9572 90.3218 89.1908 88.8615C91.3942 86.2537 92.2971 83.1195 92.6923 81.2647C96.2573 80.6646 97.8171 72.918 93.2085 71.4188C93.4151 71.4072 94.929 69.0595 95.0586 68.8452C95.783 67.6496 96.4118 66.2948 96.2682 64.8601C96.1083 63.2678 95.0066 61.4907 93.8995 60.3618C93.0711 59.5179 91.9679 59.0016 91.1589 58.1375C90.4175 57.3456 90.2677 56.2533 89.6489 55.3892C89.0744 54.5864 88.1257 54.1276 87.1692 53.8854C86.0046 53.5911 84.75 53.4382 83.5521 53.3551C81.4039 53.2053 79.2052 53.425 77.1261 53.8559C74.5579 54.3892 69.5107 55.9404 66.4464 58.9022C64.5505 60.7337 63.7462 62.5814 63.5878 62.9595C63.3246 63.5861 63.2936 65.7902 63.5995 68.5727C63.6949 69.4461 63.8184 70.6246 64.3665 71.3521Z" fill="#E6EEF5"/>
          <path d="M137.262 80.4193C136.801 80.4193 136.339 80.2492 135.978 79.9069L125.445 69.8979L79.5 26.2397L33.5554 69.8979L23.0217 79.9069C22.2756 80.6157 21.0963 80.5854 20.3874 79.8393C19.6786 79.0932 19.7089 77.9139 20.455 77.2051L30.9887 67.1962L78.2167 22.319C78.9356 21.6358 80.0645 21.6358 80.7834 22.319L128.011 67.1962L138.545 77.2051C139.291 77.9139 139.321 79.0932 138.613 79.8393C138.246 80.2252 137.754 80.4193 137.262 80.4193Z" fill="#333333"/>
          <path d="M126.727 137.193H32.2715C31.2428 137.193 30.4082 136.359 30.4082 135.33V68.5469C30.4082 67.5182 31.2428 66.6836 32.2715 66.6836C33.3002 66.6836 34.1348 67.5182 34.1348 68.5469V133.467H124.865V68.5469C124.865 67.5182 125.7 66.6836 126.728 66.6836C127.757 66.6836 128.591 67.5182 128.591 68.5469V135.331C128.591 136.359 127.757 137.193 126.727 137.193Z" fill="#333333"/>
          <path d="M93.2107 73.2824C92.6967 73.2824 92.196 73.0705 91.8404 72.6947C91.5671 72.4059 91.4087 72.0915 91.1471 71.5706C90.7162 70.7142 89.915 69.1203 88.2598 67.0226C87.5766 66.157 87.3033 65.8635 87.1263 65.6896C87.0168 65.5824 86.7823 65.362 86.4462 65.0918C86.0673 65.4776 85.6496 65.813 85.1962 66.0964C83.43 67.1996 81.6645 67.1561 80.3758 67.1243L80.2857 67.122C80.2469 67.1212 76.3317 67.0327 72.1556 67.3207L71.9553 67.3347C70.5633 67.4294 69.2473 67.5195 68.2427 68.0552C67.3134 68.5505 66.7622 69.6234 66.398 71.6435C66.2723 72.3454 65.7777 72.9292 65.1085 73.166C64.2887 73.4556 63.4129 73.1838 62.878 72.4735C62.0302 71.347 61.8687 69.8827 61.7515 68.8129L61.7476 68.7772C61.5838 67.2889 61.2686 63.6726 61.8703 62.2394C62.1901 61.4778 63.1497 59.4981 65.152 57.5626C69.0695 53.777 75.4994 52.2918 76.7478 52.0325C79.1856 51.5263 81.5194 51.3462 83.6823 51.4968C85.2048 51.6024 86.4951 51.7934 87.627 52.0799C89.1806 52.4735 90.4041 53.2421 91.1642 54.3042C91.5555 54.8499 91.7907 55.4004 91.998 55.8864C92.1758 56.3017 92.3287 56.6604 92.5197 56.8646C92.8093 57.1744 93.2169 57.4647 93.6485 57.7722C94.1477 58.1278 94.7137 58.5315 95.23 59.0579C96.4838 60.3365 97.9023 62.484 98.1227 64.6749C98.33 66.7353 97.4457 68.5024 96.6531 69.8113C96.563 69.9596 96.1321 70.6296 95.7044 71.2554C94.8899 72.4471 94.3985 73.166 93.4086 73.2716C93.3427 73.2786 93.2767 73.2824 93.2107 73.2824ZM86.0665 60.8124C86.8724 60.8124 87.5331 61.2736 87.9143 61.5407L87.9508 61.5663C88.8203 62.1711 89.4406 62.7409 89.7325 63.0266C90.0501 63.3372 90.4189 63.7432 91.1851 64.7145C92.1703 65.9629 92.89 67.0537 93.4226 67.9504C93.4389 67.924 93.4537 67.8999 93.4661 67.8797C94.1974 66.6732 94.4901 65.799 94.4148 65.0475C94.3162 64.0646 93.5577 62.6749 92.5694 61.6672C92.2837 61.3753 91.8963 61.0997 91.4856 60.807C90.9499 60.425 90.3435 59.9926 89.7993 59.4111C89.1604 58.7287 88.8343 57.9647 88.5719 57.3514C88.4197 56.9966 88.2893 56.6899 88.1348 56.4741C87.8964 56.1418 87.3918 55.8639 86.7125 55.6923C85.7979 55.4609 84.7226 55.3041 83.4238 55.2141C81.6009 55.0875 79.6095 55.2443 77.5055 55.6814C74.5421 56.2963 70.2069 57.8599 67.7419 60.2426C66.249 61.6851 65.5378 63.1454 65.3282 63.6314C65.2754 63.8643 65.2242 64.5483 65.2552 65.6383C65.6139 65.3107 66.0231 65.0157 66.4912 64.7665C68.2 63.8558 70.061 63.7285 71.703 63.6167L71.9002 63.6035C76.2556 63.303 80.2096 63.3931 80.3765 63.397L80.4682 63.3993C81.5077 63.4249 82.4052 63.4467 83.2243 62.935C83.6513 62.6687 84.02 62.2837 84.3189 61.7907C84.6062 61.3163 85.0813 60.977 85.6248 60.8598C85.7754 60.8272 85.9237 60.8124 86.0665 60.8124ZM87.5145 63.7067C87.5114 63.7122 87.5083 63.7168 87.5051 63.7223C87.5083 63.7168 87.5114 63.7114 87.5145 63.7067Z" fill="#333333"/>
          <path d="M79.6537 95.4166C78.7268 95.4166 77.6725 95.3273 76.5382 95.0773C75.5266 94.8545 72.8947 94.1069 70.314 91.9944C69.0773 90.9812 66.8095 88.7468 65.5215 85.1639C65.2125 84.3052 64.999 83.3922 64.8639 82.6989C62.8198 81.6873 61.2523 79.6897 60.7313 77.335C60.1289 74.6092 61.0497 71.9392 63.2592 70.01C64.034 69.333 65.2118 69.4129 65.888 70.1885C66.565 70.9634 66.485 72.1411 65.7094 72.8173C64.2126 74.1239 64.1544 75.5579 64.3694 76.5299C64.6838 77.9514 65.7839 79.1991 67.0448 79.5655C67.7528 79.7712 68.273 80.3745 68.3716 81.1058C68.4686 81.8255 68.6984 82.9901 69.0268 83.9031C70.0485 86.7446 71.9172 88.4922 72.6734 89.1109C74.6314 90.7141 76.5879 91.2723 77.3386 91.4377C79.4736 91.909 81.2298 91.5992 81.8858 91.4439C83.6753 91.0208 84.8911 90.1854 85.4097 89.8283C85.7839 89.5705 86.7637 88.8431 87.7645 87.6583C89.2139 85.9426 90.2869 83.5972 90.8668 80.876C91.026 80.1284 91.6261 79.5539 92.38 79.4265C93.3194 79.2682 94.5654 77.5244 94.7044 75.5952C94.7983 74.2947 94.376 73.4842 93.4498 73.1861C92.47 72.8709 91.9312 71.822 92.2464 70.8422C92.5616 69.8625 93.6113 69.3237 94.5903 69.6389C97.1709 70.4688 98.6383 72.8538 98.4209 75.8638C98.226 78.5617 96.6624 81.5678 94.2642 82.7012C93.5104 85.6103 92.2845 88.0838 90.6114 90.0635C89.3661 91.5379 88.141 92.4726 87.5214 92.8981C86.8895 93.3328 85.2118 94.4865 82.7421 95.0696C82.0791 95.2287 81.0007 95.4166 79.6537 95.4166Z" fill="#333333"/>
          <path d="M71.1395 100.626C70.8615 100.626 70.579 100.564 70.3127 100.432C69.3911 99.9748 69.0146 98.8568 69.4719 97.9345C69.8833 97.1046 70.5813 95.44 70.6294 93.6225C70.6473 92.944 70.5626 92.6451 70.4082 92.1024C70.3639 91.9464 70.3134 91.7694 70.263 91.5729C70.0075 90.5761 70.6085 89.5606 71.6045 89.3052C72.6014 89.049 73.6169 89.6499 73.8723 90.6467C73.9111 90.7974 73.9507 90.9371 73.9926 91.0854C74.1774 91.736 74.3863 92.4743 74.3536 93.7204C74.2869 96.2537 73.3576 98.4857 72.8095 99.5913C72.4849 100.247 71.825 100.626 71.1395 100.626Z" fill="#333333"/>
          <path d="M87.8257 101.131C87.1735 101.131 86.54 100.788 86.1984 100.178C85.3677 98.6953 84.3623 96.3716 84.2924 93.7203C84.2606 92.4735 84.4601 91.7678 84.6534 91.0861C84.6705 91.0248 84.6884 90.9627 84.7062 90.8983C84.9818 89.9068 86.009 89.3261 87.0004 89.6017C87.9918 89.8773 88.5725 90.9045 88.2969 91.8959C88.2775 91.9658 88.2581 92.0341 88.2395 92.1008C88.0858 92.6443 88.0011 92.944 88.0182 93.6241C88.0679 95.513 88.8241 97.2404 89.4498 98.3568C89.9529 99.2543 89.6331 100.39 88.7356 100.893C88.4468 101.054 88.1339 101.131 87.8257 101.131Z" fill="#333333"/>
          <path d="M113.73 137.194H45.2683C44.2411 137.194 43.4081 136.363 43.405 135.336C43.3918 131.151 43.544 116.865 46.0625 108.748C46.7193 106.63 47.5182 104.897 48.5764 103.299C49.4606 101.96 52.0133 98.5926 56.5784 96.272C60.7545 94.1494 64.7489 93.8311 67.3652 93.9398C67.8124 93.9584 68.2379 94.137 68.5639 94.4429L75.7259 101.167C76.4759 101.871 76.5132 103.05 75.809 103.8C75.1048 104.55 73.9255 104.588 73.1756 103.884L66.5337 97.6477C64.3785 97.64 61.3825 98.0103 58.2678 99.5933C54.4946 101.511 52.4077 104.26 51.6857 105.353C50.8154 106.668 50.1796 108.055 49.6229 109.851C47.5453 116.548 47.1859 128.041 47.1378 133.467H111.862C111.815 128.042 111.455 116.548 109.378 109.852C108.821 108.056 108.184 106.668 107.316 105.355C106.593 104.261 104.506 101.512 100.733 99.5933C97.6047 98.0033 94.5948 97.6361 92.4396 97.6477L85.4103 103.915C84.6425 104.6 83.4648 104.533 82.7792 103.765C82.0945 102.997 82.1612 101.819 82.9298 101.134L90.4707 94.4095C90.7921 94.123 91.2036 93.9561 91.6337 93.9383C94.2493 93.8303 98.2445 94.1479 102.421 96.2705C106.986 98.591 109.537 101.958 110.423 103.298C111.481 104.896 112.28 106.628 112.936 108.747C115.455 116.864 115.607 131.15 115.594 135.335C115.59 136.363 114.757 137.194 113.73 137.194Z" fill="#333333"/>
          <path d="M99.0216 137.195H59.9766C55.5241 137.195 51.9023 133.573 51.9023 129.12V127.773C51.9023 126.745 52.7369 125.91 53.7656 125.91H105.233C106.261 125.91 107.096 126.745 107.096 127.773V129.12C107.096 133.573 103.473 137.195 99.0216 137.195ZM55.6592 129.637C55.9154 131.791 57.7538 133.468 59.9766 133.468H99.0216C101.244 133.468 103.083 131.792 103.339 129.637H55.6592Z" fill="#333333"/>
          <path d="M101.698 129.636H57.2988C56.2701 129.636 55.4355 128.802 55.4355 127.773V105.631C55.4355 102.891 57.6645 100.662 60.4043 100.662H98.593C101.333 100.662 103.562 102.891 103.562 105.631V127.773C103.561 128.802 102.727 129.636 101.698 129.636ZM59.1621 125.91H99.8352V105.631C99.8352 104.946 99.2778 104.389 98.593 104.389H60.4043C59.7195 104.389 59.1621 104.946 59.1621 105.631V125.91Z" fill="#333333"/>
          <path d="M79.4996 120.681C76.45 120.681 73.9688 118.2 73.9688 115.15C73.9688 112.1 76.45 109.619 79.4996 109.619C82.5492 109.619 85.0304 112.1 85.0304 115.15C85.0304 118.2 82.5492 120.681 79.4996 120.681ZM79.4996 113.345C78.5043 113.345 77.6953 114.155 77.6953 115.149C77.6953 116.144 78.5051 116.953 79.4996 116.953C80.4941 116.953 81.3039 116.144 81.3039 115.149C81.3039 114.155 80.4949 113.345 79.4996 113.345Z" fill="#333333"/>
          </svg>


          <article class="glass-case-card">
            <div>
              <span class="role-tag">Family Office</span>
              <h3 class="card-title-h3">Multi-Generational<br>Wealth Safeguard &amp; Plan B</h3>
              <p class="card-body-copy">
                Structured Caribbean CBI and UAE Golden Visa for a family of 6 amidst regional political volatility. Created a sovereign safe-haven and zero-tax domicile for international investments.
              </p>
            </div>
            <div class="card-meta-footer">
              <span>Outlay: $350,000 USD</span>
              <span class="meta-dot">&bull;</span>
              <span class="meta-timeframe">Timeframe: 5 Months</span>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    9. REQUEST A PRIVATE ELIGIBILITY REVIEW
    ========================================================= -->
<section class="eligibility-section" id="consultation">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-12 col-lg-6" data-reveal="fade-right" data-delay="0">
        <h2 class="eligibility-title">Request a Private Eligibility Review</h2>
        <p class="eligibility-desc">
          Connect directly with a Senior Sovereign Partner. Complete the assessment below for an immediate, non-binding preliminary clearance consultation.
        </p>

        <form action="#" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-12 col-sm-6">
              <div class="input-icon-group">
                <span class="field-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"></circle><path d="M5 20c0-3.87 3.13-7 7-7s7 3.13 7 7"></path></svg>
                </span>
                <input type="text" class="eligibility-input" placeholder="Full Legal Name*" required />
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <div class="input-icon-group">
                <span class="field-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m3 7 9 6 9-6"></path></svg>
                </span>
                <input type="email" class="eligibility-input" placeholder="Private Email Address*" required />
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <div class="input-icon-group">
                <span class="field-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </span>
                <input type="tel" class="eligibility-input" placeholder="Phone / WhatsApp*" required />
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <div class="input-icon-group">
                <span class="field-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="5" y="3" width="14" height="18" rx="2"></rect><circle cx="12" cy="11" r="3.5"></circle><line x1="9" y1="17.5" x2="15" y2="17.5"></line></svg>
                </span>
                <input type="text" class="eligibility-input" placeholder="Current Citizenship / Passport" />
              </div>
            </div>

            <div class="col-12">
              <textarea class="eligibility-textarea" rows="3" placeholder="Specify Key Goals (e.g., Tax reduction, EU Settlement, Wealth Transfer)..."></textarea>
            </div>

            <div class="col-12 mt-3">
              <button type="submit" class="btn btn-confidential">Submit Confidential Request</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-12 col-lg-6" data-reveal="fade-left" data-delay="140">
        <div class="eligibility-visual-wrap">
          <img src="<?= $img; ?>/Eligibility-Review.png" alt="Eligibility Review Globe, Passport, and Security Shield" class="eligibility-visual-img" loading="lazy" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
    UNIFIED SCRIPTS (AMBIENT OBJECTS + REVEALS + INTERACTIVITY)
    ========================================================= -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    // 1. RANDOM AMBIENT SMALL OBJECT GENERATOR
    const ambientCanvas = document.getElementById("ambientSovereignObjects");
    if (ambientCanvas && !window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      const shapes = [
        // Gold Ring
        `<svg viewBox="0 0 32 32"><circle cx="16" cy="16" r="11" fill="none" stroke="#a6823e" stroke-width="1.6"/></svg>`,
        // Compass Star
        `<svg viewBox="0 0 32 32"><path d="M16 2 L18.5 13.5 L30 16 L18.5 18.5 L16 30 L13.5 18.5 L2 16 L13.5 13.5 Z" fill="none" stroke="#a6823e" stroke-width="1.3"/></svg>`,
        // Diamond Outline
        `<svg viewBox="0 0 32 32"><rect x="8" y="8" width="16" height="16" transform="rotate(45 16 16)" fill="none" stroke="#0b3c6d" stroke-width="1.4"/></svg>`,
        // Solid Gold Dot
        `<svg viewBox="0 0 20 20"><circle cx="10" cy="10" r="4" fill="#a6823e"/></svg>`,
        // Crosshair / Plus
        `<svg viewBox="0 0 24 24"><path d="M12 4v16M4 12h16" stroke="#a6823e" stroke-width="1.5" stroke-linecap="round"/></svg>`
      ];

      const objectCount = window.innerWidth < 768 ? 10 : 18;
      const rand = (min, max) => Math.random() * (max - min) + min;
      const fragment = document.createDocumentFragment();

      for (let i = 0; i < objectCount; i++) {
        const el = document.createElement("div");
        el.className = "ambient-float-item";
        const size = Math.round(rand(14, 34));

        el.style.width = `${size}px`;
        el.style.height = `${size}px`;
        el.style.left = `${rand(2, 96).toFixed(2)}%`;
        el.style.top = `${rand(3, 94).toFixed(2)}%`;

        el.style.setProperty("--dur", `${rand(14, 28).toFixed(1)}s`);
        el.style.setProperty("--delay", `${rand(-15, 0).toFixed(1)}s`);
        el.style.setProperty("--max-opacity", rand(0.18, 0.42).toFixed(2));
        el.style.setProperty("--dx1", `${rand(-28, 28).toFixed(0)}px`);
        el.style.setProperty("--dy1", `${rand(-32, 32).toFixed(0)}px`);
        el.style.setProperty("--rot1", `${rand(-25, 25).toFixed(0)}deg`);
        el.style.setProperty("--dx2", `${rand(-28, 28).toFixed(0)}px`);
        el.style.setProperty("--dy2", `${rand(-32, 32).toFixed(0)}px`);
        el.style.setProperty("--rot2", `${rand(-25, 25).toFixed(0)}deg`);
        el.style.setProperty("--dx3", `${rand(-28, 28).toFixed(0)}px`);
        el.style.setProperty("--dy3", `${rand(-32, 32).toFixed(0)}px`);
        el.style.setProperty("--rot3", `${rand(-25, 25).toFixed(0)}deg`);

        el.innerHTML = shapes[Math.floor(Math.random() * shapes.length)];
        fragment.appendChild(el);
        requestAnimationFrame(() => el.classList.add("is-ready"));
      }
      ambientCanvas.appendChild(fragment);

      // Subtle mouse parallax
      let ticking = false;
      window.addEventListener("mousemove", (e) => {
        if (!ticking) {
          requestAnimationFrame(() => {
            const xOffset = (e.clientX / window.innerWidth - 0.5) * -18;
            const yOffset = (e.clientY / window.innerHeight - 0.5) * -18;
            ambientCanvas.style.transform = `translate3d(${xOffset}px, ${yOffset}px, 0)`;
            ticking = false;
          });
          ticking = true;
        }
      }, { passive: true });
    }

    // 2. UNIFIED SCROLL REVEAL & COUNTER ENGINE
    const animateCounter = (el) => {
      const target = parseFloat(el.dataset.target);
      const decimals = parseInt(el.dataset.decimals || "0", 10);
      const prefix = el.dataset.prefix || "";
      const suffix = el.dataset.suffix || "";
      const duration = 1600;
      const startTime = performance.now();

      const step = (now) => {
        const progress = Math.min((now - startTime) / duration, 1);
        const easeOut = 1 - Math.pow(1 - progress, 3);
        el.textContent = `${prefix}${(target * easeOut).toFixed(decimals)}${suffix}`;
        if (progress < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    };

    const revealObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const delay = parseInt(el.dataset.delay || "0", 10);

        setTimeout(() => {
          el.classList.add("is-revealed");
          const counter = el.querySelector(".counter");
          if (counter) animateCounter(counter);
        }, delay);

        obs.unobserve(el);
      });
    }, { threshold: 0.14 });

    document.querySelectorAll("[data-reveal]").forEach((el) => revealObserver.observe(el));

    // Roadmap Wave Trigger
    const roadmapSection = document.querySelector(".sovereign-roadmap-section");
    if (roadmapSection) {
      const waveObserver = new IntersectionObserver((entries, obs) => {
        if (entries[0].isIntersecting) {
          roadmapSection.classList.add("wave-drawn");
          obs.disconnect();
        }
      }, { threshold: 0.15 });
      waveObserver.observe(roadmapSection);
    }

    // 3. INTERACTIVE ESTIMATOR
    const programData = {
      stkitts: { outlay: { single: "$250,000 USD", couple: "$250,000 USD", family4: "$250,000 USD" }, time: "4 - 6 Months", visa: "157 Countries", stay: "0 Days/Year" },
      portugal: { outlay: { single: "€500,000 EUR", couple: "€515,000 EUR", family4: "€530,000 EUR" }, time: "8 - 12 Months", visa: "191 Countries (EU)", stay: "7 Days/Year" },
      malta: { outlay: { single: "€690,000 EUR", couple: "€740,000 EUR", family4: "€840,000 EUR" }, time: "12 - 14 Months", visa: "190 Countries (EU)", stay: "14 Days Total" },
      uae: { outlay: { single: "$545,000 USD", couple: "$545,000 USD", family4: "$550,000 USD" }, time: "2 - 4 Weeks", visa: "183 Countries (Residency)", stay: "1 Visit / 6 Mos" },
      greece: { outlay: { single: "€250,000 EUR", couple: "€250,000 EUR", family4: "€250,000 EUR" }, time: "3 - 5 Months", visa: "190 Countries (Schengen)", stay: "0 Days/Year" }
    };

    let selectedFamily = "family4";
    const jurisdictionEl = document.getElementById("jurisdictionSelect");
    const objectiveEl = document.getElementById("objectiveSelect");
    const familyBtns = document.querySelectorAll(".family-btn");
    const [outlayVal, timeVal, visaVal, stayVal] = ["outlayVal", "timeVal", "visaVal", "stayVal"].map((id) => document.getElementById(id));

    const updateEstimator = () => {
      const data = programData[jurisdictionEl.value];
      const vals = [outlayVal, timeVal, visaVal, stayVal];
      vals.forEach((v) => v.classList.add("updating"));

      setTimeout(() => {
        outlayVal.textContent = data.outlay[selectedFamily];
        timeVal.textContent = data.time;
        visaVal.textContent = data.visa;
        stayVal.textContent = data.stay;
        vals.forEach((v) => v.classList.remove("updating"));
      }, 160);
    };

    jurisdictionEl?.addEventListener("change", updateEstimator);
    objectiveEl?.addEventListener("change", updateEstimator);
    familyBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        familyBtns.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        selectedFamily = btn.dataset.size;
        updateEstimator();
      });
    });

    // 4. MATRIX FILTER & SEARCH
    const filterButtons = document.querySelectorAll(".filter-btn");
    const searchInput = document.getElementById("matrixSearchInput");
    const rows = document.querySelectorAll("#sovereignMatrixTable tbody tr");
    const emptyState = document.getElementById("matrixEmptyState");
    let activeCategory = "all";

    const filterMatrix = () => {
      const query = searchInput.value.trim().toLowerCase();
      let visibleCount = 0;

      rows.forEach((row) => {
        const tags = row.dataset.tags || "";
        const matchesCat = activeCategory === "all" || tags.includes(activeCategory);
        const matchesSearch = row.textContent.toLowerCase().includes(query);
        const show = matchesCat && matchesSearch;
        row.style.display = show ? "" : "none";
        if (show) visibleCount++;
      });

      emptyState.style.display = visibleCount === 0 ? "block" : "none";
    };

    filterButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        filterButtons.forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        activeCategory = btn.dataset.filter;
        filterMatrix();
      });
    });

    searchInput?.addEventListener("input", filterMatrix);
  });
</script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>