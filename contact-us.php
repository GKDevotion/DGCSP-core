<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/contact-us';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
?>

<!-- Across Borders. Always Connected. Section -->
<style>
  :root {
    --ac-gold: #b08843;
    --ac-text-dark: #111111;
    --ac-text-muted: #4a4f55;
    --ac-bg: #ffffff;
  }

  .ac-hero-section {
    position: relative;
    min-height: 600px;
    background-color: var(--ac-bg);
    overflow: hidden;
    display: flex;
    /* Align to top-start so text stays in the clean upper negative space */
    align-items: flex-start;
    padding-top: 4rem;
    padding-bottom: 0.1rem;
  }

  /* Skyline Background: Anchored bottom-right so left text remains clear */
  .ac-hero-bg {
    position: absolute;
    inset: 0;
    background-size: 80% auto;
    background-position: right 100%;
    background-repeat: no-repeat;
    animation: acSkylineFloat 18s ease-in-out infinite alternate;
    will-change: transform;
    z-index: 0;
  }

  @keyframes acSkylineFloat {
    0% { transform: scale(1) translateX(0); }
    100% { transform: scale(1.02) translateX(-0.6%); }
  }

  /* Soft Left-to-Right Readability Shield (Active on all viewports) */
  .ac-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.96) 0%,
      rgba(255, 255, 255, 0.88) 38%,
      rgba(255, 255, 255, 0.25) 65%,
      rgba(255, 255, 255, 0) 100%
    );
    z-index: 1;
    pointer-events: none;
  }

  /* Spaced Eyebrow Tagline */
  .ac-eyebrow {
    font-size: clamp(0.75rem, 0.95vw, 0.88rem);
    font-weight: 500;
    letter-spacing: 0.28em;
    color: #2c3034;
    margin-bottom: 1.25rem;
  }

  /* Gold Horizontal Divider */
  .ac-gold-line {
    width: 82px;
    height: 1.5px;
    background-color: var(--ac-gold);
    margin-bottom: 1.65rem;
    transition: width 0.45s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .ac-hero-section:hover .ac-gold-line {
    width: 112px;
  }

  /* Main Headline */
  .ac-heading {
    font-size: clamp(2.1rem, 3.6vw, 3.15rem);
    font-weight: 700;
    line-height: 1.18;
    letter-spacing: -0.02em;
    color: var(--ac-text-dark);
    margin-bottom: 1.25rem;
  }

  .ac-heading-gold {
    display: block;
    color: var(--ac-gold);
  }

  /* Supporting Description */
  .ac-desc {
    font-size: clamp(0.95rem, 1.15vw, 1.05rem);
    line-height: 1.65;
    color: var(--ac-text-muted);
    max-width: 470px;
  }

  /* Tablet Breakpoint (768px - 1199px) */
  @media (max-width: 1199.98px) {
    .ac-hero-section {
      min-height: 540px;
      padding-top: 4.5rem;
      padding-bottom: 5rem;
    }

    .ac-hero-bg {
      background-size: 95% auto;
      background-position: right bottom;
    }

    .ac-hero-overlay {
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.96) 0%,
        rgba(255, 255, 255, 0.85) 55%,
        rgba(255, 255, 255, 0.15) 100%
      );
    }
  }

  /* Mobile Breakpoint (< 768px): Reserves clean space below text for skyline */
  @media (max-width: 767.98px) {
    .ac-hero-section {
      min-height: auto;
      padding-top: 3.5rem;
      padding-bottom: 14rem;
    }

    .ac-hero-bg {
      background-size: 135% auto;
      background-position: 75% bottom;
      animation: none;
    }

    .ac-hero-overlay {
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 1) 0%,
        rgba(255, 255, 255, 0.95) 55%,
        rgba(255, 255, 255, 0) 85%
      );
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ac-hero-bg {
      animation: none;
    }
  }
</style>

<section class="ac-hero-section" id="across-borders-connected">
  
  <!-- Architectural Skyline Graphic -->
  <div 
    class="ac-hero-bg" 
    style="background-image: url('<?= $img ?>/always-connected.png?v=<?= FILE_VERSISON ?>');"
    role="img"
    aria-label="Global financial skyline featuring Big Ben, Burj Khalifa, Burj Al Arab, and Marina Bay Sands"
  ></div>

  <!-- Responsive Readability Overlay -->
  <div class="ac-hero-overlay"></div>

  <div class="container position-relative z-2">
    <div class="row justify-content-start">
      <div class="col-12 col-md-10 col-lg-6 col-xl-5 text-start">
        
        <!-- Spaced Eyebrow -->
        <p class="ac-eyebrow" data-aos="fade-down" data-aos-duration="750">
          Local presence. &nbsp;Centralised support.
        </p>

        <!-- Gold Rule -->
        <div 
          class="ac-gold-line" 
          data-aos="zoom-in-left" 
          data-aos-delay="120" 
          data-aos-duration="800"
        ></div>

        <!-- Two-Tone Headline -->
        <h1 class="ac-heading" data-aos="fade-left" data-aos-delay="200" data-aos-duration="850">
          Across borders.
          <span class="ac-heading-gold">Always connected.</span>
        </h1>

        <!-- Description Paragraph -->
        <p class="ac-desc mb-0" data-aos="fade-up" data-aos-delay="320" data-aos-duration="850">
          Find your nearest office, connect with the right department, or get help with an existing request. One place for every conversation.
        </p>

      </div>
    </div>
  </div>

</section>

