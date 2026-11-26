<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/webinars';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$ver    = defined('FILE_VERSISON') ? FILE_VERSISON : (defined('FILE_VERSION') ? FILE_VERSION : '1');

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp')
    ? 'hero-bg.webp?v=' . $ver
    : 'hero-bg.svg?v=' . $ver;

$ctaFile = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp')
    ? 'cta-bg.webp?v=' . $ver
    : 'cta-bg.svg?v=' . $ver;
?>

<style>
  :root {
    --classic-gold: #ab8139;
    --classic-gold-dark: #966e27;
    --classic-charcoal: #3f4348;
    --classic-cream: #f4e3c1;
    --classic-stone: #e3e5e8;
    --classic-ink: #16181d;
    --classic-muted: #4a5058;
    --classic-surface: #ffffff;
  }

  /* Shared Responsive Container Shell for Mobile, Tablet, Laptop, Desktop & 4K */
  .page-section-shell {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 1380px;
    margin-inline: auto;
  }

  @media (min-width: 1920px) {
    .page-section-shell {
      max-width: 1760px;
    }
  }

  @media (min-width: 2560px) {
    .page-section-shell {
      max-width: 2240px;
    }
  }

  /* =========================================================
     SECTION 1: HERO & METRICS (100VH CLASSIC LAYOUT)
     ========================================================= */
  .classic-webinar-section {
    position: relative;
    min-height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    background-color: var(--classic-surface);
    background-image: url("<?= $img; ?>/Executive-Webinars-Thought-Leadership.png");
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    color: var(--classic-ink);
    overflow-x: clip;
  }

  .classic-webinar-section::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
  }

  .classic-webinar-container {
    position: relative;
    z-index: 1;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  @media (max-width: 991.98px) {
    .classic-webinar-section,
    .classic-webinar-container {
      min-height: auto;
    }

    .classic-webinar-section::before {
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.96) 0%,
        rgba(255, 255, 255, 0.91) 62%,
        rgba(255, 255, 255, 0.86) 100%
      );
    }

    .classic-webinar-container {
      gap: 2.25rem;
    }
  }

  @media (min-width: 992px) and (max-height: 760px) {
    .classic-webinar-section,
    .classic-webinar-container {
      min-height: auto;
      gap: 2rem;
    }
  }

  .classic-kicker {
    font-size: clamp(0.75rem, 0.85vw, 1rem);
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--classic-ink);
    line-height: 1.45;
  }

  .classic-rule {
    width: 48px;
    height: 2px;
    background-color: var(--classic-gold);
    margin: 0.85rem 0 1.25rem;
  }

  .classic-heading {
    font-size: clamp(2.1rem, 3.4vw, 4.25rem);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -0.025em;
    color: var(--classic-ink);
  }

  .classic-heading .classic-accent {
    color: var(--classic-gold);
  }

  .classic-subtext {
    font-size: clamp(0.98rem, 1.08vw, 1.3rem);
    line-height: 1.62;
    color: var(--classic-muted);
    max-width: 540px;
  }

  .classic-search-form {
    display: flex;
    align-items: center;
    background-color: var(--classic-surface);
    border: 1px solid var(--classic-stone);
    border-radius: 999px;
    padding: 0.35rem 0.4rem 0.35rem 1.35rem;
    max-width: 520px;
    box-shadow: 0 10px 26px rgba(22, 24, 29, 0.06);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
  }

  .classic-search-form:focus-within {
    border-color: var(--classic-gold);
    box-shadow: 0 0 0 4px rgba(184, 132, 30, 0.16), 0 12px 28px rgba(22, 24, 29, 0.08);
  }

  .classic-search-input {
    flex: 1;
    min-width: 0;
    border: 0;
    background: transparent;
    color: var(--classic-ink);
    font-size: clamp(0.88rem, 0.95vw, 1.08rem);
    padding: 0.45rem 0.75rem 0.45rem 0;
    outline: none;
  }

  .classic-search-input::placeholder {
    color: var(--classic-muted);
  }

  .classic-search-submit {
    width: clamp(40px, 2.7vw, 48px);
    height: clamp(40px, 2.7vw, 48px);
    border: 0;
    border-radius: 50%;
    background-color: var(--classic-gold);
    color: var(--classic-surface);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease;
  }

  .classic-search-submit:hover,
  .classic-search-submit:focus-visible {
    background-color: var(--classic-gold-dark);
    transform: translateY(-1px);
  }

  .classic-metric-card {
    height: 100%;
    border-radius: 0.75rem;
    padding: clamp(1rem, 1.5vh, 1.85rem) clamp(0.9rem, 1.3vw, 1.65rem);
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 20px rgba(22, 24, 29, 0.08);
    transition: transform 0.22s ease, box-shadow 0.22s ease;
  }

  .classic-metric-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 26px rgba(22, 24, 29, 0.12);
  }

  .metric-theme-gold {
    background-color: var(--classic-gold);
    color: var(--classic-surface);
  }

  .metric-theme-charcoal {
    background-color: var(--classic-charcoal);
    color: var(--classic-surface);
  }

  .metric-theme-cream {
    background-color: var(--classic-cream);
    color: var(--classic-ink);
  }

  .metric-theme-stone {
    background-color: var(--classic-stone);
    color: var(--classic-ink);
  }

  .classic-metric-icon {
    font-size: clamp(1.2rem, 1.6vw, 2.1rem);
    line-height: 1;
    margin-bottom: 0.5rem;
  }

  .classic-metric-value {
    font-size: clamp(1.55rem, 2.25vw, 3rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.02em;
    margin-bottom: 0.25rem;
  }

  .classic-metric-title {
    font-size: clamp(0.68rem, 0.78vw, 0.95rem);
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    line-height: 1.3;
  }

  @media (max-width: 991.98px) {
    .classic-rule,
    .classic-subtext,
    .classic-search-form {
      margin-inline: auto;
    }
  }

  /* =========================================================
     SECTION 2: EDITOR'S CHOICE SPOTLIGHT
     ========================================================= */
  .editorial-spotlight-v2 {
    position: relative;
    background-color: var(--classic-surface);
    color: var(--classic-ink);
    overflow-x: clip;
  }

  .v2-divider {
    border-color: var(--classic-stone) !important;
  }

  .v2-eyebrow {
    font-size: clamp(0.72rem, 0.8vw, 0.92rem);
    font-weight: 700;
    letter-spacing: 0.16em;
    color: var(--classic-muted);
  }

  .v2-section-heading {
    font-size: clamp(1.55rem, 2.5vw, 2.4rem);
    color: var(--classic-ink);
    letter-spacing: -0.015em;
  }

  .v2-issue-tag {
    font-size: clamp(0.8rem, 0.9vw, 1rem);
    font-weight: 600;
    color: var(--classic-muted);
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
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-14px);
    }
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
    background-color: var(--classic-cream);
    z-index: 0;
  }

  .v2-image-box {
    border-radius: 20px;
    box-shadow: 0 18px 38px rgba(22, 24, 29, 0.12);
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
    border: 1px solid rgba(184, 132, 30, 0.3);
  }

  .v2-status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: var(--classic-gold);
    flex-shrink: 0;
  }

  .v2-pill-label {
    background-color: var(--classic-charcoal);
    color: var(--classic-cream);
    font-size: clamp(0.75rem, 0.85vw, 0.95rem);
    font-weight: 600;
    padding: 0.42rem 0.95rem;
    border-radius: 999px;
  }

  .v2-article-title {
    font-size: clamp(1.55rem, 2.5vw, 2.3rem);
    line-height: 1.22;
    letter-spacing: -0.015em;
    color: var(--classic-ink);
  }

  .editorial-spotlight-v2 .text-gold,
  .v2-section-heading .text-gold {
    color: var(--classic-gold);
  }

  .v2-article-lead {
    font-size: clamp(0.95rem, 1.05vw, 1.2rem);
    line-height: 1.68;
    color: var(--classic-muted);
  }

  .v2-takeaway {
    font-size: clamp(0.88rem, 0.96vw, 1.08rem);
    line-height: 1.6;
    font-style: italic;
    color: var(--classic-charcoal);
    border-left: 3px solid var(--classic-gold);
    margin-left: 0;
  }

  .v2-avatar {
    width: 44px;
    height: 44px;
    border: 2px solid var(--classic-surface);
    box-shadow: 0 4px 12px rgba(22, 24, 29, 0.1);
  }

  .v2-author-name {
    font-size: 0.9rem;
    color: var(--classic-ink);
    line-height: 1.25;
  }

  .v2-author-role {
    font-size: 0.78rem;
    color: var(--classic-muted);
  }

  .v2-btn {
    background-color: var(--classic-gold);
    color: var(--classic-surface);
    font-size: clamp(0.88rem, 0.96vw, 1.05rem);
    font-weight: 600;
    padding: 0.68rem 1.4rem;
    border-radius: 10px;
    border: none;
    transition: background-color 0.25s ease, transform 0.2s ease;
  }

  .v2-btn:hover,
  .v2-btn:focus-visible {
    background-color: var(--classic-gold-dark);
    color: var(--classic-surface);
    transform: translateY(-2px);
  }

  @media (prefers-reduced-motion: reduce) {
    .v2-corner {
      animation: none;
    }
  }

  /* =========================================================
     SECTION 3: POPULAR ON-DEMAND SERIES
     ========================================================= */
  .series-collection-section {
    position: relative;
    background-color: var(--classic-surface);
    background-image:
      radial-gradient(circle at 0% 18%, rgba(184, 132, 30, 0.16) 0%, rgba(244, 227, 193, 0.18) 28%, transparent 52%),
      radial-gradient(circle at 100% 65%, rgba(244, 227, 193, 0.34) 0%, transparent 45%);
    color: var(--classic-ink);
    overflow-x: clip;
  }

  .series-collection-section::before {
    content: "";
    position: absolute;
    left: -130px;
    top: 40px;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    border: 2px solid rgba(184, 132, 30, 0.25);
    pointer-events: none;
    z-index: 0;
  }

  .series-eyebrow-pill {
    display: inline-block;
    background-color: var(--classic-gold);
    color: var(--classic-surface);
    font-size: clamp(0.75rem, 0.9vw, 1rem);
    font-weight: 700;
    letter-spacing: 0.02em;
    padding: 0.42rem 1.35rem;
    border-radius: 999px;
    box-shadow: 0 6px 16px rgba(184, 132, 30, 0.22);
  }

  .series-heading {
    font-size: clamp(1.85rem, 3vw, 3.6rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.02em;
    color: var(--classic-ink);
  }

  .series-heading .series-gold-text {
    color: var(--classic-gold);
  }

  .series-underline {
    width: 44px;
    height: 2px;
    background-color: var(--classic-gold);
    margin: 0.65rem auto 0.85rem;
  }

  .series-subtitle {
    font-size: clamp(0.95rem, 1.05vw, 1.25rem);
    line-height: 1.55;
    color: var(--classic-muted);
    max-width: 620px;
    margin-inline: auto;
  }

  .series-card {
    background-color: var(--classic-surface);
    border: 1px solid var(--classic-stone);
    border-radius: 1.15rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
    box-shadow: 0 10px 26px rgba(22, 24, 29, 0.06);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .series-card:hover {
    transform: translateY(-5px);
    border-color: rgba(184, 132, 30, 0.45);
    box-shadow: 0 16px 34px rgba(22, 24, 29, 0.11);
  }

  .series-media-wrap {
    position: relative;
    aspect-ratio: 16 / 9;
    width: 100%;
    overflow: hidden;
    background-color: var(--classic-charcoal);
    z-index: 1;
  }

  .series-media-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.35s ease;
  }

  .series-card:hover .series-media-wrap img {
    transform: scale(1.03);
  }

  .series-part-badge {
    position: absolute;
    top: 0.85rem;
    left: 0.85rem;
    z-index: 3;
    background-color: var(--classic-gold);
    color: var(--classic-surface);
    font-size: clamp(0.68rem, 0.75vw, 0.85rem);
    font-weight: 800;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 0.32rem 0.75rem;
    border-radius: 0.35rem;
    box-shadow: 0 4px 10px rgba(22, 24, 29, 0.18);
  }

  .series-media-wrap::after {
    content: "";
    position: absolute;
    left: -8%;
    right: -8%;
    bottom: -14px;
    height: 22px;
    background-color: var(--classic-cream);
    border-top-left-radius: 55% 100%;
    border-top-right-radius: 55% 100%;
    z-index: 2;
    pointer-events: none;
  }

  .series-card-body {
    position: relative;
    z-index: 3;
    margin-top: -6px;
    background-color: var(--classic-surface);
    border-top-left-radius: 0.9rem;
    border-top-right-radius: 0.9rem;
    padding: 1.2rem 1.4rem 1.4rem;
    display: flex;
    flex-direction: column;
    flex: 1;
  }

  .series-card-title {
    font-size: clamp(1.15rem, 1.32vw, 1.55rem);
    font-weight: 800;
    line-height: 1.25;
    color: var(--classic-ink);
    margin-bottom: 0.6rem;
  }

  .series-meta {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: clamp(0.82rem, 0.9vw, 1rem);
    font-weight: 600;
    color: var(--classic-charcoal);
    margin-bottom: 0.75rem;
  }

  .series-meta-icon {
    color: var(--classic-gold);
    font-size: 1rem;
    flex-shrink: 0;
  }

  .series-card-desc {
    font-size: clamp(0.88rem, 0.96vw, 1.1rem);
    line-height: 1.55;
    color: var(--classic-muted);
    margin-bottom: 1.3rem;
    flex: 1;
  }

  .series-unlock-btn {
    width: 100%;
    background-color: var(--classic-gold);
    color: var(--classic-surface);
    border: 0;
    border-radius: 0.55rem;
    padding: clamp(0.68rem, 0.85vw, 0.9rem) 1.25rem;
    font-size: clamp(0.9rem, 0.98vw, 1.1rem);
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease;
  }

  .series-unlock-btn:hover,
  .series-unlock-btn:focus-visible {
    background-color: var(--classic-gold-dark);
    color: var(--classic-surface);
    transform: translateY(-1px);
  }

  /* =========================================================
     SECTION 4: PARTNER WITH US (LEFT CIRCLE + RIGHT COPY)
     ========================================================= */
  .partner-circle-section {
    position: relative;
    background-color: var(--classic-surface);
    background-image:
      radial-gradient(circle at 98% 6%, rgba(184, 132, 30, 0.22) 0%, rgba(244, 227, 193, 0.24) 22%, transparent 44%),
      radial-gradient(circle at 80% 96%, rgba(244, 227, 193, 0.45) 0%, transparent 42%);
    color: var(--classic-ink);
    overflow-x: clip;
  }

  .partner-corner-accent {
    position: absolute;
    top: -42px;
    right: -38px;
    width: clamp(120px, 12vw, 220px);
    height: clamp(120px, 12vw, 220px);
    background: linear-gradient(135deg, var(--classic-gold) 0%, var(--classic-gold-dark) 100%);
    border-bottom-left-radius: 100%;
    pointer-events: none;
    z-index: 0;
  }

  .partner-corner-arc {
    position: absolute;
    top: -58px;
    right: -52px;
    width: clamp(165px, 16vw, 290px);
    height: clamp(165px, 16vw, 290px);
    border: 2px solid rgba(184, 132, 30, 0.35);
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
  }

  .partner-bottom-wave {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: clamp(70px, 9vw, 150px);
    background: rgba(244, 227, 193, 0.42);
    clip-path: ellipse(68% 100% at 66% 100%);
    pointer-events: none;
    z-index: 0;
  }

  .partner-bottom-dots {
    position: absolute;
    right: clamp(1rem, 3vw, 4rem);
    bottom: clamp(1.25rem, 3vw, 3.25rem);
    display: grid;
    grid-template-columns: repeat(5, 6px);
    gap: 8px;
    pointer-events: none;
    z-index: 1;
  }

  .partner-bottom-dots span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: var(--classic-gold);
    opacity: 0.85;
  }

  .partner-circle-stage {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem;
    max-width: clamp(270px, 33vw, 520px);
    margin-inline: auto;
  }

  .partner-circle-ring {
    position: absolute;
    width: calc(100% + 14px);
    aspect-ratio: 1 / 1;
    border-radius: 50%;
    border: 3px solid var(--classic-gold);
    pointer-events: none;
    z-index: 0;
  }

  .partner-top-dots {
    position: absolute;
    top: -6px;
    left: -6px;
    display: grid;
    grid-template-columns: repeat(5, 6px);
    gap: 8px;
    pointer-events: none;
    z-index: 2;
  }

  .partner-top-dots span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: var(--classic-gold);
    opacity: 0.85;
  }

  .partner-circle-frame {
    position: relative;
    z-index: 1;
    width: 100%;
    aspect-ratio: 1 / 1;
    border-radius: 50%;
    overflow: hidden;
    background-color: var(--classic-cream);
    border: 4px solid var(--classic-surface);
    box-shadow: 0 18px 40px rgba(22, 24, 29, 0.14);
  }

  .partner-circle-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    display: block;
    transition: transform 0.35s ease;
  }

  .partner-circle-stage:hover .partner-circle-img {
    transform: scale(1.03);
  }

  .partner-pill-wrap {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    margin-bottom: 1.15rem;
  }

  .partner-side-line {
    width: clamp(24px, 3vw, 56px);
    height: 1.5px;
    background-color: var(--classic-gold);
  }

  .partner-pill-badge {
    background-color: var(--classic-gold);
    color: var(--classic-surface);
    font-size: clamp(0.78rem, 0.9vw, 1.02rem);
    font-weight: 700;
    padding: 0.42rem 1.45rem;
    border-radius: 999px;
    box-shadow: 0 6px 16px rgba(184, 132, 30, 0.22);
  }

  .partner-title {
    font-size: clamp(2rem, 3vw, 4.1rem);
    font-weight: 800;
    line-height: 1.14;
    letter-spacing: -0.025em;
    color: var(--classic-ink);
  }

  .partner-title .partner-gold {
    color: var(--classic-gold);
  }

  .partner-rule {
    width: 48px;
    height: 2.5px;
    background-color: var(--classic-gold);
    margin: 0.85rem 0 1.2rem;
  }

  .partner-copy {
    font-size: clamp(0.96rem, 1.08vw, 1.25rem);
    line-height: 1.62;
    color: var(--classic-muted);
    max-width: 550px;
  }

  .partner-action-btn {
    background: linear-gradient(90deg, var(--classic-gold) 0%, var(--classic-gold-dark) 100%);
    color: var(--classic-surface);
    border: 0;
    border-radius: 999px;
    padding: clamp(0.75rem, 0.95vw, 1.05rem) clamp(1.75rem, 2.4vw, 2.6rem);
    font-size: clamp(0.95rem, 1.05vw, 1.18rem);
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.65rem;
    text-decoration: none;
    box-shadow: 0 10px 24px rgba(184, 132, 30, 0.28);
    transition: transform 0.22s ease, box-shadow 0.22s ease, filter 0.22s ease;
  }

  .partner-action-btn:hover,
  .partner-action-btn:focus-visible {
    color: var(--classic-surface);
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(184, 132, 30, 0.36);
    filter: brightness(1.03);
  }

  @media (max-width: 991.98px) {
    .partner-rule,
    .partner-copy {
      margin-inline: auto;
    }

    .partner-bottom-dots {
      display: none;
    }
  }
