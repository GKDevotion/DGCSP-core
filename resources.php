<?php
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/resources';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp?v=' . FILE_VERSISON)
    ? 'hero-bg.webp?v=' . FILE_VERSISON
    : 'hero-bg.svg';

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp?v=' . FILE_VERSISON)
    ? 'cta-bg.webp?v=' . FILE_VERSISON
    : 'cta-bg.svg';
?>

<style>
  /* ==========================================================================
     1. Scoped Design Tokens & Section Styles
     ========================================================================== */
  .rh-hub-wrapper {
    --rh-gold: #ab8139;
    --rh-gold-accent: #c28e15;
    --rh-gold-dark: #966e27;
    --rh-slate: #4f5459;
    --rh-sand: #f4dca6;
    --rh-silver: #d6d7d9;
    --rh-ink: #111315;
    --rh-muted: #5c636a;
    --rh-surface: #ffffff;
    --rh-bg-soft: #faf9f6;
    --rh-border: #e8e6e0;
    background-color: var(--rh-bg-soft);
    color: var(--rh-ink);
    overflow-x: clip;
  }

  /* Subtle ambient geometric & net-node movement across sections */
  .rh-ambient-layer {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
    z-index: 0;
  }

  .rh-ambient-shape {
    position: absolute;
    will-change: transform;
  }

  .rh-shape-net {
    top: 12%;
    right: 6%;
    width: 190px;
    height: 150px;
    opacity: 0.42;
    animation: rhNetDrift 14s ease-in-out infinite;
  }

  .rh-shape-square {
    top: 22%;
    right: 14%;
    width: 22px;
    height: 22px;
    border: 1.5px solid rgba(171, 129, 57, 0.34);
    border-radius: 4px;
    animation: rhSquareFloat 11s ease-in-out infinite;
  }

  .rh-shape-triangle {
    bottom: 16%;
    right: 9%;
    width: 26px;
    height: 24px;
    animation: rhTriangleFloat 13s ease-in-out infinite;
  }

  .rh-shape-ring {
    top: 18%;
    left: 48%;
    width: 14px;
    height: 14px;
    border: 1.5px solid rgba(79, 84, 89, 0.22);
    border-radius: 50%;
    animation: rhRingDrift 10s ease-in-out infinite;
  }

  @keyframes rhNetDrift {
    0%, 100% {
      transform: translate3d(0, 0, 0) rotate(0deg);
    }
    50% {
      transform: translate3d(-10px, 12px, 0) rotate(1.5deg);
    }
  }

  @keyframes rhSquareFloat {
    0%, 100% {
      transform: translate3d(0, 0, 0) rotate(12deg);
    }
    50% {
      transform: translate3d(8px, -14px, 0) rotate(28deg);
    }
  }

  @keyframes rhTriangleFloat {
    0%, 100% {
      transform: translate3d(0, 0, 0) rotate(-8deg);
    }
    50% {
      transform: translate3d(-9px, -12px, 0) rotate(10deg);
    }
  }

  @keyframes rhRingDrift {
    0%, 100% {
      transform: translate3d(0, 0, 0);
    }
    50% {
      transform: translate3d(10px, 9px, 0);
    }
  }

  /* Hero Banner */
  .rh-hero-banner {
    background-color: #ffffff;
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    padding: clamp(3rem, 6vw, 5.25rem) 0 clamp(2.5rem, 4.5vw, 3.75rem);
    border-bottom: 1px solid var(--rh-border);
    position: relative;
  }

  .rh-eyebrow {
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #26292e;
  }

  .rh-accent-bar {
    width: 36px;
    height: 3px;
    background-color: var(--rh-gold);
    border-radius: 2px;
  }

  .rh-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.6rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.025em;
    color: var(--rh-ink);
  }

  .rh-gold-text {
    color: var(--rh-gold);
  }

  .rh-hero-lead {
    font-size: clamp(1rem, 1.35vw, 1.15rem);
    line-height: 1.6;
    color: var(--rh-muted);
    max-width: 520px;
  }

  .rh-search-box {
    max-width: 470px;
    background: #ffffff;
    border: 1.5px solid #e2dfd7;
    border-radius: 999px;
    padding: 0.35rem 0.35rem 0.35rem 1.35rem;
    box-shadow: 0 10px 28px rgba(17, 19, 21, 0.05);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
  }

  .rh-search-box:focus-within {
    border-color: var(--rh-gold);
    box-shadow: 0 12px 30px rgba(171, 129, 57, 0.14);
  }

  .rh-search-input {
    font-size: 0.95rem;
    color: var(--rh-ink);
  }

  .rh-search-input::placeholder {
    color: #8c929a;
  }

  .rh-search-btn {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: 0;
    background-color: var(--rh-gold);
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease;
  }

  .rh-search-btn:hover {
    background-color: var(--rh-gold-dark);
    transform: scale(1.03);
  }

  /* KPI Cards */
  .rh-stat-card {
    border-radius: 14px;
    padding: 1.25rem 1rem;
    text-align: center;
    height: 100%;
    box-shadow: 0 10px 24px rgba(17, 19, 21, 0.06);
    transition: transform 0.22s ease, box-shadow 0.22s ease;
  }

  .rh-stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 28px rgba(17, 19, 21, 0.1);
  }

  .rh-stat-gold   { background-color: var(--rh-gold); color: #ffffff; }
  .rh-stat-slate  { background-color: var(--rh-slate); color: #ffffff; }
  .rh-stat-sand   { background-color: var(--rh-sand); color: var(--rh-ink); }
  .rh-stat-silver { background-color: var(--rh-silver); color: var(--rh-ink); }

  .rh-stat-value {
    font-size: clamp(1.5rem, 2.4vw, 2.05rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
  }

  .rh-stat-label {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-top: 0.35rem;
    opacity: 0.92;
  }

  /* ==========================================================================
     2. Editorial Spotlight Section
     ========================================================================== */
  .editorial-spotlight-v2 {
    background: #ffffff;
    color: #18191c;
  }

  .v2-divider {
    border-color: rgba(24, 25, 28, 0.08) !important;
  }

  .v2-eyebrow {
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.16em;
    color: #6c707a;
  }

  .v2-section-heading {
    font-size: clamp(1.45rem, 2.5vw, 2rem);
    color: #16171a;
    letter-spacing: -0.015em;
  }

  .v2-issue-tag {
    font-size: 0.82rem;
    font-weight: 500;
    color: #555962;
  }

  .v2-corner {
    position: absolute;
    pointer-events: none;
    z-index: 1;
    animation: v2SlowFloat 7s ease-in-out infinite;
  }

  .v2-corner-top-left {
    top: 24px;
    left: 24px;
  }

  .v2-corner-bottom-right {
    bottom: 24px;
    right: 24px;
    animation-delay: -3.5s;
  }

  @keyframes v2SlowFloat {
    0%, 100% { transform: translateY(0); }
    50%      { transform: translateY(-14px); }
  }

  .v2-media-stage {
    padding: 0 20px 20px 0;
  }

  .v2-backplate {
    position: absolute;
    top: 20px;
    right: 0;
    bottom: 0;
    left: 20px;
    border-radius: 20px;
    background-color: #ebe5d6;
    z-index: 0;
  }

  .v2-image-box {
    border-radius: 20px;
    box-shadow: 0 18px 38px rgba(22, 23, 26, 0.12);
    z-index: 1;
  }

  .v2-img {
    aspect-ratio: 16 / 11;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
  }

  .v2-image-box:hover .v2-img {
    transform: scale(1.03);
  }

  .v2-floating-caption {
    position: absolute;
    bottom: 6px;
    left: 22px;
    z-index: 2;
    padding: 0.55rem 1rem;
    border-radius: 999px;
    border: 1px solid rgba(168, 134, 62, 0.25);
  }

  .v2-status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #9e7b2f;
    flex-shrink: 0;
  }

  .v2-pill-label {
    background-color: #18191c;
    color: #f6e7c1;
    font-size: 0.75rem;
    font-weight: 500;
    padding: 0.4rem 0.9rem;
    border-radius: 999px;
  }

  .v2-article-title {
    font-size: clamp(1.5rem, 2.5vw, 2.1rem);
    line-height: 1.22;
    letter-spacing: -0.015em;
    color: #16171a;
  }

  .editorial-spotlight-v2 .text-gold {
    color: #9e7b2f;
  }

  .v2-article-lead {
    font-size: 0.94rem;
    line-height: 1.68;
    color: #555962;
  }

  .v2-takeaway {
    font-size: 0.86rem;
    line-height: 1.6;
    font-style: italic;
    color: #3b3e45;
    border-left: 3px solid #9e7b2f;
    margin-left: 0;
  }

  .v2-avatar {
    width: 44px;
    height: 44px;
    border: 2px solid #ffffff;
    box-shadow: 0 4px 12px rgba(22, 23, 26, 0.1);
  }

  .v2-author-name {
    font-size: 0.88rem;
    color: #16171a;
    line-height: 1.25;
  }

  .v2-author-role {
    font-size: 0.76rem;
    color: #6c707a;
  }

  .v2-btn {
    background-color: #9e7b2f;
    color: #ffffff;
    font-size: 0.86rem;
    font-weight: 500;
    padding: 0.65rem 1.35rem;
    border-radius: 10px;
    border: none;
    transition: background-color 0.25s ease, transform 0.2s ease;
  }

  .v2-btn:hover,
  .v2-btn:focus {
    background-color: #826422;
    color: #ffffff;
    transform: translateY(-2px);
  }

  /* ==========================================================================
     3. Most Popular Toolkits Section
     ========================================================================== */
  .pt-tk-section {
    --pt-gold: #c28e15;
    --pt-gold-dark: #a6770c;
    --pt-gold-soft: rgba(194, 142, 21, 0.28);
    --pt-ink: #111315;
    --pt-muted: #5c636a;
    --pt-border: #ece9e2;
    position: relative;
    background-color: #fcfbf8;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: clamp(3rem, 6vw, 4.75rem) 0;
    overflow-x: clip;
  }

  .pt-tk-title {
    font-size: clamp(1.75rem, 3.2vw, 2.5rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.025em;
    color: var(--pt-ink);
  }

  .pt-tk-gold {
    color: var(--pt-gold);
  }

  .pt-tk-bar {
    width: 34px;
    height: 3px;
    border-radius: 2px;
    background-color: var(--pt-gold);
  }

  .pt-tk-subtitle {
    font-size: clamp(0.95rem, 1.25vw, 1.08rem);
    color: var(--pt-muted);
    line-height: 1.5;
  }

  .pt-tk-view-all {
    background-color: #ffffff;
    color: var(--pt-ink);
    border: 1px solid #dedad0;
    border-radius: 999px;
    padding: 0.6rem 1.35rem;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    box-shadow: 0 6px 18px rgba(17, 19, 21, 0.04);
    transition: all 0.22s ease;
  }

  .pt-tk-view-all:hover {
    border-color: var(--pt-gold);
    color: var(--pt-gold-dark);
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(194, 142, 21, 0.12);
  }

  .pt-tk-view-all svg,
  .pt-tk-download-link svg {
    transition: transform 0.22s ease;
  }

  .pt-tk-view-all:hover svg {
    transform: translateX(3px);
  }

  .pt-tk-card {
    position: relative;
    overflow: hidden;
    background: linear-gradient(145deg, #ffffff 0%, #fffdf9 100%);
    border: 1px solid var(--pt-border);
    border-top: 2.5px solid var(--pt-gold-soft);
    border-left: 2.5px solid var(--pt-gold-soft);
    border-radius: 18px;
    padding: clamp(1.45rem, 2.5vw, 1.85rem);
    box-shadow: 0 10px 28px rgba(17, 19, 21, 0.045);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .pt-tk-card:hover {
    transform: translateY(-5px);
    border-top-color: var(--pt-gold);
    border-left-color: var(--pt-gold);
    border-color: rgba(194, 142, 21, 0.35);
    box-shadow: 0 18px 36px rgba(17, 19, 21, 0.08);
  }

  .pt-tk-format-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    padding: 0.32rem 0.7rem 0.32rem 0.35rem;
    border-radius: 8px;
    font-size: 0.78rem;
    font-weight: 700;
  }

  .pt-tk-format-icon {
    width: 20px;
    height: 20px;
    border-radius: 5px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.72rem;
    font-weight: 800;
    color: #ffffff;
  }

  .pt-tk-pill-excel { background-color: #eef7f1; color: #166534; border: 1px solid #cce8d6; }
  .pt-tk-pill-excel .pt-tk-format-icon { background-color: #1d7a46; }

  .pt-tk-pill-pdf { background-color: #fdf1f0; color: #991b1b; border: 1px solid #f7d4d1; }
  .pt-tk-pill-pdf .pt-tk-format-icon { background-color: #dc2626; }

  .pt-tk-pill-ppt { background-color: #fff4ec; color: #9a3412; border: 1px solid #f9dcc7; }
  .pt-tk-pill-ppt .pt-tk-format-icon { background-color: #ea580c; }

  .pt-tk-downloads {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    font-size: 0.82rem;
    font-weight: 600;
    color: #6b7280;
  }

  .pt-tk-card-title {
    font-size: clamp(1.15rem, 1.5vw, 1.32rem);
    font-weight: 700;
    line-height: 1.32;
    letter-spacing: -0.015em;
    color: var(--pt-ink);
    margin-bottom: 0.65rem;
  }

  .pt-tk-card-desc {
    font-size: 0.92rem;
    line-height: 1.58;
    color: var(--pt-muted);
    margin-bottom: 0;
    max-width: 92%;
  }

  .pt-tk-download-link {
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--pt-gold-dark);
    text-decoration: none;
    transition: color 0.2s ease;
  }

  .pt-tk-download-link:hover {
    color: var(--pt-ink);
  }

  .pt-tk-download-link:hover svg {
    transform: translateX(4px);
  }

  .pt-tk-watermark {
    position: absolute;
    right: -12px;
    bottom: -14px;
    pointer-events: none;
    opacity: 0.16;
    transition: opacity 0.25s ease, transform 0.25s ease;
  }

  .pt-tk-card:hover .pt-tk-watermark {
    opacity: 0.24;
    transform: scale(1.04);
  }

  .pt-tk-wm-doc {
    width: 96px;
    height: 112px;
    border-radius: 12px;
    padding: 12px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .pt-tk-wm-excel .pt-tk-wm-doc { background-color: #dcfce7; border: 1px solid #86efac; color: #15803d; }
  .pt-tk-wm-pdf .pt-tk-wm-doc   { background-color: #fee2e2; border: 1px solid #fca5a5; color: #b91c1c; }
  .pt-tk-wm-ppt .pt-tk-wm-doc   { background-color: #ffedd5; border: 1px solid #fdba74; color: #c2410c; }

  .pt-tk-wm-badge {
    font-size: 0.95rem;
    font-weight: 800;
    letter-spacing: 0.04em;
  }

  .pt-tk-wm-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 4px;
  }

  .pt-tk-wm-grid span {
    height: 12px;
    border-radius: 2px;
    background-color: currentColor;
    opacity: 0.35;
  }

  .pt-tk-wm-lines {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }

  .pt-tk-wm-lines span {
    height: 5px;
    border-radius: 3px;
    background-color: currentColor;
    opacity: 0.35;
  }

  .pt-tk-wm-lines span:last-child { width: 65%; }

  .pt-tk-wm-bars {
    display: flex;
    align-items: flex-end;
    gap: 6px;
    height: 30px;
  }

  .pt-tk-wm-bars span {
    flex: 1;
    border-radius: 3px 3px 0 0;
    background-color: currentColor;
    opacity: 0.38;
  }

  .pt-tk-wm-bars span:nth-child(1) { height: 55%; }
  .pt-tk-wm-bars span:nth-child(2) { height: 100%; }
  .pt-tk-wm-bars span:nth-child(3) { height: 75%; }

  /* ==========================================================================
     4. Custom Research CTA Section
     ========================================================================== */
  .rh-custom-cta {
    min-height: 500px;
    background-size: inherit;
    background-position: left center;
    background-repeat: no-repeat;
  }

  .rh-cta-scrim {
    background: rgba(255, 255, 255, 0.88);
  }

  /* Responsive Adjustments */
  @media (max-width: 991.98px) {
    .rh-hero-banner {
      background-position: center top;
    }

    .rh-hero-banner::before {
      content: "";
      position: absolute;
      inset: 0;
      pointer-events: none;
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.95) 0%,
        rgba(255, 255, 255, 0.92) 70%,
        rgba(255, 255, 255, 0.97) 100%
      );
    }

    .rh-shape-net,
    .rh-shape-square,
    .rh-shape-triangle {
      opacity: 0.24;
    }
  }

  @media (max-width: 767.98px) {
    .pt-tk-card-desc {
      max-width: 100%;
    }
  }

  @media (max-width: 575.98px) {
    .rh-stat-card {
      padding: 1rem 0.75rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .rh-ambient-shape,
    .v2-corner {
      animation: none;
    }
  }
</style>

<div class="rh-hub-wrapper">

  <!-- SECTION 1: Hero & KPI Strip -->
  <div class="rh-hero-banner" style="background-image: url('<?= htmlspecialchars($img, ENT_QUOTES, 'UTF-8'); ?>/header-banner-enterprise-resource-hub.png');">
    <!-- Subtle Spider-Net & Geometric Movement -->
    <div class="rh-ambient-layer" aria-hidden="true">
      <svg class="rh-ambient-shape rh-shape-net" viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="24" y1="28" x2="96" y2="54" stroke="rgba(171, 129, 57, 0.32)" stroke-width="1" />
        <line x1="96" y1="54" x2="168" y2="34" stroke="rgba(171, 129, 57, 0.32)" stroke-width="1" />
        <line x1="96" y1="54" x2="128" y2="116" stroke="rgba(171, 129, 57, 0.32)" stroke-width="1" />
        <line x1="24" y1="28" x2="54" y2="108" stroke="rgba(171, 129, 57, 0.24)" stroke-width="1" />
        <line x1="54" y1="108" x2="128" y2="116" stroke="rgba(171, 129, 57, 0.28)" stroke-width="1" />
        <line x1="128" y1="116" x2="168" y2="34" stroke="rgba(171, 129, 57, 0.24)" stroke-width="1" />
        <circle cx="24" cy="28" r="2.5" fill="rgba(171, 129, 57, 0.55)" />
        <circle cx="96" cy="54" r="3" fill="rgba(171, 129, 57, 0.65)" />
        <circle cx="168" cy="34" r="2.5" fill="rgba(171, 129, 57, 0.55)" />
        <circle cx="54" cy="108" r="2.5" fill="rgba(171, 129, 57, 0.5)" />
        <circle cx="128" cy="116" r="3" fill="rgba(171, 129, 57, 0.6)" />
      </svg>

      <div class="rh-ambient-shape rh-shape-square"></div>

      <svg class="rh-ambient-shape rh-shape-triangle" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <polygon points="14,2 26,22 2,22" stroke="rgba(171, 129, 57, 0.36)" stroke-width="1.5" fill="none" />
      </svg>

      <div class="rh-ambient-shape rh-shape-ring"></div>
    </div>

    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-lg-7 col-xl-6" data-aos="fade-right" data-aos-duration="700">
          <p class="rh-eyebrow mb-2">KNOWLEDGE BASE &amp; INSIGHTS</p>
          <div class="rh-accent-bar mb-3"></div>
          <h1 class="rh-hero-title mb-3">
            Enterprise Resource<br>
            <span class="rh-gold-text">Hub</span>
          </h1>
          <p class="rh-hero-lead mb-4">
            Access world-class research whitepapers, executive frameworks, industry benchmarks, and actionable operational toolkits.
          </p>

          <form class="rh-search-box d-flex align-items-center" id="rhSearchForm" role="search">
            <input
              type="search"
              id="rhSearchInput"
              class="form-control rh-search-input border-0 bg-transparent shadow-none"
              placeholder="Search resources by keyword, topic, or format..."
              aria-label="Search resources by keyword, topic, or format"
            >
            <button type="submit" class="rh-search-btn flex-shrink-0" aria-label="Search resources">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
            </button>
          </form>
        </div>
      </div>

      <!-- KPI Strip -->
      <div class="row g-3 g-md-4 rh-stats-row mt-4 mt-lg-5" data-aos="fade-up" data-aos-delay="120" data-aos-duration="700">
        <div class="col-6 col-lg-3">
          <div class="rh-stat-card rh-stat-gold">
            <div class="rh-stat-value">250+</div>
            <div class="rh-stat-label">VERIFIED ASSETS</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="rh-stat-card rh-stat-slate">
            <div class="rh-stat-value">45+</div>
            <div class="rh-stat-label">WHITEPAPERS</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="rh-stat-card rh-stat-sand">
            <div class="rh-stat-value">85K+</div>
            <div class="rh-stat-label">ACTIVE DOWNLOADS</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="rh-stat-card rh-stat-silver">
            <div class="rh-stat-value">4.9/5</div>
            <div class="rh-stat-label">USER RATING</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION 2: Featured Spotlight Section -->
  <section class="editorial-spotlight-v2 position-relative overflow-hidden py-5" aria-label="Featured Insight Spotlight">
    <div class="v2-corner v2-corner-top-left d-none d-md-block" aria-hidden="true">
      <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="16" y1="16" x2="84" y2="16" stroke="rgba(184, 132, 30, 0.35)" stroke-width="1.5" />
        <line x1="16" y1="16" x2="16" y2="84" stroke="rgba(184, 132, 30, 0.35)" stroke-width="1.5" />
        <polygon points="16,10 22,16 16,22 10,16" fill="#b8841e" />
      </svg>
    </div>

    <div class="v2-corner v2-corner-bottom-right d-none d-md-block" aria-hidden="true">
      <svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="20" y1="92" x2="92" y2="92" stroke="rgba(63, 67, 72, 0.22)" stroke-width="1.5" />
        <line x1="92" y1="20" x2="92" y2="92" stroke="rgba(63, 67, 72, 0.22)" stroke-width="1.5" />
        <circle cx="92" cy="92" r="5" fill="#b8841e" />
      </svg>
    </div>

    <div class="container py-2 py-md-3">
      <!-- Section Eyebrow Header -->
      <div class="d-flex flex-wrap align-items-end justify-content-between gap-2 mb-4 pb-2 border-bottom v2-divider" data-aos="fade-up" data-aos-duration="600">
        <div>
          <span class="v2-eyebrow text-uppercase d-block mb-1">Featured Briefing</span>
          <h2 class="v2-section-heading fw-bold mb-0">Editor&rsquo;s Choice <span class="text-gold">Spotlight</span></h2>
        </div>
        <div class="v2-issue-tag">
          <i class="bi bi-journal-richtext me-1 text-gold" aria-hidden="true"></i>
          <span>Q4 Strategy Dispatch &bull; 8 min read</span>
        </div>
      </div>

      <!-- Main Split Layout -->
      <div class="row align-items-center g-4 g-lg-5">
        <!-- Left Visual Composition with Offset Backing Panel -->
        <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="750">
          <div class="v2-media-stage position-relative">
            <div class="v2-backplate" aria-hidden="true"></div>
            <div class="v2-image-box position-relative overflow-hidden">
              <img
                src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1000&q=80"
                alt="Global network connectivity across the planet"
                class="img-fluid w-100 v2-img"
              >
            </div>
            <div class="v2-floating-caption bg-white shadow-sm d-none d-sm-flex align-items-center gap-2">
              <span class="v2-status-dot" aria-hidden="true"></span>
              <span class="small fw-medium text-dark">Enterprise AI &amp; Cloud Architecture</span>
            </div>
          </div>
        </div>

        <!-- Right Editorial Copy -->
        <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-duration="750" data-aos-delay="100">
          <div class="v2-copy-wrap">
            <span class="v2-pill-label d-inline-flex align-items-center gap-2 mb-3">
              <i class="bi bi-stars" aria-hidden="true"></i>
              Editor&rsquo;s Choice Spotlight
            </span>

            <h3 class="v2-article-title fw-bold mb-3">
              The 2026 <span class="text-gold">Enterprise AI</span> Roadmap: Bridging Strategy &amp; Scalable Architecture
            </h3>

            <p class="v2-article-lead mb-4">
              How Fortune 500 tech leaders are transitioning from experimental GenAI proofs-of-concept into resilient, zero-trust cloud architectures with measurable ROI.
            </p>

            <blockquote class="v2-takeaway ps-3 mb-4">
              &ldquo;Sustainable AI scale comes from disciplined governance, modular cloud foundations, and clear unit economics—not one-off pilots.&rdquo;
            </blockquote>

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-2">
              <div class="d-flex align-items-center gap-3">
                <img
                  src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80"
                  alt="Dr. Victoria Vance"
                  class="v2-avatar rounded-circle object-fit-cover"
                >
                <div>
                  <div class="v2-author-name fw-semibold">Dr. Victoria Vance</div>
                  <div class="v2-author-role">Chief Technology Strategist &bull; Oct 12, 2026</div>
                </div>
              </div>

              <a href="#article-enterprise-ai-roadmap" class="btn v2-btn d-inline-flex align-items-center gap-2">
                <span>Read Full Article</span>
                <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Most Popular Toolkits -->
  <section class="pt-tk-section" style="background-image: url('<?= htmlspecialchars($img, ENT_QUOTES, 'UTF-8'); ?>/Most-Popular-Toolkits.png');" aria-labelledby="ptTkHeading">
    <div class="container position-relative">
      <!-- Section Header -->
      <div class="row align-items-end justify-content-between gy-3 mb-4 mb-md-5" data-aos="fade-up" data-aos-duration="650">
        <div class="col-lg-8">
          <h2 id="ptTkHeading" class="pt-tk-title mb-2">
            Most Popular <span class="pt-tk-gold">Toolkits</span>
          </h2>
          <div class="pt-tk-bar mb-3"></div>
          <p class="pt-tk-subtitle mb-0">
            High-demand quick access files used by thousands of professionals.
          </p>
        </div>
        <div class="col-lg-auto">
          <a href="#all-toolkits" class="pt-tk-view-all d-inline-flex align-items-center gap-2" id="ptViewAllBtn">
            <span>View All Library</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </div>

      <!-- Toolkits Grid -->
      <div class="row g-4">
        <!-- Card 1: Excel / Sheet -->
        <div class="col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="50" data-aos-duration="650">
          <article class="pt-tk-card h-100 d-flex flex-column justify-content-between">
            <div class="pt-tk-watermark pt-tk-wm-excel" aria-hidden="true">
              <div class="pt-tk-wm-doc">
                <span class="pt-tk-wm-badge">X</span>
                <div class="pt-tk-wm-grid">
                  <span></span><span></span><span></span>
                  <span></span><span></span><span></span>
                </div>
              </div>
            </div>

            <div class="position-relative">
              <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                <span class="pt-tk-format-pill pt-tk-pill-excel">
                  <span class="pt-tk-format-icon" aria-hidden="true">X</span>
                  <span>Excel / Sheet</span>
                </span>
                <span class="pt-tk-downloads" title="Downloads">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                  </svg>
                  <span>14.2k</span>
                </span>
              </div>

              <h3 class="pt-tk-card-title">
                M&amp;A Acquisition Due Diligence Checklist
              </h3>
              <p class="pt-tk-card-desc">
                120+ point audit checklist covering legal, financial, and tech assets.
              </p>
            </div>

            <div class="position-relative pt-3 mt-4">
              <a href="#download-ma-checklist" class="pt-tk-download-link d-inline-flex align-items-center gap-2" data-toolkit="M&A Acquisition Due Diligence Checklist">
                <span>Download File</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </article>
        </div>

        <!-- Card 2: PDF Matrix -->
        <div class="col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="650">
          <article class="pt-tk-card h-100 d-flex flex-column justify-content-between">
            <div class="pt-tk-watermark pt-tk-wm-pdf" aria-hidden="true">
              <div class="pt-tk-wm-doc">
                <span class="pt-tk-wm-badge">PDF</span>
                <div class="pt-tk-wm-lines">
                  <span></span><span></span><span></span>
                </div>
              </div>
            </div>

            <div class="position-relative">
              <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                <span class="pt-tk-format-pill pt-tk-pill-pdf">
                  <span class="pt-tk-format-icon" aria-hidden="true">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                      <polyline points="14 2 14 8 20 8"></polyline>
                    </svg>
                  </span>
                  <span>PDF Matrix</span>
                </span>
                <span class="pt-tk-downloads" title="Downloads">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                  </svg>
                  <span>9.8k</span>
                </span>
              </div>

              <h3 class="pt-tk-card-title">
                OKRs &amp; Goal Setting Playbook
              </h3>
              <p class="pt-tk-card-desc">
                Step-by-step framework to align department goals with enterprise vision.
              </p>
            </div>

            <div class="position-relative pt-3 mt-4">
              <a href="#download-okr-playbook" class="pt-tk-download-link d-inline-flex align-items-center gap-2" data-toolkit="OKRs & Goal Setting Playbook">
                <span>Download File</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </article>
        </div>

        <!-- Card 3: PowerPoint -->
        <div class="col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="190" data-aos-duration="650">
          <article class="pt-tk-card h-100 d-flex flex-column justify-content-between">
            <div class="pt-tk-watermark pt-tk-wm-ppt" aria-hidden="true">
              <div class="pt-tk-wm-doc">
                <span class="pt-tk-wm-badge">P</span>
                <div class="pt-tk-wm-bars">
                  <span></span><span></span><span></span>
                </div>
              </div>
            </div>

            <div class="position-relative">
              <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                <span class="pt-tk-format-pill pt-tk-pill-ppt">
                  <span class="pt-tk-format-icon" aria-hidden="true">P</span>
                  <span>PowerPoint</span>
                </span>
                <span class="pt-tk-downloads" title="Downloads">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                  </svg>
                  <span>22.1k</span>
                </span>
              </div>

              <h3 class="pt-tk-card-title">
                Board Meeting Deck Template
              </h3>
              <p class="pt-tk-card-desc">
                Clean executive slide deck layout built for quarterly investor reviews.
              </p>
            </div>

            <div class="position-relative pt-3 mt-4">
              <a href="#download-board-deck" class="pt-tk-download-link d-inline-flex align-items-center gap-2" data-toolkit="Board Meeting Deck Template">
                <span>Download File</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Custom Research CTA -->
  <section
    class="rh-custom-cta position-relative d-flex align-items-center py-5 overflow-hidden bg-light"
    style="background-image: url('<?= htmlspecialchars($img, ENT_QUOTES, 'UTF-8'); ?>/custom-research-paper-or-toolkit.png');"
    aria-labelledby="rhCustomCtaHeading"
  >
    <!-- Subtle Geometric Movement -->
    <div class="rh-ambient-layer" aria-hidden="true">
      <div class="rh-ambient-shape rh-shape-square" style="top: 16%; left: 44%;"></div>
      <svg class="rh-ambient-shape rh-shape-triangle" style="bottom: 18%; left: 38%;" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <polygon points="14,2 26,22 2,22" stroke="rgba(197, 150, 24, 0.34)" stroke-width="1.5" fill="none" />
      </svg>
    </div>

    <!-- Soft readability overlay on small/medium screens while keeping the left artwork clear on desktop -->
    <div
      class="position-absolute top-0 start-0 w-100 h-100 d-lg-none rh-cta-scrim"
      aria-hidden="true"
    ></div>

    <div class="container position-relative z-1 py-4">
      <div class="row justify-content-center justify-content-lg-end">
        <div class="col-12 col-md-10 col-lg-7 col-xl-6 text-center">

          <div class="d-inline-flex align-items-center justify-content-center gap-3 mb-3">
            <span class="d-inline-block" style="width: 44px; height: 1px; background-color: #c59618;"></span>
            <span
              class="badge rounded-pill px-4 py-2 fw-semibold text-white"
              style="background-color: #c59618; font-size: 0.875rem;"
            >
              Tailored Research Service
            </span>
            <span class="d-inline-block" style="width: 44px; height: 1px; background-color: #c59618;"></span>
          </div>

          <h2 id="rhCustomCtaHeading" class="fw-bold lh-sm mb-3 fs-2 fs-md-1" style="color: #1f242b;">
            Need a Custom Research Paper or <span style="color: #c59618;">Toolkit?</span>
          </h2>

          <p class="mx-auto mb-4" style="max-width: 540px; color: #555b64; line-height: 1.65;">
            Our expert research analysts build tailored financial models, enterprise benchmarks, and regulatory compliance kits specific to your business requirements.
          </p>

          <a
            href="#request-custom-resource"
            class="btn fw-semibold text-white px-4 py-3 rounded-2 shadow-sm d-inline-flex align-items-center gap-2"
            style="background-color: #c59618; border-color: #c59618;"
          >
            <span>Request Custom Resource</span>
            <span aria-hidden="true">&rarr;</span>
          </a>

        </div>
      </div>
    </div>
  </section>

</div>

<script>
  (function () {
    const searchForm = document.getElementById('rhSearchForm');
    const searchInput = document.getElementById('rhSearchInput');

    if (searchForm && searchInput) {
      searchForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const query = searchInput.value.trim();
        if (!query) {
          searchInput.focus();
        }
      });
    }

    if (window.AOS && typeof window.AOS.refresh === 'function') {
      window.AOS.refresh();
    }
  })();
</script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>