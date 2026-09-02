<!-- NEW STICKY WRAPPER CONTAINER -->
<div class="main-sticky-navigation">

    <?php 
    include ROOT_PATH . '/elements/header-top-belt.php';
    ?>

    <!-- Main Navigation Header (Removed sticky-top class from here) -->
    <header class="devotion-header bg-white border-bottom py-3">
        <div class="container-fluid px-lg-5">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
    
                <!-- Brand / Image Logo -->
                <a class="navbar-brand me-auto py-0" href="<?= BASE_URL ?>">
                    <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Devotion Global CSP" class="img-fluid brand-logo">
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#devotionNavbar" aria-controls="devotionNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links Wrapper -->
                <div class="collapse navbar-collapse flex-column align-items-end" id="devotionNavbar">
                  
                    <!-- Main Primary Navigation -->
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        
                        <!-- Main Navigation Items -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-gold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Solutions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/global-entity-management">Global Entity Management</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/accounting-tax">Accounting & TAX</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/fund-service">Fund Services</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/private-family-wealth">Private Wealth & Family Office</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/merger-acquisition">Merger & Acquisition</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/corporate-advisory">Corporate Advisory</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/banking-solution">Banking Solutions</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jurisdictions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore">Singapore</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/hongkong">Hong Kong</a></li>
                                <li><a class="dropdown-item" href="#">Moritius </a></li>
                                <li><a class="dropdown-item" href="#">India</a></li>
                                <li><a class="dropdown-item" href="#">UAE</a></li>
                                <li><a class="dropdown-item" href="#">UK</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?= BASE_URL ?>/offshore-jurisdictions">
                                Offshore Jurisdictions
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Licensing
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/forex-broker-license">Forex Broker License</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/crypto-currency-license">Crypto Currency License</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/payment-solution-license">Payment Solution License</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>/ready-made-licenses">Read-Made Licenses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>/our-client">Our Client</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Our Company
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/about-us">About Us</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/contact-us">Contact Us</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/faqs">FAQs</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown dropdown-hover ms-lg-2">
                            <a class="nav-link dropdown-toggle resources-pill-btn px-3" href="#" role="button" data-bs-toggle="dropdown">
                                Media & Resources
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-0">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="<?= BASE_URL ?>/news-insight">
                                        <i class="bi bi-newspaper text-gold"></i> News & Insights
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="<?= BASE_URL ?>/webinars">
                                        <i class="bi bi-camera-reels text-gold"></i> Webinars
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="<?= BASE_URL ?>/resources">
                                        <i class="bi bi-folder-symlink text-gold"></i> Resources
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>

</div> <!-- END NEW STICKY WRAPPER CONTAINER -->