<!-- Global Offices (Multi-Continent & Multi-Location) Section -->
<style>
  :root {
    --go-gold: #b08843;
    --go-gold-hover: #997435;
    --go-navy: #033f73;
    --go-navy-hover: #022d54;
    --go-border: #e5e7eb;
    --go-text-dark: #111111;
    --go-text-muted: #55595e;
  }

  .go-offices-section {
    background-color: #ffffff;
    padding: 0 0 4rem 0;
  }

  /* Header Typography */
  .go-eyebrow {
    font-size: 0.88rem;
    font-weight: 600;
    color: var(--go-gold);
    letter-spacing: 0.01em;
    margin-bottom: 0.35rem;
  }

  .go-heading {
    font-size: clamp(1.9rem, 3.2vw, 2.65rem);
    font-weight: 700;
    color: var(--go-text-dark);
    letter-spacing: -0.02em;
    line-height: 1.18;
  }

  .go-header-desc {
    font-size: clamp(0.95rem, 1.1vw, 1.04rem);
    line-height: 1.6;
    color: #6b7280;
  }

  /* Continent Filter Bar */
  .go-continent-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 0.55rem;
    margin-bottom: 1.75rem;
    padding-bottom: 1.25rem;
    border-bottom: 1px solid #f0f1f3;
  }

  .go-continent-btn {
    background-color: #f8f9fa;
    border: 1px solid var(--go-border);
    color: var(--go-text-muted);
    font-size: 0.86rem;
    font-weight: 600;
    padding: 0.5rem 1.15rem;
    border-radius: 50px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    transition: all 0.28s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .go-continent-btn:hover {
    border-color: var(--go-gold);
    color: var(--go-text-dark);
    background-color: #fcfaf7;
  }

  .go-continent-btn.is-active {
    background-color: var(--go-navy);
    border-color: var(--go-navy);
    color: #ffffff;
    box-shadow: 0 6px 16px rgba(3, 63, 115, 0.18);
  }

  .go-continent-count {
    font-size: 0.74rem;
    padding: 0.1rem 0.45rem;
    border-radius: 20px;
    background-color: rgba(0, 0, 0, 0.06);
    color: inherit;
  }

  .go-continent-btn.is-active .go-continent-count {
    background-color: rgba(255, 255, 255, 0.2);
  }

  /* Left Country Selector List */
  .go-country-list {
    display: flex;
    flex-direction: column;
    gap: 0.65rem;
  }

  .go-country-btn {
    width: 100%;
    background-color: #ffffff;
    border: 1px solid var(--go-border);
    border-radius: 10px;
    padding: 0.72rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    text-align: left;
    transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .go-country-btn:hover {
    border-color: rgba(176, 136, 67, 0.55);
    transform: translateX(3px);
    box-shadow: 0 6px 16px rgba(17, 17, 17, 0.04);
  }

  .go-country-btn.is-active {
    background-color: var(--go-gold);
    border-color: var(--go-gold);
    color: #ffffff;
    box-shadow: 0 10px 22px rgba(176, 136, 67, 0.25);
  }

  .go-country-info {
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }

  .go-flag-icon {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.08);
  }

  .go-country-btn.is-active .go-flag-icon {
    box-shadow: 0 0 0 1.5px rgba(255, 255, 255, 0.65);
  }

  .go-country-name {
    font-size: 0.94rem;
    font-weight: 500;
    color: #2b2f33;
    transition: color 0.25s ease;
  }

  .go-country-btn.is-active .go-country-name {
    color: #ffffff;
    font-weight: 600;
  }

  .go-chevron {
    width: 16px;
    height: 16px;
    color: #6b7280;
    transition: transform 0.3s ease, color 0.25s ease;
  }

  .go-country-btn:hover .go-chevron {
    transform: translateX(3px);
  }

  .go-country-btn.is-active .go-chevron {
    color: #ffffff;
  }

  /* Right Office Detail Card */
  .go-detail-card {
    background-color: #ffffff;
    border: 1px solid var(--go-border);
    border-radius: 14px;
    padding: 2.25rem 2.5rem;
    position: relative;
    overflow: hidden;
    min-height: 336px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 10px 30px rgba(17, 17, 17, 0.025);
  }

  /* Multi-Location Sub-Tabs (Shown when a country has 2+ offices) */
  .go-branch-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1.35rem;
  }

  .go-branch-btn {
    background-color: #f4f5f7;
    border: 1px solid transparent;
    color: #374151;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 0.35rem 0.9rem;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.25s ease;
  }

  .go-branch-btn:hover {
    background-color: #ebeef2;
  }

  .go-branch-btn.is-active {
    background-color: rgba(176, 136, 67, 0.14);
    border-color: var(--go-gold);
    color: #8a6628;
  }

  /* Office Badge ("Global office" / "Regional Hub") */
  .go-office-badge {
    font-size: 0.82rem;
    font-weight: 600;
    color: var(--go-gold);
  }

  /* Detail Rows */
  .go-detail-body {
    position: relative;
    z-index: 2;
    max-width: 500px;
    transition: opacity 0.28s ease, transform 0.28s ease;
  }

  .go-detail-body.is-switching {
    opacity: 0;
    transform: translateY(6px);
  }

  .go-info-row {
    display: flex;
    align-items: flex-start;
    gap: 0.9rem;
    margin-bottom: 1.15rem;
    font-size: 0.95rem;
    line-height: 1.55;
    color: #55595e;
  }

  .go-info-row a {
    color: #55595e;
    text-decoration: none;
    transition: color 0.2s ease;
  }

  .go-info-row a:hover {
    color: var(--go-gold);
  }

  .go-info-icon {
    width: 18px;
    height: 18px;
    color: var(--go-gold);
    flex-shrink: 0;
    margin-top: 0.2rem;
  }

  /* Action Buttons */
  .go-actions {
    position: relative;
    z-index: 2;
    display: flex;
    flex-wrap: wrap;
    gap: 0.85rem;
    margin-top: 1.65rem;
  }

  .go-btn-map {
    background-color: var(--go-navy);
    color: #ffffff;
    font-size: 0.88rem;
    font-weight: 600;
    padding: 0.68rem 1.65rem;
    border-radius: 8px;
    text-decoration: none;
    border: none;
    transition: background-color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
  }

  .go-btn-map:hover {
    background-color: var(--go-navy-hover);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(3, 63, 115, 0.22);
  }

  .go-btn-meeting {
    background-color: #d9dadb;
    color: #1f2328;
    font-size: 0.88rem;
    font-weight: 600;
    padding: 0.68rem 1.55rem;
    border-radius: 8px;
    text-decoration: none;
    border: none;
    transition: background-color 0.25s ease, transform 0.25s ease;
  }

  .go-btn-meeting:hover {
    background-color: #cacbce;
    color: #111111;
    transform: translateY(-2px);
  }

  /* Watermark Building Silhouette (Bottom-Right) */
  .go-skyline-watermark {
    position: absolute;
    right: 2rem;
    bottom: 1.35rem;
    width: 280px;
    max-width: 45%;
    pointer-events: none;
    z-index: 1;
    opacity: 0.9;
    transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.35s ease;
  }

  .go-detail-card:hover .go-skyline-watermark {
    transform: translateY(-3px) scale(1.02);
  }

  @media (max-width: 991.98px) {
    .go-country-list {
      flex-direction: row;
      flex-wrap: wrap;
    }
    .go-country-btn {
      width: auto;
      flex: 1 1 calc(50% - 0.65rem);
    }
    .go-detail-card {
      padding: 1.75rem 1.5rem;
      min-height: auto;
    }
    .go-skyline-watermark {
      position: relative;
      right: auto;
      bottom: auto;
      margin-top: 1.75rem;
      margin-left: auto;
      width: 220px;
      max-width: 75%;
    }
  }

  @media (max-width: 575.98px) {
    .go-country-btn {
      flex: 1 1 100%;
    }
  }
