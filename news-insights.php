<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/news-insights';
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

<!-- News & Insights Banner Section -->
<section class="news-insight-banner position-relative overflow-hidden py-5" aria-label="News and Insights Banner">
  <!-- Background Image Layer -->
  <div class="banner-bg-media" aria-hidden="true"></div>

  <!-- Soft Left-to-Right Light Overlay for Text Readability -->
  <div class="banner-bg-overlay" aria-hidden="true"></div>

  <!-- Decorative Graphical Line & Node -->
  <svg class="banner-graphic-svg d-none d-md-block" viewBox="0 0 1440 680" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path
      d="M-60 560C220 535 450 320 695 -20"
      stroke="rgba(168, 134, 62, 0.42)"
      stroke-width="1.6"
    />
    <circle
      cx="624"
      cy="106"
      r="5.5"
      fill="#ffffff"
      stroke="#a8863e"
      stroke-width="2"
    />
    <path
      d="M1190 -20C1255 120 1345 230 1490 305"
      stroke="rgba(168, 134, 62, 0.25)"
      stroke-width="1.5"
    />
  </svg>

  <div class="container position-relative z-2 pt-2 pt-md-3">
    <div class="row align-items-center">
      <!-- Left Content Column -->
      <div class="col-lg-6 col-xl-5" data-aos="fade-right" data-aos-duration="700">
        <p class="banner-kicker text-uppercase mb-2">Thought Leadership &amp; Intelligence</p>
        <span class="banner-accent-line d-block mb-3"></span>

        <h1 class="banner-title fw-bold mb-3">
          News &amp;<br>
          <span class="text-gold">Insights</span>
        </h1>

        <p class="banner-subtitle mb-4">
          Stay updated with industry trends, expert analysis, enterprise innovations, and company updates curated by our senior strategist team.
        </p>

        <!-- Search Input Pill -->
        <form class="banner-search-form mb-2" role="search" onsubmit="return false;">
          <div class="input-group banner-search-pill align-items-center bg-white">
            <input
              type="search"
              id="newsSearchInput"
              class="form-control border-0 bg-transparent shadow-none ps-4 py-2"
              placeholder="Search by topic, keyword, or author name.."
              aria-label="Search by topic, keyword, or author name"
            >
            <button
              type="submit"
              class="btn banner-search-btn rounded-circle d-flex align-items-center justify-content-center me-1"
              aria-label="Search articles"
            >
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Bottom Stats Row -->
    <div class="row g-3 g-md-4 mt-4 mt-lg-5 banner-stats-row">
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="stat-box stat-gold text-center h-100">
          <div class="stat-number fw-bold">250+</div>
          <div class="stat-label text-uppercase">Articles Published</div>
        </div>
      </div>

      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="180">
        <div class="stat-box stat-charcoal text-center h-100">
          <div class="stat-number fw-bold">50k+</div>
          <div class="stat-label text-uppercase">K Monthly Readers</div>
        </div>
      </div>

      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="260">
        <div class="stat-box stat-sand text-center h-100">
          <div class="stat-number fw-bold">15+</div>
          <div class="stat-label text-uppercase">Industry Experts</div>
        </div>
      </div>

      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="340">
        <div class="stat-box stat-silver text-center h-100">
          <div class="stat-number fw-bold">98%</div>
          <div class="stat-label text-uppercase">% Reader Approval</div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .news-insight-banner {
    min-height: 540px;
    background-color: #f8f6f1;
    color: #1c1d21;
  }

  /* Full-bleed background image aligned to keep key desk elements visible */
  .banner-bg-media {
    position: absolute;
    inset: 0;
    background-image: url('<?= $img; ?>/news-insight-header-banner.png');
    background-size: cover;
    background-position: 72% center;
    background-repeat: no-repeat;
    z-index: 0;
  }

  /* Smooth white/warm wash on the left so text and search bar stay crisp */
  .banner-bg-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.96) 0%,
      rgba(255, 255, 255, 0.90) 38%,
      rgba(255, 255, 255, 0.42) 64%,
      rgba(255, 255, 255, 0.08) 100%
    );
    z-index: 1;
  }

  .banner-graphic-svg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
  }

  .banner-kicker {
    font-size: 0.75rem;
    font-weight: 500;
    letter-spacing: 0.16em;
    color: #5c5f66;
  }

  .banner-accent-line {
    width: 34px;
    height: 2.5px;
    background-color: #a8863e;
    border-radius: 2px;
  }

  .banner-title {
    font-size: clamp(2.35rem, 4.5vw, 3.65rem);
    line-height: 1.08;
    letter-spacing: -0.02em;
    color: #16171a;
  }

  .text-gold {
    color: #a8863e;
  }

  .banner-subtitle {
    font-size: 0.95rem;
    line-height: 1.65;
    color: #5a5d65;
    max-width: 450px;
  }

  /* Search Bar */
  .banner-search-form {
    max-width: 440px;
  }

  .banner-search-pill {
    border-radius: 999px;
    padding: 5px;
    border: 1px solid #e5e2dc !important;
    box-shadow: 0 10px 25px rgba(22, 23, 26, 0.08);
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
  }

  .banner-search-pill:focus-within {
    border-color: #a8863e !important;
    box-shadow: 0 12px 28px rgba(168, 134, 62, 0.16);
  }

  .banner-search-pill .form-control {
    font-size: 0.85rem;
    color: #1c1d21;
  }

  .banner-search-pill .form-control::placeholder {
    color: #8c9099;
  }

  .banner-search-btn {
    width: 38px;
    height: 38px;
    min-width: 38px;
    background-color: #a8863e;
    color: #ffffff;
    border: none;
    transition: background-color 0.25s ease, transform 0.2s ease;
  }

  .banner-search-btn:hover,
  .banner-search-btn:focus {
    background-color: #8f7030;
    color: #ffffff;
    transform: scale(1.04);
  }

  /* Bottom Stat Cards */
  .stat-box {
    border-radius: 14px;
    padding: 1.15rem 1rem;
    box-shadow: 0 8px 20px rgba(22, 23, 26, 0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .stat-box:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 26px rgba(22, 23, 26, 0.12);
  }

  .stat-number {
    font-size: clamp(1.35rem, 2.2vw, 1.85rem);
    line-height: 1.15;
    margin-bottom: 0.25rem;
  }

  .stat-label {
    font-size: 0.68rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    opacity: 0.92;
  }

  .stat-gold {
    background-color: #a8863e;
    color: #ffffff;
  }

  .stat-charcoal {
    background-color: #6b6e75;
    color: #ffffff;
  }

  .stat-sand {
    background-color: #dfd0ad;
    color: #2b261b;
  }

  .stat-silver {
    background-color: #d6d7da;
    color: #232529;
  }

  @media (max-width: 991.98px) {
    .banner-bg-media {
      background-position: center;
    }

    .banner-bg-overlay {
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.94) 0%,
        rgba(255, 255, 255, 0.86) 65%,
        rgba(255, 255, 255, 0.72) 100%
      );
    }

    .banner-subtitle,
    .banner-search-form {
      max-width: 100%;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        once: true,
        offset: 40
      });
    }
  });
</script>