</style>

<!-- SECTION 1: Executive Webinars & Thought Leadership (100vh Classic Layout) -->
<section id="executive-webinars" class="classic-webinar-section" aria-label="Executive Webinars and Thought Leadership">
  <div class="page-section-shell classic-webinar-container px-3 px-sm-4 px-lg-5 py-4 py-lg-5">

    <!-- Center-Aligned Hero Content Within 100vh -->
    <div class="row align-items-center my-auto py-2">
      <div class="col-12 col-lg-7 col-xl-6 text-center text-lg-start" data-aos="fade-up" data-aos-duration="700">
        <p class="classic-kicker mb-0">
          Interactive Masterclasses &amp;<br>Panels
        </p>
        <div class="classic-rule"></div>

        <h1 class="classic-heading mb-3">
          Executive Webinars &amp;<br>
          <span class="classic-accent">Thought Leadership</span>
        </h1>

        <p class="classic-subtext mb-4">
          Explore upcoming live webinars, register for interactive panel discussions, or access our comprehensive library of on-demand expert recordings.
        </p>

        <form class="classic-search-form" role="search" aria-label="Search webinars by topic or speaker">
          <label for="classicWebinarSearch" class="visually-hidden">
            Search by topic, speaker name, or key terms
          </label>
          <input
            id="classicWebinarSearch"
            type="search"
            class="classic-search-input"
            placeholder="Search by topic, speaker name, or key terms (e.g., AI, Leadership)"
          >
          <button type="submit" class="classic-search-submit" aria-label="Submit search">
            <i class="bi bi-search" aria-hidden="true"></i>
          </button>
        </form>
      </div>
    </div>

    <!-- Bottom Metric Strip -->
    <div class="row row-cols-2 row-cols-lg-4 g-3 g-md-4 pt-3">
      <div class="col" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
        <div class="classic-metric-card metric-theme-gold">
          <i class="bi bi-camera-video-fill classic-metric-icon" aria-hidden="true"></i>
          <div class="classic-metric-value">120+</div>
          <div class="classic-metric-title">Webinars Hosted</div>
        </div>
      </div>

      <div class="col" data-aos="fade-up" data-aos-duration="600" data-aos-delay="120">
        <div class="classic-metric-card metric-theme-charcoal">
          <i class="bi bi-people-fill classic-metric-icon" aria-hidden="true"></i>
          <div class="classic-metric-value">45+</div>
          <div class="classic-metric-title">Global Attendees (K+)</div>
        </div>
      </div>

      <div class="col" data-aos="fade-up" data-aos-duration="600" data-aos-delay="190">
        <div class="classic-metric-card metric-theme-cream">
          <i class="bi bi-star-fill classic-metric-icon" aria-hidden="true"></i>
          <div class="classic-metric-value">98+</div>
          <div class="classic-metric-title">Attendee Ratings %</div>
        </div>
      </div>

      <div class="col" data-aos="fade-up" data-aos-duration="600" data-aos-delay="260">
        <div class="classic-metric-card metric-theme-stone">
          <i class="bi bi-mic-fill classic-metric-icon" aria-hidden="true"></i>
          <div class="classic-metric-value">85+</div>
          <div class="classic-metric-title">Industry Experts</div>
        </div>
      </div>
    </div>

  </div>
