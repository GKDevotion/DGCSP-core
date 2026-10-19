<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/offshore-jurisdictions';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';

// Hero background: drop your own hero-bg.webp into the folder above and it is used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp??v=' . FILE_VERSISON)') ? 'hero-bg.webp??v=' . FILE_VERSISON)' : 'hero-bg.svg';
?>

<!-- Shared inner-page theme (same look & animation set as index) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<main>

<!-- 1. HERO -->
<header class="ip-hero">
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <p class="ip-eyebrow" style="text-transform: uppercase;" data-aos="fade-right">Global Expansion Strategies</p>
                <span class="ip-line ip-line--grow" style="margin: 1rem 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Offshore<br><span class="ip-gold">Jurisdictions</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Shield your capital from domestic sovereign risk, optimize tax structures, access high-growth global markets, and unlock international residency rights.</p>
                <a href="#hubs" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Explore Offshore Hubs</a>
            </div>
        </div>
    </div>
</header>

<!-- 2. INTRO QUOTE -->
<section class="ip-section ip-section--cream">
    <canvas class="ip-constellation ip-constellation--left" aria-hidden="true"></canvas>
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 10%; right: 3%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="container">
        <blockquote class="ip-quote m-0" data-aos="fade-up">Living and investing offshore offers a powerful combination of <strong>wealth protection, tax optimization,</strong> and <strong>lifestyle diversification</strong>. Branching out internationally guarantees freedom, privacy, and resilience against local volatility.</blockquote>
    </div>
</section>

<!-- 3. INVEST vs LIVE -->
<section class="ip-section">
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 6%; right: 3%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h3 class="ip-subhead"><i class="fa-solid fa-chart-pie"></i>Why Invest Offshore</h3>
                    <div class="ip-feature" data-aos="fade-up" data-aos-delay="0">
                        <span class="ip-feature__icon"><i class="fa-solid fa-shield-halved"></i></span>
                        <div><h4>Asset Protection</h4><p>Insulate your wealth from domestic litigation, local economic crises, or aggressive creditors in top-tier legal systems.</p></div>
                    </div>
                    <div class="ip-feature" data-aos="fade-up" data-aos-delay="100">
                        <span class="ip-feature__icon"><i class="fa-solid fa-coins"></i></span>
                        <div><h4>Currency Diversification</h4><p>Hold and grow capital in stronger global currencies to hedge against domestic inflation and market volatility.</p></div>
                    </div>
                    <div class="ip-feature" data-aos="fade-up" data-aos-delay="200">
                        <span class="ip-feature__icon"><i class="fa-solid fa-globe"></i></span>
                        <div><h4>Access to Global Markets</h4><p>Gain entrance into high-yield international asset classes, tech sectors, and real estate markets.</p></div>
                    </div>
                    <div class="ip-feature" data-aos="fade-up" data-aos-delay="300">
                        <span class="ip-feature__icon"><i class="fa-solid fa-percent"></i></span>
                        <div><h4>Favorable Tax Structures</h4><p>Financial hubs like Cayman Islands or the Bahamas impose little to no capital gains, inheritance, or corporate taxes.</p></div>
                    </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h3 class="ip-subhead"><i class="fa-solid fa-plane-departure"></i>Why Live Offshore</h3>
                    <div class="ip-feature" data-aos="fade-up" data-aos-delay="0">
                        <span class="ip-feature__icon"><i class="fa-solid fa-user-shield"></i></span>
                        <div><h4>Privacy and Security</h4><p>Offshore banking and trust structures provide robust personal privacy and financial confidentiality.</p></div>
                    </div>
                    <div class="ip-feature" data-aos="fade-up" data-aos-delay="100">
                        <span class="ip-feature__icon"><i class="fa-solid fa-house-chimney-window"></i></span>
                        <div><h4>Lifestyle Upgrades</h4><p>Relocate to destinations offering a lower cost of living, superior healthcare, and optimal weather conditions.</p></div>
                    </div>
                    <div class="ip-feature" data-aos="fade-up" data-aos-delay="200">
                        <span class="ip-feature__icon"><i class="fa-solid fa-passport"></i></span>
                        <div><h4>Residency Programs</h4><p>Gain Golden Visas or residency pathways through real estate or local investment, leading to second passports.</p></div>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. POPULAR HUBS -->
<section class="ip-suite" id="hubs">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="ip-float ip-float--c d-none d-md-block" style="bottom: 5%; left: 3%; width: 70px;"><img src="<?= $obj ?>/yellow-square.png" alt=""></div>
    <div class="container">
        <div class="ip-suite__head" data-aos="fade-up">
            <span class="ip-pill">Top Destinations</span>
            <h2 class="ip-title">Popular Offshore Hubs</h2>
            <p class="ip-sub">Tailored jurisdiction catering to unique financial objectives, privacy demands, and lifestyle goals.</p>
        </div>
        <div class="row g-4">

            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="0">
                <article class="ip-card">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title">Switzerland</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-vault"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Renowned for strict banking privacy, world-class wealth management, and unmatched economic stability.</p>
                </article>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="110">
                <article class="ip-card">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title">Singapore</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-building-columns"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Asia's premier financial capital featuring business-friendly tax policies, security, and infrastructure.</p>
                </article>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="220">
                <article class="ip-card">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title">Cayman &amp; Bahamas</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-umbrella-beach"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Famed for zero-tax frameworks on capital gains and corporate income for international investors.</p>
                </article>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="330">
                <article class="ip-card">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title">UAE (Dubai)</h3>
                        <span class="ip-card__fa" aria-hidden="true"><i class="fa-solid fa-city"></i></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc">Offers 0% personal income tax, 100% foreign corporate ownership, and world-class luxury expatriate living.</p>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- 5. ADVISORY NOTICE + JURISDICTION MENU -->
<section class="ip-section ip-section--cream">
    <div class="container">
        <div class="ip-notice" data-aos="fade-up">
            <i class="fa-solid fa-scale-balanced" aria-hidden="true"></i>
            <div>
                <h3>Compliance &amp; Tax Advisory</h3>
                <p>When considering an offshore move, consulting international financial and legal advisors is crucial to ensure full compliance with home-country tax reporting laws.</p>
                <p class="mb-0">Learn more with detailed guides from <a href="https://www.investopedia.com" target="_blank" rel="noopener">Investopedia <i class="fa-solid fa-arrow-up-right-from-square" style="font-size:.7em"></i></a> or consult wealth managers at <a href="https://alpenpartners.com" target="_blank" rel="noopener">Alpen Partners <i class="fa-solid fa-arrow-up-right-from-square" style="font-size:.7em"></i></a>.</p>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="100">
            <?php include ROOT_PATH . '/elements/offshore-jurisdiction-menu.php'; ?>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
