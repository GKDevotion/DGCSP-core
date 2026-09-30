<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';
?>
<style>
    :root {
      --brand-gold: #b38f51;
      --brand-gold-dark: #8d6a34;
      --brand-gold-light: #f7f3eb;
      --brand-ink: #1e2229;
      --brand-muted: #64748b;
      --brand-border: #e2e8f0;
      --brand-bg-panel: #f8fafc;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: var(--brand-ink);
      background-color: #ffffff;
      overflow-x: hidden;
    }

    /* Top Accent Line */
    .top-accent-line {
      height: 4px;
      background: linear-gradient(90deg, var(--brand-gold) 0%, var(--brand-gold-dark) 100%);
    }

    /* Eyebrow Label */
    .eyebrow {
      color: var(--brand-gold-dark);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
    }

    /* Page Headings */
    .page-title {
      color: var(--brand-gold);
      font-weight: 700;
      letter-spacing: -0.02em;
    }

    /* Main Office Cards */
    .office-card {
      background: #ffffff;
      border: 1px solid var(--brand-border);
      border-radius: 16px;
      padding: 1.75rem;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      height: 100%;
      position: relative;
    }

    .office-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 0%;
      background-color: var(--brand-gold);
      border-radius: 16px 0 0 16px;
      transition: height 0.3s ease;
    }

    .office-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
      border-color: var(--brand-gold-light);
    }

    .office-card:hover::before {
      height: 100%;
    }

    /* Country Navigation Buttons */
    .category-btn {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      padding: 1rem 1.25rem;
      border: 1px solid var(--brand-border);
      border-radius: 12px;
      background-color: #ffffff;
      color: var(--brand-ink);
      font-weight: 500;
      font-size: 0.95rem;
      transition: all 0.25s ease;
      text-align: left;
    }

    .category-btn i {
      color: var(--brand-gold);
      transition: transform 0.25s ease;
    }

    .category-btn:hover {
      border-color: var(--brand-gold);
      color: var(--brand-gold);
      background-color: var(--brand-gold-light);
    }

    .category-btn:hover i {
      transform: translateX(4px);
    }

    .category-btn.active {
      background: linear-gradient(135deg, var(--brand-gold) 0%, var(--brand-gold-dark) 100%);
      color: #ffffff;
      border-color: transparent;
      box-shadow: 0 6px 18px rgba(179, 143, 81, 0.25);
    }

    .category-btn.active i {
      color: #ffffff;
      transform: translateX(4px);
    }

    /* Panel Wrapper */
    .office-panel {
      background-color: var(--brand-bg-panel);
      border: 1px solid var(--brand-border);
      border-radius: 20px;
      padding: 2.25rem;
    }

    /* Panel Heading */
    .panel-heading-badge {
      background-color: rgba(179, 143, 81, 0.12);
      color: var(--brand-gold-dark);
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      padding: 0.35rem 0.75rem;
      border-radius: 50px;
      text-transform: uppercase;
      display: inline-block;
    }

    /* Location Cards inside grid */
    .location-box {
      background: #ffffff;
      border-radius: 14px;
      padding: 1.5rem;
      border: 1px solid rgba(226, 232, 240, 0.8);
      height: 100%;
      transition: all 0.25s ease;
    }

    .location-box:hover {
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.04);
      border-color: var(--brand-gold);
    }

    .location-box h5 {
      font-weight: 600;
      font-size: 1.05rem;
      color: var(--brand-ink);
      margin-bottom: 0.5rem;
    }

    .location-box p {
      color: var(--brand-muted);
      font-size: 0.925rem;
      line-height: 1.6;
      margin-bottom: 0;
    }

    /* Custom Select Styling */
    .form-select-custom {
      border: 1px solid var(--brand-border);
      border-radius: 10px;
      padding: 0.75rem 1rem;
      font-weight: 500;
      font-size: 0.9rem;
      color: var(--brand-ink);
      box-shadow: none;
    }

    .form-select-custom:focus {
      border-color: var(--brand-gold);
      box-shadow: 0 0 0 0.25rem rgba(179, 143, 81, 0.15);
    }

    .text-theme{
        color: var(--gold-primary);
    }
  </style>