</section>

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

  <div class="page-section-shell px-3 px-sm-4 px-lg-5 py-2 py-md-3">
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

<!-- SECTION 3: Popular On-Demand Series -->
<section id="popular-series" class="series-collection-section py-5" aria-label="Popular On-Demand Series">
  <div class="page-section-shell px-3 px-sm-4 px-lg-5 py-2 py-md-3">

    <!-- Section Header -->
    <div class="text-center mb-4 mb-md-5" data-aos="fade-up" data-aos-duration="650">
      <span class="series-eyebrow-pill mb-3">Masterclass Collections</span>
      <h2 class="series-heading mb-0">
        Popular <span class="series-gold-text">On-Demand</span> Series
      </h2>
      <div class="series-underline" aria-hidden="true"></div>
      <p class="series-subtitle mb-0">
        Curated multi-part video series structured to upskill leadership teams on key organizational disciplines.
      </p>
    </div>

    <!-- 3-Column Series Cards Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 g-xl-5">

      <!-- Card 1: AI Leadership -->
      <div class="col" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
        <article class="series-card">
          <div class="series-media-wrap">
            <span class="series-part-badge">4-Part Series</span>
            <img
              src="<?= $img; ?>/AI-Leadership-Frontier-Governance-2026.png"
              alt="Executive leading a boardroom strategy session on AI governance"
            >
          </div>
          <div class="series-card-body">
            <h3 class="series-card-title">AI Leadership &amp; Frontier Governance 2026</h3>
            <div class="series-meta">
              <i class="bi bi-play-btn-fill series-meta-icon" aria-hidden="true"></i>
              <span>4 Sessions &bull; 1h 40m Total</span>
            </div>
            <p class="series-card-desc">
              Master real-world enterprise deployment strategies, vendor evaluation, and mitigation of generative AI hallucinations.
            </p>
            <button type="button" class="series-unlock-btn">
              <span>Unlock Series</span>
              <i class="bi bi-lock-fill" aria-hidden="true"></i>
            </button>
          </div>
        </article>
      </div>

      <!-- Card 2: Digital Transformation -->
      <div class="col" data-aos="fade-up" data-aos-duration="650" data-aos-delay="140">
        <article class="series-card">
          <div class="series-media-wrap">
            <span class="series-part-badge">3-Part Series</span>
            <img
              src="<?= $img; ?>/Digital-Transformation-Legacy-Modernization.png"
              alt="Hands typing on a laptop displaying cloud modernization architecture"
            >
          </div>
          <div class="series-card-body">
            <h3 class="series-card-title">Digital Transformation &amp; Legacy Modernization</h3>
            <div class="series-meta">
              <i class="bi bi-play-btn-fill series-meta-icon" aria-hidden="true"></i>
              <span>3 Sessions &bull; 1h 20m Total</span>
            </div>
            <p class="series-card-desc">
              Transition legacy core software systems into agile, scalable micro-frontend and multi-cloud architecture.
            </p>
            <button type="button" class="series-unlock-btn">
              <span>Unlock Series</span>
              <i class="bi bi-lock-fill" aria-hidden="true"></i>
            </button>
          </div>
        </article>
      </div>

      <!-- Card 3: Executive Financial Strategy -->
      <div class="col" data-aos="fade-up" data-aos-duration="650" data-aos-delay="230">
        <article class="series-card">
          <div class="series-media-wrap">
            <span class="series-part-badge">6-Part Series</span>
            <img
              src="<?= $img; ?>/Executive-Financial-Strategy-Insights.png"
              alt="Financial charts, calculator, pen, and laptop on an executive desk"
            >
          </div>
          <div class="series-card-body">
            <h3 class="series-card-title">Executive Financial Strategy &amp; M&amp;A Insights</h3>
            <div class="series-meta">
              <i class="bi bi-play-btn-fill series-meta-icon" aria-hidden="true"></i>
              <span>6 Sessions &bull; 4h 15m Total</span>
            </div>
            <p class="series-card-desc">
              Valuation dynamics, venture debt structuring, and modern cross-border M&amp;A strategy for growing organizations.
            </p>
            <button type="button" class="series-unlock-btn">
              <span>Unlock Series</span>
              <i class="bi bi-lock-fill" aria-hidden="true"></i>
            </button>
          </div>
        </article>
      </div>

    </div>
  </div>
