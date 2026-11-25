<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/our-clients';
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
    :root {
      --gold-primary: #b98b32;
      --gold-dark: #9c7222;
      --gold-soft: #f3e4c7;
      --charcoal: #2e3338;
      --slate-dark: #3f464d;
      --gray-card: #dfe1e3;
      --text-body: #525860;
      --bg-light: #fcfbfa;
      --white: #ffffff;
      --border-light: rgba(185, 139, 50, 0.25);
      --transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      color: var(--charcoal);
      background-color: var(--white);
      overflow-x: hidden;
      line-height: 1.6;
    }

    .container {
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* ================= HERO SECTION ================= */
    .clients-hero {
      position: relative;
      padding: 95px 0 115px;
      background:
        radial-gradient(circle at 88% 85%, rgba(255, 224, 175, 0.55) 0%, rgba(255, 255, 255, 0) 45%),
        linear-gradient(135deg, #ffffff 0%, #fcfaf6 65%, #f6efe2 100%);
      overflow: hidden;
      border-bottom: 1px solid rgba(185, 139, 50, 0.15);
    }

    .hero-wave-svg {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 160px;
      pointer-events: none;
      z-index: 1;
    }

    .hero-arch-glow {
      position: absolute;
      right: -40px;
      bottom: -20px;
      width: 420px;
      height: 220px;
      background: linear-gradient(135deg, rgba(63, 70, 77, 0.08), rgba(185, 139, 50, 0.22));
      clip-path: polygon(22% 0%, 100% 0%, 100% 100%, 0% 100%);
      pointer-events: none;
      z-index: 1;
    }

    .hero-grid {
      position: relative;
      z-index: 2;
      display: grid;
      grid-template-columns: 1.05fr 1fr;
      align-items: center;
      gap: 60px;
    }

    .hero-eyebrow {
      display: inline-block;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 3.5px;
      text-transform: uppercase;
      color: var(--charcoal);
      margin-bottom: 14px;
    }

    .hero-divider {
      width: 78px;
      height: 4px;
      background: var(--gold-primary);
      border-radius: 4px;
      margin-bottom: 24px;
    }

    .hero-title {
      font-size: clamp(2.2rem, 4vw, 3.35rem);
      font-weight: 700;
      line-height: 1.18;
      color: var(--charcoal);
      margin-bottom: 20px;
    }

    .hero-title span {
      display: block;
      color: var(--gold-primary);
    }

    .hero-subtitle {
      font-size: 1.02rem;
      color: var(--text-body) !important;
      max-width: 510px;
      margin-bottom: 34px;
      font-weight: 400;
    }

    .hero-search-box {
      position: relative;
      max-width: 475px;
      display: flex;
      align-items: center;
      background: var(--white);
      border: 1.5px solid var(--gold-primary);
      border-radius: 50px;
      padding: 6px 8px 6px 24px;
      box-shadow: 0 12px 30px rgba(185, 139, 50, 0.1);
      transition: var(--transition);
    }

    .hero-search-box:focus-within {
      box-shadow: 0 14px 34px rgba(185, 139, 50, 0.22);
      transform: translateY(-2px);
    }

    .hero-search-box input {
      width: 100%;
      border: none;
      outline: none;
      background: transparent;
      font-family: 'Poppins', sans-serif;
      font-size: 0.92rem;
      color: var(--charcoal);
    }

    .hero-search-box input::placeholder {
      color: #6c727a;
    }

    .hero-search-btn {
      flex-shrink: 0;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: none;
      background: var(--gold-primary);
      color: var(--white);
      font-size: 1.05rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--transition);
    }

    .hero-search-btn:hover {
      background: var(--gold-dark);
      transform: scale(1.05);
    }

    /* Right Stats Parallelogram Cluster */
    .stats-cluster-wrapper {
      position: relative;
      padding: 22px;
    }

    .stats-cluster-wrapper::before {
      content: '';
      position: absolute;
      top: 4px;
      left: 16px;
      width: 38%;
      height: 62%;
      border-top: 2px solid var(--gold-primary);
      border-left: 2px solid var(--gold-primary);
      border-top-left-radius: 26px;
      transform: skewX(-16deg);
      pointer-events: none;
    }

    .stats-cluster-wrapper::after {
      content: '';
      position: absolute;
      bottom: 4px;
      right: 16px;
      width: 38%;
      height: 62%;
      border-bottom: 2px solid var(--gold-primary);
      border-right: 2px solid var(--gold-primary);
      border-bottom-right-radius: 26px;
      transform: skewX(-16deg);
      pointer-events: none;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .stat-card {
      padding: 32px 24px;
      border-radius: 22px;
      text-align: center;
      transform: skewX(-16deg);
      box-shadow: 0 14px 32px rgba(0, 0, 0, 0.06);
      transition: var(--transition);
    }

    .stat-card:hover {
      transform: skewX(-16deg) translateY(-6px);
      box-shadow: 0 20px 38px rgba(0, 0, 0, 0.12);
    }

    .stat-card-inner {
      transform: skewX(16deg);
    }

    .stat-number {
      font-size: clamp(2rem, 3vw, 2.75rem);
      font-weight: 700;
      line-height: 1.1;
      margin-bottom: 8px;
    }

    .stat-label {
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .stat-gold {
      background: linear-gradient(135deg, #c39538, #aa7d26);
      color: var(--white);
    }

    .stat-slate {
      background: linear-gradient(135deg, #495057, #383e44);
      color: var(--white);
    }

    .stat-cream {
      background: var(--gold-soft);
      color: #1e2226;
    }

    .stat-gray {
      background: var(--gray-card);
      color: #1e2226;
    }

    /* ================= FILTER & DIRECTORY SECTION ================= */
    .directory-section {
      padding: 85px 0 95px;
      background-color: var(--bg-light);
    }

    .section-header {
      text-align: center;
      max-width: 680px;
      margin: 0 auto 44px;
    }

    .section-tag {
      display: inline-block;
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 2.5px;
      text-transform: uppercase;
      color: var(--gold-primary);
      margin-bottom: 10px;
    }

    .section-title {
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      font-weight: 700;
      color: var(--charcoal);
      margin-bottom: 14px;
    }

    .section-desc {
      color: var(--text-body);
      font-size: 0.96rem;
    }

    .filter-bar {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
      margin-bottom: 46px;
    }

    .filter-btn {
      padding: 10px 24px;
      border-radius: 50px;
      border: 1.5px solid rgba(185, 139, 50, 0.35);
      background: var(--white);
      color: var(--charcoal);
      font-family: 'Poppins', sans-serif;
      font-size: 0.88rem;
      font-weight: 500;
      cursor: pointer;
      transition: var(--transition);
    }

    .filter-btn:hover,
    .filter-btn.active {
      background: var(--gold-primary);
      border-color: var(--gold-primary);
      color: var(--white);
      box-shadow: 0 8px 20px rgba(185, 139, 50, 0.25);
    }

    .clients-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }

    .client-card {
      background: var(--white);
      border-radius: 20px;
      padding: 32px 28px;
      border: 1px solid rgba(0, 0, 0, 0.06);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.035);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
      transition: var(--transition);
    }

    .client-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--gold-primary), var(--slate-dark));
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.35s ease;
    }

    .client-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 42px rgba(46, 51, 56, 0.1);
      border-color: rgba(185, 139, 50, 0.35);
    }

    .client-card:hover::before {
      transform: scaleX(1);
    }

    .client-card-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 22px;
    }

    .client-logo-badge {
      width: 58px;
      height: 58px;
      border-radius: 14px;
      background: linear-gradient(135deg, #fcf6ea, #f3e4c7);
      color: var(--gold-dark);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.55rem;
      font-weight: 700;
      border: 1px solid rgba(185, 139, 50, 0.25);
    }

    .client-industry-pill {
      font-size: 0.75rem;
      font-weight: 600;
      padding: 5px 14px;
      border-radius: 30px;
      background: #f1f3f5;
      color: var(--slate-dark);
      text-transform: uppercase;
      letter-spacing: 0.8px;
    }

    .client-name {
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--charcoal);
      margin-bottom: 6px;
    }

    .client-region {
      font-size: 0.82rem;
      color: var(--gold-primary);
      font-weight: 500;
      margin-bottom: 14px;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .client-summary {
      font-size: 0.9rem;
      color: var(--text-body);
      margin-bottom: 20px;
    }

    .client-tech-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 22px;
    }

    .tech-tag {
      font-size: 0.76rem;
      padding: 4px 11px;
      border-radius: 6px;
      background: #faf7f0;
      color: #6b5322;
      border: 1px solid rgba(185, 139, 50, 0.22);
      font-weight: 500;
    }

    .client-card-footer {
      padding-top: 16px;
      border-top: 1px solid #eef0f2;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .client-metric {
      font-size: 0.84rem;
      font-weight: 600;
      color: var(--charcoal);
    }

    .client-metric span {
      color: var(--gold-primary);
    }

    .case-study-btn {
      background: none;
      border: none;
      color: var(--charcoal);
      font-family: 'Poppins', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: var(--transition);
    }

    .case-study-btn:hover {
      color: var(--gold-primary);
      gap: 10px;
    }

    .no-results-box {
      display: none;
      text-align: center;
      padding: 50px 20px;
      background: var(--white);
      border-radius: 18px;
      border: 1px dashed var(--gold-primary);
      grid-column: 1 / -1;
    }

    /* ================= TESTIMONIALS SECTION ================= */
    .testimonials-section {
      padding: 90px 0;
      background: var(--white);
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
    }

    .testimonial-card {
      background: linear-gradient(145deg, #ffffff, #faf7f2);
      border: 1px solid rgba(185, 139, 50, 0.22);
      border-radius: 22px;
      padding: 38px;
      position: relative;
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.04);
    }

    .quote-icon {
      font-size: 2.4rem;
      color: var(--gold-primary);
      opacity: 0.35;
      line-height: 1;
      margin-bottom: 14px;
    }

    .testimonial-text {
      font-size: 0.98rem;
      color: var(--charcoal);
      font-style: italic;
      margin-bottom: 24px;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .author-avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: var(--slate-dark);
      color: var(--white);
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .author-info h4 {
      font-size: 0.98rem;
      font-weight: 700;
      color: var(--charcoal);
    }

    .author-info p {
      font-size: 0.82rem;
      color: var(--gold-primary);
      font-weight: 500;
    }

    /* ================= NEW TROPHY CTA SECTION (MATCHING IMAGE) ================= */
    .trophy-cta-section {
      position: relative;
      padding: 95px 0 105px;
      background: var(--white);
      overflow: hidden;
      border-top: 1px solid rgba(185, 139, 50, 0.12);
    }

    /* Soft Warm Cream Wave at Bottom-Right */
    .cta-bottom-wave {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 65%;
      height: 120px;
      background: #f8f0e2;
      border-top-left-radius: 100% 100%;
      pointer-events: none;
      z-index: 1;
    }

    /* Subtle Concentric Arcs Top-Right */
    .cta-top-arcs {
      position: absolute;
      top: -20px;
      right: -20px;
      width: 240px;
      height: 240px;
      pointer-events: none;
      z-index: 1;
    }

    /* Gold Dot Grids */
    .dot-matrix {
      position: absolute;
      display: grid;
      grid-template-columns: repeat(5, 6px);
      gap: 9px;
      z-index: 2;
      pointer-events: none;
    }

    .dot-matrix span {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background-color: var(--gold-primary);
      opacity: 0.85;
    }

    .dots-top-left {
      top: 52px;
      left: 38px;
    }

    .dots-bottom-right {
      bottom: 62px;
      right: 48px;
    }

    .trophy-cta-grid {
      position: relative;
      z-index: 3;
      display: grid;
      grid-template-columns: 1fr 1.08fr;
      align-items: center;
      gap: 72px;
    }

    /* Left Angled Trophy Frame */
    .trophy-showcase {
      position: relative;
      max-width: 470px;
      margin: 0 auto;
      padding: 16px;
    }

    /* Top-left thin gold outline frame */
    .trophy-outline-top {
      position: absolute;
      top: 0;
      left: 34px;
      width: 68%;
      height: 62%;
      border-top: 1.8px solid var(--gold-primary);
      border-left: 1.8px solid var(--gold-primary);
      border-top-left-radius: 32px;
      transform: skewX(-16deg);
      pointer-events: none;
      z-index: 1;
    }

    /* Bottom-right thin gold outline frame */
    .trophy-outline-bottom {
      position: absolute;
      bottom: 0;
      right: 34px;
      width: 68%;
      height: 62%;
      border-bottom: 1.8px solid var(--gold-primary);
      border-right: 1.8px solid var(--gold-primary);
      border-bottom-right-radius: 32px;
      transform: skewX(-16deg);
      pointer-events: none;
      z-index: 1;
    }

    /* Thick Gold Pill Accent Bars */
    .trophy-pill-top {
      position: absolute;
      top: 14px;
      right: 8px;
      width: 22px;
      height: 118px;
      background: linear-gradient(180deg, #c19235, #a87b22);
      border-radius: 20px;
      transform: rotate(28deg);
      z-index: 4;
      box-shadow: 0 8px 20px rgba(185, 139, 50, 0.25);
    }

    .trophy-pill-bottom {
      position: absolute;
      bottom: -24px;
      left: 14px;
      width: 22px;
      height: 125px;
      background: linear-gradient(180deg, #c89d47, #b18329);
      border-radius: 20px;
      transform: rotate(28deg);
      z-index: 4;
      box-shadow: 0 8px 20px rgba(185, 139, 50, 0.22);
    }

    /* Skewed Image Mask */
    .trophy-image-mask {
      position: relative;
      z-index: 2;
      border-radius: 28px;
      overflow: hidden;
      transform: skewX(-15deg);
      box-shadow: 0 22px 45px rgba(32, 36, 40, 0.14);
      background: #e9e4dc;
      aspect-ratio: 4 / 3.45;
    }

    .trophy-image-mask img {
      width: 126%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transform: skewX(15deg) translateX(-10%);
      display: block;
      transition: transform 0.6s ease;
    }

    .trophy-showcase:hover .trophy-image-mask img {
      transform: skewX(15deg) translateX(-10%) scale(1.04);
    }

    /* Right CTA Content */
    .trophy-cta-content {
      position: relative;
      z-index: 3;
    }

    .cta-gold-line {
      width: 64px;
      height: 4px;
      background: var(--gold-primary);
      border-radius: 4px;
      margin-bottom: 22px;
    }

    .trophy-cta-title {
      font-size: clamp(2rem, 3.6vw, 2.95rem);
      font-weight: 700;
      line-height: 1.18;
      color: var(--charcoal);
      margin-bottom: 18px;
    }

    .trophy-cta-title span {
      color: var(--gold-primary);
    }

    .trophy-cta-desc {
      font-size: 1.02rem;
      color: var(--text-body);
      max-width: 520px;
      margin-bottom: 34px;
      line-height: 1.68;
    }

    .consultation-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 16px 36px;
      border-radius: 50px;
      background: var(--gold-primary);
      color: var(--white);
      font-family: 'Poppins', sans-serif;
      font-size: 0.96rem;
      font-weight: 600;
      text-decoration: none;
      border: none;
      cursor: pointer;
      box-shadow: 0 12px 28px rgba(185, 139, 50, 0.28);
      transition: var(--transition);
    }

    .consultation-btn:hover {
      background: var(--gold-dark);
      transform: translateY(-3px);
      box-shadow: 0 16px 34px rgba(185, 139, 50, 0.38);
    }

    /* ================= MODAL ================= */
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(24, 28, 32, 0.65);
      backdrop-filter: blur(4px);
      display: none;
      align-items: center;
      justify-content: center;
      padding: 20px;
      z-index: 9999;
    }

    .modal-backdrop.open {
      display: flex;
    }

    .modal-card {
      background: var(--white);
      border-radius: 22px;
      max-width: 560px;
      width: 100%;
      padding: 36px;
      position: relative;
      box-shadow: 0 24px 60px rgba(0, 0, 0, 0.25);
      animation: modalPop 0.3s ease;
    }

    @keyframes modalPop {
      from { opacity: 0; transform: scale(0.94); }
      to { opacity: 1; transform: scale(1); }
    }

    .modal-close {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      border: none;
      background: #f2f3f5;
      font-size: 1.2rem;
      cursor: pointer;
    }

    .modal-badge {
      display: inline-block;
      background: var(--gold-soft);
      color: var(--gold-dark);
      font-size: 0.78rem;
      font-weight: 600;
      padding: 4px 12px;
      border-radius: 20px;
      margin-bottom: 12px;
    }

    .modal-card h3 {
      font-size: 1.5rem;
      margin-bottom: 12px;
      color: var(--charcoal);
    }

    .modal-card p {
      color: var(--text-body);
      font-size: 0.94rem;
      margin-bottom: 18px;
    }

    .modal-impact {
      background: #faf7f0;
      border-left: 4px solid var(--gold-primary);
      padding: 14px 18px;
      border-radius: 8px;
      font-weight: 600;
      color: var(--charcoal);
      font-size: 0.92rem;
    }

    /* Consultation Form Inputs inside Modal */
    .consult-form {
      display: grid;
      gap: 14px;
    }

    .consult-form input,
    .consult-form textarea {
      width: 100%;
      padding: 12px 16px;
      border-radius: 12px;
      border: 1.5px solid #e2e5e9;
      font-family: 'Poppins', sans-serif;
      font-size: 0.9rem;
      outline: none;
      transition: border-color 0.25s ease;
    }

    .consult-form input:focus,
    .consult-form textarea:focus {
      border-color: var(--gold-primary);
    }

    /* ================= RESPONSIVE BREAKPOINTS ================= */
    @media (max-width: 1024px) {
      .hero-grid,
      .trophy-cta-grid {
        grid-template-columns: 1fr;
        gap: 48px;
      }

      .hero-content,
      .trophy-cta-content {
        text-align: center;
      }

      .hero-divider,
      .cta-gold-line {
        margin-left: auto;
        margin-right: auto;
      }

      .hero-subtitle,
      .trophy-cta-desc {
        margin-left: auto;
        margin-right: auto;
      }

      .hero-search-box {
        margin: 0 auto;
      }

      .stats-cluster-wrapper {
        max-width: 620px;
        margin: 0 auto;
      }

      .clients-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .clients-hero,
      .trophy-cta-section {
        padding: 65px 0 80px;
      }

      .testimonials-grid {
        grid-template-columns: 1fr;
      }

      .dot-matrix {
        display: none;
      }
    }

    @media (max-width: 576px) {
      .stats-grid {
        grid-template-columns: 1fr;
        gap: 16px;
      }

      .stat-card,
      .stats-cluster-wrapper::before,
      .stats-cluster-wrapper::after,
      .trophy-image-mask,
      .trophy-outline-top,
      .trophy-outline-bottom {
        transform: none;
      }

      .stat-card-inner {
        transform: none;
      }

      .trophy-image-mask img {
        width: 100%;
        transform: none;
      }

      .trophy-showcase:hover .trophy-image-mask img {
        transform: scale(1.03);
      }

      .trophy-pill-top,
      .trophy-pill-bottom {
        display: none;
      }

      .stat-card:hover {
        transform: translateY(-4px);
      }

      .clients-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <!-- ==================== HERO SECTION HTML ==================== -->
  <section class="clients-hero">
    <style>
      /* ==================== HERO SECTION CSS ==================== */
      :root {
        --gold-primary: #b98b32;
        --gold-dark: #9c7222;
        --gold-soft: #f3e4c7;
        --charcoal: #2e3338;
        --slate-dark: #3f464d;
        --gray-card: #dfe1e3;
        --text-body: #525860;
        --white: #ffffff;
        --transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
      }

      .clients-hero {
        position: relative;
        padding: 85px 0 95px;
        background:
          radial-gradient(circle at 82% 85%, rgba(255, 224, 175, 0.45) 0%, rgba(255, 255, 255, 0) 45%),
          linear-gradient(135deg, #ffffff 0%, #fcfbf8 70%, #f8f1e4 100%);
        overflow: hidden;
        border-bottom: 1px solid rgba(185, 139, 50, 0.14);
        font-family: 'Poppins', sans-serif;
      }

      .clients-hero .container {
        width: 100%;
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 24px;
      }

      /* Bottom-left gold topographic waves */
      .hero-wave-svg {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 56%;
        max-width: 780px;
        height: 170px;
        pointer-events: none;
        z-index: 1;
      }

      /* 3-Column Hero Layout */
      .hero-grid {
        position: relative;
        z-index: 2;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr 0.92fr;
        align-items: center;
        gap: 36px;
      }

      /* Left Column */
      .hero-eyebrow-row {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 12px;
      }

      .hero-eyebrow {
        font-size: 0.82rem;
        font-weight: 600;
        letter-spacing: 3.2px;
        text-transform: uppercase;
        color: var(--charcoal);
      }

      .hero-eyebrow-line {
        width: 84px;
        height: 2px;
        background: var(--gold-primary);
        border-radius: 2px;
      }

      .hero-divider {
        width: 68px;
        height: 3.5px;
        background: var(--gold-primary);
        border-radius: 4px;
        margin-bottom: 22px;
      }

      .hero-title {
        font-size: clamp(2.1rem, 3.4vw, 3.1rem);
        font-weight: 700;
        line-height: 1.18;
        color: var(--charcoal);
        margin-bottom: 18px;
      }

      .hero-title span {
        display: block;
        color: var(--gold-primary);
      }

      .hero-subtitle {
        font-size: 0.96rem;
        color: var(--text-body);
        max-width: 470px;
        margin-bottom: 32px;
        font-weight: 400;
        line-height: 1.6;
      }

      .hero-search-box {
        position: relative;
        max-width: 455px;
        display: flex;
        align-items: center;
        background: var(--white);
        border: 1.5px solid var(--gold-primary);
        border-radius: 50px;
        padding: 6px 7px 6px 22px;
        box-shadow: 0 12px 28px rgba(185, 139, 50, 0.1);
        transition: var(--transition);
      }

      .hero-search-box:focus-within {
        box-shadow: 0 14px 34px rgba(185, 139, 50, 0.22);
        transform: translateY(-2px);
      }

      .hero-search-box input {
        width: 100%;
        border: none;
        outline: none;
        background: transparent;
        font-family: 'Poppins', sans-serif;
        font-size: 0.88rem;
        color: var(--charcoal);
      }

      .hero-search-box input::placeholder {
        color: #6c727a;
      }

      .hero-search-btn {
        flex-shrink: 0;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: none;
        background: var(--gold-primary);
        color: var(--white);
        font-size: 1rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
      }

      .hero-search-btn:hover {
        background: var(--gold-dark);
        transform: scale(1.05);
      }

      /* Center Visual Column */
      .hero-visual-center {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 18px 26px;
      }

      .rating-pill {
        position: absolute;
        top: 18px;
        left: 50%;
        transform: translateX(-56%);
        z-index: 4;
        background: var(--white);
        padding: 11px 24px;
        border-radius: 50px;
        box-shadow: 0 14px 34px rgba(34, 38, 42, 0.12);
        display: inline-flex;
        align-items: center;
        gap: 7px;
        border: 1px solid rgba(185, 139, 50, 0.18);
      }

      .rating-pill i {
        color: var(--gold-primary);
        font-size: 1.15rem;
      }

      .hero-oval-frame {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 365px;
        aspect-ratio: 1 / 1.06;
        border-radius: 50% 58% 50% 50% / 62% 55% 50% 25%;
        overflow: hidden;
        box-shadow: 0 22px 48px rgba(38, 42, 46, 0.14);
        border: 4px solid var(--white);
        background: #ece7df;
      }

      .hero-oval-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        transition: transform 0.65s ease;
      }

      .hero-visual-center:hover .hero-oval-frame img {
        transform: scale(1.04);
      }

      .hero-orbit-svg {
        position: absolute;
        inset: -15px -18px;
        width: calc(105% + 30px);
        height: calc(105% + 20px);
        z-index: 3;
        pointer-events: none;
      }

      /* Right Column: 4 Horizontal Pill Stat Cards */
      .stats-stack {
        display: flex;
        flex-direction: column;
        gap: 16px;
      }

      .stat-pill-card {
        display: flex;
        align-items: center;
        padding: 18px 26px;
        border-radius: 18px;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        position: relative;
      }

      .stat-pill-card:nth-child(1) { transform: translateX(-10px); }
      .stat-pill-card:nth-child(2) { transform: translateX(6px); }
      .stat-pill-card:nth-child(3) { transform: translateX(6px); }
      .stat-pill-card:nth-child(4) { transform: translateX(-10px); }

      .stat-pill-card:hover {
        transform: translateX(0) translateY(-3px);
        box-shadow: 0 16px 34px rgba(0, 0, 0, 0.1);
      }

      .stat-icon-box {
        width: 52px;
        height: 52px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
      }

      .stat-v-divider {
        width: 1.5px;
        height: 44px;
        margin: 0 22px;
        flex-shrink: 0;
      }

      .stat-info {
        display: flex;
        flex-direction: column;
        text-align: left;
      }

      .stat-number {
        font-size: 1.9rem;
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 3px;
      }

      .stat-label {
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 1.8px;
        text-transform: uppercase;
      }

      .stat-gold {
        background: linear-gradient(135deg, #c39538, #aa7d26);
        color: var(--white);
      }
      .stat-gold .stat-v-divider {
        background: rgba(255, 255, 255, 0.45);
      }

      .stat-slate {
        background: linear-gradient(135deg, #474e55, #373d43);
        color: var(--white);
      }
      .stat-slate .stat-v-divider {
        background: rgba(255, 255, 255, 0.35);
      }

      .stat-cream {
        background: var(--gold-soft);
        color: #1e2226;
      }
      .stat-cream .stat-v-divider {
        background: rgba(30, 34, 38, 0.25);
      }

      .stat-gray {
        background: var(--gray-card);
        color: #1e2226;
      }
      .stat-gray .stat-v-divider {
        background: rgba(30, 34, 38, 0.25);
      }

      /* ================= RESPONSIVE BREAKPOINTS ================= */
      @media (max-width: 1140px) {
        .hero-grid {
          grid-template-columns: 1fr 1fr;
          gap: 44px;
        }

        .hero-content {
          grid-column: 1 / -1;
          text-align: center;
        }

        .hero-eyebrow-row {
          justify-content: center;
        }

        .hero-divider,
        .hero-subtitle,
        .hero-search-box {
          margin-left: auto;
          margin-right: auto;
        }

        .stat-pill-card:nth-child(n) {
          transform: none;
        }
      }

      @media (max-width: 768px) {
        .clients-hero {
          padding: 65px 0 80px;
        }

        .hero-grid {
          grid-template-columns: 1fr;
        }

        .hero-orbit-svg {
          display: none;
        }
      }

      @media (max-width: 576px) {
        .stat-pill-card {
          padding: 16px 20px;
        }

        .stat-v-divider {
          margin: 0 16px;
        }
      }
    </style>
    <!-- Bottom-left Gold Wave Lines -->
    <svg class="hero-wave-svg" viewBox="0 0 800 200" preserveAspectRatio="none">
      <path d="M0,75 C210,165 440,15 800,195" fill="none" stroke="#b98b32" stroke-opacity="0.32" stroke-width="1.4" />
      <path d="M0,95 C220,180 450,35 800,200" fill="none" stroke="#b98b32" stroke-opacity="0.26" stroke-width="1.3" />
      <path d="M0,115 C230,195 460,55 800,205" fill="none" stroke="#b98b32" stroke-opacity="0.2" stroke-width="1.2" />
      <path d="M0,135 C240,210 470,75 800,210" fill="none" stroke="#b98b32" stroke-opacity="0.14" stroke-width="1.1" />
    </svg>

    <div class="container">
      <div class="hero-grid">
        <!-- Column 1: Heading & Search -->
        <div class="hero-content" data-aos="fade-right" data-aos-duration="850">
          <div class="hero-eyebrow-row">
            <span class="hero-eyebrow">Premier Partner Network</span>
            <span class="hero-eyebrow-line"></span>
          </div>
          <div class="hero-divider"></div>
          <h1 class="hero-title">
            Our Valued Clients &amp;
            <span>Success Partners</span>
          </h1>
          <p class="hero-subtitle">
            Empowering global enterprise leaders, innovative startups, and visionary brands through bespoke digital engineering and strategic transformation.
          </p>

          <form class="hero-search-box" id="clientSearchForm" onsubmit="return false;">
            <input
              type="text"
              id="clientSearchInput"
              placeholder="Search by company name, industry, or key technology..."
              aria-label="Search clients"
            />
            <button type="submit" class="hero-search-btn" aria-label="Search">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>

        <!-- Column 2: Organic Oval Image + 5 Stars + Curved Orbit Dots -->
        <div class="hero-visual-center" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="120">
          <!-- 5-Star Rating Badge -->
          <div class="rating-pill" aria-label="5 out of 5 partner satisfaction rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>

          <!-- Curved Orbit Line & 4 Colored Nodes -->
          <svg class="hero-orbit-svg" viewBox="0 0 420 420" fill="none" aria-hidden="true">
            <path
              d="M 275 18 C 392 92, 398 325, 272 404"
              stroke="#b98b32"
              stroke-width="1.6"
              stroke-opacity="0.7"
            />
            <path
              d="M 105 56 C 48 115, 22 195, 16 268"
              stroke="#b98b32"
              stroke-width="1.5"
              stroke-opacity="0.65"
            />
            <circle cx="332" cy="74" r="9.5" fill="#b98b32" stroke="#ffffff" stroke-width="2.5" />
            <circle cx="361" cy="175" r="9.5" fill="#434a51" stroke="#ffffff" stroke-width="2.5" />
            <circle cx="358" cy="272" r="9.5" fill="#b98b32" stroke="#ffffff" stroke-width="2.5" />
            <circle cx="328" cy="356" r="9.5" fill="#b98b32" stroke="#ffffff" stroke-width="2.5" />
          </svg>

          <!-- Oval Masked Executive Workspace Image -->
          <div class="hero-oval-frame">
            <img
              src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=900&q=85"
              alt="Modern Executive Office Workspace with City Skyline"
            />
          </div>
        </div>

        <!-- Column 3: 4 Horizontal Icon + Stat Pill Cards -->
        <div class="stats-stack" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
          <!-- Pill 1 -->
          <div class="stat-pill-card stat-gold" data-aos="fade-left" data-aos-delay="200">
            <div class="stat-icon-box">
              <i class="bi bi-people"></i>
            </div>
            <div class="stat-v-divider"></div>
            <div class="stat-info">
              <div class="stat-number"><span class="counter" data-target="200">0</span>+</div>
              <div class="stat-label">Clients Served</div>
            </div>
          </div>

          <!-- Pill 2 -->
          <div class="stat-pill-card stat-slate" data-aos="fade-left" data-aos-delay="300">
            <div class="stat-icon-box">
              <i class="bi bi-bullseye"></i>
            </div>
            <div class="stat-v-divider"></div>
            <div class="stat-info">
              <div class="stat-number"><span class="counter" data-target="99">0</span>%</div>
              <div class="stat-label">Success Rate</div>
            </div>
          </div>

          <!-- Pill 3 -->
          <div class="stat-pill-card stat-cream" data-aos="fade-left" data-aos-delay="400">
            <div class="stat-icon-box">
              <i class="bi bi-globe2"></i>
            </div>
            <div class="stat-v-divider"></div>
            <div class="stat-info">
              <div class="stat-number"><span class="counter" data-target="35">0</span>+</div>
              <div class="stat-label">Countries Reached</div>
            </div>
          </div>

          <!-- Pill 4 -->
          <div class="stat-pill-card stat-gray" data-aos="fade-left" data-aos-delay="500">
            <div class="stat-icon-box">
              <i class="bi bi-calendar3"></i>
            </div>
            <div class="stat-v-divider"></div>
            <div class="stat-info">
              <div class="stat-number"><span class="counter" data-target="15">0</span>+</div>
              <div class="stat-label">Years Excellence</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CLIENT DIRECTORY ==================== -->
  <section class="directory-section" id="clientDirectory">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Global Portfolio</span>
        <h2 class="section-title">Trusted Across High-Growth Industries</h2>
        <p class="section-desc">
          Filter our partner ecosystem by industry vertical or search directly above to explore delivered solutions and measurable outcomes.
        </p>
      </div>

      <div class="filter-bar" data-aos="fade-up" data-aos-delay="100">
        <button class="filter-btn active" data-filter="all">All Partners</button>
        <button class="filter-btn" data-filter="fintech">FinTech &amp; Banking</button>
        <button class="filter-btn" data-filter="healthcare">Healthcare</button>
        <button class="filter-btn" data-filter="ecommerce">Retail &amp; E-Commerce</button>
        <button class="filter-btn" data-filter="enterprise">Enterprise SaaS</button>
        <button class="filter-btn" data-filter="logistics">Smart Logistics</button>
      </div>

      <div class="clients-grid" id="clientsGrid">
        <!-- Card 1 -->
        <article class="client-card" data-category="fintech" data-aos="fade-up" data-aos-delay="100">
          <div>
            <div class="client-card-top">
              <div class="client-logo-badge"><i class="bi bi-bank2"></i></div>
              <span class="client-industry-pill">FinTech</span>
            </div>
            <h3 class="client-name">Aurelia Capital Group</h3>
            <div class="client-region"><i class="bi bi-geo-alt-fill"></i> London, United Kingdom</div>
            <p class="client-summary">
              Architected a real-time multi-currency treasury settlement engine and zero-trust wealth portal.
            </p>
            <div class="client-tech-tags">
              <span class="tech-tag">Cloud Native</span>
              <span class="tech-tag">AI Risk Engine</span>
              <span class="tech-tag">Node.js</span>
            </div>
          </div>
          <div class="client-card-footer">
            <div class="client-metric">Latency: <span>-68%</span></div>
            <button
              class="case-study-btn"
              data-title="Aurelia Capital Group"
              data-industry="FinTech & Banking"
              data-details="Engineered a high-throughput cross-border liquidity platform handling $1.4B+ in monthly volume with automated AML compliance."
              data-impact="68% faster settlement times & 99.99% uptime across EU and UK markets."
            >
              Case Study <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="client-card" data-category="healthcare" data-aos="fade-up" data-aos-delay="180">
          <div>
            <div class="client-card-top">
              <div class="client-logo-badge"><i class="bi bi-heart-pulse-fill"></i></div>
              <span class="client-industry-pill">Healthcare</span>
            </div>
            <h3 class="client-name">MedVantage Diagnostics</h3>
            <div class="client-region"><i class="bi bi-geo-alt-fill"></i> Boston, USA</div>
            <p class="client-summary">
              Built a HIPAA-compliant patient telemetry hub and predictive radiology triage suite.
            </p>
            <div class="client-tech-tags">
              <span class="tech-tag">Predictive AI</span>
              <span class="tech-tag">FHIR API</span>
              <span class="tech-tag">React</span>
            </div>
          </div>
          <div class="client-card-footer">
            <div class="client-metric">Diagnostics: <span>3.4x Faster</span></div>
            <button
              class="case-study-btn"
              data-title="MedVantage Diagnostics"
              data-industry="Healthcare"
              data-details="Unified 42 regional hospital lab networks into a single real-time diagnostic dashboard with automated anomaly flagging."
              data-impact="3.4x faster clinical turnaround and 450,000+ active patients served."
            >
              Case Study <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="client-card" data-category="ecommerce" data-aos="fade-up" data-aos-delay="260">
          <div>
            <div class="client-card-top">
              <div class="client-logo-badge"><i class="bi bi-bag-check-fill"></i></div>
              <span class="client-industry-pill">Retail &amp; E-Commerce</span>
            </div>
            <h3 class="client-name">Maison Lumière Retail</h3>
            <div class="client-region"><i class="bi bi-geo-alt-fill"></i> Paris &amp; Milan</div>
            <p class="client-summary">
              Delivered a headless omnichannel luxury storefront with personalized visual search.
            </p>
            <div class="client-tech-tags">
              <span class="tech-tag">Headless Commerce</span>
              <span class="tech-tag">Next.js</span>
              <span class="tech-tag">Edge CDN</span>
            </div>
          </div>
          <div class="client-card-footer">
            <div class="client-metric">Conversions: <span>+44%</span></div>
            <button
              class="case-study-btn"
              data-title="Maison Lumière Retail"
              data-industry="Retail & E-Commerce"
              data-details="Replaced legacy monolith architecture with a composable storefront localized across 18 languages and currencies."
              data-impact="44% lift in mobile checkout conversion and sub-800ms global page loads."
            >
              Case Study <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </article>

        <!-- Card 4 -->
        <article class="client-card" data-category="enterprise" data-aos="fade-up" data-aos-delay="100">
          <div>
            <div class="client-card-top">
              <div class="client-logo-badge"><i class="bi bi-cpu-fill"></i></div>
              <span class="client-industry-pill">Enterprise SaaS</span>
            </div>
            <h3 class="client-name">StratosFlow Systems</h3>
            <div class="client-region"><i class="bi bi-geo-alt-fill"></i> Berlin, Germany</div>
            <p class="client-summary">
              Modernized multi-tenant workflow automation with embedded generative copilots.
            </p>
            <div class="client-tech-tags">
              <span class="tech-tag">LLM Copilots</span>
              <span class="tech-tag">Kubernetes</span>
              <span class="tech-tag">TypeScript</span>
            </div>
          </div>
          <div class="client-card-footer">
            <div class="client-metric">Retention: <span>98.4%</span></div>
            <button
              class="case-study-btn"
              data-title="StratosFlow Systems"
              data-industry="Enterprise SaaS"
              data-details="Designed an enterprise-grade AI orchestration layer allowing Fortune 500 teams to automate procurement approvals."
              data-impact="Saved 18,000+ manual operations hours per month across enterprise accounts."
            >
              Case Study <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </article>

        <!-- Card 5 -->
        <article class="client-card" data-category="logistics" data-aos="fade-up" data-aos-delay="180">
          <div>
            <div class="client-card-top">
              <div class="client-logo-badge"><i class="bi bi-globe-americas"></i></div>
              <span class="client-industry-pill">Smart Logistics</span>
            </div>
            <h3 class="client-name">Meridian Freight &amp; Port</h3>
            <div class="client-region"><i class="bi bi-geo-alt-fill"></i> Singapore &amp; Dubai</div>
            <p class="client-summary">
              Developed IoT cold-chain container tracking and AI maritime route optimization.
            </p>
            <div class="client-tech-tags">
              <span class="tech-tag">IoT Telemetry</span>
              <span class="tech-tag">Digital Twin</span>
              <span class="tech-tag">Python</span>
            </div>
          </div>
          <div class="client-card-footer">
            <div class="client-metric">Fuel Saved: <span>21.5%</span></div>
            <button
              class="case-study-btn"
              data-title="Meridian Freight & Port"
              data-industry="Smart Logistics"
              data-details="Connected 28,000+ smart containers to a live predictive ETA and customs clearance control tower."
              data-impact="21.5% reduction in transit fuel consumption and near-zero spoilage rates."
            >
              Case Study <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </article>

        <!-- Card 6 -->
        <article class="client-card" data-category="fintech" data-aos="fade-up" data-aos-delay="260">
          <div>
            <div class="client-card-top">
              <div class="client-logo-badge"><i class="bi bi-shield-lock-fill"></i></div>
              <span class="client-industry-pill">FinTech</span>
            </div>
            <h3 class="client-name">NovusPay Clearing</h3>
            <div class="client-region"><i class="bi bi-geo-alt-fill"></i> Toronto, Canada</div>
            <p class="client-summary">
              Scaled instant B2B invoice financing and automated fraud scoring APIs.
            </p>
            <div class="client-tech-tags">
              <span class="tech-tag">GraphQL</span>
              <span class="tech-tag">Fraud ML</span>
              <span class="tech-tag">AWS</span>
            </div>
          </div>
          <div class="client-card-footer">
            <div class="client-metric">Fraud Drop: <span>-82%</span></div>
            <button
              class="case-study-btn"
              data-title="NovusPay Clearing"
              data-industry="FinTech & Banking"
              data-details="Deployed real-time behavioral fraud detection scoring 4,500 transactions per second under 35ms."
              data-impact="82% reduction in chargebacks and $320M+ in new merchant onboarding."
            >
              Case Study <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </article>

        <div class="no-results-box" id="noResultsBox">
          <h4>No matching partners found</h4>
          <p>Try searching with another company name, industry, or technology keyword.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== EXECUTIVE TESTIMONIALS ==================== -->
  <section class="testimonials-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Partner Voices</span>
        <h2 class="section-title">What Leadership Says About Us</h2>
      </div>

      <div class="testimonials-grid">
        <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
          <div class="quote-icon"><i class="bi bi-quote"></i></div>
          <p class="testimonial-text">
            "Their engineering precision transformed our core settlement infrastructure ahead of schedule. They operate not as an external vendor, but as a deeply invested strategic partner."
          </p>
          <div class="testimonial-author">
            <div class="author-avatar">ER</div>
            <div class="author-info">
              <h4>Eleanor Rostova</h4>
              <p>Chief Technology Officer, Aurelia Capital Group</p>
            </div>
          </div>
        </div>

        <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
          <div class="quote-icon"><i class="bi bi-quote"></i></div>
          <p class="testimonial-text">
            "From initial architecture workshops to global rollout across 18 countries, the team delivered measurable revenue growth and flawless execution at every milestone."
          </p>
          <div class="testimonial-author">
            <div class="author-avatar">ML</div>
            <div class="author-info">
              <h4>Marc-Antoine Laurent</h4>
              <p>VP of Digital Commerce, Maison Lumière</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TROPHY CTA SECTION HTML ==================== -->
  <section class="trophy-cta-section">
    <style>
      /* ==================== TROPHY CTA SECTION CSS ==================== */
      .trophy-cta-section {
        position: relative;
        padding: 95px 0 105px;
        background: #ffffff;
        overflow: hidden;
        border-top: 1px solid rgba(185, 139, 50, 0.12);
        font-family: 'Poppins', sans-serif;
      }

      .trophy-cta-section .container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
      }

      /* Soft Warm Cream Wave at Bottom-Right */
      .cta-bottom-wave {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 65%;
        height: 120px;
        background: #f8f0e2;
        border-top-left-radius: 100% 100%;
        pointer-events: none;
        z-index: 1;
      }

      /* Subtle Concentric Arcs Top-Right */
      .cta-top-arcs {
        position: absolute;
        top: -20px;
        right: -20px;
        width: 240px;
        height: 240px;
        pointer-events: none;
        z-index: 1;
      }

      /* Gold Dot Grids */
      .dot-matrix {
        position: absolute;
        display: grid;
        grid-template-columns: repeat(5, 6px);
        gap: 9px;
        z-index: 2;
        pointer-events: none;
      }

      .dot-matrix span {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background-color: #b98b32;
        opacity: 0.85;
      }

      .dots-top-left {
        top: 52px;
        left: 38px;
      }

      .dots-bottom-right {
        bottom: 62px;
        right: 48px;
      }

      /* 2-Column Grid */
      .trophy-cta-grid {
        position: relative;
        z-index: 3;
        display: grid;
        grid-template-columns: 1fr 1.08fr;
        align-items: center;
        gap: 64px;
      }

      /* Left Pre-Styled Trophy Artwork */
      .trophy-showcase {
        position: relative;
        width: 100%;
        max-width: 520px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .trophy-artwork-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
        transition: transform 0.55s cubic-bezier(0.25, 0.8, 0.25, 1);
      }

      .trophy-showcase:hover .trophy-artwork-img {
        transform: translateY(-6px) scale(1.02);
      }

      /* Right CTA Content */
      .trophy-cta-content {
        position: relative;
        z-index: 3;
      }

      .cta-gold-line {
        width: 64px;
        height: 4px;
        background: #b98b32;
        border-radius: 4px;
        margin-bottom: 22px;
      }

      .trophy-cta-title {
        font-size: clamp(2rem, 3.6vw, 2.95rem);
        font-weight: 700;
        line-height: 1.18;
        color: #2e3338;
        margin-bottom: 18px;
      }

      .trophy-cta-title span {
        color: #b98b32;
      }

      .trophy-cta-desc {
        font-size: 1.02rem;
        color: #525860;
        max-width: 520px;
        margin-bottom: 34px;
        line-height: 1.68;
      }

      .consultation-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 36px;
        border-radius: 50px;
        background: #b98b32;
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: 0.96rem;
        font-weight: 600;
        text-decoration: none;
        border: none;
        cursor: pointer;
        box-shadow: 0 12px 28px rgba(185, 139, 50, 0.28);
        transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
      }

      .consultation-btn:hover {
        background: #9c7222;
        transform: translateY(-3px);
        box-shadow: 0 16px 34px rgba(185, 139, 50, 0.38);
      }

      /* ================= RESPONSIVE BREAKPOINTS ================= */
      @media (max-width: 992px) {
        .trophy-cta-grid {
          grid-template-columns: 1fr;
          gap: 44px;
        }

        .trophy-cta-content {
          text-align: center;
        }

        .cta-gold-line,
        .trophy-cta-desc {
          margin-left: auto;
          margin-right: auto;
        }
      }

      @media (max-width: 768px) {
        .trophy-cta-section {
          padding: 65px 0 80px;
        }

        .dot-matrix {
          display: none;
        }
      }
    </style>
    <!-- Top-Right Concentric Arcs -->
    <svg class="cta-top-arcs" viewBox="0 0 220 220" fill="none" aria-hidden="true">
      <circle cx="210" cy="10" r="95" stroke="#b98b32" stroke-opacity="0.22" stroke-width="1.3" />
      <circle cx="210" cy="10" r="120" stroke="#b98b32" stroke-opacity="0.2" stroke-width="1.3" />
      <circle cx="210" cy="10" r="145" stroke="#b98b32" stroke-opacity="0.18" stroke-width="1.3" />
      <circle cx="210" cy="10" r="170" stroke="#b98b32" stroke-opacity="0.15" stroke-width="1.3" />
      <circle cx="210" cy="10" r="195" stroke="#b98b32" stroke-opacity="0.12" stroke-width="1.3" />
    </svg>

    <!-- Bottom-Right Warm Cream Wave -->
    <div class="cta-bottom-wave" aria-hidden="true"></div>

    <!-- Top-Left & Bottom-Right Gold Dot Grids -->
    <div class="dot-matrix dots-top-left" aria-hidden="true">
      <span></span><span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span><span></span>
    </div>

    <div class="dot-matrix dots-bottom-right" aria-hidden="true">
      <span></span><span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span><span></span>
    </div>

    <div class="container">
      <div class="trophy-cta-grid">
        <!-- Left Trophy Artwork Showcase -->
        <div class="trophy-showcase" data-aos="fade-right" data-aos-duration="900">
          <img
            src="<?= $img ?>/trophy-executive-desk.png"
            alt="Golden Achievement Trophy on Executive Desk"
            class="trophy-artwork-img"
          />
        </div>

        <!-- Right CTA Copy & Button -->
        <div class="trophy-cta-content" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
          <div class="cta-gold-line"></div>
          <h2 class="trophy-cta-title">
            Ready to Build Your Success <span>Story?</span>
          </h2>
          <p class="trophy-cta-desc">
            Join our ecosystem of industry-leading enterprise partners and elevate your digital engineering capabilities today.
          </p>
          <button type="button" class="consultation-btn" id="openConsultBtn">
            Schedule Executive Consultation
          </button>
        </div>
      </div>
    </div>

  </section>

  <!-- ==================== CASE STUDY MODAL ==================== -->
  <div class="modal-backdrop" id="caseModal" role="dialog" aria-modal="true">
    <div class="modal-card">
      <button class="modal-close" id="closeModalBtn" aria-label="Close modal">&times;</button>
      <span class="modal-badge" id="modalIndustry">Industry</span>
      <h3 id="modalTitle">Client Name</h3>
      <p id="modalDetails">Project overview details.</p>
      <div class="modal-impact" id="modalImpact">Key impact summary.</div>
    </div>
  </div>

  <!-- ==================== CONSULTATION MODAL ==================== -->
  <div class="modal-backdrop" id="consultModal" role="dialog" aria-modal="true">
    <div class="modal-card">
      <button class="modal-close" id="closeConsultBtn" aria-label="Close consultation modal">&times;</button>
      <span class="modal-badge">Executive Partnership</span>
      <h3>Schedule Executive Consultation</h3>
      <p>Connect directly with our principal architects to discuss your transformation roadmap.</p>
      <form class="consult-form" id="consultForm">
        <input type="text" placeholder="Full Name *" required />
        <input type="email" placeholder="Work Email *" required />
        <input type="text" placeholder="Company / Organization *" required />
        <textarea rows="3" placeholder="Tell us briefly about your project goals..."></textarea>
        <button type="submit" class="consultation-btn" style="width: 100%;">
          Confirm Consultation Request
        </button>
      </form>
    </div>
  </div>

  <!-- AOS Animation JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // 1. Initialize AOS
      AOS.init({
        once: true,
        offset: 70,
        duration: 800,
        easing: 'ease-out-cubic'
      });

      // 2. Animated Stat Counters
      const counters = document.querySelectorAll('.counter');
      const runCounter = (el) => {
        const target = +el.getAttribute('data-target');
        const duration = 1600;
        const stepTime = 20;
        const steps = duration / stepTime;
        const increment = target / steps;
        let current = 0;

        const timer = setInterval(() => {
          current += increment;
          if (current >= target) {
            el.textContent = target;
            clearInterval(timer);
          } else {
            el.textContent = Math.floor(current);
          }
        }, stepTime);
      };

      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              runCounter(entry.target);
              obs.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.5 }
      );

      counters.forEach((counter) => observer.observe(counter));

      // 3. Live Search & Category Filter
      const searchInput = document.getElementById('clientSearchInput');
      const searchForm = document.getElementById('clientSearchForm');
      const filterBtns = document.querySelectorAll('.filter-btn');
      const clientCards = document.querySelectorAll('.client-card');
      const noResultsBox = document.getElementById('noResultsBox');

      let activeCategory = 'all';

      function filterClients() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        clientCards.forEach((card) => {
          const category = card.getAttribute('data-category');
          const textContent = card.textContent.toLowerCase();

          const matchesCategory = activeCategory === 'all' || category === activeCategory;
          const matchesSearch = query === '' || textContent.includes(query);

          if (matchesCategory && matchesSearch) {
            card.style.display = 'flex';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });

        noResultsBox.style.display = visibleCount === 0 ? 'block' : 'none';
        AOS.refresh();
      }

      filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
          filterBtns.forEach((b) => b.classList.remove('active'));
          btn.classList.add('active');
          activeCategory = btn.getAttribute('data-filter');
          filterClients();
        });
      });

      searchInput.addEventListener('input', filterClients);

      searchForm.addEventListener('submit', () => {
        filterClients();
        document.getElementById('clientDirectory').scrollIntoView({ behavior: 'smooth' });
      });

      // 4. Case Study Modal Logic
      const modal = document.getElementById('caseModal');
      const closeModalBtn = document.getElementById('closeModalBtn');
      const modalTitle = document.getElementById('modalTitle');
      const modalIndustry = document.getElementById('modalIndustry');
      const modalDetails = document.getElementById('modalDetails');
      const modalImpact = document.getElementById('modalImpact');

      document.querySelectorAll('.case-study-btn').forEach((btn) => {
        btn.addEventListener('click', () => {
          modalTitle.textContent = btn.dataset.title;
          modalIndustry.textContent = btn.dataset.industry;
          modalDetails.textContent = btn.dataset.details;
          modalImpact.textContent = 'Key Outcome: ' + btn.dataset.impact;
          modal.classList.add('open');
        });
      });

      closeModalBtn.addEventListener('click', () => modal.classList.remove('open'));
      modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.remove('open');
      });

      // 5. Executive Consultation Modal Logic
      const consultModal = document.getElementById('consultModal');
      const openConsultBtn = document.getElementById('openConsultBtn');
      const closeConsultBtn = document.getElementById('closeConsultBtn');
      const consultForm = document.getElementById('consultForm');

      openConsultBtn.addEventListener('click', () => consultModal.classList.add('open'));
      closeConsultBtn.addEventListener('click', () => consultModal.classList.remove('open'));
      consultModal.addEventListener('click', (e) => {
        if (e.target === consultModal) consultModal.classList.remove('open');
      });

      consultForm.addEventListener('submit', (e) => {
        e.preventDefault();
        consultForm.innerHTML = `
          <div class="modal-impact">
            Thank you! Our executive partnership team will contact you within 24 business hours.
          </div>
        `;
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
          modal.classList.remove('open');
          consultModal.classList.remove('open');
        }
      });
    });
  </script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>