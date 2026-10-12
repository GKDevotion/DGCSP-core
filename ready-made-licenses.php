<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

$imgDir = '/assets/images/ready-made-licenses';
$img    = BASE_URL . BASE_FOLDER . $imgDir;
$obj    = BASE_URL . BASE_FOLDER . '/assets/images/objects';
$faqArt = BASE_URL . BASE_FOLDER . '/assets/images/faq-art.webp';

// Hero / CTA backgrounds: drop your own hero-bg.webp / cta-bg.webp into the folder above and they are used automatically.
$heroFile = file_exists(ROOT_PATH . $imgDir . '/hero-bg.webp') ? 'hero-bg.webp' : 'hero-bg.svg';
$ctaFile  = file_exists(ROOT_PATH . $imgDir . '/cta-bg.webp')  ? 'cta-bg.webp'  : 'cta-bg.svg';
?>

<!-- Shared inner-page theme (same look & animation set as index) -->
<link rel="stylesheet" href="<?= BASE_URL.BASE_FOLDER ?>/assets/css/inner-pages.css?v=<?= FILE_VERSISON ?>">

<main>

<!-- HERO -->
<header class="ip-hero">
    <img src="<?= $img ?>/<?= $heroFile ?>" alt="" class="ip-hero__bg" width="2300" height="795" fetchpriority="high">
    <div class="container ip-hero__content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <span class="ip-line ip-line--grow" style="margin: 0 0 1.5rem;"></span>
                <h1 data-aos="fade-right" data-aos-delay="150">Ready-Made<br><span class="ip-gold">Companies</span></h1>
                <p data-aos="fade-right" data-aos-delay="300">Launch your business immediately with our legally pre-incorporated shelf companies ready for seamless ownership transfer.</p>
                <a href="#contact" class="ip-btn" data-aos="fade-up" data-aos-delay="450">Get Started Now</a>
            </div>
        </div>
    </div>
</header>

<!-- INTRO + BENEFITS -->
<section class="ip-about ip-about--left">
    <div class="ip-float ip-float--a d-none d-md-block" style="top: 8%; right: 3%; width: 60px;"><img src="<?= $obj ?>/golden-square.png" alt=""></div>
    <div class="ip-float ip-float--b d-none d-md-block" style="bottom: 6%; left: 2%; width: 80px;"><img src="<?= $obj ?>/brown-ring.png" alt=""></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="ip-title">Immediate Corporate Presence</h2>
                <span class="ip-line"></span>
                <p>Launch your business immediately with our ready-made companies, also known as shelf companies. These pre-incorporated entities are legally established and ready for ownership transfer, allowing businesses to begin operations without the delays associated with a new company registration.</p>
                <p>Whether you are expanding internationally, opening a corporate bank account, applying for licenses, or entering new markets, our ready-made companies provide a fast, compliant, and cost-effective solution.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <article class="ip-card">
                    <h3 class="ip-card__title">Benefits</h3>
                    <span class="ip-card__divider"></span>
                    <div class="row">
                        <div class="col-md-6"><ul class="ip-check"><li>Immediate business availability</li><li>Faster market entry</li><li>Legally incorporated entities</li><li>Suitable for international investors</li><li>Simplified ownership transfer</li></ul></div>
                        <div class="col-md-6"><ul class="ip-check"><li>Supports bank account applications</li><li>Tax registration assistance</li><li>Regulatory compliance support</li><li>Experienced corporate advisory</li><li>Multiple jurisdictions available</li></ul></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- JURISDICTIONS -->