</head>
<body>

  <!-- Top Accent Bar -->
  <div class="top-accent-line"></div>

  <main class="container py-5 my-md-3">

    <!-- Section 1: Intro & Primary Offices -->
    <section class=" pb-lg-4">
      <div class="text-center" data-aos="fade-up" data-aos-duration="800">
        <h1 class="page-title display-5 mb-0">Offices &amp; Addresses</h1>
      </div>

      <div class="row g-4 mt-1">
        <!-- Corporate Office -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
          <div class="office-card">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-light text-primary rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px; color: var(--brand-gold) !important; background-color: var(--brand-gold-light) !important;">
                <i class="bi bi-building fs-5"></i>
              </div>
              <h2 class="h5 mb-0 fw-semibold">Corporate Office</h2>
            </div>
            <p class="text-secondary mb-0 lh-lg">
              Aspect Tower, Bay Avenue - 2801, A Zone, Business Bay, Dubai UAE
            </p>
          </div>
        </div>

        <!-- Registered Office -->
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
          <div class="office-card">
            <div class="d-flex align-items-center mb-3">
              <div class="bg-light text-primary rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px; color: var(--brand-gold) !important; background-color: var(--brand-gold-light) !important;">
                <i class="bi bi-geo-alt fs-5"></i>
              </div>
              <h2 class="h5 mb-0 fw-semibold">Registered Office</h2>
            </div>
            <p class="text-secondary mb-0 lh-lg">
              1st Floor, 10 Elphinstone Building Veer Nariman Road, Singapore
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Directory -->
    <section class="mt-5" data-aos="fade-up" data-aos-duration="800">
      
      <!-- Directory Toolbar -->
      <div class="row align-items-end g-3 mb-4">
        <div class="col-lg-8 col-md-7">
          <h2 class="h2 fw-bold text-dark mb-0">Find an Office</h2>
        </div>
        <div class="col-lg-4 col-md-5">
          <select id="country-select" class="form-select form-select-custom" aria-label="Select Country">
            <option value="Singapore" selected>Singapore</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Mauritius">Mauritius</option>
            <option value="India">India</option>
            <option value="UAE">UAE</option>
            <option value="United Kingdom">United Kingdom</option>
          </select>
        </div>
      </div>

      <!-- Directory Layout -->
      <div class="row g-4">
        
        <!-- Country Navigation Sidebar (Desktop & Tablet) -->
        <div class="col-lg-3 col-md-4">
          <nav class="d-grid gap-2" aria-label="Country Navigation">
            <button class="category-btn active" type="button" data-country-target="Singapore">
              <span>Singapore</span>
              <i class="bi bi-arrow-right"></i>
            </button>
            <button class="category-btn" type="button" data-country-target="Hong Kong">
              <span>Hong Kong</span>
              <i class="bi bi-arrow-right"></i>
            </button>
            <button class="category-btn" type="button" data-country-target="Mauritius">
              <span>Mauritius</span>
              <i class="bi bi-arrow-right"></i>
            </button>
            <button class="category-btn" type="button" data-country-target="India">
              <span>India</span>
              <i class="bi bi-arrow-right"></i>
            </button>
            <button class="category-btn" type="button" data-country-target="UAE">
              <span>UAE</span>
              <i class="bi bi-arrow-right"></i>
            </button>
            <button class="category-btn" type="button" data-country-target="United Kingdom">
              <span>United Kingdom</span>
              <i class="bi bi-arrow-right"></i>
            </button>
          </nav>
        </div>

        <!-- Dynamic Content Panels -->
        <div class="col-lg-9 col-md-8">
          <div class="office-panel shadow-sm">
            
            <!-- Singapore Panel -->
            <div class="country-offices" data-country="Singapore">
              <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <div>
                  <span class="panel-heading-badge mb-1">Selected Region</span>
                  <h3 class="h4 fw-bold mb-0 text-dark">Singapore</h3>
                </div>
                <i class="bi bi-globe fs-2 text-secondary opacity-50"></i>
              </div>
              <div class="row g-3">
                <div class="col-12">
                  <div class="location-box">
                    <h5 class="fw-semibold"><i class="bi bi-pin-map-fill me-2 text-theme"></i>Singapore</h5>
                    <p>531 Upper Cross Street, 02-11, Hong Lim Complex, Singapore - 050531</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Hong Kong Panel -->
            <div class="country-offices d-none" data-country="Hong Kong">
              <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <div>
                  <span class="panel-heading-badge mb-1">Selected Region</span>
                  <h3 class="h4 fw-bold mb-0 text-dark">Hong Kong</h3>
                </div>
                <i class="bi bi-globe fs-2 text-secondary opacity-50"></i>
              </div>
              <div class="row g-3">
                <div class="col-12">
                  <div class="location-box">
                    <h5 class="fw-semibold"><i class="bi bi-pin-map-fill me-2 text-theme"></i>Hong Kong</h5>
                    <p>Unit 1201, 12/F, Tower 1, Lippo Centre, 89 Queensway, Hong Kong</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Mauritius Panel -->
            <div class="country-offices d-none" data-country="Mauritius">
              <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <div>
                  <span class="panel-heading-badge mb-1">Selected Region</span>
                  <h3 class="h4 fw-bold mb-0 text-dark">Mauritius</h3>
                </div>
                <i class="bi bi-globe fs-2 text-secondary opacity-50"></i>
              </div>
              <div class="row g-3">
                <div class="col-12">
                  <div class="location-box">
                    <h5 class="fw-semibold"><i class="bi bi-pin-map-fill me-2 text-theme"></i>Mauritius</h5>
                    <p>Level 4, Alexander House, Silicon Avenue, Ebene Cybercity, Mauritius</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- India Panel -->
            <div class="country-offices d-none" data-country="India">
              <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <div>
                  <span class="panel-heading-badge mb-1">Selected Region</span>
                  <h3 class="h4 fw-bold mb-0 text-dark">India</h3>
                </div>
                <i class="bi bi-globe fs-2 text-secondary opacity-50"></i>
              </div>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Mumbai</h5>
                    <p>Unit No. NB 1502 &amp; SB 1501<br>15th Floor, Empire Tower, Cloud City<br>Campus, Opp. Reliable Tech Park<br>Thane-Belapur Road<br>Airoli, Navi Mumbai - 400 708</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Bengaluru</h5>
                    <p>71, Cunningham Road, Vasanth Nagar<br>Bengaluru, Karnataka 560051</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Pune</h5>
                    <p>Sai Trinity, Central Wing<br>S. No. 146/1/28, Pashan<br>Pune - 411 021</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Delhi (NCR Region)</h5>
                    <p>Green Boulevard, Ground Floor<br>Tower B &amp; C, Plot no - 89A, Sector 62<br>Noida - 201301</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Jamshedpur</h5>
                    <p>Pipeline Road, Sakchi<br>Jamshedpur - 831 001</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Kolkata</h5>
                    <p>JC 30/A; Sector III, Salt Lake<br>Kolkata - 700 106</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Vadodara</h5>
                    <p>2nd Floor, Trisha Space, L&amp;T Circle<br>Veer Nagar Karelibagh,<br>Vadodara - 390018, Gujarat</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- UAE Panel -->
            <div class="country-offices d-none" data-country="UAE">
              <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <div>
                  <span class="panel-heading-badge mb-1">Selected Region</span>
                  <h3 class="h4 fw-bold mb-0 text-dark">UAE</h3>
                </div>
                <i class="bi bi-globe fs-2 text-secondary opacity-50"></i>
              </div>
              <div class="row g-3">
                <div class="col-12">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>Dubai</h5>
                    <p>Aspect Tower, Bay Avenue-2801, A zone<br>Business Bay, Dubai, UAE</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- United Kingdom Panel -->
            <div class="country-offices d-none" data-country="United Kingdom">
              <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                <div>
                  <span class="panel-heading-badge mb-1">Selected Region</span>
                  <h3 class="h4 fw-bold mb-0 text-dark">United Kingdom</h3>
                </div>
                <i class="bi bi-globe fs-2 text-secondary opacity-50"></i>
              </div>
              <div class="row g-3">
                <div class="col-12">
                  <div class="location-box">
                    <h5><i class="bi bi-pin-map-fill me-2 text-theme"></i>London</h5>
                    <p>4th Floor, 100 Fenchurch Street<br>London EC3M 5JD, United Kingdom</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/bootstraps.bundle.min.js"></script>
  
  <!-- AOS Animation JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize AOS Animations
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 50
      });

      var select = document.getElementById('country-select');
      var panels = document.querySelectorAll('.country-offices');
      var countryButtons = document.querySelectorAll('.category-btn');

      function showCountry(country) {
        select.value = country;
        
        panels.forEach(function (panel) {
          if (panel.dataset.country === country) {
            panel.classList.remove('d-none');
          } else {
            panel.classList.add('d-none');
          }
        });

        countryButtons.forEach(function (button) {
          if (button.dataset.countryTarget === country) {
            button.classList.add('active');
          } else {
            button.classList.remove('active');
          }
        });
      }

      select.addEventListener('change', function () {
        showCountry(select.value);
      });

      countryButtons.forEach(function (button) {
        button.addEventListener('click', function () {
          showCountry(button.dataset.countryTarget);
        });
      });
    });
  </script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>