<!-- Featured Spotlight Section — Editorial Split-Stage Variation -->
<section class="editorial-spotlight-v2 position-relative overflow-hidden py-5" aria-label="Featured Insight Spotlight">
  <!-- Slow Up-Down Floating Corner Objects -->
  <div class="v2-corner v2-corner-top-left d-none d-md-block" aria-hidden="true">
    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="16" y1="16" x2="84" y2="16" stroke="rgba(168, 134, 62, 0.35)" stroke-width="1.5" />
      <line x1="16" y1="16" x2="16" y2="84" stroke="rgba(168, 134, 62, 0.35)" stroke-width="1.5" />
      <polygon points="16,10 22,16 16,22 10,16" fill="#a8863e" />
    </svg>
  </div>

  <div class="v2-corner v2-corner-bottom-right d-none d-md-block" aria-hidden="true">
    <svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="20" y1="92" x2="92" y2="92" stroke="rgba(28, 29, 33, 0.16)" stroke-width="1.5" />
      <line x1="92" y1="20" x2="92" y2="92" stroke="rgba(28, 29, 33, 0.16)" stroke-width="1.5" />
      <circle cx="92" cy="92" r="5" fill="#a8863e" />
    </svg>
  </div>

  <div class="container position-relative z-2 py-2 py-md-3">
    <!-- Section Eyebrow Header -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-2 mb-4 pb-2 border-bottom v2-divider" data-aos="fade-up" data-aos-duration="600">
      <div>
        <span class="v2-eyebrow text-uppercase d-block mb-1">Featured Briefing</span>
        <h2 class="v2-section-heading fw-bold mb-0">Editor&rsquo;s Choice <span class="text-gold">Spotlight</span></h2>
      </div>
      <div class="v2-issue-tag">
        <i class="bi bi-journal-richtext me-1 text-gold"></i>
        <span>Q4 Strategy Dispatch &bull; 8 min read</span>
      </div>
    </div>

    <!-- Main Split Layout -->
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Visual Composition with Offset Backing Panel -->
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="750">
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
            <span class="v2-status-dot"></span>
            <span class="small fw-medium text-dark">Enterprise AI &amp; Cloud Architecture</span>
          </div>
        </div>
      </div>

      <!-- Right Editorial Copy -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="750" data-aos-delay="100">
        <div class="v2-copy-wrap">
          <span class="v2-pill-label d-inline-flex align-items-center gap-2 mb-3">
            <i class="bi bi-stars"></i>
            Editor&rsquo;s Choice Spotlight
          </span>

          <h3 class="v2-article-title fw-bold mb-3">
            The 2026 <span class="text-gold">Enterprise AI</span> Roadmap: Bridging Strategy &amp; Scalable Architecture
          </h3>

          <p class="v2-article-lead mb-4">
            How Fortune 500 tech leaders are transitioning from experimental GenAI proofs-of-concept into resilient, zero-trust cloud architectures with measurable ROI.
          </p>

          <!-- Subtle Editorial Callout Strip -->
          <blockquote class="v2-takeaway ps-3 mb-4">
            &ldquo;Sustainable AI scale comes from disciplined governance, modular cloud foundations, and clear unit economics—not one-off pilots.&rdquo;
          </blockquote>

          <!-- Author & Action Row -->
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
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .editorial-spotlight-v2 {
    background: #fff;
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

  /* Slow Up-Down Floating Corner Accents */
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
      transform: translateY(-15px);
    }
  }

  /* Left Offset Photo Stage */
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

  /* Right Editorial Typography */
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

  @media (prefers-reduced-motion: reduce) {
    .v2-corner {
      animation: none;
    }
  }
</style>

<!-- Trending Insights This Month Section -->
<section class="trending-section position-relative overflow-hidden py-5" aria-label="Trending Insights This Month">
  <!-- Subtle Left Architectural Silhouette -->
  <div class="trending-left-building d-none d-lg-block" aria-hidden="true"></div>

  <!-- Slow Up-Down Floating Corner Objects -->
  <div class="trending-corner trending-top-left d-none d-md-block" aria-hidden="true">
    <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g fill="rgba(168, 134, 62, 0.36)">
        <circle cx="14" cy="14" r="2.2" /><circle cx="30" cy="14" r="2.2" /><circle cx="46" cy="14" r="2.2" /><circle cx="62" cy="14" r="2.2" />
        <circle cx="14" cy="30" r="2.2" /><circle cx="30" cy="30" r="2.2" /><circle cx="46" cy="30" r="2.2" /><circle cx="62" cy="30" r="2.2" />
        <circle cx="14" cy="46" r="2.2" /><circle cx="30" cy="46" r="2.2" /><circle cx="46" cy="46" r="2.2" /><circle cx="62" cy="46" r="2.2" />
      </g>
    </svg>
  </div>

  <div class="trending-corner trending-top-right d-none d-md-block" aria-hidden="true">
    <svg width="170" height="170" viewBox="0 0 170 170" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="155" cy="15" r="42" stroke="rgba(168, 134, 62, 0.16)" stroke-width="1.2" />
      <circle cx="155" cy="15" r="64" stroke="rgba(168, 134, 62, 0.13)" stroke-width="1.2" />
      <circle cx="155" cy="15" r="88" stroke="rgba(168, 134, 62, 0.11)" stroke-width="1.2" />
      <circle cx="155" cy="15" r="114" stroke="rgba(168, 134, 62, 0.09)" stroke-width="1.2" />
    </svg>
  </div>

  <div class="trending-corner trending-bottom-right d-none d-md-block" aria-hidden="true">
    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g fill="rgba(168, 134, 62, 0.42)">
        <circle cx="16" cy="16" r="2.2" /><circle cx="32" cy="16" r="2.2" /><circle cx="48" cy="16" r="2.2" /><circle cx="64" cy="16" r="2.2" />
        <circle cx="16" cy="32" r="2.2" /><circle cx="32" cy="32" r="2.2" /><circle cx="48" cy="32" r="2.2" /><circle cx="64" cy="32" r="2.2" />
        <circle cx="16" cy="48" r="2.2" /><circle cx="32" cy="48" r="2.2" /><circle cx="48" cy="48" r="2.2" /><circle cx="64" cy="48" r="2.2" />
        <circle cx="16" cy="64" r="2.2" /><circle cx="32" cy="64" r="2.2" /><circle cx="48" cy="64" r="2.2" /><circle cx="64" cy="64" r="2.2" />
      </g>
    </svg>
  </div>

  <!-- Soft Bottom Wave Accent -->
  <svg class="trending-bottom-wave" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
    <path d="M0 78C260 22 520 112 820 74C1080 42 1280 55 1440 85V120H0V78Z" fill="rgba(229, 214, 176, 0.22)" />
    <path d="M0 95C290 48 560 115 890 82C1130 58 1310 70 1440 92" stroke="rgba(168, 134, 62, 0.35)" stroke-width="1.5" />
  </svg>

  <div class="container position-relative z-2 py-2">
    <!-- Section Heading Block -->
    <div class="text-center mx-auto mb-5" style="max-width: 620px;" data-aos="fade-up" data-aos-duration="650">
      <span class="trending-pill d-inline-block mb-3">Most Popular</span>
      <h2 class="trending-title fw-bold mb-2">
        Trending Insights <span class="text-gold">This Month</span>
      </h2>
      <span class="trending-title-rule d-block mx-auto mb-3"></span>
      <p class="trending-subtitle mb-0">
        Top-read executive briefings curated by readership engagement metrics.
      </p>
    </div>

    <!-- 3 Ranked Cards Row -->
    <div class="row g-4 align-items-stretch">
      <!-- Card #1 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="100">
        <article class="trending-card bg-white h-100 d-flex align-items-center position-relative">
          <span class="rank-ribbon rank-gold">#1</span>
          <div class="trending-thumb-wrap flex-shrink-0">
            <img
              src="<?= $img; ?>/mastering-cloud.png"
              alt="Glass corporate skyscrapers under golden hour sky"
              class="trending-thumb w-100 h-100"
            >
          </div>
          <div class="trending-body py-3 pe-3 ps-3">
            <div class="trending-reads d-flex align-items-center gap-1 mb-2">
              <i class="bi bi-eye"></i>
              <span>14.2k Reads</span>
            </div>
            <h3 class="trending-card-title fw-bold mb-2">
              <a href="#article-cloud-finops" class="stretched-link text-decoration-none text-reset">
                Mastering Cloud FinOps in High-Growth Scaleups
              </a>
            </h3>
            <div class="trending-meta">By Victoria Vance &bull; 5 min read</div>
          </div>
        </article>
      </div>

      <!-- Card #2 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="180">
        <article class="trending-card bg-white h-100 d-flex align-items-center position-relative">
          <span class="rank-ribbon rank-amber">#2</span>
          <div class="trending-thumb-wrap flex-shrink-0">
            <img
              src="<?= $img; ?>/modern-ctos.png"
              alt="Laptop showing analytics charts and governance metrics on a desk"
              class="trending-thumb w-100 h-100"
            >
          </div>
          <div class="trending-body py-3 pe-3 ps-3">
            <div class="trending-reads d-flex align-items-center gap-1 mb-2">
              <i class="bi bi-eye"></i>
              <span>11.8k Reads</span>
            </div>
            <h3 class="trending-card-title fw-bold mb-2">
              <a href="#article-ai-data-governance" class="stretched-link text-decoration-none text-reset">
                The Modern CTO&rsquo;s Guide to AI Data Governance
              </a>
            </h3>
            <div class="trending-meta">By Marcus Thorne &bull; 7 min read</div>
          </div>
        </article>
      </div>

      <!-- Card #3 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="260">
        <article class="trending-card bg-white h-100 d-flex align-items-center position-relative">
          <span class="rank-ribbon rank-bronze">#3</span>
          <div class="trending-thumb-wrap flex-shrink-0">
            <img
              src="<?= $img; ?>/building-high.png"
              alt="Smartphone displaying payment confirmation alongside digital Web3 network graphics"
              class="trending-thumb w-100 h-100"
            >
          </div>
          <div class="trending-body py-3 pe-3 ps-3">
            <div class="trending-reads d-flex align-items-center gap-1 mb-2">
              <i class="bi bi-eye"></i>
              <span>9.5k Reads</span>
            </div>
            <h3 class="trending-card-title fw-bold mb-2">
              <a href="#article-web3-payment-gateways" class="stretched-link text-decoration-none text-reset">
                Building High-Throughput Web3 Payment Gateways
              </a>
            </h3>
            <div class="trending-meta">By Elena Rostova &bull; 6 min read</div>
          </div>
        </article>
      </div>

      <!-- Card #1 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="100">
        <article class="trending-card bg-white h-100 d-flex align-items-center position-relative">
          <span class="rank-ribbon rank-gold">#1</span>
          <div class="trending-thumb-wrap flex-shrink-0">
            <img
              src="<?= $img; ?>/mastering-cloud.png"
              alt="Glass corporate skyscrapers under golden hour sky"
              class="trending-thumb w-100 h-100"
            >
          </div>
          <div class="trending-body py-3 pe-3 ps-3">
            <div class="trending-reads d-flex align-items-center gap-1 mb-2">
              <i class="bi bi-eye"></i>
              <span>14.2k Reads</span>
            </div>
            <h3 class="trending-card-title fw-bold mb-2">
              <a href="#article-cloud-finops" class="stretched-link text-decoration-none text-reset">
                Mastering Cloud FinOps in High-Growth Scaleups
              </a>
            </h3>
            <div class="trending-meta">By Victoria Vance &bull; 5 min read</div>
          </div>
        </article>
      </div>

      <!-- Card #2 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="180">
        <article class="trending-card bg-white h-100 d-flex align-items-center position-relative">
          <span class="rank-ribbon rank-amber">#2</span>
          <div class="trending-thumb-wrap flex-shrink-0">
            <img
              src="<?= $img; ?>/modern-ctos.png"
              alt="Laptop showing analytics charts and governance metrics on a desk"
              class="trending-thumb w-100 h-100"
            >
          </div>
          <div class="trending-body py-3 pe-3 ps-3">
            <div class="trending-reads d-flex align-items-center gap-1 mb-2">
              <i class="bi bi-eye"></i>
              <span>11.8k Reads</span>
            </div>
            <h3 class="trending-card-title fw-bold mb-2">
              <a href="#article-ai-data-governance" class="stretched-link text-decoration-none text-reset">
                The Modern CTO&rsquo;s Guide to AI Data Governance
              </a>
            </h3>
            <div class="trending-meta">By Marcus Thorne &bull; 7 min read</div>
          </div>
        </article>
      </div>

      <!-- Card #3 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="260">
        <article class="trending-card bg-white h-100 d-flex align-items-center position-relative">
          <span class="rank-ribbon rank-bronze">#3</span>
          <div class="trending-thumb-wrap flex-shrink-0">
            <img
              src="<?= $img; ?>/building-high.png"
              alt="Smartphone displaying payment confirmation alongside digital Web3 network graphics"
              class="trending-thumb w-100 h-100"
            >
          </div>
          <div class="trending-body py-3 pe-3 ps-3">
            <div class="trending-reads d-flex align-items-center gap-1 mb-2">
              <i class="bi bi-eye"></i>
              <span>9.5k Reads</span>
            </div>
            <h3 class="trending-card-title fw-bold mb-2">
              <a href="#article-web3-payment-gateways" class="stretched-link text-decoration-none text-reset">
                Building High-Throughput Web3 Payment Gateways
              </a>
            </h3>
            <div class="trending-meta">By Elena Rostova &bull; 6 min read</div>
          </div>
        </article>
      </div>
      
    </div>
  </div>
