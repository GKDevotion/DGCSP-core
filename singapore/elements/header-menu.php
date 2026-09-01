<!-- NEW STICKY WRAPPER CONTAINER -->
<div class="main-sticky-navigation">
    <!-- Top Contact & Announcement Belt -->
    <div class="top-bar-belt text-white">
        <div class="container-fluid px-lg-5">
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end flex-wrap gap-2 gap-lg-3 fs-7">
                
                <!-- Left Side Motto / Flag Badge -->
                <div class="me-auto d-none d-xl-flex align-items-center gap-2 border-divider-end pe-3">
                    <span class="fw-bold tracking-wide">Trust of Yours Since 2012</span>
                </div>

                <!-- Contact Links & Dropdowns -->
                <div class="d-flex align-items-center flex-wrap gap-2 gap-lg-3">
                    
                    <!-- Email 1 -->
                    <a href="mailto:sales@farahatco.com" class="belt-link">
                        <i class="bi bi-envelope-fill"></i>
                        <span class="d-none d-sm-inline">sales@farahatco.com</span>
                    </a>
                    <span class="belt-divider d-none d-sm-inline">|</span>

                    <!-- Phone 1 -->
                    <a href="tel:+97142500251" class="belt-link">
                        <i class="bi bi-telephone-fill"></i>
                        <span>+971 4 250 0251</span>
                    </a>
                    <span class="belt-divider">|</span>

                    <!-- Mobile Phone -->
                    <a href="tel:+971507869887" class="belt-link d-none d-sm-inline-flex">
                        <i class="bi bi-phone-fill"></i>
                        <span>+971 50 786 9887</span>
                    </a>
                    <span class="belt-divider d-none d-sm-inline">|</span>

                    <!-- WhatsApp Link -->
                    <a href="https://wa.me/971507869887" target="_blank" class="belt-link whatsapp-highlight">
                        <i class="bi bi-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                    <span class="belt-divider">|</span>

                    <!-- Language Dropdown (Hover Enabled) -->
                    <div class="dropdown belt-dropdown dropdown-hover">
                        <a href="#" class="btn btn-sm text-white dropdown-toggle p-0 border-0 shadow-none d-flex align-items-center gap-1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-globe"></i>
                            <span>English</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-0 py-1">
                            <li><a class="dropdown-item active fw-semibold" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">العربية (Arabic)</a></li>
                            <li><a class="dropdown-item" href="#">Français</a></li>
                            <li><a class="dropdown-item" href="#">Deutsch</a></li>
                        </ul>
                    </div>

                    <span class="belt-divider">|</span>

                    <style>
                        .jurisdiction-menu .fi {
                            border: 1px solid #b88a38;
                            font-size: 1rem;
                        }
                    </style>
                    <!-- Country / Jurisdiction Dropdown (Hover Enabled) -->
                    <div class="dropdown belt-dropdown dropdown-hover">
                        <a href="#" class="btn btn-sm text-white dropdown-toggle p-0 border-0 shadow-none d-flex align-items-center gap-1 fw-bold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-geo-alt-fill text-warning"></i>
                            <span>Country</span>
                        </a>
                        
                        <!-- Added 'dropdown-menu-end' class below -->
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-0 py-2 jurisdiction-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <span class="fi fi-sg rounded-1"></span>
                                    Singapore
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <span class="fi fi-hk rounded-1"></span>
                                    Hongkong
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <span class="fi fi-ae rounded-1"></span>
                                    UAE
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <span class="fi fi-gb rounded-1"></span>
                                    United Kingdom
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <span class="fi fi-in rounded-1"></span>
                                    India
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <span class="fi fi-mu rounded-1"></span>
                                    Mauritius
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <header class="devotion-header sticky-top bg-white border-bottom py-3">
        <div class="container-fluid px-lg-5">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
        
                <!-- Brand / Image Logo -->
                <a class="navbar-brand me-auto py-0" href="index.php">
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

                        <!-- Corporate Structure -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/corporate-structure" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Corporate Structure
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#setup-strategy">Company Setup Strategy</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#entity-type">Business Entity Type</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#14-steps">14 Steps to Register on LLC</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#offshore-company">OffShore Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#transfer-in">Company Transfer-IN</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#llp">Lilmited Liability Partnerships?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#holding-company">Registered in Holding Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#asian-holding">Asian Holding Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#global-lp">Global LP Holding Companies</a></li>
                            </ul>
                        </li>

                        <!-- Manufacturing -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/manufacturing" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Manufacturing
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/manufacturing#free-zones">Free Zones?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/manufacturing#compare-free-zones">Compare Free Zone Companies</a></li>
                            </ul>
                        </li>

                        <!-- Financial Services -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/financial-services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Financial Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#svf">Stored Value Facility</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#crypto-solution">Crypto Currency Solution</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#cms-license">CMS License?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#fintech-business">FinTech Businss?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#nft-business">NFT Business Setup</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#crypto-wallet">Crypto Wallet & Exchange Activity</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#resident-director">Resident Director</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#corporate-finance-query">Corporate Finance Solutions?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#sgx-listing">Listing on Stock Exchange?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#financial-company">Financial Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#crypto-solutions-adv">Crypto Currency Solutions</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#money-remittance">Money Remmittance Business</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#corporate-finance-solutions">Corporate Fianance Solutions</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Fees & Timeline
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Engagement Fees?</a></li>
                                <li><a class="dropdown-item" href="#">Timeslines?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cash Flow
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Government Incentives?</a></li>
                                <li><a class="dropdown-item" href="#">Family Aset companies?</a></li>
                                <li><a class="dropdown-item" href="#">Mercent Accounts?</a></li>
                                <li><a class="dropdown-item" href="#">E-Commerce Sales?</a></li>
                                <li><a class="dropdown-item" href="#">Market Penetration Stategies?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Business Setup
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Employeement & Residence Visa?</a></li>
                                <li><a class="dropdown-item" href="#">Human Resource Service?</a></li>
                                <li><a class="dropdown-item" href="#">Employee Considerations?</a></li>
                                <li><a class="dropdown-item" href="#">Virtual Office Services?</a></li>
                                <li><a class="dropdown-item" href="#">Find Office Premises?</a></li>
                                <li><a class="dropdown-item" href="#">Trademark Registration?</a></li>
                                <li><a class="dropdown-item" href="#">Enterpenuer Startup Guides?</a></li>
                                <li><a class="dropdown-item" href="#">Business Support Services?</a></li>
                                <li><a class="dropdown-item" href="#">LLC Transfer Solutions?</a></li>
                                <li><a class="dropdown-item" href="#">Ship Registration?</a></li>
                                <li><a class="dropdown-item" href="#">Company D-Registration?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown dropdown-hover ms-lg-2">
                            <a class="nav-link dropdown-toggle resources-pill-btn px-3" href="#" role="button" data-bs-toggle="dropdown">
                                Book Keeping
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Accounting & Tax</a></li>
                                <li><a class="dropdown-item" href="#">Legal Consideration</a></li>
                                <li><a class="dropdown-item" href="#">Tax Audit Services</a></li>
                                <li><a class="dropdown-item" href="#">Residence Sirector</a></li>
                                <li><a class="dropdown-item" href="#">WithHolding TAX</a></li>
                                <li><a class="dropdown-item" href="#">ASIA TAX Rates</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
</div>