</style>

<section class="go-offices-section" id="global-offices">
  <div class="container">
    
    <!-- Top Section Header -->
    <div class="row align-items-end justify-content-between g-3 mb-4">
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="750">
        <p class="go-eyebrow">Our Global Presence</p>
        <h2 class="go-heading mb-0">Global offices</h2>
      </div>
      <div class="col-lg-6 text-lg-end" data-aos="fade-left" data-aos-duration="750">
        <p class="go-header-desc ms-lg-auto mb-0">
          Choose a location to find office details and plan your visit.<br class="d-none d-md-inline">
          Our central team can help arrange a meeting.
        </p>
      </div>
    </div>

    <!-- Continent Filter Tabs -->
    <div class="go-continent-bar" role="tablist" aria-label="Filter offices by continent" data-aos="fade-up" data-aos-delay="100" data-aos-duration="750">
      <button type="button" class="go-continent-btn is-active" data-continent="all" role="tab" aria-selected="true">
        All Continents <span class="go-continent-count">6</span>
      </button>
      <button type="button" class="go-continent-btn" data-continent="asia" role="tab" aria-selected="false">
        Asia Pacific <span class="go-continent-count">3</span>
      </button>
      <button type="button" class="go-continent-btn" data-continent="mea" role="tab" aria-selected="false">
        Middle East &amp; Africa <span class="go-continent-count">2</span>
      </button>
      <button type="button" class="go-continent-btn" data-continent="europe" role="tab" aria-selected="false">
        Europe <span class="go-continent-count">1</span>
      </button>
    </div>

    <!-- Main Interactive Master-Detail Layout -->
    <div class="row g-4 align-items-stretch">
      
      <!-- Left Rail: Country / Location Selector -->
      <div class="col-lg-3" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
        <div class="go-country-list" id="goCountryList" role="tablist" aria-label="Select country">
          <!-- Populated dynamically from structured multi-continent data -->
        </div>
      </div>

      <!-- Right Stage: Office Details Card -->
      <div class="col-lg-9" data-aos="fade-up" data-aos-delay="220" data-aos-duration="800">
        <div class="go-detail-card h-100">
          
          <div>
            <!-- Top Row: Multi-Office City Sub-Tabs (if >1 office in continent/country) + Badge -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
              <div class="go-branch-tabs mb-0" id="goBranchTabs"></div>
              <span class="go-office-badge ms-auto" id="goOfficeBadge">Global office</span>
            </div>

            <!-- Office Address, Email & Phone -->
            <div class="go-detail-body" id="goDetailBody">
              
              <div class="go-info-row">
                <svg class="go-info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span id="goOfficeAddress">
                  531 Upper Cross Street, 02-11, Hong Lim Complex,<br>Singapore - 050531
                </span>
              </div>

              <div class="go-info-row">
                <svg class="go-info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                  <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg>
                <a href="mailto:singapore@devotiongroup.org" id="goOfficeEmail">singapore@devotiongroup.org</a>
              </div>

              <div class="go-info-row mb-0">
                <svg class="go-info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                <a href="tel:+971123456789" id="goOfficePhone">+971 123456789</a>
              </div>

            </div>
          </div>

          <!-- Action Buttons -->
          <div class="go-actions">
            <a href="https://maps.google.com/?q=531+Upper+Cross+Street+Singapore+050531" target="_blank" rel="noopener noreferrer" class="go-btn-map" id="goMapLink">
              View on map
            </a>
            <a href="#contact" class="go-btn-meeting" id="goMeetingLink">
              Arrange a meeting
            </a>
          </div>

          <!-- Architectural Watermark Silhouette -->
          <img 
            src="<?= $img ?>/office-building.svg?v=<?= FILE_VERSISON ?>" 
            alt="" 
            aria-hidden="true" 
            class="go-skyline-watermark"
            loading="lazy"
          >

        </div>
      </div>

    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const imgBase = "<?= $img ?>";
    const fileVer = "<?= FILE_VERSISON ?>";

    // Multi-Continent -> Country -> Multiple Office Locations Data
    const globalOfficesData = [
      {
        id: 'singapore',
        name: 'Singapore',
        continent: 'asia',
        flag: `${imgBase}/singapore.png?v=${fileVer}`,
        offices: [
          {
            city: 'Singapore HQ',
            badge: 'Global office',
            address: '531 Upper Cross Street, 02-11, Hong Lim Complex,<br>Singapore - 050531',
            email: 'singapore@devotiongroup.org',
            phone: '+971 123456789',
            mapUrl: 'https://maps.google.com/?q=531+Upper+Cross+Street+Singapore+050531'
          }
        ]
      },
      {
        id: 'hong-kong',
        name: 'Hong Kong',
        continent: 'asia',
        flag: `${imgBase}/hong-kong.png?v=${fileVer}`,
        offices: [
          {
            city: 'Central District',
            badge: 'Regional office',
            address: 'Level 19, Two International Finance Centre, 8 Finance Street,<br>Central, Hong Kong',
            email: 'hongkong@devotiongroup.org',
            phone: '+852 3100 0000',
            mapUrl: 'https://maps.google.com/?q=Two+International+Finance+Centre+Hong+Kong'
          }
        ]
      },
      {
        id: 'mauritius',
        name: 'Mauritius',
        continent: 'mea',
        flag: `${imgBase}/mauritius.png?v=${fileVer}`,
        offices: [
          {
            city: 'Ebene Cybercity',
            badge: 'Regional office',
            address: '7th Floor, Tower 1, NexTeracom Building, Rue du Savoir,<br>Ebene Cybercity - 72201, Mauritius',
            email: 'mauritius@devotiongroup.org',
            phone: '+230 400 0000',
            mapUrl: 'https://maps.google.com/?q=NexTeracom+Tower+1+Ebene+Mauritius'
          }
        ]
      },
      {
        id: 'india',
        name: 'India',
        continent: 'asia',
        flag: `${imgBase}/india.png?v=${fileVer}`,
        offices: [
          {
            city: 'Mumbai (BKC)',
            badge: 'Regional Hub',
            address: 'One BKC, C-Wing, Bandra Kurla Complex,<br>Mumbai, Maharashtra - 400051, India',
            email: 'india@devotiongroup.org',
            phone: '+91 22 6000 0000',
            mapUrl: 'https://maps.google.com/?q=One+BKC+Mumbai+400051'
          },
          {
            city: 'Ahmedabad (GIFT City)',
            badge: 'IFSC Advisory Desk',
            address: 'Brigade International Financial Centre, GIFT City,<br>Gandhinagar, Gujarat - 382355, India',
            email: 'giftcity@devotiongroup.org',
            phone: '+91 79 6000 0000',
            mapUrl: 'https://maps.google.com/?q=Brigade+International+Financial+Centre+GIFT+City'
          }
        ]
      },
      {
        id: 'uae',
        name: 'UAE',
        continent: 'mea',
        flag: `${imgBase}/uae.png?v=${fileVer}`,
        offices: [
          {
            city: 'Dubai (DIFC)',
            badge: 'Middle East HQ',
            address: 'Gate Village Building 08, Level 3, Dubai International Financial Centre,<br>Dubai, United Arab Emirates',
            email: 'dubai@devotiongroup.org',
            phone: '+971 4 300 0000',
            mapUrl: 'https://maps.google.com/?q=Gate+Village+08+DIFC+Dubai'
          },
          {
            city: 'Abu Dhabi (ADGM)',
            badge: 'ADGM Office',
            address: 'Al Maqam Tower, Abu Dhabi Global Market Square, Al Maryah Island,<br>Abu Dhabi, United Arab Emirates',
            email: 'abudhabi@devotiongroup.org',
            phone: '+971 2 400 0000',
            mapUrl: 'https://maps.google.com/?q=Al+Maqam+Tower+ADGM+Abu+Dhabi'
          }
        ]
      },
      {
        id: 'uk',
        name: 'UK',
        continent: 'europe',
        flag: `${imgBase}/uk.png?v=${fileVer}`,
        offices: [
          {
            city: 'London (City)',
            badge: 'European Hub',
            address: '30 St Mary Axe, Level 14, City of London,<br>London EC3A 8BF, United Kingdom',
            email: 'uk@devotiongroup.org',
            phone: '+44 20 7000 0000',
            mapUrl: 'https://maps.google.com/?q=30+St+Mary+Axe+London+EC3A+8BF'
          }
        ]
      }
    ];

    const continentBtns = document.querySelectorAll('.go-continent-btn');
    const countryListEl = document.getElementById('goCountryList');
    const branchTabsEl = document.getElementById('goBranchTabs');
    const detailBodyEl = document.getElementById('goDetailBody');
    const badgeEl = document.getElementById('goOfficeBadge');
    const addressEl = document.getElementById('goOfficeAddress');
    const emailEl = document.getElementById('goOfficeEmail');
    const phoneEl = document.getElementById('goOfficePhone');
    const mapLinkEl = document.getElementById('goMapLink');

    let activeContinent = 'all';
    let activeCountryId = 'singapore';
    let activeBranchIdx = 0;

    function renderCountries() {
      const filtered = activeContinent === 'all'
        ? globalOfficesData
        : globalOfficesData.filter(c => c.continent === activeContinent);

      if (!filtered.some(c => c.id === activeCountryId) && filtered.length > 0) {
        activeCountryId = filtered[0].id;
        activeBranchIdx = 0;
      }

      countryListEl.innerHTML = filtered.map(country => {
        const isActive = country.id === activeCountryId;
        return `
          <button 
            type="button" 
            class="go-country-btn ${isActive ? 'is-active' : ''}" 
            data-country-id="${country.id}"
            role="tab"
            aria-selected="${isActive}"
          >
            <span class="go-country-info">
              <img src="${country.flag}" alt="${country.name} flag" class="go-flag-icon">
              <span class="go-country-name">${country.name}</span>
            </span>
            <svg class="go-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        `;
      }).join('');

      countryListEl.querySelectorAll('.go-country-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          const id = btn.getAttribute('data-country-id');
          if (id !== activeCountryId) {
            activeCountryId = id;
            activeBranchIdx = 0;
            renderCountries();
            renderOfficeDetails();
          }
        });
      });
    }

    function renderOfficeDetails() {
      const country = globalOfficesData.find(c => c.id === activeCountryId);
      if (!country) return;

      const offices = country.offices;
      const office = offices[activeBranchIdx] || offices[0];

      // Render multi-location sub-tabs only if the country has multiple offices
      if (offices.length > 1) {
        branchTabsEl.innerHTML = offices.map((item, idx) => `
          <button 
            type="button" 
            class="go-branch-btn ${idx === activeBranchIdx ? 'is-active' : ''}" 
            data-branch-idx="${idx}"
          >
            ${item.city}
          </button>
        `).join('');

        branchTabsEl.querySelectorAll('.go-branch-btn').forEach(btn => {
          btn.addEventListener('click', () => {
            activeBranchIdx = parseInt(btn.getAttribute('data-branch-idx'), 10);
            renderOfficeDetails();
          });
        });
      } else {
        branchTabsEl.innerHTML = '';
      }

      // Smooth crossfade transition for detail rows
      detailBodyEl.classList.add('is-switching');
      setTimeout(() => {
        badgeEl.textContent = office.badge;
        addressEl.innerHTML = office.address;
        emailEl.textContent = office.email;
        emailEl.href = `mailto:${office.email}`;
        phoneEl.textContent = office.phone;
        phoneEl.href = `tel:${office.phone.replace(/\s+/g, '')}`;
        mapLinkEl.href = office.mapUrl;

        detailBodyEl.classList.remove('is-switching');
      }, 160);
    }

    continentBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        continentBtns.forEach(b => {
          b.classList.remove('is-active');
          b.setAttribute('aria-selected', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-selected', 'true');

        activeContinent = btn.getAttribute('data-continent');
        renderCountries();
        renderOfficeDetails();
      });
    });

    // Initialize default Singapore view
    renderCountries();
    renderOfficeDetails();
  });