</section>

<!-- Articles Directory Section -->
<section class="hub-directory-section position-relative overflow-hidden py-5" id="articles-directory" aria-label="Explore Latest Articles and Reports">
  <!-- Elegant Corner & Background Objects (All 4 Corners, Slow Up-Down Motion) -->
  <div class="hub-bg-object hub-corner-tl d-none d-md-block" aria-hidden="true">
    <svg width="136" height="136" viewBox="0 0 136 136" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 118V22C18 19.7909 19.7909 18 22 18H118" stroke="rgba(158, 123, 47, 0.34)" stroke-width="1.35" />
      <path d="M28 92V32C28 29.7909 29.7909 28 32 28H92" stroke="rgba(158, 123, 47, 0.16)" stroke-width="1.1" />
      <polygon points="18,12 24,18 18,24 12,18" fill="#9e7b2f" />
      <circle cx="52" cy="52" r="2.2" fill="rgba(158, 123, 47, 0.42)" />
      <circle cx="68" cy="52" r="2.2" fill="rgba(158, 123, 47, 0.28)" />
      <circle cx="52" cy="68" r="2.2" fill="rgba(158, 123, 47, 0.28)" />
    </svg>
  </div>

  <div class="hub-bg-object hub-corner-tr d-none d-md-block" aria-hidden="true">
    <svg width="168" height="168" viewBox="0 0 168 168" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="144" cy="24" r="38" stroke="rgba(158, 123, 47, 0.2)" stroke-width="1.2" />
      <circle cx="144" cy="24" r="64" stroke="rgba(158, 123, 47, 0.14)" stroke-width="1.2" stroke-dasharray="4 4" />
      <circle cx="144" cy="24" r="92" stroke="rgba(158, 123, 47, 0.1)" stroke-width="1.1" />
      <circle cx="116" cy="52" r="3.5" fill="#9e7b2f" fill-opacity="0.65" />
    </svg>
  </div>

  <div class="hub-bg-object hub-corner-bl d-none d-md-block" aria-hidden="true">
    <svg width="156" height="156" viewBox="0 0 156 156" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="26" cy="130" r="46" stroke="rgba(158, 123, 47, 0.16)" stroke-width="1.2" />
      <path d="M18 86V134C18 136.209 19.7909 138 22 138H70" stroke="rgba(158, 123, 47, 0.3)" stroke-width="1.35" />
      <g fill="rgba(158, 123, 47, 0.34)">
        <circle cx="58" cy="104" r="2" /><circle cx="72" cy="104" r="2" /><circle cx="86" cy="104" r="2" />
        <circle cx="58" cy="118" r="2" /><circle cx="72" cy="118" r="2" /><circle cx="86" cy="118" r="2" />
      </g>
    </svg>
  </div>

  <div class="hub-bg-object hub-corner-br d-none d-md-block" aria-hidden="true">
    <svg width="144" height="144" viewBox="0 0 144 144" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M126 26V122C126 124.209 124.209 126 122 126H26" stroke="rgba(158, 123, 47, 0.34)" stroke-width="1.35" />
      <path d="M114 48V110C114 112.209 112.209 114 110 114H48" stroke="rgba(158, 123, 47, 0.16)" stroke-width="1.1" />
      <circle cx="126" cy="126" r="4.2" fill="#9e7b2f" />
      <polygon points="88,88 94,94 88,100 82,94" fill="rgba(158, 123, 47, 0.32)" />
    </svg>
  </div>

  <div class="container position-relative z-2 py-2 py-md-3">
    <!-- Section Header -->
    <div class="text-center mx-auto mb-4 mb-md-5" style="max-width: 680px;" data-aos="fade-up" data-aos-duration="650">
      <span class="hub-pill d-inline-block mb-3">Knowledge Hub</span>
      <h2 class="hub-title fw-bold mb-2">
        Explore Latest Articles &amp; <span class="text-gold">Reports</span>
      </h2>
      <span class="hub-title-rule d-block mx-auto mb-3"></span>
      <p class="hub-subtitle mb-0">
        Filtered by expert categories to deliver actionable perspectives for business leaders.
      </p>
    </div>

    <!-- Category Filter Tabs -->
    <div class="hub-tabs d-flex flex-wrap justify-content-center gap-2 mb-4 mb-md-5" role="tablist" aria-label="Article Categories" data-aos="fade-up" data-aos-delay="100">
      <button type="button" class="hub-filter-btn active" data-filter="all">All Insights</button>
      <button type="button" class="hub-filter-btn" data-filter="trends">Industry Trends</button>
      <button type="button" class="hub-filter-btn" data-filter="leadership">Executive Leadership</button>
      <button type="button" class="hub-filter-btn" data-filter="tech">Tech Innovations</button>
      <button type="button" class="hub-filter-btn" data-filter="case-studies">Case Studies</button>
      <button type="button" class="hub-filter-btn" data-filter="market">Market Research</button>
    </div>

    <!-- Article Cards Grid -->
    <div class="row g-4" id="articlesGrid">
      <!-- Article Card 1 -->
      <div class="col-md-6 col-lg-4 article-item" data-category="tech" data-title="Architecting Resilient Zero-Trust Cloud Networks" data-author="Marcus Thorne" data-tags="Cybersecurity Cloud Security AWS Zero Trust Infrastructure" data-aos="fade-up" data-aos-delay="100">
        <article class="hub-card bg-white h-100 d-flex flex-column">
          <div class="hub-img-wrap position-relative overflow-hidden">
            <span class="hub-cat-badge">Tech Innovations</span>
            <img
              src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80"
              alt="Zero Trust Security"
              class="hub-card-img w-100 h-100"
              onerror="this.src='https://placehold.co/600x400/9e7b2f/ffffff?text=Zero+Trust+Cloud'"
            >
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <div class="d-flex justify-content-between align-items-center hub-meta-top mb-2">
              <span><i class="bi bi-calendar3 me-1 text-gold"></i>Sep 28, 2026</span>
              <span><i class="bi bi-clock me-1 text-gold"></i>5 min read</span>
            </div>
            <h3 class="hub-card-title fw-bold mb-2">Architecting Resilient Zero-Trust Cloud Networks</h3>
            <p class="hub-card-excerpt flex-grow-1 mb-3">
              A deep dive into micro-segmentation, identity verification gates, and continuous automated auditing in AWS ecosystems.
            </p>
            <div class="d-flex flex-wrap gap-1 mb-3">
              <span class="hub-tag">Cybersecurity</span>
              <span class="hub-tag">Cloud Security</span>
              <span class="hub-tag">AWS</span>
            </div>
            <div class="pt-3 mt-auto border-top hub-card-footer d-flex align-items-center justify-content-between gap-2">
              <div class="d-flex align-items-center gap-2 min-w-0">
                <img
                  src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80"
                  class="hub-avatar rounded-circle flex-shrink-0"
                  alt="Marcus Thorne"
                  onerror="this.src='https://placehold.co/80/9e7b2f/ffffff?text=MT'"
                >
                <span class="hub-author-name fw-semibold text-truncate">Marcus Thorne</span>
              </div>
              <button
                type="button"
                class="btn hub-read-btn btn-sm px-3 flex-shrink-0 view-article-modal-btn"
                data-bs-toggle="modal"
                data-bs-target="#articleReaderModal"
                data-title="Architecting Resilient Zero-Trust Cloud Networks"
                data-category="Tech Innovations"
                data-author="Marcus Thorne"
                data-author-role="Principal Security Architect"
                data-author-img="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80"
                data-date="Sep 28, 2026"
                data-readtime="5 min read"
                data-img="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80"
                data-content="Zero Trust is no longer just a security framework—it is the operational standard for hybrid enterprise networks. By enforcing dynamic least-privilege access controls across every endpoint and microservice, security teams can contain potential vulnerabilities before lateral movement occurs.<br><br>This blueprint explores automated token rotation, real-time identity telemetry, and policy-as-code paradigms designed to minimize attack vectors without degrading application speed."
                data-quote="Security is most effective when integrated naturally into developer workflows rather than enforced as a bottleneck."
                data-tags="Cybersecurity, Cloud, Zero Trust, Infrastructure"
              >
                Read Article
              </button>
            </div>
          </div>
        </article>
      </div>

      <!-- Article Card 2 -->
      <div class="col-md-6 col-lg-4 article-item" data-category="trends" data-title="Global E-Commerce Microservices Trends for 2027" data-author="Sophia Lin" data-tags="Headless Microservices Retail Tech E-Commerce" data-aos="fade-up" data-aos-delay="160">
        <article class="hub-card bg-white h-100 d-flex flex-column">
          <div class="hub-img-wrap position-relative overflow-hidden">
            <span class="hub-cat-badge">Industry Trends</span>
            <img
              src="https://images.unsplash.com/photo-1556742049-0a67568d049f?auto=format&fit=crop&w=600&q=80"
              alt="E-Commerce Trends"
              class="hub-card-img w-100 h-100"
              onerror="this.src='https://placehold.co/600x400/9e7b2f/ffffff?text=E-Commerce+Trends'"
            >
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <div class="d-flex justify-content-between align-items-center hub-meta-top mb-2">
              <span><i class="bi bi-calendar3 me-1 text-gold"></i>Sep 20, 2026</span>
              <span><i class="bi bi-clock me-1 text-gold"></i>6 min read</span>
            </div>
            <h3 class="hub-card-title fw-bold mb-2">Global E-Commerce Microservices Trends for 2027</h3>
            <p class="hub-card-excerpt flex-grow-1 mb-3">
              How composable commerce architectures and headless APIs are reshaping customer acquisition and conversion speed.
            </p>
            <div class="d-flex flex-wrap gap-1 mb-3">
              <span class="hub-tag">Headless</span>
              <span class="hub-tag">Microservices</span>
              <span class="hub-tag">Retail Tech</span>
            </div>
            <div class="pt-3 mt-auto border-top hub-card-footer d-flex align-items-center justify-content-between gap-2">
              <div class="d-flex align-items-center gap-2 min-w-0">
                <img
                  src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80"
                  class="hub-avatar rounded-circle flex-shrink-0"
                  alt="Sophia Lin"
                  onerror="this.src='https://placehold.co/80/9e7b2f/ffffff?text=SL'"
                >
                <span class="hub-author-name fw-semibold text-truncate">Sophia Lin</span>
              </div>
              <button
                type="button"
                class="btn hub-read-btn btn-sm px-3 flex-shrink-0 view-article-modal-btn"
                data-bs-toggle="modal"
                data-bs-target="#articleReaderModal"
                data-title="Global E-Commerce Microservices Trends for 2027"
                data-category="Industry Trends"
                data-author="Sophia Lin"
                data-author-role="Head of Retail Solutions"
                data-author-img="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80"
                data-date="Sep 20, 2026"
                data-readtime="6 min read"
                data-img="https://images.unsplash.com/photo-1556742049-0a67568d049f?auto=format&fit=crop&w=600&q=80"
                data-content="Monolithic e-commerce platforms are quickly yielding ground to modular, API-first headless ecosystems. Modern global retailers demand regional edge caching, dynamic currency conversions, and frictionless single-click mobile checkouts.<br><br>By decoupling front-end user experience layers from core ERP inventory backends, forward-thinking brands achieve sub-second page performance and continuous deployment freedom."
                data-quote="Speed is the ultimate currency in modern digital commerce; every millisecond saved translates directly into revenue."
                data-tags="E-Commerce, Headless, Microservices, Retail"
              >
                Read Article
              </button>
            </div>
          </div>
        </article>
      </div>

      <!-- Article Card 3 -->
      <div class="col-md-6 col-lg-4 article-item" data-category="leadership" data-title="Navigating Enterprise Digital Transformation Budgets" data-author="Julian Sterling" data-tags="Fintech Leadership Strategy FinOps ROI" data-aos="fade-up" data-aos-delay="220">
        <article class="hub-card bg-white h-100 d-flex flex-column">
          <div class="hub-img-wrap position-relative overflow-hidden">
            <span class="hub-cat-badge">Executive Leadership</span>
            <img
              src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80"
              alt="Executive Leadership"
              class="hub-card-img w-100 h-100"
              onerror="this.src='https://placehold.co/600x400/9e7b2f/ffffff?text=Executive+Leadership'"
            >
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <div class="d-flex justify-content-between align-items-center hub-meta-top mb-2">
              <span><i class="bi bi-calendar3 me-1 text-gold"></i>Sep 14, 2026</span>
              <span><i class="bi bi-clock me-1 text-gold"></i>7 min read</span>
            </div>
            <h3 class="hub-card-title fw-bold mb-2">Navigating Enterprise Digital Transformation Budgets</h3>
            <p class="hub-card-excerpt flex-grow-1 mb-3">
              A pragmatic guide for CFOs and CTOs balancing legacy system maintenance with modern innovation investments.
            </p>
            <div class="d-flex flex-wrap gap-1 mb-3">
              <span class="hub-tag">Fintech</span>
              <span class="hub-tag">Leadership</span>
              <span class="hub-tag">Strategy</span>
            </div>
            <div class="pt-3 mt-auto border-top hub-card-footer d-flex align-items-center justify-content-between gap-2">
              <div class="d-flex align-items-center gap-2 min-w-0">
                <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80"
                  class="hub-avatar rounded-circle flex-shrink-0"
                  alt="Julian Sterling"
                  onerror="this.src='https://placehold.co/80/9e7b2f/ffffff?text=JS'"
                >
                <span class="hub-author-name fw-semibold text-truncate">Julian Sterling</span>
              </div>
              <button
                type="button"
                class="btn hub-read-btn btn-sm px-3 flex-shrink-0 view-article-modal-btn"
                data-bs-toggle="modal"
                data-bs-target="#articleReaderModal"
                data-title="Navigating Enterprise Digital Transformation Budgets"
                data-category="Executive Leadership"
                data-author="Julian Sterling"
                data-author-role="Managing Partner & Strategist"
                data-author-img="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80"
                data-date="Sep 14, 2026"
                data-readtime="7 min read"
                data-img="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80"
                data-content="Digital transformation initiatives frequently stall due to misaligned expectations between technical execution and financial stewardship. Chief Technology Officers must articulate technology investments in clear revenue-generating or cost-avoidance metrics.<br><br>This executive playbook outlines milestone-based capital allocation, cloud cost optimization frameworks (FinOps), and strategies for decommissioning legacy technical debt."
                data-quote="Transformation is not about spending more; it is about allocating capital toward agility and scalable leverage."
                data-tags="FinOps, Digital Strategy, Leadership, ROI"
              >
                Read Article
              </button>
            </div>
          </div>
        </article>
      </div>

      <!-- Article Card 4 -->
      <div class="col-md-6 col-lg-4 article-item" data-category="case-studies" data-title="Scaling FinTech Core Services to 10M Active Users" data-author="Elena Rostova" data-tags="Kafka Database FinTech Distributed Systems Cloud" data-aos="fade-up" data-aos-delay="100">
        <article class="hub-card bg-white h-100 d-flex flex-column">
          <div class="hub-img-wrap position-relative overflow-hidden">
            <span class="hub-cat-badge">Case Studies</span>
            <img
              src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80"
              alt="FinTech Scaling"
              class="hub-card-img w-100 h-100"
              onerror="this.src='https://placehold.co/600x400/9e7b2f/ffffff?text=FinTech+Case+Study'"
            >
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <div class="d-flex justify-content-between align-items-center hub-meta-top mb-2">
              <span><i class="bi bi-calendar3 me-1 text-gold"></i>Aug 30, 2026</span>
              <span><i class="bi bi-clock me-1 text-gold"></i>9 min read</span>
            </div>
            <h3 class="hub-card-title fw-bold mb-2">Scaling FinTech Core Services to 10M Active Users</h3>
            <p class="hub-card-excerpt flex-grow-1 mb-3">
              Technical breakdown of database sharding, event-driven streaming with Kafka, and fault-tolerant banking APIs.
            </p>
            <div class="d-flex flex-wrap gap-1 mb-3">
              <span class="hub-tag">Kafka</span>
              <span class="hub-tag">Database</span>
              <span class="hub-tag">FinTech</span>
            </div>
            <div class="pt-3 mt-auto border-top hub-card-footer d-flex align-items-center justify-content-between gap-2">
              <div class="d-flex align-items-center gap-2 min-w-0">
                <img
                  src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80"
                  class="hub-avatar rounded-circle flex-shrink-0"
                  alt="Elena Rostova"
                  onerror="this.src='https://placehold.co/80/9e7b2f/ffffff?text=ER'"
                >
                <span class="hub-author-name fw-semibold text-truncate">Elena Rostova</span>
              </div>
              <button
                type="button"
                class="btn hub-read-btn btn-sm px-3 flex-shrink-0 view-article-modal-btn"
                data-bs-toggle="modal"
                data-bs-target="#articleReaderModal"
                data-title="Scaling FinTech Core Services to 10M Active Users"
                data-category="Case Studies"
                data-author="Elena Rostova"
                data-author-role="Lead Backend Engineer"
                data-author-img="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80"
                data-date="Aug 30, 2026"
                data-readtime="9 min read"
                data-img="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80"
                data-content="High-frequency financial transaction networks demand near-zero latency and absolute transactional integrity. When our partner platform scaled past 10 million daily active users, monolithic relational databases became significant throughput bottlenecks.<br><br>By implementing an event-driven architecture powered by Apache Kafka, Redis cluster caching, and dynamic database sharding, we achieved 99.999% uptime during peak market volatility."
                data-quote="Scalability is not an afterthought; it must be designed into every data model and pipeline from day one."
                data-tags="FinTech, Kafka, Distributed Systems, Cloud"
              >
                Read Article
              </button>
            </div>
          </div>
        </article>
      </div>

      <!-- Article Card 5 -->
      <div class="col-md-6 col-lg-4 article-item" data-category="market" data-title="2026 Global Healthcare Data & Privacy Report" data-author="Dr. Marcus Vance" data-tags="Healthcare HIPAA Data Privacy Compliance AI Research" data-aos="fade-up" data-aos-delay="160">
        <article class="hub-card bg-white h-100 d-flex flex-column">
          <div class="hub-img-wrap position-relative overflow-hidden">
            <span class="hub-cat-badge">Market Research</span>
            <img
              src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80"
              alt="Healthcare Research"
              class="hub-card-img w-100 h-100"
              onerror="this.src='https://placehold.co/600x400/9e7b2f/ffffff?text=Healthcare+Research'"
            >
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <div class="d-flex justify-content-between align-items-center hub-meta-top mb-2">
              <span><i class="bi bi-calendar3 me-1 text-gold"></i>Aug 18, 2026</span>
              <span><i class="bi bi-clock me-1 text-gold"></i>10 min read</span>
            </div>
            <h3 class="hub-card-title fw-bold mb-2">2026 Global Healthcare Data &amp; Privacy Report</h3>
            <p class="hub-card-excerpt flex-grow-1 mb-3">
              Key findings on clinical record interoperability, encryption standards, and AI-driven diagnostic privacy compliance.
            </p>
            <div class="d-flex flex-wrap gap-1 mb-3">
              <span class="hub-tag">Healthcare</span>
              <span class="hub-tag">HIPAA</span>
              <span class="hub-tag">Data Privacy</span>
            </div>
            <div class="pt-3 mt-auto border-top hub-card-footer d-flex align-items-center justify-content-between gap-2">
              <div class="d-flex align-items-center gap-2 min-w-0">
                <img
                  src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80"
                  class="hub-avatar rounded-circle flex-shrink-0"
                  alt="Dr. Marcus Vance"
                  onerror="this.src='https://placehold.co/80/9e7b2f/ffffff?text=MV'"
                >
                <span class="hub-author-name fw-semibold text-truncate">Dr. Marcus Vance</span>
              </div>
              <button
                type="button"
                class="btn hub-read-btn btn-sm px-3 flex-shrink-0 view-article-modal-btn"
                data-bs-toggle="modal"
                data-bs-target="#articleReaderModal"
                data-title="2026 Global Healthcare Data & Privacy Report"
                data-category="Market Research"
                data-author="Dr. Marcus Vance"
                data-author-role="Medical Data Compliance Lead"
                data-author-img="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80"
                data-date="Aug 18, 2026"
                data-readtime="10 min read"
                data-img="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80"
                data-content="The healthcare industry is witnessing rapid adoption of AI diagnostic assistants and remote patient telemetry devices. However, this proliferation creates complex regulatory challenges across international boundaries.<br><br>Our comprehensive report synthesizes telemetry encryption protocols, federated machine learning models, and compliance framework guidelines designed to protect patient records without stalling research innovation."
                data-quote="Patient trust is built on the foundation of uncompromised data integrity and transparent privacy policies."
                data-tags="Healthcare, Privacy, Compliance, AI Research"
              >
                Read Article
              </button>
            </div>
          </div>
        </article>
      </div>

      <!-- Article Card 6 -->
      <div class="col-md-6 col-lg-4 article-item" data-category="tech" data-title="DevOps to Platform Engineering: The Operational Shift" data-author="Julian Sterling" data-tags="DevOps Kubernetes Engineering Platform Engineering Velocity" data-aos="fade-up" data-aos-delay="220">
        <article class="hub-card bg-white h-100 d-flex flex-column">
          <div class="hub-img-wrap position-relative overflow-hidden">
            <span class="hub-cat-badge">Tech Innovations</span>
            <img
              src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80"
              alt="Platform Engineering"
              class="hub-card-img w-100 h-100"
              onerror="this.src='https://placehold.co/600x400/9e7b2f/ffffff?text=Platform+Engineering'"
            >
          </div>
          <div class="p-4 d-flex flex-column flex-grow-1">
            <div class="d-flex justify-content-between align-items-center hub-meta-top mb-2">
              <span><i class="bi bi-calendar3 me-1 text-gold"></i>Aug 05, 2026</span>
              <span><i class="bi bi-clock me-1 text-gold"></i>4 min read</span>
            </div>
            <h3 class="hub-card-title fw-bold mb-2">DevOps to Platform Engineering: The Operational Shift</h3>
            <p class="hub-card-excerpt flex-grow-1 mb-3">
              Why internal developer portals (IDPs) and self-service infrastructure are empowering software development velocity.
            </p>
            <div class="d-flex flex-wrap gap-1 mb-3">
              <span class="hub-tag">DevOps</span>
              <span class="hub-tag">Kubernetes</span>
              <span class="hub-tag">Engineering</span>
            </div>
            <div class="pt-3 mt-auto border-top hub-card-footer d-flex align-items-center justify-content-between gap-2">
              <div class="d-flex align-items-center gap-2 min-w-0">
                <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80"
                  class="hub-avatar rounded-circle flex-shrink-0"
                  alt="Julian Sterling"
                  onerror="this.src='https://placehold.co/80/9e7b2f/ffffff?text=JS'"
                >
                <span class="hub-author-name fw-semibold text-truncate">Julian Sterling</span>
              </div>
              <button
                type="button"
                class="btn hub-read-btn btn-sm px-3 flex-shrink-0 view-article-modal-btn"
                data-bs-toggle="modal"
                data-bs-target="#articleReaderModal"
                data-title="DevOps to Platform Engineering: The Operational Shift"
                data-category="Tech Innovations"
                data-author="Julian Sterling"
                data-author-role="Managing Partner & Strategist"
                data-author-img="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80"
                data-date="Aug 05, 2026"
                data-readtime="4 min read"
                data-img="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80"
                data-content="As cloud-native architectures grow increasingly complex, software developers often spend more time configuring infrastructure YAML files than writing business logic. Platform Engineering addresses this fatigue by providing self-service Internal Developer Portals (IDPs).<br><br>By packaging automated CI/CD pipelines, security compliance checks, and Kubernetes cluster provisioning into standardized developer APIs, organizations boost feature shipping speed significantly."
                data-quote="Empower your developers with curated platforms that eliminate cognitive friction and accelerate delivery."
                data-tags="DevOps, Platform Engineering, Kubernetes, Velocity"
              >
                Read Article
              </button>
            </div>
          </div>
        </article>
      </div>
    </div>

    <!-- Empty Filter / Search State -->
    <div id="noResultsMsg" class="text-center py-5 d-none">
      <div class="hub-empty-icon mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle">
        <i class="bi bi-search"></i>
      </div>
      <h3 class="h5 fw-bold mb-1">No matching articles or insights found</h3>
      <p class="text-muted small mb-3">Try adjusting your search criteria or switching category filters.</p>
      <button type="button" id="resetFiltersBtn" class="btn hub-read-btn btn-sm px-4">Reset Filters</button>
    </div>
  </div>

  <!-- Article Reader Modal -->
  <div class="modal fade" id="articleReaderModal" tabindex="-1" aria-labelledby="modalArticleTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content hub-modal-content border-0">
        <div class="modal-header border-bottom px-4 py-3">
          <div>
            <span class="badge hub-modal-badge mb-1" id="modalArticleCategory">Category</span>
            <h4 class="modal-title fw-bold mb-0" id="modalArticleTitle">Article Title</h4>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3 small text-muted">
            <div class="d-flex align-items-center gap-2">
              <img src="" alt="" id="modalAuthorImg" class="hub-avatar rounded-circle">
              <div>
                <div class="fw-semibold text-dark" id="modalAuthorName">Author Name</div>
                <div class="small" id="modalAuthorRole">Role</div>
              </div>
            </div>
            <div>
              <span id="modalArticleDate">Date</span> &bull; <span id="modalArticleReadTime">Read time</span>
            </div>
          </div>

          <img src="" alt="" id="modalArticleImg" class="img-fluid w-100 rounded-3 mb-4 hub-modal-hero">

          <div id="modalArticleBody" class="hub-modal-copy mb-4"></div>

          <blockquote class="hub-modal-quote ps-3 mb-4" id="modalArticleQuote"></blockquote>

          <div class="d-flex flex-wrap gap-2" id="modalArticleTags"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .hub-directory-section {
    font-family: 'Poppins', sans-serif;
    background:
      radial-gradient(circle at 12% 18%, rgba(223, 208, 173, 0.22) 0%, transparent 42%),
      radial-gradient(circle at 88% 82%, rgba(223, 208, 173, 0.24) 0%, transparent 45%),
      linear-gradient(180deg, #f8f6f1 0%, #fcfbf8 55%, #f6f3ec 100%);
    color: #18191c;
  }

  /* Elegant All-Corner Objects with Slow Up-Down Motion */
  .hub-bg-object {
    position: absolute;
    pointer-events: none;
    z-index: 1;
    animation: hubCornerDrift 7.5s ease-in-out infinite;
  }

  .hub-corner-tl {
    top: 24px;
    left: 24px;
  }

  .hub-corner-tr {
    top: 18px;
    right: 24px;
    animation-delay: -1.9s;
  }

  .hub-corner-bl {
    bottom: 20px;
    left: 24px;
    animation-delay: -3.8s;
  }

  .hub-corner-br {
    bottom: 24px;
    right: 24px;
    animation-delay: -5.7s;
  }

  @keyframes hubCornerDrift {
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-13px);
    }
  }

  /* Section Header */
  .hub-pill {
    background-color: #9e7b2f;
    color: #ffffff;
    font-size: 0.76rem;
    font-weight: 500;
    padding: 0.36rem 1.05rem;
    border-radius: 999px;
  }

  .hub-title {
    font-size: clamp(1.65rem, 3vw, 2.35rem);
    line-height: 1.2;
    letter-spacing: -0.015em;
    color: #16171a;
  }

  .hub-directory-section .text-gold {
    color: #9e7b2f;
  }

  .hub-title-rule {
    width: 38px;
    height: 2.5px;
    background-color: #9e7b2f;
    border-radius: 2px;
  }

  .hub-subtitle {
    font-size: 0.92rem;
    line-height: 1.6;
    color: #5c6069;
  }

  /* Category Filter Pills */
  .hub-filter-btn {
    background-color: #ffffff;
    color: #3c4048;
    border: 1px solid #e4e0d6;
    font-size: 0.82rem;
    font-weight: 500;
    padding: 0.48rem 1.1rem;
    border-radius: 999px;
    transition: all 0.22s ease;
  }

  .hub-filter-btn:hover {
    border-color: #9e7b2f;
    color: #9e7b2f;
  }

  .hub-filter-btn.active {
    background-color: #9e7b2f;
    border-color: #9e7b2f;
    color: #ffffff;
    box-shadow: 0 6px 16px rgba(158, 123, 47, 0.24);
  }

  /* Classic Article Cards */
  .hub-card {
    border-radius: 18px;
    border: 1px solid #ebe8e0;
    box-shadow: 0 12px 28px rgba(24, 25, 28, 0.05);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .hub-card:hover {
    transform: translateY(-4px);
    border-color: rgba(158, 123, 47, 0.35);
    box-shadow: 0 18px 36px rgba(24, 25, 28, 0.09);
  }

  .hub-img-wrap {
    height: 205px;
    background-color: #f3f0e8;
  }

  .hub-card-img {
    object-fit: cover;
    display: block;
    transition: transform 0.45s ease;
  }

  .hub-card:hover .hub-card-img {
    transform: scale(1.04);
  }

  .hub-cat-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    z-index: 2;
    background-color: rgba(22, 23, 26, 0.82);
    color: #f6e7c1;
    font-size: 0.72rem;
    font-weight: 500;
    padding: 0.3rem 0.75rem;
    border-radius: 999px;
    backdrop-filter: blur(4px);
  }

  .hub-meta-top {
    font-size: 0.76rem;
    color: #6b6f78;
  }

  .hub-card-title {
    font-size: 1.04rem;
    line-height: 1.38;
    color: #16171a;
  }

  .hub-card-excerpt {
    font-size: 0.84rem;
    line-height: 1.6;
    color: #5d616a;
  }

  .hub-tag {
    background-color: #f7f3e8;
    color: #8a6922;
    border: 1px solid rgba(158, 123, 47, 0.2);
    font-size: 0.7rem;
    font-weight: 500;
    padding: 0.22rem 0.6rem;
    border-radius: 999px;
  }

  .hub-card-footer {
    border-color: #f0eee8 !important;
  }

  .hub-avatar {
    width: 34px;
    height: 34px;
    object-fit: cover;
  }

  .hub-author-name {
    font-size: 0.8rem;
    color: #18191c;
  }

  .hub-read-btn {
    border: 1px solid #9e7b2f;
    color: #9e7b2f;
    font-size: 0.78rem;
    font-weight: 500;
    border-radius: 8px;
    background-color: transparent;
    transition: all 0.2s ease;
  }

  .hub-read-btn:hover,
  .hub-read-btn:focus {
    background-color: #9e7b2f;
    color: #ffffff;
  }

  /* Empty State */
  .hub-empty-icon {
    width: 56px;
    height: 56px;
    background-color: rgba(158, 123, 47, 0.12);
    color: #9e7b2f;
    font-size: 1.35rem;
  }

  /* Reader Modal */
  .hub-modal-content {
    border-radius: 18px;
    font-family: 'Poppins', sans-serif;
  }

  .hub-modal-badge {
    background-color: #9e7b2f;
    color: #ffffff;
    font-weight: 500;
  }

  .hub-modal-hero {
    max-height: 300px;
    object-fit: cover;
  }

  .hub-modal-copy {
    font-size: 0.92rem;
    line-height: 1.72;
    color: #3c4048;
  }

  .hub-modal-quote {
    font-size: 0.9rem;
    font-style: italic;
    color: #24262b;
    border-left: 3px solid #9e7b2f;
    margin-left: 0;
  }

  @media (prefers-reduced-motion: reduce) {
    .hub-bg-object {
      animation: none;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.hub-filter-btn');
    const articleItems = document.querySelectorAll('.article-item');
    const noResultsMsg = document.getElementById('noResultsMsg');
    const resetFiltersBtn = document.getElementById('resetFiltersBtn');
    const searchInput = document.getElementById('newsSearchInput');

    let activeCategory = 'all';

    function applyArticleFilters() {
      const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
      let visibleCount = 0;

      articleItems.forEach(function (item) {
        const category = item.getAttribute('data-category') || '';
        const title = (item.getAttribute('data-title') || '').toLowerCase();
        const author = (item.getAttribute('data-author') || '').toLowerCase();
        const tags = (item.getAttribute('data-tags') || '').toLowerCase();

        const matchesCategory = activeCategory === 'all' || category === activeCategory;
        const matchesQuery = !query || title.includes(query) || author.includes(query) || tags.includes(query);

        if (matchesCategory && matchesQuery) {
          item.classList.remove('d-none');
          visibleCount += 1;
        } else {
          item.classList.add('d-none');
        }
      });

      if (noResultsMsg) {
        noResultsMsg.classList.toggle('d-none', visibleCount > 0);
      }

      if (typeof AOS !== 'undefined') {
        AOS.refresh();
      }
    }

    filterButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterButtons.forEach(function (b) { b.classList.remove('active'); });
        this.classList.add('active');
        activeCategory = this.getAttribute('data-filter') || 'all';
        applyArticleFilters();
      });
    });

    if (searchInput) {
      searchInput.addEventListener('input', applyArticleFilters);
    }

    if (resetFiltersBtn) {
      resetFiltersBtn.addEventListener('click', function () {
        activeCategory = 'all';
        filterButtons.forEach(function (b) {
          b.classList.toggle('active', b.getAttribute('data-filter') === 'all');
        });
        if (searchInput) {
          searchInput.value = '';
        }
        applyArticleFilters();
      });
    }

    const modalEl = document.getElementById('articleReaderModal');
    if (modalEl) {
      modalEl.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        if (!trigger) return;

        document.getElementById('modalArticleCategory').textContent = trigger.getAttribute('data-category') || '';
        document.getElementById('modalArticleTitle').textContent = trigger.getAttribute('data-title') || '';
        document.getElementById('modalAuthorName').textContent = trigger.getAttribute('data-author') || '';
        document.getElementById('modalAuthorRole').textContent = trigger.getAttribute('data-author-role') || '';
        document.getElementById('modalArticleDate').textContent = trigger.getAttribute('data-date') || '';
        document.getElementById('modalArticleReadTime').textContent = trigger.getAttribute('data-readtime') || '';
        document.getElementById('modalArticleBody').innerHTML = trigger.getAttribute('data-content') || '';

        const quoteText = trigger.getAttribute('data-quote') || '';
        const quoteEl = document.getElementById('modalArticleQuote');
        quoteEl.textContent = quoteText ? `"${quoteText}"` : '';
        quoteEl.classList.toggle('d-none', !quoteText);

        const heroImg = document.getElementById('modalArticleImg');
        heroImg.src = trigger.getAttribute('data-img') || '';
        heroImg.alt = trigger.getAttribute('data-title') || 'Article image';

        const authorImg = document.getElementById('modalAuthorImg');
        authorImg.src = trigger.getAttribute('data-author-img') || '';
        authorImg.alt = trigger.getAttribute('data-author') || 'Author';

        const tagsContainer = document.getElementById('modalArticleTags');
        tagsContainer.innerHTML = '';
        const rawTags = (trigger.getAttribute('data-tags') || '').split(',');
        rawTags.forEach(function (tag) {
          const cleanTag = tag.trim();
          if (!cleanTag) return;
          const span = document.createElement('span');
          span.className = 'hub-tag';
          span.textContent = cleanTag;
          tagsContainer.appendChild(span);
        });
      });
    }
  });