<section class="ip-suite" id="jurisdictions">
    <canvas class="ip-constellation" aria-hidden="true"></canvas>
    <div class="ip-float ip-float--c d-none d-md-block" style="bottom: 4%; left: 3%; width: 70px;"><img src="<?= $obj ?>/yellow-square.png" alt=""></div>
    <div class="container">
        <div class="ip-suite__head" data-aos="fade-up">
            <span class="ip-pill">Available Now</span>
            <h2 class="ip-title">Global Jurisdictions Available</h2>
            <p class="ip-sub">Explore our wide selection of pre-incorporated entities tailored across premier international trade and financial hubs.</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">India</h3>
                        <span class="ip-flag fi fi-in" role="img" aria-label="India flag"></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Acquire a pre-incorporated Indian company and start business operations immediately. Our shelf companies are fully compliant and ideal for domestic and international investors looking for a quick business setup.</p>
                    <p class="ip-tags-label">Ideal For:</p>
                    <ul class="ip-tags">
                        <li>IT Companies</li>
                        <li>Consulting Firms</li>
                        <li>Trading Businesses</li>
                        <li>Import &amp; Export</li>
                        <li>E-commerce</li>
                        <li>Manufacturing</li>
                        <li>Professional Services</li>
                    </ul>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Singapore</h3>
                        <span class="ip-flag fi fi-sg" role="img" aria-label="Singapore flag"></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Enter one of Asia's leading financial hubs with a Singapore shelf company. Our ready-made Singapore companies enable investors to establish operations quickly while benefiting from the country's business-friendly environment.</p>
                    <p class="ip-tags-label">Suitable For:</p>
                    <ul class="ip-tags">
                        <li>FinTech</li>
                        <li>Investment Holding</li>
                        <li>Trading</li>
                        <li>SaaS Companies</li>
                        <li>International Business</li>
                        <li>Asset Management</li>
                        <li>Family Offices</li>
                    </ul>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Hong Kong</h3>
                        <span class="ip-flag fi fi-hk" role="img" aria-label="Hong Kong flag"></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Expand into Asia with a Hong Kong ready-made company. These companies are ideal for international trade, holding structures, investment businesses, and cross-border commercial activities.</p>
                    <p class="ip-tags-label">Suitable For:</p>
                    <ul class="ip-tags">
                        <li>International Trading</li>
                        <li>Import &amp; Export</li>
                        <li>Investment Holding</li>
                        <li>Technology Companies</li>
                        <li>E-commerce</li>
                        <li>Supply Chain Businesses</li>
                    </ul>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">UAE</h3>
                        <span class="ip-flag fi fi-ae" role="img" aria-label="UAE flag"></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Start your business immediately in the UAE with a ready-made mainland or free zone company. Benefit from one of the world's fastest-growing business destinations while reducing setup time.</p>
                    <p class="ip-tags-label">Suitable For:</p>
                    <ul class="ip-tags">
                        <li>Trading</li>
                        <li>Consultancy</li>
                        <li>Real Estate</li>
                        <li>Tourism</li>
                        <li>Financial Services</li>
                        <li>Technology</li>
                        <li>Logistics</li>
                    </ul>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="120">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">UK</h3>
                        <span class="ip-flag fi fi-gb" role="img" aria-label="UK flag"></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Acquire a UK shelf company and begin trading without waiting for incorporation. UK companies offer international credibility and are widely used for global business expansion and investment.</p>
                    <p class="ip-tags-label">Suitable For:</p>
                    <ul class="ip-tags">
                        <li>Holding Companies</li>
                        <li>Consulting</li>
                        <li>E-commerce</li>
                        <li>International Trade</li>
                        <li>Software Companies</li>
                        <li>Financial Services</li>
                    </ul>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <article class="ip-card" itemscope itemtype="https://schema.org/Service">
                    <div class="ip-card__head">
                        <h3 class="ip-card__title" itemprop="name">Mauritius</h3>
                        <span class="ip-flag fi fi-mu" role="img" aria-label="Mauritius flag"></span>
                    </div>
                    <span class="ip-card__divider"></span>
                    <p class="ip-card__desc" itemprop="description">Mauritius is a preferred jurisdiction for international investment and wealth structuring. Our ready-made companies provide a fast solution for businesses seeking tax-efficient and globally recognized corporate structures.</p>
                    <p class="ip-tags-label">Suitable For:</p>
                    <ul class="ip-tags">
                        <li>Investment Funds</li>
                        <li>Holding Companies</li>
                        <li>Wealth Management</li>
                        <li>International Trading</li>
                        <li>Family Offices</li>
                        <li>Global Investments</li>
                    </ul>
                </article>
            </div>

        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="ip-cta" id="contact">
    <img src="<?= $img ?>/<?= $ctaFile ?>" alt="" class="ip-cta__bg" width="2300" height="795" loading="lazy">
    <div class="container ip-cta__content">
        <div class="row">
            <div class="col-lg-7 offset-lg-5" data-aos="fade-left">
                <h2 class="ip-title">Ready to Start Your Business Today?</h2>
                <p>Skip lengthy incorporation procedures and launch your business with a fully compliant ready-made company. Our specialists will guide you through entity selection, ownership transfer, banking support, and post-incorporation compliance to ensure a seamless experience.</p>
                <div class="d-flex flex-wrap justify-content-end gap-2"><a href="#contact" class="ip-btn ip-btn--pill">Get Started Now</a> <a href="mailto:info@devotionglobal.com" class="ip-btn ip-btn--pill ip-btn--ghost">Speak to a Specialist</a></div>
            </div>
        </div>
    </div>
</section>

</main>

<script src="<?= BASE_URL.BASE_FOLDER ?>/assets/js/inner-pages.js?v=<?= FILE_VERSISON ?>"></script>

<?php include ROOT_PATH . '/elements/footer.php'; ?>