</script>

<!-- Centralised Departments Section -->
<style>
  :root {
    --cd-gold: #b08843;
    --cd-gold-dark: #967234;
    --cd-bg: #ebedf0;
    --cd-card-border: #e2e5ea;
    --cd-text-dark: #111111;
    --cd-text-muted: #4a4f55;
    --cd-label-muted: #6b7280;
  }

  .cd-departments-section {
    background-color: var(--cd-bg);
    padding: 5.5rem 0;
  }

  /* Pill Badge ("One team, clearly connected") */
  .cd-pill {
    display: inline-block;
    background-color: var(--cd-gold);
    color: #ffffff;
    font-size: 0.84rem;
    font-weight: 600;
    letter-spacing: 0.015em;
    padding: 0.55rem 2.15rem;
    border-radius: 50px;
    box-shadow: 0 6px 18px rgba(176, 136, 67, 0.25);
  }

  .cd-heading {
    font-size: clamp(1.85rem, 3.1vw, 2.55rem);
    color: var(--cd-text-dark);
    letter-spacing: -0.02em;
    line-height: 1.2;
  }

  .cd-subheading {
    font-size: clamp(0.95rem, 1.15vw, 1.05rem);
    color: var(--cd-label-muted);
    line-height: 1.6;
    max-width: 580px;
  }

  /* Department Cards */
  .cd-card {
    background-color: #ffffff;
    border: 1px solid var(--cd-card-border);
    border-radius: 16px;
    padding: 2.15rem 2rem;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
  }

  .cd-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 3px;
    background-color: var(--cd-gold);
    transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .cd-card:hover,
  .cd-card:focus-within {
    transform: translateY(-6px);
    border-color: rgba(176, 136, 67, 0.45);
    box-shadow: 0 18px 40px rgba(17, 17, 17, 0.07);
  }

  .cd-card:hover::after,
  .cd-card:focus-within::after {
    width: 100%;
  }

  /* Card Header (Title Left, SVG Icon Right) */
  .cd-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
  }

  .cd-card-title {
    font-size: 1.22rem;
    font-weight: 700;
    line-height: 1.32;
    color: var(--cd-text-dark);
    margin-bottom: 0;
    transition: color 0.3s ease;
  }

  .cd-card:hover .cd-card-title {
    color: var(--cd-gold-dark);
  }

  .cd-icon-wrap {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .cd-icon-wrap img {
    width: 48px;
    height: 48px;
    object-fit: contain;
  }

  .cd-card:hover .cd-icon-wrap {
    transform: scale(1.08) rotate(-2deg);
  }

  /* Gold Horizontal Accent Line */
  .cd-card-divider {
    width: 72px;
    height: 2px;
    background-color: var(--cd-gold);
    margin: 1.1rem 0 1.25rem;
    transition: width 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .cd-card:hover .cd-card-divider {
    width: 105px;
  }

  /* Card Description */
  .cd-card-desc {
    font-size: 0.93rem;
    line-height: 1.62;
    color: var(--cd-text-muted);
    margin-bottom: 1.4rem;
  }

  /* Contact Metadata Blocks */
  .cd-meta-group {
    margin-top: auto;
  }

  .cd-meta-item + .cd-meta-item {
    margin-top: 1.05rem;
  }

  .cd-meta-label {
    display: block;
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: var(--cd-label-muted);
    margin-bottom: 0.2rem;
  }

  .cd-email-link {
    display: inline-block;
    font-size: 0.93rem;
    font-weight: 600;
    color: var(--cd-text-dark);
    text-decoration: none;
    word-break: break-word;
    transition: color 0.25s ease;
  }

  .cd-email-link:hover {
    color: var(--cd-gold-dark);
    text-decoration: underline;
  }

  .cd-phone-text {
    display: block;
    font-size: 0.88rem;
    color: var(--cd-text-muted);
  }
</style>

<section class="cd-departments-section" id="centralised-departments">
  <div class="container">
    
    <!-- Centered Section Header -->
    <div class="text-center mb-5">
      <div data-aos="fade-down" data-aos-duration="700">
        <span class="cd-pill mb-3">One team, clearly connected</span>
      </div>
      
      <h2 class="cd-heading fw-bold mb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        Centralised departments
      </h2>
      
      <p class="cd-subheading mx-auto mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
        Reach the people who handle your request directly, wherever your business operates.
      </p>
    </div>

    <!-- 3x2 Responsive Grid -->
    <div class="row g-4">
      
      <!-- Card 1: Sales & Business Advisory -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
        <div class="cd-card h-100" tabindex="0">
          <div class="cd-card-header">
            <h3 class="cd-card-title">Sales &amp; Business<br>Advisory</h3>
            <div class="cd-icon-wrap">
              <img src="<?= $img ?>/sales-business-advisory.svg?v=<?= FILE_VERSISON ?>" alt="Sales & Business Advisory" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cd-card-divider"></div>
          <p class="cd-card-desc">
            New enquiries, service proposals and business setup.
          </p>
          <div class="cd-meta-group">
            <div class="cd-meta-item">
              <span class="cd-meta-label">PROPOSED EMAIL</span>
              <a href="mailto:sales@devotionglobalcsp.com" class="cd-email-link">sales@devotionglobalcsp.com</a>
            </div>
            <div class="cd-meta-item">
              <span class="cd-meta-label">DIRECT MOBILE / WHATSAPP</span>
              <span class="cd-phone-text">Department number to be added</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2: Accounting & Tax -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="120" data-aos-duration="800">
        <div class="cd-card h-100" tabindex="0">
          <div class="cd-card-header">
            <h3 class="cd-card-title">Accounting<br>&amp; Tax</h3>
            <div class="cd-icon-wrap">
              <img src="<?= $img ?>/accounting-tax.svg?v=<?= FILE_VERSISON ?>" alt="Accounting & Tax" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cd-card-divider"></div>
          <p class="cd-card-desc">
            Bookkeeping, financial statements, tax and invoices.
          </p>
          <div class="cd-meta-group">
            <div class="cd-meta-item">
              <span class="cd-meta-label">PROPOSED EMAIL</span>
              <a href="mailto:clients@devotionglobalcsp.com" class="cd-email-link">clients@devotionglobalcsp.com</a>
            </div>
            <div class="cd-meta-item">
              <span class="cd-meta-label">DIRECT MOBILE / WHATSAPP</span>
              <span class="cd-phone-text">Department number to be added</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3: Compliance & KYC -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="240" data-aos-duration="800">
        <div class="cd-card h-100" tabindex="0">
          <div class="cd-card-header">
            <h3 class="cd-card-title">Compliance<br>&amp; KYC</h3>
            <div class="cd-icon-wrap">
              <img src="<?= $img ?>/complience-kyc_2.svg?v=<?= FILE_VERSISON ?>" alt="Compliance & KYC" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cd-card-divider"></div>
          <p class="cd-card-desc">
            Client verification, due diligence and compliance queries.
          </p>
          <div class="cd-meta-group">
            <div class="cd-meta-item">
              <span class="cd-meta-label">PROPOSED EMAIL</span>
              <a href="mailto:compliance@devotionglobalcsp.com" class="cd-email-link">compliance@devotionglobalcsp.com</a>
            </div>
            <div class="cd-meta-item">
              <span class="cd-meta-label">DIRECT MOBILE / WHATSAPP</span>
              <span class="cd-phone-text">Department number to be added</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4: Corporate Administration -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="cd-card h-100" tabindex="0">
          <div class="cd-card-header">
            <h3 class="cd-card-title">Corporate<br>Administration</h3>
            <div class="cd-icon-wrap">
              <img src="<?= $img ?>/corporate-admin.svg?v=<?= FILE_VERSISON ?>" alt="Corporate Administration" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cd-card-divider"></div>
          <p class="cd-card-desc">
            Company records, renewals and corporate documentation.
          </p>
          <div class="cd-meta-group">
            <div class="cd-meta-item">
              <span class="cd-meta-label">PROPOSED EMAIL</span>
              <a href="mailto:corporate@devotionglobalcsp.com" class="cd-email-link">corporate@devotionglobalcsp.com</a>
            </div>
            <div class="cd-meta-item">
              <span class="cd-meta-label">DIRECT MOBILE / WHATSAPP</span>
              <span class="cd-phone-text">Department number to be added</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5: Client Relations -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="220" data-aos-duration="800">
        <div class="cd-card h-100" tabindex="0">
          <div class="cd-card-header">
            <h3 class="cd-card-title">Client<br>Relations</h3>
            <div class="cd-icon-wrap">
              <img src="<?= $img ?>/public-relation.svg?v=<?= FILE_VERSISON ?>" alt="Client Relations" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cd-card-divider"></div>
          <p class="cd-card-desc">
            Ongoing service coordination and client assistance.
          </p>
          <div class="cd-meta-group">
            <div class="cd-meta-item">
              <span class="cd-meta-label">PROPOSED EMAIL</span>
              <a href="mailto:clients@devotionglobalcsp.com" class="cd-email-link">clients@devotionglobalcsp.com</a>
            </div>
            <div class="cd-meta-item">
              <span class="cd-meta-label">DIRECT MOBILE / WHATSAPP</span>
              <span class="cd-phone-text">Department number to be added</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6: Technical Support -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="340" data-aos-duration="800">
        <div class="cd-card h-100" tabindex="0">
          <div class="cd-card-header">
            <h3 class="cd-card-title">Technical<br>Support</h3>
            <div class="cd-icon-wrap">
              <img src="<?= $img ?>/technical-support.svg?v=<?= FILE_VERSISON ?>" alt="Technical Support" width="48" height="48" loading="lazy">
            </div>
          </div>
          <div class="cd-card-divider"></div>
          <p class="cd-card-desc">
            Portal access, login issues and technical assistance.
          </p>
          <div class="cd-meta-group">
            <div class="cd-meta-item">
              <span class="cd-meta-label">PROPOSED EMAIL</span>
              <a href="mailto:it@devotionglobalcsp.com" class="cd-email-link">it@devotionglobalcsp.com</a>
            </div>
            <div class="cd-meta-item">
              <span class="cd-meta-label">DIRECT MOBILE / WHATSAPP</span>
              <span class="cd-phone-text">Department number to be added</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Live Chat & Support Ticket Centre Dual-Card Section -->
<style>
  :root {
    --sc-gold: #b08843;
    --sc-gold-hover: #967234;
    --sc-navy: #033f73;
    --sc-text-muted: #4a4f55;
    --sc-card-border: #e3e6eb;
  }

  .sc-support-section {
    background-color: #ffffff;
    padding: 5.5rem 0;
  }

  /* Equal-Height Feature Cards */
  .sc-card {
    position: relative;
    border-radius: 16px;
    border: 1px solid var(--sc-card-border);
    overflow: hidden;
    min-height: 330px;
    padding: 2.5rem 2.35rem;
    display: flex;
    align-items: center;
    box-shadow: 0 10px 28px rgba(17, 17, 17, 0.04);
    transition: transform 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.38s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.35s ease;
  }

  .sc-card:hover,
  .sc-card:focus-within {
    transform: translateY(-6px);
    border-color: rgba(176, 136, 67, 0.45);
    box-shadow: 0 20px 44px rgba(17, 17, 17, 0.09);
  }

  .sc-card--chat {
    background-color: #ebedf2;
  }

  .sc-card--ticket {
    background-color: #eaeaea;
  }

  /* Right-Aligned Card Background Images */
  .sc-card-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: right center;
    background-repeat: no-repeat;
    transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
    will-change: transform;
  }

  .sc-card:hover .sc-card-bg {
    transform: scale(1.035);
  }

  /* Mobile Readability Veil where text overlaps image */
  .sc-card-mobile-veil {
    position: absolute;
    inset: 0;
    z-index: 1;
  }

  .sc-card--chat .sc-card-mobile-veil {
    background: linear-gradient(
      90deg,
      rgba(235, 237, 242, 0.98) 0%,
      rgba(235, 237, 242, 0.92) 55%,
      rgba(235, 237, 242, 0.55) 100%
    );
  }

  .sc-card--ticket .sc-card-mobile-veil {
    background: linear-gradient(
      90deg,
      rgba(234, 234, 234, 0.98) 0%,
      rgba(234, 234, 234, 0.92) 55%,
      rgba(234, 234, 234, 0.55) 100%
    );
  }

  /* Left Content Column */
  .sc-card-content {
    position: relative;
    z-index: 2;
    max-width: 56%;
  }

  .sc-card--ticket .sc-card-content {
    max-width: 62%;
  }

  .sc-eyebrow {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--sc-gold);
    margin-bottom: 0.45rem;
    letter-spacing: 0.01em;
  }

  .sc-title {
    font-size: clamp(1.45rem, 2.2vw, 1.85rem);
    font-weight: 700;
    color: var(--sc-navy);
    line-height: 1.2;
    letter-spacing: -0.015em;
    margin-bottom: 0;
  }

  .sc-divider {
    width: 74px;
    height: 2px;
    background-color: var(--sc-gold);
    margin: 0.95rem 0 1.1rem;
    transition: width 0.38s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .sc-card:hover .sc-divider {
    width: 105px;
  }

  .sc-desc {
    font-size: 0.92rem;
    line-height: 1.6;
    color: var(--sc-text-muted);
    margin-bottom: 1.5rem;
  }

  /* Pill Buttons */
  .sc-btn-group {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 0.65rem;
  }

  .sc-btn-solid {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background-color: var(--sc-gold);
    color: #ffffff;
    font-size: 0.84rem;
    font-weight: 600;
    padding: 0.62rem 1.45rem;
    border-radius: 50px;
    border: 1px solid var(--sc-gold);
    text-decoration: none;
    box-shadow: 0 6px 16px rgba(176, 136, 67, 0.24);
    transition: background-color 0.28s ease, transform 0.28s ease, box-shadow 0.28s ease;
  }

  .sc-btn-solid:hover,
  .sc-btn-solid:focus-visible {
    background-color: var(--sc-gold-hover);
    border-color: var(--sc-gold-hover);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(176, 136, 67, 0.34);
  }

  .sc-btn-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background-color: transparent;
    color: var(--sc-gold);
    font-size: 0.84rem;
    font-weight: 600;
    padding: 0.62rem 1.35rem;
    border-radius: 50px;
    border: 1px solid var(--sc-gold);
    text-decoration: none;
    transition: background-color 0.28s ease, color 0.28s ease, transform 0.28s ease;
  }

  .sc-btn-outline:hover,
  .sc-btn-outline:focus-visible {
    background-color: var(--sc-gold);
    color: #ffffff;
    transform: translateY(-2px);
  }

  .sc-btn-icon {
    font-size: 1rem;
    line-height: 1;
    transition: transform 0.28s ease;
  }

  .sc-btn-solid:hover .sc-btn-icon {
    transform: translateX(3px);
  }

  .sc-btn-outline:hover .sc-btn-icon {
    transform: rotate(90deg);
  }

  /* Online Status Indicator */
  .sc-status {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    margin-top: 0.85rem;
    font-size: 0.78rem;
    font-weight: 600;
    color: var(--sc-navy);
  }

  .sc-status-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background-color: #16a34a;
    position: relative;
    flex-shrink: 0;
  }

  .sc-status-dot::after {
    content: "";
    position: absolute;
    inset: -3px;
    border-radius: 50%;
    background-color: rgba(22, 163, 74, 0.35);
    animation: scStatusPulse 2s ease-out infinite;
  }

  @keyframes scStatusPulse {
    0% { transform: scale(0.8); opacity: 0.9; }
    100% { transform: scale(2); opacity: 0; }
  }

  @media (max-width: 1199.98px) {
    .sc-card {
      padding: 2rem 1.75rem;
      min-height: 310px;
    }
    .sc-card-content,
    .sc-card--ticket .sc-card-content {
      max-width: 66%;
    }
  }

  @media (max-width: 575.98px) {
    .sc-card-content,
    .sc-card--ticket .sc-card-content {
      max-width: 100%;
    }
  }