</script>

<style>
  .trending-section {
    background: linear-gradient(180deg, #ffffff 0%, #fcfbf8 65%, #f9f6ef 100%);
    color: #18191c;
  }

  /* Subtle Architectural Silhouette on Left */
  .trending-left-building {
    position: absolute;
    left: -16px;
    top: 42%;
    width: 120px;
    height: 270px;
    background: linear-gradient(180deg, rgba(168, 134, 62, 0.09) 0%, rgba(168, 134, 62, 0.02) 100%);
    clip-path: polygon(0 18%, 74% 0, 88% 8%, 88% 100%, 0 100%);
    pointer-events: none;
    z-index: 1;
  }

  /* Slow Up-Down Corner Objects */
  .trending-corner {
    position: absolute;
    pointer-events: none;
    z-index: 1;
    animation: trendingFloat 6.8s ease-in-out infinite;
  }

  .trending-top-left {
    top: 34px;
    left: 68px;
  }

  .trending-top-right {
    top: 0;
    right: 0;
    animation-delay: -2.2s;
  }

  .trending-bottom-right {
    bottom: 24px;
    right: 36px;
    animation-delay: -4.4s;
  }

  @keyframes trendingFloat {
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-12px);
    }
  }

  .trending-bottom-wave {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 95px;
    pointer-events: none;
    z-index: 1;
  }

  /* Header Styling */
  .trending-pill {
    background-color: #b48a34;
    color: #ffffff;
    font-size: 0.78rem;
    font-weight: 500;
    padding: 0.36rem 1.05rem;
    border-radius: 999px;
    letter-spacing: 0.01em;
  }

  .trending-title {
    font-size: clamp(1.65rem, 3vw, 2.35rem);
    line-height: 1.2;
    letter-spacing: -0.015em;
    color: #16171a;
  }

  .trending-section .text-gold {
    color: #a88232;
  }

  .trending-title-rule {
    width: 36px;
    height: 2.5px;
    background-color: #a88232;
    border-radius: 2px;
  }

  .trending-subtitle {
    font-size: 0.9rem;
    line-height: 1.55;
    color: #5d616a;
  }

  /* Classic Ranked Card */
  .trending-card {
    border-radius: 18px;
    border: 1px solid #eceae4;
    box-shadow: 0 12px 28px rgba(24, 25, 28, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }

  .trending-card:hover {
    transform: translateY(-4px);
    border-color: rgba(168, 130, 50, 0.35);
    box-shadow: 0 18px 36px rgba(24, 25, 28, 0.09);
  }

  .rank-ribbon {
    position: absolute;
    top: 18px;
    left: -8px;
    z-index: 3;
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 0.28rem 0.72rem;
    border-radius: 4px 8px 8px 4px;
    box-shadow: 0 6px 14px rgba(24, 25, 28, 0.14);
  }

  .rank-gold {
    background-color: #9e7b2f;
  }

  .rank-amber {
    background-color: #b48c39;
  }

  .rank-bronze {
    background-color: #a47f34;
  }

  .trending-thumb-wrap {
    width: 122px;
    height: 148px;
    margin: 10px 0 10px 10px;
    border-radius: 14px;
    overflow: hidden;
    background-color: #f3f1ec;
  }

  .trending-thumb {
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }

  .trending-card:hover .trending-thumb {
    transform: scale(1.05);
  }

  .trending-reads {
    font-size: 0.78rem;
    font-weight: 500;
    color: #555962;
  }

  .trending-reads i {
    color: #a88232;
  }

  .trending-card-title {
    font-size: 0.96rem;
    line-height: 1.38;
    color: #16171a;
  }

  .trending-meta {
    font-size: 0.75rem;
    color: #6d717a;
  }

  @media (max-width: 575.98px) {
    .trending-card {
      flex-direction: column;
      align-items: stretch !important;
    }

    .trending-thumb-wrap {
      width: calc(100% - 20px);
      height: 170px;
      margin: 10px 10px 0 10px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .trending-corner {
      animation: none;
    }
  }
</style>

<!-- Subscribe to Insights Digest Section -->
<section class="digest-section position-relative overflow-hidden py-5" aria-label="Subscribe to Insights Digest">
  <!-- Left Desk Background Image Layer -->
  <div class="digest-bg-photo" aria-hidden="true"></div>

  <!-- Angled White & Sand Editorial Panel Overlay -->
  <div class="digest-angled-wash d-none d-lg-block" aria-hidden="true"></div>
  <div class="digest-mobile-wash d-lg-none" aria-hidden="true"></div>

  <!-- Slow Up-Down Floating Corner Objects -->
  <div class="digest-corner digest-corner-top-right d-none d-md-block" aria-hidden="true">
    <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g fill="rgba(168, 134, 62, 0.42)">
        <circle cx="14" cy="14" r="2.2" /><circle cx="30" cy="14" r="2.2" /><circle cx="46" cy="14" r="2.2" /><circle cx="62" cy="14" r="2.2" /><circle cx="78" cy="14" r="2.2" />
        <circle cx="14" cy="30" r="2.2" /><circle cx="30" cy="30" r="2.2" /><circle cx="46" cy="30" r="2.2" /><circle cx="62" cy="30" r="2.2" /><circle cx="78" cy="30" r="2.2" />
        <circle cx="14" cy="46" r="2.2" /><circle cx="30" cy="46" r="2.2" /><circle cx="46" cy="46" r="2.2" /><circle cx="62" cy="46" r="2.2" /><circle cx="78" cy="46" r="2.2" />
        <circle cx="14" cy="62" r="2.2" /><circle cx="30" cy="62" r="2.2" /><circle cx="46" cy="62" r="2.2" /><circle cx="62" cy="62" r="2.2" /><circle cx="78" cy="62" r="2.2" />
      </g>
    </svg>
  </div>

  <div class="digest-corner digest-corner-bottom-right d-none d-md-block" aria-hidden="true">
    <svg width="420" height="150" viewBox="0 0 420 150" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10 142C130 128 240 85 430 22" stroke="rgba(168, 134, 62, 0.28)" stroke-width="1.4" />
      <path d="M55 148C175 130 280 86 430 38" stroke="rgba(168, 134, 62, 0.2)" stroke-width="1.2" />
      <path d="M110 152C220 132 315 92 430 54" stroke="rgba(168, 134, 62, 0.15)" stroke-width="1.2" />
    </svg>
  </div>

  <div class="container position-relative z-2 py-3 py-md-4">
    <div class="row justify-content-end">
      <div class="col-lg-7 col-xl-6 p-4 text-end" data-aos="fade-left" data-aos-duration="750">
        <div class="digest-content">
        
          <h2 class="digest-title fw-bold mb-3">
            Subscribe to<br>
            <span class="text-gold">Insights Digest</span>
          </h2>

          <p class="digest-subtitle mb-4">
            Get our bi-weekly executive intelligence brief delivered straight to your inbox. No spam, only high-impact technology and strategy updates.
          </p>

          <form class="digest-form" onsubmit="return false;" novalidate>
            <div class="d-flex flex-column flex-sm-row align-items-stretch align-items-sm-center gap-3">
              <div class="digest-input-wrap flex-grow-1 bg-white">
                <input
                  type="email"
                  id="digestEmailInput"
                  class="form-control border-0 bg-transparent shadow-none px-4 py-3"
                  placeholder="Enter your executive email address..."
                  aria-label="Enter your executive email address"
                  required
                >
              </div>
              <button type="submit" class="btn digest-submit-btn fw-semibold px-4 py-3 flex-shrink-0">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .digest-section {
    min-height: 500px;
    background-color: #fbfaf7;
    color: #16171a;
  }

  /* Left side image set as background with angled framing */
  .digest-bg-photo {
    position: absolute;
    inset: 0;
    background-image: url('<?= $img; ?>/subscribe-to-insights-digest.png');
    background-size: inherit;
    background-position: left center;
    background-repeat: no-repeat;
    z-index: 0;
  }

  .digest-angled-wash {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      119deg,
      transparent 0%,
      transparent 47%,
      rgba(255, 255, 255, 0.88) 40.2%,
      rgba(252, 250, 245, 0.96) 46%,
      rgba(252, 250, 245, 0.98) 100%
    );
    z-index: 1;
  }

  .digest-mobile-wash {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      180deg,
      rgba(255, 255, 255, 0.84) 0%,
      rgba(252, 250, 245, 0.95) 55%,
      rgba(252, 250, 245, 0.98) 100%
    );
    z-index: 1;
  }

  /* Slow Up-Down Floating Corner Accents */
  .digest-corner {
    position: absolute;
    pointer-events: none;
    z-index: 1;
    animation: digestFloat 7s ease-in-out infinite;
  }

  .digest-corner-top-right {
    top: 28px;
    right: 48px;
  }

  .digest-corner-bottom-right {
    bottom: 0;
    right: 0;
    animation-delay: -3.5s;
  }

  @keyframes digestFloat {
    0%, 100% {
      transform: translateY(0px);
    }
    50% {
      transform: translateY(-12px);
    }
  }

  .digest-accent-line {
    width: 36px;
    height: 3px;
    background-color: #a88232;
    border-radius: 2px;
  }

  .digest-title {
    font-size: clamp(2rem, 3.8vw, 3.1rem);
    line-height: 1.12;
    letter-spacing: -0.02em;
    color: #16171a;
  }

  .digest-section .text-gold {
    color: #a88232;
  }

  .digest-subtitle {
    font-size: 0.94rem;
    line-height: 1.65;
    color: #555962;
    /* max-width: 500px; */
  }

  .digest-input-wrap {
    border-radius: 999px;
    border: 1px solid #dfd8c8;
    box-shadow: 0 8px 22px rgba(22, 23, 26, 0.05);
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
  }

  .digest-input-wrap:focus-within {
    border-color: #a88232;
    box-shadow: 0 10px 26px rgba(168, 130, 50, 0.14);
  }

  .digest-input-wrap .form-control {
    font-size: 0.88rem;
    color: #16171a;
  }

  .digest-input-wrap .form-control::placeholder {
    color: #8a8f99;
  }

  .digest-submit-btn {
    background-color: #9f7a2c;
    color: #ffffff;
    font-size: 0.92rem;
    border-radius: 999px;
    border: none;
    box-shadow: 0 8px 20px rgba(159, 122, 44, 0.24);
    transition: background-color 0.25s ease, transform 0.2s ease, box-shadow 0.25s ease;
  }

  .digest-submit-btn:hover,
  .digest-submit-btn:focus {
    background-color: #846421;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 12px 24px rgba(159, 122, 44, 0.32);
  }

  @media (prefers-reduced-motion: reduce) {
    .digest-corner {
      animation: none;
    }
  }
</style>
<?php include ROOT_PATH . '/elements/footer.php'; ?>