</section>

<!-- SECTION 4: Partner With Us (Left Circle Image + Right Editorial Content) -->
<section id="partner-webinars" class="partner-circle-section py-5" aria-label="Partner With Us to Host an Executive Webinar">
  <div class="partner-corner-arc" aria-hidden="true"></div>
  <div class="partner-corner-accent" aria-hidden="true"></div>
  <div class="partner-bottom-wave" aria-hidden="true"></div>
  <div class="partner-bottom-dots" aria-hidden="true">
    <span></span><span></span><span></span><span></span><span></span>
    <span></span><span></span><span></span><span></span><span></span>
    <span></span><span></span><span></span><span></span><span></span>
  </div>

  <div class="page-section-shell px-3 px-sm-4 px-lg-5 py-2 py-md-4">
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Column: Circular Image Div with Gold Ring & Dots -->
      <div class="col-12 col-lg-5 col-xl-6" data-aos="fade-right" data-aos-duration="700">
        <div class="partner-circle-stage">
          <div class="partner-top-dots" aria-hidden="true">
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span><span></span>
          </div>

          <div class="partner-circle-ring" aria-hidden="true"></div>

          <div class="partner-circle-frame">
            <img
              src="<?= $img; ?>/full-Interested-in-Hosting-an-Executive-Webinar.png"
              alt="Executive webinar setup featuring a studio microphone, laptop panel session, coffee cup, and notebook"
              class="partner-circle-img"
            >
          </div>
        </div>
      </div>

      <!-- Right Column: Editorial Copy & CTA -->
      <div class="col-12 col-lg-7 col-xl-6 text-center text-lg-start" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
        <div class="partner-pill-wrap">
          <span class="partner-side-line" aria-hidden="true"></span>
          <span class="partner-pill-badge">Partner With Us</span>
          <span class="partner-side-line" aria-hidden="true"></span>
        </div>

        <h2 class="partner-title mb-0">
          Interested in Hosting an<br>
          <span class="partner-gold">Executive Webinar?</span>
        </h2>

        <div class="partner-rule" aria-hidden="true"></div>

        <p class="partner-copy mb-4">
          We collaborate with renowned thinkers, C-suite executives, and industry tech leaders to co-create high-impact interactive masterclasses and panel discussions.
        </p>

        <a href="#speaker-application" class="partner-action-btn">
          <span>Apply as Speaker</span>
          <i class="bi bi-send-fill" aria-hidden="true"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>