</style>

<section class="sc-support-section" id="support-channels">
  <div class="container">
    <div class="row g-4 align-items-stretch">
      
      <!-- Left Card: Live Chat -->
      <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="850">
        <div class="sc-card sc-card--chat h-100">
          
          <div 
            class="sc-card-bg" 
            style="background-image: url('<?= $img ?>/right-side-women.jpg?v=<?= FILE_VERSISON ?>');"
            role="img"
            aria-label="Customer support specialist wearing headset ready for live chat"
          ></div>
          
          <div class="sc-card-mobile-veil d-sm-none"></div>

          <div class="sc-card-content">
            <p class="sc-eyebrow">A conversation starts here</p>
            <h3 class="sc-title">Live chat</h3>
            <div class="sc-divider"></div>
            <p class="sc-desc">
              Get guidance on our services or help finding the right department.
            </p>

            <div>
              <a href="#live-chat" class="sc-btn-solid">Start a conversation</a>
            </div>

            <div class="sc-status">
              <span class="sc-status-dot" aria-hidden="true"></span>
              <span>Chat with our support team</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Card: Support Ticket Centre -->
      <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-delay="120" data-aos-duration="850">
        <div class="sc-card sc-card--ticket h-100">
          
          <div 
            class="sc-card-bg" 
            style="background-image: url('<?= $img ?>/laptop-typing.jpg?v=<?= FILE_VERSISON ?>');"
            role="img"
            aria-label="Overhead view of hands typing a support ticket on a laptop"
          ></div>

          <div class="sc-card-mobile-veil d-sm-none"></div>

          <div class="sc-card-content">
            <p class="sc-eyebrow">Every request, in one place</p>
            <h3 class="sc-title">Support Ticket Centre</h3>
            <div class="sc-divider"></div>
            <p class="sc-desc">
              Raise a request with the right department or check the progress of an existing ticket.
            </p>

            <div class="sc-btn-group">
              <a href="#create-ticket" class="sc-btn-outline">
                <span>Create a ticket</span>
                <span class="sc-btn-icon" aria-hidden="true">+</span>
              </a>
              <a href="#track-ticket" class="sc-btn-solid">
                <span>Track ticket</span>
                <span class="sc-btn-icon" aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<?php include ROOT_PATH . '/elements/footer.php'; ?>